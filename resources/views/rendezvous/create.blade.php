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
                        <img src="{{ asset('images/back3.jpg') }}" alt="Image" />
                    </div>
                    <div class="col-md-6 order-md-2 order-1">

                            <h3 class="poo">Rendez-vous</h3>




                    </div>
                </section>
            </div>
        </div>
    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="">
    <h1 class="text-center mb-4">Prendre un nouveau rendez-vous</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{ route('rendezvous.store') }}" method="POST" class="border p-4">
                @csrf

                <div class="mb-3">
                    <label for="hospital" class="form-label">Choisir un hôpital :</label>
                    <select class="form-select" id="hospital" name="hospital_id" required>
                        @foreach ($hospitals as $hospital)
                            <option value="{{ $hospital->id }}">{{ $hospital->nom }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="datetime" class="form-label">Date et heure du rendez-vous :</label>
                    <input type="datetime-local" class="form-control" id="datetime" name="date_time" required>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Demander le rendez-vous</button>
                </div>
            </form>
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
