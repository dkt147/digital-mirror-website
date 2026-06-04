<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Scanning — Royals Arch Brow</title>
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
      --radius: 14px;
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
      align-items: center;
      text-align: center;
    }

    /* ====== SCAN CAMERA VIEW ====== */
    .scan-view-wrapper {
      position: relative;
      width: 100%;
      max-width: 360px;
      aspect-ratio: 3/4;
      margin: 0 auto;
      border-radius: var(--radius);
      overflow: hidden;
      background: #1a1810;
    }

    .scan-view-wrapper img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    .scan-corner {
      position: absolute;
      width: 24px;
      height: 24px;
      border-color: var(--gold);
      border-style: solid;
      border-width: 0;
    }

    .scan-corner-tl {
      top: 12px;
      left: 12px;
      border-top-width: 2.5px;
      border-left-width: 2.5px;
      border-radius: 2px 0 0 0;
    }

    .scan-corner-tr {
      top: 12px;
      right: 12px;
      border-top-width: 2.5px;
      border-right-width: 2.5px;
      border-radius: 0 2px 0 0;
    }

    .scan-corner-bl {
      bottom: 12px;
      left: 12px;
      border-bottom-width: 2.5px;
      border-left-width: 2.5px;
      border-radius: 0 0 0 2px;
    }

    .scan-corner-br {
      bottom: 12px;
      right: 12px;
      border-bottom-width: 2.5px;
      border-right-width: 2.5px;
      border-radius: 0 0 2px 0;
    }

    .scan-view-wrapper::after {
      content: '';
      position: absolute;
      inset: 0;
      border-radius: var(--radius);
      box-shadow: inset 0 0 30px rgba(201, 168, 76, 0.06);
      pointer-events: none;
    }

    /* ====== STATUS TEXT & LOADING ====== */
    .status-wrapper {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 1rem;
      max-width: 90%;
    }

    .status-title {
      font-family: var(--font-display);
      font-style: italic;
      font-size: 1.8rem;
      font-weight: 400;
      line-height: 1.1;
      color: var(--white);
    }

    .status-sub {
      font-size: 0.8rem;
      color: var(--white-dim);
      font-weight: 300;
    }

    .loading-dots {
      display: flex;
      gap: 0.5rem;
      justify-content: center;
      margin-top: 0.25rem;
    }

    .dot {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: #2a2a22;
      animation: pulseDot 1.4s ease-in-out infinite both;
    }

    .dot:nth-child(1) { animation-delay: -0.32s; }
    .dot:nth-child(2) { animation-delay: -0.16s; }
    .dot:nth-child(3) { animation-delay: 0s; }

    @keyframes pulseDot {
      0%, 80%, 100% { 
        transform: scale(0.5); 
        opacity: 0.2; 
        background: #2a2a22; 
      }
      40% { 
        transform: scale(1); 
        opacity: 1; 
        background: var(--gold); 
      }
    }

    /* ====== CANCEL BUTTON ====== */
    .cancel-link {
      margin-top: 1rem;
      font-size: 0.7rem;
      color: var(--gold);
      cursor: pointer;
      transition: all var(--transition);
      font-weight: 400;
      letter-spacing: 0.05em;
    }

    .cancel-link:hover { opacity: 0.7; }

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
      .status-title { font-size: 1.5rem; }
      .scan-view-wrapper { max-width: 300px; }
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
      <div class="page-title-center">Scanning</div>
      <div class="page-logo">
        <img src="assets/logo.png" alt="CG" />
      </div>
    </div>

    <!-- CONTENT HEADER -->
    <div class="fade-2">
      <div class="page-label">Face Scan</div>
      <div class="page-title">Reading your features.</div>
    </div>

    <!-- CAMERA VIEW -->
    <div class="scan-view-wrapper fade-3">
      <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Face Scan Feed" />
      
      <div class="scan-corner scan-corner-tl"></div>
      <div class="scan-corner scan-corner-tr"></div>
      <div class="scan-corner scan-corner-bl"></div>
      <div class="scan-corner scan-corner-br"></div>
    </div>

    <!-- STATUS -->
    <div class="status-wrapper fade-4">
      <div class="status-title">Reading your features.</div>
      <div class="status-sub">Hold still for just a moment.</div>

      <div class="loading-dots">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>
    </div>

    <!-- CANCEL -->
    <button class="cancel-link fade-5" onclick="cancelScan()">Cancel</button>

  </main>

  <script>
    function cancelScan() {
      window.history.back();
    }
  </script>

</body>
</html>