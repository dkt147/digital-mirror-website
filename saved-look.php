<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Considered Style — Royals Arch Brow</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <style>
    :root {
      --black: #0a0a0a;
      --dark-grey-btn: #2b2b2b;
      --white: #f5f0e8;
      --white-dim: rgba(245,240,232,0.65);
      --gold: #c9a84c;
      --border-light: rgba(255,255,255,0.08);
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

    .page-container {
      width: 100%;
      max-width: 760px;
      background: rgba(0,0,0,0.8);
      border: 1px solid rgba(255,255,255,0.06);
      border-radius: 40px;
      overflow: hidden;
      box-shadow: 0 30px 80px rgba(0,0,0,0.6);
      backdrop-filter: blur(4px);
      padding: 24px 28px 30px;
    }

    /* TOP BAR */
    .top-bar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 24px;
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
      font-size: 1.2rem;
      transition: background 0.2s;
    }

    .back-btn:hover {
      background: rgba(201,168,76,0.1);
    }

    .top-title {
      font-family: var(--font-body);
      font-size: 0.8rem;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--gold);
      font-weight: 600;
    }

    .brand-logo {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 46px;
      height: 46px;
      color: var(--gold);
      font-family: var(--font-display);
      font-weight: 700;
      font-size: 1.4rem;
      letter-spacing: 0.02em;
      border: 1px solid rgba(255,255,255,0.06);
      border-radius: 50%;
      background: radial-gradient(circle at top left, rgba(201,168,76,0.1), transparent 40%);
    }

    /* HERO CARD */
    .hero-card {
      width: 100%;
      background: rgba(255,255,255,0.02);
      border-radius: 34px;
      min-height: 240px;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 1px solid var(--border-light);
      margin-bottom: 26px;
      position: relative;
    }

    .placeholder-text {
      color: var(--white);
      font-family: var(--font-body);
      font-weight: 400;
      font-size: 0.9rem;
      opacity: 0.6;
    }

    /* TYPOGRAPHY */
    .headline-large {
      font-family: var(--font-display);
      font-style: italic;
      font-size: clamp(2rem, 5vw, 2.8rem);
      line-height: 1.05;
      margin-bottom: 10px;
      color: var(--white);
    }

    .style-meta {
      font-family: var(--font-body);
      font-size: 0.9rem;
      color: var(--gold);
      font-weight: 400;
      margin-bottom: 12px;
    }

    .style-desc {
      font-family: var(--font-body);
      font-size: 0.9rem;
      color: var(--white-dim);
      line-height: 1.6;
      max-width: 90%;
      margin-bottom: 20px;
    }

    .try-note {
      font-family: var(--font-body);
      font-size: 0.75rem;
      color: var(--white-dim);
      font-style: italic;
      margin-bottom: 30px;
    }

    /* BUTTONS */
    .actions {
      display: flex;
      flex-direction: column;
      gap: 12px;
    }

    .btn-primary {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 100%;
      padding: 1rem;
      background: var(--dark-grey-btn);
      color: var(--white);
      border: none;
      border-radius: 999px;
      font-size: 0.8rem;
      font-weight: 700;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      text-decoration: none;
      transition: background 0.2s;
    }

    .btn-primary:hover {
      background: #3a3a3a;
    }

    .row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 12px;
    }

    .btn-secondary {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 100%;
      padding: 1rem;
      background: transparent;
      color: var(--white);
      border: 1px solid rgba(255,255,255,0.1);
      border-radius: 999px;
      font-size: 0.75rem;
      font-weight: 600;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      text-decoration: none;
      transition: border-color 0.2s, color 0.2s;
    }

    .btn-secondary:hover {
      border-color: var(--gold);
      color: var(--gold);
    }

    .logo-mark img {
      width: 100%;
      height: 100%;
      object-fit: contain;
    }

    @media (max-width: 480px) {
      .page-container { padding: 20px 16px 22px; }
      .row { grid-template-columns: 1fr; }
      .style-desc { max-width: 100%; }
    }
  </style>
</head>
<body>
  <div class="page-container">
    <header class="top-bar">
      <a class="back-btn" href="choose-style.php" aria-label="Back">&#8592;</a>
      <span class="top-title">CONSIDERED STYLE</span>
      <div class="logo-mark"><img src="assets/logo.png" alt="CG logo" /></div>
    </header>

    <div class="hero-card">
      <span class="placeholder-text">Leave As Placeholder.</span>
    </div>

    <main>
      <h1 class="headline-large">Notice what the arch does to your eyes.</h1>
      <div class="style-meta">Considered brow · Black</div>
      <p class="style-desc">The arch creates elegant lift and frames the upper face with precision.</p>
      <p class="try-note">Try As Many Styles As You Like.</p>

      <div class="actions">
        <a class="btn-primary" href="define-style.php">SAVE THIS LOOK</a>
        <div class="row">
          <a class="btn-secondary" href="choose-style.php">TRY ANOTHER</a>
          <a class="btn-secondary" href="manual-edit.php">EDIT MANUALLY</a>
        </div>
      </div>
    </main>
  </div>
</body>
</html>