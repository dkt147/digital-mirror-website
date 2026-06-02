<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Saved — Royals Arch Brow</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <style>
    :root {
      --black: #0a0a0a;
      --white: #f5f0e8;
      --white-dim: rgba(245,240,232,0.65);
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
    .icon-card {
      margin: 0 24px 18px;
      border-radius: 28px;
      background: rgba(255,255,255,0.03);
      border: 1px solid rgba(255,255,255,0.08);
      min-height: 260px;
      display: grid;
      place-items: center;
      position: relative;
      overflow: hidden;
    }
    .icon-card::before {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(circle at center, rgba(201,168,76,0.1), transparent 45%);
      pointer-events: none;
    }
    .checkmark {
      width: 72px;
      height: 72px;
      border-radius: 50%;
      background: rgba(201,168,76,0.15);
      border: 1px solid rgba(201,168,76,0.35);
      display: grid;
      place-items: center;
      position: relative;
    }
    .checkmark::after {
      content: '\2713';
      color: var(--gold);
      font-size: 2rem;
      font-weight: 700;
    }
    .headline {
      font-family: var(--font-display);
      font-style: italic;
      font-size: clamp(2rem, 4vw, 2.6rem);
      line-height: 1.05;
      color: var(--white);
      text-align: center;
      margin-bottom: 10px;
    }
    .subtitle {
      color: var(--white-dim);
      font-size: 0.95rem;
      text-align: center;
      line-height: 1.7;
      margin-bottom: 28px;
      padding: 0 16px;
    }
    .actions { display: grid; gap: 12px; }
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
    }
    .btn-primary {
      background: var(--gold);
      color: #0a0a0a;
      border: none;
    }
    .btn-primary:hover { background: var(--gold-light); transform: translateY(-1px); }
    .btn-secondary {
      background: transparent;
      border: 1px solid rgba(255,255,255,0.12);
      color: var(--white);
    }
    .btn-secondary:hover { border-color: var(--gold); color: var(--gold); }
    .row { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 12px; margin-top: 12px; }
    @media (max-width: 520px) {
      .page { border-radius: 30px; }
      .topbar { padding: 20px 20px 16px; }
      .content { padding: 0 20px 20px; }
      .row { grid-template-columns: 1fr; }
    }
  </style>
</head>
<body>
  <section class="page">
    <div class="topbar">
      <a href="guide-complete.php" aria-label="Back">&#8592;</a>
      <div class="title">Saved</div>
      <div class="brand"><img src="assets/logo.png" alt="CG logo" /></div>
    </div>
    <div class="icon-card">
      <div class="checkmark"></div>
    </div>
    <div class="content">
      <h1 class="headline">Saved.</h1>
      <p class="subtitle">Bring this to your next appointment. Your artist has exactly what they need. Every detail of your ideal shape, preserved.</p>
      <div class="actions">
        <a class="btn btn-primary" href="appointment-brief.php">View in my looks</a>
        <div class="row">
          <a class="btn btn-secondary" href="#">Share now</a>
          <a class="btn btn-secondary" href="index.php">Return home</a>
        </div>
      </div>
    </div>
  </section>
</body>
</html>