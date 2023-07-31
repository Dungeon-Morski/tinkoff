@extends('layouts.main')
@section('content')
    <div class="main_section  w-full">
        <div class="container min-h-full flex">
            <div class="content_wrapper grow flex justify-between gap-[45px]">
                <x-sidebar></x-sidebar>
                <div class="section_info flex flex-col">
                    <h1>Поддержка</h1>

                    <div class="support_block">
                        <div class="accordion">
                            <div class="accordion-item">
                                <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Какие гарантии?</span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <p>Лицензия ЦБРФ, аналитическое сопровождение, полная сохранность и безопасность средств.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Могу ли я выводить себе прибыль на банковскую карту?</span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <p>Да, Вы можете выводить средства на любой платежный инструмент любого формата (банковские карты, электронные кошельки или крипто кошельки)</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">Много ли времени нужно для того, чтобы здесь зарабатывать?</span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <p>В среднем наши клиенты уделяют до 30 минут в день и получают свой финансовый результат.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">У меня нет опыта, могу ли я здесь зарабатывать?</span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <p>Большинство наших клиентов без опыта, а точнее 70% пользователей. <br>
                                        Мы предоставляем качественный сервис и обучение, которое поможет выйти на приемлимый результат уже в первый месяц.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">Что нужно для инвестиций?</span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <p>Платформа доступна каждому, но куда же без инвестиций. <br>
                                        Минимальное вложение с которого начинает пользователь это 100$. <br>
                                        Чем больше будет ваше вложение, тем больше процентов прибыли будете получать ежедневно.
                                        <br>
                                        Это работает так: ваш друг вложил 500$, а вы 700$. Исходя из этого, вы будете получать на 30% больше вашего друга.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <script>
        const items = document.querySelectorAll(".accordion button");

        function toggleAccordion() {
            const itemToggle = this.getAttribute('aria-expanded');

            for (i = 0; i < items.length; i++) {
                items[i].setAttribute('aria-expanded', 'false');
            }

            if (itemToggle == 'false') {
                this.setAttribute('aria-expanded', 'true');
            }
        }

        items.forEach(item => item.addEventListener('click', toggleAccordion));
    </script>
@endsection

