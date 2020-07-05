@extends('layout')
@section('content')
<h1>Modifier {{$produit->Nom_du_Produit}}</h1>
<form action="/produits/{{ $produit->id }}" method="POST">
@method('PATCH')
@include('includes.formulaire produit')
<button type="submit" class="btn btn-primary ml-5 my-2" id='produit' >Sauvegarder la modification</button>

  </form>
 

@endsection