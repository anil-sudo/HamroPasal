<x-frontend-layout>

<x-slot name="title">
    Men Fashion | HamroPasal
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
        <span class="text-black font-medium">Men</span>
    </div>

    {{-- =========================================================
        2. HERO SECTION
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4">
        <div class="relative rounded-2xl overflow-hidden shadow-lg">

            <img src="https://images.unsplash.com/photo-1520975928316-9d8d7f3d0a8d"
                 class="w-full h-[320px] object-cover" />

            <div class="absolute inset-0 bg-black/60 flex items-center">
                <div class="px-10 text-white">
                    <h1 class="text-4xl font-bold">Men’s Fashion</h1>
                    <p class="mt-2 text-gray-200">
                        Upgrade your style with premium men’s clothing & accessories
                    </p>

                    <button class="mt-4 px-5 py-2 bg-white text-black rounded-lg hover:bg-gray-200">
                        Shop Now
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

            @foreach (['T-Shirts', 'Shirts', 'Jeans', 'Jackets', 'Shoes', 'Accessories'] as $cat)
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
                    <p class="font-medium mb-1">Price</p>
                    <input type="range" class="w-full">
                </div>

                <div>
                    <p class="font-medium mb-1">Size</p>
                    <div class="flex flex-wrap gap-2">
                        @foreach (['S','M','L','XL'] as $size)
                            <span class="px-3 py-1 border rounded cursor-pointer hover:bg-black hover:text-white">
                                {{ $size }}
                            </span>
                        @endforeach
                    </div>
                </div>

                <div>
                    <p class="font-medium mb-1">Brand</p>
                    <select class="w-full border rounded p-2">
                        <option>Nike</option>
                        <option>Adidas</option>
                        <option>Puma</option>
                        <option>Local Brand</option>
                    </select>
                </div>

            </div>
        </div>

        {{-- PRODUCTS GRID --}}
        <div class="lg:col-span-3">

            <h2 class="text-2xl font-bold text-gray-900 mb-6">
                Men’s Products
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- PRODUCT 1 --}}
                <div class="group bg-white rounded-lg overflow-hidden shadow-sm">

                    <div class="relative">
                        <span class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">
                            -30%
                        </span>

                        <img src="https://images.unsplash.com/photo-1520975661595-6453be3f7070"
                             class="aspect-square w-full object-cover group-hover:opacity-80 transition" />
                    </div>

                    <div class="p-3 flex justify-between">
                        <div>
                            <h3 class="text-sm font-medium text-gray-800">Casual Shirt</h3>
                            <p class="text-sm text-gray-500 line-through">$40</p>
                        </div>
                        <p class="text-sm font-semibold text-green-600">$28</p>
                    </div>

                </div>

                {{-- PRODUCT 2 --}}
                <div class="group bg-white rounded-lg overflow-hidden shadow-sm">

                    <img src="https://images.unsplash.com/photo-1541099649105-f69ad21f3246"
                         class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

                    <div class="p-3 flex justify-between">
                        <div>
                            <h3 class="text-sm font-medium text-gray-800">Denim Jeans</h3>
                            <p class="text-sm text-gray-500">$55</p>
                        </div>
                        <p class="text-sm font-semibold text-gray-900">$55</p>
                    </div>

                </div>

                {{-- PRODUCT 3 --}}
                <div class="group bg-white rounded-lg overflow-hidden shadow-sm">

                    <img src="https://images.unsplash.com/photo-1520975916090-3105956dac38"
                         class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

                    <div class="p-3 flex justify-between">
                        <div>
                            <h3 class="text-sm font-medium text-gray-800">T-Shirt</h3>
                            <p class="text-sm text-gray-500">$20</p>
                        </div>
                        <p class="text-sm font-semibold text-gray-900">$20</p>
                    </div>

                </div>

                {{-- PRODUCT 4 --}}
                <div class="group bg-white rounded-lg overflow-hidden shadow-sm">

                    <img src="https://images.unsplash.com/photo-1520975958225-8c3c7a5c3c2b"
                         class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

                    <div class="p-3 flex justify-between">
                        <div>
                            <h3 class="text-sm font-medium text-gray-800">Jacket</h3>
                            <p class="text-sm text-gray-500">$90</p>
                        </div>
                        <p class="text-sm font-semibold text-gray-900">$90</p>
                    </div>

                </div>

                {{-- PRODUCT 5 --}}
                <div class="group bg-white rounded-lg overflow-hidden shadow-sm">

                    <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff"
                         class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

                    <div class="p-3 flex justify-between">
                        <div>
                            <h3 class="text-sm font-medium text-gray-800">Sneakers</h3>
                            <p class="text-sm text-gray-500">$120</p>
                        </div>
                        <p class="text-sm font-semibold text-gray-900">$120</p>
                    </div>

                </div>

                {{-- PRODUCT 6 --}}
                <div class="group bg-white rounded-lg overflow-hidden shadow-sm">

                    <img src="https://images.unsplash.com/photo-1520975938974-5c8c2c3c1c1c"
                         class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

                    <div class="p-3 flex justify-between">
                        <div>
                            <h3 class="text-sm font-medium text-gray-800">Watch</h3>
                            <p class="text-sm text-gray-500">$75</p>
                        </div>
                        <p class="text-sm font-semibold text-gray-900">$75</p>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</x-frontend-layout>