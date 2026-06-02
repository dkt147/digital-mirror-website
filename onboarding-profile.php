<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Onboarding Profile — Arch</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <style>
        /* ── RESET & BASE ── */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --gold: #c9a84c;
            --gold-light: #d4b96a;
            --gold-dark: #8a6f2e;
            --gold-muted: rgba(201, 168, 76, 0.10);
            --gold-glow: rgba(201, 168, 76, 0.20);
            --black: #0a0a0a;
            --btn-dark: #232323;
            --white: #f5f0e8;
            --white-dim: rgba(245, 240, 232, 0.6);
            --white-faint: rgba(245, 240, 232, 0.15);
            --border: rgba(201, 168, 76, 0.2);
            --border-hover: rgba(201, 168, 76, 0.4);
            --radius: 24px;
            --radius-pill: 50px;
            --transition: 0.25s ease;
            --font-display: 'Cormorant Garamond', serif;
            --font-body: 'Montserrat', sans-serif;
        }

        body {
            background: var(--black);
            color: var(--white);
            font-family: var(--font-body);
            font-weight: 300;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
            background-image: radial-gradient(ellipse at 50% 20%, rgba(201, 168, 76, 0.03) 0%, transparent 70%);
        }

        /* ── CARD ── */
        .onboard-card {
            width: 100%;
            max-width: 620px;
            background: rgba(255, 255, 255, 0.015);
            border: 1px solid var(--border);
            border-radius: 48px;
            padding: 40px 48px 40px;
            backdrop-filter: blur(4px);
            box-shadow: 0 24px 80px rgba(0, 0, 0, 0.8);
            position: relative;
        }

        /* ── TOP ROW: BACK + LOGO ── */
        .top-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1.5rem;
        }

        /* Back button */
        .back-btn-circle {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            border: 1px solid var(--gold);
            background: transparent;
            color: var(--gold);
            cursor: pointer;
            transition: all var(--transition);
            flex-shrink: 0;
        }

        .back-btn-circle:hover {
            background: var(--gold-muted);
            border-color: var(--gold-light);
            transform: scale(1.02);
        }

        .back-btn-circle svg {
            width: 22px;
            height: 22px;
            stroke: currentColor;
            stroke-width: 1.8;
            fill: none;
        }

        /* Logo — right side, uses logo.png */
        .logo-wrap {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .logo-wrap img {
            width: 48px;
            height: 48px;
            object-fit: contain;
            display: block;
        }

        /* ── STEP INDICATOR ── */
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

        /* ── HEADING ── */
        .heading {
            font-family: var(--font-display);
            font-style: italic;
            font-weight: 400;
            font-size: 2.8rem;
            color: var(--white);
            line-height: 1.05;
            margin-bottom: 0.5rem;
            letter-spacing: -0.01em;
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

        /* ── GOLD DIVIDER ── */
        .gold-divider {
            width: 80px;
            height: 1px;
            background: var(--gold);
            margin: 0.75rem 0 1.75rem;
        }

        /* ── SECTION TITLES ── */
        .section-title {
            font-size: 0.65rem;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: var(--gold);
            margin-bottom: 0.75rem;
            font-weight: 400;
        }

        /* ── SKIN TONE ── */
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
            flex: 0 0 auto;
        }

        .skin-tone-circle {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            border: 2px solid transparent;
            transition: all var(--transition);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.4);
        }

        .skin-tone-option.selected .skin-tone-circle {
            border-color: var(--gold);
            box-shadow: 0 0 0 3px rgba(201, 168, 76, 0.20), 0 2px 12px rgba(201, 168, 76, 0.15);
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

        /* ── BROW GOALS ── */
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
            background: var(--btn-dark);
            color: var(--gold);
            font-weight: 500;
            box-shadow: 0 0 20px rgba(201, 168, 76, 0.06);
        }

        .brow-note {
            text-align: center;
            font-size: 0.7rem;
            color: var(--gold);
            margin-top: 0.5rem;
            font-weight: 300;
            letter-spacing: 0.02em;
        }

        /* ── NEXT BUTTON ── */
        .btn-next {
            display: block;
            width: 100%;
            padding: 1rem;
            border-radius: var(--radius-pill);
            border: 1px solid var(--border);
            background: var(--btn-dark);
            color: var(--white);
            font-size: 0.7rem;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            font-weight: 600;
            transition: all var(--transition);
            cursor: pointer;
            margin-top: 2rem;
            min-height: 56px;
            font-family: var(--font-body);
        }

        .btn-next:hover {
            border-color: var(--gold);
            color: var(--gold-light);
            background: rgba(35, 35, 35, 0.9);
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(201, 168, 76, 0.15);
        }

        /* ── SKIP LINK ── */
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

        /* ── RESPONSIVE ── */
        @media (max-width: 700px) {
            .onboard-card {
                padding: 32px 28px;
                border-radius: 36px;
            }
            .heading {
                font-size: 2.2rem;
            }
            .skin-tone-circle {
                width: 38px;
                height: 38px;
            }
            .brow-goal-btn {
                min-width: 80px;
                padding: 0.6rem 0.8rem;
                font-size: 0.6rem;
            }
            .logo-wrap img {
                width: 40px;
                height: 40px;
            }
            .back-btn-circle {
                width: 42px;
                height: 42px;
            }
            .back-btn-circle svg {
                width: 18px;
                height: 18px;
            }
        }

        @media (max-width: 480px) {
            .onboard-card {
                padding: 24px 16px;
                border-radius: 28px;
            }
            .heading {
                font-size: 1.8rem;
            }
            .skin-tone-circle {
                width: 32px;
                height: 32px;
            }
            .brow-goal-btn {
                min-width: 70px;
                padding: 0.5rem 0.6rem;
                font-size: 0.55rem;
            }
            .top-row {
                margin-bottom: 1rem;
            }
            .logo-wrap img {
                width: 36px;
                height: 36px;
            }
            .back-btn-circle {
                width: 36px;
                height: 36px;
            }
            .back-btn-circle svg {
                width: 16px;
                height: 16px;
            }
            .step-text {
                font-size: 0.65rem;
            }
            .gold-divider {
                width: 60px;
                margin: 0.5rem 0 1.25rem;
            }
            .skin-selected-label {
                font-size: 0.65rem;
                margin-bottom: 1.25rem;
            }
        }
    </style>
