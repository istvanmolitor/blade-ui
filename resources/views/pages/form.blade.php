@extends('blade-ui::layouts.demo')

@section('title', 'Űrlapok')
@section('description', 'components/form &mdash; mezők, wrapperek és a teljes Form komponens.')

@section('content')
    @php
        $formCode = <<<'BLADE'
<x-ui::form.form action="#" method="POST">
    <x-ui::form.fields.input name="name" label="Név" placeholder="Kovács János" />
    <x-ui::form.fields.select name="country" label="Ország" :options="$countries" placeholder="Válassz országot" />
    <x-ui::buttons.primary-button>Mentés</x-ui::buttons.primary-button>
</x-ui::form.form>
BLADE;

        $fieldTypesCode = <<<'BLADE'
<x-ui::form.fields.input name="text" label="Szöveg" value="Minta szöveg" />
<x-ui::form.fields.email id="email" label="E-mail" value="pelda@example.com" />
<x-ui::form.fields.password id="password" label="Jelszó" />
<x-ui::form.fields.textarea name="textarea" label="Megjegyzés" value="Több soros szöveg mező." />
<x-ui::form.fields.select name="select" label="Legördülő" :options="$countries" placeholder="Válassz" />
<x-ui::form.fields.radio name="radio" label="Rádiógombok" :options="['yes' => 'Igen', 'no' => 'Nem']" value="yes" />
<x-ui::form.fields.checkbox name="checkbox" label="Elfogadom a feltételeket" />
<x-ui::form.fields.date name="date" label="Dátum" />
<x-ui::form.fields.time name="time" label="Időpont" />
<x-ui::form.fields.file name="file" label="Fájl feltöltés" />
BLADE;

        $invalidStateCode = <<<'BLADE'
<x-ui::form.fields.input name="required_field" label="Kötelező mező" :invalid="true" message="Ez a mező kötelező." />
BLADE;
    @endphp

    <div class="space-y-10">
        <x-ui::demo.example label="Teljes űrlap (csrf, method spoofing, beépített visszajelzés)" :code="$formCode">
            <x-ui::form.form action="#" method="POST" class="max-w-xl rounded-2xl border border-gray-200 bg-white p-6">
                <x-ui::form.fields.input name="name" label="Név" placeholder="Kovács János" />
                <x-ui::form.fields.select name="country" label="Ország" :options="$countries" placeholder="Válassz országot" />
                <x-ui::buttons.primary-button>Mentés</x-ui::buttons.primary-button>
            </x-ui::form.form>
        </x-ui::demo.example>

        <x-ui::demo.example label="Mező típusok" :code="$fieldTypesCode">
            <div class="grid max-w-xl gap-4 rounded-2xl border border-gray-200 bg-white p-6">
                <x-ui::form.fields.input name="showcase_text" label="Szöveg" value="Minta szöveg" />
                <x-ui::form.fields.email id="showcase_email" label="E-mail" value="pelda@example.com" />
                <x-ui::form.fields.password id="showcase_password" label="Jelszó" />
                <x-ui::form.fields.textarea name="showcase_textarea" label="Megjegyzés" value="Több soros szöveg mező." />
                <x-ui::form.fields.select name="showcase_select" label="Legördülő" :options="$countries" placeholder="Válassz" />
                <x-ui::form.fields.radio name="showcase_radio" label="Rádiógombok" :options="['yes' => 'Igen', 'no' => 'Nem']" value="yes" />
                <x-ui::form.fields.checkbox name="showcase_checkbox" label="Elfogadom a feltételeket" />
                <x-ui::form.fields.date name="showcase_date" label="Dátum" />
                <x-ui::form.fields.time name="showcase_time" label="Időpont" />
                <x-ui::form.fields.file name="showcase_file" label="Fájl feltöltés" />
            </div>
        </x-ui::demo.example>

        <x-ui::demo.example label="Hibaállapot (invalid prop)" :code="$invalidStateCode">
            <div class="grid max-w-xl gap-4 rounded-2xl border border-gray-200 bg-white p-6">
                <x-ui::form.fields.input name="showcase_invalid" label="Kötelező mező" :invalid="true" message="Ez a mező kötelező." />
            </div>
        </x-ui::demo.example>
    </div>
@endsection
