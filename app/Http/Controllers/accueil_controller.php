<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class accueil_controller extends Controller
{
    public function accueil(){
        return view('web.accueil');
    }
}
