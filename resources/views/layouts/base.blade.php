<!DOCTYPE html>
<html lang="hu" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description', '')">
    <title>@yield('title', config('app.name'))</title>
    @vite('resources/css/app.css')
</head>
<body>
    @yield('body')
</body>
</html>
