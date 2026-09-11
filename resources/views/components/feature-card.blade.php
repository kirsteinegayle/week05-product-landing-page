@props([
    'number',
    'title',
    'description',
    'icon' => '',
    'delay' => '',
])

<div class="feature-item reveal {{ $delay }}">
    {!! $icon !!}
    <div class="fn">{{ $number }}</div>
    <h3>{{ $title }}</h3>
    <p>{{ $description }}</p>
</div>
