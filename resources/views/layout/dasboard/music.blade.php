@extends('layout.dasboard.main')

@section('content')

@if(session()->has('success_add'))
 
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{session('success_add')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

@endif

@if(session()->has('succes_hapus'))
 
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{session('succes_hapus')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

@endif

<h2>Dasboard</h2>
        <a href="create/add"><button class="btn btn-primary mt-2 mb-4$(document).ready( function () {
    $('#table_id').DataTable();
} );">Add Music</button></a>

<table id="table_id" class="display">
    <thead>
        <tr>
            <th>No </th>
            <th>Nama Music</th>
            <th>Aksi</th>
        </tr>
        
    </thead>
    @foreach($datas as $data)
    <tbody>
       <td>#</td>
       <td>{{$data->nama_music}}</td>
       <td><a class="btn btn-danger" href="delete/{{$data->id}}" onclick="return confirm('yakin Hapus Music ?');">Hapus</a></td>
    </tbody>
    @endforeach
</table>


@endsection