@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-[#fdf0d5]']) }}>
    {{ $value ?? $slot }}
</label>
