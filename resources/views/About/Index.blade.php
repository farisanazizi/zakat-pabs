@extends('layout/main')
@section('title', 'index')
@section ('container')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style:text>Apa Itu Zakat </th>
      <th scope="col" style:text>Asal Kata Zakat </th>
      <th scope="col" style:text>Zakat Menurut Bahasa</th>
      <th scope="col" style:text>Zakat Menurut Istilah </th>
      <th scope="col" style:text>Hadist Zakat </th>
      <th scope="col" style:text>Zakat Menurut Hukum </th>
    </tr>
  </thead>
  <tbody>
    @foreach($about as $abt)
        <tr>
            <td>{{$abt->ApaItuZakat}}</td>
            <td>{{$abt->KataZakat}}</td>
            <td>{{$abt->MaknaKata}}</td>
            <td>{{$abt->IstilahZakat}}</td>
            <td>{{$abt->HadistZakat}}</td>
            <td>{{$abt->PeraturanZakat}}</td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection