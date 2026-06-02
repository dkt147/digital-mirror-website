<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign Up — Arch</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap"
    rel="stylesheet" />
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
      --dark-card: #1a1a14;
      --white: #f5f0e8;
      --white-dim: rgba(245, 240, 232, 0.6);
      --white-faint: rgba(245, 240, 232, 0.15);
      --border: rgba(201, 168, 76, 0.2);
      --border-focus: rgba(201, 168, 76, 0.5);
      --red-bg: rgba(139, 32, 32, 0.2);
      --red-border: #8b2020;
      --btn-dark: #232323;
      /* New button color */
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
    }

    .signup-card {
      width: 100%;
      max-width: 680px;
      background: rgba(255, 255, 255, 0.01);
      border: 1px solid var(--border);
      border-radius: 48px;
      padding: 48px 56px 40px;
      backdrop-filter: blur(2px);
      box-shadow: 0 24px 80px rgba(0, 0, 0, 0.7);
    }

    /* ===== BACK BUTTON ===== */
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

    /* ===== LOGO ===== */
    .logo-wrap {
      text-align: center;
      margin-bottom: 0.25rem;
    }

    .logo-wrap img {
      width: 56px;
      height: 56px;
      object-fit: contain;
    }

    /* ===== HEADING ===== */
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

    /* ===== FORM ===== */
    .signup-form {
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

    /* ===== LABEL INSIDE INPUT ===== */
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

    /* ===== HOVER ===== */
    .form-input:hover {
      border-color: var(--gold);
      background: var(--gold-bg-hover);
    }

    .form-input:hover+.form-label,
    .form-input:focus+.form-label {
      color: var(--gold-light);
    }

    /* ===== VALID (GOLD) ===== */
    .form-input.valid {
      border-color: var(--gold);
      background: rgba(255, 255, 255, 0.03);
    }

    .form-input.valid+.form-label {
      color: var(--gold);
    }

    .form-input.valid:hover {
      border-color: var(--gold-light);
      background: var(--gold-bg-hover);
    }

    .form-input.valid:hover+.form-label {
      color: var(--gold-light);
    }

    /* ===== ERROR (RED) ===== */
    .form-input.error {
      border-color: var(--red-border);
      background: var(--red-bg);
    }

    .form-input.error+.form-label {
      color: #e05c5c;
    }

    .form-input.error:hover {
      border-color: var(--gold);
      background: var(--gold-bg-hover);
    }

    .form-input.error:hover+.form-label {
      color: var(--gold-light);
    }

    .form-error {
      font-size: 0.65rem;
      color: #e05c5c;
      letter-spacing: 0.05em;
      padding-left: 4px;
      min-height: 1.3em;
    }

    /* ===== PASSWORD TOGGLE ===== */
    .toggle-pass {
      position: absolute;
      right: 1rem;
      top: 50%;
      transform: translateY(-50%);
      background: none;
      border: none;
      color: var(--white-dim);
      cursor: pointer;
      padding: 4px;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: color var(--transition);
      z-index: 3;
    }

    .toggle-pass:hover {
      color: var(--gold);
    }

    .toggle-pass svg {
      width: 20px;
      height: 20px;
      stroke: currentColor;
      stroke-width: 1.8;
      fill: none;
    }

    /* ===== CREATE ACCOUNT BUTTON (#232323) ===== */
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

    /* ===== DIVIDER ===== */
    .divider {
      display: flex;
      align-items: center;
      gap: 1rem;
      color: var(--white-faint);
      font-size: 0.65rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      margin: 0.5rem 0 0.75rem;
    }

    .divider::before,
    .divider::after {
      content: '';
      flex: 1;
      height: 1px;
      background: var(--border);
    }

    /* ===== SOCIAL BUTTONS (same radius as inputs) ===== */
    .social-btn {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.75rem;
      padding: 0.95rem 1rem;
      border-radius: var(--radius);
      background: rgba(255, 255, 255, 0.03);
      border: 1px solid rgba(255, 255, 255, 0.08);
      color: var(--white);
      font-size: 0.9rem;
      font-family: var(--font-body);
      font-weight: 500;
      transition: all var(--transition);
      width: 100%;
      cursor: pointer;
      min-height: 60px;
    }

    .social-btn:hover {
      border-color: var(--gold);
      background: var(--gold-bg-hover);
      color: var(--gold-light);
    }

    .social-btn .social-icon {
      width: 20px;
      height: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .social-btn .social-icon img {
      width: 18px;
      height: 18px;
      object-fit: contain;
    }

    .social-btn+.social-btn {
      margin-top: 0.5rem;
    }

    /* ===== FOOTER ===== */
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

    .signin-copy a:hover {
      opacity: 0.7;
    }

    .bottom-note {
      text-align: center;
      font-size: 0.7rem;
      color: var(--gold);
      margin-top: 0.6rem;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 850px) {
      .signup-card {
        padding: 40px 36px;
      }

      .form-heading h1 {
        font-size: 2.6rem;
      }
    }

    @media (max-width: 600px) {
      .signup-card {
        padding: 32px 24px;
        border-radius: 32px;
      }

      .form-heading h1 {
        font-size: 2.2rem;
      }

      .form-input {
        min-height: 64px;
        font-size: 0.95rem;
        padding: 1.4rem 1rem 0.6rem 1rem;
      }

      .form-label {
        font-size: 0.5rem;
        top: 0.45rem;
        left: 1rem;
      }

      .btn {
        min-height: 54px;
        font-size: 0.65rem;
      }

      .social-btn {
        min-height: 54px;
        font-size: 0.8rem;
      }

      .back-btn-circle {
        width: 42px;
        height: 42px;
      }
    }

    @media (max-width: 420px) {
      .signup-card {
        padding: 20px 16px;
        border-radius: 24px;
      }

      .form-heading h1 {
        font-size: 1.8rem;
      }

      .form-input {
        min-height: 56px;
        font-size: 0.85rem;
        padding: 1.2rem 0.8rem 0.5rem 0.8rem;
      }

      .form-label {
        font-size: 0.45rem;
        top: 0.4rem;
        left: 0.8rem;
      }

      .btn {
        min-height: 48px;
        font-size: 0.6rem;
      }

      .social-btn {
        min-height: 48px;
        font-size: 0.75rem;
      }

      .back-btn-circle {
        width: 36px;
        height: 36px;
      }
    }
  </style>
</head>

<body>

  <div class="signup-card">

    <!-- Back Button -->
    <div class="back-btn-container">
      <button class="back-btn-circle" onclick="goBack('index.php')">
        <svg viewBox="0 0 24 24">
          <path d="M19 12H5M12 19l-7-7 7-7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
            stroke-linejoin="round" />
        </svg>
      </button>
    </div>

    <!-- Logo -->
    <div class="logo-wrap">
      <img src="assets/logo.png" alt="Arch" />
    </div>

    <!-- Heading -->
    <div class="form-heading">
      <h1>Create your account.</h1>
      <p>A moment, then it's done.</p>
    </div>

    <!-- Signup Form -->
    <form class="signup-form" id="signup-form" onsubmit="handleSignup(event)">

      <!-- Name -->
      <div class="form-group">
        <div class="input-wrapper">
          <span class="form-label">Your Name</span>
          <input class="form-input valid" id="signup-name" type="text" placeholder=" " autocomplete="name" value=""
            oninput="validateField('signup-name', 'name')" onblur="validateField('signup-name', 'name')" />
        </div>
        <span class="form-error" id="name-error"></span>
      </div>

      <!-- Email -->
      <div class="form-group">
        <div class="input-wrapper">
          <span class="form-label">Email Address</span>
          <input class="form-input" id="signup-email" type="email" placeholder=" " autocomplete="email"
            oninput="validateField('signup-email', 'email')" onblur="validateField('signup-email', 'email')" />
        </div>
        <span class="form-error" id="email-error"></span>
      </div>

      <!-- Password -->
      <div class="form-group">
        <div class="input-wrapper">
          <span class="form-label">Password</span>
          <input class="form-input" id="signup-pass" type="password" placeholder=" " autocomplete="new-password"
            style="padding-right:3.2rem;" oninput="validateField('signup-pass', 'password')"
            onblur="validateField('signup-pass', 'password')" />
          <button type="button" class="toggle-pass" id="toggle-pass-1" aria-label="Toggle password visibility">
            <svg viewBox="0 0 24 24" class="eye-icon">
              <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
              <circle cx="12" cy="12" r="3" />
            </svg>
          </button>
        </div>
        <span class="form-error" id="pass-error"></span>
      </div>

      <!-- Confirm Password -->
      <div class="form-group">
        <div class="input-wrapper">
          <span class="form-label">Confirm Password</span>
          <input class="form-input" id="signup-confirm" type="password" placeholder=" " autocomplete="new-password"
            style="padding-right:3.2rem;" oninput="validateField('signup-confirm', 'confirm')"
            onblur="validateField('signup-confirm', 'confirm')" />
          <button type="button" class="toggle-pass" id="toggle-pass-2" aria-label="Toggle password visibility">
            <svg viewBox="0 0 24 24" class="eye-icon">
              <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
              <circle cx="12" cy="12" r="3" />
            </svg>
          </button>
        </div>
        <span class="form-error" id="confirm-error"></span>
      </div>

      <!-- Create Account Button (#232323) -->
      <button type="submit" class="btn btn-primary">Create Account</button>
    </form>

    <!-- Divider -->
    <div class="divider">or</div>

    <!-- Social (same radius as inputs) -->
    <button class="social-btn" type="button" onclick="showToast('Apple sign-in is not connected yet', 'info')">
      <span class="social-icon">
        <img src="assets/apple.png" alt="Apple" />
      </span>
      Continue with Apple
    </button>

    <button class="social-btn" type="button" onclick="showToast('Google sign-in is not connected yet', 'info')">
      <span class="social-icon">
        <img src="assets/google.png" alt="Google" />
      </span>
      Continue with Google
    </button>

    <!-- Footer -->
    <p class="signin-copy">
      Already have an account? <a href="login.php">SIGN IN</a>
    </p>
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
    document.querySelectorAll('.toggle-pass').forEach(function(btn) {
      btn.addEventListener('click', function() {
        const input = this.closest('.input-wrapper').querySelector('input');
        if (!input) return;
        const isPass = input.type === 'password';
        input.type = isPass ? 'text' : 'password';
        const eyeOpen =
          `<svg viewBox="0 0 24 24" class="eye-icon"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>`;
        const eyeClosed =
          `<svg viewBox="0 0 24 24" class="eye-icon"><path d="M17.94 17.94A10.07 10.07 0 0112 20c-7 0-11-8-11-8a18.45 18.45 0 015.06-5.94"/><path d="M9.9 4.24A9.12 9.12 0 0112 4c7 0 11 8 11 8a18.5 18.5 0 01-2.16 3.19"/><line x1="1" y1="1" x2="23" y2="23"/></svg>`;
        this.innerHTML = isPass ? eyeClosed : eyeOpen;
      });
    });

    function validateField(fieldId, type) {
      const field = document.getElementById(fieldId);
      const errorEl = document.getElementById(fieldId + '-error');
      const value = field.value.trim();
      field.classList.remove('error', 'valid');
      errorEl.textContent = '';
      if (value === '') return;
      let isValid = true;
      if (type === 'name') {
        if (value.length < 2) {
          isValid = false;
          errorEl.textContent = 'Name must be at least 2 characters.';
        }
      } else if (type === 'email') {
        if (!value.includes('@')) {
          isValid = false;
          errorEl.textContent = 'Please enter a valid email address.';
        }
      } else if (type === 'password') {
        if (value.length < 6) {
          isValid = false;
          errorEl.textContent = 'Password must be at least 6 characters.';
        }
      } else if (type === 'confirm') {
        const passField = document.getElementById('signup-pass');
        if (value !== passField.value) {
          isValid = false;
          errorEl.textContent = 'Passwords do not match.';
        }
      }
      if (isValid) {
        field.classList.add('valid');
      } else {
        field.classList.add('error');
      }
    }

    function handleSignup(e) {
      e.preventDefault();
      validateField('signup-name', 'name');
      validateField('signup-email', 'email');
      validateField('signup-pass', 'password');
      validateField('signup-confirm', 'confirm');
      const name = document.getElementById('signup-name').value.trim();
      const email = document.getElementById('signup-email').value.trim();
      const pass = document.getElementById('signup-pass').value;
      const confirm = document.getElementById('signup-confirm').value;
      let hasError = false;
      if (!name) {
        document.getElementById('signup-name').classList.add('error');
        document.getElementById('name-error').textContent = 'Name is required.';
        hasError = true;
      }
      if (!email) {
        document.getElementById('signup-email').classList.add('error');
        document.getElementById('email-error').textContent = 'Email is required.';
        hasError = true;
      }
      if (!pass) {
        document.getElementById('signup-pass').classList.add('error');
        document.getElementById('pass-error').textContent = 'Password is required.';
        hasError = true;
      }
      if (!confirm) {
        document.getElementById('signup-confirm').classList.add('error');
        document.getElementById('confirm-error').textContent = 'Please confirm your password.';
        hasError = true;
      }
      const errors = document.querySelectorAll('.form-error');
      errors.forEach(el => {
        if (el.textContent !== '') hasError = true;
      });
      if (hasError) return;
      if (name) localStorage.setItem('archUserName', name);
      if (email) localStorage.setItem('archUserEmail', email);
      alert('Account created! Redirecting…');
    }
  </script>

</body>

</html>