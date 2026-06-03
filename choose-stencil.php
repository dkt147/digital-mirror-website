<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Choose Your Stencil — Royals Arch Brow</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <style>
    :root {
      --black: #0a0a0a;
      --white: #f5f0e8;
      --white-dim: rgba(245,240,232,0.65);
      --gold: #c9a84c;
      --gold-light: #d4b96a;
      --border: rgba(201,168,76,0.2);
      --card: rgba(255,255,255,0.03);
      --radius: 30px;
      --transition: 0.25s ease;
      --font-display: 'Cormorant Garamond', serif;
      --font-body: 'Montserrat', sans-serif;
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }
    html, body { min-height: 100%; }
    body {
      background: var(--black);
      color: var(--white);
      font-family: var(--font-body);
      line-height: 1.5;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 24px 16px;
    }

    .page {
      width: 100%;
      max-width: 1100px;
      border-radius: 36px;
      background: rgba(255,255,255,0.02);
      border: 1px solid rgba(255,255,255,0.08);
      box-shadow: 0 24px 90px rgba(0,0,0,0.7);
      backdrop-filter: blur(16px);
      overflow: hidden;
    }

    .topbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 24px 24px 18px;
    }

    .topbar a,
    .topbar .brand {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      color: var(--gold);
      border: 1px solid var(--gold);
      text-decoration: none;
      transition: transform var(--transition), background var(--transition);
    }

    .topbar a:hover { background: rgba(201,168,76,0.12); transform: scale(1.05); }
    .topbar .title {
      flex: 1;
      text-align: center;
      font-family: var(--font-display);
      font-size: 0.95rem;
      letter-spacing: 0.28em;
      text-transform: uppercase;
      color: var(--gold);
    }

    .content { padding: 0 24px 24px; }

    /* headline & sub */
    .headline {
      font-family: var(--font-display);
      font-style: italic;
      font-size: clamp(1.8rem, 4vw, 2.4rem);
      line-height: 1.05;
      color: var(--white);
      text-align: center;
      margin-bottom: 8px;
    }

    .subtitle {
      color: var(--white-dim);
      font-size: 0.95rem;
      text-align: center;
      line-height: 1.7;
      margin-bottom: 28px;
      padding: 0 16px;
    }

    /* grid cards — like the 'kit' but elevated */
    .grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 16px;
      margin-bottom: 28px;
    }

    .kit {
      border-radius: var(--radius);
      padding: 16px 16px 20px;
      background: rgba(255,255,255,0.03);
      border: 1px solid rgba(255,255,255,0.08);
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
      border-color: rgba(201,168,76,0.3);
      background: rgba(255,255,255,0.06);
      transform: translateY(-2px);
    }

    .kit.selected {
      border: 1px solid var(--gold);
      background: rgba(201,168,76,0.08);
      box-shadow: 0 0 0 1px rgba(201,168,76,0.2), 0 8px 20px rgba(0,0,0,0.4);
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
      border-radius: 18px;
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

    /* actions */
    .actions {
      display: grid;
      gap: 12px;
      margin-top: 12px;
    }

    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 100%;
      padding: 1rem 1.2rem;
      border-radius: 999px;
      font-size: 0.85rem;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      font-weight: 700;
      text-decoration: none;
      transition: transform var(--transition), background var(--transition), border-color var(--transition);
      cursor: pointer;
      border: none;
      font-family: var(--font-body);
    }

    .btn-primary {
      background: var(--gold);
      color: #0a0a0a;
    }

    .btn-primary:hover:not(:disabled) {
      background: var(--gold-light);
      transform: translateY(-1px);
    }

    .btn-primary:disabled {
      opacity: 0.35;
      cursor: not-allowed;
      transform: none;
      background: #5a4d2e;
    }

    .btn-secondary {
      background: transparent;
      border: 1px solid rgba(255,255,255,0.12);
      color: var(--white);
    }

    .btn-secondary:hover {
      border-color: var(--gold);
      color: var(--gold);
    }

    .row {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 12px;
      margin-top: 6px;
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

    @media (max-width: 520px) {
      .page { border-radius: 30px; }
      .topbar { padding: 20px 20px 16px; }
      .content { padding: 0 20px 20px; }
      .grid { gap: 12px; }
      .row { grid-template-columns: 1fr; }
    }
  </style>
</head>
<body>
  <section class="page">
    <div class="topbar">
      <a href="javascript:history.back()" aria-label="Back">&#8592;</a>
      <div class="title">Choose your stencil</div>
      <div class="brand"><img src="assets/logo.png" alt="CG logo" style="width:24px;height:24px;object-fit:contain;" /></div>
    </div>

    <div class="content">
      <h1 class="headline">Tap any kit to see it on your face.</h1>
      <p class="subtitle">Choose the stencil kit you'd like to try. Your artist will apply the perfect shape.</p>

      <div class="grid" id="grid">
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

      <div class="actions">
        <button class="btn btn-secondary" id="applyBtn">Apply to my face</button>
        <div class="row">
          <button class="btn btn-secondary" onclick="location.href='index.php'">Return home</button>
          <button class="btn btn-secondary" onclick="shareNow()">Share now</button>
        </div>
        <div class="shop-link" onclick="shopNow()">I don't have a kit yet — shop now</div>
      </div>
    </div>
  </section>

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

      // click on kit
      grid.addEventListener('click', (e) => {
        const kit = e.target.closest('.kit');
        if (!kit) return;
        const id = kit.dataset.id;
        if (id) selectKit(id);
      });

      // keyboard (enter/space)
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

      // Make kits focusable via tabindex already set
      // Initialize selected from preselected class
      const preselected = document.querySelector('.kit.selected');
      if (preselected) {
        selectedId = preselected.dataset.id;
      } else {
        // fallback select first
        const first = document.querySelector('.kit');
        if (first) {
          first.classList.add('selected');
          selectedId = first.dataset.id;
        }
      }
      updateApplyButton();

      // apply action
      window.applyKit = function() {
        if (!selectedId) {
          alert('Please choose a kit first.');
          return;
        }
        // simulate navigate to preview with kit param
        window.location.href = 'preview-look.php?kit=' + encodeURIComponent(selectedId);
      };

      // secondary actions
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

      // attach to applyBtn
      applyBtn.addEventListener('click', window.applyKit);

      // also make kit04 selected by default if no selection
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