<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Apprenez Lochness | Lochness Documentation</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <x-navigation />

        <div class="max-w-7xl mx-auto flex py-6 px-6 space-x-0 md:space-x-10 md:px-10 lg:py-12">
            <div class="hidden md:block relative w-full md:w-64 z-10">
                <div class="bg-white sticky top-24 pb-6">
                    <nav>
                        <header class="hidden md:block font-bold text-xl border-b-2 border-gray-300">Docs</header>

                        <div class="pl-2 md:p-0">
                            <div class="relative">
                                <button class="text-lg relative font-medium mt-4 mb-2">
                                    <span>Mise en route</span>
                                </button>

                                <ul class="space-y-2 antialised">
                                    <li class="">
                                        <a href="/">
                                            Configuration requise
                                        </a>
                                    </li>

                                    <li class="">
                                        <a href="/">
                                            Installation
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="w-full flex-1">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
