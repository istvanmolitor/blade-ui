# Blade UI

Blade komponens csomag: form, layout és visszajelzés (feedback) komponensek a gyors admin/frontend fejlesztéshez (pl. `<x-blade-ui::form.input-field>`, `<x-blade-ui::layout.page>`, `<x-blade-ui::feedback.error-messages>`).

## Menü integráció

A csomag nem függ semmilyen menü-csomagtól. A layout komponensek (`main-menu`, `header`, `footer`) és layoutok (`layout-shell`) `items`/`menuItems`/`footerMenuItems` propokon keresztül kapják meg a menüelemeket kívülről (a befogadó projektből). Egy menüelemnek `getUrl()`, `getLabel()`, `isActive()` és (almenühöz) `getMenuItems()` metódusokkal kell rendelkeznie.

## Telepítés

A csomag automatikusan regisztrálja magát a `Molitor\BladeUi\Providers\BladeUiServiceProvider` service provideren keresztül.

### Publish

A Blade nézetek publikálhatók a `resources/views/vendor/blade-ui` mappába, hogy testreszabhatók legyenek:

```shell
php artisan vendor:publish --tag=blade-ui-views
```

A konfigurációs fájl publikálásához:

```shell
php artisan vendor:publish --tag=blade-ui-config
```

## Licenc

MIT
