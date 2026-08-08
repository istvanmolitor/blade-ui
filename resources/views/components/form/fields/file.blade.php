@props(['name', 'label', 'multiple' => false, 'accept' => null, 'required' => false])

<x-ui::form.field-wrapper {{ $attributes }}>
    <x-ui::form.label :for="$name" :value="$label" />
    <x-ui::form.file :name="$name" :multiple="$multiple" :accept="$accept" :required="$required" />
    <x-ui::form.field-error :name="$name" />
</x-ui::form.field-wrapper>
