<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Temukan Aset-aset dengan Mudah di asetaset.com: Layanan Terpercaya untuk Informasi Aset-aset dalam Status Penundaan Kewajiban Pembayaran Utang atau Pailit">

    <title>asetaset.com</title>

    {{-- favicon --}}
    <link rel="icon" href="/favicon.ico" sizes="32x32">
    <link rel="icon" href="/icon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="manifest" href="/manifest.webmanifest">
    <meta name="msapplication-config" content="/browserconfig.xml">
    <link rel="mask-icon" href="/icon.svg" color="#C5AF66">

    {{-- Build CSS --}}
    <link rel="stylesheet" href="{{ asset('css/build.css') }}?t={{ env('VERSION_TIME') }}">

    <!-- vite-->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <!-- css & js-->
    @yield('head')
</head>

<body class="bg-cLightGrey">
    <div class="min-h-screen">
        @yield('body')
    </div>

    <div class="ml-[72px] lg:ml-[18rem]">
        <x-developed-by />
    </div>

    {{-- Script --}}
    <script src="{{ asset('js/developed-by.js') }}?t={{ env('VERSION_TIME') }}"></script>
</body>

</html>
