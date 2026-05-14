@extends('layout')

@section('content')

{{-- Main title of the page --}}
<h2 class="mb-4">list of typeVehicle</h2>
</br>

</br>

{{-- Table displaying all  grade --}}
<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>Code</th>
            <th>Description</th>
        </tr>

    </thread>

    <tbody>
        @foreach($vehicles as $vehicle)
        <tr>
            <td>{{ $vehicle->code }}</td>
            <td>{{ $vehicle->description }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection