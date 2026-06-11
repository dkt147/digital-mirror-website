<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Brow Editor — Royals Arch Brow</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }

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
      --radius: 14px;
      --radius-sm: 10px;
      --transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

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
    button { cursor: pointer; border: none; outline: none; font-family: var(--font-body); background: none; }

    /* ====== NAVBAR ====== */
    .navbar {
      display: flex; align-items: center; justify-content: space-between;
      padding: 1rem 2.5rem; border-bottom: 1px solid var(--border);
      background: rgba(10,10,8,0.97); backdrop-filter: blur(20px);
      position: sticky; top: 0; z-index: 100;
    }
    .navbar-left { display: flex; align-items: center; gap: 1rem; }
    .nav-avatar { width: 42px; height: 42px; border-radius: 50%; overflow: hidden; border: 1.5px solid var(--gold-dark); flex-shrink: 0; }
    .nav-avatar img { width: 100%; height: 100%; object-fit: cover; display: block; }
    .navbar-nav { display: flex; align-items: center; gap: 2.5rem; list-style: none; position: absolute; left: 50%; transform: translateX(-50%); }
    .navbar-nav a { font-size: 0.65rem; letter-spacing: 0.18em; text-transform: uppercase; color: var(--white-dim); transition: color var(--transition); font-weight: 400; }
    .navbar-nav a:hover, .navbar-nav a.active { color: var(--gold); }
    .btn-book { padding: 0.55rem 1.5rem; font-size: 0.65rem; letter-spacing: 0.12em; text-transform: uppercase; border-radius: 50px; border: 1px solid var(--border); color: var(--white-dim); transition: all var(--transition); }
    .btn-book:hover { border-color: var(--gold); color: var(--gold); }
    .nav-emblem { width: 44px; height: 44px; border-radius: 50%; background: radial-gradient(circle at 35% 35%, #2a2010, #1a1408); border: 1.5px solid var(--gold-dark); display: flex; align-items: center; justify-content: center; flex-shrink: 0; overflow: hidden; }
    .nav-emblem img { width: 26px; height: 26px; object-fit: contain; }
    .nav-gold-rule { height: 1px; background: linear-gradient(to right, transparent 0%, var(--gold-dark) 30%, var(--gold-dark) 70%, transparent 100%); opacity: 0.5; }

    /* ====== LAYOUT ====== */
    .main {
      max-width: 100%; margin: 0 auto;
      padding: 0 3rem 2.5rem;
      display: flex; flex-direction: column; gap: 1.25rem;
    }

    /* ====== PAGE TOPBAR ====== */
    .page-topbar {
      display: flex; align-items: center; justify-content: space-between;
      padding: 0.75rem 0 0.25rem;
    }
    .back-btn {
      display: flex; align-items: center; justify-content: center;
      width: 44px; height: 44px; border-radius: 50%;
      border: 1px solid var(--gold); color: var(--gold);
      text-decoration: none; transition: all var(--transition);
      background: transparent; flex-shrink: 0;
    }
    .back-btn:hover { background: rgba(201,168,76,0.12); transform: scale(1.05); }
    .page-title-center {
      flex: 1; text-align: center;
      font-family: var(--font-display);
      font-size: 0.9rem; letter-spacing: 0.28em;
      text-transform: uppercase; color: var(--gold); padding: 0 1rem;
    }
    .topbar-save {
      font-size: 0.65rem; font-weight: 600; letter-spacing: 0.14em;
      text-transform: uppercase; color: var(--gold);
      background: none; border: none; cursor: pointer;
      transition: opacity var(--transition); flex-shrink: 0;
    }
    .topbar-save:hover { opacity: 0.7; }

    /* ====== SUB NAV ====== */
    .sub-nav { display: flex; justify-content: space-between; padding: 0 4px; }
    .sub-nav a {
      font-size: 0.7rem; font-weight: 600; letter-spacing: 0.08em;
      text-transform: uppercase; color: var(--white-dim);
      text-decoration: none; position: relative; padding-bottom: 6px;
      transition: color var(--transition);
    }
    .sub-nav a.active { color: var(--white); }
    .sub-nav a.active::after {
      content: ''; position: absolute; bottom: 0; left: 0;
      width: 100%; height: 2px; background: var(--gold);
    }
    .sub-nav a:hover { color: var(--white); }

    /* ====== IMAGE CONTAINER ====== */
    .image-wrapper {
      position: relative;
      border-radius: var(--radius);
      overflow: hidden;
      aspect-ratio: 3 / 2.2;
      background: #0d0d0a;
    }
    .image-wrapper img {
      width: 100%; height: 100%; object-fit: cover; display: block;
    }

    /* SVG overlay on image */
    .brow-svg-overlay {
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      pointer-events: none;
    }

    /* Dim overlays for left/right tabs */
    .brow-overlay {
      position: absolute; top: 0; width: 50%; height: 100%;
      background: rgba(0,0,0,0.55);
      transition: opacity 0.35s ease; pointer-events: none; opacity: 0;
    }
    .brow-overlay-left  { left: 0; }
    .brow-overlay-right { right: 0; }
    .image-wrapper.show-left  .brow-overlay-right { opacity: 1; }
    .image-wrapper.show-right .brow-overlay-left  { opacity: 1; }

    /* ====== TOOL TABS ====== */
    .tool-tabs { display: flex; gap: 8px; }
    .tool-tab {
      flex: 1; padding: 10px 0; text-align: center;
      font-size: 0.6rem; font-weight: 600; letter-spacing: 0.08em;
      text-transform: uppercase; border-radius: 999px;
      border: 1px solid var(--border); color: var(--white-dim);
      background: transparent; cursor: pointer; transition: all var(--transition);
    }
    .tool-tab:hover { border-color: var(--gold-dark); }
    .tool-tab.active {
      border-color: var(--gold); color: var(--gold);
      background: var(--gold-muted);
    }

    /* ====== ADVICE CARD ====== */
    .advice-card {
      background: #161610;
      border: 1px solid var(--gold);
      border-radius: var(--radius);
      padding: 16px;
    }
    .advice-header {
      display: flex; align-items: center; gap: 10px; margin-bottom: 10px;
    }
    .advice-icon {
      width: 30px; height: 30px; border-radius: 50%;
      border: 1px solid var(--gold);
      display: flex; align-items: center; justify-content: center;
      flex-shrink: 0;
    }
    .advice-icon svg { width: 14px; height: 14px; stroke: var(--gold); fill: none; stroke-width: 1.5; }
    .advice-title {
      font-family: var(--font-display);
      font-style: italic;
      font-size: 0.85rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--gold);
    }
    .advice-text {
      font-size: 0.82rem; color: var(--white-dim); line-height: 1.55; margin-bottom: 16px;
    }
    .advice-actions { display: flex; gap: 10px; align-items: center; }
    .btn-adjust {
      padding: 0.65rem 1.6rem; border-radius: 999px;
      background: var(--gold); color: var(--black);
      font-size: 0.65rem; font-weight: 700; letter-spacing: 0.1em;
      text-transform: uppercase; border: none; cursor: pointer;
      font-family: var(--font-body); transition: background var(--transition);
      white-space: nowrap;
    }
    .btn-adjust:hover { background: var(--gold-light); }
    .btn-continues {
      background: none; border: none;
      font-size: 0.62rem; font-weight: 600; letter-spacing: 0.1em;
      text-transform: uppercase; color: var(--white-dim);
      cursor: pointer; font-family: var(--font-body);
      transition: color var(--transition);
    }
    .btn-continues:hover { color: var(--white); }

    /* Continuing state card */
    .feedback-card {
      background: #161610;
      border: 1px solid var(--gold);
      border-radius: var(--radius);
      padding: 16px;
    }
    .feedback-text { font-size: 0.82rem; color: var(--white-dim); line-height: 1.55; }
    .help-text { font-size: 0.72rem; color: var(--white-dim); text-align: center; opacity: 0.6; }

    /* hidden state */
    .state-hidden { display: none; }

    /* ====== ANIMATIONS ====== */
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(16px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    .fade-1 { animation: fadeUp 0.55s ease 0.05s both; }
    .fade-2 { animation: fadeUp 0.55s ease 0.15s both; }
    .fade-3 { animation: fadeUp 0.55s ease 0.25s both; }
    .fade-4 { animation: fadeUp 0.55s ease 0.35s both; }
    .fade-5 { animation: fadeUp 0.55s ease 0.45s both; }

    /* ====== SAVE MODAL ====== */
    .modal-overlay {
      position: fixed; inset: 0;
      background: rgba(0,0,0,0.75); backdrop-filter: blur(4px);
      z-index: 200; display: flex; align-items: center; justify-content: center;
      opacity: 0; pointer-events: none; transition: opacity 0.3s ease;
    }
    .modal-overlay.open { opacity: 1; pointer-events: all; }
    .modal-box {
      background: #161610; border: 1px solid var(--gold);
      border-radius: 20px; padding: 32px 24px 24px;
      width: 88%; max-width: 340px; text-align: center;
      transform: translateY(20px); transition: transform 0.3s ease;
    }
    .modal-overlay.open .modal-box { transform: translateY(0); }
    .modal-title { font-family: var(--font-display); font-style: italic; font-size: 1.6rem; font-weight: 400; color: var(--white); margin-bottom: 10px; }
    .modal-text { font-size: 0.78rem; color: var(--white-dim); line-height: 1.6; margin-bottom: 24px; }
    .modal-btn-gold { display: block; width: 100%; padding: 0.9rem; border-radius: 999px; background: var(--gold); color: var(--black); font-size: 0.7rem; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; border: none; cursor: pointer; font-family: var(--font-body); transition: background var(--transition); margin-bottom: 10px; }
    .modal-btn-gold:hover { background: var(--gold-light); }
    .modal-btn-keep { display: block; width: 100%; padding: 0.9rem; border-radius: 999px; background: transparent; border: 1px solid var(--border); color: var(--white); font-size: 0.7rem; font-weight: 600; letter-spacing: 0.1em; font-family: var(--font-display); font-style: italic; cursor: pointer; transition: border-color var(--transition); margin-bottom: 14px; }
    .modal-btn-keep:hover { border-color: var(--gold); }
    .modal-btn-discard { display: block; width: 100%; background: none; border: none; color: var(--gold); font-size: 0.75rem; font-family: var(--font-display); font-style: italic; cursor: pointer; transition: opacity var(--transition); }
    .modal-btn-discard:hover { opacity: 0.7; }

    /* ====== RESPONSIVE ====== */
    @media (max-width: 900px) {
      .main { padding: 0 1.25rem 1.5rem; }
      .navbar { padding: 0.875rem 1.25rem; }
      .navbar-nav { display: none; }
      .sub-nav a { font-size: 0.62rem; }
      .tool-tab { font-size: 0.55rem; padding: 8px 0; }
      .back-btn { width: 38px; height: 38px; }
    }
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <?php include 'includes/navbar.php'; ?>
  <div class="nav-gold-rule"></div>

  <main class="main">

    <!-- TOPBAR -->
    <div class="page-topbar fade-1">
      <a href="javascript:history.back()" class="back-btn" aria-label="Go back">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/>
        </svg>
      </a>
      <div class="page-title-center">Brow Editor</div>
      <button class="topbar-save" onclick="openModal()">Save</button>
    </div>

    <!-- SUB NAV -->
    <div class="sub-nav fade-2">
      <a href="#" data-tab="left">Left Brow</a>
      <a href="#" data-tab="both" class="active">Both</a>
      <a href="#" data-tab="right">Right Brow</a>
    </div>

    <!-- IMAGE + SVG OVERLAY -->
    <div class="image-wrapper fade-3" id="imageWrapper">
      <img src="assets/face-placeholder.png" alt="Face preview" />

      <!-- POSITION overlay: circles + brow lines -->
      <svg class="brow-svg-overlay" id="svg-position" viewBox="0 0 400 300" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
        <!-- Left brow line -->
        <path d="M55 105 Q100 72 148 88" stroke="#C9A84C" stroke-width="2.5" fill="none" stroke-linecap="round"/>
        <!-- Right brow line -->
        <path d="M252 88 Q300 72 345 105" stroke="#C9A84C" stroke-width="2.5" fill="none" stroke-linecap="round"/>
        <!-- Left circle group (positioning indicator) -->
        <circle cx="102" cy="65" r="18" stroke="#C9A84C" stroke-width="1.5" fill="none"/>
        <circle cx="102" cy="65" r="7"  stroke="#C9A84C" stroke-width="1.5" fill="none"/>
        <circle cx="102" cy="65" r="2"  fill="#C9A84C"/>
        <!-- Right circle group -->
        <circle cx="298" cy="65" r="18" stroke="#C9A84C" stroke-width="1.5" fill="none"/>
        <circle cx="298" cy="65" r="7"  stroke="#C9A84C" stroke-width="1.5" fill="none"/>
        <circle cx="298" cy="65" r="2"  fill="#C9A84C"/>
        <!-- Dashed center line -->
        <line x1="200" y1="50" x2="200" y2="115" stroke="#C9A84C" stroke-width="1" stroke-dasharray="4,4" opacity="0.5"/>
      </svg>

      <!-- SHAPE overlay: arch with dashed adjustment dots -->
      <svg class="brow-svg-overlay state-hidden" id="svg-shape" viewBox="0 0 400 300" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
        <!-- Left brow arch -->
        <path d="M48 112 Q80 68 130 78 Q160 82 170 95" stroke="#C9A84C" stroke-width="2.5" fill="none" stroke-linecap="round"/>
        <!-- Right brow arch -->
        <path d="M230 95 Q240 82 270 78 Q320 68 355 112" stroke="#C9A84C" stroke-width="2.5" fill="none" stroke-linecap="round"/>
        <!-- Arch peak dot left -->
        <circle cx="118" cy="70" r="4" fill="#C9A84C"/>
        <!-- Arch peak dot right -->
        <circle cx="282" cy="70" r="4" fill="#C9A84C"/>
        <!-- Dashed adjustment indicator left -->
        <line x1="118" y1="70" x2="138" y2="62" stroke="#C9A84C" stroke-width="1.2" stroke-dasharray="3,3" opacity="0.7"/>
        <circle cx="141" cy="60" r="3" fill="none" stroke="#C9A84C" stroke-width="1.2" opacity="0.7"/>
        <!-- Dashed adjustment indicator right -->
        <line x1="282" y1="70" x2="262" y2="62" stroke="#C9A84C" stroke-width="1.2" stroke-dasharray="3,3" opacity="0.7"/>
        <circle cx="259" cy="60" r="3" fill="none" stroke="#C9A84C" stroke-width="1.2" opacity="0.7"/>
      </svg>

      <!-- CLEAN overlay: just clean brow lines (continuing as drawn state) -->
      <svg class="brow-svg-overlay state-hidden" id="svg-clean" viewBox="0 0 400 300" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
        <!-- Left brow -->
        <path d="M55 105 Q100 72 148 88" stroke="#C9A84C" stroke-width="2.5" fill="none" stroke-linecap="round"/>
        <!-- Right brow -->
        <path d="M252 88 Q300 72 345 105" stroke="#C9A84C" stroke-width="2.5" fill="none" stroke-linecap="round"/>
      </svg>

      <!-- Dim overlays -->
      <div class="brow-overlay brow-overlay-left"></div>
      <div class="brow-overlay brow-overlay-right"></div>
    </div>

    <!-- TOOL TABS -->
    <div class="tool-tabs fade-4">
      <button class="tool-tab" data-tool="shape">Shape</button>
      <button class="tool-tab" data-tool="colour">Colour</button>
      <button class="tool-tab" data-tool="thickness">Thickness</button>
      <button class="tool-tab active" data-tool="position">Position</button>
    </div>

    <!-- ADVICE: POSITION (default) -->
    <div class="advice-card fade-5" id="advice-position">
      <div class="advice-header">
        <div class="advice-icon">
          <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1.5" fill="#C9A84C"/>
          </svg>
        </div>
        <div class="advice-title">A Note on Brow Spacing</div>
      </div>
      <p class="advice-text">The inner corners are very close together. A small gap between the brows opens the face naturally.</p>
      <div class="advice-actions">
        <button class="btn-adjust" onclick="handleAdjust('position')">Adjust</button>
        <button class="btn-continues" onclick="handleContinues()">Continues as Drawn</button>
      </div>
    </div>

    <!-- ADVICE: SHAPE -->
    <div class="advice-card fade-5 state-hidden" id="advice-shape">
      <div class="advice-header">
        <div class="advice-icon">
          <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1.5" fill="#C9A84C"/>
          </svg>
        </div>
        <div class="advice-title">Arch Placement</div>
      </div>
      <p class="advice-text">The arch peak is sitting a little far inward. Moving it slightly toward the outer third creates more lift.</p>
      <div class="advice-actions">
        <button class="btn-adjust" onclick="handleAdjust('shape')">Adjust</button>
        <button class="btn-continues" onclick="handleContinues()">Continues as Drawn</button>
      </div>
    </div>

    <!-- ADVICE: COLOUR -->
    <div class="advice-card fade-5 state-hidden" id="advice-colour">
      <div class="advice-header">
        <div class="advice-icon">
          <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1.5" fill="#C9A84C"/>
          </svg>
        </div>
        <div class="advice-title">Colour Balance</div>
      </div>
      <p class="advice-text">The selected shade is slightly warm for your undertone. A cooler ash-brown may sit more naturally.</p>
      <div class="advice-actions">
        <button class="btn-adjust" onclick="handleAdjust('colour')">Adjust</button>
        <button class="btn-continues" onclick="handleContinues()">Continues as Drawn</button>
      </div>
    </div>

    <!-- ADVICE: THICKNESS -->
    <div class="advice-card fade-5 state-hidden" id="advice-thickness">
      <div class="advice-header">
        <div class="advice-icon">
          <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1.5" fill="#C9A84C"/>
          </svg>
        </div>
        <div class="advice-title">Thickness Note</div>
      </div>
      <p class="advice-text">Bold thickness works well with your bone structure. Medium may look more refined for daily wear.</p>
      <div class="advice-actions">
        <button class="btn-adjust" onclick="handleAdjust('thickness')">Adjust</button>
        <button class="btn-continues" onclick="handleContinues()">Continues as Drawn</button>
      </div>
    </div>

    <!-- CONTINUING STATE -->
    <div class="feedback-card state-hidden" id="state-continuing">
      <p class="feedback-text">Continuing as drawn. Brow spacing unlocked for this session.</p>
    </div>
    <p class="help-text state-hidden" id="help-text">Select a tool to continue editing.</p>

  </main>

  <!-- SAVE MODAL -->
  <div class="modal-overlay" id="saveModal">
    <div class="modal-box">
      <div class="modal-title">Save your progress?</div>
      <p class="modal-text">Your work is held exactly as it is.<br>Return to it whenever you're ready.</p>
      <button class="modal-btn-gold" onclick="window.location.href='edit-complete.php'">Save Draft</button>
      <button class="modal-btn-keep" onclick="closeModal()">Keep editing</button>
      <button class="modal-btn-discard" onclick="closeModal()">Discard changes</button>
    </div>
  </div>

  <script>
    // ── Brow tabs (Left / Both / Right) ──────────────────────────────
    const imageWrapper = document.getElementById('imageWrapper');
    document.querySelectorAll('.sub-nav a').forEach(link => {
      link.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelectorAll('.sub-nav a').forEach(a => a.classList.remove('active'));
        this.classList.add('active');
        const tab = this.dataset.tab;
        imageWrapper.classList.remove('show-left', 'show-right');
        if (tab === 'left')  imageWrapper.classList.add('show-left');
        if (tab === 'right') imageWrapper.classList.add('show-right');
      });
    });

    // ── Tool tabs ────────────────────────────────────────────────────
    const svgMap     = { position: 'svg-position', shape: 'svg-shape', colour: 'svg-clean', thickness: 'svg-clean' };
    const adviceMap  = { position: 'advice-position', shape: 'advice-shape', colour: 'advice-colour', thickness: 'advice-thickness' };

    function showTool(tool) {
      // tabs
      document.querySelectorAll('.tool-tab').forEach(t => t.classList.remove('active'));
      document.querySelector(`.tool-tab[data-tool="${tool}"]`).classList.add('active');

      // svgs
      document.querySelectorAll('.brow-svg-overlay').forEach(s => s.classList.add('state-hidden'));
      const svgEl = document.getElementById(svgMap[tool]);
      if (svgEl) svgEl.classList.remove('state-hidden');

      // advice cards
      document.querySelectorAll('.advice-card').forEach(c => c.classList.add('state-hidden'));
      document.getElementById('state-continuing').classList.add('state-hidden');
      document.getElementById('help-text').classList.add('state-hidden');
      const advEl = document.getElementById(adviceMap[tool]);
      if (advEl) advEl.classList.remove('state-hidden');
    }

    document.querySelectorAll('.tool-tab').forEach(tab => {
      tab.addEventListener('click', function() {
        showTool(this.dataset.tool);
      });
    });

    // ── Adjust button ────────────────────────────────────────────────
    function handleAdjust(tool) {
      // Could redirect to the full editor panel — for now just a visual pulse
      document.querySelector(`.tool-tab[data-tool="${tool}"]`).style.outline = '2px solid var(--gold)';
      setTimeout(() => {
        document.querySelector(`.tool-tab[data-tool="${tool}"]`).style.outline = '';
      }, 600);
    }

    // ── Continues as Drawn ───────────────────────────────────────────
    function handleContinues() {
      document.querySelectorAll('.advice-card').forEach(c => c.classList.add('state-hidden'));
      document.getElementById('svg-clean').classList.remove('state-hidden');
      document.querySelectorAll('.brow-svg-overlay').forEach(s => {
        if (s.id !== 'svg-clean') s.classList.add('state-hidden');
      });
      document.getElementById('state-continuing').classList.remove('state-hidden');
      document.getElementById('help-text').classList.remove('state-hidden');
    }

    // ── Modal ────────────────────────────────────────────────────────
    function openModal()  { document.getElementById('saveModal').classList.add('open'); }
    function closeModal() { document.getElementById('saveModal').classList.remove('open'); }
  </script>

</body>
</html>