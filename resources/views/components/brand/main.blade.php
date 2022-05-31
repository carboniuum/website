<main class="uk-section mt-[100px]">
    <div class="uk-container">
        <div class="flex items-center justify-between">
            <h2 class="title-2 main-color">Продукты {{ $brand->name }}</h2>
        </div>
        <div
            class="text-[#181818] inline-flex items-center space-x-[8px] bg-[#E9F0F8] py-[5px] px-[12px] mt-[8px]"
        >
            <a href="{{ route('home') }}" class="text-[#181818] text-[12px]">Главная</a>
            <div class="w-[1px] h-[10px] bg-[#181818] rotate-[12deg]"></div>
            <a href="{{ route('brands') }}" class="text-[#181818] text-[12px]">Продукция</a>
            <div class="w-[1px] h-[10px] bg-[#181818] rotate-[12deg]"></div>
            <span class="text-[#181818] text-[12px]">{{ $brand->name }}</span>
        </div>
        <div>
            @if($products)
                <ul
                    class="uk-child-width-1-3@m uk-child-width-1-2 uk-grid-small uk-grid-match mt-[35px]"
                    uk-grid
                >
                    @foreach($products as $product)
                        <li>
                            <div
                                class="bg-[#fff] relative rounded-[10px] flex flex-col items-center shadow-bottom p-[10px] sm:p-[30px]"
                            >
                                <img
                                    class="w-full rounded-t-[10px] cursor-pointer hover:scale-105 duration-200"
                                    loading="lazy"
                                    src="{{ \App\Classes\Helper::getImagePath($product->cover) }}"
                                    alt="product"
                                />
                                <div class="text-[#fff] uk-margin-top">
                                    <h3 class="text-lg sm:text-[22px] text-[#030A1B] font-[600]">
                                        {{ $product->name }}
                                    </h3>
                                    <p class="text-[#030A1B] text-[15px] pb-[70px]">
                                        {{ $product->short_description }}
                                    </p>
                                    <div
                                        class="mt-[40px] absolute right-[10px] sm:right-[30px] sm:bottom-[30px] bottom-[20px]"
                                    >
                                        <a
                                            href="{{ route('product', ['id' => $product->id]) }}"
                                            class="bg-[#034ABE] rounded-[8px] py-[8px] px-[20px]"
                                        >
                                            Подробнее
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</main>
