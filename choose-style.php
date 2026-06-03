<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Choose Your Style — Royals Arch Brow</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <style>
    :root {
      --black: #050505;
      --white: #f5f0e8;
      --white-dim: rgba(245,240,232,0.65);
      --gold: #c9a84c;
      --dark-grey: #2b2b2b;
      --transition: 0.25s ease;
      --font-display: 'Cormorant Garamond', serif;
      --font-body: 'Montserrat', sans-serif;
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      background: var(--black);
      color: var(--white);
      font-family: var(--font-body);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
      min-height: 100vh;
    }

    .page-shell {
      width: 100%;
      max-width: 750px;
      background: var(--black);
      border-radius: 28px;
      overflow: hidden;
      padding: 0 20px 20px 20px;
    }

    /* --- TOP HEADER --- */
    .page-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 18px 0 16px 0;
      border-bottom: 1px solid rgba(255,255,255,0.05);
    }

    .back-link {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 44px;
      height: 44px;
      border-radius: 50%;
      border: 1px solid var(--gold); /* GOLD BORDER */
      color: var(--gold);
      text-decoration: none;
      font-size: 1.1rem;
      transition: background var(--transition);
    }

    .back-link:hover { background: rgba(201,168,76,0.1); }

    .page-header-title {
      flex: 1;
      text-align: center;
      font-family: var(--font-body);
      font-weight: 600;
      font-size: 0.8rem;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: var(--white);
    }

    .logo-mark {
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--gold);
      font-weight: 700;
      font-family: var(--font-display);
      font-size: 1.4rem;
      letter-spacing: 0.05em;
      background: transparent;
      border: none;
    }

    .logo-mark img {
      width: 100%;
      height: 100%;
      object-fit: contain;
    }

    /* --- CONTENT GRID --- */
    .content {
      padding: 20px 0 10px 0;
      display: grid;
      gap: 24px;
    }

    .section-label {
      font-size: 0.65rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: var(--white-dim);
      margin-bottom: 0.6rem;
    }

    /* --- STYLE GRID --- */
    .style-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 0.7rem;
    }

    .style-card {
      background: rgba(255,255,255,0.02);
      border: 1px solid rgba(255,255,255,0.08);
      border-radius: 14px;
      padding: 12px 6px;
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 8px;
      cursor: pointer;
      transition: border-color var(--transition), background var(--transition);
    }

    .style-card:hover { border-color: rgba(255,255,255,0.2); }

    .style-card.selected {
      border-color: var(--gold);
      background: rgba(201,168,76,0.12);
      box-shadow: 0 4px 12px rgba(201,168,76,0.15);
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

    /* --- COLOUR ROW --- */
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
      transition: border-color var(--transition), transform var(--transition);
    }

    .color-swatch.selected {
      border-color: var(--gold);
      transform: scale(1.05);
      box-shadow: 0 0 0 1px var(--gold) inset;
    }

    /* CHECKMARK FOR SELECTED COLOUR */
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

    /* --- PREVIEW CARD --- */
    .preview-card {
      position: relative;
      border-radius: 28px;
      overflow: hidden;
      border: 1px solid var(--gold); /* GOLD BORDER */
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

    /* "PRIVIEW" TEXT INSIDE IMAGE */
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

    /* --- BOTTOM BUTTON --- */
    .actions {
      display: flex;
      flex-direction: column;
      gap: 0.8rem;
      margin-top: 0.2rem;
    }

    .btn-primary {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 100%;
      padding: 1rem;
      background: var(--dark-grey);
      color: var(--white);
      border-radius: 999px;
      text-transform: uppercase;
      letter-spacing: 0.12em;
      font-weight: 600;
      font-size: 0.8rem;
      border: none;
      cursor: pointer;
      text-decoration: none;
      transition: background var(--transition);
    }

    .btn-primary:hover {
      background: #3a3a3a;
    }

    @media (max-width: 600px) {
      .style-grid { grid-template-columns: repeat(2, 1fr); }
      .preview-card { min-height: 200px; }
    }
  </style>
</head>
<body>
  <div class="page-shell">
    <header class="page-header">
      <a class="back-link" href="feature-summary.php" aria-label="Back">&#8592;</a>
      <div class="page-header-title">CHOOSE YOUR STYLE</div>
      <div class="logo-mark"><img src="assets/logo.png" alt="CG logo" /></div>
    </header>
    <div class="content">
      <div>
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

      <div>
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

      <div>
        <div class="preview-card">
          <div class="preview-label">PRIVIEW</div>
          <img class="preview-image" src="assets/profile.png" alt="Preview" />
          <div class="preview-copy"><strong>Considered</strong> <span>.</span> Black</div>
        </div>
        <div class="preview-note">Black - selected</div>
      </div>

      <div class="actions">
        <a class="btn-primary" href="saved-look.php">PREVIEW THIS LOOK</a>
      </div>
    </div>
  </div>

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