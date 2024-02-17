@extends('layouts.app')
@section('title', 'Task List')
@section('content')


<div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-primary">{{ $etudiant->nom }}</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong class="custom-text-black">Téléphone: </strong>{{ $etudiant->téléphone }}</li>
                            <li class="list-group-item"><strong class="custom-text-black">Email: </strong>{{ $etudiant->email }}</li>
                            <li class="list-group-item"><strong class="custom-text-black">Date de Naissance: </strong>{{ $etudiant->date_de_naissance }}</li>
                            <li class="list-group-item"><strong class="custom-text-black">Adresse: </strong>{{ $etudiant->adresse }}</li>
                            <li class="list-group-item"><strong class="custom-text-black">Ville ID: </strong>{{ $etudiant->ville_id }}</li>
                        </ul>
                        </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                    <a href="{{ route('etudiant.show', $etudiant->id) }}" class="btn btn-sm btn-outline-primary">View</a>
                    </div>
                </div>
            </div>
        </div>
        @endsection