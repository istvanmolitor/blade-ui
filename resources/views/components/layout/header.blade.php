@props(['title' => config('app.name', 'Laravel')])

<header {{ $attributes->merge(['class' => 'border-b bg-white']) }}>
    <div class="max-w-5xl mx-auto px-6 py-4 flex items-center justify-between">
        <x-ui::layout.logo :text="$title" />

        {{ $slot }}
    </div>
</header>
