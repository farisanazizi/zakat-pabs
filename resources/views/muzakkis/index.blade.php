@extends('layout/main') 
<!-- <form class="form-inline my-2 my-lg-0" action="/search" method="get">
      <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->


@section('title', 'Daftar Muzakki')


@section('container')

<!-- <div class="row">
<div class="col-md-8">
</div>
<div class="col-md-4">
<form action="/muzakkissearch" method="get">
<div class="input-group mt-4">
<input type="search" name="search" class="form-control">
<span class="input-group-prepend">
<button type="submit" class="btn btn-success">Search</button>
</span>
</div>
</form>
</div> -->

<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-10">Daftar Muzakki</h1>
<!-- 
            <a href="/muzakkis/create" class="btn btn-primary my-3">Tambah Data</a>

            @if (session('status'))
        <div class="alert alert-success">
        {{ session('status')}}
        </div>
        @endif -->


            <ul class="list-group">
            @foreach ($muzakkis as $muzakkis)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $muzakkis -> Nama }}
                    <a href="/muzakkis/{{$muzakkis -> id}}" class="badge badge-info">details</a>
                </li>
            @endforeach
            </ul>

        </div>
    </div>

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
</div> -->



</div>


@endsection