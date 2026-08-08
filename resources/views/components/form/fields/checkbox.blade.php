@props(['name', 'label', 'checked' => false, 'value' => '1', 'disabled' => false])

<x-ui::form.field-wrapper {{ $attributes }}>
    <label class="flex items-center gap-2 text-sm text-gray-700" for="{{ $name }}">
        <x-ui::form.checkbox :name="$name" :checked="$checked" :value="$value" :disabled="$disabled" />
        {{ $label }}
    </label>
    <x-ui::form.field-error :name="$name" />
</x-ui::form.field-wrapper>
