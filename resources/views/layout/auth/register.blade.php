@extends('layout.auth.main')

@section('content')

<main class="form-signin">
  <form action="/register" method="post">
    @csrf
    <h1 class="h3 mb-3 fw-normal">Please sign Up</h1>

    <div class="form-floating">
      <input name="nama" type="text" class="form-control" id="nama_lengkap" require placeholder="Nama Lengkap" required>
      <label for="nama_lengkap">Nama Lengkap</label>
    </div>
    <div class="form-floating">
      <input name="email" type="email" required class="form-control" id="email" placeholder="name@example.com">
      <label for="email">Email address</label>
    </div>
    <div class="form-floating">
      <input name="password" type="password" required class="form-control" id="password" placeholder="Password">
      <label for="password">Password</label>
    </div>
    <div class="form-floating">
      <input name="no_phone" type="no_handphone" required class="form-control" id="no_handphone" placeholder="0857900...">
      <label for="no_handphone">No Handphone</label>
    </div>
    
    <button class="mt-3 w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
</form>
  <small><a href="login">Sudah Punya Akun Login disini</a></small>
  <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
</main>


@endsection
