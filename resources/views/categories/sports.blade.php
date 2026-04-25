<x-frontend-layout>

<x-slot name="title">
    Sports Collection | HamroPasal
</x-slot>

<div class="bg-gray-50 min-h-screen">

    {{-- =========================================================
        1. BREADCRUMB
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4 py-4 text-sm text-gray-600">
        <a href="/" class="hover:text-black">Home</a>
        <span class="mx-2">/</span>
        <span class="text-black font-medium">Sports</span>
    </div>

    {{-- =========================================================
        2. HERO SECTION
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4">
        <div class="relative rounded-2xl overflow-hidden shadow-lg">

            <img src="https://images.unsplash.com/photo-1521412644187-c49fa049e84d"
                 class="w-full h-[320px] object-cover" />

            <div class="absolute inset-0 bg-black/50 flex items-center">
                <div class="px-10 text-white">
                    <h1 class="text-4xl font-bold">Sports Collection</h1>
                    <p class="mt-2 text-gray-200">
                        Gear up with premium sportswear, shoes & equipment
                    </p>

                    <button class="mt-4 px-5 py-2 bg-white text-black rounded-lg hover:bg-gray-200">
                        Shop Now
                    </button>
                </div>
            </div>

        </div>
    </div>

    {{-- =========================================================
        3. CATEGORY GRID
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4 mt-10">
        <h2 class="text-xl font-semibold mb-4">Shop by Category</h2>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

            @foreach (['Football', 'Cricket', 'Running', 'Gym'] as $cat)
                <div class="bg-white rounded-xl shadow hover:shadow-md transition p-5 text-center">
                    <div class="text-lg font-medium">{{ $cat }}</div>
                    <p class="text-sm text-gray-500 mt-1">Explore {{ $cat }} gear</p>
                </div>
            @endforeach

        </div>
    </div>

    {{-- =========================================================
        4. PRODUCT GRID
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4 py-12">

        <h2 class="text-2xl font-bold text-gray-900 mb-6">
            Popular Sports Items
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            {{-- PRODUCT 1 --}}
            <div class="group relative bg-white rounded-lg overflow-hidden shadow-sm">

                <img src="https://images.unsplash.com/photo-1606813902913-5b4a5c0a0c2f"
                     class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

                <div class="mt-3 flex justify-between px-2 pb-3">
                    <div>
                        <h3 class="text-sm font-medium text-gray-800">Football Jersey</h3>
                        <p class="text-sm text-gray-500">Premium quality</p>
                    </div>
                    <p class="text-sm font-semibold text-gray-900">$49</p>
                </div>

            </div>

            {{-- PRODUCT 2 --}}
            <div class="group relative bg-white rounded-lg overflow-hidden shadow-sm">

                <img src="https://images.unsplash.com/photo-1517649763962-0c623066013b"
                     class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

                <div class="mt-3 flex justify-between px-2 pb-3">
                    <div>
                        <h3 class="text-sm font-medium text-gray-800">Running Shoes</h3>
                        <p class="text-sm text-gray-500">Lightweight</p>
                    </div>
                    <p class="text-sm font-semibold text-gray-900">$89</p>
                </div>

            </div>

            {{-- PRODUCT 3 --}}
            <div class="group relative bg-white rounded-lg overflow-hidden shadow-sm">

                <img src="https://images.unsplash.com/photo-1521412644187-c49fa049e84d"
                     class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

                <div class="mt-3 flex justify-between px-2 pb-3">
                    <div>
                        <h3 class="text-sm font-medium text-gray-800">Cricket Bat</h3>
                        <p class="text-sm text-gray-500">Pro edition</p>
                    </div>
                    <p class="text-sm font-semibold text-gray-900">$120</p>
                </div>

            </div>

            {{-- PRODUCT 4 --}}
            <div class="group relative bg-white rounded-lg overflow-hidden shadow-sm">

                <img src="https://images.unsplash.com/photo-1599058917212-d750089bc07e"
                     class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

                <div class="mt-3 flex justify-between px-2 pb-3">
                    <div>
                        <h3 class="text-sm font-medium text-gray-800">Gym Gloves</h3>
                        <p class="text-sm text-gray-500">Grip support</p>
                    </div>
                    <p class="text-sm font-semibold text-gray-900">$25</p>
                </div>

            </div>

        </div>
    </div>

    {{-- =========================================================
        5. PROMO BANNER
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4 mb-12">
        <div class="bg-black text-white rounded-2xl p-10 flex flex-col md:flex-row justify-between items-center">

            <div>
                <h2 class="text-2xl font-bold">Sports Mega Sale 🔥</h2>
                <p class="text-gray-300 mt-1">Up to 50% off on sports gear & accessories</p>
            </div>

            <button class="mt-4 md:mt-0 px-6 py-2 bg-white text-black rounded-lg font-medium">
                Explore Deals
            </button>

        </div>
    </div>

</div>

</x-frontend-layout>