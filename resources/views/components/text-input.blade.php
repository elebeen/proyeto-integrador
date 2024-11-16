@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 focus:border-[#003049] focus:ring-[#003049] rounded-md shadow-sm']) }}>
