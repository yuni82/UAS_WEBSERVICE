<?php

namespace App\Http\Controllers;

use App\perpus;
use Illuminate\Http\Request;

class PerpusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return perpus::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $perpus = new perpus;
        $perpus ->judul_buku = $request->judul_buku;
        $perpus ->tahun_terbit = $request->tahun_terbit;
        $perpus ->pengarang = $request->pengarang;
        $perpus ->tahun_buku = $request->tahun_buku;
        $perpus->save();

        return 'Berhasil Di simpan';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\perpus  $perpus
     * @return \Illuminate\Http\Response
     */
    public function show(perpus $perpus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\perpus  $perpus
     * @return \Illuminate\Http\Response
     */
    public function edit(perpus $perpus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\perpus  $perpus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, perpus $id)
    {
        $judul_buku = $request->input('judul_buku');
        $tahun_terbit= $request->input('tahun_terbit');
        $pengarang = $request->input('pengarang');
        $tahun_buku = $request->input('tahun_buku');
      

        $data = perpus::where('id',$id)->first();
        $data->judul_buku= $judul_buku;
        $data->tahun_terbit = $tahun_terbit;
        $data->pengarang = $pengarang;
        $data->tahun_buku = $tahun_buku;

        if($data->save()){
            $res['message'] = "Success!";
            $res['value'] = "$data";
            return response($res);
        }
        else{
            $res['message'] = "Failed!";
            return response($res);
    
    }
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\perpus  $perpus
     * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        //
        $perpus = perpus::findOrFail($id);
        $perpus->delete();

        return 'berhasil di hapus';
    }
}
