<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Complete — Arch</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }

    :root {
      --gold: #c9a84c;
      --gold-light: #d4b96a;
      --gold-dark: #8a6f2e;
      --black: #0a0a0a;
      --btn-dark: #232323;
      --white: #f5f0e8;
      --white-dim: rgba(245, 240, 232, 0.6);
      --white-faint: rgba(245, 240, 232, 0.15);
      --border: rgba(201, 168, 76, 0.2);
      --radius: 24px;
      --radius-pill: 50px;
      --transition: 0.25s ease;
      --font-display: 'Cormorant Garamond', serif;
      --font-body: 'Montserrat', sans-serif;
    }

    body {
      background: var(--black);
      color: var(--white);
      font-family: var(--font-body);
      font-weight: 300;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 40px 20px;
      background-image: radial-gradient(ellipse at 50% 20%, rgba(201, 168, 76, 0.03) 0%, transparent 70%);
    }

    .complete-card {
      width: 100%;
      max-width: 600px;
      background: rgba(255, 255, 255, 0.015);
      border: 1px solid var(--border);
      border-radius: 48px;
      padding: 40px 44px 36px;
      backdrop-filter: blur(4px);
      box-shadow: 0 24px 80px rgba(0, 0, 0, 0.8);
    }

    /* --- TOP ROW: BACK + LOGO --- */
    .top-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 0.25rem;
    }

    .back-btn-circle {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 48px;
      height: 48px;
      border-radius: 50%;
      border: 1px solid var(--gold);
      background: transparent;
      color: var(--gold);
      cursor: pointer;
      transition: all var(--transition);
      flex-shrink: 0;
    }

    .back-btn-circle:hover {
      background: rgba(201, 168, 76, 0.1);
      border-color: var(--gold-light);
      transform: scale(1.02);
    }

    .back-btn-circle svg {
      width: 22px;
      height: 22px;
      stroke: currentColor;
      stroke-width: 1.8;
      fill: none;
    }

    .logo-wrap {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .logo-wrap img {
      width: 48px;
      height: 48px;
      object-fit: contain;
      display: block;
    }

    /* --- COMPLETE LABEL --- */
    .step-label {
      text-align: center;
      font-size: 0.65rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: var(--gold);
      font-weight: 400;
      margin-top: 20px;
      margin-bottom: 10px;
    }

    /* --- ILLUSTRATION AREA (UPDATED) --- */
    .illustration-area {
      margin: 0 auto 20px;
      background: var(--btn-dark);
      border-radius: 999px;
      padding: 20px 20px;
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      max-width: 320px;
      position: relative;
    }

    .illustration-svg {
      width: 100%;
      max-width: 180px;
      height: auto;
    }

    .arch-line {
      fill: none;
      stroke: var(--gold);
      stroke-width: 1.5;
      stroke-linecap: round;
      opacity: 0.7;
    }

    /* Badge Styling */
    .badge-container {
      fill: rgba(0,0,0,0.4);
      stroke: var(--gold);
      stroke-width: 1;
    }
    
    .badge-c {
      fill: #f58c33;
    }
    
    .badge-m {
      fill: #7b7b7b;
    }

    .badge-text-c {
      fill: #fff;
      font-family: var(--font-body);
      font-size: 12px;
      font-weight: 700;
      text-anchor: middle;
      dominant-baseline: central;
    }

    .badge-text-m {
      fill: #fff;
      font-family: var(--font-body);
      font-size: 12px;
      font-weight: 700;
      text-anchor: middle;
      dominant-baseline: central;
    }

    .illustration-label {
      text-align: center;
      font-size: 0.6rem;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--white-dim);
      margin-top: -2px;
      margin-bottom: 12px;
    }

    /* --- GOLD DIVIDER --- */
    .gold-divider {
      width: 80px;
      height: 1px;
      background: var(--gold);
      margin: 18px auto 24px;
    }

    /* --- MAIN CONTENT --- */
    .profile-status {
      text-align: center;
      font-size: 0.65rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 0.25rem;
      font-weight: 400;
    }

    .main-heading {
      font-family: var(--font-display);
      font-style: italic;
      font-weight: 400;
      font-size: 2.4rem;
      text-align: center;
      color: var(--white);
      line-height: 1.1;
      margin-bottom: 2rem;
    }

    /* --- PROFILE TAGS --- */
    .tag-list {
      display: flex;
      flex-direction: column;
      gap: 0.5rem;
      margin-bottom: 0.5rem;
    }

    .tag-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0.6rem 0;
      border-bottom: 1px solid var(--border);
    }

    .tag-key {
      font-size: 0.6rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: var(--gold);
      font-weight: 500;
    }

    .tag-value-wrap {
      display: flex;
      align-items: center;
      gap: 0.75rem;
    }

    .tag-value {
      font-size: 0.8rem;
      color: var(--white);
      font-weight: 400;
    }

    .tone-indicator {
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background: #b67a3f;
      flex-shrink: 0;
    }

    /* --- EDIT LINK --- */
    .edit-link {
      display: block;
      text-align: center;
      font-size: 0.75rem;
      color: var(--white);
      text-decoration: none;
      cursor: pointer;
      margin: 1.5rem 0 1.5rem;
      transition: opacity var(--transition);
    }

    .edit-link:hover {
      opacity: 0.7;
    }

    /* --- ENTER ARCH BUTTON --- */
    .btn-enter {
      display: block;
      width: 100%;
      padding: 1.1rem;
      border-radius: var(--radius-pill);
      border: none; /* Changed to none for flat look like screenshot */
      background: var(--btn-dark);
      color: var(--white);
      font-size: 0.7rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      font-weight: 600;
      transition: all var(--transition);
      cursor: pointer;
    }

    .btn-enter:hover {
      background: #2c2c2c;
      transform: translateY(-2px);
    }

    /* --- FOOTER TEXT --- */
    .footer-note {
      text-align: center;
      font-size: 0.6rem;
      color: var(--gold);
      margin-top: 1.25rem;
      font-weight: 300;
    }

    /* --- EXACT LINE FROM SCREENSHOT --- */
    .split-line-wrapper {
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 100%;
      margin: 24px 0 10px;
    }

    .line-with-gap {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 100%;
    }

    .line-part {
      height: 1px;
      background-color: var(--gold);
      flex-grow: 1;
    }

    .line-gap {
      width: 10px; 
      height: 1px;
    }

    .text-below-gap {
      color: var(--gold);
      font-size: 0.7rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      margin-top: 6px;
      font-weight: 400;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 700px) {
      .complete-card { padding: 32px 24px; border-radius: 36px; }
      .main-heading { font-size: 2rem; }
      .logo-wrap img { width: 40px; height: 40px; }
      .back-btn-circle { width: 40px; height: 40px; }
      .illustration-area { max-width: 260px; padding: 15px 14px; }
    }

    @media (max-width: 480px) {
      .complete-card { padding: 24px 16px; border-radius: 28px; }
      .main-heading { font-size: 1.6rem; }
      .tag-row { flex-direction: row; align-items: center; gap: 0.25rem; }
      .illustration-area { max-width: 220px; }
    }
  </style>
