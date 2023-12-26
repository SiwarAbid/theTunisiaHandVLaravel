<!DOCTYPE html>
<html>
  <head>
    <title>The Tunisia Hand |Produits |TRADITIONAL |MODERN |TUNISIE</title>
    <link rel="stylesheet" href="{{ asset('http://localhost/TheTunisiaHandVMVC/Views/CSS/Formulaire.css') }}">

  </head>
  <body>
  <div class="label-container">
        <label id="categorie">Produit </label>
    </div>
    <br>    <br>
<div class="container">


    
  <form method="POST" action="{{ url('/livre/createProduit') }}">
  @csrf
    <label>Ajouter un nouveau produit :</label>
    <label for="id">ID :</label>


    <input type="number" id="id" name="id"><br>


    <label for="name">Nom :</label>
    <input type="text" id="name" name="nom"><br>

    <label for="name">Auteur :</label>
    <input type="text" id="name" name="auteur"><br>


    <label for="name">Prix :</label>
    <input type="text" id="name" name="prix"><br>

    <label for="id">categ :</label>
    <input type="text" id="id" name="categ"><br>


    <input type="submit" name="submitBtnText" value="Ajouter">
  </form>
</div>
  </body>
</html>
