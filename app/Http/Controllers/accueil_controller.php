<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class accueil_controller extends Controller
{
    public function accueil(){
        $types=DB::table('type_camions')->get();

        $camions=DB::table('camions')->get();
        return view('web.accueil',compact('camions','types'));
    }
}
