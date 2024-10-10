<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ROUTE POUR AFFICHER LE FORMULAIRE POUR AJOUTER UN PRODUIT
Route::get('/produits/create',[ProductController::class,'create'])->name('produits.create');

// ROUTE POUR AJOUTER  D'UN NOUVEAU PRODUIT
Route:: post('/produits', [ProductController::class, 'store'])->name('produits.ajout');