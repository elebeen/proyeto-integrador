@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 focus:border-[#0b847a] focus:ring-[#0b847a] rounded-md shadow-sm']) }}>
