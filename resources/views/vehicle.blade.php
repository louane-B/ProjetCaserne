@extends('layout')

@section('content')

{{-- Main title of the page --}}
<h2 class="mb-4">list of Vehicle</h2>
</br>
{{-- Success message displayed after an action (add, update, delete, clear) --}}
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

{{-- Button to clear (delete all) type Vehicle --}}
<form action="{{ route('Vehicle.clear') }}"
        method="POST"
        onsubmit="return confirm('Do you really want to delete ALL Vehicle ?');"
        class="mb-3">
        @csrf
        @method('DELETE')

    <button type="submit" class="btn btn-danger">
        Clear List
    </button>
</form>

</br>

{{-- Table displaying all  vehicle --}}
<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>N° d'identification</th>
            <th>Immatriculation</th>
            <th>Annee de Mise EnService</th>
            <th>Marque</th>
            <th>Modele</th>
            <th>type de vehicle</th>
            <th>fire station</th>
            <th style="width: 200px;">Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($Vehicles as $vehicle)
        <tr>
            <td>{{ $vehicle->NoIdentification }}</td>
            <td>{{ $vehicle->Immatriculation }}</td>
            <td>{{ $vehicle->AnneeMiseEnService }}</td>
            <td>{{ $vehicle->Marque }}</td>
            <td>{{ $vehicle->Modele }}</td>
            <td>{{ $vehicle->type->code }}</td>
            <td>{{ $vehicle->caserne->name }}</td>
            <td>
                    {{-- Edit button --}}
                    <a href="{{ route('Vehicle.edit', $vehicle->id) }}" class="btn btn-warning btn_sm">
                        Modifier
                    </a>

                    {{-- Delete button --}} 
                    <form action="{{ route('Vehicle.delete', $vehicle->id) }}"
                        method="POST"
                        style="display:inline-block;"
                        onsubmit="return confirm('Do you really want to delete this vehicle?');">
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

{{-- Section title for adding a new  Vehicle --}}
<h2 class="mb-4 text-center">Add a New  Vehicle</h2>

<form action="{{ route('Vehicle.add') }}" method="POST" class="border p-4 rounded bg-light">
        @csrf

        <div class="mb-3">
            <label class="form-label">Numéro d'identification</label>
            <input type="text" name="NoIdentification" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Immatriculation</label>
            <input type="text" name="Immatriculation" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Année de mise en service</label>
            <input type="number" name="AnneeMiseEnService" class="form-control" min="1950" max="{{ date('Y') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Marque</label>
            <input type="text" name="Marque" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Modèle</label>
            <input type="text" name="Modele" class="form-control" required>
        </div>
        

        <div class="mb-3">
            <label class="form-label">Type de véhicule</label>
            <select name="type_vehicle_id" class="form-select" required>
                <option value="">-- Sélectionner --</option>
                @foreach(\App\Models\typeVehicle::all() as $type)
                    <option value="{{ $type->id }}">{{ $type->code }} - {{ $type->description }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Caserne</label>
            <select name="fire_station_id" class="form-select" required>
                <option value="">-- Sélectionner --</option>
                @foreach(\App\Models\FireStation::all() as $caserne)
                    <option value="{{ $caserne->id }}">{{ $caserne->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Add New typeVehicle</button>

    </form>

@endsection