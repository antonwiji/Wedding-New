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
} );">Buat Undangan</button></a>

<table id="table_id" class="display">
    <thead>
        <tr>
            <th>No </th>
            <th>Column 2</th>
            <th>Aksi</th>
        </tr>
        
    </thead>
    <tbody>
        @foreach($datas as $data)
            <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->nama_lengkap_l}}</td>
            <td><a href="/{{$data->slug}}"><button class="btn btn-primary">Cek!</button></a>
            <a onclick="return confirm('yakin Hapus Data ?');" href="hapus/{{$data->id}}"><button class="btn btn-danger">Hapus!</button></a>
            <a href="edit/{{$data->id}}"><button class="btn btn-warning">Edit</button></a>
            </td>
            </tr>

        @endforeach
    </tbody>
</table>


@endsection