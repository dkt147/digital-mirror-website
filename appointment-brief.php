<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Appointment Brief — Royals Arch Brow</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <style>
    :root {
      --black: #0a0a0a;
      --white: #f5f0e8;
      --white-dim: rgba(245,240,232,0.65);
      --gold: #c9a84c;
      --gold-light: #d4b96a;
      --border: rgba(201,168,76,0.25);
      --card: rgba(255,255,255,0.03);
      --radius: 28px;
      --radius-sm: 16px;
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
      font-size: 0.82rem;
      letter-spacing: 0.28em;
      text-transform: uppercase;
      color: var(--gold);
    }

    .content {
      padding: 0 24px 24px;
    }

    .main-title {
      font-family: var(--font-display);
      font-size: 1.75rem;
      font-style: italic;
      line-height: 1.05;
      color: var(--white);
      margin-bottom: 0.75rem;
      text-align: center;
    }

    .subtitle {
      color: var(--white-dim);
      font-size: 0.95rem;
      text-align: center;
      margin-bottom: 24px;
      letter-spacing: 0.01em;
    }

    .brief-card {
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: 28px;
      padding: 22px 20px;
      margin-bottom: 24px;
    }

    .brief-heading {
      display: inline-flex;
      align-items: center;
      justify-content: space-between;
      width: 100%;
      gap: 12px;
      margin-bottom: 18px;
      color: var(--gold);
      font-size: 0.8rem;
      letter-spacing: 0.2em;
      text-transform: uppercase;
    }

    .brief-heading span {
      font-weight: 700;
      color: var(--white);
      letter-spacing: 0.09em;
      text-transform: none;
    }

    .field-list {
      display: grid;
      gap: 18px;
    }

    .field {
      display: grid;
      grid-template-columns: 1fr auto;
      gap: 12px;
      align-items: center;
      border-bottom: 1px solid rgba(255,255,255,0.08);
      padding-bottom: 10px;
    }

    .field:last-child { border-bottom: none; padding-bottom: 0; }

    .field-label {
      color: var(--gold);
      font-size: 0.75rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
    }

    .field-value {
      color: var(--white);
      text-align: right;
      font-size: 1rem;
      line-height: 1.3;
    }

    .field-value.note {
      color: var(--white-dim);
      text-align: left;
      font-size: 0.92rem;
      grid-column: 1 / -1;
    }

    .button-block {
      display: grid;
      gap: 14px;
      margin-bottom: 16px;
    }

    .btn-primary,
    .btn-secondary {
      width: 100%;
      text-align: center;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      border-radius: 999px;
      padding: 1rem 1.2rem;
      font-size: 0.9rem;
      letter-spacing: 0.15em;
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

    .row-actions {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 14px;
    }

    .btn-secondary {
      background: transparent;
      border: 1px solid rgba(255,255,255,0.12);
      color: var(--white);
    }

    .btn-secondary:hover { border-color: var(--gold); color: var(--gold); }

    @media (max-width: 520px) {
      .page { border-radius: 30px; }
      .topbar { padding: 20px 20px 16px; }
      .content { padding: 0 20px 20px; }
      .row-actions { grid-template-columns: 1fr; }
      .brief-heading { font-size: 0.75rem; }
      .field { grid-template-columns: 1fr; text-align: left; }
      .field-value { text-align: left; }
      .field-value.note { text-align: left; }
    }
  </style>
</head>
<body>
  <main class="page">
    <div class="topbar">
      <a href="saved-look.php" aria-label="Back">&#8592;</a>
      <div class="title">Your appointment brief</div>
      <div class="brand"><img src="assets/logo.png" alt="CG logo" /></div>
    </div>

    <div class="content">
      <h1 class="main-title">Share this with your brow artist before you arrive.</h1>
      <p class="subtitle">Your appointment brief contains the key details they need to recreate your ideal brow.</p>

      <section class="brief-card">
        <div class="brief-heading">ARCH · BROW BRIEF <span>Shape</span></div>
        <div class="field">
          <div class="field-label">Shape</div>
          <div class="field-value">Soft Arch</div>
        </div>
        <div class="field">
          <div class="field-label">Colour</div>
          <div class="field-value">Ash Brown</div>
        </div>
        <div class="field">
          <div class="field-label">Intensity</div>
          <div class="field-value">Considered</div>
        </div>
        <div class="field">
          <div class="field-label">Face shape</div>
          <div class="field-value">Oval</div>
        </div>
        <div class="field">
          <div class="field-label">Notes for artist</div>
          <div class="field-value note">Tap to add notes...</div>
        </div>
      </section>

      <div class="button-block">
        <a class="btn-primary" href="#">Save as image</a>
      </div>
      <div class="row-actions">
        <a class="btn-secondary" href="#">Via message</a>
        <a class="btn-secondary" href="#">Via email</a>
      </div>
    </div>
  </main>
</body>
</html>