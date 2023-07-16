<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
    @vite(['resources/scss/normalize.scss','resources/scss/app.scss','resources/css/app.css','resources/js/app.js'])
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="container">
            <div class="flex justify-between w-full items-center">
                <a href="#" class="logo"><img src="{{asset('sources/images/logo.png')}}" alt="logo"></a>
                <div class="avatar"><img src="{{asset('sources/images/avatar.png')}}" alt=""></div>
            </div>
        </div>
    </header>
    <main class="flex">
        @yield('content')
    </main>
    <footer class="footer">
        <div class="container">
            <div class="flex justify-center"><p>Подвал</p></div>
        </div>
    </footer>
</div>

<x-loader></x-loader>

</body>
</html>
