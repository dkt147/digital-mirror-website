<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Privacy — Arch</title>
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
      --gold-muted: rgba(201, 168, 76, 0.10);
      --gold-bg-hover: rgba(201, 168, 76, 0.08);
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
    }

    .privacy-card {
      width: 100%;
      max-width: 600px;
      background: rgba(255, 255, 255, 0.01);
      border: 1px solid var(--border);
      border-radius: 48px;
      padding: 48px 48px 40px;
      backdrop-filter: blur(4px);
      box-shadow: 0 24px 80px rgba(0, 0, 0, 0.8);
      text-align: center;
    }

    /* --- LOGO --- */
    .logo-wrap {
      text-align: center;
      margin-bottom: 1.5rem;
    }

    .logo-wrap img {
      width: 56px;
      height: 56px;
      object-fit: contain;
    }

    /* --- ICON (hexagon with !) - GOLDEN --- */
    .icon-wrap {
      display: flex;
      justify-content: center;
      margin-bottom: 1.25rem;
    }

    .icon-wrap svg {
      width: 56px;
      height: 56px;
      stroke: var(--gold);
      stroke-width: 1.5;
      fill: none;
    }

    .icon-wrap svg .exclamation {
      stroke: var(--gold);
      stroke-width: 2.5;
    }

    .icon-wrap svg .dot {
      fill: var(--gold);
      stroke: none;
    }

    /* --- HEADING --- */
    .heading {
      font-family: var(--font-display);
      font-style: italic;
      font-weight: 400;
      font-size: 2.4rem;
      color: var(--white);
      line-height: 1.15;
      margin-bottom: 1.5rem;
    }

    /* --- GOLD DIVIDER LINE (exactly as screenshot) --- */
    .gold-divider {
      width: 80px;
      height: 1px;
      background: var(--gold);
      margin: 0 auto 2.5rem auto;
    }

    /* --- BULLET LIST --- */
    .privacy-list {
      list-style: none;
      text-align: left;
      max-width: 300px;
      margin: 0 auto 2.5rem;
      display: flex;
      flex-direction: column;
      gap: 0.5rem;
    }

    .privacy-list li {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      font-size: 0.9rem;
      color: var(--white);
      font-weight: 300;
    }

    .privacy-bullet {
      width: 5px;
      height: 5px;
      border-radius: 50%;
      background: var(--gold);
      flex-shrink: 0;
    }

    /* --- GOLD TEXT --- */
    .gold-text {
      color: var(--gold);
      font-size: 0.95rem;
      line-height: 1.6;
      max-width: 400px;
      margin: 0 auto;
    }

    .gold-text.italic {
      font-style: italic;
      color: var(--white-dim);
      margin-top: 0.25rem;
    }

    .gold-note {
      color: var(--gold);
      font-size: 0.85rem;
      margin-top: 1.5rem;
      margin-bottom: 1.5rem;
    }

    /* --- BUTTON --- */
    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      padding: 1rem 1.75rem;
      border-radius: var(--radius-pill);
      font-size: 0.7rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      font-weight: 600;
      transition: all var(--transition);
      width: 100%;
      min-height: 56px;
      border: 1px solid var(--border);
    }

    .btn-dark {
      background: var(--btn-dark);
      color: var(--white);
    }

    .btn-dark:hover {
      border-color: var(--gold);
      color: var(--gold-light);
      background: rgba(35, 35, 35, 0.9);
      transform: translateY(-2px);
      box-shadow: 0 8px 30px rgba(201, 168, 76, 0.15);
    }

    /* --- PRIVACY TERMS LINK --- */
    .terms-link {
      display: inline-block;
      margin-top: 1rem;
      font-size: 0.75rem;
      color: var(--gold);
      text-decoration: none;
      transition: opacity var(--transition);
      cursor: pointer;
    }

    .terms-link:hover {
      opacity: 0.7;
    }

    .terms-link svg {
      width: 14px;
      height: 14px;
      vertical-align: middle;
      margin-left: 4px;
      fill: none;
      stroke: currentColor;
      stroke-width: 1.8;
    }

    /* --- FOOTER --- */
    .bottom-note {
      text-align: center;
      font-size: 0.7rem;
      color: var(--gold);
      margin-top: 2.5rem;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 700px) {
      .privacy-card {
        padding: 32px 28px;
        border-radius: 36px;
      }
      .heading {
        font-size: 2rem;
      }
      .privacy-list {
        max-width: 100%;
      }
    }

    @media (max-width: 480px) {
      .privacy-card {
        padding: 24px 16px;
        border-radius: 28px;
      }
      .heading {
        font-size: 1.6rem;
      }
      .icon-wrap svg {
        width: 44px;
        height: 44px;
      }
      .logo-wrap img {
        width: 48px;
        height: 48px;
      }
    }
  </style>
</head>
<body>

  <div class="privacy-card">

    <!-- Logo -->
    <div class="logo-wrap">
      <img src="assets/logo.png" alt="Arch" />
    </div>

    <!-- Golden Hexagon Icon with ! -->
    <div class="icon-wrap">
      <svg viewBox="0 0 64 64">
        <!-- Hexagon outline -->
        <polygon points="32,4 58,18 58,46 32,60 6,46 6,18" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
        <!-- Exclamation mark line -->
        <line x1="32" y1="22" x2="32" y2="36" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" />
        <!-- Dot -->
        <circle cx="32" cy="46" r="3" fill="currentColor" stroke="none" />
      </svg>
    </div>

    <!-- Heading -->
    <h1 class="heading">What this app sees<br />stays with you.</h1>

    <!-- Gold Divider Line -->
    <div class="gold-divider"></div>

    <!-- Bullet Points -->
    <ul class="privacy-list">
      <li><div class="privacy-bullet"></div><span>Your face.</span></li>
      <li><div class="privacy-bullet"></div><span>Your brow profile.</span></li>
      <li><div class="privacy-bullet"></div><span>Your looks.</span></li>
    </ul>

    <!-- Gold text (regular + italic) -->
    <div class="gold-text">
      None of it is shared, sold, or held<br />beyond your use of it.
    </div>
    <div class="gold-text italic">
      You may delete your profile at any time.
    </div>

    <!-- Gold note above button -->
    <div class="gold-note">This is the only place we will say it.</div>

    <!-- Dark Button -->
    <button class="btn btn-dark" onclick="acceptPrivacy()">Understood. Continue.</button>

    <!-- Full privacy terms link -->
    <a href="#" class="terms-link" onclick="showToast('Full privacy terms coming soon', 'info')">
      Read our full privacy terms
      <svg viewBox="0 0 24 24">
        <line x1="5" y1="12" x2="19" y2="12" stroke="currentColor" stroke-width="1.8" />
        <polyline points="12 5 19 12 12 19" stroke="currentColor" stroke-width="1.8" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </a>

    <!-- Footer -->
    <div class="bottom-note">Your data. Yours alone.</div>

  </div>

  <!-- ===== JAVASCRIPT ===== -->
  <script>
    function goBack(target) {
      window.location.href = target;
    }

    function showToast(msg, type) {
      alert(msg); // simple fallback
    }

    function acceptPrivacy() {
      window.location.href = 'onboarding-profile.php';
    }
  </script>

</body>
</html>