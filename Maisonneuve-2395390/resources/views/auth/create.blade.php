@extends('layouts.app')
@section('title', 'Add Task')
@section('content')
    <div class="container mt-5">
        <h1 class="my-5 text-center">Ajouter un Étudiant</h1>
        <form action="{{ route('etudiant.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom') }}" >
                @if ($errors->has('nom'))
        <div class="text-danger mt-2">
            {{$errors->first('nom')}}
        </div>
        @endif
            </div>
            <div class="mb-3">
                <label for="adresse" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="adresse" name="adresse" value="{{ old('adresse') }}"  >
                @if ($errors->has('adresse'))
                    <div class="text-danger mt-2">
                        {{$errors->first('adresse')}}
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="téléphone" class="form-label">Téléphone</label>
                <input type="text" class="form-control" id="téléphone" name="téléphone" value="{{ old('téléphone')}}" >
                @if ($errors->has('téléphone'))
                    <div class="text-danger mt-2">
                        {{$errors->first('téléphone')}}
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"  >
                @if ($errors->has('email'))
                    <div class="text-danger mt-2">
                        {{$errors->first('email')}}
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="date_de_naissance" class="form-label">Date de Naissance</label>
                <input type="date" class="form-control" id="date_de_naissance" name="date_de_naissance" value="{{ old('date_de_naissance') }}" >
                @if ($errors->has('date_de_naissance'))
                    <div class="text-danger mt-2">
                        {{$errors->first('date_de_naissance')}}
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="ville_id" class="form-label">Ville</label>
                <select class="form-select" id="ville_id" name="ville_id" >
                    @foreach ($villes as $ville)
                        <option value="{{ $ville->id }}">{{ $ville->name}}  </option>
                    @endforeach
                </select>
                @if ($errors->has('$ville->name'))
                    <div class="text-danger mt-2">
                        {{$errors->first('$ville->name')}}
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password">
                @if ($errors->has('password'))
                    <div class="text-danger mt-2">
                        {{$errors->first('password')}}
                    </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Ajouter Étudiant</button>
        </form>
    </div>
@endsection