<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Guide Complete — Royals Arch Brow</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <style>
    :root {
      --black: #0a0a0a;
      --white: #f5f0e8;
      --white-dim: rgba(245,240,232,0.6);
      --gold: #c9a84c;
      --gold-light: #d4b96a;
      --border: rgba(201,168,76,0.22);
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
    .portrait {
      margin: 0 24px 22px;
      border-radius: 28px;
      background: #111111;
      border: 1px solid rgba(255,255,255,0.08);
      min-height: 260px;
      display: grid;
      place-items: center;
      position: relative;
      overflow: hidden;
    }
    .portrait::after {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(circle at top, rgba(201,168,76,0.12), transparent 40%);
      pointer-events: none;
    }
    .portrait-box {
      width: 170px;
      height: 170px;
      border-radius: 28px;
      border: 2px solid rgba(201,168,76,0.8);
      background: rgba(255,255,255,0.05);
      display: grid;
      place-items: center;
      position: relative;
    }
    .portrait-box::after {
      content: '\2713';
      position: absolute;
      bottom: -12px;
      right: -12px;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: var(--gold);
      color: var(--black);
      font-weight: 700;
      display: grid;
      place-items: center;
      box-shadow: 0 10px 20px rgba(0,0,0,0.25);
    }
    .headline {
      font-family: var(--font-display);
      font-style: italic;
      font-size: clamp(2rem, 4vw, 2.6rem);
      line-height: 1.05;
      color: var(--white);
      margin-bottom: 12px;
      text-align: center;
    }
    .subtitle {
      color: var(--white-dim);
      font-size: 0.95rem;
      line-height: 1.7;
      text-align: center;
      margin-bottom: 28px;
      padding: 0 12px;
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
    .footer {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-top: 18px;
      padding: 0 4px;
      font-size: 0.8rem;
      color: var(--gold);
      letter-spacing: 0.08em;
    }
    .footer a { color: inherit; text-decoration: none; transition: color var(--transition); }
    .footer a:hover { color: var(--white); }
    @media (max-width: 520px) {
      .page { border-radius: 30px; }
      .topbar { padding: 20px 20px 16px; }
      .content { padding: 0 20px 20px; }
    }
  </style>
</head>
<body>
  <section class="page">
    <div class="topbar">
      <a href="tracing-guide.php" aria-label="Back">&#8592;</a>
      <div class="title">Guide complete</div>
      <div class="brand"><img src="assets/logo.png" alt="CG logo" /></div>
    </div>
    <div class="portrait">
      <div class="portrait-box"></div>
    </div>
    <div class="content">
      <h1 class="headline">Guide complete.</h1>
      <p class="subtitle">Your tracing guide is drawn. Share this with your brow artist — they’ll work within your line. Saved guides live in my looks - ready to open at your appointment.</p>
      <div class="actions">
        <a class="btn btn-primary" href="saved-look.php">Save my guide</a>
        <a class="btn btn-secondary" href="#">Share with my artist</a>
      </div>
      <div class="footer">
        <a href="#">Share with someone more</a>
        <a href="index.php">Return to home</a>
      </div>
    </div>
  </section>
</body>
</html>