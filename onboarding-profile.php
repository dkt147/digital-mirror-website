<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Onboarding Profile — Royals Arch Brow</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
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
            --radius-pill: 50px;
            --transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }
        html { font-size: 16px; scroll-behavior: smooth; }
        body {
            background: var(--black);
            color: var(--white);
            font-family: var(--font-body);
            font-weight: 300;
            line-height: 1.6;
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

        .navbar-left { display: flex; align-items: center; gap: 1rem; }
        .nav-avatar {
            width: 42px; height: 42px; border-radius: 50%; overflow: hidden;
            border: 1.5px solid var(--gold-dark); flex-shrink: 0;
        }
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
            font-size: 0.6rem; letter-spacing: 0.25em; text-transform: uppercase;
            color: var(--gold); font-weight: 500; margin-bottom: 0.2rem;
        }
        .page-title {
            font-family: var(--font-display);
            font-style: italic;
            font-size: 2rem;
            font-weight: 400;
            color: var(--white);
            line-height: 1.05;
        }

        /* ====== ONBOARDING CARD ====== */
        .onboard-card {
            background: #161610;
            border: 1px solid var(--gold);
            border-radius: var(--radius);
            padding: 1.5rem 1.25rem;
        }

        .step-indicator {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 0.75rem;
        }

        .step-text {
            font-size: 0.75rem;
            letter-spacing: 0.08em;
            color: var(--gold);
            text-transform: uppercase;
            font-weight: 400;
        }

        .step-bar {
            flex: 1;
            height: 2px;
            background: var(--border);
            border-radius: 2px;
            position: relative;
        }

        .step-bar-fill {
            width: 50%;
            height: 100%;
            background: var(--gold);
            border-radius: 2px;
        }

        .heading {
            font-family: var(--font-display);
            font-style: italic;
            font-weight: 400;
            font-size: 2.8rem;
            color: var(--white);
            line-height: 1.05;
            margin-bottom: 0.5rem;
        }

        .sub-heading {
            font-size: 0.95rem;
            color: var(--white-dim);
            font-weight: 300;
            margin-bottom: 1.25rem;
            line-height: 1.6;
        }

        .sub-heading span {
            color: var(--gold);
            font-weight: 400;
        }

        .gold-divider {
            width: 80px;
            height: 1px;
            background: var(--gold);
            margin: 0.75rem 0 1.75rem;
        }

        .section-title {
            font-size: 0.65rem;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: var(--gold);
            margin-bottom: 0.75rem;
            font-weight: 400;
        }

        .skin-tones-wrapper {
            display: flex;
            gap: 0.75rem;
            flex-wrap: wrap;
            justify-content: center;
            margin-bottom: 0.5rem;
        }

        .skin-tone-option {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.25rem;
            cursor: pointer;
            transition: all var(--transition);
            background: transparent;
            border: none;
            padding: 4px;
        }

        .skin-tone-circle {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            border: 2px solid transparent;
            transition: all var(--transition);
        }

        .skin-tone-option.selected .skin-tone-circle {
            border-color: var(--gold);
            box-shadow: 0 0 0 3px rgba(201, 168, 76, 0.20);
            transform: scale(1.04);
        }

        .skin-tone-option:hover .skin-tone-circle {
            transform: scale(1.04);
        }

        .skin-tone-label {
            font-size: 0.55rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--white-faint);
            transition: color var(--transition);
        }

        .skin-tone-option.selected .skin-tone-label {
            color: var(--gold);
        }

        .skin-selected-label {
            text-align: center;
            font-size: 0.75rem;
            color: var(--gold);
            min-height: 1.6em;
            margin-bottom: 1.75rem;
            font-weight: 300;
        }

        .brow-goals-row {
            display: flex;
            justify-content: center;
            gap: 0.75rem;
            flex-wrap: wrap;
            margin-bottom: 0.5rem;
        }

        .brow-goal-btn {
            flex: 1;
            min-width: 100px;
            padding: 0.75rem 1rem;
            border-radius: var(--radius-pill);
            border: 1px solid var(--border);
            background: transparent;
            color: var(--white-dim);
            font-size: 0.7rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            transition: all var(--transition);
            cursor: pointer;
            font-weight: 400;
            font-family: var(--font-body);
        }

        .brow-goal-btn:hover {
            border-color: var(--border-hover);
        }

        .brow-goal-btn.selected {
            border-color: var(--gold);
            background: var(--dark-input);
            color: var(--gold);
            font-weight: 500;
        }

        .brow-note {
            text-align: center;
            font-size: 0.7rem;
            color: var(--gold);
            margin-top: 0.5rem;
            font-weight: 300;
        }

        .actions {
            display: grid;
            gap: 0.75rem;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            padding: 0.85rem 1.2rem;
            border-radius: 999px;
            font-size: 0.75rem;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            font-weight: 600;
            text-decoration: none;
            transition: all var(--transition);
            cursor: pointer;
            border: none;
            font-family: var(--font-body);
        }

        .btn-primary {
            background: transparent;
            border: 1px solid var(--border);
            color: var(--white);
        }

        .btn-primary:hover {
            border-color: var(--gold);
            color: var(--gold);
        }

        .skip-link {
            display: block;
            text-align: center;
            margin-top: 1rem;
            font-size: 0.75rem;
            color: var(--white-dim);
            text-decoration: none;
            cursor: pointer;
            transition: color var(--transition);
            font-weight: 300;
        }

        .skip-link:hover {
            color: var(--gold);
        }

        /* ====== ANIMATIONS ====== */
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(16px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fade-1 { animation: fadeUp 0.55s ease 0.05s both; }
        .fade-2 { animation: fadeUp 0.55s ease 0.15s both; }
        .fade-3 { animation: fadeUp 0.55s ease 0.25s both; }
        .fade-4 { animation: fadeUp 0.55s ease 0.35s both; }
        .fade-5 { animation: fadeUp 0.55s ease 0.45s both; }

        /* ====== RESPONSIVE ====== */
        @media (max-width: 900px) {
            .main { padding: 0 1.25rem 1.5rem; }
            .navbar { padding: 0.875rem 1.25rem; }
            .navbar-nav { display: none; }
            .page-title { font-size: 1.6rem; }
            .onboard-card { padding: 1.25rem 1rem; }
            .heading { font-size: 2.2rem; }
            .skin-tone-circle { width: 38px; height: 38px; }
            .brow-goal-btn { min-width: 80px; padding: 0.6rem 0.8rem; font-size: 0.6rem; }
            .back-btn { width: 38px; height: 38px; }
            .page-logo { width: 38px; height: 38px; }
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
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="19" y1="12" x2="5" y2="12"></line>
                    <polyline points="12 19 5 12 12 5"></polyline>
                </svg>
            </a>
            <div class="page-title-center">Onboarding</div>
        </div>

        <!-- CONTENT HEADER -->
        <div class="fade-2">
            <div class="page-label">Profile Setup</div>
            <div class="page-title">A few things about you.</div>
        </div>

        <!-- ONBOARDING CARD -->
        <div class="onboard-card fade-3">
            <div class="step-indicator">
                <span class="step-text">Step 1 of 2</span>
                <div class="step-bar">
                    <div class="step-bar-fill"></div>
                </div>
            </div>

            <p class="sub-heading">
                This shapes <span>everything that follows.</span><br />
                Hello, <span id="user-name">Mary Johnson</span>.
            </p>

            <div class="gold-divider"></div>

            <div>
                <p class="section-title">Skin Tone</p>
                <div class="skin-tones-wrapper" id="skin-tone-options"></div>
                <div class="skin-selected-label" id="skin-tone-label">Select your tone</div>
            </div>

            <div>
                <p class="section-title">Brow Goals</p>
                <div class="brow-goals-row">
                    <button class="brow-goal-btn" data-goal="shape" onclick="selectBrowGoal('shape')">Shape</button>
                    <button class="brow-goal-btn selected" data-goal="colour" onclick="selectBrowGoal('colour')">Colour</button>
                    <button class="brow-goal-btn" data-goal="both" onclick="selectBrowGoal('both')">Both</button>
                </div>
                <p class="brow-note">Your profile can be updated at any time.</p>
            </div>

            <div class="actions">
                <button class="btn btn-primary" onclick="nextOnboardingStep()">Next</button>
                <a class="skip-link" onclick="goBack('onboarding-style.php')">I'll add this later</a>
            </div>
        </div>

    </main>

    <script>
        const state = { onboarding: { skinTone: null, browGoal: null } };

        function goBack(target) { window.location.href = target; }

        function selectSkinTone(id) {
            state.onboarding.skinTone = id;
            localStorage.setItem('archSkinTone', id);
            document.querySelectorAll('.skin-tone-option').forEach(el => {
                el.classList.toggle('selected', el.dataset.id === id);
            });
            const label = document.getElementById('skin-tone-label');
            const toneMap = { fair: 'Fair', light: 'Light', medium: 'Medium', 'medium-warm': 'Medium Warm', deep: 'Deep', rich: 'Rich' };
            if (label) label.textContent = toneMap[id] || 'Select your tone';
        }

        function selectBrowGoal(goal) {
            state.onboarding.browGoal = goal;
            localStorage.setItem('archBrowGoal', goal);
            document.querySelectorAll('.brow-goal-btn').forEach(btn => {
                btn.classList.toggle('selected', btn.dataset.goal === goal);
            });
        }

        function nextOnboardingStep() {
            const tone = state.onboarding.skinTone || localStorage.getItem('archSkinTone');
            if (!tone) {
                alert('Please select your skin tone first.');
                return;
            }
            window.location.href = 'tone-recommendation.php';
        }

        document.addEventListener('DOMContentLoaded', function() {
            const container = document.getElementById('skin-tone-options');
            const tones = [
                { id: 'fair', label: 'Fair', color: '#f5deb3' },
                { id: 'light', label: 'Light', color: '#d4a574' },
                { id: 'medium', label: 'Medium', color: '#c07845' },
                { id: 'medium-warm', label: 'Medium Warm', color: '#a0622a' },
                { id: 'deep', label: 'Deep', color: '#6b3a1f' },
                { id: 'rich', label: 'Rich', color: '#3d1c0a' }
            ];
            container.innerHTML = tones.map(t => `
                <button type="button" class="skin-tone-option" data-id="${t.id}" onclick="selectSkinTone('${t.id}')">
                    <div class="skin-tone-circle" style="background:${t.color}"></div>
                    <span class="skin-tone-label">${t.label}</span>
                </button>
            `).join('');

            const savedTone = localStorage.getItem('archSkinTone');
            if (savedTone) selectSkinTone(savedTone);

            const savedGoal = localStorage.getItem('archBrowGoal');
            if (savedGoal) selectBrowGoal(savedGoal);

            const userName = localStorage.getItem('archUserName') || 'Mary Johnson';
            const nameEl = document.getElementById('user-name');
            if (nameEl) nameEl.textContent = userName;
        });
    </script>

</body>
</html>