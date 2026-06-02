<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Check Inbox — Arch</title>
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
      --gold-muted: rgba(201, 168, 76, 0.12);
      --gold-bg-hover: rgba(201, 168, 76, 0.08);
      --black: #0a0a0a;
      --white: #f5f0e8;
      --white-dim: rgba(245, 240, 232, 0.6);
      --white-faint: rgba(245, 240, 232, 0.15);
      --border: rgba(201, 168, 76, 0.2);
      --btn-dark: #232323;
      --radius: 24px;
      --transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
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

    .check-inbox-card {
      width: 100%;
      max-width: 600px;
      background: rgba(255, 255, 255, 0.01);
      border: 1px solid var(--border);
      border-radius: 48px;
      padding: 48px 56px 40px;
      backdrop-filter: blur(2px);
      box-shadow: 0 24px 80px rgba(0, 0, 0, 0.7);
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

    /* --- ICON --- */
    .inbox-icon-wrap {
      display: flex;
      justify-content: center;
      margin-bottom: 1.5rem;
    }

    .inbox-icon-wrap svg {
      width: 64px;
      height: 64px;
    }

    /* --- HEADING --- */
    .heading {
      font-family: var(--font-display);
      font-style: italic;
      font-weight: 400;
      font-size: 3rem;
      color: var(--white);
      line-height: 1.05;
      margin-bottom: 1.5rem;
    }

    /* --- TEXT --- */
    .sub-text-gold {
      font-size: 0.9rem;
      color: var(--gold);
      margin-bottom: 0.25rem;
    }

    .email-display {
      font-size: 1rem;
      color: var(--white);
      font-weight: 400;
      margin-bottom: 0.75rem;
    }

    .spam-notice {
      font-size: 0.85rem;
      color: var(--white-dim);
      line-height: 1.5;
      max-width: 380px;
      margin: 0 auto 2rem auto;
    }

    /* --- GOLD DIVIDER LINE --- */
    .gold-divider {
      width: 100px;
      height: 1px;
      background: var(--gold);
      margin: 0 auto 2.5rem auto;
    }

    /* --- BUTTON --- */
    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      padding: 1rem 1.75rem;
      border-radius: var(--radius);
      font-size: 0.7rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      font-weight: 600;
      transition: all var(--transition);
      width: 100%;
      min-height: 60px;
    }

    .btn-primary {
      background: var(--btn-dark);
      border: 1px solid rgba(255, 255, 255, 0.08);
      color: var(--white);
    }

    .btn-primary:hover {
      border-color: var(--gold);
      background: var(--gold-bg-hover);
      color: var(--gold-light);
      transform: translateY(-2px);
      box-shadow: 0 8px 30px rgba(201, 168, 76, 0.15);
    }

    /* --- SEND AGAIN LINK --- */
    .send-again {
      display: inline-block;
      margin-top: 1.25rem;
      font-size: 0.8rem;
      color: var(--gold);
      text-decoration: none;
      cursor: pointer;
      transition: opacity var(--transition);
    }

    .send-again:hover {
      opacity: 0.7;
    }

    /* --- FOOTER --- */
    .bottom-note {
      text-align: center;
      font-size: 0.7rem;
      color: var(--gold);
      margin-top: 2.5rem;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 850px) {
      .check-inbox-card {
        padding: 40px 36px;
      }
      .heading {
        font-size: 2.6rem;
      }
    }

    @media (max-width: 600px) {
      .check-inbox-card {
        padding: 32px 24px;
        border-radius: 32px;
      }
      .heading {
        font-size: 2.2rem;
      }
      .btn {
        min-height: 54px;
        font-size: 0.65rem;
      }
      .inbox-icon-wrap svg {
        width: 52px;
        height: 52px;
      }
      .logo-wrap img {
        width: 48px;
        height: 48px;
      }
    }

    @media (max-width: 420px) {
      .check-inbox-card {
        padding: 24px 16px;
        border-radius: 24px;
      }
      .heading {
        font-size: 1.8rem;
      }
      .btn {
        min-height: 48px;
        font-size: 0.6rem;
      }
      .inbox-icon-wrap svg {
        width: 44px;
        height: 44px;
      }
    }
  </style>
</head>
<body>

  <div class="check-inbox-card">

    <!-- Logo -->
    <div class="logo-wrap">
      <img src="assets/logo.png" alt="Arch" />
    </div>

    <!-- Envelope Icon with Notification Badge -->
    <div class="inbox-icon-wrap">
      <svg viewBox="0 0 64 64" fill="none">
        <!-- Envelope body -->
        <rect x="8" y="16" width="48" height="32" rx="4" stroke="#c9a84c" stroke-width="1.8" />
        <!-- Envelope flap -->
        <polyline points="8,16 32,32 56,16" stroke="#c9a84c" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
        <!-- Notification badge background -->
        <circle cx="50" cy="16" r="8" fill="#c9a84c" stroke="none" />
        <!-- Notification badge text -->
        <text x="50" y="20" text-anchor="middle" font-size="11" fill="#0a0a0a" font-family="sans-serif" font-weight="bold">!</text>
      </svg>
    </div>

    <!-- Heading -->
    <h1 class="heading">Check your<br />inbox.</h1>

    <!-- Subtext -->
    <p class="sub-text-gold">A reset link has been sent to</p>
    <p class="email-display" id="forgot-sent-email">Mary@gmail.com</p>

    <!-- Spam notice -->
    <p class="spam-notice">
      Spam folder can be overzealous —<br />
      check there if needed.
    </p>

    <!-- Gold Divider Line -->
    <div class="gold-divider"></div>

    <!-- Back to Sign In Button -->
    <button class="btn btn-primary" onclick="goBack('login.html')">Back to Sign In</button>

    <!-- Send Again Link -->
    <a href="#" class="send-again" onclick="handleSendAgain(event)">Send again</a>

    <!-- Footer -->
    <p class="bottom-note">Your data. Yours alone.</p>

  </div>

  <!-- ===== JAVASCRIPT ===== -->
  <script>
    function goBack(target) {
      window.location.href = target;
    }

    function handleSendAgain(e) {
      e.preventDefault();
      // Simple toast simulation
      alert('Reset link resent!');
    }

    // Auto-populate email from localStorage (if available)
    document.addEventListener('DOMContentLoaded', function() {
      const emailEl = document.getElementById('forgot-sent-email');
      const savedEmail = localStorage.getItem('archForgotEmail');
      if (savedEmail && emailEl) {
        emailEl.textContent = savedEmail;
      }
    });
  </script>

</body>
</html>