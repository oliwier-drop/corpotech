@extends('layouts.subpage')

@section('title', 'Strony internetowe')
@section('breadcrumb_parent', 'Usługi')
@section('breadcrumb_parent_url', route('services'))

@section('meta_description', 'Tworzymy strony internetowe i serwisy WWW dopasowane do Twoich celów biznesowych. Realizujemy projektowanie, programowanie, hosting i utrzymanie, dbając o szybkość, bezpieczeństwo oraz wymagania SEO. Dzięki temu Twoja marka jest widoczna w wyszukiwarkach i gotowa na rozwój.')

@section('meta_keywords', 'strony internetowe, serwisy WWW, projektowanie, programowanie, hosting, utrzymanie, szybkość, bezpieczeństwo, SEO, widoczność w wyszukiwarkach, rozwój')

@section('meta_title', 'Strony internetowe - tworzenie stron internetowych')

@section('meta_image', asset('assets/images/pictures/websites.jpg'))

@section('meta_robots', 'index, follow')

@section('content')
<section id="description" class="py-12 sm:py-20">
    <div class="container mx-auto px-4">
        <!-- Title -->
        <p
            class="self-start inline font-sans text-xl font-medium text-brand">
            Strony internetowe
        </p>
        <h2 class="text-4xl font-bold text-white">Co dokładnie robimy?</h2>

        <div class="w-full h-full flex flex-col items-center md:py-4 py-10">
            <!-- Col - 2 -->
            <div
            class="xl:w-[80%] sm:w-[85%] w-[90%] mx-auto flex md:flex-row flex-col lg:gap-4 gap-2 justify-center lg:items-stretch md:items-center mt-4">
            <!--  -->
            <img class="md:w-[50%] w-full md:rounded-t-lg rounded-sm" src="{{ asset('assets/images/pictures/websites.jpg') }}" alt="Strony internetowe - tworzenie stron internetowych" />

            <div class="md:w-[50%] w-full bg-gradient-to-br from-brand-dark to-brand/60 p-4 rounded-md">
                <h2 class="text-3xl font-semibold text-white">Projektujemy strony WWW</h2>
                <p class="text-lg mt-4 text-gray-200">
                    Tworzymy nowoczesne strony internetowe i serwisy WWW, które są czytelne dla użytkowników i przyjazne dla wyszukiwarek.
                    Odpowiednio planujemy strukturę treści, stawiamy na szybkość i UX, a przy wdrożeniu dbamy o bezpieczeństwo oraz podstawy SEO.
                    Jeśli potrzebujesz, przygotujemy też hosting i konfigurację środowiska, aby strona działała stabilnie każdego dnia.
                </p>
            </div>

            </div>
            <!-- Col - 3 -->
            <div
            class="xl:w-[80%] sm:w-[85%] w-[90%] mx-auto flex md:flex-row flex-col flex-col-reverse lg:gap-4 gap-2 justify-center lg:items-stretch md:items-center mt-6">
            <!--  -->
            <div class="md:w-[50%] w-full bg-gradient-to-br from-brand/60 to-brand-dark p-4 rounded-md">
                <h2 class="text-3xl font-semibold text-white">Wdrożenie, hosting i utrzymanie</h2>

                <p class="text-lg mt-4 text-gray-200">
                    Realizujemy programowanie oraz wdrożenie strony, konfigurujemy hosting i dbamy o aktualizacje.
                    Później zapewniamy utrzymanie: poprawki, rozwój funkcji, monitorowanie działania oraz optymalizację wydajności.
                    Dzięki temu Twoja strona jest bezpieczna, szybka i gotowa na dalszy rozwój.
                </p>
            </div>
            <!--  -->
            <img class="md:w-[50%] w-full md:rounded-t-lg rounded-sm" src="{{ asset('assets/images/pictures/websites-2.jpg') }}" alt="Strony internetowe - tworzenie stron internetowych" />

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
                        <rect x="3" y="4" width="14" height="18" rx="2"></rect>
                        <path d="M21 12h-4"></path>
                        <path d="M7 8h6"></path>
                    </svg>
                    <div class="space-y-2">
                        <h3 class="font-bold text-white">Responsywne strony internetowe (RWD)</h3>
                        <p class="text-sm text-gray-200">Projektujemy i wdrażamy RWD: nasz kod i grafika są w pełni dopasowane do telefonów, tabletów i komputerów, tak aby strona wyglądała i działała świetnie na każdym urządzeniu.</p>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg bg-gradient-to-br from-brand-dark to-brand/60 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6"><svg xmlns="http://www.w3.org/2000/svg"
                        width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="lucide text-brand">
                        <path d="M3 3v18h18"></path>
                        <path d="M7 14l3-3 3 2 4-6"></path>
                        <circle cx="7" cy="14" r="1"></circle>
                        <circle cx="10" cy="11" r="1"></circle>
                        <circle cx="13" cy="13" r="1"></circle>
                        <circle cx="17" cy="7" r="1"></circle>
                    </svg>
                    <div class="space-y-2">
                        <h3 class="font-bold text-white">Optymalizacja strony internetowej</h3>
                        <p class="text-sm text-gray-200">Dopieszczamy wydajność i strukturę strony tak, aby była przyjazna dla algorytmów wyszukiwarki: szybkie ładowanie, poprawne indeksowanie i lepsza widoczność w Google.</p>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg bg-brand-dark/60 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6"><svg xmlns="http://www.w3.org/2000/svg"
                        width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="lucide text-brand">
                        <path d="M14.7 6.3a4 4 0 00-5.7 5.6l-6.1 6.1a2 2 0 102.8 2.8l6.1-6.1a4 4 0 005.6-5.7z"></path>
                        <path d="M8 12l4 4"></path>
                    </svg>
                    <div class="space-y-2">
                        <h3 class="font-bold text-white">Obsługa stron WWW</h3>
                        <p class="text-sm text-gray-200">Zapewniamy pełne wsparcie techniczne: aktualizujemy skrypty i kod strony, wprowadzamy zmiany zgodnie z życzeniem Klienta i dbamy o to, aby serwis działał stabilnie.</p>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg bg-gradient-to-br from-brand-dark to-brand/60 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6"><svg xmlns="http://www.w3.org/2000/svg"
                        width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="lucide text-brand">
                        <path d="M4 19.5A2.5 2.5 0 016.5 17H20"></path>
                        <path d="M9 17l-1.5-3.5L9 10"></path>
                        <path d="M14 3h6v6"></path>
                        <path d="M20 3l-8 8"></path>
                    </svg>
                    <div class="space-y-2">
                        <h3 class="font-bold text-white">Pisanie tekstów (Copywriting)</h3>
                        <p class="text-sm text-gray-200">Tworzymy profesjonalne teksty na strony internetowe: oferty, opisy usług i podstrony sprzedażowe. Jeśli chcesz, pomożemy dobrać słowa pod SEO i jasny komunikat do odbiorcy.</p>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg bg-brand-dark/60 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6"><svg xmlns="http://www.w3.org/2000/svg"
                        width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="lucide text-brand">
                        <circle cx="11" cy="11" r="7"></circle>
                        <path d="M21 21l-4.3-4.3"></path>
                        <path d="M7 11h8"></path>
                    </svg>
                    <div class="space-y-2">
                        <h3 class="font-bold text-white">Pozycjonowanie stron internetowych</h3>
                        <p class="text-sm text-gray-200">Pomagamy osiągać wyższe pozycje w Google i przyciągać większy ruch. Dzięki SEO Twoja strona staje się lepiej widoczna i generuje więcej zapytań.</p>
                    </div>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-lg bg-gradient-to-br from-brand-dark to-brand/60 p-2">
                <div class="flex h-[180px] flex-col justify-between rounded-md p-6"><svg xmlns="http://www.w3.org/2000/svg"
                        width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="lucide text-brand">
                        <path d="M9 11l3 3L22 4"></path>
                        <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                    </svg>
                    <div class="space-y-2">
                        <h3 class="font-bold text-white">Audyty stron i sklepów internetowych</h3>
                        <p class="text-sm text-gray-200">Analizujemy i oceniamy stronę lub sklep: wskazujemy problemy, proponujemy optymalizacje działania i poprawiamy elementy, które wpływają na widoczność w wyszukiwarkach.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@if(isset($recentWebsitePosts) && $recentWebsitePosts->isNotEmpty())
<section id="last-realizations">
    <div class="container mx-auto px-4">
        
        <h2 class="text-4xl font-bold text-white text-center">Nasze ostatnie realizacje</h2>
            <div class="mt-8 grid grid-cols-1 gap-8 lg:grid-cols-2 xl:grid-cols-3">
                @foreach($recentWebsitePosts as $post)
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