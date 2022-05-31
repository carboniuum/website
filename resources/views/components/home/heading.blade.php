@props([
    'title' => '',
    'subtitle' => '',
    'headerImg' => '',
])

<main
    class="main-section mt-[100px] sm:mt-[30px] lg:mt-[100px] uk-section uk-position-relative uk-overflow-hidden z-[1] relative"
    >
    <div>
        <ul>
            <li class="main-contents-wrapper uk-height-1-1 uk-cover-container sm:min-h-[100vh]"
                style="min-height: 600px !important">
                <div
                    class="uk-container uk-margin-remove-left left-1/2 top-1/2 absolute -translate-x-1/2 -translate-y-1/2 w-full">
                    <div class="uk-container uk-container-large relative uk-margin-remove-left">
                        <div class="uk-child-width-1-2@m uk-flex-middle uk-grid-small" uk-grid>
                            <div uk-scrollspy="target: .animLeft; cls: uk-animation-slide-left; delay: 300;">
                                <div class="lg:pr-[40px]">
                                    <h1 class="title animLeft">
                                        {{ $title }}
                                    </h1>
                                    <p class="text-lg font-medium text-opacity-[0.7] mt-[30px] animLeft">
                                        {{ $subtitle }}
                                    </p>
                                </div>
                            </div>
                            <div class="uk-visible@m" uk-scrollspy="cls: uk-animation-slide-right; delay: 300">
                                <div class="overflow-hidden w-[320px] rounded-[10px] lg:w-[400px] xl:w-[480px]">
                                    <img
                                        class="w-full hover:scale-110 duration-300 cursor-pointer"
                                        src="{{ \App\Classes\Helper::getImagePath($headerImg) }}" alt="main"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <img class="absolute right-0 top-[100px] z-[-1] uk-visible@s" src="{{ asset('images/icons/vector.svg') }}" alt="vector" />
</main>
