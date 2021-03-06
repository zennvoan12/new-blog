@extends('layouts.main')


@section('container')
    <h1 class="oleez-page-title wow fadeInUp text-center">{{ $title }}</h1>
    @if ($posts->count())
        <div class="card mb-3">
            @if ($posts[0]->image)
                <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}"
                    class="post-featured-image img-fluid" style="max-height:350px; overflow:hidden;">
            @else
                <img src="{{ URL('https://source.unsplash.com/user/erondu/1600x900?posts[0]->category->name') }}"
                    class="card-img-top" alt="{{ $posts[0]->category->name }}">
            @endif
            <div class="card-body text-center">
                <h3 class="card-title">
                    <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}
                    </a>
                </h3>
                <p><small class="text-muted">
                        By Posted <a href="/blog?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}
                        </a>
                        In <a href="/blog?category={{ $posts[0]->category->slug }}" class="">
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
                                    @if ($post->image)
                                        <img src="{{ asset('storage/' . $post->image) }}"
                                            alt="{{ $post->category->name }}" class="post-featured-image img-fluid"
                                            style="max-height:350px; overflow:hidden;">
                                    @else
                                        <img src="{{ URL('https://source.unsplash.com/user/erondu/1600x900?post->category->name') }}"
                                            class="card-img-top" alt="{{ $post->category->name }}">
                                    @endif
                                   
                                </div>
                            </a>
                            <p>By Posted <a
                                    href="/blog?author={{ $post->author->username }}">{{ $post->author->name }}
                                </a>
                                In <a href="/blog?category={{ $post->category->slug }}" class="">
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

    <div class="row">
        <div class="col-12 pb-5 mb-3">
            <nav class="oleez-pagination d-flex justify-content-center wow fadeInUp ">
                {{ $posts->links() }}
            </nav>
        </div>
    </div>
@endsection
