@props(['text' => null])

<footer {{ $attributes->merge(['class' => 'border-t bg-white']) }}>
    <div class="max-w-5xl mx-auto px-6 py-6 text-center text-sm text-gray-500">
        {{ $text ?? '© '.date('Y').' '.config('app.name', 'Laravel') }}
    </div>
</footer>
