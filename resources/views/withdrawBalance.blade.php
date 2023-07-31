@extends('layouts.main')
@section('content')
    <div class="main_section  w-full">
        <div class="container min-h-full flex">
            <div class=" grow flex justify-between gap-[45px]">
                <x-sidebar></x-sidebar>
                <div class="section_info flex flex-col">
                    <h1>Вывод средств</h1>

                    <div class="withdraw_block">
                        <form action="{{route('withdrawPost')}}" method="POST" class="">
                            @csrf

                            <div class="flex flex-col gap-[15px] ">
                                <div>

                                    <select name="type" id="">
                                        <option value="">Выберите способ</option>
                                        @foreach($methods as $method)
                                            <option value="{{$method->title}}">{{$method->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="flex flex-col gap-[5px]">
                                    <p>Номер счёта:</p>
                                    <input type="text" id="invoice_number" placeholder="Введите номер счёта">
                                </div>

                                <div class="flex flex-col gap-[5px]">
                                    <p>Сумма:</p>
                                    <input type="number" max="{{$user->balance}}" id="invoice_number" name="summ" placeholder="От 10$ до {{$user->balance}}$">
                                </div>
                                <button type="submit">Вывести средства</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection

