@extends('layouts.app')

@section('content')
    <h2>Modifier le permis</h2>
    <form action="{{ route('permis.update', $permi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label class="form-label" for="numero">Numero :</label>
        <input type="number" class="form-control" name="numero" id="numero" value="{{ $permi->numero }}">
        <label class="form-label" for="genre">genre :</label>
        <input type="select" class="form-control" name="genre" id="genre" value="{{ $permi->genre }}">
        <label class="form-label" for="nom">Nom :</label>
        <input type="text" class="form-control" name="nom" id="nom" value="{{ $permi->nom }}">
        <label class="form-label" for="prenom">Prenom :</label>
        <input type="text" class="form-control" name="prenom" id="prenom" value="{{ $permi->prenom }}">
        <label class="form-label" for="naiss">Date de naissance :</label>
        <input type="date" class="form-control" name="naissance" id="naiss" value="{{ $permi->naissance }}">
        <label class="form-label" for="lieu">Lieu de naissance :</label>
        <input type="text" class="form-control" name="lieu" id="lieu" value="{{ $permi->lieu }}">
        <label class="form-label" for="adresse">Adresse :</label>
        <input type="text" class="form-control" name="adresse" id="adresse" value="{{ $permi->adresse }}">
        <label class="form-label" for="phone">Téléphone :</label>
        <input type="text" class="form-control" name="phone" id="phone" value="{{ $permi->phone }}">
        <label class="form-label" for="category">Categorie de permis :</label>
        <input type="select" class="form-control" name="category" id="category" value="{{ $permi->category }}">
        <label class="form-label" for="formation">Formation :</label>
        <input type="text" class="form-control" name="formation" id="formation" value="{{ $permi->formation }}">
        <label class="form-label" for="obt">Date d'obtention :</label>
        <input type="date" class="form-control" name="date_obtention" id="obt" value="{{ $permi->date_obtention }}">
        <label class="form-label" for="obtlieu">Lieu d'obtention :</label>
        <input type="text" class="form-control" name="lieu_obtention" id="obtlieu" value="{{ $permi->lieu_obtention }}">
        <label class="form-label" for="expir">Date d'expiration :</label>
        <input type="date" class="form-control" name="date_expiration" id="expir" value="{{ $permi->date_expiration }}">
        <button type="submit">Mettre à jour</button>
    </form>
@endsection
