@props([
    'quickLinks' => [
        ['label' => 'Home', 'href' => '#hero'],
        ['label' => 'Features', 'href' => '#features'],
        ['label' => 'Pricing', 'href' => '#pricing'],
        ['label' => 'Testimonials', 'href' => '#reviews'],
    ],
])

<footer>
    <div class="wrap">
        <div class="footer-top">
            <div class="footer-brand">
                <div class="display">DALOY</div>
                <p>tigil. hinga. kalma. a slow coffee counter in Lumban, Laguna.</p>
            </div>

            <div class="footer-col">
                <div class="h">Quick Links</div>
                @foreach ($quickLinks as $link)
                    <a href="{{ $link['href'] }}">{{ $link['label'] }}</a>
                @endforeach
            </div>

            <div class="footer-col">
                <div class="h">Location</div>
                <p>Purok 3, Lumban,<br>Philippines, 4014</p>
            </div>

            <div class="footer-col">
                <div class="h">Contact</div>
                <a href="tel:09666956126">0966 695 6126</a>
                <a href="mailto:daloy122024@gmail.com">daloy122024@gmail.com</a>
            </div>

            <div class="footer-col">
                <div class="h">Follow &amp; Hours</div>
                <div class="social-icons">
                    <a href="https://instagram.com/daloy.ig" target="_blank" rel="noopener" aria-label="Instagram">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"><rect x="3.5" y="3.5" width="17" height="17" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17" cy="7" r="0.8" fill="currentColor" stroke="none"/></svg>
                    </a>
                    <a href="https://facebook.com" target="_blank" rel="noopener" aria-label="Facebook">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"><path d="M15 4h-2.5A3.5 3.5 0 0 0 9 7.5V10H7v3h2v7h3v-7h2.5l.5-3H12V7.5c0-.5.3-.8.8-.8H15V4z"/></svg>
                    </a>
                </div>
                <p style="margin-top:12px;">Open 24/7</p>
            </div>
        </div>

        <div class="footer-bottom">
            <span> {{ date('Y') }} Daloy. All rights reserved.</span>
            <span>Concepcion, Lumban, Laguna</span>
        </div>
    </div>
</footer>
