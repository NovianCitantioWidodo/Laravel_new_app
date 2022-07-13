@extends('layout.main')

@section('container')
  <div class="row justify-content-center">
    <div class="col-md-4">
      <main class="form-registration">
        <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
        <form action="/register" method="POST">
          @csrf
          <div class="form-floating">
            <input type="text" name='name' class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="name" value="{{ old('name') }}" required>
            <label for="name">Name</label>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-floating">
            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" value="{{ old('username') }}" required>
            <label for="username">Username</label>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-floating">
            <input type="email" name='email' class="form-control rounded-top @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}" required>
            <label for="email">Email address</label>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-floating">
            <input type="password" name='password' class="form-control rounded-bottom mb-3 @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
            <label for="password">Password</label>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>

        </form>
      </main>
    </div>
  </div>
@endsection