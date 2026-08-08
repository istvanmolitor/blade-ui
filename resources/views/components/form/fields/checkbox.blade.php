@props(['name', 'label', 'checked' => false, 'value' => '1', 'disabled' => false, 'invalid' => false, 'message' => null])

<x-ui::form.field-wrapper {{ $attributes }}>
    <label class="flex items-center gap-2 text-sm text-gray-700" for="{{ $name }}">
        <x-ui::form.checkbox :name="$name" :checked="$checked" :value="$value" :disabled="$disabled" :invalid="$invalid" />
        {{ $label }}
    </label>
    <x-ui::form.field-error :name="$name" :message="$message" />
</x-ui::form.field-wrapper>
