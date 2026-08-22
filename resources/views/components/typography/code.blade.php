@props(['code' => ''])

<div {{ $attributes->merge(['class' => 'relative group']) }} data-copy-wrapper>
    <button
        type="button"
        onclick="bladeUiCopyCode(this)"
        class="absolute right-3 top-3 z-10 inline-flex items-center gap-1.5 rounded-md bg-gray-800 px-2.5 py-1.5 text-xs font-medium text-gray-200 opacity-0 transition group-hover:opacity-100 hover:bg-gray-700 focus:opacity-100"
    >
        <x-ui::layout.icon name="copy" data-copy-icon-idle class="h-3.5 w-3.5" />
        <x-ui::layout.icon name="check" data-copy-icon-done class="hidden h-3.5 w-3.5 text-green-400" />
        <span data-copy-label>Másolás</span>
    </button>

    <pre class="overflow-x-auto rounded-lg bg-gray-900 p-6 pr-24 text-gray-100"><code class="font-mono text-sm" data-copy-source>{{ $code !== '' ? trim($code) : trim($slot) }}</code></pre>
</div>

@once
    <script>
        function bladeUiCopyCode(button) {
            const source = button.closest('[data-copy-wrapper]')?.querySelector('[data-copy-source]');

            if (!source || !navigator.clipboard) {
                return;
            }

            navigator.clipboard.writeText(source.textContent).then(() => {
                const label = button.querySelector('[data-copy-label]');
                const idleIcon = button.querySelector('[data-copy-icon-idle]');
                const doneIcon = button.querySelector('[data-copy-icon-done]');
                const original = label.textContent;

                label.textContent = 'Másolva!';
                idleIcon.classList.add('hidden');
                doneIcon.classList.remove('hidden');
                button.disabled = true;

                setTimeout(() => {
                    label.textContent = original;
                    idleIcon.classList.remove('hidden');
                    doneIcon.classList.add('hidden');
                    button.disabled = false;
                }, 1500);
            });
        }
    </script>
@endonce
