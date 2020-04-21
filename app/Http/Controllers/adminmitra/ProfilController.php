<?php

namespace App\Http\Controllers\adminmitra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //ini validasi di form
        $this->validate($request,[
            'nama_tempat'   =>'required',
            'kapasitas'     => 'required',
            'harga_sewa'    => 'required',
            'foto'          => 'required',
            'keterangan'    => 'required',
        ]);

        //ini upload foto ke form
        $image      = $request->file('foto');
        $filename   = rand().'.'.$image->getClientOriginalExtension();
        $path       = public_path('uploads/profil');
        $image->move($path,$filename);

        //ini store atau menambahkan data ke database dengan tabel yang bernama ruang meeting

        $data               = new Profil ();
        $data->id_mitra     = Auth::user()->id;
        $data->nama_tempat  = $request->nama_tempat;
        $data->kapasitas    = $request->kapasitas;
        $data->harga_sewa   = $request->harga_sewa;
        $data->foto         = $filename;
        $data->keterangan   = $request->keterangan;
        $data->status       = '1';
        //dd($request->all());
        $data->save();


        //jika sudah menambahkan akan di arahkan ke route ini
        return redirect()->route('profil.index');

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
}
