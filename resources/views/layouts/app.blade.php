<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Negocio')</title>

    {{-- Tailwind & app (Vite) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Bootstrap 5 (para vistas que usan .card, .btn, .form-control, etc.) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- FullCalendar CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/main.min.css" rel="stylesheet" />

    {{-- Font Awesome --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    @stack('styles')

    <style>
        /* Ajustes mínimos para que Tailwind y Bootstrap convivan mejor */
        body {
            font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, 'Helvetica Neue', Arial, 'Noto Sans', 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
        }

        .card {
            border-radius: 1rem;
            box-shadow: 0 10px 20px rgba(0, 0, 0, .06);
            border: 0;
        }

        .card-header {
            background: #f8f9fa;
            border-bottom: 0;
            font-weight: 600;
        }

        .btn.btn-primary {
            background: #7c3aed;
            border-color: #7c3aed;
        }

        /* morado bonito */
        .btn.btn-primary:hover {
            background: #6d28d9;
            border-color: #6d28d9;
        }

        .text-primary {
            color: #7c3aed !important;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-900 antialiased">
    {{-- Header simple (opcional) --}}
    <header class="bg-white shadow-sm">
        <div class="container d-flex align-items-center justify-content-between py-3">
            <a href="{{ url('/') }}" class="text-decoration-none fw-bold" style="color:#1f2937;">Betogether</a>
            <nav class="d-flex gap-3">
                <a class="text-decoration-none" href="{{ url('/') }}">Inicio</a>
                @auth
                    <a class="text-decoration-none" href="{{ route('dashboard') }}">Mi cuenta</a>
                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 align-baseline">Cerrar sesión</button>
                    </form>
                @else
                    <a class="text-decoration-none" href="{{ route('login') }}">Iniciar sesión</a>
                    <a class="btn btn-sm btn-primary ms-2" href="{{ route('register') }}">Registro</a>
                @endauth
            </nav>
        </div>
    </header>

    <main class="min-h-screen py-4">
        @yield('content')
    </main>

    <footer class="py-4 mt-5 bg-white border-top">
        <div class="container text-center text-muted">
            © {{ date('Y') }} Betogether. Todos los derechos reservados.
        </div>
    </footer>

    {{-- FullCalendar JS --}}
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')
</body>

</html>
