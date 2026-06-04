<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My looks — Royals Arch Brow</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root { --black:#0a0a08; --white:#f5f0e8; --dim:rgba(245,240,232,0.7); --gold:#c9a84c; --gold-light:#d4b96a; --border:rgba(255,255,255,0.08); --radius:24px; --transition:0.3s ease; --font-display:'Cormorant Garamond', serif; --font-body:'Montserrat', sans-serif; }
    *{box-sizing:border-box;margin:0;padding:0;}
    html{font-size:16px;scroll-behavior:smooth;}
    body{min-height:100vh;background:var(--black);color:var(--white);font-family:var(--font-body);line-height:1.6;padding:1.25rem;}
    .page{max-width:560px;margin:0 auto;background:rgba(255,255,255,0.02);border:1px solid rgba(255,255,255,0.08);border-radius:32px;overflow:hidden;box-shadow:0 24px 80px rgba(0,0,0,0.4);}
    .topbar{display:flex;align-items:center;justify-content:space-between;padding:1.2rem 1.25rem;gap:1rem;}
    .back-btn,.logo-badge{width:44px;height:44px;border-radius:50%;display:grid;place-items:center;border:1px solid var(--gold);color:var(--gold);background:rgba(255,255,255,0.02);text-decoration:none;}
    .back-btn:hover{background:rgba(201,168,76,0.12);transform:scale(1.05);}
    .page-title{flex:1;text-align:center;font-family:var(--font-display);font-size:0.9rem;letter-spacing:0.28em;text-transform:uppercase;color:var(--gold);}
    .content{padding:0 1.25rem 1.75rem;}
    .page-label{color:var(--gold);text-transform:uppercase;letter-spacing:0.22em;font-size:0.75rem;margin-bottom:0.75rem;}
    .heading{font-family:var(--font-display);font-size:clamp(1.9rem,4vw,2.4rem);font-style:italic;color:var(--white);line-height:1.05;margin-bottom:0.75rem;}
    .subtitle{color:var(--dim);font-size:0.95rem;line-height:1.75;margin-bottom:1.75rem;text-align:center;}
    .empty-card{padding:2rem 1.25rem;border-radius:28px;background:rgba(255,255,255,0.03);border:1px solid rgba(255,255,255,0.08);text-align:center;}
    .empty-state-icon{width:86px;height:86px;margin:0 auto 1.25rem;border-radius:50%;display:grid;place-items:center;background:rgba(201,168,76,0.1);color:var(--gold);font-size:2rem;border:1px solid rgba(201,168,76,0.22);}
    .empty-title{font-family:var(--font-display);font-size:1.65rem;color:var(--white);margin-bottom:0.65rem;}
    .empty-copy{color:var(--dim);font-size:0.95rem;line-height:1.7;margin-bottom:1.5rem;}
    .btn-primary{display:inline-flex;align-items:center;justify-content:center;width:100%;padding:1rem;border-radius:999px;border:none;background:var(--gold);color:var(--black);font-weight:700;letter-spacing:0.12em;cursor:pointer;transition:transform var(--transition),background var(--transition);}
    .btn-primary:hover{background:var(--gold-light);transform:translateY(-1px);}
    .link-secondary{display:inline-block;margin-top:1rem;color:var(--gold);text-decoration:none;font-size:0.95rem;}
  </style>
</head>
<body>
  <section class="page">
    <div class="topbar">
      <a href="javascript:history.back()" class="back-btn" aria-label="Go back">←</a>
      <div class="page-title">My Looks</div>
      <div class="logo-badge"><img src="assets/logo.png" alt="CG" style="width:22px;height:22px;object-fit:contain" /></div>
    </div>
    <div class="content">
      <div class="page-label">Profile</div>
      <div class="heading">Your look collection is empty</div>
      <p class="subtitle">Save your favourite brow looks here for quick access to appointments, guides, and reference photos.</p>
      <div class="empty-card">
        <div class="empty-state-icon">✧</div>
        <div class="empty-title">No saved looks yet</div>
        <p class="empty-copy">Create a look from a session or save a style from one of your bookings to see it appear here.</p>
        <button class="btn-primary" onclick="window.location.href='save-look.php'">Create a look</button>
        <a class="link-secondary" href="saved-look.php">View saved guides</a>
      </div>
    </div>
  </section>
</body>
</html>