<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Proprietaire;
use App\Models\Camion;
use App\Models\Demande;
use App\Models\Conducteur;
use App\Models\Typecamion;








class affiche_demande extends Controller
{

    
    public function afficherDemande($id)
    {
        $today = Carbon::today();
        $typeProprio = Camion::where('proprio_id', $id)->pluck('typeCamions');

    
        $demandes = Demande::select('demandes.*', 'typecamions.name AS nomTypeCamion', 'type_de_marchandises.name AS nomTypeMarchandise')
        ->leftJoin('typecamions', 'demandes.typecamion_id', '=', 'typecamions.id')
        ->leftJoin('type_de_marchandises', 'demandes.type_de_marchandise_id', '=', 'type_de_marchandises.id')
        ->where('demandes.statut', 'en attente')
        ->where('demandes.dateEnlevement', '>', $today)
        ->whereIn('demandes.typecamion_id', $typeProprio)
        ->get();
    
    
        return response()->json($demandes);
    }

    public function compterDemande($id)
    {
        $today = Carbon::today();
        $typeProprio = Camion::where('proprio_id', $id)->pluck('typeCamions');

    
        $demandes = Demande::select('demandes.*', 'typecamions.name AS nomTypeCamion', 'type_de_marchandises.name AS nomTypeMarchandise')
        ->leftJoin('typecamions', 'demandes.typecamion_id', '=', 'typecamions.id')
        ->leftJoin('type_de_marchandises', 'demandes.type_de_marchandise_id', '=', 'type_de_marchandises.id')
        ->where('demandes.statut', 'en attente')
        ->where('demandes.dateEnlevement', '>', $today)
        ->whereIn('demandes.typecamion_id', $typeProprio)
        ->get();
         
      
    $nombre=count($demandes);

    return response()->json(['demandes_correspondantes' => $demandes,'nombre_demande'=>$nombre], 200);

    }


    public function accepterDemande($camionId, $proprioId,$demandeId)
{
    $demande = Demande::findOrFail($demandeId);
    $camion = Camion::findOrFail($camionId);
    $proprio = Proprietaire::findOrFail($proprioId);


    // Mettez à jour les informations de la demande avec celles du camion attribué
    $demande->camion_id = $camion->id;
    $demande->proprietaire_id = $proprio->id;
    $demande->statut = 'accepte'; // Mettre à jour le statut de la demande


    
    
    $demande->save();

    return response()->json(['message' => 'Demande acceptée avec succès'],200);
}
public function Livraison($proprioId){

    $data = Demande::where('proprietaire_id', $proprioId)
        ->whereDate('dateEnlevement', '>', now())
        ->orderBy('dateEnlevement', 'asc') // Order by pickup date in ascending order
        ->get();

    return response()->json($data);
}

public function camionCorrespondant($proprioId, $typeCamionId)
    {
        $camionsDemande=Camion::where('proprio_id', $proprioId)
        ->where('typeCamions', $typeCamionId)
        ->get();

        $result = [];

        foreach ($camionsDemande as $camion) {
            $conducteur = Conducteur::find($camion->conducteur_id);
            $typeCamion = TypeCamion::find($camion->typeCamions);
    
            $result[] = [
                'camion' => $camion,
                'conducteur' => $conducteur,
                'typeCamion' => $typeCamion,
            ];
        }
    
        return response()->json($result);
    }

    
}
