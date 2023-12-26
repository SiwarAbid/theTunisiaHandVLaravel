<!DOCTYPE html>
<html>
  <head>
    <title>The Tunisia Hand |Produits |TRADITIONAL |MODERN |TUNISIE</title>
    <link rel="stylesheet" href="{{ asset('http://localhost/TheTunisiaHandVMVC/Views/CSS/Formulaire.css') }}">
  </head>
  <body>
  <div class="container">
  <div class="label-container">
      <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;❤
      <label id="categorie">The Tunisia Hand</label></label>
    
    <br>    <br>
        <label id="categorie">Produits </label>
    </div>
    <br>    <br>
    <table>
    <tr>
        <th> ID </th>
        <th> Nom </th>
        <th> Image </th>
        <th> Prix </th>
        <th> Modifier </th>
        <th> Supprimer </th>
        

    </tr>
    <?php
    //require_once __DIR__ .'/../Model/Produit.php';
        foreach($produits as $p){?>
    <tr>
        <td> <?=$p->id ?> </td>
        <td> <?=$p->nom ?> </td>
        <td> <img src='<?=$p->img ?> '/> </td>
        
        <td> <?=$p->prix ?> </td>
        <td><a href="{{ route ('produit.edit',$p->id) }}" id="button" >Modifier</a></td>
        <td>
            <form method="post" action="{{ route('produit.destroy',$p->id)}}"> 
                    @csrf
                    @method("DELETE")
                <input type="submit" value="Supprimer" />
            </form>
        </td>
 <!-- ERREUR -->

        

    </tr>  
    <?php }?>
    </table> 
    <br>    <br>
<a href="{{ route ('produit.create') }}">Ajouter un nouveau Produit </a>
</div>
</body>
</html>