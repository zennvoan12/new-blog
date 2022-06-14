@extends('dashboard.layouts.main')


@section('container')
    <header class="p-2">
        <h1 class="">MY POST</h1>
    </header>
    <hr class="hr-3">

    <main class="container-fluid">
        <div class="table-responsive col-lg-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->category->name }}</td>
                            <td>
                                <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><i
                                        class="bi bi-eye"></i></span> </a>
                                <a href="" class="badge bg-warning"> <i class="bi bi-pencil"></i> </a>
                                <a href="" class="badge bg-danger"> <i class="bi bi-x-circle"></i></span> </a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </main>
@endsection