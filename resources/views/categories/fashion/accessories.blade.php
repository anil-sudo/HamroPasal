<x-frontend-layout>

<x-slot name="title">
    Fashion Accessories | HamroPasal
</x-slot>

<div class="bg-gray-50 min-h-screen">

    {{-- =========================================================
        1. BREADCRUMB
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4 py-4 text-sm text-gray-600">
        <a href="/" class="hover:text-black">Home</a>
        <span class="mx-2">/</span>
        <a href="/fashion" class="hover:text-black">Fashion</a>
        <span class="mx-2">/</span>
        <span class="text-black font-medium">Accessories</span>
    </div>

    {{-- =========================================================
        2. HERO SECTION
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4">
        <div class="relative rounded-2xl overflow-hidden shadow-lg">

            <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f"
                 class="w-full h-[320px] object-cover" />

            <div class="absolute inset-0 bg-black/60 flex items-center">
                <div class="px-10 text-white">
                    <h1 class="text-4xl font-bold">Fashion Accessories</h1>
                    <p class="mt-2 text-gray-200">
                        Complete your style with premium accessories & essentials
                    </p>

                    <button class="mt-4 px-5 py-2 bg-white text-black rounded-lg hover:bg-gray-200">
                        Explore Now
                    </button>
                </div>
            </div>

        </div>
    </div>

    {{-- =========================================================
        3. SUB CATEGORIES
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4 mt-10">
        <h2 class="text-xl font-semibold mb-4">Shop by Category</h2>

        <div class="flex flex-wrap gap-3">

            @foreach (['Bags', 'Watches', 'Belts', 'Jewelry', 'Sunglasses', 'Caps'] as $cat)
                <span class="bg-white px-4 py-2 rounded-full shadow hover:bg-black hover:text-white transition cursor-pointer">
                    {{ $cat }}
                </span>
            @endforeach

        </div>
    </div>

    {{-- =========================================================
        4. FILTER + PRODUCTS SECTION
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4 mt-10 grid grid-cols-1 lg:grid-cols-4 gap-6">

        {{-- FILTER SIDEBAR --}}
        <div class="bg-white p-5 rounded-xl shadow-sm h-fit">

            <h3 class="font-semibold mb-4">Filters</h3>

            <div class="space-y-4 text-sm">

                <div>
                    <p class="font-medium mb-1">Price Range</p>
                    <input type="range" class="w-full">
                </div>

                <div>
                    <p class="font-medium mb-1">Type</p>
                    <select class="w-full border rounded p-2">
                        <option>Luxury</option>
                        <option>Casual</option>
                        <option>Premium</option>
                    </select>
                </div>

                <div>
                    <p class="font-medium mb-1">Gender</p>
                    <div class="flex gap-2">
                        <span class="px-3 py-1 border rounded hover:bg-black hover:text-white cursor-pointer">Men</span>
                        <span class="px-3 py-1 border rounded hover:bg-black hover:text-white cursor-pointer">Women</span>
                        <span class="px-3 py-1 border rounded hover:bg-black hover:text-white cursor-pointer">Unisex</span>
                    </div>
                </div>

            </div>
        </div>

        {{-- PRODUCTS GRID --}}
        <div class="lg:col-span-3">

            <h2 class="text-2xl font-bold text-gray-900 mb-6">
                Accessories Collection
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- PRODUCT 1 --}}
                <div class="group bg-white rounded-lg overflow-hidden shadow-sm">

                    <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f"
                         class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

                    <div class="p-3 flex justify-between">
                        <div>
                            <h3 class="text-sm font-medium text-gray-800">Leather Bag</h3>
                            <p class="text-sm text-gray-500">Premium</p>
                        </div>
                        <p class="text-sm font-semibold text-gray-900">$60</p>
                    </div>

                </div>

                {{-- PRODUCT 2 --}}
                <div class="group bg-white rounded-lg overflow-hidden shadow-sm">

                    <img src="https://images.unsplash.com/photo-1522312346375-d1a52e2b99b3"
                         class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

                    <div class="p-3 flex justify-between">
                        <div>
                            <h3 class="text-sm font-medium text-gray-800">Luxury Watch</h3>
                            <p class="text-sm text-gray-500">Classic</p>
                        </div>
                        <p class="text-sm font-semibold text-gray-900">$120</p>
                    </div>

                </div>

                {{-- PRODUCT 3 --}}
                <div class="group bg-white rounded-lg overflow-hidden shadow-sm">

                    <img src="https://images.unsplash.com/photo-1521334884684-d80222895322"
                         class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

                    <div class="p-3 flex justify-between">
                        <div>
                            <h3 class="text-sm font-medium text-gray-800">Sunglasses</h3>
                            <p class="text-sm text-gray-500">UV Protection</p>
                        </div>
                        <p class="text-sm font-semibold text-gray-900">$35</p>
                    </div>

                </div>

                {{-- PRODUCT 4 --}}
                <div class="group bg-white rounded-lg overflow-hidden shadow-sm">

                    <img src="https://images.unsplash.com/photo-1526178610456-2f9c5b1d9f12"
                         class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

                    <div class="p-3 flex justify-between">
                        <div>
                            <h3 class="text-sm font-medium text-gray-800">Fashion Belt</h3>
                            <p class="text-sm text-gray-500">Leather</p>
                        </div>
                        <p class="text-sm font-semibold text-gray-900">$25</p>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</x-frontend-layout>