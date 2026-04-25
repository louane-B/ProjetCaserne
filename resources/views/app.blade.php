@extends('layout')

@section('content')

<h1 class="mb-4">Liste des casernes de pompier</h1>

<table class="table table-bordered table-striped">
    <thread class="table-dark">
        <tr>
            <th>Name</th>
            <th>Adress</th>
            <th>City</th>
            <th>Phone</th>
            <th>State</th>
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

@endsection
