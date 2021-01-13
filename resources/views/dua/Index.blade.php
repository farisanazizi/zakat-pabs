@extends('layout/main')
@section('title', 'index')
@section ('container')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style:text>Jenis Zakat</th>
      <th scope="col" style:text>Penjelasan </th>
    </tr>
  </thead>
  <tbody>
    @foreach($duazakat as $hkh)
        <tr>
            <td>{{$hkh->Jenis}}</td>
            <td>{{$hkh->Penjelasan}}</td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection