@extends('layouts.subpage')

@section('title', 'Instalacje techniczne')
@section('breadcrumb_parent', 'Usługi')
@section('breadcrumb_parent_url', route('services'))

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
            <img class="md:w-[50%] w-full md:rounded-t-lg rounded-sm" src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHxob21lfGVufDB8MHx8fDE3MTA0OTAwNjl8MA&ixlib=rb-4.0.3&q=80&w=1080" alt="billboard image" />

            <div class="md:w-[50%] w-full bg-gradient-to-br from-brand-dark to-brand/60 p-4 rounded-md">
                <h2 class="text-3xl font-semibold text-white">Lorem ipsum dolor sit amet consectetur</h2>
                <p class="text-md mt-4 text-gray-200">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore placeat assumenda nam
                veritatis, magni doloremque pariatur quos fugit ipsa id voluptatibus deleniti officiis cum ratione eligendi
                sed necessitatibus aliquam error laborum delectus quaerat. Delectus hic error eligendi sed repellat natus fuga
                nobis tempora possimus ullam!</p>
            </div>

            </div>
            <!-- Col - 3 -->
            <div
            class="xl:w-[80%] sm:w-[85%] w-[90%] mx-auto flex md:flex-row flex-col flex-col-reverse lg:gap-4 gap-2 justify-center lg:items-stretch md:items-center mt-6">
            <!--  -->
            <div class="md:w-[50%] w-full bg-gradient-to-br from-brand/60 to-brand-dark p-4 rounded-md">
                <h2 class="text-3xl font-semibold text-white">Lorem ipsum dolor sit amet consectetur</h2>

                <p class="text-md mt-4 text-gray-200">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore placeat assumenda nam
                veritatis, magni doloremque pariatur quos fugit ipsa id voluptatibus deleniti officiis cum ratione eligendi
                sed necessitatibus aliquam error laborum delectus quaerat. Delectus hic error eligendi sed repellat natus fuga
                nobis tempora possimus ullam!</p>
            </div>
            <!--  -->
            <img class="md:w-[50%] w-full md:rounded-t-lg rounded-sm" src="https://images.unsplash.com/photo-1516455590571-18256e5bb9ff?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMXx8aG9tZXxlbnwwfDB8fHwxNzEwNDkwMDcwfDA&ixlib=rb-4.0.3&q=80&w=1080" alt="billboard image" />

            </div>
        </div>
    </div>
</section>

<section id="features" class="space-y-6 py-12 sm:py-20">
    <div class="container mx-auto px-4">
        <div class="mx-auto flex max-w-[58rem] flex-col items-center space-y-4 text-center">
            <h2 class="font-heading text-3xl font-bold leading-[1.1] text-white sm:text-3xl md:text-6xl">Zakres usług</h2>
        </div>
        <div class="mx-auto grid justify-center gap-4 sm:grid-cols-2 md:grid-cols-3">
            <div class="relative overflow-hidden rounded-lg bg-brand-dark/60 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6"><svg xmlns="http://www.w3.org/2000/svg"
                        width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-terminal text-brand">
                        <polyline points="4 17 10 11 4 5"></polyline>
                        <line x1="12" y1="19" x2="20" y2="19"></line>
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
                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-grid text-brand">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="3" y1="9" x2="21" y2="9"></line>
                        <line x1="3" y1="15" x2="21" y2="15"></line>
                        <line x1="9" y1="3" x2="9" y2="21"></line>
                        <line x1="15" y1="3" x2="15" y2="21"></line>
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
                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sliders-horizontal text-brand">
                        <line x1="21" y1="4" x2="14" y2="4"></line>
                        <line x1="10" y1="4" x2="3" y2="4"></line>
                        <line x1="21" y1="12" x2="12" y2="12"></line>
                        <line x1="8" y1="12" x2="3" y2="12"></line>
                        <line x1="21" y1="20" x2="16" y2="20"></line>
                        <line x1="12" y1="20" x2="3" y2="20"></line>
                        <line x1="14" y1="2" x2="14" y2="6"></line>
                        <line x1="8" y1="10" x2="8" y2="14"></line>
                        <line x1="16" y1="18" x2="16" y2="22"></line>
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
                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-minus text-brand">
                        <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="9" y1="15" x2="15" y2="15"></line>
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
                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-input text-brand">
                        <path d="M4 22h14a2 2 0 0 0 2-2V7.5L14.5 2H6a2 2 0 0 0-2 2v4"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <path d="M2 15h10"></path>
                        <path d="m9 18 3-3-3-3"></path>
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
                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-palette text-brand">
                        <circle cx="13.5" cy="6.5" r=".5"></circle>
                        <circle cx="17.5" cy="10.5" r=".5"></circle>
                        <circle cx="8.5" cy="7.5" r=".5"></circle>
                        <circle cx="6.5" cy="12.5" r=".5"></circle>
                        <path
                            d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h 1.996c3.051 0 5.555-2.503 5.555-5.554C21.965 6.012 17.461 2 12 2z">
                        </path>
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