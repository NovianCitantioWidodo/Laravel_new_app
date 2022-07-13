@extends('layout.main')
@section('container')
    <h1 class="mb-5 text-center">{{ $title }}</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/post">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name='search' value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3">
            @if ($posts[0]->image)
                <div style="max-height:400px; overflow:hidden;">
                    <img src="{{ asset('/storage/' . $posts[0]->image) }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">                    
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
            @endif
            <div class="card-body text-center">
            <h5 class="card-title"><a href="/post/{{ $posts[0]->slug }}" class="text-dark text-decoration-none">{{ $posts[0]->title }}</a></h5>
            <small class="text-muted">
                <p class="card-text">
                    By <a class="text-decoration-none" href="/post?author={{ $posts[0]->user->username }}">{{ $posts[0]->user->name }}</a> in <a class="text-decoration-none" href="/post?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> 
                {{ $posts[0]->created_at->diffForHumans() }}
                </p>
            </small>
            <p class="card-text"> {{ $posts[0]->excerpt }} </p>
            <a href="/post/{{ $posts[0]->slug }}" class="btn btn-primary">Read more</a>
            </div>
        </div>
    
        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.6)">
                            <a href="/post?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a>
                        </div>
                        @if ($post->image)
                            <div style="max-height:400px; overflow:hidden;">
                                <img src="{{ asset('/storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->category->name }}">                    
                            </div>
                        @else
                            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                        @endif
                        <div class="card-body">
                        <h5 class="card-title"><a class="text-decoration-none" href="/post/{{ $post->slug }}">{{ $post->title }}</a></h5>
                        <small class="text-muted">
                            <p class="card-text">
                                By <a class="text-decoration-none" href="/post?author={{ $post->user->username }}">{{ $post->user->name }}</a>
                            {{ $post->created_at->diffForHumans() }}
                            </p>
                        </small>
                        <p class="card-text"> {{ $post->excerpt }} </p>
                        <a class="text-decoration-none" href="/post/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    <div class="d-flex justify-content-end">
        {{ $posts->links()}}
    </div>
    
    @else
    <p class="text-center fs-4">Not found post</p>
    @endif
    
@endsection