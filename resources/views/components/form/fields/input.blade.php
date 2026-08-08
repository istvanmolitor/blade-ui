@props(['name', 'label', 'type' => 'text', 'value' => null, 'required' => false, 'autofocus' => false])

<x-ui::form.field-wrapper {{ $attributes }}>
    <x-ui::form.label :for="$name" :value="$label" />
    <x-ui::form.input :type="$type" :name="$name" :value="$value" :required="$required" :autofocus="$autofocus" />
    <x-ui::form.field-error :name="$name" />
</x-ui::form.field-wrapper>
