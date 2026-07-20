<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us — Royals Arch Brow</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    :root { --black:#0a0a08; --white:#f5f0e8; --white-dim:rgba(245,240,232,0.65); --gold:#c9a84c; --border:rgba(201,168,76,0.2); --radius:18px; --font-display:'Cormorant Garamond', serif; --font-body:'Montserrat', sans-serif; --transition:0.3s ease; }
    html { font-size:16px; scroll-behavior:smooth; }
    body { min-height:100vh; background:var(--black); color:var(--white); font-family:var(--font-body); }
    a { color:inherit; text-decoration:none; }
    .navbar { background: rgba(10,10,8,0.97); }
    .nav-gold-rule { height:1px; background: linear-gradient(to right, transparent 0%, var(--gold) 30%, var(--gold) 70%, transparent 100%); opacity:0.5; }
    .container { max-width:1080px; margin:0 auto; padding:2rem 2.5rem 3rem; }
    .page-label { font-size:0.7rem; letter-spacing:0.22em; text-transform:uppercase; color:var(--gold); margin-bottom:0.5rem; }
    .page-title { font-family:var(--font-display); font-size:2.8rem; font-style:italic; line-height:1.05; margin-bottom:1rem; }
    .intro { max-width:740px; color:var(--white-dim); margin-bottom:2rem; font-size:1rem; line-height:1.8; }
    .story-grid { display:grid; gap:1.5rem; grid-template-columns:1fr 1fr; }
    .story-card { background:rgba(255,255,255,0.02); border:1px solid var(--border); border-radius:var(--radius); padding:1.75rem; }
    .story-card h2 { font-family:var(--font-display); font-size:1.4rem; margin-bottom:0.75rem; }
    .story-card p { color:var(--white-dim); line-height:1.8; font-size:0.95rem; }
    .team { display:grid; gap:1rem; margin-top:2rem; }
    .team-card { padding:1.5rem; border-radius:var(--radius); border:1px solid var(--border); background:rgba(255,255,255,0.02); }
    .team-name { font-family:var(--font-display); font-size:1rem; margin-bottom:0.3rem; }
    .team-role { color:var(--gold); font-size:0.8rem; text-transform:uppercase; letter-spacing:0.12em; margin-bottom:0.85rem; }
    .team-bio { color:var(--white-dim); line-height:1.75; font-size:0.92rem; }
    .btn { display:inline-flex; align-items:center; justify-content:center; padding:0.95rem 1.4rem; border-radius:999px; background:var(--gold); color:var(--black); text-transform:uppercase; letter-spacing:0.12em; font-size:0.8rem; margin-top:1.5rem; }
    @media(max-width:900px){ .story-grid{grid-template-columns:1fr;} }
  </style>
</head>
<body>
  <?php include 'includes/navbar.php'; ?>
  <div class="nav-gold-rule"></div>
  <main class="container">
    <div class="page-label">About us</div>
    <h1 class="page-title">Our craft is built for brows and confidence.</h1>
    <p class="intro">Arch Royal Brow blends pioneering face-scanning technology with artistry. We design a beauty experience that feels premium, personal and effortless across every visit.</p>
    <div class="story-grid">
      <article class="story-card"><h2>Our mission</h2><p>We bring true brow confidence through smart design, expert guidance and an experience that fits every face. From scan to style, our product is made to celebrate your best expression.</p></article>
      <article class="story-card"><h2>Our promise</h2><p>Safe data, secure membership, and elegant customer care. We keep your personal profile private, your payment process encrypted, and your beauty goals focused.</p></article>
    </div>
    <section class="team">
      <article class="team-card"><div class="team-name">Charlotte</div><div class="team-role">Creative Director</div><p class="team-bio">Charlotte leads our brow artistry team and ensures every digital try-on feels real, intuitive and beautiful.</p></article>
      <article class="team-card"><div class="team-name">Maya</div><div class="team-role">Product Lead</div><p class="team-bio">Maya manages the app experience, from onboarding flows to membership journeys that make every screen thoughtful and elegant.</p></article>
      <article class="team-card"><div class="team-name">Aria</div><div class="team-role">Customer Care</div><p class="team-bio">Aria helps members with bookings, subscriptions and support. Your questions are answered quickly, clearly and with care.</p></article>
    </section>
    <a class="btn" href="contact-us.php">Contact the team</a>
  </main>
</body>
</html>
