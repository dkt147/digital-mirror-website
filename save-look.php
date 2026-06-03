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
      --black: #0a0a0a;
      --white: #f5f0e8;
      --white-dim: rgba(245,240,232,0.65);
      --gold: #c9a84c;
      --gold-light: #d4b96a;
      --gold-dark: #8a6f2e;
      --border: rgba(201,168,76,0.2);
      --card: rgba(255,255,255,0.03);
      --radius: 30px;
      --transition: 0.25s ease;
      --font-display: 'Cormorant Garamond', serif;
      --font-body: 'Montserrat', sans-serif;
    }

    html, body { min-height: 100%; }
    body {
      background: var(--black);
      color: var(--white);
      font-family: var(--font-body);
      line-height: 1.5;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 24px 16px;
    }

    .page {
      width: 100%;
      max-width: 1100px;
      border-radius: 36px;
      background: rgba(255,255,255,0.02);
      border: 1px solid rgba(255,255,255,0.08);
      box-shadow: 0 24px 90px rgba(0,0,0,0.7);
      backdrop-filter: blur(16px);
      overflow: hidden;
    }

    .topbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 24px 24px 18px;
    }

    .topbar a,
    .topbar .brand {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      color: var(--gold);
      border: 1px solid var(--gold);
      text-decoration: none;
      transition: transform var(--transition), background var(--transition);
    }

    .topbar a:hover { background: rgba(201,168,76,0.12); transform: scale(1.05); }
    .topbar .title {
      flex: 1;
      text-align: center;
      font-family: var(--font-display);
      font-size: 0.95rem;
      letter-spacing: 0.28em;
      text-transform: uppercase;
      color: var(--gold);
    }

    .topbar .save-btn {
      background: var(--gold);
      color: #0a0a0a;
      border: none;
      border-radius: 999px;
      padding: 0.6rem 1.6rem;
      font-size: 0.8rem;
      font-weight: 700;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      cursor: pointer;
      transition: all var(--transition);
      font-family: var(--font-body);
    }

    .topbar .save-btn:hover {
      background: var(--gold-light);
      transform: translateY(-1px);
    }

    .content { padding: 0 24px 24px; }

    /* preview card */
    .preview-card {
      border-radius: var(--radius);
      background: rgba(255,255,255,0.03);
      border: 1px solid rgba(255,255,255,0.08);
      min-height: 160px;
      display: grid;
      place-items: center;
      position: relative;
      overflow: hidden;
      margin-bottom: 28px;
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
      border: 1px solid rgba(255,255,255,0.12);
      border-radius: 999px;
      background: rgba(255,255,255,0.03);
      color: var(--white);
      padding: 14px 18px;
      font-family: var(--font-body);
      font-size: 0.95rem;
      outline: none;
      transition: border-color var(--transition), box-shadow var(--transition);
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
      border: 1px solid rgba(255,255,255,0.12);
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
      border-color: var(--border);
      color: var(--white);
    }

    .tag.active {
      background: rgba(201,168,76,0.12);
      border-color: var(--gold);
      color: var(--gold);
    }

    .submit-row {
      margin-top: 8px;
    }

    .btn-primary {
      width: 100%;
      border: none;
      border-radius: 999px;
      padding: 1rem 1.2rem;
      background: var(--gold);
      color: #0a0a0a;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.12em;
      cursor: pointer;
      transition: all var(--transition);
      font-family: var(--font-body);
      font-size: 0.85rem;
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

    @media (max-width: 520px) {
      .page { border-radius: 30px; }
      .topbar { padding: 20px 20px 16px; }
      .content { padding: 0 20px 20px; }
      .tag-row { grid-template-columns: repeat(2, minmax(0, 1fr)); }
    }
  </style>
</head>
<body>
  <section class="page">
    <div class="topbar">
      <a href="javascript:history.back()" aria-label="Back">&#8592;</a>
      <div class="title">Save Look</div>
      <button class="save-btn" type="submit" form="saveLookForm">Save</button>
    </div>

    <div class="content">
      <!-- preview card -->
      <div class="preview-card">
        <div class="preview-placeholder">
          <strong>Your look preview</strong><br />
          <span style="font-size:0.85rem; color:var(--white-dim);">Stencil overlay appears here</span>
        </div>
      </div>

      <h1 class="section-title">Name this look.</h1>
      <p class="section-subtitle">Something you'll recognise at a glance.</p>
      <br />

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

        <div class="submit-row">
          <button type="submit" class="btn-primary">Save this look</button>
        </div>
      </form>
    </div>
  </section>

  <script>
    function selectTag(event) {
      document.querySelectorAll('.tag').forEach(el => el.classList.remove('active'));
      event.currentTarget.classList.add('active');
    }

    document.getElementById('saveLookForm').addEventListener('submit', function(event) {
      event.preventDefault();
      // simulate saving and redirect to saved look page
      window.location.href = 'save-complete.php';
    });
  </script>
</body>
</html>