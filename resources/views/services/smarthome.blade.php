@extends('layouts.subpage')

@section('title', 'Smart Home')
@section('breadcrumb_parent', 'Usługi')
@section('breadcrumb_parent_url', route('services'))

@section('meta_description', 'Projektujemy i wdrażamy systemy Smart Home (automatyka budynkowa), które zwiększają komfort i bezpieczeństwo w domu oraz pomagają ograniczyć koszty energii. Umożliwiamy zdalne sterowanie oświetleniem, ogrzewaniem i monitoringiem oraz tworzymy automatyzacje dopasowane do codziennych nawyków.')
@section('meta_keywords', 'Smart Home, automatyka budynkowa, zdalne sterowanie, oświetlenie, ogrzewanie, rolety, czujniki, powiadomienia, monitoring, oszczędność energii')
@section('meta_title', 'Smart Home - automatyka budynkowa')
@section('meta_image', asset('assets/images/pictures/smarthome.jpg'))

@section('meta_robots', 'index, follow')

@section('content')
<section id="description" class="py-12 sm:py-20">
    <div class="container mx-auto px-4">
        <!-- Title -->
        <p
            class="self-start inline font-sans text-xl font-medium text-brand">
            Smart Home
        </p>
        <h2 class="text-4xl font-bold text-white">Co dokładnie robimy?</h2>

        <div class="w-full h-full flex flex-col items-center md:py-4 py-10">
            <!-- Col - 2 -->
            <div
            class="xl:w-[80%] sm:w-[85%] w-[90%] mx-auto flex md:flex-row flex-col lg:gap-4 gap-2 justify-center lg:items-stretch md:items-center mt-4">
            <!--  -->
            <img class="md:w-[50%] w-full md:rounded-t-lg rounded-sm" src="{{ asset('assets/images/pictures/smarthome.jpg') }}" alt="Smart Home - automatyka budynkowa" />

            <div class="md:w-[50%] w-full bg-gradient-to-br from-brand-dark to-brand/60 p-4 rounded-md">
                <h2 class="text-3xl font-semibold text-white">Inteligentny dom, który działa w Twoim stylu</h2>
                <p class="text-md mt-4 text-gray-200">
                    Projektujemy i wdrażamy systemy Smart Home (automatyka budynkowa), które zwiększają komfort i bezpieczeństwo.
                    Tworzymy scenariusze na co dzień, umożliwiamy zdalne sterowanie oświetleniem, ogrzewaniem i roletami oraz integrujemy czujniki,
                    powiadomienia i monitoring, aby Twój dom reagował na sytuacje automatycznie.
                    Dodatkowo pomagamy ograniczać zużycie energii dzięki inteligentnemu zarządzaniu.
                </p>
            </div>

            </div>
            <!-- Col - 3 -->
            <div
            class="xl:w-[80%] sm:w-[85%] w-[90%] mx-auto flex md:flex-row flex-col flex-col-reverse lg:gap-4 gap-2 justify-center lg:items-stretch md:items-center mt-6">
            <!--  -->
            <div class="md:w-[50%] w-full bg-gradient-to-br from-brand/60 to-brand-dark p-4 rounded-md">
                <h2 class="text-3xl font-semibold text-white">Instalacja, konfiguracja i gotowe scenariusze</h2>

                <p class="text-md mt-4 text-gray-200">
                    Zajmujemy się instalacją i konfiguracją rozwiązań Smart Home tak, aby wszystko było stabilne, estetyczne i łatwe w obsłudze.
                    Dobieramy komponenty, uruchamiamy system, łączymy urządzenia i ustawiamy reguły działania (np. z harmonogramami).
                    Po wdrożeniu pomagamy dopracować scenariusze pod Twoje potrzeby oraz podpowiadamy, jak bezpiecznie korzystać z automatyki na co dzień.
                </p>
            </div>
            <!--  -->
            <img class="md:w-[50%] w-full md:rounded-t-lg rounded-sm" src="{{ asset('assets/images/pictures/smarthome-2.jpg') }}" alt="Smart Home - automatyka budynkowa" />

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
                        <circle cx="6" cy="12" r="2"></circle>
                        <circle cx="18" cy="6" r="2"></circle>
                        <circle cx="18" cy="18" r="2"></circle>
                        <path d="M8 11l8-4"></path>
                        <path d="M8 13l8 4"></path>
                    </svg>
                    <div class="space-y-2">
                            <h3 class="font-bold text-white">Projekt i dobór rozwiązań Smart Home</h3>
                            <p class="text-sm text-gray-200">Analizujemy potrzeby domowników i układ budynku, dobieramy urządzenia oraz planujemy scenariusze automatyzacji.</p>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg bg-gradient-to-br from-brand-dark to-brand/60 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6"><svg xmlns="http://www.w3.org/2000/svg"
                        width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="lucide text-brand">
                        <path d="M9 3v6"></path>
                        <path d="M15 3v6"></path>
                        <path d="M7 9h10"></path>
                        <rect x="8" y="9" width="8" height="7" rx="2"></rect>
                        <path d="M12 16v5"></path>
                    </svg>
                    <div class="space-y-2">
                            <h3 class="font-bold text-white">Instalacja, konfiguracja i uruchomienie</h3>
                            <p class="text-sm text-gray-200">Wykonujemy montaż automatyki domowej, konfigurujemy centrum sterowania i integrujemy urządzenia w jednym systemie. Uruchamiamy całość, ustawiamy reguły działania.</p>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg bg-brand-dark/60 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6"><svg xmlns="http://www.w3.org/2000/svg"
                        width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="lucide text-brand">
                        <rect x="8" y="2" width="8" height="20" rx="2"></rect>
                        <path d="M12 18h.01"></path>
                        <path d="M10.5 6.5h3"></path>
                        <path d="M10.5 9.5h3"></path>
                        <path d="M10.5 12.5h3"></path>
                    </svg>
                    <div class="space-y-2">
                            <h3 class="font-bold text-white">Zdalne sterowanie i automatyzacje</h3>
                            <p class="text-sm text-gray-200">Umożliwiamy sterowanie zdalne przez aplikację: oświetlenie, temperaturę, rolety i inne urządzenia. Tworzymy automatyzacje pod harmonogramy, aby Smart Home pracował za Ciebie.</p>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg bg-gradient-to-br from-brand-dark to-brand/60 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6"><svg xmlns="http://www.w3.org/2000/svg"
                        width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="lucide text-brand">
                        <path d="M12 2l8 4v6c0 5-3.5 9.5-8 10-4.5-.5-8-5-8-10V6l8-4z"></path>
                    </svg>
                    <div class="space-y-2">
                            <h3 class="font-bold text-white">Bezpieczeństwo i monitoring w domu</h3>
                            <p class="text-sm text-gray-200">Integrujemy czujniki i elementy powiadomień, a także monitoring zdarzeń. Dzięki alertom Smart Home może informować domowników o nietypowych sytuacjach i wspierać ochronę domu.</p>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg bg-brand-dark/60 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6"><svg xmlns="http://www.w3.org/2000/svg"
                        width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="lucide text-brand">
                        <path d="M21 3c-8 0-14 6-14 14 0 2 1 4 4 4 8 0 14-6 14-14 0-2-1-4-4-4z"></path>
                        <path d="M7 17l-4 4"></path>
                        <path d="M14 10c0 4-4 6-6 6"></path>
                    </svg>
                    <div class="space-y-2">
                            <h3 class="font-bold text-white">Oszczędność energii i komfort</h3>
                            <p class="text-sm text-gray-200">Pomagamy ograniczać zużycie energii dzięki inteligentnemu sterowaniu ogrzewaniem i oświetleniem oraz harmonogramom pracy urządzeń. Automatyzacje dopasowujemy do rytmu dnia.</p>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg bg-gradient-to-br from-brand-dark to-brand/60 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6"><svg xmlns="http://www.w3.org/2000/svg"
                        width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="lucide text-brand">
                        <path d="M20.5 12a4.5 4.5 0 0 0-8.5-2.5L5 16l3 3 6.5-7A4.5 4.5 0 0 0 20.5 12z"></path>
                        <path d="M16 6l2-2"></path>
                        <path d="M14 4l2 2"></path>
                    </svg>
                    <div class="space-y-2">
                        <h3 class="font-bold text-white">Serwis, rozbudowa i wsparcie</h3>
                        <p class="text-sm text-gray-200">Oferujemy serwis Smart Home, aktualizacje oraz wsparcie techniczne. Jeśli chcesz dodać kolejne urządzenia lub rozbudować system, przygotujemy rozszerzenie tak, aby całość nadal działała.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@if(isset($recentSmartHomePosts) && $recentSmartHomePosts->isNotEmpty())
<section id="last-smart-home">
    <div class="container mx-auto px-4">
        
        <h2 class="text-4xl font-bold text-white text-center">Nasze ostatnie realizacje</h2>
            <div class="mt-8 grid grid-cols-1 gap-8 lg:grid-cols-2 xl:grid-cols-3">
                @foreach($recentSmartHomePosts as $post)
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