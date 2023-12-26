<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\produits;

use Illuminate\Support\Facades\Route;


class produitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $produits =produits::all();
        return view('produit.index',compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Formulaire');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $request->validate([
            'nom'=>'required',
            'img'=>'required',
            'prix'=>'required',
            'description'=>'required'
        ]);
        $produit=new produits();

        $produit->nom=$request->nom;
        $produit->img=$request->img;
        $produit->prix=$request->prix;
        $produit->description=$request->description;

        $produit->save();
        return redirect ('http://localhost/theTunisiaHandVLaravel/public/produit/')->with('status','Le produit a été ajouter avec SUCCES. ');

    
    }

    public function getAll(){
        $produits=produit::all();
        return view('produit.index',compact('produits'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $p= produits::find($id);
        return view ('produit.FormulaireEdit',compact('p'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

    // Valider les données de la requête
    $validatedData = $request->validate([
            'nom'=>'required',
            'img'=>'required',
            'prix'=>'required',
            'description'=>'required|max:200'
            ]);

    // Récupérer le modèle à mettre à jour
    $modele = produits::findOrFail($id);

    // Mettre à jour les champs du modèle
    $modele->nom = $request->input('nom');
    $modele->img = $request->input('img');
    $modele->prix = $request->input('prix');
    $modele->description = $request->input('description');

    // Enregistrer les modifications apportées au modèle
    $modele->save();

    // Rediriger vers la page de détails du modèle mis à jour
    return redirect ('http://localhost/theTunisiaHandVLaravel/public/produit/')->with('status','Le produit a été modifier avec SUCCES. ');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $p= produits::find($id);
        $p->delete();
        //echo" ------ DELETE PRODUCT ----";

        return redirect()->route('produit.index');
    }
}
