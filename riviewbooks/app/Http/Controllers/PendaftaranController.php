<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PendaftaranController extends Controller
{
    public function register()
    {
        return view('page.pendaftaran');
    }

    public function welcome(Request $request)
    {
        $fullname = $request -> input('fname');
        $lastname = $request -> input('lname');


        return view('page.welcome', [
            "fullname" => $fullname,
            "lastname" => $lastname
        ]);
    }
    
}
