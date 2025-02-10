<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Literata:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/inventory.css') }}">


    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Roaya Diamond</title>
    <link rel="icon" href="{{ asset('favicon/favicon.ico') }}">
    @vite('resources/css/app.css')



    <script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/jeromeetienne/ar.js/aframe/build/aframe-ar.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/face-api.js"></script>

    <script src="https://pay.google.com/gp/p/js/pay.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

</head>

<body class="flex flex-col min-h-screen md:max-w-screen-3xl mx-auto bg-gray-50 font-montserrat">
    @include('components.header')
    <main class="flex-grow">
        @yield('content')
    </main>

    @include('components.footer')


</body>

</html>