</head>
<body>

    <div class="onboard-card">

        <!-- ═══ TOP ROW: BACK + LOGO ═══ -->
        <div class="top-row">
            <!-- Back button -->
            <button class="back-btn-circle" onclick="goBack('privacy.php')" aria-label="Go back">
                <svg viewBox="0 0 24 24">
                    <path d="M19 12H5M12 19l-7-7 7-7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>

            <!-- Logo (right side) — using logo.png -->
            <div class="logo-wrap" aria-label="Arch logo">
                <img src="assets/logo.png" alt="Arch Logo" />
            </div>
        </div>

        <!-- ═══ STEP INDICATOR ═══ -->
        <div class="step-indicator">
            <span class="step-text">Step 1 of 2</span>
            <div class="step-bar">
                <div class="step-bar-fill"></div>
            </div>
        </div>

        <!-- ═══ HEADING ═══ -->
        <h1 class="heading">A few things<br />about you.</h1>
        <p class="sub-heading">
            This shapes <span>everything that follows.</span><br />
            Hello, <span id="user-name">Mary Johnson</span>.
        </p>

        <!-- Gold Divider -->
        <div class="gold-divider"></div>

        <!-- ═══ SKIN TONE ═══ -->
        <div>
            <p class="section-title">Skin Tone</p>
            <div class="skin-tones-wrapper" id="skin-tone-options"></div>
            <div class="skin-selected-label" id="skin-tone-label">Select your tone</div>
        </div>

        <!-- ═══ BROW GOALS ═══ -->
        <div>
            <p class="section-title">Brow Goals</p>
            <div class="brow-goals-row">
                <button class="brow-goal-btn" data-goal="shape" onclick="selectBrowGoal('shape')">Shape</button>
                <button class="brow-goal-btn selected" data-goal="colour" onclick="selectBrowGoal('colour')">Colour</button>
                <button class="brow-goal-btn" data-goal="both" onclick="selectBrowGoal('both')">Both</button>
            </div>
            <p class="brow-note">Your profile can be updated at any time.</p>
        </div>

        <!-- ═══ NEXT BUTTON ═══ -->
        <button class="btn-next" onclick="nextOnboardingStep()">Next</button>

        <!-- ═══ SKIP LINK ═══ -->
        <a class="skip-link" onclick="goBack('onboarding-complete.php')">I'll add this later</a>

    </div>

    <!-- ═══════════════════════════════════════════════ -->
    <!-- JAVASCRIPT -->
    <!-- ═══════════════════════════════════════════════ -->
    <script>
        // ── State ──
        const state = {
            onboarding: {
                skinTone: null,
                browGoal: null
            }
        };

        // ── Navigation ──
        function goBack(target) {
            window.location.href = target;
        }

        // ── Skin Tone ──
        function selectSkinTone(id) {
            state.onboarding.skinTone = id;
            localStorage.setItem('archSkinTone', id);
            document.querySelectorAll('.skin-tone-option').forEach(el => {
                el.classList.toggle('selected', el.dataset.id === id);
            });
            const label = document.getElementById('skin-tone-label');
            const toneMap = {
                fair: 'Fair',
                light: 'Light',
                medium: 'Medium',
                'medium-warm': 'Medium Warm',
                deep: 'Deep',
                rich: 'Rich'
            };
            if (label) label.textContent = toneMap[id] || 'Select your tone';
        }

        // ── Brow Goal ──
        function selectBrowGoal(goal) {
            state.onboarding.browGoal = goal;
            localStorage.setItem('archBrowGoal', goal);
            document.querySelectorAll('.brow-goal-btn').forEach(btn => {
                btn.classList.toggle('selected', btn.dataset.goal === goal);
            });
        }

        // ── Next Step ──
        function nextOnboardingStep() {
            const tone = state.onboarding.skinTone || localStorage.getItem('archSkinTone');
            if (!tone) {
                alert('Please select your skin tone first.');
                return;
            }
            window.location.href = 'onboarding-style.php';
        }

        // ── DOM Ready ──
        document.addEventListener('DOMContentLoaded', function() {

            // ---- Build skin tone options ----
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

            // ---- Restore saved values ----
            const savedTone = localStorage.getItem('archSkinTone');
            if (savedTone) selectSkinTone(savedTone);

            const savedGoal = localStorage.getItem('archBrowGoal');
            if (savedGoal) selectBrowGoal(savedGoal);

            // ---- User name ----
            const userName = localStorage.getItem('archUserName') || 'Mary Johnson';
            const nameEl = document.getElementById('user-name');
            if (nameEl) nameEl.textContent = userName;
        });
    </script>

</body>
</html>