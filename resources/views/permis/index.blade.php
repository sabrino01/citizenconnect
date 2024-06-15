@extends('layouts.app')

@section('content')
    <h2>Liste des Permis</h2>
    <hr>
    <a href="{{ route('permis.create') }}" class="btn btn-primary float-left">Créer un nouveau permis</a>
    @if ($message = Session::get('success'))
        <p>{{ $message }}</p>
    @endif
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>
            <th>Numero</th>
            <th>Genre</th>
            <th>Nom</th> 
            <th>Prénom</th>
            <th>Date de naissance</th>
            <th>Lieu de naissance</th>
            <th>Adresse</th>
            <th>Téléphone</th>
            <th>Catégorie du permis</th>
            <th>Formation Effectué</th>
            <th>Date d'obtention</th>
            <th>Lieu d'obtention</th>
            <th>Date d'expiration</th>
            <th>Actions</th>
        </tr>
        @foreach ($permis as $permi)
        <tr>
            <td>{{ $permi->numero }}</td>
            <td>{{ $permi->genre }}</td>
            <td>{{ $permi->nom }}</td>
            <td>{{ $permi->prenom }}</td>
            <td>{{ $permi->naissance }}</td>
            <td>{{ $permi->lieu }}</td>
            <td>{{ $permi->adresse }}</td>
            <td>{{ $permi->phone }}</td>
            <td>{{ $permi->category }}</td>
            <td>{{ $permi->formation }}</td>
            <td>{{ $permi->date_obtention }}</td>
            <td>{{ $permi->lieu_obtention }}</td>
            <td>{{ $permi->date_expiration }}</td>
            <td>
                <a href="{{ route('permis.show', $permi->id) }}">Voir</a>
                <a href="{{ route('permis.edit', $permi->id) }}">Modifier</a>
                <form action="{{ route('permis.destroy', $permi->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
