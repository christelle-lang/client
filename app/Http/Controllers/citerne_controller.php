<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Camion;
use App\Models\TypeCamion;

class citerne_controller extends Controller
{
    
    public function citerne_page(){
        $typeCiterne = TypeCamion::where('name', 'citerne')->first();
        $camionsCiterne  = Camion::where('typeCamion', $typeCiterne ->id)->get();
    
    
        return view('web.citerne', compact('camionsCiterne'));
}
}
