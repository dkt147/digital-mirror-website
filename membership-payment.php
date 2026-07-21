<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Payment Entry — Royals Arch Brow</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    *{box-sizing:border-box;margin:0;padding:0;}
    :root{--black:#0a0a08;--white:#f5f0e8;--white-dim:rgba(245,240,232,0.65);--gold:#c9a84c;--gold-light:#d4b96a;--border:rgba(201,168,76,0.2);--radius:18px;--font-display:'Cormorant Garamond',serif;--font-body:'Montserrat',sans-serif;--transition:0.3s ease;}
    html{font-size:16px;scroll-behavior:smooth;}
    body{min-height:100vh;background:var(--black);color:var(--white);font-family:var(--font-body);padding:2rem;}
    .container{max-width:920px;margin:0 auto;}
    .page-label{font-size:0.7rem;letter-spacing:0.22em;text-transform:uppercase;color:var(--gold);margin-bottom:0.5rem;}
    .title{font-family:var(--font-display);font-size:2.6rem;font-style:italic;line-height:1.05;margin-bottom:0.75rem;}
    .copy{max-width:720px;color:var(--white-dim);line-height:1.8;margin-bottom:1.75rem;}
    .toggle-panel{display:flex;gap:0.85rem;flex-wrap:wrap;margin-bottom:1.75rem;}
    .toggle-option{flex:1;min-width:220px;padding:1.25rem;border-radius:24px;border:1px solid var(--border);background:rgba(255,255,255,0.02);cursor:pointer;transition:border-color var(--transition);}
    .toggle-option.active{border-color:var(--gold);background:rgba(201,168,76,0.08);}
    .toggle-option h2{font-size:1.05rem;margin-bottom:0.6rem;}
    .toggle-option p{color:var(--white-dim);line-height:1.7;}
    .payment-grid{display:grid;grid-template-columns:1fr 1fr;gap:1.25rem;}
    .card{padding:1.6rem;border-radius:24px;background:rgba(255,255,255,0.03);border:1px solid var(--border);}
    .card h3{font-family:var(--font-display);font-size:1.2rem;margin-bottom:0.8rem;}
    .input{width:100%;padding:1rem 1.1rem;border-radius:16px;border:1px solid var(--border);background:rgba(255,255,255,0.04);color:var(--white);margin-bottom:1rem;}
    .input:focus{outline:none;border-color:var(--gold);}
    .payment-method{display:grid;gap:0.75rem;margin-top:1rem;}
    .method-btn{display:flex;align-items:center;gap:0.75rem;padding:1rem 1.1rem;border-radius:18px;border:1px solid var(--border);background:rgba(255,255,255,0.02);cursor:pointer;transition:border-color var(--transition);}
    .method-btn.active{border-color:var(--gold);background:rgba(201,168,76,0.08);}
    .btn{display:inline-flex;align-items:center;justify-content:center;padding:1rem 1.4rem;border-radius:999px;background:var(--gold);color:var(--black);text-transform:uppercase;letter-spacing:0.12em;font-size:0.8rem;border:0;cursor:pointer;transition:all var(--transition);width:100%;margin-top:1rem;}
    .note{color:var(--white-dim);font-size:0.9rem;line-height:1.7;margin-top:1rem;}
    @media(max-width:900px){.payment-grid{grid-template-columns:1fr;}}
  </style>
</head>
<body>
  <?php include 'includes/navbar.php'; ?>
  <div class="nav-gold-rule"></div>
  <main class="container">
    <span class="page-label">Payment entry</span>
    <h1 class="title">Secure payment details</h1>
    <p class="copy">Enter your payment information for membership. Apple Pay and Google Pay will be offered once the backend integration is complete.</p>

    <div class="toggle-panel">
      <div class="toggle-option active" id="monthly-option" onclick="selectPlan('monthly')"><h2>Monthly</h2><p id="monthly-plan-copy">$14.99 / month · 7-day free trial · Auto-renews</p></div>
      <div class="toggle-option" id="annual-option" onclick="selectPlan('annual')"><h2>Annual</h2><p id="annual-plan-copy">$149.99 / year · 14-day free trial · Auto-renews</p></div>
    </div>

    <div class="payment-grid">
      <section class="card">
        <h3>Card details</h3>
        <input class="input" type="text" placeholder="Card number" autocomplete="cc-number" />
        <input class="input" type="text" placeholder="Name on card" autocomplete="cc-name" />
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:0.9rem;">
          <input class="input" type="text" placeholder="MM/YY" autocomplete="cc-exp" />
          <input class="input" type="text" placeholder="CVC" autocomplete="cc-csc" />
        </div>
        <div id="payment-status" class="note">Select a plan to begin your membership.</div>
        <button class="btn" id="save-payment-button">Save payment</button>
      </section>

      <section class="card">
        <h3>Express payment</h3>
        <div class="method-btn active" id="apple-pay-btn" onclick="selectMethod('apple')"><strong>Apple Pay</strong><span style="color:var(--white-dim);font-size:0.92rem;">Primary payment option</span></div>
        <div class="method-btn" id="google-pay-btn" onclick="selectMethod('google')"><strong>Google Pay</strong><span style="color:var(--white-dim);font-size:0.92rem;">Secondary payment option</span></div>
        <p class="note">Apple Pay and Google Pay integration placeholders. Backend will use a certified payment processor to tokenize and process all payments securely.</p>
      </section>
    </div>
  </main>
  <script>
    const API_BASE = '<?php echo $API_URL; ?>';
    let selectedPlan = 'monthly';

    function selectPlan(plan) {
      selectedPlan = plan;
      document.getElementById('monthly-option').classList.toggle('active', plan === 'monthly');
      document.getElementById('annual-option').classList.toggle('active', plan === 'annual');
    }

    function selectMethod(method) {
      document.getElementById('apple-pay-btn').classList.toggle('active', method === 'apple');
      document.getElementById('google-pay-btn').classList.toggle('active', method === 'google');
    }

    async function loadPlans() {
      try {
        const response = await fetch(`${API_BASE}/membership/plans`, {
          method: 'GET',
          headers: { accept: 'application/json' }
        });
        const plans = await response.json().catch(() => []);
        if (!response.ok || !Array.isArray(plans)) return;

        const monthly = plans.find((plan) => plan.code === 'monthly');
        const annual = plans.find((plan) => plan.code === 'annual');

        if (monthly) {
          document.getElementById('monthly-plan-copy').textContent = `${monthly.price} · ${monthly.trial_days}-day free trial · ${monthly.auto_renews ? 'Auto-renews' : 'One-time'}`;
        }
        if (annual) {
          document.getElementById('annual-plan-copy').textContent = `${annual.price} · ${annual.trial_days}-day free trial · ${annual.auto_renews ? 'Auto-renews' : 'One-time'}`;
        }
      } catch (err) {
        console.error(err);
      }
    }

    async function startMembership() {
      const button = document.getElementById('save-payment-button');
      const statusEl = document.getElementById('payment-status');
      const token = localStorage.getItem('archAccessToken');

      if (!token) {
        window.location.href = 'login.php';
        return;
      }

      button.disabled = true;
      button.textContent = 'Processing…';
      statusEl.textContent = 'Starting your membership plan…';

      try {
        const payload = JSON.stringify({ plan: selectedPlan, plan_id: selectedPlan });
        let response = await fetch(`${API_BASE}/membership/start-trial`, {
          method: 'POST',
          headers: {
            accept: 'application/json',
            'Content-Type': 'application/json',
            Authorization: `Bearer ${token}`
          },
          body: payload
        });

        let data = await response.json().catch(() => ({}));
        if (!response.ok) {
          response = await fetch(`${API_BASE}/membership/subscribe`, {
            method: 'POST',
            headers: {
              accept: 'application/json',
              'Content-Type': 'application/json',
              Authorization: `Bearer ${token}`
            },
            body: payload
          });
          data = await response.json().catch(() => ({}));
        }

        if (!response.ok) {
          throw new Error(data.detail || data.message || 'Unable to start your membership right now.');
        }

        const params = new URLSearchParams({
          plan: selectedPlan,
          trial_end: data.trial_end || data.trial_ends || '',
          next_payment: data.next_payment || data.next_charge || ''
        });

        window.location.href = `trial-confirmed.php?${params.toString()}`;
      } catch (err) {
        console.error(err);
        statusEl.textContent = err.message || 'Unable to start your membership right now.';
        button.disabled = false;
        button.textContent = 'Save payment';
      }
    }

    document.addEventListener('DOMContentLoaded', () => {
      loadPlans();
      document.getElementById('save-payment-button').addEventListener('click', startMembership);
    });
  </script>
</body>
</html>
