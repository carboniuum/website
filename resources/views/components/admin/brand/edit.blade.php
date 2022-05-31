<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Brand
        </h2>
    </x-slot>

    <section class="uk-section uk-section-small">
        <div class="uk-container uk-container-small">

            <form action="{{ route('brand.update', ['brand' => $brand->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <x-admin.shared.form-input
                        id="name"
                        name="name"
                        class="w-full px-2 py-2 xl:px-4 xl:py-4 text-[#04165D] text-base xl:text-xl bg-transparent rounded-[4px] border-[1.5px] border-[#111111] border-opacity-5 focus:outline-none focus:text-opacity-100"
                        type="text"
                        placeholder="Brand name"
                        :value="$brand->name"
                        :required="true"
                    />
                </div>
                
                <div class="mb-4">
                    <x-admin.shared.form-input
                        id="sort"
                        name="sort"
                        class="w-full px-2 py-2 xl:px-4 xl:py-4 text-[#04165D] text-base xl:text-xl bg-transparent rounded-[4px] border-[1.5px] border-[#111111] border-opacity-5 focus:outline-none focus:text-opacity-100"
                        type="text"
                        placeholder="Sort number"
                        :value="$brand->sort"
                        :required="true"
                    />
                </div>

                <div class="mb-4">
                    <x-admin.shared.form-input
                        id="description"
                        name="description"
                        class="w-full px-2 py-2 xl:px-4 xl:py-4 text-[#04165D] text-base xl:text-xl bg-transparent rounded-[4px] border-[1.5px] border-[#111111] border-opacity-5 focus:outline-none focus:text-opacity-100"
                        type="text"
                        placeholder="Brand description"
                        element="textarea"
                        :value="$brand->description"
                        :required="true"
                    />
                </div>

                <div class="mb-4">
                    <x-admin.shared.form-input
                        id="image"
                        name="image"
                        class="w-full px-2 py-2 xl:px-4 xl:py-4 text-[#04165D] text-base xl:text-xl bg-transparent rounded-[4px] border-[1.5px] border-[#111111] border-opacity-5 focus:outline-none focus:text-opacity-100"
                        type="file"
                        placeholder="Brand Image"
                        :required="true"
                    />
                </div>
                
                <div class="mb-4">
                    <x-admin.shared.form-input
                        id="image_dark"
                        name="image_dark"
                        class="w-full px-2 py-2 xl:px-4 xl:py-4 text-[#04165D] text-base xl:text-xl bg-transparent rounded-[4px] border-[1.5px] border-[#111111] border-opacity-5 focus:outline-none focus:text-opacity-100"
                        type="file"
                        placeholder="Brand Image Dark"
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
