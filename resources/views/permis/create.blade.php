@extends('layouts.app')

@section('content')
    <h2>Créer un nouveau permis</h2>
    <form action="{{ route('permis.store') }}" method="POST">
        @csrf
        <label for="numero" class="form-label">Numero :</label>
        <input type="number" class="form-control" name="numero" id="numero">
        <label for="genre" class="form-label">Type :</label>
        <select name="genre" id="genre" class="form-control">
            <option value="femme">Femme</option>
            <option value="homme">Homme</option>
        </select>
        <label for="nom" class="form-label">Nom :</label>
        <input type="text" name="nom" id="nom" class="form-control">
        <label for="prenom" class="form-label">Prénom :</label>
        <input type="text" name="prenom" id="prenom" class="form-control">
        <label for="naiss" class="form-label">Date de naissance :</label>
        <input type="date" name="naissance" id="naiss" class="form-control">
        <label for="lieu" class="form-label">Lieu de naissance :</label>
        <input type="text" name="lieu" id="lieu" class="form-control">
        <label for="adresse" class="form-label">Adresse :</label>
        <input type="text" name="adresse" id="adresse" class="form-control">
        <label for="phone" class="form-label">Téléphone :</label>
        <input type="text" name="phone" id="phone" class="form-control">
        <label for="category" class="form-label">Catégorie de permis :</label>
        <select name="category" id="category">
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D1">D1</option>
            <option value="D2">D2</option>
            <option value="E">E</option>
        </select>
        <label for="formation" class="form-label">Formation effectuer :</label>
        <input type="text" name="formation" id="formation" class="form-control">
        <label for="obt" class="form-label">Date d'obtention :</label>
        <input type="date" name="date_obtention" id="obt" class="form-control">
        <label for="obtlieu" class="form-label">Lieu d'obtention :</label>
        <input type="text" name="lieu_obtention" id="obtlieu" class="form-control">
        <label for="expir" class="form-label">Date d'expiration :</label>
        <input type="date" name="date_expiration" id="expir" class="form-control">
        <button type="submit">Enregistrer</button>
    </form>
@endsection
