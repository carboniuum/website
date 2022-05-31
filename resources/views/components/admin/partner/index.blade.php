<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Partners
        </h2>
    </x-slot>


    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <h2 class="text-2xl">Partners</h2>

                <div class="my-4">
                    <a
                        class="uk-button uk-button-primary bg-[#1e87f0]"
                        href="{{ route('partner.create') }}"
                    >
                        Create
                    </a>
                </div>

                @if ($partners)
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Image
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($partners as $partner)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img
                                                class="h-10 w-10 rounded-full"
                                                src="{{ \App\Classes\Helper::getImagePath($partner->image) }}"
                                                alt=""
                                            />
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $partner->name }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <a
                                        href="{{ route('partner.edit', ['partner' => $partner->id]) }}"
                                        class="text-indigo-600 hover:text-indigo-900 mr-2"
                                    >
                                        Edit
                                    </a>

                                    <form action="{{ route('partner.destroy', ['partner' => $partner->id]) }}" method="post" class="uk-display-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            href="#"
                                            type="submit"
                                            class="text-red-600 hover:text-red-900"
                                        >
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        <!-- More people... -->
                        </tbody>
                    </table>
                @endif

            </div>
        </div>
    </div>
</x-app-layout>

