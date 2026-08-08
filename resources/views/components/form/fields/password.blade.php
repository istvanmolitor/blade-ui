@props(['id', 'label', 'required' => false, 'autofocus' => false])

<x-ui::form.field-wrapper {{ $attributes }}>
    <x-ui::form.label :for="$id" :value="$label" />
    <x-ui::form.input type="password" :name="$id" :id="$id" :required="$required" :autofocus="$autofocus" />
</x-ui::form.field-wrapper>
