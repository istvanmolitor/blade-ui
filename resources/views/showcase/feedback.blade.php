@extends('blade-ui::showcase.partials.wrapper')

@section('title', 'Visszajelzések')
@section('description', 'components/feedback &mdash; session flash és validációs hibaüzenetek.')

@section('content')
    <div class="space-y-10">
        <div>
            <p class="mb-2 text-sm font-semibold text-gray-500">&lt;x-ui::feedback.success-message /&gt; &mdash; session('success')/session('status') alapján</p>
            <x-ui::feedback.success-message />
        </div>

        <div>
            <p class="mb-2 text-sm font-semibold text-gray-500">&lt;x-ui::feedback.error-messages /&gt; &mdash; a $errors változó alapján</p>
            <x-ui::feedback.error-messages />
        </div>
    </div>
@endsection
