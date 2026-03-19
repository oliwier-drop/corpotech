<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\RoleResource\Pages;
use App\Filament\Admin\Resources\RoleResource\RelationManagers;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleResource extends Resource
{
    protected static ?string $model = Role::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Administracja';

    protected static ?string $navigationLabel = 'Role';

    protected static ?string $modelLabel = 'Rola';

    protected static ?string $pluralModelLabel = 'Role';

    public static function canViewAny(): bool
    {
        return auth()->user()?->hasRole('admin') ?? false;
    }

    public static function canCreate(): bool
    {
        return static::canViewAny();
    }

    public static function canEdit($record): bool
    {
        return static::canViewAny();
    }

    public static function canDelete($record): bool
    {
        return static::canViewAny();
    }

    public static function canDeleteAny(): bool
    {
        return static::canViewAny();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),

                Select::make('permissions')
                    ->label('Uprawnienia')
                    ->multiple()
                    ->relationship('permissions', 'name')
                    ->preload()
                    ->searchable()
                    ->getOptionLabelFromRecordUsing(function (Permission $permission): string {
                        return match ($permission->name) {
                            'posts.view' => 'Artykuły: podgląd',
                            'posts.create' => 'Artykuły: tworzenie',
                            'posts.edit' => 'Artykuły: edycja',
                            'posts.delete' => 'Artykuły: usuwanie',

                            'users.view' => 'Użytkownicy: podgląd',
                            'users.create' => 'Użytkownicy: tworzenie',
                            'users.edit' => 'Użytkownicy: edycja',
                            'users.delete' => 'Użytkownicy: usuwanie',

                            'roles.view' => 'Role: podgląd',
                            'roles.create' => 'Role: tworzenie',
                            'roles.edit' => 'Role: edycja',
                            'roles.delete' => 'Role: usuwanie',

                            'permissions.view' => 'Uprawnienia: podgląd',
                            'permissions.create' => 'Uprawnienia: tworzenie',
                            'permissions.edit' => 'Uprawnienia: edycja',
                            'permissions.delete' => 'Uprawnienia: usuwanie',

                            'categories.view' => 'Kategorie usług: podgląd',
                            'categories.create' => 'Kategorie usług: tworzenie',
                            'categories.edit' => 'Kategorie usług: edycja',
                            'categories.delete' => 'Kategorie usług: usuwanie',
                            default => $permission->name,
                        };
                    }),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('guard_name')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRoles::route('/'),
            'create' => Pages\CreateRole::route('/create'),
            'edit' => Pages\EditRole::route('/{record}/edit'),
        ];
    }
}
