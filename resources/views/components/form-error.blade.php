@props(['name'])
@error($name)
<p {{ $attributes->merge(['class' => "text-xs text-red-500 bold mt-1"]) }}>{{ $message }}</p>
@enderror