</head>
<body>

  <div class="complete-card">

    <!-- TOP ROW -->
    <div class="top-row">
      <button class="back-btn-circle" onclick="goBack('onboarding-style.php')">
        <svg viewBox="0 0 24 24">
          <path d="M19 12H5M12 19l-7-7 7-7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>
      <div class="logo-wrap">
        <img src="assets/logo.png" alt="Arch Logo" />
      </div>
    </div>

    <!-- EXACT LINE FROM SCREENSHOT -->
    <div class="split-line-wrapper">
      <div class="line-with-gap">
        <div class="line-part"></div>
        <div class="line-gap"></div>
        <div class="line-part"></div>
      </div>
      <div class="text-below-gap">Complete</div>
    </div>

    <!-- BROW ARCH ILLUSTRATION (Updated SVG) -->
    <div class="illustration-area">
     <p>Brow Arch Illustration</p>
    </div>

    <!-- GOLD DIVIDER -->
    <div class="gold-divider"></div>

    <!-- PROFILE STATUS & HEADING -->
    <div class="profile-status">Your Profile is Set.</div>
    <h1 class="main-heading">From here,<br />the work is yours.</h1>

    <!-- SUMMARY TAGS -->
    <div class="tag-list">
      <!-- Skin Tone -->
      <div class="tag-row">
        <span class="tag-key">Skin Tone</span>
        <div class="tag-value-wrap">
          <div class="tone-indicator" id="tone-indicator-color"></div>
          <span class="tag-value" id="complete-skin-tone">Medium Warm</span>
        </div>
      </div>

      <!-- Brow Goal -->
      <div class="tag-row">
        <span class="tag-key">Brow Goal</span>
        <span class="tag-value" id="complete-brow-goal">Colour</span>
      </div>

      <!-- Style Direction -->
      <div class="tag-row">
        <span class="tag-key">Style Direction</span>
        <span class="tag-value" id="complete-style">Refined & Natural</span>
      </div>
    </div>

    <!-- EDIT LINK -->
    <a href="onboarding-style.php" class="edit-link">Edit Your Selections →</a>

    <!-- ENTER BUTTON -->
    <button class="btn-enter" onclick="enterArch()">Enter Arch</button>

    <!-- FOOTER -->
    <div class="footer-note">Everything here can be updated as you go.</div>

  </div>

  <!-- ===== JAVASCRIPT ===== -->
  <script>
    function goBack(target) {
      window.location.href = target;
    }

    function enterArch() {
      window.location.href = 'dashboard.php';
    }

    document.addEventListener('DOMContentLoaded', function() {
      // Update Tone Indicator and Text
      const tone = localStorage.getItem('archSkinTone') || 'medium-warm';
      const toneMap = {
        'fair': { label: 'Fair', color: '#f5deb3' },
        'light': { label: 'Light', color: '#d4a574' },
        'medium': { label: 'Medium', color: '#c07845' },
        'medium-warm': { label: 'Medium Warm', color: '#b67a3f' },
        'deep': { label: 'Deep', color: '#6b3a1f' },
        'rich': { label: 'Rich', color: '#3d1c0a' }
      };
      const toneData = toneMap[tone] || toneMap['medium-warm'];
      
      const toneEl = document.getElementById('complete-skin-tone');
      const indicator = document.getElementById('tone-indicator-color');
      if (toneEl) toneEl.textContent = toneData.label;
      if (indicator) indicator.style.background = toneData.color;

      // Update Brow Goal
      const goal = localStorage.getItem('archBrowGoal') || 'colour';
      const goalMap = { 'shape': 'Shape', 'colour': 'Colour', 'both': 'Both' };
      const goalEl = document.getElementById('complete-brow-goal');
      if (goalEl) goalEl.textContent = goalMap[goal] || 'Colour';

      // Update Style Direction
      const style = localStorage.getItem('archStyle') || 'refined';
      const styleMap = { 'refined': 'Refined & Natural', 'precise': 'Precise & Considered', 'discover': 'Show Me What Suits Me' };
      const styleEl = document.getElementById('complete-style');
      if (styleEl) styleEl.textContent = styleMap[style] || 'Refined & Natural';
    });
  </script>

</body>
</html>