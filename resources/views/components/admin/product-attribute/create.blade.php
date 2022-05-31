<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Attribute Attribute
        </h2>
    </x-slot>

    <section class="uk-section uk-section-small">
        <div class="uk-container uk-container-small">

            <form action="{{ route('product.attribute.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <x-admin.shared.form-input
                        id="name"
                        name="name"
                        class="w-full px-2 py-2 xl:px-4 xl:py-4 text-[#04165D] text-base xl:text-xl bg-transparent rounded-[4px] border-[1.5px] border-[#111111] border-opacity-5 focus:outline-none focus:text-opacity-100"
                        type="text"
                        placeholder="Attribute name"
                        :value="old('name')"
                        :required="true"
                    />
                </div>

                <div class="mb-4">
                    <x-admin.shared.form-input
                        id="description"
                        name="description"
                        class="w-full px-2 py-2 xl:px-4 xl:py-4 text-[#04165D] text-base xl:text-xl bg-transparent rounded-[4px] border-[1.5px] border-[#111111] border-opacity-5 focus:outline-none focus:text-opacity-100"
                        type="text"
                        placeholder="Attribute description"
                        element="textarea"
                        :value="old('description')"
                        :required="true"
                    />
                </div>

                {{--
                <div class="mb-4">
                    <x-admin.shared.form-input
                        id="attribute_1"
                        name="attribute_1"
                        class="w-full px-2 py-2 xl:px-4 xl:py-4 text-[#04165D] text-base xl:text-xl bg-transparent rounded-[4px] border-[1.5px] border-[#111111] border-opacity-5 focus:outline-none focus:text-opacity-100"
                        type="text"
                        placeholder="Attribute 1"
                        :value="old('attribute_1')"
                        :required="true"
                    />
                </div>

                <div class="mb-4">
                    <x-admin.shared.form-input
                        id="attribute_2"
                        name="attribute_2"
                        class="w-full px-2 py-2 xl:px-4 xl:py-4 text-[#04165D] text-base xl:text-xl bg-transparent rounded-[4px] border-[1.5px] border-[#111111] border-opacity-5 focus:outline-none focus:text-opacity-100"
                        type="text"
                        placeholder="Attribute 2"
                        :value="old('attribute_2')"
                        :required="true"
                    />
                </div>
                --}}

                <div class="mb-4">
                    <x-admin.shared.form-input
                        id="attribute_3"
                        name="attribute_3"
                        class="w-full px-2 py-2 xl:px-4 xl:py-4 text-[#04165D] text-base xl:text-xl bg-transparent rounded-[4px] border-[1.5px] border-[#111111] border-opacity-5 focus:outline-none focus:text-opacity-100"
                        type="text"
                        placeholder="Attribute 3"
                        :value="old('attribute_3')"
                        :required="true"
                    />
                </div>

                <div class="mb-4">
                    <x-admin.shared.form-input
                        id="product_id"
                        name="product_id"
                        class="w-full px-2 py-2 xl:px-4 xl:py-4 text-[#04165D] text-base xl:text-xl bg-transparent rounded-[4px] border-[1.5px] border-[#111111] border-opacity-5 focus:outline-none focus:text-opacity-100"
                        placeholder="Product name"
                        element="select"
                        :items="$products"
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
