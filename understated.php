<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Understated — Royals Arch Brow</title>
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
    .top-title {
      flex: 1;
      text-align: center;
      font-family: var(--font-body);
      font-size: 0.8rem;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: var(--gold);
      font-weight: 600;
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
    .face-large {
      width: 160px;
      height: 220px;
      border: 1px solid rgba(201,168,76,0.3);
      border-radius: 50% 50% 40% 40%;
      margin: 10px auto 30px;
      position: relative;
    }
    .face-large::before {
      content: '';
      position: absolute;
      top: 22%;
      left: 50%;
      transform: translateX(-50%);
      width: 50px;
      height: 18px;
      border: 1px solid var(--gold);
      border-radius: 999px 999px 40px 40px;
      border-bottom: none;
    }
    .content { text-align: center; }
    .headline {
      font-family: var(--font-display);
      font-style: italic;
      font-size: 2.6rem;
      color: var(--white);
      margin-bottom: 0.25rem;
    }
    .subtext {
      font-family: var(--font-display);
      font-style: italic;
      color: var(--gold);
      font-size: 1.1rem;
      margin-bottom: 0.8rem;
    }
    .description {
      font-family: var(--font-display);
      font-style: italic;
      color: rgba(255,255,255,0.7);
      font-size: 1rem;
      line-height: 1.6;
      max-width: 85%;
      margin: 0 auto 28px;
    }
    .divider {
      width: 60px;
      height: 2px;
      background: var(--gold);
      margin: 0 auto 28px;
      opacity: 0.6;
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
    }
    .bottom-link {
      display: block;
      text-align: center;
      color: var(--gold);
      font-size: 0.75rem;
      text-decoration: none;
      margin-top: 12px;
    }
  </style>
</head>
<body>
  <div class="screen">
    <div class="top-bar">
      <a href="two-looks-one-choice.php">&#8592;</a>
      <div class="top-title">UNDERSTATED</div>
      <div class="logo-mark"><img src="assets/logo.png" alt="CG logo" /></div>
    </div>

    <div class="face-large"></div>

    <div class="content">
      <h1 class="headline">Understated</h1>
      <p class="subtext">Present, not pronounced.</p>
      <p class="description">The brow your face was wearing all along—simply made cleaner.</p>
      <div class="divider"></div>
      <a class="btn-primary" href="deliberate.php">THIS IS THE ONE</a>
      <a class="bottom-link" href="two-looks-one-choice.php">Try Considered instead</a>
    </div>
  </div>
</body>
</html>