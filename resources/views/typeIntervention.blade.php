@extends('layout')

@section('content')

{{-- Main title of the page --}}
<h1 class="mb-4">List of Type Interventions</h1>
</br>
<table class="table table-bordered table-striped">
    {{-- Table header --}}
    <thead class="table-dark">
        <tr>
            <th>Intervention Number</th>
            <th>Description</th>
        </tr>
    </thread>

    {{-- Table body with dynamic data --}}
    <tbody>
        @foreach($typeInterventions as $intervention)
            <tr>
                {{-- Type Intervention number --}}
                <td>{{ $intervention->NoIntervention }}</td>
                {{-- Type Intervention description --}}
                <td>{{ $intervention->description }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection