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
  - **PHP osztály** (mindig legyen, lásd lentebb miért): `packages/blade-ui/src/View/Components/{Kategória}/{Nev}.php`, `Molitor\BladeUi\View\Components\Component`-ből származik, konstruktorban `parent::__construct('components.{kategória}.{nev}')`.
- **Kritikus, nem nyilvánvaló csapda:** a provider egyszerre regisztrálja a `Blade::componentNamespace(...)` (osztály-alapú feloldás, a `blade-ui::` view-névtéren keresztül) ÉS a `Blade::anonymousComponentPath(...)`-t (közvetlen fájlrendszer-útvonal a **csomag** könyvtárára). A `resources/views/vendor/blade-ui/...` publish-override **csak** az osztály-alapú (`blade-ui::` névteres) feloldásnál érvényesül. Ha egy komponensnek NINCS PHP osztálya, a `<x-ui::...>` tag az `anonymousComponentPath`-on keresztül, közvetlenül a **csomagbeli** (nem publikált) fájlt olvassa be — a publikált másolat módosításai ekkor csendben hatástalanok maradnak, hibaüzenet nélkül. Emiatt: **minden komponensnek legyen PHP osztálya**, még akkor is, ha nincs benne logika (lásd pl. `LinkButton.php`, `Menu.php` — üres konstruktortest, csak a `parent::__construct(...)` hívás) — ez az egyetlen módja annak, hogy a 3. fázisban a publish+restyle ténylegesen működjön.
- Kategóriák jelenleg: `feedback`, `form`, `layout`, `typography`, `table` (üres, bővíthető).
- A csomag publish tag-jei: `blade-ui-views` → `resources/views/vendor/blade-ui`, `blade-ui-config` → `config/blade-ui.php`.
- A projekt design tokenjei (`--color-primary`, `bg-gradient-hero`, `shadow-glow`, `font-display` stb.) a **fő projekt** `resources/css/app.css` fájljában, `@theme`/`@utility` blokkokban élnek — nem a csomagban.
- Jelenleg vannak "nyers" sitebuild oldalak, amik még NEM blade-ui komponensekből épülnek: `resources/views/pages/*.blade.php`, saját `resources/views/components/layout.blade.php` + `resources/views/partials/{header,footer}.blade.php`. Ezek jó jelöltek/referenciák az átalakításra.

## 1. fázis — Oldal felépítése blade-ui komponensekből, generikus designdal

Cél: a sitebuild **tartalma és struktúrája** megjelenjen egy oldalon, de a csomag alap (nem sitebuild-specifikus) kinézetével.

1. Térképezd fel a sitebuild HTML-jét szekciónként (hero, stat blokk, kártyák, form, footer stb.), és azonosítsd, melyik blade-ui komponens/layout felel meg neki (`layout.page`, `layout.card`, `layout.header`, `layout.footer`, `layout.main-menu`, `typography.h1`…`h6`, `typography.paragraph`, `form.form`, `form.input-field` stb.).
2. Emeld ki a valós szöveges tartalmat (címek, leírások, gombfeliratok, statisztikák) — ez megy bele a komponensek slotjaiba/propjaiba, NEM a design.
3. Írd meg (vagy alakítsd át) a projekt oldalát ezekkel a komponensekkel, a `blade-ui` alapértelmezett (generikus) kinézetével — ez a köztes állapot még nem fog úgy kinézni, mint a sitebuild, és ez így helyes.
4. Menük esetén ne írj statikus HTML `<a>` listát: a menüelemeket a fő projektben állítsd elő (pl. saját menü-forrásból) és add át `items` propként a `<x-ui::layout.main-menu :items="$items">` komponensnek (vagy `menuItems`/`footerMenuItems` propként a `layout-shell`/`header`/`footer` komponenseknek), hogy a menü adatvezérelt maradjon. A `blade-ui` csomag maga nem függ semmilyen menü-csomagtól.

## 2. fázis — Hiányzó komponensek pótlása

Ha a sitebuild olyan elemet tartalmaz, amihez nincs meglévő komponens (pl. "stat blokk", "ikonos badge", "hero szekció két oszlopban"):

0. **Mielőtt létrehoznád, mindig kérdezd meg a felhasználót**, hogy a komponens elég általános-e ahhoz, hogy más sitebuildeknél/projekteknél is előjöhessen (→ menjen a csomagba), vagy ennek az oldalnak/projektnek a sajátja (→ maradjon a fő projektben). Fogalmazz meg egy javaslatot az alábbi heurisztika alapján, de a döntést ne hozd meg egyedül — ez mindig kérdés, nem feltételezés.
   - Általános jelre utal: ismétlődő mintázat (kártya, hero, stat blokk, form mező, badge), nincs benne projekt-specifikus szöveg/branding a struktúrában.
   - Projekt-specifikusra utal: egyedi, csak ezen az oldalon előforduló elrendezés, vagy erősen a projekt tartalmához/domainjéhez kötött felépítés.
1. **Ha általános** → hozd létre a csomagban (`packages/blade-ui/resources/views/components/{kategória}/…`), a meglévő kategóriák egyikébe illesztve (vagy indokolt esetben új kategóriába).
   **Ha nem általános** → hozd létre a fő projektben (`resources/views/components/…`), ne a csomagban.
