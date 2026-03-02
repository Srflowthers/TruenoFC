@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'bg-[#1a1a1a] border-gray-700 text-white focus:border-brand-red focus:ring-brand-red rounded-none shadow-sm']) }}>