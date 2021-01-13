@extends('layout/main')

@section('title', 'Ubah Data Muzakki')

@section('container')
<div class="container mt-4">
<div class="row">
<div class="col-8">
<h1 class="mt-3">Form Ubah Data Muzakki</h1>

<form method="post" action="/muzakkis/ {{ $muzakki->id }}">
@method('patch')
@csrf
<div class="form-group">
<label for="Nama">Nama</label>
<input type="text" class="form-control @error('Nama') is-invalid @enderror"
id="Nama" placeholder="Nama" name="Nama" value="{{ $muzakki->Nama }}">
@error('Nama')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>

<div class="form-group">
<label for="Alamat">Alamat</label>
<input type="text" class="form-control" id="Alamat" placeholder="Alamat"
name="Alamat" value="{{ $muzakki->Alamat }}">
</div>

<div class="form-group">
<label for="NoHP">No HP</label>
<input type="text" class="form-control" id="NoHP" placeholder="Nomor HP"
name="NoHP" value="{{ $muzakki->NoHP }}">
</div>

<button type="submit" class="btn btn-primary">Ubah Data</button>
</form>

</div>
</div>
</div>
@endsection