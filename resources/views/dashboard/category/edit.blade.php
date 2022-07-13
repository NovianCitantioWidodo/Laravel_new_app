@extends('dashboard/layout/main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit category</h1>
</div>

<div class="col-lg-8">
    <form class="mb-5" method="POST" action="/dashboard/category/{{ $category->slug }}">
      @method('put')
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $category->name) }}" required autofocus>
        @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Update category</button>
    </form>
</div>
@endsection