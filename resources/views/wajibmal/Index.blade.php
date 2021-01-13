@extends('layout/main')
@section('title', 'index')
@section ('container')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style:text>No </th>
      <th scope="col" style:text>Ketentuan </th>
    </tr>
  </thead>
  <tbody>
    @foreach($wajibmal as $hkh)
        <tr>
            <td>{{$hkh->No}}</td>
            <td>{{$hkh->Ketentuan}}</td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection