@extends('layout')

@section('content')

{{-- Page title --}}
<h1 class="text-center mb-4">Edit Fire Station</h1>
</br>

{{-- Form to update an existing fire station --}}
<form action="{{ route('firestations.update', $station->id) }}" method="POST" class="border p-4 bg-light rounded">
    @csrf
    @method('PUT') {{-- Laravel method override for PUT requests --}}

    {{-- Fire station name --}}
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control" value="{{ $station->name }}" required>
    </div>

    {{-- Fire station address --}}
    <div class="mb-3">
        <label class="form-label">Address</label>
        <input type="text" name="adress" class="form-control" value="{{ $station->adress }}" required>
    </div>

    {{-- Fire station city --}}
    <div class="mb-3">
        <label class="form-label">City</label>
        <input type="text" name="city" class="form-control" value="{{ $station->city }}" required>
    </div>

    {{-- Fire station phone number --}}
    <div class="mb-3">
        <label class="form-label">Phone</label>
        <input type="text" name="phone" class="form-control" value="{{ $station->phone }}" required>
    </div>

    {{-- Fire station state (dropdown list) --}}
    <div class="mb-3">
        <label class="form-label">State</label>
        <select name="state_id" class="form-select" required>
            @foreach($states as $state)
                <option value="{{ $state->id }}"
                    @if($station->state_id == $state->id) selected @endif>
                    {{ $state->description }}
                </option>
            @endforeach
        </select>
    </div>

    {{-- Submit button --}}
    <button type="submit" class="btn btn-primary w-100">Update Fire Station</button>

    {{-- Back button --}}
    <a href="/FireStations" class="btn btn-secondary w-100 mt-2">Back</a>
</form>

@endsection