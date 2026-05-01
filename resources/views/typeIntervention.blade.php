@extends('layout')

@section('content')

{{-- Success message displayed after an action (add, update, delete, clear) --}}
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

{{-- Main title of the page --}}
<h1 class="mb-4">List of Type Interventions</h1>
</br>
<table class="table table-bordered table-striped">
    {{-- Table header --}}
    <thead class="table-dark">
        <tr>
            <th>Intervention Number</th>
            <th>Description</th>
        </tr>
    </thread>

    {{-- Table body with dynamic data --}}
    <tbody>
        @foreach($typeInterventions as $intervention)
            <tr>
                {{-- Type Intervention number --}}
                <td>{{ $intervention->NoIntervention }}</td>
                {{-- Type Intervention description --}}
                <td>{{ $intervention->description }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</br>
<hr class="my-4">

{{-- Section title for adding a new type intervention --}}
<h2 class="mb-4 text-center">Add a New Type Intervention</h2>

{{-- Form to add a new Type Intervention --}}
<form action="{{ route('typeIntervention.add') }}" method="POST" class="border p-4 rounded bg-light">
    @csrf 

    {{-- Type Intervention number --}}
    <div class="mb-3">
        <label class="form-label">Type Intervention number</label>
        <input type="int" name="NoIntervention" class="form-control" required>
    </div>

    {{-- description --}}
    <div class="mb-3">
        <label class="form-label">Description</label>
        <input type="text" name="description" class="form-control" required>
    </div>

    <button type="Submit" class="btn btn-primary w-100">Add Type Intervention</button>

</form>

@endsection