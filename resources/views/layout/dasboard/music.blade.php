@extends('layout.dasboard.main')

@section('content')

@if(session()->has('update_succes'))
 
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{session('update_succes')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

@endif

<h2>Dasboard</h2>
        <a href="/create"><button class="btn btn-primary mt-2 mb-4$(document).ready( function () {
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
       <td>Hapus</td>
    </tbody>
    @endforeach
</table>


@endsection