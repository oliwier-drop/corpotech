@extends('layouts.subpage')

@section('title', 'Kontakt')

@section('meta_description', 'Skontaktuj się z Corpotech w sprawie usług IT: cyberbezpieczeństwo, administracja systemów, strony internetowe, Smart Home i instalacje niskoprądowe. Zadzwoń: +48 662 273 737 lub napisz: kontakt@corpotech.com.pl. Słupca, ul. Tadeusza Kościuszki 5.')
@section('meta_keywords', 'kontakt IT, Corpotech, cyberbezpieczeństwo Słupca, audyt bezpieczeństwa, testy penetracyjne, administracja systemów Windows Linux, sieci LAN, strony internetowe, SEO, Smart Home, instalacje niskoprądowe, okablowanie strukturalne, kontakt@corpotech.com.pl, +48 662 273 737')
@section('meta_title', 'Kontakt - Corpotech')
@section('meta_image', asset('assets/images/logo/logo.png'))
@section('meta_og_image', asset('assets/images/logo/logo.png'))
@section('meta_robots', 'index, follow')

@section('content')
<section id="info" class="py-20 sm:py-32">
<div class="container mx-auto px-4">
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
                <div class="hidden md:block -mr-24 rounded-lg md:rounded-l-full bg-gradient-to-br from-brand-dark to-brand/60 h-96"></div>
            </div>
        </div>
    </div>
</section>


