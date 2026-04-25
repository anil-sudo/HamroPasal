<x-frontend-layout>

{{-- =====================================================
     HERO BANNER — PREMIUM SLIDER
===================================================== --}}
<section class="relative w-full h-[420px] sm:h-[520px] lg:h-[600px] overflow-hidden bg-gray-900" id="hero">

    {{-- Slides --}}
    @php
        $slides = [
            [
                'img'     => 'https://images.unsplash.com/photo-1607082349566-187342175e2f?w=1600&q=80',
                'badge'   => '🔥 Flash Sale',
                'title'   => 'Big Sale — Up to 60% Off',
                'sub'     => 'Unbeatable deals on Electronics, Fashion & more',
                'btn'     => 'Shop Now',
                'btnHref' => '/shop',
                'accent'  => 'from-red-600 to-red-500',
            ],
            [
                'img'     => 'https://images.unsplash.com/photo-1549298916-b41d501d3772?w=1600&q=80',
                'badge'   => '👟 New Arrivals',
                'title'   => 'Step Into Summer Style',
                'sub'     => 'Fresh kicks and trends dropping every day',
                'btn'     => 'Explore Fashion',
                'btnHref' => '/fashion',
                'accent'  => 'from-orange-600 to-amber-500',
            ],
            [
                'img'     => 'https://images.unsplash.com/photo-1491553895911-0055eca6402d?w=1600&q=80',
                'badge'   => '⚡ Limited Offer',
                'title'   => 'Top Electronics Deals',
                'sub'     => 'Laptops, Phones & Gadgets at lowest prices',
                'btn'     => 'View Electronics',
                'btnHref' => '/electronics',
                'accent'  => 'from-blue-700 to-blue-500',
            ],
            [
                'img'     => 'https://images.unsplash.com/photo-1555529669-e69e7aa0ba9a?w=1600&q=80',
                'badge'   => '🏠 Home Picks',
                'title'   => 'Refresh Your Living Space',
                'sub'     => 'Furniture, Décor & Essentials — delivered fast',
                'btn'     => 'Shop Home',
                'btnHref' => '/home-living',
                'accent'  => 'from-emerald-700 to-teal-500',
            ],
        ];
    @endphp

    @foreach ($slides as $i => $slide)
    <div
        class="hero-slide absolute inset-0 transition-all duration-700 ease-in-out {{ $i === 0 ? 'opacity-100 z-10' : 'opacity-0 z-0' }}"
        data-index="{{ $i }}"
    >
        <img
            src="{{ $slide['img'] }}"
            alt="{{ $slide['title'] }}"
            class="w-full h-full object-cover scale-105 transition-transform duration-[8000ms] ease-linear"
            id="slide-img-{{ $i }}"
        />
        {{-- Gradient overlay --}}
        <div class="absolute inset-0 bg-gradient-to-r from-black/75 via-black/40 to-transparent"></div>

        {{-- Content --}}
        <div class="absolute inset-0 flex items-center">
            <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
                <div class="max-w-xl">
                    {{-- Badge --}}
                    <span class="inline-block bg-gradient-to-r {{ $slide['accent'] }} text-white text-xs font-bold px-3 py-1.5 rounded-full uppercase tracking-wider mb-4 shadow-lg">
                        {{ $slide['badge'] }}
                    </span>
                    {{-- Title --}}
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white leading-tight tracking-tight drop-shadow-md">
                        {{ $slide['title'] }}
                    </h1>
                    {{-- Subtitle --}}
                    <p class="mt-3 text-gray-200 text-base sm:text-lg max-w-md leading-relaxed">
                        {{ $slide['sub'] }}
                    </p>
                    {{-- CTA --}}
                    <div class="mt-6 flex flex-wrap items-center gap-3">
                        <a
                            href="{{ $slide['btnHref'] }}"
                            class="inline-flex items-center gap-2 bg-red-600 hover:bg-red-500 active:bg-red-700 text-white font-bold px-6 py-3 rounded-lg text-sm shadow-lg transition-all duration-150 hover:scale-105"
                        >
                            {{ $slide['btn'] }}
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                        </a>
                        <a href="/deals" class="inline-flex items-center gap-2 border border-white/50 hover:border-white text-white font-semibold px-5 py-3 rounded-lg text-sm backdrop-blur-sm transition-all duration-150 hover:bg-white/10">
                            See All Deals
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    {{-- Left Arrow --}}
    <button
        onclick="heroNav(-1)"
        class="absolute left-4 top-1/2 -translate-y-1/2 z-20 w-10 h-10 sm:w-12 sm:h-12 bg-black/40 hover:bg-black/70 backdrop-blur-sm border border-white/20 text-white rounded-full flex items-center justify-center transition-all duration-150 hover:scale-110"
        aria-label="Previous slide"
    >
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
    </button>

    {{-- Right Arrow --}}
    <button
        onclick="heroNav(1)"
        class="absolute right-4 top-1/2 -translate-y-1/2 z-20 w-10 h-10 sm:w-12 sm:h-12 bg-black/40 hover:bg-black/70 backdrop-blur-sm border border-white/20 text-white rounded-full flex items-center justify-center transition-all duration-150 hover:scale-110"
        aria-label="Next slide"
    >
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
    </button>

    {{-- Dots --}}
    <div class="absolute bottom-5 left-1/2 -translate-x-1/2 z-20 flex items-center gap-2" id="hero-dots">
        @foreach ($slides as $i => $_)
        <button
            onclick="heroGoTo({{ $i }})"
            class="hero-dot w-2.5 h-2.5 rounded-full border-2 border-white transition-all duration-300 {{ $i === 0 ? 'bg-white scale-110' : 'bg-white/30' }}"
            data-dot="{{ $i }}"
            aria-label="Go to slide {{ $i + 1 }}"
        ></button>
        @endforeach
    </div>

    {{-- Progress bar --}}
    <div class="absolute bottom-0 left-0 h-0.5 bg-red-500 z-20 transition-none" id="hero-progress" style="width:0%"></div>
