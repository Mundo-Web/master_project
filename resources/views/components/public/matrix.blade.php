<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{asset('css/styles.css')}}"/>

    {{-- Aqui van los CSS --}}
    @yield('css_importados')

    {{-- Swipper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body class="body">
    <div class="overlay"></div>
    @include('components.public.header')
    
    <div class="main">
        {{-- Aqui va el contenido de cada pagina --}}
        @yield('content')

    </div>

    @include('components.public.footer')
    
    
    @yield('scripts_importados')
    {{-- @vite(['resources/js/functions.js']) --}}
    <script src="{{asset('js/functions.js')}}"></script>

</body>
</html>