<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel App' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Sticky footer fix */
        html, body {
            height: 100%;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1;
        }

         .bg-lilac {
        background-color: #C8A2C8 !important; /* lilac pastel */
        }
        .bg-lilac-dark {
            background-color: #b088b0 !important; /* lilac lebih gelap */
        }
        .text-lilac {
            color: #C8A2C8 !important;
        }
        .btn-lilac {
            background-color: #C8A2C8;
            color: white;
            border-radius: 20px;
        }
        .btn-lilac:hover {
            background-color: #b088b0;
            color: white;
        }

    </style>
</head>
<body>
    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Konten utama --}}
    <main class="container my-4">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
