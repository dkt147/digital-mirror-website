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
      --dark-grey: #2b2b2b;
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
      max-width: 650px;
      background: var(--black);
      border: 1px solid rgba(255,255,255,0.06);
      border-radius: 36px;
      padding: 24px 24px 30px;
      box-shadow: 0 24px 60px rgba(0,0,0,0.7);
    }

    .topbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 24px;
    }

    .topbar a,
    .topbar .brand {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--gold);
      border: 1px solid var(--gold);
      text-decoration: none;
      transition: background 0.2s;
    }

    .topbar a:hover { background: rgba(201,168,76,0.1); }

    .topbar .brand {
      overflow: hidden;
      padding: 0;
    }

    .topbar .brand img {
      width: 100%;
      height: 100%;
      object-fit: contain;
    }

    .topbar .title {
      flex: 1;
      text-align: center;
      font-size: 0.75rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: var(--gold);
      font-weight: 600;
    }

    .main-title {
      font-family: var(--font-display);
      font-style: italic;
      font-size: 1.9rem;
      line-height: 1.05;
      color: var(--white);
      margin-bottom: 1.2rem;
      text-align: center;
    }

    .brief-card {
      position: relative;
      background: rgba(255,255,255,0.02);
      border: 1px solid var(--gold);
      border-radius: 24px;
      padding: 22px 20px;
      margin-bottom: 24px;
    }

    .brief-heading {
      display: flex;
      align-items: center;
      justify-content: space-between;
      color: var(--gold);
      font-size: 0.75rem;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      margin-bottom: 16px;
    }

    .field-list {
      display: grid;
      gap: 14px;
    }

    .field {
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 1px solid rgba(255,255,255,0.06);
      padding-bottom: 10px;
    }

    .field:last-child {
      border-bottom: none;
      padding-bottom: 0;
      flex-direction: column;
      align-items: flex-start;
      gap: 4px;
    }

    .field-label {
      color: var(--gold);
      font-size: 0.75rem;
      letter-spacing: 0.08em;
    }

    .field-value {
      color: var(--white);
      font-size: 0.95rem;
    }

    .field-value.note {
      color: var(--white-dim);
      font-size: 0.85rem;
    }

    /* C/M Badge Floating */
    .badge-container {
      position: absolute;
      top: -15px;
      right: 15px;
      display: flex;
      align-items: center;
    }

    .cm-badge {
      display: flex;
      align-items: center;
      gap: 4px;
      background: rgba(30,30,30,0.7);
      backdrop-filter: blur(4px);
      padding: 4px 6px;
      border-radius: 20px;
      border: 1px solid rgba(255,255,255,0.05);
    }

    .cm-badge span {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 11px;
      font-weight: 700;
      color: white;
    }

    .c-badge { background: #e86c3e; }
    .m-badge { background: #5e7da6; }

    /* Buttons */
    .actions {
      display: flex;
      flex-direction: column;
      gap: 12px;
    }

    .btn-primary-dark {
      display: flex;
      justify-content: center;
      align-items: center;
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

    .btn-primary-dark:hover { background: #3a3a3a; }

    .row-actions {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 12px;
    }

    .btn-secondary {
      display: flex;
      justify-content: center;
      align-items: center;
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

    .btn-secondary:hover { border-color: var(--gold); color: var(--gold); }

    @media (max-width: 480px) {
      .page { padding: 16px; }
      .main-title { font-size: 1.6rem; }
      .row-actions { grid-template-columns: 1fr; }
      .field { flex-direction: column; align-items: flex-start; gap: 4px; }
      .field-value { text-align: left; }
    }
  </style>
</head>
<body>
  <div class="page">
    <div class="topbar">
      <a href="saved-guide.php">&#8592;</a>
      <div class="title">YOUR APPOINTMENT BRIEF</div>
      <div class="brand">
        <img src="assets/logo.png" alt="CG logo" />
      </div>
    </div>

    <h1 class="main-title">Share this with your brow artist before you arrive.</h1>

    <div class="brief-card">
      <div class="brief-heading">ARCH · BROW BRIEF</div>

      <div class="field-list">
        <div class="field">
          <span class="field-label">Shape</span>
          <span class="field-value">Soft Arch</span>
        </div>
        <div class="field">
          <span class="field-label">Colour</span>
          <span class="field-value">Ash Brown</span>
        </div>
        <div class="field">
          <span class="field-label">Intensity</span>
          <span class="field-value">Considered</span>
        </div>
        <div class="field">
          <span class="field-label">Face shape</span>
          <span class="field-value">Oval</span>
        </div>
        <div class="field">
          <span class="field-label">Notes for artist</span>
          <span class="field-value note">Tap to add notes...</span>
        </div>
      </div>
    </div>

    <div class="actions">
      <a class="btn-primary-dark" href="recommendation.php">SAVE AS IMAGE</a>
      <div class="row-actions">
        <a class="btn-secondary" href="#">Via message</a>
        <a class="btn-secondary" href="#">Via email</a>
      </div>
    </div>
  </div>
</body>
</html>