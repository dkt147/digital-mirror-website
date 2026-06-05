<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Choose Your Stencil — Royals Arch Brow</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <style>
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
      --gold: #c9a84c;
      --gold-light: #d4b96a;
      --gold-dark: #8a6f2e;
      --gold-muted: rgba(201, 168, 76, 0.12);
      --white: #f5f0e8;
      --white-dim: rgba(245, 240, 232, 0.55);
      --white-faint: rgba(245, 240, 232, 0.15);
      --border: rgba(201, 168, 76, 0.18);
      --border-hover: rgba(201, 168, 76, 0.45);
      --font-display: 'Cormorant Garamond', serif;
      --font-body: 'Montserrat', sans-serif;
      --radius: 14px;
      --radius-sm: 10px;
      --transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }
    html { font-size: 16px; scroll-behavior: smooth; }
    body {
      background: var(--black);
      color: var(--white);
      font-family: var(--font-body);
      font-weight: 300;
      line-height: 1.6;
      min-height: 100vh;
      overflow-x: hidden;
    }
    a { color: inherit; text-decoration: none; }
    button {
      cursor: pointer;
      border: none;
      outline: none;
      font-family: var(--font-body);
      background: none;
    }

    /* ====== NAVBAR ====== */
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

    .navbar-left { display: flex; align-items: center; gap: 1rem; }
    .nav-avatar {
      width: 42px; height: 42px; border-radius: 50%; overflow: hidden;
      border: 1.5px solid var(--gold-dark); flex-shrink: 0;
    }
    .nav-avatar img { width: 100%; height: 100%; object-fit: cover; display: block; }

    .navbar-nav {
      display: flex; align-items: center; gap: 2.5rem; list-style: none;
      position: absolute; left: 50%; transform: translateX(-50%);
    }
    .navbar-nav a {
      font-size: 0.65rem; letter-spacing: 0.18em; text-transform: uppercase;
      color: var(--white-dim); transition: color var(--transition); font-weight: 400;
    }
    .navbar-nav a:hover, .navbar-nav a.active { color: var(--gold); }

    .btn-book {
      padding: 0.55rem 1.5rem; font-size: 0.65rem; letter-spacing: 0.12em;
      text-transform: uppercase; border-radius: 50px; border: 1px solid var(--border);
      color: var(--white-dim); transition: all var(--transition);
    }
    .btn-book:hover { border-color: var(--gold); color: var(--gold); }

    .nav-emblem {
      width: 44px; height: 44px; border-radius: 50%;
      background: radial-gradient(circle at 35% 35%, #2a2010, #1a1408);
      border: 1.5px solid var(--gold-dark); display: flex; align-items: center;
      justify-content: center; flex-shrink: 0; overflow: hidden;
    }
    .nav-emblem img { width: 26px; height: 26px; object-fit: contain; }

    .nav-gold-rule {
      height: 1px; background: linear-gradient(to right, transparent 0%, var(--gold-dark) 30%, var(--gold-dark) 70%, transparent 100%);
      opacity: 0.5;
    }

    /* ====== PAGE TOPBAR (Back Arrow + Title + Logo) ====== */
    .page-topbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0.5rem 0;
      margin-bottom: 1.5rem;
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
      background: rgba(201,168,76,0.12);
      transform: scale(1.05);
    }

    .page-title-center {
      flex: 1;
      text-align: center;
      font-family: var(--font-display);
      font-size: 0.9rem;
      letter-spacing: 0.28em;
      text-transform: uppercase;
      color: var(--gold);
      padding: 0 1rem;
    }

    .page-logo {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      border: 1px solid var(--gold);
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      flex-shrink: 0;
    }

    .page-logo img {
      width: 24px;
      height: 24px;
      object-fit: contain;
    }

    /* ====== LAYOUT ====== */
    .main {
      max-width: 100%;
      margin: 0 auto;
      padding: 0 3rem 2.5rem;
      display: flex;
      flex-direction: column;
      gap: 1.75rem;
    }

    /* ====== HEADER ====== */
    .page-label {
      font-size: 0.6rem; letter-spacing: 0.25em; text-transform: uppercase;
      color: var(--gold); font-weight: 500; margin-bottom: 0.2rem;
    }
    .page-title {
      font-family: var(--font-display);
      font-style: italic;
      font-size: 2rem;
      font-weight: 400;
      color: var(--white);
      line-height: 1.05;
    }

    /* ====== GRID ====== */
    .grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 16px;
      margin-bottom: 28px;
    }

    .kit {
      border-radius: var(--radius);
      padding: 16px 16px 20px;
      background: #161610;
      border: 1px solid var(--border);
      cursor: pointer;
      display: flex;
      flex-direction: column;
      gap: 10px;
      transition: all var(--transition);
      position: relative;
    }

    .kit::before {
      content: '';
      position: absolute;
      inset: 0;
      border-radius: var(--radius);
      background: radial-gradient(circle at 20% 30%, rgba(201,168,76,0.06), transparent 60%);
      pointer-events: none;
    }

    .kit:hover {
      border-color: var(--gold-dark);
      background: rgba(201,168,76,0.06);
      transform: translateY(-2px);
    }

    .kit.selected {
      border: 1px solid var(--gold);
      background: rgba(201,168,76,0.08);
      box-shadow: 0 0 0 1px rgba(201,168,76,0.1);
    }

    .kit .meta {
      font-size: 0.6rem;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--gold);
      font-weight: 500;
    }

    .kit .image {
      width: 100%;
      aspect-ratio: 1/0.9;
      border-radius: var(--radius-sm);
      background: rgba(255,255,255,0.03);
      overflow: hidden;
      display: grid;
      place-items: center;
      border: 1px solid rgba(255,255,255,0.04);
    }

    .kit .image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .kit .name {
      font-family: var(--font-display);
      font-size: 1.1rem;
      line-height: 1.2;
      color: var(--white);
      font-weight: 400;
      letter-spacing: 0.02em;
    }

    /* ====== BUTTONS ====== */
    .actions {
      display: grid;
      gap: 0.75rem;
    }

    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 100%;
      padding: 0.85rem 1.2rem;
      border-radius: 999px;
      font-size: 0.75rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      font-weight: 600;
      text-decoration: none;
      transition: all var(--transition);
      cursor: pointer;
      border: none;
      font-family: var(--font-body);
    }

    .btn-secondary {
      background: transparent;
      border: 1px solid var(--border);
      color: var(--white);
    }

    .btn-secondary:hover {
      border-color: var(--gold);
      color: var(--gold);
    }

    .row {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 0.75rem;
    }

    .shop-link {
      text-align: center;
      color: var(--gold);
      font-size: 0.9rem;
      letter-spacing: 0.04em;
      padding: 6px 0 4px;
      cursor: pointer;
      transition: color var(--transition);
      font-weight: 400;
    }

    .shop-link:hover {
      color: var(--gold-light);
      text-decoration: underline;
    }

    /* ====== ANIMATIONS ====== */
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(16px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .fade-1 { animation: fadeUp 0.55s ease 0.05s both; }
    .fade-2 { animation: fadeUp 0.55s ease 0.15s both; }
    .fade-3 { animation: fadeUp 0.55s ease 0.25s both; }
    .fade-4 { animation: fadeUp 0.55s ease 0.35s both; }
    .fade-5 { animation: fadeUp 0.55s ease 0.45s both; }

    /* ====== RESPONSIVE ====== */
    @media (max-width: 900px) {
      .main { padding: 0 1.25rem 1.5rem; }
      .navbar { padding: 0.875rem 1.25rem; }
      .navbar-nav { display: none; }
      .page-title { font-size: 1.6rem; }
      .grid { gap: 12px; }
      .kit { padding: 14px 14px 16px; }
      .back-btn { width: 38px; height: 38px; }
      .page-logo { width: 38px; height: 38px; }
      .row { grid-template-columns: 1fr; }
    }
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <?php include 'includes/navbar.php'; ?>

  <!-- Gold rule -->
  <div class="nav-gold-rule"></div>

  <!-- MAIN CONTENT -->
  <main class="main">

    <!-- PAGE TOPBAR (Back Arrow + Title + Logo) -->
    <div class="page-topbar fade-1">
      <a href="javascript:history.back()" class="back-btn" aria-label="Go back">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="19" y1="12" x2="5" y2="12"></line>
          <polyline points="12 19 5 12 12 5"></polyline>
        </svg>
      </a>
      <div class="page-title-center">Choose your stencil</div>
    </div>

    <!-- CONTENT HEADER -->
    <div class="fade-2">
      <div class="page-label">Stencil Selection</div>
      <div class="page-title">Tap any kit to see it on your face.</div>
    </div>

    <!-- GRID -->
    <div class="grid fade-3" id="grid">
      <!-- kit 01 -->
      <div class="kit" data-id="kit01" tabindex="0">
        <div class="meta">KIT 01</div>
        <div class="image"><img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=400&q=80" alt="kit 01"/></div>
        <div class="name">Understated</div>
      </div>

      <!-- kit 02 -->
      <div class="kit" data-id="kit02" tabindex="0">
        <div class="meta">KIT 02</div>
        <div class="image"><img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=400&q=80" alt="kit 02"/></div>
        <div class="name">Soft arch</div>
      </div>

      <!-- kit 03 -->
      <div class="kit" data-id="kit03" tabindex="0">
        <div class="meta">KIT 03</div>
        <div class="image"><img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=400&q=80" alt="kit 03"/></div>
        <div class="name">Bold arch</div>
      </div>

      <!-- kit 04 (pre-selected) -->
      <div class="kit selected" data-id="kit04" tabindex="0">
        <div class="meta">KIT 04</div>
        <div class="image"><img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=400&q=80" alt="kit 04"/></div>
        <div class="name">Sculpted</div>
      </div>
    </div>

    <!-- ACTIONS -->
    <div class="actions fade-4">
      <button class="btn btn-secondary" id="applyBtn">Apply to my face</button>
      <div class="row">
        <button class="btn btn-secondary" onclick="location.href='index.php'">Return home</button>
        <button class="btn btn-secondary" onclick="shareNow()">Share now</button>
      </div>
      <div class="shop-link" onclick="shopNow()">I don't have a kit yet — shop now</div>
    </div>

  </main>

  <script>
    (function() {
      const grid = document.getElementById('grid');
      const applyBtn = document.getElementById('applyBtn');
      let selectedId = document.querySelector('.kit.selected')?.dataset?.id || 'kit04';

      function updateApplyButton() {
        applyBtn.disabled = !selectedId;
      }

      function selectKit(id) {
        document.querySelectorAll('.kit').forEach(k => k.classList.remove('selected'));
        const el = document.querySelector(`.kit[data-id="${id}"]`);
        if (el) {
          el.classList.add('selected');
          selectedId = id;
        } else {
          selectedId = null;
        }
        updateApplyButton();
      }

      grid.addEventListener('click', (e) => {
        const kit = e.target.closest('.kit');
        if (!kit) return;
        const id = kit.dataset.id;
        if (id) selectKit(id);
      });

      grid.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' || e.key === ' ') {
          const kit = document.activeElement?.closest('.kit');
          if (kit) {
            e.preventDefault();
            const id = kit.dataset.id;
            if (id) selectKit(id);
          }
        }
      });

      const preselected = document.querySelector('.kit.selected');
      if (preselected) {
        selectedId = preselected.dataset.id;
      } else {
        const first = document.querySelector('.kit');
        if (first) {
          first.classList.add('selected');
          selectedId = first.dataset.id;
        }
      }
      updateApplyButton();

      window.applyKit = function() {
        if (!selectedId) {
          alert('Please choose a kit first.');
          return;
        }
        window.location.href = 'preview-look.php?kit=' + encodeURIComponent(selectedId);
      };

      window.shareNow = function() {
        if (navigator.share) {
          navigator.share({
            title: 'Royals Arch Brow Stencil',
            text: 'I just chose my stencil kit! ✨',
            url: window.location.href
          }).catch(() => {});
        } else {
          alert('Share this page with your artist ✨');
        }
      };

      window.shopNow = function() {
        window.location.href = 'shop.php';
      };

      applyBtn.addEventListener('click', window.applyKit);

      if (!document.querySelector('.kit.selected')) {
        const kit04 = document.querySelector('.kit[data-id="kit04"]');
        if (kit04) {
          kit04.classList.add('selected');
          selectedId = 'kit04';
          updateApplyButton();
        }
      }
    })();
  </script>

</body>
</html>