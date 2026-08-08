@if ($errors->any())
    <x-ui::alerts.error-alert {{ $attributes }}>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </x-ui::alerts.error-alert>
@endif
