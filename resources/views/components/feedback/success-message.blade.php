@if(session('success') || session('status'))
    <x-ui::alerts.success-alert {{ $attributes }}>
        {{ session('success') ?? session('status') }}
    </x-ui::alerts.success-alert>
@endif
