<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dokter = Dokter::all();
        return view('dokter0246', ['dokter'=> $dokter]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dokter0246_tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Dokter:: create([
        'id' => $request->id_dokter,
        'nama' => $request->nama_dokter,
        'jabatan'=> $request->jabatan_dokter,
       ]);

       return redirect('dokter0246');
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
        $dokter = dokter::find($id);
        return view ('dokter_edit', ['dokter'=> $dokter]);
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
        $dokter = dokter::find($id);
        $dokter->id =$request->id;
        $dokter->nama_dokter =$request->nama_dokter;
        $dokter->jabatan_dokter =$request->jabatan_dokter;
        $dokter->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dokter =dokter::find($id);
        $dokter->delete();

        return redirect('dokter');
    }
}