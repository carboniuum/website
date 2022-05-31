<div
    class="bg-[#1E252B] rounded-[10px] flex flex-col items-center text-center py-[40px] sm:py-[70px] px-[22px] relative">
    <h2 class="title-2 text-[#fff]">Есть вопрос? Давайте обсудим.</h2>
    <p class="text-[#fff] text-opacity-[0.7] mt-[10px] md:w-[600px]">
        Наша команда всегда готова вам помочь, оставьте заявку, и мы скоро свяжемся с вами!
    </p>
    <form
        wire:submit.prevent="submit"
        class="uk-margin-large-top flex flex-col lg:flex-row space-y-[13px] lg:space-y-0 lg:space-x-[13px] w-full sm:w-[70%] lg:w-auto relative z-[4]"
    >

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

        <div class="form-input-anim">
            <input
                id="name"
                type="text"
                wire:model="name"
                autocomplete="off"
                required
                class="w-full lg:w-[300px] py-[20px] px-[30px] rounded-[10px] focus:outline-none placeholder:text-[#535050] placeholder:text-opacity-[0.5] text-white bg-[#242C32]"
            />
            <label for="name" class="label-name">
                <span class="content-name">Введите ваше имя</span>
            </label>
        </div>
        <div class="relative">
            <div class="form-input-anim">
                <input
                    type="text"
                    wire:model="number"
                    autocomplete="off"
                    required
                    class="w-full lg:w-[465px] py-[20px] px-[30px] rounded-[10px] focus:outline-none placeholder:text-[#535050] placeholder:text-opacity-[0.5] text-white bg-[#242C32]"
                />
                <label for="number" class="label-name">
                    <span class="content-name">Введите свой номер</span>
                </label>
            </div>
            <div
                class="uk-visible@s main-background absolute right-[8px] top-1/2 -translate-y-1/2 rounded-[10px] font-medium">
                <button class="submit third py-[14px] px-[50px]">
                    Позвоните мне
                </button>
            </div>
        </div>
        <div class="inline-block">
            <div class="uk-hidden@s main-background rounded-[10px] font-medium">
                <button class="submit third py-[14px] px-[50px] w-full flex justify-center">
                    Позвоните мне
                </button>
            </div>
        </div>
    </form>

    <img
        uk-scrollspy="cls: uk-animation-kenburns; repeat: true" class="absolute left-0 top-[20px]"
        src="{{ asset('images/icons/pattern.svg') }}"
        alt="pattern"
        style="animation-direction: alternate; animation-iteration-count: infinite; animation-fill-mode: forwards;"
    />

    <img
        uk-scrollspy="cls: uk-animation-kenburns; repeat: true" class="absolute right-[20px] bottom-0"
        src="{{ asset('images/icons/pattern-2.svg') }}"
        alt="pattern"
        style="animation-direction: alternate; animation-iteration-count: infinite; animation-fill-mode: forwards;"
    />

    <div class="mt-4">
        @error('name')
            <span class="text-red-500">
                {{ $message }}
            </span>
        @enderror

        @error('number')
            <span class="text-red-500">
                {{ $message }}
            </span>
        @enderror
    </div>
</div>
