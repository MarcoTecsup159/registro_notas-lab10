<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>
    <nav>
        <!-- Barra de navegación -->
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <!-- Pie de página -->
    </footer>

    <script src="{{ asset('js/validation.js') }}"></script>
</body>
</html>
