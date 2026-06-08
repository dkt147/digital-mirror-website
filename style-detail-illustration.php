<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Soft arch — Royals Arch Brow</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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

    /* ====== PAGE TOPBAR ====== */
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

    /* ====== LAYOUT — matches your-look exactly ====== */
    .main {
      max-width: 100%;
      margin: 0 auto;
      padding: 0 3rem 2.5rem;
      display: flex;
      flex-direction: column;
      gap: 1.75rem;
    }

    /* ====== HERO ====== */
    .hero-title {
      font-family: var(--font-display);
      font-style: italic;
      font-size: 2.6rem;
      text-align: center;
      color: var(--white);
      margin-bottom: 8px;
    }

    .divider {
      width: 40px;
      height: 1px;
      background: var(--gold);
      margin: 0 auto 18px;
      opacity: 0.5;
    }

    .hero-sub {
      text-align: center;
      color: var(--gold);
      font-family: var(--font-body);
      font-size: 0.9rem;
      letter-spacing: 0.04em;
      margin-bottom: 24px;
    }

    /* ====== IMAGE CARD ====== */
    .image-card-wrapper {
      position: relative;
      width: 180px;
      height: 180px;
      border-radius: 40px;
      padding: 4px;
      background: linear-gradient(135deg, var(--gold-dark), var(--gold-light));
      box-shadow: 0 0 40px rgba(201, 168, 76, 0.12);
      display: grid;
      place-items: center;
      margin: 0 auto;
      flex-shrink: 0;
    }

    .image-card {
      width: 100%;
      height: 100%;
      border-radius: 32px;
      background: rgba(10,10,10,0.7);
      backdrop-filter: blur(4px);
      border: 1px solid rgba(255,255,255,0.08);
      overflow: hidden;
      position: relative;
    }

    .image-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 32px;
    }

    .image-card svg {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      border-radius: 32px;
    }

    /* ====== PLACEHOLDER CARD ====== */
    .placeholder-card {
      background: #161610;
      border-radius: var(--radius);
      padding: 2.5rem 1.5rem;
      text-align: center;
      color: var(--white);
      font-size: 0.9rem;
      border: 1px solid var(--border);
    }

    /* ====== INFO NOTE ====== */
    .info-note {
      text-align: center;
      color: var(--white-dim);
      font-size: 0.9rem;
      line-height: 1.6;
    }

    /* ====== CONTENT TEXT ====== */
    .content-text {
      text-align: center;
    }

    .content-text .section-title {
      font-family: var(--font-display);
      font-style: italic;
      font-size: 1.5rem;
      font-weight: 400;
      color: var(--white);
      margin-bottom: 0.5rem;
    }

    .content-text p {
      color: var(--white-dim);
      font-size: 0.9rem;
      font-weight: 400;
      line-height: 1.7;
    }

    /* ====== BADGE ROW ====== */
    .badge-row {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 12px;
    }

    .badge-label {
      color: var(--white-dim);
      font-size: 0.8rem;
      font-style: italic;
      letter-spacing: 0.04em;
      font-weight: 400;
    }

    /* ====== BUTTONS ====== */
    .actions {
      display: grid;
      gap: 0.75rem;
    }

    .btn-primary {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      padding: 0.85rem 1.2rem;
      border-radius: 999px;
      border: none;
      background: var(--gold);
      color: var(--black);
      font-size: 0.75rem;
      font-weight: 700;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      text-decoration: none;
      transition: all var(--transition);
      cursor: pointer;
      font-family: var(--font-body);
    }

    .btn-primary:hover {
      background: var(--gold-light);
      transform: translateY(-1px);
    }

    .btn-secondary {
      display: flex;
      justify-content: center;
      align-items: center;
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

    .btn-secondary:hover {
      border-color: var(--gold);
      color: var(--gold);
    }

    .bottom-links {
      display: flex;
      justify-content: space-between;
      padding: 0 6px;
      font-size: 0.8rem;
      color: var(--gold);
      font-weight: 400;
    }

    .bottom-links a {
      color: inherit;
      text-decoration: none;
      transition: opacity 0.2s;
    }

    .bottom-links a:hover {
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
      .hero-title { font-size: 2rem; }
      .image-card-wrapper { width: 160px; height: 160px; }
      .placeholder-card { padding: 1.5rem; }
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

    <!-- PAGE TOPBAR -->
    <div class="page-topbar fade-1">
      <a href="javascript:history.back()" class="back-btn" aria-label="Go back">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="19" y1="12" x2="5" y2="12"></line>
          <polyline points="12 19 5 12 12 5"></polyline>
        </svg>
      </a>
      <div class="page-title-center">Soft Arch</div>
    </div>

    <!-- HERO -->
    <div class="fade-2">
      <div class="hero-title">Soft arch.</div>
      <div class="divider"></div>
      <div class="hero-sub">Style Detail · Considered · Effortless</div>
    </div>

    <!-- IMAGE CARD -->
    <div class="image-card-wrapper fade-3">
      <div class="image-card">
        <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=400&q=80" alt="face" />
        <svg viewBox="0 0 100 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
          <g stroke="rgba(245,240,232,0.85)" stroke-width="0.8" fill="none">
            <path d="M20 28 C35 18, 65 18, 80 28" stroke-opacity="0.95"/>
            <path d="M30 38 L34 34" stroke-opacity="0.95"/>
            <path d="M70 38 L66 34" stroke-opacity="0.95"/>
            <circle cx="50" cy="24" r="1.6" fill="rgba(245,240,232,0.9)"/>
            <path d="M20 70 C35 82, 65 82, 80 70" stroke-opacity="0.8"/>
          </g>
        </svg>
      </div>
    </div>

    <!-- CONTENT TEXT -->
    <div class="content-text fade-3">
      <div class="section-title">Your face carries most of its width at the cheekbones, tapering at the jaw.</div>
      <p style="margin-top:0.5rem;">Why this shape suits your face.</p>
      <p>A soft arch placed fractionally above the brow bone's peak draws the eye upward — creating lift without effort.</p>
    </div>

    <!-- BADGE ROW -->
    <div class="badge-row fade-4">
      <span class="badge-label">Structured. Effortless</span>
    </div>

    <!-- PLACEHOLDER CARD -->
    <div class="placeholder-card fade-4">Leave As Placeholder.</div>

    <div class="info-note fade-4">Saved looks can be shared with your artist anytime.</div>

    <!-- ACTIONS -->
    <div class="actions fade-5">
      <button class="btn-primary" onclick="tryThisOn()">Try this on</button>
      <button class="btn-secondary" onclick="tryDifferent()">Try a different recommendation</button>
    </div>

    <!-- BOTTOM LINKS -->
    <div class="bottom-links fade-5">
      <a href="tracing-guide.php">Shop matching products</a>
      <a href="index.php">Return to home</a>
    </div>

  </main>

  <script>
    function tryThisOn() {
      alert('Try this on — opening preview');
    }
    function tryDifferent() {
      alert('Loading different recommendation');
    }
  </script>

</body>
</html>