@extends('layout')

@section('content')

{{-- Page title --}}
<h1 class="text-center mb-4">Edit Type Intervention</h1>
</br>

{{-- Form to update an existing type intervention --}}
<form action="{{ route('typeIntervention.update', $intervention->id) }}" method="POST" class="border p-4 bg-light rounded">
    @csrf
    @method('PUT') {{-- Laravel method override for PUT requests --}}

    {{-- Type intervention number --}}
    <div class="mb-3">
        <label class="form-label">N° Type Intervention</label>
        <input type="int" name="NoIntervention" class="form-control" value="{{ $intervention->NoIntervention }}" required>
    </div>

    {{-- Type Intervention description --}}
    <div class="mb-3">
        <label class="form-label">Description</label>
        <input type="text" name="description" class="form-control" value="{{ $intervention->description }}" required>
    </div>

    {{-- Submit button --}}
    <button type="submit" class="btn btn-primary w-100">Update Type Intervention</button>

    {{-- Back button --}}
    <a href="/TypeInterventions" class="btn btn-secondary w-100 mt-2">Back</a>
</form>

@endsection