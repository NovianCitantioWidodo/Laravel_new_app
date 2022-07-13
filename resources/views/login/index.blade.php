@extends('layout.main')

@section('container')
  <div class="row justify-content-center">
    <div class="col-md-4">
      <main class="form-signin">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
            </div>
        @endif

        @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show">
              {{ session('loginError') }}
              <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
            </div>
        @endif

        <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
        <form action="/login" method="POST">
          @csrf
          <div class="form-floating">
            <input type="email" name='email' class="form-control rounded-top @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
            <label for="email">Email address</label>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-floating">
            <input type="password" name="password" class="form-control rounded-bottom mb-3" id="password" placeholder="Password" required>
            <label for="password">Password</label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

        </form>
        <small class="d-blox text-center mt-3">Not registered? <a href="/register">Register now</a></small>
      </main>
    </div>
  </div>
@endsection