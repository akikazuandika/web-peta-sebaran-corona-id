<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sebaran Korona di Indonesia</title>

        <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
        <script src="{{ mix('js/app.js') }}" type="text/javascript" defer></script>

    </head>
    <body style="background: white" >
        <div id="app">
            <home></home>
        </div>
    </body>
</html>
