<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet Caserne</title>

    {{-- Bootstrap (optionnel mais recommandé) --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>

    {{-- Navbar --}}
    @include('navbar')

    <div class="container mt-4">
        {{-- Contenu spécifique à chaque page --}}
        @yield('content')
    </div>

    {{-- Scripts Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>