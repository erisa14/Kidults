@props([
'type' => 'text', 'name', 'placeholder'
])

<input type={{ $type }} name={{ $name }} placeholder={{ $placeholder }} {{ $attributes->merge(['class' => 'bg-gray-200 font placeholder:text-black placeholder:pl-5  placeholder:font-semibold  rounded-lg text-black shadow-xl']) }} />