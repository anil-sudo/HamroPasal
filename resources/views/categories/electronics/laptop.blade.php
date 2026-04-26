<x-frontend-layout>

<x-slot name="title">
    Laptops | HamroPasal
</x-slot>

<div class="bg-gray-50 min-h-screen">

    {{-- =========================================================
        1. BREADCRUMB
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4 py-4 text-sm text-gray-600">
        <a href="/">Home</a>
        <span class="mx-2">/</span>
        <a href="/electronics">Electronics</a>
        <span class="mx-2">/</span>
        <span class="text-black font-medium">Laptops</span>
    </div>

    {{-- =========================================================
        2. TITLE
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4">
        <h1 class="text-3xl font-bold">Laptops</h1>
        <p class="text-gray-600 mt-1">
            Powerful laptops for work, gaming & everyday use
        </p>
    </div>

    {{-- =========================================================
        3. MAIN SECTION
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4 mt-8 grid grid-cols-1 lg:grid-cols-4 gap-6">

        {{-- FILTER SIDEBAR --}}
        <div class="bg-white p-5 rounded-xl shadow-sm h-fit">

            <h3 class="font-semibold mb-4">Filters</h3>

            <div class="space-y-4 text-sm">

                {{-- Price --}}
                <div>
                    <p class="font-medium mb-1">Price</p>
                    <input type="range" class="w-full">
                </div>

                {{-- Brand --}}
                <div>
                    <p class="font-medium mb-1">Brand</p>
                    <select class="w-full border rounded p-2">
                        <option>Apple</option>
                        <option>Dell</option>
                        <option>HP</option>
                        <option>Lenovo</option>
                        <option>Asus</option>
                    </select>
                </div>

                {{-- RAM --}}
                <div>
                    <p class="font-medium mb-1">RAM</p>
                    <div class="flex flex-wrap gap-2">
                        @foreach(['8GB','16GB','32GB'] as $ram)
                            <span class="px-3 py-1 border rounded hover:bg-black hover:text-white cursor-pointer">
                                {{ $ram }}
                            </span>
                        @endforeach
                    </div>
                </div>

                {{-- Storage --}}
                <div>
                    <p class="font-medium mb-1">Storage</p>
                    <div class="flex flex-wrap gap-2">
                        @foreach(['256GB SSD','512GB SSD','1TB SSD'] as $storage)
                            <span class="px-3 py-1 border rounded hover:bg-black hover:text-white cursor-pointer">
                                {{ $storage }}
                            </span>
                        @endforeach
                    </div>
                </div>

                {{-- Processor --}}
                <div>
                    <p class="font-medium mb-1">Processor</p>
                    <select class="w-full border rounded p-2">
                        <option>Intel i5</option>
                        <option>Intel i7</option>
                        <option>Ryzen 5</option>
                        <option>Ryzen 7</option>
                    </select>
                </div>

            </div>

        </div>

        {{-- PRODUCT GRID --}}
        <div class="lg:col-span-3">

            <h2 class="text-xl font-semibold mb-4">All Laptops</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                @for($i=1; $i<=6; $i++)
                <div class="bg-white rounded-lg overflow-hidden shadow-sm group">

                    <img src="https://source.unsplash.com/400x400/?laptop,{{ $i }}"
                         class="aspect-square w-full object-cover group-hover:opacity-80 transition">

                    <div class="p-3">
                        <h3 class="text-sm font-medium text-gray-800">
                            Laptop Model {{ $i }}
                        </h3>
                        <p class="text-sm text-gray-500">
                            16GB RAM • 512GB SSD
                        </p>

                        <div class="mt-2 flex justify-between items-center">
                            <span class="font-semibold text-gray-900">
                                ${{ 700 + ($i * 100) }}
                            </span>

                            <button class="text-xs px-3 py-1 bg-black text-white rounded">
                                Buy
                            </button>
                        </div>
                    </div>

                </div>
                @endfor

            </div>

            {{-- LOAD MORE --}}
            <div class="mt-8 text-center">
                <button class="px-5 py-2 bg-black text-white rounded-lg">
                    Load More
                </button>
            </div>

        </div>

    </div>

</div>

</x-frontend-layout>