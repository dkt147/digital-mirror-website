<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Considered — Royals Arch Brow</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <style>
    :root {
      --black: #0a0a0a;
      --white: #f5f0e8;
      --white-dim: rgba(245,240,232,0.65);
      --gold: #c9a84c;
      --gold-light: #d4b96a;
      --gold-muted: rgba(201,168,76,0.12);
      --border: rgba(201,168,76,0.25);
      --radius: 28px;
      --transition: 0.25s ease;
      --font-display: 'Cormorant Garamond', serif;
      --font-body: 'Montserrat', sans-serif;
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }
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

    .screen {
      width: 100%;
      max-width: 1100px;
      border-radius: 36px;
      background: rgba(255,255,255,0.02);
      border: 1px solid rgba(255,255,255,0.08);
      box-shadow: 0 24px 90px rgba(0,0,0,0.7);
      backdrop-filter: blur(16px);
      overflow: hidden;
    }

    .top-bar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 24px 24px 18px;
    }

    .top-bar a,
    .top-bar .brand {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      color: var(--gold);
      border: 1px solid var(--gold);
      transition: transform var(--transition), background var(--transition);
    }

    .top-bar a:hover { background: rgba(201,168,76,0.12); transform: scale(1.05); }

    .top-bar .title {
      flex: 1;
      text-align: center;
      font-family: var(--font-display);
      font-size: 0.95rem;
      letter-spacing: 0.28em;
      text-transform: uppercase;
      color: var(--gold);
    }

    .preview-frame {
      margin: 0 24px 20px;
      border-radius: 32px;
      background: #111111;
      min-height: 320px;
      position: relative;
      overflow: hidden;
      border: 1px solid rgba(255,255,255,0.08);
      display: grid;
      place-items: center;
    }

    .preview-frame::before {
      content: '';
      position: absolute;
      width: 60%;
      height: 78%;
      border: 1px solid rgba(201,168,76,0.35);
      border-radius: 32px;
      box-shadow: inset 0 0 40px rgba(201,168,76,0.12);
    }

    .preview-mask {
      position: absolute;
      width: 140px;
      height: 200px;
      border-radius: 120px 120px 160px 160px;
      border: 1px solid rgba(201,168,76,0.6);
      opacity: 0.9;
    }

    .preview-mask::before,
    .preview-mask::after {
      content: '';
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      width: 40px;
      height: 18px;
      border-radius: 999px;
      border: 1px solid rgba(201,168,76,0.6);
    }

    .preview-mask::before { top: 30%; }
    .preview-mask::after { top: 48%; width: 24px; }

    .preview-mask.small { top: 24%; }
    .preview-mask { top: 20%; }

    .content {
      padding: 0 24px 24px;
    }

    .headline {
      font-family: var(--font-display);
      font-style: italic;
      font-size: clamp(2rem, 4vw, 2.6rem);
      line-height: 1.1;
      color: var(--white);
      margin-bottom: 10px;
    }

    .subtext {
      color: var(--gold);
      font-size: 0.95rem;
      margin-bottom: 18px;
    }

    .description {
      color: var(--white-dim);
      font-size: 0.95rem;
      line-height: 1.7;
      margin-bottom: 28px;
    }

    .btn-primary {
      display: inline-flex;
      width: 100%;
      padding: 1rem 1.2rem;
      border-radius: 999px;
      border: none;
      background: var(--gold);
      color: #0a0a0a;
      text-transform: uppercase;
      font-weight: 700;
      letter-spacing: 0.16em;
      justify-content: center;
      text-decoration: none;
      transition: transform var(--transition), background var(--transition);
    }

    .btn-primary:hover { background: var(--gold-light); transform: translateY(-1px); }

    @media (max-width: 520px) {
      .screen { border-radius: 30px; }
      .top-bar { padding: 20px 20px 16px; }
      .preview-frame { min-height: 280px; margin: 0 20px 18px; }
      .headline { font-size: 2.2rem; }
    }
  </style>
</head>
<body>
  <div class="screen">
    <div class="top-bar">
      <a href="define-style.php" aria-label="Back">&#8592;</a>
      <div class="title">CONSIDERED</div>
      <div class="brand"><img src="assets/logo.png" alt="CG logo" /></div>
    </div>

    <div class="preview-frame">
      <div class="preview-mask"></div>
    </div>

    <div class="content">
      <h1 class="headline">Considered</h1>
      <div class="subtext">Refined. Balanced. Effortlessly exact.</div>
      <p class="description">A brow that has clear thought about. Never overdone.</p>
      <a class="btn-primary" href="compare-looks.php">This is the one</a>
    </div>
  </div>
</body>
</html>