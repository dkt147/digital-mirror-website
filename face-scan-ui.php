<?php
// face-scan.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Face Scan — Royals Arch Brow</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
  <style>
    /* ————— RESET & VARIABLES ————— */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    :root {
      --black: #0a0a08;
      --gold: #c9a84c;
      --gold-light: #d4b96a;
      --gold-dark: #8a6f2e;
      --white: #f5f0e8;
      --white-dim: rgba(245, 240, 232, 0.55);
      --white-faint: rgba(245, 240, 232, 0.15);
      --border: rgba(201, 168, 76, 0.18);
      --font-display: 'Cormorant Garamond', serif;
      --font-body: 'Montserrat', sans-serif;
      --transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    body {
      background: var(--black);
      color: var(--white);
      font-family: var(--font-body);
      font-weight: 300;
      min-height: 100vh;
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

    /* ————— NAVBAR (CSS for PHP Include) ————— */
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

    /* ————— FACE SCAN UI ————— */
    .scan-wrapper {
      max-width: 100%;
      margin: 0 auto;
      padding: 1.5rem 1.25rem 2.5rem;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 1rem;
    }

    /* Top bar (inside scan wrapper) */
    .scan-topbar {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;  
      margin-bottom: 1rem;
      position: relative;      
    }

    .scan-back-btn {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      border: 1.5px solid var(--gold);
      color: var(--gold);
      display: flex;
      align-items: center;
      justify-content: center;
      background: transparent;
      transition: background var(--transition);
      position: absolute;  
      left: 20px;             
    }

    .scan-back-btn:hover {
      background: rgba(201, 168, 76, 0.1);
    }

    .scan-title {
      font-size: 0.75rem;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--gold);
      font-weight: 500;
    }

    .scan-logo {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      border: 1.5px solid var(--gold);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .scan-logo span {
      font-family: var(--font-display);
      font-size: 1.3rem;
      font-weight: 700;
      font-style: italic;
      color: var(--gold);
    }

    /* Camera Icon */
    .camera-container {
      margin: 1.5rem 0 0.5rem;
    }

    .camera-svg {
      width: 130px;
      height: 95px;
      stroke: var(--gold);
      fill: none;
      stroke-width: 1.8;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    /* Text content */
    .scan-heading {
      font-family: var(--font-display);
      font-style: italic;
      font-size: 2rem;
      font-weight: 400;
      color: var(--white);
      line-height: 1.1;
      width: 100%;
      margin-bottom: 0.1rem;
    }

    .scan-desc {
      font-size: 0.9rem;
      color: var(--white-dim);
      line-height: 1.5;
      width: 100%;
      margin-bottom: 0.25rem;
    }

    /* Bullet points */
    .bullet-list {
      width: 100%;
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 0.5rem;
      margin-bottom: 1rem;
    }

    .bullet-list li {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 0.85rem;
      color: var(--white-dim);
      line-height: 1.4;
    }

    .bullet-dot {
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background: var(--gold);
      flex-shrink: 0;
    }

    /* Privacy note */
    .privacy-note {
      width: 100%;
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 0.85rem;
      color: var(--gold);
      margin-bottom: 1.5rem;
    }

    .privacy-note svg {
      width: 20px;
      height: 20px;
      stroke: var(--gold);
      fill: none;
      stroke-width: 2;
    }

    /* Buttons */
    .btn-scan-gold {
      width: 100%;
      padding: 1rem;
      border-radius: 999px;
      background: var(--gold);
      color: var(--white);
      font-size: 0.75rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      font-weight: 600;
      border: none;
      cursor: pointer;
      transition: background var(--transition);
      font-family: var(--font-body);
    }

    .btn-scan-gold:hover {
      border-color: var(--gold);
      color: var(--black);
      transform: translateY(-2px);
    }

    .scan-link-gold {
      color: var(--white);
      font-size: 0.85rem;
      font-weight: 400;
      cursor: pointer;
      transition: color var(--transition);
      margin-top: 0.25rem;
    }

    .scan-link-gold:hover {
      text-decoration: underline;
      color: var(--gold-light);
    }

    @media (max-width: 900px) {
      .navbar {
        padding: 0.875rem 1.25rem;
      }

      .navbar-nav {
        display: none;
      }

      .scan-heading {
        font-size: 1.7rem;
      }

      .camera-svg {
        width: 100px;
        height: 75px;
      }
    }
  </style>
</head>

<body>

  <!-- ===== NAVBAR (PHP INCLUDE) ===== -->
  <?php include 'includes/navbar.php'; ?>

  <!-- Gold Rule -->
  <div class="nav-gold-rule"></div>

  <!-- ===== FACE SCAN MAIN ===== -->
  <main class="scan-wrapper">

    <!-- Top Bar (Back + Title + Logo) -->
    <div class="scan-topbar">
      <a href="javascript:history.back()" class="scan-back-btn" aria-label="Go back">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
          stroke-linecap="round" stroke-linejoin="round">
          <line x1="19" y1="12" x2="5" y2="12"></line>
          <polyline points="12 19 5 12 12 5"></polyline>
        </svg>
      </a>
      <span class="scan-title">Face Scan</span>
    </div>

    <!-- Camera Icon -->
    <div class="camera-container">
      <svg class="camera-svg" viewBox="0 0 120 90">
        <!-- Camera body -->
        <rect x="10" y="20" width="100" height="70" rx="10" />
        <!-- Lens circle -->
        <circle cx="60" cy="55" r="22" />
        <!-- Lens inner ring -->
        <circle cx="60" cy="55" r="14" />
        <!-- Small lens / flash -->
        <rect x="92" y="28" width="12" height="10" rx="3" />
        <!-- Viewfinder -->
        <rect x="48" y="8" width="24" height="12" rx="2" />
        <!-- Button on top -->
        <circle cx="70" cy="12" r="3" fill="currentColor" stroke="none" />
      </svg>
    </div>

    <!-- Main Heading -->
    <div class="scan-heading">A photograph of your<br>brows.</div>

    <!-- Description -->
    <div class="scan-desc">We'll analyze the shape you have now - and use it as your starting point.</div>

    <!-- Bullet Points -->
    <ul class="bullet-list">
      <li><span class="bullet-dot"></span> Even, direct light on your face</li>
      <li><span class="bullet-dot"></span> Face forward, chin level</li>
      <li><span class="bullet-dot"></span> Brow area clear and fully visible</li>
    </ul>

    <!-- Privacy Note -->
    <div class="privacy-note">
      <svg viewBox="0 0 24 24">
        <rect x="3" y="11" width="18" height="11" rx="2" />
        <path d="M7 11V7a5 5 0 0110 0v4" />
      </svg>
      <span>Your photo remains entirely private.</span>
    </div>

    <!-- Open Camera Button -->
    <button class="btn-scan-gold" onclick="window.location.href='camera-screen.php'">Open Camera</button>

    <!-- Use existing photo -->
    <div class="scan-link-gold">Use an existing photo</div>

  </main>

  <!-- Script -->
  <script>
    // face-scan.php script mein
    document.querySelector('.btn-scan-gold').addEventListener('click', function() {
      window.location.href = 'camera-screen.php';
    });
    document.querySelector('.scan-link-gold').addEventListener('click', function() {
      alert('Opening photo gallery...');
    });
  </script>

</body>

</html>