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
        'blade-ui.showcase.icons' => 'Ikonok',
        'blade-ui.showcase.layout' => 'Layout',
        'blade-ui.showcase.list' => 'Listák',
        'blade-ui.showcase.menu' => 'Menük',
        'blade-ui.showcase.table' => 'Táblázatok',
        'blade-ui.showcase.typography' => 'Tipográfia',
    ],

    /*
     * Named menus, consumed via Molitor\BladeUi\Support\MenuItem::collectionFromConfig('name').
     * Each item accepts: label, url, active, icon (a lucide icon name, optional), children
     * (same shape, arbitrarily nested, renders as a dropdown/accordion submenu).
     */
    'menus' => [
        'main' => [
            ['label' => 'Kezdőlap', 'url' => '#', 'icon' => 'home', 'active' => true],
            [
                'label' => 'Szolgáltatások',
                'url' => '#',
                'icon' => 'briefcase',
                'children' => [
                    ['label' => 'Webfejlesztés', 'url' => '#'],
                    ['label' => 'Tanácsadás', 'url' => '#'],
                ],
            ],
            ['label' => 'Kapcsolat', 'url' => '#', 'icon' => 'mail'],
        ],

        'sidebar' => [
            ['label' => 'Áttekintés', 'url' => '#', 'icon' => 'layout-dashboard', 'active' => true],
            ['label' => 'Beállítások', 'url' => '#', 'icon' => 'settings'],
            ['label' => 'Profil', 'url' => '#', 'icon' => 'user'],
        ],

        'footer' => [],
    ],
];
