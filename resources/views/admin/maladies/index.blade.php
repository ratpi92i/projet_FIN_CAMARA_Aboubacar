{{-- @extends('layouts.app')

@section('content')
<h1>bienvenue admin </h1>
@endsection --}}

<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>ADMINISTRATEUR</title>

    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel='shortcut icon' type='image/x-icon' href='{{ asset('assets/img/favicon.ico') }}' />
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn">
                                <i data-feather="align-justify"></i></a></li>
                        <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                                <i data-feather="maximize"></i>
                            </a></li>
                        <li>
                            <form class="form-inline mr-auto">

                            </form>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">


                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image"
                                src="{{ asset('assets/img/admin.jpg') }}" class="user-img-radious-style"> <span
                                class="d-sm-none d-lg-inline-block"></span></a>
                        <div class="dropdown-menu dropdown-menu-right pullDown">
                            <div class="dropdown-title">ADMINISTRATEUR </div>




                            <div class="dropdown-divider"></div>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item has-icon text-danger">
                                    <i class="fas fa-sign-out-alt"></i>
                                    Déconnexion
                                </button>
                            </form>

                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="{{ route('dashboard') }}"> <img alt="" src="{{asset('assets/img/logo.png')}}"
                                class="header-logo" /> <span class="logo-name">FASO-NAFA</span>
                        </a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">MENU</li>
                        <li class="dropdown active">
                            <a href="" class="nav-link"><i data-feather="monitor"></i><span>
                                    Panneau</span></a>
                        </li>
                        <li class="dropdown">
                            <a class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="user"></i><span>Utilisateur</span></a>
                            <ul class="dropdown-menu">

                                <li><a class="nav-link" href="{{ route('utilisateurs') }}">voir</a></li>

                            </ul>
                        </li>


                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="activity"></i><span>Maladies</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ route('admin.maladies.index') }}">voir</a></li>
                                <li><a class="nav-link" href="{{ route('maladies.create') }}">ajouter</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="map"></i><span>Hopitaux</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="#">voir</a></li>

                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="message-square"></i><span>Messages</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ route('admin.messages.index')}}">voir</a></li>

                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                    data-feather="calendar"></i><span>Rendez-vous</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ route('admin.rendezvous.index')}}">voir</a></li>

                            </ul>
                        </li>
                    </ul>
                </aside>
            </div>
            <!-- MON CONTENU A INTEGRER -->
            <div class="main-content">


                <h1>Liste des Maladies</h1>

                <a href="{{ route('maladies.create') }}" class="btn btn-primary mb-3">Ajouter une maladie</a>

                @if($maladies->isEmpty())
                    <p>Aucune maladie trouvée.</p>
                @else



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

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Symptômes</th>
                                    <th scope="col">Traitement</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($maladies as $maladie)
                                    <tr>
                                        <td>{{ $maladie->nom }}</td>
                                        <td>{{ $maladie->symptomes }}</td>
                                        <td>{{ $maladie->traitement }}</td>
                                        <td><img src="{{ asset('storage/' . $maladie->image) }}" alt="Image de la maladie" class="img-fluid" style="max-width: 100px;"></td>
                                        <td>
                                            <a href="{{ route('maladies.edit', $maladie->id) }}" class="btn btn-warning btn-sm">Éditer</a>
                                            <form action="{{ route('maladies.destroy', $maladie->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ?')">Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif



            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    <a href="#">FASO NAFA .TOUT DROITS RESERVES</a></a>
                </div>
                <div class="footer-right">
                </div>
            </footer>
        </div>
    </div>

    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/page/index.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>



</html>
