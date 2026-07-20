<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Delete Account — Royals Arch Brow</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    :root {
      --black: #0a0a08;
      --gold: #c9a84c;
      --gold-light: #d4b96a;
      --white: #f5f0e8;
      --white-dim: rgba(245,240,232,0.65);
      --border: rgba(201,168,76,0.2);
      --radius: 20px;
      --transition: 0.3s ease;
      --font-display: 'Cormorant Garamond', serif;
      --font-body: 'Montserrat', sans-serif;
    }

    html { font-size: 16px; scroll-behavior: smooth; }
    body { min-height: 100vh; background: var(--black); color: var(--white); font-family: var(--font-body); }
    a { color: inherit; text-decoration: none; }
    button, input { font-family: var(--font-body); }

    .page { max-width: 680px; margin: 0 auto; padding: 2rem 1.5rem 3rem; }
    .back-btn { display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 50%; border: 1px solid var(--gold); color: var(--gold); background: transparent; transition: all var(--transition); }
    .back-btn:hover { background: rgba(201,168,76,0.12); transform: scale(1.04); }
    .page-title { font-family: var(--font-display); font-size: 2.4rem; font-style: italic; line-height: 1.05; margin-top: 1.25rem; }
    .page-label { font-size: 0.65rem; letter-spacing: 0.24em; text-transform: uppercase; color: var(--gold); margin-bottom: 0.5rem; }
    .page-copy { color: var(--white-dim); margin-top: 0.75rem; font-size: 0.95rem; line-height: 1.8; }
    .warning-card { margin-top: 1.75rem; padding: 1.5rem; border-radius: var(--radius); background: rgba(201,168,76,0.08); border: 1px solid rgba(201,168,76,0.22); }
    .warning-title { font-size: 1rem; font-weight: 600; margin-bottom: 0.65rem; color: var(--white); }
    .warning-list { list-style: none; display: grid; gap: 0.6rem; color: var(--white-dim); font-size: 0.95rem; }
    .warning-list li::before { content: '•'; margin-right: 0.65rem; color: var(--gold); }

    .confirm-block { margin-top: 2rem; display: grid; gap: 1rem; }
    .confirm-label { font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.14em; color: var(--white-dim); }
    .confirm-input { width: 100%; min-height: 68px; padding: 1rem 1.1rem; border-radius: 18px; border: 1px solid var(--border); background: rgba(255,255,255,0.03); color: var(--white); font-size: 1rem; }
    .confirm-input:focus { border-color: var(--gold); outline: none; }
    .form-error { color: #e05c5c; font-size: 0.85rem; min-height: 1.2rem; }

    .btn { width: 100%; padding: 1rem 1.25rem; border-radius: 999px; letter-spacing: 0.12em; text-transform: uppercase; transition: all var(--transition); border: 1px solid transparent; }
    .btn-primary { background: var(--gold); color: var(--black); }
    .btn-primary:hover { background: var(--gold-light); }
    .btn-secondary { background: transparent; border-color: var(--border); color: var(--white); }
    .btn-secondary:hover { border-color: var(--gold); color: var(--gold); }
    .btn-danger { background: rgba(139, 32, 32, 0.14); color: #e05c5c; border-color: rgba(139, 32, 32, 0.35); }
    .btn-danger:hover { background: rgba(139, 32, 32, 0.2); }

    .status-note { margin-top: 0.5rem; color: var(--white-dim); font-size: 0.9rem; }
  </style>
</head>
<body>
  <div class="page">
    <a href="my-account.php" class="back-btn" aria-label="Back to My Account">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
    </a>

    <div class="page-label">Delete account</div>
    <h1 class="page-title">Delete my account</h1>
    <p class="page-copy">This action permanently removes your Arch Royal account. Saved looks, membership history, and profile data will be deleted. Payment information is never stored by Arch and will be removed at the payment provider.</p>

    <div class="warning-card">
      <div class="warning-title">What will happen</div>
      <ul class="warning-list">
        <li>Your login access will stop immediately.</li>
        <li>Saved looks and tracing guides will be removed.</li>
        <li>Active membership will be cancelled at the processor.</li>
        <li>Face scan data remains on device only.</li>
        <li>This cannot be undone.</li>
      </ul>
    </div>

    <div class="confirm-block">
      <label class="confirm-label" for="confirm-delete">Type <strong>DELETE</strong> to confirm</label>
      <input id="confirm-delete" class="confirm-input" type="text" autocomplete="off" placeholder="DELETE" />
      <div id="confirm-delete-error" class="form-error"></div>

      <button id="delete-account-button" class="btn btn-danger">Delete my account</button>
      <button class="btn btn-secondary" onclick="window.location.href='my-account.php'">Never mind, keep my account</button>
      <p class="status-note">Note: The backend should handle deletion via a DELETE request to <code>/auth/account</code> and send an account deletion confirmation email.</p>
    </div>
  </div>

  <script>
    const API_BASE = '<?php echo $API_URL; ?>';
    const deleteButton = document.getElementById('delete-account-button');
    const confirmInput = document.getElementById('confirm-delete');
    const errorEl = document.getElementById('confirm-delete-error');

    deleteButton.addEventListener('click', async () => {
      errorEl.textContent = '';
      const value = confirmInput.value.trim();
      if (value !== 'DELETE') {
        errorEl.textContent = 'Type DELETE exactly to confirm account deletion.';
        return;
      }

      deleteButton.disabled = true;
      deleteButton.textContent = 'Deleting…';

      const token = localStorage.getItem('archAccessToken');
      if (!token) {
        window.location.href = 'login.php';
        return;
      }

      try {
        const response = await fetch(`${API_BASE}/auth/account`, {
          method: 'DELETE',
          headers: {
            accept: 'application/json',
            Authorization: `Bearer ${token}`
          }
        });

        if (!response.ok) {
          const data = await response.json().catch(() => ({}));
          errorEl.textContent = data.detail || data.message || 'Unable to delete account right now. Please try again later.';
          deleteButton.disabled = false;
          deleteButton.textContent = 'Delete my account';
          return;
        }

        localStorage.removeItem('archAccessToken');
        localStorage.removeItem('archUserEmail');
        localStorage.removeItem('archUserName');
        window.location.href = 'account-deleted.php';
      } catch (err) {
        console.error(err);
        errorEl.textContent = 'Network error. Please try again later.';
        deleteButton.disabled = false;
        deleteButton.textContent = 'Delete my account';
      }
    });
  </script>
</body>
</html>
