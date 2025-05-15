@extends('layout')

@section('content')
    <h2>Détails du patient</h2>

    <ul class="list-group">
        <li class="list-group-item"><strong>Nom :</strong> {{ $patient->nom }}</li>
        <li class="list-group-item"><strong>Email :</strong> {{ $patient->email }}</li>
        <li class="list-group-item"><strong>Téléphone :</strong> {{ $patient->telephone }}</li>
    </ul>

    <a href="{{ route('patients.index') }}" class="btn btn-secondary mt-3">Retour</a>
@endsection
