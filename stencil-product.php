<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Precision Arch Stencil Kit — Royals Arch Brow</title>
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

    /* preview card with stencil graphic */
    .preview-card {
      border-radius: var(--radius);
      background: rgba(255,255,255,0.03);
      border: 1px solid rgba(255,255,255,0.08);
      min-height: 180px;
      display: grid;
      place-items: center;
      position: relative;
      overflow: hidden;
      margin-bottom: 24px;
      padding: 24px 16px;
    }

    .preview-card::before {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(circle at center, rgba(201,168,76,0.08), transparent 50%);
      pointer-events: none;
    }

    .stencil-graphic {
      position: relative;
      z-index: 1;
      width: 100%;
      max-width: 280px;
      height: 80px;
      border-radius: 16px;
      background: linear-gradient(180deg, #111, #0f0f0f);
      border: 2px solid rgba(201,168,76,0.25);
      display: grid;
      place-items: center;
    }

    .brow-arc {
      width: 60%;
      height: 28px;
      border-top: 10px solid var(--gold);
      border-radius: 999px;
      transform: translateY(-6px);
      opacity: 0.9;
    }

    .headline {
      font-family: var(--font-display);
      font-style: italic;
      font-size: clamp(1.6rem, 4vw, 2.2rem);
      line-height: 1.05;
      color: var(--white);
      text-align: center;
      margin-bottom: 6px;
    }

    .price {
      color: var(--gold);
      font-weight: 600;
      text-align: center;
      font-size: 1.1rem;
      margin-bottom: 12px;
    }

    .desc {
      color: var(--white-dim);
      font-size: 0.95rem;
      text-align: center;
      line-height: 1.7;
      margin-bottom: 12px;
      padding: 0 8px;
    }

    .shipping {
      color: var(--gold);
      font-size: 0.85rem;
      text-align: center;
      margin-bottom: 24px;
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
      .stencil-graphic { height: 70px; }
    }
  </style>
</head>
<body>
  <section class="page">
    <div class="topbar">
      <a href="javascript:history.back()" aria-label="Back">&#8592;</a>
      <div class="title">Precision Arch</div>
      <div class="brand"><img src="assets/logo.png" alt="CG logo" style="width:24px;height:24px;object-fit:contain;" /></div>
    </div>

    <div class="content">
      <!-- preview card with stencil graphic -->
      <div class="preview-card">
        <div class="stencil-graphic">
          <div class="brow-arc"></div>
        </div>
      </div>

      <h1 class="headline">Precision Arch Stencil Kit</h1>
      <div class="price">$48.00</div>
      <div class="desc">A professional-grade stencil designed for exacting results at home. The arch that editorial artists trust — now yours.</div>
      <div class="shipping">Arrives in 2–3 days. Complimentary delivery over $50.</div>

      <div class="actions">
        <button class="btn btn-secondary" onclick="addToBag()">Add to bag</button>
        <button class="btn btn-secondary" onclick="tryOn()">Try it on first</button>
      </div>
    </div>
  </section>

  <script>
    function addToBag() {
      alert('Added to bag.');
    }

    function tryOn() {
      alert('Opening try-on flow...');
      // window.location.href = 'face-scan-ui.php';
    }
  </script>
</body>
</html>