<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Appointment Brief — Royals Arch Brow</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap"
    rel="stylesheet" />
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

    * {
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

    /* ====== BRIEF CARD ====== */
    .brief-card {
      position: relative;
      background: #161610;
      border: 1px solid var(--gold);
      border-radius: var(--radius);
      padding: 1.75rem 1.5rem;
    }

    .brief-heading {
      display: flex;
      align-items: center;
      justify-content: space-between;
      color: var(--gold);
      font-size: 0.65rem;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      margin-bottom: 1rem;
      font-weight: 500;
    }

    .field-list {
      display: grid;
      gap: 0.75rem;
    }

    .field {
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 1px solid var(--border);
      padding-bottom: 0.75rem;
    }

    .field:last-child {
      border-bottom: none;
      padding-bottom: 0;
      flex-direction: column;
      align-items: flex-start;
      gap: 0.5rem;
    }

    .field-label {
      color: var(--gold);
      font-size: 0.7rem;
      letter-spacing: 0.08em;
    }

    .field-value {
      color: var(--white);
      font-size: 0.9rem;
    }

    .field-value.note {
      color: var(--white-dim);
      font-size: 0.85rem;
    }

    /* ====== C/M BADGE ====== */
    .badge-container {
      position: absolute;
      top: -12px;
      right: 12px;
      display: flex;
      align-items: center;
    }

    .cm-badge {
      display: flex;
      align-items: center;
      gap: 4px;
      background: rgba(30, 30, 30, 0.8);
      backdrop-filter: blur(4px);
      padding: 4px 6px;
      border-radius: 20px;
      border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .cm-badge span {
      width: 28px;
      height: 28px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 10px;
      font-weight: 700;
      color: white;
    }

    .c-badge {
      background: #e86c3e;
    }

    .m-badge {
      background: #5e7da6;
    }

    /* ====== BUTTONS ====== */
    .actions {
      display: grid;
      gap: 0.75rem;
    }

    .btn-primary {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      padding: 0.85rem 1.2rem;
      border-radius: 999px;
      border: none;
      background: #c9a84c;
      color: var(--white);
      font-size: 0.75rem;
      font-weight: 700;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      text-decoration: none;
      transition: all var(--transition);
    }

    .btn-primary:hover {
      border-color: var(--gold);
      color: var(--black);
      transform: translateY(-2px);
    }

    .btn-secondary {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      padding: 0.85rem 1.2rem;
      border-radius: 999px;
      border: 1px solid var(--border);
      background: transparent;
      color: var(--white);
      font-size: 0.75rem;
      font-weight: 600;
      letter-spacing: 0.08em;
      text-decoration: none;
      transition: all var(--transition);
    }

    .btn-secondary:hover {
      border-color: var(--gold);
      color: var(--gold);
    }

    .row-actions {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 0.75rem;
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

      .brief-card {
        padding: 1.25rem;
      }

      .field {
        flex-direction: column;
        align-items: flex-start;
        gap: 0.25rem;
      }

      .row-actions {
        grid-template-columns: 1fr;
      }

      .back-btn {
        width: 38px;
        height: 38px;
      }

      .page-logo {
        width: 38px;
        height: 38px;
      }
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
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
          stroke-linecap="round" stroke-linejoin="round">
          <line x1="19" y1="12" x2="5" y2="12"></line>
          <polyline points="12 19 5 12 12 5"></polyline>
        </svg>
      </a>
      <div class="page-title-center">Appointment Brief</div>
    </div>

    <!-- CONTENT HEADER -->
    <div class="fade-2">
      <div class="page-label">Your Brief</div>
      <div class="page-title">Share this with your brow artist before you arrive.</div>
    </div>

    <!-- BRIEF CARD -->
    <div class="brief-card fade-3">
      <!-- <div class="badge-container">
        <div class="cm-badge">
          <span class="c-badge">C</span>
          <span class="m-badge">M</span>
        </div>
      </div> -->

      <div class="brief-heading">ARCH · BROW BRIEF</div>

      <div class="field-list">
        <div class="field">
          <span class="field-label">Shape</span>
          <span class="field-value">Soft Arch</span>
        </div>
        <div class="field">
          <span class="field-label">Colour</span>
          <span class="field-value">Ash Brown</span>
        </div>
        <div class="field">
          <span class="field-label">Intensity</span>
          <span class="field-value">Considered</span>
        </div>
        <div class="field">
          <span class="field-label">Face shape</span>
          <span class="field-value">Oval</span>
        </div>
        <div class="field">
          <span class="field-label">Notes for artist</span>
          <span class="field-value note">Tap to add notes...</span>
        </div>
      </div>
    </div>

    <!-- ACTIONS -->
    <div class="actions fade-4">
      <a class="btn-primary" href="looks-not-saved.php">Save as image</a>
      <div class="row-actions">
        <a class="btn-secondary" href="#">Via message</a>
        <a class="btn-secondary" href="#">Via email</a>
      </div>
    </div>

  </main>

</body>

</html>