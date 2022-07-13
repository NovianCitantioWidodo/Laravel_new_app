@extends('layout.main')

@section('container')
<main>
    <div class="container py-4">
      <div class="p-5 mb-4 bg-light rounded-3" style="background-image: url('https://source.unsplash.com/1200x400');">
        <div class="container-fluid py-5" style="background-color: rgba(255, 255, 255, 0.6)">
          <h1 class="display-5 fw-bold">Posts</h1>
          <p class="col-md-8 fs-4"">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur iste quis excepturi sed. Quo, animi? Deleniti illum temporibus soluta neque!</p>
        </div>
      </div>
  
      <div class="row align-items-md-stretch">
        <div class="col-md-6">
          <div class="h-100 p-5 text-white bg-dark rounded-3">
            <h2>Category</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus dignissimos est facilis animi explicabo molestias labore itaque modi dolores porro?</p>
            <a href="/login" class="btn btn-outline-light" type="button">Login</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="h-100 p-5 bg-light border rounded-3">
            <h2>Account</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error, aperiam quos! Recusandae sint iure magni exercitationem, quisquam, voluptatem odit aliquam nemo, ex laboriosam totam debitis.</p>
            <a href="/register" class="btn btn-outline-secondary" type="button">Register</a>
          </div>
        </div>
      </div>
  
      <footer class="pt-3 mt-4 text-muted border-top">
        © 2022
      </footer>
    </div>
  </main>
@endsection