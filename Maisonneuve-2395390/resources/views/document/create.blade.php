@extends('layouts.app')

@section('title', 'Partager un document')

@section('content')
    <div class="container">
        <h1>Partager un document</h1>

        <form action="{{ route('document.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="document_nom_fr" class="form-label">Titre du document (français) obligatoire</label>
                <input type="text" class="form-control" id="document_nom_fr" name="document_nom_fr" >
            </div>

            <div class="mb-3">
                <label for="document_nom_en" class="form-label">Titre du document (anglais)</label>
                <input type="text" class="form-control" id="document_nom_en" name="document_nom_en" >
            </div>

            <div class="mb-3">
                <label for="document_path" class="form-label">Fichier</label>
                <input type="file" class="form-control" id="document_path" name="document_path" accept=".pdf,.zip,.doc,.docx" >
            </div>

            <button type="submit" class="btn btn-primary">Partager</button>
        </form>
    </div>
@endsection
