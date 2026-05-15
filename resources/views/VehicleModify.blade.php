@extends('layout')

@section('content')

{{-- Page title --}}
<h1 class="text-center mb-4">Edit Vehicle</h1>
<br>

{{-- Form to update an existing vehicle --}}
<form action="{{ route('Vehicle.update', $vehicle->id) }}" method="POST" class="border p-4 bg-light rounded">
    @csrf
    @method('PUT') {{-- Laravel method override for PUT requests --}}

    {{-- NoIdentification --}}
    <div class="mb-3">
        <label class="form-label">Identification Number</label>
        <input type="text" name="NoIdentification" class="form-control" 
               value="{{ $vehicle->NoIdentification }}" required>
    </div>

    {{-- Immatriculation --}}
    <div class="mb-3">
        <label class="form-label">License Plate</label>
        <input type="text" name="Immatriculation" class="form-control" 
               value="{{ $vehicle->Immatriculation }}" required>
    </div>

    {{-- Year --}}
    <div class="mb-3">
        <label class="form-label">Year of Service</label>
        <input type="number" name="AnneeMiseEnService" class="form-control" 
               min="1950" max="{{ date('Y') }}"
               value="{{ $vehicle->AnneeMiseEnService }}" required>
    </div>

    {{-- Brand --}}
    <div class="mb-3">
        <label class="form-label">Brand</label>
        <input type="text" name="Marque" class="form-control" 
               value="{{ $vehicle->Marque }}" required>
    </div>

    {{-- Model --}}
    <div class="mb-3">
        <label class="form-label">Model</label>
        <input type="text" name="Modele" class="form-control" 
               value="{{ $vehicle->Modele }}" required>
    </div>

    {{-- Type of vehicle --}}
    <div class="mb-3">
        <label class="form-label">Vehicle Type</label>
        <select name="type_vehicle_id" class="form-select" required>
            @foreach($types as $type)
                <option value="{{ $type->id }}"
                    @if($vehicle->type_vehicle_id == $type->id) selected @endif>
                    {{ $type->code }} - {{ $type->description }}
                </option>
            @endforeach
        </select>
    </div>

    {{-- Fire station --}}
    <div class="mb-3">
        <label class="form-label">Fire Station</label>
        <select name="fire_station_id" class="form-select" required>
            @foreach($casernes as $caserne)
                <option value="{{ $caserne->id }}"
                    @if($vehicle->fire_station_id == $caserne->id) selected @endif>
                    {{ $caserne->name }}
                </option>
            @endforeach
        </select>
    </div>

    {{-- Submit button --}}
    <button type="submit" class="btn btn-primary w-100">Update Vehicle</button>

    {{-- Back button --}}
    <a href="/vehicles" class="btn btn-secondary w-100 mt-2">Back</a>
</form>

@endsection
