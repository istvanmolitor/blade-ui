@props(['name', 'label', 'options' => [], 'value' => null, 'placeholder' => null, 'required' => false])

<x-ui::form.field-wrapper {{ $attributes }}>
    <x-ui::form.label :for="$name" :value="$label" />
    <x-ui::form.select :name="$name" :options="$options" :value="$value" :placeholder="$placeholder" :required="$required">
        {{ $slot }}
    </x-ui::form.select>
    <x-ui::form.field-error :name="$name" />
</x-ui::form.field-wrapper>
