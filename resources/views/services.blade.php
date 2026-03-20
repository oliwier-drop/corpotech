@extends('layouts.subpage')

@section('title', 'Usługi')

@section('meta_description', 'Oferta usług IT: cyberbezpieczeństwo, administracja systemów (Windows i Linux), strony internetowe, Smart Home oraz instalacje niskoprądowe i LAN. Sprawdź zakres.')
@section('meta_keywords', 'cyberbezpieczeństwo, audyty bezpieczeństwa, testy penetracyjne, phishing, ransomware, administracja systemów, administracja serwerów, Microsoft Windows, Linux, Active Directory, Exchange, Postfix, bazy danych, strony internetowe, SEO, hosting, Smart Home, automatyka domowa, instalacje niskoprądowe, okablowanie strukturalne, LAN, szafy RACK, patch panel')
@section('meta_title', 'Usługi - Corpotech')
@section('meta_image', asset('assets/images/logo/logo.png'))
@section('meta_og_image', asset('assets/images/logo/logo.png'))
@section('meta_robots', 'index, follow')

@section('content')
<section id="services"
    <div class="container mx-auto px-4">
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
                                Zapewniamy cyberbezpieczeństwo na każdym etapie: audyty bezpieczeństwa, wdrażanie zabezpieczeń sieciowych oraz ochronę przed phishingiem i ransomware. Pomagamy też przygotować organizację do reagowania na incydenty i utrzymać bezpieczeństwo środowiska IT.
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
                        <img alt="Cyberbezpieczeństwo - ochrona systemów i sieci" loading="lazy" width="647" height="486"
                            class="w-full rounded-xl object-cover shadow-2xl ring-1 ring-white/10"
                            style="color:transparent" src="{{ asset('assets/images/pictures/cybersecurity.jpg') }}">
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
                                Administrujemy infrastrukturą IT: instalujemy i konfigurujemy systemy operacyjne, serwery, bazy danych oraz elementy sieci. Prowadzimy bieżące utrzymanie, monitoring i optymalizacje, aby zapewnić stabilność, wydajność i bezpieczeństwo.
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
                        <img alt="Administracja systemów i serwerownia" loading="lazy" width="647" height="486"
                            class="w-full rounded-xl object-cover shadow-xl ring-1 ring-white/10"
                            style="color:transparent" src="{{ asset('assets/images/pictures/server-room.jpg') }}">
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
                                Tworzymy strony internetowe i serwisy WWW dopasowane do Twoich celów biznesowych. Realizujemy projektowanie, programowanie, hosting i utrzymanie, dbając o szybkość, bezpieczeństwo oraz wymagania SEO. Dzięki temu Twoja marka jest widoczna w wyszukiwarkach i gotowa na rozwój.
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
                        <img alt="Tworzenie stron internetowych" loading="lazy" width="646" height="485"
                            class="w-full rounded-xl object-cover shadow-2xl ring-1 ring-white/10"
                            style="color:transparent"
                            src="{{ asset('assets/images/pictures/websites.jpg') }}">
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
                                Projektujemy i wdrażamy inteligentne systemy Smart Home, które zwiększają komfort i bezpieczeństwo w domu oraz pomagają ograniczyć koszty energii. Umożliwiamy zdalne sterowanie oświetleniem, ogrzewaniem i monitoringiem oraz tworzymy automatyzacje dopasowane do codziennych nawyków.
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
                        <img alt="Systemy Smart Home - automatyka domowa" loading="lazy" width="647" height="486"
                            class="w-full rounded-xl object-cover shadow-xl ring-1 ring-white/10"
                            style="color:transparent" src="{{ asset('assets/images/pictures/smarthome.jpg') }}">
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
                                Realizujemy instalacje techniczne związane z automatyką domową: montaż i konfigurację urządzeń, przygotowanie okablowania oraz uruchomienie systemu. Wykonujemy instalacje tak, aby były niezawodne, estetyczne i gotowe do późniejszej rozbudowy Smart Home.
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
                        <img alt="Instalacje techniczne i montaż automatyki domowej" loading="lazy" width="646" height="485"
                            class="w-full rounded-xl object-cover shadow-2xl ring-1 ring-white/10"
                            style="color:transparent"
                            src="{{ asset('assets/images/pictures/installations.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
