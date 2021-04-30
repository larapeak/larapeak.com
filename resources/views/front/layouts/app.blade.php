<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @isset($title)
            <title>{{ $title }} - {{ config('app.name', 'Laravel') }}</title>
        @else
            <title>{{ config('app.name', 'Laravel') }}</title>
        @endisset

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <!-- <script src="{{ mix('js/app.js') }}" defer></script> -->
    </head>
    <body>
        <div class="flex flex-col min-h-screen text-gray-900 dark:bg-gray-900 dark:text-gray-100">

            <!-- Main navigation -->
            <nav class="sticky top-0 z-40 bg-white bg-opacity-50 border-b border-gray-100 app-header dark:bg-gray-900 dark:border-gray-800">
                <div class="container flex items-center justify-between px-4 py-4 mx-auto">
                    <div>
                        <a href="/" class="text-xl font-bold underline transition duration-300 hover:text-blue-600">
                            Larapeak
                        </a>
                    </div>
                    <div>
                        <div class="flex items-center h-10 font-semibold transition duration-300 border-b-4 border-gray-900 border-opacity-0 hover:border-opacity-100 dark:text-gray-400 dark:hover:border-gray-400">
                            <a href="/">
                                Blog
                            </a>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="container flex-grow px-4 mx-auto my-6 sm:my-12">
                {{ $slot }}
            </div>

            <footer class="container flex items-center justify-between px-4 py-6 mx-auto border-t-2">
                <div>
                    <!-- <a href="" class="mr-6 transition duration-300 hover:text-blue-500">Terms and Conditions</a>
                    <a href="" class="mr-6 transition duration-300 hover:text-blue-500">Privacy Policy</a> -->
                    &copy; 2021 - larapeak.com
                </div>
                <div>
                    <a href="https://github.com/larapeak" target="_BLANK">
                        <svg viewBox="0 0 16 16" fill="currentColor" class="w-5 h-5">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z" />
                        </svg>
                    </a>
                </div>
            </footer>
        </div>
    </body>
</html>
