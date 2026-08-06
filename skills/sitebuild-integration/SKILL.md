---
name: sitebuild-integration
description: "Use whenever a finished 'sitebuild' (static HTML + Tailwind design, usually with real copy/content already in it) needs to be turned into pages of this Laravel app on top of the blade-ui package, or when an existing raw HTML page (e.g. resources/views/pages/*.blade.php built directly with hand-written Tailwind markup, not blade-ui components) needs to be converted to blade-ui components. Also use when restyling already-published blade-ui views (resources/views/vendor/blade-ui/**) to match a sitebuild's design, or when the blade-ui package (packages/blade-ui) needs a new generic component because a sitebuild uses an element that has no blade-ui equivalent yet. Trigger on: 'sitebuild', 'design alapján építsd fel az oldalt', 'alakítsd át blade-ui komponensekre', 'publisholt nézet átdesignolása', 'új blade-ui komponens kell'."
license: MIT
---

# Sitebuild → Blade UI komponensesítés

Ismétlődő workflow: egy sitebuildben (HTML + Tailwind, gyakran a végleges szöveges/képi tartalommal együtt) kapott oldalt úgy építünk fel újra ebben a projektben, hogy a végeredmény a `packages/blade-ui` csomag komponenseiből és layoutjaiból álljon, mégis pixelre az eredeti sitebuild designt adja vissza. A csomag emiatt bővül, más projektek is profitálnak belőle, de csak generikus, design-semleges formában.

**Soha ne ugord át a fázisokat.** A gyakori hiba az, hogy valaki azonnal a sitebuild konkrét Tailwind osztályait (pl. `bg-gradient-hero`, `shadow-glow`, `text-primary`) írja bele a `packages/blade-ui` csomag komponenseibe. Ez tönkreteszi a csomag újrafelhasználhatóságát — a design mindig csak a *publikált, felülírt* nézetekben (a fő projektben) jelenhet meg.

## 0. Kiindulási állapot ebben a projektben

- A `packages/blade-ui` szolgáltatója (`BladeUiServiceProvider`) a csomag nézeteit a `blade-ui::` névtér alatt tölti be, és regisztrálja a `Molitor\BladeUi\View\Components` namespace-t `ui` prefixként (`<x-ui::layout.page>`, `<x-ui::form.input-field>`, stb.).
- A komponensek két rétegűek:
  - **Blade view**: `packages/blade-ui/resources/views/components/{kategória}/{nev}.blade.php`, `@props`-szal, generikus Tailwind osztályokkal (`bg-white`, `text-gray-900`, `shadow` — soha projekt-specifikus token).
  - **Opcionális PHP osztály** (ha logika kell, pl. adatlekérés): `packages/blade-ui/src/View/Components/{Kategória}/{Nev}.php`, `Molitor\BladeUi\View\Components\Component`-ből származik, konstruktorban `parent::__construct('components.{kategória}.{nev}')`.
- Kategóriák jelenleg: `feedback`, `form`, `layout`, `typography`, `table` (üres, bővíthető).
- A csomag publish tag-jei: `blade-ui-views` → `resources/views/vendor/blade-ui`, `blade-ui-config` → `config/blade-ui.php`.
- A projekt design tokenjei (`--color-primary`, `bg-gradient-hero`, `shadow-glow`, `font-display` stb.) a **fő projekt** `resources/css/app.css` fájljában, `@theme`/`@utility` blokkokban élnek — nem a csomagban.
- Jelenleg vannak "nyers" sitebuild oldalak, amik még NEM blade-ui komponensekből épülnek: `resources/views/pages/*.blade.php`, saját `resources/views/components/layout.blade.php` + `resources/views/partials/{header,footer}.blade.php`. Ezek jó jelöltek/referenciák az átalakításra.

## 1. fázis — Oldal felépítése blade-ui komponensekből, generikus designdal

Cél: a sitebuild **tartalma és struktúrája** megjelenjen egy oldalon, de a csomag alap (nem sitebuild-specifikus) kinézetével.

1. Térképezd fel a sitebuild HTML-jét szekciónként (hero, stat blokk, kártyák, form, footer stb.), és azonosítsd, melyik blade-ui komponens/layout felel meg neki (`layout.page`, `layout.card`, `layout.header`, `layout.footer`, `layout.main-menu`, `typography.h1`…`h6`, `typography.paragraph`, `form.form`, `form.input-field` stb.).
2. Emeld ki a valós szöveges tartalmat (címek, leírások, gombfeliratok, statisztikák) — ez megy bele a komponensek slotjaiba/propjaiba, NEM a design.
3. Írd meg (vagy alakítsd át) a projekt oldalát ezekkel a komponensekkel, a `blade-ui` alapértelmezett (generikus) kinézetével — ez a köztes állapot még nem fog úgy kinézni, mint a sitebuild, és ez így helyes.
4. Menük esetén ne írj statikus HTML `<a>` listát: használd a `Molitor\Menu` csomagot (`menu()` helper / `MenuItem`) és a `<x-ui::layout.main-menu>` komponenst, hogy a menü adatvezérelt maradjon.

