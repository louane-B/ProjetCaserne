@extends('layout')

@section('content')

    {{-- Page title --}}
    <h1 class="text-center mb-4">Edit Intervention</h1>
    </br>
    </br>
    {{-- Form to update an existing intervention --}}
    <form action="{{ route('Intervention.update', $intervention->id) }}" method="POST" class="border p-4 bg-light rounded">
        @csrf
        @method('PUT')  {{-- Laravel method override for PUT requests --}}

        <div class="mb-3">
            <label class="form-label">Date & Time</label>
            <input type="datetime-local" name="DateTempsDebut" class="form-control" value="{{ $intervention->DateTempsDebut }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Address</label>
            <input type="text" name="Adresse" class="form-control" value="{{ $intervention->Adresse }}" required>
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
            </select>
        </div>
        {{-- Submit button --}}
        <button type="submit" class="btn btn-primary w-100 mt-2">Save changes</button>

        <a href="{{ route('Intervention.index', $intervention->IdCaserne) }}" class="btn btn-secondary w-100 mt-2">
            Cancel
        </a>
    </form>

@endsection
