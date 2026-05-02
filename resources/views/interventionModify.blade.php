@extends('layout')

@section('content')
<div class="container">

    {{-- Page title --}}
    <h1 class="text-center mb-4">Edit Intervention</h1>
    </br>
    </br>
    <form action="{{ route('intervention.update', intervention->id) }}" method="POST">
        @csrf
        @method('PUT')  {{-- Laravel method override for PUT requests --}}

        <div class="mb-3">
            <label class="form-label">Date & Time</label>
            <input type="datetime-local" name="DateTempsDebut" class="form-control" value="{{ $intervention->DateTempsDebut }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Address</label>
            <input type="text" name="Adresse" class="form-control" value="{{ $intervention->Adresse }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Summary</label>
            <textarea name="Resume" class="form-control" rows="4">{{ $intervention->Resume }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Type of Intervention</label>
            <select name="IdTypeIntervention" class="form-select">
                @foreach($types as $type)
                    <option value="{{ $type->id }}"
                        @if($type->id == $intervention->IdTypeIntervention) selected @endif>
                        {{ $type->description }}
                    </option>
                @endforeach
            </selected>
        </div>

        <button class="btn btn-primary">Save changes</button>
        <a href="{{ route('intervention.show', $intervention->id) }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
