<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Your Brow Profile — Royals Arch Brow</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    /* … existing CSS unchanged (only added small style for editable inputs) … */
    :root {
      --black: #0a0a08;
      --dark: #111111;
      --dark-card: #141411;
      --gold: #c9a84c;
      --gold-light: #d4b96a;
      --gold-dark: #8a6f2e;
      --white: #f5f0e8;
      --white-dim: rgba(245, 240, 232, 0.6);
      --border: rgba(201, 168, 76, 0.18);
      --border-subtle: rgba(255, 255, 255, 0.08);
      --font-display: 'Cormorant Garamond', serif;
      --font-body: 'Montserrat', sans-serif;
      --radius: 18px;
      --transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }
    html { font-size: 16px; scroll-behavior: smooth; }
    
    body {
      background: var(--black);
      color: var(--white);
      font-family: var(--font-body);
      font-weight: 300;
      min-height: 100vh;
      overflow-x: hidden;
    }

    a { color: inherit; text-decoration: none; }
    
    button {
      cursor: pointer;
      border: none;
      outline: none;
      font-family: var(--font-body);
      background: none;
    }

    /* Navbar (unchanged) */
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

    .navbar-left { display: flex; align-items: center; gap: 1rem; }
    .nav-avatar { width: 42px; height: 42px; border-radius: 50%; overflow: hidden; border: 1.5px solid var(--gold-dark); flex-shrink: 0; }
    .nav-avatar img { width: 100%; height: 100%; object-fit: cover; display: block; }

    .navbar-nav {
      display: flex; align-items: center; gap: 2.5rem; list-style: none;
      position: absolute; left: 50%; transform: translateX(-50%);
    }
    .navbar-nav a {
      font-size: 0.65rem; letter-spacing: 0.18em; text-transform: uppercase;
      color: var(--white-dim); transition: color var(--transition); font-weight: 400;
    }
    .navbar-nav a:hover, .navbar-nav a.active { color: var(--gold); }

    .btn-book {
      padding: 0.55rem 1.5rem; font-size: 0.65rem; letter-spacing: 0.12em;
      text-transform: uppercase; border-radius: 50px; border: 1px solid var(--border);
      color: var(--white-dim); transition: all var(--transition);
    }
    .btn-book:hover { border-color: var(--gold); color: var(--gold); }

    .nav-emblem {
      width: 44px; height: 44px; border-radius: 50%;
      background: radial-gradient(circle at 35% 35%, #2a2010, #1a1408);
      border: 1.5px solid var(--gold-dark); display: flex; align-items: center;
      justify-content: center; flex-shrink: 0; overflow: hidden;
    }
    .nav-emblem img { width: 26px; height: 26px; object-fit: contain; }

    .nav-gold-rule {
      height: 1px; background: linear-gradient(to right, transparent 0%, var(--gold-dark) 30%, var(--gold-dark) 70%, transparent 100%);
      opacity: 0.5;
    }

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
      transition: all var(--transition);
      background: transparent;
      flex-shrink: 0;
    }
    .back-btn:hover {
      background: rgba(201,168,76,0.12);
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

    .main {
      max-width: 100%;
      margin: 0 auto;
      padding: 0 3rem 2.5rem;
      display: flex;
      flex-direction: column;
      gap: 1.75rem;
    }

    .profile-card {
      background: #141411;
      border: 1px solid var(--gold);
      border-radius: var(--radius);
      padding: 1.75rem 1.5rem;
    }

    .brow-graphic {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 60px;
      margin-bottom: 1.5rem;
    }
    .brow-graphic svg {
      width: 80%;
      max-width: 280px;
      height: auto;
      fill: none;
      stroke: var(--gold);
      stroke-width: 4;
      stroke-linecap: round;
    }

    .info-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0.9rem 0;
      border-bottom: 1px solid var(--border-subtle);
    }
    .info-row:last-child { border-bottom: none; }

    .info-key {
      color: var(--white-dim);
      font-size: 0.9rem;
      font-weight: 300;
    }

    .info-value {
      color: var(--gold);
      font-family: var(--font-display);
      font-size: 0.95rem;
      font-weight: 500;
    }

    /* Editable input style */
    .info-value input {
      background: transparent;
      border: none;
      border-bottom: 1px solid var(--gold);
      color: var(--gold);
      font-family: var(--font-display);
      font-size: 0.95rem;
      font-weight: 500;
      width: 140px;
      text-align: right;
      padding: 0.2rem 0;
      outline: none;
    }

    .actions {
      display: flex;
      gap: 1rem;
      margin-top: 1.5rem;
    }

    .btn-primary {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 0.9rem 0;
      border-radius: 999px;
      border: none;
      background: var(--gold);
      color: var(--black);
      font-size: 0.75rem;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      transition: all var(--transition);
    }
    .btn-primary:hover {
      background: var(--gold-light);
      transform: translateY(-1px);
    }

    .btn-secondary {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 0.9rem 0;
      border-radius: 999px;
      border: 1px solid var(--border);
      background: transparent;
      color: var(--white);
      font-size: 0.75rem;
      font-weight: 600;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      transition: all var(--transition);
    }
    .btn-secondary:hover {
      border-color: var(--gold);
      color: var(--gold);
    }

    @media (max-width: 900px) {
      .main { padding: 0 1.25rem 1.5rem; }
      .navbar { padding: 0.875rem 1.25rem; }
      .navbar-nav { display: none; }
      .profile-card { padding: 1.25rem; }
      .back-btn { width: 38px; height: 38px; }
    }

    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(16px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .fade-1 { animation: fadeUp 0.55s ease 0.05s both; }
    .fade-2 { animation: fadeUp 0.55s ease 0.15s both; }
    .fade-3 { animation: fadeUp 0.55s ease 0.25s both; }
    .fade-4 { animation: fadeUp 0.55s ease 0.35s both; }
    .fade-5 { animation: fadeUp 0.55s ease 0.45s both; }
  </style>
</head>
<body>

  <?php include 'includes/navbar.php'; ?>
  <div class="nav-gold-rule"></div>

  <main class="main">

    <div class="page-topbar fade-1">
      <a href="javascript:history.back()" class="back-btn" aria-label="Go back">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="19" y1="12" x2="5" y2="12"></line>
          <polyline points="12 19 5 12 12 5"></polyline>
        </svg>
      </a>
      <div class="page-title-center">Your Brow Profile</div>
    </div>

    <div class="profile-card fade-2">
      <!-- Brow arches SVG -->
      <div class="brow-graphic">
        <svg viewBox="0 0 300 60" xmlns="http://www.w3.org/2000/svg">
          <path d="M 20 40 Q 60 10, 110 30" />
          <path d="M 190 30 Q 240 10, 280 40" />
        </svg>
      </div>

      <!-- Dynamic data rows -->
      <div class="info-row">
        <span class="info-key">Face shape</span>
        <span class="info-value" id="face_shape_display">—</span>
      </div>
      <div class="info-row">
        <span class="info-key">Preferred style</span>
        <span class="info-value" id="preferred_style_display">—</span>
      </div>
      <div class="info-row">
        <span class="info-key">Preferred colour</span>
        <span class="info-value" id="preferred_colour_display">—</span>
      </div>
      <div class="info-row">
        <span class="info-key">Last scan</span>
        <span class="info-value" id="last_scan_display">—</span>
      </div>

      <div class="actions fade-3">
        <button class="btn-primary" id="update-btn">Update</button>
        <button class="btn-secondary" id="scan-btn">Scan Again</button>
      </div>
    </div>

    <!-- Hidden file input for camera -->
    <input type="file" id="camera-input" accept="image/*" capture="environment" style="display:none" />

  </main>

  <script>
    const API_BASE = '<?php echo $API_URL; ?>';
    const token = localStorage.getItem('archAccessToken');
    let browData = null;
    let editMode = false;

    // ---------- Helper ----------
    function escapeHtml(text) {
      const map = { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#039;' };
      return text.replace(/[&<>"']/g, m => map[m]);
    }

    // ---------- Load Brow Profile ----------
    async function loadBrowProfile() {
      if (!token) {
        alert('Please log in first.');
        window.location.href = 'login.php';
        return;
      }
      try {
        const res = await fetch(`${API_BASE}/auth/brow-profile`, {
          headers: {
            'accept': 'application/json',
            'Authorization': `Bearer ${token}`
          }
        });
        if (!res.ok) {
          const err = await res.json().catch(() => ({}));
          throw new Error(err.detail || 'Failed to load brow profile');
        }
        const data = await res.json();
        browData = data;
        updateDisplay(data);
      } catch (err) {
        console.error(err);
        alert('Could not load brow profile. Please login again.');
        window.location.href = 'login.php';
      }
    }

    function updateDisplay(data) {
      document.getElementById('face_shape_display').textContent = data.face_shape || '—';
      document.getElementById('preferred_style_display').textContent = data.preferred_style || '—';
      document.getElementById('preferred_colour_display').textContent = data.preferred_colour || '—';
      document.getElementById('last_scan_display').textContent = data.last_scan || '—';
    }

    // ---------- Inline Edit (Update button) ----------
    const updateBtn = document.getElementById('update-btn');
    updateBtn.addEventListener('click', function() {
      if (!browData) return;
      if (!editMode) {
        // Enter edit mode
        const fields = ['face_shape', 'preferred_style', 'preferred_colour'];
        fields.forEach(field => {
          const displayEl = document.getElementById(`${field}_display`);
          const currentVal = browData[field] || '';
          displayEl.innerHTML = `<input type="text" id="edit_${field}" value="${escapeHtml(currentVal)}" />`;
        });
        updateBtn.textContent = 'Save';
        editMode = true;
      } else {
        // Save changes
        saveProfile();
      }
    });

    async function saveProfile() {
      const face_shape = document.getElementById('edit_face_shape')?.value || browData.face_shape || '';
      const preferred_style = document.getElementById('edit_preferred_style')?.value || browData.preferred_style || '';
      const preferred_colour = document.getElementById('edit_preferred_colour')?.value || browData.preferred_colour || '';
      const last_scan = browData.last_scan || new Date().toISOString().slice(0, 10);

      updateBtn.disabled = true;
      updateBtn.textContent = 'Saving...';

      try {
        const res = await fetch(`${API_BASE}/auth/brow-profile`, {
          method: 'PUT',
          headers: {
            'accept': 'application/json',
            'Content-Type': 'application/json',
            'Authorization': `Bearer ${token}`
          },
          body: JSON.stringify({
            face_shape,
            preferred_style,
            preferred_colour,
            last_scan
          })
        });
        if (!res.ok) {
          const errData = await res.json().catch(() => ({}));
          throw new Error(errData.detail || 'Update failed');
        }
        const updated = await res.json();
        browData = updated;
        updateDisplay(updated);
        editMode = false;
        updateBtn.textContent = 'Update';
        alert('Profile updated!');
      } catch (err) {
        console.error(err);
        alert(err.message || 'Could not save profile.');
      } finally {
        updateBtn.disabled = false;
        updateBtn.textContent = editMode ? 'Save' : 'Update';
      }
    }

    // ---------- Scan Again (Camera) ----------
    const scanBtn = document.getElementById('scan-btn');
    const cameraInput = document.getElementById('camera-input');

    scanBtn.addEventListener('click', function() {
      if (!token) {
        alert('Please log in first.');
        return;
      }
      cameraInput.click();
    });

    cameraInput.addEventListener('change', async function() {
      const file = this.files[0];
      if (!file) return;

      // In a real scenario, the image would be sent to an AI endpoint.
      // For now, we ask the user for the detected face shape.
      const newShape = prompt('Enter the detected face shape (e.g., Oval, Round, Heart):', browData?.face_shape || 'Oval');
      if (!newShape) {
        cameraInput.value = '';
        return;
      }

      const newLastScan = new Date().toISOString().slice(0, 10);

      try {
        const res = await fetch(`${API_BASE}/auth/brow-profile`, {
          method: 'PUT',
          headers: {
            'accept': 'application/json',
            'Content-Type': 'application/json',
            'Authorization': `Bearer ${token}`
          },
          body: JSON.stringify({
            face_shape: newShape,
            last_scan: newLastScan,
            preferred_style: browData?.preferred_style || '',
            preferred_colour: browData?.preferred_colour || ''
          })
        });
        if (!res.ok) {
          const errData = await res.json().catch(() => ({}));
          throw new Error(errData.detail || 'Scan update failed');
        }
        const updated = await res.json();
        browData = updated;
        updateDisplay(updated);
        alert('Scan complete! Profile updated.');
      } catch (err) {
        console.error(err);
        alert(err.message || 'Could not update after scan.');
      } finally {
        cameraInput.value = '';
      }
    });

    // ---------- Init ----------
    loadBrowProfile();
  </script>

</body>
</html>