</section>


{{-- =====================================================
     FEATURE BADGES
===================================================== --}}
<section class="bg-white border-b border-gray-100 py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 sm:gap-6">

            @php
                $features = [
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H3m16.5 0h-.75m-7.5 0h7.5m-10.5 0H5.25m9-4.5H5.25M5.25 9h13.5M5.25 4.5h13.5m0 0l-1.5-2.25M18.75 4.5l-1.5-2.25M5.25 4.5L3.75 2.25"/>',
                        'title' => 'Free Delivery',
                        'sub'   => 'On orders above Rs. 999',
                        'color' => 'text-blue-600 bg-blue-50',
                    ],
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>',
                        'title' => 'Secure Payment',
                        'sub'   => '100% safe & encrypted',
                        'color' => 'text-green-600 bg-green-50',
                    ],
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99"/>',
                        'title' => 'Easy Returns',
                        'sub'   => '7-day hassle-free policy',
                        'color' => 'text-orange-600 bg-orange-50',
                    ],
                    [
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155"/>',
                        'title' => '24/7 Support',
                        'sub'   => 'Always here to help you',
                        'color' => 'text-red-600 bg-red-50',
                    ],
                ];
            @endphp

            @foreach ($features as $f)
            <div class="flex items-center gap-3 p-4 rounded-xl border border-gray-100 hover:border-red-100 hover:shadow-md hover:-translate-y-0.5 transition-all duration-200 cursor-default">
                <div class="w-10 h-10 sm:w-12 sm:h-12 {{ $f['color'] }} rounded-xl flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        {!! $f['icon'] !!}
                    </svg>
                </div>
                <div class="min-w-0">
                    <p class="text-sm font-bold text-gray-800 leading-tight">{{ $f['title'] }}</p>
                    <p class="text-xs text-gray-500 mt-0.5 leading-tight">{{ $f['sub'] }}</p>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>


