<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Choose Your Style — Royals Arch Brow</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    :root {
      --black: #0a0a08;
      --dark: #111111;
      --dark-card: #1a1a0f;
      --dark-input: #1c1c15;
      --gold: #c9a84c;
      --gold-light: #d4b96a;
      --gold-dark: #8a6f2e;
      --gold-muted: rgba(201, 168, 76, 0.12);
      --white: #f5f0e8;
      --white-dim: rgba(245, 240, 232, 0.55);
      --white-faint: rgba(245, 240, 232, 0.15);
      --border: rgba(201, 168, 76, 0.18);
      --border-hover: rgba(201, 168, 76, 0.45);
      --font-display: 'Cormorant Garamond', serif;
      --font-body: 'Montserrat', sans-serif;
      --radius: 14px;
      --radius-sm: 10px;
      --transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }
    html { font-size: 16px; scroll-behavior: smooth; }
    body {
      background: var(--black);
      color: var(--white);
      font-family: var(--font-body);
      font-weight: 300;
      line-height: 1.6;
      min-height: 100vh;
      overflow-x: hidden;
    }
    a { color: inherit; text-decoration: none; }
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

    .navbar-left { display: flex; align-items: center; gap: 1rem; }
    .nav-avatar {
      width: 42px; height: 42px; border-radius: 50%; overflow: hidden;
      border: 1.5px solid var(--gold-dark); flex-shrink: 0;
    }
    .nav-avatar img { width: 100%; height: 100%; object-fit: cover; display: block; }

    .navbar-nav {
      display: flex; align-items: center; gap: 2.5rem; list-style: none;
      position: absolute; left: 50%; transform: translateX(-50%);
    }
    .navbar-nav a {
      font-size: 0.65rem; letter-spacing: 0.18em; text-transform: uppercase;
      color: var(--white-dim); transition: color var(--transition); font-weight: 400;
    }
    .navbar-nav a:hover, .navbar-nav a.active { color: var(--gold); }

    .btn-book {
      padding: 0.55rem 1.5rem; font-size: 0.65rem; letter-spacing: 0.12em;
      text-transform: uppercase; border-radius: 50px; border: 1px solid var(--border);
      color: var(--white-dim); transition: all var(--transition);
    }
    .btn-book:hover { border-color: var(--gold); color: var(--gold); }

    .nav-emblem {
      width: 44px; height: 44px; border-radius: 50%;
      background: radial-gradient(circle at 35% 35%, #2a2010, #1a1408);
      border: 1.5px solid var(--gold-dark); display: flex; align-items: center;
      justify-content: center; flex-shrink: 0; overflow: hidden;
    }
    .nav-emblem img { width: 26px; height: 26px; object-fit: contain; }

    .nav-gold-rule {
      height: 1px; background: linear-gradient(to right, transparent 0%, var(--gold-dark) 30%, var(--gold-dark) 70%, transparent 100%);
      opacity: 0.5;
    }

    /* ====== PAGE TOPBAR (Back Arrow + Title + Logo) ====== */
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
      background: rgba(201,168,76,0.12);
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

    .page-logo {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      border: 1px solid var(--gold);
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      flex-shrink: 0;
    }

    .page-logo img {
      width: 24px;
      height: 24px;
      object-fit: contain;
    }

    /* ====== LAYOUT ====== */
    .main {
      max-width: 100%;
      margin: 0 auto;
      padding: 0 3rem 2.5rem;
      display: flex;
      flex-direction: column;
      gap: 1.75rem;
    }

    /* ====== HEADER ====== */
    .page-label {
      font-size: 0.6rem; letter-spacing: 0.25em; text-transform: uppercase;
      color: var(--gold); font-weight: 500; margin-bottom: 0.2rem;
    }
    .page-title {
      font-family: var(--font-display);
      font-style: italic;
      font-size: 2rem;
      font-weight: 400;
      color: var(--white);
      line-height: 1.05;
    }

    /* ====== STYLE GRID ====== */
    .style-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 0.75rem;
    }

    .style-card {
      background: #161610;
      border: 1px solid #333;
      border-radius: var(--radius-sm);
      padding: 12px 6px;
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 8px;
      cursor: pointer;
      transition: all var(--transition);
    }

    .style-card:hover {
      border-color: #c9a84c;
      background: rgba(201,168,76,0.06);
    }

    .style-card.selected {
      border-color: var(--gold);
      background: rgba(201,168,76,0.06);
      box-shadow: 0 0 0 1px rgba(201,168,76,0.1);
    }

    .style-icon svg {
      width: 55px;
      height: 28px;
      fill: none;
      stroke: var(--white-dim);
      stroke-width: 3;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    .style-card.selected .style-icon svg {
      stroke: var(--white);
    }

    .style-label {
      font-size: 0.6rem;
      text-transform: uppercase;
      letter-spacing: 0.06em;
      color: var(--white-dim);
    }

    .style-card.selected .style-label {
      color: var(--white);
    }

    /* ====== COLOUR ROW ====== */
    .color-row {
      display: flex;
      align-items: center;
      gap: 0.6rem;
      flex-wrap: wrap;
    }

    .color-swatch {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      border: 1px solid rgba(255,255,255,0.05);
      cursor: pointer;
      position: relative;
      transition: all var(--transition);
    }

    .color-swatch:hover {
      border-color: rgba(255,255,255,0.2);
    }

    .color-swatch.selected {
      border-color: var(--gold);
      transform: scale(1.05);
      box-shadow: 0 0 0 1px var(--gold) inset;
    }

    .color-swatch.selected::after {
      content: '✔';
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: var(--gold);
      font-weight: bold;
      font-size: 0.9rem;
      text-shadow: 0 0 4px rgba(0,0,0,0.8);
    }

    /* ====== PREVIEW CARD ====== */
   /* ====== PREVIEW CARD ====== */
.preview-card {
  position: relative;
  border-radius: var(--radius);
  overflow: hidden;
  border: 1px solid #c9a84c;
  background: #000;
  width: 100%;
  max-width: 360px;      /* scanning.php jaisa */
  aspect-ratio: 3/4;     /* scanning.php jaisa */
  margin: 0 auto;        /* center */
}

    .preview-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
      opacity: 0.8;
    }

    .preview-label {
      position: absolute;
      top: 14px;
      left: 0;
      width: 100%;
      text-align: center;
      font-family: var(--font-body);
      font-size: 0.7rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: rgba(255,255,255,0.5);
      pointer-events: none;
    }

    .preview-copy {
      position: absolute;
      bottom: 1rem;
      left: 0;
      right: 0;
      text-align: center;
      font-family: var(--font-display);
      font-size: 1.1rem;
      color: var(--white);
      letter-spacing: 0.02em;
    }

    .preview-copy strong {
      font-weight: 600;
      color: var(--white);
    }
    
    .preview-copy span {
      color: var(--white);
    }

    .preview-note {
      font-size: 0.75rem;
      color: var(--white-dim);
      margin-top: 0.2rem;
    }

    /* ====== BUTTONS ====== */
    .actions {
      display: grid;
      gap: 0.75rem;
    }

    .btn-primary {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 100%;
      padding: 0.85rem 1.2rem;
      border-radius: 999px;
      border: 1px solid var(--border);
      background: #c9a84c;
      color: var(--white);
      font-size: 0.75rem;
      font-weight: 600;
      letter-spacing: 0.08em;
      text-decoration: none;
      transition: all var(--transition);
    }

    .btn-primary:hover {
      color: var(--black);
      box-shadow: 0 0 0 1px rgba(201,168,76,0.4);
      transform: translateY(-2px); 
    }

    /* ====== ANIMATIONS ====== */
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(16px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .fade-1 { animation: fadeUp 0.55s ease 0.05s both; }
    .fade-2 { animation: fadeUp 0.55s ease 0.15s both; }
    .fade-3 { animation: fadeUp 0.55s ease 0.25s both; }
    .fade-4 { animation: fadeUp 0.55s ease 0.35s both; }
    .fade-5 { animation: fadeUp 0.55s ease 0.45s both; }

    /* ====== RESPONSIVE ====== */
    @media (max-width: 900px) {
      .main { padding: 0 1.25rem 1.5rem; }
      .navbar { padding: 0.875rem 1.25rem; }
      .navbar-nav { display: none; }
      .page-title { font-size: 1.6rem; }
      .style-grid { grid-template-columns: repeat(2, 1fr); }
      .preview-card { max-height: 300px; }
      .back-btn { width: 38px; height: 38px; }
      .page-logo { width: 38px; height: 38px; }
    }
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <?php include 'includes/navbar.php'; ?>

  <!-- Gold rule -->
  <div class="nav-gold-rule"></div>

  <!-- MAIN CONTENT -->
  <main class="main">

    <!-- PAGE TOPBAR (Back Arrow + Title + Logo) -->
    <div class="page-topbar fade-1">
      <a href="javascript:history.back()" class="back-btn" aria-label="Go back">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="19" y1="12" x2="5" y2="12"></line>
          <polyline points="12 19 5 12 12 5"></polyline>
        </svg>
      </a>
      <div class="page-title-center">Choose your style</div>
    </div>

    <!-- CONTENT HEADER -->
    <div class="fade-2">
      <div class="page-label">Style Selection</div>
      <div class="page-title">Find your perfect brow style.</div>
    </div>

    <!-- STYLE GRID -->
    <div class="fade-3">
      <div class="section-label">Style</div>
      <div class="style-grid">
        <button class="style-card selected" type="button" data-style="Considered">
          <div class="style-icon"><svg viewBox="0 0 100 40"><path d="M20,24 L45,10 L80,24" /></svg></div>
          <div class="style-label">Considered</div>
        </button>
        <button class="style-card" type="button" data-style="Arch">
          <div class="style-icon"><svg viewBox="0 0 100 40"><path d="M20,28 Q50,2 80,28" /></svg></div>
          <div class="style-label">Arch</div>
        </button>
        <button class="style-card" type="button" data-style="Straight">
          <div class="style-icon"><svg viewBox="0 0 100 40"><path d="M20,18 L80,18" /></svg></div>
          <div class="style-label">Straight</div>
        </button>
        <button class="style-card" type="button" data-style="Sharp">
          <div class="style-icon"><svg viewBox="0 0 100 40"><path d="M20,34 L50,4 L80,34" /></svg></div>
          <div class="style-label">Sharp</div>
        </button>
        <button class="style-card" type="button" data-style="Feathered">
          <div class="style-icon"><svg viewBox="0 0 100 40"><path d="M20,24 L45,14 L55,28 L80,20" /></svg></div>
          <div class="style-label">Feathered</div>
        </button>
        <button class="style-card" type="button" data-style="Bold">
          <div class="style-icon"><svg viewBox="0 0 100 40"><path d="M20,22 L80,22" stroke-width="8" /></svg></div>
          <div class="style-label">Bold</div>
        </button>
        <button class="style-card" type="button" data-style="Natural">
          <div class="style-icon"><svg viewBox="0 0 100 40"><path d="M20,24 Q35,14 50,24 Q65,34 80,24" /></svg></div>
          <div class="style-label">Natural</div>
        </button>
        <button class="style-card" type="button" data-style="Sculpted">
          <div class="style-icon"><svg viewBox="0 0 100 40"><path d="M20,22 Q50,0 80,22" /></svg></div>
          <div class="style-label">Sculpted</div>
        </button>
      </div>
    </div>

    <!-- COLOUR ROW -->
    <div class="fade-4">
      <div class="section-label">Colour</div>
      <div class="color-row">
        <span class="color-swatch" data-color="#efd8bb" style="background:#efd8bb;"></span>
        <span class="color-swatch" data-color="#b27f50" style="background:#b27f50;"></span>
        <span class="color-swatch selected" data-color="#89603f" style="background:#89603f;"></span>
        <span class="color-swatch" data-color="#4f2a18" style="background:#4f2a18;"></span>
        <span class="color-swatch" data-color="#6e3d24" style="background:#6e3d24;"></span>
        <span class="color-swatch" data-color="#caa87d" style="background:#caa87d;"></span>
      </div>
    </div>

    <!-- PREVIEW CARD -->
    <div class="fade-4">
      <div class="preview-card">
        <div class="preview-label">PREVIEW</div>
        <img class="preview-image" src="assets/profile.png" alt="Preview" />
        <div class="preview-copy"><strong>Considered</strong> <span>.</span> Black</div>
      </div>
      <div class="preview-note">Black - selected</div>
    </div>

    <!-- ACTIONS -->
    <div class="actions fade-5">
      <a class="btn-primary" href="saved-look.php">Preview this look</a>
    </div>

  </main>

  <script type="module">
  import { FaceMeshDetector } from './js/detector.js';

  // ── State ─────────────────────────────────────────────────
  const colorMap = {
    '#efd8bb': 'Blonde',
    '#b27f50': 'Light Brown',
    '#89603f': 'Medium Brown',
    '#4f2a18': 'Darkest Brown',
    '#6e3d24': 'Espresso',
    '#caa87d': 'Warm Ash'
  };

  let currentStyle = 'Considered';
  let currentColor = '#89603f';
  let detector     = null;
  let stream       = null;
  let lastFaces    = [];
  let animId       = null;

  // ── DOM refs ──────────────────────────────────────────────
  const styleCards  = document.querySelectorAll('.style-card');
  const swatches    = document.querySelectorAll('.color-swatch');
  const previewCopy = document.querySelector('.preview-copy');
  const previewNote = document.querySelector('.preview-note');

  // ── Replace static preview-card with canvas + video ──────
  const previewCard = document.querySelector('.preview-card');
  previewCard.innerHTML = `
    <div class="preview-label">LIVE PREVIEW</div>
    <video id="liveVideo" autoplay playsinline muted
      style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;opacity:0;pointer-events:none;"></video>
    <canvas id="liveCanvas"
      style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;display:block;"></canvas>
    <div class="preview-copy" id="previewCopyEl"><strong>Considered</strong> <span>·</span> Medium Brown</div>
    <div id="liveStatus" style="
      position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);
      font-size:0.7rem;color:rgba(201,168,76,0.8);letter-spacing:0.1em;
      text-transform:uppercase;text-align:center;line-height:1.8;
      pointer-events:none;">Starting camera…</div>
  `;

  const video       = document.getElementById('liveVideo');
  const canvas      = document.getElementById('liveCanvas');
  const ctx         = canvas.getContext('2d');
  const liveStatus  = document.getElementById('liveStatus');
  const previewCopyEl = document.getElementById('previewCopyEl');

  // ── Brow shape paths (SVG-style, normalized 0-1 on brow span) ──
  // Each shape defines how to modify the detected landmarks
  const SHAPES = {
    Considered: { archLift: 6,  thickMult: 1.0 },
    Arch:       { archLift: 18, thickMult: 1.0 },
    Straight:   { archLift: 0,  thickMult: 1.0, flatten: true },
    Sharp:      { archLift: 14, thickMult: 1.0, sharp: true },
    Feathered:  { archLift: 6,  thickMult: 0.8, feather: true },
    Bold:       { archLift: 4,  thickMult: 1.6 },
    Natural:    { archLift: 4,  thickMult: 0.9 },
    Sculpted:   { archLift: 16, thickMult: 1.2 },
  };

  // MediaPipe landmark indices
  const LEFT_UPPER  = [70, 63, 105, 66, 107];
  const LEFT_LOWER  = [46, 53, 52, 65, 55];
  const RIGHT_UPPER = [300, 293, 334, 296, 336];
  const RIGHT_LOWER = [276, 283, 282, 295, 285];

  // ── Init camera + detector ────────────────────────────────
  async function init() {
    // Pre-select from scan recommendation
    const recommended = localStorage.getItem('selectedStyle') || 'Considered';
    currentStyle = recommended;
    styleCards.forEach(c => {
      c.classList.toggle('selected', c.dataset.style.toLowerCase() === recommended.toLowerCase());
    });
    updateLabel();

    try {
      setStatus('Starting camera…');
      stream = await navigator.mediaDevices.getUserMedia({
        video: { facingMode: 'user', width: { ideal: 640 }, height: { ideal: 480 } },
        audio: false
      });
      video.srcObject = stream;
      await video.play();

      setStatus('Loading detector…');
      detector = new FaceMeshDetector();
      await detector.init();

      setStatus('');
      loop();
    } catch (err) {
      console.error(err);
      setStatus('Camera unavailable.\n' + err.message);
    }
  }

  // ── Render loop ───────────────────────────────────────────
  function loop() {
    animId = requestAnimationFrame(loop);
    if (video.readyState < 2) return;

    // Resize canvas to match video
    if (canvas.width !== video.videoWidth) {
      canvas.width  = video.videoWidth;
      canvas.height = video.videoHeight;
    }

    const cw = canvas.width, ch = canvas.height;

    // Draw mirrored video
    ctx.save();
    ctx.translate(cw, 0);
    ctx.scale(-1, 1);
    ctx.drawImage(video, 0, 0, cw, ch);
    ctx.restore();

    // Detect faces
    try { lastFaces = detector.detect(video) || []; } catch(e) { lastFaces = []; }

    if (lastFaces.length === 0) {
      setStatus('Centre your face\nin the frame.');
      return;
    }
    setStatus('');

    // Draw brows for each face
    for (const lm of lastFaces) {
      // Mirror X to match flipped video
      const kps = lm.map(p => ({ x: (1 - p.x) * cw, y: p.y * ch }));
      drawBrow(kps, LEFT_UPPER,  LEFT_LOWER);
      drawBrow(kps, RIGHT_UPPER, RIGHT_LOWER);
    }
  }

  // ── Draw one brow ─────────────────────────────────────────
  function drawBrow(kps, upperIdx, lowerIdx) {
    let top = upperIdx.map(i => kps[i]).filter(Boolean);
    let bot = lowerIdx.map(i => kps[i]).filter(Boolean);
    if (top.length < 2 || bot.length < 2) return;

    top.sort((a,b) => a.x - b.x);
    bot.sort((a,b) => a.x - b.x);

    const shape = SHAPES[currentStyle] || SHAPES.Considered;
    const color = currentColor;

    // Apply arch lift
    if (shape.archLift) {
      top = applyArch(top, shape.archLift);
    }

    // Flatten for straight
    if (shape.flatten) {
      const avgY = top.reduce((s,p) => s+p.y, 0) / top.length;
      top = top.map(p => ({ x: p.x, y: avgY }));
      const avgBotY = bot.reduce((s,p) => s+p.y, 0) / bot.length;
      bot = bot.map(p => ({ x: p.x, y: avgBotY }));
    }

    // Expand bottom for thickness
    const thick = 5 * shape.thickMult;
    bot = bot.map((p, i) => ({
      x: p.x,
      y: p.y + thick * Math.sin((i / (bot.length-1)) * Math.PI)
    }));

    const alpha = 0.82;

    // 1. Shadow
    ctx.save();
    ctx.filter = 'blur(6px)';
    ctx.fillStyle = hexRgba(color, alpha * 0.4);
    ctx.fill(buildPath(top, bot));
    ctx.restore();

    // 2. Gradient fill — multiply blend for realism
    ctx.save();
    ctx.globalCompositeOperation = 'multiply';
    const minX = Math.min(...top.map(p=>p.x));
    const maxX = Math.max(...top.map(p=>p.x));
    const grad = ctx.createLinearGradient(minX, 0, maxX, 0);
    grad.addColorStop(0,   hexRgba(color, alpha * 0.7));
    grad.addColorStop(0.5, hexRgba(color, alpha));
    grad.addColorStop(1,   hexRgba(color, alpha * 0.75));
    ctx.fillStyle = grad;
    ctx.fill(buildPath(top, bot));
    ctx.restore();

    // 3. Feather strokes if needed
    if (shape.feather) {
      ctx.save();
      ctx.strokeStyle = hexRgba(color, 0.45);
      ctx.lineWidth   = 0.9;
      ctx.lineCap     = 'round';
      for (let i = 0; i < top.length; i++) {
        const t = i / (top.length - 1);
        const bi = Math.round(t * (bot.length-1));
        ctx.beginPath();
        ctx.moveTo(bot[bi].x, bot[bi].y);
        ctx.lineTo(top[i].x, top[i].y - 4);
        ctx.stroke();
      }
      ctx.restore();
    }

    // 4. Hair strokes
    ctx.save();
    ctx.strokeStyle = hexRgba(color, 0.25);
    ctx.lineWidth   = 0.6;
    ctx.lineCap     = 'round';
    for (let i = 0; i < top.length; i++) {
      const t  = i / (top.length - 1);
      const bi = Math.round(t * (bot.length-1));
      const angle = (i < top.length/2) ? -1.2 : 1.2;
      ctx.beginPath();
      ctx.moveTo(top[i].x + angle, top[i].y);
      ctx.lineTo((top[i].x + bot[bi].x)/2, bot[bi].y);
      ctx.stroke();
    }
    ctx.restore();

    // 5. Top highlight
    ctx.save();
    ctx.filter = 'blur(2px)';
    ctx.fillStyle = 'rgba(255,255,255,0.06)';
    ctx.fill(buildPath(top, top.map((p,i) => {
      const t = i/(top.length-1);
      const bi = Math.round(t*(bot.length-1));
      return { x: p.x + (bot[bi].x-p.x)*0.25, y: p.y + (bot[bi].y-p.y)*0.25 };
    })));
    ctx.restore();
  }

  // ── Path helpers ──────────────────────────────────────────
  function buildPath(topPts, botPts) {
    const path = new Path2D();
    path.moveTo(topPts[0].x, topPts[0].y);
    smoothCurve(path, topPts);
    smoothCurve(path, [...botPts].reverse());
    path.closePath();
    return path;
  }

  function smoothCurve(path, pts) {
    for (let i = 0; i < pts.length - 1; i++) {
      const cx = (pts[i].x + pts[i+1].x) / 2;
      const cy = (pts[i].y + pts[i+1].y) / 2;
      path.quadraticCurveTo(pts[i].x, pts[i].y, cx, cy);
    }
    path.lineTo(pts[pts.length-1].x, pts[pts.length-1].y);
  }

  function applyArch(pts, lift) {
    return pts.map((p, i) => ({
      x: p.x,
      y: p.y - Math.sin(i / (pts.length - 1) * Math.PI) * lift
    }));
  }

  function hexRgba(hex, a) {
    const r = parseInt(hex.slice(1,3),16);
    const g = parseInt(hex.slice(3,5),16);
    const b = parseInt(hex.slice(5,7),16);
    return `rgba(${r},${g},${b},${Math.min(1,Math.max(0,a))})`;
  }

  function setStatus(msg) {
    liveStatus.textContent = msg;
    liveStatus.style.display = msg ? 'block' : 'none';
  }

  // ── UI interactions ───────────────────────────────────────
  function updateLabel() {
    const colorLabel = colorMap[currentColor] || 'Medium Brown';
    if (previewCopyEl) {
      previewCopyEl.innerHTML = `<strong>${currentStyle}</strong> <span>·</span> ${colorLabel}`;
    }
    if (previewNote) previewNote.textContent = `${colorLabel} — selected`;
  }

  styleCards.forEach(card => {
    card.addEventListener('click', () => {
      styleCards.forEach(c => c.classList.remove('selected'));
      card.classList.add('selected');
      currentStyle = card.dataset.style;
      updateLabel();
    });
  });

  swatches.forEach(swatch => {
    swatch.addEventListener('click', () => {
      swatches.forEach(s => s.classList.remove('selected'));
      swatch.classList.add('selected');
      currentColor = swatch.dataset.color;
      updateLabel();
    });
  });

  // ── Save + navigate ───────────────────────────────────────
  document.querySelector('.btn-primary')?.addEventListener('click', (e) => {
    e.preventDefault();
    const colorLabel = colorMap[currentColor] || 'Medium Brown';
    localStorage.setItem('selectedStyle',     currentStyle);
    localStorage.setItem('selectedColor',     currentColor);
    localStorage.setItem('selectedColorName', colorLabel);

    // Stop camera before leaving
    cancelAnimationFrame(animId);
    if (stream) stream.getTracks().forEach(t => t.stop());

    window.location.href = 'saved-look.php';
  });

  // Stop camera on page leave
  window.addEventListener('beforeunload', () => {
    cancelAnimationFrame(animId);
    if (stream) stream.getTracks().forEach(t => t.stop());
  });

  // ── Start ─────────────────────────────────────────────────
  init();
</script>

</body>
</html>