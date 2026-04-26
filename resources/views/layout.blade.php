<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Page title --}}
    <title>Projet Caserne</title>

    {{-- Bootstrap CSS (recommended for styling) --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>

    {{-- Navigation bar included from a separate Blade file --}}
    @include('navbar')

    {{-- Main container for page content --}}
    <div class="container mt-4">
        {{-- Each page will inject its own content here --}}
        @yield('content')
    </div>

    {{-- Bootstrap JS (for components like modals, dropdowns, alerts, etc.) --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>