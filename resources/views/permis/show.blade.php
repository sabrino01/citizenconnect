@extends('layouts.app')

@section('content')
    <h2>Détails du permis</h2>
    <p><strong>Numéro :</strong> {{ $permi->numero }}</p>
    <p><strong>Genre :</strong> {{ $permi->genre }}</p>
    <p><strong>Nom :</strong> {{ $permi->nom }}</p>
    <p><strong>Prénom :</strong> {{ $permi->prenom }}</p>
    <p><strong>Date de naissance :</strong> {{ $permi->naissance }}</p>
    <p><strong>Lieu de naissance :</strong> {{ $permi->lieu }}</p>
    <p><strong>Adresse :</strong> {{ $permi->adresse }}</p>
    <p><strong>Téléphone :</strong> {{ $permi->phone }}</p>
    <p><strong>categorie de permis :</strong> {{ $permi->category }}</p>
    <p><strong>Formation effectuer :</strong> {{ $permi->formation }}</p>
    <p><strong>Date d'obtention :</strong> {{ $permi->date_obtention }}</p>
    <p><strong>Lieu d'obtention :</strong> {{ $permi->lieu_obtention }}</p>
    <p><strong>Date d'expiration :</strong> {{ $permi->date_expiration }}</p>
    <a href="{{ route('permis.index') }}" class="btn btn-danger">Retour</a>
@endsection
