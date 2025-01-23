<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel ASIX</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body class="bg-gray-100">
    <x-navbar/>

    <div class="container mx-100 mt-5">
        @yield('content')
    </div>

    <x-footer/>

    @livewireScripts
</body>
</html>

