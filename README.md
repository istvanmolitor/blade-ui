# Blade UI

Blade komponens csomag: form, layout és visszajelzés (feedback) komponensek a gyors admin/frontend fejlesztéshez (pl. `<x-blade-ui::form.input-field>`, `<x-blade-ui::layout.page>`, `<x-blade-ui::feedback.error-messages>`).

## Függőségek

- `istvanmolitor/menu` – git@github.com:istvanmolitor/menu.git
  A layout komponensek (`main-menu`, `menu`, `menu-item`) a Menu csomag `Menu`/`MenuItem` osztályait jelenítik meg.

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
