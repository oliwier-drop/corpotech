@extends('layouts.subpage')

@section('title', 'Realizacje')

@section('meta_description', 'Zobacz nasze realizacje: wdrożenia IT dla firm i domów, projekty z zakresu infrastruktury sieciowej, cyberbezpieczeństwa, stron internetowych oraz instalacji niskoprądowych i Smart Home. Sprawdź efekty naszych prac.')
@section('meta_keywords', 'realizacje, wdrożenia IT, infrastruktura sieciowa, cyberbezpieczeństwo, testy penetracyjne, audyt bezpieczeństwa, strony internetowe, SEO, hosting, Smart Home, automatyka domowa, instalacje niskoprądowe, okablowanie strukturalne, LAN, sieci komputerowe')
@section('meta_title', 'Realizacje - Corpotech')
@section('meta_image', asset('assets/images/logo/logo.png'))
@section('meta_og_image', asset('assets/images/logo/logo.png'))
@section('meta_robots', 'index, follow')

@section('content')
    <section id="projects-articles" class="py-12 sm:py-20">
        <div class="container mx-auto px-4">
            <div class="mb-12 text-center">
                <p
                    class="self-start inline font-sans text-xl font-medium text-brand">
                    Nasze realizacje
                </p>
                <h2 class="text-4xl font-bold text-gray-200">Przekonaj się, jak pomagamy firmom oraz domom</h2>
            </div>

            <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 xl:grid-cols-4">
                @forelse($posts as $post)
                    <a href="{{ route('post.show', ['slug' => $post->slug]) }}" class="group block overflow-hidden rounded-xl bg-brand-dark/60 shadow-md transition-transform duration-300 hover:-translate-y-1 hover:shadow-xl">
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
                                <span>Autor: {{ $post->author?->name }}</span>
                            </div>
                        </div>
                    </a>
                @empty
                    <p class="col-span-full text-center text-gray-200">Brak postów do wyświetlenia.</p>
                @endforelse
            </div>
        </div>
    </section>
@endsection