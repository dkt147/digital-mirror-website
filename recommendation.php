<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Recommendation — Royals Arch Brow</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <style>
    :root {
      --black: #0a0a0a;
      --white: #f5f0e8;
      --white-dim: rgba(245,240,232,0.65);
      --gold: #c9a84c;
      --gold-light: #d4b96a;
      --dark-grey: #2b2b2b;
      --border: rgba(201,168,76,0.25);
      --transition: 0.25s ease;
      --font-display: 'Cormorant Garamond', serif;
      --font-body: 'Montserrat', sans-serif;
    }

    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      background: var(--black);
      color: var(--white);
      font-family: var(--font-body);
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      padding: 20px;
    }

    .page {
      width: 100%;
      max-width: 520px;
      background: var(--black);
      border: 1px solid rgba(255,255,255,0.06);
      border-radius: 36px;
      padding: 24px 24px 30px;
      box-shadow: 0 24px 60px rgba(0,0,0,0.7);
    }

    /* TOP BAR */
    .topbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 24px;
    }

    .topbar a,
    .topbar .brand {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--gold);
      border: 1px solid var(--gold);
      text-decoration: none;
      transition: background 0.2s;
    }

    .topbar a:hover { background: rgba(201,168,76,0.1); }

    .topbar .brand {
      border: none;
      padding: 0;
      overflow: hidden;
    }

    .topbar .brand img {
      width: 100%;
      height: 100%;
      object-fit: contain;
    }

    .topbar .title {
      flex: 1;
      text-align: center;
      font-size: 0.75rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: var(--gold);
      font-weight: 600;
    }

    /* FACE ILLUSTRATION */
    .illustration-wrapper {
      position: relative;
      width: 100%;
      margin-bottom: 24px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .face-svg {
      width: 150px;
      height: 240px;
    }

    /* TEXT CONTENT */
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

    /* C/M BADGE */
    .badge-container {
      display: flex;
      justify-content: center;
      margin-bottom: 20px;
    }

    .cm-badge {
      display: flex;
      align-items: center;
      background: rgba(30,30,30,0.6);
      backdrop-filter: blur(4px);
      border-radius: 99px;
      padding: 4px 6px;
      gap: 6px;
      border: 1px solid rgba(255,255,255,0.05);
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

    .c-badge { background: #e86c3e; }
    .m-badge { background: #5e7da6; }

    /* BUTTONS */
    .actions {
      display: flex;
      flex-direction: column;
      gap: 12px;
      margin-top: 4px;
    }

    .btn-primary {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      padding: 1rem;
      border-radius: 999px;
      border: none;
      background: var(--dark-grey);
      color: var(--gold);
      font-size: 0.8rem;
      font-weight: 700;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      text-decoration: none;
      transition: background 0.2s;
    }

    .btn-primary:hover { background: #3a3a3a; }

    .btn-link {
      display: block;
      text-align: center;
      color: var(--gold);
      font-size: 0.8rem;
      text-decoration: none;
      transition: opacity 0.2s;
    }

    .btn-link:hover { opacity: 0.7; }

    @media (max-width: 400px) {
      .page { padding: 16px; }
      .hero-title { font-size: 1.8rem; }
      .face-svg { width: 120px; height: 200px; }
    }
  </style>
</head>
<body>
  <div class="page">
    <div class="topbar">
      <a href="appointment-brief.php">&#8592;</a>
      <div class="title">RECOMMENDATION</div>
      <div class="brand">
        <img src="assets/logo.png" alt="CG logo" />
      </div>
    </div>

    <div class="illustration-wrapper">
      <svg class="face-svg" viewBox="0 0 150 240" fill="none" xmlns="http://www.w3.org/2000/svg">
        <!-- Face Outline -->
        <path d="M75 4C110 4 130 30 130 80C130 130 110 220 75 236C40 220 20 130 20 80C20 30 40 4 75 4Z" stroke="#c9a84c" stroke-width="0.8" opacity="0.6"/>
        <!-- Brow Arches -->
        <path d="M35 55 Q55 30 75 55" stroke="#c9a84c" stroke-width="1.2" fill="none"/>
        <path d="M75 55 Q95 30 115 55" stroke="#c9a84c" stroke-width="1.2" fill="none"/>
        <!-- Eye Dots -->
        <circle cx="50" cy="75" r="4" stroke="#c9a84c" stroke-width="0.8" fill="none" opacity="0.4"/>
        <circle cx="100" cy="75" r="4" stroke="#c9a84c" stroke-width="0.8" fill="none" opacity="0.4"/>
        <!-- Chin Dot -->
        <circle cx="75" cy="215" r="3" fill="#c9a84c" opacity="0.8"/>
        <!-- Dashed vertical center line -->
        <line x1="75" y1="90" x2="75" y2="190" stroke="#c9a84c" stroke-width="0.5" stroke-dasharray="4 4" opacity="0.3"/>
        <!-- Dashed horizontal line -->
        <line x1="50" y1="130" x2="100" y2="130" stroke="#c9a84c" stroke-width="0.5" stroke-dasharray="4 4" opacity="0.3"/>
      </svg>
    </div>

    <h1 class="hero-title">Let your features guide the choice.</h1>
    <p class="hero-desc">We'll read your face shape and identify the styles built for it. The result is specific to you.</p>

    <div class="actions">
      <a class="btn-primary" href="#">ANALYSE MY FACE</a>
      <a class="btn-link" href="#">Browse all styles instead</a>
    </div>
  </div>
</body>
</html>