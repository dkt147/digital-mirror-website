<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>How ARCH Works — Royals Arch Brow</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    * { box-sizing:border-box; margin:0; padding:0; }
    :root { --black:#0a0a08; --white:#f5f0e8; --white-dim:rgba(245,240,232,0.65); --gold:#c9a84c; --border:rgba(201,168,76,0.2); --radius:18px; --font-display:'Cormorant Garamond', serif; --font-body:'Montserrat', sans-serif; --transition:0.3s ease; }
    html{font-size:16px;scroll-behavior:smooth;}
    body{min-height:100vh;background:var(--black);color:var(--white);font-family:var(--font-body);}
    .navbar{background:rgba(10,10,8,0.97);} .nav-gold-rule{height:1px;background: linear-gradient(to right, transparent 0%, var(--gold) 30%, var(--gold) 70%, transparent 100%);opacity:0.5;}
    .container{max-width:1040px;margin:0 auto;padding:2rem 2.5rem 3rem;}
    .page-label{font-size:0.7rem;letter-spacing:0.22em;text-transform:uppercase;color:var(--gold);margin-bottom:0.5rem;}
    .page-title{font-family:var(--font-display);font-size:2.8rem;font-style:italic;line-height:1.05;margin-bottom:1rem;}
    .intro{max-width:720px;color:var(--white-dim);font-size:1rem;line-height:1.8;margin-bottom:2rem;}
    .video-card{position:relative;padding-top:56.25%;border-radius:var(--radius);background:#111;border:1px solid var(--border);overflow:hidden;}
    .video-card iframe, .video-card .video-placeholder{position:absolute;inset:0;width:100%;height:100%;border:0;}
    .video-placeholder{display:flex;align-items:center;justify-content:center;color:var(--white-dim);font-size:1rem;background:radial-gradient(circle at top, rgba(201,168,76,0.1), transparent 45%);}
    .steps{display:grid;gap:1.25rem;margin-top:2rem;}
    .step-card{padding:1.6rem;border-radius:var(--radius);background:rgba(255,255,255,0.03);border:1px solid var(--border);}
    .step-number{font-family:var(--font-display);font-size:1.5rem;color:var(--gold);margin-bottom:0.5rem;}
    .step-title{font-size:1.1rem;color:var(--white);margin-bottom:0.6rem;}
    .step-copy{color:var(--white-dim);line-height:1.75;}
  </style>
</head>
<body>
  <?php include 'includes/navbar.php'; ?>
  <div class="nav-gold-rule"></div>
  <main class="container">
    <div class="page-label">How ARCH works</div>
    <h1 class="page-title">A simple, expert brow experience.</h1>
    <p class="intro">From face scan to style recommendation, ARCH guides you through every step with intelligent design and real-time preview.</p>
    <div class="video-card">
      <div class="video-placeholder">Promo video placeholder — embed your final video here.</div>
    </div>
    <div class="steps">
      <div class="step-card"><div class="step-number">1</div><div class="step-title">Scan your brows</div><p class="step-copy">Use the camera flow to capture your brow shape and skin tone. The app analyzes your unique facial geometry for a precise result.</p></div>
      <div class="step-card"><div class="step-number">2</div><div class="step-title">Choose a style</div><p class="step-copy">Select from curated brow looks, then preview the overlay in real time. Each option is crafted to match your face and personal preferences.</p></div>
      <div class="step-card"><div class="step-number">3</div><div class="step-title">Book or shop</div><p class="step-copy">Finish with a tailored recommendation, schedule an appointment, or shop the products that match your chosen style.</p></div>
    </div>
  </main>
</body>
</html>
