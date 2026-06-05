<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tone Recommendation — Royals Arch Brow</title>
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

    /* ====== TONE CARD ====== */
    .tone-card {
      background: #161610;
      border: 1px solid var(--gold);
      border-radius: var(--radius);
      padding: 2rem 1.5rem;
      text-align: center;
    }

    .circle-wrap {
      display: flex;
      justify-content: center;
      margin-bottom: 16px;
    }

    .tone-circle {
      position: relative;
      width: 140px;
      height: 140px;
      border-radius: 50%;
      background: #b67a3f;
      box-shadow: 0 0 60px rgba(182, 122, 63, 0.25);
      border: 1px solid rgba(201, 168, 76, 0.4);
    }

    .check-badge {
      position: absolute;
      bottom: -4px;
      right: -4px;
      width: 36px;
      height: 36px;
      border-radius: 50%;
      background: var(--gold);
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 8px 24px rgba(0,0,0,0.5);
    }
    .check-badge svg {
      width: 18px;
      height: 18px;
      stroke: #0a0a0a;
      stroke-width: 3;
      fill: none;
    }

    .tone-name {
      font-family: var(--font-display);
      font-style: italic;
      font-weight: 400;
      font-size: 2.0rem;
      color: var(--white);
      margin-bottom: 6px;
    }

    .tone-desc {
      font-family: var(--font-body);
      font-weight: 300;
      font-size: 0.85rem;
      color: var(--gold);
      max-width: 320px;
      margin: 0 auto 28px;
      line-height: 1.5;
      opacity: 0.75;
    }

    .rec-title {
      font-size: 0.65rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: var(--gold);
      text-align: center;
      margin-bottom: 16px;
      font-weight: 400;
    }

    .swatch-row {
      display: flex;
      justify-content: center;
      gap: 18px;
      margin-bottom: 32px;
    }

    .swatch-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 6px;
    }

    .swatch {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      border: 1px solid rgba(255,255,255,0.08);
      transition: transform var(--transition);
      position: relative;
    }
    .swatch:hover { transform: scale(1.08); }

    .swatch.best {
      background: #1a1206;
      border-color: var(--gold);
      box-shadow: 0 0 20px rgba(201, 168, 76, 0.12);
    }
    .swatch.close1 { background: #3f2114; }
    .swatch.close2 { background: #7a4a2e; }
    .swatch.avoid { background: #d9bca2; }

    .swatch-label {
      font-size: 0.6rem;
      text-transform: uppercase;
      letter-spacing: 0.06em;
      color: var(--gold);
      font-weight: 400;
    }

    /* ====== SERVER MESSAGE ====== */
    .server-message {
      text-align: center;
      font-size: 0.8rem;
      margin-top: 0.5rem;
      min-height: 1.2em;
    }
    .server-message.error { color: #e05c5c; }
    .server-message.success { color: var(--gold-light); }

    /* ====== BUTTONS ====== */
    .actions {
      display: grid;
      gap: 0.75rem;
    }

    .btn-primary {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 100%;
      padding: 0.85rem 1.2rem;
      border-radius: 999px;
      border: 1px solid var(--border);
      background: transparent;
      color: var(--white);
      font-size: 0.75rem;
      font-weight: 600;
      letter-spacing: 0.08em;
      text-decoration: none;
      transition: all var(--transition);
      cursor: pointer;
      font-family: var(--font-body);
    }

    .btn-primary:hover {
      border-color: var(--gold);
      color: var(--gold);
    }
    .btn:disabled { opacity: 0.6; cursor: not-allowed; }

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
      .tone-circle { width: 120px; height: 120px; }
      .tone-name { font-size: 1.6rem; }
      .swatch { width: 38px; height: 38px; }
      .swatch-row { gap: 14px; }
      .back-btn { width: 38px; height: 38px; }
      .page-logo { width: 38px; height: 38px; }
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
      <div class="page-title-center">Tone Recommendation</div>
    </div>

    <!-- CONTENT HEADER -->
    <div class="fade-2">
      <div class="page-label">Tone Recommendation</div>
      <div class="page-title">Your tone, matched.</div>
    </div>

    <!-- TONE CARD -->
    <div class="tone-card fade-3">
      <div class="circle-wrap">
        <div class="tone-circle" id="tone-circle-color">
          <div class="check-badge">
            <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12" stroke="currentColor" stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
        </div>
      </div>

      <div class="tone-name" id="tone-name-display">Medium Warm</div>
      <div class="tone-desc" id="tone-desc-display">
        Recommended brow colour update to match your tone —<br />
        Montserrat 300 — gold 75%
      </div>

      <div class="rec-title">Recommended</div>
      <div class="swatch-row">
        <div class="swatch-item">
          <div class="swatch best" id="swatch-best"></div>
          <span class="swatch-label">Best</span>
        </div>
        <div class="swatch-item">
          <div class="swatch close1" id="swatch-close1"></div>
          <span class="swatch-label">Close</span>
        </div>
        <div class="swatch-item">
          <div class="swatch close2" id="swatch-close2"></div>
          <span class="swatch-label">Close</span>
        </div>
        <div class="swatch-item">
          <div class="swatch avoid" id="swatch-avoid"></div>
          <span class="swatch-label">Avoid</span>
        </div>
      </div>
    </div>

    <!-- Server Message -->
    <div id="server-message" class="server-message" style="display:none;"></div>

    <!-- ACTIONS -->
    <div class="actions fade-4">
      <button class="btn-primary" id="confirm-tone-btn" onclick="confirmTone()">
        <span id="btn-text">Confirm this tone →</span>
        <span id="btn-spinner" style="display:none;">⏳</span>
      </button>
    </div>

  </main>

  <script>
    // Tone data mapping
    const toneDataMap = {
      'fair': {
        label: 'Fair',
        color: '#f5deb3',
        desc: 'Soft, delicate undertones —<br />light taupe and beige recommended.',
        best: '#d4b896',
        close1: '#c9a882',
        close2: '#b8956e',
        avoid: '#3d1c0a'
      },
      'light': {
        label: 'Light',
        color: '#d4a574',
        desc: 'Warm peach undertones —<br />golden brown shades work best.',
        best: '#c07845',
        close1: '#b0683a',
        close2: '#a05830',
        avoid: '#1a0a00'
      },
      'medium': {
        label: 'Medium',
        color: '#c07845',
        desc: 'Balanced warm tone —<br />rich browns with golden hints.',
        best: '#8b5a3c',
        close1: '#7a4a2e',
        close2: '#6b3a1f',
        avoid: '#f5deb3'
      },
      'medium-warm': {
        label: 'Medium Warm',
        color: '#b67a3f',
        desc: 'Recommended brow colour update to match your tone —<br />Montserrat 300 — gold 75%',
        best: '#1a1206',
        close1: '#3f2114',
        close2: '#7a4a2e',
        avoid: '#d9bca2'
      },
      'deep': {
        label: 'Deep',
        color: '#6b3a1f',
        desc: 'Rich melanin tones —<br />deep espresso and dark chocolate.',
        best: '#3d1c0a',
        close1: '#2a1005',
        close2: '#1a0800',
        avoid: '#f5deb3'
      },
      'rich': {
        label: 'Rich',
        color: '#3d1c0a',
        desc: 'Deepest warm tones —<br />bold, dark pigments recommended.',
        best: '#1a0800',
        close1: '#2a1005',
        close2: '#3d1c0a',
        avoid: '#f5deb3'
      }
    };

    function getAuthToken() {
      return localStorage.getItem('archAccessToken') || '';
    }

    function updateToneDisplay() {
      const savedTone = localStorage.getItem('archSkinTone') || 'medium-warm';
      const toneData = toneDataMap[savedTone] || toneDataMap['medium-warm'];

      // Update tone name
      const nameEl = document.getElementById('tone-name-display');
      if (nameEl) nameEl.textContent = toneData.label;

      // Update description
      const descEl = document.getElementById('tone-desc-display');
      if (descEl) descEl.innerHTML = toneData.desc;

      // Update circle color
      const circleEl = document.getElementById('tone-circle-color');
      if (circleEl) circleEl.style.background = toneData.color;

      // Update swatches
      const bestEl = document.getElementById('swatch-best');
      const close1El = document.getElementById('swatch-close1');
      const close2El = document.getElementById('swatch-close2');
      const avoidEl = document.getElementById('swatch-avoid');

      if (bestEl) bestEl.style.background = toneData.best;
      if (close1El) close1El.style.background = toneData.close1;
      if (close2El) close2El.style.background = toneData.close2;
      if (avoidEl) avoidEl.style.background = toneData.avoid;
    }

    async function confirmTone() {
      const savedTone = localStorage.getItem('archSkinTone') || 'medium-warm';
      const toneData = toneDataMap[savedTone] || toneDataMap['medium-warm'];
      
      // Save the confirmed tone label
      localStorage.setItem('archConfirmedTone', toneData.label);

      // Redirect to style page
      window.location.href = 'onboarding-style.php';
    }

    // Initialize on page load
    document.addEventListener('DOMContentLoaded', function() {
      updateToneDisplay();
    });
  </script>

</body>
</html>