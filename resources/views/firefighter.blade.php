@extends('layout')

@section('content')

{{-- Main title of the page --}}
<h1 class="mb-4">List of Type Interventions</h1>
</br>

</br>
<table class="table table-bordered table-striped">
    {{-- Table header --}}
    <thead class="table-dark">
        <tr>
            <th>badge number</th>
            <th>Lastname</th>
            <th>Firstname</th>
            <th>Rank</th>
            <th>Fire house</th>
        </tr>
    </thead>

    {{-- Table body with dynamic data --}}
    <tbody>
        @foreach ($firefighters as $fire)
            <tr>
                <td>{{ $fire->matricule }}</td>
                <td>{{ $fire->nom }}</td>
                <td>{{ $fire->prenom }}</td>
                <td>{!! $fire->grade->symbol !!} {{ $fire->grade->description ?? 'no rank' }}</td>
                <td>{{ $fire->station->name ?? 'No fire stations' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
