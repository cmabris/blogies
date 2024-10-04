<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Inicio</title>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('blog') }}">Blog</a></li>
        <li><a href="{{ route('about') }}">Nosotros</a></li>
        <li><a href="{{ route('contact') }}">Contacto</a></li>
    </ul>
        <h1>Inicio</h1>
    </body>
</html>
