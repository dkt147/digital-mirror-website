<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SMS Authentication — Arch</title>
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
    .form-group{display:grid;gap:0.65rem;margin-bottom:1rem;}
    .label-text{font-size:0.75rem;letter-spacing:0.14em;text-transform:uppercase;color:var(--white-dim);}
    .input{width:100%;padding:1rem 1.1rem;border-radius:16px;border:1px solid var(--border);background:rgba(255,255,255,0.04);color:var(--white);font-size:1rem;}
    .input:focus{outline:none;border-color:var(--gold);}
    .btn{display:inline-flex;align-items:center;justify-content:center;padding:1rem 1.4rem;border-radius:999px;background:var(--gold);color:var(--black);text-transform:uppercase;letter-spacing:0.12em;font-size:0.8rem;border:0;cursor:pointer;transition:all var(--transition);width:100%;}
    .secondary{background:transparent;color:var(--white);border:1px solid var(--border);}
    .secondary:hover{border-color:var(--gold);color:var(--gold);}
    .note{color:var(--white-dim);font-size:0.9rem;line-height:1.7;margin-top:1rem;}
  </style>
</head>
<body>
  <div class="card">
    <span class="label">Two-factor auth</span>
    <h1 class="title">Enter the SMS code</h1>
    <p class="copy">We’ve sent a one-time verification code to your phone. Enter it below to complete sign in.</p>
    <form id="sms-form" onsubmit="handleSubmit(event)">
      <div class="form-group"><label class="label-text" for="phone">Phone number</label><input id="phone" class="input" type="tel" value="+1 555 123 4567" readonly /></div>
      <div class="form-group"><label class="label-text" for="code">Verification code</label><input id="code" class="input" type="text" maxlength="6" autocomplete="one-time-code" placeholder="Enter code" required /></div>
      <button type="submit" class="btn">Verify code</button>
    </form>
    <button class="btn secondary" onclick="resendCode()" style="margin-top:0.75rem;">Resend SMS</button>
    <p class="note">The backend must send the SMS code securely and verify it before returning an authenticated session token.</p>
  </div>
  <script>
    function handleSubmit(event){event.preventDefault();alert('SMS verification attempt submitted. Backend endpoint required.');}
    function resendCode(){alert('Resend code request sent. Backend endpoint required.');}
  </script>
</body>
</html>
