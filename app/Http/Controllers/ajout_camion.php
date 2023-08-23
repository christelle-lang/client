<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Camion;
use App\Models\Conducteur;

use App\Models\Typecamion;
use Illuminate\Support\Facades\DB;




class ajout_camion extends Controller
{

    public function typeCamion()
    {
        $typesCamions = DB::table('typecamions')->get();
        return response()->json(['types_camion' => $typesCamions], 200);
    }

    
    public function typeMarchandise()
    {
        $typesMarchandise = DB::table('type_de_marchandises')->get();
        return response()->json(['types_marchandise' => $typesMarchandise], 200);
    }

    public function ajouterCamion(Request $request)
    {
        $request->validate([
            'type_camion_id' => 'required|exists:typecamions,id',
            'type_marchandise_id' => 'required|exists:type_de_marchandises,id',
            'nom_conducteur' => 'required|string',
            'numero_conducteur' => 'required|string',
        ]);

        $conducteur = new Conducteur();
        $conducteur->name = $request->input('nom_conducteur');
        $conducteur->proprio_id = $request->input('proprio_id');
        $conducteur->phone1 = $request->input('numero_conducteur');
        
        $conducteur->save();

        $camion = new Camion();
        $camion->typeCamions = $request->input('type_camion_id');
        $camion->typeMarchandise = $request->input('type_marchandise_id');
        $camion->conducteur_id = $conducteur->id;
        $camion->proprio_id = $request->input('proprio_id');

        // Ajoutez d'autres champs ici si nécessaire
        $camion->save();

        return response()->json(['message' => 'Camion enregistré avec succès'], 201);
    }

    public function listCamion($proprioId)
{
    $camions = Camion::where('proprio_id', $proprioId)->get();

    foreach ($camions as $camion) {
         $typeCamion = TypeCamion::find($camion->typeCamions);
        $camion->typeCamionName = $typeCamion->name;
    }
    $conducteur = Conducteur::find($camion->conducteur_id);
    $camion->conducteurName = $conducteur->nom;
    $camion->conducteurNumero = $conducteur->phone1;
    
    return response()->json($camions);
}

}
