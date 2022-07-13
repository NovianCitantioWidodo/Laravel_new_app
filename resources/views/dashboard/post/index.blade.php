@extends('dashboard/layout/main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Posts</h1>
</div>
@if (session()->has('success'))
    <div class="col-lg-8 alert alert-success alert-dismissible fade show">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
    </div>
@endif
<div class="table-responsive col-lg-8">
    <a class="btn btn-primary mb-3" href="/dashboard/post/create">add new post <span data-feather="plus"></span></a>
    <table class="table table-striped table-sm">
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
                <td>{{ $loop->iteration}}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->category->name }}</td>
                <td>
                    <a class="badge bg-info" href="/dashboard/post/{{ $post->slug }}"><span data-feather="eye"></span></a>
                    <a class="badge bg-warning" href="/dashboard/post/{{ $post->slug }}/edit"><span data-feather="edit"></span></a>
                    <form action="/dashboard/post/{{ $post->slug }}" method="POST" class="d-inline" onclick="return confirm('delete post?')">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0"><span data-feather="x-circle"></span></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection