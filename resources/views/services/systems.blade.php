@extends('layouts.subpage')

@section('title', 'Administracja systemów')
@section('breadcrumb_parent', 'Usługi')
@section('breadcrumb_parent_url', route('services'))

@section('meta_description', 'Administrujemy infrastrukturą IT dla Twojej firmy: konfigurujemy i utrzymujemy systemy operacyjne, serwery oraz bazy danych, a także wspieramy usługi sieciowe. Dbamy o stabilność, wydajność i ciągłą dostępność kluczowych usług.')

@section('meta_keywords', 'administracja systemów, infrastruktura IT, systemy operacyjne, serwery, bazy danych, usługi sieciowe, stabilność, wydajność, ciągła dostępność, kluczowe usługi')

@section('meta_title', 'Administracja systemów - infrastruktura IT')

@section('meta_image', asset('assets/images/pictures/server-room.jpg'))

@section('meta_robots', 'index, follow')

@section('content')
<section id="description" class="py-12 sm:py-20">
    <div class="container mx-auto px-4">
        <!-- Title -->
        <p
            class="self-start inline font-sans text-xl font-medium text-brand">
            Administracja systemów
        </p>
        <h2 class="text-4xl font-bold text-white">Co dokładnie robimy?</h2>

        <div class="w-full h-full flex flex-col items-center md:py-4 py-10">
            <!-- Col - 2 -->
            <div
            class="xl:w-[80%] sm:w-[85%] w-[90%] mx-auto flex md:flex-row flex-col lg:gap-4 gap-2 justify-center lg:items-stretch md:items-center mt-4">
            <!--  -->
            <img class="md:w-[50%] w-full md:rounded-t-lg rounded-sm" src="{{ asset('assets/images/pictures/server-room.jpg') }}" alt="Administracja systemów - infrastruktura IT" />

            <div class="md:w-[50%] w-full bg-gradient-to-br from-brand-dark to-brand/60 p-4 rounded-md">
                <h2 class="text-3xl font-semibold text-white">Administracja serwerów i środowiska IT</h2>
                <p class="text-lg mt-4 text-gray-200">
                    Zarządzamy infrastrukturą IT dla Twojej firmy: konfigurujemy i utrzymujemy systemy operacyjne, serwery oraz bazy danych,
                    a także wspieramy usługi sieciowe. Dbamy o stabilność, wydajność i ciągłą dostępność kluczowych usług.
                    W ramach opieki wykonujemy monitoring, planowe aktualizacje i bieżące wsparcie techniczne.
                </p>
            </div>

            </div>
            <!-- Col - 3 -->
            <div
            class="xl:w-[80%] sm:w-[85%] w-[90%] mx-auto flex md:flex-row flex-col flex-col-reverse lg:gap-4 gap-2 justify-center lg:items-stretch md:items-center mt-6">
            <!--  -->
            <div class="md:w-[50%] w-full bg-gradient-to-br from-brand/60 to-brand-dark p-4 rounded-md">
                <h2 class="text-3xl font-semibold text-white">Bezpieczeństwo, kopie zapasowe i odtwarzanie</h2>

                <p class="text-lg mt-4 text-gray-200">
                    Realizujemy działania zwiększające bezpieczeństwo systemów: aktualizacje bezpieczeństwa, kontrolę dostępu i usprawnienia
                    odporności infrastruktury. Wdrażamy kopie zapasowe oraz testujemy szybkie odtwarzanie danych, aby ograniczyć skutki awarii
                    i zapewnić ciągłość działania w sytuacjach krytycznych.
                </p>
            </div>
            <!--  -->
            <img class="md:w-[50%] w-full md:rounded-t-lg rounded-sm" src="{{ asset('assets/images/pictures/server-room-2.jpg') }}" alt="Administracja systemów - infrastruktura IT" />

            </div>
        </div>
    </div>
</section>

