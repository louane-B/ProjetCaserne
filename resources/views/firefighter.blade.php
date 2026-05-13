@extends('layout')

@section('content')

{{-- Main title of the page --}}
<h1 class="mb-4">List of Type Interventions</h1>
</br>

{{-- Success message displayed after an action (add, update, delete, clear) --}}
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

{{-- Button to clear (delete all) firefighter --}}
<form action="{{ route('firefighter.clear') }}"
        method="POST"
        onsubmit="return confirm('Do you really want to delete ALL firefighter ?');"
        class="mb-3">
    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger">
        Clear all Firefighter 
    </button>
</form>

</br>
<table class="table table-bordered table-striped">
    {{-- Table header --}}
    <thead class="table-dark">
        <tr>
            <th>badge number</th>
            <th>Lastname</th>
            <th>Firstname</th>
            <th>Rank</th>
            <th>Fire house</th>
            <th style="width: 200px;">Actions</th>
        </tr>
    </thead>

    {{-- Table body with dynamic data --}}
    <tbody>
        @foreach ($firefighters as $fire)
            <tr>
                <td>{{ $fire->matricule }}</td>
                <td>{{ $fire->nom }}</td>
                <td>{{ $fire->prenom }}</td>
                <td>{!! $fire->grade->symbol !!} {{ $fire->grade->description ?? 'no rank' }}</td>
                <td>{{ $fire->station->name ?? 'No fire stations' }}</td>
                <td>
                    {{-- Edit button --}}
                    <a href="{{ route('firefighter.edit', $fire->id) }}" class="btn btn-warning btn_sm">
                        Modifier
                    </a>

                    {{-- Delete button --}} 
                    <form action="{{ route('firefighter.delete', $fire->id) }}"
                        method="POST"
                        style="display:inline-block;"
                        onsubmit="return confirm('Do you really want to delete this firefighter?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

</br>
<hr class="my-4">

{{-- Section title for adding a new firefighter --}}
<h2 class="mb-4 text-center">Add a New Firefighter</h2>

{{-- Form to add a new fire station --}}
<form action="{{ route('firefighter.add') }}" method="POST" class="border p-4 rounded bg-light">
    @csrf

    {{-- badge number --}}
    <div class="mb-3">
        <label class="form-label">badge number</label>
        <input type="text" name="matricule" class="form-control" required>
    </div>

    {{-- Lastname --}}
    <div class="mb-3">
        <label class="form-label">Lastname</label>
        <input type="text" name="nom" class="form-control" required>
    </div>

    {{-- Firstname --}}
    <div class="mb-3">
        <label class="form-label">Firstname</label>
        <input type="text" name="prenom" class="form-control" required>
    </div>

    {{-- rank --}}
    <div class="mb-3">
        <label class="form-label">Rank</label>
        <select name="grade_id" class="form-select" required>
            @foreach(\App\Models\Grade::all() as $grade)
                <option value="{{ $grade->id }}">{!! $grade->symbol !!}{{ $grade->description }}</option>
            @endforeach
        </select>
    </div>

    {{-- Fire house --}}
    <div class="mb-3">
        <label class="form-label">Fire house</label>
        <select name="fire_station_id" class="form-select" required>
            @foreach(\App\Models\FireStation::all() as $station)
                <option value="{{ $station->id }}">{{ $station->name }}</option>
            @endforeach
        </select>
    </div>

    {{-- Submit button --}}
    <button type="submit" class="btn btn-primary w-100">Add Firefighter</button>
</form>

@endsection
