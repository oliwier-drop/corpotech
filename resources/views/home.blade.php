@extends('layouts.app')

@section('meta_description')
    Strona główna
@endsection

@section('meta_keywords')
    Strona główna
@endsection

@section('content')
<section id="hero" class="pt-20 sm:pt-32">
    <div class="container mx-auto px-4">
        <div class="text-gray-300 p-8 overflow-hidden md:rounded-lg md:p-10 lg:p-12">

            <p class="font-sans text-4xl font-bold text-white max-w-5xl lg:text-7xl lg:pr-24 md:text-6xl">
                Nowoczesne rozwiązania dla Twojego <span class="px-2 py-1 relative inline-block"><svg class="stroke-current bottom-0 absolute text-brand -translate-x-2" viewBox="0 0 410 18" xmlns="http://www.w3.org/2000/svg"><path d="M6 6.4c16.8 16.8 380.8-11.2 397.6 5.602" stroke-width="12" fill="none" fill-rule="evenodd" stroke-linecap="round"></path></svg><span class="relative">biznesu i domu</span></span>
            </p>
            <div class="h-10"></div>
            <div class="flex flex-col sm:flex-row gap-6">
                <a href="{{ url('/kontakt') }}" class="border-2 border-white text-white hover:bg-white hover:text-brand-dark px-8 py-4 rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105">
                    Umów konsultację
                </a>
                <a href="{{ url('/uslugi') }}" target="_blank" class="bg-transparent hover:bg-brand text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
                Sprawdź ofertę
                </a>
            </div>
        </div>
    </div>
