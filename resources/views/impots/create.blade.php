@extends('layouts.app')

@section('content')
    <h2>Créer un nouvel impôt</h2>
    <form action="{{ route('impots.store') }}" method="POST">
        @csrf
        <label for="code">Code :</label>
        <input type="number" name="code" id="code">
        <label for="nom">Nom et Prénom :</label>
        <input type="text" name="nom_complet" id="nom">
        <label for="adresse">Adresse :</label>
        <input type="text" name="adresse" id="adresse">
        <label for="emplacement">Emplacement :</label>
        <input type="text" name="emplacement" id="emplacement">
        <label for="hp">HP :</label>
        <input type="number" name="hp" id="hp">
        <label for="ht">HT :</label>
        <input type="number" name="ht" id="ht">
        <label for="aup">AUP :</label>
        <input type="number" name="aup" id="aup">
        <label for="aut">AUT :</label>
        <input type="number" name="aut" id="aut">
        <label for="v_v">Valeur vénale :</label>
        <input type="number" name="valeur_venale" id="v_v">
        <label for="rom">ROM :</label>
        <input type="number" name="rom" id="rom">
        <button type="submit">Enregistrer</button>
    </form>
@endsection
