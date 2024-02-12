<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo/fav.png') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'your title here')</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @yield('content')

    @include("layouts.footer")
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>
</html>