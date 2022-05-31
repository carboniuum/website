<div
    id="header"
    uk-sticky="show-on-up: true; animation: uk-animation-slide-top; sel-target: .header; cls-active: uk-navbar-sticky bg-[#fff] border-b-2 border-[#034ABE] border-opacity-[0.22]; cls-inactive: uk-navbar-transparent z-[9]; top: 200;"
    class="navbar uk-sticky"
>
    <header class="header absolute top-0 left-0 w-full uk-navbar-transparent z-[9]"
            uk-scrollspy="target: .animLeft; cls: uk-animation-slide-left; delay: 100; repeat: true">
        <div class="uk-container">
            <nav class="uk-flex uk-flex-between uk-flex-middle py-[30px]">
                <div class="uk-navbar-left uk-padding-remove-left flex items-center space-x-[170px]">
                    <a href="{{ route('home') }}">
                        <img class="uk-animation-fade w-[100px] sm:w-auto" src="{{ asset('images/icons/logo.svg') }}" alt="Logo" />
                    </a>
                </div>

                <div class="uk-navbar-right">
                    <div class="uk-visible@l uk-margin-remove-top flex items-center space-x-[28px]">
                        <ul class="uk-flex-middle uk-grid list" uk-grid>
                            <li class="animLeft">
                                <a href="{{ route('home') }}" class="nav-link">Главная</a>
                            </li>
                            <li class="animLeft">
                                <a href="{{ route('brands') }}" class="nav-link">Продукция</a>
                            </li>
                            <li class="animLeft">
                                <a href="{{ route('about') }}" class="nav-link">О нас</a>
                            </li>
                            <li class="animLeft">
                                <a href="{{ route('home') . '#clients' }}" class="nav-link">Клиенты</a>
                            </li>
                        </ul>
                        <div class="inline-block text-[#fff]"
                             uk-scrollspy="cls: uk-animation-slide-right; delay: 100; repeat: true">
                            <a href="{{ \App\Classes\Helper::formatNumber($number->value) }}"
                               class="bg-[#034ABE] rounded-[5px] py-[10px] px-[30px] animBtnTop text-[#fff]">
                                <div class="flex items-center relative z-[3] space-x-[14px]">
                                    <img src="{{ \App\Classes\Helper::getImagePath($number->icon) }}" alt="phone" />
                                    <div class="flex flex-col">
                                        <span class="font-[700]">{{ $number->value }}</span>
                                        <span class="text-sm">Бесплатная консультация</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="uk-hidden@l">
                        <div class="text-[#1d1d1b]">
                            <a href="javascript:void(0);" uk-toggle="target: #offcanvas-flip" class="text-[#1d1d1b] hover-link"
                               aria-expanded="false">
                                <ul class="uk-flex uk-flex-column space-y-[3px] items-end">
                                    <li>
                                        <hr class="border-none w-[30px] h-[3px] bg-[#030A1B] rounded-[6px]" />
                                    </li>
                                    <li>
                                        <hr class="border-none w-[28px] h-[3px] bg-[#030A1B] rounded-[6px]" />
                                    </li>
                                    <li>
                                        <hr class="border-none w-[24px] h-[3px] bg-[#030A1B] rounded-[6px]" />
                                    </li>
                                </ul>
                            </a>
                        </div>

                        <div id="offcanvas-flip" uk-offcanvas="flip: true; overlay: true" class="uk-offcanvas">
                            <div class="uk-offcanvas-bar mobile-navbar">
                                <div class="flex justify-end">
                                    <button class="uk-offcanvas-close uk-icon uk-close" type="button" uk-close="">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path
                                                d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z">
                                            </path>
                                        </svg>
                                        <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                                            <line fill="none" stroke="#000" stroke-width="1.1" x1="1" y1="1" x2="13" y2="13"></line>
                                            <line fill="none" stroke="#000" stroke-width="1.1" x1="13" y1="1" x2="1" y2="13"></line>
                                        </svg>
                                    </button>
                                </div>

                                <ul
                                    class="mt-[30px] items-end uk-flex-column uk-grid-small uk-text-uppercase uk-child-width-1-1 uk-grid uk-grid-stack"
                                    uk-grid
                                    uk-scrollspy="target: .animBottom; cls: uk-animation-slide-top-small; delay: 100; repeat: true"
                                >
                                    <li class="uk-flex uk-flex-right">
                                        <a href="{{ route('home') }}" class="font-500 animBottom" style="visibility: hidden">
                                            Главная
                                        </a>
                                    </li>
                                    <div>
                                        <hr class="border-none w-full h-[1px] bg-[#fff] bg-opacity-[0.06]" />
                                    </div>
                                    <li class="uk-flex uk-flex-right">
                                        <a href="{{ route('brands') }}" class="font-500 animBottom" style="visibility: hidden">
                                            Продукция
                                        </a>
                                    </li>
                                    <div>
                                        <hr class="border-none w-full h-[1px] bg-[#fff] bg-opacity-[0.06]" />
                                    </div>
                                    <li class="uk-flex uk-flex-right">
                                        <a href="{{ route('about') }}" class="font-500 animBottom" style="visibility: hidden">
                                            О нас
                                        </a>
                                    </li>
                                    <div>
                                        <hr class="border-none w-full h-[1px] bg-[#fff] bg-opacity-[0.06]" />
                                    </div>
                                    <li class="uk-flex uk-flex-right">
                                        <a href="{{ route('home') . '#clients' }}" class="font-500 animBottom" style="visibility: hidden">
                                            Клиенты
                                        </a>
                                    </li>
                                    <div>
                                        <hr class="border-none w-full h-[1px] bg-[#fff] bg-opacity-[0.06]" />
                                    </div>
                                    <li class="uk-flex uk-flex-right">
                                        <a href="{{ \App\Classes\Helper::formatNumber($number->value) }}" class="font-500 animBottom" style="visibility: hidden">
                                            {{ $number->value }}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
</div>
