<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Direction — Arch</title>
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
      --white-dim: rgba(245, 240, 232, 0.65);
      --border: rgba(201, 168, 76, 0.25);
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
      margin-bottom: 4px;
      padding: 0 4px;
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

    /* ── Graphic: Arch with C badge ── */
    .graphic-wrap {
      display: flex;
      justify-content: center;
      margin: 12px 0 20px;
      position: relative;
    }

    .arch-svg {
      width: 160px;
      height: 130px;
    }

    .arch-path {
      fill: none;
      stroke: var(--gold);
      stroke-width: 1.8;
      stroke-linecap: round;
    }

    .badge-circle {
      fill: var(--black);
      stroke: var(--gold);
      stroke-width: 2;
    }

    .badge-text {
      fill: var(--gold);
      font-family: var(--font-display);
      font-size: 32px;
      font-weight: 500;
      text-anchor: middle;
      dominant-baseline: central;
    }

    /* ── Gold divider ── */
    .gold-divider {
      width: 80px;
      height: 1px;
      background: var(--gold);
      margin: 0 auto 18px;
    }

    /* ── Heading & Sub ── */
    .heading {
      font-family: var(--font-display);
      font-style: italic;
      font-weight: 400;
      font-size: 2.2rem;
      text-align: center;
      color: var(--white);
      margin-bottom: 6px;
      line-height: 1.1;
    }

    .sub-heading {
      font-family: var(--font-body);
      font-weight: 300;
      font-size: 0.9rem;
      text-align: center;
      color: var(--gold);
      margin: 0 auto 28px;
      line-height: 1.5;
      opacity: 0.8;
      max-width: 280px;
    }

    /* ── Bullet list ── */
    .list-group {
      display: flex;
      flex-direction: column;
      gap: 18px;
      margin-bottom: 36px;
      padding: 0 6px;
    }

    .list-item {
      display: flex;
      align-items: flex-start;
      gap: 14px;
    }

    .bullet {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background: var(--gold);
      flex-shrink: 0;
      margin-top: 5px;
    }

    .list-text {
      font-size: 0.9rem;
      color: var(--white-dim);
      line-height: 1.5;
      font-weight: 300;
    }

    /* ── Small gold divider near button ── */
    .divider-small {
      width: 60px;
      height: 1px;
      background: var(--gold);
      margin: 0 auto 32px;
    }

    /* ── Buttons ── */
    .btn-confirm {
      display: block;
      width: 100%;
      padding: 1.1rem;
      border-radius: var(--radius-pill);
      border: 1px solid var(--border);
      background: var(--btn-dark);
      color: var(--white);
      font-size: 0.7rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      font-weight: 600;
      cursor: pointer;
      transition: all var(--transition);
      font-family: var(--font-body);
      text-decoration: none;
      text-align: center;
      margin-bottom: 16px;
    }
    .btn-confirm:hover {
      border-color: var(--gold);
      color: var(--gold-light);
      background: rgba(35, 35, 35, 0.9);
      transform: translateY(-2px);
      box-shadow: 0 8px 30px rgba(201, 168, 76, 0.15);
    }

    .btn-link {
      display: block;
      text-align: center;
      color: var(--gold);
      font-size: 0.85rem;
      text-decoration: none;
      transition: opacity var(--transition);
      font-weight: 300;
    }
    .btn-link:hover {
      opacity: 0.7;
    }

    /* ── Responsive ── */
    @media (max-width: 540px) {
      .page { padding: 24px 20px 28px; border-radius: 36px; }
      .heading { font-size: 1.8rem; }
      .logo-center img { width: 40px; height: 40px; }
      .back-btn, .placeholder { width: 40px; height: 40px; }
      .arch-svg { width: 130px; height: 110px; }
      .badge-text { font-size: 26px; }
    }

    @media (max-width: 420px) {
      .page { padding: 20px 14px 24px; border-radius: 28px; }
      .heading { font-size: 1.5rem; }
      .arch-svg { width: 110px; height: 90px; }
      .badge-text { font-size: 22px; }
      .logo-center img { width: 36px; height: 36px; }
      .back-btn, .placeholder { width: 36px; height: 36px; }
      .list-text { font-size: 0.8rem; }
    }
  </style>
</head>
<body>

  <div class="page">

    <!-- TOP BAR -->
    <div class="top-bar">
      <!-- Back Button (Left) -->
      <button class="back-btn" onclick="window.location.href='tone-recommendation.php'">
        <svg viewBox="0 0 24 24"><path d="M19 12H5M12 19l-7-7 7-7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </button>
      
      <!-- Logo (Center) -->
      <div class="logo-center">
        <img src="assets/logo.png" alt="Arch Logo" />
      </div>

      <!-- Placeholder for symmetry (Right) -->
      <div class="placeholder"></div>
    </div>

    <!-- GRAPHIC: Arch + Badge -->
    <div class="graphic-wrap">
      <svg class="arch-svg" viewBox="0 0 160 80" fill="none" xmlns="http://www.w3.org/2000/svg">
        
        <!-- Left Arch -->
        <path d="M15 60 Q40 30, 75 40" class="arch-path" />
        <!-- Right Arch -->
        <path d="M85 40 Q130 30, 145 60" class="arch-path" />
      </svg>
    </div>

    <!-- GOLD DIVIDER -->
    <div class="gold-divider"></div>

    <!-- HEADING & SUB -->
    <h1 class="heading">Refined & natural</h1>
    <p class="sub-heading">
      This shapes your recommendations<br />
      from the start.
    </p>

    <!-- BULLET LIST -->
    <div class="list-group">
      <div class="list-item">
        <div class="bullet"></div>
        <span class="list-text">Soft arch styles presented first</span>
      </div>
      <div class="list-item">
        <div class="bullet"></div>
        <span class="list-text">Colours that enhance rather than define</span>
      </div>
      <div class="list-item">
        <div class="bullet"></div>
        <span class="list-text">Understated intensity recommended by default</span>
      </div>
    </div>

    <!-- SMALL DIVIDER -->
    <div class="divider-small"></div>

    <!-- BUTTONS -->
    <a href="direction-confirmation.php" class="btn-confirm">
      This is my direction →
    </a>
    
    <a href="tone-recommendation.php" class="btn-link">
      Choose a different direction
    </a>

  </div>

</body>
</html>