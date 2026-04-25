<x-frontend-layout>

<x-slot name="title">
    Kids Fashion | HamroPasal
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
        <span class="text-black font-medium">Kids</span>
    </div>

    {{-- =========================================================
        2. HERO SECTION
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4">
        <div class="relative rounded-2xl overflow-hidden shadow-lg">

            <img src="https://images.unsplash.com/photo-1503919005314-30d93d07d823"
                 class="w-full h-[320px] object-cover" />

            <div class="absolute inset-0 bg-black/50 flex items-center">
                <div class="px-10 text-white">
                    <h1 class="text-4xl font-bold">Kids Fashion</h1>
                    <p class="mt-2 text-gray-200">
                        Cute, comfy & colorful outfits for your little ones
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

            @foreach (['Boys Wear', 'Girls Wear', 'Shoes', 'Toys', 'School Wear', 'Accessories'] as $cat)
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
                    <p class="font-medium mb-1">Age Group</p>
                    <select class="w-full border rounded p-2">
                        <option>0-2 Years</option>
                        <option>3-5 Years</option>
                        <option>6-10 Years</option>
                        <option>10+ Years</option>
                    </select>
                </div>

                <div>
                    <p class="font-medium mb-1">Size</p>
                    <div class="flex flex-wrap gap-2">
                        @foreach (['XS','S','M','L'] as $size)
                            <span class="px-3 py-1 border rounded cursor-pointer hover:bg-black hover:text-white">
                                {{ $size }}
                            </span>
                        @endforeach
                    </div>
                </div>

                <div>
                    <p class="font-medium mb-1">Type</p>
                    <select class="w-full border rounded p-2">
                        <option>Casual</option>
                        <option>Party Wear</option>
                        <option>School Uniform</option>
                    </select>
                </div>

            </div>
        </div>

        {{-- PRODUCTS GRID --}}
        <div class="lg:col-span-3">

            <h2 class="text-2xl font-bold text-gray-900 mb-6">
                Kids Collection
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- PRODUCT 1 --}}
                <div class="group bg-white rounded-lg overflow-hidden shadow-sm">

                    <img src="https://images.unsplash.com/photo-1503919005314-30d93d07d823"
                         class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

                    <div class="p-3 flex justify-between">
                        <div>
                            <h3 class="text-sm font-medium text-gray-800">Kids T-Shirt</h3>
                            <p class="text-sm text-gray-500">Soft Cotton</p>
                        </div>
                        <p class="text-sm font-semibold text-gray-900">$15</p>
                    </div>

                </div>

                {{-- PRODUCT 2 --}}
                <div class="group bg-white rounded-lg overflow-hidden shadow-sm">

                    <img src="https://images.unsplash.com/photo-1503944583220-79d8926ad5e2"
                         class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

                    <div class="p-3 flex justify-between">
                        <div>
                            <h3 class="text-sm font-medium text-gray-800">Kids Jacket</h3>
                            <p class="text-sm text-gray-500">Warm & Cozy</p>
                        </div>
                        <p class="text-sm font-semibold text-gray-900">$35</p>
                    </div>

                </div>

                {{-- PRODUCT 3 --}}
                <div class="group bg-white rounded-lg overflow-hidden shadow-sm">

                    <img src="https://images.unsplash.com/photo-1520975916090-3105956dac38"
                         class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

                    <div class="p-3 flex justify-between">
                        <div>
                            <h3 class="text-sm font-medium text-gray-800">Kids Shoes</h3>
                            <p class="text-sm text-gray-500">Comfort Fit</p>
                        </div>
                        <p class="text-sm font-semibold text-gray-900">$28</p>
                    </div>

                </div>

                {{-- PRODUCT 4 --}}
                <div class="group bg-white rounded-lg overflow-hidden shadow-sm">

                    <img src="https://images.unsplash.com/photo-1519689680058-324335c77eba"
                         class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

                    <div class="p-3 flex justify-between">
                        <div>
                            <h3 class="text-sm font-medium text-gray-800">School Bag</h3>
                            <p class="text-sm text-gray-500">Durable</p>
                        </div>
                        <p class="text-sm font-semibold text-gray-900">$22</p>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</x-frontend-layout>