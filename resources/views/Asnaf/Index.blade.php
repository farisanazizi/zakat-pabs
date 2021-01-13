@extends('layout/main')
@section('title', 'index')
@section ('container')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style:text>No </th>
      <th scope="col" style:text>Golongan </th>
      <th scope="col" style:text>Definis </th>
    </tr>
  </thead>
  <tbody>
    @foreach($asnafzakat as $hkh)
        <tr>
            <td>{{$hkh->No}}</td>
            <td>{{$hkh->Golongan}}</td>
            <td>{{$hkh->Definisi}}</td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection