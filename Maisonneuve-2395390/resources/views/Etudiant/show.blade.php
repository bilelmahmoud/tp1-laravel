@extends('layouts.app')
@section('title', 'student List')
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
                    <a href="{{ route('etudiant.edit', $etudiant->id) }}" class="btn btn-sm btn-outline-success ">Edit</a>
                    <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                        Delete
                    </button>
                    </div>
                </div>
            </div>
        </div>

        
    <!-- {{-- Bootstrap Modal --}} -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5 text-danger" id="DeleteModalLabel">DELETE</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Are you sure to delete this student?
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <form method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
        </form>
        </div>
    </div>
    </div>
</div>
        @endsection