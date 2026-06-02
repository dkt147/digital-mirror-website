<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Scan Complete — Royals Arch Brow</title>
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
      display: flex;
      flex-direction: column;
    }
    a { color: inherit; text-decoration: none; }
    button {
      cursor: pointer;
      border: none;
      outline: none;
      font-family: var(--font-body);
      background: none;
    }

    /* ====== COMPACT NAVBAR ====== */
    .navbar-compact {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 1.25rem 2.5rem;
      border-bottom: 1px solid var(--border);
      background: rgba(10, 10, 8, 0.97);
      backdrop-filter: blur(20px);
      position: sticky;
      top: 0;
      z-index: 100;
    }

    .nav-center-title {
      font-size: 0.65rem;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--gold);
      font-weight: 400;
      margin: 0 auto;
      padding: 0.25rem 36.75rem;
    }

    .nav-emblem {
      width: 44px; height: 44px; border-radius: 50%;
      background: radial-gradient(circle at 35% 35%, #2a2010, #1a1408);
      border: 1.5px solid var(--gold-dark); display: flex; align-items: center;
      justify-content: center; flex-shrink: 0; overflow: hidden;
      margin-left: auto;
    }
    .nav-emblem img { width: 26px; height: 26px; object-fit: contain; }
    .nav-emblem-fallback {
      font-family: var(--font-display); font-style: italic; font-size: 1.3rem; color: var(--gold);
    }

    .nav-gold-rule {
      height: 1px; background: linear-gradient(to right, transparent 0%, var(--gold-dark) 30%, var(--gold-dark) 70%, transparent 100%);
      opacity: 0.5;
    }

    /* ====== MAIN CONTENT ====== */
    .main {
      max-width: 480px;
      margin: 0 auto;
      padding: 2rem 1.5rem;
      display: flex;
      flex-direction: column;
      gap: 2rem;
      align-items: center;
      flex: 1;
      text-align: center;
    }

    /* ====== TOP SECTION ====== */
    .top-section {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 1rem;
      width: 100%;
    }

    .scan-complete-img-wrapper {
      position: relative;
      width: 140px;
      height: 140px;
      border-radius: 50%;
      padding: 4px;
      background: linear-gradient(135deg, var(--gold-dark), var(--gold-light));
      box-shadow: 0 0 30px rgba(201, 168, 76, 0.1);
      flex-shrink: 0;
    }

    .scan-complete-img {
      width: 100%;
      height: 100%;
      border-radius: 50%;
      object-fit: cover;
      display: block;
      border: 3px solid var(--black);
    }

    .status-title {
      font-family: var(--font-display);
      font-style: italic;
      font-size: 2rem;
      font-weight: 400;
      line-height: 1.1;
      color: var(--white);
      margin-top: 0.5rem;
    }

    .status-sub {
      font-size: 0.75rem;
      color: var(--white-dim);
      font-weight: 300;
    }

    .divider {
      width: 100%;
      max-width: 100px;
      height: 1px;
      background: var(--border);
      margin: 0.5rem 0;
    }

    /* ====== DATA CARDS ROW ====== */
    .data-cards-row {
      display: flex;
      gap: 1rem;
      width: 100%;
      max-width: 320px;
    }

    .data-card {
      flex: 1;
      background: #161610;
      border: 1px solid var(--border);
      border-radius: var(--radius-sm);
      padding: 1rem 1.25rem;
      text-align: center;
    }

    .data-card-label {
      font-size: 0.55rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--white-dim);
      font-weight: 500;
      margin-bottom: 0.25rem;
    }

    .data-card-value {
      font-family: var(--font-display);
      font-size: 1.2rem;
      font-weight: 400;
      color: var(--white);
      line-height: 1.2;
    }

    /* ====== RECOMMENDED FOR YOU ====== */
    .recommended-section {
      width: 100%;
      max-width: 320px;
      text-align: left;
    }

    .rec-section-label {
      font-size: 0.6rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: var(--gold);
      font-weight: 500;
      margin-bottom: 1rem;
      text-align: center;
    }

    .rec-buttons-row {
      display: flex;
      gap: 0.75rem;
      justify-content: center;
      flex-wrap: wrap;
    }

    .rec-btn {
      padding: 0.6rem 1.4rem;
      border-radius: 50px;
      border: 1px solid var(--border);
      background: #161610;
      color: var(--white-dim);
      font-size: 0.7rem;
      letter-spacing: 0.05em;
      transition: all var(--transition);
      flex: 1;
      min-width: 80px;
    }

    .rec-btn:hover {
      border-color: var(--border-hover);
      color: var(--white);
    }

    .rec-btn.active {
      border-color: var(--gold);
      background: var(--gold-muted);
      color: var(--gold);
      font-weight: 500;
    }

    /* ====== PRIMARY ACTION BUTTON ====== */
    .primary-action-btn {
      width: 100%;
      max-width: 320px;
      padding: 1.1rem 1.5rem;
      border-radius: 50px;
      background: #282828;
      border: 1px solid #333;
      color: var(--white);
      font-weight: 500;
      font-size: 0.7rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      transition: all var(--transition);
      margin-top: 0.5rem;
    }

    .primary-action-btn:hover {
      border-color: var(--gold);
      background: #333;
    }

    /* ====== SECONDARY LINK ====== */
    .secondary-link {
      margin-top: 0.25rem;
      font-size: 0.7rem;
      color: var(--gold);
      cursor: pointer;
      transition: all var(--transition);
      font-weight: 400;
      letter-spacing: 0.05em;
    }

    .secondary-link:hover { opacity: 0.7; }

    /* ====== RESPONSIVE ====== */
    @media (max-width: 600px) {
      .main { padding: 1.5rem 1rem; }
      .navbar-compact { padding: 0.75rem 1.25rem; }
      .status-title { font-size: 1.6rem; }
      .data-cards-row { flex-direction: row; gap: 0.75rem; }
      .rec-buttons-row { gap: 0.5rem; }
      .rec-btn { padding: 0.5rem 1rem; font-size: 0.65rem; min-width: 60px; }
    }
  </style>
