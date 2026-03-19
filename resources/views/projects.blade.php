@extends('layouts.subpage')

@section('title', 'Realizacje')

@section('meta_description', 'Realizacje')
@section('meta_keywords', 'Realizacje')
@section('meta_robots', 'index, follow')

@section('content')
    <section id="projects" class="mx-auto max-w-[1200px] px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
        <div class="mb-12 text-center">
            <h2 class="mb-4 text-3xl font-bold text-brand sm:text-4xl">Ostatnie realizacjie</h2>
            <p class="mx-auto max-w-3xl text-base leading-relaxed text-gray-200 sm:text-lg">Odkryj nasze ostatnie realizacje, które pomagają nam wspierać naszych klientów w ich działalności.</p>
        </div>

        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 xl:grid-cols-3">
            @forelse($posts as $post)
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
                            <span>Autor: {{ $post->author?->name }}</span>
                        </div>
                    </div>
                </a>
            @empty
                <p class="col-span-full text-center text-gray-200">Brak postów do wyświetlenia.</p>
            @endforelse
        </div>
    </section>

@endsection