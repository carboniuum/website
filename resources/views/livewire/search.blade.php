<div class="uk-modal-dialog uk-modal-body md:p-[30px]">
    <div>
        <div class="flex items-center bg-[#EFEFEF]">
            <svg class="stroke-current ml-[15px]" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.5 21C16.7467 21 21 16.7467 21 11.5C21 6.25329 16.7467 2 11.5 2C6.25329 2 2 6.25329 2 11.5C2 16.7467 6.25329 21 11.5 21Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M22 22L20 20" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <input
                wire:model="query"
                wire:keydown.tab="init"
                wire:keydown.arrow-up="decrementHighlight"
                wire:keydown.arrow-down="incrementHighlight"
                wire:keydown.enter="select"
                class="px-2.5 py-4 border-none w-full focus:outline-none focus:border-transparent bg-[#EFEFEF] text-[#1d1d1b]"
                placeholder="Search..."
                type="text"
            />
        </div>
    </div>

    <h3 class="text-[16px] mt-[30px] text-[#111] font-600 uk-text-uppercase mb-[5px] text-sm" style="font-family: 'Gilroy';">
        {{ __('company__products') }}
    </h3>
    @if(!empty($query))
        <ul class="p-2.5">
            @forelse($products as $k => $v)
                <li
                    class="uk-parent text-[#111] border-b-[1px] p-4 uk-flex uk-flex-middle {{ $highlightedIndex == $k ? 'bg-[#d3d3d3]' : '' }}"
                >
                    <div>
                        <img
                            src="{{ \App\Classes\Helper::getImagePath($v['cover']) }}"
                            alt="img_{{ $v['id'] }}"
                            class="w-10 h-10 rounded-full mr-4"
                        />
                    </div>
                    <div>
                        <a
                            href="{{ route('product.show', ['id' => $v['id'], 'locale' => app()->getLocale()]) }}"
                            class="hover-link text-[#111] font-500"
                        >
                            {{ $v['name'][app()->getLocale()] }}
                        </a>
                    </div>
                </li>
            @empty
                <div>Nothing found... </div>
            @endforelse
        </ul>
    @endif
</div>
