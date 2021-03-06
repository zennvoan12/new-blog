@extends('dashboard.layouts.main')


@section('container')
    <header class="p-2">
        <h1 class="">MY POST</h1>
    </header>
    <hr class="hr-3">
    @if (Session::has('success'))
        <script>
            swal('Congrats You ve Post', '{{ Session::get('success') }}', 'success');
        </script>
    @endif
    <main class="container-fluid">
        <div class="table-responsive col-lg-12">
            <a href="/dashboard/posts/create" role="button" class="btn btn-primary mb-3">Create new post </a>
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
                                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"> <i class="bi bi-pencil"></i> </a>
                                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0" onclick="return confirm('r u sure about that?')">
                                        <i class="bi bi-x-circle"></i></span> </button>


                                </form>

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </main>
@endsection
