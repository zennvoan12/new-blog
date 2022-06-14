@extends('dashboard.layouts.main')


@section('container')
    <header class="p-2">
        <h1 class="">MY POST</h1>
    </header>
    <hr class="hr-3">
    <main class="blog-post-single my-3">
        <div class="container">
            <h1 class="post-title wow fadeInUp"></h1>
            <div class="row-cols-auto">
                <div class="col-xl-8 blog-post-wrapper">

                    <div class="post-header-fluid wow fadeInDown">
                        <a href="/dashboard/posts" class="btn btn-success my-3 "> <i class="bi bi-backspace"></i> Back to My Post</a>
                        <img src="https://source.unsplash.com/user/erondu/1080x720?{{ $post->category->name }}"
                            alt="{{ $post->category->name }}" class="post-featured-image img-fluid ">
                        <p class="post-date">{{ $post->created_at->diffForHumans() }}</p>
                    </div>
                    <div class="post-content wow fadeInUp">
                        <h4>{{ $post->title }}</h4>
                        {!! $post->body !!}
                        {!! $post->body !!}
                        <blockquote class="blockquote wow fadeInUp">
                            {!! $post->body !!}
                        </blockquote>
                        <h5>{{ $post->title }}</h4>
                            {!! $post->body !!}
                            <h5>{{ $post->title }}</h4>
                                {!! $post->body !!}
                    </div>
                    <div class="post-tags wow fadeInUp">
                        <a href="#!" class="post-tag">Design Studio</a>
                        <a href="#!" class="post-tag">Creative Design</a>
                    </div>
                    <div class="post-navigation wow fadeInUp">
                        <button class="btn prev-post"> Prev Post</button>
                        <button class="btn next-post"> Next Post</button>
                    </div>
                    {{-- <div class="comment-section wow fadeInUp">
                        <h5 class="section-title">Leave a Reply</h5>
                        <form action="POST" class="oleez-comment-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="oleez-input" id="fullName" name="fullName" required>
                                    <label for="fullName">*Full name</label>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="oleez-input" id="fullName" name="email" required>
                                    <label for="email">*Email</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="message">*Message</label>
                                    <textarea name="message" id="message" rows="10" class="oleez-textarea" required></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-submit">Send</button>
                                </div>
                            </div>
                        </form>
                    </div> --}}
                </div>

            </div>
        </div>
    </main>
@endsection
