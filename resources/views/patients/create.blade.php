
@extends('layout')

@section('content')
<div class="container mt-4">
    <h2>Ajouter un patient</h2>

    <form action="{{ route('patients.store') }}" method="POST">
        @csrf
        <!-- Champ nom -->
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom') }}">
            @error('nom')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Champ email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Champ téléphone -->
        <div class="mb-3">
            <label for="telephone" class="form-label">Téléphone</label>
            <input type="text" name="telephone" class="form-control @error('telephone') is-invalid @enderror" value="{{ old('telephone') }}">
            @error('telephone')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Bouton de soumission -->
        <button type="submit" class="btn btn-primary">Ajouter</button>
        <a href="{{ route('patients.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
