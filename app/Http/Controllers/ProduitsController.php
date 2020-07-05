<?php

namespace App\Http\Controllers;
use App\Produit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    public function produit() 
    {

        $produits = Produit::all();
       


        return view('produits.produit', compact('produits'));
             
    }

    public function create(){

        
        return view('produits.create');

    }
   
    public function store(){
        $data= request()->validate([
            'Nom_du_Produit'=>'required',
            'Prix_Unitaire'=>'required|integer|min:25',
            'Categorie'=>'required',
            'stock'=>'required|integer|min:0'
        ]);
       Produit:: create($data);
        return back();
    }
    // public function show(Client $client){

    //     return view('clients.show', compact('client'));

   // }
    public function modifier(Produit $produit){

       
        return view('produits.modifier',compact('produit'));
    }

    public function update(Produit $produit){
        $data= request()->validate([
            'Nom_du_Produit'=>'required',
            'Prix_Unitaire'=>'required|integer|min:25',
            'Categorie'=>'required',
            'stock'=>'required|integer|min:0'
        ]);
        
        $produit->update($data);
        $produits = Produit::all();
        return view('produits.produit', compact('produits'));

    }

    public function destroy(Produit $produit){

        $produit->delete();

        $produits = Produit::all();
        return view('produits.produit', compact('produits'));



    }
}

