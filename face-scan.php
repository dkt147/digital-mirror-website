<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Face Scan — Royals Arch Brow</title>
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

    /* ====== SCAN GRAPHIC ====== */
    .scan-graphic-wrapper {
      position: relative;
      width: 200px;
      height: 260px;
      margin: 0 auto 0.5rem;
    }

    .scan-frame {
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      border: 1px dashed rgba(201, 168, 76, 0.25);
      border-radius: 45% 45% 30% 30% / 40% 40% 20% 20%;
    }

    .scan-dashed {
      position: absolute;
      top: 10px; left: 10px; right: 10px; bottom: 10px;
      border: 1px dashed rgba(201, 168, 76, 0.1);
      border-radius: 50%;
    }

    .scan-face {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 80px;
      height: 100px;
    }

    .scan-face svg {
      width: 100%;
      height: 100%;
      display: block;
    }

    .scan-corner-tl {
      position: absolute;
      top: -6px; left: -6px;
      width: 28px; height: 28px;
      border-top: 2px solid var(--gold);
      border-left: 2px solid var(--gold);
    }
    .scan-corner-tr {
      position: absolute;
      top: -6px; right: -6px;
      width: 28px; height: 28px;
      border-top: 2px solid var(--gold);
      border-right: 2px solid var(--gold);
    }
    .scan-corner-bl {
      position: absolute;
      bottom: -6px; left: -6px;
      width: 28px; height: 28px;
      border-bottom: 2px solid var(--gold);
      border-left: 2px solid var(--gold);
    }
    .scan-corner-br {
      position: absolute;
      bottom: -6px; right: -6px;
      width: 28px; height: 28px;
      border-bottom: 2px solid var(--gold);
      border-right: 2px solid var(--gold);
    }

    /* ====== CONTENT ====== */
    .headline-text {
      font-family: var(--font-display);
      font-style: italic;
      font-size: 2.2rem;
      font-weight: 400;
      line-height: 1.1;
      margin-bottom: 0.75rem;
    }

    .headline-text span {
      color: var(--gold);
      font-weight: 400;
    }

    .sub-line {
      font-size: 0.8rem;
      color: var(--white-dim);
      line-height: 1.5;
      margin-bottom: 1rem;
    }

    .privacy-line {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      font-size: 0.65rem;
      color: var(--gold);
      letter-spacing: 0.03em;
    }

    .privacy-icon {
      width: 14px; height: 14px;
      flex-shrink: 0;
    }

    /* ====== BUTTONS ====== */
    .actions {
      display: grid;
      gap: 0.75rem;
      width: 100%;
      max-width: 460px;
      margin-left: auto;
      margin-right: auto;
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

    .btn-secondary {
      background: transparent;
      border: 1px solid var(--border);
      color: var(--white);
    }

    .btn-secondary:hover {
      border-color: var(--gold);
      color: var(--gold);
    }

    .btn-primary {
      background: var(--gold);
      color: var(--black);
    }

    .btn-primary:hover {
      background: var(--gold-light);
      transform: translateY(-1px);
    }

    .text-link {
      text-align: center;
      color: var(--gold);
      font-size: 0.8rem;
      cursor: pointer;
      transition: opacity var(--transition);
      font-weight: 400;
    }

    .text-link:hover {
      opacity: 0.7;
    }

    /* ====== TOAST ====== */
    .toast {
      position: fixed;
      bottom: 2rem;
      right: 2rem;
      background: #1c1c12;
      border: 1px solid var(--border);
      border-radius: 50px;
      padding: 0.7rem 1.5rem;
      font-size: 0.75rem;
      color: var(--white);
      z-index: 9999;
      transform: translateY(20px);
      opacity: 0;
      transition: all 0.35s ease;
    }
    .toast.show { transform: translateY(0); opacity: 1; }

    /* ====== ANIMATIONS ====== */
    @keyframes pulseBorder {
      0% { border-color: rgba(201, 168, 76, 0.15); }
      50% { border-color: rgba(201, 168, 76, 0.4); }
      100% { border-color: rgba(201, 168, 76, 0.15); }
    }

    .scan-frame {
      animation: pulseBorder 3s ease-in-out infinite;
    }

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
      .scan-graphic-wrapper { width: 160px; height: 210px; }
      .headline-text { font-size: 1.8rem; }
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
      <div class="page-title-center">Face Scan</div>
      <div class="page-logo">
        <img src="assets/logo.png" alt="CG" />
      </div>
    </div>

    <!-- CONTENT HEADER -->
    <div class="fade-2">
      <div class="page-label">Face Scan</div>
      <div class="page-title">First, we scan your features.</div>
      <p style="color:var(--white-dim); font-size:0.9rem; margin-top:0.25rem;">A lot of your face shape. Everything that follows is built around what we find.</p>
    </div>

    <!-- SCAN GRAPHIC -->
    <div class="scan-graphic-wrapper fade-3">
      <div class="scan-frame"></div>
      <div class="scan-dashed"></div>
      <div class="scan-face">
        <svg viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M10 30 C 25 15, 45 20, 45 35" stroke="var(--gold)" stroke-width="1.5" stroke-linecap="round" />
          <path d="M90 30 C 75 15, 55 20, 55 35" stroke="var(--gold)" stroke-width="1.5" stroke-linecap="round" />
          <circle cx="50" cy="55" r="1" fill="var(--gold)" stroke="none" />
        </svg>
      </div>
      <div class="scan-corner-tl"></div>
      <div class="scan-corner-tr"></div>
      <div class="scan-corner-bl"></div>
      <div class="scan-corner-br"></div>
    </div>

    <!-- CONTENT -->
    <div class="fade-4">
      <div class="privacy-line">
        <svg class="privacy-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
        </svg>
        <span>Processed on your device. Nothing leaves it.</span>
      </div>
    </div>

    <!-- ACTIONS -->
    <div class="actions fade-5">
      <button class="btn btn-primary" onclick="startScan()">Begin Scan</button>
      <a href="arch-session.php" class="text-link">Browse styles directly</a>
    </div>

  </main>

  <div class="toast" id="toast"></div>

  <script>
    function startScan() {
      showToast('Scanning your face...');
      setTimeout(() => {
        showToast('Scan complete!');
        setTimeout(() => {
          window.location.href = 'scan-results.php';
        }, 1000);
      }, 2000);
    }

    function showToast(msg) {
      const toast = document.getElementById('toast');
      if (!toast) return;
      toast.textContent = msg;
      toast.classList.add('show');
      setTimeout(() => toast.classList.remove('show'), 2800);
    }
  </script>

</body>
</html>