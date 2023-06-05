<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Camion;
use App\Models\TypeCamion;

class fourgon_controller extends Controller
{    
    public function fourgon_page(){
    $typeFourgon = TypeCamion::where('name', 'fourgon')->first();
    $camionsFourgon = Camion::where('typeCamion', $typeFourgon->id)->get();


    return view('web.fourgon', compact('camionsFourgon'));
    
}
}

   
