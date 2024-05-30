@props([
    'action', 
    'method' => 'POST'
])

<form 
    method="{{ $method }}"
    action="{{ $action }}" 
    {{ $attributes->merge(['class' => 'text-center font mx-auto pt-10']) }}>
    @csrf
    {{ $slot }}
</form>