<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Brow Editor — Royals Arch Brow</title>
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
      background: rgba(0,0,0,0.3);
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

    .btn-gold:hover { background: var(--gold-light); }

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
      .sub-nav a { font-size: 0.65rem; }
      .tool-tab { font-size: 0.55rem; padding: 8px 0; }
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
      <div class="page-title-center">Brow Editor</div>
      <div class="page-logo">
        <img src="assets/logo.png" alt="CG" />
      </div>
    </div>

    <!-- SUB NAV -->
    <div class="sub-nav fade-2">
      <a href="#" class="active">Left Brow</a>
      <a href="#">Both</a>
      <a href="#">Right Brow</a>
    </div>

    <!-- IMAGE CONTAINER -->
    <div class="image-wrapper fade-3">
      <img src="assets/face-placeholder.png" alt="Face preview" />
      <div class="target-icon"></div>
    </div>

    <!-- TOOL TABS -->
    <div class="tool-tabs fade-4">
      <button class="tool-tab active">Shape</button>
      <button class="tool-tab">Colour</button>
      <button class="tool-tab">Thickness</button>
      <button class="tool-tab highlight">Position</button>
    </div>

    <!-- ADVICE CARD -->
    <div class="advice-card fade-5">
      <div class="advice-header">
        <div class="advice-icon">
          <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10"></circle>
            <circle cx="12" cy="12" r="6"></circle>
            <circle cx="12" cy="12" r="2"></circle>
          </svg>
        </div>
        <div class="advice-title">Arch Placement</div>
      </div>
      <p class="advice-text">
        The arch peak is sitting a little far inward. Moving it slightly toward the outer third creates more lift.
      </p>
      <div class="advice-actions">
        <a class="btn-gold" href="#">Adjust</a>
        <a class="btn-outline" href="#">Continue as Drawn</a>
      </div>
    </div>

  </main>

  <script>
    document.querySelectorAll('.tool-tab').forEach(tab => {
      tab.addEventListener('click', function() {
        document.querySelectorAll('.tool-tab').forEach(t => t.classList.remove('active'));
        this.classList.add('active');
      });
    });
  </script>

</body>
</html>