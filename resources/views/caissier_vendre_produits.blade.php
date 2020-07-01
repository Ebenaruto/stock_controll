@extends('layouts/caissierVendreProduits', ['title'=>'Vendre un produit'])

@section('sellProduct')




	<div class="d-flex justify-content-between border px-5 cadre">
        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6 col-offset">
            <div class=" text-center rounded bg-light ">
                <img src="{{asset('img/User.svg')}}" class="" alt="...">
                <p>Caissier.ère</p>
                <h2 class="font-weight-bolder">G-Stock</h2>
            </div>
            <div class=" bg-dark px-5 pt-5 haut">
                <a href="{{url('products-list')}}" class="btn btn-primary btn-md btn-block mb-5">Liste les produits</a>
                <a href="{{url('sell-product')}}" class="btn btn-secondary btn-md btn-block">Vendre un produit</a>
            </div>
        </div>
        <div class=" col-9">
            <div class="text-center bolder row justify-content-center">

        	    <div class="card col-6  text-center text-white bg-dark rounded-pill mb-4">
			        <p>VENTE DES PRODUITS</p>
			    </div>
            

        	

            </div>
        </div>
    </div>



@endsection