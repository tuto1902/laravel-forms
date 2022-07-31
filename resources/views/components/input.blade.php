@props(['disabled' => false])

@php
$class = $errors->has($attributes->get('name')) ? 
        'p-2 rounded-md shadow-sm border border-red-600 focus:outline-none focus:ring-red-600 focus:ring-1 text-red-600' :
        'p-2 rounded-md shadow-sm border border-gray-300 focus:outline-none focus:ring-purple-300 focus:ring-1';
@endphp

<input {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge(['class' => $class]) }}>
@error($attributes->get('name'))
<div class="text-red-600 text-sm">{{ $message }}</div>
@enderror