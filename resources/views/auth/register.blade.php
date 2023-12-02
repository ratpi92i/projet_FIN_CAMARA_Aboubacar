@extends('layouts.app')

@section('content')




    @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
   @endif

    <div class="container-fluid">
        <div class="row ">
            <div class="col-md-6 image-container m-4">
                <img src="{{ asset('images/ddo.jpg') }}" alt="Image de Connexion" class="img-fluid tom">
            </div>
            <div class="col-md-6">



                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-3 row">
                                <div class="col">
                                    <label for="nom" class="form-label">{{ __('Nom') }}</label>
                                    <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>
                                    @error('nom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col">
                                    <label for="prenom" class="form-label">{{ __('Prénom') }}</label>
                                    <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom">
                                    @error('prenom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col">
                                    <label for="email" class="form-label">{{ __(' Addresse Email') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col">
                                    <label for="adresse" class="form-label">{{ __('Adresse') }}</label>
                                    <input id="adresse" type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse" value="{{ old('adresse') }}" required autocomplete="adresse">
                                    @error('adresse')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col">
                                    <label for="ville" class="form-label">{{ __('Ville') }}</label>
                                    <input id="ville" type="text" class="form-control @error('ville') is-invalid @enderror" name="ville" value="{{ old('ville') }}" required autocomplete="ville">
                                    @error('ville')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col">
                                    <label for="secteur" class="form-label">{{ __('Secteur') }}</label>
                                    <input id="secteur" type="text" class="form-control @error('secteur') is-invalid @enderror" name="secteur" value="{{ old('secteur') }}" required autocomplete="secteur">
                                    @error('secteur')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col">
                                    <label for="contact" class="form-label">{{ __('Contact') }}</label>
                                    <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" required autocomplete="contact">
                                    @error('contact')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col">
                                    <label for="password" class="form-label">{{ __('Mot de passe') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col">
                                    <label for="password-confirm" class="form-label">{{ __('renseigner le mot de passe') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>


                            <div class="mb-0 d-grid">
                                <button type="submit" class="btn btn-primary">{{ __('valider') }}</button>
                            </div>
                        </form>
                    </div>

        </div>
    </div>

@endsection
