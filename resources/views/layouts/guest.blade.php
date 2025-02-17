<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DeliveBoo</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

     <!-- Scripts -->
     @vite(['resources/js/appVue.js','resources/scss/appVue.scss'])
</head>

<body class="font-sans text-gray-900 antialiased">

    @yield('content')

</body>

</html>
