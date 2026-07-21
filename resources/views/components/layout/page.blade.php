@props(['title' => config('app.name', 'Laravel')])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

    @vite(['resources/css/app.css'])
</head>
<body {{ $attributes->merge(['class' => 'bg-gray-50 text-gray-900 antialiased']) }}>
    {{ $slot }}
</body>
</html>