{{-- =====================================================
     CATEGORIES SECTION
===================================================== --}}
<section class="bg-gray-50 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex items-center justify-between mb-7">
            <div>
                <h2 class="text-2xl font-extrabold text-gray-900 tracking-tight">Shop by Category</h2>
                <p class="text-sm text-gray-500 mt-1">Explore our wide range of products</p>
            </div>
            <a href="/categories" class="text-sm font-semibold text-red-600 hover:text-red-500 flex items-center gap-1 transition-colors">
                View All
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
            </a>
        </div>

        @php
            $categories = [
                ['name' => 'Electronics',   'icon' => 'M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 8.25h3', 'color' => 'bg-blue-50 text-blue-600 border-blue-100',   'count' => '2,480 items'],
                ['name' => 'Fashion',       'icon' => 'M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z', 'color' => 'bg-pink-50 text-pink-600 border-pink-100',     'count' => '5,120 items'],
                ['name' => 'Sports',        'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253', 'color' => 'bg-green-50 text-green-600 border-green-100',   'count' => '1,340 items'],
                ['name' => 'Books',         'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253', 'color' => 'bg-amber-50 text-amber-600 border-amber-100',   'count' => '890 items'],
                ['name' => 'Home & Living', 'icon' => 'M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25', 'color' => 'bg-teal-50 text-teal-600 border-teal-100',     'count' => '3,210 items'],
                ['name' => 'Grocery',       'icon' => 'M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z', 'color' => 'bg-orange-50 text-orange-600 border-orange-100', 'count' => '760 items'],
                ['name' => 'Beauty',        'icon' => 'M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z', 'color' => 'bg-purple-50 text-purple-600 border-purple-100', 'count' => '1,450 items'],
                ['name' => 'Toys & Games', 'icon' => 'M14.25 6.087c0-.355.186-.676.401-.959.221-.29.349-.634.349-1.003 0-1.036-1.007-1.875-2.25-1.875s-2.25.84-2.25 1.875c0 .369.128.713.349 1.003.215.283.401.604.401.959v0a.64.64 0 01-.657.643 48.39 48.39 0 01-4.163-.3c.186 1.613.293 3.25.315 4.907a.656.656 0 01-.658.663v0c-.355 0-.676-.186-.959-.401a1.647 1.647 0 00-1.003-.349c-1.036 0-1.875 1.007-1.875 2.25s.84 2.25 1.875 2.25c.369 0 .713-.128 1.003-.349.283-.215.604-.401.959-.401v0c.31 0 .555.26.532.57a48.039 48.039 0 01-.642 5.056c1.518.19 3.058.309 4.616.354a.64.64 0 00.657-.643v0c0-.355-.186-.676-.401-.959a1.647 1.647 0 01-.349-1.003c0-1.035 1.008-1.875 2.25-1.875 1.243 0 2.25.84 2.25 1.875 0 .369-.128.713-.349 1.003-.215.283-.4.604-.4.959v0c0 .333.277.599.61.58a48.1 48.1 0 005.427-.63 48.05 48.05 0 00.582-4.717.532.532 0 00-.533-.57v0c-.355 0-.676.186-.959.401-.29.221-.634.349-1.003.349-1.035 0-1.875-1.007-1.875-2.25s.84-2.25 1.875-2.25c.37 0 .713.128 1.003.349.283.215.604.401.959.401v0a.656.656 0 00.658-.663 48.422 48.422 0 00-.37-5.36c-1.886.342-3.81.574-5.766.689a.578.578 0 01-.61-.58v0z', 'color' => 'bg-red-50 text-red-600 border-red-100',       'count' => '620 items'],
            ];
        @endphp

        <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-8 gap-3">
            @foreach ($categories as $cat)
            <a
                href="/categories/{{ strtolower(str_replace([' ', '&'], ['-', ''], $cat['name'])) }}"
                class="group flex flex-col items-center gap-2.5 p-4 bg-white rounded-xl border {{ $cat['color'] }} hover:shadow-lg hover:-translate-y-1 transition-all duration-200 text-center"
            >
                <div class="w-12 h-12 {{ $cat['color'] }} rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $cat['icon'] }}"/>
                    </svg>
                </div>
                <div>
                    <p class="text-xs font-bold text-gray-800 leading-tight">{{ $cat['name'] }}</p>
                    <p class="text-[10px] text-gray-400 mt-0.5">{{ $cat['count'] }}</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>


