<?php

namespace App\Filament\Admin\Widgets;

use Filament\Facades\Filament;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Get;
use Filament\Notifications\Notification;
use Filament\Widgets\Widget;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Rules\Password;

class UserAccountWidget extends Widget implements HasForms
{
    use InteractsWithForms;

    protected static ?int $sort = -3;

    protected static bool $isLazy = false;

    /**
     * @var view-string
     */
    protected static string $view = 'filament.admin.widgets.user-account-widget';

    /**
     * Livewire state for Filament form.
     *
     * @var array<string, mixed>|null
     */
    public ?array $data = [];

    public function mount(): void
    {
        $user = $this->getUser();

        // Nie wypełniamy pola hasła hash'em z bazy. Wypełniamy tylko dane do edycji.
        $this->form->fill([
            'name' => $user->name,
            'email' => $user->email,
            'emailConfirmation' => $user->email,
        ]);
    }

    protected function getUser(): Model
    {
        $user = Filament::auth()->user();

        if (! $user instanceof Model) {
            throw new \RuntimeException('Authenticated Filament user must be an Eloquent model.');
        }

        return $user;
    }

    protected function getFormModel(): ?Model
    {
        return $this->getUser();
    }

    protected function getFormStatePath(): string
    {
        return 'data';
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('name')
                ->label('Nazwa konta')
                ->required()
                ->maxLength(255),

            TextInput::make('email')
                ->label('Email')
                ->email()
                ->required()
                ->maxLength(255)
                ->unique(ignoreRecord: true),

            TextInput::make('emailConfirmation')
                ->label('Powtórz email')
                ->email()
                ->required()
                ->maxLength(255)
                ->same('email')
                ->dehydrated(false),

            TextInput::make('old_password')
                ->label('Stare hasło')
                ->password()
                ->revealable(Filament::arePasswordsRevealable())
                ->autocomplete('current-password')
                ->dehydrated(fn ($state): bool => filled($state))
                ->required(fn (Get $get): bool => filled($get('password'))),

            TextInput::make('password')
                ->label('Nowe hasło')
                ->password()
                ->revealable(Filament::arePasswordsRevealable())
                ->rule(Password::default())
                ->autocomplete('new-password')
                ->dehydrated(fn ($state): bool => filled($state))
                ->required(fn (Get $get): bool => filled($get('old_password')))
                ->live(debounce: 500),

            TextInput::make('passwordConfirmation')
                ->label('Powtórz nowe hasło')
                ->password()
                ->revealable(Filament::arePasswordsRevealable())
                ->visible(fn (Get $get): bool => filled($get('password')))
                ->dehydrated(false)
                ->required(fn (Get $get): bool => filled($get('password')))
                ->same('password'),
        ];
    }

    public function save(): void
    {
        $data = $this->form->getState();

        $user = $this->getUser();

        $oldEmail = $user->email;

        // Jeżeli użytkownik podał nowe hasło, wymagamy poprawnego starego hasła.
        if (filled($data['password'] ?? null)) {
            $oldPassword = $data['old_password'] ?? null;

            if (! filled($oldPassword) || ! Hash::check((string) $oldPassword, (string) $user->password)) {
                throw ValidationException::withMessages([
                    'old_password' => 'Stare hasło jest niepoprawne.',
                ]);
            }
        }

        // Usuń pola pomocnicze (potwierdzenia / stare hasło), które nie są fillable.
        $dataForUpdate = [
            'name' => $data['name'] ?? $user->name,
            'email' => $data['email'] ?? $user->email,
        ];

        // Jeśli user podał nowe hasło, zapisz je po weryfikacji starego.
        if (filled($data['password'] ?? null)) {
            $dataForUpdate['password'] = Hash::make((string) $data['password']);
        }

        $emailChanged = filled($dataForUpdate['email']) && ($dataForUpdate['email'] !== $oldEmail);

        $user->fill($dataForUpdate);

        // Jeśli email się zmienił, cofamy weryfikację i wysyłamy ponowne potwierdzenie.
        if ($emailChanged) {
            $user->forceFill(['email_verified_at' => null]);
        }

        $user->save();

        if ($emailChanged) {
            $user->sendEmailVerificationNotification();
        }

        Notification::make()
            ->success()
            ->title('Zapisano dane konta')
            ->send();

        $this->form->fill($user->attributesToArray());
    }
}

