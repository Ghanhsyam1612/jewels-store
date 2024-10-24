<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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