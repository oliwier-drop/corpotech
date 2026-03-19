@extends('layouts.subpage')

@section('title', $post->title)
@section('breadcrumb_parent', 'Realizacje')
@section('breadcrumb_parent_url', route('projects'))

@section('meta_description', $post->meta_description ?? $post->excerpt ?? $post->title)
@section('meta_keywords', $post->meta_keywords ?? '')
@section('meta_robots', $post->meta_robots ?? 'index, follow')

@php
    $ogImage = $post->image_path ? asset('storage/' . $post->image_path) : null;
@endphp

@if($ogImage)
    @section('meta_og_image', $ogImage)
@endif

@section('content')
    @php
        $fallbackHeroImage = 'https://api.time.com/wp-content/uploads/2020/07/never-trumpers-2020-election-01.jpg?quality=85&w=1201&h=676&crop=1';
        $heroImage = $post->image_path ? asset('storage/' . $post->image_path) : $fallbackHeroImage;

        $rawKeywords = $post->meta_keywords ?? '';
        $tags = collect(preg_split('/\s*,\s*/', $rawKeywords, -1, PREG_SPLIT_NO_EMPTY))
            ->map(fn ($t) => ltrim(trim((string) $t), '#'))
            ->filter()
            ->values();
        $authorName = $post->author?->name ?? 'Corpotech';
        $publishedDate = $post->created_at?->format('Y-m-d') ?? '-';
        $categoryNames = $post->categories->pluck('name')->join(', ');
    @endphp

    <div class="pb-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-10">
            <h1 class="text-white font-bold text-4xl sm:text-5xl leading-tight mb-8 text-center">
                {{ $post->title }}
            </h1>

            {{-- Zdjęcie w ramce --}}
            <div class="max-w-6xl mx-auto">
                <div class="overflow-hidden rounded-3xl border border-white/10 shadow-sm">
                    <img
                        src="{{ $heroImage }}"
                        alt="{{ $post->title }}"
                        class="w-full h-[320px] sm:h-[420px] object-cover"
                        loading="lazy"
                    />
                </div>
            </div>

            {{-- Treść posta --}}
            <div class="max-w-6xl mx-auto mt-8">
                <div class="text-white">
                    <div class="p-6 sm:p-10">
                        <div class="mb-6 flex flex-wrap items-center gap-x-4 gap-y-2 text-sm text-white/90">
                            <span>Autor: <span class="font-medium text-white">{{ $authorName }}</span></span>
                            <span>Data: <span class="font-medium text-white">{{ $publishedDate }}</span></span>
                            <span>Kategoria: <span class="font-medium text-white">{{ $categoryNames ?: 'Bez kategorii' }}</span></span>
                        </div>

                        <article
                            class="max-w-none text-white
                            [&_h2]:text-2xl [&_h2]:font-bold [&_h2]:mt-8 [&_h2]:mb-4
                            [&_h3]:text-xl [&_h3]:font-semibold [&_h3]:mt-6 [&_h3]:mb-3
                            [&_p]:text-white/90 [&_p]:leading-8 [&_p]:my-4
                            [&_em]:italic [&_em]:text-white/90
                            [&_strong]:font-semibold [&_strong]:text-white
                            [&_ul]:list-disc [&_ul]:pl-6 [&_ul]:my-4 [&_ul]:space-y-2
                            [&_ol]:list-decimal [&_ol]:pl-6 [&_ol]:my-4 [&_ol]:space-y-2
                            [&_li]:text-white/90
                            [&_a]:text-brand [&_a]:underline [&_a]:underline-offset-4 [&_a]:hover:text-white
                            [&_blockquote]:border-l-4 [&_blockquote]:border-brand
                            [&_blockquote]:pl-4 [&_blockquote]:italic [&_blockquote]:text-white/90
                            [&_blockquote]:my-4
                            [&_code]:bg-white/10 [&_code]:px-2 [&_code]:py-0.5 [&_code]:rounded [&_code]:text-white
                            [&_pre]:bg-white/10 [&_pre]:p-4 [&_pre]:rounded [&_pre]:overflow-auto [&_pre]:text-white [&_pre]:my-4"
                        >
                            {!! $post->content !!}
                        </article>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(isset($recentPosts) && $recentPosts->isNotEmpty())
        <section id="last-projects" class="px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-10">
            <div class="mb-12 text-center">
                <h2 class="mb-4 text-3xl font-bold text-brand sm:text-4xl">Ostatnie realizacje</h2>
            </div>

            <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 xl:grid-cols-4">
                @foreach($recentPosts as $post)
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

