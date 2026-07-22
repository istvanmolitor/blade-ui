@props(['name', 'label', 'type' => 'text', 'value' => null, 'required' => false, 'autofocus' => false])

<div {{ $attributes->merge(['class' => 'mb-4']) }}>
    <x-ui::form.label :for="$name" :value="$label" />
    <x-ui::form.input :type="$type" :name="$name" :value="$value" :required="$required" :autofocus="$autofocus" />
    <x-ui::form.field-error :name="$name" />
</div>
