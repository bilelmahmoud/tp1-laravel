@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2 class="mt-5">Documents</h2>
            <a href="{{ route('document.create') }}" class="btn btn-primary btn-sm mb-3">@lang('Ajouter un document')</a>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Partagé par</th>
                            <th>Date du partage</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($documents as $document)
                        <tr>
                            <td>{{ $document->document_nom_fr }}</td>
                            <td>{{ $document->etudiant->nom }}</td>
                            <td>{{ $document->created_at->format('Y-m-d') }}</td>
                            <td>
                                <a href="{{ asset('storage/' . $document->document_path) }}" class="btn btn-primary" download>
                                    <i class="bi bi-download"></i> Télécharger
                                </a>
                                @if(Auth::check() && Auth::user()->id == $document->etudiant->user_id)
                                   
                                   
                                    <form action="{{ route('document.destroy', $document->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                           Supprimer
                                        </button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4">Aucun document disponible.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
