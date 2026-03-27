<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
        <link rel="icon" type="image/png" href="img/logo.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Dot.Files</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600;700&display=swap">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Alpine v3 (Livewire is not loaded on auth pages, so load Alpine from CDN) -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <style>
            body {
                font-family: 'Montserrat', sans-serif;
                min-height: 100vh;
                margin: 0;
                position: relative;
            }
            body::before {
                content: '';
                position: fixed;
                inset: 0;
                background-image: url('{{ asset('img/header2.jpg') }}');
                background-size: cover;
                background-position: center;
                z-index: -2;
            }
            body::after {
                content: '';
                position: fixed;
                inset: 0;
                background: rgba(0, 0, 0, 0.55);
                z-index: -1;
            }
        </style>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
