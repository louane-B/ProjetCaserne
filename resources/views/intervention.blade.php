@extends('layout')

@section('content')


{{-- Main title of the page --}}
<h2 class="mb-4">Interventions for Station {{ $caserne->name }}</h2>
</br>

 {{-- Success message displayed after an action (add, update, delete, clear) --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

</br>

{{-- Table displaying all  Intervention --}}
<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Date & Heure</th>
            <th>Type</th>
            <th style="width: 200px;">Actions</th>
        </tr>

    </thread>

    <tbody>
        @foreach($caserne->interventions as $inter)
        <tr>
            <td>{{ $inter->id }}</td>
            <td>{{ $inter->DateTempsDebut }}</td>
            <td>{{ $inter->type->description }}</td>
            <td>
                {{-- View button --}}
                <a href="{{ route('Intervention.show', $inter->id) }}" class="btn btn-primary btn-sm">
                    View
                </a>

                {{-- Edit button --}}
                <a href="{{ route('Intervention.edit', $inter->id) }}" class="btn btn-warning btn-sm">
                    Modifier
                </a>

                {{-- Delete button --}} 
                    <form action="{{ route('Intervention.delete', $inter->id) }}"
                        method="POST"
                        style="display:inline-block;"
                        onsubmit="return confirm('Do you really want to delete this Intervention?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">
                            Delete
                        </button>
                    </form>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection