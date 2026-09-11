# DALOY — Responsive Product Landing Page

**ITST 302 – Client-Server Technologies | Week 5 | Mini Project 04**

A responsive landing page for **Daloy**, a coffee shop in Concepcion, Lumban, Laguna, built with Laravel, Blade Components, and Tailwind CSS.

> **Note:** This project was created for academic purposes as part of ITST 302 coursework. Menu items and prices shown on the landing page are for demonstration purposes only and do not reflect Daloy's actual pricing, as the owner preferred not to disclose real price ranges for this exercise.

---

## 1. Introduction

A **product landing page** is a single, focused web page designed to introduce a business, product, or service to visitors and guide them toward a specific action — visiting the store, ordering, or getting in touch. Unlike a full multi-page website, a landing page keeps everything a visitor needs to know in one continuous, scrollable experience.

Landing pages matter for businesses because they are often the **first impression** a customer has of a brand online. A well-designed landing page builds trust, communicates what the business offers, and makes it easy for visitors to take the next step — whether that's visiting in person, following on social media, or making a purchase.

The purpose of this project was to design and develop a real, professional landing page for an actual local business — **Daloy**, a 24/7 coffee shop in Lumban, Laguna — using Laravel's Blade templating engine and Tailwind CSS, while applying component-based frontend architecture and responsive design principles.

---

## 2. Objectives

By completing this project, the following learning objectives were accomplished:

- Developed a fully responsive web interface using Tailwind CSS utility classes.
- Created seven reusable Blade Components (`navbar`, `hero`, `button`, `feature-card`, `pricing-card`, `testimonial-card`, `footer`) to eliminate duplicated markup across the page.
- Applied responsive design principles across desktop, tablet, and mobile breakpoints.
- Organized frontend components following Laravel best practices (`layouts/`, `components/`, `pages/`).
- Implemented a consistent UI design system covering typography, spacing, color, and layout.
- Documented the frontend architecture, component design, and design decisions in this README.
- Prepared the project for publication as a professional portfolio piece via GitHub and LinkedIn.

---

## 3. Responsive Web Design

The landing page was built **mobile-first**, meaning base styles target small screens first, with larger layouts progressively added using Tailwind's responsive breakpoints (`sm:`, `md:`, `lg:`).

Key responsive design concepts applied:

- **Mobile-First Design** — base utility classes (e.g. `grid-cols-1`, `text-[34px]`) apply by default; larger breakpoints (`md:grid-cols-3`, `md:text-[52px]`) override them as screen size increases.
- **Responsive Breakpoints** — Tailwind's `md:` (≥768px) and `lg:` (≥1024px) prefixes are used throughout to adjust grid columns, font sizes, spacing, and visibility (e.g. the desktop nav links are hidden on mobile with `hidden md:flex`).
- **Flexbox** — used for the navbar layout, button content alignment, and the footer's bottom row.
- **CSS Grid** — used for the hero's two-column layout, the features section, the pricing cards, and the testimonials grid — all collapsing to a single column on small screens.
- **User Experience (UX)** — generous whitespace, a restrained color palette, and staggered scroll-reveal animations were used to create a calm, unhurried browsing experience that matches Daloy's brand identity ("tigil. hinga. kalma.").

Responsive behavior was tested using Chrome DevTools' device toolbar across common breakpoints (mobile, tablet, and desktop viewport widths).

---

## 4. Tailwind CSS

**Utility-First CSS** means styling elements by composing small, single-purpose classes directly in the markup (e.g. `flex`, `gap-6`, `text-[15px]`) instead of writing custom CSS rules for each component.

**Advantages of Tailwind CSS applied in this project:**
- Faster iteration — layout and spacing could be adjusted directly in Blade files without switching between HTML and CSS files.
- Consistency — a custom design token theme (`@theme` in `app.css`) defines the Daloy color palette and fonts once, then reuses them everywhere via classes like `bg-daloy-espresso` and `font-display`.
- Smaller, more maintainable styling footprint compared to hand-written CSS for every component.

**Responsive utility classes example** (from the features section):
```blade
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-10 gap-y-12">
```
This single line handles the entire responsive behavior of the grid — one column on mobile, two on small screens, three on large screens.

**Component styling example** (custom theme tokens in `resources/css/app.css`):
```css
@theme {
  --font-display: "Montserrat", sans-serif;
  --font-body: "Inter", sans-serif;
  --color-daloy-espresso: #3d2620;
  --color-daloy-coffee: #6e4a34;
  --color-daloy-cream: #f4ead9;
}
```

---

## 5. Blade Components

**Blade Components** are reusable, self-contained pieces of a Laravel view — similar to components in modern JS frameworks — that can accept data through props and be inserted anywhere using a simple tag syntax (e.g. `<x-hero />`).

