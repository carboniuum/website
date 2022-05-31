<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('components.admin.layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <div class="mt-3">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <button
                                class="uk-button uk-button-default uk-margin-small-right"
                                type="button"
                                uk-toggle="target: #offcanvas-push"
                            >
                                Manage
                            </button>
                        </div>
                    </div>

                    <div class="mt-3">
                        @if (session()->has('success'))
                            <div class="uk-alert-success" uk-alert>
                                <a class="uk-alert-close" uk-close></a>
                                <p>{{ session()->get('success') }}</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <div id="offcanvas-push" uk-offcanvas="mode: push; overlay: true">
            <div class="uk-offcanvas-bar">

                <button class="uk-offcanvas-close" type="button" uk-close></button>

                <h3>Data</h3>

                <ul>
                    <li class="uk-margin-top">
                        <a
                            href="{{ route('product.index') }}"
                        >
                            Products
                        </a>
                    </li>

                    <li class="uk-margin-top">
                        <a
                            href="{{ route('product.attribute.index') }}"
                        >
                            Products Attributes
                        </a>
                    </li>

                    <li class="uk-margin-top">
                        <a
                            href="{{ route('brand.index') }}"
                        >
                            Brands
                        </a>
                    </li>

                    <li class="uk-margin-top">
                        <a
                            href="{{ route('partner.index') }}"
                        >
                            Partners
                        </a>
                    </li>

                    <li class="uk-margin-top">
                        <a
                            href="{{ route('settings.index') }}"
                        >
                            Settings
                        </a>
                    </li>
                </ul>

            </div>
        </div>

        <script src="{{ asset('js/uikit.min.js') }}"></script>
        <script src="{{ asset('js/uikit-icons.min.js') }}"></script>
        @stack('scripts')
    </body>
</html>
