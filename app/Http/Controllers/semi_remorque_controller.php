<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Camion;
use App\Models\TypeCamion;
class semi_remorque_controller extends Controller
{
    
    public function semi_remorque_page(){
        $typeSemiRemorque = TypeCamion::where('name', 'semi-remorque')->first();
        $camionsSemiRemorque = Camion::where('typeCamion', $typeSemiRemorque->id)->get();
    
    
        return view('web.semi_remorque', compact('camionsSemiRemorque'));
}
}