<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile — Royals Arch Brow</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
  <style>
    /* … (all your existing CSS, unchanged) … */
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

    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
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

    /* ====== LAYOUT ====== */
    .main {
      max-width: 100%;
      margin: 0 auto;
      padding: 0 3rem 2.5rem;
      display: flex;
      flex-direction: column;
      gap: 1.75rem;
    }

    /* ====== PROFILE HEADER ====== */
    .profile-header {
      display: flex;
      align-items: center;
      gap: 1.5rem;
      padding-bottom: 1.5rem;
      border-bottom: 1px solid var(--border);
    }

    .profile-avatar-large {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      background: var(--dark-card);
      border: 2px solid var(--gold);
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: var(--font-display);
      font-size: 1.8rem;
      color: var(--gold);
      flex-shrink: 0;
    }

    .profile-name {
      font-family: var(--font-display);
      font-size: 2rem;
      font-weight: 400;
      color: var(--white);
    }

    .profile-email {
      font-size: 0.8rem;
      color: var(--white-dim);
    }

    /* ====== SECTION LABEL ====== */
    .section-label {
      font-size: 0.62rem;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 0.875rem;
      font-weight: 500;
    }

    /* ====== PROFILE TAGS ====== */
    .profile-tags {
      display: grid;
      gap: 0.5rem;
    }

    .profile-tag-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0.75rem 1rem;
      border-radius: var(--radius-sm);
      background: #161610;
      border: 1px solid rgba(201, 168, 76, 0.14);
    }

    .profile-tag-key {
      font-size: 0.7rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--white-dim);
    }

    .profile-tag-val {
      font-size: 0.85rem;
      color: var(--gold);
    }

    /* ====== APPOINTMENT CARD ====== */
    .appt-card {
      background: #161610;
      border: 1px solid rgba(201, 168, 76, 0.14);
      border-radius: var(--radius);
      padding: 1.25rem 1.75rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      transition: all var(--transition);
    }

    .appt-card:hover {
      border-color: var(--gold-dark);
      transform: translateY(-1px);
    }

    .appt-label {
      font-size: 0.58rem;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--white-dim);
      margin-bottom: 0.35rem;
    }

    .appt-date {
      font-family: var(--font-display);
      font-size: 1.2rem;
      font-weight: 400;
      color: var(--white);
    }

    .btn-small {
      padding: 0.4rem 1rem;
      border-radius: 50px;
      border: 1px solid var(--border);
      background: transparent;
      color: var(--gold);
      font-size: 0.6rem;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      cursor: pointer;
      transition: all var(--transition);
      font-family: var(--font-body);
    }

    .btn-small:hover {
      border-color: var(--gold);
      background: rgba(201, 168, 76, 0.06);
    }

    /* ====== BUTTONS ====== */
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
      transition: all var(--transition);
      cursor: pointer;
      border: none;
      font-family: var(--font-body);
    }

    .btn-secondary {
      background: transparent;
      border: 1px solid rgba(255,255,255,0.12);
      color: var(--white);
    }

    .btn-secondary:hover {
      border-color: var(--gold);
      color: var(--gold);
    }

    .btn-danger {
      background: transparent;
      border: 1px solid rgba(139,32,32,0.4);
      color: #e05c5c;
    }

    .btn-danger:hover {
      border-color: #e05c5c;
      background: rgba(139,32,32,0.08);
    }

    /* ====== MY LOOKS ====== */
    .my-looks-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 0.75rem;
    }

    .my-looks-title {
      font-family: var(--font-display);
      font-size: 1.6rem;
      font-weight: 400;
      color: var(--white);
    }

    .share-btn {
      padding: 0.4rem 1rem;
      border-radius: 50px;
      border: 1px solid var(--border);
      background: transparent;
      color: var(--white-dim);
      font-size: 0.6rem;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      cursor: pointer;
      transition: all var(--transition);
      font-family: var(--font-body);
    }

    .share-btn:hover {
      border-color: var(--gold);
      color: var(--gold);
    }

    .look-nav {
      display: flex;
      gap: 1.5rem;
      margin-bottom: 1rem;
      overflow-x: auto;
      padding-bottom: 0.25rem;
    }

    .look-nav a {
      font-size: 0.7rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--white-dim);
      text-decoration: none;
      transition: color var(--transition);
      white-space: nowrap;
    }

    .look-nav a.active {
      color: var(--gold);
    }

    .look-nav a:hover {
      color: var(--gold);
    }

    .looks-grid {
      display: grid;
      gap: 0.75rem;
      margin-bottom: 1rem;
    }

    .look-card {
      padding: 1rem 1.25rem;
      border-radius: var(--radius-sm);
      background: #161610;
      border: 1px solid rgba(201, 168, 76, 0.14);
      display: flex;
      align-items: center;
      justify-content: space-between;
      transition: all var(--transition);
    }

    .look-card:hover {
      border-color: var(--gold-dark);
    }

    .look-placeholder {
      font-size: 0.75rem;
      color: var(--white-dim);
      margin-bottom: 0.25rem;
    }

    .look-name {
      font-family: var(--font-display);
      font-size: 1.1rem;
      color: var(--white);
    }

    .look-meta {
      font-size: 0.7rem;
      color: var(--white-dim);
      margin-top: 0.25rem;
    }

    .look-arrow {
      color: var(--white-dim);
      font-size: 1.1rem;
      margin-left: 0.75rem;
    }

    .create-btn {
      width: 100%;
      padding: 0.85rem;
      border-radius: 999px;
      border: 1px solid var(--border);
      background: transparent;
      color: var(--white);
      font-size: 0.75rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      cursor: pointer;
      transition: all var(--transition);
      font-family: var(--font-body);
    }

    .create-btn:hover {
      border-color: var(--gold);
      color: var(--gold);
    }

    /* ====== ANIMATIONS ====== */
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(16px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .fade-1 { animation: fadeUp 0.55s ease 0.05s both; }
    .fade-2 { animation: fadeUp 0.55s ease 0.15s both; }
    .fade-3 { animation: fadeUp 0.55s ease 0.25s both; }
    .fade-4 { animation: fadeUp 0.55s ease 0.35s both; }
    .fade-5 { animation: fadeUp 0.55s ease 0.45s both; }

    /* ====== RESPONSIVE ====== */
    @media (max-width: 900px) {
      .main { padding: 0 1.25rem 1.5rem; }
      .navbar { padding: 0.875rem 1.25rem; }
      .navbar-nav { display: none; }
      .profile-header { flex-direction: column; align-items: center; text-align: center; gap: 0.5rem; }
      .profile-name { font-size: 1.6rem; }
      .profile-avatar-large { width: 64px; height: 64px; }
      .appt-card { flex-direction: column; align-items: flex-start; gap: 0.75rem; }
      .btn-small { align-self: flex-start; }
      .back-btn { width: 38px; height: 38px; }
      .page-logo { width: 38px; height: 38px; }
      .row { grid-template-columns: 1fr; }
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

    <!-- PAGE TOPBAR -->
    <div class="page-topbar fade-1">
      <a href="javascript:history.back()" class="back-btn" aria-label="Go back">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="19" y1="12" x2="5" y2="12"></line>
          <polyline points="12 19 5 12 12 5"></polyline>
        </svg>
      </a>
      <div class="page-title-center">Profile</div>
    </div>

    <!-- PROFILE HEADER -->
    <div class="profile-header fade-2">
      <div class="profile-avatar-large">MJ</div>
      <div>
        <div class="profile-name">Mary Johnson</div>
        <div class="profile-email">mary@gmail.com</div>
      </div>
    </div>

    <!-- BROW PROFILE -->
    <div class="fade-3">
      <div class="section-label">GENERAL</div>
      <div class="profile-tags">
        <div class="profile-tag-row">
          <span class="profile-tag-key">Skin Tone</span>
          <span class="profile-tag-val">Medium Warm</span>
        </div>
        <div class="profile-tag-row">
          <span class="profile-tag-key">Brow Goal</span>
          <span class="profile-tag-val">Colour</span>
        </div>
        <div class="profile-tag-row">
          <span class="profile-tag-key">Style Direction</span>
          <span class="profile-tag-val">Refined & Natural</span>
        </div>
      </div>
    </div>

    <!-- APPOINTMENT -->
    <div class="fade-4">
      <div class="section-label">Upcoming Appointment</div>
      <div class="appt-card">
        <div>
          <div class="appt-label">Confirmed</div>
          <div class="appt-date">April 5, 2026 · 3:30 PM</div>
        </div>
        <button class="btn-small">Manage</button>
      </div>
    </div>

    <!-- ACTIONS -->
    <div class="actions fade-4">
      <button class="btn btn-secondary">Edit Brow Profile</button>
      <button class="btn btn-secondary" onclick="location.href='change-password.php'">Change Password</button>
      <button class="btn btn-secondary">Privacy Settings</button>
      <button class="btn btn-danger" id="delete-account-btn">Delete Account</button>
      <button class="btn btn-danger" id="sign-out-btn">Sign Out</button>
    </div>

    <!-- MY LOOKS -->
    <div class="fade-5">
      <div class="my-looks-header">
        <h2 class="my-looks-title">My Looks</h2>
        <button class="share-btn">Share →</button>
      </div>

      <div class="look-nav">
        <a href="#" class="active">All</a>
        <a href="#">Style</a>
        <a href="#">Guides</a>
        <a href="#">Kits</a>
        <a href="#">Saved</a>
      </div>

      <div class="looks-grid">
        <div class="look-card">
          <div>
            <div class="look-placeholder">Image Placeholder.</div>
            <div class="look-name">My everyday arch</div>
            <div class="look-meta">15 May · Arch · Dark Brown</div>
          </div>
          <div class="look-arrow">→</div>
        </div>

        <div class="look-card">
          <div>
            <div class="look-placeholder">Image Placeholder.</div>
            <div class="look-name">My everyday arch</div>
            <div class="look-meta">15 May · Arch · Dark Brown</div>
          </div>
          <div class="look-arrow">→</div>
        </div>

        <div class="look-card">
          <div>
            <div class="look-placeholder">Image Placeholder.</div>
            <div class="look-name">My everyday arch</div>
            <div class="look-meta">15 May · Arch · Dark Brown</div>
          </div>
          <div class="look-arrow">→</div>
        </div>
      </div>

      <button class="create-btn">Create a new look +</button>
    </div>

  </main>

  <script>
    const API_BASE = '<?php echo $API_URL; ?>';
    const token = localStorage.getItem('archAccessToken');

    // Sign Out
    document.getElementById('sign-out-btn').addEventListener('click', async function() {
      if (!token) {
        window.location.href = 'login.php';
        return;
      }

      const confirmSignOut = confirm('Are you sure you want to sign out?');
      if (!confirmSignOut) return;

      // Disable button to prevent double-click
      const btn = document.getElementById('sign-out-btn');
      btn.disabled = true;
      btn.textContent = 'Signing out...';

      try {
        const response = await fetch(`${API_BASE}/auth/logout`, {
          method: 'POST',
          headers: {
            'accept': 'application/json',
            'Authorization': `Bearer ${token}`
          }
        });

        // Clear local storage regardless of API response
        localStorage.removeItem('archAccessToken');
        localStorage.removeItem('archUserEmail');
        localStorage.removeItem('archUserName');
        
        if (response.ok) {
          window.location.href = 'login.php';
        } else {
          // Even if API fails, we still log out locally
          console.warn('Logout API call failed, but local session cleared');
          window.location.href = 'login.php';
        }
      } catch (err) {
        console.error('Logout error:', err);
        // Clear local storage even on network error
        localStorage.removeItem('archAccessToken');
        localStorage.removeItem('archUserEmail');
        localStorage.removeItem('archUserName');
        window.location.href = 'login.php';
      } finally {
        btn.disabled = false;
        btn.textContent = 'Sign Out';
      }
    });

    // Delete Account
    document.getElementById('delete-account-btn').addEventListener('click', async function() {
      if (!token) {
        alert('You are not logged in.');
        return;
      }

      const confirmDelete = confirm('Are you absolutely sure you want to delete your account? This action cannot be undone.');
      if (!confirmDelete) return;

      // Disable button to prevent double-click
      const btn = document.getElementById('delete-account-btn');
      btn.disabled = true;
      btn.textContent = 'Deleting...';

      try {
        const response = await fetch(`${API_BASE}/auth/account`, {
          method: 'DELETE',
          headers: {
            'accept': 'application/json',
            'Authorization': `Bearer ${token}`
          }
        });

        if (response.ok) {
          // Success – clear local storage and redirect
          localStorage.removeItem('archAccessToken');
          localStorage.removeItem('archUserEmail');
          localStorage.removeItem('archUserName');
          alert('Your account has been deleted.');
          window.location.href = 'signup.php';
        } else {
          const data = await response.json().catch(() => ({}));
          const errorMsg = data.detail || 'Failed to delete account. Please try again.';
          alert(errorMsg);
        }
      } catch (err) {
        console.error(err);
        alert('Network error. Could not delete account. Please try again later.');
      } finally {
        btn.disabled = false;
        btn.textContent = 'Delete Account';
      }
    });
  </script>

</body>
</html>