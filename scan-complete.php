<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Scan Complete — Royals Arch Brow</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">

  <!-- TensorFlow.js + Face Landmarks -->
  <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs-core@4.17.0/dist/tf-core.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs-backend-webgl@4.17.0/dist/tf-backend-webgl.min.js">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@mediapipe/face_mesh@0.4.1633559619/face_mesh.js" crossorigin="anonymous">
  </script>
  <script
    src="https://cdn.jsdelivr.net/npm/@tensorflow-models/face-landmarks-detection@1.0.5/dist/face-landmarks-detection.min.js">
  </script>

  <style>
    :root {
      --black: #0a0a08;
      --dark: #111111;
      --dark-card: #1a1a0f;
      --gold: #c9a84c;
      --gold-light: #d4b96a;
      --gold-dark: #8a6f2e;
      --gold-muted: rgba(201, 168, 76, 0.12);
      --white: #f5f0e8;
      --white-dim: rgba(245, 240, 232, 0.55);
      --border: rgba(201, 168, 76, 0.18);
      --border-hover: rgba(201, 168, 76, 0.45);
      --font-display: 'Cormorant Garamond', serif;
      --font-body: 'Montserrat', sans-serif;
      --radius: 14px;
      --radius-sm: 10px;
      --transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    *,
    *::before,
    *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html {
      font-size: 16px;
      scroll-behavior: smooth;
    }

    body {
      background: var(--black);
      color: var(--white);
      font-family: var(--font-body);
      font-weight: 300;
      line-height: 1.6;
      min-height: 100vh;
      overflow-x: hidden;
      display: flex;
      flex-direction: column;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    button {
      cursor: pointer;
      border: none;
      outline: none;
      font-family: var(--font-body);
      background: none;
    }

    /* ====== NAVBAR ====== */
    .navbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 1rem 2.5rem;
      border-bottom: 1px solid var(--border);
      background: rgba(10, 10, 8, 0.97);
      backdrop-filter: blur(20px);
      position: sticky;
      top: 0;
      z-index: 100;
    }

    .navbar-left {
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .nav-avatar {
      width: 42px;
      height: 42px;
      border-radius: 50%;
      overflow: hidden;
      border: 1.5px solid var(--gold-dark);
      flex-shrink: 0;
    }

    .nav-avatar img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    .navbar-nav {
      display: flex;
      align-items: center;
      gap: 2.5rem;
      list-style: none;
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
    }

    .navbar-nav a {
      font-size: 0.65rem;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--white-dim);
      transition: color var(--transition);
      font-weight: 400;
    }

    .navbar-nav a:hover,
    .navbar-nav a.active {
      color: var(--gold);
    }

    .btn-book {
      padding: 0.55rem 1.5rem;
      font-size: 0.65rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      border-radius: 50px;
      border: 1px solid var(--border);
      color: var(--white-dim);
      transition: all var(--transition);
    }

    .btn-book:hover {
      border-color: var(--gold);
      color: var(--gold);
    }

    .nav-emblem {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      background: radial-gradient(circle at 35% 35%, #2a2010, #1a1408);
      border: 1.5px solid var(--gold-dark);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      overflow: hidden;
    }

    .nav-emblem img {
      width: 26px;
      height: 26px;
      object-fit: contain;
    }

    .nav-gold-rule {
      height: 1px;
      background: linear-gradient(to right, transparent 0%, var(--gold-dark) 30%, var(--gold-dark) 70%, transparent 100%);
      opacity: 0.5;
    }

    /* ====== PAGE TOPBAR ====== */
    .page-topbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0.5rem 0;
      margin-bottom: 1.5rem;
    }

    .back-btn {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 44px;
      height: 44px;
      border-radius: 50%;
      border: 1px solid var(--gold);
      color: var(--gold);
      text-decoration: none;
      transition: all var(--transition);
      background: transparent;
      flex-shrink: 0;
    }

    .back-btn:hover {
      background: rgba(201, 168, 76, 0.12);
      transform: scale(1.05);
    }

    .page-title-center {
      flex: 1;
      text-align: center;
      font-family: var(--font-display);
      font-size: 0.9rem;
      letter-spacing: 0.28em;
      text-transform: uppercase;
      color: var(--gold);
      padding: 0 1rem;
    }

    /* ====== LAYOUT ====== */
    .main {
      max-width: 100%;
      margin: 0 auto;
      padding: 0 3rem 2.5rem;
      display: flex;
      flex-direction: column;
      gap: 1.75rem;
      align-items: center;
      text-align: center;
    }

    /* ====== HEADER ====== */
    .page-label {
      font-size: 0.6rem;
      letter-spacing: 0.25em;
      text-transform: uppercase;
      color: var(--gold);
      font-weight: 500;
      margin-bottom: 0.2rem;
    }

    .page-title {
      font-family: var(--font-display);
      font-style: italic;
      font-size: 2rem;
      font-weight: 400;
      color: var(--white);
      line-height: 1.05;
    }

    /* ====== FACE ANALYSIS CARD ====== */
    .face-card {
      background: #161610;
      border: 1px solid var(--gold);
      border-radius: var(--radius);
      padding: 1.25rem;
      width: 100%;
      max-width: 360px;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 1rem;
    }

    /* Canvas wrapper — face image + eyebrow overlay */
    .face-canvas-wrapper {
      position: relative;
      width: 100%;
      border-radius: 10px;
      overflow: hidden;
      background: #1a1810;
      aspect-ratio: 3/4;
    }

    /* The actual canvas where image + lines are drawn */
    #browCanvas {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    /* Detection loading overlay */
    .detect-overlay {
      position: absolute;
      inset: 0;
      background: rgba(10, 10, 8, 0.75);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 0.75rem;
      border-radius: 10px;
      transition: opacity 0.5s ease;
    }

    .detect-overlay.hidden {
      opacity: 0;
      pointer-events: none;
    }

    .detect-label {
      font-size: 0.65rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: var(--gold);
    }

    .detect-dots {
      display: flex;
      gap: 0.4rem;
    }

    .detect-dots span {
      width: 7px;
      height: 7px;
      border-radius: 50%;
      background: #2a2a22;
      animation: pulseDot 1.4s ease-in-out infinite both;
    }

    .detect-dots span:nth-child(1) {
      animation-delay: -0.32s;
    }

    .detect-dots span:nth-child(2) {
      animation-delay: -0.16s;
    }

    .detect-dots span:nth-child(3) {
      animation-delay: 0s;
    }

    @keyframes pulseDot {

      0%,
      80%,
      100% {
        transform: scale(0.5);
        opacity: 0.2;
        background: #2a2a22;
      }

      40% {
        transform: scale(1);
        opacity: 1;
        background: var(--gold);
      }
    }

    /* Scan complete badge row */
    .card-badge-row {
      display: flex;
      align-items: center;
      gap: 0.6rem;
    }

    .card-badge {
      width: 24px;
      height: 24px;
      border-radius: 50%;
      background: var(--gold);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .card-title {
      font-family: var(--font-display);
      font-style: italic;
      font-size: 1.5rem;
      font-weight: 400;
      color: var(--white);
    }

    .card-sub {
      font-size: 0.72rem;
      color: var(--white-dim);
    }

    .divider {
      width: 60px;
      height: 1px;
      background: var(--border);
    }

    /* ====== DATA CARDS ====== */
    .data-cards-row {
      display: flex;
      gap: 1rem;
      width: 100%;
      max-width: 360px;
    }

    .data-card {
      flex: 1;
      background: #161610;
      border: 1px solid var(--border);
      border-radius: var(--radius-sm);
      padding: 1rem 1.25rem;
      text-align: center;
      cursor: pointer;
    }

    .data-card:hover {
      border-color: var(--gold);
      background: var(--gold-muted);
    }

    .data-card-label {
      font-size: 0.55rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--white-dim);
      font-weight: 500;
      margin-bottom: 0.25rem;
    }

    .data-card-value {
      font-family: var(--font-display);
      font-size: 1.2rem;
      font-weight: 400;
      color: var(--white);
      line-height: 1.2;
    }

    /* ====== RECOMMENDED ====== */
    .recommended-section {
      width: 100%;
      max-width: 360px;
    }

    .rec-section-label {
      font-size: 0.6rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: var(--gold);
      font-weight: 500;
      margin-bottom: 1rem;
      text-align: center;
    }

    .rec-buttons-row {
      display: flex;
      gap: 0.75rem;
      justify-content: center;
      flex-wrap: wrap;
    }

    .rec-btn {
      padding: 0.6rem 1.4rem;
      border-radius: 50px;
      border: 1px solid var(--border);
      background: #161610;
      color: var(--white-dim);
      font-size: 0.7rem;
      letter-spacing: 0.05em;
      transition: all var(--transition);
      flex: 1;
      min-width: 80px;
    }

    .rec-btn:hover {
      border-color: #c9a84c;
      background: var(--gold-muted);
      color: var(--gold);
    }

    /* ====== ACTIONS ====== */
    .actions {
      display: grid;
      gap: 0.75rem;
      width: 100%;
      max-width: 360px;
    }

    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 100%;
      padding: 0.85rem 1.2rem;
      border-radius: 999px;
      font-size: 0.75rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      font-weight: 600;
      text-decoration: none;
      transition: all var(--transition);
      cursor: pointer;
      border: none;
      font-family: var(--font-body);
    }

    .btn-primary {
      background: #c9a84c;
      border: 1px solid var(--border);
      color: var(--white);
    }

    .btn-primary:hover {
      border-color: var(--gold);
      color: var(--black);
      transform: translateY(-2px);
    }

    .secondary-link {
      margin-top: 0.25rem;
      font-size: 0.7rem;
      color: var(--gold);
      cursor: pointer;
      transition: all var(--transition);
      font-weight: 400;
      letter-spacing: 0.05em;
    }

    .secondary-link:hover {
      opacity: 0.7;
    }

    .rescan-link {
      font-size: 0.65rem;
      color: var(--white-dim);
      cursor: pointer;
      letter-spacing: 0.05em;
      transition: color var(--transition);
    }

    .rescan-link:hover {
      color: var(--gold);
    }

    /* ====== ANIMATIONS ====== */
    @keyframes fadeUp {
      from {
        opacity: 0;
        transform: translateY(16px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .fade-1 {
      animation: fadeUp 0.55s ease 0.05s both;
    }

    .fade-2 {
      animation: fadeUp 0.55s ease 0.15s both;
    }

    .fade-3 {
      animation: fadeUp 0.55s ease 0.25s both;
    }

    .fade-4 {
      animation: fadeUp 0.55s ease 0.35s both;
    }

    .fade-5 {
      animation: fadeUp 0.55s ease 0.45s both;
    }

    .fade-6 {
      animation: fadeUp 0.55s ease 0.55s both;
    }

    /* ====== RESPONSIVE ====== */
    @media (max-width: 900px) {
      .main {
        padding: 0 1.25rem 1.5rem;
      }

      .navbar {
        padding: 0.875rem 1.25rem;
      }

      .navbar-nav {
        display: none;
      }

      .page-title {
        font-size: 1.6rem;
      }

      .back-btn {
        width: 38px;
        height: 38px;
      }
    }
  </style>
</head>

<body>

  <!-- NAVBAR -->
  <?php include 'includes/navbar.php'; ?>
  <div class="nav-gold-rule"></div>

  <main class="main">

    <!-- TOPBAR -->
    <div class="page-topbar fade-1">
      <a href="javascript:history.back()" class="back-btn" aria-label="Go back">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
          stroke-linecap="round" stroke-linejoin="round">
          <line x1="19" y1="12" x2="5" y2="12"></line>
          <polyline points="12 19 5 12 12 5"></polyline>
        </svg>
      </a>
      <div class="page-title-center">Scan Complete</div>
    </div>

    <!-- HEADER -->
    <div class="fade-2">
      <div class="page-label">Scan Complete</div>
      <div class="page-title">Here's what your features tell us.</div>
    </div>

    <!-- FACE ANALYSIS CARD -->
    <div class="face-card fade-3">

      <!-- Canvas: face photo + eyebrow lines drawn on top -->
      <div class="face-canvas-wrapper">
        <canvas id="browCanvas"></canvas>

        <!-- Loading overlay while model runs -->
        <div class="detect-overlay" id="detectOverlay">
          <div class="detect-label">Analysing brows</div>
          <div class="detect-dots">
            <span></span><span></span><span></span>
          </div>
        </div>
      </div>

      <!-- Badge + title -->
      <div class="card-badge-row">
        <div class="card-badge">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#0a0a08" stroke-width="3.5"
            stroke-linecap="round" stroke-linejoin="round">
            <polyline points="20 6 9 17 4 12"></polyline>
          </svg>
        </div>
        <div class="card-title">Scan Complete</div>
      </div>
      <div class="card-sub">Eyebrows detected &amp; analysed</div>
      <div class="divider"></div>
    </div>

    <!-- DATA CARDS -->
    <div class="data-cards-row fade-4">
      <div class="data-card">
        <div class="data-card-label">Brow Shape</div>
        <div class="data-card-value" id="browShapeVal">—</div>
      </div>
      <div class="data-card">
        <div class="data-card-label">Face Shape</div>
        <div class="data-card-value">Oval</div>
      </div>
    </div>

    <!-- RECOMMENDED -->
    <div class="recommended-section fade-5">
      <div class="rec-section-label">Recommended For You</div>
      <div class="rec-buttons-row">
        <button class="rec-btn active">Considered</button>
        <button class="rec-btn">Arch</button>
        <button class="rec-btn">Soft Arch</button>
      </div>
    </div>

    <!-- ACTIONS -->
    <div class="actions fade-6">
      <button class="btn btn-primary" onclick="goToStyles()">Explore Your Styles</button>
      <button class="secondary-link" onclick="goToAllStyles()">See all styles</button>
      <!-- <button class="rescan-link" onclick="reScan()">↺ Retake scan</button> -->
    </div>

  </main>

  <!-- Remove old TF/MediaPipe CDN scripts, replace with: -->
  <script>
    // ── Landmark indices (same as detector.js) ──────────────
    const LEFT_BROW_UPPER = [70, 63, 105, 66, 107];
    const LEFT_BROW_LOWER = [46, 53, 52, 65, 55];
    const RIGHT_BROW_UPPER = [300, 293, 334, 296, 336];
    const RIGHT_BROW_LOWER = [276, 283, 282, 295, 285];
    const LEFT_BROW_ALL = [...LEFT_BROW_UPPER, ...LEFT_BROW_LOWER];
    const RIGHT_BROW_ALL = [...RIGHT_BROW_UPPER, ...RIGHT_BROW_LOWER];
    const FACE_OVAL = [10, 338, 297, 332, 284, 251, 389, 356, 454, 323, 361, 288,
      397, 365, 379, 378, 400, 377, 152, 148, 176, 149, 150, 136, 172, 58, 132, 93, 234, 127, 162, 21, 54, 103, 67,
      109
    ];
    const GOLD = '#c9a84c';
    const GOLD_SHADOW = 'rgba(201,168,76,0.35)';
    // ── Recommendation map ───────────────────────────────────
    const RECO_MAP = {
      'High Arch': ['Arch', 'Considered', 'Defined'],
      'Soft Arch': ['Considered', 'Rounded', 'Defined'],
      'Rounded': ['Rounded', 'Considered', 'Natural'],
      'Flat / Straight': ['Straight', 'Considered', 'Arch'],
    };
    const FACE_RECO = {
      'Round': ['Arch', 'Sharp'],
      'Square': ['Arch', 'Sharp'],
      'Long': ['Straight', 'Considered'],
      'Heart': ['Rounded', 'Considered'],
      'Oval': ['Considered', 'Arch'],
    };
    async function init() {
      const canvas = document.getElementById('browCanvas');
      const ctx = canvas.getContext('2d');
      const overlay = document.getElementById('detectOverlay');
      // ── 1. Load captured image ───────────────────────────────
      const savedImg = localStorage.getItem('scanCapturedImage');
      const img = new Image();
      await new Promise((res, rej) => {
        img.onload = res;
        img.onerror = rej;
        img.src = savedImg || buildPlaceholder();
      });
      canvas.width = img.naturalWidth || img.width;
      canvas.height = img.naturalHeight || img.height;
      ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
      // ── 2. Load saved landmarks from scanning.php ────────────
      let landmarks = null;
      try {
        const raw = localStorage.getItem('scanLandmarks');
        if (raw) landmarks = JSON.parse(raw);
      } catch (e) {}
      overlay.classList.add('hidden');
      if (!landmarks || landmarks.length < 400) {
        // No landmarks — show image only
        updateCards('—', '—', []);
        return;
      }
      // ── 3. Scale landmarks to canvas pixels ──────────────────
      const cw = canvas.width,
        ch = canvas.height;
      const kps = landmarks.map(p => ({
        x: (1 - p.x) * cw, // X flip to match mirrored image
        y: p.y * ch
      }));
      // ── 4. Analyse ────────────────────────────────────────────
      const browShape = detectBrowShape(landmarks); // uses normalized
      const faceShape = detectFaceShape(landmarks, cw, ch);
      // ── 5. Draw brow overlay ──────────────────────────────────
      drawBrowFill(ctx, kps, LEFT_BROW_UPPER, LEFT_BROW_LOWER);
      drawBrowFill(ctx, kps, RIGHT_BROW_UPPER, RIGHT_BROW_LOWER);
      // ── 6. Update UI ──────────────────────────────────────────
      const recos = getRecos(browShape, faceShape);
      updateCards(browShape, faceShape, recos);
      // Save analysis for next pages
      localStorage.setItem('scanAnalysis', JSON.stringify({
        browShape,
        faceShape,
        recos
      }));
      // ── 7. Send to recommendations API ─────────────────────────
      sendRecommendationsRequest(browShape, faceShape);
    }

    async function sendRecommendationsRequest(browShape, faceShape) {
      const API_BASE = '<?php echo $API_URL; ?>';
      const token = localStorage.getItem('archAccessToken');
      if (!token) {
        console.log('No token, skipping recommendations API call.');
        return;
      }

      try {
        const payload = {
          face_shape: faceShape || '',
          brow_shape: browShape || '',
          features: (localStorage.getItem('archFeatures') || '').split(',').filter(f => f.trim()),
          colour: localStorage.getItem('archBrowColour') || ''
        };

        const response = await fetch(`${API_BASE}/recommendations`, {
          method: 'POST',
          headers: {
            accept: 'application/json',
            'Content-Type': 'application/json',
            Authorization: `Bearer ${token}`
          },
          body: JSON.stringify(payload)
        });

        const recommendations = await response.json().catch(() => []);
        if (response.ok && Array.isArray(recommendations)) {
          localStorage.setItem('apiRecommendations', JSON.stringify(recommendations));
        }
      } catch (err) {
        console.error('Error sending recommendations request:', err);
      }
    }
    // ── Draw filled brow shape (upper + lower edge) ──────────
    function drawBrowFill(ctx, kps, upperIdx, lowerIdx) {
      const top = upperIdx.map(i => kps[i]).filter(Boolean);
      const bot = lowerIdx.map(i => kps[i]).filter(Boolean);
      if (top.length < 2 || bot.length < 2) return;
      top.sort((a, b) => a.x - b.x);
      bot.sort((a, b) => a.x - b.x);
      // Shadow blur fill
      ctx.save();
      ctx.shadowColor = GOLD_SHADOW;
      ctx.shadowBlur = 10;
      ctx.fillStyle = hexRgba(GOLD, 0.45);
      const path = buildClosedPath(top, bot);
      ctx.fill(path);
      ctx.restore();
      // Gradient fill
      const minX = Math.min(...top.map(p => p.x));
      const maxX = Math.max(...top.map(p => p.x));
      const grad = ctx.createLinearGradient(minX, 0, maxX, 0);
      grad.addColorStop(0, hexRgba(GOLD, 0.55));
      grad.addColorStop(0.5, hexRgba(GOLD, 0.8));
      grad.addColorStop(1, hexRgba(GOLD, 0.6));
      ctx.fillStyle = grad;
      ctx.fill(path);
      // Border line
      ctx.save();
      ctx.strokeStyle = hexRgba(GOLD, 0.9);
      ctx.lineWidth = Math.max(1.5, ctx.canvas.width * 0.003);
      ctx.lineCap = 'round';
      ctx.lineJoin = 'round';
      ctx.stroke(path);
      ctx.restore();
      // Endpoint dots
      ctx.save();
      ctx.fillStyle = GOLD;
      ctx.shadowColor = GOLD_SHADOW;
      ctx.shadowBlur = 8;
      const r = Math.max(3, ctx.canvas.width * 0.006);
      [top[0], top[top.length - 1]].forEach(p => {
        ctx.beginPath();
        ctx.arc(p.x, p.y, r, 0, Math.PI * 2);
        ctx.fill();
      });
      ctx.restore();
    }

    function buildClosedPath(topPts, botPts) {
      const path = new Path2D();
      path.moveTo(topPts[0].x, topPts[0].y);
      smoothCurve(path, topPts);
      smoothCurve(path, [...botPts].reverse());
      path.closePath();
      return path;
    }

    function smoothCurve(path, pts) {
      for (let i = 0; i < pts.length - 1; i++) {
        const cx = (pts[i].x + pts[i + 1].x) / 2;
        const cy = (pts[i].y + pts[i + 1].y) / 2;
        path.quadraticCurveTo(pts[i].x, pts[i].y, cx, cy);
      }
      path.lineTo(pts[pts.length - 1].x, pts[pts.length - 1].y);
    }
    // ── Shape classifiers (normalized landmarks) ─────────────
    function detectBrowShape(lm) {
      try {
        const lb = LEFT_BROW_UPPER.map(i => lm[i]).filter(Boolean);
        lb.sort((a, b) => a.x - b.x);
        const ends = (lb[0].y + lb[lb.length - 1].y) / 2;
        const peak = Math.min(...lb.map(p => p.y));
        const span = lb[lb.length - 1].x - lb[0].x;
        const arch = (ends - peak) / span;
        if (arch > 0.18) return 'High Arch';
        if (arch > 0.09) return 'Soft Arch';
        if (arch > 0.04) return 'Rounded';
        return 'Flat / Straight';
      } catch {
        return 'High Arch';
      }
    }

    function detectFaceShape(lm, cw, ch) {
      try {
        const xs = FACE_OVAL.map(i => lm[i].x);
        const ys = FACE_OVAL.map(i => lm[i].y);
        const fW = Math.max(...xs) - Math.min(...xs);
        const fH = Math.max(...ys) - Math.min(...ys);
        const ratio = fH / fW;
        const jawW = Math.abs(lm[288].x - lm[58].x);
        const cheekW = Math.abs(lm[323].x - lm[93].x);
        const foreW = Math.abs(lm[284].x - lm[54].x);
        if (ratio > 1.55) return 'Long';
        if (ratio < 1.25) return (jawW / cheekW) > 0.92 ? 'Round' : 'Square';
        if (foreW > jawW * 1.12) return 'Heart';
        return 'Oval';
      } catch {
        return 'Oval';
      }
    }

    function getRecos(browShape, faceShape) {
      const fromBrow = RECO_MAP[browShape] || ['Considered', 'Arch', 'Defined'];
      const fromFace = FACE_RECO[faceShape] || ['Considered'];
      // Merge, deduplicate, take first 3
      return [...new Set([...fromBrow, ...fromFace])].slice(0, 3);
    }

    function updateCards(browShape, faceShape, recos) {
      document.getElementById('browShapeVal').textContent = browShape;
      // Update face shape card
      const faceCard = document.querySelector('.data-cards-row .data-card:nth-child(2) .data-card-value');
      if (faceCard) faceCard.textContent = faceShape;
      // Update recommendation buttons
      const row = document.querySelector('.rec-buttons-row');
      if (row && recos.length) {
        row.innerHTML = recos.map((r, i) =>
          `<button class="rec-btn ${i===0?'active':''}" data-style="${r}">${r}</button>`
        ).join('');
        row.querySelectorAll('.rec-btn').forEach(btn => {
          btn.addEventListener('click', function() {
            row.querySelectorAll('.rec-btn').forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            localStorage.setItem('selectedStyle', this.dataset.style);
          });
        });
        // Pre-select first
        localStorage.setItem('selectedStyle', recos[0]);
      }
    }
    // ── Navigation ────────────────────────────────────────────
    window.goToStyles = function() {
      window.location.href = 'feature-summary.php';
    };
    window.goToAllStyles = function() {
      window.location.href = 'choose-style.php';
    };
    window.reScan = function() {
      localStorage.removeItem('scanCapturedImage');
      localStorage.removeItem('scanLandmarks');
      localStorage.removeItem('scanAnalysis');
      window.location.href = 'scanning.php';
    };
    // ── Helpers ───────────────────────────────────────────────
    function buildPlaceholder() {
      return "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='480' height='640'%3E%3Crect width='480' height='640' fill='%231a1810'/%3E%3C/svg%3E";
    }

    function hexRgba(hex, a) {
      const r = parseInt(hex.slice(1, 3), 16);
      const g = parseInt(hex.slice(3, 5), 16);
      const b = parseInt(hex.slice(5, 7), 16);
      return `rgba(${r},${g},${b},${Math.min(1,Math.max(0,a))})`;
    }
    window.addEventListener('DOMContentLoaded', init);
  </script>

</body>

</html>