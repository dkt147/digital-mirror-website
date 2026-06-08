<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Verify OTP — Arch</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap"
    rel="stylesheet" />
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }

    :root {
      --gold: #C9A84C;
      --gold-light: #C9A84C;
      --gold-dark: #C9A84C;
      --gold-muted: rgba(201, 168, 76, 0.12);
      --gold-bg-hover: rgba(201, 168, 76, 0.08);
      --black: #000000;
      --white: #f5f0e8;
      --white-dim: rgba(245, 240, 232, 0.6);
      --white-faint: rgba(245, 240, 232, 0.15);
      --border: rgba(201, 168, 76, 0.2);
      --border-focus: rgba(201, 168, 76, 0.5);
      --red-bg: rgba(139, 32, 32, 0.2);
      --red-border: #8b2020;
      --btn-dark: #232323;
      --radius: 18px;
      --transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      --font-display: 'Cormorant Garamond', serif;
      --font-body: 'Montserrat', sans-serif;
    }

    body {
      background: var(--black);
      color: var(--white);
      font-family: var(--font-body);
      font-weight: 600;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 40px 20px;
    }

    .verify-card {
      width: 100%;
      max-width: 680px;
      background: rgba(255, 255, 255, 0.01);
      border: 1px solid var(--border);
      border-radius: 48px;
      padding: 48px 56px 40px;
      backdrop-filter: blur(2px);
      box-shadow: 0 24px 80px rgba(0, 0, 0, 0.7);
    }

    /* Back Button */
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

    /* Logo */
    .logo-wrap {
      text-align: center;
      margin-bottom: 0.25rem;
    }

    .logo-wrap img {
      width: 56px;
      height: 56px;
      object-fit: contain;
    }

    /* Heading */
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
    }

    /* Form */
    .verify-form {
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

    .form-input::placeholder { color: transparent; }

    .form-input:focus {
      border-color: var(--gold);
      background: rgba(255, 255, 255, 0.04);
      box-shadow: 0 0 0 1px rgba(201, 168, 76, 0.15);
    }

    .form-input:hover {
      border-color: var(--gold);
      background: var(--gold-bg-hover);
    }

    .form-input:hover + .form-label,
    .form-input:focus + .form-label {
      color: var(--gold-light);
    }

    .form-input.valid {
      border-color: var(--gold);
      background: rgba(255, 255, 255, 0.03);
    }

    .form-input.valid + .form-label { color: var(--gold); }

    .form-input.valid:hover {
      border-color: var(--gold-light);
      background: var(--gold-bg-hover);
    }

    .form-input.valid:hover + .form-label { color: var(--gold-light); }

    .form-input.error {
      border-color: var(--red-border);
      background: var(--red-bg);
    }

    .form-input.error + .form-label { color: #e05c5c; }

    .form-input.error:hover {
      border-color: var(--gold);
      background: var(--gold-bg-hover);
    }

    .form-input.error:hover + .form-label { color: var(--gold-light); }

    .form-error {
      font-size: 0.65rem;
      color: #e05c5c;
      letter-spacing: 0.05em;
      padding-left: 4px;
      min-height: 1.3em;
    }

    /* Server message */
    .server-message {
      text-align: center;
      font-size: 0.8rem;
      margin-top: 0.5rem;
      min-height: 1.2em;
    }
    .server-message.error { color: #e05c5c; }
    .server-message.success { color: var(--gold-light); }

    /* Button */
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
      margin-top: 0.25rem;
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

    /* Footer */
    .signin-copy {
      text-align: center;
      font-size: 0.75rem;
      color: var(--white-dim);
      margin-top: 1.25rem;
    }

    .signin-copy a {
      color: var(--gold);
      font-weight: 600;
      letter-spacing: 0.05em;
      transition: opacity var(--transition);
    }

    .signin-copy a:hover { opacity: 0.7; }

    .bottom-note {
      text-align: center;
      font-size: 0.7rem;
      color: var(--gold);
      margin-top: 0.6rem;
    }

    /* Responsive */
    @media (max-width: 850px) {
      .verify-card { padding: 40px 36px; }
      .form-heading h1 { font-size: 2.6rem; }
    }

    @media (max-width: 600px) {
      .verify-card { padding: 32px 24px; border-radius: 32px; }
      .form-heading h1 { font-size: 2.2rem; }
      .form-input { min-height: 64px; font-size: 0.95rem; padding: 1.4rem 1rem 0.6rem 1rem; }
      .form-label { font-size: 0.5rem; top: 0.45rem; left: 1rem; }
      .btn { min-height: 54px; font-size: 0.65rem; }
      .back-btn-circle { width: 42px; height: 42px; }
    }

    @media (max-width: 420px) {
      .verify-card { padding: 20px 16px; border-radius: 24px; }
      .form-heading h1 { font-size: 1.8rem; }
      .form-input { min-height: 56px; font-size: 0.85rem; padding: 1.2rem 0.8rem 0.5rem 0.8rem; }
      .form-label { font-size: 0.45rem; top: 0.4rem; left: 0.8rem; }
      .btn { min-height: 48px; font-size: 0.6rem; }
      .back-btn-circle { width: 36px; height: 36px; }
    }
  </style>
</head>
<body>

  <div class="verify-card">

    <!-- Back Button -->
    <div class="back-btn-container">
      <button class="back-btn-circle" onclick="goBack('forgot-password.php')">
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
      <h1>Verify your<br />code.</h1>
      <p>Enter the OTP we sent to your email.</p>
    </div>

    <!-- Verify OTP Form -->
    <form class="verify-form" id="verify-form" onsubmit="handleVerifyOtp(event)" novalidate>

      <!-- Email (pre-filled from localStorage if available) -->
      <div class="form-group">
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
      </div>

      <!-- OTP Code -->
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
            oninput="validateField('verify-code', 'otp')"
            onblur="validateField('verify-code', 'otp')"
          />
        </div>
        <span class="form-error" id="verify-code-error"></span>
      </div>

      <!-- Server message -->
      <div id="server-message" class="server-message" style="display:none;"></div>

      <!-- Submit Button -->
      <button type="submit" class="btn btn-primary" id="submit-btn" style="background-color: var(--gold); border-radius: 999px;">
        <span id="btn-text" style="color: var(--black);">Verify Code</span>
        <span id="btn-spinner" style="display:none;">⏳</span>
      </button>
    </form>

    <!-- Footer -->
    <p class="signin-copy">
      Need a new code? <a href="forgot-password.php">Resend OTP</a>
    </p>
    <p class="bottom-note">Secure access, every step.</p>

  </div>

  <script>
    // Pre-fill email if stored from forgot-password step
    (function() {
      const storedEmail = localStorage.getItem('resetEmail');
      if (storedEmail) {
        const emailField = document.getElementById('verify-email');
        emailField.value = storedEmail;
        validateField('verify-email', 'email');
      }
    })();

    function goBack(target) {
      window.location.href = target;
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
        isValid = value.includes('@') && value.indexOf('@') > 0 && value.indexOf('@') < value.length - 1;
        if (!isValid) {
          errorEl.textContent = 'Please enter a valid email address.';
        }
      } else if (type === 'otp') {
        isValid = /^[0-9]{4,6}$/.test(value);
        if (!isValid) {
          errorEl.textContent = 'Enter the 4-6 digit code from your email.';
        }
      }

      if (isValid) {
        field.classList.add('valid');
      } else {
        field.classList.add('error');
      }
    }

    async function handleVerifyOtp(e) {
      e.preventDefault();

      const serverMsg = document.getElementById('server-message');
      serverMsg.style.display = 'none';
      serverMsg.className = 'server-message';

      // Validate fields
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

      // Loading state
      const submitBtn = document.getElementById('submit-btn');
      const btnText = document.getElementById('btn-text');
      const btnSpinner = document.getElementById('btn-spinner');
      submitBtn.disabled = true;
      btnText.style.display = 'none';
      btnSpinner.style.display = 'inline';

      try {
        const response = await fetch('<?php echo $API_URL; ?>/auth/verify-otp', {
          method: 'POST',
          headers: {
            'accept': 'application/json',
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({
            email: email,
            otp: code
          })
        });

        const data = await response.json();

        if (!response.ok) {
          let errorMsg = 'Verification failed. Please check your code.';
          if (data && data.detail) {
            errorMsg = typeof data.detail === 'string' ? data.detail : JSON.stringify(data.detail);
          } else if (data && data.message) {
            errorMsg = data.message;
          }
          serverMsg.textContent = errorMsg;
          serverMsg.classList.add('error');
          serverMsg.style.display = 'block';
          return;
        }

        // Success – store reset_token and redirect
        if (data.reset_token) {
          // Clear the stored email
          localStorage.removeItem('resetEmail');
          // Redirect to reset password page with token
          window.location.href = `reset-password.php?token=${data.reset_token}`;
        } else {
          serverMsg.textContent = 'Unexpected response. No reset token received.';
          serverMsg.classList.add('error');
          serverMsg.style.display = 'block';
        }
      } catch (err) {
        console.error(err);
        serverMsg.textContent = 'Network error. Please try again later.';
        serverMsg.classList.add('error');
        serverMsg.style.display = 'block';
      } finally {
        submitBtn.disabled = false;
        btnText.style.display = 'inline';
        btnSpinner.style.display = 'none';
      }
    }
  </script>

</body>
</html>