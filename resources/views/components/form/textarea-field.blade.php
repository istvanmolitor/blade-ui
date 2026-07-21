@props(['name', 'label', 'rows' => 5, 'value' => null])

<div {{ $attributes->merge(['class' => 'mb-4']) }}>
    <x-ui::form.label :for="$name" :value="$label" />
    <x-ui::form.textarea :name="$name" :rows="$rows" :value="$value" />
    <x-ui::form.field-error :name="$name" />
</div>
