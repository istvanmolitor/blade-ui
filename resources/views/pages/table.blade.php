@extends('blade-ui::layouts.demo')

@section('title', 'Táblázatok')
@section('description', 'components/table &mdash; összetehető táblázat komponensek (fejléc, törzs, üres állapot).')

@section('content')
    @php
        $tableWithDataCode = <<<'BLADE'
<x-ui::table.table>
    <x-ui::table.head>
        <x-ui::table.row>
            <x-ui::table.heading>Név</x-ui::table.heading>
            <x-ui::table.heading>Email</x-ui::table.heading>
            <x-ui::table.heading align="right">Állapot</x-ui::table.heading>
        </x-ui::table.row>
    </x-ui::table.head>
    <x-ui::table.body>
        <x-ui::table.row>
            <x-ui::table.cell>Kovács János</x-ui::table.cell>
            <x-ui::table.cell>janos@example.com</x-ui::table.cell>
            <x-ui::table.cell align="right">Aktív</x-ui::table.cell>
        </x-ui::table.row>
        <x-ui::table.row>
            <x-ui::table.cell>Nagy Éva</x-ui::table.cell>
            <x-ui::table.cell>eva@example.com</x-ui::table.cell>
            <x-ui::table.cell align="right">Inaktív</x-ui::table.cell>
        </x-ui::table.row>
    </x-ui::table.body>
    <x-ui::table.footer>
        <x-ui::table.row>
            <x-ui::table.cell class="font-semibold">Összesen</x-ui::table.cell>
            <x-ui::table.cell></x-ui::table.cell>
            <x-ui::table.cell align="right">2 felhasználó</x-ui::table.cell>
        </x-ui::table.row>
    </x-ui::table.footer>
</x-ui::table.table>
BLADE;

        $emptyStateCode = <<<'BLADE'
<x-ui::table.table>
    <x-ui::table.head>
        <x-ui::table.row>
            <x-ui::table.heading>Név</x-ui::table.heading>
            <x-ui::table.heading>Email</x-ui::table.heading>
            <x-ui::table.heading align="right">Állapot</x-ui::table.heading>
        </x-ui::table.row>
    </x-ui::table.head>
    <x-ui::table.body>
        <x-ui::table.empty-state :colspan="3" message="Még nincs egyetlen felhasználó sem." />
    </x-ui::table.body>
</x-ui::table.table>
BLADE;
    @endphp

    <div class="grid gap-10">
        <x-ui::demo.example label="Táblázat adatokkal" :code="$tableWithDataCode">
            <x-ui::table.table>
                <x-ui::table.head>
                    <x-ui::table.row>
                        <x-ui::table.heading>Név</x-ui::table.heading>
                        <x-ui::table.heading>Email</x-ui::table.heading>
                        <x-ui::table.heading align="right">Állapot</x-ui::table.heading>
                    </x-ui::table.row>
                </x-ui::table.head>
                <x-ui::table.body>
                    <x-ui::table.row>
                        <x-ui::table.cell>Kovács János</x-ui::table.cell>
                        <x-ui::table.cell>janos@example.com</x-ui::table.cell>
                        <x-ui::table.cell align="right">Aktív</x-ui::table.cell>
                    </x-ui::table.row>
                    <x-ui::table.row>
                        <x-ui::table.cell>Nagy Éva</x-ui::table.cell>
                        <x-ui::table.cell>eva@example.com</x-ui::table.cell>
                        <x-ui::table.cell align="right">Inaktív</x-ui::table.cell>
                    </x-ui::table.row>
                </x-ui::table.body>
                <x-ui::table.footer>
                    <x-ui::table.row>
                        <x-ui::table.cell class="font-semibold">Összesen</x-ui::table.cell>
                        <x-ui::table.cell></x-ui::table.cell>
                        <x-ui::table.cell align="right">2 felhasználó</x-ui::table.cell>
                    </x-ui::table.row>
                </x-ui::table.footer>
            </x-ui::table.table>
        </x-ui::demo.example>

        <x-ui::demo.example label="Üres állapot" :code="$emptyStateCode">
            <x-ui::table.table>
                <x-ui::table.head>
                    <x-ui::table.row>
                        <x-ui::table.heading>Név</x-ui::table.heading>
                        <x-ui::table.heading>Email</x-ui::table.heading>
                        <x-ui::table.heading align="right">Állapot</x-ui::table.heading>
                    </x-ui::table.row>
                </x-ui::table.head>
                <x-ui::table.body>
                    <x-ui::table.empty-state :colspan="3" message="Még nincs egyetlen felhasználó sem." />
                </x-ui::table.body>
            </x-ui::table.table>
        </x-ui::demo.example>
    </div>
@endsection
