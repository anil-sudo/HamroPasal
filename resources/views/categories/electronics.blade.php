<x-frontend-layout>

<x-slot name="title">
    Electronics Collection | HamroPasal
</x-slot>

<div class="bg-gray-50 min-h-screen">

    {{-- =========================================================
        1. BREADCRUMB
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4 py-4 text-sm text-gray-600">
        <a href="/" class="hover:text-black">Home</a>
        <span class="mx-2">/</span>
        <span class="text-black font-medium">Electronics</span>
    </div>

    {{-- =========================================================
        2. HERO SECTION
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4">
        <div class="relative rounded-2xl overflow-hidden shadow-lg">

            <img src="https://images.unsplash.com/photo-1518770660439-4636190af475"
                 class="w-full h-[320px] object-cover" />

            <div class="absolute inset-0 bg-black/50 flex items-center">
                <div class="px-10 text-white">
                    <h1 class="text-4xl font-bold">Electronics Store</h1>
                    <p class="mt-2 text-gray-200">
                        Discover latest gadgets, smart devices & tech deals
                    </p>

                    <button class="mt-4 px-5 py-2 bg-white text-black rounded-lg hover:bg-gray-200">
                        Shop Now
                    </button>
                </div>
            </div>

        </div>
    </div>

    {{-- =========================================================
        3. CATEGORY SECTION
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4 mt-10">
        <h2 class="text-xl font-semibold mb-4">Shop by Category</h2>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

            @foreach (['Mobiles', 'Laptops', 'Audio', 'Accessories'] as $cat)
                <div class="bg-white rounded-xl shadow hover:shadow-md transition p-5 text-center">
                    <div class="text-lg font-medium">{{ $cat }}</div>
                    <p class="text-sm text-gray-500 mt-1">Explore {{ $cat }}</p>
                </div>
            @endforeach

        </div>
    </div>

    {{-- =========================================================
        4. PRODUCTS GRID
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4 py-12">

        <h2 class="text-2xl font-bold text-gray-900 mb-6">
            Latest Electronics
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            {{-- PRODUCT 1 --}}
            <div class="group relative bg-white rounded-lg overflow-hidden shadow-sm">

                <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9"
                     class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

                <div class="mt-3 flex justify-between px-2 pb-3">
                    <div>
                        <h3 class="text-sm font-medium text-gray-800">Smart Phone X</h3>
                        <p class="text-sm text-gray-500">128GB • 5G</p>
                    </div>
                    <p class="text-sm font-semibold text-gray-900">$699</p>
                </div>

            </div>

            {{-- PRODUCT 2 --}}
            <div class="group relative bg-white rounded-lg overflow-hidden shadow-sm">

                <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8"
                     class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

                <div class="mt-3 flex justify-between px-2 pb-3">
                    <div>
                        <h3 class="text-sm font-medium text-gray-800">Laptop Pro 14</h3>
                        <p class="text-sm text-gray-500">16GB RAM • SSD</p>
                    </div>
                    <p class="text-sm font-semibold text-gray-900">$1299</p>
                </div>

            </div>

            {{-- PRODUCT 3 --}}
            <div class="group relative bg-white rounded-lg overflow-hidden shadow-sm">

                <img src="https://images.unsplash.com/photo-1580894908361-967195033215"
                     class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

                <div class="mt-3 flex justify-between px-2 pb-3">
                    <div>
                        <h3 class="text-sm font-medium text-gray-800">Headphones Pro</h3>
                        <p class="text-sm text-gray-500">Noise Cancelling</p>
                    </div>
                    <p class="text-sm font-semibold text-gray-900">$199</p>
                </div>

            </div>

            {{-- PRODUCT 4 --}}
            <div class="group relative bg-white rounded-lg overflow-hidden shadow-sm">

                <img src="https://images.unsplash.com/photo-1587202372775-e229f172b9d7"
                     class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

                <div class="mt-3 flex justify-between px-2 pb-3">
                    <div>
                        <h3 class="text-sm font-medium text-gray-800">Smart Watch</h3>
                        <p class="text-sm text-gray-500">Fitness Tracker</p>
                    </div>
                    <p class="text-sm font-semibold text-gray-900">$249</p>
                </div>

            </div>

        </div>
    </div>

    {{-- =========================================================
        5. PROMO SECTION
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4 mb-12">
        <div class="bg-black text-white rounded-2xl p-10 flex flex-col md:flex-row justify-between items-center">

            <div>
                <h2 class="text-2xl font-bold">Big Tech Sale 🔥</h2>
                <p class="text-gray-300 mt-1">Up to 40% off on selected electronics</p>
            </div>

            <button class="mt-4 md:mt-0 px-6 py-2 bg-white text-black rounded-lg font-medium">
                Explore Deals
            </button>

        </div>
    </div>

</div>

</x-frontend-layout>