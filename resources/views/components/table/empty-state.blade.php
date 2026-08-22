@props(['colspan' => 1, 'message' => 'Nincs megjeleníthető adat.'])

<tr>
    <td colspan="{{ $colspan }}" {{ $attributes->merge(['class' => 'px-6 py-10 text-center text-sm text-gray-500']) }}>
        {{ $slot->isEmpty() ? $message : $slot }}
    </td>
</tr>
