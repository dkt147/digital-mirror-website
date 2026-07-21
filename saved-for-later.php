<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Saved for Later — Royals Arch Brow</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    *{box-sizing:border-box;margin:0;padding:0;}
    :root{--black:#0a0a08;--white:#f5f0e8;--white-dim:rgba(245,240,232,0.65);--gold:#c9a84c;--border:rgba(201,168,76,0.2);--radius:18px;--font-display:'Cormorant Garamond',serif;--font-body:'Montserrat',sans-serif;--transition:0.3s ease;}
    html{font-size:16px;scroll-behavior:smooth;}
    body{min-height:100vh;background:var(--black);color:var(--white);font-family:var(--font-body);padding:2rem;}
    .container{max-width:1040px;margin:0 auto;}
    .page-label{font-size:0.7rem;letter-spacing:0.22em;text-transform:uppercase;color:var(--gold);margin-bottom:0.5rem;}
    .page-title{font-family:var(--font-display);font-size:2.6rem;font-style:italic;line-height:1.05;margin-bottom:1rem;}
    .tabs{display:flex;gap:0.75rem;flex-wrap:wrap;margin-bottom:1.5rem;}
    .tab{padding:0.95rem 1.2rem;border-radius:999px;border:1px solid var(--border);background:rgba(255,255,255,0.02);color:var(--white);cursor:pointer;transition:border-color var(--transition);}
    .tab.active{border-color:var(--gold);background:rgba(201,168,76,0.08);}
    .card{padding:1.5rem;border-radius:24px;background:rgba(255,255,255,0.03);border:1px solid var(--border);margin-bottom:1rem;}
    .card h2{font-size:1.15rem;margin-bottom:0.75rem;}
    .card p{color:var(--white-dim);line-height:1.75;}
    .card-actions{display:flex;gap:0.75rem;flex-wrap:wrap;margin-top:1rem;}
    .btn{display:inline-flex;align-items:center;justify-content:center;padding:1rem 1.3rem;border-radius:999px;background:var(--gold);color:var(--black);text-transform:uppercase;letter-spacing:0.12em;font-size:0.8rem;border:0;cursor:pointer;transition:all var(--transition);}
    .btn-secondary{background:transparent;color:var(--white);border:1px solid var(--border);}
    .btn-secondary:hover{border-color:var(--gold);color:var(--gold);}
    .empty-state{padding:2.5rem;border-radius:24px;background:rgba(255,255,255,0.03);border:1px solid var(--border);text-align:center;}
    .empty-state h2{font-size:1.6rem;margin-bottom:1rem;}
    .empty-state p{color:var(--white-dim);line-height:1.7;margin-bottom:1.25rem;}
  </style>
</head>
<body>
  <?php include 'includes/navbar.php'; ?>
  <div class="nav-gold-rule"></div>
  <main class="container">
    <span class="page-label">Saved for later</span>
    <h1 class="page-title">Saved items</h1>
    <div class="tabs"><button class="tab active">Saved items</button><button class="tab">Saved looks</button></div>
    <div id="saved-items-container">
      <div class="empty-state">
        <h2>Nothing saved yet.</h2>
        <p>Save products, tools, or looks now and return to them later. Your saved items stay here even if your membership changes.</p>
        <button class="btn" onclick="window.location.href='shop.php'">Save something</button>
      </div>
    </div>
  </main>

  <script>
    const API_BASE = '<?php echo $API_URL; ?>';
    const token = localStorage.getItem('archAccessToken');

    async function loadFavourites() {
      if (!token) {
        window.location.href = 'login.php';
        return;
      }

      try {
        const response = await fetch(`${API_BASE}/favourites`, {
          method: 'GET',
          headers: {
            accept: 'application/json',
            Authorization: `Bearer ${token}`
          }
        });

        const items = await response.json().catch(() => []);
        if (!response.ok || !Array.isArray(items)) {
          throw new Error('Unable to load favourites');
        }

        const container = document.getElementById('saved-items-container');
        if (items.length === 0) {
          container.innerHTML = '<div class="empty-state"><h2>Nothing saved yet.</h2><p>Save products, tools, or looks now and return to them later. Your saved items stay here even if your membership changes.</p><button class="btn" onclick="window.location.href=\'shop.php\'">Save something</button></div>';
          return;
        }

        container.innerHTML = items.map((item) => `
          <div class="card">
            <h2>${item.name || 'Untitled'}</h2>
            <p>${item.description || ''}</p>
            ${item.price ? `<p><strong>$${item.price}</strong></p>` : ''}
            ${item.delivery_info ? `<p style="color:var(--white-dim);font-size:0.9rem;">${item.delivery_info}</p>` : ''}
            <div class="card-actions">
              <a href="shop.php" class="btn">View product</a>
              <button class="btn btn-secondary" onclick="removeFavourite('${item.id}')">Remove</button>
            </div>
          </div>
        `).join('');
      } catch (err) {
        console.error(err);
        const container = document.getElementById('saved-items-container');
        container.innerHTML = '<div class="empty-state"><h2>Unable to load saved items</h2><p>Please try again later.</p></div>';
      }
    }

    async function removeFavourite(id) {
      try {
        const response = await fetch(`${API_BASE}/favourites/${id}`, {
          method: 'DELETE',
          headers: {
            accept: 'application/json',
            Authorization: `Bearer ${token}`
          }
        });
        if (response.ok) loadFavourites();
      } catch (err) {
        console.error(err);
      }
    }

    document.addEventListener('DOMContentLoaded', loadFavourites);
  </script>
</body>
</html>
