<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="../css/image/logo.png" type="favicon">
    <title>LuAna</title>

    <!-- Scripts -->
   
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
    <script src="{{ asset('js/cookie.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/catalogue.css') }}" rel="stylesheet">
    <link href="{{ asset('css/produit.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9f02afdd15.js" crossorigin="anonymous"></script>


</head>

<body>

    <header class="haut">
        <div class="logo_name">
            <a href="/login">
                <img src="../css/image/logo_transparent.png" widht="300" height="180" class="logo">
            </a>
        </div>

        <nav>
            <ul>
                <li class="deroulant">
                    <FONT size="5px"><a>Menu <i class="fas fa-angle-down"></i></a></FONT>
                    <ul class="lien">
                        <li><a href="{{ route('home') }}">Catalogue</a></li>
                        <li><a href="{{ route('Panier') }}">Panier</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div class="haut_droite">
            <div id="log">

                @guest

                <a class="nav-link" href="{{ route('login') }}" style="text-decoration:none">{{ __('Connexion') }}</a>
                <br>

                @if (Route::has('register'))

                <a class="nav-link" href="{{ route('register') }}" style="text-decoration:none">{{ __('Créer votre compte') }}</a>

                @endif

                @else


                <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="text-decoration:none">
                    <i class="fas fa-user"></i> {{Auth::user()-> nom_prénom}} <br>
                </a>

                <a href="/Panier" style="text-decoration:none" title="Commander" rel="nofollow">
                    <i class="fas fa-shopping-cart"></i> Panier : <span class="badge badge-pill badge-dark" id="nbrproduit">0</span>
                    <br>
                </a>

                @if ((Auth::user()-> admin) == 1)
                <a href="/Admin" style="text-decoration:none" title="Ajouter Produit" rel="nofollow">
                    <i class="fas fa-user-lock"></i> Admin
                    <br>
                </a>
                @endif
                <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="text-decoration:none">
                    <i class="fas fa-sign-out-alt"></i>
                    <href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        {{ __('Déconnection') }}
                </a>


                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                @endguest
            </div>
        </div>
        <main class="py-4">
        </main>

    </header>
    @yield('content')
    <div class="wrapper">
        <div class="cookie-container">
            <h3>Ce site web utilise des cookies</h3>
            <p>
                Nous utilisons des cookies pour personnaliser votre expérience sur notre site et le rendre plus agréable, mais aussi pour mieux adapter les contenus publicitaires à votre profil. En cliquant sur « Okay » vous acceptez l'utilisation de ces cookies.
                <!--<a href="#">privacy policy</a> and <a href="#">cookie policy</a>. -->
            </p>

            <button onclick="test() " class="cookie-btn">
                Okay
            </button>
        </div>
    </div>
    <footer>
        <div class="contient">
            <div id="copy">
                <p><i class="far fa-copyright"></i>Copyright, tous droits réservés</p>

            </div>

            <div class="reseaux">
                <div id="twitter">

                    <a href="https://twitter.com/?lang=fr" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://fr-fr.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
                </div>
            </div>
        </div>
    </footer>

    </div>
    @yield('extra-js')
</body>

</html>
