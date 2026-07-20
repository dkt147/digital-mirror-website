<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Account Deleted — Royals Arch Brow</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    :root {
      --black: #0a0a08;
      --gold: #c9a84c;
      --white: #f5f0e8;
      --white-dim: rgba(245,240,232,0.65);
      --border: rgba(201,168,76,0.2);
      --radius: 20px;
      --transition: 0.3s ease;
      --font-display: 'Cormorant Garamond', serif;
      --font-body: 'Montserrat', sans-serif;
    }

    html { font-size: 16px; }
    body { min-height: 100vh; background: var(--black); color: var(--white); font-family: var(--font-body); display: grid; place-items: center; padding: 2rem; }

    .card { width: 100%; max-width: 600px; padding: 2rem; border-radius: var(--radius); background: rgba(255,255,255,0.02); border: 1px solid var(--border); box-shadow: 0 24px 60px rgba(0,0,0,0.45); text-align: center; }
    .badge { display: inline-flex; align-items: center; justify-content: center; padding: 0.4rem 0.95rem; border-radius: 999px; background: rgba(201,168,76,0.12); color: var(--gold); font-size: 0.8rem; letter-spacing: 0.12em; text-transform: uppercase; margin-bottom: 1rem; }
    .title { font-family: var(--font-display); font-size: 2.6rem; font-style: italic; margin-bottom: 1rem; }
    .subtitle { color: var(--white-dim); font-size: 1rem; line-height: 1.8; margin-bottom: 1.8rem; }
    .btn { display: inline-flex; align-items: center; justify-content: center; padding: 1rem 1.5rem; border-radius: 999px; font-size: 0.75rem; letter-spacing: 0.12em; text-transform: uppercase; border: 1px solid transparent; transition: all var(--transition); }
    .btn-primary { background: var(--gold); color: var(--black); }
    .btn-primary:hover { background: #d4b96a; }
    .btn-secondary { background: transparent; border: 1px solid var(--border); color: var(--white); margin-left: 0.75rem; }
    .btn-secondary:hover { border-color: var(--gold); color: var(--gold); }
  </style>
</head>
<body>
  <div class="card">
    <span class="badge">Account deleted</span>
    <h1 class="title">Your account has been removed.</h1>
    <p class="subtitle">We're sorry to see you go. Your profile and membership access are deleted, and the account deletion confirmation has been triggered. If you change your mind, you can create a new account anytime.</p>
    <div>
      <button class="btn btn-primary" onclick="window.location.href='signup.php'">Create new account</button>
      <button class="btn btn-secondary" onclick="window.location.href='index.php'">Back to home</button>
    </div>
  </div>
</body>
</html>