{{-- =====================================================
     PROMOTIONAL BANNER — MID-PAGE
===================================================== --}}
<section class="py-8 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

            {{-- Banner 1 --}}
            <div class="relative rounded-2xl overflow-hidden h-48 md:h-56 group cursor-pointer">
                <img
                    src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?w=800&q=80"
                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                    alt="Electronics Deal"
                />
                <div class="absolute inset-0 bg-gradient-to-r from-blue-900/80 to-blue-900/20"></div>
                <div class="absolute inset-0 flex flex-col justify-center px-7">
                    <span class="text-blue-300 text-xs font-bold uppercase tracking-widest mb-1">Limited Time</span>
                    <h3 class="text-white text-2xl font-extrabold leading-tight">Up to 50% Off<br>on Electronics</h3>
                    <a href="/electronics" class="mt-4 inline-flex items-center gap-1.5 bg-white text-blue-700 font-bold text-xs px-4 py-2 rounded-full hover:bg-blue-50 transition-colors w-fit shadow">
                        Shop Now
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

            {{-- Banner 2 --}}
            <div class="relative rounded-2xl overflow-hidden h-48 md:h-56 group cursor-pointer">
                <img
                    src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?w=800&q=80"
                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                    alt="Fashion Deal"
                />
                <div class="absolute inset-0 bg-gradient-to-r from-pink-900/80 to-pink-900/20"></div>
                <div class="absolute inset-0 flex flex-col justify-center px-7">
                    <span class="text-pink-300 text-xs font-bold uppercase tracking-widest mb-1">New Season</span>
                    <h3 class="text-white text-2xl font-extrabold leading-tight">Fashion Fiesta<br>Starts Here</h3>
                    <a href="/fashion" class="mt-4 inline-flex items-center gap-1.5 bg-white text-pink-700 font-bold text-xs px-4 py-2 rounded-full hover:bg-pink-50 transition-colors w-fit shadow">
                        Explore Now
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- =====================================================
     TRENDING PRODUCTS
===================================================== --}}
<section class="bg-gray-50 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex items-center justify-between mb-7">
            <div>
                <h2 class="text-2xl font-extrabold text-gray-900 tracking-tight">Trending Products 🔥</h2>
                <p class="text-sm text-gray-500 mt-1">Most popular picks right now</p>
            </div>
            <a href="/shop" class="text-sm font-semibold text-red-600 hover:text-red-500 flex items-center gap-1 transition-colors">
                View All
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
            </a>
        </div>

        @php
            $trending = [
                ['img' => 'https://tailwindcss.com/plus-assets/img/ecommerce-images/product-page-01-related-product-01.jpg', 'name' => 'Basic Tee',    'color' => 'Black',      'price' => 1_890, 'original' => 2_500, 'badge' => 'HOT'],
                ['img' => 'https://tailwindcss.com/plus-assets/img/ecommerce-images/product-page-01-related-product-02.jpg', 'name' => 'Basic Tee',    'color' => 'Aspen White','price' => 1_890, 'original' => 2_500, 'badge' => null],
                ['img' => 'https://tailwindcss.com/plus-assets/img/ecommerce-images/product-page-01-related-product-03.jpg', 'name' => 'Charcoal Tee', 'color' => 'Charcoal',   'price' => 2_100, 'original' => 2_800, 'badge' => 'SALE'],
                ['img' => 'https://tailwindcss.com/plus-assets/img/ecommerce-images/product-page-01-related-product-04.jpg', 'name' => 'Artwork Tee',  'color' => 'Iso Dots',   'price' => 2_450, 'original' => 3_200, 'badge' => 'NEW'],
            ];
        @endphp

        <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
            @foreach ($trending as $p)
                @include('components.product-card', ['product' => $p])
            @endforeach
        </div>
    </div>
</section>


{{-- =====================================================
     FULL-WIDTH PROMOTIONAL STRIP
===================================================== --}}
<section class="relative overflow-hidden bg-gradient-to-r from-red-700 via-red-600 to-orange-500 py-14">
    <div class="absolute inset-0 opacity-10">
        <svg class="w-full h-full" viewBox="0 0 100 20" preserveAspectRatio="none">
            <polygon points="0,0 100,0 100,15 0,20" fill="white"/>
        </svg>
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between gap-6">
        <div class="text-center md:text-left">
            <div class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm text-white text-xs font-bold px-3 py-1.5 rounded-full uppercase tracking-widest mb-3">
                <span class="w-2 h-2 bg-yellow-300 rounded-full animate-pulse"></span>
                Flash Deal — Ends in 03:47:22
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight leading-tight">⚡ Mega Flash Sale</h2>
            <p class="text-red-100 mt-2 max-w-md text-sm sm:text-base">Jaw-dropping prices on top electronics, fashion & home essentials. Don't miss out!</p>
        </div>
        <div class="flex flex-col sm:flex-row items-center gap-3 flex-shrink-0">
            <div class="grid grid-cols-3 gap-2 text-center">
                @foreach (['03', '47', '22'] as $i => $t)
                <div class="bg-white/20 backdrop-blur-sm border border-white/30 rounded-xl px-4 py-2.5 min-w-[56px]">
                    <p class="text-white text-2xl font-extrabold leading-none" id="countdown-{{ $i }}">{{ $t }}</p>
                    <p class="text-red-200 text-[10px] uppercase tracking-wider mt-0.5">{{ ['Hrs', 'Min', 'Sec'][$i] }}</p>
                </div>
                @endforeach
            </div>
            <a href="/deals" class="bg-white text-red-600 hover:bg-red-50 font-bold px-7 py-3.5 rounded-xl text-sm shadow-xl transition-all duration-150 hover:scale-105 whitespace-nowrap">
                Grab Deals
            </a>
        </div>
    </div>
