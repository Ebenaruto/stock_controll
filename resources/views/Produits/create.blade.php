@extends('layout')
@section('content')
<h1>Ajouter un Produit</h1>
<form action="/produits" method="POST">
@include('includes.formulaire produit')
<button type="submit" class="btn btn-primary ml-5 my-2" id='produit' >ajouter un produit</button>

  </form>
 

@endsection