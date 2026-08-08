@extends('blade-ui::showcase.partials.wrapper')

@section('title', 'Űrlapok')
@section('description', 'components/form &mdash; mezők, wrapperek és a teljes Form komponens.')

@section('content')
    <div class="space-y-10">
        <div>
            <p class="mb-3 text-sm font-semibold text-gray-500">&lt;x-ui::form.form&gt; &mdash; csrf, method spoofing, beépített feedback</p>
            <x-ui::form.form action="#" method="POST" class="max-w-xl rounded-2xl border border-gray-200 bg-white p-6">
                <x-ui::form.fields.input name="name" label="Név" placeholder="Kovács János" />
                <x-ui::form.fields.select name="country" label="Ország" :options="$countries" placeholder="Válassz országot" />
                <x-ui::buttons.primary-button>Mentés</x-ui::buttons.primary-button>
            </x-ui::form.form>
        </div>

        <div>
            <p class="mb-3 text-sm font-semibold text-gray-500">Mező típusok (x-ui::form.fields.*)</p>
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
        </div>

        <div>
            <p class="mb-3 text-sm font-semibold text-gray-500">Hibaállapot (invalid prop)</p>
            <div class="grid max-w-xl gap-4 rounded-2xl border border-gray-200 bg-white p-6">
                <x-ui::form.fields.input name="showcase_invalid" label="Kötelező mező" :invalid="true" message="Ez a mező kötelező." />
            </div>
        </div>
    </div>
@endsection
