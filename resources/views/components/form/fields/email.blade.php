@props([
    'id', 'label', 'value' => null, 'required' => false, 'autofocus' => false,
    'disabled' => false, 'inline' => false, 'prefix' => null, 'suffix' => null, 'invalid' => false, 'message' => null,
])

<x-ui::form.field-wrapper :inline="$inline" {{ $attributes }}>
    <x-ui::form.label :for="$id" :value="$label" :inline="$inline" />
    <div @class(['sm:flex-1' => $inline])>
        <x-ui::form.input
            type="email"
            :name="$id"
            :id="$id"
            :value="$value"
            :required="$required"
            :autofocus="$autofocus"
            :disabled="$disabled"
            :prefix="$prefix"
            :suffix="$suffix"
            :invalid="$invalid"
        />
        <x-ui::form.field-error :name="$id" :message="$message" />
    </div>
</x-ui::form.field-wrapper>
