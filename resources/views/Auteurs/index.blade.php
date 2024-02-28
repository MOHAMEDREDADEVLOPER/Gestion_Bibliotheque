@extends('layouts.layout')

@section('style') 
    <style>
        .t{
            background-color: #625644b3;
            margin-left: 50px;
        }
    </style>
@endsection

@section('content')
    
<div class="container mt-5">
    <table class="table table-striped  t">
        <thead class="thead">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Livres</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($auteurs as $auteur)
                <tr>
                    <td>{{ $auteur->id }}</td>
                    <td>{{ $auteur->nom }}</td>
                    <td>{{ $auteur->prenom }}</td>
                    <td>
                        <select class="form-control" id="livre_id" name="livre_id" required>
                            <option value="">Sélectionner un livre</option>
                            @foreach($livres as $livre)
                                <option value="{{ $livre->id }}">{{ $livre->titre }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
@endsection