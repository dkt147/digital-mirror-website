<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Privacy Confirmed — Royals Arch Brow</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <style>
        :root {
            --black: #0a0a08;
            --gold: #C9A84C;
            --gold-soft: rgba(201,168,76,0.22);
            --white: #f5f0e8;
            --white-dim: rgba(245,240,232,0.72);
            --white-muted: rgba(245,240,232,0.55);
            --bg: #090906;
            --radius: 36px;
            --radius-pill: 999px;
            --transition: 0.25s ease;
            --font-display: 'Cormorant Garamond', serif;
            --font-body: 'Montserrat', sans-serif;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
            font-size: 16px;
        }

        body {
            min-height: 100vh;
            font-family: var(--font-body);
            background: radial-gradient(circle at top, rgba(201,168,76,0.08), transparent 24%),
                        linear-gradient(180deg, var(--bg) 0%, #060503 100%);
            color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
        }

        .page-wrap {
            width: min(500px, 100%);
            text-align: center;
        }

        .brand-icon {
            width: 58px;
            height: 58px;
            margin: 0 auto 1.4rem;
            border-radius: 50%;
            display: grid;
            place-items: center;
            border: 1px solid var(--gold-soft);
            background: radial-gradient(circle at 30% 30%, rgba(201,168,76,0.16), transparent 55%);
        }

        .brand-icon img {
            width: 30px;
            height: 30px;
            object-fit: contain;
        }

        .hero-title {
            font-family: var(--font-display);
            font-size: clamp(2.4rem, 5vw, 3.5rem);
            font-style: italic;
            font-weight: 400;
            line-height: 1.02;
            color: var(--white);
            margin-bottom: 0.9rem;
        }

        .gold-divider {
            width: 100px;
            height: 1px;
            margin: 0 auto 2.1rem;
            background: linear-gradient(to right, transparent, var(--gold), transparent);
            opacity: 0.85;
        }

        .content-card {
            padding: 2rem 2rem 2.2rem;
            border-radius: var(--radius);
            background: rgba(14, 14, 10, 0.92);
            border: 1px solid rgba(201,168,76,0.14);
            box-shadow: 0 24px 70px rgba(0, 0, 0, 0.35);
        }

        .icon-badge {
            width: 64px;
            height: 64px;
            margin: 0 auto 1.4rem;
            display: grid;
            place-items: center;
            border-radius: 50%;
            background: rgba(201,168,76,0.08);
            border: 1px solid rgba(201,168,76,0.2);
        }

        .icon-badge span {
            width: 36px;
            height: 36px;
            display: grid;
            place-items: center;
            border-radius: 50%;
            background: var(--gold);
            color: #0a0a08;
            font-weight: 700;
            font-size: 1.35rem;
        }

        .bullet-list {
            list-style: none;
            margin: 0 auto 1.9rem;
            padding: 0;
            max-width: 300px;
            text-align: left;
        }

        .bullet-list li {
            position: relative;
            padding-left: 1.6rem;
            margin-bottom: 0.8rem;
            color: var(--white);
            font-size: 1rem;
            line-height: 1.7;
        }

        .bullet-list li::before {
            content: '•';
            position: absolute;
            left: 0;
            top: 0;
            color: var(--gold);
            font-size: 1.3rem;
            line-height: 1;
        }

        .statement {
            margin: 0 auto 2.3rem;
            max-width: 340px;
            font-size: 0.98rem;
            line-height: 1.7;
            color: var(--white-muted);
        }

        .statement strong {
            display: block;
            color: var(--gold);
            font-size: 1rem;
            letter-spacing: 0.01em;
            line-height: 1.8;
            margin-bottom: 0.45rem;
        }

        .statement em {
            display: block;
            color: var(--white-dim);
            font-style: italic;
            font-size: 0.92rem;
            margin-top: 0.2rem;
        }

        .btn-wrap {
            margin-top: 0.5rem;
        }

        .cta-btn {
            width: 100%;
            max-width: 100%;
            padding: 1.1rem 1.25rem;
            border-radius: 999px;
            border: none;
            background: var(--gold);
            color: #0a0a08;
            font-weight: 700;
            font-size: 0.98rem;
            letter-spacing: 0.03em;
            box-shadow: 0 14px 35px rgba(201,168,76,0.18);
            cursor: pointer;
            transition: transform var(--transition), filter var(--transition);
        }

        .cta-btn:hover {
            transform: translateY(-1px);
            filter: brightness(0.96);
        }

        .footer-note {
            margin-top: 1.5rem;
            color: var(--white-muted);
            font-size: 0.82rem;
            letter-spacing: 0.06em;
            line-height: 1.6;
        }

        @media (max-width: 520px) {
            .page-wrap { padding: 0 0.75rem; }
            .content-card { padding: 1.85rem 1.5rem 2rem; }
            .hero-title { font-size: 2.4rem; }
            .bullet-list { max-width: 100%; }
        }
    </style>
</head>
<body>
    <main class="page-wrap">
        <div class="brand-icon">
            <img src="assets/logo.png" alt="Royals Arch Brow" loading="lazy" />
        </div>

        <h1 class="hero-title">What this app sees<br>stays with you.</h1>
        <div class="gold-divider"></div>

        <div class="content-card">
            <div class="icon-badge"><span>!</span></div>

            <ul class="bullet-list">
                <li>Your face.</li>
                <li>Your brow profile.</li>
                <li>Your looks.</li>
            </ul>

            <p class="statement">
                <strong>None of it is shared, sold, or held beyond your use of it.</strong>
                <em>You may delete your profile at any time.</em>
            </p>

            <div class="btn-wrap">
                <button class="cta-btn" onclick="continueOnboarding()">Understood. Continue.</button>
            </div>
        </div>

        <p class="footer-note">This is the only place we will say it.<br>Your data. Yours alone.</p>
    </main>

    <script>
        function continueOnboarding() {
            window.location.href = 'onboarding-profile.php';
        }
    </script>
</body>
</html>
