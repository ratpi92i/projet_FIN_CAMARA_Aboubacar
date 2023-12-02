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

    



  <div class=" haut container-fluid  ">
    
    @if(session('success'))
    <div class="alert alert-success text-center" role="alert">
        <span>{{ session('success') }}</span>
    </div>
@endif

  
    <div class="row align-items-center">
        
        <div class="col-md-6 rig">
            <img src="{{ asset('images/ddc.png') }}" alt="Votre image" class="img-fluid">
        </div>
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">{{ __('Envoyer un message') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('messages.store') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="titre" class="form-label">Titre du message</label>
                            <input type="text" class="form-control" id="titre" name="titre" required>
                        </div>
                        <div class="mb-4">
                            <label for="message" class="form-label">Votre message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
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

