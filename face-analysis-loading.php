<?php
// face-analysis-loading.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analyzing Your Brows</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,400;1,500&family=Montserrat:wght@300;400;500&display=swap"
        rel="stylesheet">
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    :root {
        --black: #0a0a08;
        --gold: #c9a84c;
        --gold-light: #d4b96a;
        --gold-dark: #8a6f2e;
        --white: #f5f0e8;
        --white-dim: rgba(245, 240, 232, 0.55);
        --border: rgba(201, 168, 76, 0.18);
        --font-display: 'Cormorant Garamond', serif;
        --font-body: 'Montserrat', sans-serif;
        --transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    body {
        font-family: var(--font-body);
        background: var(--black);
        color: var(--white);
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        font-weight: 300;
    }

    /* ————— NAVBAR ————— */
    .navbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 1rem 2.5rem;
        border-bottom: none;
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
        text-decoration: none;
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

    /* ===== TOP BAR (like photo-preview) ===== */
    .preview-topbar {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0.5rem 0 1rem;
        position: relative;
        flex-shrink: 0;
    }

    .preview-back-btn {
        position: absolute;
        left: 40px;
        width: 44px;
        height: 44px;
        border-radius: 50%;
        border: 1.5px solid var(--gold);
        color: var(--gold);
        display: flex;
        align-items: center;
        justify-content: center;
        background: transparent;
        transition: background var(--transition);
        cursor: pointer;
        z-index: 11;
    }

    .preview-back-btn:hover {
        background: rgba(201, 168, 76, 0.1);
    }

    .preview-title {
        font-size: 0.75rem;
        letter-spacing: 0.18em;
        text-transform: uppercase;
        color: var(--white-dim);
        font-weight: 500;
    }

    /* ————— GOLD RULE ————— */
    .nav-gold-rule {
        height: 1px;
        background: linear-gradient(to right, transparent 0%, var(--gold-dark) 30%, var(--gold-dark) 70%, transparent 100%);
        opacity: 0.5;
    }

    /* ===== ANALYSIS SCREEN ===== */
    .analysis-screen {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 1.5rem;
        padding: 1rem;
    }

    .bg-image {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: brightness(0.55);
        z-index: 1;
    }

    /* ===== CONTENT ===== */
    .content {
        text-align: center;
        max-width: 400px;
    }

    .content h1 {
        font-family: var(--font-display);
        font-style: italic;
        font-size: 52px;
        font-weight: 400;
        line-height: 1;
        margin-bottom: 15px;
        color: var(--white);
    }

    .content p {
        font-size: 16px;
        color: var(--white-dim);
        margin-bottom: 25px;
        line-height: 1.4;
    }

    /* ===== PROGRESS ===== */
    .progress {
        width: 170px;
        height: 3px;
        background: rgba(255, 255, 255, 0.15);
        margin: 0 auto;
        overflow: hidden;
        border-radius: 10px;
    }

    .progress-bar {
        height: 100%;
        width: 0%;
        background: var(--gold);
        transition: width 0.2s ease;
    }

    /* ===== DOTS ===== */
    .dots {
        margin-top: 18px;
        display: flex;
        justify-content: center;
        gap: 8px;
    }

    .dots span {
        width: 9px;
        height: 9px;
        border-radius: 50%;
        background: rgba(201, 168, 76, 0.25);
    }

    .dots span.active {
        background: var(--gold);
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 900px) {
        .navbar {
            padding: 0.875rem 1.25rem;
        }

        .navbar-nav {
            display: none;
        }

        .photo-frame {
            width: 160px;
            height: 210px;
        }
    }

    @media (max-width: 480px) {
        .preview-topbar {
            padding: 0.25rem 0 0.5rem;
        }

        .preview-back-btn {
            left: 15px;
            width: 36px;
            height: 36px;
        }

        .content h1 {
            font-size: 42px;
        }

        .content p {
            font-size: 14px;
        }

        .preview-title {
            font-size: 0.6rem;
        }
    }

    .photo-frame {
        width: 200px;
        height: 260px;
        border-radius: 14px;
        overflow: hidden;
        border: 1px solid var(--border);
        position: relative;
    }

    .bg-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: brightness(0.55);
    }
    </style>
</head>

<body>

    <!-- ===== NAVBAR (same as photo-preview) ===== -->
    <?php include 'includes/navbar.php'; ?>

    <div class="nav-gold-rule"></div>

    <!-- ===== TOP BAR (same as photo-preview) ===== -->
    <div class="preview-topbar">
        <a href="javascript:history.back()" class="preview-back-btn" aria-label="Go back">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <line x1="19" y1="12" x2="5" y2="12"></line>
                <polyline points="12 19 5 12 12 5"></polyline>
            </svg>
        </a>
        <div class="preview-title">Analyzing Your Brows</div>
    </div>

    <!-- ===== ANALYSIS SCREEN ===== -->
    <div class="analysis-screen">

        <!-- BACKGROUND IMAGE (loaded via JS from localStorage) -->
        <div class="photo-frame">
            <img id="bgImage" class="bg-image" src="" alt="Captured Photo">
        </div>

        <!-- CONTENT -->
        <div class="content">
            <h1>Analysing your<br>brows.</h1>
            <p>Your face shape is the most telling guide to your ideal brow. We've already found yours.</p>

            <div class="progress">
                <div class="progress-bar" id="bar"></div>
            </div>

            <div class="dots">
                <span class="active"></span>
                <span></span>
                <span></span>
            </div>
        </div>

    </div>

    <!-- ===== JAVASCRIPT ===== -->
    <script>
    // 1. Load captured photo from localStorage
    const bgImage = document.getElementById('bgImage');
    const savedPhoto = localStorage.getItem('capturedFacePhoto');
    if (savedPhoto) {
        bgImage.src = savedPhoto;
    } else {
        // Fallback if no photo found
        bgImage.src = 'assets/images/model.jpg';
    }

    // 2. Progress bar animation - redirect to stencil-kit.php
    let progress = 0;
    const bar = document.getElementById("bar");

    const interval = setInterval(() => {
        progress += 1;
        bar.style.width = progress + "%";

        if (progress >= 100) {
            clearInterval(interval);

            // Redirect to stencil-kit.php after completion
            setTimeout(() => {
                window.location.href = "stencil-kit.php";
            }, 500);
        }
    }, 40);
    </script>

</body>

</html>