@extends('layout')

@section('content')
    <h1>Liste des Patients</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('patients.create') }}" class="btn btn-primary mb-3">Ajouter Patient</a>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Actions</th>
        </tr>
        @foreach ($patients as $patient)
            <tr>
                <td>{{ $patient->id }}</td>
                <td>{{ $patient->nom }}</td>
                <td>{{ $patient->email }}</td>
                <td>{{ $patient->telephone }}</td>
                <td>
                    <a href="{{ route('patients.show', $patient) }}" class="btn btn-info btn-sm">Voir</a>
                    <a href="{{ route('patients.edit', $patient) }}" class="btn btn-warning btn-sm">Modifier</a>
                    <form action="{{ route('patients.destroy', $patient) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Est-vous sur de supprimer ??')">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
