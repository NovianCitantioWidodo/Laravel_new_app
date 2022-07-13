@extends('layout.main')
@section('container')

    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-8">
                <h2 class="mb-3">{{ $post->title }}</h2>
                <p>By <a class="text-decoration-none" href="/post?author={{ $post->user->username }}">{{ $post->user->name }}</a> in <a class="text-decoration-none" href="/post?category={{ $post->category->slug }}">{{ $post->category->name }}</a> </p>
                @if ($post->image)
                    <div style="max-height:400px; overflow:hidden;">
                        <img src="{{ asset('/storage/' . $post->image) }}" class="card-img-top mt-3" alt="{{ $post->category->name }}">                    
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top mt-3" alt="{{ $post->category->name }}">
                @endif
                <article class="my-4 fs-5">
                    {!! $post->body !!}
                    <a class="text-decoration-none btn btn-primary" href="/post" class="d-block mt-3">< back to blog</a>
                </article>
            </div>
        </div>
    </div>
        
@endsection