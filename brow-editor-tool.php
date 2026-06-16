<?php
// brow-editor-tool.php — Static photo + Live Camera toggle + MediaPipe
?>
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
      --black:      #0a0a08;
      --dark-card:  #161610;
      --gold:       #c9a84c;
      --gold-light: #d4b96a;
      --gold-dark:  #8a6f2e;
      --gold-muted: rgba(201,168,76,0.12);
      --white:      #f5f0e8;
      --white-dim:  rgba(245,240,232,0.55);
      --border:     rgba(201,168,76,0.18);
      --font-display: 'Cormorant Garamond', serif;
      --font-body:    'Montserrat', sans-serif;
      --radius:     14px;
      --transition: 0.3s cubic-bezier(0.4,0,0.2,1);
    }

    html { font-size: 16px; scroll-behavior: smooth; }
    body {
      background: var(--black); color: var(--white);
      font-family: var(--font-body); font-weight: 300;
      line-height: 1.6; min-height: 100vh; overflow-x: hidden;
    }
    a { color: inherit; text-decoration: none; }
    button { cursor: pointer; border: none; outline: none; font-family: var(--font-body); background: none; }

    /* ====== NAVBAR ====== */
    .navbar { display: flex; align-items: center; justify-content: space-between; padding: 1rem 2.5rem; border-bottom: 1px solid var(--border); background: rgba(10,10,8,0.97); backdrop-filter: blur(20px); position: sticky; top: 0; z-index: 100; }
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
    .nav-gold-rule { height: 1px; background: linear-gradient(to right, transparent, var(--gold-dark) 30%, var(--gold-dark) 70%, transparent); opacity: 0.5; }

    /* ====== LAYOUT ====== */
    .main { max-width: 100%; margin: 0 auto; padding: 0 3rem 2.5rem; display: flex; flex-direction: column; gap: 1.25rem; }

    /* ====== TOPBAR ====== */
    .page-topbar { display: flex; align-items: center; justify-content: space-between; padding: 0.75rem 0 0.25rem; }
    .back-btn { display: flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 50%; border: 1px solid var(--gold); color: var(--gold); transition: all var(--transition); background: transparent; flex-shrink: 0; }
    .back-btn:hover { background: rgba(201,168,76,0.12); transform: scale(1.05); }
    .page-title-center { flex: 1; text-align: center; font-family: var(--font-display); font-size: 0.9rem; letter-spacing: 0.28em; text-transform: uppercase; color: var(--gold); padding: 0 1rem; }
    .topbar-save { font-size: 0.65rem; font-weight: 600; letter-spacing: 0.14em; text-transform: uppercase; color: var(--gold); transition: opacity var(--transition); flex-shrink: 0; }
    .topbar-save:hover { opacity: 0.7; }

    /* ====== SUB NAV ====== */
    .sub-nav { display: flex; justify-content: space-between; padding: 0 4px; }
    .sub-nav a { font-size: 0.7rem; font-weight: 600; letter-spacing: 0.08em; text-transform: uppercase; color: var(--white-dim); text-decoration: none; position: relative; padding-bottom: 6px; transition: color var(--transition); }
    .sub-nav a.active { color: var(--white); }
    .sub-nav a.active::after { content: ''; position: absolute; bottom: 0; left: 0; width: 100%; height: 2px; background: var(--gold); }
    .sub-nav a:hover { color: var(--white); }

    /* ====== VIEW TOGGLE (Photo / Live) ====== */
    .view-toggle {
      display: flex; gap: 6px; align-self: flex-end;
    }
    .toggle-btn {
      padding: 6px 16px; border-radius: 999px; font-size: 0.6rem;
      font-weight: 600; letter-spacing: 0.1em; text-transform: uppercase;
      border: 1px solid var(--border); color: var(--white-dim);
      background: transparent; cursor: pointer; transition: all var(--transition);
    }
    .toggle-btn.active { border-color: var(--gold); color: var(--gold); background: var(--gold-muted); }
    .toggle-btn:hover { border-color: var(--gold-dark); }

    /* ====== IMAGE WRAPPER (static photo mode) ====== */
    .image-wrapper {
      position: relative; border-radius: var(--radius);
      overflow: hidden; aspect-ratio: 3/2.2; background: #0d0d0a;
    }
    .image-wrapper img { width: 100%; height: 100%; object-fit: cover; display: block; }

    .brow-svg-overlay { position: absolute; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; }

    .brow-overlay { position: absolute; top: 0; width: 50%; height: 100%; background: rgba(0,0,0,0.55); transition: opacity 0.35s ease; pointer-events: none; opacity: 0; }
    .brow-overlay-left  { left: 0; }
    .brow-overlay-right { right: 0; }
    .image-wrapper.show-left  .brow-overlay-right { opacity: 1; }
    .image-wrapper.show-right .brow-overlay-left  { opacity: 1; }

    /* ====== LIVE CAMERA WRAPPER ====== */
    .cam-wrapper {
      display: none;
      position: relative; border-radius: var(--radius);
      overflow: hidden; aspect-ratio: 4/3;
      background: #0d0d0a; border: 1px solid var(--border);
    }
    .cam-wrapper.visible { display: block; }

    #camVideo { position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; opacity: 0; pointer-events: none; }
    #camCanvas { display: block; width: 100%; height: 100%; object-fit: cover; }

    .brow-dim { position: absolute; top: 0; height: 100%; width: 50%; background: rgba(0,0,0,0.55); pointer-events: none; opacity: 0; transition: opacity 0.3s ease; }
    .brow-dim-left  { left: 0; }
    .brow-dim-right { right: 0; }
    .cam-wrapper.focus-left  .brow-dim-right { opacity: 1; }
    .cam-wrapper.focus-right .brow-dim-left  { opacity: 1; }

    .cam-status {
      position: absolute; bottom: 12px; left: 50%; transform: translateX(-50%);
      background: rgba(10,10,8,0.8); backdrop-filter: blur(8px);
      border: 1px solid var(--border); border-radius: 999px;
      padding: 5px 14px; font-size: 0.6rem; letter-spacing: 0.1em;
      text-transform: uppercase; color: var(--white-dim); white-space: nowrap;
      transition: all var(--transition);
    }
    .cam-status.ready { color: var(--gold); border-color: var(--gold-dark); }
    .live-dot { display: inline-block; width: 6px; height: 6px; border-radius: 50%; background: var(--gold); margin-right: 6px; animation: pulse 1.4s ease-in-out infinite; }
    @keyframes pulse { 0%,100%{opacity:1;} 50%{opacity:0.3;} }

    /* ====== TOOL TABS ====== */
    .tool-tabs { display: flex; gap: 8px; }
    .tool-tab { flex: 1; padding: 10px 0; text-align: center; font-size: 0.6rem; font-weight: 600; letter-spacing: 0.08em; text-transform: uppercase; border-radius: 999px; border: 1px solid var(--border); color: var(--white-dim); background: transparent; cursor: pointer; transition: all var(--transition); }
    .tool-tab:hover { border-color: var(--gold-dark); }
    .tool-tab.active { border-color: var(--gold); color: var(--gold); background: var(--gold-muted); }

    /* ====== ADVICE CARD ====== */
    .advice-card { background: var(--dark-card); border: 1px solid var(--gold); border-radius: var(--radius); padding: 16px; }
    .advice-header { display: flex; align-items: center; gap: 10px; margin-bottom: 10px; }
    .advice-icon { width: 30px; height: 30px; border-radius: 50%; border: 1px solid var(--gold); display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
    .advice-icon svg { width: 14px; height: 14px; stroke: var(--gold); fill: none; stroke-width: 1.5; }
    .advice-title { font-family: var(--font-display); font-style: italic; font-size: 0.85rem; letter-spacing: 0.12em; text-transform: uppercase; color: var(--gold); }
    .advice-text { font-size: 0.82rem; color: var(--white-dim); line-height: 1.55; margin-bottom: 16px; }
    .advice-actions { display: flex; gap: 10px; align-items: center; }
    .btn-adjust { padding: 0.65rem 1.6rem; border-radius: 999px; background: var(--gold); color: var(--black); font-size: 0.65rem; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; border: none; cursor: pointer; font-family: var(--font-body); transition: background var(--transition); white-space: nowrap; }
    .btn-adjust:hover { background: var(--gold-light); }
    .btn-continues { background: none; border: none; font-size: 0.62rem; font-weight: 600; letter-spacing: 0.1em; text-transform: uppercase; color: var(--white-dim); cursor: pointer; font-family: var(--font-body); transition: color var(--transition); }
    .btn-continues:hover { color: var(--white); }

    /* ====== LIVE TOOL PANELS (show only in live mode) ====== */
    .live-panel { display: none; flex-direction: column; gap: 0.75rem; }
    .live-panel.visible { display: flex; }

    /* colour swatches */
    .swatch-row { display: flex; gap: 10px; flex-wrap: wrap; }
    .swatch { width: 34px; height: 34px; border-radius: 50%; border: 2px solid transparent; cursor: pointer; transition: all var(--transition); }
    .swatch:hover { transform: scale(1.1); }
    .swatch.active { border-color: var(--white); box-shadow: 0 0 0 3px var(--gold); }

    /* thickness seg */
    .seg { display: flex; border-radius: 999px; overflow: hidden; border: 1px solid var(--border); }
    .seg-btn { flex: 1; padding: 0.7rem; text-align: center; font-size: 0.62rem; letter-spacing: 0.1em; text-transform: uppercase; color: var(--white-dim); background: transparent; border-right: 1px solid var(--border); cursor: pointer; transition: all var(--transition); }
    .seg-btn:last-child { border-right: none; }
    .seg-btn:hover { color: var(--white); }
    .seg-btn.active { background: var(--gold-muted); color: var(--gold); }

    /* position pad */
    .pos-pad { display: grid; grid-template-columns: 1fr 1fr; gap: 8px; }
    .pos-btn { padding: 0.75rem; border-radius: var(--radius); border: 1px solid var(--border); color: var(--white-dim); background: var(--dark-card); font-size: 0.65rem; letter-spacing: 0.08em; text-transform: uppercase; display: flex; align-items: center; justify-content: center; gap: 6px; transition: all var(--transition); cursor: pointer; }
    .pos-btn:hover { border-color: var(--gold); color: var(--gold); background: var(--gold-muted); }
    .pos-btn:active { transform: scale(0.97); }

    /* hint */
    .hint-text { font-size: 0.72rem; color: var(--white-dim); text-align: center; }

    /* feedback */
    .feedback-card { background: var(--dark-card); border: 1px solid var(--gold); border-radius: var(--radius); padding: 16px; }
    .feedback-text { font-size: 0.82rem; color: var(--white-dim); line-height: 1.55; }
    .help-text { font-size: 0.72rem; color: var(--white-dim); text-align: center; opacity: 0.6; }

    .state-hidden { display: none; }

    /* ====== MODAL ====== */
    .modal-overlay { position: fixed; inset: 0; background: rgba(0,0,0,0.75); backdrop-filter: blur(4px); z-index: 200; display: flex; align-items: center; justify-content: center; opacity: 0; pointer-events: none; transition: opacity 0.3s ease; }
    .modal-overlay.open { opacity: 1; pointer-events: all; }
    .modal-box { background: var(--dark-card); border: 1px solid var(--gold); border-radius: 20px; padding: 32px 24px 24px; width: 88%; max-width: 340px; text-align: center; transform: translateY(20px); transition: transform 0.3s ease; }
    .modal-overlay.open .modal-box { transform: translateY(0); }
    .modal-title { font-family: var(--font-display); font-style: italic; font-size: 1.6rem; font-weight: 400; color: var(--white); margin-bottom: 10px; }
    .modal-text { font-size: 0.78rem; color: var(--white-dim); line-height: 1.6; margin-bottom: 24px; }
    .modal-btn-gold { display: block; width: 100%; padding: 0.9rem; border-radius: 999px; background: var(--gold); color: var(--black); font-size: 0.7rem; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; border: none; cursor: pointer; font-family: var(--font-body); transition: background var(--transition); margin-bottom: 10px; }
    .modal-btn-gold:hover { background: var(--gold-light); }
    .modal-btn-keep { display: block; width: 100%; padding: 0.9rem; border-radius: 999px; background: transparent; border: 1px solid var(--border); color: var(--white); font-size: 0.7rem; font-weight: 600; letter-spacing: 0.1em; font-family: var(--font-display); font-style: italic; cursor: pointer; transition: border-color var(--transition); margin-bottom: 14px; }
    .modal-btn-keep:hover { border-color: var(--gold); }
    .modal-btn-discard { display: block; width: 100%; background: none; border: none; color: var(--gold); font-size: 0.75rem; font-family: var(--font-display); font-style: italic; cursor: pointer; transition: opacity var(--transition); }
    .modal-btn-discard:hover { opacity: 0.7; }

    /* ====== ANIMATIONS ====== */
    @keyframes fadeUp { from { opacity:0; transform:translateY(16px); } to { opacity:1; transform:translateY(0); } }
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

    <!-- SUB NAV + VIEW TOGGLE ROW -->
    <div style="display:flex; align-items:center; justify-content:space-between;" class="fade-2">
      <div class="sub-nav">
        <a href="#" data-tab="left">Left Brow</a>
        <a href="#" data-tab="both" class="active" style="margin:0 1.5rem;">Both</a>
        <a href="#" data-tab="right">Right Brow</a>
      </div>
      <div class="view-toggle">
        <button class="toggle-btn active" id="btnPhoto">Photo</button>
        <button class="toggle-btn" id="btnLive">Live</button>
      </div>
    </div>

    <!-- ── PHOTO MODE: static image + SVG overlays ── -->
    <div class="image-wrapper fade-3" id="imageWrapper">
      <!-- loads captured photo from localStorage, falls back to placeholder -->
      <img id="photoImg" src="assets/face-placeholder.png" alt="Face preview" />

      <!-- POSITION overlay -->
      <svg class="brow-svg-overlay" id="svg-position" viewBox="0 0 400 300" preserveAspectRatio="xMidYMid slice">
        <path d="M55 105 Q100 72 148 88" stroke="#C9A84C" stroke-width="2.5" fill="none" stroke-linecap="round"/>
        <path d="M252 88 Q300 72 345 105" stroke="#C9A84C" stroke-width="2.5" fill="none" stroke-linecap="round"/>
        <circle cx="102" cy="65" r="18" stroke="#C9A84C" stroke-width="1.5" fill="none"/>
        <circle cx="102" cy="65" r="7"  stroke="#C9A84C" stroke-width="1.5" fill="none"/>
        <circle cx="102" cy="65" r="2"  fill="#C9A84C"/>
        <circle cx="298" cy="65" r="18" stroke="#C9A84C" stroke-width="1.5" fill="none"/>
        <circle cx="298" cy="65" r="7"  stroke="#C9A84C" stroke-width="1.5" fill="none"/>
        <circle cx="298" cy="65" r="2"  fill="#C9A84C"/>
        <line x1="200" y1="50" x2="200" y2="115" stroke="#C9A84C" stroke-width="1" stroke-dasharray="4,4" opacity="0.5"/>
      </svg>

      <!-- SHAPE overlay -->
      <svg class="brow-svg-overlay state-hidden" id="svg-shape" viewBox="0 0 400 300" preserveAspectRatio="xMidYMid slice">
        <path d="M48 112 Q80 68 130 78 Q160 82 170 95" stroke="#C9A84C" stroke-width="2.5" fill="none" stroke-linecap="round"/>
        <path d="M230 95 Q240 82 270 78 Q320 68 355 112" stroke="#C9A84C" stroke-width="2.5" fill="none" stroke-linecap="round"/>
        <circle cx="118" cy="70" r="4" fill="#C9A84C"/>
        <circle cx="282" cy="70" r="4" fill="#C9A84C"/>
        <line x1="118" y1="70" x2="138" y2="62" stroke="#C9A84C" stroke-width="1.2" stroke-dasharray="3,3" opacity="0.7"/>
        <circle cx="141" cy="60" r="3" fill="none" stroke="#C9A84C" stroke-width="1.2" opacity="0.7"/>
        <line x1="282" y1="70" x2="262" y2="62" stroke="#C9A84C" stroke-width="1.2" stroke-dasharray="3,3" opacity="0.7"/>
        <circle cx="259" cy="60" r="3" fill="none" stroke="#C9A84C" stroke-width="1.2" opacity="0.7"/>
      </svg>

      <!-- CLEAN overlay -->
      <svg class="brow-svg-overlay state-hidden" id="svg-clean" viewBox="0 0 400 300" preserveAspectRatio="xMidYMid slice">
        <path d="M55 105 Q100 72 148 88" stroke="#C9A84C" stroke-width="2.5" fill="none" stroke-linecap="round"/>
        <path d="M252 88 Q300 72 345 105" stroke="#C9A84C" stroke-width="2.5" fill="none" stroke-linecap="round"/>
      </svg>

      <div class="brow-overlay brow-overlay-left"></div>
      <div class="brow-overlay brow-overlay-right"></div>
    </div>

    <!-- ── LIVE MODE: camera canvas ── -->
    <div class="cam-wrapper fade-3" id="camWrapper">
      <video id="camVideo" autoplay playsinline muted></video>
      <canvas id="camCanvas"></canvas>
      <div class="brow-dim brow-dim-left"></div>
      <div class="brow-dim brow-dim-right"></div>
      <div class="cam-status" id="camStatus">Tap Live to start camera</div>
    </div>

    <!-- TOOL TABS -->
    <div class="tool-tabs fade-4">
      <button class="tool-tab" data-tool="shape">Shape</button>
      <button class="tool-tab" data-tool="colour">Colour</button>
      <button class="tool-tab" data-tool="thickness">Thickness</button>
      <button class="tool-tab active" data-tool="position">Position</button>
    </div>

    <!-- ── PHOTO MODE ADVICE CARDS (original) ── -->
    <div id="photoAdvice">

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

      <div class="feedback-card state-hidden" id="state-continuing">
        <p class="feedback-text">Continuing as drawn. Brow spacing unlocked for this session.</p>
      </div>
      <p class="help-text state-hidden" id="help-text">Select a tool to continue editing.</p>

    </div><!-- /photoAdvice -->

    <!-- ── LIVE MODE PANELS ── -->
    <div id="livePanels" style="display:none; flex-direction:column; gap:0.75rem;">

      <!-- shape panel -->
      <div class="live-panel visible" id="lp-shape">
        <div class="swatch-row" id="shapeSwatches" style="gap:8px; flex-wrap:wrap;">
          <!-- shape pills built by JS -->
        </div>
        <p class="hint-text">Shape applies live to your face.</p>
      </div>

      <!-- colour panel -->
      <div class="live-panel" id="lp-colour">
        <div class="swatch-row" id="colourSwatches"></div>
        <p class="hint-text" id="colourLabel">Dark Brown</p>
      </div>

      <!-- thickness panel -->
      <div class="live-panel" id="lp-thickness">
        <div class="seg">
          <button class="seg-btn" data-thick="fine">Fine</button>
          <button class="seg-btn active" data-thick="medium">Medium</button>
          <button class="seg-btn" data-thick="full">Full</button>
        </div>
        <p class="hint-text">Your natural thickness is a good reference.</p>
      </div>

      <!-- position panel -->
      <div class="live-panel" id="lp-position">
        <div class="advice-card" id="livePosAdvice">
          <div class="advice-header">
            <div class="advice-icon">
              <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="4"/></svg>
            </div>
            <div class="advice-title">Brow Spacing</div>
          </div>
          <p class="advice-text">The inner corners are very close together. A small gap opens the face naturally.</p>
          <div class="advice-actions">
            <button class="btn-adjust" id="livePosAdjust">Adjust</button>
            <button class="btn-continues" id="livePosContinue">Continues as Drawn</button>
          </div>
        </div>
        <div class="pos-pad state-hidden" id="livePosPad">
          <button class="pos-btn" id="posUp">▲ Move Up</button>
          <button class="pos-btn" id="posDown">▼ Move Down</button>
          <button class="pos-btn" id="archUp">Arch +</button>
          <button class="pos-btn" id="archDown">Arch −</button>
        </div>
        <div class="feedback-card state-hidden" id="livePosFeedback">
          <p class="feedback-text">Continuing as drawn. Position locked for this session.</p>
        </div>
      </div>

    </div><!-- /livePanels -->

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

<!-- ════════════════════════════════════════════════════════════
     JAVASCRIPT
════════════════════════════════════════════════════════════ -->
<script type="module">

/* ── MediaPipe landmark indices ── */
const L_UPPER = [70, 63, 105, 66, 107];
const L_LOWER = [46, 53, 52, 65, 55];
const R_UPPER = [300, 293, 334, 296, 336];
const R_LOWER = [276, 283, 282, 295, 285];

/* ── Catalogue ── */
const STYLES = [
  { id: 'considered', name: 'Classic'   },
  { id: 'arch',       name: 'Arch'      },
  { id: 'straight',   name: 'Straight'  },
  { id: 'sharp',      name: 'Sharp'     },
  { id: 'rounded',    name: 'Rounded'   },
  { id: 'bold',       name: 'Bold'      },
  { id: 'feathered',  name: 'Feathered' },
  { id: 'defined',    name: 'Defined'   },
];

const COLOURS = [
  { name:'Blonde',       hex:'#c9a86a' },
  { name:'Soft Brown',   hex:'#a8794e' },
  { name:'Caramel',      hex:'#8b5e3c' },
  { name:'Ash Brown',    hex:'#6e5a48' },
  { name:'Medium Brown', hex:'#5c3a1e' },
  { name:'Dark Brown',   hex:'#3e2510' },
  { name:'Auburn',       hex:'#6e3b23' },
  { name:'Black',        hex:'#1a1a1a' },
];

const THICKNESS = { fine: 6, medium: 10, full: 15 };

/* ── Live look state ── */
const look = {
  styleId:  'considered',
  colour:   '#3e2510',
  colourName: 'Dark Brown',
  thickKey: 'medium',
  offsetY:  0,
  archExtra: 0,
  side:     'both',
};

/* ── DOM refs ── */
const video     = document.getElementById('camVideo');
const canvas    = document.getElementById('camCanvas');
const camStatus = document.getElementById('camStatus');
const camWrapper= document.getElementById('camWrapper');
const ctx       = canvas.getContext('2d');

let faceLandmarker = null;
let stream = null;
let rafId  = null;
let liveMode = false;

/* ─────────────────────────────────────────────
   PHOTO mode: load saved photo from localStorage
───────────────────────────────────────────── */
(function loadSavedPhoto(){
  const saved = localStorage.getItem('capturedFacePhoto');
  if (saved) document.getElementById('photoImg').src = saved;
})();

/* ─────────────────────────────────────────────
   VIEW TOGGLE — Photo ↔ Live
───────────────────────────────────────────── */
document.getElementById('btnPhoto').addEventListener('click', () => switchView('photo'));
document.getElementById('btnLive').addEventListener('click',  () => switchView('live'));

function switchView(mode) {
  liveMode = mode === 'live';

  document.getElementById('btnPhoto').classList.toggle('active', !liveMode);
  document.getElementById('btnLive').classList.toggle('active',  liveMode);

  document.getElementById('imageWrapper').style.display = liveMode ? 'none' : '';
  camWrapper.classList.toggle('visible', liveMode);

  document.getElementById('photoAdvice').style.display = liveMode ? 'none' : '';
  document.getElementById('livePanels').style.display  = liveMode ? 'flex' : 'none';

  if (liveMode) {
    startCamera();
  } else {
    stopCamera();
  }
}

/* ─────────────────────────────────────────────
   PHOTO mode — original tab / advice logic
───────────────────────────────────────────── */
const imageWrapper = document.getElementById('imageWrapper');

document.querySelectorAll('.sub-nav a').forEach(link => {
  link.addEventListener('click', e => {
    e.preventDefault();
    document.querySelectorAll('.sub-nav a').forEach(a => a.classList.remove('active'));
    link.classList.add('active');
    const tab = link.dataset.tab;
    imageWrapper.classList.remove('show-left','show-right');
    camWrapper.classList.remove('focus-left','focus-right');
    if (tab === 'left')  { imageWrapper.classList.add('show-left');  camWrapper.classList.add('focus-left');  look.side='left';  }
    if (tab === 'right') { imageWrapper.classList.add('show-right'); camWrapper.classList.add('focus-right'); look.side='right'; }
    if (tab === 'both')  look.side = 'both';
  });
});

const svgMap    = { position:'svg-position', shape:'svg-shape', colour:'svg-clean', thickness:'svg-clean' };
const adviceMap = { position:'advice-position', shape:'advice-shape', colour:'advice-colour', thickness:'advice-thickness' };
const livePanelMap = { shape:'lp-shape', colour:'lp-colour', thickness:'lp-thickness', position:'lp-position' };

document.querySelectorAll('.tool-tab').forEach(tab => {
  tab.addEventListener('click', function(){
    const tool = this.dataset.tool;
    document.querySelectorAll('.tool-tab').forEach(t => t.classList.remove('active'));
    this.classList.add('active');

    if (!liveMode) {
      /* photo mode — SVG + advice */
      document.querySelectorAll('.brow-svg-overlay').forEach(s => s.classList.add('state-hidden'));
      const svgEl = document.getElementById(svgMap[tool]);
      if (svgEl) svgEl.classList.remove('state-hidden');
      document.querySelectorAll('.advice-card').forEach(c => c.classList.add('state-hidden'));
      document.getElementById('state-continuing').classList.add('state-hidden');
      document.getElementById('help-text').classList.add('state-hidden');
      const advEl = document.getElementById(adviceMap[tool]);
      if (advEl) advEl.classList.remove('state-hidden');
    } else {
      /* live mode — show correct live panel */
      document.querySelectorAll('.live-panel').forEach(p => p.classList.remove('visible'));
      const lp = document.getElementById(livePanelMap[tool]);
      if (lp) lp.classList.add('visible');
    }
  });
});

/* ── Photo mode: Adjust / Continues ── */
window.handleAdjust = function(tool) {
  const el = document.querySelector(`.tool-tab[data-tool="${tool}"]`);
  if (!el) return;
  el.style.outline = '2px solid var(--gold)';
  setTimeout(() => el.style.outline = '', 600);
};
window.handleContinues = function() {
  document.querySelectorAll('.advice-card').forEach(c => c.classList.add('state-hidden'));
  document.querySelectorAll('.brow-svg-overlay').forEach(s => s.classList.add('state-hidden'));
  document.getElementById('svg-clean').classList.remove('state-hidden');
  document.getElementById('state-continuing').classList.remove('state-hidden');
  document.getElementById('help-text').classList.remove('state-hidden');
};

/* ── Live position advice ── */
document.getElementById('livePosAdjust').addEventListener('click', () => {
  document.getElementById('livePosAdvice').classList.add('state-hidden');
  document.getElementById('livePosPad').classList.remove('state-hidden');
});
document.getElementById('livePosContinue').addEventListener('click', () => {
  document.getElementById('livePosAdvice').classList.add('state-hidden');
  document.getElementById('livePosFeedback').classList.remove('state-hidden');
});
document.getElementById('posUp').addEventListener('click',    () => { look.offsetY   = Math.max(-30, look.offsetY - 3); });
document.getElementById('posDown').addEventListener('click',  () => { look.offsetY   = Math.min(30,  look.offsetY + 3); });
document.getElementById('archUp').addEventListener('click',   () => { look.archExtra = Math.min(20,  look.archExtra + 2); });
document.getElementById('archDown').addEventListener('click', () => { look.archExtra = Math.max(-10, look.archExtra - 2); });

/* ─────────────────────────────────────────────
   BUILD LIVE PANELS
───────────────────────────────────────────── */
/* shape pills */
(function buildShapePills(){
  const row = document.getElementById('shapeSwatches');
  row.innerHTML = STYLES.map(s =>
    `<button class="toggle-btn ${s.id===look.styleId?'active':''}" data-style="${s.id}">${s.name}</button>`
  ).join('');
  row.querySelectorAll('[data-style]').forEach(b => b.addEventListener('click', () => {
    look.styleId = b.dataset.style;
    row.querySelectorAll('[data-style]').forEach(x => x.classList.remove('active'));
    b.classList.add('active');
  }));
})();

/* colour swatches */
(function buildColours(){
  const row = document.getElementById('colourSwatches');
  row.innerHTML = COLOURS.map(c =>
    `<div class="swatch ${c.hex===look.colour?'active':''}" style="background:${c.hex}" data-hex="${c.hex}" data-name="${c.name}" title="${c.name}"></div>`
  ).join('');
  row.querySelectorAll('.swatch').forEach(s => s.addEventListener('click', () => {
    look.colour = s.dataset.hex; look.colourName = s.dataset.name;
    row.querySelectorAll('.swatch').forEach(x => x.classList.remove('active'));
    s.classList.add('active');
    document.getElementById('colourLabel').textContent = s.dataset.name;
  }));
})();

/* thickness */
document.querySelectorAll('.seg-btn[data-thick]').forEach(b => b.addEventListener('click', () => {
  look.thickKey = b.dataset.thick;
  document.querySelectorAll('.seg-btn[data-thick]').forEach(x => x.classList.remove('active'));
  b.classList.add('active');
}));

/* ─────────────────────────────────────────────
   CAMERA + MEDIAPIPE
───────────────────────────────────────────── */
async function startCamera() {
  if (stream) return;          // already running
  camStatus.textContent = 'Starting camera…';
  try {
    stream = await navigator.mediaDevices.getUserMedia({
      video: { facingMode:'user', width:{ideal:640}, height:{ideal:480} },
      audio: false,
    });
    video.srcObject = stream;
    await video.play();
    camStatus.textContent = 'Loading AI model…';
    await loadMediaPipe();
    camStatus.innerHTML = '<span class="live-dot"></span>Live';
    camStatus.classList.add('ready');
    loop();
  } catch(err) {
    camStatus.textContent = 'Camera error: ' + err.message;
  }
}

function stopCamera() {
  if (rafId)  { cancelAnimationFrame(rafId); rafId = null; }
  if (stream) { stream.getTracks().forEach(t => t.stop()); stream = null; }
  video.srcObject = null;
  camStatus.textContent = 'Tap Live to start camera';
  camStatus.classList.remove('ready');
  ctx.clearRect(0, 0, canvas.width, canvas.height);
}

async function loadMediaPipe() {
  if (faceLandmarker) return;
  const { FaceLandmarker, FilesetResolver } = await import(
    'https://cdn.jsdelivr.net/npm/@mediapipe/tasks-vision@0.10.18/+esm'
  );
  const fs = await FilesetResolver.forVisionTasks(
    'https://cdn.jsdelivr.net/npm/@mediapipe/tasks-vision@0.10.18/wasm'
  );
  faceLandmarker = await FaceLandmarker.createFromOptions(fs, {
    baseOptions: {
      modelAssetPath: 'https://storage.googleapis.com/mediapipe-models/face_landmarker/face_landmarker/float16/1/face_landmarker.task',
      delegate: 'GPU',
    },
    runningMode: 'VIDEO',
    numFaces: 1,
    outputFaceBlendshapes: false,
    outputFacialTransformationMatrixes: false,
  });
}

function loop() {
  rafId = requestAnimationFrame(loop);
  if (!stream || !faceLandmarker || video.readyState < 2) return;

  const vw = video.videoWidth, vh = video.videoHeight;
  if (!vw || !vh) return;

  canvas.width  = vw;
  canvas.height = vh;

  /* mirrored video */
  ctx.save();
  ctx.translate(vw, 0); ctx.scale(-1, 1);
  ctx.drawImage(video, 0, 0, vw, vh);
  ctx.restore();

  /* detect */
  let result;
  try { result = faceLandmarker.detectForVideo(video, performance.now()); }
  catch(e) { return; }

  const faces = result?.faceLandmarks || [];
  if (!faces.length) return;

  const thick = THICKNESS[look.thickKey];
  faces.forEach(lm => drawBrows(lm, vw, vh, thick, 0.82));
}

/* landmark → mirrored canvas pixel */
function px(lm, vw, vh, idx) {
  return { x: (1 - lm[idx].x) * vw, y: lm[idx].y * vh + look.offsetY };
}

function drawBrows(lm, vw, vh, thick, alpha) {
  const hex = look.colour;
  const r = parseInt(hex.slice(1,3),16);
  const g = parseInt(hex.slice(3,5),16);
  const b = parseInt(hex.slice(5,7),16);

  const sides = look.side === 'both' ? ['left','right'] : [look.side];

  sides.forEach(side => {
    const UPPER = side === 'left' ? L_UPPER : R_UPPER;
    const LOWER = side === 'left' ? L_LOWER : R_LOWER;

    const upper = UPPER.map(i => px(lm, vw, vh, i));
    const lower = LOWER.map(i => px(lm, vw, vh, i));
    upper[2] = { x: upper[2].x, y: upper[2].y - look.archExtra };

    /* offscreen blur fill */
    const off = document.createElement('canvas');
    off.width = vw; off.height = vh;
    const oc = off.getContext('2d');

    oc.beginPath();
    oc.moveTo(upper[0].x, upper[0].y);
    upper.forEach(p => oc.lineTo(p.x, p.y));
    lower.slice().reverse().forEach(p => oc.lineTo(p.x, p.y));
    oc.closePath();

    const grd = oc.createLinearGradient(upper[0].x, 0, upper[upper.length-1].x, 0);
    grd.addColorStop(0,   `rgba(${r},${g},${b},0.1)`);
    grd.addColorStop(0.2, `rgba(${r},${g},${b},0.95)`);
    grd.addColorStop(0.8, `rgba(${r},${g},${b},0.95)`);
    grd.addColorStop(1,   `rgba(${r},${g},${b},0.1)`);
    oc.fillStyle = grd;
    oc.fill();

    /* blurred temp */
    const tmp = document.createElement('canvas');
    tmp.width = vw; tmp.height = vh;
    const tc = tmp.getContext('2d');
    tc.filter = `blur(${Math.max(1.5, thick * 0.55)}px)`;
    tc.drawImage(off, 0, 0);

    ctx.save();
    ctx.globalAlpha = alpha;
    ctx.drawImage(tmp, 0, 0);
    ctx.restore();

    /* crisp stroke */
    ctx.save();
    ctx.globalAlpha = alpha;
    ctx.beginPath();
    ctx.moveTo(upper[0].x, upper[0].y);
    upper.forEach(p => ctx.lineTo(p.x, p.y));
    ctx.strokeStyle = `rgb(${r},${g},${b})`;
    ctx.lineWidth   = Math.max(1.5, thick * 0.4);
    ctx.lineCap = 'round'; ctx.lineJoin = 'round';
    ctx.stroke();
    ctx.restore();
  });
}

/* ── Modal ── */
window.openModal  = () => document.getElementById('saveModal').classList.add('open');
window.closeModal = () => document.getElementById('saveModal').classList.remove('open');

/* ── Cleanup on leave ── */
window.addEventListener('beforeunload', stopCamera);

</script>
</body>
</html>