@extends('Layouts.shared')

@section('title', 'Accueil')
@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
       <li class="breadcrumb-item"><a href="#">Satcongo</a></li>
       <li class="breadcrumb-item"><a href="#">Clients</a></li>
       <li class="breadcrumb-item active" aria-current="page">Liste des comptes Clients</li>
    </ol>
 </nav>
@endsection

@section('page-header')
    <div>
        <h5 class="page-title mb-0 mt-2">Comptes Clients</h5>
        <p class="lead">Liste des comptes Clients</p>
    </div>
@endsection



@section('content')
    <div class="card">
        <div class="card-body">
            <h1>ACCUEIL</h1>
        </div>
    </div>



@endsection
