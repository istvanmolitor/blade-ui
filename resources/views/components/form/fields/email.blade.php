@props(['id', 'label', 'value' => null, 'required' => false, 'autofocus' => false])

<x-ui::form.field-wrapper {{ $attributes }}>
    <x-ui::form.label :for="$id" :value="$label" />
    <x-ui::form.input type="email" :name="$id" :id="$id" :value="$value" :required="$required" :autofocus="$autofocus" />
    <x-ui::form.field-error :name="$id" />
</x-ui::form.field-wrapper>
