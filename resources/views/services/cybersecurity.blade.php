@extends('layouts.subpage')

@section('title', 'Cyberbezpieczeństwo')
@section('breadcrumb_parent', 'Usługi')
@section('breadcrumb_parent_url', route('services'))

@section('meta_description', 'Zapewniamy cyberbezpieczeństwo na każdym etapie: audyty bezpieczeństwa, wdrażanie zabezpieczeń sieciowych oraz ochronę przed phishingiem i ransomware. Pomagamy też przygotować organizację do reagowania na incydenty i utrzymać bezpieczeństwo środowiska IT.')

@section('meta_keywords', 'cyberbezpieczeństwo, ochrona systemów, ochrona danych, ochrona sieci, phishing, ransomware, incydenty, bezpieczeństwo IT, zabezpieczenia, monitoring, ochrona antywirusowa, plan disaster recovery, odporność na ransomware')

@section('meta_title', 'Cyberbezpieczeństwo - ochrona systemów i sieci')

@section('meta_image', asset('assets/images/pictures/cybersecurity.jpg'))

@section('meta_robots', 'index, follow')


@section('content')
<section id="description" class="py-12 sm:py-20">
    <div class="container mx-auto px-4">
        <!-- Title -->
        <p
            class="self-start inline font-sans text-xl font-medium text-brand">
            Cyberbezpieczeństwo
        </p>
        <h2 class="text-4xl font-bold text-white">Co dokładnie robimy?</h2>

        <div class="w-full h-full flex flex-col items-center md:py-4 py-10">
            <!-- Col - 2 -->
            <div
            class="xl:w-[80%] sm:w-[85%] w-[90%] mx-auto flex md:flex-row flex-col lg:gap-4 gap-2 justify-center lg:items-stretch md:items-center mt-4">
            <!--  -->
            <img class="md:w-[50%] w-full md:rounded-t-lg rounded-sm" src="{{ asset('assets/images/pictures/cybersecurity.jpg') }}" alt="Cyberbezpieczeństwo - ochrona systemów i sieci" />

            <div class="md:w-[50%] w-full bg-gradient-to-br from-brand-dark to-brand/60 p-4 rounded-md">
                <h2 class="text-3xl font-semibold text-white">Bezpieczeństwo Twojej infrastruktury IT</h2>
                <p class="text-lg mt-4 text-gray-200">
                    Pomagamy firmom ograniczać ryzyko cyberataków i chronić dane, systemy oraz sieć. Na początku diagnozujemy aktualny stan bezpieczeństwa,
                    identyfikujemy słabe punkty i określamy priorytety działań. Następnie wdrażamy odpowiednie zabezpieczenia oraz wspieramy organizację
                    w utrzymaniu bezpieczeństwa na co dzień.
                    Skupiamy się na praktycznym podejściu: porządkujemy ryzyka, zwiększamy odporność środowiska i budujemy proste zasady,
                    które pomagają zespołom działać bezpiecznie.
                </p>
            </div>

            </div>
            <!-- Col - 3 -->
            <div
            class="xl:w-[80%] sm:w-[85%] w-[90%] mx-auto flex md:flex-row flex-col flex-col-reverse lg:gap-4 gap-2 justify-center lg:items-stretch md:items-center mt-6">
            <!--  -->
            <div class="md:w-[50%] w-full bg-gradient-to-br from-brand/60 to-brand-dark p-4 rounded-md">
                <h2 class="text-3xl font-semibold text-white">Od diagnozy do ochrony i gotowości</h2>

                <p class="text-lg mt-4 text-gray-200">
                    Dbamy o to, żeby Twoje środowisko było nie tylko „zabezpieczone”, ale też przygotowane na incydenty i realne scenariusze zagrożeń.
                    Wspieramy w porządkowaniu zasad i procesów bezpieczeństwa oraz w podnoszeniu świadomości zespołu.
                    Dokładny zakres działań znajdziesz w sekcji poniżej „Zakres usług”.
                    Wspólnie wyznaczamy cele, planujemy wdrożenia krok po kroku i dbamy o to, aby bezpieczeństwo dało się utrzymać w firmie
                    bez chaosu i zbędnych utrudnień.
                </p>
            </div>
            <!--  -->
            <img class="md:w-[50%] w-full md:rounded-t-lg rounded-sm" src="{{ asset('assets/images/pictures/cybersecurity-2.jpg') }}" alt="Cyberbezpieczeństwo - ochrona systemów i sieci" />
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
                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check text-brand">
                        <path d="M12 2l8 4v6c0 5-3.5 9.5-8 10-4.5-.5-8-5-8-10V6l8-4z"></path>
                    </svg>
                    <div class="space-y-2">
                        <h3 class="font-bold text-white">Testy penetracyjne i audyty bezpieczeństwa</h3>
                        <p class="text-sm text-gray-200">Wykonujemy testy penetracyjne oraz audyty bezpieczeństwa systemów i sieci. Identyfikujemy podatności, analizujemy ryzyko i przygotowujemy raport z rekomendacjami.</p>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg bg-gradient-to-br from-brand-dark to-brand/60 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6"><svg xmlns="http://www.w3.org/2000/svg"
                        width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail-check text-brand">
                        <rect x="3" y="5" width="18" height="14" rx="2" ry="2"></rect>
                        <path d="M3 7l9 6 9-6"></path>
                    </svg>
                    <div class="space-y-2">
                        <h3 class="font-bold text-white">Szkolenia i symulacje phishingowe</h3>
                        <p class="text-sm text-gray-200">Prowadzimy szkolenia dla pracowników oraz symulacje phishingowe. Pomagamy budować nawyki bezpieczeństwa i ograniczać ryzyko skutecznych ataków socjotechnicznych.</p>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg bg-brand-dark/60 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6"><svg xmlns="http://www.w3.org/2000/svg"
                        width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-database-check text-brand">
                        <ellipse cx="12" cy="5" rx="8" ry="3"></ellipse>
                        <path d="M4 5v6c0 1.7 3.6 3 8 3s8-1.3 8-3V5"></path>
                        <path d="M4 11v6c0 1.7 3.6 3 8 3s8-1.3 8-3v-6"></path>
                    </svg>
                    <div class="space-y-2">
                        <h3 class="font-bold text-white">Kopie zapasowe i szybkie odtwarzanie danych</h3>
                        <p class="text-sm text-gray-200">Wdrażamy kopie zapasowe i procedury szybkiego odtwarzania danych. Testujemy restore, aby minimalizować czas przestoju po awarii i ograniczać skutki ransomware.</p>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg bg-gradient-to-br from-brand-dark to-brand/60 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6"><svg xmlns="http://www.w3.org/2000/svg"
                        width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lock-check text-brand">
                        <rect x="5" y="11" width="14" height="10" rx="2" ry="2"></rect>
                        <path d="M8 11V7a4 4 0 0 1 8 0v4"></path>
                    </svg>
                    <div class="space-y-2">
                        <h3 class="font-bold text-white">Polityki bezpieczeństwa i kontrola dostępu</h3>
                        <p class="text-sm text-gray-200">Tworzymy polityki bezpieczeństwa oraz wdrażamy kontrolę dostępu. Uporządkowujemy zasady i redukujemy ryzyko błędów oraz nieautoryzowanego dostępu.</p>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg bg-brand-dark/60 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6"><svg xmlns="http://www.w3.org/2000/svg"
                        width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye-check text-brand">
                        <path d="M2 12s4-7 10-7 10 7 10 7-4 7-10 7S2 12 2 12z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                    <div class="space-y-2">
                        <h3 class="font-bold text-white">Stały monitoring i ochrona antywirusowa</h3>
                        <p class="text-sm text-gray-200">Zapewniamy stały monitoring środowiska IT oraz ochronę antywirusową. Reagujemy na alerty i ograniczamy ryzyko infekcji, wycieku danych oraz złośliwego oprogramowania.</p>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg bg-gradient-to-br from-brand-dark to-brand/60 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6"><svg xmlns="http://www.w3.org/2000/svg"
                        width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw-check text-brand">
                        <path d="M21 12a9 9 0 1 1-2.6-6.4"></path>
                        <polyline points="21 3 21 8 16 8"></polyline>
                    </svg>
                    <div class="space-y-2">
                        <h3 class="font-bold text-white">Disaster Recovery i odporność na ransomware</h3>
                        <p class="text-sm text-gray-200">Wdrażamy plan Disaster Recovery i budujemy odporność na ransomware. Projektujemy proces odtwarzania po awarii, aby Twoja firma szybciej wracała do działania.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@if(isset($recentCybersecurityPosts) && $recentCybersecurityPosts->isNotEmpty())
<section id="last-realizations">
    <div class="container mx-auto px-4">
        
        <h2 class="text-4xl font-bold text-white text-center">Nasze ostatnie realizacje</h2>
            <div class="mt-8 grid grid-cols-1 gap-8 lg:grid-cols-2 xl:grid-cols-3">
                @foreach($recentCybersecurityPosts as $post)
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