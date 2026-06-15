<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Precision Arch Stencil Kit — Royals Arch Brow</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* ===== RESET & BASE ===== */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --black: #0a0a08;
            --dark: #111111;
            --dark-card: #1a1a0f;
            --dark-input: #1c1c15;
            --gold: #C9A84C;
            --gold-light: #C9A84C;
            --gold-dark: #C9A84C;
            --gold-muted: rgba(201, 168, 76, 0.12);
            --white: #f5f0e8;
            --white-dim: rgba(245, 240, 232, 0.55);
            --white-faint: rgba(245, 240, 232, 0.15);
            --border: rgba(201, 168, 76, 0.18);
            --border-hover: rgba(201, 168, 76, 0.45);
            --font-display: 'Cormorant Garamond', serif;
            --font-body: 'Montserrat', sans-serif;
            --radius: 18px;
            --radius-sm: 10px;
            --transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        html {
            font-size: 16px;
            scroll-behavior: smooth;
        }
        body {
            background: var(--black);
            color: var(--white);
            font-family: var(--font-body);
            font-weight: 600;
            line-height: 1.6;
            min-height: 100vh;
            overflow-x: hidden;
        }
        a {
            color: inherit;
            text-decoration: none;
        }
        button {
            cursor: pointer;
            border: none;
            outline: none;
            font-family: var(--font-body);
            background: none;
        }

        /* ===== NAVBAR (unchanged, only kept for context) ===== */
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 2.5rem;
            border-bottom: 1px solid var(--border);
            background: rgba(10, 10, 8, 0.97);
            backdrop-filter: blur(20px);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .navbar-left {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        .nav-avatar {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            overflow: hidden;
            border: 1.5px solid var(--gold-dark);
            flex-shrink: 0;
        }
        .nav-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .navbar-nav {
            display: flex;
            align-items: center;
            gap: 2.5rem;
            list-style: none;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }
        .navbar-nav a {
            font-size: 0.65rem;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            color: var(--white-dim);
            transition: color var(--transition);
            font-weight: 400;
        }
        .navbar-nav a:hover,
        .navbar-nav a.active {
            color: var(--gold);
        }

        .btn-book {
            padding: 0.55rem 1.5rem;
            font-size: 0.65rem;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            border-radius: 50px;
            border: 1px solid var(--border);
            color: var(--white-dim);
            transition: all var(--transition);
        }
        .btn-book:hover {
            border-color: var(--gold);
            color: var(--gold);
        }

        .nav-emblem {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: radial-gradient(circle at 35% 35%, #2a2010, #1a1408);
            border: 1.5px solid var(--gold-dark);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            overflow: hidden;
        }
        .nav-emblem img {
            width: 26px;
            height: 26px;
            object-fit: contain;
        }

        .nav-gold-rule {
            height: 1px;
            background: linear-gradient(to right, transparent 0%, var(--gold-dark) 30%, var(--gold-dark) 70%, transparent 100%);
            opacity: 0.5;
        }

        /* ===== PAGE TOPBAR (Back Arrow only – matches Figma) ===== */
        .page-topbar {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            padding: 0.5rem 0;
            margin-bottom: 1.25rem;
        }

        .back-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            border: 1px solid var(--gold);
            color: var(--gold);
            text-decoration: none;
            transition: all var(--transition);
            background: transparent;
            flex-shrink: 0;
        }

        .back-btn:hover {
            background: rgba(201, 168, 76, 0.12);
            transform: scale(1.05);
        }

        /* ===== LAYOUT ===== */
        .main {
            max-width: 100%;
            margin: 0 auto;
            padding: 0 3rem 2.5rem;
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
        }

        /* ===== PREVIEW CARD – Figma-style gold border + two brow arches ===== */
        .preview-card {
            border-radius: var(--radius);
            background: #1B1400;
            border: 1.5px solid var(--gold);
            min-height: 170px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            padding: 1.5rem 1rem;
        }

        .preview-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at center, rgba(201, 168, 76, 0.06), transparent 60%);
            pointer-events: none;
        }

        .brow-shapes {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1.5rem;
            width: 100%;
            max-width: 280px;
        }

        .brow-shape {
            width: 72px;
            height: 28px;
            border-top: 8px solid var(--gold);
            border-radius: 50% 50% 0 0;
            opacity: 0.95;
            flex-shrink: 0;
        }

        .brow-shape.left {
            transform: rotate(-10deg) translateY(2px);
        }

        .brow-shape.right {
            transform: rotate(10deg) translateY(2px);
        }

        /* ===== PRODUCT TITLE (serif italic, white) ===== */
        .product-title {
            font-family: var(--font-display);
            font-style: italic;
            font-size: clamp(1.6rem, 4vw, 2.2rem);
            line-height: 1.05;
            color: var(--white);
            text-align: left;
            letter-spacing: -0.01em;
            margin-bottom: 0.1rem;
        }

        /* ===== PRODUCT PRICE (gold) ===== */
        .product-price {
            color: var(--white);
            font-weight: 600;
            font-size: 1.15rem;
            text-align: left;
            margin-bottom: 0.5rem;
        }

        /* ===== PRODUCT DESCRIPTION ===== */
        .product-desc {
            color: var(--white-dim);
            font-size: 0.95rem;
            line-height: 1.7;
            text-align: left;
            margin-bottom: 0.6rem;
            max-width: 520px;
        }

        /* ===== SHIPPING INFO (gold) ===== */
        .product-shipping {
            color: var(--gold);
            font-size: 0.85rem;
            text-align: left;
            margin-bottom: 1.5rem;
            font-weight: 500;
        }

        /* ===== ACTIONS – two buttons matching Figma ===== */
        .actions {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
            width: 100%;
            max-width: 100%;
            margin-top: 0.25rem;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            padding: 0.85rem 1.2rem;
            border-radius: 999px;
            font-size: 0.75rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            font-weight: 600;
            text-decoration: none;
            transition: all var(--transition);
            cursor: pointer;
            border: none;
            font-family: var(--font-body);
        }

        /* "Add to bag" – gold fill, dark text */
        .btn-primary {
            background-color: var(--gold);
            color: var(--white);
            border: 1px solid #333;
        }

        .btn-primary:hover {
            color: var(--black);
            transform: translateY(-2px);
        }

        /* "TRY IT ON FIRST" – transparent, gold border, white text */
        .btn-outline {
            background: transparent;
            border: 1px solid #333;
            color: var(--white);
        }

        .btn-outline:hover {
            background: rgba(201, 168, 76, 0.08);
            border-color: var(--gold-light);
            color: var(--gold);
        }

        /* ===== ANIMATIONS ===== */
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(16px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .fade-1 {
            animation: fadeUp 0.55s ease 0.05s both;
        }
        .fade-2 {
            animation: fadeUp 0.55s ease 0.15s both;
        }
        .fade-3 {
            animation: fadeUp 0.55s ease 0.25s both;
        }
        .fade-4 {
            animation: fadeUp 0.55s ease 0.35s both;
        }
        .fade-5 {
            animation: fadeUp 0.55s ease 0.45s both;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 900px) {
            .main {
                padding: 0 1.25rem 1.5rem;
            }
            .navbar {
                padding: 0.875rem 1.25rem;
            }
            .navbar-nav {
                display: none;
            }
            .preview-card {
                min-height: 140px;
                padding: 1rem;
            }
            .brow-shape {
                width: 60px;
                height: 22px;
                border-top-width: 6px;
            }
            .brow-shapes {
                gap: 1rem;
            }
            .back-btn {
                width: 38px;
                height: 38px;
            }
            .product-title {
                font-size: 1.6rem;
            }
            .product-price {
                font-size: 1rem;
            }
            .product-desc {
                font-size: 0.88rem;
            }
            .actions {
                gap: 0.6rem;
            }
            .btn {
                padding: 0.75rem 1rem;
                font-size: 0.7rem;
            }
        }

        @media (max-width: 480px) {
            .main {
                padding: 0 1rem 1.25rem;
            }
            .preview-card {
                min-height: 120px;
                padding: 0.75rem;
            }
            .brow-shape {
                width: 50px;
                height: 18px;
                border-top-width: 5px;
            }
            .brow-shapes {
                gap: 0.75rem;
            }
            .product-title {
                font-size: 1.35rem;
            }
            .product-desc {
                font-size: 0.82rem;
            }
            .product-shipping {
                font-size: 0.78rem;
            }
            .btn {
                padding: 0.65rem 0.875rem;
                font-size: 0.65rem;
            }
        }
    </style>
</head>
<body>

    <!-- NAVBAR (unchanged include) -->
    <?php include 'includes/navbar.php'; ?>

    <!-- Gold rule -->
    <div class="nav-gold-rule"></div>

    <main class="main">

        <!-- PAGE TOPBAR – Back Arrow only (no title, matching Figma) -->
        <div class="page-topbar fade-1">
            <a href="javascript:history.back()" class="back-btn" aria-label="Go back">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="19" y1="12" x2="5" y2="12"></line>
                    <polyline points="12 19 5 12 12 5"></polyline>
                </svg>
            </a>
        </div>

        <!-- PREVIEW CARD – gold border, two brow arches -->
        <div class="preview-card fade-2">
            <div class="brow-shapes">
                <div class="brow-shape left"></div>
                <div class="brow-shape right"></div>
            </div>
        </div>

        <!-- PRODUCT TITLE – serif italic -->
        <div class="product-title fade-3">Precision Arch Stencil Kit</div>

        <!-- PRODUCT PRICE – gold -->
        <div class="product-price fade-3">$48.00</div>

        <!-- PRODUCT DESCRIPTION -->
        <div class="product-desc fade-4">
            A professional-grade stencil designed for exacting results at home. The arch that editorial artists trust — now yours.
        </div>

        <!-- SHIPPING INFO – gold -->
        <div class="product-shipping fade-4">
            Arrives in 2–3 days. Complimentary delivery over $50.
        </div>

        <!-- ACTIONS – two distinct buttons per Figma -->
        <div class="actions fade-5">
            <button class="btn btn-primary" onclick="addToBag()">Add to bag</button>
            <button class="btn btn-outline" onclick="tryOn()">TRY IT ON FIRST</button>
        </div>

    </main>

    <!-- ============================================================ -->
    <!-- JAVASCRIPT – unchanged, all functionality preserved           -->
    <!-- ============================================================ -->
    <script>
        function addToBag() {
            alert('Added to bag.');
        }

        function tryOn() {
            alert('Opening try-on flow...');
            // window.location.href = 'face-scan-ui.php';
        }
    </script>

</body>
</html>