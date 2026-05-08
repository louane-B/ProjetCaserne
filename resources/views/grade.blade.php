@extends('layout')

@section('content')

{{-- Main title of the page --}}
<h2 class="mb-4">list of grade</h2>
</br>

</br>

{{-- Table displaying all  grade --}}
<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>Description</th>
            <th>Symbol</th>
        </tr>

    </thread>

    <tbody>
        @foreach($grades as $grade)
        <tr>
            <td>{{ $grade->description }}</td>
            <td>{!! $grade->symbol !!}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</br>
<hr class="my-4">

{{-- Section title for adding a new grade --}}
<h2 class="mb-4 text-center">Add a New Type Intervention</h2>

{{-- Form to add a new grade --}}
<form action="{{ route('grade.add') }}" method="POST" class="border p-4 rounded bg-light">
    @csrf 

    {{-- grade description --}}
    <div class="mb-3">
        <label class="form-label">Grade description</label>
        <input type="int" name="description" class="form-control" required>
    </div>

    {{-- grade symbol --}}
    <div class="mb-3">
        <label class="form-label">Grade symbol</label>
        <select name="symbol" id="symbol" class="form-select" required>
            <option value="">-- Choisir un symbole --</option>

            <option value="&#9937;&#9937;&#9937;">⛑️⛑️⛑️ Directeur</option>
            <option value="&#9937;&#9937;">⛑️⛑️ Directeur adjoint</option>
            <option value="&#11088;&#11088;">⭐⭐ Capitaine</option>
            <option value="&#9876;">⚔️ Lieutenant substitut</option>
            <option value="&#9876;&#9876;">⚔️⚔️ Lieutenant</option>
            <option value="&#9876;&#9876;&#9876;">⚔️⚔️⚔️ Lieutenant-chef</option>
            <option value="&#128737;">🛡️ Caporal</option>
            <option value="&#128737;&#128737;">🛡️🛡️ Sergent</option>
            <option value="&#128737;&#128737;&#128737;">🛡️🛡️🛡️ Commandant</option>
            <option value="&#128658;&#128658;">🚒🚒 Pompier expérimenté</option>
            <option value="&#128658;">🚒 Pompier</option>
            <option value="&#128680;">🚨 Pompier Recrue</option>
            <option value="&#128293;">🔥 Officier</option>
            <option value="&#129689;">🪙 Mérite / distinction</option>
            <option value="&#127941;">🏅 Médaillé</option>
        </select>
    </div>

    <button type="Submit" class="btn btn-primary w-100">Add New Grade</button>

</form>

@endsection