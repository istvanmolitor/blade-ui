@props(['label' => null, 'code' => ''])

<div>
    @if ($label)
        <p class="mb-3 text-base font-semibold text-gray-500">{!! $label !!}</p>
    @endif

    <div {{ $attributes->merge(['class' => 'overflow-hidden rounded-2xl border border-gray-200 bg-white']) }}>
        <div class="p-6">
            {{ $slot }}
        </div>

        @if ($code !== '')
            <div class="border-t border-gray-200 bg-gray-50 p-6">
                <x-ui::typography.code :code="$code" />
            </div>
        @endif
    </div>
</div>
