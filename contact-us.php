<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us — Royals Arch Brow</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    * { box-sizing:border-box; margin:0; padding:0; }
    :root { --black:#0a0a08; --white:#f5f0e8; --white-dim:rgba(245,240,232,0.65); --gold:#c9a84c; --border:rgba(201,168,76,0.2); --radius:18px; --font-display:'Cormorant Garamond', serif; --font-body:'Montserrat', sans-serif; --transition:0.3s ease; }
    html{font-size:16px; scroll-behavior:smooth;}
    body{min-height:100vh;background:var(--black);color:var(--white);font-family:var(--font-body);}
    .navbar{background:rgba(10,10,8,0.97);} .nav-gold-rule{height:1px;background: linear-gradient(to right, transparent 0%, var(--gold) 30%, var(--gold) 70%, transparent 100%);opacity:0.5;}
    .container{max-width:920px;margin:0 auto;padding:2rem 2.5rem 3rem;}
    .page-label{font-size:0.7rem;letter-spacing:0.22em;text-transform:uppercase;color:var(--gold);margin-bottom:0.5rem;}
    .page-title{font-family:var(--font-display);font-size:2.8rem;font-style:italic;line-height:1.05;margin-bottom:1rem;}
    .intro{max-width:700px;color:var(--white-dim);font-size:1rem;line-height:1.8;margin-bottom:2rem;}
    .content-grid{display:grid;grid-template-columns:1fr 1fr;gap:1.5rem;}
    .info-card{background:rgba(255,255,255,0.02);border:1px solid var(--border);border-radius:var(--radius);padding:1.75rem;}
    .info-card p{color:var(--white-dim);line-height:1.8;}
    .info-card strong{display:block;color:var(--white);margin-bottom:0.75rem;}
    .form-card{background:rgba(255,255,255,0.02);border:1px solid var(--border);border-radius:var(--radius);padding:2rem;}
    .form-group{display:grid;gap:0.75rem;margin-bottom:1rem;}
    .label{font-size:0.75rem;text-transform:uppercase;letter-spacing:0.14em;color:var(--white-dim);}
    .input,textarea{width:100%;padding:1rem 1.1rem;border-radius:16px;border:1px solid var(--border);background:rgba(255,255,255,0.04);color:var(--white);font-size:1rem;resize:none;}
    .input:focus,textarea:focus{outline:none;border-color:var(--gold);}
    .btn{display:inline-flex;align-items:center;justify-content:center;padding:1rem 1.4rem;border-radius:999px;background:var(--gold);color:var(--black);text-transform:uppercase;letter-spacing:0.12em;font-size:0.8rem;}
    .note{color:var(--white-dim);font-size:0.9rem;line-height:1.7;margin-top:1rem;}
    @media(max-width:900px){.content-grid{grid-template-columns:1fr;}}    
  </style>
</head>
<body>
  <?php include 'includes/navbar.php'; ?>
  <div class="nav-gold-rule"></div>
  <main class="container">
    <div class="page-label">Contact us</div>
    <h1 class="page-title">Send us a message.</h1>
    <p class="intro">For billing support, membership questions, technical issues, or general inquiries, our team replies within one business day.</p>
    <div class="content-grid">
      <section class="info-card">
        <strong>Email</strong>
        <p>hello@cbygroyals.com</p>
        <strong>Response time</strong>
        <p>Within 24 hours on business days.</p>
        <strong>Support type</strong>
        <p>Membership, orders, payments, technical support, and app help.</p>
      </section>
      <section class="form-card">
        <form id="contact-form" onsubmit="handleSubmit(event)">
          <div class="form-group"><label class="label" for="name">Your name</label><input class="input" id="name" type="text" required placeholder="Jane Doe" /></div>
          <div class="form-group"><label class="label" for="email">Email address</label><input class="input" id="email" type="email" required placeholder="you@example.com" /></div>
          <div class="form-group"><label class="label" for="subject">Subject</label><input class="input" id="subject" type="text" required placeholder="Membership question" /></div>
          <div class="form-group"><label class="label" for="message">Message</label><textarea class="input" id="message" rows="6" required placeholder="Tell us how we can help..."></textarea></div>
          <button type="submit" class="btn">Send message</button>
          <p class="note">This form will be connected to the backend contact route. It sends email to hello@cbygroyals.com once integrated.</p>
        </form>
      </section>
    </div>
  </main>
  <script>
    function handleSubmit(event) {
      event.preventDefault();
      alert('Message submitted. Backend integration pending.');
      document.getElementById('contact-form').reset();
    }
  </script>
</body>
</html>
