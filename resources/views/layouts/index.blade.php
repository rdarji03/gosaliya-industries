<!doctype html>
<html data-theme="light">

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo/fav.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'your title here')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @yield('content')

    @include('layouts.footer')
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="{{ asset('js/design.js') }}"></script>

</body>
<script src="{{ asset('js/slider.js') }}"></script>
<script>
    function Menu(e) {
        let list = document.querySelector('ul');
        e.name === 'menu' ? (e.name = "close", list.classList.add('top-[110px]'), list.classList.add('opacity-100'),list.classList.remove('top-[-320px]')) : (
            e.name = "menu", list.classList.remove('top-[110px]'), list.classList.remove('opacity-100'),list.classList.add('top-[-320px]'))
    }
</script>


</html>
