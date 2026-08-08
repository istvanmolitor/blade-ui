@props([
    'name', 'label', 'rows' => 5, 'value' => null,
    'disabled' => false, 'inline' => false, 'invalid' => false, 'message' => null,
])

<x-ui::form.field-wrapper :inline="$inline" {{ $attributes }}>
    <x-ui::form.label :for="$name" :value="$label" :inline="$inline" />
    <div @class(['sm:flex-1' => $inline])>
        <x-ui::form.textarea :name="$name" :rows="$rows" :value="$value" :disabled="$disabled" :invalid="$invalid" />
        <x-ui::form.field-error :name="$name" :message="$message" />
    </div>
</x-ui::form.field-wrapper>
