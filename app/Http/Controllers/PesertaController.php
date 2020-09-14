<?php

namespace App\Http\Controllers;

use App\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $peserta = Peserta::all();
        return view('admin/peserta', ['peserta' => $peserta]);
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
        $request->validate([
            'email' => 'required',
            'nama' => 'required',
            'sekolah' => 'required',
            'id_tipe_ujian' => 'required',
        ]);

        Peserta::create($request->all());
        return var_dump($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function show(Peserta $id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function edit(Peserta $peserta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Peserta::where('id',$request->id)
            ->update([
                'email' => $request->email,
                'nama' => $request->nama,
                'sekolah' => $request->sekolah,
                'id_tipe_ujian' => $request->id_tipe_ujian,
                'status' => $request->status
            ]);
        return redirect('/admin/peserta'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $peserta)
    {
        Peserta::destroy($peserta->id);
        return redirect('/admin/peserta');
    }
}
