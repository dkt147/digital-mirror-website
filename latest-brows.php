<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Latest on brows — Royals Arch Brow</title>
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

    /* ====== RESET & BASE ====== */
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

    /* ====== NAVBAR (UNTOUCHED) ====== */
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

    /* ====== CENTER MAIN CONTENT (UPDATED) ====== */
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

    /* ====== ARTICLE CARDS (Figma style) ====== */
    .article-card {
      display: flex;
      gap: 16px;
      align-items: center;
      padding: 16px 18px;
      border-radius: var(--radius-sm);
      background: #161610;
      border: 1px solid #333; /* Solid gold border */
      cursor: pointer;
      transition: all var(--transition);
      margin-bottom: 12px;
    }

    .article-card:hover {
      border-color: var(--gold);
      transform: translateY(-1px);
    }

    .article-icon {
      width: 56px;
      height: 56px;
      border-radius: var(--radius-sm);
      border: 1.5px solid var(--gold);
      display: grid;
      place-items: center;
      background: #1B1400;
      color: var(--gold);
      flex-shrink: 0;
    }

    .article-body {
      flex: 1;
    }

    .article-title {
      font-family: var(--font-display);
      font-size: 1.15rem;
      margin-bottom: 4px;
      color: var(--white);
      line-height: 1.2;
    }

    .article-meta {
      font-size: 0.8rem;
      color: var(--white-dim);
      font-weight: 500;
    }

    /* ====== UPCOMING SESSIONS (Figma style) ====== */
    .upcoming-card {
      border-radius: var(--radius-sm);
      padding: 24px 22px;
      background: #1B1400;
      border: 1px solid var(--gold-dark);
      margin-top: 8px;
    }

    .up-title {
      font-family: var(--font-display);
      font-size: 1.4rem;
      color: var(--gold);
      margin-bottom: 4px;
      line-height: 1.1;
    }

    .up-sub {
      color: #c9a84c;
      font-size: 0.9rem;
      margin-bottom: 20px;
    }

    /* Updated button to match Figma: dark pill, gold text */
    .btn-reserve {
      display: inline-block;
      padding: 0.8rem 1.8rem;
      border-radius: 999px;
      background: rgba(201, 168, 76, 0.15);
      border: 1px solid var(--gold);
      color: var(--gold);
      font-weight: 500;
      font-size: 0.75rem;
      letter-spacing: 0.08em;
      cursor: pointer;
      transition: all var(--transition);
      font-family: var(--font-body);
      backdrop-filter: blur(4px);
    }

    .btn-reserve:hover {
      background: rgba(201, 168, 76, 0.15);
      border-color: var(--gold-light);
      color: var(--gold-light);
      transform: translateY(-2px);
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
      .article-icon { width: 48px; height: 48px; }
      .back-btn { width: 38px; height: 38px; }
      .page-logo { width: 38px; height: 38px; }
      .up-title { font-size: 1.2rem; }
    }
  </style>
</head>
<body>

  <!-- NAVBAR (UNTOUCHED) -->
  <?php include 'includes/navbar.php'; ?>

  <!-- Gold rule (UNTOUCHED) -->
  <div class="nav-gold-rule"></div>

  <main class="main">

    <!-- PAGE TOPBAR (Back Arrow + Title + Logo) -->
    <div class="page-topbar fade-1">
      <a href="javascript:history.back()" class="back-btn" aria-label="Go back">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="19" y1="12" x2="5" y2="12"></line>
          <polyline points="12 19 5 12 12 5"></polyline>
        </svg>
      </a>
      <div class="page-title-center">Latest on brows</div>
    </div>

    <!-- HEADER -->
    <div class="fade-2">
      <div class="page-title" style="font-size: 2.1rem;">Latest on brows</div>
      <div style="color:var(--white-dim); font-size:1rem; margin-top:0.1rem; font-weight:400;">Expertise, technique, and what's worth knowing</div>
    </div>

    <!-- ARTICLES -->
    <div class="fade-3">
      <div class="article-card" onclick="openArticle(1)">
        <div class="article-icon">
          <!-- Brow arch SVG -->
          <svg width="28" height="16" viewBox="0 0 28 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2 12 Q14 0 26 12" stroke="currentColor" stroke-width="2.5" fill="none" stroke-linecap="round"/>
          </svg>
        </div>
        <div class="article-body">
          <div class="article-title">The art of the considered brow</div>
          <div class="article-meta">3 min read</div>
        </div>
      </div>

      <div class="article-card" onclick="openArticle(2)">
        <div class="article-icon">
          <!-- Target SVG -->
          <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="14" cy="14" r="12" stroke="currentColor" stroke-width="1.5"/>
            <circle cx="14" cy="14" r="6" stroke="currentColor" stroke-width="1.5"/>
            <circle cx="14" cy="14" r="1.5" fill="currentColor"/>
          </svg>
        </div>
        <div class="article-body">
          <div class="article-title">Colour theory for every skin tone</div>
          <div class="article-meta">4 min read</div>
        </div>
      </div>
    </div>

    <!-- UPCOMING SESSIONS -->
    <div class="fade-4">
      <div class="page-label" style="margin-bottom:0.5rem; display:block;">UPCOMING SESSIONS</div>
      <div class="upcoming-card">
        <div class="up-title">Brow mapping masterclass</div>
        <div class="up-sub">5 April 2026 · Virtual</div>
        <button class="btn-reserve" onclick="reserve()">Reserve your place</button>
      </div>
    </div>

  </main>

  <script>
    function openArticle(id) {
      alert('Open article ' + id + ' — replace with real link.');
    }

    function reserve() {
      alert('Reservation requested — integration pending.');
    }
  </script>

</body>
</html>