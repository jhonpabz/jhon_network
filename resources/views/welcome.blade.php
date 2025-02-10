<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JhonPabz Network</title>

    <!-- Add Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    @vite('resources/css/app.css')

    <!-- Add Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>

<body class="text-center px-8 py-12">
    <x-banner-swipper />
    <x-h5-links />
    <h1 class="mb-8">JhonPabz Network</h1>
    <a href="/jhonpabz" class="btn">Lets Go!</a>
</body>

</html>
