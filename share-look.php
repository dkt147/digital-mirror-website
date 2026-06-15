<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Share this look — Royals Arch Brow</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    :root {
      --black: #0a0a08;
      --dark: #111111;
      --dark-card: #1a1a0f;
      --dark-input: #1c1c15;
      --gold: #c9a84c;
      --gold-light: #d4b96a;
      --gold-dark: #8a6f2e;
      --gold-muted: rgba(201, 168, 76, 0.12);
      --white: #f5f0e8;
      --white-dim: rgba(245, 240, 232, 0.55);
      --white-faint: rgba(245, 240, 232, 0.15);
      --border: rgba(201, 168, 76, 0.18);
      --border-hover: rgba(201, 168, 76, 0.45);
      --font-display: 'Cormorant Garamond', serif;
      --font-body: 'Montserrat', sans-serif;
      --radius: 14px;
      --radius-sm: 10px;
      --transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html {
      font-size: 16px;
      scroll-behavior: smooth;
    }

    body {
      background: var(--black);
      color: var(--white);
      font-family: var(--font-body);
      font-weight: 300;
      line-height: 1.6;
      min-height: 100vh;
      overflow-x: hidden;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    button {
      cursor: pointer;
      border: none;
      outline: none;
      font-family: var(--font-body);
      background: none;
    }

    /* ====== NAVBAR ====== */
    .navbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 1rem 2.5rem;
      border-bottom: 1px solid var(--border);
      background: rgba(10, 10, 8, 0.97);
      backdrop-filter: blur(20px);
      position: sticky;
      top: 0;
      z-index: 100;
    }

    .navbar-left {
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .nav-avatar {
      width: 42px;
      height: 42px;
      border-radius: 50%;
      overflow: hidden;
      border: 1.5px solid var(--gold-dark);
      flex-shrink: 0;
    }

    .nav-avatar img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    .navbar-nav {
      display: flex;
      align-items: center;
      gap: 2.5rem;
      list-style: none;
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
    }

    .navbar-nav a {
      font-size: 0.65rem;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--white-dim);
      transition: color var(--transition);
      font-weight: 400;
    }

    .navbar-nav a:hover,
    .navbar-nav a.active {
      color: var(--gold);
    }

    .btn-book {
      padding: 0.55rem 1.5rem;
      font-size: 0.65rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      border-radius: 50px;
      border: 1px solid var(--border);
      color: var(--white-dim);
      transition: all var(--transition);
    }

    .btn-book:hover {
      border-color: var(--gold);
      color: var(--gold);
    }

    .nav-emblem {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      background: radial-gradient(circle at 35% 35%, #2a2010, #1a1408);
      border: 1.5px solid var(--gold-dark);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      overflow: hidden;
    }

    .nav-emblem img {
      width: 26px;
      height: 26px;
      object-fit: contain;
    }

    .nav-gold-rule {
      height: 1px;
      background: linear-gradient(to right, transparent 0%, var(--gold-dark) 30%, var(--gold-dark) 70%, transparent 100%);
      opacity: 0.5;
    }

    /* ====== PAGE TOPBAR (Back Arrow + Title + Logo) ====== */
    .page-topbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0.5rem 0;
      margin-bottom: 1.5rem;
    }

    .back-btn {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 44px;
      height: 44px;
      border-radius: 50%;
      border: 1px solid var(--gold);
      color: var(--gold);
      text-decoration: none;
      transition: all var(--transition);
      background: transparent;
      flex-shrink: 0;
    }

    .back-btn:hover {
      background: rgba(201, 168, 76, 0.12);
      transform: scale(1.05);
    }

    .page-title-center {
      flex: 1;
      text-align: center;
      font-family: var(--font-display);
      font-size: 0.9rem;
      letter-spacing: 0.28em;
      text-transform: uppercase;
      color: var(--gold);
      padding: 0 1rem;
    }

    .page-logo {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      border: 1px solid var(--gold);
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      flex-shrink: 0;
    }

    .page-logo img {
      width: 24px;
      height: 24px;
      object-fit: contain;
    }

    /* ====== LAYOUT ====== */
    .main {
      max-width: 100%;
      margin: 0 auto;
      padding: 0 3rem 2.5rem;
      display: flex;
      flex-direction: column;
      gap: 1.75rem;
    }

    /* ====== HEADER ====== */
    .page-label {
      font-size: 0.6rem;
      letter-spacing: 0.25em;
      text-transform: uppercase;
      color: var(--gold);
      font-weight: 500;
      margin-bottom: 0.2rem;
    }

    .page-title {
      font-family: var(--font-display);
      font-style: italic;
      font-size: 2.2rem;
      font-weight: 400;
      color: var(--white);
      line-height: 1.05;
    }

    /* ========================================================== */
    /* ====== UPDATED SHARE CARD (Matches Figma) ====== */
    /* ========================================================== */
    .share-card {
      background: transparent;
      border: none;
      padding: 0;
      margin: 0 auto;
      max-width: 680px;
    }

    .preview-card {
      border-radius: var(--radius);
      background: #161610;
      border: 1px solid var(--border);
      min-height: 150px;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
      overflow: hidden;
      margin-bottom: 1.5rem;
      padding: 30px 16px;
    }

    .preview-card::before {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(circle at center, rgba(201, 168, 76, 0.03), transparent 70%);
      pointer-events: none;
    }

    .preview-content {
      position: relative;
      z-index: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 8px;
      width: 100%;
    }

    .preview-content .label {
      color: var(--gold);
      font-size: 0.9rem;
      font-weight: 400;
      letter-spacing: 0.02em;
      font-family: var(--font-body);
      line-height: 1.4;
      text-align: center;
    }

    .preview-graphic {
      display: flex;
      justify-content: center;
      gap: 4px;
      margin: 4px 0 0 0;
    }

    .arc {
      width: 72px;
      height: 20px;
      border: 1.5px solid var(--gold);
      border-bottom-color: transparent;
      border-left-color: transparent;
      border-right-color: transparent;
      border-radius: 999px 999px 0 0;
      opacity: 0.8;
    }

    .arc:nth-child(2) {
      transform: translateY(10px) scaleX(0.9);
      opacity: 0.3;
    }

    /* ====== BUTTONS ====== */
    .actions {
      display: flex;
      flex-direction: column;
      gap: 0.75rem;
      width: 100%;
    }

    .btn {
      display: flex;
      align-items: center;
      justify-content: flex-start;
      width: 100%;
      padding: 1rem 1.5rem;
      border-radius: 10px;
      border: 1px solid var(--border);
      background: rgba(255, 255, 255, 0.02);
      color: var(--white);
      text-decoration: none;
      transition: all var(--transition);
      cursor: pointer;
      font-family: var(--font-body);
      text-align: left;
    }

    .btn:hover {
      border-color: var(--border-hover);
      transform: translateY(-1px);
    }

    /* Specific style for "Send to your artist" (Gold button) */
    .btn.gold {
      background: rgba(201, 168, 76, 0.06);
      border-color: var(--gold);
      color: var(--gold);
      box-shadow: 0 0 20px rgba(201, 168, 76, 0.05);
    }

    .btn .text {
      display: flex;
      flex-direction: column;
      gap: 3px;
      text-align: left;
    }

    .btn .text .title {
      font-family: var(--font-body);
      font-size: 1.1rem;
      font-weight: 400;
    }

    .btn .text .subtitle {
      font-size: 0.85rem;
      color: var(--white-dim);
      font-weight: 300;
    }

    .notice {
      font-size: 0.85rem;
      color: var(--white-dim);
      text-align: center;
      margin-top: 16px;
      line-height: 1.6;
      font-weight: 300;
    }

    .footer-link {
      text-align: center;
      color: var(--gold);
      font-size: 1rem;
      padding: 18px 0 4px;
      cursor: pointer;
      transition: color var(--transition);
      font-weight: 400;
      background: transparent;
      font-family: var(--font-body);
      display: block;      
      margin: 0 auto;       
      width: fit-content;   
    }

    .footer-link:hover {
      color: var(--gold-light);
      text-decoration: underline;
    }

    /* ========================================================== */

    /* ====== MODAL (for email input) ====== */
    .modal-overlay {
      display: none;
      position: fixed;
      inset: 0;
      background: rgba(0, 0, 0, 0.7);
      backdrop-filter: blur(6px);
      z-index: 200;
      align-items: center;
      justify-content: center;
    }

    .modal-overlay.active {
      display: flex;
    }

    .modal-box {
      background: var(--dark);
      border: 1px solid var(--gold);
      border-radius: var(--radius);
      padding: 2rem;
      width: 90%;
      max-width: 360px;
      text-align: center;
    }

    .modal-box h3 {
      font-family: var(--font-display);
      color: var(--gold);
      margin-bottom: 1rem;
    }

    .modal-box input {
      width: 100%;
      padding: 0.75rem 1rem;
      border-radius: var(--radius-sm);
      border: 1px solid var(--border);
      background: var(--dark-card);
      color: var(--white);
      margin-bottom: 1.5rem;
      font-family: var(--font-body);
      outline: none;
    }

    .modal-box input:focus {
      border-color: var(--gold);
    }

    .modal-actions {
      display: flex;
      gap: 0.75rem;
      justify-content: center;
    }

    .modal-btn {
      padding: 0.6rem 1.5rem;
      border-radius: 50px;
      font-size: 0.75rem;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      font-weight: 500;
      transition: all var(--transition);
    }

    .modal-btn.cancel {
      border: 1px solid var(--white-dim);
      color: var(--white-dim);
      background: transparent;
    }

    .modal-btn.confirm {
      background: var(--gold);
      color: var(--black);
      border: none;
    }

    .modal-btn:hover {
      opacity: 0.85;
    }

    /* ====== ANIMATIONS ====== */
    @keyframes fadeUp {
      from {
        opacity: 0;
        transform: translateY(16px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .fade-1 {
      animation: fadeUp 0.55s ease 0.05s both;
    }

    .fade-2 {
      animation: fadeUp 0.55s ease 0.15s both;
    }

    .fade-3 {
      animation: fadeUp 0.55s ease 0.25s both;
    }

    .fade-4 {
      animation: fadeUp 0.55s ease 0.35s both;
    }

    .fade-5 {
      animation: fadeUp 0.55s ease 0.45s both;
    }

    /* ====== RESPONSIVE ====== */
    @media (max-width: 900px) {
      .main {
        padding: 0 1.25rem 1.5rem;
      }

      .navbar {
        padding: 0.875rem 1.25rem;
      }

      .navbar-nav {
        display: none;
      }

      .page-title {
        font-size: 1.8rem;
      }

      .share-card {
        padding: 0;
      }

      .preview-card {
        min-height: 120px;
        padding: 24px 14px;
      }

      .preview-content .label {
        font-size: 0.8rem;
      }

      .arc {
        width: 56px;
      }

      .back-btn {
        width: 38px;
        height: 38px;
      }

      .page-logo {
        width: 38px;
        height: 38px;
      }

      .btn .text .title {
        font-size: 1rem;
      }

      .btn .text .subtitle {
        font-size: 0.75rem;
      }
    }
  </style>
</head>

<body>

  <!-- NAVBAR -->
  <?php include 'includes/navbar.php'; ?>

  <!-- Gold rule -->
  <div class="nav-gold-rule"></div>

  <!-- MAIN CONTENT -->
  <main class="main">

    <!-- PAGE TOPBAR (Back Arrow + Title + Logo) -->
    <div class="page-topbar fade-1">
      <a href="javascript:history.back()" class="back-btn" aria-label="Go back">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
          stroke-linecap="round" stroke-linejoin="round">
          <line x1="19" y1="12" x2="5" y2="12"></line>
          <polyline points="12 19 5 12 12 5"></polyline>
        </svg>
      </a>
      <div class="page-title-center">Share this look</div>
    </div>

    <!-- CONTENT HEADER -->
    <div class="fade-2">
      <div class="page-label">Share</div>
      <div class="page-title">Share this look.</div>
    </div>

    <!-- ================================================================= -->
    <!-- ====== UPDATED SHARE CARD SECTION (Matches Figma UI) ====== -->
    <!-- ================================================================= -->
    <div class="share-card fade-3">
      <div class="preview-card">
        <div class="preview-content">
          <div class="label" id="preview-look-info">My Everyday Arch · Arch · Dark Brown</div>
          <div class="preview-graphic">
            <span class="arc"></span>
            <span class="arc"></span>
          </div>
        </div>
      </div>

      <div class="actions">
        <button class="btn gold" id="send-to-artist-btn">
          <div class="text">
            <div class="title">Send to your artist</div>
            <div class="subtitle">Your artist receives the brief and this look</div>
          </div>
        </button>

        <button class="btn" id="share-as-link-btn">
          <div class="text">
            <div class="title">Share as link</div>
            <div class="subtitle">Copy a shareable link to this look</div>
          </div>
        </button>

        <button class="btn" id="save-as-image-btn">
          <div class="text">
            <div class="title">Save as image</div>
            <div class="subtitle">Saved to your camera roll</div>
          </div>
        </button>
      </div>

      <p class="notice">Images shared never include personal profile data.</p>
      <a class="footer-link" href="my-looks.php">Back to look</a>
    </div>
    <!-- ================================================================= -->

  </main>

  <!-- MODAL for artist email input -->
  <div class="modal-overlay" id="email-modal">
    <div class="modal-box">
      <h3>Enter artist's email</h3>
      <input type="email" id="artist-email-input" placeholder="artist@example.com" />
      <div class="modal-actions">
        <button class="modal-btn cancel" id="modal-cancel">Cancel</button>
        <button class="modal-btn confirm" id="modal-confirm">Send</button>
      </div>
    </div>
  </div>

  <script>
    // ---------- CONFIG & AUTH ----------
    const API_BASE = '<?php echo $API_URL; ?>';
    const token = localStorage.getItem('archAccessToken');
    if (!token) {
      window.location.href = 'login.php';
    }
    // Get look ID from URL (e.g., share-look.php?id=3)
    const urlParams = new URLSearchParams(window.location.search);
    const lookId = urlParams.get('id');
    if (!lookId) {
      document.getElementById('preview-look-info').textContent = 'No look selected.';
    }
    // ---------- MODAL HANDLING ----------
    const modal = document.getElementById('email-modal');
    const emailInput = document.getElementById('artist-email-input');
    const cancelBtn = document.getElementById('modal-cancel');
    const confirmBtn = document.getElementById('modal-confirm');

    function openEmailModal() {
      if (!lookId) {
        alert('Please select a look first.');
        return;
      }
      modal.classList.add('active');
      emailInput.value = '';
      emailInput.focus();
    }

    function closeEmailModal() {
      modal.classList.remove('active');
    }
    cancelBtn.addEventListener('click', closeEmailModal);
    modal.addEventListener('click', (e) => {
      if (e.target === modal) closeEmailModal();
    });
    // ---------- API CALLS ----------
    async function shareLook(channel, artistEmail = null) {
      if (!lookId) {
        alert('No look ID found in URL.');
        return;
      }
      const body = {
        channel: channel
      };
      if (artistEmail) body.artistEmail = artistEmail;
      try {
        const res = await fetch(`${API_BASE}/looks/${lookId}/share`, {
          method: 'POST',
          headers: {
            'accept': 'application/json',
            'Content-Type': 'application/json',
            'Authorization': `Bearer ${token}`
          },
          body: JSON.stringify(body)
        });
        if (!res.ok) {
          const err = await res.json().catch(() => ({}));
          throw new Error(err.detail || 'Share request failed');
        }
        const data = await res.json();
        return data; // Could contain share link, success message, etc.
      } catch (error) {
        console.error(error);
        throw error;
      }
    }
    // ---------- BUTTON ACTIONS ----------
    // 1. Send to artist (email channel)
    document.getElementById('send-to-artist-btn').addEventListener('click', openEmailModal);
    confirmBtn.addEventListener('click', async () => {
      const email = emailInput.value.trim();
      if (!email || !email.includes('@')) {
        alert('Please enter a valid email address.');
        return;
      }
      closeEmailModal();
      try {
        const result = await shareLook('email', email);
        alert('Look shared successfully with ' + email);
        // Optionally redirect or update UI
      } catch (err) {
        alert('Failed to share: ' + err.message);
      }
    });
    // 2. Share as link (link channel)
    document.getElementById('share-as-link-btn').addEventListener('click', async () => {
      try {
        const result = await shareLook('link');
        // API might return a share_url field
        const shareUrl = result ? .share_url || result ? .url || '';
        if (shareUrl) {
          // Copy to clipboard
          await navigator.clipboard.writeText(shareUrl);
          alert('Share link copied to clipboard!');
        } else if (result ? .detail) {
          alert(result.detail);
        } else {
          alert('Link generated but unable to copy. Check console.');
          console.log('Share result:', result);
        }
      } catch (err) {
        alert('Failed to create share link: ' + err.message);
      }
    });
    // 3. Save as image (placeholder)
    document.getElementById('save-as-image-btn').addEventListener('click', () => {
      alert('Save as image feature coming soon.');
    });
    // ---------- OPTIONAL: PREVIEW LOOK DETAILS ----------
    async function fetchLookDetails() {
      if (!lookId) return;
      try {
        const res = await fetch(`${API_BASE}/looks/${lookId}`, {
          headers: {
            'accept': 'application/json',
            'Authorization': `Bearer ${token}`
          }
        });
        if (res.ok) {
          const look = await res.json();
          const meta = [look.title, look.style, look.colour].filter(Boolean).join(' · ');
          document.getElementById('preview-look-info').textContent = meta || 'Untitled Look';
        }
      } catch (e) {
        console.log('Could not fetch look details for preview', e);
      }
    }
    fetchLookDetails();
  </script>

</body>

</html>