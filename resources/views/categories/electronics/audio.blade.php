<x-frontend-layout>

<x-slot name="title">
    Audio Devices | HamroPasal
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
        <span class="text-black font-medium">Audio</span>
    </div>

    {{-- =========================================================
        2. TITLE
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4">
        <h1 class="text-3xl font-bold">Audio Devices</h1>
        <p class="text-gray-600 mt-1">
            Headphones, earbuds, speakers & more
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

                {{-- Type --}}
                <div>
                    <p class="font-medium mb-1">Type</p>
                    <select class="w-full border rounded p-2">
                        <option>Headphones</option>
                        <option>Earbuds</option>
                        <option>Speakers</option>
                    </select>
                </div>

                {{-- Brand --}}
                <div>
                    <p class="font-medium mb-1">Brand</p>
                    <select class="w-full border rounded p-2">
                        <option>JBL</option>
                        <option>Sony</option>
                        <option>Boat</option>
                        <option>Realme</option>
                    </select>
                </div>

                {{-- Connectivity --}}
                <div>
                    <p class="font-medium mb-1">Connectivity</p>
                    <div class="flex flex-wrap gap-2">
                        @foreach(['Wired','Wireless','Bluetooth'] as $type)
                            <span class="px-3 py-1 border rounded hover:bg-black hover:text-white cursor-pointer">
                                {{ $type }}
                            </span>
                        @endforeach
                    </div>
                </div>

            </div>

        </div>

        {{-- PRODUCT GRID --}}
        <div class="lg:col-span-3">

            <h2 class="text-xl font-semibold mb-4">All Audio Products</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                @for($i=1; $i<=6; $i++)
                <div class="bg-white rounded-lg overflow-hidden shadow-sm group">

                    <img src="https://source.unsplash.com/400x400/?headphones,{{ $i }}"
                         class="aspect-square w-full object-cover group-hover:opacity-80 transition">

                    <div class="p-3">
                        <h3 class="text-sm font-medium text-gray-800">
                            Audio Device {{ $i }}
                        </h3>
                        <p class="text-sm text-gray-500">
                            Wireless • High Bass
                        </p>

                        <div class="mt-2 flex justify-between items-center">
                            <span class="font-semibold text-gray-900">
                                ${{ 50 + ($i * 10) }}
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