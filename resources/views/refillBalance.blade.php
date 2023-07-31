@extends('layouts.main')
@section('content')
    <div class="main_section w-full">
        <div class="depositOverlayBlock hidden">
            <div class="overlay">
            </div>
            <div class="modal_content">
                <form action="">
                    <div>
                        <label for=""></label>
                        <input id="deposit-amount" type="number" name="summ" placeholder="Введите сумму пополнения">
                    </div>
                    <button type="button" class="deposit-btn">Продолжить</button>
                </form>
            </div>
        </div>
        <div class="container flex h-full">
            <div class=" grow flex justify-between gap-[45px]">
                <x-sidebar></x-sidebar>
                <div class="section_info flex flex-col">
                    <h1>Пополнить баланс</h1>

                    <div class="replenishments">
                        @foreach($requisites as $requisite)
                            @if($requisite->min_deposit > $user->balance )
                                @continue
                            @endif
                            <div class="sec_card">

                                <div class="card_avatar_block flex gap-2 items-center">
                                    <div class="avatar_wrapper">
                                        <img class="avatar" src="{{asset('sources/images/avatar2.png')}}" alt="avatar2">
                                    </div>
                                    <p class="nickname">{{$requisite['owner'] ?? 'Артур Васильей'}}</p>
                                </div>

                                <div class="card_info flex gap-4 justify-between  items-center mt-[12px] ">

                                    <div class="flex flex-row md:flex-col gap-[20px]  w-full md:w-auto">
                                        <div class="flex gap-[10px]">
                                            <p>10 ордеров</p>
                                            <p>100.00% выполнено</p>
                                        </div>
                                        <div class="flex items-center">

                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g id="prime:thumbs-up-fill">
                                                    <path id="Vector"
                                                          d="M5.43001 8.25V15H4.22251C3.54751 15 3.00751 14.46 3.00751 13.7925V9.465C3.00751 8.7975 3.55501 8.25 4.22251 8.25H5.43001ZM13.875 7.125H10.29V4.5C10.29 3.675 9.61501 3 8.79751 3H8.73001C8.43001 3 8.16001 3.18 8.04001 3.4575L5.99251 8.25V15H12.8925C13.44 15 13.905 14.61 14.0025 14.07L14.9925 8.445C15.1125 7.755 14.5875 7.125 13.8825 7.125H13.875Z"
                                                          fill="
                                                          @if($requisite->rating >= 50)
#0DE23C
@elseif($requisite->rating >= 40)
#F5B074
@else
#EF3124
                                            @endif
                                            "/>
                                                </g>
                                            </svg>

                                            <p>{{$requisite->rating}}%</p></div>
                                    </div>
                                    <div class="flex  items-center gap-1 self-start">
                                        <p class="summ">{{$requisite->rate}}</p>
                                        <span> RUB</span>
                                    </div>
                                    <div class="flex  flex-col gap-[5px] self-start">
                                        <p>3, 302.65 USDT</p>
                                        <p>₽304.700.00 - ₽304.700.00</p>
                                    </div>
                                    <div class="bank_info"><p class="bank d-flex justify-center pl-2 "><img style="max-width:20px" src="{{asset('sources/images/'.$requisite->bank .'.svg')}}" alt=""></p>
                                    </div>

                                    {{--                                onclick="location.href = '{{ $requisite->islink == 0 ? route('payment') . '?id=' .$requisite->id : $requisite->requisites }}--}}
                                    <button data-id="{{$requisite->id}}" class="paymentBtn">Пополнить</button>
                                </div>

                            </div>
                        @endforeach

                    </div>

                </div>

            </div>
        </div>
        @vite(['resources/js/refill.js'])
    </div>
@endsection

