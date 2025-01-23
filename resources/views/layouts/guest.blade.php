<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ ('Keyna Cafe') }}</title>

        <!-- Favicon -->
        <link href="/img/logo.png" rel="icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
    </head>

    <style>
        /* Default styles for all screen sizes */
        .sm\:pt-0 {
            padding-top: 0px;
            background-image: url('{{ asset('img/latar.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh; /* Ensure it covers the full viewport height */
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column; /* Ensure form and header stack vertically */
        }
        
 
        /* Adjustments for larger screens */
        @media (min-width: 640px) {
            .sm\:pt-0 {
                padding: 0px;
            }
        }
 </style>

    <body class="font-sans text-gray-900 antialiased">
        
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
