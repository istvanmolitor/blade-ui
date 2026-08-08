@extends('blade-ui::showcase.partials.wrapper')

@section('title', 'Tipográfia')
@section('description', 'components/typography &mdash; szöveges elemek.')

@section('content')
    <div class="max-w-3xl space-y-6 rounded-2xl border border-gray-200 bg-white p-8">
        <x-ui::typography.h1>H1 &mdash; Elsődleges címsor</x-ui::typography.h1>
        <x-ui::typography.h2>H2 &mdash; Másodlagos címsor</x-ui::typography.h2>
        <x-ui::typography.h3>H3 &mdash; Harmadlagos címsor</x-ui::typography.h3>
        <x-ui::typography.h4>H4 &mdash; Alcím</x-ui::typography.h4>
        <x-ui::typography.h5>H5 &mdash; Kisebb alcím</x-ui::typography.h5>
        <x-ui::typography.h6>H6 &mdash; Legkisebb alcím</x-ui::typography.h6>

        <x-ui::typography.paragraph>
            Ez egy bekezdés szöveg, amely bemutatja a <strong>paragraph</strong> komponens alapértelmezett stílusát.
        </x-ui::typography.paragraph>

        <x-ui::typography.list :items="['Első listaelem', 'Második listaelem', 'Harmadik listaelem']" />

        <x-ui::typography.quote author="Kovács János">
            Ez egy idézet, amely a quote komponenst mutatja be.
        </x-ui::typography.quote>

        <x-ui::typography.code code="php artisan make:component Example" />
    </div>
@endsection
