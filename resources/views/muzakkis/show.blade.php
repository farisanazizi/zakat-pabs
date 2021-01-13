@extends('layout/main')

@section('title', 'Daftar Muzakki')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-10">Detail Muzakki</h1>


            <div class="card">
            <div class="card-body">
                <h5 class="card-title"> {{ $muzakki -> Nama}} </h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $muzakki -> Alamat}}</h6>
                <p class="card-text">{{ $muzakki -> NoHP}}</p>
                <!-- <button type="submit" class="btn btn-primary">Edit</button> -->
                <!-- <a href="{{ $muzakki->id }}/edit" class="btn btn-primary">edit</a> -->

<!-- 
                <form action="{{ $muzakki -> id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                <button type="submit" class="btn btn-danger">Delete</button> -->
                <a href="/muzakkis" class="card-link">Kembali</a>
            </div>
            </div>   


        </div>
    </div>
</div>
@endsection