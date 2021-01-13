@extends('layout/main')
@section('title', 'index')
@section ('container')

<!-- <a href="/donatur/create" class="btn btn-primary my-3">Tambah Data</a>
@if (session('status'))
 <div class="alert alert-success">
 {{ session('status')}}
 </div>
@endif -->

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">NAMA</th>
      <th scope="col">ALAMAT</th>
      <th scope="col">No HP</th>
      <th> </th>
      <!-- <th scope="col">AKSI</th> -->
    </tr>
  </thead>
  <tbody>
    @foreach($donatur as $dnt)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$dnt->Nama}}</td>
            <td>{{$dnt->Alamat}}</td>
            <td>{{$dnt->NoHP}}</td>
            <td>
                <!-- <a href="" class="badge badge-success">edit</a>
                <a href="" class="badge badge-danger">delete</a> -->
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection