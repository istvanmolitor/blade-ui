@props(['id', 'label', 'required' => false, 'autofocus' => false])

<div {{ $attributes->merge(['class' => 'mb-6']) }}>
    <x-ui::form.label :for="$id" :value="$label" />
    <x-ui::form.input type="password" :name="$id" :id="$id" :required="$required" :autofocus="$autofocus" />
</div>
