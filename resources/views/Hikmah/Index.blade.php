@extends('layout/main')
@section('title', 'index')
@section ('container')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style:text>Hikmah Berzakat </th>
      <th scope="col" style:text>Penjelasan </th>
    </tr>
  </thead>
  <tbody>
    @foreach($hikmah as $hkh)
        <tr>
            <td>{{$hkh->Manfaat}}</td>
            <td>{{$hkh->Penjelasan}}</td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection