@props(['name', 'label', 'type' => 'text', 'value' => null])

<div {{ $attributes->merge(['class' => 'mb-4']) }}>
    <x-ui::form.label :for="$name" :value="$label" />
    <x-ui::form.input :type="$type" :name="$name" :value="$value" />
    <x-ui::form.field-error :name="$name" />
</div>
