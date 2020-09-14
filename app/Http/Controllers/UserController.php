<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function login(Request $request)
    {
        if ($request['email']=='userq@mail.com' && $request['token']=='12345') {
            return view('user/aturan');
        } else {
            return redirect()->back();
        }
        
    }

}
