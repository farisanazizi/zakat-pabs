@extends('layout/main')

@section('title', 'Kalkulasi Zakat Niaga Anda')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
        <h1 class="mt-10">Mari Kalkulasi Zakat Niaga Anda</h1>


<form method="post" action="/niaga">
@csrf
  <div class="form-group">
    <label for="Nama">Nama</label>
    <input type="text" class="form-control" id="Nama" placeholder="Masukkan Nama" name="Nama">
  </div>

  <div class="form-group">
    <label for="JumlahPendapatan">Jumlah Pendapatan Per Bulan</label>
    <input type="text" class="form-control" id="JumlahPendapatan" placeholder="Masukkan Jumlah Pendapatan Anda Per Bulan" name="JumlahPendapatan">
  </div>

  <!-- <div class="form-group">
    <label for="Tanggal">masukkan Tanggal Anda Berzakat</label>
    <input type="text" class="form-control" id="JumlahPendapatan" placeholder="Masukkan Jumlah Pendapatan Anda Per Bulan" name="JumlahPendapatan">
  </div> -->
  <div class="form-group">
    <label for="JumlahZakat">Jumlah Zakat</label>
    <input type="text" class="form-control" id="JumlahZakat" placeholder="Jumlah Zakat Yang Harus Anda Bayar" name="JumlahZakat" disabled value="Sekian Rupiah">
  </div>



  <button type="submit" class="btn btn-primary">Hitung Zakat</button>
</form>


    </div>
</div>
@endsection