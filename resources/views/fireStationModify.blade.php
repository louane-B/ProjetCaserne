@extends('layout')

@section('content')

<h1 class="text-center mb-4">Modifier la caserne</h1>
</br>
<form action="{{ route('fireStations.update', $station->id) }}" method="POST" class="border p-4 bg-light rounded">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control" value="{{ $station->name }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Adress</label>
        <input type="text" name="adress" class="form-control" value="{{ $station->adress }}" require>
    </div>

    <div class="mb-3">
        <label class="form-label">City</label>
        <input type="text" name="city" class="form-control" value="{{ $station->city }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Phone</label>
        <input type="text" name="phone" class="form-control" value="{{ $station->phone }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">State</label>
        <select name="state_id" class="form-select" required>
            @foreach($states as $state)
                <option value="{{ $state->id }}"
                    @if($station->state_id == $state->id) selected @endif>
                    {{ $state->description }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary w-100">Modifier la caserne</button>

    <a href="/FireStations" class="btn btn-secondary w-100 mt-2">Retour</a>
</form>

@endsection