<section id="contact-form" class="py-12 sm:py-20">
    <div class="container mx-auto px-4">
        
        <div class="grid lg:grid-cols-2 grid-cols-1 items-stretch gap-y-6 lg:gap-x-6">
            <div class="lg:mb-0 mb-10">
                <div class="group w-full h-full overflow-hidden min-h-[520px] sm:min-h-[560px] lg:min-h-[420px]">
                    
                    <div class="relative h-full">
                        <img
                            src="{{ asset('assets/images/pictures/office.jpg') }}"
                            alt="ContactUs tailwind section"
                            class="w-full h-full lg:rounded-l-2xl rounded-2xl object-cover"
                        />
                        <div
                            class="absolute inset-0 bg-black/60 lg:rounded-l-2xl rounded-2xl z-0"
                        ></div>
                        <h1 class="text-white text-4xl font-bold leading-10 absolute top-6 left-6 sm:top-8 sm:left-8 lg:top-11 lg:left-11 z-30">
                            Skontaktuj się z nami
                        </h1>
                        <div class="absolute bottom-0 w-full lg:p-11 p-4 z-20">
                            <div class="bg-brand-dark rounded-lg p-6 block">
                                <a href="tel:+48662273737" class="flex items-center mb-6 text-brand">
                                    <svg
                                        width="30"
                                        height="30"
                                        viewBox="0 0 30 30"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M22.3092 18.3098C22.0157 18.198 21.8689 18.1421 21.7145 18.1287C21.56 18.1154 21.4058 18.1453 21.0975 18.205L17.8126 18.8416C17.4392 18.9139 17.2525 18.9501 17.0616 18.9206C16.8707 18.891 16.7141 18.8058 16.4008 18.6353C13.8644 17.2551 12.1853 15.6617 11.1192 13.3695C10.9964 13.1055 10.935 12.9735 10.9133 12.8017C10.8917 12.6298 10.9218 12.4684 10.982 12.1456L11.6196 8.72559C11.6759 8.42342 11.7041 8.27233 11.6908 8.12115C11.6775 7.96998 11.6234 7.82612 11.5153 7.5384L10.6314 5.18758C10.37 4.49217 10.2392 4.14447 9.95437 3.94723C9.6695 3.75 9.29804 3.75 8.5551 3.75H5.85778C4.58478 3.75 3.58264 4.8018 3.77336 6.06012C4.24735 9.20085 5.64674 14.8966 9.73544 18.9853C14.0295 23.2794 20.2151 25.1426 23.6187 25.884C24.9335 26.1696 26.0993 25.1448 26.0993 23.7985V21.2824C26.0993 20.5428 26.0993 20.173 25.9034 19.8888C25.7076 19.6046 25.362 19.4729 24.6708 19.2096L22.3092 18.3098Z"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                    </svg>
                                    <h5 class="text-white text-base font-normal leading-6 ml-5">+48 573 296 093</h5>
                                </a>

                                <a href="mailto:kontakt@corpotech.com.pl" class="flex items-center mb-6 text-brand">
                                    <svg
                                        width="30"
                                        height="30"
                                        viewBox="0 0 30 30"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M2.81501 8.75L10.1985 13.6191C12.8358 15.2015 14.1544 15.9927 15.6032 15.9582C17.0519 15.9237 18.3315 15.0707 20.8905 13.3647L27.185 8.75M12.5 25H17.5C22.214 25 24.5711 25 26.0355 23.5355C27.5 22.0711 27.5 19.714 27.5 15C27.5 10.286 27.5 7.92893 26.0355 6.46447C24.5711 5 22.214 5 17.5 5H12.5C7.78595 5 5.42893 5 3.96447 6.46447C2.5 7.92893 2.5 10.286 2.5 15C2.5 19.714 2.5 22.0711 3.96447 23.5355C5.42893 25 7.78595 25 12.5 25Z"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                        />
                                    </svg>
                                    <h5 class="text-white text-base font-normal leading-6 ml-5">kontakt@corpotech.com.pl</h5>
                                </a>

                                <a href="https://maps.app.goo.gl/P1vnpYuSDKYEAd2U7" target="_blank" class="flex items-center text-brand">
                                    <svg
                                        width="30"
                                        height="30"
                                        viewBox="0 0 30 30"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M25 12.9169C25 17.716 21.1939 21.5832 18.2779 24.9828C16.8385 26.6609 16.1188 27.5 15 27.5C13.8812 27.5 13.1615 26.6609 11.7221 24.9828C8.80612 21.5832 5 17.716 5 12.9169C5 10.1542 6.05357 7.5046 7.92893 5.55105C9.8043 3.59749 12.3478 2.5 15 2.5C17.6522 2.5 20.1957 3.59749 22.0711 5.55105C23.9464 7.5046 25 10.1542 25 12.9169Z"
                                            stroke="currentColor"
                                            stroke-width="2"
                                        />
                                        <path
                                            d="M17.5 11.6148C17.5 13.0531 16.3807 14.219 15 14.219C13.6193 14.219 12.5 13.0531 12.5 11.6148C12.5 10.1765 13.6193 9.01058 15 9.01058C16.3807 9.01058 17.5 10.1765 17.5 11.6148Z"
                                            stroke="currentColor"
                                            stroke-width="2"
                                        />
                                    </svg>
                                    <h5 class="text-white text-base font-normal leading-6 ml-5">Tadeusza Kościuszki 5, 62-400 Słupca</h5>
                                </a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-brand-dark to-brand/60 p-5 sm:p-6 lg:p-11 lg:rounded-r-2xl rounded-2xl h-full">
                @if(session('success'))
                    <p class="mb-4 rounded-lg bg-emerald-500/10 px-4 py-2 text-sm text-emerald-400">
                        {{ session('success') }}
                    </p>
                @endif

                <form id="contactForm" method="POST" action="{{ route('contact.submit') }}">
                    @csrf

                    <h2 class="text-white text-4xl font-semibold leading-10 mb-11">
                        Formularz kontaktowy
                    </h2>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        autocomplete="given-name"
                        placeholder="Imię i nazwisko"
                        value="{{ old('name') }}"
                        required
                        class="w-full h-12 text-gray-600 placeholder-gray-400 shadow-sm bg-transparent text-lg font-normal leading-7 rounded-lg border border-gray-200 focus:outline-none pl-4 mb-6"
                    >
                    @error('name')
                        <p class="mb-2 text-xs text-red-600">{{ $message }}</p>
                    @enderror

                    <input
                        type="email"
                        id="email"
                        name="email"
                        autocomplete="email"
                        placeholder="Email"
                        value="{{ old('email') }}"
                        required
                        class="w-full h-12 text-gray-600 placeholder-gray-400 shadow-sm bg-transparent text-lg font-normal leading-7 rounded-lg border border-gray-200 focus:outline-none pl-4 mb-6"
                    >
                    @error('email')
                        <p class="mb-2 text-xs text-red-600">{{ $message }}</p>
                    @enderror

                    <input
                        type="tel"
                        id="phone"
                        name="phone"
                        autocomplete="tel"
                        placeholder="Telefon (opcjonalnie)"
                        value="{{ old('phone') }}"
                        class="w-full h-12 text-gray-600 placeholder-gray-400 shadow-sm bg-transparent text-lg font-normal leading-7 rounded-lg border border-gray-200 focus:outline-none pl-4 mb-6"
                    >
                    @error('phone')
                        <p class="mb-2 text-xs text-red-600">{{ $message }}</p>
                    @enderror

                    <textarea
                        id="textarea"
                        name="textarea"
                        rows="5"
                        placeholder="Message"
                        required
                        class="w-full text-gray-600 placeholder-gray-400 shadow-sm bg-transparent text-lg font-normal leading-7 rounded-lg border border-gray-200 focus:outline-none pl-4 pr-4 py-2 mb-6"
                    >{{ old('textarea') }}</textarea>
                    @error('textarea')
                        <p class="mb-2 text-xs text-red-600">{{ $message }}</p>
                    @enderror

                    <div class="w-full min-w-0 overflow-hidden pt-2 @error('cf-turnstile-response') text-red-600 @enderror">
                        <input type="hidden" name="cf-turnstile-response" id="cf-turnstile-response"
                            value="{{ old('cf-turnstile-response') }}">
                        <div
                            class="cf-turnstile max-w-full"
                            data-sitekey="{{ env('TURNSTILE_SITE_KEY') }}"
                            data-theme="light"
                            data-size="flexible"
                            data-callback="onTurnstileVerified"
                            data-expired-callback="onTurnstileExpired"
                        ></div>

                        @error('cf-turnstile-response')
                            <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <button
                        type="submit"
                        class="w-full h-12 text-white text-base font-semibold leading-6 rounded-full transition-all  bg-brand-dark hover:bg-slate-950 shadow-sm mt-6"
                    >
                        Wyślij
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<section id="map" class="py-12 sm:py-20">
    <div class="container mx-auto px-4">
        <div class="mx-auto mb-10 max-w-3xl text-center">
            <p class="text-base font-semibold uppercase tracking-wide text-brand">
                Odwiedź nas
            </p>
            <h2 class="mt-3 text-4xl font-bold text-gray-200">Nasza lokalizacja</h2>
        </div>

        <div class="mx-auto max-w-6xl">
            <div class="overflow-hidden rounded-2xl border border-gray-800 bg-black/20 shadow-sm">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d364.24983557048853!2d17.873360899698966!3d52.288531530437915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4704c76f01a06b71%3A0x4084d743c03bb27f!2sCorpotech!5e1!3m2!1spl!2spl!4v1773854801125!5m2!1spl!2spl"
                    class="h-[320px] w-full sm:h-[440px] md:h-[520px]"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Turnstile callbacks must be global because Turnstile triggers them from outside our scope.
    // Still, the easiest way is to define them on `window`.
    window.onTurnstileVerified = function (token) {
        const input = document.getElementById('cf-turnstile-response');
        if (input) input.value = token;
    };

    window.onTurnstileExpired = function () {
        const input = document.getElementById('cf-turnstile-response');
        if (input) input.value = '';
    };

    const form = document.getElementById('contactForm');
    if (!form) return;

    const statusBox = document.createElement('div');
    statusBox.className = 'mb-6 hidden rounded-base px-4 py-3 text-sm';
    form.parentElement.prepend(statusBox);

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        statusBox.classList.add('hidden');
        statusBox.textContent = '';

        const url = form.action;
        const tokenMeta = document.querySelector('meta[name="csrf-token"]');
        const token = tokenMeta ? tokenMeta.content : '';
        const formData = new FormData(form);

        try {
            const res = await fetch(url, {
                method: 'POST',
                headers: {
                    ...(token ? { 'X-CSRF-TOKEN': token } : {}),
                    'Accept': 'application/json',
                },
                body: formData,
            });

            if (res.ok) {
                let data = {};
                try { data = await res.json(); } catch (err) {}

                form.reset();
                statusBox.className = 'mb-6 rounded-base bg-emerald-50 px-4 py-3 text-sm text-emerald-800';
                statusBox.textContent = data.message ?? 'Dziękujemy, wiadomość została wysłana.';
                statusBox.classList.remove('hidden');
            } else if (res.status === 422) {
                const data = await res.json();
                const firstError = Object.values(data.errors ?? {})[0]?.[0] ?? 'Wystąpił błąd walidacji.';
                statusBox.className = 'mb-6 rounded-base bg-red-50 px-4 py-3 text-sm text-red-800';
                statusBox.textContent = firstError;
                statusBox.classList.remove('hidden');
            } else {
                throw new Error('Błąd serwera');
            }
        } catch (err) {
            statusBox.className = 'mb-6 rounded-base bg-red-50 px-4 py-3 text-sm text-red-800';
            statusBox.textContent = 'Nie udało się wysłać wiadomości. Spróbuj ponownie za chwilę.';
            statusBox.classList.remove('hidden');
        }
    });
});
</script>
@endpush

@endsection