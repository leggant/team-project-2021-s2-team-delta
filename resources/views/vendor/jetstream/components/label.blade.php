@props(['value'])

<label {{ $attributes->merge(['class' => 'font-medium text-lg text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>
