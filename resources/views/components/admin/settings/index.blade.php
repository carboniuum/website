<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Settings
        </h2>
    </x-slot>


    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <h2 class="text-2xl">Settings</h2>

{{--                <div class="my-4">--}}
{{--                    <a--}}
{{--                        class="uk-button uk-button-primary bg-[#1e87f0]"--}}
{{--                        href="{{ route('settings.create') }}"--}}
{{--                    >--}}
{{--                        Create--}}
{{--                    </a>--}}
{{--                </div>--}}

                @if ($settings)
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Icon
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Key
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Value
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($settings as $setting)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10 bg-gray-500">
                                            <img
                                                class="h-10 w-10 rounded-full"
                                                src="{{ \App\Classes\Helper::getImagePath($setting->icon) }}"
                                                alt=""
                                            />
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $setting->key }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ strlen($setting->value) > 50 ? '...' : $setting->value }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <a
                                        href="{{ route('settings.edit', ['setting' => $setting->id]) }}"
                                        class="text-indigo-600 hover:text-indigo-900 mr-2"
                                    >
                                        Edit
                                    </a>

                                    <form action="{{ route('settings.destroy', ['setting' => $setting->id]) }}" method="post" class="uk-display-inline">
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