</head>

<body>

  <!-- COMPACT NAVBAR -->
  <nav class="navbar-compact">
    <div style="width:44px;"></div>
    <div class="nav-center-title">Scan Complete</div>
    <div class="nav-emblem">
      <img src="assets/logo.png" alt="Arch"
        onerror="this.style.display='none'; this.parentElement.innerHTML='<span class=\'nav-emblem-fallback\'>G</span>'" />
    </div>
  </nav>

  <div class="nav-gold-rule"></div>

  <!-- MAIN CONTENT -->
  <main class="main">

    <!-- TOP SECTION: IMAGE + HEADINGS -->
    <div class="top-section">
        <p>New illustration Coming.</p>
      <div class="scan-complete-img-wrapper">
        <!-- Yahan aap user ki scanned image lagayein -->
        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Scan Result" class="scan-complete-img" />
      </div>

      <div class="status-title">Scan Complete</div>
      <div class="status-sub">Here's what your features tell us.</div>
      
      <div class="divider"></div>
    </div>

    <!-- DATA CARDS ROW -->
    <div class="data-cards-row">
      <div class="data-card">
        <div class="data-card-label">Brow Shape</div>
        <div class="data-card-value">High arch</div>
      </div>
      <div class="data-card">
        <div class="data-card-label">Face Shape</div>
        <div class="data-card-value">Oval</div>
      </div>
    </div>

    <!-- RECOMMENDED FOR YOU -->
    <div class="recommended-section">
      <div class="rec-section-label">Recommended For You</div>
      <div class="rec-buttons-row">
        <button class="rec-btn active">Considered</button>
        <button class="rec-btn">Arch</button>
        <button class="rec-btn">Soft Arch</button>
      </div>
    </div>

    <!-- PRIMARY ACTION BUTTON -->
    <button class="primary-action-btn" onclick="goToStyles()">Explore Your Styles</button>

    <!-- SECONDARY LINK -->
    <button class="secondary-link" onclick="goToAllStyles()">See all styles</button>

  </main>

  <script>
    function goToStyles() {
      // Yahan aap apni 'Explore Styles' page ka path daal sakte hain
      alert('Navigating to style gallery...');
      // window.location.href = 'styles-gallery.html';
    }

    function goToAllStyles() {
      // Yahan aap apni 'All Styles' page ka path daal sakte hain
      alert('Showing all styles...');
      // window.location.href = 'all-styles.html';
    }

    // Thoda interactivity: Buttons click karne par style select ho jaye
    document.querySelectorAll('.rec-btn').forEach(btn => {
      btn.addEventListener('click', function() {
        document.querySelectorAll('.rec-btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
      });
    });
  </script>

</body>
</html>