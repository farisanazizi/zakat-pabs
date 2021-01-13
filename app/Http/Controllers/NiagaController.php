<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Niaga;
use Illuminate\Support\Facades\DB;

class NiagaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zakatniaga = Niaga::all();
        return view('niaga.index', ['zakatniaga' => $zakatniaga]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('zakatniaga.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Muzakki::create($request->all());
        // return redirect('/muzakkis') ->with ('status', 'Data Muzakki Berhasil Ditambahkan');
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

//     public function search(Request $request)
//     {
//    $cari = $request->donatursearch;
//     $post = DB::table('donatur')
//     ->where('Nama','like',"%".$cari."%")
//     ->paginate();
//     return view('Donatur.index',['donatur' => $post]);
//     }

}
