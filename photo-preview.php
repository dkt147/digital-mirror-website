<?php
// photo-preview.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Photo Preview — Royals Arch Brow</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        /* ————— RESET & VARIABLES ————— */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
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
            background: var(--black);
            color: var(--white);
            font-family: var(--font-body);
            font-weight: 300;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* ————— NAVBAR ————— */
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 2.5rem;
            border-bottom: none;                /* removed the default border */
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

        /* ===== PHOTO PREVIEW UI ===== */
        .preview-wrapper {
            width: 100%;
            max-width: 100%;
            min-height: calc(100vh - 80px);
            padding: 1rem 4rem 2.5rem;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        /* Top Bar */
        .preview-topbar {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0.5rem 0 1rem;
            position: relative;
        }

        .preview-back-btn {
            position: absolute;
            left: -20px;
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

        /* Photo Card */
        .photo-card {
            width: 100%;
            max-width: 360px;
            aspect-ratio: 1 / 1.1;
            border-radius: 20px;
            padding: 6px;
            background: linear-gradient(135deg, var(--gold-dark), var(--gold-light));
            box-shadow: 0 0 40px rgba(201, 168, 76, 0.12);
            position: relative;
            margin: 0 auto;
        }

        .photo-inner {
            width: 100%;
            height: 100%;
            border-radius: 16px;
            overflow: hidden;
            position: relative;
            background: #000;
        }

        .photo-inner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* Overlay Guide on Photo */
        .photo-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            pointer-events: none;
        }

        .photo-guide {
            position: relative;
            width: 78%;
            height: 88%;
            border: 1.5px dashed var(--gold);
            border-radius: 50%;
            opacity: 0.8;
        }

        .corner {
            position: absolute;
            width: 24px;
            height: 24px;
            border: 2px solid var(--gold);
            opacity: 0.9;
        }

        .corner-tl {
            top: -4px;
            left: -4px;
            border-right: none;
            border-bottom: none;
            border-radius: 4px 0 0 0;
        }

        .corner-tr {
            top: -4px;
            right: -4px;
            border-left: none;
            border-bottom: none;
            border-radius: 0 4px 0 0;
        }

        .corner-bl {
            bottom: -4px;
            left: -4px;
            border-right: none;
            border-top: none;
            border-radius: 0 0 0 4px;
        }

        .corner-br {
            bottom: -4px;
            right: -4px;
            border-left: none;
            border-top: none;
            border-radius: 0 0 4px 0;
        }

        /* ————— GOLD RULE ————— */
        .nav-gold-rule {
            height: 1px;
            background: linear-gradient(to right, transparent 0%, var(--gold-dark) 30%, var(--gold-dark) 70%, transparent 100%);
            opacity: 0.5;
        }

        /* Text Content */
        .preview-heading {
            font-family: var(--font-display);
            font-style: italic;
            font-size: 1.8rem;
            font-weight: 400;
            color: var(--white);
            line-height: 1.1;
            width: 100%;
            margin-top: 0.5rem;
        }

        .preview-desc {
            font-size: 0.9rem;
            color: var(--white-dim);
            line-height: 1.5;
            width: 100%;
        }

        /* Buttons */
        .btn-use-photo {
            width: 100%;
            max-width: 100%;
            align-self: center;
            padding: 1rem;
            border-radius: 999px;
            background: var(--gold);
            color: var(--white);
            font-size: 0.75rem;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: background var(--transition);
            font-family: var(--font-body);
            margin-top: 0.5rem;
        }

        .btn-use-photo:hover {
          border-color: var(--gold);
          color: var(--black);
          transform: translateY(-2px);
        }

        .link-retake {
            color: var(--gold);
            font-size: 0.85rem;
            font-weight: 400;
            cursor: pointer;
            transition: color var(--transition);
            margin-top: 0.25rem;
            align-self: center;
        }

        .link-retake:hover {
            text-decoration: underline;
            color: var(--gold-light);
        }

        @media (max-width: 900px) {
            .navbar {
                padding: 0.875rem 1.25rem;
            }

            .navbar-nav {
                display: none;
            }

            .preview-heading {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 480px) {
            .preview-wrapper {
                padding: 1rem 1rem 2rem;
            }

            .photo-card {
                max-width: 300px;
            }

            .preview-back-btn {
                width: 36px;
                height: 36px;
            }
        }
    </style>
</head>

<body>

    <!-- ===== NAVBAR (PHP INCLUDE) ===== -->
    <?php include 'includes/navbar.php'; ?>
    
    <!-- 👇 GOLD RULE REMOVED – NO LINE UNDER NAVBAR -->
   <div class="nav-gold-rule"></div>
    <!-- ===== PHOTO PREVIEW CONTENT ===== -->
    <main class="preview-wrapper">

        <!-- Top Bar (Back + Title) -->
        <div class="preview-topbar">
            <a href="javascript:history.back()" class="preview-back-btn" aria-label="Go back">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <line x1="19" y1="12" x2="5" y2="12"></line>
                    <polyline points="12 19 5 12 12 5"></polyline>
                </svg>
            </a>
            <div class="preview-title">Photo Preview</div>
        </div>

        <!-- Photo Card with Guide -->
        <div class="photo-card">
            <div class="photo-inner">
                <!-- Image will be loaded from localStorage via JS -->
                <img id="capturedPhoto" src="" alt="Captured Photo" />
                <div class="photo-overlay">
                    <div class="photo-guide">
                        <div class="corner corner-tl"></div>
                        <div class="corner corner-tr"></div>
                        <div class="corner corner-bl"></div>
                        <div class="corner corner-br"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Text Content -->
        <div class="preview-heading">Is this the right shot?</div>
        <div class="preview-desc">
            Both brows should be clearly visible.<br />
            Even, direct light gives the most accurate analysis.
        </div>

        <!-- Buttons -->
        <button class="btn-use-photo" id="usePhotoBtn">Use this photo</button>
        <div class="link-retake" id="retakeBtn">Retake</div>

    </main>

    <!-- ===== JAVASCRIPT ===== -->
    <script>
        (function() {
            const imgElement = document.getElementById('capturedPhoto');
            const useBtn = document.getElementById('usePhotoBtn');
            const retakeBtn = document.getElementById('retakeBtn');
            // 1. Load photo from localStorage
            function loadPhoto() {
                const savedPhoto = localStorage.getItem('capturedFacePhoto');
                if (savedPhoto) {
                    imgElement.src = savedPhoto;
                } else {
                    // Fallback if no photo found
                    imgElement.src =
                        'https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=1000&auto=format&fit=crop';
                }
            }
            // 2. Use this photo
            function usePhoto() {
                window.location.href = "face-analysis-loading.php";
            }
            // 3. Retake
            function retakePhoto() {
                // Remove photo from localStorage
                localStorage.removeItem('capturedFacePhoto');
                // Go back to camera
                window.history.back();
            }
            // --- Load on page load ---
            loadPhoto();
            // --- Event Listeners ---
            useBtn.addEventListener('click', usePhoto);
            retakeBtn.addEventListener('click', retakePhoto);
        })();
    </script>

</body>

</html>