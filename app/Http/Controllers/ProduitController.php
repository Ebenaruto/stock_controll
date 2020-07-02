<?php

namespace App\Http\Controllers;



use App\Produit;
use Illuminate\Http\Request;


class ProduitController extends Controller
{
    function index()
    {
        $produit = produit::all();

        return view('ListeAdmin', ['produitrep' => $produit]);
    }
    function create()
    {
        return view('Formulaire');
    }

    function strore(Request $request)
    {
        $produit = new Produit();
        $produit->nom = $request->nom;
        $produit->categorie = $request->categorie;
        $produit->prix_unitaire = $request->prix_unitaire;
        $produit->quantité = $request->quantité;

        $produit->save();

        // Produit::create([
        //     'nom' => $request->name,
        //     'categorie' => $request->categorie,
        //     'prix_unitaire' => $request->prix_unitaire,
        //     'quantité' => $request->quantité,

        // ]);

        // $produit = produit::all();
        // return view('Formulaire')->with('produit', $produit);
        return redirect('ListeAdmin');
    }
}
