<main class="uk-section mt-[100px] pb-10">
    <div class="uk-container">
        <div class="flex items-center justify-between">
            <h2 class="title-2 main-color">{{ $product->name }}</h2>
            <!-- <a href="#" class="text-[#034ABE] font-[600]">VIEW ALL</a> -->
        </div>
        <div class="text-[#181818] inline-flex items-center space-x-[8px] bg-[#E9F0F8] py-[5px] px-[12px] mt-[8px]">
            <a href="{{ route('home') }}" class="text-[#181818] text-[12px]">Главная</a>
            <div class="w-[1px] h-[10px] bg-[#181818] rotate-[12deg]"></div>
            <a href="{{ route('brands') }}" class="text-[#181818] text-[12px]">Продукция</a>
            <div class="w-[1px] h-[10px] bg-[#181818] rotate-[12deg]"></div>
            <a href="{{ route('brand', ['id' => $brand->id]) }}" class="text-[#181818] text-[12px]">{{ $brand->name }}</a>
            <div class="w-[1px] h-[10px] bg-[#181818] rotate-[12deg]"></div>
            <span href="#" class="text-[#181818] text-[12px]">{{ $product->name }}</span>
        </div>
        <div class="mt-[30px]" uk-grid uk-scrollspy="target: .anim; cls: uk-animation-fade; delay: 100; repeat: true">
            <div class="uk-width-expand@m">
                <div class="uk-grid-small items-center" uk-grid uk-lightbox="animation: slide">
                    <div class="uk-width-1-3@s">
                        <div class="uk-grid-small uk-child-width-1-1@s uk-child-width-1-3 uk-grid-match" uk-grid>
                            @php($images = \App\Classes\Helper::getImagePath($product->images))
                            @if(is_array($images))
                                @for($i = 0; $i < count($images) - 1; $i++)
                                <div>
                                    <a class="w-full h-full" href="{{ $images[$i] }}">
                                        <img class="w-full sm:h-[220px]" loading="lazy" src="{{ $images[$i] }}" width="100%" height="1200" alt="img">
                                    </a>
                                </div>
                                @endfor
                            @endif
                        </div>
                    </div>
                    <div class="uk-width-expand">
                        <a href="{{ is_array($images) ? end($images) : $images }}">
                            <img class="w-full h-full" loading="lazy" src="{{ is_array($images) ? end($images) : $images }}" width="100%" height="1200"  alt="img">
                        </a>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-3@m">
                <div class="flex flex-col items-center md:block">
                    <p class="text-[#374151] font-[400] text-[20px] mb-[40px]">
                        {{ $product->name }}
                    </p>
                    <a
                        href="#modal-center" uk-toggle
                        class="bg-[#034ABE] text-[#fff] block text-center p-[20px] rounded mb-[40px] hover:bg-[#1E252B] duration-300"
                    >
                          <span class="text-[16px] font-[700] uppercase w-full h-full">
                            Получить консультацию
                          </span>
                    </a>
                </div>
                
                @php($files = \App\Classes\Helper::getImagePath($product->files))
                
                @php($file_names = explode(',', $product->file_names))
                
               
                @if (is_array($files))
                    @if (count($files) > 0)
                        <div class="uk-child-width-1-3@m" uk-grid>
                            @for ($i = 0; $i < count($files); $i++)
                                <div>
                                    <div>
                                        <img style="width: 50px;" src="https://upload.wikimedia.org/wikipedia/commons/8/87/PDF_file_icon.svg" alt="pdf" />
                                    </div>
                                    <div>
                                        <a target="_blank" href="{{ is_array($files) ? $files[$i] : $files  }}">{{ is_array($file_names) ? $file_names[$i] : $file_names }}</a>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    @endif
                @else
                    @if ($product->files)
                        <div class="uk-child-width-1-3@m" uk-grid>
                            <div>
                                <div>
                                    <img style="width: 50px;" src="https://upload.wikimedia.org/wikipedia/commons/8/87/PDF_file_icon.svg" alt="pdf" />
                                </div>
                                <div>
                                    <a target="_blank" href="{{ $files }}">{{ $file_names[0] }}</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endif
            </div>
        </div>
        <div class="my-5 mt-[60px] sm:mt-[120px]">
            <div class="flex gap-4 my-5">
                <h3 class="text-[16px] text-[#1F2937] font-[600]">Описание</h3>
                <img src="{{ asset('images/icons/dash.svg') }}" alt="icon_1" />
            </div>
            <p class="font-[500] text-[14px] sm:text-[18px] text-[#6B7280]">
                {!! $product->description !!}
            </p>
            <div class="flex gap-4 my-5">
                <h3 class="text-[16px] text-[#1F2937] font-[600]">Характеристика</h3>
            </div>
        </div>

        @if(count($productAttributes) > 0)
            <div class="shadow-inner shopping-table rounded-[8px] overflow-hidden" style="padding-top: 10px;">
            
                <ul class="header">
                    <li class="uk-text-left" style="width: 50%;">
                        <h4>Название</h4>
                    </li>
                    {{--
                    <li>
                        <h4>Описание</h4>
                    </li>
                    <li>
                        <h4>Атрибут 1</h4>
                    </li>
                    <li>
                        <h4>Атрибут 2</h4>
                    </li>
                    --}}
                    <li class="uk-text-left" style="width: 50%;">
                        <h4>Атрибут</h4>
                    </li>
                </ul>
                @foreach($productAttributes as $attribute)
                    <ul class="body">
                        <li class="uk-text-left" style="width: 50%;">
                            <h5>{{ $attribute->name }}</h5>
                        </li>
                        {{--<li x-data="{ open: false }">
                            <p x-on:click="open = ! open" x-bind:class="open ? 'h-auto' : 'h-[40px]'" class="cursor-pointer overflow-hidden">
                                {{ $attribute->description }}
                            </p>
                        </li>
                        <li>
                            <p>{{ $attribute->attribute_1 }}</p>
                        </li>
                        <li>
                            <p>{{ $attribute->attribute_2 }}</p>
                        </li>--}}
                        <li class="uk-text-left" style="width: 50%;">
                            <p>{{ $attribute->attribute_3 }}</p>
                        </li>
                    </ul>
                @endforeach
            </div>
        @endif
    </div>
</main>

<div id="modal-center" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical rounded p-[20px] sm:p-[80px]">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        @livewire('modal-form')
    </div>
</div>
