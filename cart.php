<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cart — Royals Arch Brow</title>
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
      margin-bottom: 1rem;
    }

    .empty-state {
      padding: 2.5rem;
      border-radius: 24px;
      background: rgba(255, 255, 255, 0.03);
      border: 1px solid var(--border);
      text-align: center;
    }

    .empty-state h2 {
      font-size: 1.6rem;
      margin-bottom: 1rem;
    }

    .empty-state p {
      color: var(--white-dim);
      line-height: 1.7;
      margin-bottom: 1.5rem;
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
    }

    .order-summary {
      margin-top: 1.5rem;
      padding: 1.75rem;
      border-radius: 24px;
      background: rgba(255, 255, 255, 0.03);
      border: 1px solid var(--border);
    }

    .summary-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      color: var(--white-dim);
      margin-bottom: 1rem;
    }

    .summary-total {
      font-weight: 700;
      color: var(--white);
    }

    .cart-items {
      display: grid;
      gap: 1rem;
      margin-top: 1rem;
    }

    .cart-item {
      display: grid;
      grid-template-columns: 1fr auto;
      gap: 1rem;
      padding: 1.25rem;
      border-radius: 24px;
      background: rgba(255, 255, 255, 0.03);
      border: 1px solid var(--border);
    }

    .cart-item-info {
      display: flex;
      flex-direction: column;
      gap: 0.5rem;
    }

    .cart-item-name {
      font-size: 1rem;
      font-weight: 600;
      color: var(--white);
    }

    .cart-item-meta {
      color: var(--white-dim);
      font-size: 0.9rem;
    }

    .cart-item-actions {
      display: flex;
      flex-wrap: wrap;
      gap: 0.5rem;
      justify-content: flex-end;
      align-items: center;
    }

    .quantity-label {
      font-size: 0.8rem;
      color: var(--white-dim);
    }

    .quantity-controls {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      border: 1px solid var(--border);
      border-radius: 999px;
      padding: 0.35rem 0.5rem;
      background: rgba(255, 255, 255, 0.03);
    }

    .quantity-controls button {
      background: none;
      border: none;
      color: var(--white);
      font-size: 1rem;
      cursor: pointer;
      width: 28px;
      height: 28px;
      border-radius: 50%;
      transition: background 0.2s ease;
    }

    .quantity-controls button:hover {
      background: rgba(255, 255, 255, 0.08);
    }

    .btn-small {
      padding: 0.65rem 0.9rem;
      font-size: 0.75rem;
      border-radius: 999px;
      border: 1px solid var(--border);
      background: transparent;
      color: var(--white);
      cursor: pointer;
      transition: all var(--transition);
    }

    .btn-small:hover {
      border-color: var(--gold);
      color: var(--gold);
    }

    .btn-checkout {
      margin-top: 1rem;
      width: 100%;
    }
  </style>
