@extends('dashboard.layouts.main')

@section('container')
    <header class="p-2">
        <h1 class="">Edit POST</h1>
    </header>
    <hr class="hr-3">

    <main class="content-lg-fluid">
        <form method="post" action="/dashboard/posts/{{ $post->slug }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                    name="title" required autofocus value="{{ old('title', $post->title) }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                    readonly required value="{{ old('slug', $post->slug) }}">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                        @if (old('category_id', $post->category_id) == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Post Image</label>
                <input type="hidden" name="oldImage" value="{{ $post->image }}">
                @if ($post->image)
                <img src="{{ asset('storage/'. $post->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">

                @else
                <img src="" class="img-preview img-fluid mb-3 col-sm-5">

                @endif
                <input class="form-control  @error('image') is-invalid @enderror" type="file" onchange="previewImage()"
                    name="image" id="image">
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                @error('body')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                <trix-editor input="body"></trix-editor>
            </div>




            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>
    </main>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug);

        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();

        });

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFReader) {
                imgPreview.src = oFReader.target.result;
            }

        }
    </script>
@endsection
