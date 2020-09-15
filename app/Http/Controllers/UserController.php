<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peserta;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function login(Request $request)
    {
        $peserta = Peserta::where('email', $request['email'])->get();
        foreach ($peserta as $data);
        if ($data->email==$request['email'] && $data->token==$request['token']) {
            $request->session()->put('email',$data->email);
            $request->session()->put('id',$data->id);
            $request->session()->put('id_tipe_ujian',$data->id_tipe_ujian);
            return view('user/aturan');
        } else {
            return redirect()->back();
        }
    }

}
