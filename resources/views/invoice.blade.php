@extends('layouts.main')
@section('content')
    <div class="main_section  w-full">
        <div class="container flex">
            <div class="w-full flex justify-between gap-[45px]">
                <x-sidebar></x-sidebar>
                <div class="section_info">
                    <h1>Здравствуйте</h1>
                    <div class="capital_info flex gap-[10px] lg:gap-[45px] justify-between">
                        <div class="flex gap-[10px] lg:gap-[45px] flex-wrap">
                            <div class="balance_block">
                                <div class="flex gap-[10px] items-center">
                                    <div class="dollar"><span>$</span></div>
                                    <p class="balance">Общий баланс в $</p>
                                </div>
                                <p class="balance_count">1000 $</p>
                            </div>
                            <div class="profit_block">
                                <div class="flex gap-[10px] items-center">
                                    <div class="percent"><span>%</span></div>
                                    <p class="profit">Общий доход в %</p>
                                </div>
                                <p class="balance_count">100 %</p>
                            </div>
                        </div>
                        <button class="ref_balance_btn">Пополнить баланс</button>
                    </div>
                    <div class="stats">
                        <h2>Статистика профиля</h2>
                        <canvas id="bar-chart-grouped" width="800" height="450"></canvas>
                    </div>
                </div>
                <div class="newses">
                    <h3 class="pl-[15px]">Новости</h3>
                    <a href="" class="news">
                        <p class="new_title">В Минтрансе ответили на прогноз о повышении цен на авиабилеты до 40%</p>
                        <p class="new_category">Бизнес, <span class="new_datetime">10:01</span></p>
                    </a>
                    <a href="" class="news">
                        <p class="new_title">В Минтрансе ответили на прогноз о повышении цен на авиабилеты до 40%</p>
                        <p class="new_category">Бизнес, <span class="new_datetime">10:01</span></p>
                    </a>
                    <a href="" class="news">
                        <p class="new_title">В Минтрансе ответили на прогноз о повышении цен на авиабилеты до 40%</p>
                        <p class="new_category">Бизнес, <span class="new_datetime">10:01</span></p>
                    </a>
                    <a href="" class="news">
                        <p class="new_title">В Минтрансе ответили на прогноз о повышении цен на авиабилеты до 40%</p>
                        <p class="new_category">Бизнес, <span class="new_datetime">10:01</span></p>
                    </a>
                    <a href="" class="news">
                        <p class="new_title">В Минтрансе ответили на прогноз о повышении цен на авиабилеты до 40%</p>
                        <p class="new_category">Бизнес, <span class="new_datetime">10:01</span></p>
                    </a>
                    <a href="" class="news">
                        <p class="new_title">В Минтрансе ответили на прогноз о повышении цен на авиабилеты до 40%</p>
                        <p class="new_category">Бизнес, <span class="new_datetime">10:01</span></p>
                    </a>
                    <a href="" class="news">
                        <p class="new_title">В Минтрансе ответили на прогноз о повышении цен на авиабилеты до 40%</p>
                        <p class="new_category">Бизнес, <span class="new_datetime">10:01</span></p>
                    </a>
                    <a href="" class="news">
                        <p class="new_title">В Минтрансе ответили на прогноз о повышении цен на авиабилеты до 40%</p>
                        <p class="new_category">Бизнес, <span class="new_datetime">10:01</span></p>
                    </a>
                    <a href="" class="news">
                        <p class="new_title">В Минтрансе ответили на прогноз о повышении цен на авиабилеты до 40%</p>
                        <p class="new_category">Бизнес, <span class="new_datetime">10:01</span></p>
                    </a>
                    <a href="" class="news">
                        <p class="new_title">В Минтрансе ответили на прогноз о повышении цен на авиабилеты до 40%</p>
                        <p class="new_category">Бизнес, <span class="new_datetime">10:01</span></p>
                    </a>
                    <a href="" class="news">
                        <p class="new_title">В Минтрансе ответили на прогноз о повышении цен на авиабилеты до 40%</p>
                        <p class="new_category">Бизнес, <span class="new_datetime">10:01</span></p>
                    </a>
                    <a href="" class="news">
                        <p class="new_title">В Минтрансе ответили на прогноз о повышении цен на авиабилеты до 40%</p>
                        <p class="new_category">Бизнес, <span class="new_datetime">10:01</span></p>
                    </a>
                    <a href="" class="news">
                        <p class="new_title">В Минтрансе ответили на прогноз о повышении цен на авиабилеты до 40%</p>
                        <p class="new_category">Бизнес, <span class="new_datetime">10:01</span></p>
                    </a>


                </div>
            </div>
        </div>
    </div>
    @vite(['resources/js/invoice.js'])
@endsection

