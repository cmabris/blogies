<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $metaTitle ?? 'Default title' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Default description' }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex h-screen flex-col bg-slate-100 selection:bg-sky-600 selection:text-sky-50 dark:bg-slate-950">
<x-partials.navigation />

@session('status')
<div>
    {{ $value }}
</div>
@endsession

<main class="flex-1 p-4">
    {{ $slot }}
</main>

</body>
</html>
