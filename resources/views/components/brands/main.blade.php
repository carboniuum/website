@props([
    'brands' => null,
])

<section class="uk-section bg-[#F4F4F4] mt-[120px] pb-[140px] sm:pb-[260px]">
    <div
        class="uk-container"
        uk-scrollspy="target: .animTop; cls: uk-animation-slide-top; delay: 300; repeat: true"
    >
        <h1 class="capitalize title-2 text-center animTop">
            Все продукты
        </h1>
        <p class="text-center text-opacity-[0.78] sm:w-[430px] mx-auto mt-[25px] animTop">
            Мы предлагаем качественные и проверенные строительные материалы для вашего строительства
        </p>
        <div class="uk-margin-large-top">
            @if($brands)
                <ul
                    class="uk-grid-small uk-child-width-1-3@l uk-child-width-1-2@s uk-grid-match product-list"
                    uk-grid
                >
                    @foreach($brands as $brand)
                        <li
                        >
                            <div class="p-[30px] rounded-[15px] brand-card">
                                <img
                                    src="{{ \App\Classes\Helper::getImagePath($brand->image_dark) }}"
                                    alt="{{ $brand->name }}"
                                />
                                <p class="text-opacity-[0.78] mt-[32px]">
                                    {{ $brand->description }}
                                </p>
                                <div class="mt-[35px] flex justify-end">
                                    <a
                                        href="{{ route('brand', ['id' => $brand->id]) }}"
                                        class="glow-on-hover font-[600] rounded-[8px] py-[8px] px-[35px]"
                                    >
                                        Подробнее
                                    </a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</section>
