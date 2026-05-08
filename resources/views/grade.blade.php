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

@endsection