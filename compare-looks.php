<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Compare Looks — Royals Arch Brow</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <style>
        :root {
            --black: #0a0a0a;
            --white: #f5f0e8;
            --gold: #c9a84c;
            --dark-grey: #2b2b2b;
            --font-display: 'Cormorant Garamond', serif;
            --font-body: 'Montserrat', sans-serif;
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            background: var(--black);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
        }
        .screen {
            width: 100%;
            max-width: 700px;
            background: var(--black);
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 36px;
            padding: 24px 24px 28px;
            box-shadow: 0 24px 90px rgba(0,0,0,0.7);
        }
        .top-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 24px;
        }
        .top-bar a {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: var(--gold);
            border: 1px solid var(--gold);
            font-size: 1.2rem;
            transition: background 0.2s;
        }
        .top-bar a:hover { background: rgba(201,168,76,0.1); }
        .top-title {
            flex: 1;
            text-align: center;
            font-family: var(--font-body);
            font-size: 0.8rem;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: var(--gold);
            font-weight: 600;
        }
        .logo-mark {
            width: 44px;
            height: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gold);
            font-family: var(--font-display);
            font-weight: 700;
            font-size: 1.3rem;
        }
        .logo-mark img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        .content { padding: 0 0 0 0; } /* Adjusted to match the container padding */
        
        .main-title {
            font-family: var(--font-display);
            font-style: italic;
            font-size: 2.6rem;
            color: var(--white);
            margin-bottom: 0.25rem;
        }
        .sub-title {
            font-size: 0.95rem;
            font-weight: 300;
            color: rgba(255,255,255,0.7);
            margin-bottom: 24px;
        }
        .options {
            display: flex;
            flex-direction: column;
            gap: 14px;
            margin-bottom: 20px;
        }
        .option {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 20px;
            border-radius: 16px;
            background-color: rgba(255,255,255,0.02);
            border: 1px solid rgba(255,255,255,0.08);
            transition: all 0.2s;
            cursor: pointer;
        }
        .option.selected {
            background-color: rgba(201,168,76,0.12);
            border-color: var(--gold);
            box-shadow: 0 0 0 1px var(--gold);
        }
        .option-left {
            display: flex;
            align-items: center;
            gap: 18px;
        }
        .brow-icon {
            width: 60px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .brow-icon svg {
            width: 100%;
            height: 100%;
            fill: none;
            stroke: var(--white);
            stroke-width: 2.5;
            stroke-linecap: round;
        }
        .option.selected .brow-icon svg {
            stroke: var(--white);
        }
        .option-title {
            font-family: var(--font-display);
            font-size: 20px;
            color: var(--white);
        }
        .option.selected .option-title {
            color: var(--white);
        }
        .radio {
            width: 22px;
            height: 22px;
            border-radius: 50%;
            border: 2px solid rgba(255,255,255,0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        .option.selected .radio {
            border-color: var(--gold);
        }
        .radio::after {
            content: '';
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: var(--gold);
            opacity: 0;
            transition: opacity 0.2s;
        }
        .option.selected .radio::after {
            opacity: 1;
        }
        .status-text {
            color: var(--gold);
            font-size: 13px;
            font-weight: 500;
            margin-bottom: 18px;
        }
        .btn-action {
            display: block;
            width: 100%;
            padding: 1rem;
            border-radius: 999px;
            border: none;
            background: var(--dark-grey);
            color: var(--white);
            font-family: var(--font-body);
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.16em;
            text-align: center;
            cursor: pointer;
            transition: background 0.2s;
            text-decoration: none;
        }
        .btn-action:hover:not(.disabled) {
            background: #3a3a3a;
        }
        .btn-action.disabled {
            opacity: 0.5;
            cursor: not-allowed;
            pointer-events: none;
        }
        @media (max-width: 400px) {
            .screen { padding: 16px; }
            .main-title { font-size: 2rem; }
            .option { padding: 14px 16px; }
            .brow-icon { width: 48px; height: 24px; }
            .option-title { font-size: 18px; }
        }
    </style>
</head>
<body>
    <div class="screen">
        <div class="top-bar">
            <a href="deliberate.php">&#8592;</a>
            <div class="top-title">COMPARE</div>
            <div class="logo-mark"><img src="assets/logo.png" alt="CG logo" /></div>
        </div>

        <div class="content">
            <h1 class="main-title">Two looks worth comparing.</h1>
            <p class="sub-title">Select the two you'd like side by side.</p>

            <div class="options">
                <!-- Considered -->
                <div class="option" data-name="Considered">
                    <div class="option-left">
                        <div class="brow-icon">
                            <svg viewBox="0 0 80 30">
                                <path d="M8,20 Q20,4 40,15 Q60,26 72,20" />
                            </svg>
                        </div>
                        <div class="option-title">Considered</div>
                    </div>
                    <div class="radio"></div>
                </div>

                <!-- Arch (Selected) -->
                <div class="option selected" data-name="Arch">
                    <div class="option-left">
                        <div class="brow-icon">
                            <svg viewBox="0 0 80 30">
                                <path d="M8,24 Q20,0 40,12 Q60,24 72,12" />
                            </svg>
                        </div>
                        <div class="option-title">Arch</div>
                    </div>
                    <div class="radio"></div>
                </div>

                <!-- Understated -->
                <div class="option" data-name="Understated">
                    <div class="option-left">
                        <div class="brow-icon">
                            <svg viewBox="0 0 80 30">
                                <path d="M8,16 Q20,8 40,16 Q60,24 72,16" />
                            </svg>
                        </div>
                        <div class="option-title">Understated</div>
                    </div>
                    <div class="radio"></div>
                </div>
            </div>

            <div class="status-text">1 of 2 Chosen</div>

            <a class="btn-action disabled" href="your-look.php">SELECT ONE MORE TO COMPARE</a>
        </div>
    </div>

    <script>
        const options = document.querySelectorAll('.option');
        const statusText = document.querySelector('.status-text');
        const btnAction = document.querySelector('.btn-action');
        const maxSelected = 2;

        function updateUI() {
            const selected = document.querySelectorAll('.option.selected');
            const count = selected.length;
            statusText.textContent = `${count} of ${maxSelected} Chosen`;

            if (count < maxSelected) {
                btnAction.classList.add('disabled');
                btnAction.textContent = `SELECT ${maxSelected - count} MORE TO COMPARE`;
                btnAction.href = '#';
            } else {
                btnAction.classList.remove('disabled');
                btnAction.textContent = 'COMPARE THESE LOOKS';
                btnAction.href = 'your-look.php';
            }
        }

        options.forEach(opt => {
            opt.addEventListener('click', function() {
                if (this.classList.contains('selected')) {
                    this.classList.remove('selected');
                } else if (document.querySelectorAll('.option.selected').length < maxSelected) {
                    this.classList.add('selected');
                }
                updateUI();
            });
        });

        updateUI();
    </script>
</body>
</html>