@extends('layout/main')

@section('title', 'Daftar Mustahik Baru')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
        <h1 class="mt-10">Tambahan Data Mustahik Baru</h1>


<form method="post" action="/Muzakki">
@csrf
  <div class="form-group">
    <label for="Nama">Nama</label>
    <input type="text" class="form-control" id="Nama" placeholder="Masukkan Nama" name="Nama">
  </div>

  <div class="form-group">
    <label for="Alamat">Alamat</label>
    <input type="text" class="form-control" id="Alamat" placeholder="Masukkan Alamat" name="Alamat">
  </div>

  <div class="form-group">
    <label for="NoHP">No HP</label>
    <input type="text" class="form-control" id="NoHP" placeholder="Masukkan No Hp" name="NoHP">
  </div>



  <button type="submit" class="btn btn-primary">Simpan Data</button>
</form>


    </div>
</div>
@endsection