@extends('layouts.main')


@section('container')
    <h1 class="oleez-page-title wow fadeInUp">{{ $title }}</h1>
    @if ($posts->count())
        <div class="card mb-3">
            <img src="{{ URL('https://source.unsplash.com/user/erondu/1600x900?posts[0]->category->name') }}"
                class="card-img-top" alt="{{ $posts[0]->category->name }}">
            <div class="card-body text-center">
                <h3 class="card-title">
                    <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}
                    </a>
                </h3>
                <p><small class="text-muted">
                        By Posted <a href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}
                        </a>
                        In <a href="/categories/{{ $posts[0]->category->slug }}" class="">
                            {{ $posts[0]->category->name }}</a> </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/post/{{ $posts[0]->slug }}" class="post-permalink btn btn-outline-dark">READ MORE</a>
                <p class="card-text"><small class="text-muted">
                        {{ $posts[0]->created_at->diffForHumans() }}</small></p>
            </div>
        </div>
    @else
        <main class="error-page">
            <div class="container">
                <h1 class="error-code wow fadeInUp">404</h1>
                <p class="error-description wow fadeInUp">Oops! The page you are looking for does not exist. It might have
                    been removed or deleted.Go back to home page now, or stay, it is quiet out here.</p>
            </div>
        </main>
    @endif






    <main class="blog-grid-page">
        <div class="container">

            <div class="row">
                @foreach ($posts->skip(1) as $post)
                <div class="col-md-4">
                        <div class="blog-post-card wow fadeInUp">
                            <div class="position-absolute bg-dark px-3 py-2 " style="background-color: rgba(0, 0, 0, 0.3)">
                                <a href="/categories/{{ $post->category->slug }}"
                                    class="text-white text-decoration-none">{{ $post->category->name }} </a>
                            </div>
                            <a href="/post/{{ $post->slug }}">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="https://source.unsplash.com/user/erondu/1600x900?{{ $post->category->name }}"
                                        alt="$post->category->name">
                                </div>
                            </a>
                            <p>By Posted <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}
                                </a>
                                In <a href="/categories/{{ $post->category->slug }}" class="">
                                    {{ $post->category->name }}</a>
                            </p>
                            <p class="blog-post-date">{{ $posts[0]->created_at->diffForHumans() }}</p>
                            <a href="/post/{{ $post->slug }}"
                                class="text-decoration-none text-black-50 ouline text-base">
                                <h5 class="blog-post-title">{{ $post->title }}</h5>
                                <p>
                                    {{ $post->excerpt }}
                                    <a href="/post/{{ $post->slug }}" class="post-permalink">READ MORE</a>
                                </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
