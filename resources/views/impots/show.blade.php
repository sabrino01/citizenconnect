@extends('layouts.app')

@section('content')
    <h2>Détails de l'impôt</h2>
    <p><strong>Code :</strong> {{ $impot->code }}</p>
    <p><strong>Nom et Prénom :</strong> {{ $impot->nom_complet }}</p>
    <p><strong>Adresse :</strong> {{ $impot->adresse }}</p>
    <p><strong>Emplacement :</strong> {{ $impot->emplacement }}</p>
    <p><strong>HP :</strong> {{ $impot->hp }}</p>
    <p><strong>HT :</strong> {{ $impot->ht }}</p>
    <p><strong>AUT :</strong> {{ $impot->aut }}</p>
    <p><strong>AUP :</strong> {{ $impot->aup }}</p>
    <p><strong>Valeur vénale :</strong> {{ $impot->valeur_venale }}</p>
    <p><strong>ROM :</strong> {{ $impot->rom }}</p>
    <a href="{{ route('impots.index') }}" class="btn btn-danger">Retour</a>
@endsection
