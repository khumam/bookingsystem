@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-normal text-sm text-slate-800 dark:text-slate-100']) }}>
    {{ $value ?? $slot }}
</label>
