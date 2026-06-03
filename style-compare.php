<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Compare — Royals Arch Brow</title>
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

    .headline {
      font-family: var(--font-display);
      font-style: italic;
      font-size: clamp(1.8rem, 4vw, 2.4rem);
      line-height: 1.05;
      color: var(--white);
      text-align: center;
      margin-bottom: 6px;
    }

    .subtitle {
      color: var(--white-dim);
      font-size: 0.95rem;
      text-align: center;
      line-height: 1.7;
      margin-bottom: 28px;
      padding: 0 16px;
    }

    /* comparison cards */
    .compare-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
      margin-bottom: 28px;
    }

    .compare-card {
      border-radius: var(--radius);
      padding: 16px 16px 20px;
      background: rgba(255,255,255,0.03);
      border: 1px solid rgba(255,255,255,0.08);
      transition: all var(--transition);
    }

    .compare-card.after {
      border: 1px solid var(--gold);
      background: rgba(201,168,76,0.06);
      box-shadow: 0 0 0 1px rgba(201,168,76,0.1);
    }

    .compare-card .label {
      font-size: 0.6rem;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--white-dim);
      font-weight: 500;
      margin-bottom: 10px;
    }

    .compare-card.after .label {
      color: var(--gold);
    }

    .compare-card .thumb {
      width: 100%;
      aspect-ratio: 1/1;
      border-radius: 18px;
      overflow: hidden;
      background: rgba(255,255,255,0.02);
      margin-bottom: 12px;
    }

    .compare-card .thumb img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    .compare-card .description {
      font-size: 0.9rem;
      color: var(--white-dim);
      line-height: 1.5;
      text-align: center;
    }

    .compare-card.after .description {
      color: var(--white);
    }

    .note {
      font-size: 0.85rem;
      color: var(--white-dim);
      text-align: center;
      margin-bottom: 24px;
      padding: 0 12px;
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

    .btn-primary {
      background: var(--gold);
      color: #0a0a0a;
    }

    .btn-primary:hover {
      background: var(--gold-light);
      transform: translateY(-1px);
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

    .link-gold {
      text-align: center;
      color: var(--gold);
      font-size: 0.9rem;
      letter-spacing: 0.04em;
      padding: 6px 0 4px;
      cursor: pointer;
      transition: color var(--transition);
      font-weight: 400;
    }

    .link-gold:hover {
      color: var(--gold-light);
      text-decoration: underline;
    }

    @media (max-width: 520px) {
      .page { border-radius: 30px; }
      .topbar { padding: 20px 20px 16px; }
      .content { padding: 0 20px 20px; }
      .compare-grid { grid-template-columns: 1fr; }
    }
  </style>
</head>
<body>
  <section class="page">
    <div class="topbar">
      <a href="javascript:history.back()" aria-label="Back">&#8592;</a>
      <div class="title">Compare</div>
      <div class="brand"><img src="assets/logo.png" alt="CG logo" style="width:24px;height:24px;object-fit:contain;" /></div>
    </div>

    <div class="content">
      <h1 class="headline">The difference, clearly shown.</h1>
      <p class="subtitle">Your before — and — after is saved automatically to my looks.</p>

      <div class="compare-grid">
        <!-- before card -->
        <div class="compare-card">
          <div class="label">Before</div>
          <div class="thumb">
            <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=400&q=80" alt="before" />
          </div>
          <div class="description">Where you're beginning. Already beautiful.</div>
        </div>

        <!-- after card (gold border) -->
        <div class="compare-card after">
          <div class="label">After</div>
          <div class="thumb">
            <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=400&q=80" alt="after" />
          </div>
          <div class="description">After: Soft arch</div>
        </div>
      </div>

      <div class="note">Your before & after is saved automatically to my looks.</div>

      <div class="actions">
        <button class="btn btn-secondary" onclick="chooseThis()">This is the one</button>
        <div class="link-gold" onclick="tryAnother()">Try another style</div>
      </div>
    </div>
  </section>

  <script>
    function goBack() { history.back(); }

    function chooseThis() {
      alert('This is the one — saved to your looks.');
      // window.location.href = 'saved-look.php';
    }

    function tryAnother() {
      alert('Try another style');
      // window.location.href = 'choose-stencil.php';
    }
  </script>
</body>
</html>