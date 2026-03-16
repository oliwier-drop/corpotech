<nav class="bg-black/30 backdrop-blur-sm text-white border-default fixed w-full z-30 top-0 start-0">
    <div class="container mx-auto px-4 py-4 flex flex-wrap justify-between items-center">
        {{-- Logo --}}
        <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('assets/images/logo.png') }}" class="h-18" alt="Corpotech logo" />
        </a>

        {{-- Hamburger na mobile --}}
        <button
            data-collapse-toggle="mega-menu-main"
            type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:bg-neutral-secondary-soft hover:text-heading focus:outline-none focus:ring-2 focus:ring-default"
            aria-controls="mega-menu-main"
            aria-expanded="false"
        >
            <span class="sr-only">Otwórz menu główne</span>
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
            </svg>
        </button>

        {{-- Główne menu / mega menu --}}
        <div id="mega-menu-main" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
            <ul class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
                
                <li>
                    <a href="{{ url('/o-nas') }}"
                        class="block py-2 px-3 text-xl text-white hover:text-brand border-b border-transparent hover:bg-neutral-secondary-soft md:hover:bg-transparent md:border-0 md:hover:text-brand md:p-0">
                        O nas
                    </a>
                </li>
                <li>
                    <a
                        href="{{ route('security') }}"
                        id="mega-menu-services-button"
                        class="flex items-center justify-between w-full py-2 px-3 font-medium text-xl text-white border-b border-transparent md:w-auto hover:bg-neutral-secondary-soft hover:text-brand md:hover:bg-transparent md:border-0 md:hover:text-brand md:p-0"
                        role="button"
                    >
                        Usługi
                        <svg
                            id="mega-menu-services-arrow"
                            class="w-4 h-4 ms-1.5 transform transition-transform duration-200 ease-out"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            fill="none"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="m19 9-7 7-7-7"
                            />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/realizacje') }}"
                        class="block py-2 px-3 text-xl text-white hover:text-brand border-b border-transparent hover:bg-neutral-secondary-soft md:hover:bg-transparent md:border-0 md:hover:text-brand md:p-0">
                        Realizacje
                    </a>
                </li>
                <li>
                    <a href="{{ url('/kontakt') }}"
                        class="block py-2 px-3 text-xl text-white hover:text-brand border-b border-transparent hover:bg-neutral-secondary-soft md:hover:bg-transparent md:border-0 md:hover:text-brand md:p-0">
                        Kontakt
                    </a>
                </li>
            </ul>
        </div>
    </div>

    {{-- Mega menu dla "Usługi" --}}
    <div id="mega-menu-services-dropdown" class="mt-1 border-gray-800 hidden">
        <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-sm text-white md:grid-cols-3 md:px-6 gap-6">
            <ul class="space-y-3 md:col-span-2" aria-labelledby="mega-menu-services-button">
                <li>
                    <a href="{{ url('/uslugi/cyberbezpieczenstwo') }}" class="inline-flex items-center hover:text-brand group">
                        <span class="text-xl">CYBERBEZPIECZENSTWO</span>
                        <svg
                            class="w-4 h-4 ms-2 link-arrow"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            fill="none"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="m9 5 7 7-7 7"
                            />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/uslugi/systemy-teletechniczne') }}" class="inline-flex items-center hover:text-brand group">
                        <span class="text-xl">SYSTEMY TELETECHNICZNE</span>
                        <svg
                            class="w-4 h-4 ms-2 link-arrow"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            fill="none"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="m9 5 7 7-7 7"
                            />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/uslugi/strony-internetowe') }}" class="inline-flex items-center hover:text-brand group">
                        <span class="text-xl">STRONY INTERNETOWE</span>
                        <svg
                            class="w-4 h-4 ms-2 link-arrow"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            fill="none"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="m9 5 7 7-7 7"
                            />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/uslugi/smart-home') }}" class="inline-flex items-center hover:text-brand group">
                        <span class="text-xl">SMARTHOME</span>
                        <svg
                            class="w-4 h-4 ms-2 link-arrow"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            fill="none"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="m9 5 7 7-7 7"
                            />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/uslugi/instalacje-techniczne') }}" class="inline-flex items-center hover:text-brand group">
                        <span class="text-xl">INSTALLACJE TECHNICZNE</span>
                        <svg
                            class="w-4 h-4 ms-2 link-arrow"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            fill="none"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="m9 5 7 7-7 7"
                            />
                        </svg>
                    </a>
                </li>
            </ul>
            <div class="hidden md:block">
                <p class="mb-3 font-semibold text-white">
                    Rozwiązania dla Twojej firmy i domu
                </p>
                <p class="text-sm text-neutral-200">
                    Kompleksowe projektowanie, instalacja i serwis systemów bezpieczeństwa, teletechnicznych oraz inteligentnego domu.
                </p>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const servicesButton = document.getElementById('mega-menu-services-button');
            const dropdown = document.getElementById('mega-menu-services-dropdown');
            const arrow = document.getElementById('mega-menu-services-arrow');

            if (!servicesButton || !dropdown || !arrow) return;

            let hideTimeout = null;

            function showDropdown() {
                if (hideTimeout) {
                    clearTimeout(hideTimeout);
                    hideTimeout = null;
                }
                dropdown.classList.remove('hidden');
                arrow.classList.add('rotate-180');
            }

            function scheduleHide() {
                if (hideTimeout) {
                    clearTimeout(hideTimeout);
                }
                hideTimeout = setTimeout(() => {
                    dropdown.classList.add('hidden');
                    arrow.classList.remove('rotate-180');
                }, 200); // małe opóźnienie, żeby zdążyć wjechać na dropdown
            }

            servicesButton.addEventListener('mouseenter', showDropdown);
            servicesButton.addEventListener('mouseleave', scheduleHide);
            dropdown.addEventListener('mouseenter', showDropdown);
            dropdown.addEventListener('mouseleave', scheduleHide);
        });
    </script>
</nav>