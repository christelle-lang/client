<?php

use App\Http\Controllers\auth_controller;
use App\Http\Controllers\statistique;
use App\Http\Controllers\ajout_camion;
use App\Http\Controllers\affiche_demande;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('connexion', [auth_controller::class,'login']);
Route::post('deconnexion/{id}', [auth_controller::class,'logout']);

Route::post('inscription', [auth_controller::class,'register']);

Route::post('ajout_camion', [ajout_camion::class, 'ajouterCamion']);


Route::get('statistique_camion/{id}', [statistique::class, 'statistique_camion']);

Route::get('statistique_demande/{id}', [statistique::class, 'statistique_demande']);

Route::get('envoie_demande', [statistique::class, 'envoie_demande']);

Route::get('demande/{id}', [statistique::class, 'demande']);

Route::get('typeCamion', [ajout_camion::class, 'typeCamion']);

Route::get('typeMarchandise', [ajout_camion::class, 'typeMarchandise']);

Route::get('liste_camion/{id}', [ajout_camion::class, 'listCamion']);

Route::post('/accepter_demande/{camionId}/{proprioId}/{demandeId}', [affiche_demande::class, 'accepterDemande']);


Route::get('affiche_demande/{id}', [affiche_demande::class, 'afficherDemande']);

Route::get('affiche_livraison/{id}', [affiche_demande::class, 'Livraison']);


Route::get('compter_demande/{id}', [affiche_demande::class, 'compterDemande']);


Route::get('camion_correspondant/{proprioId}/{typeCamionId}', [affiche_demande::class, 'camionCorrespondant']);

Route::get('camion_livraison/{proprioId}', [statistique::class, 'camionEnLivraison']);










// Route::get('statistique/camion', 'statistique@statistique_camion')->middleware('auth');;



