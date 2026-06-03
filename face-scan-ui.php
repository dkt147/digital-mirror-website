<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Face Scan — Royals Arch Brow</title>
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

    /* camera icon card — like the checkmark card */
    .icon-card {
      margin: 0 0 18px;
      border-radius: 28px;
      background: rgba(255,255,255,0.02);
      border: 1px solid rgba(255,255,255,0.08);
      min-height: 200px;
      display: grid;
      place-items: center;
      position: relative;
      overflow: hidden;
      padding: 24px 0;
    }

    .icon-card::before {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(circle at center, rgba(201,168,76,0.08), transparent 50%);
      pointer-events: none;
    }

    .camera-symbol {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      background: rgba(201,168,76,0.12);
      border: 1px solid rgba(201,168,76,0.25);
      display: grid;
      place-items: center;
      color: var(--gold);
      position: relative;
    }

    .camera-symbol svg {
      width: 40px;
      height: 40px;
      stroke: currentColor;
      fill: none;
    }

    .lead {
      font-family: var(--font-display);
      font-size: 1.2rem;
      line-height: 1.2;
      color: var(--white);
      margin: 1.2rem 0 0.6rem;
      text-align: center;
    }

    .sub {
      color: var(--white-dim);
      font-size: 0.95rem;
      line-height: 1.6;
      text-align: center;
      margin-bottom: 1.4rem;
      padding: 0 8px;
    }

    .bullets {
      display: flex;
      flex-direction: column;
      gap: 0.8rem;
      margin-bottom: 1.8rem;
      padding: 0 8px;
    }

    .bullet {
      display: flex;
      gap: 0.75rem;
      align-items: flex-start;
      color: var(--white-dim);
      font-size: 0.95rem;
    }

    .dot {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background: var(--gold);
      margin-top: 0.45rem;
      flex-shrink: 0;
    }

    .privacy {
      display: flex;
      align-items: center;
      gap: 0.6rem;
      color: var(--gold);
      font-size: 0.88rem;
      margin: 0 0 1.6rem;
      justify-content: center;
      flex-wrap: wrap;
    }

    .privacy svg {
      width: 18px;
      height: 18px;
      stroke: currentColor;
      fill: none;
    }

    /* actions */
    .actions {
      display: grid;
      gap: 12px;
      margin-top: 12px;
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

    .link {
      text-align: center;
      color: var(--gold);
      font-size: 0.9rem;
      letter-spacing: 0.04em;
      padding: 6px 0 4px;
      cursor: pointer;
      transition: color var(--transition);
      font-weight: 400;
    }

    .link:hover {
      color: var(--gold-light);
      text-decoration: underline;
    }

    input[type=file] { display: none; }

    @media (max-width: 520px) {
      .page { border-radius: 30px; }
      .topbar { padding: 20px 20px 16px; }
      .content { padding: 0 20px 20px; }
      .row { grid-template-columns: 1fr; }
      .camera-symbol { width: 70px; height: 70px; }
    }
  </style>
</head>
<body>
  <section class="page">
    <div class="topbar">
      <a href="javascript:history.back()" aria-label="Back">&#8592;</a>
      <div class="title">Face Scan</div>
      <div class="brand"><img src="assets/logo.png" alt="CG logo" style="width:24px;height:24px;object-fit:contain;" /></div>
    </div>

    <div class="content">
      <!-- camera icon card (like the checkmark) -->
      <div class="icon-card">
        <div class="camera-symbol">
          <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="5" width="18" height="14" rx="2" />
            <circle cx="12" cy="12" r="3" />
            <path d="M7 5l2-2h6l2 2" />
          </svg>
        </div>
      </div>

      <h1 class="headline">A photograph of your brows.</h1>
      <p class="subtitle">We'll analyze the shape you have now — and use it as your starting point.</p>

      <div class="bullets">
        <div class="bullet"><div class="dot"></div><div>Even, direct light on your face</div></div>
        <div class="bullet"><div class="dot"></div><div>Face forward, chin level</div></div>
        <div class="bullet"><div class="dot"></div><div>Brow area clear and fully visible</div></div>
      </div>

      <div class="privacy">
        <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
          <path d="M12 1l3 2 4 1v5c0 5-3 9-7 11-4-2-7-6-7-11V4l4-1 3-2z" />
        </svg>
        <div>Your photo remains entirely private.</div>
      </div>

      <div class="actions">
        <label for="cameraInput">
          <button class="btn btn-secondary">Open camera</button>
        </label>
        <input id="cameraInput" type="file" accept="image/*" capture="environment" onchange="handlePhoto(event)" />

        <div class="row">
          <button class="btn btn-secondary" onclick="useExisting()">Use existing photo</button>
          <button class="btn btn-secondary" onclick="location.href='index.php'">Return home</button>
        </div>

        <div class="link" onclick="useExisting()">Choose from library</div>
      </div>
    </div>
  </section>

  <script>
    function handlePhoto(e) {
      const file = e.target.files && e.target.files[0];
      if (!file) return;
      // Preview in new tab (simulate analysis flow)
      const url = URL.createObjectURL(file);
      window.open(url, '_blank');
      // In a real app you would upload and navigate to preview
      // window.location.href = 'preview-scan.php?photo=' + encodeURIComponent(file.name);
    }

    function useExisting() {
      const input = document.getElementById('cameraInput');
      input.removeAttribute('capture');
      input.click();
      // restore capture for next time (environment camera)
      setTimeout(() => input.setAttribute('capture', 'environment'), 1000);
    }

    // For consistent back behaviour
    function goBack() {
      history.back();
    }
  </script>
</body>
</html>