<?php
// camera-screen.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Camera — Face Scan</title>
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
            height: 100vh;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        /* ————— NAVBAR (PHP Include CSS) ————— */
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
            text-decoration: none; /* Add this */
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

        /* ————— CAMERA UI ————— */
        .cam-container {
            width: 200px;
            height: 260px;
            margin: 0 auto;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #000;
            border-radius: 14px;
            border: 1px solid var(--border);
        }

        #video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* ————— OVERLAY GUIDE ————— */
        .cam-overlay {
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

        .cam-guide {
            width: 85%;
            height: 85%;
            border: 1.5px dashed var(--gold);
            border-radius: 50%;
            opacity: 0.8;
        }

        .corner {
            position: absolute;
            width: 28px;
            height: 28px;
            border: 2px solid var(--gold);
            opacity: 0.85;
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

        /* ————— TOP BAR (Camera) ————— */
        .cam-topbar {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem 1.5rem;
            position: relative;
            flex-shrink: 0;
        }

        /* Back Button (new) */
        .cam-back-btn {
            position: absolute;
            left: 2.5rem;
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

        .cam-back-btn:hover {
            background: rgba(201, 168, 76, 0.1);
        }

        .cam-topbar-title {
            font-size: 0.7rem;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: var(--white-dim);
            font-weight: 500;
        }

        .cam-topbar-logo {
            position: absolute;
            right: 1.5rem;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .cam-topbar-logo svg {
            width: 28px;
            height: 28px;
            fill: none;
            stroke: var(--gold);
            stroke-width: 2.5;
        }

        .cam-topbar-logo span {
            font-family: var(--font-display);
            font-size: 1.2rem;
            font-weight: 700;
            font-style: italic;
            color: var(--gold);
            letter-spacing: -0.05em;
        }

        /* ————— BOTTOM CONTROLS ————— */
        .cam-controls {
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1.5rem 2rem 2rem;
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
        }

        .btn-switch {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            border: 1.5px solid var(--white-dim);
            display: flex;
            align-items: center;
            justify-content: center;
            background: transparent;
            transition: all var(--transition);
            color: var(--white);
            cursor: pointer;
        }

        .btn-switch:hover {
            border-color: var(--gold);
            background: rgba(201, 168, 76, 0.1);
        }

        .btn-shutter {
            width: 72px;
            height: 72px;
            border-radius: 50%;
            background: var(--gold);
            border: 3px solid rgba(255, 255, 255, 0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all var(--transition);
            box-shadow: 0 0 20px rgba(201, 168, 76, 0.2);
            cursor: pointer;
        }

        .btn-shutter:hover {
            transform: scale(1.05);
            box-shadow: 0 0 30px rgba(201, 168, 76, 0.3);
        }

        .btn-shutter-inner {
            width: 54px;
            height: 54px;
            border-radius: 50%;
            border: 2px solid var(--gold-dark);
            background: transparent;
        }

        .btn-cancel {
            font-size: 0.85rem;
            color: var(--white-dim);
            transition: color var(--transition);
            padding: 0.5rem 1rem;
            font-weight: 400;
            cursor: pointer;
            background: none;
            border: none;
        }

        .btn-cancel:hover {
            color: var(--white);
        }

        /* ————— RESPONSIVE ————— */
        @media (max-width: 900px) {
            .navbar {
                padding: 0.875rem 1.25rem;
            }

            .navbar-nav {
                display: none;
            }
            .cam-container {
                width: 160px;
                height: 210px;
             }
        }

        @media (max-width: 480px) {
            .cam-guide {
                width: 70%;
                height: 70%;
            }

            .cam-controls {
                padding: 1rem 1.5rem 1.5rem;
            }

            .btn-shutter {
                width: 64px;
                height: 64px;
            }

            .btn-shutter-inner {
                width: 48px;
                height: 48px;
            }

            .cam-topbar-title {
                font-size: 0.6rem;
            }

            .cam-back-btn {
                width: 36px;
                height: 36px;
                left: 0.5rem;
            }
        }
    </style>
</head>

<body>

    <!-- ===== NAVBAR (PHP INCLUDE) ===== -->
    <?php include 'includes/navbar.php'; ?>

    <!-- Gold Rule -->
    <div class="nav-gold-rule"></div>

    <!-- ===== CAMERA TOP BAR (WITH BACK BUTTON) ===== -->
    <div class="cam-topbar">
        <a href="javascript:history.back()" class="cam-back-btn" aria-label="Go back">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <line x1="19" y1="12" x2="5" y2="12"></line>
                <polyline points="12 19 5 12 12 5"></polyline>
            </svg>
        </a>
        <div class="cam-topbar-title">Center Your Face In The Guide.</div>
    </div>

    <!-- ===== CAMERA VIEWPORT ===== -->
    <div class="cam-container">
        <video id="video" autoplay playsinline></video>
        <!-- Canvas for capturing photo (hidden) -->
        <canvas id="canvas" style="display:none;"></canvas>
        <!-- Overlay Guide -->
        <div class="cam-overlay">
            <div class="cam-guide">
                <div class="corner corner-tl"></div>
                <div class="corner corner-tr"></div>
                <div class="corner corner-bl"></div>
                <div class="corner corner-br"></div>
            </div>
        </div>
    </div>

    <!-- ===== BOTTOM CONTROLS ===== -->
    <div class="cam-controls">
        <!-- Switch / Retake Button -->
        <button class="btn-switch" id="switchCamera" aria-label="Switch camera">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M7 16V4m0 0L3 8m4-4l4 4" />
                <path d="M17 8v12m0 0l4-4m-4 4l-4-4" />
                <path d="M9.5 2h5a2 2 0 012 2v16a2 2 0 01-2 2h-5a2 2 0 01-2-2V4a2 2 0 012-2z" />
            </svg>
        </button>

        <!-- Shutter Button -->
        <button class="btn-shutter" id="takePhoto" aria-label="Take photo">
            <div class="btn-shutter-inner"></div>
        </button>

        <!-- Cancel Button -->
        <button class="btn-cancel" id="cancelCamera">Cancel</button>
    </div>

    <!-- ===== JAVASCRIPT (Camera Logic) ===== -->
    <script>
        (function() {
            const video = document.getElementById('video');
            const canvas = document.getElementById('canvas');
            const takePhotoBtn = document.getElementById('takePhoto');
            const switchBtn = document.getElementById('switchCamera');
            const cancelBtn = document.getElementById('cancelCamera');
            let currentStream = null;
            let usingFrontCamera = true; // default to front camera on mobile/desktop
            // --- Start Camera ---
            async function startCamera(facingMode = 'user') {
                try {
                    if (currentStream) {
                        currentStream.getTracks().forEach(track => track.stop());
                    }
                    const constraints = {
                        video: {
                            facingMode: facingMode,
                            width: {
                                ideal: 1280
                            },
                            height: {
                                ideal: 720
                            }
                        },
                        audio: false
                    };
                    const stream = await navigator.mediaDevices.getUserMedia(constraints);
                    currentStream = stream;
                    video.srcObject = stream;
                    await video.play();
                } catch (err) {
                    console.error('Camera access denied:', err);
                    alert('Camera access is required for face scanning. Please allow camera permissions.');
                }
            }

            function takePicture() {
                if (!currentStream) return;
                const context = canvas.getContext('2d');
                canvas.width = video.videoWidth;
                canvas.height = video.videoHeight;
                context.drawImage(video, 0, 0, canvas.width, canvas.height);
                // Convert to data URL
                const photoData = canvas.toDataURL('image/png');
                // ✅ SAVE TO LOCALSTORAGE
                localStorage.setItem('capturedFacePhoto', photoData);
                // ✅ REDIRECT TO PHOTO PREVIEW
                window.location.href = 'photo-preview.php';
            }
            // --- Switch Camera ---
            async function switchCamera() {
                if (!currentStream) return;
                const newMode = usingFrontCamera ? 'environment' : 'user';
                usingFrontCamera = !usingFrontCamera;
                await startCamera(newMode);
            }
            // --- Cancel / Go Back ---
            function cancelCamera() {
                if (currentStream) {
                    currentStream.getTracks().forEach(track => track.stop());
                }
                window.history.back();
            }
            // --- Event Listeners ---
            takePhotoBtn.addEventListener('click', takePicture);
            switchBtn.addEventListener('click', switchCamera);
            cancelBtn.addEventListener('click', cancelCamera);
            // --- Auto-start camera on page load ---
            startCamera('user');
            // --- Stop stream on page unload ---
            window.addEventListener('beforeunload', function() {
                if (currentStream) {
                    currentStream.getTracks().forEach(track => track.stop());
                }
            });
        })();
    </script>

</body>

</html>