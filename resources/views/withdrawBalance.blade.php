@extends('layouts.main')
@section('content')
    <div class="main_section  w-full">
        <div class="container min-h-full flex">
            <div class=" grow flex justify-between gap-[45px]">
                <x-sidebar></x-sidebar>
                <div class="section_info flex flex-col">
                    <h1>Вывод средств</h1>

                    <div class="withdraw_block">
                        <form action="" method="" class="">

                            <div class="flex flex-col gap-[15px]">
                                <div>
                                    <select name="" id="">
                                        <option>Выберите способ</option>
                                        <option>Сбербанк</option>
                                        <option>Qiwi</option>
                                        <option>Криптовалюта</option>
                                    </select>
                                </div>
                                <div class="flex flex-col gap-[5px]">
                                    <p>Номер счёта:</p>
                                    <input type="text" id="invoice_number" placeholder="Введите номер счёта">
                                </div>

                                <div class="flex flex-col gap-[5px]">
                                    <p>Сумма:</p>
                                    <input type="text" id="invoice_number" placeholder="Введите номер счёта">
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

