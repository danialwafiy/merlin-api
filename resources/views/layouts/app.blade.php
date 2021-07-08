<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MERLIN'S API</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.lineicons.com/2.0/LineIcons.css">
        <link rel="icon" href="{{ asset('/images/merlin.png') }}"/>
    </head>

    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
    <body class="antialiased font-sans text-gray-600">
        <div class="flex min-h-screen bg-gray-900 py-10 md:px-0 px-4">
            <div class="flex bg-white container mx-auto w-full rounded">
                <div class="w-64 h-full border-r-2 hidden md:block">
                    <div class="p-10">
                        <a href="#"><img src="images/merlin.png"></a>
                    </div>
                    <ul class="text-lg font-semibold">
                        <li class="px-6 py-2 bg-gray-900 text-white">API</li>
                        <li class="px-6 py-2 border-t-2  border-gray-200"><a href="#json">JSON</a></li>
                    </ul>
                </div>
                <div class="w-full h-full p-10">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
