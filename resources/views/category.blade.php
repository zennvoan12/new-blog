@extends('layouts.main')


@section('container')
    <main class="blog-grid-page">
        <div class="container">
            <h1 class="oleez-page-title wow fadeInUp">Post Category : {{ $category }}</h1>
            <div class="row">
                    @foreach ($posts as $post)
                    <div class="col-md-4">
                        <div class="blog-post-card wow fadeInUp">
                            <a href="/post/{{ $post->slug }}">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{ asset('assets/images/Bloggrid/Bloggrid_2@2x.jpg') }}" alt="blog">
                                </div>
                            </a>
                            <p class="blog-post-date">January 29, 2020</p>
                            <a href="/post/{{ $post->slug }}" class="text-decoration-none text-black-50 ouline text-base">
                                <h5 class="blog-post-title">{{ $post->title }}</h5>
                            </a>
                        </div>
                    </div>

                    @endforeach
                </div>
        </div>
    </main>
@endsection
