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

    
    public function store(Request $request)
    {
        $validation= $request -> validate([
            'product_name_fr' =>'required|string|max:255',
            'product_stock_units' =>'required|integer|min:0',
            'product_priceEUR' =>'required|integer|min:0',
        ]);

        $nvProduit = Product::create($validation);
        return response()->json($nvProduit);
    }

    public function show($id)
    {
        $produits = Product::find($id);
        return response()->json($produits);
    }

    
    public function update(Request $request, string $id)
    {
        //
    }

   
    public function destroy(string $id)
    {
        //
    }
}