</section>
<section id="about" class="py-20 sm:py-32">
    <div class="container mx-auto px-4">
        <div class="h-32 md:h-40"></div>

        <div class="grid gap-8 md:grid-cols-2">
            <div class="flex flex-col justify-center">
                <p
                    class="self-start inline text-xl font-medium text-brand">
                    O nas
                </p>
                <h2 class="text-4xl font-bold text-gray-200">Technologia, która wspiera Twój biznes</h2>
                <div class="h-6"></div>
                <p class="text-xl text-gray-400 md:pr-10">
                    Jesteśmy specjalistami w dziedzinie cyberbezpieczeństwa, infrastruktury, serwerowni,
                    sieci oraz rozwiązań IT. Od 2011 roku pomagamy firmom budować bezpieczne i wydajne
                    środowiska technologiczne, które realnie wspierają rozwój biznesu.
                </p>
                <div class="h-8"></div>
                <div class="grid grid-cols-2 gap-4 pt-8 border-t border-gray-800">
                    <div>
                        <p class="font-semibold text-gray-400">Doświadczenie i zaufanie</p>
                        <div class="h-4"></div>
                        <p class="text-gray-400">
                            Zaufali nam liderzy wielu branż – od produkcji, przez energetykę, po usługi. 
                            Stawiamy na sprawdzone rozwiązania, partnerską współpracę 
                            i realne wsparcie na każdym etapie projektu.
                        </p>
                    </div>
                    <div>
                        <p class="text-gray-400">Podejście partnerskie</p>
                        <div class="h-4"></div>
                        <p class="text-gray-400">
                            Nie oferujemy przypadkowych technologii – zaczynamy od zrozumienia
                            potrzeb ludzi i organizacji, a dopiero potem projektujemy rozwiązania,
                            które mają sens i przynoszą efekty.
                        </p>
                    </div>
                </div>
            </div>
            <div>
                    <div class="-mr-24 rounded-lg md:rounded-l-full bg-gradient-to-br from-brand-dark to-brand/60 h-96"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="services" class="py-20 sm:py-28">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-gray-200 text-center mb-10">Nasze usługi</h2>
        
        <div id="accordion-flush">

            <h2 id="accordion-flush-heading-1">
                <button type="button"
                        class="flex items-center justify-between w-full py-5 font-semibold text-2xl border-b border-gray-700 gap-3 text-gray-300 transition-colors duration-300 ease-out"
                        data-accordion-target="#accordion-flush-body-1"
                        aria-expanded="true"
                        aria-controls="accordion-flush-body-1">
                    <span>Cyberbezpieczeństwo</span>
                    <svg data-accordion-icon class="w-5 h-5 shrink-0 transition-transform duration-300 ease-out" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                         viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2" d="m5 15 7-7 7 7"/>
                    </svg>
                </button>
            </h2>
            <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                <div class="py-6 border-b border-gray-700 text-gray-300">
                    <p class="mb-4 text-xl">
                        Analizujemy poziom bezpieczeństwa Twojej organizacji, wskazujemy realne ryzyka i dobieramy
                        rozwiązania, które chronią infrastrukturę, użytkowników oraz dane przed atakami.
                    </p>
                    <p class="mb-6 text-xl">
                        Łączymy doradztwo, wdrożenie i stałe wsparcie, aby cyberbezpieczeństwo było procesem,
                        a nie jednorazowym projektem.
                    </p>
                    <a href="{{ url('/uslugi/cyberbezpieczenstwo') }}"
                       class="inline-flex items-center bg-transparent border-2 border-white hover:bg-brand hover:border-brand text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
                        Poznaj usługę cyberbezpieczeństwa
                        <svg class="w-5 h-5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                             width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M5 12h14m0 0-6-6m6 6-6 6"/>
                        </svg>
                    </a>
                </div>
            </div>

            <h2 id="accordion-flush-heading-2">
                <button type="button"
                        class="flex items-center justify-between w-full py-5 font-semibold text-2xl border-b border-gray-700 gap-3 text-gray-300 transition-colors duration-300 ease-out"
                        data-accordion-target="#accordion-flush-body-2"
                        aria-expanded="false"
                        aria-controls="accordion-flush-body-2">
                    <span>Administracja systemami</span>
                    <svg data-accordion-icon class="w-5 h-5 shrink-0 transition-transform duration-300 ease-out" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                         viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2" d="m5 15 7-7 7 7"/>
                    </svg>
                </button>
            </h2>
            <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                <div class="py-6 border-b border-gray-700 text-gray-300">
                    <p class="mb-4 text-xl">
                        Wdrażamy oraz administrujemy systemami i środowiskami wirtualnymi, dbając o ich bezpieczeństwo, wydajność oraz nieprzerwaną pracę infrastruktury Twojej firmy.
                    </p>
                    <p class="mb-6 text-xl">
                        Dbamy o to, aby cała infrastruktura współpracowała ze sobą i skalowała się wraz z rozwojem
                        Twojej firmy.
                    </p>
                    <a href="{{ url('/uslugi/administracja-systemami') }}"
                       class="inline-flex items-center bg-transparent border-2 border-white hover:bg-brand hover:border-brand text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
                        Dowiedz się więcej o administracji systemami
                        <svg class="w-5 h-5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                             width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M5 12h14m0 0-6-6m6 6-6 6"/>
                        </svg>
                    </a>
                </div>
            </div>

            <h2 id="accordion-flush-heading-3">
                <button type="button"
                        class="flex items-center justify-between w-full py-5 font-semibold text-2xl border-b border-gray-700 gap-3 text-gray-300 transition-colors duration-300 ease-out"
                        data-accordion-target="#accordion-flush-body-3"
                        aria-expanded="false"
                        aria-controls="accordion-flush-body-3">
                    <span>Strony internetowe</span>
                    <svg data-accordion-icon class="w-5 h-5 shrink-0 transition-transform duration-300 ease-out" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                         viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2" d="m5 15 7-7 7 7"/>
                    </svg>
                </button>
            </h2>
            <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                <div class="py-6 border-b border-gray-700 text-gray-300">
                    <p class="mb-4 text-xl">
                        Tworzymy nowoczesne strony WWW i serwisy firmowe, które są szybkie, bezpieczne i dobrze
                        widoczne w wynikach wyszukiwania.
                    </p>
                    <p class="mb-6 text-xl">
                        Projektujemy doświadczenie użytkownika, dbamy o warstwę techniczną i integrujemy stronę
                        z narzędziami, z których korzystasz w biznesie.
                    </p>
                    <a href="{{ url('/uslugi/strony-internetowe') }}"
                       class="inline-flex items-center bg-transparent border-2 border-white hover:bg-brand hover:border-brand text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
                        Sprawdź ofertę stron internetowych
                        <svg class="w-5 h-5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                             width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M5 12h14m0 0-6-6m6 6-6 6"/>
                        </svg>
                    </a>
                </div>
            </div>

            <h2 id="accordion-flush-heading-4">
                <button type="button"
                        class="flex items-center justify-between w-full py-5 font-semibold text-2xl border-b border-gray-700 gap-3 text-gray-300 transition-colors duration-300 ease-out"
                        data-accordion-target="#accordion-flush-body-4"
                        aria-expanded="false"
                        aria-controls="accordion-flush-body-4">
                    <span>Smart home</span>
                    <svg data-accordion-icon class="w-5 h-5 shrink-0 transition-transform duration-300 ease-out" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                         viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2" d="m5 15 7-7 7 7"/>
                    </svg>
                </button>
            </h2>
            <div id="accordion-flush-body-4" class="hidden" aria-labelledby="accordion-flush-heading-4">
                <div class="py-6 border-b border-gray-700 text-gray-300">
                    <p class="mb-4 text-xl">
                        Projektujemy inteligentne domy, w których oświetlenie, ogrzewanie, rolety, bezpieczeństwo
                        i multimedia współpracują w jednym ekosystemie.
                    </p>
                    <p class="mb-6 text-xl">
                        Dajemy Ci wygodę zdalnego sterowania oraz scenariusze automatyzacji dopasowane
                        do codziennego trybu życia.
                    </p>
                    <a href="{{ url('/uslugi/smart-home') }}"
                       class="inline-flex items-center bg-transparent border-2 border-white hover:bg-brand hover:border-brand text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
                        Dowiedz się więcej o smart home
                        <svg class="w-5 h-5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                             width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M5 12h14m0 0-6-6m6 6-6 6"/>
                        </svg>
                    </a>
                </div>
            </div>

            <h2 id="accordion-flush-heading-5">
                <button type="button"
                        class="flex items-center justify-between w-full py-5 font-semibold text-2xl border-b border-gray-700 gap-3 text-gray-300 transition-colors duration-300 ease-out"
                        data-accordion-target="#accordion-flush-body-5"
                        aria-expanded="false"
                        aria-controls="accordion-flush-body-5">
                    <span>Instalacje techniczne</span>
                    <svg data-accordion-icon class="w-5 h-5 shrink-0 transition-transform duration-300 ease-out" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                         viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2" d="m5 15 7-7 7 7"/>
                    </svg>
                </button>
            </h2>
            <div id="accordion-flush-body-5" class="hidden" aria-labelledby="accordion-flush-heading-5">
                <div class="py-6 border-b border-gray-700 text-gray-300">
                    <p class="mb-4 text-xl">
                        Wykonujemy kompleksowe instalacje elektryczne i niskoprądowe – od projektu, przez
                        realizację, po dokumentację powykonawczą i serwis.
                    </p>
                    <p class="mb-6 text-xl">
                        Pracujemy zarówno w nowych inwestycjach, jak i w obiektach modernizowanych, minimalizując
                        przestoje w działalności.
                    </p>
                    <a href="{{ url('/uslugi/instalacje-techniczne') }}"
                       class="inline-flex items-center bg-transparent border-2 border-white hover:bg-brand hover:border-brand text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
                        Zobacz instalacje techniczne
                        <svg class="w-5 h-5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                             width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M5 12h14m0 0-6-6m6 6-6 6"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

