<?php

namespace App\Http\Controllers;

use App\Soal;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soal = Soal::all();
        dd($soal);
        // return view('admin/listSoal', ['soal' => $soal]);
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
            'nomor' => 'required',
            'id_pelajaran' => 'required',
            'soal' => 'required',
            'A_id' => 'required',
            'A_jawaban' => 'required',
            'B_id' => 'required',
            'B_jawaban' => 'required',
            'C_id' => 'required',
            'C_jawaban' => 'required',
            'D_id' => 'required',
            'D_jawaban' => 'required',
            'E_id' => 'required',
            'E_jawaban' => 'required',
            'kunci_jawaban' => 'required',
        ]);

        Soal::create($request->all());

        if ($id= $request['id_pelajaran']=='bio') {
            return redirect('/admin/bio');
        } elseif ($id= $request['id_pelajaran']=='mat') {
            return redirect('/admin/mat');
        } elseif ($id= $request['id_pelajaran']=='kim') {
            return redirect('/admin/kim');
        } elseif ($id= $request['id_pelajaran']=='fis') {
            return redirect('/admin/fis');
        } elseif ($id= $request['id_pelajaran']=='eko') {
            return redirect('/admin/eko');
        } elseif ($id= $request['id_pelajaran']=='sej') {
            return redirect('/admin/sej');
        } elseif ($id= $request['id_pelajaran']=='sos') {
            return redirect('/admin/sos');
        } elseif ($id= $request['id_pelajaran']=='geo') {
            return redirect('/admin/geo');
        } else {
            return 0;
        }
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Soal::find($id);
        return view('admin/editSoal',['show' => $show]);
        // return $id;
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

    public function showBio()
    {
        $id_pelajaran = "bio";
        $soal = Soal::where('id_pelajaran', 'bio')->get();
        return view('admin/listSoal', ['soal' => $soal, 'id_pelajaran' => $id_pelajaran]);
    }

    public function showMat()
    {
        $id_pelajaran = "mat";
        $soal = Soal::where('id_pelajaran', 'mat')->get();
        return view('admin/listSoal', ['soal' => $soal, 'id_pelajaran' => $id_pelajaran]);
    }
}
