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
    *{box-sizing:border-box;margin:0;padding:0;}
    :root{--black:#0a0a08;--white:#f5f0e8;--white-dim:rgba(245,240,232,0.65);--gold:#c9a84c;--border:rgba(201,168,76,0.2);--radius:18px;--font-display:'Cormorant Garamond',serif;--font-body:'Montserrat',sans-serif;--transition:0.3s ease;}
    html{font-size:16px;scroll-behavior:smooth;}
    body{min-height:100vh;background:var(--black);color:var(--white);font-family:var(--font-body);padding:2rem;}
    .container{max-width:1040px;margin:0 auto;}
    .page-label{font-size:0.7rem;letter-spacing:0.22em;text-transform:uppercase;color:var(--gold);margin-bottom:0.5rem;}
    .page-title{font-family:var(--font-display);font-size:2.6rem;font-style:italic;line-height:1.05;margin-bottom:0.75rem;}
    .copy{max-width:720px;color:var(--white-dim);line-height:1.8;margin-bottom:1.75rem;}
    .product-card{display:grid;grid-template-columns:1fr 1fr;gap:1.5rem;padding:1.75rem;border-radius:24px;background:rgba(255,255,255,0.03);border:1px solid var(--border);}
    .product-image{border-radius:20px;background:rgba(255,255,255,0.04);min-height:320px;display:flex;align-items:center;justify-content:center;color:var(--white-dim);font-size:1rem;text-align:center;padding:1rem;}
    .product-info{display:flex;flex-direction:column;gap:1rem;}
    .product-tag{font-size:0.8rem;text-transform:uppercase;letter-spacing:0.18em;color:var(--gold);}
    .product-name{font-family:var(--font-display);font-size:2rem;line-height:1.05;}
    .product-meta{color:var(--white-dim);line-height:1.7;}
    .product-list{display:grid;gap:0.9rem;margin-top:1rem;}
    .product-list li{color:var(--white-dim);line-height:1.7;}
    .price{font-family:var(--font-display);font-size:2.2rem;color:var(--gold);margin-top:0.5rem;}
    .btn{display:inline-flex;align-items:center;justify-content:center;padding:1rem 1.4rem;border-radius:999px;background:var(--gold);color:var(--black);text-transform:uppercase;letter-spacing:0.12em;font-size:0.8rem;border:0;cursor:pointer;transition:all var(--transition);width:fit-content;}
    @media(max-width:900px){.product-card{grid-template-columns:1fr;}}
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
      <div class="product-image">Hero product image placeholder</div>
      <div class="product-info">
        <span class="product-tag">Matching product</span>
        <div class="product-name">Brow Sculpt & Shade</div>
        <p class="product-meta">Style: Considered · Colour: Soft brown · Intensity: Medium</p>
        <ul class="product-list">
          <li>Made to complement your selected brow profile.</li>
          <li>Buildable colour with natural finish.</li>
          <li>Long-lasting wear, smudge-resistant formula.</li>
        </ul>
        <div class="price">$34.00</div>
        <button class="btn" onclick="window.location.href='cart.php'">Add to bag</button>
      </div>
    </div>
  </main>
</body>
</html>
