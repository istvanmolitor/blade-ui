<?php

return [
    'title' => null,

    'logo' => null,

    'footer_text' => '',

    'address' => '',

    'phone' => '',

    'email' => '',

    /*
     * Component showcase pages, keyed by route name and consumed via
     * Molitor\BladeUi\Http\Controllers\ComponentShowcaseController::sections().
     * Used to build both the showcase index cards and the demo sidebar menu.
     */
    'showcase_sections' => [
        'blade-ui.showcase.alerts' => 'Alertek',
        'blade-ui.showcase.buttons' => 'Gombok',
        'blade-ui.showcase.card' => 'Kártyák',
        'blade-ui.showcase.feedback' => 'Visszajelzések',
        'blade-ui.showcase.form' => 'Űrlapok',
        'blade-ui.showcase.layout' => 'Layout',
        'blade-ui.showcase.list' => 'Listák',
        'blade-ui.showcase.typography' => 'Tipográfia',
    ],

    /*
     * Named menus, consumed via Molitor\BladeUi\Support\MenuItem::collectionFromConfig('name').
     * Each item accepts: label, url, active, children (same shape, for a dropdown submenu).
     */
    'menus' => [
        'main' => [
            ['label' => 'Kezdőlap', 'url' => '#', 'active' => true],
            ['label' => 'Szolgáltatások', 'url' => '#'],
            ['label' => 'Kapcsolat', 'url' => '#'],
        ],

        'sidebar' => [
            ['label' => 'Áttekintés', 'url' => '#', 'active' => true],
            ['label' => 'Beállítások', 'url' => '#'],
            ['label' => 'Profil', 'url' => '#'],
        ],

        'footer' => [],
    ],
];
