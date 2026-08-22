@extends('blade-ui::layouts.demo')

@section('title', 'Elemek')
@section('description', 'components/avatar, components/badge, components/rating &mdash; felhasználói jelölő elemek.')

@section('content')
    <div class="space-y-10">
        @php
            $avatarCode = <<<'BLADE'
<x-ui::avatar name="Kovács János" size="sm" />
<x-ui::avatar name="Nagy Éva" size="md" />
<x-ui::avatar size="lg" />
BLADE;
        @endphp
        <x-ui::demo.example label="Avatar (méretek és kezdőbetűk)" :code="$avatarCode">
            <div class="flex items-center gap-4">
                <x-ui::avatar name="Kovács János" size="sm" />
                <x-ui::avatar name="Nagy Éva" size="md" />
                <x-ui::avatar size="lg" />
            </div>
        </x-ui::demo.example>

        @php
            $badgeCode = <<<'BLADE'
<x-ui::badge variant="gray">Piszkozat</x-ui::badge>
<x-ui::badge variant="indigo">Új</x-ui::badge>
<x-ui::badge variant="green" icon="check">Aktív</x-ui::badge>
<x-ui::badge variant="yellow" icon="clock">Függőben</x-ui::badge>
<x-ui::badge variant="red" icon="x">Lejárt</x-ui::badge>
BLADE;
        @endphp
        <x-ui::demo.example label="Badge (variánsok és ikon)" :code="$badgeCode">
            <div class="flex flex-wrap items-center gap-2">
                <x-ui::badge variant="gray">Piszkozat</x-ui::badge>
                <x-ui::badge variant="indigo">Új</x-ui::badge>
                <x-ui::badge variant="green" icon="check">Aktív</x-ui::badge>
                <x-ui::badge variant="yellow" icon="clock">Függőben</x-ui::badge>
                <x-ui::badge variant="red" icon="x">Lejárt</x-ui::badge>
            </div>
        </x-ui::demo.example>

        @php
            $ratingCode = <<<'BLADE'
<x-ui::rating :value="3" />
<x-ui::rating :value="4" :max="5" :show-value="true" />
BLADE;
        @endphp
        <x-ui::demo.example label="Rating (értékelés)" :code="$ratingCode">
            <div class="flex items-center gap-6">
                <x-ui::rating :value="3" />
                <x-ui::rating :value="4" :max="5" :show-value="true" />
            </div>
        </x-ui::demo.example>
    </div>
@endsection
