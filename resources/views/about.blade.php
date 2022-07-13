@extends('layout.main')
@section('container')     
      <main>
        <h1>Laravel 9</h1>
        <p class="fs-5 col-md-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem odio fugit voluptas a ratione nulla ullam incidunt consequatur libero optio!</p>
    
        <div class="mb-5">
          <a href="/post" class="btn btn-primary btn-lg px-4">All post</a>
        </div>
    
        <hr>
    
        <div class="row g-5">
          <div class="col-md-6">
            <h2>Starter projects</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem nobis optio aspernatur unde rerum nostrum deleniti distinctio earum aliquam quam. Sed minima, fugiat doloribus non corrupti provident nihil inventore nobis.</p>
            <ul class="icon-list ps-0">
              <li class="d-flex align-items-start mb-1">Migration</li>
              <li class="d-flex align-items-start mb-1">Seeder</li>
              <li class="d-flex align-items-start mb-1">Middleware</li>
              <li class="d-flex align-items-start mb-1">Gate</li>
            </ul>
          </div>
    
          <div class="col-md-6">
            <h2>Feature</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem nobis optio aspernatur unde rerum nostrum deleniti distinctio earum aliquam quam. Sed minima, fugiat doloribus non corrupti provident nihil inventore nobis.</p>
            <ul class="icon-list ps-0">
              <li class="d-flex align-items-start mb-1">Bootstrap</li>
              <li class="d-flex align-items-start mb-1">MySql</li>
              <li class="d-flex align-items-start mb-1">API</li>
              <li class="d-flex align-items-start mb-1">Auth</li>
            </ul>
          </div>
        </div>
      </main>
      <footer class="pt-5 my-5 text-muted border-top">
        © 2022
      </footer>
@endsection