</head>
<body>
  <?php include 'includes/navbar.php'; ?>
  <div class="nav-gold-rule"></div>
  <main class="container">
    <span class="page-label">Cart</span>
    <h1 class="page-title">Bag review</h1>
    <div id="cart-container">
      <div class="empty-state">
        <h2>Your bag is empty.</h2>
        <p>Add products, kits, or brow tools to your bag, then proceed to payment to complete your order.</p>
        <button class="btn" onclick="window.location.href='shop.php'">Browse shop</button>
      </div>
    </div>
    <div class="order-summary" id="order-summary">
      <div class="summary-row"><span>Items</span><span>0</span></div>
      <div class="summary-row"><span>Subtotal</span><span>$0.00</span></div>
      <div class="summary-row"><span class="summary-total">Total</span><span class="summary-total">$0.00</span></div>
      <button class="btn btn-checkout" id="checkout-button" onclick="checkout()" style="display:none;">Checkout now</button>
    </div>
  </main>

  <script>
    const API_BASE = '<?php echo $API_URL; ?>';
    const token = localStorage.getItem('archAccessToken');

    function formatMoney(value) {
      return `$${Number(value || 0).toFixed(2)}`;
    }

    async function loadCart() {
      const container = document.getElementById('cart-container');
      const summary = document.getElementById('order-summary');
      const checkoutButton = document.getElementById('checkout-button');
      if (!token) {
        container.innerHTML = `
          <div class="empty-state">
            <h2>Sign in to view your bag.</h2>
            <p>Your cart is stored securely in your account.</p>
            <button class="btn" onclick="window.location.href='login.php'">Sign in</button>
          </div>`;
        summary.style.display = 'none';
        return;
      }

      try {
        const res = await fetch(`${API_BASE}/cart`, {
          headers: {
            accept: 'application/json',
            Authorization: `Bearer ${token}`
          }
        });
        if (!res.ok) throw new Error('Could not load cart');
        const cart = await res.json();
        if (!cart || !Array.isArray(cart.items) || cart.items.length === 0) {
          container.innerHTML = `
            <div class="empty-state">
              <h2>Your bag is empty.</h2>
              <p>Add products, kits, or brow tools to your bag, then proceed to payment to complete your order.</p>
              <button class="btn" onclick="window.location.href='shop.php'">Browse shop</button>
            </div>`;
          summary.style.display = 'block';
          summary.querySelector('.summary-row:nth-child(1) span:last-child').textContent = '0';
          summary.querySelector('.summary-row:nth-child(2) span:last-child').textContent = '$0.00';
          summary.querySelector('.summary-row:nth-child(3) span:last-child').textContent = '$0.00';
          checkoutButton.style.display = 'none';
          return;
        }

        const itemsHtml = cart.items.map(item => `
          <div class="cart-item">
            <div class="cart-item-info">
              <div class="cart-item-name">${item.name || item.product_name || 'Product'}</div>
              <div class="cart-item-meta">${item.quantity || 1} × ${formatMoney(item.price || 0)}</div>
              <div class="cart-item-meta">${item.delivery_info || ''}</div>
            </div>
            <div class="cart-item-actions">
              <div class="quantity-label">Quantity</div>
              <div class="quantity-controls">
                <button type="button" onclick="updateQuantity('${item.product_id || item.id}', ${Math.max(1, (item.quantity || 1) - 1)})">−</button>
                <span>${item.quantity || 1}</span>
                <button type="button" onclick="updateQuantity('${item.product_id || item.id}', ${item.quantity ? item.quantity + 1 : 2})">+</button>
              </div>
              <button class="btn-small" type="button" onclick="removeItem('${item.product_id || item.id}')">Remove</button>
            </div>
          </div>
        `).join('');

        container.innerHTML = `<div class="cart-items">${itemsHtml}</div>`;
        summary.style.display = 'block';
        summary.querySelector('.summary-row:nth-child(1) span:last-child').textContent = cart.items.length;
        summary.querySelector('.summary-row:nth-child(2) span:last-child').textContent = formatMoney(cart.total || 0);
        summary.querySelector('.summary-row:nth-child(3) span:last-child').textContent = formatMoney(cart.total || 0);
        checkoutButton.style.display = 'block';
      } catch (err) {
        console.error(err);
        container.innerHTML = `
          <div class="empty-state">
            <h2>Unable to load cart</h2>
            <p>Please try again later.</p>
          </div>`;
        summary.style.display = 'none';
      }
    }

    async function removeItem(id) {
      if (!id || !token) return;
      try {
        const res = await fetch(`${API_BASE}/cart/items/${encodeURIComponent(id)}`, {
          method: 'DELETE',
          headers: {
            accept: 'application/json',
            Authorization: `Bearer ${token}`
          }
        });
        if (!res.ok) throw new Error('Could not remove item');
        await loadCart();
      } catch (err) {
        console.error(err);
        alert('Could not remove item. Please try again.');
      }
    }

    async function updateQuantity(id, quantity) {
      if (!id || !token || quantity < 1) return;
      try {
        const res = await fetch(`${API_BASE}/cart/items/${encodeURIComponent(id)}`, {
          method: 'PUT',
          headers: {
            accept: 'application/json',
            'Content-Type': 'application/json',
            Authorization: `Bearer ${token}`
          },
          body: JSON.stringify({ quantity })
        });
        if (!res.ok) throw new Error('Could not update quantity');
        await loadCart();
      } catch (err) {
        console.error(err);
        alert('Could not update quantity. Please try again.');
      }
    }

    async function checkout() {
      if (!token) {
        window.location.href = 'login.php';
        return;
      }
      try {
        const response = await fetch(`${API_BASE}/orders`, {
          method: 'POST',
          headers: {
            accept: 'application/json',
            'Content-Type': 'application/json',
            Authorization: `Bearer ${token}`
          },
          body: JSON.stringify({})
        });
        const payload = await response.json().catch(() => ({}));
        if (!response.ok) {
          throw new Error(payload.detail || 'Unable to place order.');
        }
        const orderId = payload.id || payload.order_id || payload.order?.id || '';
        window.location.href = `order-placed.php?order_id=${encodeURIComponent(orderId)}`;
      } catch (err) {
        console.error(err);
        alert(err.message || 'Could not complete checkout. Please try again.');
      }
    }

    document.addEventListener('DOMContentLoaded', loadCart);
  </script>
</body>
</html>
