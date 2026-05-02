@extends('layout')

@section('content')

<div class="container">

{{-- Main title of the page --}}
<h2 class="mb-4">Interventions for Station {{ $caserne->name }}</h2>
</br>
</br>

{{-- Table displaying all  Intervention --}}
<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Date & Heure</th>
            <th>Type</th>
            <th style="width: 200px;">Actions</th>
        </tr>

    </thread>

    <tbody>
        @foreach($caserne->interventions as $inter)
        <tr>
            <td>{{ $inter->id }}</td>
            <td>{{ $inter->DateTempsDebut }}</td>
            <td>{{ $inter->type->description }}</td>
            <td>
                <a href="{{ route('Intervention.show', $inter->id) }}" class="btn btn-primary btn-sm">
                    View
                </a>
        </tr>
        @endforeach
    </tbody>
</table>

</div>
@endsection