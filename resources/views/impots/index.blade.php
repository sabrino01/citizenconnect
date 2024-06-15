@extends('layouts.app')

@section('content')
    <h2>Liste des Impôts</h2>
    <hr>
    <a href="{{ route('impots.create') }}" class="btn btn-primary" style="float: right;">Créer un nouvel impôt</a>
    
    @if ($message = Session::get('success'))
        <p>{{ $message }}</p>
    @endif
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>
            <th>Code</th>
            <th>Nom et prénom</th>
            <th>Adresse</th>
            <th>Emplacement</th>
            <th>HP</th>
            <th>HT</th>
            <th>AUP</th>
            <th>Valeur Vénale</th>
            <th>ROM</th>
            <th>Actions</th>
        </tr>
        @foreach ($impots as $impot)
        <tr>
            <td>{{ $impot->code }}</td>
            <td>{{ $impot->nom_complet }}</td>
            <td>{{ $impot->adresse }}</td>
            <td>{{ $impot->emplacement }}</td>
            <td>{{ $impot->hp }}</td>
            <td>{{ $impot->ht }}</td>
            <td>{{ $impot->aup }}</td>
            <td>{{ $impot->aut }}</td>
            <td>{{ $impot->valeur_venale }}</td>
            <td>{{ $impot->rom }}</td>
            <td>
                <a href="{{ route('impots.show', $impot->id) }}">Voir</a>
                <a href="{{ route('impots.edit', $impot->id) }}">Modifier</a>
                <form action="{{ route('impots.destroy', $impot->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
