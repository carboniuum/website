<footer class="uk-section">
    <div class="uk-container">
        <ul class="p-0 sm:justify-between uk-grid-large" uk-grid>
            <li class="sm:w-[360px]">
                <a href="{{ route('home') }}" class="inline-block">
                    <img class="w-[140px]" src="{{ asset('images/icons/logo.svg') }}" alt="logo" />
                </a>
                <p class="main-color-p sm:w-[300px] my-[25px]">
                    <b>Оставайтесь на связи</b>
                </p>
                <div class="flex items-center">
                    <a href="{{ $instagram->value }}"
                       class="icon icon-collapse flex items-center justify-center bg-[#034ABE] w-[40px] h-[40px] rounded-full">
                        <img src="{{ \App\Classes\Helper::getImagePath($instagram->icon) }}" alt="ico" />
                    </a>
                    <a href="{{ $youtube->value }}"
                       class="icon icon-collapse flex items-center justify-center bg-[#034ABE] w-[40px] h-[40px] rounded-full">
                        <img src="{{ \App\Classes\Helper::getImagePath($youtube->icon) }}" alt="ico" />
                    </a>
                    <a href="{{ $telegram->value }}"
                       class="icon icon-collapse flex items-center justify-center bg-[#034ABE] w-[40px] h-[40px] rounded-full">
                        <img src="{{ \App\Classes\Helper::getImagePath($telegram->icon) }}" alt="ico" />
                    </a>
                </div>
            </li>
            <li class="flex flex-col space-y-[15px] text-[#030A1B] w-[50%] sm:w-auto">
                <h3 class="main-color font-[600] text-[22px] pb-[10px]">Веб-сайт</h3>
                <a href="{{ route('home') }}" class="main-color-p font-medium line-animation">Главная</a>
                <a href="{{ route('brands') }}" class="main-color-p font-medium line-animation">Продукция</a>
                <a href="{{ route('about') }}" class="main-color-p font-medium line-animation">О нас</a>
                <a href="{{ route('home') . '#clients' }}" class="main-color-p font-medium line-animation">Клиенты</a>
            </li>
            <li class="flex flex-col space-y-[15px] text-[#030A1B]">
                <h3 class="main-color font-[600] text-[22px] pb-[10px]">Продукция</h3>
                @foreach($brands as $brand)
                    <a href="{{ route('brand', ['id' => $brand->id]) }}" class="main-color-p font-medium line-animation">
                        {{ $brand->name }}
                    </a>
                @endforeach
            </li>
            <li class="flex flex-col space-y-[15px] text-[#030A1B]">
                <h3 class="main-color font-[600] text-[22px] pb-[10px]">Наши контакты</h3>
                <a href="#" class="main-color-p font-medium line-animation">г.Ташкент, Мирзо Улугбекский р-н,</a>
                <a href="#" class="main-color-p font-medium line-animation">ул. Мирзо Улугбек 44/2</a>
                @foreach($numbers as $number)
                    <a
                        href="{{ \App\Classes\Helper::formatNumber($number->value) }}"
                        class="main-color-p font-medium line-animation">
                        {{ $number->value }}
                    </a>
                @endforeach
            </li>
        </ul>
    </div>
</footer>
