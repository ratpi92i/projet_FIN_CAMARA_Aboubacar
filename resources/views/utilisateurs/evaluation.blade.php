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
            <section class="custom-eva d-md-flex align-items-center">
                <div class="col-md-6 order-md-1 order-2">

                    <h3 class="poo">Verifie ton Indice de Masse corporelle</h3>
                    <p> </p>



            </div>
                <div class="col-md-6 order-md-2 order-1 image-half">
                    <img src="{{ asset('images/back8.jpg') }}" alt="Image" />
                </div>
                
            </section>
        </div>
    </div>
</div>

 <form action="{{ route('evaluer') }}" method="POST" class="my-4 p-4 border rounded shadow-lg">
    @csrf

    <div class="mb-3">
        <label for="poids" class="form-label">Poids (en kg):</label>
        <input type="number" name="poids" id="poids" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="taille" class="form-label">Taille (en cm):</label>
        <input type="number" name="taille" id="taille" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary btn-block">Évaluer</button>
</form>








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
