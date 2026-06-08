<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Change Password — Royals Arch Brow</title>
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
      --gold: #c9a84c;
      --gold-light: #d4b96a;
      --gold-dark: #8a6f2e;
      --gold-muted: rgba(201, 168, 76, 0.12);
      --white: #f5f0e8;
      --white-dim: rgba(245, 240, 232, 0.55);
      --border: rgba(201, 168, 76, 0.18);
      --font-display: 'Cormorant Garamond', serif;
      --font-body: 'Montserrat', sans-serif;
      --radius: 18px;
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

    .navbar-nav {
      display: flex;
      align-items: center;
      gap: 2.5rem;
      list-style: none;
      margin: 0;
      padding: 0;
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

    .navbar-actions {
      display: flex;
      align-items: center;
      gap: 1rem;
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

    .nav-gold-rule {
      height: 1px;
      background: linear-gradient(to right, transparent 0%, var(--gold-dark) 30%, var(--gold-dark) 70%, transparent 100%);
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

    .main {
      max-width: 100%;
      margin: 0 auto;
      padding: 0 3rem 2.5rem;
      display: flex;
      flex-direction: column;
      gap: 1.75rem;
    }

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
      border: 1px solid #333;
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
      border-color: #c9a84c;
      background: rgba(201, 168, 76, 0.1);
    }

    .form-input:hover+.form-label,
    .form-input:focus+.form-label {
      color: var(--gold-light);
    }

    .form-input.valid {
      border-color: var(--gold);
      background: rgba(255, 255, 255, 0.03);
    }

    .form-input.valid+.form-label {
      color: var(--gold);
    }

    .form-input.error {
      border-color: #e05c5c;
      background: rgba(139, 32, 32, 0.1);
    }

    .form-input.error+.form-label {
      color: #e05c5c;
    }

    .form-error {
      font-size: 0.65rem;
      color: #e05c5c;
      letter-spacing: 0.05em;
      padding-left: 4px;
      min-height: 1.3em;
    }

    .server-message {
      text-align: center;
      font-size: 0.8rem;
      margin-top: 0.5rem;
      min-height: 1.2em;
    }

    .server-message.error {
      color: #e05c5c;
    }

    .server-message.success {
      color: var(--gold-light);
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
      gap: 0.5rem;
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
      background: #c9a84c;
      color: var(--white);
    }

    .btn-primary:hover {
      color: var(--black);
      box-shadow: 0 8px 30px rgba(201, 168, 76, 0.4);
      transform: translateY(-2px);
    }

    .btn:disabled {
      opacity: 0.6;
      cursor: not-allowed;
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

      .forgot-card {
        padding: 1.5rem;
      }

      .form-heading h1 {
        font-size: 1.8rem;
      }

      .form-input {
        min-height: 60px;
        font-size: 0.9rem;
        padding: 1.4rem 1rem 0.6rem 1rem;
      }

      .form-label {
        font-size: 0.5rem;
        top: 0.45rem;
        left: 1rem;
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

  <div class="nav-gold-rule"></div>

  <main class="main">

    <div class="page-topbar fade-1">
      <a href="javascript:history.back()" class="back-btn" aria-label="Go back">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
          stroke-linecap="round" stroke-linejoin="round">
          <line x1="19" y1="12" x2="5" y2="12"></line>
          <polyline points="12 19 5 12 12 5"></polyline>
        </svg>
      </a>
      <div class="page-title-center">Change Password</div>
    </div>

    <div class="fade-2">
      <div class="page-label">Update Access</div>
      <div class="page-title">Set a stronger password.</div>
    </div>

    <div class="forgot-card fade-3">
      <div class="form-heading">
        <h1>Change your<br />password.</h1>
        <p>Enter your current and new password to update.</p>
      </div>

      <form class="forgot-form" id="change-form" onsubmit="handleChangePassword(event)" novalidate>
        <!-- Current Password -->
        <div class="form-group">
          <div class="input-wrapper">
            <span class="form-label">Current Password</span>
            <input class="form-input" id="current-password" type="password" placeholder=" "
              autocomplete="current-password" oninput="validateField('current-password', 'current')"
              onblur="validateField('current-password', 'current')" />
          </div>
          <span class="form-error" id="current-password-error"></span>
        </div>

        <!-- New Password -->
        <div class="form-group">
          <div class="input-wrapper">
            <span class="form-label">New Password</span>
            <input class="form-input" id="new-password" type="password" placeholder=" " autocomplete="new-password"
              oninput="validateField('new-password', 'password')" onblur="validateField('new-password', 'password')" />
          </div>
          <span class="form-error" id="new-password-error"></span>
        </div>

        <!-- Confirm New Password -->
        <div class="form-group">
          <div class="input-wrapper">
            <span class="form-label">Confirm New Password</span>
            <input class="form-input" id="confirm-password" type="password" placeholder=" " autocomplete="new-password"
              oninput="validateField('confirm-password', 'confirm')"
              onblur="validateField('confirm-password', 'confirm')" />
          </div>
          <span class="form-error" id="confirm-password-error"></span>
        </div>

        <!-- Server Message -->
        <div id="server-message" class="server-message" style="display:none;"></div>

        <p class="spam-notice">
          Choose any password you like — no minimum length required.
        </p>

        <div class="actions">
          <button type="submit" class="btn btn-primary" id="submit-btn">
            <span id="btn-text">Update Password</span>
            <span id="btn-spinner" style="display:none;">⏳</span>
          </button>
          <a href="login.php" class="back-link">Back to Sign In</a>
        </div>
      </form>

      <p class="bottom-note">Your safety is our priority.</p>
    </div>

  </main>

  <script>
    // Get token using the SAME key as login page: 'archAccessToken'
    function getAuthToken() {
      return localStorage.getItem('archAccessToken') || '';
    }

    function validateField(fieldId, type) {
      const field = document.getElementById(fieldId);
      const errorEl = document.getElementById(fieldId + '-error');
      if (!field || !errorEl) return;
      const value = field.value.trim();
      field.classList.remove('error', 'valid');
      errorEl.textContent = '';
      if (value === '') return;
      let isValid = true;
      if (type === 'current') {
        isValid = value.length > 0;
        if (!isValid) {
          errorEl.textContent = 'Current password is required.';
        }
      } else if (type === 'password') {
        isValid = value.length > 0;
        if (!isValid) {
          errorEl.textContent = 'New password is required.';
        }
      } else if (type === 'confirm') {
        const original = document.getElementById('new-password').value.trim();
        isValid = value === original;
        if (!isValid) {
          errorEl.textContent = 'Passwords must match.';
        }
      }
      if (isValid) {
        field.classList.add('valid');
      } else {
        field.classList.add('error');
      }
    }
    async function handleChangePassword(event) {
      event.preventDefault();
      const serverMsg = document.getElementById('server-message');
      serverMsg.style.display = 'none';
      serverMsg.className = 'server-message';
      serverMsg.textContent = '';
      validateField('current-password', 'current');
      validateField('new-password', 'password');
      validateField('confirm-password', 'confirm');
      const currentPassword = document.getElementById('current-password').value.trim();
      const newPassword = document.getElementById('new-password').value.trim();
      const confirmPassword = document.getElementById('confirm-password').value.trim();
      let hasError = false;
      if (!currentPassword) {
        document.getElementById('current-password').classList.add('error');
        document.getElementById('current-password-error').textContent = 'Current password is required.';
        hasError = true;
      }
      if (!newPassword) {
        document.getElementById('new-password').classList.add('error');
        document.getElementById('new-password-error').textContent = 'New password is required.';
        hasError = true;
      }
      if (!confirmPassword) {
        document.getElementById('confirm-password').classList.add('error');
        document.getElementById('confirm-password-error').textContent = 'Please confirm your new password.';
        hasError = true;
      } else if (newPassword && confirmPassword !== newPassword) {
        document.getElementById('confirm-password').classList.add('error');
        document.getElementById('confirm-password-error').textContent = 'Passwords do not match.';
        hasError = true;
      }
      if (currentPassword && newPassword && currentPassword === newPassword) {
        document.getElementById('new-password').classList.add('error');
        document.getElementById('new-password-error').textContent =
          'New password must be different from current password.';
        hasError = true;
      }
      if (hasError) return;
      // Get token using SAME key as login page
      const authToken = getAuthToken();
      if (!authToken) {
        serverMsg.textContent = 'You are not logged in. Please sign in first.';
        serverMsg.classList.add('error');
        serverMsg.style.display = 'block';
        setTimeout(() => {
          window.location.href = 'login.php';
        }, 2000);
        return;
      }
      // Show loading state
      const submitBtn = document.getElementById('submit-btn');
      const btnText = document.getElementById('btn-text');
      const btnSpinner = document.getElementById('btn-spinner');
      submitBtn.disabled = true;
      btnText.style.display = 'none';
      btnSpinner.style.display = 'inline';
      try {
        // API Call: PUT /auth/change-password
        const response = await fetch('<?php echo $API_URL; ?>/auth/change-password', {
          method: 'PUT',
          headers: {
            'accept': 'application/json',
            'Content-Type': 'application/json',
            'Authorization': 'Bearer ' + authToken
          },
          body: JSON.stringify({
            current_password: currentPassword,
            new_password: newPassword
          })
        });
        // Handle 401 Unauthorized
        if (response.status === 401) {
          serverMsg.textContent = 'Session expired. Please sign in again.';
          serverMsg.classList.add('error');
          serverMsg.style.display = 'block';
          // Clear invalid token
          localStorage.removeItem('archAccessToken');
          localStorage.removeItem('archUserEmail');
          setTimeout(() => {
            window.location.href = 'login.php';
          }, 2000);
          return;
        }
        const data = await response.json();
        if (!response.ok) {
          let errorMsg = 'Password change failed. Please try again.';
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
        // Success
        serverMsg.textContent = data.message || 'Password changed successfully! Redirecting to login…';
        serverMsg.classList.add('success');
        serverMsg.style.display = 'block';
        // Clear stored data (force re-login with new password)
        localStorage.removeItem('archAccessToken');
        localStorage.removeItem('archUserEmail');
        setTimeout(() => {
          window.location.href = 'profile.php';
        }, 2000);
      } catch (err) {
        console.error('Change password error:', err);
        serverMsg.textContent = 'Network error. Please check your connection and try again.';
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