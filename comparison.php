<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Comparison — Royals Arch Brow</title>
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
      font-size: 2.2rem;
      font-weight: 400;
      color: var(--white);
      line-height: 1.1;
      margin-bottom: 0.5rem;
    }

    /* ====== COMPARISON CARDS ====== */
    .comparison-container {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 1.5rem;
      margin-bottom: 0.5rem;
    }

    .comp-card {
      border-radius: 20px;
      padding: 1.5rem;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      gap: 1rem;
      border: 1px solid var(--border);
    }

    .comp-card.before {
      background: #181816;
      border-color: #3a3a35;
    }

    .comp-card.after {
      background: #28260e;
      border-color: var(--gold);
      border-width: 1.5px;
    }

    .comp-label {
      font-size: 0.75rem;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      font-weight: 500;
      color: var(--white-dim);
    }

    .comp-card.after .comp-label {
      color: var(--gold);
    }

    .comp-img-wrapper {
      width: 100%;
      border-radius: 14px;
      overflow: hidden;
      border: 1px solid rgba(201, 168, 76, 0.3);
      aspect-ratio: 1/1;
      max-width: 250px;
    }

    .comp-img-wrapper img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    .comp-text {
      font-family: var(--font-body);
      font-size: 1.1rem;
      line-height: 1.4;
      font-weight: 400;
      color: var(--white);
    }

    .comp-card.after .comp-text {
      color: var(--gold-light);
    }

    /* ====== BOTTOM CONTENT ====== */
    .save-notice {
      text-align: center;
      color: var(--white-dim);
      font-size: 1rem;
      margin: 1rem 0 1.5rem;
      font-weight: 300;
      line-height: 1.5;
    }

    .cta-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 1rem;
    }

    .btn-gold-large {
      background: var(--gold);
      color: var(--white);
      padding: 1.2rem 2rem;
      border-radius: 50px;
      font-size: 1.2rem;
      font-weight: 600;
      width: 100%;
      max-width: 100%;
      transition: all var(--transition);
      border: none;
      text-transform: none;
      letter-spacing: 0.02em;
    }

    .btn-gold-large:hover {
        border-color: var(--gold);
        color: var(--black);
        transform: translateY(-2px);
    }

    .footer-link-gold {
      color: var(--gold-dark);
      font-size: 0.95rem;
      text-decoration: underline;
      text-underline-offset: 4px;
      transition: color var(--transition);
      font-weight: 400;
      cursor: pointer;
    }

    .footer-link-gold:hover {
      color: var(--gold-light);
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

    /* ====== RESPONSIVE ====== */
    @media (max-width: 900px) {
      .main { padding: 0 1.25rem 1.5rem; }
      .navbar { padding: 0.875rem 1.25rem; }
      .navbar-nav { display: none; }
      .page-title { font-size: 1.8rem; }
      .back-btn { width: 38px; height: 38px; }
      .page-logo { width: 38px; height: 38px; }

      .comparison-container {
        grid-template-columns: 1fr;
        gap: 1rem;
      }

      .comp-card {
        padding: 1.25rem;
      }

      .comp-img-wrapper {
        max-width: 100%;
      }

      .btn-gold-large {
        max-width: 100%;
        padding: 1rem;
      }
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
      <div class="page-title-center">Comparison</div>
      <div class="page-logo">
        <img src="assets/logo.png" alt="Logo">
      </div>
    </div>

    <!-- CONTENT HEADER -->
    <div class="fade-2">
      <div class="page-title">The difference,<br>clearly shown.</div>
    </div>

    <!-- COMPARISON CARDS -->
    <div class="comparison-container fade-3">
      
      <!-- BEFORE CARD -->
      <div class="comp-card before">
        <div class="comp-label">Before</div>
        <div class="comp-img-wrapper">
          <img src="https://placehold.co/400x400/3a3a35/f5f0e8?text=Model+Face" alt="Before">
        </div>
        <div class="comp-text">
          Where you're<br>beginning,<br>Already beautiful.
        </div>
      </div>

      <!-- AFTER CARD -->
      <div class="comp-card after">
        <div class="comp-label">After</div>
        <div class="comp-img-wrapper">
          <img src="https://placehold.co/400x400/28260e/c9a84c?text=Model+Face" alt="After">
        </div>
        <div class="comp-text">
          After: Soft<br>arch
        </div>
      </div>

    </div>

    <!-- NOTICE & CTA -->
    <div class="fade-4">
      <p class="save-notice">Your before — and — after is saved<br>automatically to my looks.</p>

      <div class="cta-container">
        <button class="btn-gold-large" onclick="confirmLook()">This is the one</button>
        <a class="footer-link-gold" href="face-scan-ui.php" >Try another style</a>
      </div>
    </div>

  </main>

  <script>
    function confirmLook() {
      alert('Look confirmed! This has been saved to your profile.');
    }
  </script>

</body>
</html>