@props([
    'quote',
    'name',
    'role',
    'initials',
    'image',
    'delay' => '',
])

<div class="testimonial reveal {{ $delay }}">
    <p class="quote">&quot;{{ $quote }}&quot;</p>
    <div class="who">
        <div class="img-placeholder avatar">
            <div class="ph-fallback">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="12" cy="8" r="3.2"/><path d="M5 20c0-3.5 3-6 7-6s7 2.5 7 6"/></svg>
                <span>{{ $initials }}</span>
            </div>
            <img src="{{ asset($image) }}" alt="{{ $name }} photo" onerror="this.style.display='none';">
        </div>
        <div>
            <div class="name">{{ $name }}</div>
            <div class="role">{{ $role }}</div>
        </div>
    </div>
</div>
