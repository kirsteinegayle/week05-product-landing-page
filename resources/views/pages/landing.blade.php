@extends('layouts.app')

@section('title', 'DALOY tigil. hinga. kalma.')

@section('content')

    <x-navbar />

    <x-hero />

    {{-- ===================== About / Brand ===================== --}}
    <section class="section-pad" id="brand">
        <div class="wrap intro-grid">
            <div class="label reveal">About Daloy</div>
            <div class="reveal reveal-d1">
                <h2>Daloy means flow <br>a place built for the pause before it.</h2>
                <p class="body-text">We started Daloy as a small counter in Concepcion, Lumban, for people who needed somewhere to stop moving for a while. No rush, no noise just coffee made with care, quiet corners to sit in, and enough stillness to remember what your own thoughts sound like. Tigil. Hinga. Kalma. Stop. Breathe. Calm.</p>
            </div>
        </div>
    </section>

    {{-- ===================== Features ===================== --}}
    <section class="section-pad" id="features" style="padding-top:0;">
        <div class="wrap">
            <div class="features-grid">
                @foreach ($features as $feature)
                    <x-feature-card
                        :number="$feature['number']"
                        :title="$feature['title']"
                        :description="$feature['description']"
                        :icon="$feature['icon']"
                        :delay="$loop->index % 3 === 0 ? '' : 'reveal-d' . ($loop->index % 3)"
                    />
                @endforeach
            </div>
        </div>
    </section>

    <div class="photo-block photo-full reveal img-placeholder dark">
        <div class="grain"></div>
        <div class="ph-fallback">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3"><path d="M4 21V9l8-6 8 6v12"/><path d="M9 21v-7h6v7"/></svg>
            <span><b>Storefront photo</b>Full shop front, Concepcion<br><code style="opacity:.7;">images/storefront.jpg</code></span>
        </div>
        <img src="{{ asset('images/storefront.jpg') }}" alt="Daloy storefront in Concepcion, Lumban" onerror="this.style.display='none';">
        <div class="cap">Daloy storefront, Concepcion</div>
    </div>

    {{-- ===================== Menu / Best sellers / Pricing ===================== --}}
    <section class="section-pad" id="menu">
        <div class="wrap">
            <div class="menu-head">
                <div class="label reveal">Signature Menu</div>
                <div class="reveal reveal-d1">
                    <h2>Best sellers, made deliberately</h2>
                    <p>The orders regulars ask for by name drinks, meals, and bar chow worth returning for.</p>
                </div>
            </div>

            <div class="menu-list">
                <div class="bestseller-grid">
                    @foreach ($menuItems as $item)
                        <x-menu-item
                            :index="$item['index']"
                            :category="$item['category']"
                            :name="$item['name']"
                            :description="$item['description']"
                            :price="$item['price']"
                            :image="$item['image']"
                            :delay="$loop->index % 3 === 0 ? '' : 'reveal-d' . ($loop->index % 3)"
                        />
                    @endforeach
                </div>
            </div>

            <div class="pricing-grid" id="pricing">
                @foreach ($pricingPlans as $plan)
                    <x-pricing-card
                        :badge="$plan['badge']"
                        :plan="$plan['plan']"
                        :price="$plan['price']"
                        :features="$plan['features']"
                        :featured="$plan['featured']"
                        :delay="$loop->index % 3 === 0 ? '' : 'reveal-d' . ($loop->index % 3)"
                    />
                @endforeach
            </div>
        </div>
    </section>

    <div class="pullquote">
        <div class="wrap">
            <p class="reveal">Some places are made to move fast through. Daloy was made for the opposite.</p>
        </div>
    </div>

    {{-- ===================== Our Story ===================== --}}
    <section class="story section-pad" id="story">
        <div class="wrap intro-grid">
            <div class="label reveal">Our Story</div>
            <div class="reveal reveal-d1">
                <h2>Built slow, on purpose</h2>
                <p class="body-text">Lumban moves at its own pace the river, the embroidery shops, the quiet between town errands. Daloy was built to hold that same rhythm: a small space where people could sit a little longer than they meant to, order a second cup, and let the day slow down around them. Every detail, from the light to the seating, was chosen for calm rather than speed.</p>
            </div>
        </div>
        <div class="wrap">
            <div class="story-figures">
                <div class="story-figure reveal"><div class="num">24/7</div><div class="lab">Open every day, all hours the light is always on.</div></div>
                <div class="story-figure reveal reveal-d1"><div class="num">01</div><div class="lab">Counter in Concepcion, Lumban, Laguna.</div></div>
                <div class="story-figure reveal reveal-d2"><div class="num">2024</div><div class="lab">The year Daloy first opened its doors.</div></div>
            </div>
        </div>
    </section>

    {{-- ===================== Product Showcase ===================== --}}
    <section class="section-pad" id="showcase">
        <div class="wrap">
            <div class="menu-head" style="margin-bottom:50px;">
                <div class="label reveal">Product Showcase</div>
                <div class="reveal reveal-d1">
                    <h2>What ordering at Daloy looks like</h2>
                </div>
            </div>

            <div class="showcase-grid">
                <div class="showcase-cell reveal" style="grid-area:photo;">
                    <span class="sc-label">Product screenshot</span>
                    <div class="photo-block img-placeholder dark" style="height:100%;">
                        <div class="grain"></div>
                        <div class="ph-fallback">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3"><path d="M4 21V9l8-6 8 6v12"/><path d="M9 21v-7h6v7"/></svg>
                            <span><b>Interior photo</b>Counter / seating area<br><code style="opacity:.7;">images/interior.jpg</code></span>
                        </div>
                        <img src="{{ asset('images/interior.jpg') }}" alt="Daloy interior, morning light" onerror="this.style.display='none';">
                        <div class="cap">Interior morning light</div>
                    </div>
                </div>

                <div class="showcase-cell reveal reveal-d1" style="grid-area:dash;">
                    <span class="sc-label">Dashboard preview</span>
                    <div class="mock-dash">
                        <div class="mock-dash-row"><span>Order #35144</span><span>Cash</span></div>
                        <div class="mock-dash-item"><span>Dirty Matcha</span><span>?185</span></div>
                        <div class="mock-dash-item"><span>Chicksilog</span><span>?199</span></div>
                        <div class="mock-dash-item"><span>Buttered Corn</span><span>?119</span></div>
                        <div class="mock-dash-total"><span>Total</span><span>?503</span></div>
                    </div>
                </div>

                <div class="showcase-cell reveal reveal-d2" style="grid-area:mobile;">
                    <span class="sc-label">Mobile view</span>
                    <div class="mock-phone">
                        <div class="mock-phone-notch"></div>
                        <div class="mock-phone-head">DALOY</div>
                        <div class="mock-phone-row">Dirty Matcha <b>?185</b></div>
                        <div class="mock-phone-row">Chicksilog <b>?199</b></div>
                        <div class="mock-phone-btn">Order now</div>
                    </div>
                </div>

                <div class="showcase-cell reveal" style="grid-area:high;">
                    <span class="sc-label">Key highlights</span>
                    <ul class="mock-highlights">
                        <li>Open 24/7 order any hour of the day</li>
                        <li>Cash and mobile-ready checkout at the counter</li>
                        <li>Same menu, day or night, no surprises</li>
                        <li>Walk-in seating, no reservation needed</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================== Experience 02 ===================== --}}
    <section class="section-pad">
        <div class="wrap" style="display:flex; flex-direction:column; gap:min(10vw,110px);">
            <div class="experience-grid reverse">
                <div class="reveal" style="border-top:1px solid var(--line); padding-top:28px;">
                    <div class="fn" style="font-family:'Montserrat',sans-serif; font-weight:200; font-size:56px; color:var(--beige);">02</div>
                    <p style="font-size:14px; color:rgba(61,38,32,0.7); margin-top:14px; max-width:30ch;">Your table, ready on the mobile app order ahead and skip the line.</p>
                </div>
                <div class="experience-copy reveal reveal-d1">
                    <span class="label">Every Cup, Unhurried</span>
                    <h3>Made to order, not made to wait for</h3>
                    <p>Each drink is pulled and poured when you order it nothing batched, nothing rushed. It takes a few extra minutes. That's the point.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================== Testimonials ===================== --}}
    <section class="section-pad" id="reviews">
        <div class="wrap">
            <div class="label reveal">What people say</div>
            <div class="testimonial-grid">
                @foreach ($testimonials as $testimonial)
                    <x-testimonial-card
                        :quote="$testimonial['quote']"
                        :name="$testimonial['name']"
                        :role="$testimonial['role']"
                        :initials="$testimonial['initials']"
                        :image="$testimonial['image']"
                        :delay="$loop->index % 3 === 0 ? '' : 'reveal-d' . ($loop->index % 3)"
                    />
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===================== Call To Action ===================== --}}
    <section style="background:var(--espresso); padding:min(11vw,130px) 0; text-align:center;">
        <div class="wrap">
            <h2 class="reveal" style="color:var(--paper); font-size:clamp(28px,4.5vw,54px); max-width:16ch; margin:0 auto 34px;">Stop by, sit down, stay a while.</h2>
            <p class="reveal reveal-d1" style="color:rgba(244,234,217,0.75); font-size:15px; max-width:44ch; margin:0 auto 40px;">Open every day, all hours Daloy is only a walk away in Concepcion, Lumban.</p>
            <div class="reveal reveal-d2" style="display:flex; gap:16px; justify-content:center; flex-wrap:wrap;">
                <x-button variant="solid" href="#pricing">Order now</x-button>
                <x-button variant="outline" href="tel:09666956126">Contact us</x-button>
                <x-button variant="outline" href="#location">Reserve a table</x-button>
            </div>
        </div>
    </section>

    {{-- ===================== Location ===================== --}}
    <section class="location section-pad" id="location">
        <div class="wrap location-grid">
            <div class="reveal">
                <span class="label" style="color:var(--beige);">Visit Daloy</span>
                <h2 style="margin-top:18px;">Purok 3,<br>Lumban.</h2>
                <p class="addr">Purok 3, Lumban, Laguna, Philippines 4014</p>
                <div class="location-hours">
                    <span>Open daily</span>
                    <span>24/7</span>
                </div>
            </div>
            <div class="location-map reveal reveal-d1"><div class="pin"></div></div>
        </div>
    </section>

    <x-footer />

@endsection
