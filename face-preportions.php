<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Scanning — Royals Arch Brow</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
  <style>
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

    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
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
      align-items: center;
      text-align: center;
    }

    /* ====== SCAN CAMERA VIEW ====== */
    .scan-view-wrapper {
      position: relative;
      width: 100%;
      max-width: 360px;
      aspect-ratio: 3/4;
      margin: 0 auto;
      border-radius: var(--radius);
      overflow: hidden;
      background: #1a1810;
    }

    .scan-view-wrapper video {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    /* Camera error fallback */
    .camera-error {
      display: none;
      position: absolute;
      inset: 0;
      background: #1a1810;
      color: var(--white-dim);
      font-size: 0.75rem;
      letter-spacing: 0.08em;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 1.5rem;
      line-height: 1.8;
    }

    .camera-error svg {
      display: block;
      margin: 0 auto 0.75rem;
      opacity: 0.4;
    }

    /* Scan line animation */
    .scan-line {
      position: absolute;
      left: 0;
      right: 0;
      height: 2px;
      background: linear-gradient(to right, transparent, var(--gold), transparent);
      opacity: 0;
      animation: scanLine 2.5s ease-in-out infinite;
      pointer-events: none;
    }

    @keyframes scanLine {
      0%   { top: 10%; opacity: 0; }
      10%  { opacity: 0.7; }
      90%  { opacity: 0.7; }
      100% { top: 90%; opacity: 0; }
    }

    .scan-corner {
      position: absolute;
      width: 24px;
      height: 24px;
      border-color: var(--gold);
      border-style: solid;
      border-width: 0;
    }

    .scan-corner-tl {
      top: 12px;
      left: 12px;
      border-top-width: 2.5px;
      border-left-width: 2.5px;
      border-radius: 2px 0 0 0;
    }

    .scan-corner-tr {
      top: 12px;
      right: 12px;
      border-top-width: 2.5px;
      border-right-width: 2.5px;
      border-radius: 0 2px 0 0;
    }

    .scan-corner-bl {
      bottom: 12px;
      left: 12px;
      border-bottom-width: 2.5px;
      border-left-width: 2.5px;
      border-radius: 0 0 0 2px;
    }

    .scan-corner-br {
      bottom: 12px;
      right: 12px;
      border-bottom-width: 2.5px;
      border-right-width: 2.5px;
      border-radius: 0 0 2px 0;
    }

    .scan-view-wrapper::after {
      content: '';
      position: absolute;
      inset: 0;
      border-radius: var(--radius);
      box-shadow: inset 0 0 30px rgba(201, 168, 76, 0.06);
      pointer-events: none;
    }

    /* ====== STATUS TEXT & LOADING ====== */
    .status-wrapper {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 1rem;
      max-width: 90%;
    }

    .status-title {
      font-family: var(--font-display);
      font-style: italic;
      font-size: 1.8rem;
      font-weight: 400;
      line-height: 1.1;
      color: var(--white);
    }

    .status-sub {
      font-size: 0.8rem;
      color: var(--white-dim);
      font-weight: 300;
    }

    .loading-dots {
      display: flex;
      gap: 0.5rem;
      justify-content: center;
      margin-top: 0.25rem;
    }

    .dot {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: #2a2a22;
      animation: pulseDot 1.4s ease-in-out infinite both;
    }

    .dot:nth-child(1) { animation-delay: -0.32s; }
    .dot:nth-child(2) { animation-delay: -0.16s; }
    .dot:nth-child(3) { animation-delay: 0s; }

    @keyframes pulseDot {
      0%, 80%, 100% {
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

    /* ====== SCAN PROGRESS BAR ====== */
    .scan-progress-bar {
      position: absolute;
      bottom: 0;
      left: 0;
      height: 3px;
      width: 0%;
      background: linear-gradient(to right, var(--gold-dark), var(--gold), var(--gold-light));
      border-radius: 0 0 var(--radius) var(--radius);
      transition: width 0.1s linear;
    }

    /* Hidden canvas for capture */
    #captureCanvas { display: none; }

    /* ====== CANCEL BUTTON ====== */
    .cancel-link {
      margin-top: 1rem;
      font-size: 0.7rem;
      color: var(--gold);
      cursor: pointer;
      transition: all var(--transition);
      font-weight: 400;
      letter-spacing: 0.05em;
    }

    .cancel-link:hover { opacity: 0.7; }

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
      .status-title { font-size: 1.5rem; }
      .scan-view-wrapper { max-width: 300px; }
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
      <div class="page-title-center">Scanning Face</div>
    </div>

    <!-- CONTENT HEADER -->
    <div class="fade-2">
      <div class="page-label">Face Scan</div>
      <div class="page-title">Reading your features.</div>
    </div>

    <!-- CAMERA VIEW -->
    <div class="scan-view-wrapper fade-3">

      <!-- Live camera feed -->
      <video id="cameraFeed" autoplay playsinline muted></video>

      <!-- Scan line sweep -->
      <div class="scan-line"></div>

      <!-- Progress bar -->
      <div class="scan-progress-bar" id="scanProgress"></div>

      <!-- Hidden canvas for frame capture -->
      <canvas id="captureCanvas"></canvas>

      <!-- Error fallback -->
      <div class="camera-error" id="cameraError">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
          <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/>
          <line x1="1" y1="1" x2="23" y2="23"/>
        </svg>
        Camera access denied.<br>Please allow camera permissions<br>and reload the page.
      </div>

      <div class="scan-corner scan-corner-tl"></div>
      <div class="scan-corner scan-corner-tr"></div>
      <div class="scan-corner scan-corner-bl"></div>
      <div class="scan-corner scan-corner-br"></div>
    </div>

    <!-- STATUS -->
    <div class="status-wrapper fade-4">
      <div class="status-title">Reading your face proportions.</div>
      <div class="status-sub">This takes only a moment.</div>

      <div class="loading-dots">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>
    </div>

    <!-- CANCEL -->
    <button class="cancel-link fade-5" onclick="cancelScan()">Cancel</button>

  </main>

  <script type="module">
  import { FaceMeshDetector } from './js/detector.js';

  const STABLE_FRAMES_NEEDED = 36;
  let detector = null;
  let stream = null;
  let stableFrames = 0;
  let animFrameId = null;
  let done = false;

  const video      = document.getElementById('cameraFeed');
  const canvas     = document.getElementById('captureCanvas');
  const progressBar = document.getElementById('scanProgress');
  const errorDiv   = document.getElementById('cameraError');

  async function startCamera() {
    try {
      stream = await navigator.mediaDevices.getUserMedia({
        video: { facingMode: 'user', width: { ideal: 720 }, height: { ideal: 960 } },
        audio: false
      });
      video.srcObject = stream;
      await video.play();

      // Load MediaPipe detector
      detector = new FaceMeshDetector();
      await detector.init();

      loop();
    } catch (err) {
      console.error('Camera error:', err);
      video.style.display = 'none';
      errorDiv.style.display = 'flex';
    }
  }

  function loop() {
    if (done) return;
    animFrameId = requestAnimationFrame(loop);

    if (video.readyState < 2) return;

    const faces = detector.detect(video);
    const hasFace = faces && faces.length > 0;

    if (hasFace) {
      stableFrames = Math.min(stableFrames + 1, STABLE_FRAMES_NEEDED + 5);
    } else {
      stableFrames = Math.max(0, stableFrames - 2);
    }

    // Progress bar based on stable frames
    const pct = Math.min((stableFrames / STABLE_FRAMES_NEEDED) * 100, 100);
    progressBar.style.width = pct + '%';

    if (stableFrames >= STABLE_FRAMES_NEEDED && !done) {
      done = true;
      captureAndRedirect(faces);
    }
  }

  function captureAndRedirect(faces) {
    cancelAnimationFrame(animFrameId);

    const vw = video.videoWidth  || 720;
    const vh = video.videoHeight || 960;
    canvas.width  = vw;
    canvas.height = vh;

    const ctx = canvas.getContext('2d');
    // Mirror horizontally — selfie feel
    ctx.translate(vw, 0);
    ctx.scale(-1, 1);
    ctx.drawImage(video, 0, 0, vw, vh);

    const dataUrl = canvas.toDataURL('image/jpeg', 0.85);

    try {
      localStorage.setItem('scanCapturedImage', dataUrl);
      // Also store raw landmarks for scan-complete.php to use
      // faces[0] landmarks are normalized (0-1), store them
      if (faces && faces[0]) {
        const lm = faces[0].map(p => ({ x: p.x, y: p.y, z: p.z }));
        localStorage.setItem('scanLandmarks', JSON.stringify(lm));
      }
    } catch (e) {
      console.warn('localStorage error:', e);
    }

    stopCamera();
    window.location.href = 'face-shape-result.php';
  }

  function stopCamera() {
    cancelAnimationFrame(animFrameId);
    if (video && video.srcObject) {
      video.srcObject.getTracks().forEach(t => t.stop());
      video.srcObject = null;
    }
  }

  window.cancelScan = function() {
    stopCamera();
    window.history.back();
  };

  window.addEventListener('DOMContentLoaded', startCamera);
  window.addEventListener('beforeunload', stopCamera);
  window.addEventListener('pagehide', stopCamera);
</script>

</body>
</html>