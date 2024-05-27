

@props(['type', 'id', 'placeholder'])

<input type="{{ $type }}" id="{{ $id }}" placeholder="" {{ $attributes->merge(['class' => 'block rounded-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-200  appearance-none  focus:outline-none peer']) }} />
