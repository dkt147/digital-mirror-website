<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Curated Product — Royals Arch Brow</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    :root {
      --black: #0a0a08;
      --white: #f5f0e8;
      --white-dim: rgba(245, 240, 232, 0.65);
      --gold: #c9a84c;
      --border: rgba(201, 168, 76, 0.2);
      --radius: 18px;
      --font-display: 'Cormorant Garamond', serif;
      --font-body: 'Montserrat', sans-serif;
      --transition: 0.3s ease;
    }

    html {
      font-size: 16px;
      scroll-behavior: smooth;
    }

    body {
      min-height: 100vh;
      background: var(--black);
      color: var(--white);
      font-family: var(--font-body);
      padding: 2rem;
    }

    .container {
      max-width: 1040px;
      margin: 0 auto;
    }

    .page-label {
      font-size: 0.7rem;
      letter-spacing: 0.22em;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 0.5rem;
    }

    .page-title {
      font-family: var(--font-display);
      font-size: 2.6rem;
      font-style: italic;
      line-height: 1.05;
      margin-bottom: 0.75rem;
    }

    .copy {
      max-width: 720px;
      color: var(--white-dim);
      line-height: 1.8;
      margin-bottom: 1.75rem;
    }

    .product-card {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 1.5rem;
      padding: 1.75rem;
      border-radius: 24px;
      background: rgba(255, 255, 255, 0.03);
      border: 1px solid var(--border);
    }

    .product-image {
      border-radius: 20px;
      background: rgba(255, 255, 255, 0.04);
      min-height: 320px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--white-dim);
      font-size: 1rem;
      text-align: center;
      padding: 1rem;
    }

    .product-info {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    .product-tag {
      font-size: 0.8rem;
      text-transform: uppercase;
      letter-spacing: 0.18em;
      color: var(--gold);
    }

    .product-name {
      font-family: var(--font-display);
      font-size: 2rem;
      line-height: 1.05;
    }

    .product-meta {
      color: var(--white-dim);
      line-height: 1.7;
    }

    .product-list {
      display: grid;
      gap: 0.9rem;
      margin-top: 1rem;
    }

    .product-list li {
      color: var(--white-dim);
      line-height: 1.7;
    }

    .price {
      font-family: var(--font-display);
      font-size: 2.2rem;
      color: var(--gold);
      margin-top: 0.5rem;
    }

    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 1rem 1.4rem;
      border-radius: 999px;
      background: var(--gold);
      color: var(--black);
      text-transform: uppercase;
      letter-spacing: 0.12em;
      font-size: 0.8rem;
      border: 0;
      cursor: pointer;
      transition: all var(--transition);
      width: fit-content;
    }

    @media(max-width:900px) {
      .product-card {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>
  <?php include 'includes/navbar.php'; ?>
  <div class="nav-gold-rule"></div>
  <main class="container">
    <span class="page-label">Curated product</span>
    <h1 class="page-title">Hand-picked for your look.</h1>
    <p class="copy">This specially curated recommendation matches your selected style, colour and intensity. It appears before checkout so you can choose what fits your routine.</p>
    <div class="product-card">
      <div class="product-image" id="product-image">
        <span>Loading curated product…</span>
      </div>
      <div class="product-info">
        <span class="product-tag" id="product-tag">Matching product</span>
        <div class="product-name" id="product-name">Loading...</div>
        <p class="product-meta" id="product-meta">Loading details...</p>
        <ul class="product-list" id="product-list">
          <li>Made to complement your selected brow profile.</li>
          <li>Buildable colour with natural finish.</li>
          <li>Long-lasting wear, smudge-resistant formula.</li>
        </ul>
        <div class="price" id="product-price">$0.00</div>
        <button class="btn" id="add-to-bag-button" onclick="addToBag()" disabled>Add to bag</button>
      </div>
    </div>
    <div id="error-message" style="margin-top:1.5rem; color:#f6c79d; font-size:0.95rem;"></div>
    <div id="also-matched-section" style="margin-top:2rem; display:none;">
      <h2 style="font-size:1.1rem; margin-bottom:0.75rem; color:#fff;">Also matched</h2>
      <div id="also-matched" style="display:grid; gap:0.75rem;"></div>
    </div>
  </main>

  <script>
    const API_BASE = '<?php echo $API_URL; ?>';
    const token = localStorage.getItem('archAccessToken');
    const lookId = new URLSearchParams(window.location.search).get('look_id')
      || new URLSearchParams(window.location.search).get('id')
      || localStorage.getItem('lastSavedLookId');
    let heroProduct = null;

    function formatMoney(value) {
      return `$${Number(value || 0).toFixed(2)}`;
    }

    function setError(message) {
      const errorEl = document.getElementById('error-message');
      errorEl.textContent = message || '';
    }

    function setLoadingState(isLoading) {
      const button = document.getElementById('add-to-bag-button');
      button.disabled = isLoading;
      button.textContent = isLoading ? 'Loading…' : 'Add to bag';
    }

    function renderheroProduct(product, look) {
      const imageEl = document.getElementById('product-image');
      const nameEl = document.getElementById('product-name');
      const metaEl = document.getElementById('product-meta');
      const listEl = document.getElementById('product-list');
      const priceEl = document.getElementById('product-price');
      const button = document.getElementById('add-to-bag-button');

      if (product?.image) {
        imageEl.innerHTML = `<img src="${product.image}" alt="${product.name || 'Product'}" style="width:100%; height:100%; object-fit:cover; border-radius:20px;" />`;
      } else {
        imageEl.innerHTML = `<div style="display:flex;align-items:center;justify-content:center;height:100%;color:var(--white-dim);text-align:center;padding:1rem;">${product?.name || 'Hero product image placeholder'}</div>`;
      }

      nameEl.textContent = product?.name || 'Recommended product';
      metaEl.textContent = `Style: ${look?.style || '—'} · Colour: ${look?.colour || '—'} · Intensity: ${look?.intensity || '—'}`;
      priceEl.textContent = product?.price ? formatMoney(product.price) : '$0.00';

      const points = [];
      if (look?.style) points.push(`Designed to match your ${look.style.toLowerCase()} look.`);
      if (look?.colour) points.push(`Curated for ${look.colour.toLowerCase()} tones.`);
      if (product?.delivery_info) points.push(product.delivery_info);
      if (!points.length) points.push('Made to complement your selected brow profile.');
      listEl.innerHTML = points.map(point => `<li>${point}</li>`).join('');

      heroProduct = product;
      button.disabled = !product?.id;
      if (!product?.id) {
        button.textContent = 'Unable to add to bag';
      }
    }

    function renderAlsoMatched(items) {
      const section = document.getElementById('also-matched-section');
      const container = document.getElementById('also-matched');
      if (!Array.isArray(items) || !items.length) {
        section.style.display = 'none';
        return;
      }
      section.style.display = 'block';
      container.innerHTML = items.map(item => `
        <div style="padding:1rem; border:1px solid rgba(201,168,76,0.2); border-radius:18px; background:rgba(255,255,255,0.04);">
          <div style="font-weight:700; color:#fff; margin-bottom:0.4rem;">${item.name || 'Product'}</div>
          <div style="color:var(--white-dim); font-size:0.95rem; margin-bottom:0.4rem;">${item.brand || item.category || ''}</div>
          <div style="color:#f0d5a2; font-size:0.95rem;">${item.price ? formatMoney(item.price) : ''}</div>
        </div>
      `).join('');
    }

    async function loadCurated() {
      setError('');
      if (!lookId) {
        setError('No look selected. Please return from your saved look or saved design.');
        document.getElementById('add-to-bag-button').disabled = true;
        return;
      }
      if (!token) {
        setError('Sign in to view your curated recommendation.');
        document.getElementById('add-to-bag-button').disabled = true;
        return;
      }

      setLoadingState(true);
      try {
        const response = await fetch(`${API_BASE}/looks/${encodeURIComponent(lookId)}/curated`, {
          headers: {
            accept: 'application/json',
            Authorization: `Bearer ${token}`
          }
        });
        const payload = await response.json().catch(() => ({}));
        if (!response.ok) {
          throw new Error(payload.detail || payload.message || 'Unable to load curated look.');
        }

        const look = payload.look || payload;
        const heroProductData = payload.hero_product || {};
        renderheroProduct(heroProductData, look);
        renderAlsoMatched(payload.also_matched || []);
      } catch (err) {
        console.error(err);
        setError(err.message || 'Could not load curated recommendation.');
        document.getElementById('add-to-bag-button').disabled = true;
      } finally {
        setLoadingState(false);
      }
    }

    async function addToBag() {
      if (!token) {
        window.location.href = 'login.php';
        return;
      }
      if (!heroProduct?.id) {
        setError('Unable to add this product to cart.');
        return;
      }
      setLoadingState(true);
      setError('');
      try {
        const response = await fetch(`${API_BASE}/cart/items`, {
          method: 'POST',
          headers: {
            accept: 'application/json',
            'Content-Type': 'application/json',
            Authorization: `Bearer ${token}`
          },
          body: JSON.stringify({ product_id: heroProduct.id, quantity: 1 })
        });
        const payload = await response.json().catch(() => ({}));
        if (!response.ok) {
          throw new Error(payload.detail || payload.message || 'Unable to add item to cart.');
        }
        window.location.href = 'cart.php';
      } catch (err) {
        console.error(err);
        setError(err.message || 'Could not add item to bag.');
      } finally {
        setLoadingState(false);
      }
    }

    document.addEventListener('DOMContentLoaded', loadCurated);
  </script>
</body>
</html>
