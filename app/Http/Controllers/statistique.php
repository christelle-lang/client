<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Camion;
use App\Models\Proprietaire;
use App\Models\Demande;
use Illuminate\Support\Facades\DB;






class statistique extends Controller
{
    public function statistique_camion($id)
    {
        $proprietaire = Proprietaire::find($id);
        
    
        if (!$proprietaire) {
            return response()->json(['message' => 'Propriétaire non trouvé'], 404);
        }
    
        $nombreCamions = Camion::where('proprio_id', $proprietaire->id)->count();
    
        return response()->json(['nombre_camions' => $nombreCamions], 200);
    }

   public function envoie_demande(){

    $demandesEnAttente = Demande::where('statut', 'en attente')->get();

    $resultat = [];

    foreach ($demandesEnAttente as $demande) {
        $typecamion = $demande->typecamion_id;
        $camionCorrespondants = Camion::where('typeCamion', $typecamion)->get();
        $demandeAvecCamions = [
            'demande' => $demande,
            'camions_correspondants' => $camionCorrespondants->toArray(),
        ];
        $resultat[] = $demandeAvecCamions;

    }
    
    return response()->json($resultat, 200);



   }
   public function camionsCorrespondants()
   {
       return $this->hasMany(Camion::class, 'type_camion', 'type_camion_demande');
   }

   public function demande($id){
    $demandesEnAttente = Demande::where('statut', 'en attente')->get();
    $camionsDuProprietaire = Camion::where('proprio_id', $id)->get();
 $demandesCorrespondantes=[];
        $typesDeCamion = [];

        foreach ($camionsDuProprietaire as $camion) {
            $typesDeCamion[] = $camion->typeCamion;
        }

    foreach ($demandesEnAttente as $demande) {
        $typecamion = $demande->typecamion_id;
        if (in_array($typecamion, $typesDeCamion)) {
            $demandesCorrespondantes[] = $demande;
        }
    }
  
    $nombre=count($demandesCorrespondantes);

    return response()->json(['demandes_correspondantes' => $demandesCorrespondantes,'nombre_demande'=>$nombre], 200);


   }


   public function camionEnLivraison($proprioId)
{
    $camionsAttribues = DB::table('camions')
        ->join('demandes', 'camions.id', '=', 'demandes.camion_id')
        ->where('camions.proprio_id', $proprioId)
        ->whereIn('demandes.statut', ['accepte', 'en cours'])
        ->select('camions.*')
        ->get();

    $nombreCamionsAttribues = count($camionsAttribues);

    return response()->json([
        'camions_livraison' => $camionsAttribues,
        'nombre_camions_livraison' => $nombreCamionsAttribues,
    ]);
}

}
