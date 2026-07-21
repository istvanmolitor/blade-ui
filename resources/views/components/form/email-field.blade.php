@props(['id', 'label', 'value' => null, 'required' => false, 'autofocus' => false])

<div {{ $attributes->merge(['class' => 'mb-4']) }}>
    <x-ui::form.label :for="$id" :value="$label" />
    <x-ui::form.input type="email" :name="$id" :id="$id" :value="$value" :required="$required" :autofocus="$autofocus" />
    <x-ui::form.field-error :name="$id" />
</div>
