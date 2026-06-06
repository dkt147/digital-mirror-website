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
    /* … (your entire existing CSS, unchanged) … */
    :root {
      --black: #0a0a08;
      --dark: #111111;
      --dark-card: #161610;
      --gold: #c9a84c;
      --gold-light: #d4b96a;
      --gold-dark: #8a6f2e;
      --gold-muted: rgba(201, 168, 76, 0.10);
      --white: #f5f0e8;
      --white-dim: rgba(245, 240, 232, 0.55);
      --white-faint: rgba(245, 240, 232, 0.12);
      --border: rgba(201, 168, 76, 0.16);
      --border-hover: rgba(201, 168, 76, 0.40);
      --font-display: 'Cormorant Garamond', serif;
      --font-body: 'Montserrat', sans-serif;
      --radius: 16px;
      --radius-sm: 10px;
      --transition: 0.35s cubic-bezier(0.4, 0, 0.2, 1);
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

    ::-webkit-scrollbar { width: 4px; }
    ::-webkit-scrollbar-track { background: var(--black); }
    ::-webkit-scrollbar-thumb { background: var(--gold-dark); border-radius: 10px; }

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

    .profile-card {
      background: var(--dark-card);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      padding: 2rem 2rem 1.75rem;
      display: flex;
      align-items: center;
      gap: 1.75rem;
      position: relative;
      overflow: hidden;
      transition: border-color var(--transition);
    }
    .profile-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 2px;
      background: linear-gradient(90deg, transparent, var(--gold), transparent);
      opacity: 0.6;
    }
    .profile-card:hover {
      border-color: var(--border-hover);
    }
    .profile-avatar-large {
      width: 84px;
      height: 84px;
      border-radius: 50%;
      background: #1c1c12;
      border: 2px solid var(--gold);
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: var(--font-display);
      font-size: 2rem;
      color: var(--gold);
      flex-shrink: 0;
      box-shadow: 0 0 30px rgba(201, 168, 76, 0.06);
    }
    .profile-info {
      flex: 1;
      min-width: 0;
    }
    .profile-name {
      font-family: var(--font-display);
      font-size: 2.2rem;
      font-weight: 400;
      color: var(--white);
      line-height: 1.2;
      letter-spacing: 0.02em;
    }
    .profile-email {
      font-size: 0.82rem;
      color: var(--white-dim);
      margin-top: 0.1rem;
    }
    .profile-badge {
      display: inline-block;
      margin-top: 0.4rem;
      padding: 0.15rem 0.9rem;
      border-radius: 50px;
      border: 1px solid var(--gold-dark);
      font-size: 0.55rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--gold);
      background: rgba(201, 168, 76, 0.06);
    }

    .section-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 0.9rem;
    }
    .section-label {
      font-size: 0.6rem;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: var(--gold);
      font-weight: 500;
    }
    .section-edit {
      font-size: 0.6rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--white-dim);
      transition: color var(--transition);
      cursor: pointer;
    }
    .section-edit:hover {
      color: var(--gold);
    }

    .brow-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 0.6rem;
    }
    .brow-tag {
      background: var(--dark-card);
      border: 1px solid var(--border);
      border-radius: var(--radius-sm);
      padding: 0.9rem 1rem;
      text-align: center;
      transition: all var(--transition);
    }
    .brow-tag:hover {
      border-color: var(--border-hover);
      transform: translateY(-1px);
    }
    .brow-tag-key {
      font-size: 0.55rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--white-dim);
      margin-bottom: 0.2rem;
    }
    .brow-tag-val {
      font-size: 0.85rem;
      color: var(--gold);
      font-weight: 400;
      font-family: var(--font-display);
    }

    .appt-card {
      background: var(--dark-card);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      padding: 1.25rem 1.75rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      transition: all var(--transition);
      position: relative;
      overflow: hidden;
    }
    .appt-card::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      bottom: 0;
      width: 3px;
      background: var(--gold);
      opacity: 0.5;
      border-radius: 0 2px 2px 0;
    }
    .appt-card:hover {
      border-color: var(--border-hover);
      transform: translateY(-2px);
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
    }
    .appt-left {
      display: flex;
      align-items: center;
      gap: 1.25rem;
    }
    .appt-icon {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: rgba(201, 168, 76, 0.08);
      border: 1px solid var(--border);
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--gold);
      flex-shrink: 0;
    }
    .appt-label {
      font-size: 0.55rem;
      letter-spacing: 0.16em;
      text-transform: uppercase;
      color: var(--white-dim);
      margin-bottom: 0.1rem;
    }
    .appt-date {
      font-family: var(--font-display);
      font-size: 1.2rem;
      font-weight: 400;
      color: var(--white);
    }
    .btn-small {
      padding: 0.4rem 1.2rem;
      border-radius: 50px;
      border: 1px solid var(--border);
      background: transparent;
      color: var(--gold);
      font-size: 0.6rem;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      transition: all var(--transition);
      font-family: var(--font-body);
      flex-shrink: 0;
    }
    .btn-small:hover {
      border-color: var(--gold);
      background: rgba(201, 168, 76, 0.08);
    }

    .actions-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 0.6rem;
    }
    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      padding: 0.75rem 1rem;
      border-radius: var(--radius-sm);
      font-size: 0.7rem;
      letter-spacing: 0.08em;
      font-weight: 500;
      transition: all var(--transition);
      border: 1px solid var(--border);
      background: var(--dark-card);
      color: var(--white);
      font-family: var(--font-body);
    }
    .btn:hover {
      border-color: var(--gold);
      color: var(--gold);
      background: rgba(201, 168, 76, 0.04);
      transform: translateY(-1px);
    }
    .btn-icon {
      font-size: 1rem;
      line-height: 1;
    }
    .btn-danger {
      border-color: rgba(139, 32, 32, 0.3);
      color: #e05c5c;
      background: rgba(139, 32, 32, 0.04);
    }
    .btn-danger:hover {
      border-color: #e05c5c;
      background: rgba(139, 32, 32, 0.08);
      color: #e05c5c;
    }
    .btn-danger .btn-icon {
      color: #e05c5c;
    }

    .looks-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 0.5rem;
      margin-bottom: 0.9rem;
    }
    .looks-title {
      font-family: var(--font-display);
      font-size: 1.6rem;
      font-weight: 400;
      color: var(--white);
      line-height: 1.2;
    }
    .looks-actions {
      display: flex;
      align-items: center;
      gap: 0.75rem;
    }
    .share-btn {
      padding: 0.35rem 1rem;
      border-radius: 50px;
      border: 1px solid var(--border);
      background: transparent;
      color: var(--white-dim);
      font-size: 0.6rem;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      transition: all var(--transition);
      font-family: var(--font-body);
    }
    .share-btn:hover {
      border-color: var(--gold);
      color: var(--gold);
    }
    .look-nav {
      display: flex;
      gap: 0.3rem;
      margin-bottom: 1rem;
      overflow-x: auto;
      padding-bottom: 0.2rem;
      scrollbar-width: none;
    }
    .look-nav::-webkit-scrollbar {
      display: none;
    }
    .look-nav a {
      padding: 0.3rem 1.2rem;
      border-radius: 50px;
      font-size: 0.6rem;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: var(--white-dim);
      border: 1px solid transparent;
      transition: all var(--transition);
      white-space: nowrap;
      font-weight: 400;
    }
    .look-nav a.active {
      border-color: var(--gold);
      color: var(--gold);
      background: rgba(201, 168, 76, 0.06);
    }
    .look-nav a:hover {
      color: var(--gold);
      border-color: var(--border);
    }
    .looks-grid {
      display: grid;
      gap: 0.6rem;
      margin-bottom: 0.9rem;
    }
    .look-card {
      background: var(--dark-card);
      border: 1px solid var(--border);
      border-radius: var(--radius-sm);
      padding: 0.9rem 1.25rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      transition: all var(--transition);
    }
    .look-card:hover {
      border-color: var(--border-hover);
      transform: translateX(3px);
    }
    .look-card-left {
      display: flex;
      align-items: center;
      gap: 1rem;
    }
    .look-thumb {
      width: 44px;
      height: 44px;
      border-radius: var(--radius-sm);
      background: #1c1c12;
      border: 1px solid var(--border);
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--white-dim);
      font-size: 0.7rem;
      flex-shrink: 0;
    }
    .look-name {
      font-family: var(--font-display);
      font-size: 1.05rem;
      color: var(--white);
      line-height: 1.2;
    }
    .look-meta {
      font-size: 0.65rem;
      color: var(--white-dim);
      margin-top: 0.05rem;
    }
    .look-arrow {
      color: var(--white-dim);
      font-size: 1rem;
      transition: all var(--transition);
    }
    .look-card:hover .look-arrow {
      color: var(--gold);
      transform: translateX(3px);
    }
    .create-btn {
      width: 100%;
      padding: 0.8rem;
      border-radius: var(--radius-sm);
      border: 1px dashed var(--border);
      background: transparent;
      color: var(--white-dim);
      font-size: 0.7rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      transition: all var(--transition);
      font-family: var(--font-body);
    }
    .create-btn:hover {
      border-color: var(--gold);
      color: var(--gold);
      background: rgba(201, 168, 76, 0.04);
    }

    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(18px); }
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
      .profile-card { flex-direction: column; align-items: center; text-align: center; gap: 0.5rem; padding: 1.75rem 1.25rem; }
      .profile-name { font-size: 1.6rem; }
      .profile-avatar-large { width: 64px; height: 64px; }
      .appt-card { flex-direction: column; align-items: flex-start; gap: 0.75rem; }
      .btn-small { align-self: flex-start; }
      .back-btn { width: 38px; height: 38px; }
      .page-logo { width: 38px; height: 38px; }
      .brow-grid { grid-template-columns: 1fr 1fr; }
      .actions-grid { grid-template-columns: 1fr; }
    }
    @media (max-width: 480px) {
      .brow-grid { grid-template-columns: 1fr; }
      .profile-name { font-size: 1.4rem; }
      .profile-card { padding: 1.25rem 1rem; }
      .profile-avatar-large { width: 56px; height: 56px; font-size: 1.4rem; }
      .main { padding: 0 0.9rem 1.5rem; gap: 1.5rem; }
      .appt-date { font-size: 1rem; }
      .looks-header { flex-direction: column; align-items: flex-start; }
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

    <!-- PROFILE CARD (dynamic data) -->
    <div class="profile-card fade-2">
      <div class="profile-avatar-large" id="profile-avatar">—</div>
      <div class="profile-info">
        <div class="profile-name" id="profile-name">—</div>
        <div class="profile-email" id="profile-email">—</div>
        <span class="profile-badge">✦ Considered Member</span>
      </div>
    </div>

    <!-- BROW PROFILE (unchanged) -->
    <div class="fade-3">
      <div class="section-header">
        <div class="section-label">GENERAL</div>
        <span class="section-edit">Edit →</span>
      </div>
      <div class="brow-grid">
        <div class="brow-tag">
          <div class="brow-tag-key">Skin Tone</div>
          <div class="brow-tag-val">Medium Warm</div>
        </div>
        <div class="brow-tag">
          <div class="brow-tag-key">Brow Goal</div>
          <div class="brow-tag-val">Colour</div>
        </div>
        <div class="brow-tag">
          <div class="brow-tag-key">Style Direction</div>
          <div class="brow-tag-val">Refined &amp; Natural</div>
        </div>
      </div>
    </div>

    <!-- UPCOMING APPOINTMENT (unchanged) -->
    <div class="fade-4">
      <div class="section-header">
        <div class="section-label">Upcoming Appointment</div>
      </div>
      <div class="appt-card">
        <div class="appt-left">
          <div class="appt-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
              <line x1="16" y1="2" x2="16" y2="6"></line>
              <line x1="8" y1="2" x2="8" y2="6"></line>
              <line x1="3" y1="10" x2="21" y2="10"></line>
              <circle cx="12" cy="15" r="1"></circle>
              <circle cx="16" cy="15" r="1"></circle>
              <circle cx="8" cy="15" r="1"></circle>
            </svg>
          </div>
          <div>
            <div class="appt-label">Confirmed</div>
            <div class="appt-date">April 5, 2026 · 3:30 PM</div>
          </div>
        </div>
        <button class="btn-small">Manage</button>
      </div>
    </div>

    <!-- ACTION BUTTONS -->
    <div class="fade-4">
      <div class="section-header">
        <div class="section-label">ACCOUNT</div>
      </div>
      <div class="actions-grid">
        <button class="btn">
          <span class="btn-icon">✎</span> Edit Brow Profile
        </button>
        <button class="btn" onclick="location.href='change-password.php'">
          <span class="btn-icon">🔑</span> Change Password
        </button>
        <button class="btn">
          <span class="btn-icon">⚙</span> Privacy Settings
        </button>
        <button class="btn btn-danger" id="delete-account-btn">
          <span class="btn-icon">✕</span> Delete Account
        </button>
        <button class="btn btn-danger" id="sign-out-btn" style="grid-column: span 2;">
          <span class="btn-icon">↪</span> Sign Out
        </button>
      </div>
    </div>

    <!-- MY LOOKS (unchanged) -->
    <div class="fade-5">
      <div class="looks-header">
        <h2 class="looks-title">My Looks</h2>
        <div class="looks-actions">
          <button class="share-btn">Share →</button>
        </div>
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
          <div class="look-card-left">
            <div class="look-thumb">📸</div>
            <div>
              <div class="look-name">My everyday arch</div>
              <div class="look-meta">15 May · Arch · Dark Brown</div>
            </div>
          </div>
          <div class="look-arrow">→</div>
        </div>

        <div class="look-card">
          <div class="look-card-left">
            <div class="look-thumb">📸</div>
            <div>
              <div class="look-name">My everyday arch</div>
              <div class="look-meta">15 May · Arch · Dark Brown</div>
            </div>
          </div>
          <div class="look-arrow">→</div>
        </div>

        <div class="look-card">
          <div class="look-card-left">
            <div class="look-thumb">📸</div>
            <div>
              <div class="look-name">My everyday arch</div>
              <div class="look-meta">15 May · Arch · Dark Brown</div>
            </div>
          </div>
          <div class="look-arrow">→</div>
        </div>
      </div>

      <button class="create-btn">+ Create a new look</button>
    </div>

  </main>

  <script>
    const API_BASE = '<?php echo $API_URL; ?>';
    const token = localStorage.getItem('archAccessToken');

    // ---------- Load user profile from /auth/me ----------
    async function loadUserProfile() {
      if (!token) {
        window.location.href = 'login.php';
        return;
      }

      const nameEl = document.getElementById('profile-name');
      const emailEl = document.getElementById('profile-email');
      const avatarEl = document.getElementById('profile-avatar');

      try {
        const res = await fetch(`${API_BASE}/auth/me`, {
          headers: {
            'accept': 'application/json',
            'Authorization': `Bearer ${token}`
          }
        });

        if (!res.ok) {
          const errData = await res.json().catch(() => ({}));
          throw new Error(errData.detail || 'Failed to load profile');
        }

        const user = await res.json();

        // Update DOM
        const fullName = `${user.first_name || ''} ${user.last_name || ''}`.trim() || user.email || 'User';
        nameEl.textContent = fullName;
        emailEl.textContent = user.email || '';

        // Generate initials for avatar
        const initials = fullName
          .split(' ')
          .map(n => n[0])
          .join('')
          .toUpperCase()
          .slice(0, 2);
        avatarEl.textContent = initials || '?';
      } catch (err) {
        console.error(err);
        alert('Session expired. Please log in again.');
        localStorage.removeItem('archAccessToken');
        window.location.href = 'login.php';
      }
    }

    // ---------- Sign Out ----------
    document.getElementById('sign-out-btn').addEventListener('click', async function() {
      if (!token) {
        window.location.href = 'login.php';
        return;
      }

      if (!confirm('Are you sure you want to sign out?')) return;

      const btn = document.getElementById('sign-out-btn');
      btn.disabled = true;
      btn.innerHTML = '<span class="btn-icon">⏳</span> Signing out...';

      try {
        await fetch(`${API_BASE}/auth/logout`, {
          method: 'POST',
          headers: {
            'accept': 'application/json',
            'Authorization': `Bearer ${token}`
          }
        });
      } catch (err) {
        console.warn('Logout API call failed, clearing local session');
      } finally {
        localStorage.removeItem('archAccessToken');
        localStorage.removeItem('archUserEmail');
        localStorage.removeItem('archUserName');
        window.location.href = 'login.php';
      }
    });

    // ---------- Delete Account ----------
    document.getElementById('delete-account-btn').addEventListener('click', async function() {
      if (!token) {
        alert('You are not logged in.');
        return;
      }

      if (!confirm('Are you absolutely sure you want to delete your account? This action cannot be undone.')) return;

      const btn = document.getElementById('delete-account-btn');
      btn.disabled = true;
      btn.innerHTML = '<span class="btn-icon">⏳</span> Deleting...';

      try {
        const response = await fetch(`${API_BASE}/auth/account`, {
          method: 'DELETE',
          headers: {
            'accept': 'application/json',
            'Authorization': `Bearer ${token}`
          }
        });

        if (response.ok) {
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
        btn.innerHTML = '<span class="btn-icon">✕</span> Delete Account';
      }
    });

    // ---------- Init ----------
    loadUserProfile();
  </script>

</body>
</html>