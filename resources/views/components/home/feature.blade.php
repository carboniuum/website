@props([
    'advantageImg' => '',
])

<section class="uk-section bg-[#1E252B] text-[#fff] overflow-hidden">
    <div class="uk-container uk-padding"
         uk-scrollspy="target: .animTop; cls: uk-animation-slide-top; delay: 300; repeat: true">
        <h1 class="title-2 text-[#fff] text-center animTop">
            Преимущества нашей компании
        </h1>
        <p class="text-center text-[#fff] text-opacity-[0.78] sm:w-[430px] mx-auto mt-[25px] animTop">
            Мы ценим и дорожим сотрудничеством с нашими партнерами и считаем их своим самым дорогим активом.
        </p>
        <div class="uk-margin-large-top">
            <div class="uk-hidden@l mb-[30px]">
                <div class="overflow-hidden uk-width-1-2@s rounded-[10px]">
                    <img
                        class="w-full hover:scale-110 duration-300 cursor-pointer" src="{{ \App\Classes\Helper::getImagePath($advantageImg) }}"
                        alt="ico"
                    />
                </div>
            </div>
            <div class="uk-child-width-1-3@l uk-child-width-1-2@s items-end" uk-grid>
                <div>
                    <ul class="flex flex-col space-y-[30px]"
                        uk-scrollspy="target: .animation; cls: uk-animation-slide-left; delay: 200; repeat: true">
                        <li>
                            <div class="p-[25px] animation hover-card">
                                <div
                                    class="bg-[#034ABE] w-[50px] h-[50px] rounded-[5px] bg-opacity-[0.1] flex items-center justify-center">
                                    <img
                                        class="w-[20px]"
                                        src="{{ asset('images/icons/security.svg') }}"
                                        alt="ico"
                                    />
                                </div>
                                <h4 class="text-[#fff] text-[22px] font-[600] mt-[15px] mb-[5px]">
                                    Колл-центр
                                </h4>
                                <p class="text-[#fff] text-opacity-[0.7]">
                                    Оказываем квалифицированную техническую поддержку клиентам по любым вопросам применения нашей продукции
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="p-[25px] animation hover-card">
                                <div
                                    class="bg-[#034ABE] w-[50px] h-[50px] rounded-[5px] bg-opacity-[0.1] flex items-center justify-center">
                                    <img class="w-[20px]" src="{{ asset('images/icons/air.svg') }}" alt="ico" />
                                </div>
                                <h4 class="text-[#fff] text-[22px] font-[600] mt-[15px] mb-[5px]">
                                    Опытная команда
                                </h4>
                                <p class="text-[#fff] text-opacity-[0.7]">
                                    К вашим услугам сертифицированные инженеры и техники
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="p-[25px] animation hover-card">
                                <div
                                    class="bg-[#034ABE] w-[50px] h-[50px] rounded-[5px] bg-opacity-[0.1] flex items-center justify-center">
                                    <img class="w-[20px]" src="{{ asset('images/icons/flower.svg') }}" alt="ico" />
                                </div>
                                <h4 class="text-[#fff] text-[22px] font-[600] mt-[15px] mb-[5px]">
                                    Исследовательская команда
                                </h4>
                                <p class="text-[#fff] text-opacity-[0.7]">
                                    Генерируем свежие идеи! Мы в курсе тенденций, трендов и используем в работе только современные разработки
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="uk-visible@l">
                    <div class="overflow-hidden w-full sm:w-[360px] rounded-[10px]">
                        <img class="w-full hover:scale-110 duration-300 cursor-pointer"
                             src="{{ \App\Classes\Helper::getImagePath($advantageImg) }}" alt="ico" />
                    </div>
                </div>
                <div>
                    <ul class="flex flex-col space-y-[30px]"
                        uk-scrollspy="target: .animation; cls: uk-animation-slide-right; delay: 200; repeat: true">
                        <li>
                            <div class="p-[25px] animation hover-card">
                                <div
                                    class="bg-[#034ABE] w-[50px] h-[50px] rounded-[5px] bg-opacity-[0.1] flex items-center justify-center">
                                    <img class="w-[20px]" src="{{ asset('images/icons/car.svg') }}" alt="ico" />
                                </div>
                                <h4 class="text-[#fff] text-[22px] font-[600] mt-[15px] mb-[5px]">
                                    Быстрая подготовка заказа
                                </h4>
                                <p class="text-[#fff] text-opacity-[0.7]">
                                    Работаем во всех регионах УЗБ и срок выполнения заказа несколько дней
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="p-[25px] animation hover-card">
                                <div
                                    class="bg-[#034ABE] w-[50px] h-[50px] rounded-[5px] bg-opacity-[0.1] flex items-center justify-center">
                                    <img class="w-[20px]" src="{{ asset('images/icons/furniture.svg') }}" alt="ico" />
                                </div>
                                <h4 class="text-[#fff] text-[22px] font-[600] mt-[15px] mb-[5px]">
                                    Качественные продукты
                                </h4>
                                <p class="text-[#fff] text-opacity-[0.7]">
                                    Широкий ассортимент и постоянное расширение товарной линейки для вашего широкого выбора
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="p-[25px] animation hover-card">
                                <div
                                    class="bg-[#034ABE] w-[50px] h-[50px] rounded-[5px] bg-opacity-[0.1] flex items-center justify-center">
                                    <img class="w-[20px]" src="{{ asset('images/icons/swimming.svg') }}" alt="ico" />
                                </div>
                                <h4 class="text-[#fff] text-[22px] font-[600] mt-[15px] mb-[5px]">
                                    Индивидуальный подход
                                </h4>
                                <p class="text-[#fff] text-opacity-[0.7]">
                                    Специальные условия для оптовых покупателей
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
