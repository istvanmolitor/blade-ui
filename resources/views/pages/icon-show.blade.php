@extends('blade-ui::layouts.demo')

@section('title', "Ikon: {$icon}")
@section('description', "components/layout &mdash; a &quot;{$icon}&quot; ikon részletei és használata.")

@section('content')
    @php
        $usageSnippet = "<x-ui::layout.icon name=\"{$icon}\" class=\"h-6 w-6\" />";
        $sizes = [
            ['class' => 'h-4 w-4', 'label' => 'h-4 w-4'],
            ['class' => 'h-6 w-6', 'label' => 'h-6 w-6'],
            ['class' => 'h-8 w-8', 'label' => 'h-8 w-8'],
            ['class' => 'h-12 w-12', 'label' => 'h-12 w-12'],
        ];
    @endphp

    <div class="space-y-8">
        <a href="{{ route('blade-ui.showcase.icons') }}" class="inline-flex items-center gap-1 text-sm font-medium text-indigo-600 hover:text-indigo-500">
            <x-ui::layout.icon name="arrow-left" class="h-4 w-4" />
            Vissza az ikonokhoz
        </a>

        <div class="flex flex-col items-center gap-4 rounded-2xl border border-gray-200 bg-white p-12 text-center">
            <x-ui::layout.icon :name="$icon" class="h-24 w-24 text-gray-800" />
            <p class="font-mono text-lg text-gray-900">{{ $icon }}</p>
        </div>

        <div>
            <p class="mb-2 text-sm font-semibold text-gray-500">Használat</p>
            <x-ui::typography.code :code="$usageSnippet" />
        </div>

        <div>
            <p class="mb-2 text-sm font-semibold text-gray-500">Méretek</p>
            <div class="flex flex-wrap items-end gap-8 rounded-2xl border border-gray-200 bg-white p-6">
                @foreach ($sizes as $size)
                    <div class="flex flex-col items-center gap-2">
                        <x-ui::layout.icon :name="$icon" :class="$size['class'].' text-gray-700'" />
                        <span class="text-xs text-gray-500">{{ $size['label'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
