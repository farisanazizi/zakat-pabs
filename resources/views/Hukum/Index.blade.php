@extends('layout/main')
@section('title', 'index')
@section ('container')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style:text>Hukum Zakat </th>
    </tr>
  </thead>
  <tbody>
    @foreach($hukum as $hkm)
        <tr>
            <td>{{$hkm->HukumZakat}}</td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection