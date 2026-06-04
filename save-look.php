<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Save Look — Royals Arch Brow</title>
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

    /* ====== SAVE LOOK CARD ====== */
    .save-look-card {
      background: #161610;
      border: 1px solid var(--gold);
      border-radius: var(--radius);
      padding: 1.5rem 1.25rem;
    }

    .preview-card {
      border-radius: var(--radius);
      background: rgba(255,255,255,0.03);
      border: 1px solid var(--border);
      min-height: 140px;
      display: grid;
      place-items: center;
      position: relative;
      overflow: hidden;
      margin-bottom: 1.5rem;
      padding: 24px 16px;
    }

    .preview-card::before {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(circle at center, rgba(201,168,76,0.08), transparent 50%);
      pointer-events: none;
    }

    .preview-placeholder {
      color: var(--white-dim);
      font-size: 1rem;
      letter-spacing: 0.04em;
      text-align: center;
      z-index: 1;
    }

    .preview-placeholder strong {
      color: var(--gold);
      font-weight: 400;
      font-family: var(--font-display);
      font-style: italic;
    }

    .section-title {
      font-family: var(--font-display);
      font-style: italic;
      font-size: clamp(1.6rem, 4vw, 2.2rem);
      line-height: 1.05;
      color: var(--white);
      margin-bottom: 6px;
      text-align: center;
    }

    .section-subtitle {
      color: var(--white-dim);
      font-size: 0.95rem;
      line-height: 1.7;
      margin-bottom: 24px;
      text-align: center;
    }

    .form {
      display: grid;
      gap: 18px;
      width: 100%;
      max-width: 460px;
      margin-left: auto;
      margin-right: auto;
    }

    .field {
      display: grid;
      gap: 8px;
    }

    label {
      color: var(--gold);
      font-size: 0.7rem;
      text-transform: uppercase;
      letter-spacing: 0.18em;
      font-weight: 500;
    }

    .input,
    .textarea {
      width: 100%;
      border: 1px solid var(--border);
      border-radius: 999px;
      background: rgba(255,255,255,0.03);
      color: var(--white);
      padding: 14px 18px;
      font-family: var(--font-body);
      font-size: 0.95rem;
      outline: none;
      transition: all var(--transition);
    }

    .textarea {
      border-radius: 20px;
      min-height: 108px;
      resize: vertical;
      padding: 16px;
    }

    .input:focus,
    .textarea:focus {
      border-color: var(--gold);
      box-shadow: 0 0 0 3px rgba(201,168,76,0.12);
    }

    .tag-row {
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 12px;
    }

    .tag {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      min-height: 52px;
      border-radius: 999px;
      border: 1px solid var(--border);
      background: rgba(255,255,255,0.02);
      color: var(--white-dim);
      text-transform: uppercase;
      letter-spacing: 0.12em;
      font-size: 0.7rem;
      cursor: pointer;
      transition: all var(--transition);
      font-weight: 500;
      font-family: var(--font-body);
    }

    .tag:hover {
      border-color: var(--border-hover);
      color: var(--white);
    }

    .tag.active {
      background: rgba(201,168,76,0.06);
      border-color: var(--gold);
      color: var(--gold);
    }

    .actions {
      display: grid;
      gap: 0.75rem;
      margin-top: 8px;
    }

    .btn-primary {
      width: 100%;
      border: none;
      border-radius: 999px;
      padding: 0.85rem 1.2rem;
      background: var(--gold);
      color: var(--black);
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.12em;
      cursor: pointer;
      transition: all var(--transition);
      font-family: var(--font-body);
      font-size: 0.75rem;
    }

    .btn-primary:hover {
      background: var(--gold-light);
      transform: translateY(-1px);
    }

    .note {
      color: var(--white-dim);
      font-size: 0.85rem;
      text-align: center;
      margin-top: 8px;
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
      .save-look-card { padding: 1.25rem 1rem; }
      .preview-card { min-height: 120px; padding: 18px 14px; }
      .section-title { font-size: 1.8rem; }
      .tag-row { grid-template-columns: repeat(2, minmax(0, 1fr)); }
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
      <div class="page-title-center">Save Look</div>
      <div class="page-logo">
        <img src="assets/logo.png" alt="CG" />
      </div>
    </div>

    <!-- CONTENT HEADER -->
    <div class="fade-2">
      <div class="page-label">Save Look</div>
      <div class="page-title">Name this look.</div>
      <p style="color:var(--white-dim); font-size:0.9rem; margin-top:0.25rem;">Something you'll recognise at a glance.</p>
    </div>

    <!-- SAVE LOOK CARD -->
    <div class="save-look-card fade-3">
      <div class="preview-card">
        <div class="preview-placeholder">
          <strong>Your look preview</strong><br />
          <span style="font-size:0.85rem; color:var(--white-dim);">Stencil overlay appears here</span>
        </div>
      </div>

      <form id="saveLookForm" class="form">
        <div class="field">
          <label for="lookName">Look Name</label>
          <input id="lookName" name="lookName" class="input" type="text" placeholder="My Everyday Arch" />
        </div>

        <div class="field">
          <label for="notes">Notes for your artist</label>
          <textarea id="notes" name="notes" class="textarea" placeholder="Tap to add notes"></textarea>
        </div>

        <div class="field">
          <label>Tag</label>
          <div class="tag-row">
            <button type="button" class="tag active" onclick="selectTag(event)">Everyday</button>
            <button type="button" class="tag" onclick="selectTag(event)">Occasion</button>
            <button type="button" class="tag" onclick="selectTag(event)">Reference</button>
          </div>
        </div>

        <p class="note">Your artist will find this reference invaluable.</p>

        <div class="actions">
          <button type="submit" class="btn-primary">Save this look</button>
        </div>
      </form>
    </div>

  </main>

  <script>
    function selectTag(event) {
      document.querySelectorAll('.tag').forEach(el => el.classList.remove('active'));
      event.currentTarget.classList.add('active');
    }

    document.getElementById('saveLookForm').addEventListener('submit', function(event) {
      event.preventDefault();
      window.location.href = 'save-complete.php';
    });
  </script>

</body>
</html>