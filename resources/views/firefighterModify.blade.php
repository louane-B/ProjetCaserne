@extends('layout')

@section('content')

{{-- Page title --}}
<h1 class="text-center mb-4">Edit Firefighter</h1>
</br>

{{-- Form to update an existing firefighter --}}
<form action="{{ route('firefighter.update',$fire->id) }}" method="POST" class="border p-4 bg-light rounded">
    @csrf
    @method('PUT') {{-- Laravel method override for PUT requests --}}

    {{-- Firefighter badge number --}}
    <div class="mb-3">
        <label class="form-label">badge number</label>
        <input type="text" name="matricule" class="form-control" value="{{ $fire->matricule }}" required>
    </div>

    {{-- Firefighter lastname --}}
    <div class="mb-3">
        <label class="form-label">Lastname</label>
        <input type="text" name="nom" class="form-control" value="{{ $fire->nom }}" required>
    </div>

    {{-- Firefighter firstname --}}
    <div class="mb-3">
        <label class="form-label">Firstname</label>
        <input type="text" name="prenom" class="form-control" value="{{ $fire->prenom }}" required>
    </div>

    {{-- Firefighter rank (dropdown list)--}}
    <div class="mb-3">
        <label class="form-label">Rank</label>
        <select name="grade_id" class="form-select" required>
            @foreach($grade as $g)
                <option value="{{ $g->id }}"
                    @if($fire->grade_id == $g->id) selected @endif>
                    {!! $g->symbol !!}{{ $g->description }}
                </option>
            @endforeach
        </select>
    </div>

    {{-- Firefighter fireStation (dropdown list) --}}
    <div class="mb-3">
        <label class="form-label">Fire house</label>
        <select name="fire_station_id" class="form-select" required>
            @foreach($station as $s)
                <option value="{{ $s->id }}"
                    @if($fire->fire_station_id == $s->id) selected @endif>
                    {{ $s->name }}
                </option>
            @endforeach
        </select>
    </div>

    {{-- Submit button --}}
    <button type="submit" class="btn btn-primary w-100">Update Firefighter</button>

    {{-- Back button --}}
    <a href="/firefighters" class="btn btn-secondary w-100 mt-2">Back</a>
</form>

@endsection