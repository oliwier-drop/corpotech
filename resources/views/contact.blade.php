@extends('layouts.subpage')

@section('title', 'Kontakt')

@section('meta_description', 'Kontakt')
@section('meta_keywords', 'Kontakt')
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
                <div class="-mr-24 rounded-lg md:rounded-l-full bg-gradient-to-br from-brand-dark to-brand/60 h-96"></div>
            </div>
        </div>
    </div>
</section>


<section id="contact-form">
    <div class="container mx-auto px-4 py-16 sm:px-6 lg:px-8 lg:py-20">
        <div class="mb-4">
            <div class="mb-6 max-w-3xl text-center sm:text-center md:mx-auto md:mb-12">
                <p class="text-base font-semibold uppercase tracking-wide text-brand">
                    Kontakt
                </p>
                <h2
                    class="font-heading mb-4 font-bold tracking-tight text-gray-900 dark:text-white text-3xl sm:text-5xl">
                    Skontaktuj się z nami
                </h2>
            </div>
        </div>
        <div class="flex items-stretch justify-center">
            <div class="grid md:grid-cols-2">
                <div class="h-full pr-6">
                    <p class="mt-3 mb-12 text-lg text-gray-600 dark:text-slate-400">
                        Masz pytania? Potrzebujesz szczegółów dotyczących naszych usług? Napisz do nas!
                    </p>
                    <ul class="mb-6 md:mb-0">
                        <li class="flex">
                            <div class="flex h-10 w-10 items-center justify-center rounded bg-brand text-gray-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="h-6 w-6">
                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                    <path
                                        d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z">
                                    </path>
                                </svg>
                            </div>
                            <div class="ml-4 mb-4">
                                <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900 dark:text-white">Adres
                                </h3>
                                <p class="text-gray-600 dark:text-slate-400">Tadeusza Kościuszki 5,</p>
                                <p class="text-gray-600 dark:text-slate-400">62-400 Słupca</p>
                            </div>
                        </li>
                        <li class="flex">
                            <div class="flex h-10 w-10 items-center justify-center rounded bg-brand text-gray-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="h-6 w-6">
                                    <path
                                        d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                                    </path>
                                    <path d="M15 7a2 2 0 0 1 2 2"></path>
                                    <path d="M15 3a6 6 0 0 1 6 6"></path>
                                </svg>
                            </div>
                            <div class="ml-4 mb-4">
                                <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900 dark:text-white">Telefon
                                </h3>
                                <p class="text-gray-600 dark:text-slate-400">Mobilny: +48 662 273 737</p>
                                <p class="text-gray-600 dark:text-slate-400">Stacjonarny: +48 662 273 737</p>
                            </div>
                        </li>
                        <li class="flex">
                            <div class="flex h-10 w-10 items-center justify-center rounded bg-brand text-gray-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="h-6 w-6">
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                    <path d="M12 7v5l3 3"></path>
                                </svg>
                            </div>
                            <div class="ml-4 mb-4">
                                <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900 dark:text-white">Godziny otwarcia
                                </h3>
                                <p class="text-gray-600 dark:text-slate-400">Poniedziałek - Piątek: 10:00 - 16:00</p>
                                <p class="text-gray-600 dark:text-slate-400">Sobota &amp; Niedziela: Zamknięte</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card h-fit max-w-6xl p-5 md:p-12" id="form">
                    <h2 class="mb-4 text-2xl font-bold dark:text-white">Formularz kontaktowy</h2>

                    @if(session('success'))
                        <p class="mb-4 rounded-lg bg-emerald-500/10 px-4 py-2 text-sm text-emerald-400">
                            {{ session('success') }}
                        </p>
                    @endif

                    <form id="contactForm" method="POST" action="{{ route('contact.submit') }}">
                        @csrf
                        <div class="mb-6">
                            <div class="mx-0 mb-1 sm:mb-4">
                                <div class="mx-0 mb-1 sm:mb-4">
                                    <label for="name" class="pb-1 text-xs uppercase tracking-wider">Imię i nazwisko</label>
                                    <input
                                        type="text"
                                        id="name"
                                        name="name"
                                        autocomplete="given-name"
                                        placeholder="Imię i nazwisko"
                                        value="{{ old('name') }}"
                                        required
                                        class="mb-2 w-full rounded-md border border-gray-400 bg-transparent py-2 pl-2 pr-4 shadow-md dark:text-gray-300 sm:mb-0"
                                    >
                                    @error('name')
                                        <p class="mb-2 text-xs text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mx-0 mb-1 sm:mb-4">
                                    <label for="email" class="pb-1 text-xs uppercase tracking-wider">Adres e-mail</label>
                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        autocomplete="email"
                                        placeholder="E-mail"
                                        value="{{ old('email') }}"
                                        required
                                        class="mb-2 w-full rounded-md border border-gray-400 bg-transparent py-2 pl-2 pr-4 shadow-md dark:text-gray-300 sm:mb-0"
                                    >
                                    @error('email')
                                        <p class="mb-2 text-xs text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="mx-0 mb-1 sm:mb-4">
                                <label for="textarea" class="pb-1 text-xs uppercase tracking-wider">Wiadomość</label>
                                <textarea
                                    id="textarea"
                                    name="textarea"
                                    cols="30"
                                    rows="5"
                                    placeholder="Napisz do nas..."
                                    required
                                    class="mb-2 w-full rounded-md border border-gray-400 bg-transparent py-2 pl-2 pr-4 shadow-md dark:text-gray-300 sm:mb-0"
                                >{{ old('textarea') }}</textarea>
                                @error('textarea')
                                    <p class="mb-2 text-xs text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        {{-- Cloudflare Turnstile --}}
                        <div class="w-full min-w-0 overflow-hidden pt-2 @error('cf-turnstile-response') text-red-600 @enderror">
                            <div
                                class="cf-turnstile max-w-full"
                                data-sitekey="{{ env('TURNSTILE_SITE_KEY') }}"
                                data-theme="light"
                                data-size="flexible"
                            ></div>

                            @error('cf-turnstile-response')
                                <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit" class="w-full bg-brand hover:bg-orange-800 text-white px-6 py-3 font-xl rounded-md sm:mb-0">
                                Wyślij
                            </button>
                        </div>
                    </form>
                </div>
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