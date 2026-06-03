<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Membership — Royals Arch Brow</title>
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

    .section-label {
      font-size: 0.6rem;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--white-dim);
      font-weight: 500;
      margin-bottom: 12px;
    }

    .tier-card {
      border-radius: var(--radius);
      padding: 24px 20px;
      background: rgba(201,168,76,0.06);
      border: 1px solid rgba(201,168,76,0.2);
      margin-bottom: 28px;
      text-align: center;
    }

    .tier-top {
      font-size: 0.7rem;
      color: var(--white-dim);
      text-transform: uppercase;
      letter-spacing: 0.1em;
    }

    .tier-name {
      font-family: var(--font-display);
      font-size: 2rem;
      font-style: italic;
      color: var(--white);
      margin: 4px 0;
    }

    .tier-sub {
      font-size: 0.85rem;
      color: var(--white-dim);
    }

    .feature-list {
      display: grid;
      gap: 12px;
      margin-bottom: 28px;
      padding: 0 4px;
    }

    .feature-item {
      display: flex;
      align-items: flex-start;
      gap: 12px;
      color: var(--white-dim);
      font-size: 0.95rem;
      line-height: 1.6;
    }

    .feature-item::before {
      content: '\2713';
      color: var(--gold);
      font-weight: 700;
      font-size: 1.1rem;
      flex-shrink: 0;
    }

    .progress-section {
      margin-bottom: 28px;
    }

    .progress-meta {
      display: flex;
      justify-content: space-between;
      color: var(--white-dim);
      font-size: 0.85rem;
      margin-bottom: 6px;
    }

    .progress-bar {
      height: 6px;
      background: rgba(255,255,255,0.06);
      border-radius: 999px;
      overflow: hidden;
    }

    .progress-bar span {
      display: block;
      height: 100%;
      background: linear-gradient(90deg, var(--gold), var(--gold-light));
      width: 66%;
    }

    .desc {
      color: var(--white-dim);
      font-size: 0.95rem;
      line-height: 1.7;
      margin-bottom: 24px;
      padding: 0 4px;
    }

    .actions {
      display: grid;
      gap: 12px;
      width: 100%;
      max-width: 460px;
      margin-left: auto;
      margin-right: auto;
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

    .row {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 12px;
      margin-top: 6px;
    }

    @media (max-width: 520px) {
      .page { border-radius: 30px; }
      .topbar { padding: 20px 20px 16px; }
      .content { padding: 0 20px 20px; }
      .row { grid-template-columns: 1fr; }
      .tier-card { padding: 20px 16px; }
      .tier-name { font-size: 1.7rem; }
    }
  </style>
</head>
<body>
  <section class="page">
    <div class="topbar">
      <a href="javascript:history.back()" aria-label="Back">&#8592;</a>
      <div class="title">Membership</div>
      <div class="brand"><img src="assets/logo.png" alt="CG logo" style="width:24px;height:24px;object-fit:contain;" /></div>
    </div>

    <div class="content">
      <div class="section-label">Your standing</div>
      <div class="tier-card">
        <div class="tier-top">Current tier</div>
        <div class="tier-name">Considered</div>
        <div class="tier-sub">Member</div>
      </div>

      <div class="section-label">What this unlocks</div>
      <div class="feature-list">
        <div class="feature-item">Priority artist appointments</div>
        <div class="feature-item">Consultation PDF export</div>
        <div class="feature-item">Early access to new styles</div>
      </div>

      <div class="section-label">Next tier: Deliberate</div>
      <div class="progress-section">
        <div class="progress-meta">
          <span>2 of 3 sessions</span>
          <span>66%</span>
        </div>
        <div class="progress-bar">
          <span style="width:66%"></span>
        </div>
      </div>

      <div class="desc">Deliberate membership: private workshops, personalised artist matching, full consultation archive.</div>

      <div class="actions">
        <a href="session-active.php" class="btn btn-secondary">View your session history</a>
      </div>
    </div>
  </section>
</body>
</html>