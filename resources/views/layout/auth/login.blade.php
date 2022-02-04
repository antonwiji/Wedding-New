@extends('layout.auth.main')

@section('content')

<main class="form-signin">

  <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
@if(session()->has('success'))
 
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{session('success')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

@endif

@if(session()->has('loginGagal'))
 
 <div class="alert alert-danger alert-dismissible fade show" role="alert">
   {{session('loginGagal')}}
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>

 @endif

  <form class="mb-3" action="/login" method="post">
    @csrf
    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
  </form>
  <small><a href="register">Tidak Punya Akun Daftar Disini !!</a></small>
  <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
</main>


@endsection

    
  
