<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Define Your Look — Royals Arch Brow</title>
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

    /* ====== OPTION CARDS ====== */
    .option-group {
      display: flex;
      flex-direction: column;
      gap: 0.75rem;
    }

    .option-card {
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      padding: 16px 18px;
      border-radius: var(--radius-sm);
      background: #161610;
      border: 1px solid var(--border);
      cursor: pointer;
      transition: all var(--transition);
    }

    .option-card:hover {
      border-color: var(--gold-dark);
    }

    .option-card.selected {
      border-color: var(--gold);
      background: rgba(201,168,76,0.06);
      box-shadow: 0 0 0 1px rgba(201,168,76,0.1);
    }

    .option-content {
      display: flex;
      flex-direction: column;
      gap: 4px;
      max-width: 80%;
    }

    .option-title {
      font-family: var(--font-display);
      font-size: 1.2rem;
      color: var(--white);
      line-height: 1.1;
    }

    .option-desc {
      font-size: 0.8rem;
      color: var(--white-dim);
      line-height: 1.4;
    }

    .option-right {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .brow-icon svg {
      width: 60px;
      height: 25px;
      fill: none;
      stroke: var(--white-dim);
      stroke-width: 3;
      stroke-linecap: round;
    }

    .option-card.selected .brow-icon svg {
      stroke: var(--white);
    }

    .radio-circle {
      width: 20px;
      height: 20px;
      border-radius: 50%;
      border: 1px solid var(--border);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .option-card.selected .radio-circle {
      border-color: var(--gold);
    }

    .radio-circle::after {
      content: '';
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: var(--gold);
      opacity: 0;
      transition: opacity var(--transition);
    }

    .option-card.selected .radio-circle::after {
      opacity: 1;
    }

    /* ====== BUTTONS ====== */
    .actions {
      display: grid;
      gap: 0.75rem;
    }

    .btn-primary {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 100%;
      padding: 0.85rem 1.2rem;
      border-radius: 999px;
      border: 1px solid var(--border);
      background: transparent;
      color: var(--white);
      font-size: 0.75rem;
      font-weight: 600;
      letter-spacing: 0.08em;
      text-decoration: none;
      transition: all var(--transition);
    }

    .btn-primary:hover {
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
      .page-title { font-size: 1.6rem; }
      .option-card { padding: 14px 16px; }
      .option-title { font-size: 1.1rem; }
      .brow-icon svg { width: 50px; height: 22px; }
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
      <div class="page-title-center">Define your look</div>
    </div>

    <!-- CONTENT HEADER -->
    <div class="fade-2">
      <div class="page-label">Definition</div>
      <div class="page-title">How defined would you like it?</div>
      <p style="color:var(--white-dim); font-size:0.9rem; margin-top:0.25rem;">The same shape, three expressions.</p>
    </div>

    <!-- OPTION CARDS -->
    <div class="option-group fade-3" id="optionsContainer">
      <!-- Understated -->
      <div class="option-card selected" data-value="understated">
        <div class="option-content">
          <div class="option-title">Understated</div>
          <div class="option-desc">It should be Soft, barely-there. Natural confidence.</div>
        </div>
        <div class="option-right">
          <div class="brow-icon">
            <svg viewBox="0 0 120 30"><path d="M20,22 Q40,10 60,22 Q80,34 100,22" /></svg>
          </div>
          <div class="radio-circle"></div>
        </div>
      </div>

      <!-- Considered -->
      <div class="option-card" data-value="considered">
        <div class="option-content">
          <div class="option-title">Considered</div>
          <div class="option-desc">Polished and present. Your everyday at its best.</div>
        </div>
        <div class="option-right">
          <div class="brow-icon">
            <svg viewBox="0 0 120 30"><path d="M10,18 Q40,10 60,18 Q80,26 110,18" /></svg>
          </div>
          <div class="radio-circle"></div>
        </div>
      </div>

      <!-- Deliberate -->
      <div class="option-card" data-value="deliberate">
        <div class="option-content">
          <div class="option-title">Deliberate</div>
          <div class="option-desc">Precise. Structured. A brow with a point of view.</div>
        </div>
        <div class="option-right">
          <div class="brow-icon">
            <svg viewBox="0 0 120 30"><path d="M10,15 L40,4 L60,15 L80,26 L110,15" /></svg>
          </div>
          <div class="radio-circle"></div>
        </div>
      </div>
    </div>

    <!-- ACTIONS -->
    <div class="actions fade-4">
      <a class="btn-primary" href="preview-look.php">See this look</a>
    </div>

  </main>

  <script>
    const cards = document.querySelectorAll('.option-card');
    const container = document.getElementById('optionsContainer');

    cards.forEach(card => {
      card.addEventListener('click', function() {
        cards.forEach(c => c.classList.remove('selected'));
        this.classList.add('selected');
      });
    });
  </script>

</body>
</html>