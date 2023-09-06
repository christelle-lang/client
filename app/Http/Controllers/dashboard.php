<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Demande;


class dashboard extends Controller
{

    public function dernieres_demandes(){
        
        {
            $client_id = auth()->id(); // ID du client connecté
            $demandes = Demande::where('client_id', $client_id)
                                ->orderBy('created_at', 'desc')
                                ->paginate(10);
    
            if (request()->ajax()) {
                return view('web.dernieres_demandes_ajax', ['demandes' => $demandes])->render();
            }
    
            return view('web.dernieres_demandes', ['demandes' => $demandes]);
        }
    }
    public function demandes_en_cours()
{
    $demandesEnCours = Demande::where('statut', 'en cours')->get();

    return view('web.demandes_cours', ['demandesEnCours' => $demandesEnCours]);
}

public function demandes_attente()
{
    $demandesEnAttente = Demande::where('statut', 'en attente')->paginate(10);


    return view('web.demandes_attente', ['demandesEnAttente' => $demandesEnAttente]);
}

public function demandes_acceptees()
{
    $demandesaccepte = Demande::where('statut', 'accepte')->get();

    return view('web.demandes_acceptees', ['demandesAcceptees' => $demandesaccepte]);
}

public function demandes_termine()
{
    $demandesTermine = Demande::where('statut', 'termine')->get();

    return view('web.demandes_termine', ['demandesTerminees' => $demandesTermine]);
}

public function tableau_de_bord()
{
    $client_id = auth()->id(); // ID du client connecté

    $demandes = Demande::where('client_id', $client_id)->get();

        $groupedDemandes = $demandes->groupBy('statut');

        $counts = [
            'en_attente' => $groupedDemandes->get('en attente') ? $groupedDemandes->get('en attente')->count() : 0,
            'en_cours' => $groupedDemandes->get('en cours') ? $groupedDemandes->get('en cours')->count() : 0,
            'termine' => $groupedDemandes->get('termine') ? $groupedDemandes->get('termine')->count() : 0,
            'accepte' => $groupedDemandes->get('accepte') ? $groupedDemandes->get('accepte')->count() : 0,
            'total' =>  $demandes ?  $demandes->count() : 0,

        ];

        return view('web.tableau_de_bord', ['counts' => $counts]);
}
    public function annuler_demandes($id)
{
    $demande = Demande::findOrFail($id);
    $demande->delete();
    
    return back()->with('success', 'Demande supprimée avec succès');
}


}