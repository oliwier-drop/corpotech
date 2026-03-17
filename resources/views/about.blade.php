@extends('layouts.subpage')

@section('title', 'O nas')
@section('description', 'Poznaj zespół Corpotech')  
@section('meta_description', 'O nas')
@section('meta_keywords', 'O nas')
@section('meta_robots', 'index, follow')

@section('content')

<section id="values" class="py-20 sm:py-32">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center">
            <p class="inline text-xl font-medium text-brand">
                Nasze wartości
            </p>
            <h2 class="mt-3 text-4xl font-bold text-gray-200">
                Co wyróżnia współpracę z nami
            </h2>
        </div>

        <div class="mt-12 grid gap-8 md:grid-cols-3">
            <div class="rounded-xl bg-gradient-to-br from-brand-dark to-brand/60 p-6 text-left shadow-xl">
                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-teal-400 shadow-lg shadow-teal-500/40">
                    <svg viewBox="0 0 33 46" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white">
                        <path
                            d="M24.75 23H8.25V28.75H24.75V23ZM32.3984 9.43359L23.9852 0.628906C23.5984 0.224609 23.0742 0 22.5242 0H22V11.5H33V10.952C33 10.3859 32.7852 9.83789 32.3984 9.43359ZM19.25 12.2188V0H2.0625C0.919531 0 0 0.961328 0 2.15625V43.8438C0 45.0387 0.919531 46 2.0625 46H30.9375C32.0805 46 33 45.0387 33 43.8438V14.375H21.3125C20.1781 14.375 19.25 13.4047 19.25 12.2188ZM5.5 6.46875C5.5 6.07164 5.80766 5.75 6.1875 5.75H13.0625C13.4423 5.75 13.75 6.07164 13.75 6.46875V7.90625C13.75 8.30336 13.4423 8.625 13.0625 8.625H6.1875C5.80766 8.625 5.5 8.30336 5.5 7.90625V6.46875ZM5.5 12.2188C5.5 11.8216 5.80766 11.5 6.1875 11.5H13.0625C13.4423 11.5 13.75 11.8216 13.75 12.2188V13.6562C13.75 14.0534 13.4423 14.375 13.0625 14.375H6.1875C5.80766 14.375 5.5 14.0534 5.5 13.6562V12.2188ZM27.5 39.5312C27.5 39.9284 27.1923 40.25 26.8125 40.25H19.9375C19.5577 40.25 19.25 39.9284 19.25 39.5312V38.0938C19.25 37.6966 19.5577 37.375 19.9375 37.375H26.8125C27.1923 37.375 27.5 37.6966 27.5 38.0938V39.5312ZM27.5 21.5625V30.1875C27.5 30.9817 26.8847 31.625 26.125 31.625H6.875C6.11531 31.625 5.5 30.9817 5.5 30.1875V21.5625C5.5 20.7683 6.11531 20.125 6.875 20.125H26.125C26.8847 20.125 27.5 20.7683 27.5 21.5625Z"
                            fill="white"></path>
                    </svg>
                </div>
                <h3 class="mt-6 text-lg font-semibold text-gray-100">Odpowiedzialne doradztwo</h3>
                <p class="mt-3 text-sm text-gray-300">
                    Zaczynamy od analizy potrzeb i ryzyk, a dopiero później dobieramy technologię. 
                    Rekomendujemy rozwiązania, które mają sens biznesowy, a nie tylko techniczny.
                </p>
            </div>

            <div class="rounded-xl bg-gradient-to-br from-brand-dark to-brand/60 p-6 text-left shadow-xl">
            <div class="flex h-12 w-12 items-center justify-center rounded-full bg-rose-500 shadow-lg shadow-rose-500/40">
                <svg
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-8 w-8 text-white"
                >
                    <path
                        d="M20.91 11.12C20.91 16.01 17.36 20.59 12.51 21.93C12.18 22.02 11.82 22.02 11.49 21.93C6.63996 20.59 3.08997 16.01 3.08997 11.12V6.72997C3.08997 5.90997 3.70998 4.97998 4.47998 4.66998L10.05 2.39001C11.3 1.88001 12.71 1.88001 13.96 2.39001L19.53 4.66998C20.29 4.97998 20.92 5.90997 20.92 6.72997L20.91 11.12Z"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    />
                </svg>
            </div>
                <h3 class="mt-6 text-lg font-semibold text-gray-100">Bezpieczeństwo w centrum</h3>
                <p class="mt-3 text-sm text-gray-300">
                    Cyberbezpieczeństwo traktujemy jako proces – projektujemy, wdrażamy i utrzymujemy rozwiązania,
                    które chronią infrastrukturę, dane i użytkowników.
                </p>
            </div>

            <div class="rounded-xl bg-gradient-to-br from-brand-dark to-brand/60 p-6 text-left shadow-xl">
                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-sky-500 shadow-lg shadow-sky-500/40">
                    <svg viewBox="0 0 55 44" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white">
                    <path
                        d="M8.25 19.25C11.2836 19.25 13.75 16.7836 13.75 13.75C13.75 10.7164 11.2836 8.25 8.25 8.25C5.21641 8.25 2.75 10.7164 2.75 13.75C2.75 16.7836 5.21641 19.25 8.25 19.25ZM46.75 19.25C49.7836 19.25 52.25 16.7836 52.25 13.75C52.25 10.7164 49.7836 8.25 46.75 8.25C43.7164 8.25 41.25 10.7164 41.25 13.75C41.25 16.7836 43.7164 19.25 46.75 19.25ZM49.5 22H44C42.4875 22 41.1211 22.6102 40.1242 23.5984C43.5875 25.4977 46.0453 28.9266 46.5781 33H52.25C53.7711 33 55 31.7711 55 30.25V27.5C55 24.4664 52.5336 22 49.5 22ZM27.5 22C32.8195 22 37.125 17.6945 37.125 12.375C37.125 7.05547 32.8195 2.75 27.5 2.75C22.1805 2.75 17.875 7.05547 17.875 12.375C17.875 17.6945 22.1805 22 27.5 22ZM34.1 24.75H33.3867C31.5992 25.6094 29.6141 26.125 27.5 26.125C25.3859 26.125 23.4094 25.6094 21.6133 24.75H20.9C15.4344 24.75 11 29.1844 11 34.65V37.125C11 39.4023 12.8477 41.25 15.125 41.25H39.875C42.1523 41.25 44 39.4023 44 37.125V34.65C44 29.1844 39.5656 24.75 34.1 24.75ZM14.8758 23.5984C13.8789 22.6102 12.5125 22 11 22H5.5C2.46641 22 0 24.4664 0 27.5V30.25C0 31.7711 1.22891 33 2.75 33H8.41328C8.95469 28.9266 11.4125 25.4977 14.8758 23.5984Z"
                        fill="white"></path>
                    </svg>
                </div>
                <h3 class="mt-6 text-lg font-semibold text-gray-100">Długofalowa współpraca</h3>
                <p class="mt-3 text-sm text-gray-300">
                    Nie zostawiamy Cię po wdrożeniu – zapewniamy opiekę, monitoring i rozwój środowiska 
                    wraz ze zmianami w Twojej organizacji.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="founders" class="py-20 sm:py-32">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center">
            <p class="inline text-xl font-medium text-brand">
                    Zespół
                </p>
            <h2 class="mt-3 text-4xl font-bold text-white">
                Założyciele Corpotech
            </h2>
        </div>

        <div class="mt-10 grid gap-8 lg:grid-cols-2">

            <article class="rounded-3xl bg-brand-dark/95 text-gray-100 shadow-xl overflow-hidden flex flex-col md:flex-row">
                <div class="md:w-2/5 bg-gray-200">
                    <img
                        src="{{ asset('assets/images/team/placeholder.png') }}"
                        alt="Robert Smarzyński"
                        class="h-full w-full object-cover"
                        loading="lazy"
                    >
                </div>
                <div class="md:w-3/5 p-6 md:p-8 flex flex-col justify-between gap-6">
                    <div>
                        <h3 class="text-2xl font-bold tracking-tight text-white">
                            Robert Smarzyński
                        </h3>
                        <p class="mt-1 text-xs font-semibold uppercase tracking-[0.2em] text-gray-400">
                            Co‑Founder &amp; CEO
                        </p>
                        <p class="mt-4 text-sm md:text-base leading-relaxed text-gray-300">
                            Współzałożyciel Corpotech z ponad 20‑letnim doświadczeniem w zarządzaniu infrastrukturą IT
                            i projektami technologicznymi. Skupia się na bezpieczeństwie, ciągłości działania oraz
                            realnym wsparciu firm w codziennej pracy.
                        </p>
                    </div>
                    <div>
                        <a href="https://www.linkedin.com/in/robert-smarzy%C5%84ski-1865772b1/" target="_blank" class="inline-flex items-center text-sm font-semibold text-white hover:text-gray-300">
                            <span class="sr-only">Profil LinkedIn Roberta Smarzyńskiego</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                                <path d="M4.98 3.5C4.98 4.88 3.9 6 2.5 6S0 4.88 0 3.5 1.08 1 2.5 1s2.48 1.12 2.48 2.5zM.32 8.16H4.7V24H.32V8.16zM8.09 8.16h4.18v2.15h.06c.58-1.1 2-2.26 4.11-2.26 4.4 0 5.21 2.9 5.21 6.67V24h-4.38v-7.73c0-1.84-.03-4.21-2.57-4.21-2.57 0-2.97 2.01-2.97 4.08V24H8.09V8.16z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </article>

            <article class="rounded-3xl bg-brand-dark/95 text-gray-100 shadow-xl overflow-hidden flex flex-col md:flex-row">
                <div class="md:w-2/5 bg-gray-200">
                    <img
                        src="{{ asset('assets/images/team/placeholder.png') }}"
                        alt="Amanda Stodolna"
                        class="h-full w-full object-cover"
                        loading="lazy"
                    >
                </div>
                <div class="md:w-3/5 p-6 md:p-8 flex flex-col justify-between gap-6">
                    <div>
                        <h3 class="text-2xl font-bold tracking-tight text-white">
                            Amanda Stodolna
                        </h3>
                        <p class="mt-1 text-xs font-semibold uppercase tracking-[0.2em] text-gray-400">
                            Co‑Founder &amp; CFO
                        </p>
                        <p class="mt-4 text-sm md:text-base leading-relaxed text-gray-300">
                            Współzałożycielka Corpotech, specjalistka ds. administracji i księgowości. Odpowiada za sprawne funkcjonowanie procesów biurowych oraz nadzór nad finansami firmy, dbając o przejrzystość i bezpieczeństwo działań organizacji.
                        </p>
                    </div>
                    <div>
                        <a href="https://www.linkedin.com/in/amanda-stodolna/" target="_blank" class="inline-flex items-center text-sm font-semibold text-white hover:text-gray-300">
                            <span class="sr-only">Profil LinkedIn Amanda Stodolnej</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                                <path d="M4.98 3.5C4.98 4.88 3.9 6 2.5 6S0 4.88 0 3.5 1.08 1 2.5 1s2.48 1.12 2.48 2.5zM.32 8.16H4.7V24H.32V8.16zM8.09 8.16h4.18v2.15h.06c.58-1.1 2-2.26 4.11-2.26 4.4 0 5.21 2.9 5.21 6.67V24h-4.38v-7.73c0-1.84-.03-4.21-2.57-4.21-2.57 0-2.97 2.01-2.97 4.08V24H8.09V8.16z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>

