@extends('blade-ui::layouts.demo')

@section('title', 'Alertek')
@section('description', 'components/alerts &mdash; visszajelző üzenetsávok.')

@section('content')
    <div class="space-y-6">
        <div>
            <p class="mb-2 text-sm font-semibold text-gray-500">&lt;x-ui::alerts.success-alert&gt;</p>
            <x-ui::alerts.success-alert>Sikeresen mentetted a beállításokat.</x-ui::alerts.success-alert>
        </div>

        <div>
            <p class="mb-2 text-sm font-semibold text-gray-500">&lt;x-ui::alerts.error-alert&gt;</p>
            <x-ui::alerts.error-alert>Hiba történt a mentés során.</x-ui::alerts.error-alert>
        </div>

        <div>
            <p class="mb-2 text-sm font-semibold text-gray-500">&lt;x-ui::alerts.warning-alert&gt;</p>
            <x-ui::alerts.warning-alert>A munkamenet hamarosan lejár.</x-ui::alerts.warning-alert>
        </div>

        <div>
            <p class="mb-2 text-sm font-semibold text-gray-500">&lt;x-ui::alerts.info-alert&gt;</p>
            <x-ui::alerts.info-alert>Új funkciók érhetők el a fiókodban.</x-ui::alerts.info-alert>
        </div>

        <div>
            <p class="mb-2 text-sm font-semibold text-gray-500">Egyéni ikon (icon prop)</p>
            <x-ui::alerts.info-alert icon="rocket">Egyéni ikonnal megjelenített alert.</x-ui::alerts.info-alert>
        </div>
    </div>
@endsection
