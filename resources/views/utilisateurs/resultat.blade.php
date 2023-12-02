
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

    <div class="container py-5 d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-body text-center">
                        <h1 class="card-title">Résultat de l'évaluation</h1>
                        <hr>
                        <div>
                            <p>Votre IMC est : {{ $imc }}</p>
                            @if ($imc < 18.5)
                                <p>Vous êtes en insuffisance pondérale.</p>
                            @elseif ($imc >= 18.5 && $imc < 25)
                                <p>Votre poids est normal.</p>
                            @elseif ($imc >= 25 && $imc < 30)
                                <p>Vous êtes en surpoids.</p>
                            @else
                                <p>Vous êtes en obésité.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
    
    
    <div class="container py-3">
        <p>
            En dessous de 18,5 : Insuffisance pondérale <br>
            Entre 18,5 et 24,9 : Poids normal <br>
            Entre 25 et 29,9 : Surpoids <br>
            30 ou plus : Obésité
        </p>
    </div>