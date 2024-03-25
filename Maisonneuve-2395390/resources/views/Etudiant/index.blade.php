@extends('layouts.app')
@section('title', 'Add Task')
@section('content')
        <!-- Page content-->
      
    <div class="container mt-5">
    <h1 class="my-5 text-center" style="#2E294E">@lang("lang.text_title")</h1>
        <div class="row">
            @forelse($etudiants as $etudiant)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-primary">{{ $etudiant->nom }}</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong class="custom-text-black">Téléphone: </strong>{{ $etudiant->téléphone }}</li>
                            <li class="list-group-item"><strong class="custom-text-black">Email: </strong>{{ $etudiant->email }}</li>
                            <li class="list-group-item"><strong class="custom-text-black">Date de Naissance: </strong>{{ $etudiant->date_de_naissance }}</li>
                            <li class="list-group-item"><strong class="custom-text-black">Adresse: </strong>{{ $etudiant->adresse }}</li>
                            <li class="list-group-item"><strong class="custom-text-black">Ville ID: </strong>{{ $etudiant->ville->name}}</li>
                        </ul>
                        </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                    <a href="{{ route('etudiant.show', $etudiant->id) }}" class="btn btn-sm btn-outline-primary">@lang("lang.text_view_etudiant")</a>
                
                    
                    </div>
                </div>
            </div>
        </div>
            @empty
            <div class="col-12">
                <div class="alert alert-danger">Il n'y a aucun étudiant à afficher!</div>
            </div>
            @endforelse
        </div>
    </div>





      

@endsection