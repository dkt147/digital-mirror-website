<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Verify OTP — Royals Arch Brow</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
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

    * { box-sizing: border-box; margin: 0; padding: 0; }
    html { font-size: 16px; scroll-behavior: smooth; }
    body {
      background: var(--black);
      color: var(--white);
      font-family: var(--font-body);
      font-weight: 300;
      line-height: 1.6;
      min-height: 100vh;
      overflow-x: hidden;
    }
    a { color: inherit; text-decoration: none; }
    button {
      cursor: pointer;
      border: none;
      outline: none;
      font-family: var(--font-body);
      background: none;
    }

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

    .navbar-left { display: flex; align-items: center; gap: 1rem; }
    .nav-avatar {
      width: 42px; height: 42px; border-radius: 50%; overflow: hidden;
      border: 1.5px solid var(--gold-dark); flex-shrink: 0;
    }
    .nav-avatar img { width: 100%; height: 100%; object-fit: cover; display: block; }

    .navbar-nav {
      display: flex; align-items: center; gap: 2.5rem; list-style: none;
      position: absolute; left: 50%; transform: translateX(-50%);
    }
    .navbar-nav a {
      font-size: 0.65rem; letter-spacing: 0.18em; text-transform: uppercase;
      color: var(--white-dim); transition: color var(--transition); font-weight: 400;
    }
    .navbar-nav a:hover, .navbar-nav a.active { color: var(--gold); }

    .btn-book {
      padding: 0.55rem 1.5rem; font-size: 0.65rem; letter-spacing: 0.12em;
      text-transform: uppercase; border-radius: 50px; border: 1px solid var(--border);
      color: var(--white-dim); transition: all var(--transition);
    }
    .btn-book:hover { border-color: var(--gold); color: var(--gold); }

    .nav-emblem {
      width: 44px; height: 44px; border-radius: 50%;
      background: radial-gradient(circle at 35% 35%, #2a2010, #1a1408);
      border: 1.5px solid var(--gold-dark); display: flex; align-items: center;
      justify-content: center; flex-shrink: 0; overflow: hidden;
    }
    .nav-emblem img { width: 26px; height: 26px; object-fit: contain; }

    .nav-gold-rule {
      height: 1px; background: linear-gradient(to right, transparent 0%, var(--gold-dark) 30%, var(--gold-dark) 70%, transparent 100%);
      opacity: 0.5;
    }

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
      background: rgba(201,168,76,0.12);
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

    .main {
      max-width: 100%;
      margin: 0 auto;
      padding: 0 3rem 2.5rem;
      display: flex;
      flex-direction: column;
      gap: 1.75rem;
    }

    .page-label {
      font-size: 0.6rem; letter-spacing: 0.25em; text-transform: uppercase;
      color: var(--gold); font-weight: 500; margin-bottom: 0.2rem;
    }
    .page-title {
      font-family: var(--font-display);
      font-style: italic;
      font-size: 2rem;
      font-weight: 400;
      color: var(--white);
      line-height: 1.05;
    }

    .forgot-card {
      background: #161610;
      border: 1px solid var(--gold);
      border-radius: var(--radius);
      padding: 2rem 1.5rem;
    }

    .form-heading {
      text-align: center;
      margin-bottom: 1.5rem;
    }

    .form-heading h1 {
      font-family: var(--font-display);
      font-style: italic;
      font-weight: 400;
      font-size: 2.2rem;
      color: var(--white);
      line-height: 1.05;
    }

    .form-heading p {
      font-size: 0.9rem;
      color: var(--gold);
      margin-top: 0.2rem;
      font-weight: 300;
    }

    .forgot-form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    .form-group {
      display: flex;
      flex-direction: column;
      gap: 0.4rem;
    }

    .input-wrapper {
      position: relative;
    }

    .form-label {
      position: absolute;
      top: 0.5rem;
      left: 1.25rem;
      font-size: 0.55rem;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--white-dim);
      font-weight: 500;
      pointer-events: none;
      transition: color var(--transition);
      z-index: 2;
    }

    .form-input {
      background: rgba(255, 255, 255, 0.03);
      border: 1px solid var(--border);
      border-radius: var(--radius-sm);
      padding: 1.6rem 1.25rem 0.7rem 1.25rem;
      color: var(--white);
      font-size: 1rem;
      font-weight: 300;
      transition: all var(--transition);
      min-height: 68px;
      width: 100%;
    }

    .form-input:focus {
      border-color: var(--gold);
      background: rgba(255, 255, 255, 0.04);
      box-shadow: 0 0 0 1px rgba(201, 168, 76, 0.15);
    }

    .form-input:hover {
      border-color: var(--gold);
      background: var(--gold-muted);
    }

    .form-input:hover + .form-label,
    .form-input:focus + .form-label {
      color: var(--gold-light);
    }

    .form-input.valid {
      border-color: var(--gold);
      background: rgba(255, 255, 255, 0.03);
    }

    .form-input.valid + .form-label {
      color: var(--gold);
    }

    .form-input.error {
      border-color: #e05c5c;
      background: rgba(139, 32, 32, 0.1);
    }

    .form-input.error + .form-label {
      color: #e05c5c;
    }

    .form-error {
      font-size: 0.65rem;
      color: #e05c5c;
      letter-spacing: 0.05em;
      padding-left: 4px;
      min-height: 1.3em;
    }

    .spam-notice {
      text-align: center;
      font-size: 0.85rem;
      color: var(--white-dim);
      margin: 0.5rem 0 1rem;
      line-height: 1.5;
    }

    .actions {
      display: grid;
      gap: 0.75rem;
    }

    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 100%;
      padding: 0.85rem 1.2rem;
      border-radius: 999px;
      font-size: 0.75rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      font-weight: 600;
      text-decoration: none;
      transition: all var(--transition);
      cursor: pointer;
      border: none;
      font-family: var(--font-body);
    }

    .btn-primary {
      background: transparent;
      border: 1px solid var(--border);
      color: var(--white);
    }

    .btn-primary:hover {
      border-color: var(--gold);
      color: var(--gold);
    }

    .back-link {
      text-align: center;
      color: var(--gold);
      font-size: 0.8rem;
      text-decoration: none;
      transition: opacity var(--transition);
    }

    .back-link:hover {
      opacity: 0.7;
    }

    .bottom-note {
      text-align: center;
      font-size: 0.7rem;
      color: var(--gold);
      margin-top: 1.5rem;
    }

    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(16px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .fade-1 { animation: fadeUp 0.55s ease 0.05s both; }
    .fade-2 { animation: fadeUp 0.55s ease 0.15s both; }
    .fade-3 { animation: fadeUp 0.55s ease 0.25s both; }
    .fade-4 { animation: fadeUp 0.55s ease 0.35s both; }
    .fade-5 { animation: fadeUp 0.55s ease 0.45s both; }

    @media (max-width: 900px) {
      .main { padding: 0 1.25rem 1.5rem; }
      .navbar { padding: 0.875rem 1.25rem; }
      .navbar-nav { display: none; }
      .page-title { font-size: 1.6rem; }
      .forgot-card { padding: 1.5rem; }
      .form-heading h1 { font-size: 1.8rem; }
      .form-input { min-height: 60px; font-size: 0.9rem; padding: 1.4rem 1rem 0.6rem 1rem; }
      .form-label { font-size: 0.5rem; top: 0.45rem; left: 1rem; }
      .back-btn { width: 38px; height: 38px; }
      .page-logo { width: 38px; height: 38px; }
    }
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <?php include 'includes/navbar.php'; ?>

  <div class="nav-gold-rule"></div>

  <main class="main">

    <div class="page-topbar fade-1">
      <a href="javascript:history.back()" class="back-btn" aria-label="Go back">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="19" y1="12" x2="5" y2="12"></line>
          <polyline points="12 19 5 12 12 5"></polyline>
        </svg>
      </a>
      <div class="page-title-center">Verify OTP</div>
      <div class="page-logo">
        <img src="assets/logo.png" alt="CG" />
      </div>
    </div>

    <div class="fade-2">
      <div class="page-label">OTP Verification</div>
      <div class="page-title">Confirm your security code.</div>
    </div>

    <div class="forgot-card fade-3">
      <div class="form-heading">
        <p>Enter the code sent to your email to continue.</p>
      </div>

      <form class="forgot-form" id="verify-form" onsubmit="handleVerifyOtp(event)">
        <!-- <div class="form-group">
          <div class="input-wrapper">
            <span class="form-label">Email Address</span>
            <input
              class="form-input"
              id="verify-email"
              type="email"
              placeholder=" "
              autocomplete="email"
              value=""
              oninput="validateField('verify-email', 'email')"
              onblur="validateField('verify-email', 'email')"
            />
          </div>
          <span class="form-error" id="verify-email-error"></span>
        </div> -->

        <div class="form-group">
          <div class="input-wrapper">
            <span class="form-label">Verification Code</span>
            <input
              class="form-input"
              id="verify-code"
              type="text"
              placeholder=" "
              autocomplete="one-time-code"
              maxlength="6"
              value=""
              oninput="validateField('verify-code', 'otp')"
              onblur="validateField('verify-code', 'otp')"
            />
          </div>
          <span class="form-error" id="verify-code-error"></span>
        </div>

        <p class="spam-notice">
          Didn’t receive it? Check your spam folder or request a new code.
        </p>

        <div class="actions">
          <button type="submit" class="btn btn-primary">Verify Code</button>
          <a href="login.php" class="back-link">Back to Sign In</a>
        </div>
      </form>

      <p class="bottom-note">Secure access, every step.</p>
    </div>

  </main>

  <script>
    function validateField(fieldId, type) {
      const field = document.getElementById(fieldId);
      const errorEl = document.getElementById(fieldId + '-error');
      const value = field.value.trim();

      field.classList.remove('error', 'valid');
      errorEl.textContent = '';

      if (value === '') return;

      let isValid = true;

      if (type === 'email') {
        isValid = value.includes('@') && value.includes('.');
        if (!isValid) {
          errorEl.textContent = 'Please enter a valid email address.';
        }
      }

      if (type === 'otp') {
        isValid = /^[0-9]{4,6}$/.test(value);
        if (!isValid) {
          errorEl.textContent = 'Enter the 4-6 digit code.';
        }
      }

      if (isValid) {
        field.classList.add('valid');
      } else {
        field.classList.add('error');
      }
    }

    function handleVerifyOtp(e) {
      e.preventDefault();

      validateField('verify-email', 'email');
      validateField('verify-code', 'otp');

      const email = document.getElementById('verify-email').value.trim();
      const code = document.getElementById('verify-code').value.trim();

      let hasError = false;

      if (!email) {
        document.getElementById('verify-email').classList.add('error');
        document.getElementById('verify-email-error').textContent = 'Email is required.';
        hasError = true;
      }

      if (!code) {
        document.getElementById('verify-code').classList.add('error');
        document.getElementById('verify-code-error').textContent = 'Verification code is required.';
        hasError = true;
      }

      if (hasError) return;

      localStorage.setItem('archVerifyEmail', email);
      alert('OTP verified! Redirecting…');
    }
  </script>

</body>
</html>
