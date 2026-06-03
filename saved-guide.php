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
      --white-dim: rgba(245,240,232,0.7);
      --gold: #c9a84c;
      --gold-light: #d4b96a;
      --dark-grey: #2b2b2b;
      --font-display: 'Cormorant Garamond', serif;
      --font-body: 'Montserrat', sans-serif;
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }
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
      max-width: 650px;
      background: var(--black);
      border: 1px solid rgba(255,255,255,0.06);
      border-radius: 36px;
      padding: 24px 24px 30px;
      box-shadow: 0 24px 60px rgba(0,0,0,0.7);
      position: relative;
    }

    .topbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .topbar a {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--gold);
      border: 1px solid var(--gold);
      text-decoration: none;
      font-size: 1.2rem;
      transition: background 0.2s;
    }

    .topbar a:hover { background: rgba(201,168,76,0.1); }

    .topbar .brand {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 1px solid var(--gold);
      padding: 0;
      overflow: hidden;
    }

    .topbar .brand img {
      width: 100%;
      height: 100%;
      object-fit: contain;
    }

    .check-icon {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      border: 1px solid var(--gold);
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 20px auto 24px;
      background: rgba(201,168,76,0.05);
    }

    .check-icon svg {
      width: 40px;
      height: 40px;
      stroke: var(--gold);
      stroke-width: 2;
      fill: none;
    }

    .headline {
      font-family: var(--font-display);
      font-style: italic;
      font-size: 2.8rem;
      text-align: center;
      color: var(--white);
      margin-bottom: 16px;
    }

    .subtext {
      color: var(--white-dim);
      font-size: 0.95rem;
      text-align: center;
      line-height: 1.6;
      max-width: 90%;
      margin: 0 auto 20px;
    }

    .subtext-alt {
      color: var(--white-dim);
      font-size: 0.95rem;
      text-align: center;
      line-height: 1.6;
      margin-bottom: 40px;
    }

    .actions {
      display: flex;
      flex-direction: column;
      gap: 12px;
      margin-bottom: 12px;
    }

    .btn-primary {
      display: flex;
      align-items: center;
      justify-content: center;
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

    .row-actions {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 12px;
    }

    .btn-secondary {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 100%;
      padding: 0.9rem;
      border-radius: 999px;
      border: 1px solid rgba(255,255,255,0.12);
      background: transparent;
      color: var(--white);
      font-size: 0.75rem;
      font-weight: 600;
      letter-spacing: 0.08em;
      text-decoration: none;
      transition: border-color 0.2s, color 0.2s;
    }

    .btn-secondary:hover {
      border-color: var(--gold);
      color: var(--gold);
    }

    @media (max-width: 480px) {
      .page { padding: 16px; }
      .headline { font-size: 2.2rem; }
      .row-actions { grid-template-columns: 1fr; }
    }
  </style>
</head>
<body>
  <div class="page">
    <div class="topbar">
      <a href="guide-complete.php">&#8592;</a>
      <div class="brand">
        <img src="assets/logo.png" alt="CG logo" />
      </div>
    </div>

    <div class="check-icon">
      <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
        <polyline points="20 6 9 17 4 12"></polyline>
      </svg>
    </div>

    <h1 class="headline">Saved.</h1>
    <p class="subtext">Bring this to your next appointment. Your artist has exactly what they need.</p>
    <p class="subtext-alt">Every detail of your ideal shape, preserved.</p>

    <div class="actions">
      <a class="btn-primary" href="appointment-brief.php">VIEW IN MY LOOKS</a>
    </div>
    <div class="row-actions">
      <a class="btn-secondary" href="#">Share now</a>
      <a class="btn-secondary" href="index.php">Return home</a>
    </div>
  </div>
</body>
</html>