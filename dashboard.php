<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard — Royals Arch Brow</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
  <style>
    :root {
      --black: #0a0a08;
      --dark: #111111;
      --dark-card: #1a1a0f;
      --dark-input: #1c1c15;
      --gold: #C9A84C;
      --gold-light: #C9A84C;
      --gold-dark: #C9A84C;
      --gold-muted: rgba(201, 168, 76, 0.12);
      --white: #f5f0e8;
      --white-dim: rgba(245, 240, 232, 0.55);
      --white-faint: rgba(245, 240, 232, 0.15);
      --border: rgba(201, 168, 76, 0.18);
      --border-hover: rgba(201, 168, 76, 0.45);
      --font-display: 'Cormorant Garamond', serif;
      --font-body: 'Montserrat', sans-serif;
      --radius: 18px;
      --radius-sm: 10px;
      --transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    *,
    *::before,
    *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html {
      font-size: 16px;
      scroll-behavior: smooth;
    }

    body {
      background: var(--black);
      color: var(--white);
      font-family: var(--font-body);
      font-weight: 600;
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

    .nav-avatar-fallback {
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, #2a2010, #3a2e14);
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: var(--font-display);
      font-size: 1.1rem;
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
      font-family: var(--font-display);
      font-size: 1.3rem;
      font-style: italic;
      font-weight: 500;
      color: var(--gold);
      box-shadow: 0 0 16px rgba(201, 168, 76, 0.12);
      flex-shrink: 0;
      overflow: hidden;
    }

    .nav-emblem img {
      width: 26px;
      height: 26px;
      object-fit: contain;
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
      font-family: var(--font-body);
    }

    .btn-book:hover {
      border-color: var(--gold);
      color: var(--gold);
    }

    /* Gold rule under navbar */
    .nav-gold-rule {
      height: 1px;
      background: linear-gradient(to right, transparent 0%, var(--gold-dark) 30%, var(--gold-dark) 70%, transparent 100%);
      opacity: 0.5;
    }

    /* ====== LAYOUT ====== */
    .page-wrapper {
      width: 100%;
      min-height: calc(100vh - 65px);
    }

    /* ====== MAIN CONTENT ====== */
    .main {
      max-width: 100%;
      margin: 0 auto;
      padding: 2.5rem 3rem;
      display: flex;
      flex-direction: column;
      gap: 1.75rem;
    }

    /* ====== WELCOME ====== */
    .welcome-label {
      font-size: 0.6rem;
      letter-spacing: 0.25em;
      text-transform: uppercase;
      color: var(--gold);
      font-weight: 500;
      margin-bottom: 0.2rem;
    }

    .welcome-name {
      font-family: var(--font-display);
      font-style: italic;
      font-size: 3rem;
      font-weight: 400;
      color: var(--white);
      line-height: 1.05;
    }

    /* ====== LAST LOOK CARD ====== */
    .last-look-card {
      background: linear-gradient(135deg, #1c1a0d 0%, #221f0f 60%, #1a1808 100%);
      border: 1px solid #C9A84C;
      border-radius: var(--radius);
      padding: 1.4rem 1.75rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 1.5rem;
      position: relative;
      overflow: hidden;
    }

    .last-look-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 1px;
      background: linear-gradient(to right, transparent, rgba(201, 168, 76, 0.5), transparent);
    }

    .last-look-label {
      font-size: 0.58rem;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: var(--white-dim);
      margin-bottom: 0.5rem;
    }

    .last-look-value {
      font-family: var(--font-display);
      font-size: 1.7rem;
      font-weight: 400;
      color: var(--white);
      line-height: 1.2;
    }

    .last-look-date {
      font-size: 0.68rem;
      color: var(--white-dim);
      margin-top: 0.35rem;
      font-style: italic;
    }

    .re-apply-btn {
      padding: 0.55rem 1.25rem;
      background: var(--gold);
      border: 1px solid var(--gold-dark);
      border-radius: 50px;
      font-size: 0.6rem;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--black);
      cursor: pointer;
      transition: all var(--transition);
      font-family: var(--font-body);
      font-weight: 500;
      white-space: nowrap;
      flex-shrink: 0;
    }

    .re-apply-btn:hover {
      background: rgba(201, 168, 76, 0.12);
      color: var(--gold);
      box-shadow: 0 4px 20px rgba(201, 168, 76, 0.25);
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

    /* ====== QUICK ACTIONS ====== */
    .quick-actions {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1rem;
    }

    .quick-action {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 0.65rem;
      padding: 1.25rem 0.75rem;
      background: #161610;
      border: 1px solid #333;
      border-radius: var(--radius-sm);
      cursor: pointer;
      transition: all var(--transition);
      text-decoration: none;
      color: inherit;
    }

    .quick-action:hover {
      border-color: #C9A84C;
      background: rgba(201, 168, 76, 0.06);
      transform: translateY(-2px);
    }

    .quick-action-icon {
      color: var(--gold);
    }

    .quick-action-label {
      font-size: 0.58rem;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--white-dim);
      font-weight: 500;
    }

    /* ====== NEXT APPOINTMENT ====== */
    .next-appt-card {
      background: #161610;
      border: 1px solid #333;
      border-radius: var(--radius);
      padding: 1.25rem 1.75rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      cursor: pointer;
      transition: all var(--transition);
    }

    .next-appt-card:hover {
      border-color: #C9A84C;
      background: rgba(201, 168, 76, 0.06);
      transform: translateY(-1px);
    }

    .next-appt-label {
      font-size: 0.58rem;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--white-dim);
      margin-bottom: 0.35rem;
    }

    .next-appt-date {
      font-family: var(--font-display);
      font-size: 1.5rem;
      font-weight: 400;
      color: var(--white);
    }

    .arrow-icon {
      color: var(--gold);
    }

    /* ====== TOAST ====== */
    .toast {
      position: fixed;
      bottom: 2rem;
      right: 2rem;
      background: #1c1c12;
      border: 1px solid var(--border);
      border-radius: 50px;
      padding: 0.7rem 1.5rem;
      font-size: 0.75rem;
      color: var(--white);
      z-index: 9999;
      transform: translateY(20px);
      opacity: 0;
      transition: all 0.35s ease;
    }

    .toast.show {
      transform: translateY(0);
      opacity: 1;
    }

    /* ====== ANIMATIONS ====== */
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

    /* ====== RESPONSIVE ====== */
    @media (max-width: 900px) {
      .main {
        padding: 1.5rem 1.25rem;
      }

      .navbar {
        padding: 0.875rem 1.25rem;
      }

      .navbar-nav {
        display: none;
      }
    }
  </style>
