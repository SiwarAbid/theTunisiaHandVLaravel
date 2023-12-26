<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\livre;

class livreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $livres =livre::all();
        return view('index',compact('livre'));
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
            'auteur'=>'required',
            'prix'=>'required',
            'categ'=>'required'
        ]);
        $produit=new livres();

        $produit->nom=$request->nom;
        $produit->auteur=$request->auteur;
        $produit->prix=$request->prix;
        $produit->categ=$request->categ;

        $produit->save();
        return redirect ('http://localhost/theTunisiaHandVLaravel/public/livre/')->with('status','Le livre a été ajouter avec SUCCES. ');
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
        $p= livres::find($id);
        return view ('FormulaireEdit',compact('p'));
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
        $validatedData = $request->validate([
            'nom'=>'required',
            'auteur'=>'required',
            'prix'=>'required',
            'categ'=>'required'
            ]);

    // Récupérer le modèle à mettre à jour
    $modele = livres::findOrFail($id);

    // Mettre à jour les champs du modèle
    $modele->nom = $request->input('nom');
    $modele->auteur = $request->input('auteur');
    $modele->prix = $request->input('prix');
    $modele->categ = $request->input('categ');

    // Enregistrer les modifications apportées au modèle
    $modele->save();

    // Rediriger vers la page de détails du modèle mis à jour
    return redirect ('http://localhost/theTunisiaHandVLaravel/public/livre/')->with('status','Le livre a été modifier avec SUCCES. ');
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
        //
        $p= livres::find($id);
        $p->delete();
        //echo" ------ DELETE PRODUCT ----";

        return redirect()->route('index');
    }
}
