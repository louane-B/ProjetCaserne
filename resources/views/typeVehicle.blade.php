@extends('layout')

@section('content')

{{-- Main title of the page --}}
<h2 class="mb-4">list of typeVehicle</h2>
</br>

{{-- Success message displayed after an action (add, update, delete, clear) --}}
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

{{-- Button to clear (delete all) type Vehicle --}}
<form action="{{ route('typeVehicle.clear') }}"
        method="POST"
        onsubmit="return confirm('Do you really want to delete ALL type Vehicle ?');"
        class="mb-3">
        @csrf
        @method('DELETE')

    <button type="submit" class="btn btn-danger">
        Clear List
    </button>
</form>

</br>

{{-- Table displaying all  grade --}}
<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>Code</th>
            <th>Description</th>
            <th style="width: 200px;">Actions</th>
        </tr>

    </thread>

    <tbody>
        @foreach($typeVehicles as $vehicle)
        <tr>
            <td>{{ $vehicle->code }}</td>
            <td>{{ $vehicle->description }}</td>
            <td>
                    {{-- Edit button --}}
                    <a href="{{ route('typeVehicle.edit', $vehicle->id) }}" class="btn btn-warning btn_sm">
                        Modifier
                    </a>

                    {{-- Delete button --}} 
                    <form action="{{ route('typeVehicle.delete', $vehicle->id) }}"
                        method="POST"
                        style="display:inline-block;"
                        onsubmit="return confirm('Do you really want to delete this Type vehicle?');">
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

{{-- Section title for adding a new type Vehicle --}}
<h2 class="mb-4 text-center">Add a New Type Vehicle</h2>

{{-- Form to add a new typeVehicle --}}
<form action="{{ route('typeVehicle.add') }}" method="POST" class="border p-4 rounded bg-light">
    @csrf 

    {{-- type Vehicle code --}}
    <div class="mb-3">
        <label class="form-label">type Vehicle code</label>
        <input type="string" name="code" class="form-control" required>
    </div>

    {{-- type Vehicle description --}}
    <div class="mb-3">
        <label class="form-label">Type Vehicle description</label>
        <input type="string" name="description" class="form-control" required>
    </div>

    <button type="Submit" class="btn btn-primary w-100">Add New typeVehicle</button>

</form>
@endsection