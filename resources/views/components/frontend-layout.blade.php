<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HamroPasal - Nepal's Smart Marketplace</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        /* =============================================
           ROOT VARIABLES — Design Tokens
        ============================================= */
        :root {
            --clr-primary:        #C0392B;
            --clr-primary-dark:   #96281B;
            --clr-primary-light:  #E74C3C;
            --clr-accent:         #F39C12;
            --clr-accent-light:   #F8C471;
            --clr-dark:           #1A1A2E;
            --clr-dark-2:         #16213E;
            --clr-mid:            #2C3E50;
            --clr-text:           #2D2D2D;
            --clr-text-muted:     #6B7280;
            --clr-text-light:     #9CA3AF;
            --clr-bg:             #FAFAF8;
            --clr-bg-2:           #F3F4F0;
            --clr-white:          #FFFFFF;
            --clr-border:         #E5E7EB;
            --clr-success:        #27AE60;

            --ff-display:  'Playfair Display', serif;
            --ff-body:     'DM Sans', sans-serif;

            --radius-sm:   6px;
            --radius-md:   12px;
            --radius-lg:   20px;
            --radius-xl:   32px;

            --shadow-sm:   0 2px 8px rgba(0,0,0,.06);
            --shadow-md:   0 8px 24px rgba(0,0,0,.10);
            --shadow-lg:   0 20px 48px rgba(0,0,0,.14);
            --shadow-red:  0 8px 24px rgba(192,57,43,.30);
        }

        /* =============================================
           CONTAINER & GLOBAL RESET
        ============================================= */
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: var(--ff-body);
            color: var(--clr-text);
            background: var(--clr-bg);
            line-height: 1.65;
            overflow-x: hidden;
        }

        .container {
            width: 86%;
            margin: 0 auto;
        }

        /* Section spacing */
        .section-gap { padding: 90px 0; }
        .section-gap-sm { padding: 60px 0; }

        /* =============================================
           TYPOGRAPHY HELPERS
        ============================================= */
        .display-title {
            font-family: var(--ff-display);
            font-weight: 900;
            line-height: 1.1;
        }
        .section-label {
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: var(--clr-primary);
        }
        .section-title {
            font-family: var(--ff-display);
            font-size: clamp(28px, 4vw, 44px);
            font-weight: 900;
            color: var(--clr-dark);
            line-height: 1.15;
        }
        .section-subtitle {
            color: var(--clr-text-muted);
            font-size: 16px;
            max-width: 520px;
        }

        /* =============================================
           BUTTONS
        ============================================= */
        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 13px 28px;
            border-radius: var(--radius-md);
            font-family: var(--ff-body);
            font-weight: 600;
            font-size: 15px;
            cursor: pointer;
            border: none;
            text-decoration: none;
            transition: all .25s ease;
        }
        .btn-primary {
            background: var(--clr-primary);
            color: var(--clr-white);
            box-shadow: var(--shadow-red);
        }
        .btn-primary:hover { background: var(--clr-primary-dark); transform: translateY(-2px); }
        .btn-outline {
            background: transparent;
            color: var(--clr-primary);
            border: 2px solid var(--clr-primary);
        }
        .btn-outline:hover { background: var(--clr-primary); color: var(--clr-white); transform: translateY(-2px); }
        .btn-accent {
            background: var(--clr-accent);
            color: var(--clr-dark);
            box-shadow: 0 8px 20px rgba(243,156,18,.3);
        }
        .btn-accent:hover { background: #d68910; transform: translateY(-2px); }
        .btn-ghost {
            background: rgba(255,255,255,.12);
            color: var(--clr-white);
            border: 1.5px solid rgba(255,255,255,.3);
            backdrop-filter: blur(6px);
        }
        .btn-ghost:hover { background: rgba(255,255,255,.22); transform: translateY(-2px); }
        .btn-icon {
            width: 40px; height: 40px;
            padding: 0;
            border-radius: 50%;
            justify-content: center;
        }

        /* =============================================
           BADGE / TAG
        ============================================= */
        .badge {
            display: inline-block;
            padding: 3px 10px;
            border-radius: 50px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .05em;
            text-transform: uppercase;
        }
        .badge-red   { background: var(--clr-primary); color: #fff; }
        .badge-amber { background: var(--clr-accent); color: var(--clr-dark); }
        .badge-green { background: var(--clr-success); color: #fff; }
        .badge-dark  { background: var(--clr-dark); color: #fff; }

        /* =============================================
           NAVBAR
        ============================================= */
        .topbar {
            background: var(--clr-dark);
            color: #bbb;
            font-size: 13px;
            padding: 8px 0;
        }
        .topbar .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            flex-wrap: wrap;
        }
        .topbar a { color: #bbb; text-decoration: none; }
        .topbar a:hover { color: var(--clr-accent-light); }

        .navbar {
            background: var(--clr-white);
            border-bottom: 1px solid var(--clr-border);
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: var(--shadow-sm);
        }
        .navbar .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            padding: 16px 0;
        }
        .navbar-brand {
            font-family: var(--ff-display);
            font-size: 26px;
            font-weight: 900;
            color: var(--clr-primary);
            text-decoration: none;
            letter-spacing: -1px;
        }
        .navbar-brand span { color: var(--clr-dark); }

        .search-bar {
            flex: 1;
            max-width: 520px;
            display: flex;
            border: 2px solid var(--clr-border);
            border-radius: var(--radius-md);
            overflow: hidden;
            transition: border-color .2s;
        }
        .search-bar:focus-within { border-color: var(--clr-primary); }
        .search-bar input {
            flex: 1;
            padding: 10px 16px;
            font-family: var(--ff-body);
            font-size: 14px;
            border: none;
            outline: none;
            background: transparent;
        }
        .search-bar select {
            border: none;
            border-left: 2px solid var(--clr-border);
            padding: 0 10px;
            font-size: 13px;
            outline: none;
            background: var(--clr-bg-2);
            color: var(--clr-text-muted);
            cursor: pointer;
        }
        .search-bar button {
            background: var(--clr-primary);
            color: #fff;
            border: none;
            padding: 0 20px;
            cursor: pointer;
            transition: background .2s;
        }
        .search-bar button:hover { background: var(--clr-primary-dark); }

        .navbar-actions {
            display: flex;
            align-items: center;
            gap: 6px;
        }
        .nav-action-btn {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2px;
            padding: 8px 14px;
            border-radius: var(--radius-md);
            color: var(--clr-text-muted);
            text-decoration: none;
            font-size: 11px;
            font-weight: 500;
            transition: all .2s;
            cursor: pointer;
            border: none;
            background: transparent;
        }
        .nav-action-btn i { font-size: 20px; color: var(--clr-dark); }
        .nav-action-btn:hover { background: var(--clr-bg-2); color: var(--clr-primary); }
        .nav-action-btn:hover i { color: var(--clr-primary); }
        .cart-count {
            position: absolute;
            top: 4px; right: 8px;
            width: 18px; height: 18px;
            background: var(--clr-primary);
            color: #fff;
            border-radius: 50%;
            font-size: 10px;
            font-weight: 700;
            display: flex; align-items: center; justify-content: center;
        }

        .nav-menu {
            background: var(--clr-dark);
        }
        .nav-menu .container {
            display: flex;
            align-items: center;
            gap: 0;
        }
        .nav-menu a {
            color: rgba(255,255,255,.8);
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            padding: 14px 20px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: all .2s;
            white-space: nowrap;
        }
        .nav-menu a:hover, .nav-menu a.active {
            color: var(--clr-white);
            background: rgba(255,255,255,.08);
        }
        .nav-menu a.active { border-bottom: 3px solid var(--clr-primary); }
        .nav-menu .all-categories {
            background: var(--clr-primary);
            color: #fff !important;
            font-weight: 600;
        }
        .nav-menu .all-categories:hover { background: var(--clr-primary-dark) !important; }

        /* =============================================
           HERO SECTION
        ============================================= */
        .hero {
            background: var(--clr-dark-2);
            overflow: hidden;
            position: relative;
        }
        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(ellipse at 70% 50%, rgba(192,57,43,.18) 0%, transparent 65%),
                        radial-gradient(ellipse at 10% 80%, rgba(243,156,18,.08) 0%, transparent 50%);
        }
        .hero .container {
            display: grid;
            grid-template-columns: 1fr 380px;
            gap: 40px;
            align-items: center;
            padding: 80px 0;
            position: relative;
            z-index: 1;
        }
        .hero-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(243,156,18,.15);
            border: 1px solid rgba(243,156,18,.3);
            color: var(--clr-accent-light);
            font-size: 13px;
            font-weight: 600;
            padding: 6px 14px;
            border-radius: 50px;
            margin-bottom: 20px;
        }
        .hero-title {
            font-family: var(--ff-display);
            font-size: clamp(38px, 5.5vw, 68px);
            font-weight: 900;
            color: var(--clr-white);
            line-height: 1.05;
            margin-bottom: 20px;
        }
        .hero-title .highlight {
            color: var(--clr-primary-light);
            position: relative;
        }
        .hero-title .highlight::after {
            content: '';
            position: absolute;
            bottom: 4px; left: 0; right: 0;
            height: 4px;
            background: var(--clr-accent);
            border-radius: 2px;
            opacity: .6;
        }
        .hero-desc {
            color: rgba(255,255,255,.65);
            font-size: 17px;
            max-width: 460px;
            margin-bottom: 36px;
            line-height: 1.7;
        }
        .hero-actions { display: flex; gap: 14px; flex-wrap: wrap; margin-bottom: 48px; }
        .hero-stats { display: flex; gap: 40px; flex-wrap: wrap; }
        .hero-stat-num {
            font-family: var(--ff-display);
            font-size: 28px;
            font-weight: 900;
            color: var(--clr-white);
        }
        .hero-stat-label { font-size: 13px; color: rgba(255,255,255,.5); }

        .hero-card-stack {
            position: relative;
            height: 460px;
        }
        .hero-card {
            position: absolute;
            background: rgba(255,255,255,.06);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,.12);
            border-radius: var(--radius-xl);
            padding: 20px;
            width: 200px;
        }
        .hero-card img {
            width: 100%;
            height: 140px;
            object-fit: cover;
            border-radius: var(--radius-md);
            background: var(--clr-mid);
        }
        .hero-card-title { font-size: 13px; font-weight: 600; color: #fff; margin-top: 10px; }
        .hero-card-price { font-size: 16px; font-weight: 700; color: var(--clr-accent-light); }
        .hero-card:nth-child(1) { top: 0; left: 50%; transform: translateX(-50%) rotate(-6deg); animation: float1 4s ease-in-out infinite; }
        .hero-card:nth-child(2) { top: 80px; right: 0; animation: float2 5s ease-in-out infinite; }
        .hero-card:nth-child(3) { bottom: 40px; left: 0; animation: float3 4.5s ease-in-out infinite; }
        @keyframes float1 { 0%,100%{transform:translateX(-50%) rotate(-6deg) translateY(0)} 50%{transform:translateX(-50%) rotate(-6deg) translateY(-12px)} }
        @keyframes float2 { 0%,100%{transform:rotate(4deg) translateY(0)} 50%{transform:rotate(4deg) translateY(-10px)} }
        @keyframes float3 { 0%,100%{transform:rotate(-3deg) translateY(0)} 50%{transform:rotate(-3deg) translateY(-8px)} }

        /* =============================================
           FLASH SALE TICKER
        ============================================= */
        .flash-bar {
            background: var(--clr-primary);
            color: #fff;
            padding: 12px 0;
            overflow: hidden;
        }
        .ticker-wrapper {
            display: flex;
            align-items: center;
            gap: 0;
        }
        .ticker-label {
            background: var(--clr-accent);
            color: var(--clr-dark);
            font-weight: 800;
            font-size: 13px;
            padding: 6px 18px;
            white-space: nowrap;
            display: flex;
            align-items: center;
            gap: 8px;
            clip-path: polygon(0 0, calc(100% - 12px) 0, 100% 50%, calc(100% - 12px) 100%, 0 100%);
            padding-right: 28px;
        }
        .ticker-scroll {
            flex: 1;
            overflow: hidden;
            padding: 0 20px;
        }
        .ticker-track {
            display: flex;
            gap: 60px;
            animation: ticker 30s linear infinite;
            width: max-content;
        }
        .ticker-item {
            white-space: nowrap;
            font-size: 14px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .ticker-item strong { font-weight: 700; }
        .ticker-dot { width: 6px; height: 6px; background: var(--clr-accent); border-radius: 50%; }
        @keyframes ticker { from{transform:translateX(0)} to{transform:translateX(-50%)} }

        /* =============================================
           CATEGORY GRID
        ============================================= */
        .categories-grid {
            display: grid;
            grid-template-columns: repeat(8, 1fr);
            gap: 16px;
        }
        .category-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            padding: 20px 12px;
            background: var(--clr-white);
            border: 1.5px solid var(--clr-border);
            border-radius: var(--radius-lg);
            cursor: pointer;
            transition: all .25s ease;
            text-align: center;
            text-decoration: none;
        }
        .category-card:hover {
            border-color: var(--clr-primary);
            box-shadow: var(--shadow-md);
            transform: translateY(-4px);
        }
        .category-icon {
            width: 52px; height: 52px;
            border-radius: 50%;
            background: var(--clr-bg-2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            transition: all .25s;
        }
        .category-card:hover .category-icon {
            background: var(--clr-primary);
            color: #fff;
        }
        .category-name { font-size: 12px; font-weight: 600; color: var(--clr-text); }

        /* =============================================
           PRODUCT CARDS
        ============================================= */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
        }
        .product-card {
            background: var(--clr-white);
            border: 1.5px solid var(--clr-border);
            border-radius: var(--radius-lg);
            overflow: hidden;
            transition: all .25s ease;
            position: relative;
        }
        .product-card:hover {
            box-shadow: var(--shadow-lg);
            border-color: transparent;
            transform: translateY(-5px);
        }
        .product-img-wrap {
            position: relative;
            overflow: hidden;
            aspect-ratio: 1/1;
            background: var(--clr-bg-2);
        }
        .product-img-wrap img {
            width: 100%; height: 100%;
            object-fit: cover;
            transition: transform .4s ease;
        }
        .product-card:hover .product-img-wrap img { transform: scale(1.06); }
        .product-badges {
            position: absolute;
            top: 12px; left: 12px;
            display: flex; flex-direction: column; gap: 4px;
        }
        .product-actions {
            position: absolute;
            top: 12px; right: 12px;
            display: flex; flex-direction: column; gap: 6px;
            opacity: 0;
            transform: translateX(10px);
            transition: all .25s;
        }
        .product-card:hover .product-actions { opacity: 1; transform: translateX(0); }
        .action-btn {
            width: 36px; height: 36px;
            background: var(--clr-white);
            border: none;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            cursor: pointer;
            box-shadow: var(--shadow-sm);
            transition: all .2s;
            font-size: 15px;
            color: var(--clr-text-muted);
        }
        .action-btn:hover { background: var(--clr-primary); color: #fff; }
        .product-body { padding: 16px; }
        .product-vendor {
            font-size: 11px;
            font-weight: 600;
            color: var(--clr-primary);
            text-transform: uppercase;
            letter-spacing: .06em;
            margin-bottom: 4px;
        }
        .product-name {
            font-size: 15px;
            font-weight: 600;
            color: var(--clr-text);
            line-height: 1.35;
            margin-bottom: 8px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .product-rating {
            display: flex; align-items: center; gap: 6px;
            margin-bottom: 10px;
        }
        .stars { color: var(--clr-accent); font-size: 12px; }
        .rating-count { font-size: 12px; color: var(--clr-text-light); }
        .product-price-row {
            display: flex; align-items: center; gap: 8px;
            margin-bottom: 12px;
        }
        .price-current {
            font-size: 19px;
            font-weight: 800;
            color: var(--clr-primary);
            font-family: var(--ff-display);
        }
        .price-original {
            font-size: 13px;
            color: var(--clr-text-light);
            text-decoration: line-through;
        }
        .price-discount {
            font-size: 12px;
            font-weight: 700;
            color: var(--clr-success);
        }
        .add-to-cart-btn {
            width: 100%;
            padding: 10px;
            background: var(--clr-dark);
            color: var(--clr-white);
            border: none;
            border-radius: var(--radius-md);
            font-family: var(--ff-body);
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            display: flex; align-items: center; justify-content: center; gap: 8px;
            transition: all .2s;
        }
        .add-to-cart-btn:hover { background: var(--clr-primary); }

        /* =============================================
           BANNER / PROMO SECTIONS
        ============================================= */
        .promo-grid {
            display: grid;
            grid-template-columns: 1.4fr 1fr;
            gap: 24px;
        }
        .promo-banner {
            border-radius: var(--radius-xl);
            overflow: hidden;
            position: relative;
            min-height: 260px;
            display: flex;
            align-items: flex-end;
            padding: 36px;
        }
        .promo-banner::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(120deg, rgba(26,26,46,.9) 0%, rgba(26,26,46,.3) 100%);
        }
        .promo-banner-bg {
            position: absolute;
            inset: 0;
            object-fit: cover;
            width: 100%; height: 100%;
        }
        .promo-content { position: relative; z-index: 1; }
        .promo-label {
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: var(--clr-accent-light);
            margin-bottom: 8px;
        }
        .promo-title {
            font-family: var(--ff-display);
            font-size: clamp(22px, 3vw, 34px);
            font-weight: 900;
            color: var(--clr-white);
            line-height: 1.15;
            margin-bottom: 16px;
        }
        .promo-grid-right {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }
        .promo-banner-sm {
            flex: 1;
            min-height: 110px;
        }
        .promo-banner-sm .promo-title { font-size: clamp(16px, 2vw, 22px); }

        /* =============================================
           FLASH SALE SECTION
        ============================================= */
        .flash-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 36px;
            flex-wrap: wrap;
            gap: 16px;
        }
        .flash-title-group { display: flex; align-items: center; gap: 16px; }
        .flash-title-icon {
            width: 48px; height: 48px;
            background: var(--clr-primary);
            color: #fff;
            border-radius: var(--radius-md);
            display: flex; align-items: center; justify-content: center;
            font-size: 22px;
        }
        .countdown { display: flex; gap: 8px; }
        .countdown-unit {
            background: var(--clr-dark);
            color: #fff;
            border-radius: var(--radius-sm);
            padding: 8px 14px;
            text-align: center;
        }
        .countdown-num { font-size: 22px; font-weight: 800; font-family: var(--ff-display); line-height: 1; }
        .countdown-label { font-size: 10px; color: rgba(255,255,255,.5); margin-top: 2px; }
        .countdown-sep { font-size: 22px; font-weight: 800; color: var(--clr-primary); align-self: center; }

        /* =============================================
           DOKAN REGISTRATION
        ============================================= */
        .dokan-section {
            background: linear-gradient(135deg, var(--clr-dark-2) 0%, var(--clr-mid) 100%);
            position: relative;
            overflow: hidden;
        }
        .dokan-section::before {
            content: '';
            position: absolute;
            top: -100px; right: -100px;
            width: 500px; height: 500px;
            background: radial-gradient(circle, rgba(192,57,43,.2) 0%, transparent 65%);
            border-radius: 50%;
        }
        .dokan-section::after {
            content: '';
            position: absolute;
            bottom: -80px; left: -80px;
            width: 400px; height: 400px;
            background: radial-gradient(circle, rgba(243,156,18,.1) 0%, transparent 65%);
            border-radius: 50%;
        }
        .dokan-layout {
            display: grid;
            grid-template-columns: 1fr 1.1fr;
            gap: 80px;
            align-items: center;
            position: relative;
            z-index: 1;
        }
        .dokan-info { color: var(--clr-white); }
        .dokan-info .section-label { color: var(--clr-accent-light); margin-bottom: 12px; }
        .dokan-info .section-title { color: var(--clr-white); margin-bottom: 18px; }
        .dokan-info p { color: rgba(255,255,255,.65); font-size: 16px; margin-bottom: 32px; line-height: 1.7; }
        .dokan-perks { display: flex; flex-direction: column; gap: 14px; margin-bottom: 36px; }
        .dokan-perk {
            display: flex;
            align-items: flex-start;
            gap: 14px;
        }
        .perk-icon {
            width: 42px; height: 42px;
            background: rgba(255,255,255,.08);
            border: 1px solid rgba(255,255,255,.14);
            border-radius: var(--radius-md);
            display: flex; align-items: center; justify-content: center;
            font-size: 18px;
            color: var(--clr-accent-light);
            flex-shrink: 0;
        }
        .perk-text strong { display: block; color: var(--clr-white); font-size: 15px; font-weight: 600; }
        .perk-text span { color: rgba(255,255,255,.5); font-size: 13px; }

        .dokan-form-card {
            background: var(--clr-white);
            border-radius: var(--radius-xl);
            padding: 40px;
            box-shadow: var(--shadow-lg);
        }
        .form-header { margin-bottom: 28px; }
        .form-header h3 {
            font-family: var(--ff-display);
            font-size: 24px;
            font-weight: 900;
            color: var(--clr-dark);
            margin-bottom: 4px;
        }
        .form-header p { font-size: 14px; color: var(--clr-text-muted); }
        .form-group { margin-bottom: 18px; }
        .form-label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: var(--clr-text);
            margin-bottom: 7px;
        }
        .form-label span { color: var(--clr-primary); }
        .form-input {
            width: 100%;
            padding: 12px 16px;
            border: 1.5px solid var(--clr-border);
            border-radius: var(--radius-md);
            font-family: var(--ff-body);
            font-size: 14px;
            color: var(--clr-text);
            transition: border-color .2s;
            background: var(--clr-bg);
            outline: none;
        }
        .form-input:focus { border-color: var(--clr-primary); background: var(--clr-white); }
        .form-input::placeholder { color: var(--clr-text-light); }
        textarea.form-input { resize: vertical; min-height: 90px; }
        .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
        .form-submit-area { margin-top: 8px; }
        .form-submit-area .btn { width: 100%; justify-content: center; padding: 14px; font-size: 16px; }
        .form-note { text-align: center; margin-top: 12px; font-size: 12px; color: var(--clr-text-light); }
        .form-note a { color: var(--clr-primary); text-decoration: none; font-weight: 600; }

        /* =============================================
           TESTIMONIALS
        ============================================= */
        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }
        .testimonial-card {
            background: var(--clr-white);
            border: 1.5px solid var(--clr-border);
            border-radius: var(--radius-lg);
            padding: 28px;
            transition: all .25s;
        }
        .testimonial-card:hover { box-shadow: var(--shadow-md); border-color: transparent; transform: translateY(-3px); }
        .t-quote { font-size: 32px; color: var(--clr-primary); line-height: 1; margin-bottom: 12px; font-family: Georgia, serif; }
        .t-text { font-size: 15px; color: var(--clr-text-muted); line-height: 1.65; margin-bottom: 20px; font-style: italic; }
        .t-author { display: flex; align-items: center; gap: 12px; }
        .t-avatar {
            width: 44px; height: 44px;
            border-radius: 50%;
            background: var(--clr-primary);
            color: #fff;
            display: flex; align-items: center; justify-content: center;
            font-weight: 700; font-size: 16px;
        }
        .t-name { font-weight: 700; font-size: 14px; color: var(--clr-dark); }
        .t-role { font-size: 12px; color: var(--clr-text-light); }

        /* =============================================
           NEWSLETTER
        ============================================= */
        .newsletter-section {
            background: var(--clr-primary);
            position: relative;
            overflow: hidden;
        }
        .newsletter-section::before {
            content: '';
            position: absolute;
            top: -60px; right: -60px;
            width: 300px; height: 300px;
            background: rgba(255,255,255,.05);
            border-radius: 50%;
        }
        .newsletter-section::after {
            content: '';
            position: absolute;
            bottom: -80px; left: 20%;
            width: 360px; height: 360px;
            background: rgba(0,0,0,.08);
            border-radius: 50%;
        }
        .newsletter-layout {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
            position: relative;
            z-index: 1;
            flex-wrap: wrap;
        }
        .newsletter-text h2 {
            font-family: var(--ff-display);
            font-size: clamp(24px, 3vw, 38px);
            font-weight: 900;
            color: #fff;
            margin-bottom: 8px;
        }
        .newsletter-text p { color: rgba(255,255,255,.75); font-size: 16px; }
        .newsletter-form {
            display: flex;
            gap: 0;
            border-radius: var(--radius-md);
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            min-width: 380px;
        }
        .newsletter-form input {
            flex: 1;
            padding: 15px 20px;
            border: none;
            font-family: var(--ff-body);
            font-size: 15px;
            outline: none;
        }
        .newsletter-form button {
            background: var(--clr-dark);
            color: #fff;
            border: none;
            padding: 15px 28px;
            font-family: var(--ff-body);
            font-weight: 700;
            font-size: 14px;
            cursor: pointer;
            white-space: nowrap;
            transition: background .2s;
        }
        .newsletter-form button:hover { background: var(--clr-primary-dark); }

        /* =============================================
           FOOTER
        ============================================= */
        .footer {
            background: var(--clr-dark);
            color: rgba(255,255,255,.65);
        }
        .footer-top { padding: 64px 0 48px; }
        .footer-grid {
            display: grid;
            grid-template-columns: 1.6fr 1fr 1fr 1fr;
            gap: 48px;
        }
        .footer-brand h3 {
            font-family: var(--ff-display);
            font-size: 28px;
            font-weight: 900;
            color: var(--clr-white);
            margin-bottom: 12px;
        }
        .footer-brand h3 span { color: var(--clr-primary-light); }
        .footer-brand p { font-size: 14px; line-height: 1.7; margin-bottom: 24px; }
        .social-links { display: flex; gap: 10px; }
        .social-btn {
            width: 38px; height: 38px;
            background: rgba(255,255,255,.06);
            border: 1px solid rgba(255,255,255,.12);
            border-radius: var(--radius-sm);
            display: flex; align-items: center; justify-content: center;
            color: rgba(255,255,255,.65);
            text-decoration: none;
            transition: all .2s;
            font-size: 16px;
        }
        .social-btn:hover { background: var(--clr-primary); border-color: var(--clr-primary); color: #fff; }
        .footer-col h4 {
            font-size: 14px;
            font-weight: 700;
            color: var(--clr-white);
            margin-bottom: 18px;
            text-transform: uppercase;
            letter-spacing: .08em;
        }
        .footer-links { list-style: none; }
        .footer-links li { margin-bottom: 10px; }
        .footer-links a {
            font-size: 14px;
            color: rgba(255,255,255,.55);
            text-decoration: none;
            transition: color .2s;
            display: inline-flex; align-items: center; gap: 6px;
        }
        .footer-links a:hover { color: var(--clr-white); }
        .footer-links a::before { content: '→'; opacity: 0; transition: all .2s; font-size: 12px; transform: translateX(-4px); }
        .footer-links a:hover::before { opacity: 1; transform: translateX(0); }
        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,.08);
            padding: 20px 0;
        }
        .footer-bottom .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 12px;
        }
        .footer-bottom p { font-size: 13px; }
        .payment-methods { display: flex; gap: 8px; align-items: center; }
        .payment-badge {
            background: rgba(255,255,255,.08);
            border: 1px solid rgba(255,255,255,.12);
            border-radius: 6px;
            padding: 4px 10px;
            font-size: 12px;
            font-weight: 600;
            color: rgba(255,255,255,.7);
        }

        /* =============================================
           TRUST BAR
        ============================================= */
        .trust-bar { background: var(--clr-bg-2); border-bottom: 1px solid var(--clr-border); }
        .trust-items {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 0;
        }
        .trust-item {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 24px 0;
            border-right: 1px solid var(--clr-border);
        }
        .trust-item:last-child { border-right: none; }
        .trust-icon {
            width: 48px; height: 48px;
            background: var(--clr-primary);
            color: #fff;
            border-radius: var(--radius-md);
            display: flex; align-items: center; justify-content: center;
            font-size: 20px;
            flex-shrink: 0;
        }
        .trust-title { font-size: 14px; font-weight: 700; color: var(--clr-dark); }
        .trust-desc { font-size: 12px; color: var(--clr-text-muted); }

        /* =============================================
           SECTION HEADER LAYOUT
        ============================================= */
        .section-head {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            margin-bottom: 36px;
            gap: 16px;
            flex-wrap: wrap;
        }
        .section-head-left .section-label { margin-bottom: 6px; }

        /* =============================================
           VENDOR GRID
        ============================================= */
        .vendor-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
        }
        .vendor-card {
            background: var(--clr-white);
            border: 1.5px solid var(--clr-border);
            border-radius: var(--radius-lg);
            padding: 24px 16px;
            text-align: center;
            transition: all .25s;
            cursor: pointer;
        }
        .vendor-card:hover { box-shadow: var(--shadow-md); border-color: var(--clr-primary); transform: translateY(-3px); }
        .vendor-logo {
            width: 64px; height: 64px;
            border-radius: 50%;
            margin: 0 auto 12px;
            background: var(--clr-primary);
            color: #fff;
            display: flex; align-items: center; justify-content: center;
            font-family: var(--ff-display);
            font-size: 22px;
            font-weight: 900;
        }
        .vendor-name { font-weight: 700; font-size: 14px; color: var(--clr-dark); margin-bottom: 4px; }
        .vendor-products { font-size: 12px; color: var(--clr-text-light); }
        .vendor-rating { font-size: 12px; color: var(--clr-accent); margin-top: 4px; }

        /* =============================================
           MINI CART SIDEBAR (overlay style)
        ============================================= */
        .cart-sidebar {
            position: fixed;
            top: 0; right: -400px;
            width: 380px;
            height: 100vh;
            background: var(--clr-white);
            box-shadow: var(--shadow-lg);
            z-index: 1000;
            transition: right .35s ease;
            display: flex;
            flex-direction: column;
        }
        .cart-sidebar.open { right: 0; }
        .cart-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,.4);
            z-index: 999;
            opacity: 0;
            pointer-events: none;
            transition: opacity .35s;
        }
        .cart-overlay.open { opacity: 1; pointer-events: all; }
        .cart-header {
            display: flex; align-items: center; justify-content: space-between;
            padding: 20px 24px;
            border-bottom: 1px solid var(--clr-border);
        }
        .cart-header h3 { font-family: var(--ff-display); font-size: 20px; font-weight: 900; color: var(--clr-dark); }
        .cart-close { background: none; border: none; font-size: 22px; cursor: pointer; color: var(--clr-text-muted); transition: color .2s; }
        .cart-close:hover { color: var(--clr-primary); }
        .cart-items { flex: 1; overflow-y: auto; padding: 20px 24px; }
        .cart-item { display: flex; gap: 14px; padding: 14px 0; border-bottom: 1px solid var(--clr-border); }
        .cart-item-img { width: 70px; height: 70px; object-fit: cover; border-radius: var(--radius-md); background: var(--clr-bg-2); flex-shrink: 0; }
        .cart-item-info { flex: 1; }
        .cart-item-name { font-size: 14px; font-weight: 600; color: var(--clr-dark); margin-bottom: 4px; }
        .cart-item-price { font-size: 15px; font-weight: 800; color: var(--clr-primary); }
        .cart-qty { display: flex; align-items: center; gap: 8px; margin-top: 8px; }
        .qty-btn { width: 28px; height: 28px; border: 1.5px solid var(--clr-border); border-radius: 6px; background: none; cursor: pointer; font-size: 16px; display: flex; align-items: center; justify-content: center; font-weight: 600; }
        .qty-btn:hover { border-color: var(--clr-primary); color: var(--clr-primary); }
        .cart-footer { padding: 20px 24px; border-top: 1px solid var(--clr-border); }
        .cart-total { display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; }
        .cart-total-label { font-size: 15px; font-weight: 600; color: var(--clr-text-muted); }
        .cart-total-price { font-family: var(--ff-display); font-size: 26px; font-weight: 900; color: var(--clr-dark); }
        .cart-actions { display: flex; flex-direction: column; gap: 10px; }
        .cart-actions .btn { justify-content: center; }

        /* =============================================
           RESPONSIVE
        ============================================= */
        @media (max-width: 1100px) {
            .products-grid { grid-template-columns: repeat(3, 1fr); }
            .categories-grid { grid-template-columns: repeat(5, 1fr); }
            .footer-grid { grid-template-columns: 1.2fr 1fr 1fr; }
            .vendor-grid { grid-template-columns: repeat(4, 1fr); }
        }
        @media (max-width: 820px) {
            .hero .container { grid-template-columns: 1fr; }
            .hero-card-stack { display: none; }
            .products-grid { grid-template-columns: repeat(2, 1fr); }
            .categories-grid { grid-template-columns: repeat(4, 1fr); }
            .promo-grid { grid-template-columns: 1fr; }
            .dokan-layout { grid-template-columns: 1fr; gap: 40px; }
            .testimonials-grid { grid-template-columns: 1fr 1fr; }
            .trust-items { grid-template-columns: 1fr 1fr; }
            .footer-grid { grid-template-columns: 1fr 1fr; }
            .vendor-grid { grid-template-columns: repeat(3, 1fr); }
            .newsletter-layout { flex-direction: column; }
            .newsletter-form { min-width: auto; width: 100%; }
        }
        @media (max-width: 520px) {
            .container { width: 92%; }
            .products-grid { grid-template-columns: 1fr 1fr; gap: 14px; }
            .categories-grid { grid-template-columns: repeat(3, 1fr); }
            .testimonials-grid { grid-template-columns: 1fr; }
            .trust-items { grid-template-columns: 1fr; }
            .footer-grid { grid-template-columns: 1fr; }
            .vendor-grid { grid-template-columns: 1fr 1fr; }
            .form-grid { grid-template-columns: 1fr; }
        }

        /* =============================================
           UTILS
        ============================================= */
        .text-center { text-align: center; }
        .mt-2 { margin-top: 8px; }
        .mt-4 { margin-top: 16px; }
        .mb-4 { margin-bottom: 16px; }
        .flex-center { display: flex; align-items: center; justify-content: center; }
        .gap-2 { gap: 8px; }
        .img-placeholder {
            background: linear-gradient(135deg, var(--clr-bg-2) 0%, #ddd 100%);
            display: flex; align-items: center; justify-content: center;
            font-size: 36px; color: #bbb;
        }
        .divider { border: none; border-top: 1px solid var(--clr-border); margin: 0; }
    </style>
</head>
<body>
@include('sweetalert::alert')

 <x-frontend-header />


<main>
    {{ $slot }}
</main>

<!-- ============================================================
     FOOTER
============================================================ -->
<x-frontend-footer />

<!-- ============================================================
     MINI CART SIDEBAR
============================================================ -->
<div class="cart-overlay" id="cartOverlay" onclick="toggleCart()"></div>
<div class="cart-sidebar" id="cartSidebar">
    <div class="cart-header">
        <h3>Your Cart <span style="font-size:14px;color:var(--clr-text-muted);font-family:var(--ff-body);font-weight:400">(3 items)</span></h3>
        <button class="cart-close" onclick="toggleCart()"><i class="fas fa-times"></i></button>
    </div>
    <div class="cart-items">
        <div class="cart-item">
            <div class="img-placeholder cart-item-img" style="font-size:30px;flex-shrink:0">📱</div>
            <div class="cart-item-info">
                <div class="cart-item-name">Samsung Galaxy A55 5G</div>
                <div class="cart-item-price">Rs. 62,999</div>
                <div class="cart-qty">
                    <button class="qty-btn">−</button>
                    <span style="font-weight:700;font-size:15px">1</span>
                    <button class="qty-btn">+</button>
                    <button style="background:none;border:none;color:var(--clr-text-light);cursor:pointer;margin-left:8px;font-size:13px"><i class="fas fa-trash"></i></button>
                </div>
            </div>
        </div>
        <div class="cart-item">
            <div class="img-placeholder cart-item-img" style="font-size:30px;flex-shrink:0">🎧</div>
            <div class="cart-item-info">
                <div class="cart-item-name">Sony WH-1000XM5</div>
                <div class="cart-item-price">Rs. 42,000</div>
                <div class="cart-qty">
                    <button class="qty-btn">−</button>
                    <span style="font-weight:700;font-size:15px">1</span>
                    <button class="qty-btn">+</button>
                    <button style="background:none;border:none;color:var(--clr-text-light);cursor:pointer;margin-left:8px;font-size:13px"><i class="fas fa-trash"></i></button>
                </div>
            </div>
        </div>
        <div class="cart-item">
            <div class="img-placeholder cart-item-img" style="font-size:30px;flex-shrink:0">👟</div>
            <div class="cart-item-info">
                <div class="cart-item-name">Nike Air Max 270</div>
                <div class="cart-item-price">Rs. 10,500</div>
                <div class="cart-qty">
                    <button class="qty-btn">−</button>
                    <span style="font-weight:700;font-size:15px">2</span>
                    <button class="qty-btn">+</button>
                    <button style="background:none;border:none;color:var(--clr-text-light);cursor:pointer;margin-left:8px;font-size:13px"><i class="fas fa-trash"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="cart-footer">
        <div style="background:var(--clr-bg-2);border-radius:var(--radius-md);padding:12px 16px;margin-bottom:16px;">
            <div style="display:flex;justify-content:space-between;font-size:13px;color:var(--clr-text-muted);margin-bottom:6px"><span>Subtotal</span><span>Rs. 1,26,499</span></div>
            <div style="display:flex;justify-content:space-between;font-size:13px;color:var(--clr-success)"><span><i class="fas fa-tag"></i> Discount</span><span>- Rs. 8,500</span></div>
        </div>
        <div class="cart-total">
            <span class="cart-total-label">Total</span>
            <span class="cart-total-price">Rs. 1,17,999</span>
        </div>
        <div class="cart-actions">
            <a href="#" class="btn btn-primary"><i class="fas fa-credit-card"></i> Proceed to Checkout</a>
            <a href="#" class="btn btn-outline" onclick="toggleCart()">Continue Shopping</a>
        </div>
    </div>
</div>

<!-- ============================================================
     JAVASCRIPT
============================================================ -->
<script>
    // Cart toggle
    function toggleCart() {
        const sidebar = document.getElementById('cartSidebar');
        const overlay = document.getElementById('cartOverlay');
        sidebar.classList.toggle('open');
        overlay.classList.toggle('open');
    }

    // Countdown timer
    function startCountdown() {
        let total = 8 * 3600 + 34 * 60 + 12;
        const h = document.getElementById('hours');
        const m = document.getElementById('mins');
        const s = document.getElementById('secs');
        setInterval(() => {
            if (total <= 0) total = 8 * 3600;
            total--;
            h.textContent = String(Math.floor(total / 3600)).padStart(2, '0');
            m.textContent = String(Math.floor((total % 3600) / 60)).padStart(2, '0');
            s.textContent = String(total % 60).padStart(2, '0');
        }, 1000);
    }
    startCountdown();

    // Dokan form handler
    function handleDokanSubmit(e) {
        e.preventDefault();
        const btn = e.target.querySelector('button[type=submit]');
        btn.innerHTML = '<i class="fas fa-check"></i> Application Submitted!';
        btn.style.background = 'var(--clr-success)';
        btn.disabled = true;
        setTimeout(() => {
            btn.innerHTML = '<i class="fas fa-store"></i> Submit Dokan Application';
            btn.style.background = '';
            btn.disabled = false;
            e.target.reset();
        }, 4000);
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(a => {
        a.addEventListener('click', e => {
            const target = document.querySelector(a.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });
</script>

</body>
</html>
