<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello city</title>

    </head>
    <body>
        <h1>Bienvenue a Medina ndiobene</h1>
        <h2>HEURE DE Dakar:{{date('h:i A')}}</h2>
        <footer>
            <p>&copy:Copyright{{date('Y')}}</p>
        </footer>
    </body>
</html>
