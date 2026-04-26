@extends('layout')

@section('content')


{{-- Main page title --}}
<h1 class="mb-4 text-center">Welcome to the Home Page</h1>
</br>
</br>
</br>
{{-- Section title for the Fire Stations list --}}
<h2 class="mb-4">List of Fire Stations</h2>

{{-- Table displaying all fire stations --}}
<table class="table table-bordered table-striped">
    {{-- Table header --}}
    <thead class="table-dark">
        <tr>
            <th>Name</th>
            <th>Adress</th>
            <th>City</th>
            <th>Phone</th>
            <th>State</th>
        </tr>
    </thead>

    {{-- Table body with dynamic data --}}
    <tbody>
        @foreach($fireStations as $station)
            <tr>
                {{-- Fire station name --}}
                <td>{{ $station->name }}</td>
                {{-- Fire station address --}}
                <td>{{ $station->adress }}</td>
                {{-- Fire station city --}}
                <td>{{ $station->city }}</td>
                {{-- Fire station phone number --}}
                <td>{{ $station->phone }}</td>
                {{-- Fire station state (relationship) --}}
                <td>{{ $station->state->description }}</td>

            </tr>
        @endforeach
    </tbody>
</table>

@endsection
