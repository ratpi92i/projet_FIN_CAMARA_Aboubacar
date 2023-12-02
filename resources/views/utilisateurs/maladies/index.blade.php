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



<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <section class="custom-create d-md-flex align-items-center">
                <div class="col-md-6 order-md-1 order-2 image-half">
                    <img src="{{ asset('images/back4.jpg') }}" alt="Image" />
                </div>
                <div class="col-md-6 order-md-2 order-1">

                        <h3 class="poo">Maladies</h3>
                        <p> </p>



                </div>
            </section>
        </div>
    </div>
</div>



    <div class="container">
        <h2>Maladies</h2>



        <div class="d-flex justify-content-center">
            <ul class="pagination">
                <li class="page-item {{ $maladies->onFirstPage() ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $maladies->previousPageUrl() }}" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                @for ($i = 1; $i <= $maladies->lastPage(); $i++)
                    <li class="page-item {{ $i === $maladies->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $maladies->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
                <li class="page-item {{ $maladies->hasMorePages() ? '' : 'disabled' }}">
                    <a class="page-link" href="{{ $maladies->nextPageUrl() }}" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($maladies as $maladie)
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="{{ asset('storage/' . $maladie->image) }}" class="card-img-top" alt="{{ $maladie->nom }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $maladie->nom }}</h5>
                            <p class="card-text"> <strong> Symptomes </strong> {{ $maladie->symptomes }}</p>
                            <p class="card-text"> <strong> Traitement </strong> {{ $maladie->traitement }}</p>
                        </div>
                        <div class="card-footer bg-transparent border-0">

                        </div>
                    </div>
                </div>
            @endforeach
        </div>



    </div>






<footer class="bg-dark text-light text-center py-3">
    <div>
        <img src="{{ asset('images/logo_nafa.png') }}" alt="Logo Faso Nafa" height="100">
    {{-- </div> --}}
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
