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


    
  <form method="POST" action="{{ route('produit.update' ,$p->id)}}">
  @csrf
  @method('PUT')
    <label>Modifier le produit : {{ $p->nom}}</label> <br>

    <label for="id">ID :</label>


    <input type="number" id="id" name="id" value="{{ $p->id}}"><br>


    <label for="name">Nom :</label>
    <input type="text" id="name" name="nom" value="{{ $p->nom}}" ><br>

    <label for="name">Image :</label>
    <input type="text" id="name" name="img" value="{{ $p->img}}"><br>


    <label for="name">Prix :</label>
    <input type="text" id="name" name="prix" value="{{ $p->prix}}"><br>

    <label for="id">Description :</label>
    <input type="text" id="id" name="description" value="{{ $p->description}}"><br>


    <input type="submit" name="submitBtnText" value="Enregistrer les modifications">
  </form>
</div>
  </body>
</html>
