<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Geopy</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-200">
    
    <div id="app">
        
        <section class="px-8 py-4 mb-6 bg-white shadow">
            <header class="container mx-auto">
                <h1>
                    <img src="/images/owl.png" alt="logo" width="30" height="30" class="inline-block">
                    Geopy
                </h1>
            </header>
        </section>
        
        {{ $slot }}
        
    </div>

    <script src="http://unpkg.com/turbolinks"></script>

</body>
</html>
