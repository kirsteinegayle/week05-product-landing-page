@props([
    'index',
    'category',
    'name',
    'description',
    'price',
    'image',
    'delay' => '',
])

<div class="bestseller-item reveal {{ $delay }}">
    <div class="img-placeholder menu-thumb">
        <div class="ph-fallback">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="12" cy="12" r="3.2"/></svg>
            <span>Add photo</span>
        </div>
        <img src="{{ asset($image) }}" alt="{{ $name }} photo" onerror="this.style.display='none';">
        <span class="bn-badge">{{ $index }}</span>
    </div>
    <div>
        <div class="bs-cat">{{ $category }}</div>
        <h3>{{ $name }}</h3>
        <p>{{ $description }}</p>
    </div>
    <div class="bs-price">{{ $price }}</div>
</div>
