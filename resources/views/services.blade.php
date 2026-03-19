@extends('layouts.subpage')

@section('title', 'Usługi')

@section('meta_description', 'Usługi')
@section('meta_keywords', 'Usługi')
@section('meta_robots', 'index, follow')

@section('content')
<section id="services"
    <div class="container mx-auto px-4 sm:px-6 lg:px-10">
    <div class="relative py-8 space-y-20">
        <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-16">
            <div class="max-w-xl lg:max-w-none">

                <div>
                    <div>
                        <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                class="h-8 w-8 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z">
                                </path>
                            </svg>
                        </span>
                    </div>

                    <div class="mt-6">
                        <h2 class="text-3xl font-bold tracking-tight text-white">
                        Cyberbezpieczeństwo
                        </h2>
                        <p class="mt-4 text-lg text-gray-300">
                            Oferujemy kompleksowe usługi w zakresie cyberbezpieczeństwa, obejmujące m.in. audyty bezpieczeństwa, wdrażanie zabezpieczeń sieciowych, ochronę przed atakami hakerskimi oraz szkolenia dla pracowników. Pomagamy chronić Twoje dane, infrastrukturę IT oraz zapewniamy bezpieczeństwo cyfrowe Twojej firmy.
                        </p>
                        <div class="mt-6">
                            <a class="inline-flex rounded-lg bg-brand px-4 py-1.5 text-base font-semibold leading-7 text-white shadow-sm ring-1 ring-brand transition hover:opacity-90"
                                href="{{ route('cybersecurity') }}">
                                Dowiedz się więcej
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="relative">
                    <img loading="lazy" width="647" height="486"
                        class="w-full rounded-xl object-cover shadow-2xl ring-1 ring-white/10"
                        style="color:transparent" src="https://images.unsplash.com/photo-1569144157591-c60f3f82f137">
                </div>
            </div>
        </div>
    </div>



    <div class="relative py-8 space-y-20">
        <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-16">
            <div class="max-w-xl lg:col-start-2 lg:max-w-none">
                <div>
                    <div>
                        <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                class="h-8 w-8 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z">
                                </path>
                            </svg>
                        </span>
                    </div>
                    <div class="mt-6">
                        <h2 class="text-3xl font-bold tracking-tight text-white">
                            Administracja systemów
                        </h2>
                        <p class="mt-4 text-lg text-gray-300">
                            Oferujemy kompleksowe usługi w zakresie administracji systemów, obejmujące m.in. instalację i konfigurację systemów operacyjnych, baz danych, serwerów oraz sieci. Pomagamy zarządzać Twoją infrastrukturą IT oraz zapewniamy stabilność i bezpieczeństwo Twojej firmy.
                        </p>
                        <div class="mt-6">
                            <a class="inline-flex rounded-lg bg-brand px-4 py-1.5 text-base font-semibold leading-7 text-white shadow-sm ring-1 ring-brand transition hover:opacity-90"
                                href="{{ route('systems') }}">
                                Dowiedz się więcej
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:row-start-1">
                <div class="relative">
                    <img alt="Inbox user interface" loading="lazy" width="647" height="486"
                        class="w-full rounded-xl object-cover shadow-xl ring-1 ring-white/10"
                        style="color:transparent" src="https://images.unsplash.com/photo-1599134842279-fe807d23316e">
                </div>
            </div>
        </div>
    </div>



    <div class="relative py-8 space-y-20">
        <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-16">
            <div class="max-w-xl lg:max-w-none">
                <div>
                    <div>
                        <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                class="h-8 w-8 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z">
                                </path>
                            </svg>
                        </span>
                    </div>
                    <div class="mt-6">
                        <h2 class="text-3xl font-bold tracking-tight text-white">
                            Strony internetowe
                        </h2>
                        <p class="mt-4 text-lg text-gray-300">
                            Oferujemy kompleksowe usługi w zakresie tworzenia stron internetowych, obejmujące m.in. projektowanie, programowanie, hosting oraz utrzymanie stron internetowych. Pomagamy zapewnić Twojej firmy obecność w Internecie oraz zwiększyć jej知名度.
                        </p>
                        <div class="mt-6">
                            <a class="inline-flex rounded-lg bg-brand px-4 py-1.5 text-base font-semibold leading-7 text-white shadow-sm ring-1 ring-brand transition hover:opacity-90"
                                href="{{ route('websites') }}">
                                Dowiedz się więcej
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="relative">
                    <img loading="lazy" width="646" height="485"
                        class="w-full rounded-xl object-cover shadow-2xl ring-1 ring-white/10"
                        style="color:transparent"
                        src="https://images.unsplash.com/photo-1483478550801-ceba5fe50e8e">
                </div>
            </div>
        </div>
    </div>

    <div class="relative py-8 space-y-20">
        <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-16">
            <div class="max-w-xl lg:col-start-2 lg:max-w-none">
                <div>
                    <div>
                        <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                class="h-8 w-8 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z">
                                </path>
                            </svg>
                        </span>
                    </div>
                    <div class="mt-6">
                        <h2 class="text-3xl font-bold tracking-tight text-white">
                            Smart Home
                        </h2>
                        <p class="mt-4 text-lg text-gray-300">
                            Oferujemy kompleksowe usługi w zakresie instalacji i konfiguracji systemów smart home, obejmujące m.in. instalację i konfigurację systemów smart home, baz danych, serwerów oraz sieci. Pomagamy zarządzać Twoją infrastrukturą IT oraz zapewniamy stabilność i bezpieczeństwo Twojej firmy.
                        </p>
                        <div class="mt-6">
                            <a class="inline-flex rounded-lg bg-brand px-4 py-1.5 text-base font-semibold leading-7 text-white shadow-sm ring-1 ring-brand transition hover:opacity-90"
                                href="{{ route('smarthome') }}">
                                Dowiedz się więcej
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:row-start-1">
                <div class="relative">
                    <img alt="Inbox user interface" loading="lazy" width="647" height="486"
                        class="w-full rounded-xl object-cover shadow-xl ring-1 ring-white/10"
                        style="color:transparent" src="https://images.unsplash.com/photo-1599134842279-fe807d23316e">
                </div>
            </div>
        </div>
    </div>

    <div class="relative py-8 space-y-20">
        <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-16">
            <div class="max-w-xl lg:max-w-none">
                <div>
                    <div>
                        <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                class="h-8 w-8 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z">
                                </path>
                            </svg>
                        </span>
                    </div>
                    <div class="mt-6">
                        <h2 class="text-3xl font-bold tracking-tight text-white">
                            Instalacje techniczne
                        </h2>
                        <p class="mt-4 text-lg text-gray-300">
                            Oferujemy kompleksowe usługi w zakresie instalacji i konfiguracji systemów smart home, obejmujące m.in. instalację i konfigurację systemów smart home, baz danych, serwerów oraz sieci. Pomagamy zarządzać Twoją infrastrukturą IT oraz zapewniamy stabilność i bezpieczeństwo Twojej firmy.
                        </p>
                        <div class="mt-6">
                            <a class="inline-flex rounded-lg bg-brand px-4 py-1.5 text-base font-semibold leading-7 text-white shadow-sm ring-1 ring-brand transition hover:opacity-90"
                                href="{{ route('installations') }}">
                                Dowiedz się więcej
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="relative">
                    <img loading="lazy" width="646" height="485"
                        class="w-full rounded-xl object-cover shadow-2xl ring-1 ring-white/10"
                        style="color:transparent"
                        src="https://images.unsplash.com/photo-1483478550801-ceba5fe50e8e">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
