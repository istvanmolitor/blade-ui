@props(['name', 'label', 'rows' => 5, 'value' => null])

<div {{ $attributes->merge(['class' => 'mb-4']) }}>
    <x-ui::label :for="$name" :value="$label" />
    <x-ui::textarea :name="$name" :rows="$rows" :value="$value" />
    <x-ui::field-error :name="$name" />
</div>
