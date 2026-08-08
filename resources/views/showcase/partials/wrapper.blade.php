<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Komponens bemutató') &middot; blade-ui</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex min-h-screen flex-col bg-gray-50 text-gray-900 antialiased">
    <header class="sticky top-0 z-50 border-b border-gray-100 bg-white/80 backdrop-blur-lg">
        <div class="mx-auto flex max-w-7xl flex-wrap items-center gap-x-6 gap-y-3 px-4 py-4 sm:px-6 lg:px-8">
            <a href="{{ route('blade-ui.showcase.index') }}" class="text-lg font-bold text-gray-800 no-underline hover:text-gray-900">
                blade-ui &middot; komponens bemutató
            </a>

            <nav class="flex flex-wrap items-center gap-4">
                @foreach (\Molitor\BladeUi\Http\Controllers\ComponentShowcaseController::sections() as $route => $label)
                    <a
                        href="{{ route($route) }}"
                        class="text-sm font-medium no-underline {{ request()->routeIs($route) ? 'text-indigo-600' : 'text-gray-600 hover:text-gray-900' }}"
                    >{{ $label }}</a>
                @endforeach
            </nav>
        </div>
    </header>

    <main class="mx-auto w-full max-w-7xl flex-1 space-y-12 px-4 py-12 sm:px-6 lg:px-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">@yield('title')</h1>
            @hasSection('description')
                <p class="mt-2 text-gray-600">@yield('description')</p>
            @endif
        </div>

        @yield('content')
    </main>

    <footer class="border-t border-gray-100 bg-white py-6 text-center text-xs text-gray-400">
        blade-ui komponens bemutató &mdash; csak fejlesztői célra.
    </footer>
</body>
</html>
