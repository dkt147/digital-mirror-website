<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>Face Scan — Royals Arch Brow</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --black: #0a0a08;
      --gold: #C9A84C;
      --gold-dark: #b59535;
      --white: #f5f0e8;
      --white-dim: rgba(245, 240, 232, 0.65);
      --border: rgba(201, 168, 76, 0.22);
      --font-display: 'Cormorant Garamond', serif;
      --font-body: 'Montserrat', sans-serif;
      --transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    html, body {
      background: #000;
      color: var(--white);
      font-family: var(--font-body);
      font-weight: 600;
      height: 100%;
      overflow: hidden;
    }

    button { cursor: pointer; border: none; outline: none; font-family: var(--font-body); background: none; }
    a { color: inherit; text-decoration: none; }

    /* ====== NAVBAR ====== */
    .navbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 1rem 2.5rem;
      border-bottom: 1px solid var(--border);
      background: rgba(10,10,8,0.97);
      backdrop-filter: blur(20px);
      position: relative;
      z-index: 100;
      flex-shrink: 0;
    }

    .nav-emblem {
      width: 44px; height: 44px;
      border-radius: 50%;
      background: radial-gradient(circle at 35% 35%, #2a2010, #1a1408);
      border: 1.5px solid var(--gold);
      display: flex; align-items: center; justify-content: center;
      flex-shrink: 0; overflow: hidden;
    }
    .nav-emblem img { width: 26px; height: 26px; object-fit: contain; }

    .navbar-nav {
      display: flex; align-items: center; gap: 2.5rem; list-style: none;
      position: absolute; left: 50%; transform: translateX(-50%);
    }
    .navbar-nav a {
      font-size: 0.65rem; letter-spacing: 0.18em; text-transform: uppercase;
      color: var(--white-dim); transition: color var(--transition); font-weight: 400;
    }
    .navbar-nav a:hover, .navbar-nav a.active { color: var(--gold); }

    .nav-avatar {
      width: 42px; height: 42px; border-radius: 50%; overflow: hidden;
      border: 1.5px solid var(--gold); flex-shrink: 0;
    }
    .nav-avatar img { width: 100%; height: 100%; object-fit: cover; display: block; }

    .nav-gold-rule {
      height: 1px;
      background: linear-gradient(to right, transparent 0%, var(--gold) 30%, var(--gold) 70%, transparent 100%);
      opacity: 0.4;
      flex-shrink: 0;
    }

    /* ====== FULL PAGE LAYOUT ====== */
    .page-wrap {
      display: flex;
      flex-direction: column;
      height: calc(100vh - 61px); /* minus navbar */
      position: relative;
      overflow: hidden;
    }

    /* ====== LIVE CAMERA (fills everything) ====== */
    #cameraVideo {
      position: absolute;
      inset: 0;
      width: 100%; height: 100%;
      object-fit: cover;
      object-position: center 20%;
      transform: scaleX(-1);
      z-index: 0;
    }

    .camera-fallback {
      position: absolute;
      inset: 0;
      width: 100%; height: 100%;
      object-fit: cover;
      object-position: 50% 20%;
      z-index: 0;
      display: none;
    }

    /* Top gradient for text readability */
    .top-gradient {
      position: absolute;
      top: 0; left: 0; right: 0;
      height: 130px;
      background: linear-gradient(to bottom, rgba(10,10,8,0.82) 0%, transparent 100%);
      pointer-events: none;
      z-index: 2;
    }

    /* Bottom gradient for toolbar */
    .bottom-gradient {
      position: absolute;
      bottom: 0; left: 0; right: 0;
      height: 130px;
      background: linear-gradient(to top, rgba(10,10,8,1) 0%, rgba(10,10,8,0.7) 55%, transparent 100%);
      pointer-events: none;
      z-index: 2;
    }

    /* ====== TOP TEXT OVERLAY ====== */
    .top-overlay {
      position: absolute;
      top: 0; left: 0; right: 0;
      z-index: 5;
      padding: 1rem 1.5rem 0.8rem;
    }

    .back-btn {
      display: inline-flex;
      align-items: center; justify-content: center;
      width: 38px; height: 38px;
      border-radius: 50%;
      border: 1.5px solid var(--gold);
      color: var(--gold);
      background: rgba(10,10,8,0.4);
      backdrop-filter: blur(4px);
      margin-bottom: 0.6rem;
      transition: background var(--transition);
    }
    .back-btn:hover { background: rgba(201,168,76,0.15); }

    .top-heading {
      font-family: var(--font-body);
      font-size: 0.72rem;
      font-weight: 700;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 0.3rem;
    }

    .top-subtext {
      font-size: 0.78rem;
      font-weight: 400;
      color: var(--white-dim);
      line-height: 1.5;
      max-width: 280px;
    }

    /* ====== PERMISSION OVERLAY (center of camera) ====== */
    .perm-overlay {
      position: absolute;
      inset: 0;
      z-index: 10;
      background: rgba(10,10,8,0.93);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 1.2rem;
      padding: 2rem 2rem;
      text-align: center;
    }
    .perm-overlay.hidden { display: none; }

    .perm-cam-icon {
      width: 70px; height: 70px;
      border-radius: 50%;
      border: 1.5px solid var(--gold);
      display: flex; align-items: center; justify-content: center;
      background: rgba(201,168,76,0.08);
    }

    .perm-title {
      font-family: var(--font-display);
      font-size: 1.6rem;
      font-weight: 400;
      color: var(--white);
    }

    .perm-desc {
      font-size: 0.75rem;
      color: var(--white-dim);
      font-weight: 400;
      line-height: 1.6;
      max-width: 260px;
    }

    .perm-allow-btn {
      background: var(--gold);
      color: #0a0a08;
      font-weight: 700;
      font-size: 0.72rem;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      padding: 0.85rem 2.2rem;
      border-radius: 50px;
      transition: all var(--transition);
    }
    .perm-allow-btn:hover { background: var(--gold-dark); }

    .perm-skip {
      font-size: 0.65rem;
      color: var(--white-dim);
      font-weight: 400;
      text-decoration: underline;
      cursor: pointer;
      opacity: 0.6;
    }
    .perm-skip:hover { opacity: 1; }

    /* ====== BOTTOM TOOLBAR ====== */
    .bottom-toolbar {
      position: absolute;
      bottom: 0; left: 0; right: 0;
      z-index: 10;
      background: rgba(8,8,6,0.88);
      backdrop-filter: blur(24px);
      -webkit-backdrop-filter: blur(24px);
      border-top: 1px solid var(--border);
      padding: 0.85rem 1rem 1.6rem;
      display: flex;
      justify-content: space-around;
      align-items: flex-end;
    }

    .tool-item {
      display: flex; flex-direction: column;
      align-items: center; gap: 6px;
      transition: all var(--transition);
      min-width: 46px;
    }

    .tool-circle {
      width: 46px; height: 46px;
      border-radius: 50%;
      border: 1.5px solid rgba(201,168,76,0.45);
      display: flex; align-items: center; justify-content: center;
      transition: all var(--transition);
      background: rgba(201,168,76,0.05);
    }

    .tool-item.active .tool-circle {
      background: var(--gold);
      border-color: var(--gold-dark);
      box-shadow: 0 0 18px rgba(201,168,76,0.3);
    }

    .tool-circle svg {
      width: 19px; height: 19px;
      stroke: rgba(245,240,232,0.65);
      fill: none;
      stroke-width: 1.8;
      stroke-linecap: round;
      stroke-linejoin: round;
      transition: stroke var(--transition);
    }
    .tool-item.active .tool-circle svg { stroke: #0a0a08; }

    .tool-label {
      font-size: 0.52rem;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      font-weight: 600;
      color: rgba(245,240,232,0.4);
      transition: color var(--transition);
    }
    .tool-item.active .tool-label { color: var(--gold); }

    /* Error toast */
    .cam-error {
      position: fixed;
      top: 80px; left: 50%;
      transform: translateX(-50%);
      background: rgba(160,50,50,0.88);
      color: white;
      font-size: 0.7rem;
      font-weight: 500;
      padding: 0.5rem 1.2rem;
      border-radius: 50px;
      z-index: 200;
      display: none;
      white-space: nowrap;
    }

    /* ====== RESET CONFIRMATION MODAL ====== */
    .modal-overlay {
    position: fixed;
    inset: 0;
    z-index: 9999;
    background: rgba(0, 0, 0, 0.85);
    backdrop-filter: blur(6px);
    display: none; /* Hidden by default */
    align-items: center;
    justify-content: center;
    padding: 1.5rem;
    }

    .modal-overlay.active { display: flex; }

    .modal-card {
    background: #0a0a08;
    border: 1px solid rgba(201, 168, 76, 0.45);
    border-radius: 28px;
    max-width: 360px;
    width: 100%;
    padding: 2.2rem 1.8rem 1.8rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    position: relative;
    box-shadow: 0 20px 60px rgba(0,0,0,0.9);
    }

    .modal-icon {
    width: 52px; height: 52px;
    border-radius: 50%;
    border: 1.5px solid var(--gold);
    background: rgba(201, 168, 76, 0.08);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.2rem;
    }
    .modal-icon span { font-size: 1.5rem; font-weight: 400; color: var(--gold); }

    .modal-title {
    font-family: var(--font-display);
    font-size: 1.4rem;
    font-style: italic;
    color: var(--white);
    margin-bottom: 0.6rem;
    }

    .modal-sub {
    font-size: 0.8rem;
    font-weight: 400;
    color: var(--white-dim);
    line-height: 1.5;
    margin-bottom: 2rem;
    }

    .modal-btn-row {
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 0.7rem;
    }

    .modal-btn {
    width: 100%;
    padding: 0.9rem 0;
    border-radius: 50px;
    font-family: var(--font-body);
    font-weight: 700;
    font-size: 0.7rem;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    transition: all 0.3s ease;
    }

    .modal-btn-yes {
    background: var(--gold);
    color: #0a0a08;
    border: 1.5px solid var(--gold);
    }
    .modal-btn-yes:hover { background: var(--gold-dark); border-color: var(--gold-dark); }

    .modal-btn-no {
    background: transparent;
    color: rgba(255,255,255,0.7);
    border: 1.5px solid rgba(255,255,255,0.15);
    }
    .modal-btn-no:hover { border-color: rgba(255,255,255,0.4); color: white; }

    /* ====== ANIMATIONS ====== */
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(8px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    .fade-1 { animation: fadeUp 0.45s ease 0.05s both; }
    .fade-2 { animation: fadeUp 0.45s ease 0.2s  both; }

    /* ====== RESPONSIVE ====== */
    @media (max-width: 900px) {
      .navbar { padding: 0.875rem 1.25rem; }
      .navbar-nav { display: none; }
    }
    @media (max-height: 700px) {
      .bottom-toolbar { padding: 0.6rem 0.8rem 1rem; }
      .tool-circle { width: 38px; height: 38px; }
    }
  </style>
</head>
<body>

<!-- NAVBAR -->
<?php include 'includes/navbar.php'; ?>
<div class="nav-gold-rule"></div>

<!-- ERROR TOAST -->
<div class="cam-error" id="camError">Camera unavailable — using sample image</div>

<!-- MAIN PAGE WRAPPER -->
<div class="page-wrap">

  <!-- LIVE CAMERA -->
  <video id="cameraVideo" autoplay playsinline muted></video>
  <img class="camera-fallback" id="fallbackImg" src="assets/face-placeholder.png" alt="Face" />

  <!-- Gradients -->
  <div class="top-gradient"></div>
  <div class="bottom-gradient"></div>

  <!-- PERMISSION OVERLAY -->
  <div class="perm-overlay" id="permOverlay">
    <div class="perm-cam-icon">
      <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#C9A84C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/>
        <circle cx="12" cy="13" r="4"/>
      </svg>
    </div>
    <div class="perm-title">Allow Camera</div>
    <div class="perm-desc">Position your face to begin scanning. Your image is never stored or shared.</div>
    <button class="perm-allow-btn" onclick="startCamera()">Allow Camera</button>
    <span class="perm-skip" onclick="skipToFallback()">Use sample image</span>
  </div>

  <!-- TOP TEXT OVERLAY -->
  <div class="top-overlay fade-1" id="topOverlay" style="display:none;">
    <a href="tracing-guide.php" class="back-btn" aria-label="Go back">
      <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
        <line x1="19" y1="12" x2="5" y2="12"/>
        <polyline points="12 19 5 12 12 5"/>
      </svg>
    </a>
    <div class="top-heading">Trace Your Brow Outline</div>
    <div class="top-subtext">Use your fingertip, zoom in for precision where it counts.</div>
  </div>

  <!-- BOTTOM TOOLBAR -->
  <div class="bottom-toolbar fade-2" id="bottomToolbar" style="display:none;">
    <button class="tool-item active" onclick="setActiveTool(this)">
      <div class="tool-circle">
        <svg viewBox="0 0 24 24"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"/></svg>
      </div>
      <span class="tool-label">Draw</span>
    </button>

    <button class="tool-item" onclick="setActiveTool(this)">
      <div class="tool-circle">
        <svg viewBox="0 0 24 24"><path d="M20 20H7L3 16 14 5l6 6-3.5 3.5"/><path d="M6.5 17.5l-2-2"/></svg>
      </div>
      <span class="tool-label">Erase</span>
    </button>

    <button class="tool-item" onclick="setActiveTool(this)">
      <div class="tool-circle">
        <svg viewBox="0 0 24 24"><path d="M9 14L4 9l5-5"/><path d="M4 9h10.5a5.5 5.5 0 0 1 0 11H11"/></svg>
      </div>
      <span class="tool-label">Undo</span>
    </button>

    <button class="tool-item" onclick="openResetModal()">
    <div class="tool-circle">
        <svg viewBox="0 0 24 24"><path d="M23 4v6h-6"/><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"/></svg>
    </div>
    <span class="tool-label">Reset</span>
    </button>

    <button class="tool-item" onclick="goToGuideComplete()">
    <div class="tool-circle">
        <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
    </div>
    <span class="tool-label">Done</span>
    </button>
  </div>

    <!-- ====== RESET CONFIRMATION MODAL ====== -->
    <div class="modal-overlay" id="resetModal">
    <div class="modal-card">
        <div class="modal-icon"><span>!</span></div>
        <div class="modal-title">Start your drawing again?</div>
        <div class="modal-sub">Your current tracing will be cleared.<br>That's perfectly fine.</div>
        <div class="modal-btn-row">
        <button class="modal-btn modal-btn-yes" onclick="confirmReset()">YES, START AGAIN</button>
        <button class="modal-btn modal-btn-no" onclick="closeResetModalAndContinue()">KEEP GOING</button>
        </div>
    </div>
    </div>

</div><!-- /page-wrap -->

<script>
  const video       = document.getElementById('cameraVideo');
  const fallbackImg = document.getElementById('fallbackImg');
  const permOverlay = document.getElementById('permOverlay');
  const camError    = document.getElementById('camError');
  const topOverlay  = document.getElementById('topOverlay');
  const bottomToolbar = document.getElementById('bottomToolbar');

  function showUI() {
    permOverlay.classList.add('hidden');
    topOverlay.style.display = '';
    bottomToolbar.style.display = '';
  }

  function showError(msg) {
    camError.textContent = msg;
    camError.style.display = 'block';
    setTimeout(() => camError.style.display = 'none', 4000);
  }

  async function startCamera() {
    try {
      const stream = await navigator.mediaDevices.getUserMedia({
        video: { facingMode: { ideal: 'user' }, width: { ideal: 1280 }, height: { ideal: 720 } },
        audio: false
      });
      video.srcObject = stream;
      video.style.display = 'block';
      fallbackImg.style.display = 'none';
      showUI();
    } catch (err) {
      console.warn('Camera error:', err.name);
      if (err.name === 'NotAllowedError') showError('Camera permission denied — using sample image');
      else if (err.name === 'NotFoundError') showError('No camera found — using sample image');
      else showError('Camera unavailable — using sample image');
      skipToFallback();
    }
  }

  function skipToFallback() {
    video.style.display = 'none';
    fallbackImg.style.display = 'block';
    showUI();
  }

  function setActiveTool(tool) {
    document.querySelectorAll('.tool-item').forEach(t => t.classList.remove('active'));
    tool.classList.add('active');
  }

  window.addEventListener('DOMContentLoaded', () => {
    if (!navigator.mediaDevices || !navigator.mediaDevices.getUserMedia) {
      skipToFallback();
    }
  });

  // ====== MODAL FUNCTIONS ======
    function openResetModal() {
    document.getElementById('resetModal').classList.add('active');
    }

    function closeResetModal() {
    document.getElementById('resetModal').classList.remove('active');
    }

    function confirmReset() {
    // Close the modal
    closeResetModal();
    
    // ========================================================
    // PLACE YOUR ACTUAL CLEAR/RESET LOGIC HERE
    // For example: if you have a canvas, clear it like: 
    // ctx.clearRect(0, 0, canvas.width, canvas.height);
    // ========================================================
    
    console.log("✅ Drawing has been cleared and reset.");
    }

    // ====== SAVE CAPTURED IMAGE ======
    function saveCapturedImage(imageDataUrl) {
    localStorage.setItem('myBrowGuideImage', imageDataUrl);
    console.log('✅ Face image saved locally.');
    }

    // ====== CAPTURE CURRENT FRAME ======
    function captureCurrentFrame() {
    const video = document.getElementById('cameraVideo');
    const canvas = document.createElement('canvas');
    canvas.width = video.videoWidth;
    canvas.height = video.videoHeight;
    const ctx = canvas.getContext('2d');
    
    // Mirror effect (flip horizontally)
    ctx.translate(canvas.width, 0);
    ctx.scale(-1, 1);
    ctx.drawImage(video, 0, 0);
    
    const dataUrl = canvas.toDataURL('image/jpeg', 0.9);
    saveCapturedImage(dataUrl);
    }

    // ====== DONE BUTTON FUNCTION ======
    function goToGuideComplete() {
    captureCurrentFrame(); // Photo save karega
    window.location.href = 'guide-complete.php';
    }

    // ====== KEEP GOING (RESET MODAL) FUNCTION ======
    function closeResetModalAndContinue() {
    document.getElementById('resetModal').classList.remove('active');
    captureCurrentFrame(); // Photo save karega
    window.location.href = 'guide-complete.php';
    }
</script>

</body>
</html>