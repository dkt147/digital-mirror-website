<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tracing Guide — Royals Arch Brow</title>
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
      --gold: #C9A84C;
      --gold-light: #C9A84C;
      --gold-dark: #C9A84C;
      --gold-muted: rgba(201, 168, 76, 0.12);
      --white: #f5f0e8;
      --white-dim: rgba(245, 240, 232, 0.55);
      --white-faint: rgba(245, 240, 232, 0.15);
      --border: rgba(201, 168, 76, 0.18);
      --border-hover: rgba(201, 168, 76, 0.45);
      --font-display: 'Cormorant Garamond', serif;
      --font-body: 'Montserrat', sans-serif;
      --radius: 18px;
      --radius-sm: 10px;
      --transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }
    html { font-size: 16px; scroll-behavior: smooth; }
    body {
      background: var(--black);
      color: var(--white);
      font-family: var(--font-body);
      font-weight: 600;
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

    /* ====== GUIDE CARD ====== */
    .guide-card {
      background: #161610;
      border: 1px solid var(--gold);
      border-radius: var(--radius);
      padding: 1.75rem 1.5rem;
      text-align: center;
    }

    .guide-visual {
      position: relative;
      width: 100%;
      height: 200px;
      border-radius: var(--radius);
      border: 1px solid var(--border);
      background: rgba(255,255,255,0.02);
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 1.5rem;
      overflow: hidden;
    }

    .face-outline {
      position: relative;
      width: 130px;
      height: 190px;
      border: 1px solid rgba(201,168,76,0.3);
      border-radius: 50% 50% 40% 40%;
    }

    .face-outline::before {
      content: '';
      position: absolute;
      top: 22%;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 24px;
      border: 1px solid var(--gold);
      border-radius: 999px 999px 40px 40px;
      border-bottom: none;
    }

    .center-dot {
      position: absolute;
      top: 22%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 12px;
      height: 12px;
      background: var(--gold);
      border-radius: 50%;
      box-shadow: 0 0 20px rgba(201,168,76,0.3);
    }

    .headline {
      font-family: var(--font-display);
      font-style: italic;
      font-size: 2rem;
      line-height: 1.05;
      color: var(--white);
      margin-bottom: 0.5rem;
    }

    .subtitle {
      color: var(--white-dim);
      font-size: 0.9rem;
      line-height: 1.6;
      margin-bottom: 1.5rem;
    }

    .steps {
      display: flex;
      flex-direction: column;
      gap: 12px;
      margin-bottom: 1.5rem;
      text-align: left;
      max-width: 320px;
      margin-left: auto;
      margin-right: auto;
      width: 100%;
    }

    .step {
      display: flex;
      align-items: center;
      gap: 14px;
    }

    .step-number {
      width: 28px;
      height: 28px;
      border-radius: 50%;
      border: 1px solid var(--gold);
      color: var(--gold);
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 600;
      font-size: 0.8rem;
      background: rgba(201,168,76,0.08);
    }

    .step-text {
      color: var(--white-dim);
      font-size: 0.9rem;
    }

    .small-note {
      color: rgba(255,255,255,0.4);
      font-size: 0.8rem;
      margin-bottom: 1.5rem;
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

    .watch-link {
      display: block;
      text-align: center;
      color: var(--gold);
      font-size: 0.8rem;
      text-decoration: none;
      transition: opacity var(--transition);
    }

    .watch-link:hover {
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
      .guide-card { padding: 1.25rem; }
      .guide-visual { height: 160px; }
      .face-outline { width: 100px; height: 150px; }
      .face-outline::before { width: 60px; height: 18px; }
      .headline { font-size: 1.6rem; }
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
      <div class="page-title-center">Tracing Guide</div>
    </div>

    <!-- CONTENT HEADER -->
    <div class="fade-2">
      <div class="page-label">Guide</div>
      <div class="page-title">Draw the shape you want to keep.</div>
    </div>

    <!-- GUIDE CARD -->
    <div class="guide-card fade-3">
      <div class="guide-visual">
        <div class="face-outline">
          <span class="center-dot"></span>
        </div>
      </div>

      <h1 class="headline">Draw the shape you want to keep.</h1>
      <p class="subtitle">Trace your ideal brow. Share the guide with your brow artist — they'll work within your line.</p>

      <div class="steps">
        <div class="step">
          <div class="step-number">1</div>
          <div class="step-text">Frame your face in the guide</div>
        </div>
        <div class="step">
          <div class="step-number">2</div>
          <div class="step-text">Trace each brow with your fingertip</div>
        </div>
        <div class="step">
          <div class="step-number">3</div>
          <div class="step-text">Save and share with your artist</div>
        </div>
      </div>

      <p class="small-note">Draw freely. Every line can be refined as you go.</p>
    </div>

    <!-- ACTIONS -->
    <div class="actions fade-4">
      <a class="btn-primary" href="guide-complete.php" style="background: var(--gold); border-color: var(--gold-dark); color: var(--black);">Begin drawing</a>
      <a class="watch-link" href="watch-guide.php">Watch how it works</a>
    </div>

  </main>

</body>
</html>