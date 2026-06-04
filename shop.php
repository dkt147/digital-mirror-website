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
      --black: #0a0a08;
      --dark: #111111;
      --dark-card: #1a1a0f;
      --dark-input: #1c1c15;
      --gold: #c9a84c;
      --gold-light: #d4b96a;
      --gold-dark: #8a6f2e;
      --gold-muted: rgba(201, 168, 76, 0.12);
      --white: #f5f0e8;
      --white-dim: rgba(245, 240, 232, 0.55);
      --white-faint: rgba(245, 240, 232, 0.15);
      --border: rgba(201, 168, 76, 0.18);
      --border-hover: rgba(201, 168, 76, 0.45);
      --font-display: 'Cormorant Garamond', serif;
      --font-body: 'Montserrat', sans-serif;
      --radius: 14px;
      --radius-sm: 10px;
      --transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }
    html { font-size: 16px; scroll-behavior: smooth; }
    body {
      background: var(--black);
      color: var(--white);
      font-family: var(--font-body);
      font-weight: 300;
      line-height: 1.6;
      min-height: 100vh;
      overflow-x: hidden;
    }
    a { color: inherit; text-decoration: none; }
    button {
      cursor: pointer;
      border: none;
      outline: none;
      font-family: var(--font-body);
      background: none;
    }

    /* ====== NAVBAR ====== */
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

    .navbar-left { display: flex; align-items: center; gap: 1rem; }
    .nav-avatar {
      width: 42px; height: 42px; border-radius: 50%; overflow: hidden;
      border: 1.5px solid var(--gold-dark); flex-shrink: 0;
    }
    .nav-avatar img { width: 100%; height: 100%; object-fit: cover; display: block; }

    .navbar-nav {
      display: flex; align-items: center; gap: 2.5rem; list-style: none;
      position: absolute; left: 50%; transform: translateX(-50%);
    }
    .navbar-nav a {
      font-size: 0.65rem; letter-spacing: 0.18em; text-transform: uppercase;
      color: var(--white-dim); transition: color var(--transition); font-weight: 400;
    }
    .navbar-nav a:hover, .navbar-nav a.active { color: var(--gold); }

    .btn-book {
      padding: 0.55rem 1.5rem; font-size: 0.65rem; letter-spacing: 0.12em;
      text-transform: uppercase; border-radius: 50px; border: 1px solid var(--border);
      color: var(--white-dim); transition: all var(--transition);
    }
    .btn-book:hover { border-color: var(--gold); color: var(--gold); }

    .nav-emblem {
      width: 44px; height: 44px; border-radius: 50%;
      background: radial-gradient(circle at 35% 35%, #2a2010, #1a1408);
      border: 1.5px solid var(--gold-dark); display: flex; align-items: center;
      justify-content: center; flex-shrink: 0; overflow: hidden;
    }
    .nav-emblem img { width: 26px; height: 26px; object-fit: contain; }

    .nav-gold-rule {
      height: 1px; background: linear-gradient(to right, transparent 0%, var(--gold-dark) 30%, var(--gold-dark) 70%, transparent 100%);
      opacity: 0.5;
    }

    /* ====== LAYOUT ====== */
    .main {
      max-width: 100%;
      margin: 0 auto;
      padding: 2.5rem 3rem;
      display: flex;
      flex-direction: column;
      gap: 1.75rem;
    }

    /* ====== HERO CARD ====== */
    .hero-card {
      background: linear-gradient(135deg, #1c1a0d 0%, #221f0f 60%, #1a1808 100%);
      border: 1px solid rgba(201, 168, 76, 0.22);
      border-radius: var(--radius);
      padding: 2rem 2.5rem;
      display: flex;
      flex-direction: column;
      gap: 0.75rem;
      position: relative;
      overflow: hidden;
    }

    .hero-card::before {
      content: '';
      position: absolute;
      top: 0; left: 0; right: 0;
      height: 1px;
      background: linear-gradient(to right, transparent, rgba(201, 168, 76, 0.5), transparent);
    }

    .hero-label {
      font-size: 0.6rem; letter-spacing: 0.25em; text-transform: uppercase;
      color: var(--gold); font-weight: 500;
    }

    .hero-title {
      font-family: var(--font-display);
      font-style: italic;
      font-size: 2rem;
      font-weight: 400;
      color: var(--white);
      line-height: 1.05;
    }

    .hero-subtitle {
      font-size: 0.95rem;
      color: var(--white-dim);
      line-height: 1.6;
    }

    .hero-action {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      color: var(--gold);
      font-size: 0.9rem;
      text-decoration: none;
      margin-top: 0.5rem;
    }

    /* ====== TILES ====== */
    .tiles {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 1rem;
    }

    .tile {
      padding: 1.75rem 1.5rem;
      border-radius: var(--radius-sm);
      border: 1px solid var(--border);
      background: #161610;
      cursor: pointer;
      transition: all var(--transition);
      text-align: left;
    }

    .tile:hover {
      border-color: var(--gold-dark);
      background: rgba(201, 168, 76, 0.06);
      transform: translateY(-2px);
    }

    .tile-title {
      font-family: var(--font-display);
      font-size: 1.2rem;
      font-weight: 400;
      color: var(--white);
      margin-bottom: 0.5rem;
    }

    .tile-copy {
      font-size: 0.85rem;
      color: var(--white-dim);
      line-height: 1.6;
    }

    /* ====== FEATURED ====== */
    .featured {
      padding: 1.5rem 2rem;
      border-radius: var(--radius-sm);
      border: 1px solid var(--border);
      background: #161610;
      display: flex;
      align-items: center;
      justify-content: space-between;
      cursor: pointer;
      transition: all var(--transition);
    }

    .featured:hover {
      border-color: var(--gold-dark);
      background: rgba(201, 168, 76, 0.06);
      transform: translateY(-2px);
    }

    .featured-title {
      font-weight: 600;
      letter-spacing: 0.06em;
      color: var(--white);
    }

    .featured-copy {
      color: var(--white-dim);
      font-size: 0.9rem;
      margin-top: 4px;
    }

    .featured-icon {
      font-size: 1.3rem;
      color: var(--gold);
    }

    /* ====== SECTION LABEL ====== */
    .section-label {
      font-size: 0.62rem;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 0.875rem;
      font-weight: 500;
    }

    /* ====== GALLERY ====== */
    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
      gap: 1rem;
    }

    .card {
      padding: 1.25rem;
      border-radius: var(--radius);
      border: 1px solid var(--border);
      background: #161610;
      display: grid;
      gap: 0.75rem;
      transition: all var(--transition);
    }

    .card:hover {
      border-color: var(--gold-dark);
      transform: translateY(-2px);
    }

    .card-image {
      width: 100%;
      height: 160px;
      border-radius: var(--radius-sm);
      background: linear-gradient(180deg, #111, #0f0f0f);
      position: relative;
      overflow: hidden;
    }

    .card-image::before {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(circle at 50% 30%, rgba(201, 168, 76, 0.15), transparent 45%);
    }

    .card-heart {
      position: absolute;
      top: 12px; right: 12px;
      width: 34px; height: 34px;
      border-radius: 50%;
      display: grid; place-items: center;
      background: rgba(255,255,255,0.08);
      color: var(--white);
      font-size: 0.95rem;
      border: 1px solid rgba(255,255,255,0.12);
    }

    .card-title {
      font-family: var(--font-display);
      font-size: 1.05rem;
      color: var(--white);
      line-height: 1.3;
    }

    .card-price {
      font-size: 0.95rem;
      color: var(--gold);
      font-weight: 600;
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

    /* ====== RESPONSIVE ====== */
    @media (max-width: 900px) {
      .main { padding: 1.5rem 1.25rem; }
      .navbar { padding: 0.875rem 1.25rem; }
      .navbar-nav { display: none; }
      .hero-card { padding: 1.5rem; }
      .hero-title { font-size: 1.6rem; }
      .tiles { gap: 0.75rem; }
      .tile { padding: 1.25rem; }
    }
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <?php include 'includes/navbar.php'; ?>

  <!-- Gold rule -->
  <div class="nav-gold-rule"></div>

  <!-- MAIN CONTENT -->
  <main class="main">

    <!-- HERO -->
    <div class="fade-2">
      <div class="hero-card fade-3">
        <div class="hero-label">New collection</div>
        <div class="hero-title">Explore the collection →</div>
        <div class="hero-subtitle">Fresh styles, premium kits and curated brows in one place.</div>
      </div>
    </div>

    <!-- TILES -->
    <div class="fade-4">
      <div class="tiles">
        <button class="tile" onclick="location.href='stencil-product.php'">
          <div class="tile-title">Brow Stencils</div>
          <div class="tile-copy">The precise shape, every time.</div>
        </button>
        <button class="tile" onclick="location.href='stencil-product.php'">
          <div class="tile-title">Brow Products</div>
          <div class="tile-copy">Colour, definition, hold.</div>
        </button>
      </div>
    </div>

    <!-- FEATURED -->
    <div class="fade-5">
      <button class="featured" onclick="location.href='stencil-product.php'">
        <div>
          <div class="featured-title">Featured</div>
          <div class="featured-copy">Kits & Collections</div>
        </div>
        <span class="featured-icon">→</span>
      </button>
    </div>

    <!-- NEW ARRIVALS -->
    <div class="fade-5">
      <div class="section-label">New Arrivals</div>
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
    </div>

  </main>

</body>
</html>