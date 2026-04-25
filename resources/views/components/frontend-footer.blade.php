{{-- HamroPasal Footer Component --}}
{{-- resources/views/components/footer.blade.php --}}

<footer class="bg-gray-950 text-gray-300 font-sans">

    {{-- ===== NEWSLETTER STRIP ===== --}}
    <div class="bg-orange-700">
        <div class="max-w-7xl mx-auto px-4 py-5 flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-3 text-white">
                <div class="bg-orange-500 rounded-full p-2 flex-shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <div>
                    <p class="font-bold text-sm sm:text-base leading-tight">Subscribe to our newsletter</p>
                    <p class="text-orange-200 text-xs">Get the latest deals & offers directly in your inbox</p>
                </div>
            </div>
            <div class="flex w-full sm:w-auto max-w-sm gap-0 rounded-lg overflow-hidden border border-orange-500 shadow-lg">
                <input
                    type="email"
                    placeholder="Enter your email..."
                    class="flex-1 px-4 py-2.5 text-sm bg-white text-gray-800 placeholder-gray-400 focus:outline-none min-w-0"
                />
                <button class="bg-gray-900 hover:bg-gray-800 text-white px-5 py-2.5 text-sm font-semibold whitespace-nowrap transition-colors duration-150 flex-shrink-0">
                    Subscribe
                </button>
            </div>
        </div>
    </div>

    {{-- ===== TRUST BADGES ===== --}}
    <div class="border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-4 py-6 grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach ([
                ['icon' => 'M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4', 'title' => 'Free Shipping', 'sub' => 'On orders above NPR 2,000'],
                ['icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'title' => 'Secure Payment', 'sub' => '100% safe transactions'],
                ['icon' => 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15', 'title' => 'Easy Returns', 'sub' => '7-day hassle-free returns'],
                ['icon' => 'M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z', 'title' => '24/7 Support', 'sub' => 'We\'re here to help you'],
            ] as $badge)
            <div class="flex items-center gap-3 group">
                <div class="w-10 h-10 bg-gray-800 group-hover:bg-orange-700 rounded-xl flex items-center justify-center flex-shrink-0 transition-colors duration-200">
                    <svg class="w-5 h-5 text-orange-500 group-hover:text-white transition-colors duration-200" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $badge['icon'] }}"/>
                    </svg>
                </div>
                <div>
                    <p class="text-white text-sm font-semibold leading-tight">{{ $badge['title'] }}</p>
                    <p class="text-gray-500 text-xs leading-snug">{{ $badge['sub'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    {{-- ===== MAIN FOOTER GRID ===== --}}
    <div class="max-w-7xl mx-auto px-4 py-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-8">

            {{-- Column 1: Brand --}}
            <div class="sm:col-span-2 lg:col-span-1">
                {{-- Logo --}}
                <a href="/" class="flex items-center gap-2.5 mb-4 group">
                    <div class="bg-orange-600 group-hover:bg-orange-500 rounded-xl w-9 h-9 flex items-center justify-center shadow-md transition-colors duration-200">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <div class="leading-tight">
                        <span class="text-orange-500 font-extrabold text-xl tracking-tight">Hamro</span><span class="text-white font-extrabold text-xl tracking-tight">Pasal</span>
                        <p class="text-gray-500 text-[9px] tracking-widest uppercase font-medium -mt-0.5">Nepal's Marketplace</p>
                    </div>
                </a>

                <p class="text-gray-400 text-sm leading-relaxed mb-6">
                    Your one-stop online shopping destination in Nepal. Discover thousands of products across all categories — delivered fast and safe to your doorstep.
                </p>

                {{-- App download badges --}}
                <p class="text-xs text-gray-500 uppercase tracking-widest font-semibold mb-3">Download App</p>
                <div class="flex flex-wrap gap-2 mb-6">
                    <a href="#" class="flex items-center gap-2 bg-gray-800 hover:bg-gray-700 border border-gray-700 hover:border-gray-500 text-white text-xs px-3 py-2 rounded-lg transition-all duration-150">
                        <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 24 24"><path d="M17.05 20.28c-.98.95-2.05.8-3.08.35-1.09-.46-2.09-.48-3.24 0-1.44.62-2.2.44-3.06-.35C2.79 15.25 3.51 7.7 9.05 7.4c1.39.07 2.35.74 3.16.79 1.2-.24 2.35-.93 3.63-.84 1.54.12 2.71.73 3.47 1.84-3.15 1.88-2.38 5.99.74 7.14-.55 1.34-1.27 2.67-3 3.95zM12.03 7.25c-.15-2.23 1.66-4.07 3.74-4.25.29 2.58-2.34 4.5-3.74 4.25z"/></svg>
                        App Store
                    </a>
                    <a href="#" class="flex items-center gap-2 bg-gray-800 hover:bg-gray-700 border border-gray-700 hover:border-gray-500 text-white text-xs px-3 py-2 rounded-lg transition-all duration-150">
                        <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 24 24"><path d="M3.18 23.76a2 2 0 001.93-.21l11.4-6.58-2.57-2.57L3.18 23.76zm16.4-10.46L17.1 11.7 14.48 14.3l2.57 2.57 2.53-1.46a1.5 1.5 0 000-2.11zM3.07.24a2 2 0 00-.9 1.72v20.08c0 .72.38 1.36.9 1.72l.1.07 11.24-11.25v-.26L3.07.24zm10.73 10.8L3.17.24l.01-.01 10.77 6.21-2.57 2.57 2.42 2.03z"/></svg>
                        Google Play
                    </a>
                </div>

                {{-- Social Media Icons --}}
                <p class="text-xs text-gray-500 uppercase tracking-widest font-semibold mb-3">Follow Us</p>
                <div class="flex items-center gap-2">
                    {{-- Facebook --}}
                    <a href="#" class="w-9 h-9 bg-gray-800 hover:bg-blue-600 border border-gray-700 hover:border-blue-600 rounded-lg flex items-center justify-center transition-all duration-200 group" title="Facebook" aria-label="Facebook">
                        <svg class="w-4 h-4 text-gray-400 group-hover:text-white transition-colors duration-200" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/>
                        </svg>
                    </a>
                    {{-- Instagram --}}
                    <a href="#" class="w-9 h-9 bg-gray-800 hover:bg-gradient-to-br hover:from-purple-600 hover:via-pink-500 hover:to-orange-400 border border-gray-700 hover:border-pink-500 rounded-lg flex items-center justify-center transition-all duration-200 group" title="Instagram" aria-label="Instagram">
                        <svg class="w-4 h-4 text-gray-400 group-hover:text-white transition-colors duration-200" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
                        </svg>
                    </a>
                    {{-- TikTok --}}
                    <a href="#" class="w-9 h-9 bg-gray-800 hover:bg-black border border-gray-700 hover:border-gray-500 rounded-lg flex items-center justify-center transition-all duration-200 group" title="TikTok" aria-label="TikTok">
                        <svg class="w-4 h-4 text-gray-400 group-hover:text-white transition-colors duration-200" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-2.88 2.5 2.89 2.89 0 01-2.89-2.89 2.89 2.89 0 012.89-2.89c.28 0 .54.04.79.1V9.01a6.34 6.34 0 00-.79-.05 6.34 6.34 0 00-6.34 6.34 6.34 6.34 0 006.34 6.34 6.34 6.34 0 006.33-6.34V8.95a8.16 8.16 0 004.77 1.52V7.02a4.85 4.85 0 01-1-.33z"/>
                        </svg>
                    </a>
                    {{-- YouTube --}}
                    <a href="#" class="w-9 h-9 bg-gray-800 hover:bg-orange-600 border border-gray-700 hover:border-orange-600 rounded-lg flex items-center justify-center transition-all duration-200 group" title="YouTube" aria-label="YouTube">
                        <svg class="w-4 h-4 text-gray-400 group-hover:text-white transition-colors duration-200" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22.54 6.42a2.78 2.78 0 00-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46A2.78 2.78 0 001.46 6.42 29 29 0 001 12a29 29 0 00.46 5.58 2.78 2.78 0 001.95 1.96C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 001.95-1.96A29 29 0 0023 12a29 29 0 00-.46-5.58z"/><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" fill="white"/>
                        </svg>
                    </a>
                    {{-- WhatsApp --}}
                    <a href="#" class="w-9 h-9 bg-gray-800 hover:bg-green-600 border border-gray-700 hover:border-green-600 rounded-lg flex items-center justify-center transition-all duration-200 group" title="WhatsApp" aria-label="WhatsApp">
                        <svg class="w-4 h-4 text-gray-400 group-hover:text-white transition-colors duration-200" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.127.557 4.12 1.531 5.845L.057 23.714a.5.5 0 00.614.65l6.094-1.595A11.955 11.955 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.82 9.82 0 01-5.001-1.37l-.359-.213-3.722.975.994-3.63-.234-.373A9.818 9.818 0 012.182 12C2.182 6.58 6.58 2.182 12 2.182S21.818 6.58 21.818 12 17.42 21.818 12 21.818z"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Column 2: Quick Links --}}
            <div>
                <h3 class="text-white font-bold text-sm uppercase tracking-widest mb-5 flex items-center gap-2">
                    <span class="w-1 h-4 bg-orange-500 rounded-full inline-block"></span>
                    Quick Links
                </h3>
                <ul class="space-y-2.5">
                    @foreach ([
                        ['label' => 'Home', 'href' => '/'],
                        ['label' => 'Shop', 'href' => '/shop'],
                        ['label' => 'All Categories', 'href' => '/categories'],
                        ['label' => 'Today\'s Deals', 'href' => '/deals', 'badge' => 'Hot'],
                        ['label' => 'New Arrivals', 'href' => '/new'],
                        ['label' => 'Best Sellers', 'href' => '/best-sellers'],
                        ['label' => 'About Us', 'href' => '/about'],
                        ['label' => 'Contact', 'href' => '/contact'],
                        ['label' => 'Sell on HamroPasal', 'href' => '/sell'],
                    ] as $link)
                    <li>
                        <a href="{{ $link['href'] }}" class="flex items-center gap-2 text-sm text-gray-400 hover:text-orange-400 transition-colors duration-150 group">
                            <svg class="w-3 h-3 text-gray-600 group-hover:text-orange-500 transition-colors duration-150 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                            </svg>
                            {{ $link['label'] }}
                            @if (isset($link['badge']))
                            <span class="text-[9px] font-bold bg-orange-900 text-orange-400 px-1.5 py-0.5 rounded uppercase tracking-wider">{{ $link['badge'] }}</span>
                            @endif
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Column 3: Customer Service --}}
            <div>
                <h3 class="text-white font-bold text-sm uppercase tracking-widest mb-5 flex items-center gap-2">
                    <span class="w-1 h-4 bg-orange-500 rounded-full inline-block"></span>
                    Customer Service
                </h3>
                <ul class="space-y-2.5">
                    @foreach ([
                        ['label' => 'Help Center', 'href' => '/help'],
                        ['label' => 'Track My Order', 'href' => '/track'],
                        ['label' => 'Return & Refund Policy', 'href' => '/returns'],
                        ['label' => 'Shipping Information', 'href' => '/shipping'],
                        ['label' => 'Frequently Asked Questions', 'href' => '/faq'],
                        ['label' => 'Buyer Protection', 'href' => '/protection'],
                        ['label' => 'Payment Methods', 'href' => '/payment'],
                        ['label' => 'Privacy Policy', 'href' => '/privacy'],
                        ['label' => 'Terms & Conditions', 'href' => '/terms'],
                    ] as $link)
                    <li>
                        <a href="{{ $link['href'] }}" class="flex items-center gap-2 text-sm text-gray-400 hover:text-orange-400 transition-colors duration-150 group">
                            <svg class="w-3 h-3 text-gray-600 group-hover:text-orange-500 transition-colors duration-150 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                            </svg>
                            {{ $link['label'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Column 4: Contact Info --}}
            <div>
                <h3 class="text-white font-bold text-sm uppercase tracking-widest mb-5 flex items-center gap-2">
                    <span class="w-1 h-4 bg-orange-500 rounded-full inline-block"></span>
                    Contact Us
                </h3>

                <ul class="space-y-4 mb-6">
                    <li class="flex items-start gap-3">
                        <div class="w-8 h-8 bg-gray-800 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-500 text-xs font-medium mb-0.5">Phone / WhatsApp</p>
                            <a href="tel:+977-1-4000000" class="text-gray-300 hover:text-orange-400 text-sm font-medium transition-colors duration-150">+977-1-4000000</a><br>
                            <a href="tel:+977-9800000000" class="text-gray-300 hover:text-orange-400 text-sm font-medium transition-colors duration-150">+977-980-0000000</a>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-8 h-8 bg-gray-800 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-500 text-xs font-medium mb-0.5">Email</p>
                            <a href="mailto:support@hamropasal.com.np" class="text-gray-300 hover:text-orange-400 text-sm font-medium transition-colors duration-150 break-all">support@hamropasal.com.np</a>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-8 h-8 bg-gray-800 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-500 text-xs font-medium mb-0.5">Location</p>
                            <p class="text-gray-300 text-sm">Putalisadak, Kathmandu,<br>Bagmati Province, Nepal 🇳🇵</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-8 h-8 bg-gray-800 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-500 text-xs font-medium mb-0.5">Support Hours</p>
                            <p class="text-gray-300 text-sm">Sun – Fri: 9:00 AM – 6:00 PM</p>
                            <p class="text-gray-500 text-xs">Saturday: Closed</p>
                        </div>
                    </li>
                </ul>

                {{-- Live Chat Button --}}
                <a href="#" class="inline-flex items-center gap-2 bg-orange-700 hover:bg-orange-600 active:bg-orange-800 text-white text-xs font-semibold px-4 py-2.5 rounded-lg transition-colors duration-150 shadow-md w-full justify-center">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                    Start Live Chat
                </a>
            </div>

        </div>
    </div>

    {{-- ===== BOTTOM BAR ===== --}}
    <div class="border-t border-gray-800 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 py-5">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4">

                {{-- Copyright --}}
                <div class="text-center md:text-left">
                    <p class="text-gray-500 text-xs">
                        © {{ date('Y') }} <span class="text-orange-500 font-semibold">HamroPasal</span>. All rights reserved.
                        Built with ❤️ in Nepal 🇳🇵
                    </p>
                    <p class="text-gray-600 text-[10px] mt-0.5">
                        Registered under Department of Commerce, Government of Nepal
                    </p>
                </div>

                {{-- Payment Methods --}}
                <div class="flex items-center gap-2 flex-wrap justify-center">
                    <span class="text-gray-600 text-[10px] uppercase tracking-widest font-medium mr-1">Accepted Payments:</span>

                    {{-- Visa --}}
                    <div class="bg-white rounded px-2.5 py-1 flex items-center shadow-sm" title="Visa">
                        <svg class="h-4 w-auto" viewBox="0 0 48 16" fill="none">
                            <text x="0" y="13" font-size="13" font-weight="900" font-family="Arial" fill="#1A1F71">VISA</text>
                        </svg>
                    </div>

                    {{-- MasterCard --}}
                    <div class="bg-white rounded px-2 py-1 flex items-center gap-0.5 shadow-sm" title="MasterCard">
                        <div class="w-5 h-5 bg-orange-600 rounded-full opacity-90"></div>
                        <div class="w-5 h-5 bg-yellow-400 rounded-full opacity-90 -ml-2.5"></div>
                    </div>

                    {{-- eSewa --}}
                    <div class="bg-green-600 text-white rounded px-2.5 py-1 text-[10px] font-bold shadow-sm tracking-wide" title="eSewa">
                        eSewa
                    </div>

                    {{-- Khalti --}}
                    <div class="bg-purple-700 text-white rounded px-2.5 py-1 text-[10px] font-bold shadow-sm tracking-wide" title="Khalti">
                        Khalti
                    </div>

                    {{-- IME Pay --}}
                    <div class="bg-orange-500 text-white rounded px-2.5 py-1 text-[10px] font-bold shadow-sm tracking-wide" title="IME Pay">
                        IME Pay
                    </div>

                    {{-- Cash on Delivery --}}
                    <div class="bg-gray-700 border border-gray-600 text-gray-300 rounded px-2.5 py-1 flex items-center gap-1 text-[10px] font-semibold shadow-sm" title="Cash on Delivery">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        COD
                    </div>
                </div>

                {{-- Language / Currency Selector --}}
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-1.5 bg-gray-800 hover:bg-gray-700 border border-gray-700 hover:border-gray-600 text-gray-300 rounded-lg px-3 py-1.5 text-xs cursor-pointer transition-all duration-150">
                        <span>🇳🇵</span>
                        <span class="font-medium">NPR</span>
                        <svg class="w-3 h-3 text-gray-500" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </div>
                    <div class="flex items-center gap-1.5 bg-gray-800 hover:bg-gray-700 border border-gray-700 hover:border-gray-600 text-gray-300 rounded-lg px-3 py-1.5 text-xs cursor-pointer transition-all duration-150">
                        <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/>
                        </svg>
                        <span class="font-medium">Nepali</span>
                        <svg class="w-3 h-3 text-gray-500" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- Scroll to top button (fixed) --}}
    <button
        onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
        class="fixed bottom-6 right-6 w-10 h-10 bg-orange-600 hover:bg-orange-500 active:bg-orange-700 text-white rounded-full shadow-lg flex items-center justify-center transition-all duration-200 hover:scale-110 z-40"
        title="Scroll to top"
        aria-label="Scroll to top"
    >
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7"/>
        </svg>
    </button>

</footer>