@props([
    'partners' => null,
])

<section id="clients" class="uk-section clients-section uk-overflow-hidden relative"
         uk-scrollspy="target: .animRight; cls: uk-animation-slide-left; delay: 300;">
    <div class="uk-container">
        <h2 class="title-2 main-color animRight md:mb-[-55px]">
            Доверяет нам
        </h2>
        <div>
            <div uk-slider="autoplay: true">
                <div class="uk-position-relative uk-visible-toggle" tabindex="-1">
                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid pt-[40px] md:pt-[100px]">
                        @if($partners)
                            @foreach($partners as $partner)
                                <li class="flex items-center justify-center">
                                    <img
                                        class="w-full h-full"
                                        loading="lazy"
                                        src="{{ \App\Classes\Helper::getImagePath($partner->image) }}"
                                        alt="client"
                                    />
                                </li>
                            @endforeach
                        @endif
                    </ul>
                    <a class="clients-slider-left-btn uk-position-center-left uk-position-small group uk-icon uk-slidenav-previous uk-slidenav"
                       href="#" uk-slidenav-previous="" uk-slider-item="previous">
                        <svg class="group-hover:mr-[10px] duration-100" width="18" height="18" viewBox="0 0 18 18" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.17749 13.5525L2.62499 8.99999L7.17749 4.44749" stroke="#fff" stroke-width="1.5"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M15.375 9L2.7525 9" stroke="#fff" stroke-width="1.5" stroke-miterlimit="10"
                                  stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <svg width="14" height="24" viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg">
                            <polyline fill="none" stroke="#fff" stroke-width="1.4" points="12.775,1 1.225,12 12.775,23 "></polyline>
                        </svg>
                    </a>
                    <a class="clients-slider-right-btn uk-position-center-right uk-position-small group uk-icon uk-slidenav-next uk-slidenav"
                       href="#" uk-slidenav-next="" uk-slider-item="next">
                        <svg class="group-hover:ml-[10px] duration-100" width="18" height="18" viewBox="0 0 18 18" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.8225 4.44751L15.375 9.00001L10.8225 13.5525" stroke="#fff" stroke-width="1.5"
                                  stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M2.625 9H15.2475" stroke="#fff" stroke-width="1.5" stroke-miterlimit="10"
                                  stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <svg width="14" height="24" viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg">
                            <polyline fill="none" stroke="#fff" stroke-width="1.4" points="1.225,23 12.775,12 1.225,1 "></polyline>
                        </svg>
                    </a>
                </div>

                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin" style="padding-bottom: 0"></ul>
            </div>
        </div>
    </div>
</section>
