<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Face Shape Result — Royals Arch Brow</title>
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
      --gold: #c9a84c;
      --gold-light: #d4b96a;
      --gold-dark: #8a6f2e;
      --white: #f5f0e8;
      --white-dim: rgba(245, 240, 232, 0.55);
      --border: rgba(201, 168, 76, 0.18);
      --font-display: 'Cormorant Garamond', serif;
      --font-body: 'Montserrat', sans-serif;
      --transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    body {
      background: var(--black);
      color: var(--white);
      font-family: var(--font-body);
      font-weight: 300;
      min-height: 100vh;
      line-height: 1.6;
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

    /* ====== NAVBAR (CSS for PHP Include) ====== */
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

    /* ====== MAIN LAYOUT ====== */
    .main {
      max-width: 100%;
      margin: 0 auto;
      padding: 0 1.5rem 2.5rem;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 1rem;
    }

    /* ====== RESULT CARD ====== */
    .result-label {
      font-size: 0.65rem;
      letter-spacing: 0.22em;
      text-transform: uppercase;
      color: var(--gold);
      font-weight: 500;
      margin-top: 0.5rem;
      margin-bottom: 0.25rem;
    }

    .result-card-wrapper {
      position: relative;
      width: 180px;
      height: 180px;
      border-radius: 34px;
      padding: 3px;
      background: linear-gradient(135deg, var(--gold-dark), var(--gold-light));
      box-shadow: 0 0 40px rgba(201, 168, 76, 0.12);
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 6px;
    }

    .result-card {
      width: 100%;
      height: 100%;
      border-radius: 32px;
      background: rgba(10, 10, 10, 0.9);
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .result-card-text {
      color: var(--white-dim);
      font-size: 0.95rem;
      font-weight: 300;
      padding: 1.5rem;
    }

    .gold-check {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      border: 1.5px solid var(--gold);
      display: flex;
      align-items: center;
      justify-content: center;
      background: var(--black);
      margin-top: -12px;
      position: relative;
      z-index: 5;
    }

    .gold-check svg {
      width: 16px;
      height: 16px;
      stroke: var(--gold);
      stroke-width: 2.5;
      fill: none;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    /* ====== FACE SHAPE TEXT ====== */
    .shape-title-italic {
      font-family: var(--font-display);
      font-style: italic;
      font-size: 1.4rem;
      font-weight: 400;
      color: var(--white);
      margin-top: 0.5rem;
      margin-bottom: 0.1rem;
    }

    .shape-value {
      font-family: var(--font-display);
      font-size: 2.6rem;
      font-weight: 400;
      color: var(--white);
      line-height: 1;
    }

    .shape-sub-label {
      font-size: 0.65rem;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 1.25rem;
    }

    /* ====== STYLE OPTIONS (EXACT MATCH) ====== */
    .options-box {
      width: 100%;
      max-width: 100%;
      display: flex;
      flex-direction: column;
      gap: 0.75rem;
      margin-bottom: 0.5rem;
    }

    .option-btn {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 1rem 1.25rem;
      border-radius: 16px;
      border: 1px solid rgba(255, 255, 255, 0.08);
      background: #11110e;
      color: var(--white);
      transition: all var(--transition);
      cursor: pointer;
      width: 100%;
      text-align: left;
    }

    .option-btn.active {
      border: 1.5px solid var(--gold);
      background: #211d11;
    }

    .option-btn .text-group {
      display: flex;
      flex-direction: column;
      gap: 0.1rem;
    }

    .option-btn .main-title {
       font-family: var(--font-display);  
      font-size: 1.15rem;
      font-weight: 400;
      color: var(--white);
      letter-spacing: 0.02em;
    }

    .option-btn .sub-title {
      font-size: 0.7rem;
      font-weight: 400;
      color: var(--gold);
      font-style: italic;
      letter-spacing: 0.02em;
    }

    .option-btn svg {
      stroke: var(--white);
      fill: none;
      stroke-linecap: round;
      stroke-width: 2;
      width: 28px;
      height: 16px;
    }

    .option-btn.active svg {
      stroke: var(--gold);
    }

    /* ====== FOOTNOTE & BUTTONS ====== */
    .footnote {
      font-size: 0.75rem;
      color: rgba(255, 255, 255, 0.4);
      margin: 0.5rem 0 0.75rem;
      line-height: 1.4;
      font-weight: 300;
      text-align: center;
    }

    .btn-gold {
      width: 100%;
      max-width: 100%;
      padding: 1rem;
      border-radius: 999px;
      background: var(--gold);
      color: var(--black);
      font-size: 0.75rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      font-weight: 700;
      border: none;
      cursor: pointer;
      transition: background var(--transition);
      font-family: var(--font-body);
    }

    .btn-gold:hover {
      background: var(--gold-light);
    }

    .link-gold {
      color: var(--gold);
      font-size: 0.85rem;
      font-weight: 400;
      cursor: pointer;
      margin-top: 0.25rem;
      transition: color var(--transition);
    }

    .link-gold:hover {
      text-decoration: underline;
      color: var(--gold-light);
    }

    @media (max-width: 900px) {
      .navbar { padding: 0.875rem 1.25rem; }
      .navbar-nav { display: none; }
      .result-card-wrapper { width: 150px; height: 150px; }
      .shape-value { font-size: 2rem; }
    }
  </style>
</head>
<body>

  <!-- ===== NAVBAR (PHP INCLUDE - wahi rakha hy) ===== -->
  <?php include 'includes/navbar.php'; ?>

  <!-- Gold rule -->
  <div class="nav-gold-rule"></div>

  <!-- ===== MAIN CONTENT (Screenshot ke mutabiq) ===== -->
  <main class="main">
    <!-- Result Label -->
    <div class="result-label">Your Result</div>

    <!-- Result Card -->
    <div class="result-card-wrapper">
      <div class="result-card">
        <div class="result-card-text">Leave As Placeholder.</div>
      </div>
    </div>

    <!-- Gold Checkmark -->
    <div class="gold-check">
      <svg viewBox="0 0 24 24">
        <polyline points="20 6 9 17 4 12"></polyline>
      </svg>
    </div>

    <!-- Face Shape Text -->
    <div class="shape-title-italic">Your face shape:</div>
    <div class="shape-value">Oval</div>
    <div class="shape-sub-label">Your Shape</div>

    <!-- 3 Style Options -->
    <div class="options-box">
      <!-- Considered (Active) -->
      <div class="option-btn active">
        <div class="text-group">
          <span class="main-title">Considered</span>
          <span class="sub-title">Top Recommendation</span>
        </div>
        <svg viewBox="0 0 40 20">
          <path d="M2 10 Q 10 2 20 8 Q 30 14 38 10" stroke-linecap="round"/>
        </svg>
      </div>

      <!-- Arch -->
      <div class="option-btn">
        <div class="text-group">
          <span class="main-title">Arch</span>
        </div>
        <svg viewBox="0 0 40 20">
          <path d="M2 12 Q 10 4 20 8 Q 30 12 38 12" stroke-linecap="round"/>
        </svg>
      </div>

      <!-- Understated -->
      <div class="option-btn">
        <div class="text-group">
          <span class="main-title">Understated</span>
        </div>
        <svg viewBox="0 0 40 20">
          <path d="M2 10 Q 20 2 38 10" stroke-linecap="round"/>
        </svg>
      </div>
    </div>

    <!-- Footnote -->
    <div class="footnote">
      Tailored to your features. You lead from here.
    </div>

    <!-- CTA Button -->
    <button class="btn-gold">Try Top Recommendation</button>

    <!-- Bottom Link -->
    <div class="link-gold">See all styles</div>
  </main>

</body>
</html>