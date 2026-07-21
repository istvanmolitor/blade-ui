@error($name)
    <p {{ $attributes->merge(['class' => 'text-red-500 text-xs italic mt-1']) }}>{{ $message }}</p>
@enderror
