@props([
    'name', 'label', 'type' => 'text', 'value' => null, 'required' => false, 'autofocus' => false,
    'disabled' => false, 'inline' => false, 'prefix' => null, 'suffix' => null, 'invalid' => false, 'message' => null,
])

<x-ui::form.field-wrapper :inline="$inline" {{ $attributes }}>
    <x-ui::form.label :for="$name" :value="$label" :inline="$inline" />
    <div @class(['sm:flex-1' => $inline])>
        <x-ui::form.input
            :type="$type"
            :name="$name"
            :value="$value"
            :required="$required"
            :autofocus="$autofocus"
            :disabled="$disabled"
            :prefix="$prefix"
            :suffix="$suffix"
            :invalid="$invalid"
        />
        <x-ui::form.field-error :name="$name" :message="$message" />
    </div>
</x-ui::form.field-wrapper>
