<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo/fav-icon.png') }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'your title here')</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @yield('content')

<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>
</html>