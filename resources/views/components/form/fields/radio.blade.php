@props(['name', 'label', 'options' => [], 'value' => null])

@php
    $currentValue = old($name, $value);
@endphp

<x-ui::form.field-wrapper {{ $attributes }}>
    <x-ui::form.label :value="$label" />
    <div class="flex flex-col gap-2">
        @foreach ($options as $optionValue => $optionLabel)
            <label class="flex items-center gap-2 text-sm text-gray-700">
                <x-ui::form.radio :name="$name" :value="$optionValue" :checked="(string) $currentValue === (string) $optionValue" />
                {{ $optionLabel }}
            </label>
        @endforeach
    </div>
    <x-ui::form.field-error :name="$name" />
</x-ui::form.field-wrapper>
