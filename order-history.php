<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Order History — Royals Arch Brow</title>
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
    .status-filter{margin-bottom:1.5rem;display:flex;flex-wrap:wrap;gap:0.75rem;}
    .filter-btn{padding:0.9rem 1.2rem;border-radius:999px;border:1px solid var(--border);background:rgba(255,255,255,0.02);color:var(--white);cursor:pointer;transition:border-color var(--transition);}
    .filter-btn.active{border-color:var(--gold);background:rgba(201,168,76,0.08);}
    .history-list{display:grid;gap:1rem;}
    .order-card{padding:1.5rem;border-radius:24px;background:rgba(255,255,255,0.03);border:1px solid var(--border);}
    .order-meta{display:flex;justify-content:space-between;align-items:center;margin-bottom:0.75rem;gap:1rem;}
    .order-meta strong{font-size:0.95rem;}
    .order-items{color:var(--white-dim);line-height:1.7;}
    .empty-state{padding:2.5rem;border-radius:24px;background:rgba(255,255,255,0.03);border:1px solid var(--border);text-align:center;}
    .empty-state h2{font-size:1.6rem;margin-bottom:1rem;}
    .empty-state p{color:var(--white-dim);line-height:1.7;margin-bottom:1.25rem;}
    .btn{display:inline-flex;align-items:center;justify-content:center;padding:1rem 1.4rem;border-radius:999px;background:var(--gold);color:var(--black);text-transform:uppercase;letter-spacing:0.12em;font-size:0.8rem;border:0;cursor:pointer;transition:all var(--transition);}
  </style>
</head>
<body>
  <?php include 'includes/navbar.php'; ?>
  <div class="nav-gold-rule"></div>
  <main class="container">
    <span class="page-label">Order history</span>
    <h1 class="page-title">Your recent purchases</h1>
    <div class="status-filter">
      <button class="filter-btn active">All orders</button>
      <button class="filter-btn">Completed</button>
      <button class="filter-btn">Refunded</button>
      <button class="filter-btn">Pending</button>
    </div>
    <div class="history-list">
      <div class="order-card">
        <div class="order-meta"><strong>Order #A-2389</strong><span>March 21, 2026</span><span>$59.99</span></div>
        <div class="order-items">1x Precision Arch Stencil Kit, 2x Brow Serum</div>
      </div>
      <div class="order-card">
        <div class="order-meta"><strong>Order #A-2194</strong><span>December 12, 2025</span><span>$14.99</span></div>
        <div class="order-items">Membership renewal</div>
      </div>
    </div>
  </main>
</body>
</html>
