<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| API Routeshttp://localhost:8000/api/produits
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
//RECUPERE TOUT LES PRODUITS 
Route::get('/produits', [ProductController::class, 'index']); 

//AFFICHE 1 PRODUITS PAR SON ID
Route:: get('/produits/{id}', [ProductController::class, 'show']);

// AJOUT D'UN NOUVEAU PRODUIT
Route:: post('/produits', [ProductController::class, 'store']);

// METTRE UN JOUR UN PRODUIT DEJA EXSITANT
Route::put('/produits/{id}', [ProductController::class, 'update']);

//SUPPRIMER UN PRODUIT 
Route:: delete('/produit/{id}', [ProductController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
