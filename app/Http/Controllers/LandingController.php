<?php

namespace App\Http\Controllers;

class LandingController extends Controller
{
    public function index()
    {
        $features = [
            ['number' => '01', 'title' => 'Slow-brewed, always', 'description' => 'Every cup pulled to order — nothing batched, nothing rushed.', 'icon' => '<svg class="fi" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3"><path d="M4 8h13v5a5 5 0 0 1-5 5H9a5 5 0 0 1-5-5V8z"/><path d="M17 9h1.5a2.5 2.5 0 0 1 0 5H17"/><path d="M8 3c0 1-1 1-1 2s1 1 1 2M12 3c0 1-1 1-1 2s1 1 1 2"/></svg>'],
            ['number' => '02', 'title' => 'Rice meals & bar chow', 'description' => 'Chicksilog to pulutan platters — food that pairs with a slow afternoon or a late bar night.', 'icon' => '<svg class="fi" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3"><circle cx="12" cy="12" r="8.5"/><path d="M12 6.5v11M6.5 12h11"/></svg>'],
            ['number' => '03', 'title' => 'Signature milk & coffee', 'description' => 'From Dirty Matcha to Biscoff Milk — drinks Daloy regulars order by name.', 'icon' => '<svg class="fi" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3"><path d="M6 3v6a4 4 0 0 0 8 0V3"/><path d="M10 13v8"/><path d="M6 21h8"/></svg>'],
            ['number' => '04', 'title' => 'Open around the clock', 'description' => '24/7, every day — the light at Daloy never really goes out.', 'icon' => '<svg class="fi" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3"><circle cx="12" cy="12" r="8.5"/><path d="M12 7v5l3.5 2"/></svg>'],
            ['number' => '05', 'title' => 'Local, where it counts', 'description' => 'Kalamansi, ube, and beans sourced with Lumban growers in mind.', 'icon' => '<svg class="fi" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3"><path d="M12 3c3 3 5 6.5 5 9.5a5 5 0 0 1-10 0C7 9.5 9 6 12 3z"/></svg>'],
            ['number' => '06', 'title' => 'Seats built for staying', 'description' => 'Low tables and warm light, arranged so no one feels rushed to leave.', 'icon' => '<svg class="fi" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3"><path d="M5 11V5a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v6"/><path d="M4 11h16v3H4z"/><path d="M5 14v5M19 14v5"/></svg>'],
        ];

        $menuItems = [
            ['index' => '01', 'category' => 'Signature drink', 'name' => 'Dirty Matcha', 'description' => 'Ceremonial matcha cut with a shot of espresso — the drink regulars order by name.', 'price' => '₱185', 'image' => 'images/menu/dirty-matcha.jpg'],
            ['index' => '02', 'category' => 'Best-selling meal', 'name' => 'Chicksilog', 'description' => 'Fried chicken, garlic rice, and egg — the go-to order any time of day.', 'price' => '₱199', 'image' => 'images/menu/chicksilog.jpg'],
            ['index' => '03', 'category' => 'Fan favorite', 'name' => 'Biscoff Milk', 'description' => 'Cookie-butter milk drink — sweet, cold, and impossible to put down.', 'price' => '₱159', 'image' => 'images/menu/biscoff-milk.jpg'],
            ['index' => '04', 'category' => 'Bar chow favorite', 'name' => 'Dynamite', 'description' => 'Cheese-stuffed chili, breaded and fried — the first thing gone off the table.', 'price' => '₱165', 'image' => 'images/menu/dynamite.jpg'],
            ['index' => '05', 'category' => 'Classic pick', 'name' => 'Caramel Macchiato', 'description' => 'Espresso, caramel, steamed milk — the everyday order that never misses.', 'price' => '₱129', 'image' => 'images/menu/caramel-macchiato.jpg'],
            ['index' => '06', 'category' => 'Bar night staple', 'name' => 'Pale Pilsen', 'description' => 'Cold and classic — the round everyone orders once the sun goes down.', 'price' => '₱70', 'image' => 'images/menu/pale-pilsen.jpg'],
        ];

        $pricingPlans = [
            ['badge' => 'SOLO MERIENDA', 'plan' => 'Solo', 'price' => '₱270', 'features' => ['1 Chicksilog', '1 Chocolate Milk', 'Good for 1 person'], 'featured' => false],
            ['badge' => 'MOST POPULAR', 'plan' => 'Café Date', 'price' => '₱380', 'features' => ['1 Caramel Macchiato + 1 Chocolate Frappe', '1 Buttered Corn to share', 'Good for 2 people'], 'featured' => true],
            ['badge' => 'BARKADA BAR NIGHT', 'plan' => 'Barkada', 'price' => '₱580', 'features' => ['4 Pale Pilsen', 'Sizzling Tofu + Fries + BBQ', 'Good for 4–6 people'], 'featured' => false],
        ];

        $testimonials = [
            ['quote' => 'Yung Spanish Latte nila sobrang sulit, and the fact na 24/7 sila — perfect for late-night study sessions.', 'name' => 'Jayson D.', 'role' => 'Local Resident', 'initials' => 'JD', 'image' => 'images/testimonials/jayson-d.jpg'],
            ['quote' => 'Daloy is the only place in Lumban I actually want to sit in for hours. Ang tahimik, ang ganda ng ilaw.', 'name' => 'Mika R.', 'role' => 'Regular Customer', 'initials' => 'MR', 'image' => 'images/testimonials/mika-r.jpg'],
            ['quote' => 'Passed by Lumban and stopped here on a whim. Best decision — quiet, cozy, and the ube latte was unreal.', 'name' => 'Anna C.', 'role' => 'First-time Visitor', 'initials' => 'AC', 'image' => 'images/testimonials/anna-c.jpg'],
        ];

        return view('pages.landing', compact('features', 'menuItems', 'pricingPlans', 'testimonials'));
    }
}