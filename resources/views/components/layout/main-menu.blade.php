@props(['items' => []])

<x-ui::layout.menu {{ $attributes }}>
    @foreach ($items as $item)
        <x-ui::layout.menu-item :href="$item->getUrl() ?? '#'" :active="$item->isActive()">
            {{ $item->getLabel() }}
        </x-ui::layout.menu-item>
    @endforeach
</x-ui::layout.menu>
