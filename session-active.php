<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Session — Royals Arch Brow</title>
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

    /* ====== COMPACT NAVBAR (MATCHING SCAN COMPLETE) ====== */
    .navbar-compact {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 1.25rem 2.5rem;
      border-bottom: 1px solid var(--border);
      background: rgba(10, 10, 8, 0.97);
      backdrop-filter: blur(20px);
      position: sticky;
      top: 0;
      z-index: 100;
    }

    .nav-back-btn {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      border: 1px solid var(--border);
      color: var(--gold);
      transition: all var(--transition);
      background: var(--dark-input);
    }
    .nav-back-btn:hover { border-color: var(--gold); color: var(--gold); }

    .nav-center-title {
      font-size: 0.65rem;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--gold);
      font-weight: 400;
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
    }

    .nav-emblem {
      width: 44px; height: 44px; border-radius: 50%;
      background: radial-gradient(circle at 35% 35%, #2a2010, #1a1408);
      border: 1.5px solid var(--gold-dark); display: flex; align-items: center;
      justify-content: center; flex-shrink: 0; overflow: hidden;
      margin-left: auto;
    }
    .nav-emblem img { width: 26px; height: 26px; object-fit: contain; }
    .nav-emblem-fallback {
      font-family: var(--font-display); font-style: italic; font-size: 1.3rem; color: var(--gold);
    }

    .nav-gold-rule {
      height: 1px; background: linear-gradient(to right, transparent 0%, var(--gold-dark) 30%, var(--gold-dark) 70%, transparent 100%);
      opacity: 0.5;
    }

    /* ====== MAIN CONTENT (MATCHING SCAN COMPLETE) ====== */
    .main {
      max-width: 480px;
      margin: 0 auto;
      padding: 2.5rem 2rem;
      display: flex;
      flex-direction: column;
      gap: 2rem;
      align-items: center;
      flex: 1;
      text-align: center;
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
      max-width: 320px;
    }

    .action-icon {
      width: 64px; height: 64px;
      color: var(--gold);
      opacity: 0.6;
    }

    /* ====== BUTTONS (MATCHING) ====== */
    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      padding: 0.875rem 1.75rem;
      border-radius: 50px;
      font-size: 0.7rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      font-weight: 500;
      transition: all var(--transition);
      width: 100%;
    }

    .btn-primary {
      background: var(--gold);
      color: var(--black);
    }

    .btn-primary:hover {
      background: var(--gold-light);
      transform: translateY(-1px);
      box-shadow: 0 8px 30px rgba(201,168,76,0.3);
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

    .btn-group {
      display: flex;
      flex-direction: column;
      gap: 0.75rem;
      width: 100%;
      max-width: 320px;
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

    /* ====== RESPONSIVE ====== */
    @media (max-width: 600px) {
      .main { padding: 1.5rem 1rem; }
      .navbar-compact { padding: 0.75rem 1.25rem; }
      .status-title { font-size: 1.6rem; }
    }
  </style>
</head>
<body>

  <!-- COMPACT NAVBAR (MATCHING SCAN COMPLETE) -->
  <nav class="navbar-compact">
    <button class="nav-back-btn" onclick="goBack('arch-session.php')">
      <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <line x1="19" y1="12" x2="5" y2="12" />
        <polyline points="12 19 5 12 12 5" />
      </svg>
    </button>
    <div class="nav-center-title">Active Session</div>
    <div class="nav-emblem">
      <img src="assets/logo.png" alt="Arch"
        onerror="this.style.display='none'; this.parentElement.innerHTML='<span class=\'nav-emblem-fallback\'>G</span>'" />
    </div>
  </nav>

  <div class="nav-gold-rule"></div>

  <!-- MAIN CONTENT (MATCHING SCAN COMPLETE) -->
  <main class="main">
    
    <!-- Icon -->
    <div class="action-icon">
      <svg width="64" height="64" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
        <circle cx="12" cy="12" r="10"/>
        <path d="M8 14s1.5 2 4 2 4-2 4-2"/>
        <line x1="9" y1="9" x2="9.01" y2="9"/>
        <line x1="15" y1="9" x2="15.01" y2="9"/>
      </svg>
    </div>

    <!-- Heading -->
    <h1 id="session-mode" class="status-title">Try a Brow Style</h1>

    <!-- Subtext -->
    <p class="status-sub">This feature would activate your camera or photo upload. Full camera integration is available in the mobile app.</p>

    <!-- Action Buttons -->
    <div class="btn-group">
      <button class="btn btn-primary" onclick="showToast('Camera feature available in mobile app','info')">Open Camera</button>
      <button class="btn btn-secondary" onclick="showToast('Upload coming soon','info')">Upload a Photo</button>
    </div>

  </main>

  <div class="toast" id="toast"></div>

  <script>
    function goBack(target) {
      window.location.href = target;
    }

    function showToast(msg, type = 'info') {
      const toast = document.getElementById('toast');
      if (!toast) return;
      toast.textContent = msg;
      toast.classList.add('show');
      setTimeout(() => toast.classList.remove('show'), 2800);
    }

    function getQueryParam(name) {
      const params = new URLSearchParams(window.location.search);
      return params.get(name);
    }

    function setSessionModeFromQuery() {
      const mode = getQueryParam('mode') || localStorage.getItem('archSessionMode') || 'try';
      const map = { 
        try: 'Try a Brow Style', 
        trace: 'Draw Your Tracing Guide', 
        recommend: 'Get a Recommendation', 
        photo: 'Photograph Your Brows' 
      };
      const title = document.getElementById('session-mode');
      if (title) title.textContent = map[mode] || 'Try a Brow Style';
    }

    window.addEventListener('DOMContentLoaded', setSessionModeFromQuery);
  </script>

</body>
</html>