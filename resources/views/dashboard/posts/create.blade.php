@extends('dashboard.layouts.main')

@section('container')
    <header class="p-2">
        <h1 class="">CREATE NEW POST</h1>
    </header>
    <hr class="hr-3">

    <main class="content-lg-fluid">
        <form method="post" action="/dashboard/posts">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" disabled readonly>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category_id">
                @foreach ($categories as $category)

                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <input id="body" type="hidden" name="body">
                <trix-editor input="body"></trix-editor>
            </div>




            <button type="submit" class="btn btn-primary">Create Post</button>
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

        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
            
        });
    </script>
@endsection
