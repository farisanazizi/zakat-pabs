@extends('layout/main')
@section('title', 'index')
@section ('container')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">NAMA</th>
      <th scope="col">NIM</th>
      <th scope="col">EMAIL</th>
      <th scope="col">JURUSAN</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>
    @foreach($mahasiswa as $mhs)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$mhs->nama}}</td>
            <td>{{$mhs->nim}}</td>
            <td>{{$mhs->email}}</td>
            <td>{{$mhs->jurusan}}</td>
            <td>
                <a href="" class="badge badge-success">edit</a>
                <a href="" class="badge badge-danger">delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection