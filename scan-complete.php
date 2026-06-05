<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Scan Complete — Royals Arch Brow</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
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
      display: flex;
      flex-direction: column;
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
      align-items: center;
      text-align: center;
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

    /* ====== SCAN COMPLETE CARD ====== */
    .scan-complete-card {
      background: #161610;
      border: 1px solid var(--gold);
      border-radius: var(--radius);
      padding: 1.5rem 1.25rem;
      width: 100%;
      max-width: 480px;
    }

    .scan-complete-img-wrapper {
      position: relative;
      width: 140px;
      height: 140px;
      border-radius: 50%;
      padding: 4px;
      background: linear-gradient(135deg, var(--gold-dark), var(--gold-light));
      box-shadow: 0 0 30px rgba(201, 168, 76, 0.1);
      flex-shrink: 0;
      margin: 0 auto;
    }

    .scan-complete-img {
      width: 100%;
      height: 100%;
      border-radius: 50%;
      object-fit: cover;
      display: block;
      border: 3px solid var(--black);
    }

    .status-title {
      font-family: var(--font-display);
      font-style: italic;
      font-size: 2rem;
      font-weight: 400;
      line-height: 1.1;
      color: var(--white);
      margin-top: 0.5rem;
    }

    .status-sub {
      font-size: 0.75rem;
      color: var(--white-dim);
      font-weight: 300;
    }

    .divider {
      width: 100%;
      max-width: 100px;
      height: 1px;
      background: var(--border);
      margin: 0.5rem auto;
    }

    /* ====== DATA CARDS ====== */
    .data-cards-row {
      display: flex;
      gap: 1rem;
      width: 100%;
      max-width: 320px;
    }

    .data-card {
      flex: 1;
      background: #161610;
      border: 1px solid var(--border);
      border-radius: var(--radius-sm);
      padding: 1rem 1.25rem;
      text-align: center;
    }

    .data-card-label {
      font-size: 0.55rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--white-dim);
      font-weight: 500;
      margin-bottom: 0.25rem;
    }

    .data-card-value {
      font-family: var(--font-display);
      font-size: 1.2rem;
      font-weight: 400;
      color: var(--white);
      line-height: 1.2;
    }

    /* ====== RECOMMENDED ====== */
    .recommended-section {
      width: 100%;
      max-width: 320px;
      text-align: left;
    }

    .rec-section-label {
      font-size: 0.6rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: var(--gold);
      font-weight: 500;
      margin-bottom: 1rem;
      text-align: center;
    }

    .rec-buttons-row {
      display: flex;
      gap: 0.75rem;
      justify-content: center;
      flex-wrap: wrap;
    }

    .rec-btn {
      padding: 0.6rem 1.4rem;
      border-radius: 50px;
      border: 1px solid var(--border);
      background: #161610;
      color: var(--white-dim);
      font-size: 0.7rem;
      letter-spacing: 0.05em;
      transition: all var(--transition);
      flex: 1;
      min-width: 80px;
    }

    .rec-btn:hover {
      border-color: var(--border-hover);
      color: var(--white);
    }

    .rec-btn.active {
      border-color: var(--gold);
      background: var(--gold-muted);
      color: var(--gold);
      font-weight: 500;
    }

    /* ====== BUTTONS ====== */
    .actions {
      display: grid;
      gap: 0.75rem;
      width: 100%;
      max-width: 320px;
    }

    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 100%;
      padding: 0.85rem 1.2rem;
      border-radius: 999px;
      font-size: 0.75rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      font-weight: 600;
      text-decoration: none;
      transition: all var(--transition);
      cursor: pointer;
      border: none;
      font-family: var(--font-body);
    }

    .btn-primary {
      background: transparent;
      border: 1px solid var(--border);
      color: var(--white);
    }

    .btn-primary:hover {
      border-color: var(--gold);
      color: var(--gold);
    }

    .secondary-link {
      margin-top: 0.25rem;
      font-size: 0.7rem;
      color: var(--gold);
      cursor: pointer;
      transition: all var(--transition);
      font-weight: 400;
      letter-spacing: 0.05em;
    }

    .secondary-link:hover {
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
      .scan-complete-card { padding: 1.25rem 1rem; }
      .scan-complete-img-wrapper { width: 120px; height: 120px; }
      .status-title { font-size: 1.6rem; }
      .data-cards-row { gap: 0.75rem; }
      .rec-btn { padding: 0.5rem 1rem; font-size: 0.65rem; min-width: 60px; }
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
      <div class="page-title-center">Scan Complete</div>
    </div>

    <!-- CONTENT HEADER -->
    <div class="fade-2">
      <div class="page-label">Scan Complete</div>
      <div class="page-title">Here's what your features tell us.</div>
    </div>

    <!-- SCAN COMPLETE CARD -->
    <div class="scan-complete-card fade-3">
      <div class="scan-complete-img-wrapper">
        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Scan Result" class="scan-complete-img" />
      </div>

      <div class="status-title">Scan Complete</div>
      <div class="status-sub">Here's what your features tell us.</div>
      
      <div class="divider"></div>
    </div>

    <!-- DATA CARDS -->
    <div class="data-cards-row fade-4">
      <div class="data-card">
        <div class="data-card-label">Brow Shape</div>
        <div class="data-card-value">High arch</div>
      </div>
      <div class="data-card">
        <div class="data-card-label">Face Shape</div>
        <div class="data-card-value">Oval</div>
      </div>
    </div>

    <!-- RECOMMENDED -->
    <div class="recommended-section fade-4">
      <div class="rec-section-label">Recommended For You</div>
      <div class="rec-buttons-row">
        <button class="rec-btn active">Considered</button>
        <button class="rec-btn">Arch</button>
        <button class="rec-btn">Soft Arch</button>
      </div>
    </div>

    <!-- ACTIONS -->
    <div class="actions fade-5">
      <button class="btn btn-primary" onclick="goToStyles()">Explore Your Styles</button>
      <button class="secondary-link" onclick="goToAllStyles()">See all styles</button>
    </div>

  </main>

  <script>
    function goToStyles() {
      alert('Navigating to style gallery...');
    }

    function goToAllStyles() {
      alert('Showing all styles...');
    }

    document.querySelectorAll('.rec-btn').forEach(btn => {
      btn.addEventListener('click', function() {
        document.querySelectorAll('.rec-btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
      });
    });
  </script>

</body>
</html>