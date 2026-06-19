@props(['name', 'label', 'type' => 'text', 'value' => null])

<div {{ $attributes->merge(['class' => 'mb-4']) }}>
    <x-ui::label :for="$name" :value="$label" />
    <x-ui::input type="email" :name="$name" :value="$value" />
    <x-ui::field-error :name="$name" />
</div>
