<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\tb_RegionController;
use App\http\Controllers\DepartementController;
use App\http\Controllers\AdministrateurController;
use App\http\Controllers\tb_PromoteurController;
use App\http\Controllers\IndustrieController;
use App\http\Controllers\AutorisationController;
use App\http\Controllers\FonctionController;

Route::get('/', function () {
    return view('accueil');
});

//Route sur la vue autorisation
route::get('/activite',[ActiviteController::class, 'aff_act']);
//Route sur l'industrie 

Route::get('/industrie', [IndustrieController::class, 'aff_ind']);
//Route sur la vue Activite

Route::get('/autorisaton', [AutorisationController::class, 'aff_auto']);

Route::get('/produit', [ProduitController::class, '']);

//route sur la vue fonction
Route::get('/fonction', [FonctionController::class, 'aff_fonc']);

//Route sur la vue promoteur
Route::get('/promoteur',[tb_PromoteurController::class, 'aff_pro']);

//Route sur la vue Admin
Route::get('/admin', [AdministrateurController::class, 'aff_admin']);

//route sur la vue departement
Route::get('/departement', [DepartementController::class, 'aff_dep']);

//Route sur la vue region
Route::get('/region',[tb_RegionController::class, 'aff_reg']);
Route::get('/ajouter',[tb_RegionController::class, 'ajout_reg']);
Route::get('/recherche',[tb_RegionController::class, 'recherche_reg']);
// Route::post('/ajouter/traitement',[Controller::class, 'traitement']);
