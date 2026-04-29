<x-frontend-layout>

<x-slot name="title">
    Women Fashion | HamroPasal
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
        <span class="text-black font-medium">Women</span>
    </div>

    {{-- =========================================================
        2. HERO SECTION
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4">
        <div class="relative rounded-2xl overflow-hidden shadow-lg">

            <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1"
                 class="w-full h-[320px] object-cover" />

            <div class="absolute inset-0 bg-black/50 flex items-center">
                <div class="px-10 text-white">
                    <h1 class="text-4xl font-bold">Women’s Fashion</h1>
                    <p class="mt-2 text-gray-200">
                        Discover elegant, trendy & modern outfits for every occasion
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

            @foreach (['Dresses', 'Tops', 'Saree', 'Jeans', 'Shoes', 'Accessories'] as $cat)
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
                        @foreach (['XS','S','M','L','XL'] as $size)
                            <span class="px-3 py-1 border rounded cursor-pointer hover:bg-black hover:text-white">
                                {{ $size }}
                            </span>
                        @endforeach
                    </div>
                </div>

                <div>
                    <p class="font-medium mb-1">Color</p>
                    <select class="w-full border rounded p-2">
                        <option>Red</option>
                        <option>Black</option>
                        <option>White</option>
                        <option>Pink</option>
                    </select>
                </div>

            </div>
        </div>

        {{-- PRODUCTS GRID --}}
        <div class="lg:col-span-3">

            <h2 class="text-2xl font-bold text-gray-900 mb-6">
                Women’s Collection
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- PRODUCT 1 --}}
                <div class="group bg-white rounded-lg overflow-hidden shadow-sm">

                    <img src="https://images.unsplash.com/photo-1520975958225-8c3c7a5c3c2b"
                         class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

                    <div class="p-3 flex justify-between">
                        <div>
                            <h3 class="text-sm font-medium text-gray-800">Elegant Dress</h3>
                            <p class="text-sm text-gray-500">$45</p>
                        </div>
                        <p class="text-sm font-semibold text-gray-900">$45</p>
                    </div>

                </div>

                {{-- PRODUCT 2 --}}
                <div class="group bg-white rounded-lg overflow-hidden shadow-sm">

                    <img src="https://images.unsplash.com/photo-1520975916090-3105956dac38"
                         class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

                    <div class="p-3 flex justify-between">
                        <div>
                            <h3 class="text-sm font-medium text-gray-800">Casual Top</h3>
                            <p class="text-sm text-gray-500">$25</p>
                        </div>
                        <p class="text-sm font-semibold text-gray-900">$25</p>
                    </div>

                </div>

                {{-- PRODUCT 3 --}}
                <div class="group bg-white rounded-lg overflow-hidden shadow-sm">

                    <img src="https://images.unsplash.com/photo-1520975661595-6453be3f7070"
                         class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

                    <div class="p-3 flex justify-between">
                        <div>
                            <h3 class="text-sm font-medium text-gray-800">Jeans</h3>
                            <p class="text-sm text-gray-500">$40</p>
                        </div>
                        <p class="text-sm font-semibold text-gray-900">$40</p>
                    </div>

                </div>

                {{-- PRODUCT 4 --}}
                <div class="group bg-white rounded-lg overflow-hidden shadow-sm">

                    <img src="https://images.unsplash.com/photo-1520975938974-5c8c2c3c1c1c"
                         class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

                    <div class="p-3 flex justify-between">
                        <div>
                            <h3 class="text-sm font-medium text-gray-800">Handbag</h3>
                            <p class="text-sm text-gray-500">$60</p>
                        </div>
                        <p class="text-sm font-semibold text-gray-900">$60</p>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</x-frontend-layout>