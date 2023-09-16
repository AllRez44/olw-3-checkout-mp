@props(['value'])
<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-light-200']) }}>
    {{ $value ?? $slot }}
</label>
