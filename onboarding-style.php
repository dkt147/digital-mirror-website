<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Style — Arch</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    :root {
      --gold: #c9a84c;
      --gold-light: #d4b96a;
      --gold-dark: #8a6f2e;
      --gold-muted: rgba(201, 168, 76, 0.08);
      --black: #0a0a0a;
      --btn-dark: #232323;
      --white: #f5f0e8;
      --white-dim: rgba(245, 240, 232, 0.6);
      --white-faint: rgba(245, 240, 232, 0.15);
      --border: rgba(201, 168, 76, 0.2);
      --border-hover: rgba(201, 168, 76, 0.4);
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

    .style-card {
      width: 100%;
      max-width: 620px;
      background: rgba(255, 255, 255, 0.015);
      border: 1px solid var(--border);
      border-radius: 48px;
      padding: 44px 44px 40px;
      backdrop-filter: blur(4px);
      box-shadow: 0 24px 80px rgba(0, 0, 0, 0.8);
    }

    /* --- TOP ROW: BACK + LOGO --- */
    .top-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 0.75rem;
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
    }

    .back-btn-circle:hover {
      background: var(--gold-muted);
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
    }

    .logo-wrap img {
      width: 48px;
      height: 48px;
      object-fit: contain;
    }

    /* --- STEP INDICATOR --- */
    .step-indicator {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      margin-bottom: 0.75rem;
    }

    .step-text {
      font-size: 0.75rem;
      letter-spacing: 0.08em;
      color: var(--gold);
      text-transform: uppercase;
      font-weight: 400;
    }

    .step-bar {
      flex: 1;
      height: 2px;
      background: var(--border);
      border-radius: 2px;
      position: relative;
    }

    .step-bar-fill {
      width: 100%;
      height: 100%;
      background: var(--gold);
      border-radius: 2px;
    }

    /* --- HEADING --- */
    .heading {
      font-family: var(--font-display);
      font-style: italic;
      font-weight: 400;
      font-size: 2.8rem;
      color: var(--white);
      line-height: 1.1;
      margin-top: 0.25rem;
      margin-bottom: 1.25rem;
    }

    /* --- GOLD DIVIDER --- */
    .gold-divider {
      width: 80px;
      height: 1px;
      background: var(--gold);
      margin: 0 auto 2rem auto;
    }

    /* --- STYLE OPTIONS --- */
    .style-options {
      display: flex;
      flex-direction: column;
      gap: 1rem;
      margin-bottom: 2rem;
    }

    .style-option {
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      padding: 1.25rem 1.5rem;
      border-radius: var(--radius);
      border: 1px solid var(--border);
      background: var(--black);
      cursor: pointer;
      transition: all var(--transition);
      text-align: left;
      width: 100%;
      font-family: var(--font-body);
    }

    .style-option:hover {
      border-color: var(--border-hover);
    }

    /* --- SELECTED STATE (GOLD CARD) --- */
    .style-option.selected {
      border-color: var(--gold);
      background: rgba(201, 168, 76, 0.08);
    }

    .style-option-title {
      font-family: var(--font-display);
      font-size: 1.3rem;
      font-weight: 400;
      margin-bottom: 0.3rem;
      color: var(--white);
    }

    .style-option-desc {
      font-size: 0.8rem;
      color: var(--white-dim);
      line-height: 1.5;
      max-width: 90%;
    }

    .style-option.selected .style-option-desc {
      color: var(--white-dim);
    }

    /* --- RADIO BUTTON --- */
    .style-option-radio {
      width: 24px;
      height: 24px;
      border-radius: 50%;
      border: 1.5px solid var(--border);
      flex-shrink: 0;
      margin-top: 0.1rem;
      transition: all var(--transition);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .style-option.selected .style-option-radio {
      border-color: var(--gold);
      background: var(--gold);
    }

    .style-option.selected .style-option-radio::after {
      content: '';
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: var(--black);
    }

    /* --- BEGIN BUTTON --- */
    .btn-begin {
      display: block;
      width: 100%;
      padding: 1rem;
      border-radius: var(--radius-pill);
      border: 1px solid var(--border);
      background: var(--btn-dark);
      color: var(--white);
      font-size: 0.75rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      font-weight: 700;
      transition: all var(--transition);
      cursor: pointer;
      min-height: 56px;
    }

    .btn-begin:hover {
      border-color: var(--gold);
      color: var(--gold-light);
      background: rgba(35, 35, 35, 0.9);
      transform: translateY(-2px);
      box-shadow: 0 8px 30px rgba(201, 168, 76, 0.15);
    }

    /* --- SKIP LINK --- */
    .skip-link {
      display: block;
      text-align: center;
      margin-top: 1.25rem;
      font-size: 0.8rem;
      color: var(--gold);
      text-decoration: none;
      cursor: pointer;
      transition: opacity var(--transition);
      font-weight: 300;
    }

    .skip-link:hover {
      opacity: 0.7;
    }

    /* --- RESPONSIVE --- */
    @media (max-width: 700px) {
      .style-card { padding: 32px 28px; border-radius: 36px; }
      .heading { font-size: 2.2rem; }
      .style-option-title { font-size: 1.1rem; }
      .logo-wrap img { width: 40px; height: 40px; }
      .back-btn-circle { width: 40px; height: 40px; }
    }

    @media (max-width: 480px) {
      .style-card { padding: 24px 16px; border-radius: 28px; }
      .heading { font-size: 1.8rem; }
      .style-option-title { font-size: 1rem; }
      .style-option { padding: 1rem 1rem; }
    }
  </style>
</head>
<body>

  <div class="style-card">

    <!-- TOP ROW -->
    <div class="top-row">
      <button class="back-btn-circle" onclick="goBack('onboarding-profile.php')">
        <svg viewBox="0 0 24 24">
          <path d="M19 12H5M12 19l-7-7 7-7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>
      <div class="logo-wrap">
        <img src="assets/logo.png" alt="Arch Logo" />
      </div>
    </div>

    <!-- STEP INDICATOR -->
    <div class="step-indicator">
      <span class="step-text">Step 2 of 2</span>
      <div class="step-bar">
        <div class="step-bar-fill"></div>
      </div>
    </div>

    <!-- HEADING -->
    <h1 class="heading">Where would you<br />like to begin?</h1>

    <!-- GOLD DIVIDER -->
    <div class="gold-divider"></div>

    <!-- STYLE OPTIONS -->
    <div class="style-options">
      
      <button class="style-option selected" data-style="refined" onclick="selectStyle('refined')">
        <div>
          <div class="style-option-title">Refined & natural</div>
          <div class="style-option-desc">Soft definition that works with your features, not over them.</div>
        </div>
        <div class="style-option-radio"></div>
      </button>

      <button class="style-option" data-style="precise" onclick="selectStyle('precise')">
        <div>
          <div class="style-option-title">Precise & considered</div>
          <div class="style-option-desc">A brow with intention. Structured, deliberate, assured.</div>
        </div>
        <div class="style-option-radio"></div>
      </button>

      <button class="style-option" data-style="discover" onclick="selectStyle('discover')">
        <div>
          <div class="style-option-title">Show me what suits me</div>
          <div class="style-option-desc">A brief discovery to find the shape that's meant for you.</div>
        </div>
        <div class="style-option-radio"></div>
      </button>

    </div>

    <!-- BEGIN BUTTON -->
    <button class="btn-begin" onclick="completeOnboarding()">Begin</button>

    <!-- SKIP LINK -->
    <a class="skip-link" onclick="goBack('onboarding-complete.php')">I'll add this later</a>

  </div>

  <!-- ===== JAVASCRIPT ===== -->
  <script>
    function goBack(target) {
      window.location.href = target;
    }

    function selectStyle(style) {
      localStorage.setItem('archStyle', style);
      document.querySelectorAll('.style-option').forEach(card => {
        card.classList.toggle('selected', card.dataset.style === style);
      });
    }

    function completeOnboarding() {
      const selected = document.querySelector('.style-option.selected');
      if (!selected) {
        alert('Please select a style direction.');
        return;
      }
      window.location.href = 'onboarding-complete.php';
    }

    document.addEventListener('DOMContentLoaded', function() {
      const savedStyle = localStorage.getItem('archStyle');
      if (savedStyle) {
        document.querySelectorAll('.style-option').forEach(card => {
          card.classList.toggle('selected', card.dataset.style === savedStyle);
        });
      }
    });
  </script>

</body>
</html>