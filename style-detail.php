<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Soft arch — Royals Arch Brow</title>
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

    /* preview card (like the checkmark/icon card) */
    .preview-card {
      border-radius: var(--radius);
      background: rgba(255,255,255,0.03);
      border: 1px solid rgba(255,255,255,0.08);
      min-height: 200px;
      display: grid;
      place-items: center;
      position: relative;
      overflow: hidden;
      margin-bottom: 28px;
      padding: 24px 16px;
    }

    .preview-card::before {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(circle at center, rgba(201,168,76,0.08), transparent 50%);
      pointer-events: none;
    }

    .preview-placeholder {
      color: var(--white-dim);
      font-size: 1rem;
      letter-spacing: 0.04em;
      text-align: center;
      z-index: 1;
    }

    .preview-placeholder strong {
      color: var(--gold);
      font-weight: 400;
      font-family: var(--font-display);
      font-style: italic;
    }

    /* feature list */
    .feature-list {
      display: flex;
      flex-direction: column;
      gap: 1rem;
      margin-bottom: 2rem;
      padding: 0 8px;
    }

    .feature-item {
      display: flex;
      align-items: flex-start;
      gap: 0.85rem;
      color: var(--white-dim);
      font-size: 0.95rem;
      line-height: 1.7;
    }

    .feature-dot {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background: var(--gold);
      margin-top: 0.45rem;
      flex-shrink: 0;
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

    .badges {
      display: flex;
      gap: 10px;
      justify-content: center;
      margin-top: 16px;
    }

    .badge {
      width: 36px;
      height: 36px;
      border-radius: 50%;
      display: grid;
      place-items: center;
      background: linear-gradient(180deg, #f0ead8, #d4cdb8);
      color: #1a1a1a;
      font-weight: 700;
      font-size: 0.8rem;
      font-family: var(--font-body);
    }

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
      <a href="javascript:history.back()" aria-label="Back">&#8592;</a>
      <div class="title">Soft arch</div>
      <div class="brand"><img src="assets/logo.png" alt="CG logo" style="width:24px;height:24px;object-fit:contain;" /></div>
    </div>

    <div class="content">
      <h1 class="headline">Soft arch</h1>
      <p class="subtitle">Why this shape works for you</p>

      <!-- preview card (placeholder) -->
      <div class="preview-card">
        <div class="preview-placeholder">
          <strong>Soft arch preview</strong><br />
          <span style="font-size:0.85rem; color:var(--white-dim);">Stencil overlay appears here</span>
        </div>
      </div>

      <div class="feature-list">
        <div class="feature-item">
          <div class="feature-dot"></div>
          <div>It lifts your face along the natural line of your brow bone.</div>
        </div>
        <div class="feature-item">
          <div class="feature-dot"></div>
          <div>The graduated arch creates elegance without effort.</div>
        </div>
        <div class="feature-item">
          <div class="feature-dot"></div>
          <div>Oval faces carry this shape beautifully — it works with your proportions, not against them.</div>
        </div>
      </div>

      <div class="actions">
        <button class="btn btn-secondary" onclick="tryThisOn()">Try this on</button>
        <div class="link-gold" onclick="saveRec()">Save recommendation</div>
        <div class="link-gold" onclick="tryAnother()">Try another style</div>
      </div>

    </div>
  </section>

  <script>
    function goBack() { history.back(); }

    function tryThisOn() {
      alert('Try this on — opening preview');
      // window.location.href = 'stencil-preview.php?kit=soft-arch';
    }

    function saveRec() {
      alert('Recommendation saved! ✨');
      // window.location.href = 'saved.php';
    }

    function tryAnother() {
      alert('Loading different recommendation');
      // window.location.href = 'recommendations.php';
    }
  </script>
</body>
</html>