@extends('blade-ui::layouts.demo')

@section('title', 'Alertek')
@section('description', 'components/alerts &mdash; visszajelző üzenetsávok.')

@section('content')
    <div class="space-y-6">
        @php
            $successAlertCode = <<<'BLADE'
<x-ui::alerts.success-alert>
    Sikeresen mentetted a beállításokat.
</x-ui::alerts.success-alert>
BLADE;
        @endphp
        <x-ui::demo.example label="Sikeres visszajelzés" :code="$successAlertCode">
            <x-ui::alerts.success-alert>Sikeresen mentetted a beállításokat.</x-ui::alerts.success-alert>
        </x-ui::demo.example>

        @php
            $errorAlertCode = <<<'BLADE'
<x-ui::alerts.error-alert>
    Hiba történt a mentés során.
</x-ui::alerts.error-alert>
BLADE;
        @endphp
        <x-ui::demo.example label="Hibaüzenet" :code="$errorAlertCode">
            <x-ui::alerts.error-alert>Hiba történt a mentés során.</x-ui::alerts.error-alert>
        </x-ui::demo.example>

        @php
            $warningAlertCode = <<<'BLADE'
<x-ui::alerts.warning-alert>
    A munkamenet hamarosan lejár.
</x-ui::alerts.warning-alert>
BLADE;
        @endphp
        <x-ui::demo.example label="Figyelmeztetés" :code="$warningAlertCode">
            <x-ui::alerts.warning-alert>A munkamenet hamarosan lejár.</x-ui::alerts.warning-alert>
        </x-ui::demo.example>

        @php
            $infoAlertCode = <<<'BLADE'
<x-ui::alerts.info-alert>
    Új funkciók érhetők el a fiókodban.
</x-ui::alerts.info-alert>
BLADE;
        @endphp
        <x-ui::demo.example label="Információs üzenet" :code="$infoAlertCode">
            <x-ui::alerts.info-alert>Új funkciók érhetők el a fiókodban.</x-ui::alerts.info-alert>
        </x-ui::demo.example>

        @php
            $customIconAlertCode = <<<'BLADE'
<x-ui::alerts.info-alert icon="rocket">
    Egyéni ikonnal megjelenített alert.
</x-ui::alerts.info-alert>
BLADE;
        @endphp
        <x-ui::demo.example label="Egyéni ikon (icon prop)" :code="$customIconAlertCode">
            <x-ui::alerts.info-alert icon="rocket">Egyéni ikonnal megjelenített alert.</x-ui::alerts.info-alert>
        </x-ui::demo.example>
    </div>
@endsection
