<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <link rel="stylesheet" href=resources/css/style.css>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="container">
                <ul class="nav">
                    <li class="nav-item">
                      <a class="nav-link active" href="/">Acceuil</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/a-propos">A-propos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/contact">Contactez-nous</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/produits"> Voir nos clients</a>
                    </li>
                  </ul>
                  @yield('content')
            </div>
        </div>
    </body>
</html>