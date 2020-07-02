@extends('layout')
@section('content')

<h1>Produits</h1>
<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col" class="bg-primary">Nom du Produit</th>
      <th scope="col" class="bg-primary">Prix Unitaire</th>
      <th scope="col" class="bg-primary">Catégorie</th>
      <th scope="col" class="bg-primary">Stock</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($produits as $produit)
    <tr>
      <!-- <th scope="row"></th> -->
      <td class="bg-success">{{$produit->Nom_du_Produit}}</td>
      <td >{{$produit->Prix_Unitaire}}</td>
      <td class="bg-info">{{$produit->Categorie}}</td>
      <td>{{$produit->stock}}</td>
      <td><a href="/produits/{{$produit->id_produit}}/modifier" class="btn btn-secondary">Modifier</a></td>
      <td><button class="btn btn-danger">ajouter le client</button></td>
    </tr>
    @endforeach
  </tbody>
</table>
<a href="/produits/create" class="btn btn-primary my-3">Nouveau Produit</a>
@endsection