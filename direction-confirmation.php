<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Direction — Royals Arch Brow</title>
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

    /* ====== GRAPHIC ====== */
    .graphic-wrap {
      display: flex;
      justify-content: center;
      margin: 0.5rem 0 1rem;
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

    /* ====== DIVIDER ====== */
    .gold-divider {
      width: 80px;
      height: 1px;
      background: var(--gold);
      margin: 0 auto 18px;
    }

    /* ====== CONTENT ====== */
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

    /* ====== BULLET LIST ====== */
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

    /* ====== SMALL DIVIDER ====== */
    .divider-small {
      width: 60px;
      height: 1px;
      background: var(--gold);
      margin: 0 auto 32px;
    }

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
    }

    .btn-primary:hover {
      border-color: var(--gold);
      color: var(--gold);
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
      .heading { font-size: 1.8rem; }
      .arch-svg { width: 130px; height: 110px; }
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
      <div class="page-title-center">Direction</div>
    </div>

    <!-- CONTENT HEADER -->
    <div class="fade-2">
      <div class="page-label">Style Direction</div>
      <div class="page-title">Refined & natural</div>
    </div>
 
    <!-- GRAPHIC -->
    <div class="graphic-wrap fade-3">
      <svg class="arch-svg" viewBox="0 0 160 80" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M15 60 Q40 30, 75 40" class="arch-path" />
        <path d="M85 40 Q130 30, 145 60" class="arch-path" />
      </svg>
    </div>

    <!-- DIVIDER -->
    <div class="gold-divider"></div>

    <!-- CONTENT -->
    <div class="fade-4">
      <h1 class="heading">Refined & natural</h1>
      <p class="sub-heading">
        This shapes your recommendations<br />
        from the start.
      </p>

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
    </div>

    <!-- DIVIDER -->
    <div class="divider-small"></div>

    <!-- ACTIONS -->
    <div class="actions fade-5">
      <a href="onboarding-complete.php" class="btn-primary">This is my direction →</a>
      <a href="tone-recommendation.php" class="btn-link">Choose a different direction</a>
    </div>

  </main>

</body>
</html>