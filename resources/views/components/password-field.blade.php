@props(['id', 'label', 'required' => false, 'autofocus' => false])

<div {{ $attributes->merge(['class' => 'mb-6']) }}>
    <x-blade-ui::label :for="$id" :value="$label" />
    <x-blade-ui::input type="password" :name="$id" :id="$id" :required="$required" :autofocus="$autofocus" />
</div>
