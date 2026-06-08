<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Face Scan — Royals Arch Brow</title>
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
      font-size: 2rem;
      font-weight: 400;
      color: var(--white);
      line-height: 1.05;
    }

    /* ====== CAMERA ICON CARD ====== */
    .icon-card {
      border-radius: var(--radius);
      background: #161610;
      border: 1px solid #c9a84c;
      min-height: 200px;
      display: grid;
      place-items: center;
      position: relative;
      overflow: hidden;
      padding: 24px 0;
    }

    .icon-card::before {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(circle at center, rgba(201,168,76,0.08), transparent 50%);
      pointer-events: none;
    }

    .camera-symbol {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      background: rgba(201,168,76,0.12);
      border: 1px solid rgba(201,168,76,0.25);
      display: grid;
      place-items: center;
      color: var(--gold);
      position: relative;
      z-index: 1;
    }

    .camera-symbol svg {
      width: 40px;
      height: 40px;
      stroke: currentColor;
      fill: none;
    }

    /* ====== CONTENT ====== */
    .lead {
      font-family: var(--font-display);
      font-size: 1.2rem;
      line-height: 1.2;
      color: var(--white);
      margin: 1.2rem 0 0.6rem;
      text-align: center;
    }

    .sub {
      color: var(--white-dim);
      font-size: 0.95rem;
      line-height: 1.6;
      text-align: center;
      margin-bottom: 1.4rem;
      padding: 0 8px;
    }

    .bullets {
      display: flex;
      flex-direction: column;
      gap: 0.8rem;
      margin-bottom: 1.8rem;
      padding: 0 8px;
    }

    .bullet {
      display: flex;
      gap: 0.75rem;
      align-items: flex-start;
      color: var(--white-dim);
      font-size: 0.95rem;
    }

    .dot {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background: var(--gold);
      margin-top: 0.45rem;
      flex-shrink: 0;
    }

    .privacy {
      display: flex;
      align-items: center;
      gap: 0.6rem;
      color: var(--gold);
      font-size: 0.88rem;
      margin: 0 0 1.6rem;
      justify-content: center;
      flex-wrap: wrap;
    }

    .privacy svg {
      width: 18px;
      height: 18px;
      stroke: currentColor;
      fill: none;
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

    .btn-primary {
      background: #c9a84c;
      color: var(--white);
    }

    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 15px rgba(201,168,76,0.3);
      color: var(--black);
    }

    .btn-secondary {
      background: transparent;
      border: 1px solid #333;
      color: var(--white);
    }

    .btn-secondary:hover {
      border-color: #c9a84c;
      color: var(--gold);
    }

    .row {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 0.75rem;
    }

    .link {
      text-align: center;
      color: var(--gold);
      font-size: 0.9rem;
      letter-spacing: 0.04em;
      padding: 6px 0 4px;
      cursor: pointer;
      transition: color var(--transition);
      font-weight: 400;
    }

    .link:hover {
      color: var(--gold-light);
      text-decoration: underline;
    }

    input[type=file] { display: none; }

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
      .icon-card { min-height: 160px; padding: 18px 0; }
      .camera-symbol { width: 70px; height: 70px; }
      .back-btn { width: 38px; height: 38px; }
      .page-logo { width: 38px; height: 38px; }
      .row { grid-template-columns: 1fr; }
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
    </div>

    <!-- CONTENT HEADER -->
    <div class="fade-2">
      <div class="page-label">Face Scan</div>
      <div class="page-title">A photograph of your brows.</div>
      <p style="color:var(--white-dim); font-size:0.9rem; margin-top:0.25rem;">We'll analyze the shape you have now — and use it as your starting point.</p>
    </div>

    <!-- CAMERA ICON CARD -->
    <div class="icon-card fade-3">
      <div class="camera-symbol">
        <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
          <rect x="3" y="5" width="18" height="14" rx="2" />
          <circle cx="12" cy="12" r="3" />
          <path d="M7 5l2-2h6l2 2" />
        </svg>
      </div>
    </div>

    <!-- BULLETS -->
    <div class="fade-4">
      <div class="bullets">
        <div class="bullet"><div class="dot"></div><div>Even, direct light on your face</div></div>
        <div class="bullet"><div class="dot"></div><div>Face forward, chin level</div></div>
        <div class="bullet"><div class="dot"></div><div>Brow area clear and fully visible</div></div>
      </div>
    </div>

    <!-- PRIVACY -->
    <div class="privacy fade-4">
      <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
        <path d="M12 1l3 2 4 1v5c0 5-3 9-7 11-4-2-7-6-7-11V4l4-1 3-2z" />
      </svg>
      <div>Your photo remains entirely private.</div>
    </div>

    <!-- ACTIONS -->
    <div class="actions fade-5">
      <label for="cameraInput">
        <button class="btn btn-primary">Open camera</button>
      </label>
      <input id="cameraInput" type="file" accept="image/*" capture="environment" onchange="handlePhoto(event)" />

      <div class="row">
        <button class="btn btn-secondary" onclick="useExisting()">Use existing photo</button>
        <button class="btn btn-secondary" onclick="location.href='index.php'">Return home</button>
      </div>

      <div class="link" onclick="useExisting()">Choose from library</div>
    </div>

  </main>

  <script>
    function handlePhoto(e) {
      const file = e.target.files && e.target.files[0];
      if (!file) return;
      const url = URL.createObjectURL(file);
      window.open(url, '_blank');
    }

    function useExisting() {
      const input = document.getElementById('cameraInput');
      input.removeAttribute('capture');
      input.click();
      setTimeout(() => input.setAttribute('capture', 'environment'), 1000);
    }
  </script>

</body>
</html>