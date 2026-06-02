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
      --gold-light: #d4b96a;
      --border: rgba(255,255,255,0.08);
      --transition: 0.25s ease;
      --font-display: 'Cormorant Garamond', serif;
      --font-body: 'Montserrat', sans-serif;
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }
    html, body { min-height: 100%; }
    body {
      background: radial-gradient(circle at top, rgba(201,168,76,0.08), transparent 25%), var(--black);
      color: var(--white);
      font-family: var(--font-body);
      line-height: 1.5;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 28px 18px;
    }

    .page-shell {
      width: 100%;
      max-width: 980px;
      background: rgba(10,10,10,0.96);
      border: 1px solid rgba(255,255,255,0.08);
      border-radius: 32px;
      box-shadow: 0 30px 90px rgba(0,0,0,0.55);
      overflow: hidden;
    }

    .page-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      padding: 22px 24px;
      border-bottom: 1px solid rgba(255,255,255,0.06);
      background: rgba(255,255,255,0.02);
    }

    .back-link {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 48px;
      height: 48px;
      border-radius: 50%;
      border: 1px solid rgba(255,255,255,0.12);
      color: var(--gold);
      text-decoration: none;
      font-size: 1.2rem;
      transition: transform var(--transition), background var(--transition);
    }

    .back-link:hover {
      transform: scale(1.05);
      background: rgba(255,255,255,0.06);
    }

    .page-header-title {
      flex: 1;
      text-align: center;
      font-family: var(--font-display);
      font-size: 0.92rem;
      letter-spacing: 0.28em;
      text-transform: uppercase;
      color: var(--white);
    }

    .logo-mark {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 48px;
      height: 48px;
      border-radius: 50%;
      background: radial-gradient(circle at top left, rgba(201,168,76,0.2), transparent 42%);
      border: 1px solid rgba(255,255,255,0.12);
      color: var(--gold);
      font-weight: 700;
      letter-spacing: 0.08em;
      font-size: 0.95rem;
    }

    .content {
      padding: 26px 26px 28px;
      display: grid;
      gap: 24px;
    }

    .section-label {
      font-size: 0.72rem;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--white-dim);
      margin-bottom: 1rem;
    }

    .style-grid {
      display: grid;
      grid-template-columns: repeat(4, minmax(0, 1fr));
      gap: 1rem;
    }

    .style-card {
      background: rgba(255,255,255,0.03);
      border: 1px solid rgba(255,255,255,0.08);
      border-radius: 24px;
      padding: 18px 14px;
      text-align: center;
      display: grid;
      gap: 0.75rem;
      transition: border-color var(--transition), transform var(--transition), box-shadow var(--transition), background var(--transition);
      cursor: pointer;
    }

    .style-card:hover {
      border-color: rgba(255,255,255,0.18);
    }

    .style-card.selected {
      border-color: var(--gold);
      background: rgba(201,168,76,0.1);
      box-shadow: 0 18px 30px rgba(201,168,76,0.18);
      transform: translateY(-1px);
    }

    .style-icon {
      width: 100%;
      height: 44px;
      border-radius: 18px;
      position: relative;
      overflow: hidden;
      background: linear-gradient(135deg, rgba(255,255,255,0.15), rgba(255,255,255,0.04));
    }

    .style-icon::before {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(circle at center, rgba(255,255,255,0.35), transparent 44%);
    }

    .style-label {
      font-size: 0.72rem;
      color: var(--white);
      text-transform: uppercase;
      letter-spacing: 0.12em;
    }

    .style-label.selected {
      color: var(--gold);
    }

    .color-row {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      flex-wrap: wrap;
      margin-bottom: 0.5rem;
    }

    .color-swatch {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      border: 1px solid rgba(255,255,255,0.08);
      cursor: pointer;
      transition: border-color var(--transition), transform var(--transition), box-shadow var(--transition);
    }

    .color-swatch.selected {
      border-color: var(--gold);
      transform: scale(1.05);
      box-shadow: 0 12px 24px rgba(201,168,76,0.18);
    }

    .color-swatch[data-color="#efd8bb"] { background: #efd8bb; }
    .color-swatch[data-color="#b27f50"] { background: #b27f50; }
    .color-swatch[data-color="#89603f"] { background: #89603f; }
    .color-swatch[data-color="#4f2a18"] { background: #4f2a18; }
    .color-swatch[data-color="#6e3d24"] { background: #6e3d24; }
    .color-swatch[data-color="#caa87d"] { background: #caa87d; }

    .preview-card {
      position: relative;
      border-radius: 32px;
      overflow: hidden;
      border: 1px solid rgba(255,255,255,0.08);
      background: linear-gradient(180deg, rgba(255,255,255,0.05), rgba(255,255,255,0.02));
      min-height: 320px;
      display: grid;
      place-items: center;
    }

    .preview-card::before {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(circle at top right, rgba(201,168,76,0.16), transparent 42%);
      pointer-events: none;
    }

    .preview-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
      opacity: 0.18;
      filter: blur(2px);
    }

    .preview-copy {
      position: absolute;
      left: 1.4rem;
      right: 1.4rem;
      bottom: 1.4rem;
      color: var(--white);
      font-family: var(--font-display);
      font-size: 1rem;
      letter-spacing: 0.04em;
      line-height: 1.2;
    }

    .preview-copy strong {
      color: var(--gold);
      font-weight: 600;
    }

    .preview-note {
      color: var(--white-dim);
      font-size: 0.82rem;
      letter-spacing: 0.14em;
      text-transform: uppercase;
    }

    .actions {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    .btn-primary {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 100%;
      padding: 1rem 1.2rem;
      background: var(--gold);
      color: var(--black);
      border-radius: 999px;
      text-transform: uppercase;
      letter-spacing: 0.16em;
      font-weight: 700;
      border: none;
      transition: background var(--transition), transform var(--transition);
      text-decoration: none;
    }

    .btn-primary:hover {
      background: var(--gold-light);
      transform: translateY(-1px);
    }

    @media (max-width: 840px) {
      .style-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
    }

    @media (max-width: 560px) {
      body { padding: 16px; }
      .page-shell { max-width: 100%; }
      .page-header { padding: 18px 16px; }
      .page-header-title { font-size: 0.8rem; }
      .content { padding: 20px 18px 22px; }
      .style-grid { grid-template-columns: 1fr; }
      .preview-card { min-height: 260px; }
    }
  </style>
</head>
<body>
  <div class="page-shell">
    <header class="page-header">
      <a class="back-link" href="feature-summary.php" aria-label="Back">&#8592;</a>
      <div class="page-header-title">CHOOSE YOUR STYLE</div>
      <div class="logo-mark">CG</div>
    </header>
    <div class="content">
      <div>
        <div class="section-label">Style</div>
        <div class="style-grid">
          <button class="style-card selected" type="button" data-style="Considered">
            <div class="style-icon"></div>
            <div class="style-label selected">Considered</div>
          </button>
          <button class="style-card" type="button" data-style="Arch">
            <div class="style-icon"></div>
            <div class="style-label">Arch</div>
          </button>
          <button class="style-card" type="button" data-style="Straight">
            <div class="style-icon"></div>
            <div class="style-label">Straight</div>
          </button>
          <button class="style-card" type="button" data-style="Sharp">
            <div class="style-icon"></div>
            <div class="style-label">Sharp</div>
          </button>
          <button class="style-card" type="button" data-style="Feathered">
            <div class="style-icon"></div>
            <div class="style-label">Feathered</div>
          </button>
          <button class="style-card" type="button" data-style="Bold">
            <div class="style-icon"></div>
            <div class="style-label">Bold</div>
          </button>
          <button class="style-card" type="button" data-style="Natural">
            <div class="style-icon"></div>
            <div class="style-label">Natural</div>
          </button>
          <button class="style-card" type="button" data-style="Sculpted">
            <div class="style-icon"></div>
            <div class="style-label">Sculpted</div>
          </button>
        </div>
      </div>

      <div>
        <div class="section-label">Colour</div>
        <div class="color-row">
          <span class="color-swatch" data-color="#efd8bb"></span>
          <span class="color-swatch" data-color="#b27f50"></span>
          <span class="color-swatch selected" data-color="#89603f"></span>
          <span class="color-swatch" data-color="#4f2a18"></span>
          <span class="color-swatch" data-color="#6e3d24"></span>
          <span class="color-swatch" data-color="#caa87d"></span>
        </div>
      </div>

      <div class="preview-card">
        <img class="preview-image" src="https://via.placeholder.com/900x800?text=Preview" alt="Preview image" />
        <div class="preview-copy"><strong>Considered</strong> · Black</div>
      </div>

      <div class="preview-note">Black - selected</div>

      <div class="actions">
        <a class="btn-primary" href="define-style.php">Preview this look</a>
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
      '#b27f50': 'Brown',
      '#89603f': 'Black',
      '#4f2a18': 'Dark',
      '#6e3d24': 'Espresso',
      '#caa87d': 'Warm'
    };

    function updatePreview() {
      const activeStyle = document.querySelector('.style-card.selected')?.dataset.style || 'Considered';
      const activeColor = document.querySelector('.color-swatch.selected')?.dataset.color || '#89603f';
      const colorLabel = colorMap[activeColor] || 'Black';

      previewCopy.innerHTML = `<strong>${activeStyle}</strong> · ${colorLabel}`;
      previewNote.textContent = `${colorLabel} - selected`;
    }

    styleCards.forEach(card => {
      card.addEventListener('click', () => {
        styleCards.forEach(item => {
          item.classList.remove('selected');
          item.querySelector('.style-label').classList.remove('selected');
        });

        card.classList.add('selected');
        card.querySelector('.style-label').classList.add('selected');
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
