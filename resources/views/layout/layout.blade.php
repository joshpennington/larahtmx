<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lara-HTMx</title>

        <!-- <script src="https://unpkg.com/htmx.org@1.9.10" integrity="sha384-D1Kt99CQMDuVetoL1lrYwg5t+9QdHe7NLX/SoJYkXDFfX37iInKRy5xLSi8nO7UC" crossorigin="anonymous"></script> -->
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')

    </head>
    <body class="container mx-auto">

    <div class="grid grid-cols-10">
        <div
            class="bg-amber-100 col-start-1 col-end-3"
            hx-get="{{ route('htmx-nav') }}"
            hx-swap="innerHTML"
            hx-trigger="load">
            Loading...
        </div>

        <div class="col-auto pl-3">
            @yield('content')
        </div>

    </div>

    </body>
</html>
