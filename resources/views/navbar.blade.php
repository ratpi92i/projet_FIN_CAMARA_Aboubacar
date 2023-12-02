<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FASO NAFA ACCUEIL</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">










</head>

<body>



    <nav class="navbar navbar-expand-lg" style="background-image: url('{{ asset('images/back6.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="container">
            <a class="navbar-brand" href="#">FASO NAFA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Connexion</a>

                        </li>

                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('maladies.indexUtilisateur') }}">Maladies</a>
                        </li>

                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('messages.create') }}">Contact</a>
                        </li>

                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Accueil</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('maladies.indexUtilisateur') }}">Maladies</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('messages.create') }}">Contact</a>
                        </li>

                    

                        @if(Auth::check())
                        <li class="nav-item align-right">
                            <a class="nav-link user-profile" href="#">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                {{ Auth::user()->prenom }}
                            </a>
                        </li>
                    @endif


                        <li class="nav-item">

                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="nav-link btn btn-link">Déconnexion</button>
                            </form>
                        </li>

                      


                       
                    @endguest




                </ul>
            </div>
        </div>
    </nav>



    
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/boostrap1.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/page/index.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>




</body>

</html>
