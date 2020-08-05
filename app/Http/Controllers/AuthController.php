<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //register
    public function register() {
        return view('register');
    }

    //welcome
    public function welcome(Request $request) {
        $fname = $request ['fname'];
        $lname = $request ['lname'];
        $nama_lengkap = '$fname $lname';
        return view('welcome', ["nama_lengkap" => "$nama_lengkap"]);
    }
}
