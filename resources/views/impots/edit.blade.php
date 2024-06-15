@extends('layouts.app')

@section('content')
    <h2>Modifier l'impôt</h2>
    <form action="{{ route('impots.update', $impot->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="code">Code :</label>
        <input type="number" name="code" id="code" value="{{ $impot->code }}">
        <label for="nom">Nom et Prénom :</label>
        <input type="text" name="nom_complet" id="nom" value="{{ $impot->nom_complet }}">
        <label for="adresse">Adresse :</label>
        <input type="text" name="adresse" id="adresse" value="{{ $impot->adresse }}">
        <label for="emplacement">Emplacement :</label>
        <input type="text" name="emplacement" id="emplacement" value="{{ $impot->emplacement }}">
        <label for="hp">HP :</label>
        <input type="number" name="hp" id="hp" value="{{ $impot->hp }}">
        <label for="ht">HT :</label>
        <input type="number" name="ht" id="ht" value="{{ $impot->ht }}">
        <label for="aup">AUP :</label>
        <input type="number" name="aup" id="aup" value="{{ $impot->aup }}">
        <label for="aut">AUT :</label>
        <input type="number" name="aut" id="aut" value="{{ $impot->aut }}">
        <label for="v_v">Valeur vénale :</label>
        <input type="number" name="valeur_venale" id="v_v" value="{{ $impot->valeur_venale }}">
        <label for="rom">ROM :</label>
        <input type="number" name="rom" id="rom" value="{{ $impot->rom }}">
        <button type="submit">Mettre à jour</button>
    </form>
@endsection
