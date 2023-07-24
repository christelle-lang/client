<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Ville;
use App\Models\Camion;
use App\Models\Demande;
use App\Models\Typecamion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;





class essaie_controller extends Controller
{
  
     public function affiche_essaie(){
        $regions=DB::table('regions')->get();

        
        
       
        return view('web.essaie',compact('regions'));
     }

     
     
     public function region(Request $request){
       


        // Effectuez votre logique de recherche ici et récupérez les résultats
             //   $typeCamion = $request->input('typeCamion');
      //   $minCapacity = $request->input('minCapacity');
      //   $maxCapacity = $request->input('maxCapacity');
      //   $dateEnlevement=$request->input('date');


      
//         $search = Camion::join('type_camions', 'camions.typeCamion', '=', 'type_camions.id')
//         ->join('proprietaires', 'camions.proprio_id', '=', 'proprietaires.id')
//         ->join('regions', 'proprietaires.region_id', '=', 'regions.id')
//         ->join('villes', 'proprietaires.ville_id', '=', 'villes.id');
//       //   ->join('demandes', 'camions.id', '=', 'demandes.camion_id');
// //         ->get();
// // dd( $search);

//        if(!empty($typeCamion)){
//     // dd($selectedForm);
//        $search->whereIn('type_camions.id', $typeCamion); 
//     //  dd( $camions);
//     }
//         // Effectuez votre logique de recherche ici et récupérez les résultats
//         if(!empty($minCapacity) ){
//          // dd($selectedForm);
//              $search->where('capaciteDeCharge','>',$minCapacity );  
//      }
//      if(!empty($maxCapacity) ){
//       // dd($selectedForm);
//           $search->where('capaciteDeCharge','<=',$maxCapacity );  
//   }
//   if (!empty($dateEnlevement)) {
//    foreach ($typeCamion as $type) {
//        $demandes = demande::where('camion_id', $type)->get();
//        if (!empty($demandes)) {
//            $search->join('demandes', 'camions.id', '=', 'demandes.camion_id')
//                   ->where('dateEnlevement', '<>', $dateEnlevement);
//        }
//    }
// }


//         $search= $search->get();



      return view('web.essaie',compact('regions_name'));
    }
    public function recherche(Request $request) {
      $query = $request->input('query');
      $query2 = $request->input('query2');
    
      $villes = Ville::where('state_id', $query)->get();
      $villes2 = Ville::where('state_id', $query2)->get();
    
      $result1 = $villes->pluck('name')->toArray();
      $result2 = $villes2->pluck('name')->toArray();
    
      $result = [$result1, $result2];
      return response()->json($result);
    }
    




    public function envoi_demande(Request $request)
    {
     


        if (Auth::check()) {
            $clientId = Auth::id();
            
            $formData = $request->session()->get('form_data');
            
            $votreModele = new Demande();
            $votreModele->typeMarchandise = $formData['typeMarchandise'];
            $votreModele->lieuEnlevement = $formData['villeEnlevement'];
            $votreModele->lieuExpedition = $formData['villeLivraison'];
            $votreModele->dateEnlevement = $formData['dateEnlevement'];
            $votreModele->dateEnlevement = $formData['dateLivraison'];
            $votreModele->typecamion_id = $formData['typeCamion'];
            
            // Générer automatiquement le code de la demande
            $codeDemande = uniqid(); // Utilisez une fonction de génération de code unique appropriée si nécessaire
            $votreModele->codeDemande = $codeDemande;
            $votreModele->statut = "en attente";
            $votreModele->statutPaiement = "non payé";
            $votreModele->lu = 0;
            $votreModele->client_id = $clientId; // Enregistre l'ID de l'utilisateur
            
            $votreModele->save();
            
            // Réponse JSON pour indiquer le succès
            return response()->json(['success' => true, 'message' => 'Demande envoyée avec succès.']);
        }
        
        // Réponse JSON pour indiquer l'erreur
        return response()->json(['success' => false, 'message' => 'Utilisateur non authentifié.']);
    }
    



    public function back_commande(Request $request)
    {
      $regions=DB::table('regions')->get();
      $types = DB::table('typecamions')->get();
      $form_data=session('form_data');
      return view('web.form_demande_back',compact('regions','types'));
    }


    public function form_demande( Request $request){
      $regions=DB::table('regions')->get();
      $types = DB::table('typecamions')->get();
      
     
      return view('web.form_demande',compact('regions','types'));
    }

    public function devis(Request $request){

    
      $validatedData = $request->validate([
        'villeEnlevement' => 'required',
        'typeMarchandise' => 'required',
        'villeLivraison' => 'required',
        'dateEnlevement' => 'required',
        'dateLivraison' => 'required',
        'typeCamion' => 'required',
    ]);
      $formData = $request->all();
      
      $typeCamionId = $formData['typeCamion'];
      

       $typeCamion = Typecamion::find($typeCamionId);
       $typeCamionNom = $typeCamion->name;
       $request->session()->put('typeCamionNom', $typeCamionNom);


      $request->session()->put('form_data', $formData);
      if (Auth::check()) {
        // L'utilisateur est authentifié, récupérer les informations de l'utilisateur
        $user = Auth::user();
    
        $name = $user->name;
        $email = $user->email;
        $contact = $user->phone1;
        session()->put('form_data', $formData);
        // Mettre les informations de l'utilisateur en session
        Session::put('user.name', $name);
        Session::put('user.email', $email);
        Session::put('user.contact', $contact);
    
        // Rediriger vers la vue
    } else {
        // L'utilisateur n'est pas authentifié, rediriger vers la page d'authentification
        return redirect()->route('connexion_page')->with('message', 'Veuillez vous connecter pour accéder à cette page');
    }

    return view('web.devis');

    }


     }

