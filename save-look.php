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
      --radius: 18px;
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

    /* ====== SAVE LOOK CARD (UPDATED) ====== */
    .save-look-card {
      border-radius: var(--radius);
      padding: 0;
      max-width: 600px;
      margin: 0 auto;
      width: 100%;
    }

    .preview-card {
      border-radius: var(--radius);
      background: #151513;
      min-height: 140px;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      overflow: hidden;
      margin-bottom: 2rem;
      padding: 24px 16px;
      width: 100%;
    }

    .preview-placeholder {
      color: #9e9e9e;
      font-size: 0.95rem;
      letter-spacing: 0.04em;
      text-align: center;
      z-index: 1;
      font-family: var(--font-body);
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
      gap: 24px;
      width: 100%;
    }

    .field {
      display: grid;
      gap: 8px;
    }

    label {
      color: var(--gold);
      font-size: 0.65rem;
      text-transform: uppercase;
      letter-spacing: 0.18em;
      font-weight: 500;
      font-family: var(--font-body);
    }

    .input,
    .textarea {
      width: 100%;
      border: 1px solid #c9a84c;
      border-radius: 999px;
      background: var(--dark-input);
      color: var(--white);
      padding: 14px 18px;
      font-family: var(--font-body);
      font-size: 0.95rem;
      outline: none;
      transition: all var(--transition);
      line-height: 1.4;
    }

    .textarea {
      border-radius: 20px;
      min-height: 108px;
      resize: vertical;
      padding: 16px;
    }

    .input:focus,
    .textarea:focus {
      border-color: var(--gold-light);
      box-shadow: 0 0 0 3px rgba(201,168,76,0.12);
    }

    .input::placeholder,
    .textarea::placeholder {
      color: rgba(245, 240, 232, 0.4);
    }

    .tag-row {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 12px;
    }

    .tag {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      min-height: 52px;
      border-radius: 999px;
      border: 1px solid #333;
      background: rgba(255,255,255,0.02);
      color: var(--white-dim);
      text-transform: uppercase;
      letter-spacing: 0.08em;
      font-size: 0.6rem;
      font-weight: 600;
      cursor: pointer;
      transition: all var(--transition);
      font-family: var(--font-body);
    }

    .tag:hover {
      border-color: #c9a84c;
      color: var(--white);
      background: rgba(201, 168, 76, 0.10);
    }

    .tag.active {
      border: 1px solid var(--gold);
      background: rgba(201, 168, 76, 0.10);
      color: var(--gold);
    }

    .actions {
      display: grid;
      gap: 0.75rem;
      margin-top: 4px;
      width: 100%;
    }

    .btn-primary {
      width: 100%;
      border: none;
      border-radius: 999px;
      padding: 0.85rem 1.2rem;
      background: #c9a84c;
      color:  var(--white);
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.12em;
      cursor: pointer;
      transition: all var(--transition);
      font-family: var(--font-body);
      font-size: 0.75rem;
    }

    .btn-primary:hover {
      color: var(--black);
      transform: translateY(-2px);
    }

    .note {
      color: var(--white-dim);
      font-size: 0.85rem;
      text-align: center;
      margin-top: 4px;
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
      .save-look-card { padding: 0; }
      .preview-card { min-height: 120px; padding: 18px 14px; }
      .section-title { font-size: 1.8rem; }
      .tag-row { grid-template-columns: repeat(3, minmax(0, 1fr)); }
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
    </div>

    <!-- CONTENT HEADER -->
    <div class="fade-2">
      <div class="page-label">Save Look</div>
      <div class="page-title">Name this look.</div>
      <p style="color:var(--white-dim); font-size:0.9rem; margin-top:0.25rem;">Something you'll recognise at a glance.</p>
    </div>

    <!-- SAVE LOOK CARD (UPDATED) -->
    <div class="save-look-card fade-3">
      <div class="preview-card">
        <div class="preview-placeholder">
          Leave As Placeholder.
        </div>
      </div>

      <form id="saveLookForm" class="form">
        <div class="field">
          <label for="lookName">LOOK NAME</label>
          <input id="lookName" name="lookName" class="input" type="text" placeholder="My Everyday Arch" />
        </div>

        <div class="field">
          <label for="notes">NOTES FOR YOUR ARTIST</label>
          <textarea id="notes" name="notes" class="textarea" placeholder="Tap to add notes"></textarea>
        </div>

        <div class="field">
          <label>TAG</label>
          <div class="tag-row">
            <button type="button" class="tag active" onclick="selectTag(event)">EVERYDAY</button>
            <button type="button" class="tag" onclick="selectTag(event)">OCCASION</button>
            <button type="button" class="tag" onclick="selectTag(event)">REFERENCE</button>
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