</head>

<body>

  <!-- NAVBAR -->
  <?php include 'includes/navbar.php'; ?>

  <!-- Gold rule -->
  <div class="nav-gold-rule"></div>

  <!-- PAGE WRAPPER: sidebar + main -->
  <div class="page-wrapper">

    <!-- MAIN CONTENT -->
    <main class="main">

      <!-- WELCOME -->
      <div class="fade-2">
        <div class="welcome-label">Welcome back</div>
        <div class="welcome-name" id="dash-name">Mary.</div>
      </div>

      <!-- LAST LOOK -->
      <div class="last-look-card fade-3">
        <div>
          <div class="last-look-label">Last Look</div>
          <div class="last-look-value">Arch · Dark Brow · Considered</div>
          <div class="last-look-date">Saved March 15, 2026</div>
        </div>
        <button class="re-apply-btn" onclick="showToast('Re-applying your look...')">RE-APPLY</button>
      </div>

      <!-- QUICK ACTIONS -->
      <div class="fade-4">
        <div class="section-label">Quick Actions</div>
        <div class="quick-actions">
          <a class="quick-action" href="arch-session.php">
            <div class="quick-action-icon">
              <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="3" />
                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
              </svg>
            </div>
            <div class="quick-action-label">New Scan</div>
          </a>

          <button class="quick-action" onclick="showToast('Your looks library')">
            <div class="quick-action-icon">
              <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                <rect x="3" y="3" width="7" height="7" rx="1" />
                <rect x="14" y="3" width="7" height="7" rx="1" />
                <rect x="14" y="14" width="7" height="7" rx="1" />
                <rect x="3" y="14" width="7" height="7" rx="1" />
              </svg>
            </div>
            <div class="quick-action-label">My Looks</div>
          </button>

          <button class="quick-action" onclick="showToast('Booking coming soon')">
            <div class="quick-action-icon">
              <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                <rect x="3" y="4" width="18" height="18" rx="2" />
                <line x1="16" y1="2" x2="16" y2="6" />
                <line x1="8" y1="2" x2="8" y2="6" />
                <line x1="3" y1="10" x2="21" y2="10" />
                <circle cx="8" cy="15" r="0.8" fill="currentColor" stroke="none" />
                <circle cx="12" cy="15" r="0.8" fill="currentColor" stroke="none" />
                <circle cx="16" cy="15" r="0.8" fill="currentColor" stroke="none" />
              </svg>
            </div>
            <div class="quick-action-label">Book</div>
          </button>
        </div>
      </div>

      <!-- NEXT APPOINTMENT -->
      <div class="next-appt-card fade-5" onclick="showToast('Appointment details')">
        <div>
          <div class="next-appt-label">Next Appointment</div>
          <div class="next-appt-date">April 5, 2026 · 3:30 PM</div>
        </div>
        <div class="arrow-icon">
          <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <line x1="5" y1="12" x2="19" y2="12" />
            <polyline points="12 5 19 12 12 19" />
          </svg>
        </div>
      </div>

    </main>
  </div>

  <!-- TOAST -->
  <div class="toast" id="toast"></div>

  <script>
    function getSavedUser() {
      return {
        name: localStorage.getItem('archUserName') || 'Mary Johnson',
        email: localStorage.getItem('archUserEmail') || 'mary@gmail.com'
      };
    }

    function updateDashboard() {
      const user = getSavedUser();
      const el = document.getElementById('dash-name');
      if (el) el.textContent = user.name.split(' ')[0] + '.';
    }

    function showToast(msg) {
      const toast = document.getElementById('toast');
      if (!toast) return;
      toast.textContent = msg;
      toast.classList.add('show');
      setTimeout(() => toast.classList.remove('show'), 2800);
    }
    window.addEventListener('DOMContentLoaded', updateDashboard);
  </script>

</body>

</html>