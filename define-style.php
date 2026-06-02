<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Define Your Look — Royals Arch Brow</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <style>
    :root {
      --black: #0a0a0a;
      --white: #f5f0e8;
      --white-dim: rgba(245,240,232,0.65);
      --gold: #c9a84c;
      --gold-light: #d4b96a;
      --gold-muted: rgba(201,168,76,0.12);
      --border: rgba(201,168,76,0.25);
      --dark-card: #111111;
      --radius: 28px;
      --radius-sm: 18px;
      --transition: 0.25s ease;
      --font-display: 'Cormorant Garamond', serif;
      --font-body: 'Montserrat', sans-serif;
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }
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

    .screen {
      width: 100%;
      max-width: 1100px;
      border-radius: 38px;
      background: rgba(255,255,255,0.02);
      border: 1px solid rgba(255,255,255,0.08);
      box-shadow: 0 24px 80px rgba(0,0,0,0.7);
      backdrop-filter: blur(18px);
      overflow: hidden;
    }

    .top-bar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 24px 24px 18px;
    }

    .top-bar a,
    .top-bar .logo {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      color: var(--gold);
      border: 1px solid var(--gold);
      transition: transform var(--transition), background var(--transition);
    }

    .top-bar a:hover { background: rgba(201,168,76,0.12); transform: scale(1.05); }

    .top-bar .title {
      flex: 1;
      text-align: center;
      font-family: var(--font-display);
      font-size: 0.82rem;
      letter-spacing: 0.26em;
      text-transform: uppercase;
      color: var(--gold);
    }

    .panel {
      padding: 0 24px 24px;
    }

    .hero-title {
      font-family: var(--font-display);
      font-style: italic;
      font-size: clamp(2.2rem, 5vw, 3rem);
      line-height: 1.02;
      margin-bottom: 0.75rem;
      color: var(--white);
    }

    .hero-sub {
      color: var(--white-dim);
      font-size: 0.95rem;
      letter-spacing: 0.01em;
      margin-bottom: 2rem;
    }

    .option-list {
      display: grid;
      gap: 16px;
      margin-bottom: 24px;
    }

    .option-card {
      display: grid;
      grid-template-columns: 1fr auto;
      gap: 16px;
      padding: 22px 20px;
      border-radius: 26px;
      border: 1px solid var(--border);
      background: rgba(255,255,255,0.02);
      transition: border-color var(--transition), background var(--transition), box-shadow var(--transition);
    }

    .option-card.selected {
      background: rgba(201,168,76,0.08);
      border-color: var(--gold);
      box-shadow: 0 18px 30px rgba(201,168,76,0.16);
    }

    .option-top {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
    }

    .option-title {
      font-family: var(--font-display);
      font-size: 1.4rem;
      line-height: 1.05;
      color: var(--white);
    }

    .option-note {
      color: var(--white-dim);
      font-size: 0.9rem;
      margin-top: 0.65rem;
      letter-spacing: 0.01em;
      max-width: 68%;
    }

    /* .option-icon {
      width: 60px;
      height: 44px;
      border-radius: 18px;
      background: rgba(255,255,255,0.08);
      position: relative;
      overflow: hidden;
    }

    .option-icon::before {
      content: '';
      position: absolute;
      left: 12px;
      right: 12px;
      top: 50%;
      height: 6px;
      border-radius: 999px;
      background: var(--white);
      transform: translateY(-50%);
      opacity: 0.9;
    }

    .option-icon.variant::before { width: 54%; }
    .option-icon.large::before { width: 80%; }
    .option-icon.small::before { width: 40%; } */

    .radio {
      width: 22px;
      height: 22px;
      border-radius: 50%;
      border: 1px solid var(--white-dim);
      position: relative;
      flex-shrink: 0;
      align-self: center;
    }

    .option-card.selected .radio { border-color: var(--gold); }

    .radio::after {
      content: '';
      position: absolute;
      inset: 5px;
      border-radius: 50%;
      background: var(--gold);
      opacity: 0;
      transition: opacity var(--transition);
    }

    .option-card.selected .radio::after { opacity: 1; }

    .bottom-button {
      display: inline-flex;
      width: 100%;
      padding: 1rem 1.2rem;
      border-radius: 999px;
      border: none;
      background: var(--gold);
      color: #0a0a0a;
      font-weight: 700;
      letter-spacing: 0.16em;
      text-transform: uppercase;
      text-align: center;
      transition: transform var(--transition), background var(--transition);
      text-decoration: none;
    }

    .bottom-button:hover { background: var(--gold-light); transform: translateY(-1px); }

    @media (max-width: 520px) {
      .screen { border-radius: 30px; }
      .top-bar { padding: 20px 20px 16px; }
      .panel { padding: 0 20px 20px; }
      .option-card { padding: 18px 16px; }
      .option-title { font-size: 1.25rem; }
      .option-icon { width: 52px; }
    }
  </style>
</head>
<body>
  <section class="screen">
    <div class="top-bar">
      <a href="choose-style.php" aria-label="Back">&#8592;</a>
      <div class="title">Choose your expression</div>
      <div class="logo"><img src="assets/logo.png" alt="CG logo" /></div>
    </div>

    <div class="panel">
      <h1 class="hero-title">How defined would you like it?</h1>
      <p class="hero-sub">The same shape, three expressions.</p>

      <div class="option-list">
        <div class="option-card selected">
          <div>
            <div class="option-top">
              <div class="option-title">Understated</div>
              <div class="radio"></div>
            </div>
            <p class="option-note">It should be soft, barely-there. Natural confidence.</p>
          </div>
          <div class="option-icon small"></div>
        </div>

        <div class="option-card">
          <div>
            <div class="option-top">
              <div class="option-title">Considered</div>
              <div class="radio"></div>
            </div>
            <p class="option-note">Polished and present. Your everyday at its best.</p>
          </div>
          <div class="option-icon variant"></div>
        </div>

        <div class="option-card">
          <div>
            <div class="option-top">
              <div class="option-title">Deliberate</div>
              <div class="radio"></div>
            </div>
            <p class="option-note">Precise. Structured. A brow with a point of view.</p>
          </div>
          <div class="option-icon large"></div>
        </div>
      </div>

      <a class="bottom-button" href="preview-look.php">See this look</a>
    </div>
  </section>
</body>
</html>