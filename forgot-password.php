<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Forgot Password — Arch</title>
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
      --border-focus: rgba(201, 168, 76, 0.5);
      --red-bg: rgba(139, 32, 32, 0.2);
      --red-border: #8b2020;
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

    .forgot-card {
      width: 100%;
      max-width: 600px;
      background: rgba(255, 255, 255, 0.01);
      border: 1px solid var(--border);
      border-radius: 48px;
      padding: 48px 56px 40px;
      backdrop-filter: blur(2px);
      box-shadow: 0 24px 80px rgba(0, 0, 0, 0.7);
    }

    /* --- BACK BUTTON (gold arrow) --- */
    .back-btn-container {
      display: flex;
      align-items: center;
      justify-content: flex-start;
      margin-bottom: 1.5rem;
    }

    .back-btn-circle {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 48px;
      height: 48px;
      border-radius: 50%;
      border: 1px solid var(--gold);
      background: transparent;
      cursor: pointer;
      transition: all var(--transition);
      color: var(--gold);
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

    /* --- LOGO --- */
    .logo-wrap {
      text-align: center;
      margin-bottom: 0.25rem;
    }

    .logo-wrap img {
      width: 56px;
      height: 56px;
      object-fit: contain;
    }

    /* --- HEADING --- */
    .form-heading {
      text-align: center;
      margin-bottom: 2.25rem;
    }

    .form-heading h1 {
      font-family: var(--font-display);
      font-style: italic;
      font-weight: 400;
      font-size: 3rem;
      color: var(--white);
      line-height: 1.05;
    }

    .form-heading p {
      font-size: 0.95rem;
      color: var(--gold);
      margin-top: 0.2rem;
      font-weight: 300;
    }

    /* --- FORM --- */
    .forgot-form {
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
    }

    .form-group {
      display: flex;
      flex-direction: column;
      gap: 0.4rem;
    }

    .input-wrapper {
      position: relative;
    }

    /* --- LABEL INSIDE INPUT --- */
    .form-label {
      position: absolute;
      top: 0.55rem;
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
      border-radius: var(--radius);
      padding: 1.6rem 1.25rem 0.7rem 1.25rem;
      color: var(--white);
      font-size: 1rem;
      font-weight: 300;
      transition: all var(--transition);
      min-height: 72px;
      width: 100%;
    }

    .form-input::placeholder {
      color: transparent;
    }

    .form-input:focus {
      border-color: var(--gold);
      background: rgba(255, 255, 255, 0.04);
      box-shadow: 0 0 0 1px rgba(201, 168, 76, 0.15);
    }

    /* --- HOVER --- */
    .form-input:hover {
      border-color: var(--gold);
      background: var(--gold-bg-hover);
    }

    .form-input:hover + .form-label,
    .form-input:focus + .form-label {
      color: var(--gold-light);
    }

    /* --- VALID (gold border) --- */
    .form-input.valid {
      border-color: var(--gold);
      background: rgba(255, 255, 255, 0.03);
    }

    .form-input.valid + .form-label {
      color: var(--gold);
    }

    .form-input.valid:hover {
      border-color: var(--gold-light);
      background: var(--gold-bg-hover);
    }

    .form-input.valid:hover + .form-label {
      color: var(--gold-light);
    }

    /* --- ERROR (red) --- */
    .form-input.error {
      border-color: var(--red-border);
      background: var(--red-bg);
    }

    .form-input.error + .form-label {
      color: #e05c5c;
    }

    .form-input.error:hover {
      border-color: var(--gold);
      background: var(--gold-bg-hover);
    }

    .form-input.error:hover + .form-label {
      color: var(--gold-light);
    }

    .form-error {
      font-size: 0.65rem;
      color: #e05c5c;
      letter-spacing: 0.05em;
      padding-left: 4px;
      min-height: 1.3em;
    }

    /* --- SPAM NOTICE --- */
    .spam-notice {
      text-align: center;
      font-size: 0.9rem;
      color: var(--white-dim);
      margin: 0.5rem 0 1rem;
      line-height: 1.5;
    }

    /* --- SEND RESET BUTTON (#232323) --- */
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

    /* --- BACK LINK (below button) --- */
    .back-link-row {
      text-align: center;
      margin-top: 1rem;
    }

    .back-link {
      font-size: 0.8rem;
      color: var(--gold);
      text-decoration: none;
      transition: opacity var(--transition);
    }

    .back-link:hover {
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
      .forgot-card {
        padding: 40px 36px;
      }
      .form-heading h1 { font-size: 2.6rem; }
    }

    @media (max-width: 600px) {
      .forgot-card {
        padding: 32px 24px;
        border-radius: 32px;
      }
      .form-heading h1 { font-size: 2.2rem; }
      .form-input { min-height: 64px; font-size: 0.95rem; padding: 1.4rem 1rem 0.6rem 1rem; }
      .form-label { font-size: 0.5rem; top: 0.45rem; left: 1rem; }
      .btn { min-height: 54px; font-size: 0.65rem; }
      .back-btn-circle { width: 42px; height: 42px; }
    }

    @media (max-width: 420px) {
      .forgot-card {
        padding: 20px 16px;
        border-radius: 24px;
      }
      .form-heading h1 { font-size: 1.8rem; }
      .form-input { min-height: 56px; font-size: 0.85rem; padding: 1.2rem 0.8rem 0.5rem 0.8rem; }
      .form-label { font-size: 0.45rem; top: 0.4rem; left: 0.8rem; }
      .btn { min-height: 48px; font-size: 0.6rem; }
      .back-btn-circle { width: 36px; height: 36px; }
    }
  </style>
</head>
<body>

  <div class="forgot-card">

    <!-- Back Button (Circular Gold Border) -->
    <div class="back-btn-container">
      <button class="back-btn-circle" onclick="goBack('login.php')">
        <svg viewBox="0 0 24 24">
          <path d="M19 12H5M12 19l-7-7 7-7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>
    </div>

    <!-- Logo -->
    <div class="logo-wrap">
      <img src="assets/logo.png" alt="Arch" />
    </div>

    <!-- Heading -->
    <div class="form-heading">
      <h1>We'll get you<br />back in.</h1>
      <p>Enter your email and a reset link will follow.</p>
    </div>

    <!-- Forgot Password Form -->
    <form class="forgot-form" id="forgot-form" onsubmit="handleForgotPassword(event)">

      <!-- Email -->
      <div class="form-group">
        <div class="input-wrapper">
          <span class="form-label">Email Address</span>
          <input
            class="form-input valid"
            id="forgot-email"
            type="email"
            placeholder=" "
            autocomplete="email"
            value=""
            oninput="validateField('forgot-email', 'email')"
            onblur="validateField('forgot-email', 'email')"
          />
        </div>
        <span class="form-error" id="email-error"></span>
      </div>

      <!-- Spam notice -->
      <p class="spam-notice">
        Check your spam folder if it doesn't<br />
        arrive within a minute
      </p>

      <!-- Send Reset Link Button (#232323) -->
      <button type="submit" class="btn btn-primary">Send Reset Link</button>

      <!-- Back to Sign In (gold link) -->
      <div class="back-link-row">
        <a href="login.php" class="back-link">Back to Sign In</a>
      </div>
    </form>

    <!-- Footer -->
    <p class="bottom-note">Your data. Yours alone.</p>

  </div>

  <!-- ===== JAVASCRIPT ===== -->
  <script>
    function goBack(target) {
      window.location.href = target;
    }

    function showToast(msg, type) {
      alert(msg);
    }

    function validateField(fieldId, type) {
      const field = document.getElementById(fieldId);
      const errorEl = document.getElementById(fieldId + '-error');
      const value = field.value.trim();

      field.classList.remove('error', 'valid');
      errorEl.textContent = '';

      if (value === '') return;

      let isValid = true;

      if (type === 'email') {
        if (!value.includes('@')) {
          isValid = false;
          errorEl.textContent = 'Please enter a valid email address.';
        }
      }

      if (isValid) {
        field.classList.add('valid');
      } else {
        field.classList.add('error');
      }
    }

    function handleForgotPassword(e) {
      e.preventDefault();

      validateField('forgot-email', 'email');

      const email = document.getElementById('forgot-email').value.trim();

      let hasError = false;

      if (!email) {
        document.getElementById('forgot-email').classList.add('error');
        document.getElementById('email-error').textContent = 'Email is required.';
        hasError = true;
      }

      if (hasError) return;

      localStorage.setItem('archForgotEmail', email);
      alert('Reset link sent! Redirecting…');
      // window.location.href = 'check-inbox.html';
    }
  </script>

</body>
</html>