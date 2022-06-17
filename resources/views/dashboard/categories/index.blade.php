@extends('dashboard.layouts.main')


@section('container')
    <header class="p-2">
        <h1 class=""> POST Categories</h1>
    </header>
    <hr class="hr-3">
    @if (Session::has('success'))
        <script>
            swal('Congrats You ve Post', '{{ Session::get('success') }}', 'success');
        </script>
    @endif
    <main class="container-fluid">
        <div class="table-responsive col-lg-8">
            <a href="/dashboard/categories/create" role="button" class="btn btn-primary mb-3">Create new category </a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $category->name }}</td>

                            <td>
                                <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info"><i
                                        class="bi bi-eye"></i></span> </a>
                                <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning"> <i
                                        class="bi bi-pencil"></i> </a>
                                <form action="/dashboard/categories/{{ $category->slug }}" method="POST"
                                    class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0"
                                        onclick="return confirm('r u sure about that?')">
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
