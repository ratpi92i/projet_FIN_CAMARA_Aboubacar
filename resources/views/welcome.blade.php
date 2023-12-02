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


@include('navbar')




    <div class="banner-container ">
        <div id="heroCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active"
                style="background-image: url('{{ asset('images/back2.jpg') }}');

                     height: 90vh; background-size: cover; background-position: center; position: relative; overflow: hidden;">
                    <div class="container h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-lg-6">
                                <div class="glass-effect text-center text-lg-left">
                                    <h1 class="display-4 text-white " id="pop">Bienvenue sur FASO NAFA</h1>
                                    <p class="lead text-white">Une plateforme dédiée à la santé au Burkina Faso</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


         <div class="carousel-item "
                style="background-image: url('{{ asset('images/close-up-doctor-typing-laptop-keyboard-medical-cabinet.jpg') }}');
                 height: 90vh; background-size: cover; background-position: center; position: relative; overflow: hidden;">
                <div class="container h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-lg-6">
                            <div class="glass-effect text-center text-lg-left">
                                <h1 class="display-4 text-white " id="pop">SANTE AU BURKINA</h1>
                                <p class="lead text-white">Une plateforme dédiée à la santé </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item "
            style="background-image: url('{{ asset('images/back1.jpg') }}');
             height: 90vh; background-size: cover; background-position: center; position: relative; overflow: hidden;">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-lg-6">
                        <div class="glass-effect text-center text-lg-left">
                            <h1 class="display-4 text-white " id="pop">SANTE AU BURKINA</h1>
                            <p class="lead text-white">Une plateforme dédiée à la santé </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>




            </div>
            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
        </div>

    </div>







<section>
    <div class="container">
   <div class="row">
    <div class="col-md-6 d-flex align-items-center">
        <div class="text-left">
            <h2 class="pop">FASO NAFA</h2>
            <p>Trouve les informations detaillées sur les maladies,fais un bilan de santé,discute avec les professionnels du milieu</p>
        </div>
    </div>
    <div class="col-md-6">
        <img src="{{ asset('images/pana.png') }}" alt="Des" class="img-fluid">
    </div>
</div>

</div>
</section>




<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <section class="custom-blue d-md-flex align-items-center">
                <div class="col-md-6 order-md-1 order-2 image-half">
                    <img src="{{ asset('images/offi.jpg') }}" alt="Image" />
                </div>
                <div class="col-md-6 order-md-2 order-1">

                        <h3 class="poo">Tout sur la Santé Au Burkina</h3>
                        <p> </p>



                </div>
            </section>
        </div>
    </div>
</div>




    <div class="section1">
        <div class="card">
            <img src="{{ asset('images/african_doc.jpg') }}" alt="Card Image 1">
            <div class="card-content">
                <h2 class="card-title">MALADIES</h2>
                <p class="card-description">INFORMATIONS SUR LES MALADIES.</p>
                <a  href="{{ route('maladies.indexUtilisateur') }}"
                class="see-more-btn">Voir plus</a>
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('images/docteurs.jpg') }}" alt="Card Image 2">
            <div class="card-content">
                <h2 class="card-title">Rendez-vous</h2>
                <p class="card-description">Prend rendez vous dans ton centre de santé.</p>
                <a href="{{ route('rendezvous.create')}}" class="see-more-btn">Voir plus</a>
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('images/bilan.jpg') }}" alt="Card Image 3">
            <div class="card-content">
                <h2 class="card-title">Indice de Masse Corporelle</h2>
                <p class="card-description">FAIS UN BILAN DE SANTE.</p>
                <a href="{{ auth()->check() ? route('form_evaluation') : route('login') }}" class="see-more-btn">Verifier</a>

            </div>
        </div>
    </div>








<div class="container">
    <div class="row align-items-center">

        <div class="col-md-6">
            <img src="{{ asset('images/sti.png') }}" class="img-fluid cent" alt="Illustration">
        </div>


        <div class="col-md-6">
            <h2>Cree un compte ou connecte toi</h2>
            <p>
           Discute avec des medecins qualifiés en creant ton compte et pose tes preocupations
            </p>


            <div class="mt-4">
                <a href="{{ route('login') }}" class="btn btn-primary">Connexion</a>
                <a href="{{ route('register') }}" class="btn btn-secondary">Inscription</a>
            </div>

        </div>
    </div>
</div>


<footer class="bg-dark text-light text-center py-3">
    <div>
        <img src="{{ asset('images/logo_nafa.png') }}" alt="Logo Faso Nafa" height="100">
  
    <p class="m-0">&copy; 2023 Faso Nafa. Tous droits réservés.</p>
</footer>



    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/boostrap1.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/page/index.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>




</body>

</html>
