<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tone Recommendation — Arch</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    :root {
      --gold: #c9a84c;
      --gold-light: #d4b96a;
      --gold-dark: #8a6f2e;
      --black: #0a0a0a;
      --white: #f5f0e8;
      --white-dim: rgba(245, 240, 232, 0.55);
      --border: rgba(201, 168, 76, 0.20);
      --btn-dark: #232323;
      --radius-pill: 50px;
      --transition: 0.25s ease;
      --font-display: 'Cormorant Garamond', serif;
      --font-body: 'Montserrat', sans-serif;
    }

    body {
      background: var(--black);
      color: var(--white);
      font-family: var(--font-body);
      font-weight: 300;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 24px 16px;
      background-image: radial-gradient(ellipse at 50% 20%, rgba(201, 168, 76, 0.03) 0%, transparent 70%);
    }

    .page {
      width: 100%;
      max-width: 560px;
      background: rgba(255, 255, 255, 0.015);
      border: 1px solid var(--border);
      border-radius: 48px;
      padding: 32px 28px 36px;
      backdrop-filter: blur(4px);
      box-shadow: 0 24px 80px rgba(0, 0, 0, 0.8);
      position: relative;
    }

    /* ── Top bar ── */
    .top-bar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 6px;
      padding: 0 6px;
    }

    .back-btn {
      width: 48px;
      height: 48px;
      border-radius: 50%;
      border: 1px solid var(--gold);
      background: transparent;
      color: var(--gold);
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: all var(--transition);
      flex-shrink: 0;
    }
    .back-btn:hover {
      background: rgba(201, 168, 76, 0.08);
      transform: scale(1.02);
    }
    .back-btn svg {
      width: 22px;
      height: 22px;
      stroke: currentColor;
      stroke-width: 2;
      fill: none;
    }

    /* ── Logo (replaces CG text) ── */
    .logo-center {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }
    .logo-center img {
      width: 48px;
      height: 48px;
      object-fit: contain;
      display: block;
    }

    .placeholder {
      width: 48px;
      height: 48px;
      visibility: hidden;
      flex-shrink: 0;
    }

    /* ── Gold divider ── */
    .gold-divider {
      width: 80px;
      height: 1px;
      background: var(--gold);
      margin: 8px auto 28px;
    }

    /* ── Main circle ── */
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

    /* ── Text ── */
    .tone-name {
      font-family: var(--font-display);
      font-style: italic;
      font-weight: 400;
      font-size: 2.0rem;
      text-align: center;
      color: var(--white);
      margin-bottom: 6px;
    }

    .tone-desc {
      font-family: var(--font-body);
      font-weight: 300;
      font-size: 0.85rem;
      text-align: center;
      color: var(--gold);
      max-width: 320px;
      margin: 0 auto 28px;
      line-height: 1.5;
      opacity: 0.75;
    }

    /* ── Recommended section ── */
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

    /* ── Button ── */
    .btn-confirm {
      display: block;
      width: 100%;
      padding: 1.1rem;
      border-radius: var(--radius-pill);
      border: 1px solid var(--border);
      background: var(--btn-dark);
      color: var(--white);
      font-size: 0.75rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      font-weight: 600;
      cursor: pointer;
      transition: all var(--transition);
      font-family: var(--font-body);
      text-decoration: none;
      text-align: center;
    }
    .btn-confirm:hover {
      border-color: var(--gold);
      color: var(--gold-light);
      background: rgba(35, 35, 35, 0.9);
      transform: translateY(-2px);
      box-shadow: 0 8px 30px rgba(201, 168, 76, 0.15);
    }
    .btn-confirm span {
      margin-right: 8px;
    }

    /* ── Responsive ── */
    @media (max-width: 540px) {
      .page { padding: 24px 20px 28px; border-radius: 36px; }
      .tone-circle { width: 120px; height: 120px; }
      .tone-name { font-size: 1.6rem; }
      .swatch { width: 38px; height: 38px; }
      .swatch-row { gap: 14px; }
      .logo-center img { width: 40px; height: 40px; }
      .back-btn, .placeholder { width: 40px; height: 40px; }
    }

    @media (max-width: 420px) {
      .page { padding: 20px 14px 24px; border-radius: 28px; }
      .tone-circle { width: 100px; height: 100px; }
      .check-badge { width: 30px; height: 30px; bottom: -2px; right: -2px; }
      .check-badge svg { width: 14px; height: 14px; }
      .swatch { width: 32px; height: 32px; }
      .swatch-row { gap: 10px; }
      .tone-desc { font-size: 0.75rem; }
      .logo-center img { width: 36px; height: 36px; }
      .back-btn, .placeholder { width: 36px; height: 36px; }
    }
  </style>
</head>
<body>

  <div class="page">

    <!-- TOP BAR -->
    <div class="top-bar">
      <button class="back-btn" onclick="window.location.href='onboarding-profile.php'">
        <svg viewBox="0 0 24 24"><path d="M19 12H5M12 19l-7-7 7-7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </button>
      
      <!-- LOGO (replaces "CG") -->
      <div class="logo-center">
        <img src="assets/logo.png" alt="Arch Logo" />
      </div>

      <div class="placeholder"></div>
    </div>

    <!-- GOLD DIVIDER -->
    <div class="gold-divider"></div>

    <!-- MAIN CIRCLE -->
    <div class="circle-wrap">
      <div class="tone-circle">
        <div class="check-badge">
          <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12" stroke="currentColor" stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
      </div>
    </div>

    <!-- TONE NAME & DESCRIPTION -->
    <div class="tone-name">Medium warm</div>
    <div class="tone-desc">
      Recommended brow color update to<br />
      match to match your tone —<br />
      Montserrat 300 — gold 75%
    </div>

    <!-- RECOMMENDED SWATCHES -->
    <div class="rec-title">RECOMMENDED</div>
    <div class="swatch-row">
      <div class="swatch-item">
        <div class="swatch best"></div>
        <span class="swatch-label">Best</span>
      </div>
      <div class="swatch-item">
        <div class="swatch close1"></div>
        <span class="swatch-label">Close</span>
      </div>
      <div class="swatch-item">
        <div class="swatch close2"></div>
        <span class="swatch-label">Close</span>
      </div>
      <div class="swatch-item">
        <div class="swatch avoid"></div>
        <span class="swatch-label">Avoid</span>
      </div>
    </div>

    <!-- CONFIRM BUTTON -->
    <a href="direction-confirmation.php" class="btn-confirm">
      <span>Confirm this tone</span> →
    </a>

  </div>

</body>
</html>