@props([
    'brands' => null,
])

<section class="uk-section bg-[#1E252B] text-[#fff] mt-[-20px] sm:mt-0 relative z-[2]">
    <div class="uk-container uk-padding"
         uk-scrollspy="target: .animTop; cls: uk-animation-slide-top; delay: 300; repeat: true">
        <h1 class="capitalize title-2 text-[#fff] text-center animTop">
            Все продукты
        </h1>
        <p class="text-center text-[#fff] text-opacity-[0.78] sm:w-[430px] mx-auto mt-[25px] animTop">
            Мы предлагаем качественные и проверенные строительные материалы для вашего строительства
        </p>
        <div class="uk-margin-large-top">
            <ul class="uk-grid-small uk-child-width-1-3@l uk-child-width-1-2@s uk-grid-match product-list" uk-grid>
                @if($brands)
                    @foreach($brands as $brand)
                        <li>
                            <div class="p-[30px] rounded-[15px] hover-card">
                                <img src="{{ \App\Classes\Helper::getImagePath($brand->image) }}" alt="logo" />
                                <p class="text-[#fff] text-opacity-[0.78] mt-[32px]">
                                    {{ $brand->description }}
                                </p>
                                <div class="mt-[35px] flex justify-end">
                                    <a href="{{ route('brand', ['id' => $brand->id]) }}" class="glow-on-hover rounded-[8px] py-[8px] px-[35px]">
                                        Подробнее
                                    </a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                @endif
            </ul>
            
            <div class="rounded-[10px] font-medium uk-margin-large-top flex justify-center">
                <a href="{{ route('brands') }}"
                   class="text-[#034ABE] border border-[#fff] border-opacity-[0.1] rounded-[8px] py-[14px] px-[50px] hover:bg-[#034ABE] hover:text-white duration-200">
                    Посмотреть все
                </a>
            </div>
            
        </div>
    </div>
</section>
