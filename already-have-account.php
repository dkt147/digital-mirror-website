<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Already Have an Account — Arch</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    *{box-sizing:border-box;margin:0;padding:0;}
    :root{--black:#0a0a08;--white:#f5f0e8;--white-dim:rgba(245,240,232,0.65);--gold:#c9a84c;--border:rgba(201,168,76,0.2);--radius:18px;--font-display:'Cormorant Garamond',serif;--font-body:'Montserrat',sans-serif;--transition:0.3s ease;}
    html{font-size:16px;scroll-behavior:smooth;}
    body{min-height:100vh;background:var(--black);color:var(--white);font-family:var(--font-body);display:grid;place-items:center;padding:2rem;}
    .card{width:100%;max-width:560px;padding:2rem;border-radius:var(--radius);background:rgba(255,255,255,0.02);border:1px solid var(--border);}
    .label{font-size:0.75rem;letter-spacing:0.22em;text-transform:uppercase;color:var(--gold);margin-bottom:0.75rem;display:block;}
    .title{font-family:var(--font-display);font-size:2.2rem;font-style:italic;line-height:1.05;margin-bottom:1rem;}
    .copy{color:var(--white-dim);line-height:1.8;margin-bottom:1.8rem;}
    .actions{display:flex;gap:0.75rem;flex-wrap:wrap;}
    .btn{display:inline-flex;align-items:center;justify-content:center;padding:1rem 1.4rem;border-radius:999px;background:var(--gold);color:var(--black);text-transform:uppercase;letter-spacing:0.12em;font-size:0.8rem;border:0;cursor:pointer;transition:all var(--transition);}
    .btn-secondary{background:transparent;color:var(--white);border:1px solid var(--border);}
    .btn-secondary:hover{border-color:var(--gold);color:var(--gold);}
    .footer{margin-top:1.5rem;color:var(--white-dim);font-size:0.92rem;line-height:1.7;}
  </style>
</head>
<body>
  <div class="card">
    <span class="label">Account exists</span>
    <h1 class="title">It looks like you already have an account.</h1>
    <p class="copy">Use your existing account to continue. If you want to sign in with a different email, please log out first or create a new account with a different address.</p>
    <div class="actions">
      <button class="btn" onclick="window.location.href='login.php'">Sign in</button>
      <button class="btn btn-secondary" onclick="window.location.href='signup.php'">Create new account</button>
    </div>
    <p class="footer">If you have trouble accessing your account, reach out at <strong>hello@cbygroyals.com</strong>.</p>
  </div>
</body>
</html>
