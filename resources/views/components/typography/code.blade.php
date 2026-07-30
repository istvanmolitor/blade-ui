@props(['code' => ''])

<pre {{ $attributes->merge(['class' => 'bg-gray-900 text-gray-100 rounded-lg p-6 overflow-x-auto']) }}><code class="text-sm font-mono">{{ $code !== '' ? $code : $slot }}</code></pre>
