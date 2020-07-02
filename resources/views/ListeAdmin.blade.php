@include('layouts.menu')

@extends('layouts.style')

@section('content')

<h1>Produits</h1>
<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col" class="bg-primary">Id</th>
      <th scope="col" class="bg-primary">Nom du Produit</th>
      <th scope="col" class="bg-primary">Prix Unitaire</th>
      <th scope="col" class="bg-primary">Catégorie</th>
      <th scope="col" class="bg-primary">Stock</th>
      <th scope="col" class="bg-primary">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($produitrep as $produit)
    <tr>
      <!-- <th scope="row"></th> -->
      <td class="bg-success">{{$produit->id}}</td>
      <td>{{$produit->nom}}</td>
      <td>{{$produit->prix_unitaire}}</td>
      <td>{{$produit->categorie}}</td>
      <td>{{$produit->prix_unitaire}}</td>

      <td> @can('enregistrer_produit')<a href="/produits/{{$produit->id}}/modifier"
          class="btn btn-secondary">Modifier</a> @endcan

        @can('enregistrer_produit')<a href="/produits/{{$produit->id}}/supprimer"><button
            class="btn btn-danger">supprimer</button></a> @endcan

        <a href=""><button class="btn btn-success">vendre</button></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@can('enregistrer_produit')
<a href="Formulaire" class="btn btn-primary my-3">Nouveau Produit</a>
@endcan
@endsection