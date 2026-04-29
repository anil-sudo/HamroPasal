<x-frontend-layout>

<x-slot name="title">
    Men T-Shirts | HamroPasal
</x-slot>

<div class="bg-gray-50 min-h-screen">

    {{-- =========================================================
        1. BREADCRUMB
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4 py-4 text-sm text-gray-600">
        <a href="/">Home</a>
        <span class="mx-2">/</span>
        <a href="/fashion/men">Men</a>
        <span class="mx-2">/</span>
        <span class="text-black font-medium">T-Shirts</span>
    </div>

    {{-- =========================================================
        2. TITLE
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4">
        <h1 class="text-3xl font-bold">Men’s T-Shirts</h1>
        <p class="text-gray-600 mt-1">Comfortable & stylish everyday wear</p>
    </div>

    {{-- =========================================================
        3. MAIN LAYOUT
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4 mt-8 grid grid-cols-1 lg:grid-cols-4 gap-6">

        {{-- FILTER --}}
        <div class="bg-white p-5 rounded-xl shadow-sm h-fit">

            <h3 class="font-semibold mb-4">Filters</h3>

            <div class="space-y-4 text-sm">

                <div>
                    <p class="font-medium mb-1">Price</p>
                    <input type="range" class="w-full">
                </div>

                <div>
                    <p class="font-medium mb-1">Size</p>
                    <div class="flex gap-2 flex-wrap">
                        @foreach(['S','M','L','XL'] as $size)
                            <span class="px-3 py-1 border rounded hover:bg-black hover:text-white cursor-pointer">
                                {{ $size }}
                            </span>
                        @endforeach
                    </div>
                </div>

                <div>
                    <p class="font-medium mb-1">Color</p>
                    <select class="w-full border rounded p-2">
                        <option>Black</option>
                        <option>White</option>
                        <option>Red</option>
                        <option>Blue</option>
                    </select>
                </div>

            </div>

        </div>

        {{-- PRODUCTS --}}
        <div class="lg:col-span-3">

            <h2 class="text-xl font-semibold mb-4">All T-Shirts</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- PRODUCT --}}
                @for($i=1; $i<=6; $i++)
                <div class="bg-white rounded-lg overflow-hidden shadow-sm group">

                    <img src="https://source.unsplash.com/400x400/?tshirt,men,fashion,{{ $i }}"
                         class="aspect-square w-full object-cover group-hover:opacity-80 transition">

                    <div class="p-3 flex justify-between">
                        <div>
                            <h3 class="text-sm font-medium text-gray-800">
                                Basic T-Shirt {{ $i }}
                            </h3>
                            <p class="text-sm text-gray-500">Cotton</p>
                        </div>
                        <p class="text-sm font-semibold text-gray-900">
                            ${{ 15 + $i }}
                        </p>
                    </div>

                </div>
                @endfor

            </div>

            {{-- PAGINATION --}}
            <div class="mt-8 text-center">
                <button class="px-5 py-2 bg-black text-white rounded-lg">
                    Load More
                </button>
            </div>

        </div>

    </div>

</div>

</x-frontend-layout>