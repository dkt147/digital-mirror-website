<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Looks — Royals Arch Brow</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
  <style>
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
      --radius: 18px;
      --radius-sm: 10px;
      --transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
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
      padding-bottom: 8rem; /* Space for bottom nav */
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

    /* ====== FILTER TABS ====== */
    .filter-tabs {
      display: flex;
      gap: 1.2rem;
      border-bottom: 1px solid var(--border);
      padding-bottom: 0.6rem;
      margin-bottom: 0.5rem;
    }

    .filter-tab {
      font-size: 0.65rem;
      font-weight: 600;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: var(--white-dim);
      padding: 0.25rem 0;
      position: relative;
      transition: color var(--transition);
      cursor: pointer;
    }

    .filter-tab.active {
      color: var(--white);
    }

    .filter-tab.active::after {
      content: '';
      position: absolute;
      bottom: -0.7rem;
      left: 0;
      width: 100%;
      height: 2px;
      background: var(--gold);
    }

    .filter-tab:hover {
      color: var(--white);
    }

    /* ====== LOOK CARDS ====== */
    .looks-list {
      display: flex;
      flex-direction: column;
      gap: 1rem;
      margin-bottom: 1rem;
    }

    .look-card {
      background: #121212;
      border: 1px solid #383838;
      border-radius: var(--radius);
      padding: 1.2rem 1.5rem;
      display: flex;
      align-items: center;
      gap: 1.5rem;
      cursor: pointer;
      transition: all var(--transition);
      position: relative;
      text-align: left;
      width: 100%;
    }

    .look-card:hover {
      border-color: var(--gold);
      transform: translateY(-2px);
      background: linear-gradient(135deg, #1f1c10 0%, #241f0f 60%, #1c1908 100%);
      box-shadow: 0 8px 30px rgba(0,0,0,0.5);
    }

    .look-brow-icon {
      width: 70px;
      height: 35px;
      flex-shrink: 0;
    }

    .look-brow-icon svg {
      width: 100%;
      height: 100%;
      fill: none;
      stroke: var(--gold);
      stroke-width: 1.8;
      stroke-linecap: round;
    }

    .look-info {
      flex: 1;
    }

    .look-title {
      font-family: var(--font-display);
      font-size: 1.3rem;
      font-weight: 400;
      color: var(--white);
      margin-bottom: 0.1rem;
    }

    .look-meta {
      font-size: 0.65rem;
      color: var(--white-dim);
      letter-spacing: 0.04em;
      text-transform: uppercase;
    }

    .look-arrow {
      color: var(--white-faint);
      flex-shrink: 0;
      transition: all var(--transition);
    }

    .look-card:hover .look-arrow {
      color: var(--gold);
      transform: translateX(4px);
    }

    /* ====== CREATE NEW BUTTON ====== */
    .create-new-btn {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 100%;
      padding: 1rem;
      border-radius: 50px;
      border: 1px solid var(--border);
      background: #c9a84c;
      color: var(--black);
      font-size: 0.8rem;
      font-weight: 600;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      text-decoration: none;
      transition: all var(--transition);
    }

    .create-new-btn:hover {
      border-color: var(--gold);
      box-shadow: 0 8px 30px rgba(201, 168, 76, 0.4);
      transform: translateY(-1px);
    }

    /* ====== BOTTOM NAV ====== */
    .bottom-nav {
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      background: rgba(10, 10, 8, 0.96);
      backdrop-filter: blur(20px);
      border-top: 1px solid var(--border);
      display: flex;
      justify-content: space-around;
      padding: 0.6rem 0 1rem;
      z-index: 100;
    }

    .bottom-nav-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 4px;
      text-decoration: none;
      color: var(--white-dim);
      font-size: 0.55rem;
      font-weight: 500;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      transition: color var(--transition);
      position: relative;
    }

    .bottom-nav-item svg {
      width: 22px;
      height: 22px;
      stroke: currentColor;
      fill: none;
      stroke-width: 1.8;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    .bottom-nav-item.active {
      color: var(--white);
    }

    .bottom-nav-item.active::after {
      content: '';
      position: absolute;
      bottom: -8px;
      width: 4px;
      height: 4px;
      border-radius: 50%;
      background: var(--gold);
    }

    .bottom-nav-item:hover {
      color: var(--white);
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
      .main { padding: 0 1.25rem 1.5rem 1.25rem; padding-bottom: 7rem; }
      .navbar { padding: 0.875rem 1.25rem; }
      .navbar-nav { display: none; }
      .page-title { font-size: 1.6rem; }
      .filter-tabs { gap: 1rem; overflow-x: auto; white-space: nowrap; padding-bottom: 0.4rem; }
      .look-brow-icon { width: 50px; height: 25px; }
      .look-title { font-size: 1.1rem; }
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
      <div class="page-title-center">My Looks</div>
      <!-- <div class="page-logo">
        <img src="assets/logo.png" alt="CG" />
      </div> -->
    </div>

    <!-- FILTER TABS -->
    <div class="filter-tabs fade-2">
      <span class="filter-tab active">ALL</span>
      <span class="filter-tab">STYLE</span>
      <span class="filter-tab">TRACING</span>
      <span class="filter-tab">STENCIL</span>
      <span class="filter-tab">REFR</span>
    </div>

    <!-- LOOKS LIST -->
    <div class="looks-list">

      <!-- Look 1 -->
      <div class="look-card fade-3" onclick="window.location.href='look-detail.php?id=1'">
        <div class="look-brow-icon">
          <svg viewBox="0 0 70 35">
            <path d="M15 22 Q25 6 35 18 Q45 30 55 14" />
          </svg>
        </div>
        <div class="look-info">
          <div class="look-title">My everyday arch</div>
          <div class="look-meta">MAY 15 - Arch / Dark Brows</div>
        </div>
        <div class="look-arrow">
          <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <line x1="5" y1="12" x2="19" y2="12" />
            <polyline points="12 5 19 12 12 19" />
          </svg>
        </div>
      </div>

      <!-- Look 2 -->
      <div class="look-card fade-4" onclick="window.location.href='look-detail.php?id=2'">
        <div class="look-brow-icon">
          <svg viewBox="0 0 70 35">
            <path d="M15 22 Q25 6 35 18 Q45 30 55 14" />
          </svg>
        </div>
        <div class="look-info">
          <div class="look-title">My everyday arch</div>
          <div class="look-meta">MAY 15 - Arch / Dark Brows</div>
        </div>
        <div class="look-arrow">
          <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <line x1="5" y1="12" x2="19" y2="12" />
            <polyline points="12 5 19 12 12 19" />
          </svg>
        </div>
      </div>

      <!-- Look 3 -->
      <div class="look-card fade-4" onclick="window.location.href='look-detail.php?id=3'">
        <div class="look-brow-icon">
          <svg viewBox="0 0 70 35">
            <path d="M15 22 Q25 6 35 18 Q45 30 55 14" />
          </svg>
        </div>
        <div class="look-info">
          <div class="look-title">My everyday arch</div>
          <div class="look-meta">MAY 15 - Arch / Dark Brows</div>
        </div>
        <div class="look-arrow">
          <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <line x1="5" y1="12" x2="19" y2="12" />
            <polyline points="12 5 19 12 12 19" />
          </svg>
        </div>
      </div>

    </div>

    <!-- CREATE NEW BUTTON -->
    <a href="create-look.php" class="create-new-btn fade-5">CREATE A NEW LOOK +</a>

  </main>

  <script>
    // Filter tab interaction
    document.querySelectorAll('.filter-tab').forEach(tab => {
      tab.addEventListener('click', function() {
        document.querySelectorAll('.filter-tab').forEach(t => t.classList.remove('active'));
        this.classList.add('active');
      });
    });
  </script>

</body>
</html>