@extends('blade-ui::layouts.demo')

@section('title', 'Visszajelzések')
@section('description', 'components/feedback &mdash; session flash és validációs hibaüzenetek.')

@section('content')
    @php
        $successMessageCode = <<<'BLADE'
<x-ui::feedback.success-message />
BLADE;

        $errorMessagesCode = <<<'BLADE'
<x-ui::feedback.error-messages />
BLADE;
    @endphp

    <div class="space-y-10">
        <x-ui::demo.example label="Sikeres visszajelzés (session alapján)" :code="$successMessageCode">
            <x-ui::feedback.success-message />
        </x-ui::demo.example>

        <x-ui::demo.example label="Hibaüzenetek ($errors alapján)" :code="$errorMessagesCode">
            <x-ui::feedback.error-messages />
        </x-ui::demo.example>
    </div>
@endsection
