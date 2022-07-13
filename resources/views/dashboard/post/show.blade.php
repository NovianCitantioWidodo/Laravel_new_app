@extends('dashboard/layout/main')

@section('container')
        <div class="container">
            <div class="row my-3">
                <div class="col-lg-8">
                    <h1 class="mb-3">{{ $post->title }}</h1>
                    <a class="btn btn-success" href="/dashboard/post"><span data-feather="arrow-left"></span> back to all posts</a>
                    <a class="btn btn-warning" href="/dashboard/post/{{ $post->slug }}/edit"><span data-feather="edit"></span> edit</a>
                    <form action="/dashboard/post/{{ $post->slug }}" method="POST" class="d-inline" onclick="return confirm('delete post?')">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger"><span data-feather="x-circle"> delete</span></button>
                    </form>
                    
                    @if ($post->image)
                        <div style="max-height:400px; overflow:hidden;">
                            <img src="{{ asset('/storage/' . $post->image) }}" class="card-img-top mt-3" alt="{{ $post->category->name }}">                    
                        </div>
                    @else
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top mt-3" alt="{{ $post->category->name }}">
                    @endif

                    <article class="my-3 fs-5">
                        {!! $post->body !!}
                    </article>
                </div>
            </div>
        </div>
@endsection