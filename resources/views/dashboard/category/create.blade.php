@extends('dashboard/layout/main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Add category</h1>
</div>

<div class="col-lg-8">
    <form class="mb-5" method="POST" action="/dashboard/category">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control @error('category') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required autofocus>
          @error('category')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <input type="hidden" class="form-control" id="slug" name="slug">
        <button type="submit" class="btn btn-primary">Create category</button>
    </form>
</div>
@endsection