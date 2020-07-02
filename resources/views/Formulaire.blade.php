@extends('layouts.style')

@section('content')


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Web UI Kit &amp; Dashboard Template based on Bootstrap">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, web ui kit, dashboard template, admin template">

	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<title>AdminKit Demo - Web UI Kit &amp; Dashboard Template</title>

	<link href="css/app.css" rel="stylesheet">
</head>

<body>
	@include('layouts.menu')
	<div class="container-fluid p-0">
		<img src="Stock.jpg" class="img-fluid" width="100%" style="height: 350px" alt="Responsive image">
		@can('enregistrer_produit')
		<form action="{{url('ajouter')}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="col">
					<input type="text" name="nom" placeholder="Nom" required>
				</div>
				<div class="col">
					<input type="text" name="categorie" placeholder="categorie" required>
				</div>
			</div>
			<br><br>
			<div class="row">
				<div class="col">
					<input type="text" name="prix_unitaire" placeholder="prix unitaire" required>
				</div>
				<div class="col">
					<input type="text" name="quantité" placeholder="quantité" required>
				</div>
			</div>

			<center> <button type="submit" class="btn btn-info w-25  mt-3 form-control">Enregistrer</button>

				<button type="submit" class="btn btn-danger w-25  mt-3 form-control">Retour</button></center>
		</form>
		@endcan

</body>

</html>
@endsection