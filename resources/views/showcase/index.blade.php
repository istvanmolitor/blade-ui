@extends('blade-ui::showcase.partials.wrapper')

@section('title', 'Komponens bemutató')
@section('description', 'A blade-ui csomag komponenstípusai, mindegyikhez külön bemutató felülettel.')

@section('content')
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($sections as $route => $label)
            <a
                href="{{ route($route) }}"
                class="rounded-2xl border border-gray-200 bg-white p-6 no-underline transition hover:-translate-y-1 hover:shadow-lg"
            >
                <h2 class="text-lg font-semibold text-gray-900">{{ $label }}</h2>
                <p class="mt-2 text-sm text-gray-500">{{ route($route) }}</p>
            </a>
        @endforeach
    </div>
@endsection
