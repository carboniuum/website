<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Settings
        </h2>
    </x-slot>

    <section class="uk-section uk-section-small">
        <div class="uk-container uk-container-small">

            <form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <x-admin.shared.form-input
                        id="key"
                        name="key"
                        class="w-full px-2 py-2 xl:px-4 xl:py-4 text-[#04165D] text-base xl:text-xl bg-transparent rounded-[4px] border-[1.5px] border-[#111111] border-opacity-5 focus:outline-none focus:text-opacity-100"
                        type="text"
                        placeholder="Settings key"
                        :value="old('key')"
                        :required="true"
                    />
                </div>

                <div class="mb-4">
                    <x-admin.shared.form-input
                        id="value"
                        name="value"
                        class="w-full px-2 py-2 xl:px-4 xl:py-4 text-[#04165D] text-base xl:text-xl bg-transparent rounded-[4px] border-[1.5px] border-[#111111] border-opacity-5 focus:outline-none focus:text-opacity-100"
                        type="text"
                        placeholder="Settings value"
                        :value="old('value')"
                        :required="true"
                    />
                </div>

                <div class="mb-4">
                    <x-admin.shared.form-input
                        id="icon"
                        name="icon"
                        class="w-full px-2 py-2 xl:px-4 xl:py-4 text-[#04165D] text-base xl:text-xl bg-transparent rounded-[4px] border-[1.5px] border-[#111111] border-opacity-5 focus:outline-none focus:text-opacity-100"
                        type="file"
                        placeholder="Settings Image"
                        :required="true"
                    />
                </div>

                <div class="mb-4">
                    <button
                        type="submit"
                        class="uk-button uk-button-primary bg-[#1e87f0]"
                    >
                        Submit
                    </button>
                </div>

            </form>
        </div>
    </section>

</x-app-layout>
