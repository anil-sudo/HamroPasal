<x-frontend-layout>

{{-- PAGE TITLE --}}
<x-slot name="title">
    Fashion Collection | HamroPasal
</x-slot>

{{-- MAIN CONTENT --}}
<div class="bg-gray-50 min-h-screen">

    {{-- =========================================================
        1. BREADCRUMB
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4 py-4 text-sm text-gray-600">
        <a href="/" class="hover:text-black">Home</a>
        <span class="mx-2">/</span>
        <span class="text-black font-medium">Fashion</span>
    </div>

    {{-- =========================================================
        2. HERO BANNER
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4">
        <div class="relative rounded-2xl overflow-hidden shadow-lg">

            <img src="https://images.unsplash.com/photo-1521334884684-d80222895322"
                 class="w-full h-[320px] object-cover" />

            <div class="absolute inset-0 bg-black/50 flex items-center">
                <div class="px-10 text-white">
                    <h1 class="text-4xl font-bold">Fashion Collection</h1>
                    <p class="mt-2 text-gray-200">
                        Discover trending outfits, styles & seasonal fashion deals
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

            @foreach (['Men', 'Women', 'Kids', 'Accessories'] as $cat)
                <div class="bg-white rounded-xl shadow hover:shadow-md transition p-5 text-center">
                    <div class="text-lg font-medium">{{ $cat }}</div>
                    <p class="text-sm text-gray-500 mt-1">Explore {{ strtolower($cat) }} fashion</p>
                </div>
            @endforeach

        </div>
    </div>

    {{-- =========================================================
        4. FEATURED PRODUCTS
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4 py-12">

  <h2 class="text-2xl font-bold text-gray-900 mb-6">
    Featured Products
  </h2>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

    <!-- PRODUCT CARD -->
    <div class="group relative bg-white rounded-lg overflow-hidden">

      <img src="https://tailwindcss.com/plus-assets/img/ecommerce-images/product-page-01-related-product-01.jpg"
           class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

      <div class="mt-3 flex justify-between px-1">
        <div>
          <h3 class="text-sm text-gray-700 font-medium">
            Basic Tee
          </h3>
          <p class="text-sm text-gray-500">Black</p>
        </div>

        <p class="text-sm font-semibold text-gray-900">$35</p>
      </div>

    </div>

    <!-- PRODUCT CARD -->
    <div class="group relative bg-white rounded-lg overflow-hidden">
      <img src="https://tailwindcss.com/plus-assets/img/ecommerce-images/product-page-01-related-product-02.jpg"
           class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

      <div class="mt-3 flex justify-between px-1">
        <div>
          <h3 class="text-sm text-gray-700 font-medium">Basic Tee</h3>
          <p class="text-sm text-gray-500">White</p>
        </div>
        <p class="text-sm font-semibold text-gray-900">$35</p>
      </div>
    </div>

    <!-- PRODUCT CARD -->
    <div class="group relative bg-white rounded-lg overflow-hidden">
      <img src="https://tailwindcss.com/plus-assets/img/ecommerce-images/product-page-01-related-product-03.jpg"
           class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

      <div class="mt-3 flex justify-between px-1">
        <div>
          <h3 class="text-sm text-gray-700 font-medium">Basic Tee</h3>
          <p class="text-sm text-gray-500">Charcoal</p>
        </div>
        <p class="text-sm font-semibold text-gray-900">$35</p>
      </div>
    </div>

    <!-- PRODUCT CARD -->
    <div class="group relative bg-white rounded-lg overflow-hidden">
      <img src="https://tailwindcss.com/plus-assets/img/ecommerce-images/product-page-01-related-product-04.jpg"
           class="aspect-square w-full object-cover group-hover:opacity-80 transition" />

      <div class="mt-3 flex justify-between px-1">
        <div>
          <h3 class="text-sm text-gray-700 font-medium">Artwork Tee</h3>
          <p class="text-sm text-gray-500">Iso Dots</p>
        </div>
        <p class="text-sm font-semibold text-gray-900">$35</p>
      </div>
    </div>

  </div>
</div>

    {{-- =========================================================
        5. PROMO BANNER
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4 mt-12">
        <div class="bg-black text-white rounded-2xl p-10 flex flex-col md:flex-row justify-between items-center">

            <div>
                <h2 class="text-2xl font-bold">Summer Sale is Live 🔥</h2>
                <p class="text-gray-300 mt-1">Up to 50% off on selected fashion items</p>
            </div>

            <button class="mt-4 md:mt-0 px-6 py-2 bg-white text-black rounded-lg font-medium">
                Explore Deals
            </button>

        </div>
    </div>

    {{-- =========================================================
        6. NEWSLETTER
    ========================================================= --}}
    <div class="max-w-7xl mx-auto px-4 mt-12 mb-10">
        <div class="bg-white rounded-xl shadow p-8 text-center">

            <h2 class="text-xl font-semibold">Join Our Newsletter</h2>
            <p class="text-gray-500 mt-1">Get updates on latest fashion trends & offers</p>

            <div class="mt-4 flex flex-col md:flex-row gap-3 justify-center">
                <input type="email" placeholder="Enter your email"
                       class="border rounded-lg px-4 py-2 w-full md:w-1/3">

                <button class="bg-black text-white px-6 py-2 rounded-lg">
                    Subscribe
                </button>
            </div>

        </div>
    </div>

</div>

</x-frontend-layout>