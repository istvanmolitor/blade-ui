@extends('blade-ui::layouts.demo')

@section('title', 'Harmonika')
@section('description', 'components/accordion &mdash; összecsukható tartalomblokkok.')

@section('content')
    @php
        $accordionCode = <<<'BLADE'
<x-ui::accordion.accordion>
    <x-ui::accordion.accordion-item title="Hogyan tudok regisztrálni?" :open="true">
        Kattints a jobb felső sarokban található "Regisztráció" gombra, majd add meg az adataidat.
    </x-ui::accordion.accordion-item>
    <x-ui::accordion.accordion-item title="Módosíthatom később az előfizetésemet?">
        Igen, az előfizetésed bármikor módosíthatod a fiókbeállításokban.
    </x-ui::accordion.accordion-item>
    <x-ui::accordion.accordion-item title="Van lehetőség számlázásra?">
        Igen, minden fizetős csomaghoz automatikusan számlát állítunk ki.
    </x-ui::accordion.accordion-item>
</x-ui::accordion.accordion>
BLADE;
    @endphp

    <x-ui::demo.example label="Gyakori kérdések" :code="$accordionCode">
        <x-ui::accordion.accordion>
            <x-ui::accordion.accordion-item title="Hogyan tudok regisztrálni?" :open="true">
                Kattints a jobb felső sarokban található "Regisztráció" gombra, majd add meg az adataidat.
            </x-ui::accordion.accordion-item>
            <x-ui::accordion.accordion-item title="Módosíthatom később az előfizetésemet?">
                Igen, az előfizetésed bármikor módosíthatod a fiókbeállításokban.
            </x-ui::accordion.accordion-item>
            <x-ui::accordion.accordion-item title="Van lehetőség számlázásra?">
                Igen, minden fizetős csomaghoz automatikusan számlát állítunk ki.
            </x-ui::accordion.accordion-item>
        </x-ui::accordion.accordion>
    </x-ui::demo.example>
@endsection
