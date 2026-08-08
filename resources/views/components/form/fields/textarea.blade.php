@props(['name', 'label', 'rows' => 5, 'value' => null])

<x-ui::form.field-wrapper {{ $attributes }}>
    <x-ui::form.label :for="$name" :value="$label" />
    <x-ui::form.textarea :name="$name" :rows="$rows" :value="$value" />
    <x-ui::form.field-error :name="$name" />
</x-ui::form.field-wrapper>
