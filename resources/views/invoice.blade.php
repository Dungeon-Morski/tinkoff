@extends('layouts.main')
@section('content')
    <div class="main_section  w-full">
        <div class="container flex">
            <div class="content_wrapper grow w-full flex justify-between gap-[5px] md:gap-[45px] block flex-col relative md:flex-row ">
                <x-sidebar></x-sidebar>
                <div class="section_info">
                    <h1>Здравствуйте, {{$user->login}}</h1>
                    <div class="capital_info flex flex-col sm:flex-row gap-[20px] lg:gap-[45px] justify-between">
                        <div class="flex flex-col sm:flex-row gap-[20px] w-full lg:gap-[45px]">
                            <div class="balance_block">
                                <div class="flex gap-[10px] items-center">
                                    <div class="dollar"><span>$</span></div>
                                    <p class="balance">Общий баланс в $</p>
                                </div>
                                <p class="balance_count">{{$user->balance}} $</p>
                            </div>
                            <div class="profit_block">
                                <div class="flex gap-[10px] items-center">
                                    <div class="percent"><span>%</span></div>
                                    <p class="profit">Общий доход в %</p>
                                </div>
                                <p class="balance_count">{{$user->balance / 50 * 100}}</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-center gap-4">
                            <a href="{{route('refill-balance')}}" class="ref_balance_btn">Пополнить баланс</a>
                            <button class="support_btn block sm:hidden">
                                <span>Поддержка</span>
                                <img src="{{asset('sources/icons/support-icon.svg')}}" alt="support-icon">
                            </button>
                        </div>
                    </div>
                    <div class="stats">
                        <h2>Статистика профиля</h2>
                        <canvas class="mt-4" id="bar-chart-grouped" width="800" height="450"></canvas>
                    </div>
                </div>
                <div class="newses">
                    <h3 class="p-0 md:pl-[15px] ">Новости</h3>
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

