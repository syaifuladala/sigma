<?php

namespace App\Http\Controllers;

use App\Pelajaran;
use Illuminate\Http\Request;

class PelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showSaintek()
    {
        $pelajaran = Pelajaran::where('id_tipe_ujian', 'saintek')->get();
        return view('admin/saintek', ['pelajaran' => $pelajaran]);
    }

    public function showSoshum()
    {
        $pelajaran = Pelajaran::where('id_tipe_ujian', 'soshum')->get();
        return view('admin/saintek', ['pelajaran' => $pelajaran]);
    }
}
