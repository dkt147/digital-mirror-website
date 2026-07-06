<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Try-On — Royals Arch Brow</title>
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

    /* ====== LAYOUT ====== */
    .main {
      max-width: 100%;
      margin: 0 auto;
      padding: 2.5rem 3rem;
      display: flex;
      flex-direction: column;
      gap: 2rem;
    }

    /* ====== HEADER ====== */
    .page-label {
      font-size: 0.6rem; letter-spacing: 0.25em; text-transform: uppercase;
      color: var(--gold); font-weight: 500; margin-bottom: 0.2rem;
    }
    .page-title {
      font-family: var(--font-display);
      font-style: italic;
      font-size: 2.5rem;
      font-weight: 400;
      color: var(--white);
      line-height: 1.05;
    }

    /* ====== SESSION CARDS ====== */
    .session-options {
      display: flex;
      flex-direction: column;
      gap: 1.25rem;
    }

    .session-card {
      background: linear-gradient(135deg, #1c1a0d 0%, #221f0f 60%, #1a1808 100%);
      border: 1px solid #333;
      border-radius: var(--radius);
      padding: 1.5rem 2rem;
      display: flex;
      align-items: center;
      gap: 1.5rem;
      cursor: pointer;
      transition: all var(--transition);
      position: relative;
      text-align: left;
      width: 100%;
    }

    .session-card:hover {
      border-color: var(--gold);
      transform: translateY(-2px);
      background: linear-gradient(135deg, #1f1c10 0%, #241f0f 60%, #1c1908 100%);
      box-shadow: 0 8px 30px rgba(0,0,0,0.5);
    }

    .session-card::before {
      content: '';
      position: absolute;
      top: 0; left: 0; right: 0;
      height: 1px;
      background: linear-gradient(to right, transparent, rgba(201, 168, 76, 0.5), transparent);
    }

    .session-icon {
      width: 48px; height: 48px;
      border-radius: var(--radius-sm);
      background: var(--dark-input);
      border: 1px solid var(--border);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      color: var(--gold);
      transition: all var(--transition);
    }

    .session-card:hover .session-icon { border-color: var(--gold-dark); }

    .session-title {
      font-family: var(--font-display);
      font-size: 1.4rem;
      font-weight: 400;
      color: var(--white);
      margin-bottom: 0.2rem;
    }

    .session-desc {
      font-size: 0.75rem;
      color: var(--white-dim);
      font-family: var(--font-body);
      font-weight: 300;
      letter-spacing: 0.01em;
    }

    .session-arrow {
      margin-left: auto;
      color: var(--white-faint);
      flex-shrink: 0;
      transition: all var(--transition);
    }

    .session-card:hover .session-arrow { color: var(--gold); transform: translateX(4px); }

    /* ====== NEW BADGE ====== */
    .session-new-badge {
      position: absolute;
      top: -8px; right: -8px;
      background: var(--gold);
      color: var(--black);
      font-size: 0.55rem;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      padding: 0.2rem 0.5rem;
      border-radius: 50px;
      font-weight: 600;
      box-shadow: 0 2px 12px rgba(201, 168, 76, 0.4);
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
      .main { padding: 1.5rem 1.25rem; }
      .navbar { padding: 0.875rem 1.25rem; }
      .navbar-nav { display: none; }
      .session-card { padding: 1.25rem 1.5rem; gap: 1rem; }
      .session-title { font-size: 1.2rem; }
    }
  </style>
</head>

<body>

  <!-- NAVBAR -->
  <?php include 'includes/navbar.php'; ?>

  <div class="nav-gold-rule"></div>

  <!-- MAIN CONTENT -->
  <main class="main">

    <!-- HEADER -->
    <div class="fade-2">
      <div class="page-label">Your Brow Session Starts Here.</div>
      <div class="page-title">What would you like to do?</div>
    </div>

    <!-- SESSION OPTIONS CARDS --> 
    <div class="session-options">

      <!-- FIX 1: Try a brow style → face-scan.php -->
      <button class="session-card fade-3" onclick="window.location.href='face-scan.php'">
        <div class="session-icon">
          <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="3" />
            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
          </svg>
        </div>
        <div>
          <div class="session-title">Try a brow style</div>
          <div class="session-desc">See how different shapes sit on your face.</div>
        </div>
        <div class="session-arrow">
          <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <line x1="5" y1="12" x2="19" y2="12" />
            <polyline points="12 5 19 12 12 19" />
          </svg>
        </div>
      </button>

      <!-- FIX 2: Draw your tracing guide → tracing-guide.php -->
      <button class="session-card fade-3" onclick="window.location.href='tracing-guide.php'">
        <div class="session-icon">
          <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path d="M12 20h9" />
            <path d="M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z" />
          </svg>
        </div>
        <div>
          <div class="session-title">Draw your tracing guide</div>
          <div class="session-desc">Map the shape for your brow artist.</div>
        </div>
        <div class="session-arrow">
          <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <line x1="5" y1="12" x2="19" y2="12" />
            <polyline points="12 5 19 12 12 19" />
          </svg>
        </div>
      </button>

      <!-- FIX 3: Get a recommendation → recommendation.php -->
      <button class="session-card fade-4" onclick="window.location.href='recommendation.php'" style="position:relative;">
        <div class="session-new-badge">New</div>
        <div class="session-icon">
          <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10" />
            <line x1="12" y1="8" x2="12" y2="12" />
            <line x1="12" y1="16" x2="12.01" y2="16" />
          </svg>
        </div>
        <div>
          <div class="session-title">Get a recommendation</div>
          <div class="session-desc">Let your features guide the choice.</div>
        </div>
        <div class="session-arrow">
          <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <line x1="5" y1="12" x2="19" y2="12" />
            <polyline points="12 5 19 12 12 19" />
          </svg>
        </div>
      </button>

      <!-- Photograph your brows remains unchanged (keeps original behaviour) -->
      <button class="session-card fade-5" onclick="startSession('photo')">
        <div class="session-icon">
          <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path d="M23 19a2 2 0 01-2 2H3a2 2 0 01-2-2V8a2 2 0 012-2h4l2-3h6l2 3h4a2 2 0 012 2z" />
            <circle cx="12" cy="13" r="4" />
          </svg>
        </div>
        <div>
          <div class="session-title">Photograph your brows</div>
          <div class="session-desc">Capture and analyze your current shape.</div>
        </div>
        <div class="session-arrow">
          <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <line x1="5" y1="12" x2="19" y2="12" />
            <polyline points="12 5 19 12 12 19" />
          </svg>
        </div>
      </button>

    </div>

  </main>

  <div class="toast" id="toast"></div>

  <script>
    // Original startSession remains for the Photograph button (if needed) or any future use.
    function showToast(msg) {
      const toast = document.getElementById('toast');
      if (!toast) return;
      toast.textContent = msg;
      toast.classList.add('show');
      setTimeout(() => toast.classList.remove('show'), 2800);
    }

    function startSession(mode) {
      localStorage.setItem('archSessionMode', mode);
      showToast('Loading your ' + mode + ' session...');
      setTimeout(() => {
        window.location.href = 'recommendation.php?mode=' + encodeURIComponent(mode);
      }, 600);
    }
  </script>

</body>
</html>