<section id="our-team" class="py-20 sm:py-32">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl leading-normal font-extrabold tracking-tight text-white">
                Poznaj nasz zespół
            </h2>
        </div>

        <div class="team-carousel">
            <div class="overflow-hidden">
                <div class="team-carousel-track js-team-carousel-track">
                <article class="team-carousel-card text-center">
                    <a href="https://www.linkedin.com/in/marcin-szyma%C5%84ski-b14110312/">
                        <img src="{{ asset('assets/images/team/placeholder.png') }}" alt="Marcin Szymański" class="mb-3 rounded-xl mx-auto h-64 w-64">
                    </a>
                    <p class="text-2xl text-white font-semibold">Marcin Szymański</p>
                    <p class="text-lg text-brand uppercase">IT Specialist</p>
                    <div class="my-4 flex justify-center items-center">
                        <a href="https://www.linkedin.com/in/marcin-szyma%C5%84ski-b14110312/" target="_blank" class="inline-flex items-center text-sm font-semibold text-white hover:text-gray-300">
                            <span class="sr-only">Profil LinkedIn Marcina Szymańskiego</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                                <path d="M4.98 3.5C4.98 4.88 3.9 6 2.5 6S0 4.88 0 3.5 1.08 1 2.5 1s2.48 1.12 2.48 2.5zM.32 8.16H4.7V24H.32V8.16zM8.09 8.16h4.18v2.15h.06c.58-1.1 2-2.26 4.11-2.26 4.4 0 5.21 2.9 5.21 6.67V24h-4.38v-7.73c0-1.84-.03-4.21-2.57-4.21-2.57 0-2.97 2.01-2.97 4.08V24H8.09V8.16z"/>
                            </svg>
                        </a>
                    </div>
                </article>

                <article class="team-carousel-card text-center">
                    <a href="https://www.linkedin.com/in/norbert-talentowski/">
                        <img src="{{ asset('assets/images/team/placeholder.png') }}" alt="Norbert Talentowski" class="mb-3 rounded-xl mx-auto h-64 w-64">
                    </a>
                    <p class="text-2xl text-white font-semibold">Norbert Talentowski</p>
                    <p class="text-lg text-brand uppercase">Technical Project Engineer</p>
                    <div class="my-4 flex justify-center items-center">
                        <a href="https://www.linkedin.com/in/norbert-talentowski/" target="_blank" class="inline-flex items-center text-sm font-semibold text-white hover:text-gray-300">
                            <span class="sr-only">Profil LinkedIn Norberta Talentowskiego</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                                <path d="M4.98 3.5C4.98 4.88 3.9 6 2.5 6S0 4.88 0 3.5 1.08 1 2.5 1s2.48 1.12 2.48 2.5zM.32 8.16H4.7V24H.32V8.16zM8.09 8.16h4.18v2.15h.06c.58-1.1 2-2.26 4.11-2.26 4.4 0 5.21 2.9 5.21 6.67V24h-4.38v-7.73c0-1.84-.03-4.21-2.57-4.21-2.57 0-2.97 2.01-2.97 4.08V24H8.09V8.16z"/>
                            </svg>
                        </a>
                    </div>
                </article>

                <article class="team-carousel-card text-center">
                    <a href="https://www.linkedin.com/in/natalia-smarzy%C5%84ska/">
                        <img src="{{ asset('assets/images/team/placeholder.png') }}" alt="Natalia Smarzyńska" class="mb-3 rounded-xl mx-auto h-64 w-64">
                    </a>
                    <p class="text-2xl text-white font-semibold">Natalia Smarzyńska</p>
                    <p class="text-lg text-brand uppercase">Operations Manager</p>
                    <div class="my-4 flex justify-center items-center">
                        <a href="https://www.linkedin.com/in/natalia-smarzy%C5%84ska/" target="_blank" class="inline-flex items-center text-sm font-semibold text-white hover:text-gray-300">
                            <span class="sr-only">Profil LinkedIn Natalii Smarzyńskiej</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                                <path d="M4.98 3.5C4.98 4.88 3.9 6 2.5 6S0 4.88 0 3.5 1.08 1 2.5 1s2.48 1.12 2.48 2.5zM.32 8.16H4.7V24H.32V8.16zM8.09 8.16h4.18v2.15h.06c.58-1.1 2-2.26 4.11-2.26 4.4 0 5.21 2.9 5.21 6.67V24h-4.38v-7.73c0-1.84-.03-4.21-2.57-4.21-2.57 0-2.97 2.01-2.97 4.08V24H8.09V8.16z"/>
                            </svg>
                        </a>
                    </div>
                </article>

                <article class="team-carousel-card text-center">
                    <a href="https://www.linkedin.com/in/oliwier-drop/">
                        <img src="{{ asset('assets/images/team/placeholder.png') }}" alt="Oliwier Drop" class="mb-3 rounded-xl mx-auto h-64 w-64">
                    </a>
                    <p class="text-2xl text-white font-semibold">Oliwier Drop</p>
                    <p class="text-lg text-brand uppercase">IT Specialist</p>
                    <div class="my-4 flex justify-center items-center">
                        <a href="https://www.linkedin.com/in/oliwier-drop/" target="_blank" class="inline-flex items-center text-sm font-semibold text-white hover:text-gray-300">
                            <span class="sr-only">Profil LinkedIn Oliwiera Dropa</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                                <path d="M4.98 3.5C4.98 4.88 3.9 6 2.5 6S0 4.88 0 3.5 1.08 1 2.5 1s2.48 1.12 2.48 2.5zM.32 8.16H4.7V24H.32V8.16zM8.09 8.16h4.18v2.15h.06c.58-1.1 2-2.26 4.11-2.26 4.4 0 5.21 2.9 5.21 6.67V24h-4.38v-7.73c0-1.84-.03-4.21-2.57-4.21-2.57 0-2.97 2.01-2.97 4.08V24H8.09V8.16z"/>
                            </svg>
                        </a>
                    </div>
                </article>

                <article class="team-carousel-card text-center">
                    <a href="#">
                        <img src="{{ asset('assets/images/team/placeholder.png') }}" alt="Artur Wolicki" class="mb-3 rounded-xl mx-auto h-64 w-64">
                    </a>
                    <p class="text-2xl text-white font-semibold">Artur Wolicki</p>
                    <p class="text-lg text-brand uppercase">IT Infrastructure Specialist</p>
                    <div class="my-4 flex justify-center items-center">
                        <a href="#" class="inline-flex items-center text-sm font-semibold text-white hover:text-gray-300">
                            <span class="sr-only">Profil LinkedIn Artura Wolickiego</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                                <path d="M4.98 3.5C4.98 4.88 3.9 6 2.5 6S0 4.88 0 3.5 1.08 1 2.5 1s2.48 1.12 2.48 2.5zM.32 8.16H4.7V24H.32V8.16zM8.09 8.16h4.18v2.15h.06c.58-1.1 2-2.26 4.11-2.26 4.4 0 5.21 2.9 5.21 6.67V24h-4.38v-7.73c0-1.84-.03-4.21-2.57-4.21-2.57 0-2.97 2.01-2.97 4.08V24H8.09V8.16z"/>
                            </svg>
                        </a>
                    </div>
                </article>

                <article class="team-carousel-card text-center">
                    <a href="https://www.linkedin.com/in/aji54bxz1asfw/">
                        <img src="{{ asset('assets/images/team/placeholder.png') }}" alt="Adam Juszczak" class="mb-3 rounded-xl mx-auto h-64 w-64">
                    </a>
                    <p class="text-2xl text-white font-semibold">Adam Juszczak</p>
                    <p class="text-lg text-brand uppercase">IT Infrastructure Technician</p>
                    <div class="my-4 flex justify-center items-center">
                        <a href="https://www.linkedin.com/in/aji54bxz1asfw/" target="_blank" class="inline-flex items-center text-sm font-semibold text-white hover:text-gray-300">
                            <span class="sr-only">Profil LinkedIn Adama Juszczaka</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                                <path d="M4.98 3.5C4.98 4.88 3.9 6 2.5 6S0 4.88 0 3.5 1.08 1 2.5 1s2.48 1.12 2.48 2.5zM.32 8.16H4.7V24H.32V8.16zM8.09 8.16h4.18v2.15h.06c.58-1.1 2-2.26 4.11-2.26 4.4 0 5.21 2.9 5.21 6.67V24h-4.38v-7.73c0-1.84-.03-4.21-2.57-4.21-2.57 0-2.97 2.01-2.97 4.08V24H8.09V8.16z"/>
                            </svg>
                        </a>
                    </div>
                </article>
                </div>
            </div>

            <div class="mt-8 flex justify-center items-center gap-3">
                <button type="button" class="team-carousel-dot is-active" data-slide-index="0" aria-label="Przejdź do osoby 1"></button>
                <button type="button" class="team-carousel-dot" data-slide-index="1" aria-label="Przejdź do osoby 2"></button>
                <button type="button" class="team-carousel-dot" data-slide-index="2" aria-label="Przejdź do osoby 3"></button>
                <button type="button" class="team-carousel-dot" data-slide-index="3" aria-label="Przejdź do osoby 4"></button>
                <button type="button" class="team-carousel-dot" data-slide-index="4" aria-label="Przejdź do osoby 5"></button>
                <button type="button" class="team-carousel-dot" data-slide-index="5" aria-label="Przejdź do osoby 6"></button>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const carousel = document.querySelector('#our-team .team-carousel');
        if (!carousel) return;

        const track = carousel.querySelector('.js-team-carousel-track');
        const dots = Array.from(carousel.querySelectorAll('.team-carousel-dot'));
        if (!track || dots.length === 0) return;

        const baseSlides = Array.from(track.children).map((slide) => slide.cloneNode(true));
        const totalSlides = baseSlides.length;
        const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        let visibleCards = 1;
        let currentIndex = 0;
        let timer = null;
        let resizeTimer = null;

        function getVisibleCards() {
            if (window.innerWidth >= 1024) return 4;
            if (window.innerWidth >= 768) return 3;
            if (window.innerWidth >= 640) return 2;
            return 1;
        }

        function getCardWidthWithGap() {
            const firstCard = track.querySelector('.team-carousel-card');
            if (!firstCard) return 0;
            const styles = window.getComputedStyle(track);
            const gap = parseFloat(styles.columnGap || styles.gap || '0');
            return firstCard.getBoundingClientRect().width + gap;
        }

        function sanitizeClone(slide) {
            slide.setAttribute('aria-hidden', 'true');
            slide.querySelectorAll('a, button, input, select, textarea, [tabindex]').forEach((node) => {
                node.setAttribute('tabindex', '-1');
            });
            return slide;
        }

        function getRealIndex() {
            return ((currentIndex - visibleCards) % totalSlides + totalSlides) % totalSlides;
        }

        function updateDots() {
            const active = getRealIndex();
            dots.forEach((dot, index) => {
                dot.classList.toggle('is-active', index === active);
            });
        }

        function moveToCurrent(animate) {
            track.style.transition = animate ? 'transform 450ms ease' : 'none';
            track.style.transform = 'translateX(' + (-currentIndex * getCardWidthWithGap()) + 'px)';
            updateDots();
        }

        function rebuild(activeIndex) {
            visibleCards = getVisibleCards();
            track.innerHTML = '';

            const prepend = baseSlides.slice(-visibleCards).map((slide) => sanitizeClone(slide.cloneNode(true)));
            const append = baseSlides.slice(0, visibleCards).map((slide) => sanitizeClone(slide.cloneNode(true)));

            prepend.forEach((slide) => track.appendChild(slide));
            baseSlides.forEach((slide) => track.appendChild(slide.cloneNode(true)));
            append.forEach((slide) => track.appendChild(slide));

            currentIndex = visibleCards + activeIndex;
            moveToCurrent(false);
        }

        function goNext() {
            currentIndex += 1;
            moveToCurrent(true);
        }

        function stopAutoplay() {
            if (!timer) return;
            window.clearInterval(timer);
            timer = null;
        }

        function startAutoplay() {
            if (reducedMotion) return;
            stopAutoplay();
            timer = window.setInterval(goNext, 3000);
        }

        dots.forEach((dot) => {
            dot.addEventListener('click', function () {
                const index = Number(dot.getAttribute('data-slide-index'));
                if (Number.isNaN(index)) return;
                currentIndex = visibleCards + index;
                moveToCurrent(true);
                startAutoplay();
            });
        });

        track.addEventListener('transitionend', function () {
            if (currentIndex >= totalSlides + visibleCards) {
                currentIndex = visibleCards;
                moveToCurrent(false);
            }
        });

        carousel.addEventListener('mouseenter', stopAutoplay);
        carousel.addEventListener('mouseleave', startAutoplay);
        carousel.addEventListener('focusin', stopAutoplay);
        carousel.addEventListener('focusout', startAutoplay);

        window.addEventListener('resize', function () {
            const activeIndex = getRealIndex();
            window.clearTimeout(resizeTimer);
            resizeTimer = window.setTimeout(function () {
                rebuild(activeIndex);
            }, 120);
        });

        rebuild(0);
        startAutoplay();
    });
</script>
@endpush
@endsection