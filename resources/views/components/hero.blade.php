@props([
    'tag' => 'CONCEPCION  LUMBAN  LAGUNA',
    'mark' => 'DALOY',
    'tagline' => 'tigil. hinga. kalma.',
    'description' => 'A quiet current in the middle of Lumban coffee poured slow, for the moments you let yourself stop.',
])

<section class="hero" id="hero">
    <div class="hero-photo" id="heroPhoto"></div>
    <span class="hero-tag">{{ $tag }}</span>

    <div class="img-placeholder dark hero-product reveal is-visible reveal-d1">
        <div class="ph-fallback">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="12" cy="12" r="3.5"/><path d="M8 5l1.2-2h5.6L16 5"/></svg>
            <span><b>Product shot</b>Cup / drink mockup<br><code style="opacity:.7;">images/hero-product.jpg</code></span>
        </div>
        <img src="{{ asset('images/hero-product.jpg') }}" alt="Daloy signature drink" onerror="this.style.display='none';">
    </div>

    <div class="hero-inner">
        <div class="hero-left reveal is-visible">
            <h1 class="hero-mark">{{ $mark }}</h1>
            <p class="hero-tagline">{{ $tagline }}</p>
        </div>
        <div class="hero-side reveal is-visible reveal-d2">
            <p>{{ $description }}</p>
            <x-button variant="link" href="#menu">View the menu</x-button>
            <x-button variant="link" href="#location">Find us</x-button>
        </div>
    </div>

    <div class="scroll-cue"><span>Scroll</span><span class="stem"></span></div>
</section>
