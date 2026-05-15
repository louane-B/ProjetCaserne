@extends('layout')

@section('content')

    {{-- Page title --}}
    <h1 class="text-center mb-4">Edit Intervention</h1>
    </br>
    </br>
    {{-- Form to update an existing intervention --}}
    <form action="{{ route('typeVehicle.update', $vehicle->id) }}" method="POST" class="border p-4 bg-light rounded">
        @csrf
        @method('PUT')  {{-- Laravel method override for PUT requests --}}

        <div class="mb-3">
            <label class="form-label">Code</label>
            <input type="string" name="code" class="form-control" value="{{ $vehicle->code }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <input type="string" name="description" class="form-control" value="{{ $vehicle->description }}" required>
        </div>

        {{-- Submit button --}}
        <button type="submit" class="btn btn-primary w-100 mt-2">Save changes</button>

        <a href="{{ route('typeVehicle.index') }}" class="btn btn-secondary w-100 mt-2">
            Cancel
        </a>
    </form>

@endsection
