<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @yield('styles')
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        {{-- @isset($header)
            @auth
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endauth
        @endisset --}}

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        @if (session('success'))
            <div id="successToast"
                class="fixed top-5 right-5 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded shadow-lg transition-opacity duration-300 ease-in-out opacity-0">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">Your form was submitted successfully.</span>
                <button class="absolute top-0 bottom-0 right-0 px-4 py-3 text-green-500 focus:outline-none"
                    onclick="closeToast('successToast')">
                    <svg class="fill-current h-6 w-6" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                            d="M14.348 14.849a1 1 0 01-1.415 0L10 11.415l-2.933 3.434a1 1 0 01-1.415-1.415l3.434-2.933L5.637 7.636a1 1 0 011.415-1.415l2.933 3.434 2.933-3.434a1 1 0 011.415 1.415l-3.434 2.933 3.434 2.933a1 1 0 010 1.415z" />
                    </svg>
                </button>
            </div>
        @endif

        @if (session('error'))
            <div id="errorToast"
                class="fixed top-5 right-5 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded shadow-lg transition-opacity duration-300 ease-in-out opacity-0">
                <strong class="font-bold">Error!</strong>
                <span class="block sm:inline">Something went wrong. Please try again.</span>
                <button class="absolute top-0 bottom-0 right-0 px-4 py-3 text-red-500 focus:outline-none"
                    onclick="closeToast('errorToast')">
                    <svg class="fill-current h-6 w-6" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                            d="M14.348 14.849a1 1 0 01-1.415 0L10 11.415l-2.933 3.434a1 1 0 01-1.415-1.415l3.434-2.933L5.637 7.636a1 1 0 011.415-1.415l2.933 3.434 2.933-3.434a1 1 0 011.415 1.415l-3.434 2.933 3.434 2.933a1 1 0 010 1.415z" />
                    </svg>
                </button>
            </div>
        @endif
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    @yield('scripts')
</body>

</html>
