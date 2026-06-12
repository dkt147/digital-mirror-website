<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Brow Editor — Royals Arch Brow</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap"
    rel="stylesheet" />
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
      background: rgba(201, 168, 76, 0.12);
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
      font-size: 0.6rem;
      letter-spacing: 0.25em;
      text-transform: uppercase;
      color: var(--gold);
      font-weight: 500;
      margin-bottom: 0.2rem;
    }

    .page-title {
      font-family: var(--font-display);
      font-style: italic;
      font-size: 2rem;
      font-weight: 400;
      color: var(--white);
      line-height: 1.05;
    }

    /* ====== SUB NAV ====== */
    .sub-nav {
      display: flex;
      justify-content: space-between;
      padding: 0 4px;
    }

    .sub-nav a {
      font-size: 0.7rem;
      font-weight: 600;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: var(--white-dim);
      text-decoration: none;
      position: relative;
      padding-bottom: 6px;
      transition: color var(--transition);
    }

    .sub-nav a.active {
      color: var(--white);
    }

    .sub-nav a.active::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 2px;
      background: var(--gold);
    }

    .sub-nav a:hover {
      color: var(--white);
    }

    /* ====== IMAGE CONTAINER ====== */
    .image-wrapper {
      position: relative;
      border-radius: var(--radius);
      border: 1px solid var(--gold);
      overflow: hidden;
      aspect-ratio: 1 / 1;
    }

    .image-wrapper img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .target-icon {
      position: absolute;
      top: 30%;
      left: 35%;
      width: 36px;
      height: 36px;
      border: 1px solid var(--gold);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      background: rgba(0, 0, 0, 0.3);
      backdrop-filter: blur(2px);
    }

    .target-icon::before {
      content: '+';
      color: var(--gold);
      font-size: 1.2rem;
      font-weight: 300;
    }

    .target-icon::after {
      content: '';
      position: absolute;
      width: 16px;
      height: 16px;
      border: 1px solid var(--gold);
      border-radius: 50%;
      opacity: 0.5;
    }

    /* ====== TOOL TABS ====== */
    .tool-tabs {
      display: flex;
      gap: 8px;
    }

    .tool-tab {
      flex: 1;
      padding: 10px 0;
      text-align: center;
      font-size: 0.6rem;
      font-weight: 600;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      border-radius: 999px;
      border: 1px solid var(--border);
      color: var(--white-dim);
      background: transparent;
      cursor: pointer;
      transition: all var(--transition);
    }

    .tool-tab:hover {
      border-color: var(--gold-dark);
    }

    .tool-tab.active {
      background: var(--gold);
      color: var(--black);
      border-color: var(--gold);
    }

    .tool-tab.highlight {
      border-color: var(--gold);
      color: var(--gold);
      background: var(--gold-muted);
    }

    /* ====== ADVICE CARD ====== */
    .advice-card {
      background: #161610;
      border: 1px solid var(--border);
      border-radius: var(--radius);
      padding: 18px 16px;
    }

    .advice-header {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 12px;
    }

    .advice-icon {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      border: 1px solid var(--gold);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .advice-icon svg {
      width: 16px;
      height: 16px;
      stroke: var(--gold);
      fill: none;
      stroke-width: 1.5;
    }

    .advice-title {
      font-size: 0.7rem;
      font-weight: 600;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--gold);
    }

    .advice-text {
      font-size: 0.85rem;
      color: var(--white-dim);
      line-height: 1.5;
      margin-bottom: 16px;
    }

    .advice-actions {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 12px;
    }

    .btn-gold {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 0.7rem;
      border-radius: 999px;
      border: none;
      background: var(--gold);
      color: var(--black);
      font-size: 0.7rem;
      font-weight: 700;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      text-decoration: none;
      transition: background var(--transition);
    }

    .btn-gold:hover {
      background: var(--gold-light);
    }

    .btn-outline {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 0.7rem;
      border-radius: 999px;
      border: 1px solid var(--border);
      background: transparent;
      color: var(--white);
      font-size: 0.7rem;
      font-weight: 600;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      text-decoration: none;
      transition: all var(--transition);
    }

    .btn-outline:hover {
      border-color: var(--gold);
      color: var(--gold);
    }

    /* ====== BROW OVERLAYS ====== */
    .brow-overlay {
      position: absolute;
      top: 0;
      width: 50%;
      height: 100%;
      background: rgba(0, 0, 0, 0.55);
      transition: opacity 0.35s ease;
      pointer-events: none;
      opacity: 0;
    }

    .brow-overlay-left {
      left: 0;
    }

    .brow-overlay-right {
      right: 0;
    }

    /* LEFT tab active → dim right side */
    .image-wrapper.show-left .brow-overlay-right {
      opacity: 1;
    }

    /* RIGHT tab active → dim left side */
    .image-wrapper.show-right .brow-overlay-left {
      opacity: 1;
    }


    /* ====== TOOL PANEL ====== */
    .tool-panel {
      background: #161610;
      border: 1px solid var(--border);
      border-radius: var(--radius);
      padding: 18px 16px;
      display: none;
    }

    .tool-panel.active {
      display: block;
    }

    /* Shape options */
    .shape-options {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 8px;
      margin-bottom: 16px;
    }

    .shape-opt {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 6px;
      padding: 10px 6px;
      border-radius: var(--radius-sm);
      border: 1px solid var(--border);
      cursor: pointer;
      transition: all var(--transition);
      background: transparent;
      color: var(--white-dim);
      font-size: 0.55rem;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      font-weight: 600;
      font-family: var(--font-body);
    }

    .shape-opt svg {
      stroke: var(--white-dim);
      transition: stroke var(--transition);
    }

    .shape-opt:hover,
    .shape-opt.active {
      border-color:  #c9a84c ;
      color: var(--white);
      background: var(--gold-muted);
    }

    .shape-opt.active svg {
      stroke: var(--gold);
    }

    /* Colour swatches */
    .colour-swatches {
      display: flex;
      gap: 8px;
      margin-bottom: 10px;
      flex-wrap: wrap;
    }

    .swatch {
      width: 36px;
      height: 36px;
      border-radius: 50%;
      cursor: pointer;
      border: 2px solid transparent;
      transition: border-color var(--transition), transform var(--transition);
      flex-shrink: 0;
    }

    .swatch.active {
      border-color: var(--gold);
      transform: scale(1.15);
    }

    .colour-selected {
      font-size: 0.7rem;
      color: var(--white-dim);
      margin-bottom: 8px;
    }

    .colour-selected span {
      color: var(--white);
      font-weight: 600;
    }

    /* Thickness options */
    .thickness-options {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 8px;
      margin-bottom: 14px;
    }

    .thickness-opt {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 6px;
      padding: 12px 6px;
      border-radius: var(--radius-sm);
      border: 1px solid var(--border);
      cursor: pointer;
      transition: all var(--transition);
      background: transparent;
      color: var(--white-dim);
      font-size: 0.55rem;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      font-weight: 600;
      font-family: var(--font-body);
    }

    .thickness-opt svg {
      stroke: var(--white-dim);
      transition: stroke var(--transition);
    }

    .thickness-opt:hover,
    .thickness-opt.active {
      border-color: var(--gold);
      color: var(--gold);
      background: var(--gold-muted);
    }

    .thickness-opt.active svg {
      stroke: var(--gold);
    }

    /* Slider */
    .slider-row {
      display: flex;
      justify-content: space-between;
      font-size: 0.6rem;
      color: var(--white-dim);
      margin-bottom: 6px;
      letter-spacing: 0.08em;
      text-transform: uppercase;
    }

    .gold-slider {
      -webkit-appearance: none;
      width: 100%;
      height: 2px;
      background: var(--border);
      border-radius: 2px;
      outline: none;
      margin-bottom: 14px;
    }

    .gold-slider::-webkit-slider-thumb {
      -webkit-appearance: none;
      width: 14px;
      height: 14px;
      border-radius: 50%;
      background: var(--gold);
      cursor: pointer;
    }

    /* Position pad */
    .position-pad {
      display: grid;
      grid-template-columns: repeat(3, 48px);
      grid-template-rows: repeat(3, 48px);
      gap: 6px;
      justify-content: center;
      margin-bottom: 14px;
    }

    .pad-btn {
      width: 48px;
      height: 48px;
      border-radius: var(--radius-sm);
      border: 1px solid var(--border);
      background: #1c1c15;
      color: var(--white-dim);
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: all var(--transition);
      font-family: var(--font-body);
    }

    .pad-btn:hover {
      border-color: var(--gold);
      color: var(--gold);
      background: var(--gold-muted);
    }

    .pad-btn.center {
      background: var(--gold);
      border-color: var(--gold);
    }

    .pad-btn.center svg {
      stroke: var(--black);
    }

    .pad-empty {
      background: transparent;
      border: none;
      pointer-events: none;
    }

    /* Panel tip text */
    .panel-tip {
      font-size: 0.75rem;
      color: var(--white-dim);
      line-height: 1.5;
      margin-bottom: 0;
    }

    /* Bottom action bar */
    .panel-actions {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 12px;
      margin-top: 14px;
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

    /* ====== RESPONSIVE ====== */
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

      .page-title {
        font-size: 1.6rem;
      }

      .sub-nav a {
        font-size: 0.65rem;
      }

      .tool-tab {
        font-size: 0.55rem;
        padding: 8px 0;
      }

      .back-btn {
        width: 38px;
        height: 38px;
      }

      .page-logo {
        width: 38px;
        height: 38px;
      }
    }

    /* ====== SAVE MODAL ====== */
    .modal-overlay {
      position: fixed;
      inset: 0;
      background: rgba(0, 0, 0, 0.75);
      backdrop-filter: blur(4px);
      z-index: 200;
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
      pointer-events: none;
      transition: opacity 0.3s ease;
    }

    .modal-overlay.open {
      opacity: 1;
      pointer-events: all;
    }

    .modal-box {
      background: #161610;
      border: 1px solid var(--gold);
      border-radius: 20px;
      padding: 32px 24px 24px;
      width: 88%;
      max-width: 340px;
      text-align: center;
      transform: translateY(20px);
      transition: transform 0.3s ease;
    }

    .modal-overlay.open .modal-box {
      transform: translateY(0);
    }

    .modal-title {
      font-family: var(--font-display);
      font-style: italic;
      font-size: 1.6rem;
      font-weight: 400;
      color: var(--white);
      margin-bottom: 10px;
    }

    .modal-text {
      font-size: 0.78rem;
      color: var(--white-dim);
      line-height: 1.6;
      margin-bottom: 24px;
    }

    .modal-btn-gold {
      display: block;
      width: 100%;
      padding: 0.9rem;
      border-radius: 999px;
      background: var(--gold);
      color: var(--white);
      font-size: 0.7rem;
      font-weight: 700;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      border: none;
      cursor: pointer;
      font-family: var(--font-body);
      transition: background var(--transition);
      margin-bottom: 10px;
    }

    .modal-btn-gold:hover {
      border-color: var(--gold);
      color: var(--black);
      transform: translateY(-2px);
    }

    .modal-btn-keep {
      display: block;
      width: 100%;
      padding: 0.9rem;
      border-radius: 999px;
      background: transparent;
      border: 1px solid var(--border);
      color: var(--white);
      font-size: 0.7rem;
      font-weight: 600;
      letter-spacing: 0.1em;
      font-family: var(--font-display);
      font-style: italic;
      cursor: pointer;
      transition: border-color var(--transition);
      margin-bottom: 14px;
    }

    .modal-btn-keep:hover {
      border-color: var(--gold);
      color: var(--black);
      transform: translateY(-2px);
    }

    .modal-btn-discard {
      display: block;
      width: 100%;
      background: none;
      border: none;
      color: var(--gold);
      font-size: 0.75rem;
      font-family: var(--font-display);
      font-style: italic;
      cursor: pointer;
      transition: opacity var(--transition);
    }

    .modal-btn-discard:hover {
      border-color: var(--gold);
      color: var(--black);
      transform: translateY(-2px);
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
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
          stroke-linecap="round" stroke-linejoin="round">
          <line x1="19" y1="12" x2="5" y2="12"></line>
          <polyline points="12 19 5 12 12 5"></polyline>
        </svg>
      </a>
      <div class="page-title-center">Brow Editor</div>
    </div>

    <!-- SUB NAV -->
    <div class="sub-nav fade-2">
      <a href="#" data-tab="left" class="active">Left Brow</a>
      <a href="#" data-tab="both">Both</a>
      <a href="#" data-tab="right">Right Brow</a>
    </div>

    <!-- IMAGE CONTAINER -->
    <div class="image-wrapper fade-3">
      <img src="assets/face-placeholder.png" alt="Face preview" />
      <div class="target-icon"></div>
      <!-- Dimming overlays -->
      <div class="brow-overlay brow-overlay-left"></div>
      <div class="brow-overlay brow-overlay-right"></div>
    </div>

    <!-- TOOL TABS -->
    <div class="tool-tabs fade-4">
      <button class="tool-tab active" data-tool="shape">Shape</button>
      <button class="tool-tab" data-tool="colour">Colour</button>
      <button class="tool-tab" data-tool="thickness">Thickness</button>
      <button class="tool-tab highlight" data-tool="position">Position</button>
    </div>

    <!-- SHAPE PANEL -->
    <div class="tool-panel active" id="panel-shape">
      <div class="shape-options">
        <button class="shape-opt active" data-shape="considered">
          <svg width="28" height="18" viewBox="0 0 28 18" fill="none" stroke-width="2" stroke-linecap="round">
            <path d="M2 14 Q8 4 14 6 Q20 8 26 12" />
          </svg>
          Considered
        </button>
        <button class="shape-opt" data-shape="arch">
          <svg width="28" height="18" viewBox="0 0 28 18" fill="none" stroke-width="2" stroke-linecap="round">
            <path d="M2 14 Q10 2 14 4 Q18 2 26 14" />
          </svg>
          Arch
        </button>
        <button class="shape-opt" data-shape="straight">
          <svg width="28" height="18" viewBox="0 0 28 18" fill="none" stroke-width="2" stroke-linecap="round">
            <path d="M2 10 Q14 8 26 10" />
          </svg>
          Straight
        </button>
        <button class="shape-opt" data-shape="sharp">
          <svg width="28" height="18" viewBox="0 0 28 18" fill="none" stroke-width="2" stroke-linecap="round">
            <path d="M2 14 L12 4 L26 12" />
          </svg>
          Sharp
        </button>
      </div>
      <div class="panel-actions">
        <button class="btn-outline" onclick="resetToolTabs()">Back</button>
        <button class="btn-gold" onclick="openModal()">Apply Shape</button>
      </div>
    </div>

    <!-- COLOUR PANEL -->
    <div class="tool-panel" id="panel-colour">
      <div class="colour-swatches">
        <div class="swatch" data-name="Taupe" style="background:#c4a882;"></div>
        <div class="swatch active" data-name="Black" style="background:#1a1a1a; border-color:var(--gold);"></div>
        <div class="swatch" data-name="Ash Brown" style="background:#6b5040;"></div>
        <div class="swatch" data-name="Warm Brown" style="background:#7a4a30;"></div>
        <div class="swatch" data-name="Chocolate" style="background:#5c3317;"></div>
        <div class="swatch" data-name="Olive" style="background:#8a8060;"></div>
      </div>
      <p class="colour-selected"><span id="selected-colour-name">Black</span> · selected</p>
      <p class="panel-tip">A shade within your natural palette reads most seamlessly.</p>
      <div class="panel-actions">
        <button class="btn-outline" onclick="resetToolTabs()">Back</button>
        <button class="btn-gold" onclick="openModal()">Apply Colour</button>
      </div>
    </div>

    <!-- THICKNESS PANEL -->
    <div class="tool-panel" id="panel-thickness">
      <div class="thickness-options">
        <button class="thickness-opt" data-t="fine">
          <svg width="28" height="20" viewBox="0 0 28 20" fill="none" stroke-width="1.5" stroke-linecap="round">
            <path d="M2 14 Q14 6 26 12" />
          </svg>
          Fine
        </button>
        <button class="thickness-opt active" data-t="medium">
          <svg width="28" height="20" viewBox="0 0 28 20" fill="none" stroke-width="3" stroke-linecap="round">
            <path d="M2 14 Q14 6 26 12" />
          </svg>
          Medium
        </button>
        <button class="thickness-opt" data-t="bold">
          <svg width="28" height="20" viewBox="0 0 28 20" fill="none" stroke-width="5" stroke-linecap="round">
            <path d="M2 14 Q14 6 26 12" />
          </svg>
          Bold
        </button>
      </div>
      <div class="slider-row"><span>Fine</span><span>Full</span></div>
      <input type="range" class="gold-slider" min="0" max="100" value="40" />
      <p class="panel-tip">Your natural brow thickness is a useful point of reference.</p>
      <div class="panel-actions">
        <button class="btn-outline" onclick="resetToolTabs()">Back</button>
        <button class="btn-gold" onclick="openModal()">Apply Thickness</button>
      </div>
    </div>

    <!-- POSITION PANEL -->
    <div class="tool-panel" id="panel-position">
      <div class="position-pad">
        <div class="pad-empty"></div>
        <button class="pad-btn">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <line x1="12" y1="19" x2="12" y2="5" />
            <polyline points="5 12 12 5 19 12" /></svg>
        </button>
        <div class="pad-empty"></div>
        <button class="pad-btn">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <line x1="19" y1="12" x2="5" y2="12" />
            <polyline points="12 19 5 12 12 5" /></svg>
        </button>
        <button class="pad-btn center">
          <svg width="10" height="10" viewBox="0 0 10 10" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="5" cy="5" r="3" /></svg>
        </button>
        <button class="pad-btn">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <line x1="5" y1="12" x2="19" y2="12" />
            <polyline points="12 5 19 12 12 19" /></svg>
        </button>
        <div class="pad-empty"></div>
        <button class="pad-btn">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <line x1="12" y1="5" x2="12" y2="19" />
            <polyline points="19 12 12 19 5 12" /></svg>
        </button>
        <div class="pad-empty"></div>
      </div>
      <p class="panel-tip">Small movements, precise results.</p>
      <div class="panel-actions">
        <button class="btn-outline" onclick="resetToolTabs()">Back</button>
        <button class="btn-gold" onclick="openModal()">Apply Position</button>
      </div>
    </div>

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
    function openModal() {
      document.getElementById('saveModal').classList.add('open');
    }

    function closeModal() {
      document.getElementById('saveModal').classList.remove('open');
    }
    // Brow tabs (Left/Both/Right overlay)
    const imageWrapper = document.querySelector('.image-wrapper');
    document.querySelectorAll('.sub-nav a').forEach(link => {
      link.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelectorAll('.sub-nav a').forEach(a => a.classList.remove('active'));
        this.classList.add('active');
        const tab = this.dataset.tab;
        imageWrapper.classList.remove('show-left', 'show-right');
        if (tab === 'left') imageWrapper.classList.add('show-left');
        if (tab === 'right') imageWrapper.classList.add('show-right');
      });
    });
    // Tool tabs → panel switch
    const panelMap = {
      shape: 'panel-shape',
      colour: 'panel-colour',
      thickness: 'panel-thickness',
      position: 'panel-position'
    };
    document.querySelectorAll('.tool-tab').forEach(tab => {
      tab.addEventListener('click', function() {
        document.querySelectorAll('.tool-tab').forEach(t => t.classList.remove('active'));
        this.classList.add('active');
        const key = this.dataset.tool;
        document.querySelectorAll('.tool-panel').forEach(p => p.classList.remove('active'));
        const panel = document.getElementById(panelMap[key]);
        if (panel) panel.classList.add('active');
      });
    });

    function resetToolTabs() {
      document.querySelectorAll('.tool-tab').forEach(t => t.classList.remove('active'));
      document.querySelectorAll('.tool-panel').forEach(p => p.classList.remove('active'));
    }
    // Shape options
    document.querySelectorAll('.shape-opt').forEach(btn => {
      btn.addEventListener('click', function() {
        document.querySelectorAll('.shape-opt').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
      });
    });
    // Colour swatches
    document.querySelectorAll('.swatch').forEach(sw => {
      sw.addEventListener('click', function() {
        document.querySelectorAll('.swatch').forEach(s => s.classList.remove('active'));
        this.classList.add('active');
        document.getElementById('selected-colour-name').textContent = this.dataset.name;
      });
    });
    // Thickness options
    document.querySelectorAll('.thickness-opt').forEach(btn => {
      btn.addEventListener('click', function() {
        document.querySelectorAll('.thickness-opt').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
      });
    });
  </script>

</body>

</html>