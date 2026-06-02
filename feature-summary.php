<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Feature Summary — Royals Arch Brow</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <style>
    :root {
      --black: #0a0a0a;
      --dark: #111111;
      --gold: #c9a84c;
      --gold-light: #d4b96a;
      --gold-muted: rgba(201,168,76,0.15);
      --white: #f5f0e8;
      --white-dim: rgba(245,240,232,0.65);
      --white-faint: rgba(245,240,232,0.2);
      --border: rgba(201,168,76,0.2);
      --radius: 24px;
      --radius-sm: 14px;
      --transition: 0.3s ease;
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
      padding: 32px 100px;
    }

    .page-wrap {
      width: 100%;
      max-width: 1100px;
      margin: 0 auto;
      padding: 32px;
      border: 1px solid rgba(255,255,255,0.05);
      border-radius: 36px;
      background: rgba(255,255,255,0.02);
      backdrop-filter: blur(12px);
      box-shadow: 0 24px 80px rgba(0,0,0,0.8);
    }

    .top-bar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 2rem;
    }

    .back-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 46px;
      height: 46px;
      border-radius: 50%;
      border: 1px solid var(--gold);
      color: var(--gold);
      text-decoration: none;
      transition: transform var(--transition), background var(--transition);
    }

    .back-btn:hover {
      background: rgba(201,168,76,0.14);
      transform: scale(1.05);
    }

    .brand-mark {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 46px;
      height: 46px;
      border-radius: 50%;
      background: radial-gradient(circle at top, rgba(201,168,76,0.2), transparent 45%);
      border: 1px solid rgba(255,255,255,0.08);
      color: var(--gold);
      font-weight: 700;
      font-size: 0.9rem;
      letter-spacing: 0.12em;
    }

    .headline-text {
      text-transform: uppercase;
      letter-spacing: 0.24em;
      color: var(--white-dim);
      font-size: 0.72rem;
      margin-bottom: 1.4rem;
    }

    .headline-text span {
      color: var(--gold);
    }

    .feature-copy {
      font-family: var(--font-display);
      font-style: italic;
      font-size: clamp(2rem, 4vw, 3.4rem);
      line-height: 1.05;
      margin-bottom: 1rem;
      color: var(--white);
    }

    .feature-copy.faint {
      color: var(--white-dim);
      font-size: 0.95rem;
      font-style: normal;
      font-family: var(--font-body);
      letter-spacing: 0.02em;
      margin-top: 1.5rem;
    }

    .tags {
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 0.85rem;
      margin-top: 2rem;
      margin-bottom: 1.5rem;
    }

    .tag {
      padding: 0.95rem 1rem;
      border-radius: 999px;
      border: 1px solid var(--gold);
      color: var(--gold);
      text-align: center;
      font-size: 0.72rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      background: rgba(201,168,76,0.08);
      transition: transform var(--transition), box-shadow var(--transition);
      cursor: default;
    }

    .tag:hover {
      transform: translateY(-1px);
      box-shadow: 0 18px 40px rgba(201,168,76,0.1);
    }

    .cta-wrap {
      display: flex;
      flex-direction: column;
      gap: 1rem;
      margin-top: 2rem;
    }

    .btn-primary {
      display: inline-flex;
      justify-content: center;
      align-items: center;
      gap: 0.5rem;
      width: 100%;
      padding: 1rem 1.25rem;
      border-radius: 999px;
      border: none;
      background: var(--gold);
      color: var(--black);
      text-transform: uppercase;
      font-size: 0.85rem;
      letter-spacing: 0.16em;
      font-weight: 600;
      transition: transform var(--transition), background var(--transition);
    }

    .btn-primary:hover {
      background: var(--gold-light);
      transform: translateY(-1px);
    }

    .link-secondary {
      display: inline-flex;
      justify-content: center;
      color: var(--white-dim);
      text-decoration: none;
      font-size: 0.82rem;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      transition: color var(--transition);
    }

    .link-secondary:hover {
      color: var(--gold);
    }

    @media (max-width: 520px) {
      .page-wrap { padding: 28px 24px; }
      .tags { grid-template-columns: 1fr; }
      .top-bar { gap: 1rem; }
    }
  </style>
</head>
<body>
  <main class="page-wrap">
    <div class="top-bar">
      <a class="back-btn" href="onboarding-style.php" aria-label="Back">&#8592;</a>
      <div class="brand-mark"><img src="assets/logo.png" alt="CG logo" /></div>
    </div>

    <div class="headline-text">What your features tell us</div>

    <h1 class="feature-copy">A naturally elevated arch.</h1>
    <h1 class="feature-copy">Strong symmetry.</h1>
    <h1 class="feature-copy">The kind of face that carries a considered shape with ease.</h1>

    <div class="tags">
      <div class="tag">Oval face</div>
      <div class="tag">High arch</div>
      <div class="tag">Strong brow bone</div>
    </div>

    <div class="feature-copy faint">Your recommendations are ready.</div>

    <div class="cta-wrap">
      <a class="btn-primary" href="#">See what suits your features</a>
      <a class="link-secondary" href="#">Browse all styles instead</a>
    </div>
  </main>
</body>
</html>