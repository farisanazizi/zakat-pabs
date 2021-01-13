<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Muzakki;
use Illuminate\Support\Facades\DB;

class MuzakkisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $muzakkis = Muzakki::all();
        return view('muzakkis.index', ['muzakkis' => $muzakkis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('muzakkis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Muzakki::create($request->all());
        return redirect('/muzakkis') ->with ('status', 'Data Muzakki Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Muzakki $muzakki)
    {
        return view('muzakkis.show', compact ('muzakki'));
        // return $student;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function edit(Muzakki $muzakki)
    {
    return view('muzakkis.edit', compact('muzakki'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Muzakki $muzakki)
    {
    $request->validate([
    'id' => 'required',
    ]);
    
    Muzakki::where('id', $muzakki->id)
    ->update([
    'Nama' => $request->Nama,
    'Alamat' => $request->Alamat,
    'NoHP' => $request->NoHP,
    ]);
    return redirect('/muzakkis') ->with ('status', 'Data Muzakki Berhasil
    Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Muzakki $muzakki)
    {
        Muzakki::destroy($muzakki ->id);
        return redirect('/muzakkis') ->with ('status', 'Data Muzakki Berhasil Dihapus!');
    }

//     public function search(Request $request)
//     {
//    $cari = $request->search;
//     $post = DB::table('muzakkis')
//     ->where('Nama','like',"%".$cari."%")
//     ->paginate();
//     return view('muzakkis.index',['muzakkis' => $post]);
//     }
}
