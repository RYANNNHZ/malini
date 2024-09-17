<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel</title>
    <link rel="shortcut icon" href="/images/icons/roti.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ url('css') . '/bootstrap.css' }}">
    <link rel="stylesheet" href="{{ url('icon') . '/font/bootstrap-icons.css' }}">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    @include('partials.nav')
    @yield('konten')
    <script src="{{ url('js') . '/popper.min.js' }}"></script>
    <script src="{{ url('js') . '/bootstrap.js' }}"></script>
</body>
</html>
