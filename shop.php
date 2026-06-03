<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Shop — Royals Arch Brow</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <style>
    :root {
      --black: #080808;
      --white: #f5f0e8;
      --white-dim: rgba(245,240,232,0.62);
      --gold: #c9a84c;
      --gold-light: #d4b96a;
      --gold-dark: #8a6f2e;
      --border: rgba(201,168,76,0.18);
      --surface: rgba(255,255,255,0.03);
      --surface-strong: rgba(255,255,255,0.08);
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
      display: block;
      padding: 18px 0 0;
    }
    .page {
      width: 100%;
      max-width: 1100px;
      min-height: 100vh;
      padding: 0 20px 18px;
      margin: 0 auto;
    }
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
    .navbar-left {
      display: flex;
      align-items: center;
      gap: 1rem;
    }
    .nav-avatar {
      width: 42px;
      height: 42px;
      border-radius: 50%;
      overflow: hidden;
      border: 1.5px solid var(--gold-light);
      flex-shrink: 0;
      background: rgba(255,255,255,0.03);
    }
    .nav-avatar img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }
    .nav-avatar-fallback {
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, #2a2010, #3a2e14);
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: var(--font-display);
      font-size: 1.1rem;
      color: var(--gold);
    }
    .navbar-nav {
      display: flex;
      align-items: center;
      gap: 2rem;
      list-style: none;
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      margin: 0;
      padding: 0;
    }
    .navbar-nav a {
      font-size: 0.75rem;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--white-dim);
      transition: color var(--transition);
      font-weight: 400;
      text-decoration: none;
    }
    .navbar-nav a:hover,
    .navbar-nav a.active {
      color: var(--gold);
    }
    .nav-emblem {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      background: radial-gradient(circle at 35% 35%, #2a2010, #1a1408);
      border: 1.5px solid var(--gold-light);
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: var(--font-display);
      font-size: 1.3rem;
      font-style: italic;
      font-weight: 500;
      color: var(--gold);
      box-shadow: 0 0 16px rgba(201,168,76,0.12);
      flex-shrink: 0;
      overflow: hidden;
    }
    .nav-emblem img {
      width: 26px;
      height: 26px;
      object-fit: contain;
    }
    .navbar-nav {
      display: flex;
      align-items: center;
      gap: 2.5rem;
      list-style: none;
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
    }

    .navbar-nav a {
      font-size: 0.65rem;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--white-dim);
      transition: color var(--transition);
      font-weight: 400;
    }

    .navbar-nav a:hover,
    .navbar-nav a.active {
      color: var(--gold);
    }

    .navbar-actions {
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .btn-book {
      padding: 0.55rem 1.5rem;
      font-size: 0.65rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      border-radius: 50px;
      border: 1px solid var(--border);
      color: var(--white-dim);
      background: transparent;
      transition: all var(--transition);
      font-family: var(--font-body);
    }

    .btn-book:hover {
      border-color: var(--gold);
      color: var(--gold);
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

    /* Gold rule under navbar */
    .nav-gold-rule {
      height: 1px;
      background: linear-gradient(to right, transparent 0%, var(--gold-dark) 30%, var(--gold-dark) 70%, transparent 100%);
      opacity: 0.5;
    }
    .section {
      margin: 16px 0 18px;
    }
    .hero-card {
      display: grid;
      gap: 14px;
      padding: 22px 20px;
      border-radius: 28px;
      background: var(--surface);
      border: 1px solid var(--surface-strong);
    }
    .hero-label {
      font-size: 0.72rem;
      letter-spacing: 0.22em;
      text-transform: uppercase;
      color: var(--gold);
    }
    .hero-title {
      font-family: var(--font-display);
      font-style: italic;
      font-size: 1.4rem;
      line-height: 1.1;
      color: var(--white);
    }
    .hero-subtitle {
      display: block;
      font-size: 0.95rem;
      color: var(--white-dim);
      line-height: 1.6;
    }
    .hero-action {
      margin-top: 8px;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      color: var(--gold);
      font-size: 0.95rem;
      text-decoration: none;
    }
    .tiles {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 12px;
      margin-top: 18px;
    }
    .tile {
      padding: 18px;
      border-radius: 24px;
      border: 1px solid var(--surface-strong);
      background: var(--surface);
      cursor: pointer;
      transition: transform var(--transition), border-color var(--transition), background var(--transition);
    }
    .tile:hover {
      transform: translateY(-2px);
      border-color: rgba(201,168,76,0.3);
      background: rgba(255,255,255,0.05);
    }
    .tile-title {
      font-family: var(--font-display);
      font-size: 1rem;
      margin-bottom: 8px;
      color: var(--white);
      line-height: 1.2;
    }
    .tile-copy {
      font-size: 0.88rem;
      color: var(--white-dim);
      line-height: 1.6;
    }
    .featured {
      margin-top: 18px;
      padding: 18px 20px;
      border-radius: 24px;
      border: 1px solid var(--surface-strong);
      background: var(--surface);
      display: flex;
      align-items: center;
      justify-content: space-between;
      cursor: pointer;
      transition: transform var(--transition), border-color var(--transition), background var(--transition);
    }
    .featured:hover {
      transform: translateY(-2px);
      border-color: rgba(201,168,76,0.3);
      background: rgba(255,255,255,0.05);
    }
    .featured-title {
      font-weight: 700;
      letter-spacing: 0.06em;
      color: var(--white);
    }
    .featured-copy {
      color: var(--white-dim);
      font-size: 0.9rem;
      margin-top: 6px;
    }
    .featured-icon {
      font-size: 1.3rem;
      color: var(--gold);
    }
    .label-heading {
      margin: 26px 0 12px;
      font-size: 0.95rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--gold);
    }
    .gallery {
      display: grid;
      gap: 14px;
    }
    .card {
      padding: 16px;
      border-radius: 28px;
      background: var(--surface);
      border: 1px solid var(--surface-strong);
      display: grid;
      gap: 12px;
      position: relative;
    }
    .card-image {
      width: 100%;
      height: 150px;
      border-radius: 24px;
      background: linear-gradient(180deg, #111, #0f0f0f);
      position: relative;
      overflow: hidden;
    }
    .card-image::before {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(circle at 50% 30%, rgba(201,168,76,0.18), transparent 45%);
    }
    .card-heart {
      position: absolute;
      top: 12px;
      right: 12px;
      width: 34px;
      height: 34px;
      border-radius: 50%;
      display: grid;
      place-items: center;
      background: rgba(255,255,255,0.08);
      color: var(--white);
      font-size: 0.95rem;
      border: 1px solid rgba(255,255,255,0.12);
    }
    .card-title {
      font-family: var(--font-display);
      font-size: 1rem;
      color: var(--white);
      line-height: 1.3;
    }
    .card-price {
      font-size: 0.95rem;
      color: var(--gold);
      font-weight: 700;
    }

    @media (max-width: 720px) {
      .navbar {
        padding: 0.75rem 1rem;
      }
      .navbar-nav {
        position: static;
        transform: none;
        left: auto;
        justify-content: center;
        width: 100%;
        gap: 1rem;
      }
      .navbar-actions {
        width: 100%;
        justify-content: flex-end;
      }
    }

    @media (max-width: 520px) {
      .page { padding-bottom: 30px; }
      .hero-card { padding: 18px; }
      .tiles { gap: 10px; }
      .tile { padding: 16px; }
      .featured { padding: 16px; }
      .card-image { height: 140px; }
    }
  </style>
</head>
<body>
  <?php include 'includes/navbar.php'; ?>
  <div class="page">

    <section class="section fade-2">
      <div class="hero-card fade-3">
        <div class="hero-label">New collection</div>
        <div class="hero-title">Explore the collection →</div>
        <span class="hero-subtitle">Fresh styles, premium kits and curated brows in one place.</span>
      </div>

      <div class="tiles fade-4">
        <button class="tile" onclick="location.href='stencil-product.php'">
          <div class="tile-title">Brow Stencils</div>
          <div class="tile-copy">The precise shape, every time.</div>
        </button>
        <button class="tile" onclick="location.href='stencil-product.php'">
          <div class="tile-title">Brow Products</div>
          <div class="tile-copy">Colour, definition, hold.</div>
        </button>
      </div>

      <button class="featured fade-5" onclick="location.href='stencil-product.php'">
        <div>
          <div class="featured-title">Featured</div>
          <div class="featured-copy">Kits & Collections</div>
        </div>
        <span class="featured-icon">→</span>
      </button>

      <div class="label-heading">New Arrivals</div>
      <div class="gallery">
        <article class="card">
          <div class="card-image">
            <div class="card-heart">♡</div>
          </div>
          <div class="card-title">Mocallure Eyebrow Kit</div>
          <div class="card-price">$69.00</div>
        </article>
        <article class="card">
          <div class="card-image">
            <div class="card-heart">♡</div>
          </div>
          <div class="card-title">Kashée's Cosmetics</div>
          <div class="card-price">$69.00</div>
        </article>
      </div>
    </section>
  </div>

</body>
</html>
