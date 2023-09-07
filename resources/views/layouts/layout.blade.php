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

<body class="w-screen max-w-[100vw] overflow-x-hidden bg-gray-50  " style=" scroll-behavior: smooth !important; ">

    <x-header/>
    <main>
        {{ $slot }}
    </main>
   <x-footer />






</body>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
$(document).ready(function () {
    $(".main-carousel").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        fade: true,
        speed: 2000,
        cssEase: "linear",
        autoplaySpeed: 2000,
        // prevArrow: '<button type="button" class="slick-prev z-40  absolute top-1/2  transform -translate-x-1/2 -translate-y-1/2 "> <span class="text-lg  p-4 cursor-pointer font-semibold bg-orange-500 w-12 h-12 rounded text-white"> < </span>  </button>',
        // nextArrow: '<button type="button" class="slick-prev z-40  absolute top-1/2 right-0 transform -translate-x-1/ -translate-y-1/2 "> <span class="text-lg  p-4 cursor-pointer font-semibold bg-orange-500 w-12 h-12 rounded text-white"> > </span>  </button>',
    });
});
</script>
@stack('scripts')



</html>
