@props(['name', 'type' => 'text'])
<div class="mb-6">
    <x-form.label name="{{ $name }}"/>
    
    <input class="border border-gray-200 rounded p-2 w-full"
     name="{{ $name }}" 
     id="{{ $name }}" 
     type="{{ $type }}" 
     {{-- required(Pass in required when you need it) --}}
     {{ "$attributes('value' => old($name))" }} 
     value="{{ old($name) }}">
    <x-form.error name="{{ $name }}"/>
</div>