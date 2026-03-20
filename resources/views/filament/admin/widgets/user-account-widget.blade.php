@php
    $user = filament()->auth()->user();
    $roleNames = [];

    if (filled($user) && method_exists($user, 'getRoleNames')) {
        $roleNames = $user->getRoleNames()->all();
    }

    $roleLabel = filled($roleNames) ? implode(', ', $roleNames) : null;
@endphp

<x-filament-widgets::widget class="fi-user-account-widget">
    <x-filament::section>
        <div class="flex items-center gap-x-3">
            <x-filament-panels::avatar.user size="lg" :user="$user" />

            <div class="flex-1">
                <h2 class="grid flex-1 text-base font-semibold leading-6 text-gray-950 dark:text-white">
                    {{ filament()->getUserName($user) }}
                </h2>

                @if (filled($roleLabel))
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        {{ $roleLabel }}
                    </p>
                @endif
            </div>

            <form action="{{ filament()->getLogoutUrl() }}" method="post" class="my-auto">
                @csrf

                <x-filament::button
                    color="gray"
                    icon="heroicon-m-arrow-left-on-rectangle"
                    icon-alias="panels::widgets.account.logout-button"
                    labeled-from="sm"
                    tag="button"
                    type="submit"
                >
                    {{ __('filament-panels::layout.actions.logout.label') }}
                </x-filament::button>
            </form>
        </div>

        <div class="mt-6">
            <h3 class="text-sm font-semibold text-gray-950 dark:text-white">
                Edytuj dane konta
            </h3>

            <x-filament-panels::form wire:submit="save" id="account-form" class="mt-4">
                {{ $this->form }}

                <div class="flex items-center gap-x-3">
                    <x-filament::button type="submit" color="primary">
                        Zapisz zmiany
                    </x-filament::button>
                </div>
            </x-filament-panels::form>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>

