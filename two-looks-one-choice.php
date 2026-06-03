<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Two Looks — Royals Arch Brow</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <style>
    :root {
      --black: #0a0a0a;
      --white: #f5f0e8;
      --gold: #c9a84c;
      --dark-grey: #2b2b2b;
      --font-display: 'Cormorant Garamond', serif;
      --font-body: 'Montserrat', sans-serif;
    }
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      background: var(--black);
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      padding: 20px;
    }
    .screen {
      width: 100%;
      max-width: 700px;
      background: var(--black);
      border: 1px solid rgba(255,255,255,0.08);
      border-radius: 36px;
      padding: 24px 24px 28px;
      box-shadow: 0 24px 90px rgba(0,0,0,0.7);
    }
    .top-bar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 24px;
    }
    .top-bar a {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      color: var(--gold);
      border: 1px solid var(--gold);
      font-size: 1.2rem;
    }
    .logo-mark {
      width: 44px;
      height: 44px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--gold);
      font-family: var(--font-display);
      font-weight: 700;
      font-size: 1.3rem;
    }
    .logo-mark img {
      width: 100%;
      height: 100%;
      object-fit: contain;
    }
    .hero-title {
      text-align: center;
      font-family: var(--font-display);
      font-style: italic;
      font-size: 2.6rem;
      line-height: 1.05;
      color: var(--white);
      margin-bottom: 0.25rem;
    }
    .hero-sub {
      text-align: center;
      font-family: var(--font-display);
      font-style: italic;
      color: var(--gold);
      font-size: 1.1rem;
      margin-bottom: 2rem;
    }
    .cards-wrapper {
      display: flex;
      gap: 16px;
      margin-bottom: 28px;
    }
    .card {
      flex: 1;
      border-radius: 20px;
      padding: 20px 16px;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 12px;
      border: 1px solid rgba(255,255,255,0.08);
      background: rgba(255,255,255,0.02);
      cursor: pointer;
      transition: border-color 0.25s, background 0.25s;
    }
    .card.selected {
      border-color: var(--gold);
      background: rgba(201,168,76,0.1);
    }
    .face-mini {
      width: 70px;
      height: 90px;
      border: 1px solid rgba(201,168,76,0.3);
      border-radius: 50% 50% 40% 40%;
      position: relative;
    }
    .face-mini::before {
      content: '';
      position: absolute;
      top: 22%;
      left: 50%;
      transform: translateX(-50%);
      width: 28px;
      height: 12px;
      border: 1px solid var(--gold);
      border-radius: 999px 999px 40px 40px;
      border-bottom: none;
    }
    .card-title {
      font-family: var(--font-display);
      font-size: 1.1rem;
      color: var(--white);
    }
    .card-sub {
      font-size: 0.7rem;
      color: rgba(255,255,255,0.5);
      text-transform: uppercase;
      letter-spacing: 0.06em;
    }
    .check-circle {
      width: 20px;
      height: 20px;
      border-radius: 50%;
      border: 1px solid var(--gold);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.7rem;
      color: var(--gold);
    }
    .card.selected .check-circle {
      background: var(--gold);
      color: var(--black);
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
      letter-spacing: 0.16em;
      justify-content: center;
      text-decoration: none;
      font-size: 0.8rem;
      transition: background 0.25s;
    }
    .bottom-link {
      display: block;
      text-align: center;
      color: var(--gold);
      font-size: 0.75rem;
      text-decoration: none;
      margin-top: 12px;
      transition: opacity 0.25s;
    }
    .bottom-link:hover { opacity: 0.7; }
    @media (max-width: 480px) {
      .cards-wrapper { flex-direction: column; }
    }
  </style>
</head>
<body>
  <div class="screen">
    <div class="top-bar">
      <a href="preview-look.php">&#8592;</a>
      <div class="logo-mark"><img src="assets/logo.png" alt="CG logo" /></div>
    </div>

    <h1 class="hero-title">Two looks. One choice.</h1>
    <p class="hero-sub">Take your time with this.</p>

    <div class="cards-wrapper">
      <div class="card selected">
        <div class="face-mini"></div>
        <div class="card-title">Considered</div>
        <div class="card-sub">Ash Brown</div>
        <div class="check-circle">&#10003;</div>
      </div>
      <div class="card">
        <div class="face-mini"></div>
        <div class="card-title">Deliberate</div>
        <div class="card-sub"></div>
        <div class="check-circle"></div>
      </div>
    </div>

    <a class="btn-primary" href="understated.php">I CHOOSE CONSIDERED</a>
    <a class="bottom-link" href="two-looks-one-choice.php">Go back to all styles.</a>
  </div>
</body>
</html>