<section id="testimonials" class="py-20 sm:py-32">

  <div class="container mx-auto px-4">
    <div class="mx-auto max-w-2xl md:text-center">
        <h2 class="text-4xl font-bold text-gray-200 text-center mb-10">Co mówią o nas nasi klienci?</h2>
    </div>
    <ul role="list"
      class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-6 sm:gap-8 lg:mt-20 lg:max-w-none lg:grid-cols-3">
      <li>
        <ul role="list" class="flex flex-col gap-y-6 sm:gap-y-8">
          <li>
            <figure class="relative rounded-2xl bg-gradient-to-br from-brand-dark to-brand/60 p-6 shadow-xl shadow-slate-900/10"><svg aria-hidden="true"
                width="105" height="78" class="absolute left-6 top-6 fill-brand-dark/80">
                <path
                  d="M25.086 77.292c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622C1.054 58.534 0 53.411 0 47.686c0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C28.325 3.917 33.599 1.507 39.324 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Zm54.24 0c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622-2.11-4.52-3.164-9.643-3.164-15.368 0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C82.565 3.917 87.839 1.507 93.564 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Z">
                </path>
              </svg>
              <blockquote class="relative">
                <p class="text-lg tracking-tight text-gray-200">Współpraca z Corpotech dała nam spójne rozwiązanie: nową stronę internetową, stabilną infrastrukturę oraz sieć zaprojektowaną pod rozwój firmy. Dzięki temu skupiamy się na produkcji, a nie na problemach technicznych.</p>
              </blockquote>
              <figcaption class="relative mt-6 flex items-center justify-between border-t border-gray-200 pt-6">
                <div>
                  <div class="font-display text-base font-bold text-gray-200">Edward Pocztarek</div>
                </div>
                <div class="overflow-hidden">
                  <img src="{{ asset('assets/images/logo/marpol-logo.png') }}" alt="Marpol logo" class="w-auto h-14">
                </div>
              </figcaption>
            </figure>
          </li>
        </ul>
      </li>
      <li>
        <ul role="list" class="flex flex-col gap-y-6 sm:gap-y-8">
          <li>
            <figure class="relative rounded-2xl bg-gradient-to-br from-brand-dark to-brand/60 p-6 shadow-xl shadow-slate-900/10"><svg aria-hidden="true"
                width="105" height="78" class="absolute left-6 top-6 fill-brand-dark/80">
                <path
                  d="M25.086 77.292c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622C1.054 58.534 0 53.411 0 47.686c0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C28.325 3.917 33.599 1.507 39.324 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Zm54.24 0c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622-2.11-4.52-3.164-9.643-3.164-15.368 0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C82.565 3.917 87.839 1.507 93.564 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Z">
                </path>
              </svg>
              <blockquote class="relative">
                <p class="text-lg tracking-tight text-gray-200">HellermannTyton to firma produkcyjna, dlatego kluczowa jest dla nas niezawodna infrastruktura IT. Zespół Corpotech zaprojektował i wdrożył rozwiązania, które wspierają produkcję 24/7 i są gotowe na dalszą rozbudowę.</p>
              </blockquote>
              <figcaption class="relative mt-6 flex items-center justify-between border-t border-gray-200 pt-6">
                <div>
                  <div class="font-display text-base font-bold text-gray-200">Tomasz Pawłowski</div>
                </div>
                <div class="overflow-hidden">
                  <img src="{{ asset('assets/images/logo/ht-logo.png') }}" alt="HellermannTyton logo" class="w-auto h-14">
                </div>
              </figcaption>
            </figure>
          </li>
        </ul>
      </li>
      <li>
        <ul role="list" class="flex flex-col gap-y-6 sm:gap-y-8">
          <li>
            <figure class="relative rounded-2xl bg-gradient-to-br from-brand-dark to-brand/60 p-6 shadow-xl shadow-slate-900/10"><svg aria-hidden="true"
                width="105" height="78" class="absolute left-6 top-6 fill-brand-dark/80">
                <path
                  d="M25.086 77.292c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622C1.054 58.534 0 53.411 0 47.686c0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C28.325 3.917 33.599 1.507 39.324 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Zm54.24 0c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622-2.11-4.52-3.164-9.643-3.164-15.368 0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C82.565 3.917 87.839 1.507 93.564 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Z">
                </path>
              </svg>
              <blockquote class="relative">
                <p class="text-lg tracking-tight text-gray-200">W Watisie stawiamy na świadome decyzje w obszarze cyberbezpieczeństwa. Doradztwo Corpotech pozwoliło nam uporządkować procesy, zidentyfikować ryzyka i wdrożyć rozwiązania, które realnie podnoszą poziom ochrony naszej organizacji.</p>
              </blockquote>
              <figcaption class="relative mt-6 flex items-center justify-between border-t border-gray-200 pt-6">
                <div>
                  <div class="font-display text-base font-bold text-gray-200">Krzysztof Węgrzyn</div>
                </div>
                <div class="overflow-hidden">
                  <img src="{{ asset('assets/images/logo/watis-logo.png') }}" alt="Watis logo" class="w-auto h-14">
                </div>
              </figcaption>
            </figure>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</section>

