@extends('layouts.subpage')

@section('title', 'Realizacje')

@section('meta_description', 'Realizacje')
@section('meta_keywords', 'Realizacje')
@section('meta_robots', 'index, follow')

@section('content')
    <style>
        /* Main Blog Container */
        .blog-section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .blog-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .blog-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 1rem;
        }

        .blog-subtitle {
            font-size: 1.2rem;
            color: #4a5568;
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* Blog Posts Grid */
        .blog-posts {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2rem;
        }

        /* Individual Blog Post Card */
        .blog-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }

        .blog-card-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .blog-card-content {
            padding: 1.5rem;
        }

        .blog-card-category {
            display: inline-block;
            background: #4299e1;
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
        }

        .blog-card-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 0.75rem;
            line-height: 1.3;
        }

        .blog-card-excerpt {
            color: #4a5568;
            margin-bottom: 1.25rem;
            line-height: 1.6;
        }

        .blog-card-meta {
            display: flex;
            align-items: center;
            font-size: 0.9rem;
            color: #718096;
        }

        .blog-card-date {
            margin-right: 1rem;
        }

        .blog-card-author {
            display: flex;
            align-items: center;
        }

        .author-avatar {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            margin-right: 0.5rem;
            object-fit: cover;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .blog-section {
                padding: 3rem 1.5rem;
            }

            .blog-title {
                font-size: 2rem;
            }

            .blog-subtitle {
                font-size: 1.1rem;
            }

            .blog-posts {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <section class="blog-section">
        <div class="blog-header">
            <h2 class="blog-title text-brand">Ostatnie realizacjie</h2>
            <p class="blog-subtitle">Odkryj nasze ostatnie realizacje, które pomagają nam wspierać naszych klientów w ich działalności.</p>
        </div>

        <div class="blog-posts">
            @forelse($posts as $post)
                <article class="blog-card">
                    <img
                        src="{{ $post->image_path ? asset('storage/' . $post->image_path) : asset('assets/images/team/placeholder.png') }}"
                        alt="{{ $post->title }}"
                        class="blog-card-image">
                    <div class="blog-card-content">
                        <span class="blog-card-category">Realizacje</span>
                        <h3 class="blog-card-title">
                            <a href="{{ url('/realizacje/' . $post->slug) }}" class="hover:underline">
                                {{ $post->title }}
                            </a>
                        </h3>
                        <p class="blog-card-excerpt">
                            {{ $post->excerpt ?? \Illuminate\Support\Str::limit(strip_tags($post->content ?? ''), 160) }}
                        </p>
                        <div class="blog-card-meta">
                            <span class="blog-card-date">{{ $post->created_at?->format('Y-m-d') }}</span>
                        </div>
                    </div>
                </article>
            @empty
                <p class="text-center text-gray-700">Brak postów do wyświetlenia.</p>
            @endforelse
        </div>
    </section>

@endsection