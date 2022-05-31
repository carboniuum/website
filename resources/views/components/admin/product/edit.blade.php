<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Product
        </h2>
    </x-slot>

    <section class="uk-section uk-section-small">
        <div class="uk-container uk-container-small">

            <form action="{{ route('product.update', ['product' => $product->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <x-admin.shared.form-input
                        id="name"
                        name="name"
                        class="w-full px-2 py-2 xl:px-4 xl:py-4 text-[#04165D] text-base xl:text-xl bg-transparent rounded-[4px] border-[1.5px] border-[#111111] border-opacity-5 focus:outline-none focus:text-opacity-100"
                        type="text"
                        placeholder="Product name"
                        :value="$product->name"
                        :required="true"
                    />
                </div>

                <div class="mb-4">
                    <x-admin.shared.form-input
                        id="short_description"
                        name="short_description"
                        class="w-full px-2 py-2 xl:px-4 xl:py-4 text-[#04165D] text-base xl:text-xl bg-transparent rounded-[4px] border-[1.5px] border-[#111111] border-opacity-5 focus:outline-none focus:text-opacity-100"
                        type="text"
                        placeholder="Product short description"
                        element="textarea"
                        :value="$product->short_description"
                        :required="true"
                    />
                </div>

                <div class="mb-4">
                    <x-admin.shared.form-input
                        id="description"
                        name="description"
                        class="w-full px-2 py-2 xl:px-4 xl:py-4 text-[#04165D] text-base xl:text-xl bg-transparent rounded-[4px] border-[1.5px] border-[#111111] border-opacity-5 focus:outline-none focus:text-opacity-100"
                        type="text"
                        placeholder="Product description"
                        element="textarea"
                        :value="$product->description"
                    />
                </div>

                <div class="mb-4">
                    <x-admin.shared.form-input
                        id="cover"
                        name="cover"
                        class="w-full px-2 py-2 xl:px-4 xl:py-4 text-[#04165D] text-base xl:text-xl bg-transparent rounded-[4px] border-[1.5px] border-[#111111] border-opacity-5 focus:outline-none focus:text-opacity-100"
                        type="file"
                        placeholder="Product Image"
                        :required="true"
                    />
                </div>

                <div class="mb-4">
                    <x-admin.shared.form-input
                        id="images"
                        name="images[]"
                        class="w-full px-2 py-2 xl:px-4 xl:py-4 text-[#04165D] text-base xl:text-xl bg-transparent rounded-[4px] border-[1.5px] border-[#111111] border-opacity-5 focus:outline-none focus:text-opacity-100"
                        type="file"
                        placeholder="Product Gallery"
                        :multiple="true"
                    />
                </div>
                
                <div class="mb-4">
                    <x-admin.shared.form-input
                        id="file_names"
                        name="file_names"
                        class="w-full px-2 py-2 xl:px-4 xl:py-4 text-[#04165D] text-base xl:text-xl bg-transparent rounded-[4px] border-[1.5px] border-[#111111] border-opacity-5 focus:outline-none focus:text-opacity-100"
                        type="text"
                        placeholder="Product File Names"
                        element="textarea"
                        :value="$product->file_names"
                    />
                </div>
                
                <div class="mb-4">
                    <x-admin.shared.form-input
                        id="files"
                        name="files[]"
                        class="w-full px-2 py-2 xl:px-4 xl:py-4 text-[#04165D] text-base xl:text-xl bg-transparent rounded-[4px] border-[1.5px] border-[#111111] border-opacity-5 focus:outline-none focus:text-opacity-100"
                        type="file"
                        placeholder="Product Files"
                        :multiple="true"
                    />
                </div>

                <div class="mb-4">
                    <x-admin.shared.form-input
                        id="brand_id"
                        name="brand_id"
                        class="w-full px-2 py-2 xl:px-4 xl:py-4 text-[#04165D] text-base xl:text-xl bg-transparent rounded-[4px] border-[1.5px] border-[#111111] border-opacity-5 focus:outline-none focus:text-opacity-100"
                        placeholder="Product brand"
                        element="select"
                        :items="$brands"
                        :item="$product->brand"
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
