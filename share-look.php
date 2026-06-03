<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Share this look — Royals Arch Brow</title>
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
      margin-bottom: 18px;
    }

    /* preview card */
    .preview-card {
      border-radius: var(--radius);
      background: rgba(255,255,255,0.03);
      border: 1px solid rgba(255,255,255,0.08);
      min-height: 160px;
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

    .preview-content {
      position: relative;
      z-index: 1;
      display: grid;
      gap: 12px;
      text-align: center;
      width: 100%;
    }

    .preview-content .label {
      color: var(--gold);
      font-size: 0.7rem;
      letter-spacing: 0.18em;
      text-transform: uppercase;
    }

    .preview-content .value {
      color: var(--white);
      font-size: 0.95rem;
      line-height: 1.6;
    }

    .preview-graphic {
      display: flex;
      justify-content: center;
      gap: 4px;
      margin: 6px 0;
    }

    .arc {
      width: 72px;
      height: 20px;
      border: 1px solid rgba(201,168,76,0.5);
      border-bottom-color: transparent;
      border-left-color: transparent;
      border-right-color: transparent;
      border-radius: 999px 999px 0 0;
    }

    .arc:nth-child(2) {
      transform: translateY(10px) scaleX(0.9);
      opacity: 0.6;
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
      justify-content: space-between;
      width: 100%;
      padding: 1rem 1.2rem;
      border-radius: 24px;
      border: 1px solid rgba(255,255,255,0.08);
      background: rgba(255,255,255,0.03);
      color: var(--white);
      text-decoration: none;
      transition: all var(--transition);
      cursor: pointer;
      font-family: var(--font-body);
    }

    .btn:hover {
      border-color: rgba(201,168,76,0.3);
      transform: translateY(-1px);
    }

    .btn.primary {
      background: rgba(201,168,76,0.12);
      border-color: rgba(201,168,76,0.35);
      color: var(--gold);
    }

    .btn .text {
      display: grid;
      gap: 2px;
      text-align: left;
    }

    .btn .text .title {
      font-family: var(--font-display);
      font-size: 1rem;
      font-weight: 400;
    }

    .btn .text .subtitle {
      font-size: 0.8rem;
      color: var(--white-dim);
    }

    .btn .chevron {
      font-size: 1.2rem;
      opacity: 0.7;
    }

    .notice {
      font-size: 0.8rem;
      color: var(--white-dim);
      text-align: center;
      margin-top: 12px;
      line-height: 1.6;
    }

    .footer-link {
      text-align: center;
      color: var(--gold);
      font-size: 0.9rem;
      padding: 12px 0 4px;
      cursor: pointer;
      transition: color var(--transition);
      font-weight: 400;
    }

    .footer-link:hover {
      color: var(--gold-light);
      text-decoration: underline;
    }

    @media (max-width: 520px) {
      .page { border-radius: 30px; }
      .topbar { padding: 20px 20px 16px; }
      .content { padding: 0 20px 20px; }
      .arc { width: 56px; }
    }
  </style>
</head>
<body>
  <section class="page">
    <div class="topbar">
      <a href="javascript:history.back()" aria-label="Back">&#8592;</a>
      <div class="title">Share this look</div>
      <div class="brand"><img src="assets/logo.png" alt="CG logo" style="width:24px;height:24px;object-fit:contain;" /></div>
    </div>

    <div class="content">
      <h1 class="headline">Share this look.</h1>

      <div class="preview-card">
        <div class="preview-content">
          <div class="label">My Everyday Arch · Arch · Dark Brown</div>
          <div class="preview-graphic">
            <span class="arc"></span>
            <span class="arc"></span>
          </div>
          <div class="value">Your stencil guide, ready for your artist.</div>
        </div>
      </div>

      <div class="actions">
        <button class="btn primary" onclick="sendToArtist()">
          <div class="text">
            <div class="title">Send to artist</div>
            <div class="subtitle">Your artist receives your details and this look</div>
          </div>
          <span class="chevron">→</span>
        </button>

        <button class="btn" onclick="saveAsImage()">
          <div class="text">
            <div class="title">Save as image</div>
            <div class="subtitle">Saved to your camera roll</div>
          </div>
          <span class="chevron">→</span>
        </button>

        <button class="btn" onclick="shareViaMessage()">
          <div class="text">
            <div class="title">Share via message</div>
            <div class="subtitle">Opens in your messages app</div>
          </div>
          <span class="chevron">→</span>
        </button>
      </div>

      <p class="notice">Images shared never include personal profile data.</p>
      <div class="footer-link" onclick="history.back()">Back to look</div>
    </div>
  </section>

  <script>
    function sendToArtist() {
      alert('Your artist will receive this look now.');
    }

    function saveAsImage() {
      alert('Saved to your camera roll.');
    }

    function shareViaMessage() {
      if (navigator.share) {
        navigator.share({
          title: 'My look — Royals Arch Brow',
          text: 'Sharing my look with you.',
          url: window.location.href
        }).catch(() => {});
      } else {
        alert('Open your messages app to share this look.');
      }
    }
  </script>
</body>
</html>