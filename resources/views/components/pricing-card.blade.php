@props([
    'badge',
    'plan',
    'price',
    'features' => [],
    'featured' => false,
    'delay' => '',
])

<div class="pricing-card {{ $featured ? 'featured' : '' }} reveal {{ $delay }}">
    <div class="badge">{{ $badge }}</div>
    <div class="plan">{{ $plan }}</div>
    <div class="price">{{ $price }}</div>
    <ul>
        @foreach ($features as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
    <x-button variant="sub-btn" href="#">Subscribe</x-button>
</div>
