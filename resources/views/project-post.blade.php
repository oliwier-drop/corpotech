@extends('layouts.subpage')

@section('title', $post->title)

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
        $inTags = $tags->take(2);
        $authorName = $post->author ?? 'Corpotech';
    @endphp

    <div class="pb-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-10">
            <h1 class="text-white font-bold text-4xl sm:text-5xl leading-tight mb-8 text-center">
                {{ $post->title }}
            </h1>

            {{-- Zdjęcie w ramce --}}
            <div class="max-w-5xl mx-auto">
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
            <div class="max-w-5xl mx-auto mt-8">
                <div class="text-white">
                    <div class="p-6 sm:p-10">
                        <p class="text-white/90 text-xs mt-0">
                            Written By:
                            <a
                                href="#"
                                class="text-white font-medium hover:text-gray-200 transition duration-500 ease-in-out"
                            >
                                {{ $authorName }}
                            </a>
                            In
                            @if($inTags->isNotEmpty())
                                @foreach($inTags as $inTag)
                                    <a
                                        href="#"
                                        class="text-xs text-white font-medium hover:text-gray-200 transition duration-500 ease-in-out"
                                    >
                                        {{ $inTag }}
                                    </a>
                                    @unless($loop->last)
                                        <span class="text-xs text-white/50">,</span>
                                    @endunless
                                @endforeach
                            @else
                                <a
                                    href="#"
                                    class="text-xs text-white font-medium hover:text-gray-200 transition duration-500 ease-in-out"
                                >
                                    Article
                                </a>
                            @endif
                        </p>

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

                        @if($tags->isNotEmpty())
                            <div class="mt-4 flex flex-wrap gap-x-2 gap-y-2 items-center">
                                @foreach($tags as $tag)
                                    <a
                                        href="#"
                                        class="text-xs text-white font-medium hover:text-gray-200 transition duration-500 ease-in-out"
                                    >
                                        #{{ $tag }}
                                    </a>
                                    @unless($loop->last)
                                        <span class="text-xs text-white/50">,</span>
                                    @endunless
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

