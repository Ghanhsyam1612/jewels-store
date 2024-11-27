<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Literata:wght@400;700&display=swap" rel="stylesheet">

    <title>Jewels Store</title>
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col min-h-screen">
    @include('components.header')

    <main class="flex-grow">
        @yield('content')
    </main>

    @include('components.footer')
</body>

</html>