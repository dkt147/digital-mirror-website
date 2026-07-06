<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Looks — Royals Arch Brow</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap"
    rel="stylesheet" />
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

    /* ====== MAIN LAYOUT ====== */
    .main {
      max-width: 100%;
      margin: 0 auto;
      padding: 0 1.5rem 3rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
      flex: 1;
      width: 100%;
    }

    /* ========================================================== */
    /* ====== MY LOOKS CONTENT ====== */
    /* ========================================================== */
    .looks-container {
      max-width: 480px;
      width: 100%;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 0.5rem 0 2rem;
    }

    .page-headline {
      font-family: var(--font-display);
      font-style: italic;
      font-size: 2.2rem;
      font-weight: 400;
      color: var(--white);
      width: 100%;
      text-align: left;
      margin-bottom: 2rem;
      align-self: flex-start;
    }

    /* Divider */
    .gold-divider {
      width: 100%;
      max-width: 260px;
      height: 1px;
      background: linear-gradient(90deg, transparent, var(--gold), transparent);
      margin: 0 auto 2.5rem auto;
      opacity: 0.5;
    }

    /* Empty State Icon */
    .empty-icon {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      border: 1px solid var(--gold);
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1.5rem auto;
      background: rgba(201, 168, 76, 0.05);
    }
    .empty-icon::after {
      content: '\2713';
      color: var(--gold);
      font-size: 1.5rem;
      font-weight: 700;
    }

    /* Empty Text */
    .empty-headline {
      font-family: var(--font-display);
      font-style: italic;
      font-size: clamp(1.8rem, 4vw, 2.4rem);
      line-height: 1.05;
      color: var(--white);
      text-align: center;
      margin-bottom: 1rem;
    }

    .empty-subtitle {
      color: var(--white-dim);
      font-size: 0.95rem;
      text-align: center;
      line-height: 1.6;
      max-width: 400px;
      margin: 0 auto 3rem auto;
      padding: 0 10px;
    }

    /* Call to Action Button */
    .btn-primary {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 100%;
      padding: 1rem 1.5rem;
      border-radius: 50px;
      background: #c9a84c;
      color: var(--white);
      font-size: 0.9rem;
      letter-spacing: 0.05em;
      font-weight: 600;
      text-decoration: none;
      transition: all var(--transition);
      cursor: pointer;
      border: none;
      font-family: var(--font-body);
    }

    .btn-primary:hover {
      color: var(--black);
      transform: translateY(-2px);
    }

    /* ====== RESPONSIVE ====== */
    @media (max-width: 900px) {
      .navbar {
        padding: 0.875rem 1.25rem;
      }
      .navbar-nav {
        display: none;
      }
      .main {
        padding: 0 1.25rem 2rem;
      }
      .page-headline {
        font-size: 1.8rem;
      }
      .gold-divider {
        max-width: 200px;
      }
      .empty-headline {
        font-size: 1.6rem;
      }
      .btn-primary {
        font-size: 0.8rem;
        padding: 0.9rem 1.5rem;
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
      <div class="page-title-center">My Looks</div>
    </div>

    <!-- CONTENT -->
    <div class="looks-container">
      
      <!-- Headline -->
      <h1 class="page-headline">My looks</h1>

      <!-- Divider line -->
      <div class="gold-divider"></div> 

      <!-- Icon -->
      <div class="empty-icon"></div>

      <!-- Empty State Text -->
      <h2 class="empty-headline">Nothing saved yet.</h2>
      <p class="empty-subtitle">Every look you save will live here, ready for your next appointment.</p>

      <!-- Call to Action -->
      <button class="btn-primary" onclick="window.location.href='appointments.php'">
        Begin a session
      </button>

    </div>  

  </main>

</body>
</html>