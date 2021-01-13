@extends('layout/main')
@section('title', 'index')
@section ('container')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style:text>No </th>
      <th scope="col" style:text>Jenis </th>
      <th scope="col" style:text>Definis </th>
    </tr>
  </thead>
  <tbody>
    @foreach($jeniszakatmal as $hkh)
        <tr>
            <td>{{$hkh->No}}</td>
            <td>{{$hkh->Jenis}}</td>
            <td>{{$hkh->Definisi}}</td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection