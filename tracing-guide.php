<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tracing Guide — Royals Arch Brow</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <style>
    :root {
      --black: #0a0a0a;
      --white: #f5f0e8;
      --white-dim: rgba(245,240,232,0.6);
      --gold: #c9a84c;
      --dark-grey: #2b2b2b;
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
      padding: 20px;
    }

    .page {
      width: 100%;
      max-width: 650px;
      background: var(--black);
      border: 1px solid rgba(255,255,255,0.06);
      border-radius: 36px;
      padding: 24px 24px 30px;
      box-shadow: 0 24px 60px rgba(0,0,0,0.7);
    }

    .topbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 24px;
    }

    .topbar a,
    .topbar .brand {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--gold);
      border: 1px solid var(--gold);
      text-decoration: none;
      transition: background 0.2s;
    }

    .topbar a:hover { background: rgba(201,168,76,0.1); }

    .topbar .brand {
      font-family: var(--font-display);
      font-weight: 700;
      font-size: 1.2rem;
    }

    .topbar .title {
      flex: 1;
      text-align: center;
      font-size: 0.75rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: var(--gold);
      font-weight: 600;
    }

    .guide-visual {
      position: relative;
      width: 100%;
      height: 220px;
      border-radius: 28px;
      border: 1px solid rgba(255,255,255,0.05);
      background: rgba(255,255,255,0.02);
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 24px;
      overflow: hidden;
    }

    .face-outline {
      position: relative;
      width: 130px;
      height: 190px;
      border: 1px solid rgba(201,168,76,0.3);
      border-radius: 50% 50% 40% 40%;
    }

    .face-outline::before {
      content: '';
      position: absolute;
      top: 22%;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 24px;
      border: 1px solid var(--gold);
      border-radius: 999px 999px 40px 40px;
      border-bottom: none;
    }

    .center-dot {
      position: absolute;
      top: 22%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 12px;
      height: 12px;
      background: var(--gold);
      border-radius: 50%;
      box-shadow: 0 0 20px rgba(201,168,76,0.3);
    }

    .headline {
      font-family: var(--font-display);
      font-style: italic;
      font-size: 2.2rem;
      line-height: 1.05;
      color: var(--white);
      margin-bottom: 8px;
    }

    .subtitle {
      color: var(--white-dim);
      font-size: 0.9rem;
      line-height: 1.6;
      margin-bottom: 24px;
    }

    .steps {
      display: flex;
      flex-direction: column;
      gap: 14px;
      margin-bottom: 20px;
    }

    .step {
      display: flex;
      align-items: center;
      gap: 14px;
    }

    .step-number {
      width: 28px;
      height: 28px;
      border-radius: 50%;
      border: 1px solid var(--gold);
      color: var(--gold);
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 600;
      font-size: 0.9rem;
      background: rgba(201,168,76,0.08);
    }

    .step-text {
      color: var(--white-dim);
      font-size: 0.9rem;
    }

    .small-note {
      color: rgba(255,255,255,0.4);
      font-size: 0.8rem;
      margin-bottom: 24px;
    }

    .btn-primary {
      display: flex;
      width: 100%;
      padding: 1rem;
      border-radius: 999px;
      border: none;
      background: var(--dark-grey);
      color: var(--white);
      text-transform: uppercase;
      font-weight: 700;
      letter-spacing: 0.12em;
      justify-content: center;
      text-decoration: none;
      font-size: 0.8rem;
      transition: background 0.2s;
    }

    .btn-primary:hover {
      background: #3a3a3a;
    }

    .watch-link {
      display: block;
      text-align: center;
      margin-top: 12px;
      color: var(--gold);
      text-decoration: none;
      font-size: 0.8rem;
      transition: opacity 0.2s;
    }

    .watch-link:hover {
      opacity: 0.7;
    }

    @media (max-width: 480px) {
      .page { padding: 16px 16px 22px; }
      .headline { font-size: 1.8rem; }
      .guide-visual { height: 180px; }
      .face-outline { width: 100px; height: 150px; }
      .face-outline::before { width: 60px; height: 18px; }
    }
  </style>
</head>
<body>
  <div class="page">
    <div class="topbar">
      <a href="your-look.php">&#8592;</a>
      <div class="title">TRACING GUIDE</div>
      <div class="brand"><img src="assets/logo.png" alt="CG logo" /></div>
    </div>

    <div class="guide-visual">
      <div class="face-outline">
        <span class="center-dot"></span>
      </div>
    </div>

    <h1 class="headline">Draw the shape you want to keep.</h1>
    <p class="subtitle">Trace your ideal brow. Share the guide with your brow artist — they'll work within your line.</p>

    <div class="steps">
      <div class="step">
        <div class="step-number">1</div>
        <div class="step-text">Frame your face in the guide</div>
      </div>
      <div class="step">
        <div class="step-number">2</div>
        <div class="step-text">Trace each brow with your fingertip</div>
      </div>
      <div class="step">
        <div class="step-number">3</div>
        <div class="step-text">Save and share with your artist</div>
      </div>
    </div>

    <p class="small-note">Draw freely. Every line can be refined as you go.</p>

    <a class="btn-primary" href="guide-complete.php">BEGIN DRAWING</a>
    <a class="watch-link" href="watch-guide.php">Watch how it works.</a>
  </div>
</body>
</html>