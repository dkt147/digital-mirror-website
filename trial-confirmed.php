<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Trial Confirmed — Royals Arch Brow</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    *{box-sizing:border-box;margin:0;padding:0;}
    :root{--black:#0a0a08;--white:#f5f0e8;--white-dim:rgba(245,240,232,0.65);--gold:#c9a84c;--green:#8dc48d;--border:rgba(201,168,76,0.2);--font-display:'Cormorant Garamond',serif;--font-body:'Montserrat',sans-serif;--radius:18px;--transition:0.3s ease;}
    html{font-size:16px;scroll-behavior:smooth;}
    body{min-height:100vh;background:var(--black);color:var(--white);font-family:var(--font-body);padding:2rem;}
    .container{max-width:900px;margin:0 auto;}
    .page-label{font-size:0.7rem;letter-spacing:0.22em;text-transform:uppercase;color:var(--gold);margin-bottom:0.5rem;}
    .page-title{font-family:var(--font-display);font-size:2.6rem;font-style:italic;line-height:1.05;margin-bottom:0.75rem;}
    .card{padding:2rem;border-radius:24px;background:rgba(255,255,255,0.03);border:1px solid var(--border);}
    .status{display:inline-flex;padding:0.7rem 1rem;border-radius:999px;background:rgba(141,196,141,0.16);color:var(--green);font-weight:600;letter-spacing:0.1em;text-transform:uppercase;margin-bottom:1rem;}
    .message{margin-bottom:1.25rem;color:var(--white-dim);line-height:1.8;}
    .details{display:grid;gap:1rem;margin-bottom:1.75rem;}
    .detail-item{padding:1rem;border-radius:18px;background:rgba(255,255,255,0.02);border:1px solid var(--border);}
    .detail-item strong{display:block;margin-bottom:0.5rem;color:var(--white);}
    .detail-item span{color:var(--white-dim);font-size:0.95rem;}
    .actions{display:grid;gap:0.9rem;}
    .btn{display:inline-flex;align-items:center;justify-content:center;padding:1rem 1.3rem;border-radius:999px;background:var(--gold);color:var(--black);text-transform:uppercase;letter-spacing:0.12em;font-size:0.8rem;border:0;cursor:pointer;transition:all var(--transition);}
  </style>
</head>
<body>
  <?php include 'includes/navbar.php'; ?>
  <div class="nav-gold-rule"></div>
  <main class="container">
    <span class="page-label">Trial started</span>
    <h1 class="page-title">Your free trial is confirmed.</h1>
    <div class="card">
      <span class="status">Trial active</span>
      <p class="message">Welcome to Royals Arch Brow. You now have access to your membership benefits for the next 7 days before the first payment is processed.</p>
      <div class="details">
        <div class="detail-item"><strong>Plan</strong><span id="plan-name">Monthly membership</span></div>
        <div class="detail-item"><strong>Trial ends</strong><span id="trial-end">May 5, 2026</span></div>
        <div class="detail-item"><strong>Next payment</strong><span id="next-payment">$14.99 on May 6, 2026</span></div>
      </div>
      <div class="actions">
        <button class="btn" onclick="window.location.href='membership.php'">View membership</button>
        <button class="btn" onclick="window.location.href='profile.php'">Complete profile</button>
      </div>
    </div>
  </main>
  <script>
    const params = new URLSearchParams(window.location.search);
    const plan = params.get('plan') === 'annual' ? 'Annual membership' : 'Monthly membership';
    const trialEnd = params.get('trial_end');
    const nextPayment = params.get('next_payment');

    function formatValue(value) {
      if (!value) return 'Pending';
      const date = new Date(value);
      if (!Number.isNaN(date.getTime())) {
        return date.toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric' });
      }
      return value;
    }

    document.getElementById('plan-name').textContent = plan;
    document.getElementById('trial-end').textContent = formatValue(trialEnd);
    document.getElementById('next-payment').textContent = nextPayment ? `$${nextPayment}` : 'Pending';
  </script>
</body>
</html>
