@props([
    'name', 'label', 'options' => [], 'value' => null, 'placeholder' => null, 'required' => false,
    'disabled' => false, 'inline' => false, 'invalid' => false, 'message' => null,
])

<x-ui::form.field-wrapper :inline="$inline" {{ $attributes }}>
    <x-ui::form.label :for="$name" :value="$label" :inline="$inline" />
    <div @class(['sm:flex-1' => $inline])>
        <x-ui::form.select :name="$name" :options="$options" :value="$value" :placeholder="$placeholder" :required="$required" :disabled="$disabled" :invalid="$invalid">
            {{ $slot }}
        </x-ui::form.select>
        <x-ui::form.field-error :name="$name" :message="$message" />
    </div>
</x-ui::form.field-wrapper>
