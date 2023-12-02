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


<div class="container">
    @foreach($hospitals as $hospital)
        <div class="hospital-container">
            <div class="hospital-image">
                <img src="{{ asset($hospital->image) }}" alt="Hospital Image">
            </div>
            <div class="hospital-details">
                <h3>{{ $hospital->nom }}</h3>
                <p><strong>Ville:</strong> {{ $hospital->ville }}</p>
                <p><strong>Localisation:</strong> {{ $hospital->localisation }}</p>
                <p><strong>Contact:</strong> {{ $hospital->contact }}</p>
            </div>
        </div>
    @endforeach
</div>






<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/boostrap1.js') }}"></script>
<script src="{{ asset('assets/js/app.min.js') }}"></script>
<script src="{{ asset('assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/js/page/index.js') }}"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>




</body>

</html>
