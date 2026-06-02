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
      --radius: 20px;
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
      display: flex;
      flex-direction: column;
    }
    a { color: inherit; text-decoration: none; }
    button {
      cursor: pointer;
      border: none;
      outline: none;
      font-family: var(--font-body);
      background: none;
    }

    /* ====== NAVBAR (Compact Style) ====== */
    .navbar-compact {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 1.25rem 2.5rem;
      border-bottom: 1px solid var(--border);
      background: rgba(10, 10, 8, 0.97);
      backdrop-filter: blur(20px);
      position: sticky;
      top: 0;
      z-index: 100;
    }

    .nav-center-title {
      font-size: 0.65rem;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--gold);
      font-weight: 400;
      padding: 0.25rem 39.75rem;
      margin: 0 auto;
    }

    .nav-emblem {
      width: 44px; height: 44px; border-radius: 50%;
      background: radial-gradient(circle at 35% 35%, #2a2010, #1a1408);
      border: 1.5px solid var(--gold-dark); display: flex; align-items: center;
      justify-content: center; flex-shrink: 0; overflow: hidden;
      margin-left: auto;
    }
    .nav-emblem img { width: 26px; height: 26px; object-fit: contain; }
    .nav-emblem-fallback {
      font-family: var(--font-display); font-style: italic; font-size: 1.3rem; color: var(--gold);
    }

    .nav-gold-rule {
      height: 1px; background: linear-gradient(to right, transparent 0%, var(--gold-dark) 30%, var(--gold-dark) 70%, transparent 100%);
      opacity: 0.5;
    }

    /* ====== MAIN CONTENT ====== */
    .main {
      max-width: 480px;
      margin: 0 auto;
      padding: 2.5rem 2rem;
      display: flex;
      flex-direction: column;
      gap: 2rem;
      align-items: center;
      flex: 1;
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

    .scan-view-wrapper img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    /* Gold Corner Brackets */
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

    /* Subtle glow around the scan area */
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

    /* ====== LOADING DOTS ====== */
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
      background: #2a2a22; /* Inactive color */
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

    /* ====== RESPONSIVE ====== */
    @media (max-width: 600px) {
      .main { padding: 1.5rem 1rem; }
      .navbar-compact { padding: 0.75rem 1.25rem; }
      .status-title { font-size: 1.5rem; }
      .scan-view-wrapper { aspect-ratio: 3/4.5; }
    }
  </style>
</head>

<body>

  <!-- COMPACT NAVBAR -->
  <nav class="navbar-compact">
    <div style="width:44px;"></div> <!-- Spacer to balance centering -->
    <div class="nav-center-title">Face Scan</div>
    <div class="nav-emblem">
      <img src="assets/logo.png" alt="Arch"
        onerror="this.style.display='none'; this.parentElement.innerHTML='<span class=\'nav-emblem-fallback\'>G</span>'" />
    </div>
  </nav>

  <div class="nav-gold-rule"></div>

  <!-- MAIN CONTENT -->
  <main class="main">

    <!-- CAMERA VIEW -->
    <div class="scan-view-wrapper">
      <!-- Replace this src with actual camera feed or user photo -->
      <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Face Scan Feed" />
      
      <!-- Gold Corners -->
      <div class="scan-corner scan-corner-tl"></div>
      <div class="scan-corner scan-corner-tr"></div>
      <div class="scan-corner scan-corner-bl"></div>
      <div class="scan-corner scan-corner-br"></div>
    </div>

    <!-- STATUS TEXT -->
    <div class="status-wrapper">
      <div class="status-title">Reading your features.</div>
      <div class="status-sub">Hold still for just a moment.</div>

      <!-- LOADING DOTS -->
      <div class="loading-dots">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>
    </div>

    <!-- CANCEL ACTION -->
    <button class="cancel-link" onclick="cancelScan()">Cancel</button>

  </main>

  <script>
    function cancelScan() {
      // Redirect back to previous screen
      window.history.back();
    }
  </script>

</body>
</html>