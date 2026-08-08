@props(['title' => config('app.name', 'Laravel'), 'description' => null, 'menuItems' => [], 'footerItems' => []])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>
    @if ($description)
        <meta name="description" content="{{ $description }}">
    @endif
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body {{ $attributes->merge(['class' => 'bg-gray-50 text-gray-900 antialiased flex flex-col min-h-screen']) }}>
    <x-ui::layout.header :items="$menuItems" />

    <main class="flex-1">
        {{ $slot }}
    </main>

    <x-ui::layout.footer :items="$footerItems" />
</body>
</html>
