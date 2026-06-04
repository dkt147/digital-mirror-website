<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Choose Your Style — Royals Arch Brow</title>
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

    /* ====== STYLE GRID ====== */
    .style-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 0.75rem;
    }

    .style-card {
      background: #161610;
      border: 1px solid var(--border);
      border-radius: var(--radius-sm);
      padding: 12px 6px;
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 8px;
      cursor: pointer;
      transition: all var(--transition);
    }

    .style-card:hover {
      border-color: var(--gold-dark);
    }

    .style-card.selected {
      border-color: var(--gold);
      background: rgba(201,168,76,0.06);
      box-shadow: 0 0 0 1px rgba(201,168,76,0.1);
    }

    .style-icon svg {
      width: 55px;
      height: 28px;
      fill: none;
      stroke: var(--white-dim);
      stroke-width: 3;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    .style-card.selected .style-icon svg {
      stroke: var(--white);
    }

    .style-label {
      font-size: 0.6rem;
      text-transform: uppercase;
      letter-spacing: 0.06em;
      color: var(--white-dim);
    }

    .style-card.selected .style-label {
      color: var(--white);
    }

    /* ====== COLOUR ROW ====== */
    .color-row {
      display: flex;
      align-items: center;
      gap: 0.6rem;
      flex-wrap: wrap;
    }

    .color-swatch {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      border: 1px solid rgba(255,255,255,0.05);
      cursor: pointer;
      position: relative;
      transition: all var(--transition);
    }

    .color-swatch:hover {
      border-color: rgba(255,255,255,0.2);
    }

    .color-swatch.selected {
      border-color: var(--gold);
      transform: scale(1.05);
      box-shadow: 0 0 0 1px var(--gold) inset;
    }

    .color-swatch.selected::after {
      content: '✔';
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: var(--gold);
      font-weight: bold;
      font-size: 0.9rem;
      text-shadow: 0 0 4px rgba(0,0,0,0.8);
    }

    /* ====== PREVIEW CARD ====== */
    .preview-card {
      position: relative;
      border-radius: var(--radius);
      overflow: hidden;
      border: 1px solid var(--gold);
      background: #000;
      min-height: 260px;
      aspect-ratio: 1/1;
    }

    .preview-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
      opacity: 0.8;
    }

    .preview-label {
      position: absolute;
      top: 14px;
      left: 0;
      width: 100%;
      text-align: center;
      font-family: var(--font-body);
      font-size: 0.7rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: rgba(255,255,255,0.5);
      pointer-events: none;
    }

    .preview-copy {
      position: absolute;
      bottom: 1rem;
      left: 0;
      right: 0;
      text-align: center;
      font-family: var(--font-display);
      font-size: 1.1rem;
      color: var(--white);
      letter-spacing: 0.02em;
    }

    .preview-copy strong {
      font-weight: 600;
      color: var(--white);
    }
    
    .preview-copy span {
      color: var(--white);
    }

    .preview-note {
      font-size: 0.75rem;
      color: var(--white-dim);
      margin-top: 0.2rem;
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
      .style-grid { grid-template-columns: repeat(2, 1fr); }
      .preview-card { min-height: 200px; }
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
      <div class="page-title-center">Choose your style</div>
      <div class="page-logo">
        <img src="assets/logo.png" alt="CG" />
      </div>
    </div>

    <!-- CONTENT HEADER -->
    <div class="fade-2">
      <div class="page-label">Style Selection</div>
      <div class="page-title">Find your perfect brow style.</div>
    </div>

    <!-- STYLE GRID -->
    <div class="fade-3">
      <div class="section-label">Style</div>
      <div class="style-grid">
        <button class="style-card selected" type="button" data-style="Considered">
          <div class="style-icon"><svg viewBox="0 0 100 40"><path d="M20,24 L45,10 L80,24" /></svg></div>
          <div class="style-label">Considered</div>
        </button>
        <button class="style-card" type="button" data-style="Arch">
          <div class="style-icon"><svg viewBox="0 0 100 40"><path d="M20,28 Q50,2 80,28" /></svg></div>
          <div class="style-label">Arch</div>
        </button>
        <button class="style-card" type="button" data-style="Straight">
          <div class="style-icon"><svg viewBox="0 0 100 40"><path d="M20,18 L80,18" /></svg></div>
          <div class="style-label">Straight</div>
        </button>
        <button class="style-card" type="button" data-style="Sharp">
          <div class="style-icon"><svg viewBox="0 0 100 40"><path d="M20,34 L50,4 L80,34" /></svg></div>
          <div class="style-label">Sharp</div>
        </button>
        <button class="style-card" type="button" data-style="Feathered">
          <div class="style-icon"><svg viewBox="0 0 100 40"><path d="M20,24 L45,14 L55,28 L80,20" /></svg></div>
          <div class="style-label">Feathered</div>
        </button>
        <button class="style-card" type="button" data-style="Bold">
          <div class="style-icon"><svg viewBox="0 0 100 40"><path d="M20,22 L80,22" stroke-width="8" /></svg></div>
          <div class="style-label">Bold</div>
        </button>
        <button class="style-card" type="button" data-style="Natural">
          <div class="style-icon"><svg viewBox="0 0 100 40"><path d="M20,24 Q35,14 50,24 Q65,34 80,24" /></svg></div>
          <div class="style-label">Natural</div>
        </button>
        <button class="style-card" type="button" data-style="Sculpted">
          <div class="style-icon"><svg viewBox="0 0 100 40"><path d="M20,22 Q50,0 80,22" /></svg></div>
          <div class="style-label">Sculpted</div>
        </button>
      </div>
    </div>

    <!-- COLOUR ROW -->
    <div class="fade-4">
      <div class="section-label">Colour</div>
      <div class="color-row">
        <span class="color-swatch" data-color="#efd8bb" style="background:#efd8bb;"></span>
        <span class="color-swatch" data-color="#b27f50" style="background:#b27f50;"></span>
        <span class="color-swatch selected" data-color="#89603f" style="background:#89603f;"></span>
        <span class="color-swatch" data-color="#4f2a18" style="background:#4f2a18;"></span>
        <span class="color-swatch" data-color="#6e3d24" style="background:#6e3d24;"></span>
        <span class="color-swatch" data-color="#caa87d" style="background:#caa87d;"></span>
      </div>
    </div>

    <!-- PREVIEW CARD -->
    <div class="fade-4">
      <div class="preview-card">
        <div class="preview-label">PREVIEW</div>
        <img class="preview-image" src="assets/profile.png" alt="Preview" />
        <div class="preview-copy"><strong>Considered</strong> <span>.</span> Black</div>
      </div>
      <div class="preview-note">Black - selected</div>
    </div>

    <!-- ACTIONS -->
    <div class="actions fade-5">
      <a class="btn-primary" href="saved-look.php">Preview this look</a>
    </div>

  </main>

  <script>
    const styleCards = document.querySelectorAll('.style-card');
    const swatches = document.querySelectorAll('.color-swatch');
    const previewCopy = document.querySelector('.preview-copy');
    const previewNote = document.querySelector('.preview-note');

    const colorMap = {
      '#efd8bb': 'Blonde',
      '#b27f50': 'Light Brown',
      '#89603f': 'Black',
      '#4f2a18': 'Darkest Brown',
      '#6e3d24': 'Espresso',
      '#caa87d': 'Warm Ash'
    };

    function updatePreview() {
      const activeStyle = document.querySelector('.style-card.selected')?.dataset.style || 'Considered';
      const activeSwatch = document.querySelector('.color-swatch.selected');
      const activeColor = activeSwatch?.dataset.color || '#89603f';
      const colorLabel = colorMap[activeColor] || 'Black';

      previewCopy.innerHTML = `<strong>${activeStyle}</strong> <span>.</span> ${colorLabel}`;
      previewNote.textContent = `${colorLabel} - selected`;
    }

    styleCards.forEach(card => {
      card.addEventListener('click', () => {
        styleCards.forEach(item => {
          item.classList.remove('selected');
        });
        card.classList.add('selected');
        updatePreview();
      });
    });

    swatches.forEach(swatch => {
      swatch.addEventListener('click', () => {
        swatches.forEach(item => item.classList.remove('selected'));
        swatch.classList.add('selected');
        updatePreview();
      });
    });

    updatePreview();
  </script>

</body>
</html>