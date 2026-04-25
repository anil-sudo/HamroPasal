<x-frontend-layout>

<x-slot name="title">
    Books Collection | HamroPasal
</x-slot>

<div class="bg-gray-50 min-h-screen">

    {{-- =========================================================
        1. BREADCRUMB
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4 py-4 text-sm text-gray-600">
        <a href="/" class="hover:text-black">Home</a>
        <span class="mx-2">/</span>
        <span class="text-black font-medium">Books</span>
    </div>

    {{-- =========================================================
        2. HERO SECTION
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4">
        <div class="relative rounded-2xl overflow-hidden shadow-lg">

            <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f"
                 class="w-full h-[320px] object-cover" />

            <div class="absolute inset-0 bg-black/50 flex items-center">
                <div class="px-10 text-white">
                    <h1 class="text-4xl font-bold">Books Collection</h1>
                    <p class="mt-2 text-gray-200">
                        Explore knowledge, stories & inspiration in every page
                    </p>

                    <button class="mt-4 px-5 py-2 bg-white text-black rounded-lg hover:bg-gray-200">
                        Start Reading
                    </button>
                </div>
            </div>

        </div>
    </div>

    {{-- =========================================================
        3. CATEGORY GRID
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4 mt-10">
        <h2 class="text-xl font-semibold mb-4">Book Categories</h2>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

            @foreach (['Fiction', 'Education', 'Business', 'Self Help'] as $cat)
                <div class="bg-white rounded-xl shadow hover:shadow-md transition p-5 text-center">
                    <div class="text-lg font-medium">{{ $cat }}</div>
                    <p class="text-sm text-gray-500 mt-1">Explore {{ $cat }} books</p>
                </div>
            @endforeach

        </div>
    </div>

    {{-- =========================================================
        4. BOOKS GRID
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4 py-12">

        <h2 class="text-2xl font-bold text-gray-900 mb-6">
            Popular Books
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            {{-- BOOK 1 --}}
            <div class="group relative bg-white rounded-lg overflow-hidden shadow-sm">

                <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f"
                     class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

                <div class="mt-3 flex justify-between px-2 pb-3">
                    <div>
                        <h3 class="text-sm font-medium text-gray-800">The Great Story</h3>
                        <p class="text-sm text-gray-500">Fiction</p>
                    </div>
                    <p class="text-sm font-semibold text-gray-900">$12</p>
                </div>

            </div>

            {{-- BOOK 2 --}}
            <div class="group relative bg-white rounded-lg overflow-hidden shadow-sm">

                <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794"
                     class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

                <div class="mt-3 flex justify-between px-2 pb-3">
                    <div>
                        <h3 class="text-sm font-medium text-gray-800">Business Mindset</h3>
                        <p class="text-sm text-gray-500">Business</p>
                    </div>
                    <p class="text-sm font-semibold text-gray-900">$18</p>
                </div>

            </div>

            {{-- BOOK 3 --}}
            <div class="group relative bg-white rounded-lg overflow-hidden shadow-sm">

                <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da"
                     class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

                <div class="mt-3 flex justify-between px-2 pb-3">
                    <div>
                        <h3 class="text-sm font-medium text-gray-800">Learn Programming</h3>
                        <p class="text-sm text-gray-500">Education</p>
                    </div>
                    <p class="text-sm font-semibold text-gray-900">$25</p>
                </div>

            </div>

            {{-- BOOK 4 --}}
            <div class="group relative bg-white rounded-lg overflow-hidden shadow-sm">

                <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f"
                     class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

                <div class="mt-3 flex justify-between px-2 pb-3">
                    <div>
                        <h3 class="text-sm font-medium text-gray-800">Self Growth</h3>
                        <p class="text-sm text-gray-500">Self Help</p>
                    </div>
                    <p class="text-sm font-semibold text-gray-900">$14</p>
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
                <h2 class="text-2xl font-bold">Book Sale Week 📚</h2>
                <p class="text-gray-300 mt-1">Up to 60% off on selected books</p>
            </div>

            <button class="mt-4 md:mt-0 px-6 py-2 bg-white text-black rounded-lg font-medium">
                Explore Books
            </button>

        </div>
    </div>

</div>

</x-frontend-layout>