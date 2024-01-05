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
    <body>
        Hello World!

        <div hx-get="/nav" hx-swap="outerHTML" hx-trigger="load">
            Loading...
        </div>
    </body>
</html>
