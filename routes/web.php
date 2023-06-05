<?php

use App\Http\Controllers\semi_remorque_controller;
use App\Http\Controllers\fourgon_controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\about_controller;
use App\Http\Controllers\accueil_controller;
use App\Http\Controllers\shop_controller;
use App\Http\Controllers\login_controller;
use App\Http\Controllers\dashboard_controller;
use App\Http\Controllers\contact_controller;
use App\Http\Controllers\client_controller;








/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


route::get('/contact',[contact_controller::class,'contact_view'])->name('contact_page');

route::post('/client_create',[client_controller::class,'register'])->name('creation_client');
route::get('/accueil_client',[client_controller::class,'client_connecte'])->name('accueil_client');
route::post('/authentifcation_client',[client_controller::class,'connexion'])->name('authentification_client');
route::post('/deconnexion_client',[client_controller::class,'deconnexion'])->name('deconnexion_client');





route::get('/about',[about_controller::class,'about'])->name('about_page');


route::get('/inscription',[login_controller::class,'inscription'])->name('inscription_page');
route::get('/connexion',[login_controller::class,'connexion'])->name('connexion_page');


route::get('/accueil',[accueil_controller::class,'accueil'])->name('accueil_page');


route::get('/shop',[shop_controller::class,'shop'])->name('shop_page');
route::get('/detail_camion',[shop_controller::class,'shop_detail'])->name('shop_detail_page');
route::get('/panier',[shop_controller::class,'shop_panier'])->name('shop_panier_page');

route::get('/tableau_de_bord',[dashboard_controller::class,'dashboard_view'])->name('dashboard_view');
route::get('/reservation_page',[dashboard_controller::class,'reservation_view'])->name('reservation_view');
route::get('/old_reservation_page',[dashboard_controller::class,'old_reservation_view'])->name('old_reservation_view');


route::get('/fourgon_page',[fourgon_controller::class,'fourgon_page'])->name('fourgon_page');

route::get('/semi_remorque_page',[semi_remorque_controller::class,'semi_remorque_page'])->name('semi_remorque_page');

