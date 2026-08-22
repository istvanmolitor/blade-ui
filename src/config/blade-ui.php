<?php

return [
    'title' => null,

    'logo' => null,

    'footer_text' => '',

    'address' => '',

    'phone' => '',

    'email' => '',

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

        'sidebar' => [],

        'footer' => [],
    ],
];
