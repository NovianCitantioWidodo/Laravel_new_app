@extends('layout.main')
@section('container')
    <h2 class="mb-5">{{ $title }}</h2>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4">
                <a href="/category/{{ $category->slug }}">
                    <div class="card bg-dark text-white">
                        <img src="https://source.unsplash.com/500x400?{{ $category->name }} class="card-img" alt="...">
                        <div class="card-img-overlay d-flex align-items-center p-0" >
                            <h5 class="card-title text-center flex-fill p-4 fs-3" href="/category/{{ $category->slug }}" style="background-color: rgba(0, 0, 0, 0.6)">{{ $category->name }}</h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
@endsection