## 2. fázis — Hiányzó komponensek pótlása a blade-ui csomagban

Ha a sitebuild olyan elemet tartalmaz, amihez nincs blade-ui komponens (pl. "stat blokk", "ikonos badge", "hero szekció két oszlopban"):

1. Hozz létre új komponenst **a csomagban** (`packages/blade-ui/resources/views/components/{kategória}/…`), a meglévő kategóriák egyikébe illesztve (vagy indokolt esetben új kategóriába).
2. A komponens `@props`-jai a *strukturális* variánsokat fejezzék ki (pl. `columns`, `icon`, `align`), ne a konkrét projektszíneket.
3. Csak akkor adj hozzá PHP osztályt, ha van logika (adatforrás, számítás, feltétel) — tiszta megjelenítéshez elég az anonymous blade komponens.
4. A default stílus maradjon semleges Tailwind paletta (gray/white/blue skála), hogy más, blade-ui-t használó projektek is értelmes alapállapotot kapjanak.
5. Ha a komponens szöveges tartalmat vár, add meg értelmes default propokat/slotokat, hogy a sitebuild adatait be lehessen tölteni bele.

## 3. fázis — Publish + design ráhúzása a sitebuild kinézetére

Cél: a végeredmény pixelre a sitebuild designja legyen, de a Blade-struktúra (komponensek, propok, slotok) a csomagból jöjjön.

1. Publikáld a nézeteket a fő projektbe, ha még nincs publikálva:
   ```
   php artisan vendor:publish --tag=blade-ui-views
   ```
   Ez létrehozza/frissíti a `resources/views/vendor/blade-ui/components/**` fájlokat — Laravel a Blade view-feloldásnál ezeket részesíti előnyben a csomagbeli eredetivel szemben.
2. **Csak a publikált másolatot** (`resources/views/vendor/blade-ui/...`) írd át a sitebuild konkrét Tailwind osztályaira és design tokenjeire (`bg-gradient-hero`, `shadow-glow`, `text-primary`, `font-display` stb.) — a `@props` szignatúra és a slot-struktúra maradjon ugyanaz, mint a csomagbeli eredetiben, hogy a komponens API ne törjön el.
3. Ha új design token kell (szín, gradiens, betűtípus), azt a fő projekt `resources/css/app.css` `@theme`/`@utility` blokkjaiban vezesd be — soha a csomagban.
4. Ismételd meg minden érintett komponensre/layoutra, amíg az oldal vizuálisan meg nem egyezik a sitebuilddel.

## 4. fázis — Ellenőrzés

- Nézd meg böngészőben az oldalt (`composer run dev` / `npm run dev` fut-e); ha a design nem jelenik meg, kérdezd meg, hogy fut-e a Vite build.
- Ellenőrizd, hogy a csomagban maradt komponens (nem publikált állapotban, más projektben) még mindig értelmesen, generikus stílusban jelenne meg — azaz nem szivárgott bele projekt-specifikus osztály.
- PHP fájlok módosítása után: `vendor/bin/pint --dirty --format agent`.
- Ha a menü/tartalom modellből jön (nem statikus), írj/futtass Pest feature tesztet az oldalra a meglévő konvenciók szerint.

## Ökölszabályok

- **Csomag = struktúra + generikus design.** Fő projekt (publikált nézetek) = az adott sitebuild konkrét kinézete.
- Design token, márka-specifikus szín/gradiens/betűtípus soha ne kerüljön a `packages/blade-ui` alapértelmezett nézeteibe.
- Új komponenst mindig a csomagban hozz létre, ne a fő projekt `resources/views`-ában — így a következő sitebuild is örökli.
- Menü mindig `Molitor\Menu` + `<x-ui::layout.main-menu>`, sosem statikus HTML lista.
- Ha kétséges, hogy egy elem "elég általános"-e ahhoz, hogy a csomagba kerüljön, vagy annyira egyedi, hogy maradjon a fő projektben: ha várhatóan más sitebuildeknél is előjöhet a mintázat (kártya, hero, stat blokk, form mező), menjen a csomagba; ha egyszeri, oldal-specifikus tartalom, maradhat a projekt oldal-blade fájljában.
