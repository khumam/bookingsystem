@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-gray-700 dark:text-gray-100 mb-2']) }}>
    {{ $value ?? $slot }}
</label>