2. A komponens `@props`-jai a *strukturális* variánsokat fejezzék ki (pl. `columns`, `icon`, `align`), ne a konkrét projektszíneket — ez a csomagba kerülő komponensekre kötelező, a fő projektben lévőkre ajánlott.
3. **Csomagba kerülő komponenshez mindig hozz létre PHP osztályt is**, akkor is, ha nincs benne logika — lásd a 0. pontban leírt anonymousComponentPath-csapdát. PHP osztály nélkül a komponens a 3. fázisban nem lesz restylezhető.
4. Csomagba kerülő komponensnél a default stílus maradjon semleges Tailwind paletta (gray/white/blue skála), hogy más, blade-ui-t használó projektek is értelmes alapállapotot kapjanak.
5. Ha a komponens szöveges tartalmat vár, add meg értelmes default propokat/slotokat, hogy a sitebuild adatait be lehessen tölteni bele.

## 3. fázis — Publish + design ráhúzása a sitebuild kinézetére

Cél: a végeredmény pixelre a sitebuild designja legyen, de a Blade-struktúra (komponensek, propok, slotok) a csomagból jöjjön.

1. Publikáld a nézeteket a fő projektbe, ha még nincs publikálva:
   ```
   php artisan vendor:publish --tag=blade-ui-views
   ```
   Ez létrehozza/frissíti a `resources/views/vendor/blade-ui/components/**` fájlokat — Laravel a Blade view-feloldásnál ezeket részesíti előnyben a csomagbeli eredetivel szemben.
   **SOSE használj `--force`-ot**, ha korábban már restylezett fájlok vannak a `resources/views/vendor/blade-ui`-ban — a `--force` felülírja a már projekt-designra igazított publikált nézeteket is a csomagbeli generikus eredetivel, csendben, visszaigazolás nélkül. `--force` nélkül a `vendor:publish` csak a még hiányzó (pl. újonnan hozzáadott komponens) fájlokat másolja be, a meglévőket békén hagyja — ez a helyes viselkedés egy már folyamatban lévő sitebuild-integrációnál. Ha mégis véletlenül `--force`-ot használtál, minden korábban restylezett fájlt újra át kell írni.
2. **Csak a publikált másolatot** (`resources/views/vendor/blade-ui/...`) írd át a sitebuild konkrét Tailwind osztályaira és design tokenjeire (`bg-gradient-hero`, `shadow-glow`, `text-primary`, `font-display` stb.) — a `@props` szignatúra és a slot-struktúra maradjon ugyanaz, mint a csomagbeli eredetiben, hogy a komponens API ne törjön el.
3. Ha új design token kell (szín, gradiens, betűtípus), azt a fő projekt `resources/css/app.css` `@theme`/`@utility` blokkjaiban vezesd be — soha a csomagban.
4. Ismételd meg minden érintett komponensre/layoutra, amíg az oldal vizuálisan meg nem egyezik a sitebuilddel.
5. **Ha egy restylezett komponens változása nem jelenik meg** annak ellenére, hogy a fájlt jól szerkeszted és `php artisan view:clear`-t is futtattál: ellenőrizd, van-e a komponensnek PHP osztálya (`packages/blade-ui/src/View/Components/...`). PHP osztály nélkül a komponens az `anonymousComponentPath`-on keresztül a csomagbeli (nem publikált) fájlt olvassa — lásd 0. pont. A fix: hozz létre neki egy PHP osztályt (lásd 2. fázis 3. pontja), utána a publish-override már működik.

## 4. fázis — Ellenőrzés

- Nézd meg böngészőben az oldalt (`composer run dev` / `npm run dev` fut-e); ha a design nem jelenik meg, kérdezd meg, hogy fut-e a Vite build.
- Ellenőrizd, hogy a csomagban maradt komponens (nem publikált állapotban, más projektben) még mindig értelmesen, generikus stílusban jelenne meg — azaz nem szivárgott bele projekt-specifikus osztály.
- PHP fájlok módosítása után: `vendor/bin/pint --dirty --format agent`.
- Ha a menü/tartalom modellből jön (nem statikus), írj/futtass Pest feature tesztet az oldalra a meglévő konvenciók szerint.

## Ökölszabályok

- **Csomag = struktúra + generikus design.** Fő projekt (publikált nézetek) = az adott sitebuild konkrét kinézete.
- Design token, márka-specifikus szín/gradiens/betűtípus soha ne kerüljön a `packages/blade-ui` alapértelmezett nézeteibe.
- Új komponenst mindig a csomagban hozz létre, ne a fő projekt `resources/views`-ában — így a következő sitebuild is örökli.
- Menü mindig kívülről átadott `items` prop + `<x-ui::layout.main-menu>`, sosem statikus HTML lista, és sosem menü-csomag közvetlen hivatkozása a csomagból.
- Új komponens létrehozása előtt **mindig kérdezd meg a felhasználót**, hogy általános (csomagba) vagy projekt-specifikus (fő projektbe) legyen-e — ne döntsd el egyedül, még akkor sem, ha egyértelműnek tűnik.
- **Minden csomagbeli komponensnek legyen PHP osztálya**, logika nélkül is — enélkül a publish+restyle (3. fázis) csendben nem működik. Lásd 0. pont.
