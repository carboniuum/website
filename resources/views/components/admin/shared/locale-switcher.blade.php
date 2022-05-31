<?php
    $locales = config('constants.locales');
?>

<div>
    <a href="#" class="nav-link hover:text-[#111] hover:no-underline py-[12px] px-[18px] text-[#111] bg-[#EFEFEF] focus:bg-[#DA0302] focus:text-[#fff] duration-200 lang inline-flex font-500 items-center text-lg group" style="animation-duration: .8s;">
        {{ $locales[app()->getLocale()] }}
        <svg class="ml-[6px] group-focus:rotate-[-180deg] duration-200 stroke-current" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.6199 5.22083L7.81655 9.02416C7.36738 9.47333 6.63238 9.47333 6.18322 9.02416L2.37988 5.22083" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </a>
    <div class="uk-padding-remove" style="min-width: 100px;" uk-dropdown="pos: bottom-justify;animation: uk-animation-slide-top-small; duration: 200; mode: click">
        <ul class="uk-grid uk-grid-small uk-flex-column uk-padding-small pl-[16px]" uk-grid>
            @foreach($locales as $key => $value)
                @if ($key != app()->getLocale())
                    <li class="uk-width-auto text-[#111]">
                        <a
                            href="{{ route('change.locale', ['locale' => $key]) }}"
                            class="text-lg hover-link text-[#111] font-500"
                        >
                            {{ $value }}
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</div>
