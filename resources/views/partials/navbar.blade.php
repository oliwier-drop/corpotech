<nav class="bg-black/30 backdrop-blur-sm text-white border-default fixed w-full z-30 top-0 start-0">
    <div class="container mx-auto px-4 py-4 flex flex-wrap justify-between items-center">
        {{-- Logo --}}
        <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('assets/images/logo/logo.png') }}" class="h-18" alt="Corpotech logo" />
        </a>

        {{-- Hamburger na mobile --}}
        <button
            id="mobile-menu-toggle"
            data-collapse-toggle="mega-menu-main"
            type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:bg-neutral-secondary-soft hover:text-heading focus:outline-none"
            aria-controls="mega-menu-main"
            aria-expanded="false"
        >
            <span class="sr-only">Otwórz menu główne</span>
            <svg id="hamburger-icon" class="w-6 h-6 transition-all duration-300 ease-in-out transform scale-100 rotate-0 opacity-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
            </svg>
            <svg id="close-icon" class="w-6 h-6 absolute transition-all duration-300 ease-in-out transform scale-0 rotate-90 opacity-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        {{-- Główne menu / mega menu --}}
        <div id="mega-menu-main" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
            <ul class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
                
                <li>
                    <a href="{{ route('about') }}"
                        class="block py-2 px-3 text-xl text-white hover:text-brand border-b border-transparent hover:bg-neutral-secondary-soft md:hover:bg-transparent md:border-0 md:hover:text-brand md:p-0">
                        O nas
                    </a>
                </li>
                <li>
                    <a
                        href="{{ route('services') }}"
                        id="mega-menu-services-button"
                        class="flex items-center justify-between w-full py-2 px-3 font-medium text-xl text-white border-b border-transparent md:w-auto hover:bg-neutral-secondary-soft hover:text-brand md:hover:bg-transparent md:border-0 md:hover:text-brand md:p-0"
                        role="button"
                    >
                        Usługi
                        <svg
                            id="mega-menu-services-arrow"
                            class="w-4 h-4 ms-1.5 transform transition-transform duration-200 ease-out hidden md:block"
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
                    <ul class="flex flex-col pl-4 mt-1 space-y-1 md:hidden">
                        <li><a href="{{ route('cybersecurity') }}" class="block py-1.5 px-3 text-base text-gray-300 hover:text-brand transition">Cyberbezpieczeństwo</a></li>
                        <li><a href="{{ route('systems') }}" class="block py-1.5 px-3 text-base text-gray-300 hover:text-brand transition">Administracja systemów</a></li>
                        <li><a href="{{ route('websites') }}" class="block py-1.5 px-3 text-base text-gray-300 hover:text-brand transition">Strony internetowe</a></li>
                        <li><a href="{{ route('smarthome') }}" class="block py-1.5 px-3 text-base text-gray-300 hover:text-brand transition">Smart home</a></li>
                        <li><a href="{{ route('installations') }}" class="block py-1.5 px-3 text-base text-gray-300 hover:text-brand transition">Instalacje techniczne</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('projects') }}"
                        class="block py-2 px-3 text-xl text-white hover:text-brand border-b border-transparent hover:bg-neutral-secondary-soft md:hover:bg-transparent md:border-0 md:hover:text-brand md:p-0">
                        Realizacje
                    </a>
                </li>
                
                <li>
                    <a href="{{ route('contact') }}"
                        class="block py-2 px-3 text-xl text-white hover:text-brand border-b border-transparent hover:bg-neutral-secondary-soft md:hover:bg-transparent md:border-0 md:hover:text-brand md:p-0">
                        Kontakt
                    </a>
                </li>
            </ul>
        </div>
    </div>

    {{-- Mega menu dla "Usługi" (tylko desktop) --}}
    <div id="mega-menu-services-dropdown" class="mt-1 border-gray-800 hidden">
        <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-sm text-white md:grid-cols-3 md:px-6 gap-6">
            <ul class="space-y-3 md:col-span-2" aria-labelledby="mega-menu-services-button">
                <li>
                    <a href="{{ route('cybersecurity') }}"
                       class="service-link inline-flex items-center hover:text-brand group"
                       data-title="Cyberbezpieczeństwo"
                       data-description="Zaawansowane systemy ochrony sieci, danych i infrastruktury IT Twojej firmy.">
                        <span class="text-xl font-bold">Cyberbezpieczeństwo</span>
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
                    <a href="{{ route('systems') }}"
                       class="service-link inline-flex items-center hover:text-brand group"
                       data-title="Administracja systemów"
                       data-description="Obserwacja i administrowanie systemami IT w Twojej organizacji.">
                        <span class="text-xl font-bold">Administracja systemów</span>
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
                    <a href="{{ route('websites') }}"
                       class="service-link inline-flex items-center hover:text-brand group"
                       data-title="Strony internetowe"
                       data-description="Nowoczesne i szybkie strony WWW dopasowane do potrzeb Twojego biznesu.">
                        <span class="text-xl font-bold">Strony internetowe</span>
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
                    <a href="{{ route('smarthome') }}"
                       class="service-link inline-flex items-center hover:text-brand group"
                       data-title="Smart home"
                       data-description="Inteligentne systemy automatyki domowej zwiększające komfort i bezpieczeństwo.">
                        <span class="text-xl font-bold">Smart home</span>
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
                    <a href="{{ route('installations') }}"
                       class="service-link inline-flex items-center hover:text-brand group"
                       data-title="Instalacje techniczne"
                       data-description="Profesjonalne instalacje elektryczne i niskoprądowe w obiektach komercyjnych i mieszkalnych.">
                        <span class="text-xl font-bold">Instalacje techniczne</span>
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
                <p id="services-preview-title" class="mb-3 text-xl font-semibold text-white">
                    Nowoczesne rozwiązania dla Twojego biznesu i domu
                </p>
                <p id="services-preview-description" class="text-base text-neutral-200">
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
            const serviceLinks = dropdown.querySelectorAll('.service-link');
            const previewTitle = document.getElementById('services-preview-title');
            const previewDescription = document.getElementById('services-preview-description');

            const defaultTitle = previewTitle ? previewTitle.textContent : '';
            const defaultDescription = previewDescription ? previewDescription.textContent : '';

            if (!servicesButton || !dropdown || !arrow) return;

            let hideTimeout = null;

            function showDropdown() {
                if (hideTimeout) {
                    clearTimeout(hideTimeout);
                    hideTimeout = null;
                }
                dropdown.classList.remove('hidden');
                arrow.classList.add('rotate-180');
                servicesButton.classList.add('text-brand');
            }

            function scheduleHide() {
                if (hideTimeout) {
                    clearTimeout(hideTimeout);
                }
                hideTimeout = setTimeout(() => {
                    dropdown.classList.add('hidden');
                    arrow.classList.remove('rotate-180');
                    servicesButton.classList.remove('text-brand');

                    if (previewTitle && previewDescription) {
                        previewTitle.textContent = defaultTitle;
                        previewDescription.textContent = defaultDescription;
                    }
                }, 200); // małe opóźnienie, żeby zdążyć wjechać na dropdown
            }

            const isMobile = () => window.innerWidth < 768;

            servicesButton.addEventListener('mouseenter', () => { if (!isMobile()) showDropdown(); });
            servicesButton.addEventListener('mouseleave', () => { if (!isMobile()) scheduleHide(); });
            dropdown.addEventListener('mouseenter', () => { if (!isMobile()) showDropdown(); });
            dropdown.addEventListener('mouseleave', () => { if (!isMobile()) scheduleHide(); });

            const mobileToggle = document.getElementById('mobile-menu-toggle');
            const hamburgerIcon = document.getElementById('hamburger-icon');
            const closeIcon = document.getElementById('close-icon');
            const mobileMenu = document.getElementById('mega-menu-main');

            if (mobileToggle && hamburgerIcon && closeIcon && mobileMenu) {
                const observer = new MutationObserver(() => {
                    const isOpen = !mobileMenu.classList.contains('hidden');
                    if (isOpen) {
                        hamburgerIcon.classList.add('scale-0', 'rotate-90', 'opacity-0');
                        hamburgerIcon.classList.remove('scale-100', 'rotate-0', 'opacity-100');
                        closeIcon.classList.add('scale-100', 'rotate-0', 'opacity-100');
                        closeIcon.classList.remove('scale-0', 'rotate-90', 'opacity-0');
                    } else {
                        hamburgerIcon.classList.add('scale-100', 'rotate-0', 'opacity-100');
                        hamburgerIcon.classList.remove('scale-0', 'rotate-90', 'opacity-0');
                        closeIcon.classList.add('scale-0', 'rotate-90', 'opacity-0');
                        closeIcon.classList.remove('scale-100', 'rotate-0', 'opacity-100');
                    }
                });
                observer.observe(mobileMenu, { attributes: true, attributeFilter: ['class'] });
            }

            serviceLinks.forEach(link => {
                link.addEventListener('mouseenter', () => {
                    if (!previewTitle || !previewDescription) return;
                    const title = link.getAttribute('data-title');
                    const description = link.getAttribute('data-description');
                    if (title) previewTitle.textContent = title;
                    if (description) previewDescription.textContent = description;
                });
            });
        });
    </script>
</nav>