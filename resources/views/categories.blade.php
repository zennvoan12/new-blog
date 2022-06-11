@extends('layouts.main')


@section('container')
    <h1 class="oleez-page-title wow fadeInUp">Post Categories</h1>


    <div class="cotainer">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4 p-3">
                    <a href="/blog?category={{ $category->slug }}" class="text-decoration-none text-white">
                        <div class="card bg-dark text-white">
                            <img src="https://source.unsplash.com/user/erondu/500x500?{{ $category->name }}"
                                class="card-img" alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill p-4 fs-3"
                                    style="background-color: rgba(0,0,0,0.7)">
                                    {{ $category->name }}</h5>
                            </div>
                    </a>
                </div>
        </div>
        @endforeach
    </div>

    </div>
@endsection
