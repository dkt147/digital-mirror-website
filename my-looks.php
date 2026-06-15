<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Looks — Royals Arch Brow</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --black: #0a0a08;
            --dark: #111111;
            --dark-card: #1a1a0f;
            --gold: #c9a84c;
            --gold-light: #d4b96a;
            --gold-dark: #8a6f2e;
            --gold-muted: rgba(201, 168, 76, 0.12);
            --white: #f5f0e8;
            --white-dim: rgba(245, 240, 232, 0.55);
            --white-faint: rgba(245, 240, 232, 0.15);
            --border: rgba(201, 168, 76, 0.18);
            --font-display: 'Cormorant Garamond', serif;
            --font-body: 'Montserrat', sans-serif;
            --radius: 18px;
            --transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        *,
        *::before,
        *::after {
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
            font-weight: 300;
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

        /* ====== NAVBAR (from Brow Editor) ====== */
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

        /* ====== MAIN ====== */
        .main {
            max-width: 100%;
            margin: 0 auto;
            padding: 1.5rem 1.5rem 8rem;
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
        }

        /* ====== PAGE HEADER ====== */
        .page-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0.25rem 0 0.5rem;
        }

        .page-title {
            font-family: var(--font-display);
            font-style: italic;
            font-size: 2rem;
            font-weight: 400;
            color: var(--white);
            line-height: 1;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 0.6rem;
        }

        .share-btn {
            display: flex;
            align-items: center;
            gap: 0.45rem;
            padding: 0.45rem 1.1rem;
            border-radius: 50px;
            border: 1px solid var(--gold-dark);
            background: transparent;
            color: var(--white);
            font-size: 0.7rem;
            font-family: var(--font-body);
            font-weight: 500;
            letter-spacing: 0.04em;
            cursor: pointer;
            transition: all var(--transition);
            text-decoration: none;
        }

        .share-btn:hover {
            border-color: var(--gold);
            color: var(--gold);
        }

        .share-btn svg {
            width: 13px;
            height: 13px;
            stroke: currentColor;
            fill: none;
            stroke-width: 2;
        }

        .logo-circle {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: radial-gradient(circle at 35% 35%, #2a2010, #1a1408);
            border: 1.5px solid var(--gold-dark);
            overflow: hidden;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo-circle img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* ====== FILTER TABS ====== */
        .filter-tabs {
            display: flex;
            gap: 1.5rem;
            border-bottom: 1px solid var(--border);
            padding-bottom: 0.6rem;
            overflow-x: auto;
            white-space: nowrap;
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .filter-tabs::-webkit-scrollbar {
            display: none;
        }

        .filter-tab {
            font-size: 0.65rem;
            font-weight: 600;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: var(--white-dim);
            padding: 0.25rem 0;
            position: relative;
            transition: color var(--transition);
            cursor: pointer;
            flex-shrink: 0;
        }

        .filter-tab.active {
            color: var(--gold);
        }

        .filter-tab.active::after {
            content: '';
            position: absolute;
            bottom: -0.7rem;
            left: 0;
            width: 100%;
            height: 2px;
            background: var(--gold);
        }

        .filter-tab:hover {
            color: var(--white);
        }

        /* ====== LOOK CARDS ====== */
        .looks-list {
            display: flex;
            flex-direction: column;
            gap: 0.9rem;
        }

        .look-card {
            background: #161610;
            border: 1px solid #2a2a20;
            border-radius: var(--radius);
            overflow: hidden;
            cursor: pointer;
            transition: all var(--transition);
            width: 100%;
        }

        .look-card:hover {
            border-color: var(--gold);
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.5);
        }

        .look-image-area {
            width: 100%;
            height: 80px;
            background: #1c1c14;
            border-bottom: 1px solid #2a2a20;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 1.2rem;
            overflow: hidden;
        }

        .look-image-area img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .look-image-label {
            font-size: 0.65rem;
            color: var(--white-dim);
            letter-spacing: 0.03em;
        }

        .look-body {
            padding: 0.85rem 1.2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .look-info {
            flex: 1;
        }

        .look-title {
            font-family: var(--font-display);
            font-size: 1.35rem;
            font-weight: 400;
            color: var(--white);
            line-height: 1.1;
            margin-bottom: 0.1rem;
        }

        .look-meta {
            font-size: 0.6rem;
            color: var(--white-dim);
            letter-spacing: 0.03em;
        }

        .look-arrow {
            color: var(--white-faint);
            flex-shrink: 0;
            margin-left: 1rem;
            transition: all var(--transition);
        }

        .look-card:hover .look-arrow {
            color: var(--gold);
            transform: translateX(4px);
        }

        /* ====== CREATE NEW BUTTON ====== */
        .create-new-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            padding: 1rem;
            border-radius: 50px;
            border: 1px solid #2a2a20;
            background: #c9a84c;
            color: var(--white);
            font-size: 0.72rem;
            font-weight: 600;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            text-decoration: none;
            transition: all var(--transition);
        }

        .create-new-btn:hover {
            color: var(--black);
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(201, 168, 76, 0.5);
        }

        /* ====== LOADING & EMPTY STATE ====== */
        .looks-placeholder {
            color: var(--white-dim);
            font-size: 0.8rem;
            text-align: center;
            padding: 2rem 0;
        }

        /* ====== ANIMATIONS ====== */
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
            animation: fadeUp 0.5s ease 0.05s both;
        }
        .fade-2 {
            animation: fadeUp 0.5s ease 0.12s both;
        }
        .fade-3 {
            animation: fadeUp 0.5s ease 0.2s both;
        }
        .fade-4 {
            animation: fadeUp 0.5s ease 0.28s both;
        }
        .fade-5 {
            animation: fadeUp 0.5s ease 0.36s both;
        }
        .fade-6 {
            animation: fadeUp 0.5s ease 0.44s both;
        }

        /* ====== RESPONSIVE ====== */
        @media (max-width: 900px) {
            .navbar {
                padding: 0.875rem 1.25rem;
            }
            .navbar-nav {
                display: none;
            }
            .main {
                padding: 1.25rem 1.25rem 8rem;
            }
            .page-title {
                font-size: 1.6rem;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR (from Brow Editor) -->
    <?php include 'includes/navbar.php'; ?>

    <!-- Gold rule -->
    <div class="nav-gold-rule"></div>

    <main class="main">

        <!-- PAGE HEADER -->
        <div class="page-header fade-1">
            <h1 class="page-title">My Looks</h1>
            <div class="header-right">
                <a href="share-look.php" class="share-btn">
                    Share
                    <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12" /><polyline points="12 5 19 12 12 19" /></svg>
                </a>
                <div class="logo-circle">
                    <img src="assets/logo.png" alt="Logo" />
                </div>
            </div>
        </div>

        <!-- FILTER TABS -->
        <div class="filter-tabs fade-2">
            <span class="filter-tab active">All</span>
            <span class="filter-tab">Style</span>
            <span class="filter-tab">Guides</span>
            <span class="filter-tab">Kits</span>
            <span class="filter-tab">Saved</span>
        </div>

        <!-- LOOKS LIST (Dynamic via API) -->
        <div class="looks-list" id="looks-list">
            <p class="looks-placeholder">Loading...</p>
        </div>

        <!-- CREATE NEW BUTTON -->
        <a href="create-look.php" class="create-new-btn fade-6">CREATE A NEW LOOK +</a>

    </main>
    <script>
        // Filter tabs interaction
        document.querySelectorAll('.filter-tab').forEach(tab => {
            tab.addEventListener('click', function() {
                document.querySelectorAll('.filter-tab').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // -------- API Integration --------
        const API_BASE = '<?php echo $API_URL; ?>';
        const token = localStorage.getItem('archAccessToken');

        async function loadLooks() {
            const list = document.getElementById('looks-list');

            if (!token) {
                window.location.href = 'login.php';
                return;
            }

            try {
                const res = await fetch(`${API_BASE}/looks`, {
                    headers: {
                        'accept': 'application/json',
                        'Authorization': `Bearer ${token}`
                    }
                });

                if (!res.ok) {
                    const err = await res.json().catch(() => ({}));
                    throw new Error(err.detail || 'Failed to load looks');
                }

                const looks = await res.json();
                renderLooks(looks);
            } catch (err) {
                console.error(err);
                list.innerHTML =
                    '<p class="looks-placeholder">Unable to load looks. Please try again later.</p>';
            }
        }

        function renderLooks(looks) {
            const list = document.getElementById('looks-list');

            if (!looks || looks.length === 0) {
                list.innerHTML =
                    '<p class="looks-placeholder">No looks saved yet. Create your first look to get started.</p>';
                return;
            }

            list.innerHTML = looks.map((look, i) => {
                const fadeClass = 'fade-' + Math.min(i + 3, 6);
                const imageContent = look.image_url ?
                    `<img src="${look.image_url}" alt="${escapeHTML(look.title || 'Look')}" />` :
                    `<span class="look-image-label">Image Placeholder.</span>`;

                const title = escapeHTML(look.title || 'Untitled Look');
                const date = look.date || '';
                const style = look.style ? ' · ' + escapeHTML(look.style) : '';
                const colour = look.colour ? ' · ' + escapeHTML(look.colour) : '';
                const meta = (date + style + colour).trim();

                return `
                        <div class="look-card ${fadeClass}" onclick="window.location.href='look-detail.php?id=${look.id}'">
                            <div class="look-image-area">
                                ${imageContent}
                            </div>
                            <div class="look-body">
                                <div class="look-info">
                                    <div class="look-title">${title}</div>
                                    <div class="look-meta">${meta || 'No details'}</div>
                                </div>
                                <div class="look-arrow">
                                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <line x1="5" y1="12" x2="19" y2="12"/>
                                        <polyline points="12 5 19 12 12 19"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    `;
            }).join('');
        }

        function escapeHTML(str) {
            const div = document.createElement('div');
            div.textContent = str;
            return div.innerHTML;
        }

        // Initial load
        loadLooks();
    </script>

</body>
</html>