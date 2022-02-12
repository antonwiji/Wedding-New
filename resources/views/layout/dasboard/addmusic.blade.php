@extends('layout.dasboard.main')

@section('content')

    <h2> Add Music</h2>
    <form action="" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" class="form-control" name="nama_music">
    <button class="btn btn-success mt-3" type="submit">Upload Music</button>
    </form>
@endsection