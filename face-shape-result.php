<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Face Shape Result — Royals Arch Brow</title>
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

    .content {
      padding: 0 24px 24px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    /* ------ result card ------ */
    .result-card-wrapper {
      position: relative;
      width: 220px;
      height: 220px;
      border-radius: 40px;
      padding: 4px;
      background: linear-gradient(135deg, #8a6f2e, var(--gold-light));
      box-shadow: 0 0 40px rgba(201, 168, 76, 0.12);
      display: grid;
      place-items: center;
      margin: 0 0 14px;
    }

    .result-card {
      width: 100%;
      height: 100%;
      border-radius: 32px;
      background: rgba(10,10,10,0.7);
      backdrop-filter: blur(4px);
      border: 1px solid rgba(255, 255, 255, 0.08);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 1.5rem;
      text-align: center;
    }

    .result-card-text {
      color: var(--white-dim);
      font-size: 0.95rem;
      line-height: 1.4;
      letter-spacing: 0.01em;
      font-weight: 300;
    }

    /* ------ headline ------ */
    .headline {
      font-family: var(--font-display);
      font-style: italic;
      font-size: clamp(1.8rem, 4vw, 2.4rem);
      line-height: 1.05;
      color: var(--white);
      text-align: center;
      margin-bottom: 4px;
    }

    .subtitle {
      color: var(--white-dim);
      font-size: 0.95rem;
      text-align: center;
      line-height: 1.7;
      margin-bottom: 18px;
      padding: 0 16px;
    }

    .shape-label {
      font-size: 0.75rem;
      color: var(--white-dim);
      text-transform: uppercase;
      letter-spacing: 0.18em;
      margin-top: 0.25rem;
    }

    .shape-value {
      font-family: var(--font-display);
      font-size: 2.2rem;
      font-weight: 400;
      color: var(--white);
      margin-top: 0.1rem;
      line-height: 1.05;
    }

    .shape-sub {
      font-size: 0.7rem;
      color: var(--white-dim);
      margin-bottom: 1.2rem;
    }

    /* ------ recommendation buttons (like the kit grid, but row) ------ */
    .rec-section {
      width: 100%;
      max-width: 460px;
      text-align: center;
      margin-bottom: 10px;
    }

    .rec-label {
      font-size: 0.6rem;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--gold);
      font-weight: 500;
      margin-bottom: 14px;
    }

    .rec-buttons-row {
      display: flex;
      gap: 12px;
      justify-content: center;
      flex-wrap: wrap;
    }

    .rec-btn {
      padding: 0.7rem 1.6rem;
      border-radius: 999px;
      border: 1px solid rgba(255,255,255,0.08);
      background: rgba(255,255,255,0.03);
      color: var(--white-dim);
      font-size: 0.7rem;
      letter-spacing: 0.05em;
      transition: all var(--transition);
      font-weight: 400;
      min-width: 100px;
      text-transform: uppercase;
    }

    .rec-btn:hover {
      border-color: var(--border);
      color: var(--white);
    }

    .rec-btn.active {
      border-color: var(--gold);
      background: rgba(201,168,76,0.12);
      color: var(--gold);
      font-weight: 500;
    }

    .info-note {
      font-size: 0.85rem;
      color: var(--white-dim);
      line-height: 1.6;
      text-align: center;
      margin: 10px 0 16px;
      padding: 0 12px;
    }

    /* ------ actions ------ */
    .actions {
      display: grid;
      gap: 12px;
      width: 100%;
      max-width: 460px;
      margin-top: 8px;
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
      .row { grid-template-columns: 1fr; }
      .result-card-wrapper { width: 180px; height: 180px; }
      .shape-value { font-size: 1.9rem; }
      .rec-btn { padding: 0.55rem 1rem; font-size: 0.65rem; min-width: 85px; }
    }
  </style>
</head>
<body>
  <section class="page">
    <div class="topbar">
      <a href="javascript:history.back()" aria-label="Back">&#8592;</a>
      <div class="title">Your Result</div>
      <div class="brand"><img src="assets/logo.png" alt="CG logo" style="width:24px;height:24px;object-fit:contain;" /></div>
    </div>

    <div class="content">
      <!-- result card with glow -->
      <div class="result-card-wrapper">
        <div class="result-card">
          <div class="result-card-text">Your face shape</div>
        </div>
      </div>

      <div class="shape-label">Your face shape:</div>
      <div class="shape-value">Oval</div>
      <div class="shape-sub">balanced & harmonious</div>

      <div class="rec-section">
        <div class="rec-label">Top Recommendation</div>
        <div class="rec-buttons-row">
          <button class="rec-btn active">Considered</button>
          <button class="rec-btn">Arch</button>
          <button class="rec-btn">Understated</button>
        </div>
      </div>

      <div class="info-note">Tailored to your features. You lead from here.</div>

      <div class="actions">
        <button class="btn btn-secondary" onclick="tryRecommendation()">Try top recommendation</button>
        <div class="row">
          <button class="btn btn-secondary" onclick="seeAllStyles()">See all styles</button>
          <button class="btn btn-secondary" onclick="location.href='index.php'">Return home</button>
        </div>
        <div class="link-gold" onclick="shareResult()">Share this result</div>
      </div>
    </div>
  </section>

  <script>
    // make rec buttons toggle active
    document.querySelectorAll('.rec-btn').forEach(btn => {
      btn.addEventListener('click', function() {
        document.querySelectorAll('.rec-btn').forEach(el => el.classList.remove('active'));
        this.classList.add('active');
      });
    });

    function tryRecommendation() {
      // simulate navigation to preview
      alert('Try top recommendation: navigating to preview');
      // window.location.href = 'preview-look.php';
    }

    function seeAllStyles() {
      alert('See all styles');
      // window.location.href = 'choose-style.php';
    }

    function shareResult() {
      if (navigator.share) {
        navigator.share({
          title: 'My Face Shape — Royals Arch Brow',
          text: 'I just discovered my face shape: Oval ✨',
          url: window.location.href
        }).catch(() => {});
      } else {
        alert('Share your result with your artist!');
      }
    }
  </script>
</body>
</html>