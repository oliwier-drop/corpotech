<section id="hero-subpage" class="pt-32 pb-12 overflow-hidden">
    <div class="container mx-auto px-4">
        <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse flex-wrap">
            <li class="inline-flex items-center">
                <a href="{{ url('/') }}" class="inline-flex items-center text-sm font-medium text-white hover:text-fg-brand">
                    <svg class="w-4 h-4 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5"/></svg>
                    Strona główna
                </a>
            </li>
            @if(isset($breadcrumb_parent) && isset($breadcrumb_parent_url))
            <li>
                <div class="flex items-center space-x-1.5">
                    <svg class="w-3.5 h-3.5 rtl:rotate-180 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/></svg>
                    <a href="{{ $breadcrumb_parent_url }}" class="text-sm font-medium text-white hover:text-fg-brand">{{ $breadcrumb_parent }}</a>
                </div>
            </li>
            @endif
            <li>
                <div class="flex items-center space-x-1.5">
                    <svg class="w-3.5 h-3.5 rtl:rotate-180 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/></svg>
                    <span class="inline-flex items-center text-sm font-medium text-white">@yield('title')</span>
                </div>
            </li>
        </ol>
        </nav>

        <div class="mt-6 flex flex-col md:flex-row md:items-center md:justify-between gap-8 min-w-0">
            <div class="space-y-2 md:space-y-3 max-w-2xl min-w-0">
                <h1 class="text-2xl md:text-4xl lg:text-5xl font-bold text-left text-white">@yield('title')</h1>
                <p class="text-sm md:text-lg lg:text-xl font-medium text-white">
                    @yield('description')
                </p>
            </div>
            <div class="flex-1 md:max-w-sm lg:max-w-md h-48 w-auto">
            <div class="-mr-24 rounded-lg md:rounded-l-full bg-gradient-to-br from-brand-dark to-brand/60 h-96"></div>
            </div>
        </div>
    </div>
</section>