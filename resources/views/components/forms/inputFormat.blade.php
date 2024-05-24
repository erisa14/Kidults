@props([
'type' => 'text', 'name', 'id'
])

<input type={{ $type }} name={{ $name }} id={{ $id }} {{ $attributes->merge(['class' => 'block py-3 text-sm rounded-lg bg-transparent border-2 border-gray-300 dark:bg-gray-50 text-gray-700 dark:placeholder-gray-50 dark:text-white peer']) }} />
