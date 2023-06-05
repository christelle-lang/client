<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Camion;
use App\Models\TypeCamion;
class semi_remorque_controller extends Controller
{
    
    public function semi_remorque_page(){
        $typeFourgon = TypeCamion::where('name', 'semi-remorque')->first();
        $camionsFourgon = Camion::where('typeCamion', $typeFourgon->id)->get();
    
    
        return view('web.semi_remorque', compact('camionsFourgon'));
}
}