<x-frontend-layout>

<x-slot name="title">
    Fiction Books | HamroPasal
</x-slot>

<div class="bg-gray-50 min-h-screen">

    {{-- =========================================================
        1. BREADCRUMB
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4 py-4 text-sm text-gray-600">
        <a href="/">Home</a>
        <span class="mx-2">/</span>
        <a href="/books">Books</a>
        <span class="mx-2">/</span>
        <span class="text-black font-medium">Fiction</span>
    </div>

    {{-- =========================================================
        2. TITLE
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4">
        <h1 class="text-3xl font-bold">Fiction Books</h1>
        <p class="text-gray-600 mt-1">
            Explore novels, stories & best-selling fiction books
        </p>
    </div>

    {{-- =========================================================
        3. MAIN SECTION
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4 mt-8 grid grid-cols-1 lg:grid-cols-4 gap-6">

        {{-- FILTER --}}
        <div class="bg-white p-5 rounded-xl shadow-sm h-fit">

            <h3 class="font-semibold mb-4">Filters</h3>

            <div class="space-y-4 text-sm">

                {{-- Price --}}
                <div>
                    <p class="font-medium mb-1">Price</p>
                    <input type="range" class="w-full">
                </div>

                {{-- Genre --}}
                <div>
                    <p class="font-medium mb-1">Genre</p>
                    <select class="w-full border rounded p-2">
                        <option>Adventure</option>
                        <option>Romance</option>
                        <option>Thriller</option>
                        <option>Fantasy</option>
                        <option>Drama</option>
                    </select>
                </div>

                {{-- Language --}}
                <div>
                    <p class="font-medium mb-1">Language</p>
                    <div class="flex flex-wrap gap-2">
                        @foreach(['English','Nepali','Hindi'] as $lang)
                            <span class="px-3 py-1 border rounded hover:bg-black hover:text-white cursor-pointer">
                                {{ $lang }}
                            </span>
                        @endforeach
                    </div>
                </div>

            </div>

        </div>

        {{-- PRODUCTS --}}
        <div class="lg:col-span-3">

            <h2 class="text-xl font-semibold mb-4">All Fiction Books</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                @for($i=1; $i<=6; $i++)
                <div class="bg-white rounded-lg overflow-hidden shadow-sm group">

                    <img src="https://source.unsplash.com/400x500/?book,fiction,novel,{{ $i }}"
                         class="h-72 w-full object-cover group-hover:opacity-80 transition">

                    <div class="p-3">
                        <h3 class="text-sm font-medium text-gray-800">
                            Fiction Book {{ $i }}
                        </h3>
                        <p class="text-sm text-gray-500">
                            Best Seller Novel
                        </p>

                        <div class="mt-2 flex justify-between items-center">
                            <span class="font-semibold text-gray-900">
                                ${{ 10 + ($i * 3) }}
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