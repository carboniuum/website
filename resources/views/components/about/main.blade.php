@props([
    'content' => '',
    'aboutImg' => '',
])

<main class="uk-section mt-[100px] mb-[60px]">
    <div class="uk-container">
        <div class="flex items-center justify-between">
            <h2 class="title-2 main-color">О нас    </h2>
        </div>
        <div class="text-[#181818] inline-flex items-center space-x-[8px] bg-[#E9F0F8] py-[5px] px-[12px] mt-[8px]">
            <a href="{{ route('home') }}" class="text-[#181818] text-[12px]">Главная</a>
            <div class="w-[1px] h-[10px] bg-[#181818] rotate-[12deg]"></div>
            <span class="text-[#181818] text-[12px]">О нашей компании</span>
        </div>
        <div>
            <div
                class="my-[25px] uk-height-large uk-background-cover uk-light uk-flex"
                loading="lazy"
                uk-parallax="bgy: -200" style="background-image: url('{{ \App\Classes\Helper::getImagePath($aboutImg) }}');"
            ></div>

            <div class="my-5">
                <p id="toggleText" class="font-[500] text-[14px] sm:text-[18px] text-[#6B7280]">
                    {!! $content !!}
                </p>
            </div>
            <div class="flex space-x-[22px] items-center">
                <div class="text-[#fff]">
                    <a href="#" id="toggleBtn" class="bg-[#034ABE] rounded-[5px] py-[8px] px-[20px]">
                        Раскрыть
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>
