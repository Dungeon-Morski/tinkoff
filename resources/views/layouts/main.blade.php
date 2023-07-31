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
            <div class="flex justify-between items-center gap-4 flex-col sm:flex-row">
                <a href="#" class="logo">
                    <img src="{{asset('sources/images/logo.png')}}" alt="logo">
                </a>
                <div class="help_block flex flex-col gap-[4px]">
                    <p>8 800 555-77-78</p>
                    <p>Для звонков по России</p>
                </div>
            </div>

            <ul class="footer_navigation flex mt-[35px] items-center gap-4 lg:gap-[40px] flex-wrap justify-center sm:justify-start">
                <li><a href="#">Блог</a></li>
                <li><a href="#">Работа</a></li>
                <li><a href="#">Точки пополнения</a></li>
                <li><a href="#">Банкоматы</a></li>
                <li><a href="#">Курсы валют</a></li>
                <li><a href="#">Контакты</a></li>
                <li><a href="#">Помощь</a></li>
                <li><a href="#">For investors</a></li>
                <li><a href="#">Новости</a></li>
                <li><a href="#">О банке</a></li>
            </ul>
            <div class="mt-[45px] description">
                <p>АО «Тинькофф Банк» использует файлы «cookie», с целью персонализации сервисов и повышения удобства
                    пользования веб-сайтом. «Cookie» представляют собой небольшие файлы, содержащие информацию о
                    предыдущих посещениях веб-сайта. Если вы не хотите использовать файлы «cookie», измените настройки
                    браузера.</p>
            </div>
            <div class="policy mt-[20px]">
                <p>© 2006—2023, АО «Тинькофф Банк», официальный сайт, универсальная лицензия ЦБ РФ № 2673</p>
            </div>
        </div>
    </footer>
</div>

<x-loader></x-loader>

</body>
</html>
