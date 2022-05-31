<div>
    <div class="flex flex-col items-center w-full">
        <h3 class="text-[#333333] text-[24px] font-[700]">
            Оставьте заявку
        </h3>

        @if(session()->has('ok'))
            <div class="uk-alert-success" uk-alert>
                <a class="uk-alert-close" uk-close></a>
                {{ session('ok') }}
            </div>
        @endif

        @if(session()->has('error'))
            <div class="uk-alert-danger" uk-alert>
                <a class="uk-alert-close" uk-close></a>
                {{ session('error') }}
            </div>
        @endif

        <form wire:submit.prevent="submit">
            @error('name')
                <span class="text-red-600">
                    {{ $message }}
                </span>
            @enderror

            <input
                wire:model="name"
                class="uk-input w-full rounded my-6 outline-[#034ABE] uk-form-width-medium h-[55px]" type="text"
                placeholder="Введите ваше имя"
            />

            @error('number')
                <span class="text-red-600">
                    {{ $message }}
                </span>
            @enderror

            <input
                wire:model="number"
                class="uk-input w-full rounded outline-[#034ABE] uk-form-width-medium h-[55px]" type="number"
                placeholder="Введите свой номер"
            />
            <button class="uk-button uk-button-default w-full bg-[#034ABE] text-[#fff] rounded py-2 text-[22px] mt-6">
                OK
            </button>
        </form>
    </div>
</div>
