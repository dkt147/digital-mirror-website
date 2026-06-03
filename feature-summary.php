<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Feature Summary — Royals Arch Brow</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap"
    rel="stylesheet" />
  <style>
    :root {
      --black: #0a0a0a;
      --dark: #111111;
      --gold: #c9a84c;
      --gold-light: #d4b96a;
      --white: #f5f0e8;
      --white-dim: rgba(245, 240, 232, 0.65);
      --border: rgba(201, 168, 76, 0.25);
      --radius: 24px;
      --transition: 0.25s ease;
      --font-display: 'Cormorant Garamond', serif;
      --font-body: 'Montserrat', sans-serif;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html,
    body {
      min-height: 100%;
    }

    body {
      background: var(--black);
      color: var(--white);
      font-family: var(--font-body);
      line-height: 1.5;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 16px;
    }

    .page-wrap {
      width: 100%;
      max-width: 760px;
      margin: 0 auto;
      padding: 28px 24px;
    }

    /* Top Bar */
    .top-bar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 2.5rem;
    }

    .back-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 46px;
      height: 46px;
      border-radius: 50%;
      border: 1px solid var(--gold);
      color: var(--gold);
      text-decoration: none;
      font-size: 1.5rem;
      transition: transform var(--transition), background var(--transition);
    }

    .back-btn:hover {
      background: rgba(201, 168, 76, 0.15);
      transform: scale(1.05);
    }

    .brand-mark {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 50px;
      height: 50px;
      font-family: var(--font-display);
      font-weight: 700;
      font-size: 1.6rem;
      letter-spacing: 0.03em;
      color: var(--gold);
    }

    /* Header Text */
    .headline-container {
      display: flex;
      align-items: center;
      gap: 1rem;
      margin-bottom: 1.6rem;
    }

    .headline-text {
      text-transform: uppercase;
      letter-spacing: 0.15em;
      color: var(--white-dim);
      font-size: 0.7rem;
      font-weight: 500;
      white-space: nowrap;
    }

    .headline-rule {
      flex-grow: 1;
      height: 1px;
      background: var(--gold);
      opacity: 0.6;
    }

    /* Feature Copy */
    .feature-copy {
      font-family: var(--font-display);
      font-style: italic;
      font-size: clamp(2rem, 5vw, 2.8rem);
      line-height: 1.05;
      margin-bottom: 0.3rem;
      font-weight: 400;
      color: var(--white);
    }

    .feature-copy.faint {
      font-style: normal;
      font-family: var(--font-body);
      font-size: 0.85rem;
      font-weight: 400;
      color: var(--white-dim);
      margin-top: 1.8rem;
      margin-bottom: 0.2rem;
    }

    /* Tags Chips */
    .tags {
      display: flex;
      flex-wrap: wrap;
      gap: 0.7rem;
      margin-top: 2rem;
    }

    .tag {
      padding: 0.7rem 1.6rem;
      border-radius: 999px;
      border: 1px solid var(--gold);
      color: var(--gold);
      text-align: center;
      font-size: 0.65rem;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      font-weight: 500;
      background: rgba(201, 168, 76, 0.06);
      transition: transform var(--transition), box-shadow var(--transition);
      cursor: default;
      white-space: nowrap;
    }

    .tag:hover {
      transform: translateY(-1px);
      box-shadow: 0 8px 30px rgba(201, 168, 76, 0.08);
    }

    /* CTA Buttons */
    .cta-wrap {
      display: flex;
      flex-direction: column;
      gap: 0.8rem;
      margin-top: 1.2rem;
    }

    .btn-primary {
      display: inline-flex;
      justify-content: center;
      align-items: center;
      gap: 0.5rem;
      width: 100%;
      padding: 1rem 1.25rem;
      border-radius: 999px;
      border: none;
      background: #222;
      /* Dark Grey Pill */
      color: var(--white);
      text-transform: uppercase;
      font-size: 0.85rem;
      letter-spacing: 0.14em;
      font-weight: 600;
      text-decoration: none;
      transition: transform var(--transition), background var(--transition);
    }

    .btn-primary:hover {
      background: #333;
      transform: translateY(-1px);
    }

    .link-secondary {
      display: inline-flex;
      justify-content: center;
      color: var(--gold);
      /* Gold Link */
      text-decoration: none;
      font-size: 0.75rem;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      font-weight: 500;
      transition: opacity var(--transition);
    }

    .link-secondary:hover {
      opacity: 0.75;
    }

    .logo-mark img {
      width: 100%;
      height: 100%;
      object-fit: contain;
    }

    @media (max-width: 480px) {
      .headline-container {
        gap: 0.6rem;
      }

      .headline-text {
        font-size: 0.65rem;
      }

      .feature-copy {
        font-size: 2rem;
      }

      .tag {
        padding: 0.6rem 1.2rem;
        font-size: 0.6rem;
      }
    }
  </style>
</head>

<body>
  <main class="page-wrap">
    <div class="top-bar">
      <a class="back-btn" href="onboarding-style.php" aria-label="Back">&#8592;</a>
      <div class="logo-mark"><img src="assets/logo.png" alt="CG logo" /></div>
    </div>

    <div class="headline-container">
      <span class="headline-text">What your features tell us</span>
      <span class="headline-rule"></span>
    </div>

    <div class="feature-copy">A naturally elevated arch.</div>
    <div class="feature-copy">Strong symmetry.</div>
    <div class="feature-copy">The kind of face that carries a considered shape with ease.</div>

    <div class="tags">
      <div class="tag">Oval face</div>
      <div class="tag">High arch</div>
      <div class="tag">Strong brow bone</div>
    </div>

    <div class="feature-copy faint">Your recommendations are ready.</div>

    <div class="cta-wrap">
      <a class="btn-primary" href="choose-style.php">See what suits your features</a>
      <a class="link-secondary" href="browse-styles.php">Browse all styles instead</a>
    </div>
  </main>
</body>

</html>