@extends('layouts.main')
@section('content')
    <div class="main_section  w-full">
        <div class="container min-h-full flex">
            <div class=" grow flex justify-between gap-[45px]">
                <x-sidebar></x-sidebar>
                <div class="section_info flex flex-col">
                    <h1 class="text-center">Оплата платежа</h1>
                    <p class="payment_comment text-center">Переведите указанную сумму на реквизиты кассира из формы
                        ниже</p>
                    <div class="payment_info">
                        <div class="flex flex-col justify-center items-center">
                            <div class="time_info flex justify-center items-center">
                                <p>Осталось времени: <span class="payment_time">30:00</span></p>
                            </div>
                            <div class="payment_cart">
                                <div class="cart_info flex flex-col gap-[22px]">
                                    <img class="cart_img" src="{{asset('sources/images/qiwi.svg')}}" alt="qiwi">
                                    <div class="flex flex-col gap-[5px]">
                                        <p class="a_number">Номер счета</p>
                                        <div class="flex items-center gap-1">
                                            <p class="number">+79536542233</p>
                                            <button class="copyBtn">
                                                <img data-clipboard-target="#number"
                                                     class="copy_img cursor-pointer"
                                                     src="{{asset('sources/icons/solar_copy-bold.svg')}}">
                                            </button>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="sum_info flex justify-center gap-2">

                                <p>К оплате</p>
                                <span>40000 ₽</span>

                            </div>
                            <a href="" class="success text-center">Я оплатил</a>
                            <a href="" class="cancel text-center">
                                Отменить операцию
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    @vite(['resources/js/payment.js'])
@endsection

