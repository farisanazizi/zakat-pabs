@extends('layout/main')
@section('title', 'index')
@section ('container')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style:text># </th>
      <th scope="col" style:text>Penjelasan </th>
    </tr>
  </thead>
  <tbody>
    @foreach($zakatemas as $hkh)
        <tr>
            <td>{{$hkh->Kategori}}</td>
            <td>{{$hkh->Penjelasan}}</td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection