@props(['items'])

@if ($items)
    <nav>
        <x-ui::menu.sidebar-menu-items :items="$items" />
    </nav>
@endif
