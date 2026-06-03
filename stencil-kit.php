<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Stencil Kit — Royals Arch Brow</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    :root {
      --black: #0a0a0a;
      --white: #f5f0e8;
      --white-dim: rgba(245,240,232,0.65);
      --gold: #c9a84c;
      --gold-light: #d4b96a;
      --gold-dark: #8a6f2e;
      --border: rgba(201,168,76,0.2);
      --card: rgba(255,255,255,0.03);
      --radius: 30px;
      --transition: 0.25s ease;
      --font-display: 'Cormorant Garamond', serif;
      --font-body: 'Montserrat', sans-serif;
    }

    html, body { min-height: 100%; }
    body {
      background: var(--black);
      color: var(--white);
      font-family: var(--font-body);
      line-height: 1.5;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 24px 16px;
    }

    .page {
      width: 100%;
      max-width: 1100px;
      border-radius: 36px;
      background: rgba(255,255,255,0.02);
      border: 1px solid rgba(255,255,255,0.08);
      box-shadow: 0 24px 90px rgba(0,0,0,0.7);
      backdrop-filter: blur(16px);
      overflow: hidden;
    }

    .topbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 24px 24px 18px;
    }

    .topbar a,
    .topbar .brand {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      color: var(--gold);
      border: 1px solid var(--gold);
      text-decoration: none;
      transition: transform var(--transition), background var(--transition);
    }

    .topbar a:hover { background: rgba(201,168,76,0.12); transform: scale(1.05); }
    .topbar .title {
      flex: 1;
      text-align: center;
      font-family: var(--font-display);
      font-size: 0.95rem;
      letter-spacing: 0.28em;
      text-transform: uppercase;
      color: var(--gold);
    }

    .content { padding: 0 24px 24px; }

    .headline {
      font-family: var(--font-display);
      font-style: italic;
      font-size: clamp(1.8rem, 4vw, 2.4rem);
      line-height: 1.05;
      color: var(--white);
      text-align: center;
      margin-bottom: 6px;
    }

    .subtitle {
      color: var(--white-dim);
      font-size: 0.95rem;
      text-align: center;
      line-height: 1.7;
      margin-bottom: 28px;
      padding: 0 16px;
    }

    /* options cards */
    .options {
      display: flex;
      flex-direction: column;
      gap: 16px;
      margin-bottom: 28px;
    }

    .option {
      border-radius: var(--radius);
      padding: 20px 24px;
      background: rgba(255,255,255,0.03);
      border: 1px solid rgba(255,255,255,0.08);
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: space-between;
      transition: all var(--transition);
      text-align: left;
      position: relative;
      overflow: hidden;
    }

    .option::before {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(circle at 20% 20%, rgba(201,168,76,0.06), transparent 60%);
      pointer-events: none;
    }

    .option:hover {
      border-color: rgba(201,168,76,0.3);
      background: rgba(255,255,255,0.06);
      transform: translateY(-2px);
    }

    .option.gold {
      border: 1px solid var(--gold);
      background: rgba(201,168,76,0.08);
      box-shadow: 0 0 0 1px rgba(201,168,76,0.1);
    }

    .option .text {
      display: flex;
      flex-direction: column;
      gap: 4px;
      z-index: 1;
    }

    .option .text h3 {
      font-family: var(--font-display);
      font-size: 1.2rem;
      font-weight: 400;
      color: var(--white);
      margin: 0;
      line-height: 1.2;
    }

    .option.gold .text h3 {
      color: var(--gold);
    }

    .option .text p {
      font-size: 0.9rem;
      color: var(--white-dim);
      margin: 0;
      line-height: 1.5;
    }

    .option .ai-badge {
      background: rgba(255,255,255,0.05);
      padding: 6px 14px;
      border-radius: 999px;
      border: 1px solid rgba(255,255,255,0.08);
      font-size: 0.7rem;
      color: var(--gold);
      letter-spacing: 0.08em;
      font-weight: 500;
      z-index: 1;
      white-space: nowrap;
    }

    .option .icon-arrow {
      color: var(--gold);
      font-size: 1.2rem;
      opacity: 0.6;
      z-index: 1;
    }

    /* actions */
    .actions {
      display: grid;
      gap: 12px;
      margin-top: 12px;
    }

    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 100%;
      padding: 1rem 1.2rem;
      border-radius: 999px;
      font-size: 0.85rem;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      font-weight: 700;
      text-decoration: none;
      transition: transform var(--transition), background var(--transition), border-color var(--transition);
      cursor: pointer;
      border: none;
      font-family: var(--font-body);
    }

    .btn-secondary {
      background: transparent;
      border: 1px solid rgba(255,255,255,0.12);
      color: var(--white);
    }

    .btn-secondary:hover {
      border-color: var(--gold);
      color: var(--gold);
    }

    .link-gold {
      text-align: center;
      color: var(--gold);
      font-size: 0.9rem;
      letter-spacing: 0.04em;
      padding: 6px 0 4px;
      cursor: pointer;
      transition: color var(--transition);
      font-weight: 400;
    }

    .link-gold:hover {
      color: var(--gold-light);
      text-decoration: underline;
    }

    @media (max-width: 520px) {
      .page { border-radius: 30px; }
      .topbar { padding: 20px 20px 16px; }
      .content { padding: 0 20px 20px; }
      .option { padding: 16px 18px; }
    }
  </style>
</head>
<body>
  <section class="page">
    <div class="topbar">
      <a href="javascript:history.back()" aria-label="Back">&#8592;</a>
      <div class="title">Stencil Kit</div>
      <div class="brand"><img src="assets/logo.png" alt="CG logo" style="width:24px;height:24px;object-fit:contain;" /></div>
    </div>

    <div class="content">
      <h1 class="headline">Working with a stencil kit?</h1>
      <p class="subtitle">We'll help you find your shape — or confirm the one you have.</p>

      <div class="options">
        <!-- option 1: gold / featured -->
        <button class="option gold" onclick="chooseStyle()">
          <div class="text">
            <h3>Choose my style</h3>
            <p>Browse the library and select your shape.</p>
          </div>
          <div class="icon-arrow">→</div>
        </button>

        <!-- option 2: AI match -->
        <button class="option" onclick="matchStencil()">
          <div class="text">
            <h3>Match me to a stencil</h3>
            <p>We'll scan your face and identify the kit built for it.</p>
          </div>
          <div class="ai-badge">AI</div>
        </button>
      </div>

      <div class="actions">
        <button class="btn btn-secondary" onclick="location.href='index.php'">Return home</button>
        <div class="link-gold" onclick="goBack()">Back</div>
      </div>
    </div>
  </section>

  <script>
    function goBack() {
      history.back();
    }

    function chooseStyle() {
      // direct to library page
      window.location.href = 'choose-style.php';
    }

    function matchStencil() {
      // start face scan flow
      window.location.href = 'face-scan-ui.php';
    }
  </script>
</body>
</html>