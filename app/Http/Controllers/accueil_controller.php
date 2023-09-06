<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class accueil_controller extends Controller
{
    public function accueil(){
        $types=DB::table('typecamions')->get();
        session(['intended_url' => url()->current()]);

        $camions=DB::table('camions')->get();
        $image= DB::table('image')
        ->join('typecamions', 'image.typeCamion', '=', 'typecamions.id')
        ->select('image.*', 'typecamions.name AS nom_type_de_camion')
        ->get();

        return view('web.accueil',compact('camions','types','image'))
        ;
    }
}
