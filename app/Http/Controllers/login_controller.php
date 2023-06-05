<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class login_controller extends Controller
{
    public function inscription(){
        return view('web.inscription');
    }

    public function connexion(){
        return view('web.connexion');
    }
}
