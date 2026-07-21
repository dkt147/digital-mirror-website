<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Recommendation — Royals Arch Brow</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap"
    rel="stylesheet" />
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
      --radius: 18px;
      --radius-sm: 10px;
      --transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html {
      font-size: 16px;
      scroll-behavior: smooth;
    }

    body {
      background: var(--black);
      color: var(--white);
      font-family: var(--font-body);
      font-weight: 300;
      line-height: 1.6;
      min-height: 100vh;
      overflow-x: hidden;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

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

    .navbar-left {
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .nav-avatar {
      width: 42px;
      height: 42px;
      border-radius: 50%;
      overflow: hidden;
      border: 1.5px solid var(--gold-dark);
      flex-shrink: 0;
    }

    .nav-avatar img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    .navbar-nav {
      display: flex;
      align-items: center;
      gap: 2.5rem;
      list-style: none;
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
    }

    .navbar-nav a {
      font-size: 0.65rem;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--white-dim);
      transition: color var(--transition);
      font-weight: 400;
    }

    .navbar-nav a:hover,
    .navbar-nav a.active {
      color: var(--gold);
    }

    .btn-book {
      padding: 0.55rem 1.5rem;
      font-size: 0.65rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      border-radius: 50px;
      border: 1px solid var(--border);
      color: var(--white-dim);
      transition: all var(--transition);
    }

    .btn-book:hover {
      border-color: var(--gold);
      color: var(--gold);
    }

    .nav-emblem {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      background: radial-gradient(circle at 35% 35%, #2a2010, #1a1408);
      border: 1.5px solid var(--gold-dark);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      overflow: hidden;
    }

    .nav-emblem img {
      width: 26px;
      height: 26px;
      object-fit: contain;
    }

    .nav-gold-rule {
      height: 1px;
      background: linear-gradient(to right, transparent 0%, var(--gold-dark) 30%, var(--gold-dark) 70%, transparent 100%);
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
      border: 1px solid #c9a84c;
      color: #c9a84c;
      text-decoration: none;
      transition: all var(--transition);
      background: transparent;
      flex-shrink: 0;
    }

    .back-btn:hover {
      background: rgba(201, 168, 76, 0.12);
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
      font-size: 0.6rem;
      letter-spacing: 0.25em;
      text-transform: uppercase;
      color: var(--gold);
      font-weight: 500;
      margin-bottom: 0.2rem;
    }

    .page-title {
      font-family: var(--font-display);
      font-style: italic;
      font-size: 2rem;
      font-weight: 400;
      color: var(--white);
      line-height: 1.05;
    }

    /* ====== ILLUSTRATION ====== */
    .illustration-wrapper {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 1.5rem;
    }

    .face-svg {
      width: 150px;
      height: 240px;
    }

    /* ====== CONTENT ====== */
    .hero-title {
      font-family: var(--font-display);
      font-style: italic;
      font-size: 2.2rem;
      line-height: 1.05;
      color: var(--white);
      text-align: center;
      margin-bottom: 10px;
    }

    .hero-desc {
      color: var(--gold-light);
      font-size: 0.9rem;
      text-align: center;
      line-height: 1.6;
      margin-bottom: 24px;
      padding: 0 10px;
    }

    .badge-container {
      display: flex;
      justify-content: center;
      margin-bottom: 20px;
    }

    .cm-badge {
      display: flex;
      align-items: center;
      background: rgba(30, 30, 30, 0.6);
      backdrop-filter: blur(4px);
      border-radius: 99px;
      padding: 4px 6px;
      gap: 6px;
      border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .cm-badge span {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.7rem;
      font-weight: 700;
      color: white;
    }

    .c-badge {
      background: #e86c3e;
    }

    .m-badge {
      background: #5e7da6;
    }

    /* ====== BUTTONS ====== */
    .actions {
      display: grid;
      gap: 0.75rem;
      width: 100%;
      max-width: 100%;
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
        border: 1px solid var(--border);
        color: var(--white);
        border-radius: 27px;
        text-align: center;
    }

    .btn-primary:hover {
        border-color: var(--gold);
        color: var(--black);
        transform: translateY(-2px);
    }

    .btn-link {
      text-align: center;
      color: var(--gold);
      font-size: 0.8rem;
      text-decoration: none;
      transition: opacity var(--transition);
    }

    .btn-link:hover {
      opacity: 0.7;
    }

    /* ====== ANIMATIONS ====== */
    @keyframes fadeUp {
      from {
        opacity: 0;
        transform: translateY(16px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .fade-1 {
      animation: fadeUp 0.55s ease 0.05s both;
    }

    .fade-2 {
      animation: fadeUp 0.55s ease 0.15s both;
    }

    .fade-3 {
      animation: fadeUp 0.55s ease 0.25s both;
    }

    .fade-4 {
      animation: fadeUp 0.55s ease 0.35s both;
    }

    .fade-5 {
      animation: fadeUp 0.55s ease 0.45s both;
    }

    /* ====== RESPONSIVE ====== */
    @media (max-width: 900px) {
      .main {
        padding: 0 1.25rem 1.5rem;
      }

      .navbar {
        padding: 0.875rem 1.25rem;
      }

      .navbar-nav {
        display: none;
      }

      .page-title {
        font-size: 1.6rem;
      }

      .hero-title {
        font-size: 1.8rem;
      }

      .face-svg {
        width: 120px;
        height: 200px;
      }

      .back-btn {
        width: 38px;
        height: 38px;
      }

      .page-logo {
        width: 38px;
        height: 38px;
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
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
          stroke-linecap="round" stroke-linejoin="round">
          <line x1="19" y1="12" x2="5" y2="12"></line>
          <polyline points="12 19 5 12 12 5"></polyline>
        </svg>
      </a>
      <div class="page-title-center">Recommendation</div>
    </div>

    <!-- CONTENT HEADER -->
    <div class="fade-2">
      <div class="page-label">Style Recommendation</div>
      <div class="page-title">Let your features guide the choice.</div>
    </div>

    <!-- ILLUSTRATION -->
    <div class="illustration-wrapper fade-3">
      <svg class="face-svg" viewBox="0 0 150 240" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M75 4C110 4 130 30 130 80C130 130 110 220 75 236C40 220 20 130 20 80C20 30 40 4 75 4Z" stroke="#c9a84c"
          stroke-width="0.8" opacity="0.6" />
        <path d="M35 55 Q55 30 75 55" stroke="#c9a84c" stroke-width="1.2" fill="none" />
        <path d="M75 55 Q95 30 115 55" stroke="#c9a84c" stroke-width="1.2" fill="none" />
        <circle cx="50" cy="75" r="4" stroke="#c9a84c" stroke-width="0.8" fill="none" opacity="0.4" />
        <circle cx="100" cy="75" r="4" stroke="#c9a84c" stroke-width="0.8" fill="none" opacity="0.4" />
        <circle cx="75" cy="215" r="3" fill="#c9a84c" opacity="0.8" />
        <line x1="75" y1="90" x2="75" y2="190" stroke="#c9a84c" stroke-width="0.5" stroke-dasharray="4 4"
          opacity="0.3" />
        <line x1="50" y1="130" x2="100" y2="130" stroke="#c9a84c" stroke-width="0.5" stroke-dasharray="4 4"
          opacity="0.3" />
      </svg>
    </div>

    <!-- CONTENT -->
    <div class="fade-4">
      <h1 class="hero-title">Let your features guide the choice.</h1>
      <p class="hero-desc">We'll read your face shape and identify the styles built for it. The result is specific to
        you.</p>
    </div>

    <!-- ACTIONS -->
    <div class="actions fade-5">
      <a class="btn btn-primary" href="face-preportions.php">Analyse
        my face</a>
      <a class="btn-link" href="#">Browse all styles instead</a>
    </div>

  </main>

  <script>
    const API_BASE = '<?php echo $API_URL; ?>';
    const token = localStorage.getItem('archAccessToken');

    async function loadRecommendations() {
      if (!token) {
        console.log('No token available, showing default recommendations.');
        return;
      }

      try {
        const payload = {
          face_shape: localStorage.getItem('archFaceShape') || '',
          brow_shape: localStorage.getItem('archBrowShape') || '',
          features: (localStorage.getItem('archFeatures') || '').split(',').filter(f => f.trim()),
          colour: localStorage.getItem('archBrowColour') || ''
        };

        const response = await fetch(`${API_BASE}/recommendations`, {
          method: 'POST',
          headers: {
            accept: 'application/json',
            'Content-Type': 'application/json',
            Authorization: `Bearer ${token}`
          },
          body: JSON.stringify(payload)
        });

        const recommendations = await response.json().catch(() => []);
        if (!response.ok) {
          console.warn('Could not load personalized recommendations:', recommendations.detail || response.statusText);
          return;
        }

        if (Array.isArray(recommendations) && recommendations.length > 0) {
          const heroTitle = document.querySelector('.hero-title');
          if (heroTitle) {
            heroTitle.textContent = recommendations[0].title || 'Let your features guide the choice.';
          }

          const heroDesc = document.querySelector('.hero-desc');
          if (heroDesc) {
            heroDesc.textContent = recommendations[0].description || 'We\'ll read your face shape and identify the styles built for it.';
          }
        }
      } catch (err) {
        console.error('Error loading recommendations:', err);
      }
    }

    document.addEventListener('DOMContentLoaded', loadRecommendations);
  </script>

</body>

</html>