@extends('layouts.main')

@section('container')
    <main class="blog-post-single">
        <div class="container">
            <h1 class="post-title wow fadeInUp"></h1>
            <div class="row">
                <div class="col-md-8 blog-post-wrapper">

                    <div class="post-header wow fadeInUp">
                        @if ($post->image)
                            <img src="https://source.unsplash.com/user/erondu/1080x720?{{ $post->category->name }}"
                                alt="{{ $post->category->name }}" class="post-featured-image img-fluid ">
                        @else
                            <img src="https://source.unsplash.com/user/erondu/1080x720?{{ $post->category->name }}"
                                style="max-height:350px; overflow:hidden;">
                        @endif
                        <p>By Posted <a href="/blog?author={{ $post->author->username }}"> {{ $post->author->name }}
                            </a> In <a href="/blog?category={{ $post->category->slug }}"
                                class="">{{ $post->category->name }}</a>
                        </p>
                        <p class="post-date">{{ $post->created_at->diffForHumans() }}</p>
                    </div>
                    <div class="post-content wow fadeInUp">
                        <h4>{{ $post->title }}</h4>
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
                    <div class="comment-section wow fadeInUp">
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
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sidebar-widget wow fadeInUp">
                        <h5 class="widget-title">Tags</h5>
                        <div class="widget-content">
                            <a href="#!" class="post-tag">Design Studio</a>
                            <a href="#!" class="post-tag">Creative Design</a>
                            <a href="#!" class="post-tag">Marketing</a>
                            <a href="#!" class="post-tag">Typography</a>
                            <a href="#!" class="post-tag">Team</a>
                            <a href="#!" class="post-tag">Project</a>
                        </div>
                    </div>
                    <div class="sidebar-widget wow fadeInUp">
                        <h5 class="widget-title">Share</h5>
                        <div class="widget-content">
                            <nav class="social-links">
                                <a href="#!">Fb</a>
                                <a href="#!">Tw</a>
                                <a href="#!">In</a>
                                <a href="#!">Be</a>
                            </nav>
                        </div>
                    </div>

                    <div class="sidebar-widget wow fadeInUp">
                        <h5 class="widget-title">Categories</h5>
                        <div class="widget-content">
                            <ul class="category-list">
                                <li><a href="#!">Animation</a></li>
                                <li><a href="#!">Branding</a></li>
                                <li><a href="#!">Graphic Design</a></li>
                                <li><a href="#!">Photography</a></li>
                                <li><a href="#!">Web Developing</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
