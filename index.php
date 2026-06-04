<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arch Landing — Royals Arch Brow</title>

  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Montserrat:wght@300;400;500&display=swap"
    rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    :root {
      --black: #0a0a0a;
      --gold: #c9a84c;
      --gold-light: #d4b96a;
      --gold-dark: #8a6f2e;
      --white: #f5f0e8;
      --white-dim: rgba(245, 240, 232, 0.55);
      --border: rgba(201, 168, 76, 0.18);
      --border-hover: rgba(201, 168, 76, 0.45);
      --font-display: 'Cormorant Garamond', serif;
      --font-body: 'Montserrat', sans-serif;
      --radius: 30px;
      --transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    body {
      background: var(--black);
      color: var(--white);
      font-family: var(--font-body);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 24px 16px;
    }

    /* ====== MAIN CARD ====== */
    .landing-container {
      width: 100%;
      max-width: 1100px;
      min-height: 600px;
      border: 1px solid var(--border);
      border-radius: var(--radius);
      padding: 80px 60px;
      position: relative;
      background: rgba(255, 255, 255, 0.02);
      backdrop-filter: blur(2px);
      box-shadow: 0 24px 90px rgba(0, 0, 0, 0.7);
    }

    /* ====== LOGO ====== */
    .logo {
      width: 64px;
      display: block;
      margin: 0 auto 10px;
      object-fit: contain;
    }

    /* ====== WELCOME ====== */
    .welcome-text {
      text-align: center;
      color: var(--gold);
      font-size: 0.7rem;
      letter-spacing: 0.25em;
      text-transform: uppercase;
      font-weight: 500;
      margin-bottom: 20px;
    }

    /* ====== TAGLINE ====== */
    .tagline {
      text-align: center;
      font-family: var(--font-display);
      font-style: italic;
      font-size: 4rem;
      line-height: 1.05;
      margin-bottom: 50px;
      color: var(--white);
    }

    /* ====== BUTTONS ====== */
    .buttons-wrapper {
      max-width: 600px;
      margin: 0 auto;
    }

    .path-btn {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1.25rem 1.75rem;
      border-radius: var(--radius);
      text-decoration: none;
      margin-bottom: 0.75rem;
      border: 1px solid var(--border);
      background: rgba(255, 255, 255, 0.02);
      transition: all var(--transition);
    }

    .path-btn:hover {
      border: 1px solid var(--gold);
      background: rgba(201, 168, 76, 0.06);
      transform: translateY(-2px);
      box-shadow: 0 8px 30px rgba(201, 168, 76, 0.08);
    }

    .path-btn:hover .btn-title,
    .path-btn:hover .btn-subtitle {
      color: var(--gold);
    }

    /* ====== BUTTON TEXT ====== */
    .btn-left {
      text-align: left;
    }

    .btn-title {
      font-family: var(--font-display);
      font-size: 1.8rem;
      font-weight: 400;
      color: var(--white);
      margin-bottom: 4px;
      transition: color var(--transition);
    }

    .btn-subtitle {
      font-size: 0.85rem;
      font-style: italic;
      color: var(--white-dim);
      transition: color var(--transition);
    }

    /* ====== ARROW ====== */
    .arrow-circle {
      width: 48px;
      height: 48px;
      border-radius: 50%;
      border: 1px solid var(--border);
      display: flex;
      justify-content: center;
      align-items: center;
      color: var(--gold);
      flex-shrink: 0;
      transition: all var(--transition);
    }

    .path-btn:hover .arrow-circle {
      border-color: var(--gold);
      background: rgba(201, 168, 76, 0.06);
      transform: translateX(4px);
    }

    /* ====== GUEST LINK ====== */
    .guest-link {
      position: absolute;
      bottom: 30px;
      left: 50%;
      transform: translateX(-50%);
      color: var(--gold);
      text-decoration: none;
      font-size: 0.85rem;
      transition: opacity var(--transition);
    }

    .guest-link:hover {
      opacity: 0.7;
    }

    /* ====== RESPONSIVE ====== */
    @media (max-width: 900px) {
      .landing-container {
        padding: 50px 30px;
        border-radius: 30px;
        min-height: 500px;
      }
      .tagline {
        font-size: 3rem;
      }
      .btn-title {
        font-size: 1.5rem;
      }
      .arrow-circle {
        width: 44px;
        height: 44px;
      }
    }

    @media (max-width: 520px) {
      .landing-container {
        padding: 40px 20px;
        border-radius: 24px;
        min-height: 450px;
      }
      .tagline {
        font-size: 2.2rem;
      }
      .btn-title {
        font-size: 1.2rem;
      }
      .path-btn {
        padding: 1rem 1.25rem;
      }
      .arrow-circle {
        width: 40px;
        height: 40px;
      }
    }
  </style>
</head>

<body>

  <div class="landing-container">

    <!-- LOGO -->
    <img src="assets/logo.png" class="logo" alt="Arch Logo">

    <!-- WELCOME -->
    <div class="welcome-text">
      Welcome to Arch
    </div>

    <!-- TAGLINE -->
    <div class="tagline">
      Two paths.<br>
      One destination.
    </div>

    <!-- BUTTONS -->
    <div class="buttons-wrapper">
      <a href="signup.php" class="path-btn">
        <div class="btn-left">
          <div class="btn-title">I'm new here</div>
          <div class="btn-subtitle">Create your account</div>
        </div>
        <div class="arrow-circle">
          →
        </div>
      </a>

      <a href="login.php" class="path-btn">
        <div class="btn-left">
          <div class="btn-title">Welcome back</div>
          <div class="btn-subtitle">Sign in to continue</div>
        </div>
        <div class="arrow-circle">
          →
        </div>
      </a>
    </div>

    <!-- GUEST LINK -->
    <a href="onboarding-profile.php" class="guest-link">
      Continue as guest
    </a>

  </div>

</body>

</html>