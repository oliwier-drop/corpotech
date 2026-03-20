@extends('layouts.subpage')

@section('title', 'Instalacje techniczne')
@section('breadcrumb_parent', 'Usługi')
@section('breadcrumb_parent_url', route('services'))

@section('meta_description', 'Realizujemy instalacje techniczne związane z automatyką domową: montaż i konfigurację urządzeń, przygotowanie okablowania oraz uruchomienie systemu. Wykonujemy instalacje tak, aby były niezawodne, estetyczne i gotowe do późniejszej rozbudowy Smart Home.')
@section('meta_keywords', 'Instalacje techniczne, montaż automatyki domowej, przygotowanie okablowania, uruchomienie systemu, Smart Home')
@section('meta_title', 'Instalacje techniczne - montaż automatyki domowej')
@section('meta_image', asset('assets/images/pictures/installations.jpg'))

@section('meta_robots', 'index, follow')

@section('content')
<section id="description" class="py-12 sm:py-20">
    <div class="container mx-auto px-4">
        <!-- Title -->
        <p
            class="self-start inline font-sans text-xl font-medium text-brand">
            Instalacje techniczne
        </p>
        <h2 class="text-4xl font-bold text-white">Co dokładnie robimy?</h2>

        <div class="w-full h-full flex flex-col items-center md:py-4 py-10">
            <!-- Col - 2 -->
            <div
            class="xl:w-[80%] sm:w-[85%] w-[90%] mx-auto flex md:flex-row flex-col lg:gap-4 gap-2 justify-center lg:items-stretch md:items-center mt-4">
            <!--  -->
            <img class="md:w-[50%] w-full md:rounded-t-lg rounded-sm" src="{{ asset('assets/images/pictures/installations.jpg') }}" alt="Instalacje techniczne - montaż automatyki domowej" />

            <div class="md:w-[50%] w-full bg-gradient-to-br from-brand-dark to-brand/60 p-4 rounded-md">
                <h2 class="text-3xl font-semibold text-white">Instalacje niskoprądowe w firmach</h2>
                <p class="text-lg mt-4 text-gray-200">
                    Kładziemy okablowanie strukturalne i tworzymy solidną bazę pod infrastrukturę IT oraz systemy bezpieczeństwa.
                    Wykonujemy trasy kablowe, montujemy szafy RACK i patch panele, przygotowujemy punkty logiczne oraz uruchamiamy LAN
                    wraz z testami i pomiarami. Dzięki temu instalacja jest uporządkowana, przewidywalna i gotowa do dalszej rozbudowy.
                </p>
            </div>

            </div>
            <!-- Col - 3 -->
            <div
            class="xl:w-[80%] sm:w-[85%] w-[90%] mx-auto flex md:flex-row flex-col flex-col-reverse lg:gap-4 gap-2 justify-center lg:items-stretch md:items-center mt-6">
            <!--  -->
            <div class="md:w-[50%] w-full bg-gradient-to-br from-brand/60 to-brand-dark p-4 rounded-md">
                <h2 class="text-3xl font-semibold text-white">Konfiguracja, uruchomienie i systemy dostępu</h2>

                <p class="text-lg mt-4 text-gray-200">
                    Integrujemy instalacje niskoprądowe z systemami dostępu i konfigurujemy usługi pod potrzeby firmy.
                    Sprawdzamy działanie połączeń, wykonujemy testy oraz dopasowujemy ustawienia, aby całość działała stabilnie i bez zakłóceń.
                    Na koniec przekazujemy dokumentację i wspieramy w rozwoju infrastruktury, gdy firma będzie potrzebować zmian.
                </p>
            </div>
            <!--  -->
            <img class="md:w-[50%] w-full md:rounded-t-lg rounded-sm" src="{{ asset('assets/images/pictures/installations-2.jpg') }}" alt="Instalacje techniczne - montaż automatyki domowej" />

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
                        <rect x="3" y="7" width="18" height="13" rx="2"></rect>
                        <path d="M7 7l1.5-2h7L17 7"></path>
                        <circle cx="7.5" cy="13.5" r="1"></circle>
                        <circle cx="12" cy="13.5" r="1"></circle>
                        <circle cx="16.5" cy="13.5" r="1"></circle>
                    </svg>
                    <div class="space-y-2">
                        <h3 class="font-bold text-white">Instalacje niskopradowe i LAN</h3>
                        <p class="text-sm text-gray-200">Wykonujemy trasy kablowe, punkty logiczne, szafy RACK i patch panele oraz pelne uruchomienie sieci komputerowej wraz z pomiarami.</p>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg bg-gradient-to-br from-brand-dark to-brand/60 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6"><svg xmlns="http://www.w3.org/2000/svg"
                        width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="lucide text-brand">
                        <rect x="5" y="11" width="14" height="10" rx="2"></rect>
                        <path d="M9 11V7a3 3 0 0 1 6 0v4"></path>
                        <path d="M12 16v1"></path>
                    </svg>
                    <div class="space-y-2">
                        <h3 class="font-bold text-white">Kontrola dostepu</h3>
                        <p class="text-sm text-gray-200">Montujemy systemy KD: czytniki kart i brelokow, kontrolery, elektrozaczepy, zwory i zamki, wraz z nadawaniem uprawnien i harmonogramow.</p>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg bg-brand-dark/60 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6"><svg xmlns="http://www.w3.org/2000/svg"
                        width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="lucide text-brand">
                        <line x1="4" y1="21" x2="4" y2="14"></line>
                        <line x1="12" y1="21" x2="12" y2="10"></line>
                        <line x1="20" y1="21" x2="20" y2="6"></line>
                        <circle cx="4" cy="12" r="2"></circle>
                        <circle cx="12" cy="9" r="2"></circle>
                        <circle cx="20" cy="5" r="2"></circle>
                    </svg>
                    <div class="space-y-2">
                        <h3 class="font-bold text-white">Sterowniki i automatyka obiektowa</h3>
                        <p class="text-sm text-gray-200">Integrujemy sterowniki techniczne z infrastruktura budynku, konfigurujemy logike pracy oraz zdalny nadzor kluczowych urzadzen.</p>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg bg-gradient-to-br from-brand-dark to-brand/60 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6"><svg xmlns="http://www.w3.org/2000/svg"
                        width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="lucide text-brand">
                        <rect x="4" y="4" width="16" height="16" rx="2"></rect>
                        <path d="M9 15h6"></path>
                        <path d="M12 10v5"></path>
                    </svg>
                    <div class="space-y-2">
                        <h3 class="font-bold text-white">Bramy, szlabany i napedy</h3>
                        <p class="text-sm text-gray-200">Instalujemy i serwisujemy automatyke bram oraz szlabanow, laczac je z kontrola dostepu, pilotami, domofonami i czytnikami tablic.</p>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg bg-brand-dark/60 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6"><svg xmlns="http://www.w3.org/2000/svg"
                        width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="lucide text-brand">
                        <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                        <path d="M7 9h10"></path>
                        <circle cx="12" cy="14" r="2"></circle>
                    </svg>
                    <div class="space-y-2">
                        <h3 class="font-bold text-white">Czytniki, kontrolery i rejestracja</h3>
                        <p class="text-sm text-gray-200">Dobieramy i konfigurujemy urzadzenia dostepowe oraz systemy rejestracji zdarzen, aby zapewnic pelna kontrole wejsc i wyjsc w obiekcie.</p>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg bg-gradient-to-br from-brand-dark to-brand/60 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6"><svg xmlns="http://www.w3.org/2000/svg"
                        width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="lucide text-brand">
                        <path d="M14.5 7.5l2 2"></path>
                        <path d="M4 20l6.5-6.5"></path>
                        <path d="M13.5 10.5l6.5-6.5"></path>
                        <path d="M2 22l2-2"></path>
                        <circle cx="16" cy="8" r="2"></circle>
                    </svg>
                    <div class="space-y-2">
                        <h3 class="font-bold text-white">Utrzymanie, serwis i rozbudowa</h3>
                        <p class="text-sm text-gray-200">Zapewniamy diagnostyke, konserwacje i szybkie wsparcie techniczne oraz rozbudowe istniejacych instalacji o kolejne strefy i punkty dostepu.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@if(isset($recentInstallationPosts) && $recentInstallationPosts->isNotEmpty())
<section id="last-installations">
    <div class="container mx-auto px-4">
        
        <h2 class="text-4xl font-bold text-white text-center">Nasze ostatnie instalacje</h2>
            <div class="mt-8 grid grid-cols-1 gap-8 lg:grid-cols-2 xl:grid-cols-3">
                @foreach($recentInstallationPosts as $post)
                    <a href="{{ route('post.show', ['slug' => $post->slug]) }}" class="group block overflow-hidden rounded-xl bg-brand-dark/60 shadow-md transition-transform duration-300 hover:-translate-y-1 hover:shadow-xl">
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