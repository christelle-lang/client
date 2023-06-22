<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Camion;


class camion_controller extends Controller
{
   

    public function selectionnerCamions(Request $request)
    {
        $capaciteMin = $request->input('capacite_min');
        $capaciteMax = $request->input('capacite_max');

        $camions = Camion::whereBetween('capacite_charge', [$capaciteMin, $capaciteMax])->get();

        return view('web.resultats_camions', ['camions' => $camions]);
    }
}
