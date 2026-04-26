@extends('layout')

@section('content')

{{-- Success message displayed after an action (add, update, delete, clear) --}}
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

{{-- Main title of the page --}}
<h1 class="mb-4">List of Fire Stations</h1>
</br>

{{-- Button to clear (delete all) fire stations --}}
<form action="{{ route('firestations.clear') }}"
        method="POST"
        onsubmit="return confirm('Do you really want to delete ALL fire stations ?');"
        class="mb-3">
    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger">
        Clear List
    </button>
</form>

</br>
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
            <th style="width: 200px;">Actions</th>
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
                {{-- Fire station phone --}}
                <td>{{ $station->phone }}</td>
                {{-- Fire station state (relationship) --}}
                <td>{{ $station->state->description }}</td>
                {{-- Action buttons: Edit + Delete --}}
                <td>
                    {{-- Edit button --}}
                    <a href="{{ route('firestations.edit', $station->id) }}" class="btn btn-warning btn_sm">
                        Modifier
                    </a>

                   {{-- Delete button --}} 
                    <form action="{{ route('firestations.delete', $station->id) }}"
                        method="POST"
                        style="display:inline-block;"
                        onsubmit="return confirm('Do you really want to delete this fire station?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</br>
<hr class="my-4">

{{-- Section title for adding a new fire station --}}
<h2 class="mb-4 text-center">Add a New Fire Station</h2>

{{-- Form to add a new fire station --}}
<form action="{{ route('firestations.add') }}" method="POST" class="border p-4 rounded bg-light">
    @csrf

    {{-- Fire station name --}}
    <div class="mb-3">
        <label class="form-label">Fire station name</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    {{-- Address --}}
    <div class="mb-3">
        <label class="form-label">Address</label>
        <input type="text" name="adress" class="form-control" required>
    </div>

    {{-- City --}}
    <div class="mb-3">
        <label class="form-label">City</label>
        <input type="text" name="city" class="form-control" required>
    </div>

    {{-- Phone --}}
    <div class="mb-3">
        <label class="form-label">Phone</label>
        <input type="text" name="phone" class="form-control" required>
    </div>

    {{-- State dropdown --}}
    <div class="mb-3">
        <label class="form-label">State</label>
        <select name="state_id" class="form-select" required>
            @foreach(\App\Models\State::all() as $state)
                <option value="{{ $state->id }}">{{ $state->description }}</option>
            @endforeach
        </select>
    </div>

    {{-- Submit button --}}
    <button type="submit" class="btn btn-primary w-100">Add Fire Station</button>
</form>

@endsection

