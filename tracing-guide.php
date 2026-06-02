<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tracing Guide — Royals Arch Brow</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <style>
    :root {
      --black: #0a0a0a;
      --white: #f5f0e8;
      --white-dim: rgba(245,240,232,0.6);
      --gold: #c9a84c;
      --gold-light: #d4b96a;
      --border: rgba(201,168,76,0.2);
      --card: rgba(255,255,255,0.03);
      --radius: 30px;
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
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 24px 16px;
    }

    .page {
      width: 100%;
      max-width: 1100px;
      background: rgba(255,255,255,0.02);
      border: 1px solid rgba(255,255,255,0.08);
      border-radius: 36px;
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

    .content {
      padding: 0 24px 24px;
    }

    .guide-card {
      margin: 0 24px 22px;
      border-radius: 36px;
      background: rgba(255,255,255,0.03);
      border: 1px solid rgba(255,255,255,0.08);
      min-height: 280px;
      display: grid;
      place-items: center;
      position: relative;
      overflow: hidden;
    }

    .guide-card::before {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(circle at 50% 20%, rgba(201,168,76,0.12), transparent 44%);
      pointer-events: none;
    }

    .guide-shape {
      position: relative;
      width: 160px;
      height: 240px;
      border-radius: 90px 90px 90px 90px;
      border: 1px solid rgba(201,168,76,0.5);
      display: grid;
      place-items: center;
    }

    .guide-shape::before {
      content: '';
      position: absolute;
      top: 32px;
      width: 100px;
      height: 30px;
      border-radius: 999px;
      border: 1px solid rgba(201,168,76,0.85);
      box-shadow: 0 0 18px rgba(201,168,76,0.16);
    }

    .guide-dot {
      position: absolute;
      top: 48px;
      left: 50%;
      transform: translateX(-50%);
      width: 14px;
      height: 14px;
      background: var(--gold);
      border-radius: 50%;
      box-shadow: 0 0 18px rgba(201,168,76,0.3);
    }

    .headline {
      font-family: var(--font-display);
      font-style: italic;
      font-size: clamp(2rem, 4vw, 2.5rem);
      line-height: 1.05;
      margin-bottom: 0.8rem;
      color: var(--white);
    }

    .subtitle {
      color: var(--white-dim);
      font-size: 0.95rem;
      margin-bottom: 24px;
    }

    .steps {
      display: grid;
      gap: 14px;
      margin-bottom: 22px;
    }

    .step {
      display: flex;
      align-items: flex-start;
      gap: 12px;
    }

    .step-index {
      min-width: 28px;
      height: 28px;
      border-radius: 50%;
      border: 1px solid var(--gold);
      color: var(--gold);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      margin-top: 2px;
      background: rgba(201,168,76,0.08);
    }

    .step-text {
      color: var(--white-dim);
      font-size: 0.95rem;
      line-height: 1.6;
    }

    .small-note {
      color: rgba(245,240,232,0.5);
      font-size: 0.82rem;
      line-height: 1.7;
      margin-bottom: 22px;
    }

    .btn {
      display: inline-flex;
      width: 100%;
      padding: 1rem 1.2rem;
      border-radius: 999px;
      border: none;
      background: var(--gold);
      color: #0a0a0a;
      font-size: 0.85rem;
      letter-spacing: 0.16em;
      text-transform: uppercase;
      font-weight: 700;
      justify-content: center;
      text-decoration: none;
      transition: transform var(--transition), background var(--transition);
    }

    .btn:hover { background: var(--gold-light); transform: translateY(-1px); }

    .watch-link {
      display: block;
      margin-top: 16px;
      text-align: center;
      color: var(--white-dim);
      font-size: 0.85rem;
      text-decoration: none;
      letter-spacing: 0.06em;
      transition: color var(--transition);
    }

    .watch-link:hover { color: var(--gold); }

    @media (max-width: 520px) {
      .page { border-radius: 30px; }
      .topbar { padding: 20px 20px 16px; }
      .content { padding: 0 20px 20px; }
      .guide-card { margin: 0 20px 18px; }
      .headline { font-size: 2.2rem; }
    }
  </style>
</head>
<body>
  <section class="page">
    <div class="topbar">
      <a href="preview-look.php" aria-label="Back">&#8592;</a>
      <div class="title">Tracing guide</div>
      <div class="brand"><img src="assets/logo.png" alt="CG logo" /></div>
    </div>

    <div class="guide-card">
      <div class="guide-shape">
        <span class="guide-dot"></span>
      </div>
    </div>

    <div class="content">
      <h1 class="headline">Draw the shape you want to keep.</h1>
      <p class="subtitle">Trace your ideal brow. Share the guide with your brow artist — they’ll work within your line.</p>

      <div class="steps">
        <div class="step">
          <div class="step-index">1</div>
          <div class="step-text">Frame your face in the guide</div>
        </div>
        <div class="step">
          <div class="step-index">2</div>
          <div class="step-text">Trace each brow with your fingertip</div>
        </div>
        <div class="step">
          <div class="step-index">3</div>
          <div class="step-text">Save and share with your artist</div>
        </div>
      </div>

      <p class="small-note">Draw freely. Every line can be refined as you go.</p>

      <a class="btn" href="guide-complete.php">Begin drawing</a>
      <a class="watch-link" href="#">Watch how it works.</a>
    </div>
  </section>
</body>
</html>