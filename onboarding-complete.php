<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Complete — Royals Arch Brow</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }

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
      --radius-pill: 50px;
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

    /* ====== COMPLETE CARD ====== */
    .complete-card {
      background: #161610;
      border: 1px solid var(--gold);
      border-radius: var(--radius);
      padding: 1.5rem 1.25rem;
    }

    .split-line-wrapper {
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 100%;
      margin-bottom: 1rem;
    }

    .line-with-gap {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 100%;
    }

    .line-part {
      height: 1px;
      background-color: var(--gold);
      flex-grow: 1;
    }

    .line-gap {
      width: 10px; 
      height: 1px;
    }

    .text-below-gap {
      color: var(--gold);
      font-size: 0.7rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      margin-top: 6px;
      font-weight: 400;
      text-align: center;
    }

    /* ====== ILLUSTRATION ====== */
    .illustration-area {
      margin: 0 auto 1rem;
      background: var(--dark-input);
      border-radius: 999px;
      padding: 20px 20px;
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      max-width: 320px;
      position: relative;
    }

    .illustration-label {
      text-align: center;
      font-size: 0.6rem;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--white-dim);
      margin-top: -2px;
      margin-bottom: 12px;
    }

    /* ====== GOLD DIVIDER ====== */
    .gold-divider {
      width: 80px;
      height: 1px;
      background: var(--gold);
      margin: 18px auto 24px;
    }

    /* ====== CONTENT ====== */
    .profile-status {
      text-align: center;
      font-size: 0.65rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 0.25rem;
      font-weight: 400;
    }

    .main-heading {
      font-family: var(--font-display);
      font-style: italic;
      font-weight: 400;
      font-size: 2.4rem;
      text-align: center;
      color: var(--white);
      line-height: 1.1;
      margin-bottom: 2rem;
    }

    /* ====== TAG LIST ====== */
    .tag-list {
      display: flex;
      flex-direction: column;
      gap: 0.5rem;
      margin-bottom: 0.5rem;
    }

    .tag-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0.6rem 0;
      border-bottom: 1px solid var(--border);
    }

    .tag-key {
      font-size: 0.6rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: var(--gold);
      font-weight: 500;
    }

    .tag-value-wrap {
      display: flex;
      align-items: center;
      gap: 0.75rem;
    }

    .tag-value {
      font-size: 0.8rem;
      color: var(--white);
      font-weight: 400;
    }

    .tone-indicator {
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background: #b67a3f;
      flex-shrink: 0;
    }

    /* ====== EDIT LINK ====== */
    .edit-link {
      display: block;
      text-align: center;
      font-size: 0.75rem;
      color: var(--white);
      text-decoration: none;
      cursor: pointer;
      margin: 1.5rem 0 1.5rem;
      transition: opacity var(--transition);
    }

    .edit-link:hover {
      opacity: 0.7;
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
      background: transparent;
      border: 1px solid var(--border);
      color: var(--white);
    }

    .btn-primary:hover {
      border-color: var(--gold);
      color: var(--gold);
    }

    .footer-note {
      text-align: center;
      font-size: 0.6rem;
      color: var(--gold);
      margin-top: 1.25rem;
      font-weight: 300;
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
      .complete-card { padding: 1.25rem 1rem; }
      .main-heading { font-size: 2rem; }
      .illustration-area { max-width: 260px; padding: 15px 14px; }
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
      <div class="page-title-center">Complete</div>
      <div class="page-logo">
        <img src="assets/logo.png" alt="CG" />
      </div>
    </div>

    <!-- CONTENT HEADER -->
    <div class="fade-2">
      <div class="page-label">Complete</div>
      <div class="page-title">Your profile is set.</div>
    </div>

    <!-- COMPLETE CARD -->
    <div class="complete-card fade-3">
      <div class="split-line-wrapper">
        <!-- <div class="line-with-gap">
          <div class="line-part"></div>
          <div class="line-gap"></div>
          <div class="line-part"></div>
        </div> -->
        <div class="text-below-gap">Complete</div>
      </div>

      <div class="illustration-area">
        <p style="color:var(--white-dim); font-size:0.85rem;">Brow Arch Illustration</p>
      </div>

      <div class="gold-divider"></div>

      <div class="profile-status">Your Profile is Set.</div>
      <h1 class="main-heading">From here,<br />the work is yours.</h1>

      <div class="tag-list">
        <div class="tag-row">
          <span class="tag-key">Skin Tone</span>
          <div class="tag-value-wrap">
            <div class="tone-indicator" id="tone-indicator-color"></div>
            <span class="tag-value" id="complete-skin-tone">Medium Warm</span>
          </div>
        </div>

        <div class="tag-row">
          <span class="tag-key">Brow Goal</span>
          <span class="tag-value" id="complete-brow-goal">Colour</span>
        </div>

        <div class="tag-row">
          <span class="tag-key">Style Direction</span>
          <span class="tag-value" id="complete-style">Refined & Natural</span>
        </div>
      </div>

      <a href="onboarding-style.php" class="edit-link">Edit Your Selections →</a>

      <div class="actions">
        <button class="btn btn-primary" onclick="enterArch()">Enter Arch</button>
      </div>

      <div class="footer-note">Everything here can be updated as you go.</div>
    </div>

  </main>

  <script>
    function enterArch() {
      window.location.href = 'dashboard.php';
    }

    document.addEventListener('DOMContentLoaded', function() {
      const tone = localStorage.getItem('archSkinTone') || 'medium-warm';
      const toneMap = {
        'fair': { label: 'Fair', color: '#f5deb3' },
        'light': { label: 'Light', color: '#d4a574' },
        'medium': { label: 'Medium', color: '#c07845' },
        'medium-warm': { label: 'Medium Warm', color: '#b67a3f' },
        'deep': { label: 'Deep', color: '#6b3a1f' },
        'rich': { label: 'Rich', color: '#3d1c0a' }
      };
      const toneData = toneMap[tone] || toneMap['medium-warm'];
      
      const toneEl = document.getElementById('complete-skin-tone');
      const indicator = document.getElementById('tone-indicator-color');
      if (toneEl) toneEl.textContent = toneData.label;
      if (indicator) indicator.style.background = toneData.color;

      const goal = localStorage.getItem('archBrowGoal') || 'colour';
      const goalMap = { 'shape': 'Shape', 'colour': 'Colour', 'both': 'Both' };
      const goalEl = document.getElementById('complete-brow-goal');
      if (goalEl) goalEl.textContent = goalMap[goal] || 'Colour';

      const style = localStorage.getItem('archStyle') || 'refined';
      const styleMap = { 'refined': 'Refined & Natural', 'precise': 'Precise & Considered', 'discover': 'Show Me What Suits Me' };
      const styleEl = document.getElementById('complete-style');
      if (styleEl) styleEl.textContent = styleMap[style] || 'Refined & Natural';
    });
  </script>

</body>
</html>