<x-frontend-layout>

<x-slot name="title">
    Hot Deals | HamroPasal
</x-slot>

<div class="bg-gray-50 min-h-screen">

    {{-- =========================================================
        1. BREADCRUMB
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4 py-4 text-sm text-gray-600">
        <a href="/" class="hover:text-black">Home</a>
        <span class="mx-2">/</span>
        <span class="text-black font-medium">Deals</span>
    </div>

    {{-- =========================================================
        2. HERO SECTION
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4">
        <div class="relative rounded-2xl overflow-hidden shadow-lg">

            <img src="https://images.unsplash.com/photo-1607082349566-187342175e2f"
                 class="w-full h-[320px] object-cover" />

            <div class="absolute inset-0 bg-black/60 flex items-center">
                <div class="px-10 text-white">
                    <h1 class="text-4xl font-bold">Hot Deals & Offers 🔥</h1>
                    <p class="mt-2 text-gray-200">
                        Save big on fashion, electronics, sports & more
                    </p>

                    <button class="mt-4 px-5 py-2 bg-white text-black rounded-lg hover:bg-gray-200">
                        Grab Deals
                    </button>
                </div>
            </div>

        </div>
    </div>

    {{-- =========================================================
        3. DEAL CATEGORIES
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4 mt-10">
        <h2 class="text-xl font-semibold mb-4">Deal Categories</h2>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

            @foreach (['Flash Sale', 'Clearance', 'Bundle Offers', 'Seasonal Deals'] as $cat)
                <div class="bg-white rounded-xl shadow hover:shadow-md transition p-5 text-center">
                    <div class="text-lg font-medium">{{ $cat }}</div>
                    <p class="text-sm text-gray-500 mt-1">Limited time offers</p>
                </div>
            @endforeach

        </div>
    </div>

    {{-- =========================================================
        4. DEAL PRODUCTS GRID
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4 py-12">

        <h2 class="text-2xl font-bold text-gray-900 mb-6">
            Today’s Best Deals
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            {{-- DEAL 1 --}}
            <div class="group relative bg-white rounded-lg overflow-hidden shadow-sm">

                <span class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">
                    -40%
                </span>

                <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9"
                     class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

                <div class="mt-3 flex justify-between px-2 pb-3">
                    <div>
                        <h3 class="text-sm font-medium text-gray-800">Smart Phone X</h3>
                        <p class="text-sm text-gray-500 line-through">$699</p>
                    </div>
                    <p class="text-sm font-semibold text-green-600">$419</p>
                </div>

            </div>

            {{-- DEAL 2 --}}
            <div class="group relative bg-white rounded-lg overflow-hidden shadow-sm">

                <span class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">
                    -30%
                </span>

                <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8"
                     class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

                <div class="mt-3 flex justify-between px-2 pb-3">
                    <div>
                        <h3 class="text-sm font-medium text-gray-800">Laptop Pro</h3>
                        <p class="text-sm text-gray-500 line-through">$1299</p>
                    </div>
                    <p class="text-sm font-semibold text-green-600">$909</p>
                </div>

            </div>

            {{-- DEAL 3 --}}
            <div class="group relative bg-white rounded-lg overflow-hidden shadow-sm">

                <span class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">
                    -50%
                </span>

                <img src="https://images.unsplash.com/photo-1580894908361-967195033215"
                     class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

                <div class="mt-3 flex justify-between px-2 pb-3">
                    <div>
                        <h3 class="text-sm font-medium text-gray-800">Headphones Pro</h3>
                        <p class="text-sm text-gray-500 line-through">$199</p>
                    </div>
                    <p class="text-sm font-semibold text-green-600">$99</p>
                </div>

            </div>

            {{-- DEAL 4 --}}
            <div class="group relative bg-white rounded-lg overflow-hidden shadow-sm">

                <span class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">
                    -25%
                </span>

                <img src="https://images.unsplash.com/photo-1587202372775-e229f172b9d7"
                     class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

                <div class="mt-3 flex justify-between px-2 pb-3">
                    <div>
                        <h3 class="text-sm font-medium text-gray-800">Smart Watch</h3>
                        <p class="text-sm text-gray-500 line-through">$249</p>
                    </div>
                    <p class="text-sm font-semibold text-green-600">$185</p>
                </div>

            </div>

        </div>
    </div>

    {{-- =========================================================
        5. URGENCY BANNER
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4 mb-12">
        <div class="bg-red-600 text-white rounded-2xl p-10 flex flex-col md:flex-row justify-between items-center">

            <div>
                <h2 class="text-2xl font-bold">Limited Time Offer ⏳</h2>
                <p class="text-gray-100 mt-1">Deals expire soon — grab before it's gone!</p>
            </div>

            <button class="mt-4 md:mt-0 px-6 py-2 bg-white text-red-600 rounded-lg font-medium">
                Shop Now
            </button>

        </div>
    </div>

</div>

</x-frontend-layout>