<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Privacy — Royals Arch Brow</title>
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

    /* ====== PRIVACY CARD ====== */
    .privacy-card {
      background: #161610;
      border: 1px solid var(--gold);
      border-radius: var(--radius);
      padding: 1.5rem 1.25rem;
      text-align: center;
    }

    .icon-wrap {
      display: flex;
      justify-content: center;
      margin-bottom: 0.75rem;
    }

    .icon-wrap svg {
      width: 48px;
      height: 48px;
      stroke: var(--gold);
      stroke-width: 1.5;
      fill: none;
    }

    .icon-wrap svg .exclamation {
      stroke: var(--gold);
      stroke-width: 2.5;
    }

    .icon-wrap svg .dot {
      fill: var(--gold);
      stroke: none;
    }

    .heading {
      font-family: var(--font-display);
      font-style: italic;
      font-weight: 400;
      font-size: 2.4rem;
      color: var(--white);
      line-height: 1.15;
      margin-bottom: 1.5rem;
    }

    .gold-divider {
      width: 80px;
      height: 1px;
      background: var(--gold);
      margin: 0 auto 1.5rem auto;
    }

    .privacy-list {
      list-style: none;
      text-align: left;
      max-width: 300px;
      margin: 0 auto 1.5rem;
      display: flex;
      flex-direction: column;
      gap: 0.5rem;
    }

    .privacy-list li {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      font-size: 0.9rem;
      color: var(--white);
      font-weight: 300;
    }

    .privacy-bullet {
      width: 5px;
      height: 5px;
      border-radius: 50%;
      background: var(--gold);
      flex-shrink: 0;
    }

    .gold-text {
      color: var(--gold);
      font-size: 0.95rem;
      line-height: 1.6;
      max-width: 400px;
      margin: 0 auto;
    }

    .gold-text.italic {
      font-style: italic;
      color: var(--white-dim);
      margin-top: 0.25rem;
    }

    .gold-note {
      color: var(--gold);
      font-size: 0.85rem;
      margin-top: 1.5rem;
      margin-bottom: 1.5rem;
    }

    .actions {
      display: grid;
      gap: 0.75rem;
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

    .terms-link {
      display: inline-block;
      margin-top: 1rem;
      font-size: 0.75rem;
      color: var(--gold);
      text-decoration: none;
      transition: opacity var(--transition);
      cursor: pointer;
    }

    .terms-link:hover {
      opacity: 0.7;
    }

    .terms-link svg {
      width: 14px;
      height: 14px;
      vertical-align: middle;
      margin-left: 4px;
      fill: none;
      stroke: currentColor;
      stroke-width: 1.8;
    }

    .bottom-note {
      text-align: center;
      font-size: 0.7rem;
      color: var(--gold);
      margin-top: 1.5rem;
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
      .privacy-card { padding: 1.25rem 1rem; }
      .heading { font-size: 2rem; }
      .privacy-list { max-width: 100%; }
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
      <div class="page-title-center">Privacy</div>
      
    </div>

    <!-- CONTENT HEADER -->
    <div class="fade-2">
      <div class="page-label">Privacy</div>
      <div class="page-title">What this app sees stays with you.</div>
    </div>

    <!-- PRIVACY CARD -->
    <div class="privacy-card fade-3">
      <div class="icon-wrap">
        <svg viewBox="0 0 64 64">
          <polygon points="32,4 58,18 58,46 32,60 6,46 6,18" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
          <line x1="32" y1="22" x2="32" y2="36" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" />
          <circle cx="32" cy="46" r="3" fill="currentColor" stroke="none" />
        </svg>
      </div>

      <h1 class="heading">What this app sees<br />stays with you.</h1>

      <div class="gold-divider"></div>

      <ul class="privacy-list">
        <li><div class="privacy-bullet"></div><span>Your face.</span></li>
        <li><div class="privacy-bullet"></div><span>Your brow profile.</span></li>
        <li><div class="privacy-bullet"></div><span>Your looks.</span></li>
      </ul>

      <div class="gold-text">
        None of it is shared, sold, or held<br />beyond your use of it.
      </div>
      <div class="gold-text italic">
        You may delete your profile at any time.
      </div>

      <div class="gold-note">This is the only place we will say it.</div>

      <div class="actions">
        <button class="btn btn-primary" onclick="acceptPrivacy()">Understood. Continue.</button>
        <!-- <a href="#" class="terms-link" onclick="showToast('Full privacy terms coming soon', 'info')">
          Read our full privacy terms
          <svg viewBox="0 0 24 24">
            <line x1="5" y1="12" x2="19" y2="12" stroke="currentColor" stroke-width="1.8" />
            <polyline points="12 5 19 12 12 19" stroke="currentColor" stroke-width="1.8" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </a> -->
      </div>

      <div class="bottom-note">Your data. Yours alone.</div>
    </div>

  </main>

  <script>
    function showToast(msg, type) {
      alert(msg);
    }

    function acceptPrivacy() {
      window.location.href = 'onboarding-profile.php';
    }
  </script>

</body>
</html>