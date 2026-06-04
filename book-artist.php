<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Book with an artist — Royals Arch Brow</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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

    /* ====== PAGE TOPBAR (Back Arrow + Title + Logo) ====== */
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

    /* ====== HEADER ====== */
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

    /* ====== STUDIO CARDS ====== */
    .studio-card {
      padding: 16px 18px;
      border-radius: var(--radius);
      background: #161610;
      border: 1px solid var(--border);
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 16px;
      cursor: pointer;
      transition: all var(--transition);
      margin-bottom: 12px;
    }

    .studio-card:hover {
      border-color: var(--gold-dark);
      transform: translateY(-1px);
    }

    .studio-card.selected {
      border-color: var(--gold);
      background: rgba(201,168,76,0.06);
      box-shadow: 0 0 0 1px rgba(201,168,76,0.1);
    }

    .studio-left {
      display: flex;
      gap: 14px;
      align-items: center;
    }

    .studio-badge {
      width: 52px;
      height: 52px;
      border-radius: var(--radius-sm);
      border: 1px solid var(--border);
      display: grid;
      place-items: center;
      background: rgba(201,168,76,0.06);
      color: var(--gold);
      font-weight: 600;
      font-size: 0.9rem;
      flex-shrink: 0;
    }

    .studio-info {
      min-width: 0;
    }

    .studio-name {
      font-weight: 600;
      margin-bottom: 4px;
    }

    .studio-meta {
      font-size: 0.85rem;
      color: var(--white-dim);
    }

    .studio-right {
      display: flex;
      flex-direction: column;
      align-items: flex-end;
      gap: 4px;
    }

    .nearest {
      padding: 4px 12px;
      border-radius: 999px;
      border: 1px solid var(--border);
      font-size: 0.7rem;
      color: var(--gold);
      background: rgba(201,168,76,0.04);
      text-transform: uppercase;
      letter-spacing: 0.04em;
    }

    /* ====== SERVICES ====== */
    .services {
      display: grid;
      gap: 10px;
      margin-bottom: 20px;
    }

    .service-btn {
      padding: 14px 16px;
      border-radius: var(--radius-sm);
      background: transparent;
      border: 1px solid var(--border);
      color: var(--white);
      text-align: left;
      display: flex;
      justify-content: space-between;
      align-items: center;
      cursor: pointer;
      transition: all var(--transition);
      font-family: var(--font-body);
    }

    .service-btn:hover {
      border-color: var(--gold-dark);
    }

    .service-btn.selected {
      background: rgba(201,168,76,0.06);
      border-color: var(--gold);
      color: var(--gold);
    }

    /* ====== TOGGLE ====== */
    .toggle-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 14px 18px;
      border-radius: var(--radius-sm);
      background: #161610;
      border: 1px solid var(--border);
      margin-bottom: 24px;
    }

    .toggle-info {
      display: grid;
      gap: 2px;
    }

    .toggle-info .label {
      font-weight: 600;
    }

    .toggle-info .small {
      font-size: 0.8rem;
      color: var(--white-dim);
    }

    .switch {
      position: relative;
      width: 50px;
      height: 28px;
      border-radius: 999px;
      background: rgba(255,255,255,0.08);
      border: 1px solid rgba(255,255,255,0.08);
      flex-shrink: 0;
    }

    .switch input {
      position: absolute;
      inset: 0;
      opacity: 0;
      cursor: pointer;
      z-index: 1;
    }

    .slider {
      position: absolute;
      top: 2px;
      left: 2px;
      width: 24px;
      height: 24px;
      border-radius: 50%;
      background: var(--white);
      transition: transform var(--transition);
    }

    .switch input:checked + .slider {
      transform: translateX(22px);
      background: var(--gold);
    }

    /* ====== BUTTONS ====== */
    .actions {
      display: grid;
      gap: 0.75rem;
    }

    .btn-primary {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      padding: 0.85rem 1.2rem;
      border-radius: 999px;
      border: none;
      background: var(--gold);
      color: var(--black);
      font-size: 0.75rem;
      font-weight: 700;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      text-decoration: none;
      transition: all var(--transition);
    }

    .btn-primary:hover {
      background: var(--gold-light);
      transform: translateY(-1px);
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
      .page-title { font-size: 1.6rem; }
      .studio-card { padding: 14px 16px; }
      .studio-badge { width: 44px; height: 44px; }
      .back-btn { width: 38px; height: 38px; }
      .page-logo { width: 38px; height: 38px; }
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

    <!-- PAGE TOPBAR (Back Arrow + Title + Logo) -->
    <div class="page-topbar fade-1">
      <a href="javascript:history.back()" class="back-btn" aria-label="Go back">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="19" y1="12" x2="5" y2="12"></line>
          <polyline points="12 19 5 12 12 5"></polyline>
        </svg>
      </a>
      <div class="page-title-center">Book with an artist</div>
      <div class="page-logo">
        <img src="assets/logo.png" alt="CG" />
      </div>
    </div>

    <!-- CONTENT HEADER -->
    <div class="fade-2">
      <div class="page-label">Booking</div>
      <div class="page-title">Your look. Your artist. Your time.</div>
    </div>

    <!-- STUDIOS -->
    <div class="fade-3">
      <div class="section-label">Studios near you</div>
      <div class="studio-card selected" id="studio1" onclick="selectStudio('studio1')">
        <div class="studio-left">
          <div class="studio-badge">SR</div>
          <div class="studio-info">
            <div class="studio-name">Studio Royale</div>
            <div class="studio-meta">0.4 mi · Today 3:30pm · 60 min</div>
          </div>
        </div>
        <div class="studio-right">
          <div class="nearest">Nearest</div>
        </div>
      </div>

      <div class="studio-card" id="studio2" onclick="selectStudio('studio2')">
        <div class="studio-left">
          <div class="studio-badge">AA</div>
          <div class="studio-info">
            <div class="studio-name">Arch Atelier</div>
            <div class="studio-meta">1.2 mi · Tomorrow 11:00am · 60 min</div>
          </div>
        </div>
      </div>
    </div>

    <!-- SERVICES -->
    <div class="fade-4">
      <div class="section-label">Select your service</div>
      <div class="services">
        <button class="service-btn selected" onclick="selectService(event, 'Shape + Define')">
          <span>Shape + Define</span>
          <span style="color:var(--white-dim);">60 min</span>
        </button>
        <button class="service-btn" onclick="selectService(event, 'Tint + Shape')">
          <span>Tint + Shape</span>
          <span style="color:var(--white-dim);">75 min</span>
        </button>
        <button class="service-btn" onclick="selectService(event, 'Consultation')">
          <span>Consultation</span>
          <span style="color:var(--white-dim);">30 min</span>
        </button>
      </div>
    </div>

    <!-- TOGGLE -->
    <div class="fade-4">
      <div class="toggle-row">
        <div class="toggle-info">
          <div class="label">Send my brow brief to the artist</div>
          <div class="small">Your brief will be shared automatically.</div>
        </div>
        <label class="switch">
          <input type="checkbox" checked />
          <span class="slider"></span>
        </label>
      </div>
    </div>

    <!-- ACTIONS -->
    <div class="actions fade-5">
      <button class="btn-primary" onclick="selectTime()">Select a time</button>
    </div>

  </main>

  <script>
    let selectedStudio = 'studio1';
    let selectedService = 'Shape + Define';

    function selectStudio(id) {
      document.querySelectorAll('.studio-card').forEach(el => el.classList.remove('selected'));
      const el = document.getElementById(id);
      if (el) el.classList.add('selected');
      selectedStudio = id;
    }

    function selectService(e, name) {
      document.querySelectorAll('.service-btn').forEach(el => el.classList.remove('selected'));
      const btn = e.currentTarget || e.target;
      btn.classList.add('selected');
      selectedService = name;
    }

    function selectTime() {
      alert('Proceed to pick a time for ' + selectedService + ' at ' + selectedStudio + '.');
      // TODO: navigate to booking flow or calendar picker
    }
  </script>

</body>
</html>