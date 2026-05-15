@extends('layout')

@section('content')

{{-- Main title of the page --}}
<h2 class="mb-4">list of Vehicle</h2>
</br>
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
        </tr>
        @endforeach
    </tbody>
</table>

@endsection