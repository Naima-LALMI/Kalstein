<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller

// METHODES = index - store - show - update - destroy//

{
    
    public function index()
    {
        $produits = Product::all();
        return response()->json($produits);
    }

    public function show($id)
    {
        $produits = Product::find($id);
        return response()->json($produits);
    }


    public function store(Request $request)
    {
        $validation = $request->validate([
            'product_name_fr' => 'required|string|max:255',
            'product_stock_units' => 'required|integer|min:0',
            'product_priceEUR' => 'required|integer|min:0',
        ], 
        //Message en cas d'erreur de validation
        [
            'product_name_fr.required' => 'Le nom du produit est obligatoire.',
            'product_stock_units.required' => 'Le stock est obligatoire.',
            'product_priceEUR.required' => 'Le prix est obligatoire et doit être un nombre entier.'
        ]);

        $nvProduit = Product::create($validation);
        return response()->json($nvProduit,201);//retourne le produit créer 
    }
    
    public function update(Request $request, string $id)
    {
        $produitUpdate = Product::findOrFail($id);// Récupère le produit par ID
        $validation= $request -> validate([
            'product_name_fr' =>'sometimes|required|string|max:255',
            'product_stock_units' =>'sometimes|required|integer|min:0',
            'product_priceEUR' =>'sometimes|required|integer|min:0',
        ]);
        //Mise à jr du produit
        $produitUpdate->update($validation); // Met à jour le produit
        return response()->json([
            // Retourne le produit mis à jour
            'message'=> 'Produit mis à jour avec succès.',
            'produit'=> $produitUpdate,
        ]);
    }

   
    public function destroy($id)
    {
       $produitDelete = Product:: findOrFail($id);
       $produitDelete->delete();  //Suppression du produit
       return response()->json([
         // Retourne un message indiquant la suppression + code statut 204 
        'message' => 'Produit supprimé avec succès.',204]);
    }
}
