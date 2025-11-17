@extends('layout.dasboard.main')

@section('content')

@if(session()->has('succes'))
 
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{session('succes')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<h2>Pilih Template Undangan Anda</h2>
<div class="row">
    <div class="col-6">
        <div class="card" style="width: 100%;">
            <img src="src/Tema Classic.png" class="img-fluid" alt="clasiktame">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="demo/classic" class="btn btn-outline-success">Lihat Undangan</a>
                <a href="/create/themes/classic" class="btn btn-primary">Pilih Tema</a>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card" style="width: 100%;">
            <img src="src/themes/modern/modern.png" class="img-fluid" alt="clasiktame">
            <div class="card-body">
                <h5 class="card-title">Modern Themes</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="/demo/modern" class="btn btn-outline-success">Lihat Undangan</a>
                <a href="/create/themes/modern" class="btn btn-primary">Pilih Tema</a>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card" style="width: 100%;">
            <img src="src/themes/modern/modern.png" class="img-fluid" alt="clasiktame">
            <div class="card-body">
                <h5 class="card-title">Modern Elegan</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="/demo/modern" class="btn btn-outline-success">Lihat Undangan</a>
                <a href="/create/themes/elegan" class="btn btn-primary">Pilih Tema</a>
            </div>
        </div>
    </div>
</div>



@endsection