@props(['name', 'label', 'value' => null, 'required' => false, 'autofocus' => false])

<div {{ $attributes->merge(['class' => 'mb-4']) }}>
    <x-ui::label :for="$name" :value="$label" />
    <x-ui::input type="email" :name="$name" :value="$value" :required="$required" :autofocus="$autofocus" />
</div>
