@extends('layout/main')
@section('title', 'index')

@section ('container')
<!-- <div class="row">
<div class="col-md-8">
</div>
<div class="col-md-4">
<form action="/search" method="get">
<div class="input-group mt-4">
<input type="search" name="search" class="form-control">
<span class="input-group-prepend">
<button type="submit" class="btn btn-success">Search</button>
</span>
</div>
</form>
</div>
</div>
</div> -->

    <form class="form-inline my-2 my-lg-0" action="/search" method="get">
      <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </div>
      
    </form>

      <a href="{{ url('/print_all') }}" class="btn btn-primary mt-4" target="_blank">Export all
to PDF</a> 

    </form>




<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">NAMA</th>
      <th scope="col">Jumlah Zakat Emas</th>
      <th scope="col">Jumlah Zakat Niaga</th>
      <th scope="col">Tanggal Zakat</th>
      <th> </th>
      <!-- <th scope="col">AKSI</th> -->
    </tr>
  </thead>
  <tbody>
    @foreach($riwayat as $rwt)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$rwt->Nama}}</td>
            <td>{{$rwt->JumlahZakatEmas}}</td>
            <td>{{$rwt->JumlahZakatNiaga}}</td>
            <td>{{$rwt->TanggalZakat}}</td>
            <td>
                <!-- <a href="" class="badge badge-success">edit</a>
                <a href="" class="badge badge-danger">delete</a> -->
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection