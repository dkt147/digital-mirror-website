<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Shop — Royals Arch Brow</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap"
    rel="stylesheet" />
  <style>
    :root {
      --bg-black: #0a0a08;
      --bg-dark-card: #1c1c1c;
      --bg-dark-card-hover: #282828;
      --gold: #c9a84c;
      --gold-subtle: #A58D3E;
      --gold-border: #3a3520;
      --gold-bg-header: #262212;
      --white: #f5f0e8;
      --white-dim: #b0b0b0;
      --white-faint: rgba(255, 255, 255, 0.6);
      --font-display: 'Cormorant Garamond', serif;
      --font-body: 'Montserrat', sans-serif;
      --radius: 18px;
      --radius-sm: 12px;
      --transition: 0.2s ease;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      background: var(--bg-black);
      color: var(--white);
      font-family: var(--font-body);
      font-weight: 300;
      -webkit-font-smoothing: antialiased;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    /* Navbar styles (kept as requested) */
    .navbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 1rem 2.5rem;
      border-bottom: 1px solid var(--gold-border);
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
      border: 1.5px solid var(--gold-subtle);
      flex-shrink: 0;
    }

    .nav-avatar img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
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

    .btn-book {
      padding: 0.55rem 1.5rem;
      font-size: 0.65rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      border-radius: 50px;
      border: 1px solid var(--gold-border);
      color: var(--white-dim);
      transition: all var(--transition);
    }

    .btn-book:hover {
      border-color: var(--gold);
      color: var(--gold);
    }

    .nav-emblem {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      background: radial-gradient(circle at 35% 35%, #2a2010, #1a1408);
      border: 1.5px solid var(--gold-subtle);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      overflow: hidden;
    }

    .nav-emblem img {
      width: 26px;
      height: 26px;
      object-fit: contain;
    }

    .nav-gold-rule {
      height: 1px;
      background: linear-gradient(to right, transparent 0%, var(--gold-subtle) 30%, var(--gold-subtle) 70%, transparent 100%);
      opacity: 0.5;
    }

    /* ---- MAIN LAYOUT ---- */
    .main-wrapper {
      max-width: 100%;
      margin: 0 auto;
      padding: 2.5rem 2rem 4rem;
    }

    .page-title {
      font-family: var(--font-display);
      font-style: italic;
      font-size: 3.2rem;
      font-weight: 400;
      margin-bottom: 1.5rem;
      letter-spacing: -0.02em;
    }

    /* ---- COLLECTION HERO ---- */
    .collection-card {
      background: linear-gradient(135deg, #302a17 0%, #1f1b0e 100%);
      border-radius: var(--radius);
      padding: 2rem 2.5rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border: 1px solid #c9a84c;
      margin-bottom: 1.5rem;
      position: relative;
      overflow: hidden;
    }

    .collection-text {
      display: flex;
      flex-direction: column;
      gap: 0.5rem;
      z-index: 2;
    }

    .collection-label {
      font-size: 0.65rem;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: var(--gold);
      font-weight: 500;
    }

    .collection-title {
      font-family: var(--font-display);
      font-size: 2.1rem;
      font-weight: 400;
      color: var(--white);
      line-height: 1.1;
    }

    .collection-title span {
      font-style: italic;
    }

    .collection-img {
      z-index: 2;
    }

    .collection-img svg {
      width: 80px;
      height: 40px;
      fill: var(--gold);
    }

    /* Placeholder for brow image */
    /* ---- TILES ---- */
    .tiles-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 1rem;
      margin-bottom: 1.5rem;
    }

    .tile {
      background: var(--bg-dark-card);
      padding: 1.5rem 1.75rem;
      border-radius: var(--radius-sm);
      border: 1px solid #333;
      transition: all var(--transition);
      text-align: left;
      cursor: pointer;
    }

    .tile:hover {
      border-color: #c9a84c;
      background: linear-gradient(135deg, #302a17 0%, #1f1b0e 100%);
      transform: translateY(-2px);
    }

    .tile-label {
      font-size: 0.6rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: var(--gold);
      font-weight: 500;
      margin-bottom: 0.25rem;
    }

    .tile-title {
      font-family: var(--font-display);
      font-size: 1.5rem;
      font-weight: 400;
      color: var(--white);
      line-height: 1.2;
    }

    /* ---- FEATURED ---- */
    .featured-card {
      background: var(--bg-dark-card);
      border-radius: var(--radius-sm);
      border: 1px solid #333;
      padding: 1.5rem 1.75rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      cursor: pointer;
      transition: all var(--transition);
      margin-bottom: 2.5rem;
    }

    .featured-card:hover {
      border-color: #c9a84c;
      background: linear-gradient(135deg, #302a17 0%, #1f1b0e 100%);
      transform: translateY(-2px);
    }

    .featured-label {
      font-size: 0.6rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: var(--gold);
      font-weight: 500;
    }

    .featured-title {
      font-family: var(--font-display);
      font-size: 1.5rem;
      font-weight: 400;
      color: var(--white);
      line-height: 1.2;
    }

    .featured-icon {
      font-size: 1.5rem;
      color: var(--gold);
    }

    /* ---- NEW ARRIVALS ---- */
    .section-label {
      font-size: 0.65rem;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: var(--gold);
      font-weight: 500;
      margin-bottom: 1rem;
    }

    .product-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
      gap: 1.5rem;
    }

    /* ---- PRODUCT CARD (MATCHES SCREENSHOT) ---- */
    .product-card {
      border-radius: var(--radius);
      overflow: hidden;
      transition: transform var(--transition);
    }

    .product-card:hover {
      transform: translateY(-4px);
    }

    .product-image-wrapper {
      background: white;
      /* EXACT MATCH: White background like screenshot */
      position: relative;
      padding-top: 100%;
      /* 1:1 Aspect Ratio */
      overflow: hidden;
      border-radius: var(--radius);
    }

    .product-img {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .product-heart {
      position: absolute;
      top: 12px;
      right: 12px;
      width: 32px;
      height: 32px;
      background: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1rem;
      color: #333;
      cursor: pointer;
      transition: all 0.2s ease;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      z-index: 2;
      line-height: 1;
    }

    .product-heart.favourited {
      color: #e05c5c;
      transform: scale(1.05);
    }

    .product-heart:hover {
      transform: scale(1.15);
    }

    .product-details {
      padding: 1rem 0.25rem;
    }

    .product-name {
      font-family: var(--font-display);
      font-size: 1.05rem;
      font-weight: 400;
      color: var(--white);
      margin-bottom: 0.25rem;
    }

    .product-sub {
      font-size: 0.8rem;
      color: var(--white-faint);
      margin-bottom: 0.4rem;
    }

    .product-price {
      font-size: 0.9rem;
      color: white;
      font-weight: 500;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .navbar-nav {
        display: none;
      }

      .main-wrapper {
        padding: 1.5rem 1rem;
      }

      .page-title {
        font-size: 2.5rem;
      }

      .collection-card {
        flex-direction: column;
        align-items: flex-start;
        padding: 1.5rem;
        gap: 1rem;
      }

      .collection-title {
        font-size: 1.8rem;
      }

      .tiles-grid {
        grid-template-columns: 1fr;
      }

      .product-grid {
        grid-template-columns: 1fr 1fr;
        gap: 1rem;
      }

      .product-heart {
        width: 28px;
        height: 28px;
        font-size: 0.9rem;
        top: 8px;
        right: 8px;
      }
    }
  </style>
</head>

<body>

  <?php include 'includes/navbar.php'; ?>
  <div class="nav-gold-rule"></div>

  <div class="main-wrapper">

    <!-- SHOP TITLE -->
    <h1 class="page-title">Shop</h1>

    <!-- COLLECTION CARD -->
    <div class="collection-card">
      <div class="collection-text">
        <span class="collection-label">NEW COLLECTION</span>
        <div class="collection-title">Explore the <span>collection →</span></div>
      </div>
      <div class="collection-img">
        <!-- Replace this SVG with your actual brows image -->
        <svg viewBox="0 0 100 40" xmlns="http://www.w3.org/2000/svg">
          <path d="M10,20 Q30,5 50,15 Q70,25 90,12" stroke="#c9a84c" stroke-width="6" fill="none"
            stroke-linecap="round" />
          <path d="M20,22 Q30,15 40,20 Q55,28 80,16" stroke="#c9a84c" stroke-width="8" fill="none"
            stroke-linecap="round" opacity="0.4" />
        </svg>
      </div>
    </div>

    <!-- TWO TILES -->
    <div class="tiles-grid">
      <div class="tile" onclick="location.href='stencil-product.php'">
        <div class="tile-label">BROW STENCILS</div>
        <div class="tile-title">The precise shape, every time.</div>
      </div>
      <div class="tile" onclick="location.href='stencil-product.php'">
        <div class="tile-label">BROW PRODUCTS</div>
        <div class="tile-title">Colour, definition, hold.</div>
      </div>
    </div>

    <!-- FEATURED -->
    <div class="featured-card" onclick="location.href='stencil-product.php'">
      <div>
        <div class="featured-label">FEATURED</div>
        <div class="featured-title">Kits & Collections</div>
      </div>
      <div class="featured-icon">→</div>
    </div>

    <!-- NEW ARRIVALS -->
    <div class="section-label">NEW ARRIVALS</div>
    <div class="product-grid" id="products-container">
      <div style="text-align:center; padding:2rem; width:100%; color:var(--white-dim);">Loading products…</div>
    </div>

  </div>

  <script>
    const API_BASE = '<?php echo $API_URL; ?>';
    const token = localStorage.getItem('archAccessToken');
    let favourites = [];
    // ---------- FETCH FAVOURITES ----------
    async function fetchFavourites() {
      if (!token) return;
      try {
        const res = await fetch(`${API_BASE}/favourites`, {
          headers: {
            'accept': 'application/json',
            'Authorization': `Bearer ${token}`
          }
        });
        if (!res.ok) throw new Error('Failed to fetch favourites');
        const data = await res.json();
        favourites = Array.isArray(data) ? data.map(item => item.id) : [];
      } catch (err) {
        console.warn('Could not load favourites:', err);
      }
    }

    function isFavourite(productId) {
      return favourites.includes(productId);
    }
    // ---------- TOGGLE FAVOURITE ----------
    async function toggleFavourite(productId, heartEl) {
      if (!token) {
        alert('Please log in to save favourites.');
        return;
      }
      heartEl.style.pointerEvents = 'none';
      const isFav = isFavourite(productId);
      try {
        let res;
        if (isFav) {
          res = await fetch(`${API_BASE}/favourites/${productId}`, {
            method: 'DELETE',
            headers: {
              'accept': 'application/json',
              'Authorization': `Bearer ${token}`
            }
          });
        } else {
          res = await fetch(`${API_BASE}/favourites`, {
            method: 'POST',
            headers: {
              'accept': 'application/json',
              'Content-Type': 'application/json',
              'Authorization': `Bearer ${token}`
            },
            body: JSON.stringify({
              product_id: productId
            })
          });
        }
        if (!res.ok) {
          const errData = await res.json().catch(() => ({}));
          throw new Error(errData.detail || 'Failed to update favourite');
        }
        if (isFav) {
          favourites = favourites.filter(id => id !== productId);
          heartEl.classList.remove('favourited');
          heartEl.textContent = '♡';
        } else {
          favourites.push(productId);
          heartEl.classList.add('favourited');
          heartEl.textContent = '♥';
        }
      } catch (err) {
        console.error(err);
        alert('Could not update favourite. Please try again.');
      } finally {
        heartEl.style.pointerEvents = 'auto';
      }
    }
    // ---------- RENDER PRODUCTS (MATCHING SCREENSHOT UI) ----------
    function renderProducts(products) {
      const container = document.getElementById('products-container');
      if (!products.length) {
        container.innerHTML =
          '<div style="text-align:center; padding:2rem; width:100%; color:var(--white-dim);">No products available yet.</div>';
        return;
      }
      container.innerHTML = products.map(product => {
        const favClass = isFavourite(product.id) ? ' favourited' : '';
        const heartIcon = isFavourite(product.id) ? '♥' : '♡';
        // Important: User will replace `product.image` with their actual image URL later.
        const imageUrl = product.image ? product.image :
          'assets/beauty-2.png';
        return `
          <div class="product-card">
            <div class="product-image-wrapper">
              <!-- DISPLAY YOUR IMAGES HERE -->
              <img src="${escapeHtml(imageUrl)}" alt="${escapeHtml(product.name)}" class="product-img">
              <div class="product-heart${favClass}" data-product-id="${escapeHtml(product.id)}">${heartIcon}</div>
            </div>
            <div class="product-details">
              <div class="product-name">${escapeHtml(product.name)}</div>
              <div class="product-sub">${escapeHtml(product.name)} Kit</div>
              <div class="product-price">$${product.price.toFixed(2)}</div>
            </div>
          </div>
        `;
      }).join('');
      // Attach click handlers to hearts
      container.querySelectorAll('.product-heart').forEach(heart => {
        heart.addEventListener('click', function(e) {
          e.stopPropagation();
          toggleFavourite(this.dataset.productId, this);
        });
      });
    }

    function escapeHtml(text) {
      const map = {
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;',
        '"': '&quot;',
        "'": '&#039;'
      };
      return String(text).replace(/[&<>"']/g, m => map[m]);
    }
    // ---------- INIT ----------
    async function init() {
      await fetchFavourites();
      const container = document.getElementById('products-container');
      try {
        const res = await fetch(`${API_BASE}/products`, {
          headers: {
            'accept': 'application/json'
          }
        });
        if (!res.ok) throw new Error('Failed to load products');
        const products = await res.json();
        renderProducts(products);
      } catch (err) {
        console.error(err);
        container.innerHTML =
          '<div style="text-align:center; padding:2rem; width:100%; color:#e05c5c;">Could not load products. Please try again later.</div>';
      }
    }
    document.addEventListener('DOMContentLoaded', init);
  </script>

</body>

</html>