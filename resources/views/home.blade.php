@extends('layouts.app')

@section('content')
<style>
    .miss{
        width: 100%;
        height:70vh;
        background-image: url("asset/img/download.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        display: flex;
        justify-content: center;
        align-content: center;
        align-items: center;
    }
</style>
<header>
        <Ajoutez ici votre en-tête commun à toutes les pages -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">GESTION POINTAGE</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.index') }}">Gestion des Utilisateurs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pointages.index') }}">Gestion du Pointage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('paiements.index') }}">Gestion des Paiements</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container-fluid miss">

</div>
@endsection