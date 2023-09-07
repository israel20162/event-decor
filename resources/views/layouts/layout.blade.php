<!-- resources/views/components/layout.blade.php -->

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
</head>

<body class="w-screen overflow-x-hidden bg-gray-50  " style=" scroll-behavior: smooth !important; ">

    <x-header/>
    <main>
        {{ $slot }}
    </main>
   <x-footer />






</body>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src={{ asset('js/slick.js') }}></script>
@stack('scripts')



</html>
