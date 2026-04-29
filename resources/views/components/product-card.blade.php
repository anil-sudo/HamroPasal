{{-- resources/views/components/product-card.blade.php --}}
{{-- Usage: @include('components.product-card', ['product' => $p]) --}}

@php
    $discount = isset($product['original']) && $product['original'] > 0
        ? round((1 - $product['price'] / $product['original']) * 100)
        : 0;
@endphp

<div class="group relative bg-white rounded-xl border border-gray-100 hover:border-red-100 hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col">

    {{-- Image wrapper --}}
    <div class="relative overflow-hidden aspect-square bg-gray-50">
        <img
            src="{{ $product['img'] }}"
            alt="{{ $product['name'] }}"
            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
        />

        {{-- Discount badge --}}
        @if ($discount > 0)
        <span class="absolute top-2.5 left-2.5 bg-red-600 text-white text-[10px] font-extrabold px-2 py-1 rounded-md uppercase tracking-wide shadow">
            -{{ $discount }}%
        </span>
        @endif

        {{-- Label badge --}}
        @if (!empty($product['badge']))
        <span class="absolute top-2.5 right-2.5 bg-gray-900 text-white text-[10px] font-bold px-2 py-1 rounded-md uppercase tracking-wider shadow">
            {{ $product['badge'] }}
        </span>
        @endif

        {{-- Wishlist button --}}
        <button
            class="absolute top-2.5 {{ !empty($product['badge']) ? 'right-14' : 'right-2.5' }} @if($discount > 0 && empty($product['badge'])) right-2.5 top-9 @endif
                   w-8 h-8 bg-white/90 hover:bg-red-50 border border-gray-200 hover:border-red-300 rounded-full
                   flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-200 shadow-sm"
            aria-label="Add to wishlist"
        >
            <svg class="w-4 h-4 text-gray-500 hover:text-red-500 transition-colors" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
            </svg>
        </button>

        {{-- Quick view overlay --}}
        <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/60 to-transparent h-16 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-2">
            <button class="text-white text-xs font-semibold bg-white/20 backdrop-blur-sm hover:bg-white/30 border border-white/40 px-4 py-1.5 rounded-full transition-all duration-150">
                Quick View
            </button>
        </div>
    </div>

    {{-- Info --}}
    <div class="p-3.5 flex flex-col gap-2 flex-1">
        <div>
            <h3 class="text-sm font-bold text-gray-800 line-clamp-1 leading-snug">{{ $product['name'] }}</h3>
            <p class="text-xs text-gray-400 mt-0.5">{{ $product['color'] }}</p>
        </div>

        {{-- Stars (static UI) --}}
        <div class="flex items-center gap-1">
            @for ($star = 0; $star < 5; $star++)
            <svg class="w-3 h-3 {{ $star < 4 ? 'text-yellow-400' : 'text-gray-200' }}" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
            </svg>
            @endfor
            <span class="text-[10px] text-gray-400 ml-1">(128)</span>
        </div>

        {{-- Price --}}
        <div class="flex items-baseline gap-2 mt-auto">
            <span class="text-base font-extrabold text-gray-900">
                Rs. {{ number_format($product['price']) }}
            </span>
            @if (!empty($product['original']) && $product['original'] > $product['price'])
            <span class="text-xs text-gray-400 line-through">
                Rs. {{ number_format($product['original']) }}
            </span>
            @endif
        </div>

        {{-- Add to Cart --}}
        <button
            class="w-full mt-1 flex items-center justify-center gap-2 bg-red-600 hover:bg-red-500 active:bg-red-700 text-white text-xs font-bold py-2.5 rounded-lg transition-all duration-150 hover:shadow-md hover:shadow-red-200 group/btn"
        >
            <svg class="w-3.5 h-3.5 group-hover/btn:-translate-y-0.5 transition-transform duration-150" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
            </svg>
            Add to Cart
        </button>
    </div>
</div>