</section>


{{-- =====================================================
     CUSTOMERS ALSO PURCHASED
===================================================== --}}
<section class="bg-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex items-center justify-between mb-7">
            <div>
                <h2 class="text-2xl font-extrabold text-gray-900 tracking-tight">Customers Also Purchased</h2>
                <p class="text-sm text-gray-500 mt-1">Based on what others are buying</p>
            </div>
            <a href="/shop" class="text-sm font-semibold text-red-600 hover:text-red-500 flex items-center gap-1 transition-colors">
                See More
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
            </a>
        </div>

        @php
            $alsoBought = [
                ['img' => 'https://tailwindcss.com/plus-assets/img/ecommerce-images/product-page-01-related-product-01.jpg', 'name' => 'Basic Tee',    'color' => 'Black',    'price' => 1_890, 'original' => 2_500, 'badge' => null],
                ['img' => 'https://tailwindcss.com/plus-assets/img/ecommerce-images/product-page-01-related-product-02.jpg', 'name' => 'Basic Tee',    'color' => 'White',    'price' => 1_890, 'original' => 2_500, 'badge' => null],
                ['img' => 'https://tailwindcss.com/plus-assets/img/ecommerce-images/product-page-01-related-product-03.jpg', 'name' => 'Charcoal Tee', 'color' => 'Charcoal', 'price' => 2_100, 'original' => 2_800, 'badge' => 'SALE'],
                ['img' => 'https://tailwindcss.com/plus-assets/img/ecommerce-images/product-page-01-related-product-04.jpg', 'name' => 'Artwork Tee',  'color' => 'Iso Dots', 'price' => 2_450, 'original' => 3_200, 'badge' => 'NEW'],
            ];
        @endphp

        <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
            @foreach ($alsoBought as $p)
            @include('components.product-card', ['product' => $p])
            @endforeach
        </div>
    </div>
</section>


{{-- =====================================================
     BEST SELLERS
===================================================== --}}
<section class="bg-gray-50 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex items-center justify-between mb-7">
            <div>
                <h2 class="text-2xl font-extrabold text-gray-900 tracking-tight">Best Sellers ⭐</h2>
                <p class="text-sm text-gray-500 mt-1">Top-rated products loved by our customers</p>
            </div>
            <a href="/best-sellers" class="text-sm font-semibold text-red-600 hover:text-red-500 flex items-center gap-1 transition-colors">
                View All
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
            </a>
        </div>

        @php
            $bestSellers = [
                ['img' => 'https://tailwindcss.com/plus-assets/img/ecommerce-images/product-page-01-related-product-04.jpg', 'name' => 'Artwork Tee',  'color' => 'Peach',    'price' => 2_450, 'original' => 3_200, 'badge' => '⭐ Top'],
                ['img' => 'https://tailwindcss.com/plus-assets/img/ecommerce-images/product-page-01-related-product-01.jpg', 'name' => 'Classic Tee',  'color' => 'Midnight', 'price' => 1_750, 'original' => 2_200, 'badge' => null],
                ['img' => 'https://tailwindcss.com/plus-assets/img/ecommerce-images/product-page-01-related-product-02.jpg', 'name' => 'Summer Tee',   'color' => 'Sky Blue', 'price' => 1_990, 'original' => 2_600, 'badge' => 'SALE'],
                ['img' => 'https://tailwindcss.com/plus-assets/img/ecommerce-images/product-page-01-related-product-03.jpg', 'name' => 'Premium Tee',  'color' => 'Slate',    'price' => 2_890, 'original' => 3_500, 'badge' => null],
            ];
        @endphp

        <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
            @foreach ($bestSellers as $p)
            @include('components.product-card', ['product' => $p])
            @endforeach
        </div>
    </div>
