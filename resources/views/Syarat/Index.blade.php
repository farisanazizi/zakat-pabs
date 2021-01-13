@extends('layout/main')
@section('title', 'index')
@section ('container')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style:text>No </th>
      <th scope="col" style:text>Syarat Wajib Zakat </th>
    </tr>
  </thead>
  <tbody>
    @foreach($syaratzakat as $hkh)
        <tr>
            <td>{{$hkh->No}}</td>
            <td>{{$hkh->Syarat}}</td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection