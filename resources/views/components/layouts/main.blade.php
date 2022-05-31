<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    {!! \Artesaos\SEOTools\Facades\SEOMeta::generate() !!}
    {!! \Artesaos\SEOTools\Facades\OpenGraph::generate() !!}

    <link rel="icon" href="{{ asset('logo.svg') }}" />
    <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
    <livewire:styles />
</head>
<body>

<div class="bg-[#034ABE] fixed right-0 top-[490px] rounded-[5px] z-[3] uk-visible@m">
    <div class="px-[15px] py-[30px] relative flex flex-col items-center justify-center group">
        <img src="{{ asset('images/icons/direction-right-arrow.svg') }}"
             class="absolute left-[-10px] top-1/2 -translate-y-1/2 group-hover:left-0 duration-300" alt="" />
        <a href="{{ \App\Classes\Helper::formatNumber($number->value) }}" class="icon icon-collapse flex items-center justify-center">
            <img width="24px" src="{{ \App\Classes\Helper::getImagePath($number->icon) }}" alt="" />
        </a>
        <a href="{{ $instagram->value }}" class="icon icon-collapse flex items-center justify-center">
            <img width="24px" src="{{ \App\Classes\Helper::getImagePath($instagram->icon) }}" alt="" />
        </a>
        <a href="{{ $youtube->value }}" class="icon icon-collapse flex items-center justify-center">
            <img width="24px" src="{{ \App\Classes\Helper::getImagePath($youtube->icon) }}" alt="" />
        </a>
    </div>
</div>

<div id="overlay" class="fixed top-0 left-0 w-full h-full z-[999999999]">
    <div class="bg-[#030A1B] w-full h-full flex items-center flex-col justify-center">
        <div class="lds-ring">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>

<div id="connectModal" class="uk-flex-top" uk-modal>
    <livewire:contact-form />
</div>

<x-layouts.header
    :number="$number"
/>

{{ $slot }}

<x-layouts.footer
    :instagram="$instagram"
    :telegram="$telegram"
    :youtube="$youtube"
    :numbers="$numbers"
    :brands="$brands"
/>

<script src="{{ asset('js/uikit-icons.min.js') }}"></script>
<script src="{{ asset('js/uikit.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<livewire:scripts />

</body>
</html>
