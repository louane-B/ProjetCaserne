@extends('layout')

@section('content')


<h1 class="mb-4">Liste des casernes de pompier</h1>
</br>
<table class="table table-bordered table-striped">
    <thread class="table-dark">
        <tr>
            <th>Name</th>
            <th>Adress</th>
            <th>City</th>
            <th>Phone</th>
            <th>State</th>
            <th style="width: 200px;">Actions</th>
        </tr>
    </thread>

    <tbody>
        @foreach($fireStations as $station)
            <tr>
                <td>{{ $station->name }}</td>
                <td>{{ $station->adress }}</td>
                <td>{{ $station->city }}</td>
                <td>{{ $station->phone }}</td>
                <td>{{ $station->state->description }}</td>

            </tr>
        @endforeach
    </tbody>
</table>
</br>
<hr class="my-4">

<h2 class="mb-4 text-center">Ajouter une nouvelle caserne</h2>

<form action="{{ route('firestations.add') }}" method="POST" class="border p-4 rounded bg-light">
    @csrf

    <div class="mb-3">
        <label class="form-label">Nom de la caserne</label>
        <input type="text" name="name" class="form-control" require>
    </div>

    <div class="mb-3">
        <label class="form-label">Adresse</label>
        <input type="text" name="adress" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Ville</label>
        <input type="text" name="city" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Téléphone</label>
        <input type="text" name="phone" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">état</label>
        <select name="state_id" class="form-select" required>
            @foreach(\App\Models\State::all() as $state)
                <option value="{{ $state->id }}">{{ $state->description }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary w-100">Ajouter la caserne</button>
</form>

@endsection

