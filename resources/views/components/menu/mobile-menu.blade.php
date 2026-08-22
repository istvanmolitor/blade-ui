@props(['items'])

<div id="mobile-menu" class="hidden md:hidden border-t border-gray-100 py-3">
    <div class="flex flex-col space-y-1">
        <x-ui::menu.mobile-menu-items :items="$items" />
    </div>
</div>
