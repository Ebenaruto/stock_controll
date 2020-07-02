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

    <title>G-stock</title>

    <link href="css/app.css" rel="stylesheet">
</head>

<body>

    <div class="wrapper" style="">
        <nav id="sidebar" class="sidebar">
            <div class="sidebar-content js-simplebar">

                <center> <svg width="7em" height="7em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    </svg>
                </center>
                <center>
                    <div class="badge badge-primary text-wrap" style="width: 6rem;">
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                            {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li> --}}
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    @can('manage-users')
                                    <a class="dropdown-item" href="{{ route('admin.users.index') }}">
                                        Gestion des utilisateurs
                                    </a>
                                    @endcan
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </center>
                <center>
                    <p class="text-secondary" width="7em">G-Stock</p>

                    <ul class="sidebar-nav">

                        <!-- <i class="align-middle" data-feather="user"></i> <span class="align-middle">Admin</span> -->
                        {{-- <br> <br><br> --}}
                        @can('enregistrer_produit')
                        <a href="Formulaire"><button type="button" class="btn btn-danger">Nouvel
                                Arrivage</button></a>
                        @endcan
                        <a href="ListeAdmin"><button type="button" class="btn btn-success">Liste des
                                produits</button> </a>
                        <a href="#"><button type="button" class="btn btn-secondary">vendre un
                                produit</button></a>
                        <a href="home"><button type="button" class="btn btn-primary">
                                accueil</button>
                        </a>
                    </ul>

                </center>




            </div>
        </nav>
        <!-- <img src="public/img/photo/im.jpg" class="img-fluid" alt="Responsive image"> -->

        <div class="main" style="padding-left: 3%; padding-right:3%">