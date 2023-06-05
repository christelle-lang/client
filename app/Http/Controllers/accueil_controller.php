<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class accueil_controller extends Controller
{
    public function accueil(){
        $camions=DB::table('camions')->get();
        return view('web.accueil',compact('camions'));
    }
}
