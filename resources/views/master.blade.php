<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Mạng xã hội - HopeSo</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="icon" href="{{ asset('assets/img/logo-webAnh_transparent.png') }}">

    {{-- icon --}}

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">

    @include('layouts.css');

</head>

<body>
    @include('layouts.header')

    @yield('contents');

    {{-- @include('layouts.footer'); --}}
    @include('layouts.js');

</body>

</html>
