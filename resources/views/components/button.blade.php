@props([
    'href' => '#',
    'variant' => 'link', // link | nav-cta | nav-signin | mobile-cta | solid | outline | sub-btn
    'target' => null,
])

@php
    $variantClass = match ($variant) {
        'nav-cta' => 'nav-cta',
        'nav-signin' => 'nav-signin',
        'mobile-cta' => 'mn-cta',
        'solid' => 'btn-cta-solid',
        'outline' => 'btn-cta-outline',
        'sub-btn' => 'sub-btn',
        default => 'btn',
    };
@endphp

<a
    href="{{ $href }}"
    @if($target) target="{{ $target }}" rel="noopener" @endif
    {{ $attributes->merge(['class' => $variantClass]) }}
>{{ $slot }}</a>


