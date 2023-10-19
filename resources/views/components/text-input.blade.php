@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-slate-200 focus:border-sky-500 focus:ring-indigo-500 rounded-md']) !!}>
