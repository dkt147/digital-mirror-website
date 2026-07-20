<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Help & Support — Royals Arch Brow</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    * { box-sizing:border-box; margin:0; padding:0; }
    :root { --black:#0a0a08; --white:#f5f0e8; --white-dim:rgba(245,240,232,0.65); --gold:#c9a84c; --border:rgba(201,168,76,0.2); --radius:18px; --font-display:'Cormorant Garamond', serif; --font-body:'Montserrat', sans-serif; --transition:0.3s ease; }
    html{font-size:16px; scroll-behavior:smooth;}
    body{min-height:100vh;background:var(--black);color:var(--white);font-family:var(--font-body);}
    .navbar{background:rgba(10,10,8,0.97);} .nav-gold-rule{height:1px;background: linear-gradient(to right, transparent 0%, var(--gold) 30%, var(--gold) 70%, transparent 100%);opacity:0.5;}
    .container{max-width:1040px;margin:0 auto;padding:2rem 2.5rem 3rem;}
    .page-label{font-size:0.7rem;letter-spacing:0.22em;text-transform:uppercase;color:var(--gold);margin-bottom:0.5rem;}
    .page-title{font-family:var(--font-display);font-size:2.8rem;font-style:italic;line-height:1.05;margin-bottom:1rem;}
    .intro{max-width:720px;color:var(--white-dim);font-size:1rem;line-height:1.8;margin-bottom:2rem;}
    .support-grid{display:grid;grid-template-columns:1fr 1fr;gap:1.5rem;}
    .support-card{padding:1.75rem;border-radius:var(--radius);background:rgba(255,255,255,0.03);border:1px solid var(--border);}
    .support-card h2{font-family:var(--font-display);font-size:1.35rem;margin-bottom:0.8rem;}
    .support-card p{color:var(--white-dim);line-height:1.75;}
    .support-list{margin-top:1.25rem;display:grid;gap:0.75rem;}
    .support-link{display:flex;align-items:flex-start;gap:0.9rem;padding:1rem 1rem 1rem 1.1rem;border-radius:16px;background:rgba(255,255,255,0.02);border:1px solid var(--border);text-decoration:none;color:var(--white);transition:border-color var(--transition);}
    .support-link:hover{border-color:var(--gold);} .support-link strong{display:block;font-size:0.95rem;}
    .support-link span{font-size:0.9rem;color:var(--white-dim);}    
    @media(max-width:900px){.support-grid{grid-template-columns:1fr;}}
  </style>
</head>
<body>
  <?php include 'includes/navbar.php'; ?>
  <div class="nav-gold-rule"></div>
  <main class="container">
    <div class="page-label">Help & Support</div>
    <h1 class="page-title">Find answers and get assistance fast.</h1>
    <p class="intro">Browse common support topics or contact our team directly. We help with membership, payments, booking, account access, and technical troubleshooting.</p>
    <div class="support-grid">
      <article class="support-card"><h2>Account access</h2><p>Sign in help, password reset, two-factor setup, and email verification. If you can’t access your account, our support team will guide you securely.</p></article>
      <article class="support-card"><h2>Membership & billing</h2><p>Questions about plan details, trial periods, payment methods, renewal, and cancellation. We keep your subscriptions transparent and easy to manage.</p></article>
    </div>
    <div class="support-list">
      <a href="membership.php" class="support-link"><strong>Manage membership</strong><span>Change plan, view renewal date, update payment details, or cancel.</span></a>
      <a href="payment-entry.php" class="support-link"><strong>Update payment</strong><span>Securely change your card, Apple Pay, or Google Pay payment method.</span></a>
      <a href="reset-password.php" class="support-link"><strong>Password & security</strong><span>Reset your password, enable two-factor SMS verification, or secure your account.</span></a>
      <a href="contact-us.php" class="support-link"><strong>Contact support</strong><span>Submit a message to our support team for personalized help.</span></a>
    </div>
  </main>
</body>
</html>
