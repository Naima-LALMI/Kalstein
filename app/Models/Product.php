<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    // Le modèle utilise la table wp_k_products
    protected $table = 'wp_k_products';
    protected $primaryKey = 'product_aid'; // Clé primaire
    public $incrementing = true; // Clé primaire auto-incrémentée

    public $timestamps = false;

    protected $fillable = ['product_name_fr', 'product_stock_units', 'product_priceEUR'];
}