</section>


{{-- =====================================================
     LARGE PROMO BANNER
===================================================== --}}
<section class="py-8 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative rounded-2xl overflow-hidden h-56 sm:h-72 group cursor-pointer">
            <img
                src="https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?w=1600&q=80"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                alt="Weekend Sale Promo"
            />
            <div class="absolute inset-0 bg-gradient-to-r from-gray-900/85 via-gray-900/50 to-transparent"></div>
            <div class="absolute inset-0 flex items-center px-8 sm:px-14">
                <div class="max-w-lg">
                    <span class="inline-block bg-yellow-400 text-yellow-900 text-[10px] font-extrabold uppercase tracking-widest px-3 py-1 rounded-full mb-3 shadow">
                        Weekend Special
                    </span>
                    <h2 class="text-white text-3xl sm:text-4xl font-extrabold tracking-tight leading-snug">
                        Exclusive Weekend<br>Deals Just For You
                    </h2>
                    <p class="text-gray-300 mt-2 text-sm sm:text-base">Extra 15% off using code <span class="text-yellow-400 font-bold">HAMRO15</span></p>
                    <a href="/deals" class="mt-5 inline-flex items-center gap-2 bg-red-600 hover:bg-red-500 text-white font-bold px-6 py-3 rounded-xl text-sm shadow-xl transition-all duration-150 hover:scale-105">
                        Claim Offer
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- =====================================================
     REUSABLE PRODUCT CARD COMPONENT (inline)
     Save this as: resources/views/components/product-card.blade.php
===================================================== --}}
{{--
    If you prefer not to create a separate file, replace all
    @include('components.product-card') calls above with
    the card markup directly. The card markup is below in the script section.
--}}


{{-- =====================================================
     JAVASCRIPT
===================================================== --}}
<script>
(function () {
    /* ---- HERO SLIDER ---- */
    const slides    = document.querySelectorAll('.hero-slide');
    const dots      = document.querySelectorAll('.hero-dot');
    const progress  = document.getElementById('hero-progress');
    let current     = 0;
    let timer       = null;
    const DURATION  = 4000;

    function goTo(n) {
        slides[current].classList.replace('opacity-100', 'opacity-0');
        slides[current].classList.replace('z-10', 'z-0');
        dots[current].classList.remove('bg-white', 'scale-110');
        dots[current].classList.add('bg-white/30');

        current = (n + slides.length) % slides.length;

        slides[current].classList.replace('opacity-0', 'opacity-100');
        slides[current].classList.replace('z-0', 'z-10');
        dots[current].classList.add('bg-white', 'scale-110');
        dots[current].classList.remove('bg-white/30');

        // Progress bar reset
        progress.style.transition = 'none';
        progress.style.width = '0%';
        requestAnimationFrame(() => {
            requestAnimationFrame(() => {
                progress.style.transition = `width ${DURATION}ms linear`;
                progress.style.width = '100%';
            });
        });
    }

    function startTimer() {
        clearInterval(timer);
        timer = setInterval(() => goTo(current + 1), DURATION);
    }

    window.heroNav    = (dir) => { goTo(current + dir); startTimer(); };
    window.heroGoTo   = (n)   => { goTo(n); startTimer(); };

    goTo(0);
    startTimer();

    /* ---- COUNTDOWN TIMER ---- */
    const countdownEls = [
        document.getElementById('countdown-0'),
        document.getElementById('countdown-1'),
        document.getElementById('countdown-2'),
    ];
    let total = 3 * 3600 + 47 * 60 + 22;

    function pad(n) { return String(n).padStart(2, '0'); }

    function tickCountdown() {
        if (total <= 0) return;
        total--;
        const h = Math.floor(total / 3600);
        const m = Math.floor((total % 3600) / 60);
        const s = total % 60;
        if (countdownEls[0]) countdownEls[0].textContent = pad(h);
        if (countdownEls[1]) countdownEls[1].textContent = pad(m);
        if (countdownEls[2]) countdownEls[2].textContent = pad(s);
    }
    setInterval(tickCountdown, 1000);

})();
</script>

</x-frontend-layout>