**Why reusable components improve maintainability:**
- A change to the footer, for example, only needs to happen in one file (`footer.blade.php`) instead of being copy-pasted across every page.
- Components can accept **props**, making them flexible without duplicating markup — the same `pricing-card` component renders three different menu bundles just by passing different data.

**Benefits of modular UI development** demonstrated in this project:
- `feature-card.blade.php` is reused 6 times to render Daloy's "why visit us" points, each with different `number`, `title`, and `description` props.
- `pricing-card.blade.php` accepts a `featured` boolean prop to visually distinguish Daloy's most popular menu bundle without writing a separate component.
- `button.blade.php` supports a `variant` prop (`line` or `solid`) so the same component handles both the hero's minimal link-style CTAs and the bold call-to-action buttons.

**Sample component usage** (from `pages/landing.blade.php`):
```blade
<x-pricing-card
    name="The Signature"
    price="Starting at ₱125"
    featured
    :features="['Spanish Latte or Matcha Daloy', 'Made fresh, no batching', 'Our most-ordered picks']"
/>
```

---

## 6. User Interface Design

**Color Palette** — a warm, sophisticated espresso-toned palette reflecting Daloy's calm, slow-coffee identity:

| Color | Hex | Usage |
|---|---|---|
| Daloy Black | `#16110d` | Hero background, footer, dark sections |
| Daloy Espresso | `#3d2620` | Secondary dark sections, featured card |
| Daloy Coffee | `#6e4a34` | Accent text, labels, numerals |
| Daloy Cream | `#f4ead9` | Light text on dark backgrounds |
| Daloy Beige | `#dcc4a3` | Highlight text, tagline accents |
| Daloy Paper | `#faf6ef` | Main page background |

**Typography** — **Montserrat** (light weights) for display headings and the "DALOY" wordmark, paired with **Inter** for body copy and navigation, creating an editorial, premium contrast between expressive headlines and clean, readable text.

**Iconography** — intentionally minimal; the design avoids stock icon sets in favor of typographic numerals (`01`–`06`) and simple line dividers, keeping the interface feeling editorial rather than templated.

**Button Styles** — two variants: a minimal underline-style link button for the hero (`variant="line"`) and a solid pill-shaped button for primary calls-to-action (`variant="solid"`), giving clear visual hierarchy between secondary and primary actions.

**Card Design** — pricing and testimonial cards use flat color blocks and hairline borders rather than heavy shadows or rounded rectangles, matching Daloy's asymmetrical, editorial aesthetic.

**Layout Consistency** — a shared `max-w-[1320px]` content width and consistent `px-[6vw]` horizontal padding are used across every section to keep the page visually aligned despite its asymmetrical section layouts.

Together, these choices contribute to a calm, unhurried browsing experience that reinforces Daloy's tagline: *tigil. hinga. kalma.*

---

## 7. Folder Structure

```
week05-product-landing-page/
│
├── app/
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php          # Main HTML shell — head, fonts, Vite assets
│   │   ├── components/
│   │   │   ├── navbar.blade.php
│   │   │   ├── hero.blade.php
│   │   │   ├── button.blade.php
│   │   │   ├── feature-card.blade.php
│   │   │   ├── pricing-card.blade.php
│   │   │   ├── testimonial-card.blade.php
│   │   │   └── footer.blade.php
│   │   └── pages/
│   │       └── landing.blade.php      # Assembles all components into the full page
│   ├── css/app.css                    # Tailwind import + Daloy theme tokens
│   └── js/app.js                      # Scroll reveal, parallax, navbar scroll behavior
│
├── public/
├── screenshots/                       # Desktop/tablet/mobile screenshots for documentation
├── documentation/                     # Before-and-after comparison images
└── README.md
```

- **`resources/views/layouts/`** — holds the single main layout that every page extends, ensuring consistent `<head>` setup and shared navbar/footer.
- **`resources/views/components/`** — holds all reusable Blade Components used throughout the page.
- **`resources/views/pages/`** — holds full page views (currently just `landing.blade.php`) that extend the layout and assemble components into a complete page.
- **`public/`** — Laravel's web-accessible root; compiled assets are served from here.
- **`screenshots/`** — contains visual documentation of the finished project across device sizes.
- **`documentation/`** — contains before-and-after comparison images showing the project's evolution.

---

## 8. Screenshots

_Screenshots to be added: Desktop View, Tablet View, Mobile View, Navigation Bar, Hero Section, Features Section, Pricing Section, Testimonials, Footer, Blade Components Folder, GitHub Repository._

---

## Tech Stack

- **Laravel 12** — backend framework and Blade templating
- **Tailwind CSS v4** (via `@tailwindcss/vite`) — utility-first styling
- **Vite** — asset bundling
- **Google Fonts** — Montserrat & Inter

## Business Featured

**Daloy** — a coffee shop located at Purok 3, Lumban, Laguna, Philippines, 4014. Open 24/7.
📷 Instagram: [@daloy.ig](https://instagram.com/daloy.ig)