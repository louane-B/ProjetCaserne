@extends('layout')

@section('content')

<div class="container">

    <h2 class="mb-4">Intervention #{{ $intervention->id }}</h2>

    <div class="card p-4">

        <p><strong>Date & Time:</strong> {{ $intervention->DateTempsDebut }}</p>
        <p><strong>Address:</strong> {{ $intervention->Adresse }}</p>
        <p><strong>Summary</strong> {{ $intervention->Resume }}</p>
        <p><strong>Type</strong> {{ $intervention->type->description }}</p>
        <p><strong>Fire Station</strong> {{ $intervention->caserne->name }}</p>

    </div>

    <a href="{{ url()->previous() }}" class="btn btn-secondary mt-3">Back</a>

</div>
@endsection