<section id="features" class="space-y-6 py-12 sm:py-20">
    <div class="container mx-auto px-4">
    <div class="mx-auto flex max-w-[58rem] flex-col items-center space-y-4 text-center">
            <h2 class="text-4xl font-bold text-white mb-8">Zakres usług</h2>
        </div>
        <div class="mx-auto grid justify-center gap-4 sm:grid-cols-2 md:grid-cols-3">
            <div class="relative overflow-hidden rounded-lg bg-brand-dark/60 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6"><svg xmlns="http://www.w3.org/2000/svg"
                        width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="lucide text-brand">
                        <rect x="3" y="3" width="18" height="14" rx="2"></rect>
                        <path d="M7 21h10"></path>
                        <path d="M8 7h8"></path>
                        <path d="M8 11h5"></path>
                    </svg>
                    <div class="space-y-2">
                        <h3 class="font-bold text-white">Administracja systemami Windows i Linux</h3>
                        <p class="text-sm text-gray-200">Administrujemy systemami operacyjnymi Microsoft Windows oraz Linux, wykonujemy patchowanie i aktualizacje, a także instalujemy OS na maszynach wirtualnych.</p>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg bg-gradient-to-br from-brand-dark to-brand/60 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6"><svg xmlns="http://www.w3.org/2000/svg"
                        width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="lucide text-brand">
                        <path d="M3 12h4l2-5 3 10 2-5h7"></path>
                        <path d="M21 7l-2 2"></path>
                        <path d="M3 17l2-2"></path>
                    </svg>
                    <div class="space-y-2">
                        <h3 class="font-bold text-white">Ciągłość pracy serwerów i wydajność</h3>
                        <p class="text-sm text-gray-200">Utrzymujemy ciągłość działania serwerów i urządzeń mass storage. Prowadzimy stały monitoring zdarzeń, optymalizujemy wydajność, zapewniamy sprawność podstawowych usług.</p>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg bg-brand-dark/60 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6"><svg xmlns="http://www.w3.org/2000/svg"
                        width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="lucide text-brand">
                        <path d="M4 4h16v16H4z"></path>
                        <path d="M22 6l-10 7L2 6"></path>
                    </svg>
                    <div class="space-y-2">
                        <h3 class="font-bold text-white">Administracja usługami pocztowymi</h3>
                        <p class="text-sm text-gray-200">Administrowanie systemami pocztowymi (Exchange, Postfix): konfiguracja usług, utrzymanie sprawności poczty i skrzynek oraz dbanie o dostępność komunikacji w firmie.</p>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg bg-gradient-to-br from-brand-dark to-brand/60 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6"><svg xmlns="http://www.w3.org/2000/svg"
                        width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="lucide text-brand">
                        <ellipse cx="12" cy="5" rx="8" ry="3"></ellipse>
                        <path d="M4 5v14c0 1.7 3.6 3 8 3s8-1.3 8-3V5"></path>
                        <path d="M4 12c0 1.7 3.6 3 8 3s8-1.3 8-3"></path>
                    </svg>
                    <div class="space-y-2">
                        <h3 class="font-bold text-white">Administracja bazami danych</h3>
                        <p class="text-sm text-gray-200">Zarządzamy bazami danych MS SQL, MySQL i PostgreSQL. Wykonujemy konfigurację, aktualizacje i optymalizację wydajności, aby zapewnić stabilność środowiska.</p>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg bg-brand-dark/60 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6"><svg xmlns="http://www.w3.org/2000/svg"
                        width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="lucide text-brand">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M20 8v6"></path>
                        <path d="M23 11h-6"></path>
                    </svg>
                    <div class="space-y-2">
                        <h3 class="font-bold text-white">Active Directory i zarządzanie dostępem</h3>
                        <p class="text-sm text-gray-200">Zarządzamy usługami katalogowymi: Active Directory, serwerami plików oraz zasadami GPO. Tworzymy konta użytkowników, grupy i reguły, aby uporządkować uprawnienia.</p>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg bg-gradient-to-br from-brand-dark to-brand/60 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6"><svg xmlns="http://www.w3.org/2000/svg"
                        width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="lucide text-brand">
                        <path d="M21 12a9 9 0 1 1-2.6-6.4"></path>
                        <polyline points="21 3 21 8 16 8"></polyline>
                    </svg>
                    <div class="space-y-2">
                        <h3 class="font-bold text-white">Backup, migracje i odtwarzanie</h3>
                        <p class="text-sm text-gray-200">Konfigurujemy i monitorujemy backupy, zapewniamy odtwarzanie serwera z kopii zapasowej oraz procedury Disaster Recovery. Realizujemy migracje i wirtualizację.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@if(isset($recentSystemsPosts) && $recentSystemsPosts->isNotEmpty())
<section id="last-realizations">
    <div class="container mx-auto px-4">
        
        <h2 class="text-4xl font-bold text-white text-center">Nasze ostatnie realizacje</h2>
            <div class="mt-8 grid grid-cols-1 gap-8 lg:grid-cols-2 xl:grid-cols-3">
                @foreach($recentSystemsPosts as $post)
                    <a href="{{ route('post.show', ['slug' => $post->slug]) }}" class="group block overflow-hidden rounded-xl bg-brand-dark shadow-md transition-transform duration-300 hover:-translate-y-1 hover:shadow-xl">
                        <img
                            src="{{ $post->image_path ? asset('storage/' . $post->image_path) : asset('assets/images/team/placeholder.png') }}"
                            alt="{{ $post->title }}"
                            class="h-52 w-full object-cover">
                        <div class="p-6">
                            <span class="mb-3 inline-flex rounded-full bg-brand px-3 py-1 text-xs font-semibold uppercase tracking-wide text-white">
                                {{ $post->categories->pluck('name')->join(', ') ?: 'Bez kategorii' }}
                            </span>
                            <h3 class="mb-3 text-2xl font-bold leading-tight text-white transition-colors duration-200 group-hover:text-gray-200">
                                {{ $post->title }}
                            </h3>
                            <p class="mb-5 text-base leading-relaxed text-gray-200">
                                {{ $post->excerpt ?? \Illuminate\Support\Str::limit(strip_tags($post->content ?? ''), 160) }}
                            </p>
                            <div class="text-sm text-gray-200">
                                <span>Data: {{ $post->created_at?->format('Y-m-d') }}</span>
                                <span class="ml-3">Autor: {{ $post->author?->name }}</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
    </div>
</section>
@endif

@endsection