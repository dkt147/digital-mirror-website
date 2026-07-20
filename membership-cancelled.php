<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Membership Cancelled — Royals Arch Brow</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    *{box-sizing:border-box;margin:0;padding:0;}
    :root{--black:#0a0a08;--white:#f5f0e8;--white-dim:rgba(245,240,232,0.65);--gold:#c9a84c;--muted:#a49467;--border:rgba(201,168,76,0.2);--font-display:'Cormorant Garamond',serif;--font-body:'Montserrat',sans-serif;--radius:18px;--transition:0.3s ease;}
    html{font-size:16px;scroll-behavior:smooth;}
    body{min-height:100vh;background:var(--black);color:var(--white);font-family:var(--font-body);padding:2rem;}
    .container{max-width:900px;margin:0 auto;}
    .page-label{font-size:0.7rem;letter-spacing:0.22em;text-transform:uppercase;color:var(--gold);margin-bottom:0.5rem;}
    .page-title{font-family:var(--font-display);font-size:2.6rem;font-style:italic;line-height:1.05;margin-bottom:0.75rem;}
    .card{padding:2rem;border-radius:24px;background:rgba(255,255,255,0.03);border:1px solid var(--border);}
    .status{display:inline-flex;padding:0.7rem 1rem;border-radius:999px;background:rgba(255,255,255,0.08);color:var(--gold);font-weight:600;letter-spacing:0.1em;text-transform:uppercase;margin-bottom:1rem;}
    .message{margin-bottom:1.25rem;color:var(--white-dim);line-height:1.8;}
    .details{padding:1.25rem;border-radius:20px;background:rgba(255,255,255,0.02);border:1px solid var(--border);margin-bottom:1.5rem;}
    .details strong{display:block;color:var(--white);margin-bottom:0.75rem;}
    .details p{color:var(--white-dim);line-height:1.8;}
    .actions{display:grid;gap:0.9rem;}
    .btn{display:inline-flex;align-items:center;justify-content:center;padding:1rem 1.3rem;border-radius:999px;background:var(--gold);color:var(--black);text-transform:uppercase;letter-spacing:0.12em;font-size:0.8rem;border:0;cursor:pointer;transition:all var(--transition);}
  </style>
</head>
<body>
  <?php include 'includes/navbar.php'; ?>
  <div class="nav-gold-rule"></div>
  <main class="container">
    <span class="page-label">Membership</span>
    <h1 class="page-title">Membership cancelled</h1>
    <div class="card">
      <span class="status">Confirmed</span>
      <p class="message">Your membership has been cancelled and will remain active until the end of your current billing period. You can come back anytime to renew your membership.</p>
      <div class="details">
        <strong>Next steps</strong>
        <p>Save your preferred looks and products now so you can return easily when you renew. Your account information remains intact.</p>
      </div>
      <div class="actions">
        <button class="btn" onclick="window.location.href='profile.php'">View profile</button>
        <button class="btn" onclick="window.location.href='shop.php'">Browse products</button>
      </div>
    </div>
  </main>
</body>
</html>
