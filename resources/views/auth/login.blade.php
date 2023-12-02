@extends('layouts.app')

@section('content')






<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 image-container m-4">
            <img src="{{ asset('images/doc.jpg') }}" alt="Image de Connexion" class="img-fluid tom">
        </div>
        <div class="col-md-6 form-container m-4">
            <h2>Connexion</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="prenom" class="form-label">{{ __('Prénom') }}</label>
                    <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>
                    @error('prenom')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">{{ __('Mot de passe') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
            </form>
            <p class="mt-3">Pas encore de compte ? <a href="{{ route('register') }}">Inscrivez-vous ici</a></p>
        </div>
    </div>
</div>


@endsection
