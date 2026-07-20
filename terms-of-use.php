<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Terms of Use — Royals Arch Brow</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    * { box-sizing:border-box; margin:0; padding:0; }
    :root { --black:#0a0a08; --white:#f5f0e8; --white-dim:rgba(245,240,232,0.65); --gold:#c9a84c; --border:rgba(201,168,76,0.2); --radius:18px; --font-display:'Cormorant Garamond', serif; --font-body:'Montserrat', sans-serif; --transition:0.3s ease; }
    html{font-size:16px;scroll-behavior:smooth;}
    body{min-height:100vh;background:var(--black);color:var(--white);font-family:var(--font-body);}
    .navbar{background:rgba(10,10,8,0.97);} .nav-gold-rule{height:1px;background: linear-gradient(to right, transparent 0%, var(--gold) 30%, var(--gold) 70%, transparent 100%);opacity:0.5;}
    .container{max-width:980px;margin:0 auto;padding:2rem 2.5rem 3rem;}
    .page-label{font-size:0.7rem;letter-spacing:0.22em;text-transform:uppercase;color:var(--gold);margin-bottom:0.5rem;}
    .page-title{font-family:var(--font-display);font-size:2.8rem;font-style:italic;line-height:1.05;margin-bottom:1rem;}
    .page-copy{max-width:760px;color:var(--white-dim);line-height:1.8;margin-bottom:1.75rem;}
    .terms-panel{background:rgba(255,255,255,0.02);border:1px solid var(--border);border-radius:var(--radius);padding:2rem;max-height:68vh;overflow-y:auto;}
    .terms-section{margin-bottom:1.75rem;}
    .terms-title{font-family:var(--font-display);font-size:1.1rem;color:var(--white);margin-bottom:0.8rem;}
    .terms-text{color:var(--white-dim);line-height:1.75;font-size:0.95rem;}
    .terms-text ul{list-style:disc;margin:1rem 0 0 1.2rem;}
    @media(max-width:900px){.container{padding:1.5rem 1.25rem;}}
  </style>
</head>
<body>
  <?php include 'includes/navbar.php'; ?>
  <div class="nav-gold-rule"></div>
  <main class="container">
    <div class="page-label">Terms of use</div>
    <h1 class="page-title">Terms that govern your use of Arch.</h1>
    <p class="page-copy">Please read these terms carefully before using the ARCH experience. Continued access means you agree to these terms and the privacy practices described below.</p>
    <section class="terms-panel">
      <div class="terms-section"><div class="terms-title">1. Acceptance</div><div class="terms-text">By using Arch, you agree to these terms and any future updates. If you do not agree, do not use the service.</div></div>
      <div class="terms-section"><div class="terms-title">2. Account security</div><div class="terms-text">Keep your login secure. Passwords must never be shared. You are responsible for activity that occurs under your account.</div></div>
      <div class="terms-section"><div class="terms-title">3. Payment and subscription</div><div class="terms-text">Subscription fees are charged by the payment processor. Cancellation takes effect at the end of the billing period unless otherwise specified. Trials are subject to the trial terms described in the membership section.</div></div>
      <div class="terms-section"><div class="terms-title">4. Data and privacy</div><div class="terms-text">Personal data is stored securely and encrypted. Face scan data remains on device unless otherwise stated in a future release.</div></div>
      <div class="terms-section"><div class="terms-title">5. Account deletion</div><div class="terms-text">When you delete your account, your profile and membership data will be removed. Some transactional records may remain for legal purposes.</div></div>
      <div class="terms-section"><div class="terms-title">6. Changes to terms</div><div class="terms-text">We may update these terms. Continued use after changes means you accept the revised terms.</div></div>
    </section>
  </main>
</body>
</html>
