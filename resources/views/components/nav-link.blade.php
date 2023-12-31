@props(['active'])

@php
$classes = ($active ?? false)
            ? 'transition ease-in-out'
            : 'transition ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} title="{{ $slot }}">
{{ $slot }}
</a>