<section id="features" class="py-20 sm:py-32">
    <div class="container mx-auto px-4">    
        
        <p class="text-4xl">
            <span class="text-gray-400">Dzięki znajomości różnych branż</span>

            <span class="text-gray-600"
          >możemy zaprojektować rozwiązania, 
          <span class="text-gray-700">które w pełni odpowiadają potrzebom naszych klientów.</span></span>
        </p>

        <div class="h-40"></div>

        <div class="grid gap-8 md:grid-cols-3">
            <div class="flex flex-col justify-center md:col-span-2">
                <p
                    class="self-start inline font-sans text-xl font-medium text-brand">
                    Jak wygląda współpraca?
                </p>
                <h2 class="text-4xl font-bold text-gray-200">Proces od pierwszego kontaktu do wdrożenia</h2>
                <div class="h-6"></div>
                <p class="text-xl text-gray-400 md:pr-10">
                    Każdy projekt zaczynamy od zrozumienia biznesu, a nie od technologii. Dzięki temu rozwiązania,
                    które proponujemy, są dopasowane do skali Twojej organizacji, celów i realnych wyzwań.
                </p>
                <div class="h-8"></div>
                <div class="grid gap-6 pt-8 border-t border-gray-800 lg:grid-cols-3">
                    <div>
                        <p class="font-semibold text-gray-200">1. Konsultacja</p>
                        <div class="h-4"></div>
                        <p class="text-gray-400">
                            Podczas rozmowy i analizy zbieramy informacje o obecnej infrastrukturze, procesach
                            i oczekiwaniach. Identyfikujemy obszary ryzyka oraz potencjał do usprawnień.
                        </p>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-200">2. Wycena i zakres</p>
                        <div class="h-4"></div>
                        <p class="text-gray-400">
                            Przygotowujemy propozycję architektury, rekomendacje technologiczne oraz harmonogram.
                            Otrzymujesz przejrzysty zakres prac i koszty, bez „gwiazdek” w umowie.
                        </p>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-200">3. Realizacja i wsparcie</p>
                        <div class="h-4"></div>
                        <p class="text-gray-400">
                            Wdrażamy rozwiązanie, testujemy je i szkolimy zespół. Po zakończeniu projektu
                            możemy przejąć opiekę serwisową oraz rozwijać środowisko wraz z Twoją firmą.
                        </p>
                    </div>
                </div>
            </div>
            <div>
                <div class="-mr-24 rounded-lg md:rounded-l-full bg-gradient-to-br from-brand-dark to-brand/60 h-96"></div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const accordion = document.getElementById('accordion-flush');
    if (!accordion) return;

    const buttons = Array.from(accordion.querySelectorAll('button[data-accordion-target]'));
    const durationMs = 320;

    const getPanel = (button) => {
        const target = button.getAttribute('data-accordion-target');
        return target ? document.querySelector(target) : null;
    };

    const setButtonState = (button, isOpen) => {
        button.classList.toggle('text-brand', isOpen);
        button.classList.toggle('text-gray-300', !isOpen);
        button.setAttribute('aria-expanded', isOpen ? 'true' : 'false');

        const icon = button.querySelector('[data-accordion-icon]');
        if (icon) icon.classList.toggle('rotate-180', isOpen);
    };

    const openPanel = (button, panel, animate = true) => {
        panel.classList.remove('hidden');
        panel.style.overflow = 'hidden';
        panel.style.transition = `max-height ${durationMs}ms ease, opacity 220ms ease`;

        const targetHeight = panel.scrollHeight;
        if (!animate) {
            panel.style.maxHeight = 'none';
            panel.style.opacity = '1';
            panel.style.overflow = 'visible';
            setButtonState(button, true);
            return;
        }

        panel.style.maxHeight = '0px';
        panel.style.opacity = '0';
        requestAnimationFrame(() => {
            panel.style.maxHeight = targetHeight + 'px';
            panel.style.opacity = '1';
        });

        panel.addEventListener('transitionend', function handler(e) {
            if (e.propertyName === 'max-height') {
                panel.style.maxHeight = 'none';
                panel.style.overflow = 'visible';
                panel.removeEventListener('transitionend', handler);
            }
        });

        setButtonState(button, true);
    };

    const closePanel = (button, panel) => {
        panel.style.overflow = 'hidden';
        panel.style.transition = `max-height ${durationMs}ms ease, opacity 220ms ease`;
        panel.style.maxHeight = panel.scrollHeight + 'px';
        panel.style.opacity = '1';

        requestAnimationFrame(() => {
            panel.style.maxHeight = '0px';
            panel.style.opacity = '0';
        });

        window.setTimeout(() => {
            panel.classList.add('hidden');
            panel.style.overflow = 'hidden';
        }, durationMs);

        setButtonState(button, false);
    };

    buttons.forEach((button) => {
        const panel = getPanel(button);
        if (!panel) return;

        panel.classList.add('hidden');
        panel.style.maxHeight = '0px';
        panel.style.opacity = '0';
        setButtonState(button, false);
    });

    const initiallyOpenButton = buttons.find((button) => button.getAttribute('aria-expanded') === 'true') || buttons[0];
    if (initiallyOpenButton) {
        const initialPanel = getPanel(initiallyOpenButton);
        if (initialPanel) openPanel(initiallyOpenButton, initialPanel, false);
    }

    buttons.forEach((button) => {
        const panel = getPanel(button);
        if (!panel) return;

        button.addEventListener('click', () => {
            const isOpen = button.getAttribute('aria-expanded') === 'true';

            buttons.forEach((otherButton) => {
                if (otherButton === button) return;
                const otherPanel = getPanel(otherButton);
                if (!otherPanel) return;
                if (otherButton.getAttribute('aria-expanded') === 'true') {
                    closePanel(otherButton, otherPanel);
                }
            });

            if (isOpen) {
                closePanel(button, panel);
            } else {
                openPanel(button, panel, true);
            }
        });
    });
});
</script>
@endpush
