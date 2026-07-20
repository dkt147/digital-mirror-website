<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Account — Royals Arch Brow</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    :root {
      --black: #0a0a08;
      --dark: #111111;
      --dark-card: #15130d;
      --gold: #c9a84c;
      --gold-light: #d4b96a;
      --gold-dark: #8a6f2e;
      --gold-muted: rgba(201, 168, 76, 0.12);
      --white: #f5f0e8;
      --white-dim: rgba(245, 240, 232, 0.55);
      --border: rgba(201, 168, 76, 0.18);
      --border-hover: rgba(201, 168, 76, 0.45);
      --font-display: 'Cormorant Garamond', serif;
      --font-body: 'Montserrat', sans-serif;
      --radius: 18px;
      --radius-sm: 12px;
      --transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    html { font-size: 16px; scroll-behavior: smooth; }
    body {
      min-height: 100vh;
      background: var(--black);
      color: var(--white);
      font-family: var(--font-body);
      line-height: 1.6;
      overflow-x: hidden;
    }

    a { color: inherit; text-decoration: none; }
    button { font-family: var(--font-body); cursor: pointer; }

    .navbar { background: rgba(10, 10, 8, 0.97); }
    .nav-gold-rule { height: 1px; background: linear-gradient(to right, transparent 0%, var(--gold-dark) 30%, var(--gold-dark) 70%, transparent 100%); opacity: 0.5; }

    .main {
      max-width: 1100px;
      margin: 0 auto;
      padding: 2rem 2.5rem 3rem;
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
    }

    .page-topbar { display: flex; align-items: center; justify-content: space-between; gap: 1rem; margin-bottom: 1rem; }
    .back-btn { display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 50%; border: 1px solid var(--gold); color: var(--gold); background: transparent; transition: all var(--transition); }
    .back-btn:hover { background: rgba(201, 168, 76, 0.12); transform: scale(1.04); }
    .page-title-center { flex: 1; text-align: center; font-family: var(--font-display); text-transform: uppercase; letter-spacing: 0.28em; color: var(--gold); font-size: 0.85rem; }

    .page-label { font-size: 0.65rem; letter-spacing: 0.24em; text-transform: uppercase; color: var(--gold); margin-bottom: 0.2rem; }
    .page-title { font-family: var(--font-display); font-size: 2.2rem; font-style: italic; color: var(--white); line-height: 1.1; margin-bottom: 0.35rem; }
    .page-copy { color: var(--white-dim); max-width: 720px; }

    .account-grid { display: grid; gap: 1rem; grid-template-columns: repeat(2, minmax(0, 1fr)); }
    .account-card { background: #12110b; border: 1px solid var(--border); border-radius: var(--radius); padding: 1.75rem; display: flex; flex-direction: column; gap: 1.2rem; }
    .account-card strong { color: var(--white); }
    .account-row { display: grid; gap: 0.7rem; }
    .account-item { display: grid; gap: 0.25rem; }
    .account-key { font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.14em; color: var(--white-dim); }
    .account-value { font-size: 1rem; color: var(--white); }
    .account-badge { display: inline-flex; align-items: center; gap: 0.4rem; padding: 0.4rem 0.85rem; border-radius: 999px; border: 1px solid var(--gold); color: var(--gold); font-size: 0.72rem; text-transform: uppercase; letter-spacing: 0.12em; background: rgba(201, 168, 76, 0.08); }

    .actions-list { display: grid; gap: 0.9rem; }
    .action-link { display: inline-flex; align-items: center; justify-content: space-between; padding: 1rem 1.25rem; border-radius: 16px; background: rgba(255,255,255,0.03); border: 1px solid var(--border); transition: border-color var(--transition); color: var(--white); text-decoration: none; }
    .action-link:hover { border-color: var(--gold); }
    .action-link span { font-size: 0.85rem; }
    .action-link strong { font-family: var(--font-display); font-size: 1rem; font-weight: 400; }

    .btn { display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem; padding: 1rem 1.3rem; border-radius: 999px; font-size: 0.75rem; letter-spacing: 0.12em; text-transform: uppercase; transition: all var(--transition); border: 1px solid transparent; }
    .btn-primary { background: var(--gold); color: var(--black); }
    .btn-primary:hover { background: var(--gold-light); }
    .btn-secondary { background: transparent; border-color: var(--border); color: var(--white); }
    .btn-secondary:hover { color: var(--gold); border-color: var(--gold); }
    .btn-danger { background: rgba(139, 32, 32, 0.12); color: #e05c5c; border-color: rgba(139, 32, 32, 0.35); }
    .btn-danger:hover { background: rgba(139, 32, 32, 0.2); }

    .note-box { padding: 1rem 1.2rem; border-radius: 18px; border: 1px solid var(--border); background: rgba(255,255,255,0.03); color: var(--white-dim); }
    .note-box strong { color: var(--white); }

    @media (max-width: 860px) {
      .account-grid { grid-template-columns: 1fr; }
      .main { padding: 1.5rem 1.25rem 2rem; }
    }
  </style>
</head>
<body>
  <?php include 'includes/navbar.php'; ?>
  <div class="nav-gold-rule"></div>
  <main class="main">
    <div class="page-topbar">
      <a href="profile.php" class="back-btn" aria-label="Back to profile">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
      </a>
      <div class="page-title-center">My Account</div>
    </div>

    <div>
      <div class="page-label">Account management</div>
      <h1 class="page-title">Manage your profile, membership and security.</h1>
      <p class="page-copy">This page collects the account settings you need before checkout, payment updates, cancellation, and profile security. Backend values are loaded when available.</p>
    </div>

    <section class="account-grid">
      <article class="account-card">
        <div class="page-label">Personal info</div>
        <div class="account-row">
          <div class="account-item"><div class="account-key">Name</div><div class="account-value" id="account-name">—</div></div>
          <div class="account-item"><div class="account-key">Email</div><div class="account-value" id="account-email">—</div></div>
          <div class="account-item"><div class="account-key">Member since</div><div class="account-value" id="account-join-date">—</div></div>
        </div>
        <a class="action-link" href="profile.php"><strong>Edit profile</strong><span>›</span></a>
      </article>

      <article class="account-card">
        <div class="page-label">Membership</div>
        <div class="account-row">
          <div class="account-item"><div class="account-key">Tier</div><div class="account-value" id="membership-tier">—</div></div>
          <div class="account-item"><div class="account-key">Billing cycle</div><div class="account-value" id="membership-cycle">—</div></div>
          <div class="account-item"><div class="account-key">Next payment</div><div class="account-value" id="membership-next-payment">—</div></div>
        </div>
        <div class="actions-list">
          <a class="action-link" href="membership.php"><strong>Manage membership</strong><span>›</span></a>
          <button class="btn btn-secondary" onclick="location.href='membership.php'">Update plan</button>
          <button class="btn btn-danger" onclick="location.href='membership.php'">Cancel membership</button>
        </div>
      </article>

      <article class="account-card">
        <div class="page-label">Payment</div>
        <div class="account-row">
          <div class="account-item"><div class="account-key">Card</div><div class="account-value" id="payment-method">Visa •••• 4242</div></div>
          <div class="account-item"><div class="account-key">Billing country</div><div class="account-value" id="payment-country">—</div></div>
        </div>
        <div class="actions-list">
          <button class="btn btn-primary" onclick="location.href='membership.php'">Update payment details</button>
          <button class="btn btn-secondary" onclick="restorePurchases()">Restore purchases</button>
        </div>
      </article>

      <article class="account-card">
        <div class="page-label">Security</div>
        <div class="account-row">
          <div class="account-item"><div class="account-key">Password</div><div class="account-value">Last updated 4 weeks ago</div></div>
          <div class="account-item"><div class="account-key">Two-factor auth</div><div class="account-value" id="account-2fa">Disabled</div></div>
        </div>
        <div class="actions-list">
          <button class="btn btn-secondary" onclick="location.href='change-password.php'">Change password</button>
          <button class="btn btn-secondary" onclick="location.href='verify-otp.php'">Set up SMS code</button>
          <button class="btn btn-danger" onclick="location.href='delete-account.php'">Delete my account</button>
        </div>
      </article>
    </section>

    <div class="note-box">
      <strong>Backend required:</strong> This page will need the user profile endpoint, membership status, payment method display, subscription details, and two-factor state from the auth backend.
    </div>
  </main>

  <script>
    const API_BASE = '<?php echo $API_URL; ?>';

    function formatDate(value) {
      if (!value) return '—';
      try {
        const date = new Date(value);
        return date.toLocaleDateString('en-US', { month: 'long', day: 'numeric', year: 'numeric' });
      } catch {
        return value;
      }
    }

    async function loadAccountData() {
      const nameEl = document.getElementById('account-name');
      const emailEl = document.getElementById('account-email');
      const joinEl = document.getElementById('account-join-date');
      const tierEl = document.getElementById('membership-tier');
      const cycleEl = document.getElementById('membership-cycle');
      const nextPaymentEl = document.getElementById('membership-next-payment');
      const twoFaEl = document.getElementById('account-2fa');
      const paymentMethodEl = document.getElementById('payment-method');
      const paymentCountryEl = document.getElementById('payment-country');

      const storedEmail = localStorage.getItem('archUserEmail');
      const storedName = localStorage.getItem('archUserName');
      const token = localStorage.getItem('archAccessToken');

      nameEl.textContent = storedName || 'Your name';
      emailEl.textContent = storedEmail || 'Your email';
      joinEl.textContent = 'September 17, 2025';
      tierEl.textContent = 'Considered';
      cycleEl.textContent = 'Monthly';
      nextPaymentEl.textContent = '$14.99 · May 2';
      twoFaEl.textContent = 'Disabled';
      paymentMethodEl.textContent = 'Visa •••• 4242';
      paymentCountryEl.textContent = 'United States';

      if (!token) {
        return;
      }

      try {
        const response = await fetch(`${API_BASE}/auth/me`, {
          headers: {
            accept: 'application/json',
            Authorization: `Bearer ${token}`
          }
        });

        if (!response.ok) return;
        const data = await response.json();
        if (data) {
          const fullName = `${data.first_name || ''} ${data.last_name || ''}`.trim();
          nameEl.textContent = fullName || data.email || nameEl.textContent;
          emailEl.textContent = data.email || emailEl.textContent;
          joinEl.textContent = formatDate(data.joined_at || data.created_at || undefined);

          const membership = data.membership || {};
          tierEl.textContent = membership.tier || tierEl.textContent;
          cycleEl.textContent = membership.billing_cycle || cycleEl.textContent;
          nextPaymentEl.textContent = membership.next_payment || nextPaymentEl.textContent;
          twoFaEl.textContent = membership.two_factor ? 'Enabled' : 'Disabled';
          paymentMethodEl.textContent = membership.payment_method || paymentMethodEl.textContent;
          paymentCountryEl.textContent = membership.billing_country || paymentCountryEl.textContent;
        }
      } catch (err) {
        console.warn('Could not load account data', err);
      }
    }

    function restorePurchases() {
      alert('Restore purchases action will call the payment/restore endpoint once backend is available.');
    }

    loadAccountData();
  </script>
</body>
</html>
