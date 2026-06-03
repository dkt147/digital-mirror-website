<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Define Your Look — Royals Arch Brow</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <style>
    :root {
      --black: #0a0a0a;
      --dark-card: #111111;
      --white: #f5f0e8;
      --white-dim: rgba(245,240,232,0.65);
      --gold: #c9a84c;
      --gold-muted: rgba(201,168,76,0.08);
      --border: rgba(201,168,76,0.25);
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
      min-height: 100vh;
      padding: 16px;
    }

    .page-shell {
      width: 100%;
      max-width: 750px;
      background: rgba(0,0,0,0.9);
      border: 1px solid rgba(255,255,255,0.06);
      border-radius: 36px;
      padding: 22px 24px 30px;
      backdrop-filter: blur(6px);
      box-shadow: 0 20px 60px rgba(0,0,0,0.6);
    }

    /* TOP BAR */
    .top-bar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 28px;
    }

    .back-btn {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 46px;
      height: 46px;
      border-radius: 50%;
      border: 1px solid var(--gold);
      color: var(--gold);
      text-decoration: none;
      font-size: 1.3rem;
      transition: background 0.2s;
    }

    .back-btn:hover {
      background: rgba(201,168,76,0.1);
    }

    .top-title {
      font-family: var(--font-body);
      font-size: 0.8rem;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: var(--gold);
      font-weight: 600;
    }

    .logo-mark {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 46px;
      height: 46px;
      color: var(--gold);
      font-family: var(--font-display);
      font-weight: 700;
      font-size: 1.4rem;
      background: radial-gradient(circle at top left, rgba(201,168,76,0.1), transparent 40%);
      border: 1px solid rgba(255,255,255,0.06);
      border-radius: 50%;
    }

    .logo-mark img {
      width: 100%;
      height: 100%;
      object-fit: contain;
    }

    /* HERO TEXT */
    .hero-title {
      font-family: var(--font-display);
      font-style: italic;
      font-size: clamp(2rem, 4.5vw, 2.8rem);
      line-height: 1.05;
      margin-bottom: 0.2rem;
    }

    .hero-sub {
      font-size: 0.9rem;
      color: var(--white-dim);
      font-style: italic;
      margin-bottom: 2rem;
      letter-spacing: 0.02em;
    }

    /* OPTION CARDS */
    .option-group {
      display: flex;
      flex-direction: column;
      gap: 14px;
      margin-bottom: 32px;
    }

    .option-card {
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      padding: 18px 20px;
      border-radius: 24px;
      border: 1px solid rgba(255,255,255,0.08);
      background: rgba(255,255,255,0.02);
      cursor: pointer;
      transition: border-color 0.25s, background 0.25s, box-shadow 0.25s;
    }

    .option-card.selected {
      border-color: var(--gold);
      background: var(--gold-muted);
      box-shadow: 0 12px 28px rgba(201,168,76,0.12);
    }

    .option-content {
      display: flex;
      flex-direction: column;
      gap: 6px;
      max-width: 80%;
    }

    .option-title {
      font-family: var(--font-display);
      font-size: 1.4rem;
      color: var(--white);
      line-height: 1.1;
    }

    .option-desc {
      font-size: 0.85rem;
      color: var(--white-dim);
      line-height: 1.4;
    }

    .option-right {
      display: flex;
      align-items: center;
      gap: 16px;
    }

    /* BROW SHAPE ICON */
    .brow-icon svg {
      width: 70px;
      height: 30px;
      fill: none;
      stroke: var(--white-dim);
      stroke-width: 3;
      stroke-linecap: round;
    }

    .option-card.selected .brow-icon svg {
      stroke: var(--white);
    }

    /* RADIO BUTTON */
    .radio-circle {
      width: 22px;
      height: 22px;
      border-radius: 50%;
      border: 1px solid var(--white-dim);
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
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background: var(--gold);
      opacity: 0;
      transition: opacity 0.25s;
    }

    .option-card.selected .radio-circle::after {
      opacity: 1;
    }

    /* BOTTOM BUTTON */
    .btn-primary {
      display: block;
      width: 100%;
      padding: 1rem;
      background: #222; /* Dark Grey */
      color: var(--white);
      border: none;
      border-radius: 999px;
      font-size: 0.85rem;
      font-weight: 700;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      text-align: center;
      text-decoration: none;
      transition: background 0.2s;
    }

    .btn-primary:hover {
      background: #333;
    }

    @media (max-width: 480px) {
      .page-shell { padding: 16px 14px 22px; }
      .option-card { padding: 14px 16px; }
      .option-title { font-size: 1.2rem; }
      .brow-icon svg { width: 60px; height: 24px; }
    }
  </style>
</head>
<body>
  <div class="page-shell">
    <header class="top-bar">
      <a class="back-btn" href="choose-style.php" aria-label="Back">&#8592;</a>
      <span class="top-title">CHOOSE YOUR STYLE</span>
      <div class="logo-mark"><img src="assets/logo.png" alt="CG logo" /></div>
    </header>

    <main>
      <h1 class="hero-title">How defined would you like it?</h1>
      <p class="hero-sub">The same shape, three expressions.</p>

      <div class="option-group" id="optionsContainer">
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

      <a class="btn-primary" href="preview-look.php">SEE THIS LOOK</a>
    </main>
  </div>

  <script>
    const cards = document.querySelectorAll('.option-card');
    const container = document.getElementById('optionsContainer');

    cards.forEach(card => {
      card.addEventListener('click', function() {
        // Remove selected from all
        cards.forEach(c => c.classList.remove('selected'));
        // Add to clicked
        this.classList.add('selected');
      });
    });
  </script>
</body>
</html>