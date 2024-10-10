<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>KalsteinPlus</title>

    </head>
    <body>
  <h1>Gestion des produits chez Kalstein Plus</h1>
  h1>Ajouter un Nouveau Produit</h1>
    <form action="{{ route('produits.ajout') }}" method="POST">
        @csrf
        <label for="product_name_fr">Nom du Produit :</label>
        <input type="text" name="product_name_fr" required>

        <label for="product_marker">Fabricant :</label>
        <input type="text" name="product_marker" required>

        <label for="product_stock_units">Stock :</label>
        <input type="number" name="product_stock_units" required>

        <label for="product_priceEUR">Prix :</label>
        <input type="number" name="product_priceEUR" required>

        <button type="submit">Ajouter Produit</button>
    </form>
  
 
    </body>
</html>
