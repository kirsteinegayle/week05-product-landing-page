@props([
    'links' => [
        ['label' => 'Home', 'href' => '#hero'],
        ['label' => 'Features', 'href' => '#features'],
        ['label' => 'Pricing', 'href' => '#pricing'],
        ['label' => 'Testimonials', 'href' => '#reviews'],
        ['label' => 'Contact', 'href' => '#location'],
    ],
])

<header class="site-nav">
    <div class="brand">
        <div class="img-placeholder dark brand-logo">
            <div class="ph-fallback">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"><path d="M4 8h13v5a5 5 0 0 1-5 5H9a5 5 0 0 1-5-5V8z"/><path d="M17 9h1.5a2.5 2.5 0 0 1 0 5H17"/></svg>
                <span>Logo</span>
            </div>
            <img src="{{ asset('images/logo.jpg') }}" alt="Daloy logo" onerror="this.style.display='none';">
        </div>
        <div class="mark">DALOY</div>
    </div>

    <nav>
        @foreach ($links as $link)
            <a href="{{ $link['href'] }}">{{ $link['label'] }}</a>
        @endforeach
    </nav>

    <div class="nav-actions">
        <x-button variant="nav-signin" href="#location">Sign in</x-button>
        <x-button variant="nav-cta" href="#pricing">Get started</x-button>
        <button class="nav-burger" id="navBurger" aria-label="Open menu" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>

<nav class="mobile-nav" id="mobileNav">
    @foreach ($links as $link)
        <a href="{{ $link['href'] }}">{{ $link['label'] }}</a>
    @endforeach
    <a href="#location">Sign in</a>
    <x-button variant="mobile-cta" href="#pricing">Get started</x-button>
</nav>
