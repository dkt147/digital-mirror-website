<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
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

    /* ----- image card with glow ----- */
    .image-card-wrapper {
      position: relative;
      width: 180px;
      height: 180px;
      border-radius: 40px;
      padding: 4px;
      background: linear-gradient(135deg, var(--gold-dark), var(--gold-light));
      box-shadow: 0 0 40px rgba(201, 168, 76, 0.12);
      display: grid;
      place-items: center;
      margin: 0 auto 18px;
    }

    .image-card {
      width: 100%;
      height: 100%;
      border-radius: 32px;
      background: rgba(10,10,10,0.7);
      backdrop-filter: blur(4px);
      border: 1px solid rgba(255,255,255,0.08);
      overflow: hidden;
      position: relative;
    }

    .image-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 32px;
    }

    /* SVG overlay on image */
    .image-card svg {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      border-radius: 32px;
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

    .subtitle {
      color: var(--white-dim);
      font-size: 0.85rem;
      text-align: center;
      line-height: 1.6;
      margin-bottom: 6px;
      padding: 0 16px;
    }

    .explain {
      color: var(--white-dim);
      font-size: 0.95rem;
      text-align: center;
      line-height: 1.7;
      margin-bottom: 28px;
      padding: 0 12px;
    }

    .badge-row {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 12px;
      margin-bottom: 28px;
    }

    .badge-group {
      display: flex;
      gap: 6px;
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

    .badge-label {
      color: var(--white-dim);
      font-size: 0.8rem;
      font-style: italic;
      letter-spacing: 0.04em;
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
      .image-card-wrapper { width: 160px; height: 160px; }
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
      <!-- image card with glow + SVG overlay -->
      <div class="image-card-wrapper">
        <div class="image-card">
          <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=400&q=80" alt="face" />
          <!-- aesthetic brow overlay -->
          <svg viewBox="0 0 100 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <g stroke="rgba(245,240,232,0.85)" stroke-width="0.8" fill="none">
              <path d="M20 28 C35 18, 65 18, 80 28" stroke-opacity="0.95"/>
              <path d="M30 38 L34 34" stroke-opacity="0.95"/>
              <path d="M70 38 L66 34" stroke-opacity="0.95"/>
              <circle cx="50" cy="24" r="1.6" fill="rgba(245,240,232,0.9)"/>
              <path d="M20 70 C35 82, 65 82, 80 70" stroke-opacity="0.8"/>
            </g>
          </svg>
        </div>
      </div>

      <h1 class="headline">Your face carries most of its width at the cheekbones, tapering at the jaw.</h1>
      <p class="subtitle">Why this shape suits your face.</p>
      <div class="explain">A soft arch placed fractionally above the brow bone's peak draws the eye upward — creating lift without effort.</div>

      <div class="badge-row">
        <span class="badge-label">Structured. Effortless</span>
      </div>

      <div class="actions">
        <button class="btn btn-secondary" onclick="tryThisOn()">Try this on</button>
        <div class="link-gold" onclick="tryDifferent()">Try a different recommendation</div>
      </div>
    </div>
  </section>

  <script>
    function goBack() { history.back(); }

    function tryThisOn() {
      alert('Try this on — opening preview');
      // window.location.href = 'stencil-preview.php?kit=soft-arch';
    }

    function tryDifferent() {
      alert('Loading different recommendation');
      // window.location.href = 'recommendations.php';
    }
  </script>
</body>
</html>