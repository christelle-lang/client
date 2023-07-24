<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Camion;
use App\Models\Ville;
use App\Models\Region;

use App\Models\TypeCamion;
use App\Models\Demande;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class benne_controller extends Controller
{
        public function benne_page()
{        
        $typeBenne = TypeCamion::where('name', 'benne')->first();
        $camionsBenne = Camion::where('typeCamion', $typeBenne->id)->get();
    
    
        return view('web.benne', compact('camionsBenne'));
      
}

public function setType(Request $request, $type_id)
{
  
    // Stocker l'ID dans la session
    $request->session()->put('type_id', $type_id);
  
    // Rediriger vers la route d'origine (ou une autre route si nécessaire)
    return redirect('/search');
}
public function villeRegion(Request $request)
{ 
    

    $regionId = $request->input('region_id');
    dd($regionId);

    // Effectuer les traitements nécessaires pour obtenir les villes correspondantes
    $cities = Ville::where('state_id', $regionId)->get();

    // Retourner les villes sous forme de réponse JSON
    return view('web.search', compact('cities'));//     $region_id = $request->input('region_id');

//     // Stocker l'ID de la région dans la session
//     $request->session()->put('region_id', $region_id);
// // dd( session('region_id'));
//     // Rediriger vers la route d'origine (ou une autre route si nécessaire)
//     return redirect('/search');
}

    public function search(Request $request){
        $formData = $request->all();
        // dd( $formData);
    
        $minCapacity = $request->input('min_capacity');
 
        $maxCapacity = $request->input('max_capacity');
        // dd( $maxCapacity);
        $pickupLocation = $request->input('pickup_location');
        $deliveryDate = $request->input('delivery_date');
        $types = $request->input('types', []); // Récupérer les types de camions sélectionnés (tableau vide par défaut)
        $type_id  = $request->input('type_id');
    
        $typeCamion = $request->input('typeCamion');
    
      

// dd( $typeCamion);
        $type_id = $request->session()->get('type_id');
      
$types = DB::table('type_camions')->get();
$types_id = [];
$types_id[] = $type_id;
$nameRegion='Region';
$selectedTypes = $types_id;
// dd($selectedTypes);
$regionId = $request->input('region_id');
// dd($regionId);
// dd( $typeCamion);
if(!empty($regionId)){
     $region= region::where('id',$regionId)->first();
     $nameRegion=$region->name;
     Session::put('name_region', $nameRegion);
     $name_region= Session::get('name_region');


}


    // Effectuez le traitement nécessaire pour récupérer les villes correspondantes à la région sélectionnée
    $cities = Ville::where('state_id', $regionId)->get();

    // Générez les options du select des villes
    $options = '<option selected disabled>Ville</option>';
    foreach ($cities as $city) {
        $options .= '<option value="' . $city->id . '">' . $city->name . '</option>';
    }



// $region_id = $request->session()->get('region_id');
// // dd( $region_id);

// $villeRegion=Ville::where('state_id',$region_id)->get();

// dd($villeRegion);

$selectedForm = $request->input('typeCamion'); 


if (!empty($selectedForm)) {
    $selectedTypes=$selectedForm;


}
// else
//     $selectedTypes=[]
//     foreach($types as $type){
        
//          $type=$type->id;
//          $selectedTypes[]=$type;
     
//     }
// dd( $selectedTypes);





$minCapacity = $request->input('minCapacity');
$maxCapacity = $request->input('maxCapacity');
$dateEnlevement=$request->input('date');


        $search = Camion::join('type_camions', 'camions.typeCamion', '=', 'type_camions.id')
        ->join('proprietaires', 'camions.proprio_id', '=', 'proprietaires.id')
        ->join('regions', 'proprietaires.region_id', '=', 'regions.id')
        ->join('villes', 'proprietaires.ville_id', '=', 'villes.id');
        // ->join('demandes', 'camions.id', '=', 'demandes.camion_id')
//         ->get();
// dd( $search);

if(!empty($selectedTypes)){
    // dd($selectedForm);
    $search->whereIn('type_camions.id', $selectedTypes); 
    //  dd( $camions);
}
if(!empty($minCapacity) ){
    // dd($selectedForm);
        $search->whereBetween('capaciteDeCharge',[$minCapacity, $maxCapacity] );  
}
// if(!empty($dateEnlevement) ){
//     $search=Camion::join('demandes', 'camions.id', '=', 'demandes.camion_id');
//     // dd($selectedForm);
//         $search->where('dateEnlevement','!=',$dateEnlevement);  
// }


$camions_selected= $search->get();

 

// dd($camions_selected);
     








$regions=DB::table('regions')->get();
$villes=DB::table('villes')->get();




// $camions_selected = [];
// $camion_type_selected = null;
// $type_name_selected = null;
// //  

//     foreach ($types_id as $typeCamion_id) {
//         $camions = Camion::where('typeCamion', $typeCamion_id)->get();
//         $camion_type=TypeCamion::where('id',$typeCamion_id)->first();
//         $type_name=$camion_type->name;  
        
//     }
    
//     $minCapacity = $request->input('minCapacity');
//     $maxCapacity = $request->input('maxCapacity');
//     $dateEnlevement=$request->input('date');
// //  dd(     $dateEnlevement);
//     if ((($minCapacity>0) || ($maxCapacity>0)) && (empty($dateEnlevement))) 
//         foreach ($selectedTypes as $selected) {
           
//             $camions_type = Camion::join('type_camions', 'camions.typeCamion', '=', 'type_camions.id')
//                 ->where('type_camions.id', $selected)
//                 ->whereBetween('capaciteDeCharge', [$minCapacity, $maxCapacity])
//                 ->get(['camions.*','type_camions.name']);
               
//                 if ($camions_type->isNotEmpty()) {
                    
                    // dd( $camions_type);
    //                 $camions_selected[] = $camions_type;

                   
    //             }
    //             $camions_selected = collect($camions_selected)->flatten()->all();
             

    // }   
    // if(!empty($dateEnlevement) && (empty($minCapacity)) &&  (empty($maxCapacity))){
    

    //         $camion_ids=Camion::whereIn('typeCamion', $selectedTypes)->pluck('id')->toArray();
    //         // dd($camion_ids);
    //         $demandes=Demande::WhereIn('camion_id',$camion_ids)->get();
    //         // dd( $demandes);
    //         if (count($demandes)>0){
    //             $camions_non_retenus = [];
    //             foreach($demandes as $demande){
    //                 $dateEnlevementDemande = $demande->dateEnlevement;
    //                 $dateLivraisonDemande = $demande->dateExpedition;
               
    //                 if ($dateEnlevement >= $dateEnlevementDemande && $dateEnlevement < $dateLivraisonDemande) {
    //                     $camions_non_retenue[] = $demande->camion_id;
    //                     // dd($camions_non_retenue);
        
    //                 }
    //             }
    //             // dd( $camions_non_retenue );
    //             if(!empty($camions_non_retenue)){
    //             $camions_selected_id = array_diff($camion_ids, $camions_non_retenue);
    //             //   dd($camions_selected_id);
    //             $camions_selected = Camion::join('type_camions', 'camions.typeCamion', '=', 'type_camions.id')
    //             ->where('type_camions.id',  $camions_selected_id)
    //             ->get(['camions.*','type_camions.name']);
    //             }
    //         }

    //         }

            
          

    //      if (empty($dateEnlevement) && empty($minCapacity) && empty($maxCapacity)) {
    //             if (empty($selectedTypes)) {
    //         $camions_selected = Camion::join('type_camions', 'camions.typeCamion', '=', 'type_camions.id')
    //                                    ->get(['camions.*', 'type_camions.name']);
                                   
    //     } else {
    //         foreach ($selectedTypes as $selected) {
    //             $camions_type = Camion::join('type_camions', 'camions.typeCamion', '=', 'type_camions.id')
    //                                   ->where('camions.typeCamion', $selected)
    //                                   ->get(['camions.*', 'type_camions.name']);
                      
    //             $camions_selected[] = $camions_type;

    //             // $camions_selected = call_user_func_array('array_merge', $camions_selected);
    //             $camions_selected = collect($camions_selected)->flatten()->all();

        
    //         }
    //         // dd( $camions_selected);
    //         // dd($camions_selected);
    //     }
    
    // }
   
     
            // $camions_type = Camion::join('type_camions', 'camions.typeCamion', '=', 'type_camions.id');
                // ->where('type_camions.id', $selected)
                // ->whereBetween('capaciteDeCharge', [$minCapacity, $maxCapacity])
                // ->get(['camions.*','type_camions.name']);
                // if ($camions_type->isNotEmpty()) {
                //     $camions_selected[] = $camions_type;
                // }
        
// dd($villeRegion);
// dd($camions_selected);




   
    
return view ('web.search',compact('camions_selected','types','regions','selectedTypes','type_id','options','regionId','nameRegion'));
    
    
                }}

    


    

