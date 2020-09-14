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

        if ($request['id_pelajaran'] == 'bio') {
            return redirect('/admin/bio');
        } elseif ($request['id_pelajaran'] == 'mat') {
            return redirect('/admin/mat');
        } elseif ($request['id_pelajaran'] == 'kim') {
            return redirect('/admin/kim');
        } elseif ($request['id_pelajaran'] == 'fis') {
            return redirect('/admin/fis');
        } elseif ($request['id_pelajaran'] == 'eko') {
            return redirect('/admin/eko');
        } elseif ($request['id_pelajaran'] == 'sej') {
            return redirect('/admin/sej');
        } elseif ($request['id_pelajaran'] == 'sos') {
            return redirect('/admin/sos');
        } elseif ($request['id_pelajaran'] == 'geo') {
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
        $show = Soal::where('id', $id)->get();
        return view('admin/editSoal', ['show' => $show]);
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
    public function update(Request $request)
    {
        Soal::where('id', $request->id)
            ->update([
                'nomor' =>              $request->nomor,
                'id_pelajaran' =>       $request->id_pelajaran,
                'soal' =>               $request->soal,
                'soal_gambar' =>        $request->soal_gambar,
                'A_id' =>               $request->A_id,
                'A_jawaban' =>          $request->A_jawaban,
                'A_jawaban_gambar' =>   $request->A_jawaban_gambar,
                'B_id' =>               $request->B_id,
                'B_jawaban' =>          $request->B_jawaban,
                'B_jawaban_gambar' =>   $request->B_jawaban_gambar,
                'C_id' =>               $request->C_id,
                'C_jawaban' =>          $request->C_jawaban,
                'C_jawaban_gambar' =>   $request->C_jawaban_gambar,
                'D_id' =>               $request->D_id,
                'D_jawaban' =>          $request->D_jawaban,
                'D_jawaban_gambar' =>   $request->D_jawaban_gambar,
                'E_id' =>               $request->E_id,
                'E_jawaban' =>          $request->E_jawaban,
                'E_jawaban_gambar' =>   $request->E_jawaban_gambar,
                'kunci_jawaban' =>      $request->kunci_jawaban
            ]);
            if ($request['id_pelajaran'] == 'bio') {
                return redirect('/admin/bio');
            } elseif ($request['id_pelajaran'] == 'mat') {
                return redirect('/admin/mat');
            } elseif ($request['id_pelajaran'] == 'kim') {
                return redirect('/admin/kim');
            } elseif ($request['id_pelajaran'] == 'fis') {
                return redirect('/admin/fis');
            } elseif ($request['id_pelajaran'] == 'eko') {
                return redirect('/admin/eko');
            } elseif ($request['id_pelajaran'] == 'sej') {
                return redirect('/admin/sej');
            } elseif ($request['id_pelajaran'] == 'sos') {
                return redirect('/admin/sos');
            } elseif ($request['id_pelajaran'] == 'geo') {
                return redirect('/admin/geo');
            } else {
                return 0;
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Soal::destroy($request->id);
        if ($request['id_pelajaran'] == 'bio') {
            return redirect('/admin/bio');
        } elseif ($request['id_pelajaran'] == 'mat') {
            return redirect('/admin/mat');
        } elseif ($request['id_pelajaran'] == 'kim') {
            return redirect('/admin/kim');
        } elseif ($request['id_pelajaran'] == 'fis') {
            return redirect('/admin/fis');
        } elseif ($request['id_pelajaran'] == 'eko') {
            return redirect('/admin/eko');
        } elseif ($request['id_pelajaran'] == 'sej') {
            return redirect('/admin/sej');
        } elseif ($request['id_pelajaran'] == 'sos') {
            return redirect('/admin/sos');
        } elseif ($request['id_pelajaran'] == 'geo') {
            return redirect('/admin/geo');
        } else {
            return 0;
        }
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
    
    public function showFis()
    {
        $id_pelajaran = "fis";
        $soal = Soal::where('id_pelajaran', 'fis')->get();
        return view('admin/listSoal', ['soal' => $soal, 'id_pelajaran' => $id_pelajaran]);
    }

    public function showKim()
    {
        $id_pelajaran = "kim";
        $soal = Soal::where('id_pelajaran', 'kim')->get();
        return view('admin/listSoal', ['soal' => $soal, 'id_pelajaran' => $id_pelajaran]);
    }
    public function showSos()
    {
        $id_pelajaran = "sos";
        $soal = Soal::where('id_pelajaran', 'sos')->get();
        return view('admin/listSoal', ['soal' => $soal, 'id_pelajaran' => $id_pelajaran]);
    }

    public function showSej()
    {
        $id_pelajaran = "sej";
        $soal = Soal::where('id_pelajaran', 'sej')->get();
        return view('admin/listSoal', ['soal' => $soal, 'id_pelajaran' => $id_pelajaran]);
    }
    
    public function showEko()
    {
        $id_pelajaran = "eko";
        $soal = Soal::where('id_pelajaran', 'eko')->get();
        return view('admin/listSoal', ['soal' => $soal, 'id_pelajaran' => $id_pelajaran]);
    }

    public function showGeo()
    {
        $id_pelajaran = "geo";
        $soal = Soal::where('id_pelajaran', 'geo')->get();
        return view('admin/listSoal', ['soal' => $soal, 'id_pelajaran' => $id_pelajaran]);
    }
}
