<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Stencil Placed — Royals Arch Brow</title>
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

    /* image card with glow */
    .image-card-wrapper {
      position: relative;
      width: 200px;
      height: 200px;
      border-radius: 40px;
      padding: 4px;
      background: linear-gradient(135deg, var(--gold-dark), var(--gold-light));
      box-shadow: 0 0 40px rgba(201, 168, 76, 0.12);
      display: grid;
      place-items: center;
      margin: 0 auto 14px;
    }

    .image-card {
      width: 100%;
      height: 100%;
      border-radius: 32px;
      background: rgba(10,10,10,0.7);
      backdrop-filter: blur(4px);
      border: 1px solid rgba(255,255,255,0.08);
      overflow: hidden;
      display: grid;
      place-items: center;
    }

    .image-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 32px;
    }

    .kit-label {
      color: var(--gold);
      text-align: center;
      font-weight: 500;
      font-size: 0.9rem;
      letter-spacing: 0.04em;
      margin-bottom: 18px;
    }

    .actions {
      display: grid;
      gap: 12px;
      margin-top: 12px;
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

    .footer-links {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 18px;
      padding: 0 8px;
      flex-wrap: wrap;
      gap: 12px;
    }

    .footer-links a {
      color: var(--white-dim);
      text-decoration: none;
      font-size: 0.85rem;
      transition: color var(--transition);
      border-bottom: 1px solid transparent;
    }

    .footer-links a:hover {
      color: var(--gold);
      border-bottom: 1px solid var(--gold);
    }

    .badges {
      display: flex;
      gap: 10px;
      justify-content: center;
      margin-top: 14px;
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
      .row { grid-template-columns: 1fr; }
      .image-card-wrapper { width: 170px; height: 170px; }
      .footer-links { justify-content: center; }
    }
  </style>
</head>
<body>
  <section class="page">
    <div class="topbar">
      <a href="javascript:history.back()" aria-label="Back">&#8592;</a>
      <div class="title">Your Look</div>
      <div class="brand"><img src="assets/logo.png" alt="CG logo" style="width:24px;height:24px;object-fit:contain;" /></div>
    </div>

    <div class="content">
      <!-- image card with glow -->
      <div class="image-card-wrapper">
        <div class="image-card">
          <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=500&q=80" alt="placed stencil" />
        </div>
      </div>

      <div class="kit-label" id="kitLabel">Kit 03 · Bold arch</div>

      <h1 class="headline">Your stencil guide is placed.</h1>
      <p class="subtitle">Share with your artist, or follow it at home. The shape is yours.</p>

      <div class="actions">
        <button class="btn btn-secondary" onclick="saveLook()">Save this look</button>
        <div class="row">
          <button class="btn btn-secondary" onclick="adjust()">Adjust placement</button>
          <button class="btn btn-secondary" onclick="shop()">Shop this kit</button>
        </div>
      </div>

      <div class="footer-links">
        <a href="#" onclick="shareLook()">Share</a>
        <a href="#" onclick="location.href='index.php'">Return home</a>
      </div>
    </div>
  </section>

  <script>
    function goBack() { history.back(); }

    function saveLook() {
      window.location.href = 'save-look.php';
    }

    function adjust() {
      alert('Open placement adjuster...');
      // window.location.href = 'adjust-placement.php';
    }

    function shop() {
      window.location.href = 'shop.php';
    }

    function shareLook() {
      window.location.href = 'share-look.php';
    }

    // update label from URL params if present
    (function() {
      const params = new URLSearchParams(window.location.search);
      const kit = params.get('kit') || 'Kit 03';
      const label = params.get('label') || 'Bold arch';
      document.getElementById('kitLabel').textContent = kit + ' · ' + label;
    })();
  </script>
</body>
</html>