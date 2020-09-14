<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function login(Request $request)
    {
        if ($request['username']=='adminq' && $request['password']=='12345') {
            return view('admin/index');
        } else {
            return redirect()->back();
        }
        
    }

}
