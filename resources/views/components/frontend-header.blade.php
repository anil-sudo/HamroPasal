<style>
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');

    .hp-header * { font-family: 'Plus Jakarta Sans', sans-serif; box-sizing: border-box; }

    /* ── Top announcement bar ── */
    .hp-topbar {
        background: linear-gradient(90deg, #c2410c 0%, #ea580c 40%, #f97316 70%, #c2410c 100%);
        background-size: 200% 100%;
        animation: shimmer-bar 6s linear infinite;
        padding: 7px 16px;
        text-align: center;
        font-size: 12px;
        font-weight: 600;
        color: #fff;
        letter-spacing: 0.03em;
        position: relative;
        overflow: hidden;
    }
    .hp-topbar::after {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(105deg, transparent 40%, rgba(255,255,255,0.18) 50%, transparent 60%);
        animation: shimmer-sweep 3.5s ease-in-out infinite;
    }
    @keyframes shimmer-bar { 0%{background-position:0% 0%} 100%{background-position:200% 0%} }
    @keyframes shimmer-sweep { 0%{transform:translateX(-100%)} 100%{transform:translateX(200%)} }
    .hp-topbar a { color: #fed7aa; text-decoration: underline; margin-left: 8px; font-weight: 700; }

    /* ── Main header wrapper ── */
    .hp-header {
        width: 100%;
        font-family: 'Plus Jakarta Sans', sans-serif;
        position: sticky;
        top: 0;
        z-index: 50;
    }

    /* ── Nav row ── */
    .hp-nav-row {
        background: #fff;
        border-bottom: 1px solid #f1f0ed;
        box-shadow: 0 1px 0 0 rgba(234,88,12,0.08), 0 4px 20px rgba(0,0,0,0.06);
        padding: 10px 0;
    }
    .hp-nav-inner {
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 20px;
        display: grid;
        grid-template-columns: 220px 1fr 220px;
        align-items: center;
        gap: 12px;
    }
    .hp-nav-left { display: flex; align-items: center; gap: 10px; }
    .hp-nav-center { display: flex; justify-content: center; }
    .hp-nav-right { display: flex; align-items: center; justify-content: flex-end; gap: 4px; }

    /* ── Hamburger ── */
    .hp-ham {
        display: none;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 38px;
        height: 38px;
        border-radius: 10px;
        background: #fff7f2;
        border: 1.5px solid #fed7aa;
        cursor: pointer;
        flex-shrink: 0;
        transition: background 0.2s, border-color 0.2s;
    }
    .hp-ham:hover { background: #ffedd5; border-color: #fb923c; }
    .hp-ham span {
        display: block;
        width: 18px;
        height: 2px;
        background: #c2410c;
        border-radius: 2px;
        margin: 2px 0;
        transition: all 0.22s ease;
    }
    @media(max-width:1023px) { .hp-ham { display: flex; } }

    /* ── Logo ── */
    .hp-logo { display: flex; align-items: center; gap: 10px; flex-shrink: 0; text-decoration: none; }
    .hp-logo-icon {
        width: 38px;
        height: 38px;
        background: linear-gradient(135deg, #ea580c, #f97316);
        border-radius: 11px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 3px 12px rgba(234,88,12,0.4), inset 0 1px 0 rgba(255,255,255,0.25);
        flex-shrink: 0;
        position: relative;
        overflow: hidden;
    }
    .hp-logo-icon::after {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 50%;
        background: linear-gradient(rgba(255,255,255,0.2), transparent);
        border-radius: 11px 11px 0 0;
    }
    .hp-logo-icon svg { width: 20px; height: 20px; color: #fff; position: relative; z-index: 1; }
    .hp-logo-text .brand {
        display: flex;
        align-items: baseline;
        gap: 0;
        line-height: 1;
    }
    .hp-logo-text .hamro { color: #ea580c; font-weight: 800; font-size: 20px; letter-spacing: -0.5px; }
    .hp-logo-text .pasal { color: #1c1917; font-weight: 800; font-size: 20px; letter-spacing: -0.5px; }
    .hp-logo-text .tagline {
        display: none;
        font-size: 9px;
        font-weight: 600;
        color: #a8a29e;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        margin-top: 1px;
    }
    @media(min-width:640px) { .hp-logo-text .tagline { display: block; } }

    /* ── Search bar ── */
    .hp-search-wrap {
        display: none;
        width: 100%;
        max-width: 700px;
    }
    @media(min-width:1024px) { .hp-search-wrap { display: flex; } }
    .hp-search {
        display: flex;
        width: 100%;
        height: 44px;
        border-radius: 14px;
        border: 2px solid #e7e5e4;
        overflow: hidden;
        background: #fafaf9;
        transition: border-color 0.18s, box-shadow 0.18s;
    }
    .hp-search:focus-within {
        border-color: #fb923c;
        box-shadow: 0 0 0 4px rgba(251,146,60,0.12);
        background: #fff;
    }
    .hp-search select {
        height: 100%;
        padding: 0 28px 0 12px;
        background: transparent;
        border: none;
        border-right: 1.5px solid #e7e5e4;
        color: #57534e;
        font-size: 13px;
        font-weight: 600;
        font-family: inherit;
        cursor: pointer;
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24' fill='none' stroke='%2378716c' stroke-width='2.5'%3E%3Cpath d='M19 9l-7 7-7-7'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 8px center;
        outline: none;
    }
    .hp-search input {
        flex: 1;
        height: 100%;
        padding: 0 14px;
        background: transparent;
        border: none;
        outline: none;
        font-size: 14px;
        font-family: inherit;
        color: #1c1917;
    }
    .hp-search input::placeholder { color: #a8a29e; }
    .hp-search-btn {
        width: 48px;
        background: linear-gradient(135deg, #ea580c, #f97316);
        border: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: opacity 0.15s;
        flex-shrink: 0;
    }
    .hp-search-btn:hover { opacity: 0.88; }
    .hp-search-btn svg { width: 18px; height: 18px; color: #fff; }

    /* ── Right actions ── */
    .hp-actions { display: flex; align-items: center; gap: 4px; }

    .hp-icon-btn {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 42px;
        height: 42px;
        border-radius: 12px;
        text-decoration: none;
        color: #57534e;
        transition: background 0.15s, color 0.15s, transform 0.15s;
        position: relative;
        gap: 1px;
    }
    .hp-icon-btn:hover { background: #fff7ed; color: #ea580c; transform: translateY(-1px); }
    .hp-icon-btn svg { width: 20px; height: 20px; }
    .hp-icon-btn span { font-size: 9px; font-weight: 600; display: none; }
    @media(min-width:640px) { .hp-icon-btn span { display: block; } }

    /* Cart badge */
    .hp-badge {
        position: absolute;
        top: 4px; right: 4px;
        background: #ea580c;
        color: #fff;
        font-size: 9px;
        font-weight: 800;
        min-width: 17px;
        height: 17px;
        border-radius: 99px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0 3px;
        border: 2px solid #fff;
        line-height: 1;
    }

    /* Sign in pill */
    .hp-signin {
        display: none;
        align-items: center;
        gap: 9px;
        padding: 7px 14px 7px 8px;
        border-radius: 12px;
        border: 1.5px solid #e7e5e4;
        text-decoration: none;
        color: #44403c;
        margin-left: 6px;
        transition: border-color 0.15s, background 0.15s, transform 0.15s;
    }
    @media(min-width:640px) { .hp-signin { display: flex; } }
    .hp-signin:hover { border-color: #fb923c; background: #fff7ed; transform: translateY(-1px); }
    .hp-signin-avatar {
        width: 28px; height: 28px;
        background: #f5f5f4;
        border-radius: 8px;
        display: flex; align-items: center; justify-content: center;
        transition: background 0.15s;
    }
    .hp-signin:hover .hp-signin-avatar { background: #ffedd5; }
    .hp-signin-avatar svg { width: 15px; height: 15px; color: #78716c; transition: color 0.15s; }
    .hp-signin:hover .hp-signin-avatar svg { color: #ea580c; }
    .hp-signin p { margin: 0; }
    .hp-signin .hello { font-size: 10px; color: #a8a29e; font-weight: 500; }
    .hp-signin .label { font-size: 13px; font-weight: 700; color: #1c1917; }

    /* Mobile login icon */
    .hp-mob-login {
        display: flex;
        align-items: center; justify-content: center;
        width: 42px; height: 42px;
        border-radius: 12px;
        text-decoration: none;
        color: #57534e;
        transition: background 0.15s, color 0.15s;
    }
    @media(min-width:640px) { .hp-mob-login { display: none; } }
    .hp-mob-login:hover { background: #fff7ed; color: #ea580c; }
    .hp-mob-login svg { width: 20px; height: 20px; }

    /* Mobile search strip */
    .hp-mob-search {
        display: flex;
        padding: 0 16px 12px;
        background: #fff;
    }
    @media(min-width:1024px) { .hp-mob-search { display: none; } }
    .hp-mob-search-inner {
        display: flex;
        width: 100%;
        height: 42px;
        border-radius: 12px;
        border: 2px solid #e7e5e4;
        overflow: hidden;
        background: #fafaf9;
        transition: border-color 0.18s, box-shadow 0.18s;
    }
    .hp-mob-search-inner:focus-within {
        border-color: #fb923c;
        box-shadow: 0 0 0 3px rgba(251,146,60,0.12);
    }
    .hp-mob-search-inner input {
        flex: 1;
        padding: 0 12px;
        background: transparent;
        border: none;
        outline: none;
        font-size: 14px;
        font-family: inherit;
        color: #1c1917;
    }
    .hp-mob-search-inner input::placeholder { color: #a8a29e; }
    .hp-mob-search-btn {
        width: 44px;
        background: linear-gradient(135deg, #ea580c, #f97316);
        border: none;
        cursor: pointer;
        display: flex; align-items: center; justify-content: center;
    }
    .hp-mob-search-btn svg { width: 17px; height: 17px; color: #fff; }

    /* ── Category nav bar ── */
    .hp-catbar {
        background: #fff;
        border-bottom: 1px solid #f1f0ed;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
    }
    .hp-catbar-inner {
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 20px;
        display: flex;
        align-items: center;
    }

    /* All categories button */
    .hp-allcat-btn {
        display: flex;
        align-items: center;
        gap: 7px;
        height: 44px;
        padding: 0 16px;
        background: linear-gradient(135deg, #ea580c, #f97316);
        color: #fff;
        font-size: 13px;
        font-weight: 700;
        font-family: inherit;
        border: none;
        cursor: pointer;
        white-space: nowrap;
        transition: opacity 0.15s;
        position: relative;
        flex-shrink: 0;
    }
    .hp-allcat-btn:hover { opacity: 0.9; }
    .hp-allcat-btn svg { width: 15px; height: 15px; }

    /* Dropdown */
    .hp-allcat-wrap { position: relative; }
    .hp-dropdown {
        position: absolute;
        top: calc(100% + 2px);
        left: 0;
        width: 220px;
        background: #fff;
        border: 1px solid #e7e5e4;
        border-radius: 0 12px 12px 12px;
        box-shadow: 0 12px 40px rgba(0,0,0,0.1);
        z-index: 60;
        overflow: hidden;
        opacity: 0;
        visibility: hidden;
        transform: translateY(6px);
        transition: opacity 0.18s, transform 0.18s, visibility 0.18s;
    }
    .hp-allcat-wrap:hover .hp-dropdown {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }
    .hp-dropdown a {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px 16px;
        font-size: 13px;
        font-weight: 500;
        color: #44403c;
        text-decoration: none;
        border-bottom: 1px solid #fafaf9;
        transition: background 0.12s, color 0.12s;
    }
    .hp-dropdown a:last-child { border-bottom: none; }
    .hp-dropdown a:hover { background: #fff7ed; color: #ea580c; }
    .hp-dropdown a svg { width: 14px; height: 14px; color: #d4d0cc; margin-left: auto; }

    /* Divider */
    .hp-divider { width: 1px; height: 22px; background: #e7e5e4; flex-shrink: 0; }

    /* Nav links */
    .hp-nav-links { flex: 1; overflow-x: auto; }
    .hp-nav-links::-webkit-scrollbar { display: none; }
    .hp-nav-links-inner { display: flex; align-items: center; min-width: max-content; }
    .hp-nav-link {
        display: flex;
        align-items: center;
        gap: 5px;
        height: 44px;
        padding: 0 14px;
        font-size: 13px;
        font-weight: 600;
        color: #57534e;
        text-decoration: none;
        white-space: nowrap;
        border-bottom: 2.5px solid transparent;
        transition: color 0.15s, border-color 0.15s, background 0.15s;
    }
    .hp-nav-link:hover { color: #ea580c; border-color: #fb923c; background: #fff7ed; }
    .hp-nav-link.hot { color: #ea580c; }
    .hp-hot-pill {
        font-size: 8px;
        font-weight: 800;
        background: #fff7ed;
        color: #ea580c;
        padding: 2px 6px;
        border-radius: 99px;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        border: 1px solid #fed7aa;
    }

    /* Track order */
    .hp-track {
        display: none;
        align-items: center;
        gap: 6px;
        height: 44px;
        padding: 0 14px;
        font-size: 13px;
        font-weight: 600;
        color: #57534e;
        text-decoration: none;
        border-left: 1px solid #f1f0ed;
        flex-shrink: 0;
        transition: color 0.15s, background 0.15s;
        white-space: nowrap;
    }
    @media(min-width:1024px) { .hp-track { display: flex; } }
    .hp-track:hover { color: #ea580c; background: #fff7ed; }
    .hp-track svg { width: 15px; height: 15px; }

    /* ── Mobile menu ── */
    .hp-mobile-menu {
        display: none;
        background: #fff;
        border-top: 1px solid #f1f0ed;
        box-shadow: 0 8px 24px rgba(0,0,0,0.08);
    }
    .hp-mobile-menu.open { display: block; }
    .hp-mob-inner {
        max-width: 1280px;
        margin: 0 auto;
        padding: 16px;
        display: flex;
        flex-direction: column;
        gap: 4px;
    }
    .hp-mob-pills {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        padding-bottom: 14px;
        border-bottom: 1px solid #f1f0ed;
        margin-bottom: 8px;
    }
    .hp-mob-pill {
        font-size: 12px;
        font-weight: 600;
        color: #57534e;
        background: #fafaf9;
        border: 1.5px solid #e7e5e4;
        border-radius: 99px;
        padding: 5px 12px;
        text-decoration: none;
        transition: border-color 0.15s, color 0.15s, background 0.15s;
    }
    .hp-mob-pill:hover { color: #ea580c; border-color: #fb923c; background: #fff7ed; }
    .hp-mob-section-label {
        font-size: 10px;
        font-weight: 700;
        color: #a8a29e;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        padding: 4px 4px 8px;
    }
    .hp-mob-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 12px;
        border-radius: 10px;
        font-size: 14px;
        font-weight: 600;
        color: #44403c;
        text-decoration: none;
        transition: background 0.12s, color 0.12s;
    }
    .hp-mob-item:hover { background: #fafaf9; color: #ea580c; }
    .hp-mob-item.hot { color: #ea580c; background: #fff7ed; }
    .hp-mob-item svg { width: 16px; height: 16px; color: #d4d0cc; }
    .hp-mob-cta {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        width: 100%;
        padding: 12px;
        margin-top: 8px;
        background: linear-gradient(135deg, #ea580c, #f97316);
        color: #fff;
        font-size: 14px;
        font-weight: 700;
        font-family: inherit;
        border: none;
        border-radius: 12px;
        cursor: pointer;
        text-decoration: none;
        box-shadow: 0 4px 16px rgba(234,88,12,0.3);
        transition: opacity 0.15s, transform 0.15s;
    }
    .hp-mob-cta:hover { opacity: 0.9; transform: translateY(-1px); }
    .hp-mob-cta svg { width: 16px; height: 16px; }
</style>

<header class="hp-header">

    {{-- ===== ANNOUNCEMENT BAR ===== --}}
    <div class="hp-topbar">
        🎉 Free delivery on orders above Rs. 999 — Use code <strong>HAMRO50</strong> for extra 50% off!
        <a href="#">Shop Now →</a>
    </div>

    {{-- ===== MAIN NAV ROW ===== --}}
    <div class="hp-nav-row">
        <div class="hp-nav-inner">

            {{-- LEFT: Hamburger + Logo --}}
            <div class="hp-nav-left">
                <button
                    class="hp-ham"
                    id="mobile-menu-btn"
                    aria-label="Toggle menu"
                    onclick="toggleMobileMenu()"
                >
                    <span id="ham-line-1"></span>
                    <span id="ham-line-2"></span>
                    <span id="ham-line-3"></span>
                </button>

                <a href="/" class="hp-logo">
                    <div class="hp-logo-icon">
                        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <div class="hp-logo-text">
                        <div class="brand">
                            <span class="hamro">Hamro</span><span class="pasal">Pasal</span>
                        </div>
                        <p class="tagline">Nepal's Marketplace</p>
                    </div>
                </a>
            </div>

            {{-- CENTER: Search Bar --}}
            <div class="hp-nav-center">
                <div class="hp-search-wrap">
                    <div class="hp-search">
                        <select>
                            <option>All</option>
                            <option>Electronics</option>
                            <option>Sports</option>
                            <option>Fashion</option>
                            <option>Books</option>
                        </select>
                        <input type="text" placeholder="Search products, brands, and more…" />
                        <button class="hp-search-btn">
                            <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            {{-- RIGHT: Actions --}}
            <div class="hp-nav-right">
                <div class="hp-actions">

                    {{-- Wishlist --}}
                    <a href="#" class="hp-icon-btn" title="Wishlist">
                        <svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                        <span>Wishlist</span>
                    </a>

                    {{-- Cart --}}
                    <a href="#" class="hp-icon-btn" title="Cart">
                        <svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        <span class="hp-badge">{{ $cartCount ?? 3 }}</span>
                        <span>Cart</span>
                    </a>

                    {{-- Sign In (desktop) --}}
                    <a href="#" class="hp-signin">
                        <div class="hp-signin-avatar">
                            <svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="hello">Hello, Guest</p>
                            <p class="label">Sign In</p>
                        </div>
                    </a>

                    {{-- Mobile login icon --}}
                    <a href="#" class="hp-mob-login">
                        <svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        {{-- Mobile Search --}}
        <div class="hp-mob-search">
            <div class="hp-mob-search-inner">
                <input type="text" placeholder="Search products…" />
                <button class="hp-mob-search-btn">
                    <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- ===== CATEGORY NAV BAR ===== --}}
    <div class="hp-catbar">
        <div class="hp-catbar-inner">

            {{-- All Categories --}}
            <div class="hp-allcat-wrap">
                <button class="hp-allcat-btn">
                    <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <span class="hidden sm:inline">All Categories</span>
                    <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" style="width:12px;height:12px">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="hp-dropdown">
                    @php
                        $cats = [
                            ['icon' => '📱', 'label' => 'Electronics'],
                            ['icon' => '⚽', 'label' => 'Sports'],
                            ['icon' => '👗', 'label' => 'Fashion'],
                            ['icon' => '📚', 'label' => 'Books'],
                        ];
                    @endphp
                    @foreach ($cats as $cat)
                    <a href="#">
                        <span>{{ $cat['icon'] }}</span>
                        {{ $cat['label'] }}
                        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                    @endforeach
                </div>
            </div>

            <div class="hp-divider"></div>

            {{-- Nav links --}}
            <nav class="hp-nav-links">
                <div class="hp-nav-links-inner">
                    @php
                        $navItems = [
                            ['label' => '⚡ Deals', 'hot' => true],
                            ['label' => '📱 Electronics'],
                            ['label' => '⚽ Sports'],
                            ['label' => '👗 Fashion'],
                            ['label' => '📚 Books'],
                        ];
                    @endphp
                    @foreach ($navItems as $item)
                    <a href="#" class="hp-nav-link {{ ($item['hot'] ?? false) ? 'hot' : '' }}">
                        {{ $item['label'] }}
                        @if ($item['hot'] ?? false)
                        <span class="hp-hot-pill">Hot</span>
                        @endif
                    </a>
                    @endforeach
                </div>
            </nav>

            {{-- Track Order --}}
            <a href="#" class="hp-track">
                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                </svg>
                Track Order
            </a>
        </div>
    </div>

    {{-- ===== MOBILE MENU ===== --}}
    <div class="hp-mobile-menu" id="mobile-menu">
        <div class="hp-mob-inner">
            <div class="hp-mob-pills">
                <a href="#" class="hp-mob-pill">Sell on HamroPasal</a>
                <a href="#" class="hp-mob-pill">Track Order</a>
                <a href="#" class="hp-mob-pill">My Account</a>
            </div>

            <p class="hp-mob-section-label">Categories</p>

            @foreach ([
                ['icon' => '⚡', 'label' => 'Deals', 'hot' => true],
                ['icon' => '📱', 'label' => 'Electronics'],
                ['icon' => '⚽', 'label' => 'Sports'],
                ['icon' => '👗', 'label' => 'Fashion'],
                ['icon' => '📚', 'label' => 'Books'],
            ] as $item)
            <a href="#" class="hp-mob-item {{ ($item['hot'] ?? false) ? 'hot' : '' }}">
                <span>{{ $item['icon'] }} {{ $item['label'] }}</span>
                @if ($item['hot'] ?? false)
                <span class="hp-hot-pill">Hot</span>
                @else
                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                </svg>
                @endif
            </a>
            @endforeach

            <a href="#" class="hp-mob-cta">
                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
                Sign In / Register
            </a>
        </div>
    </div>

</header>

<script>
    function toggleMobileMenu() {
        const menu = document.getElementById('mobile-menu');
        const l1 = document.getElementById('ham-line-1');
        const l2 = document.getElementById('ham-line-2');
        const l3 = document.getElementById('ham-line-3');
        const isOpen = menu.classList.contains('open');
        if (isOpen) {
            menu.classList.remove('open');
            l1.style.transform = 'none';
            l2.style.opacity = '1';
            l3.style.transform = 'none';
        } else {
            menu.classList.add('open');
            l1.style.transform = 'translateY(6px) rotate(45deg)';
            l2.style.opacity = '0';
            l3.style.transform = 'translateY(-6px) rotate(-45deg)';
        }
    }
    window.addEventListener('resize', function () {
        if (window.innerWidth >= 1024) {
            const menu = document.getElementById('mobile-menu');
            const l1 = document.getElementById('ham-line-1');
            const l2 = document.getElementById('ham-line-2');
            const l3 = document.getElementById('ham-line-3');
            menu.classList.remove('open');
            l1.style.transform = 'none';
            l2.style.opacity = '1';
            l3.style.transform = 'none';
        }
    });
</script>