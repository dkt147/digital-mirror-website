<?php
// brow-editor.php — Live Camera + MediaPipe Brow Editor
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Brow Editor — Royals Arch Brow</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    :root {
        --black: #0a0a08;
        --dark-card: #161610;
        --gold: #c9a84c;
        --gold-light: #d4b96a;
        --gold-dark: #8a6f2e;
        --gold-muted: rgba(201, 168, 76, 0.12);
        --white: #f5f0e8;
        --white-dim: rgba(245, 240, 232, 0.55);
        --border: rgba(201, 168, 76, 0.18);
        --font-display: 'Cormorant Garamond', serif;
        --font-body: 'Montserrat', sans-serif;
        --radius: 14px;
        --transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    html {
        font-size: 16px;
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
        background: linear-gradient(to right, transparent, var(--gold-dark) 30%, var(--gold-dark) 70%, transparent);
        opacity: 0.5;
    }

    /* ====== LAYOUT ====== */
    .main {
        max-width: 100%;
        margin: 0 auto;
        padding: 0 3rem 2.5rem;
        display: flex;
        flex-direction: column;
        gap: 1.25rem;
    }

    /* ====== PAGE TOPBAR ====== */
    .page-topbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0.75rem 0 0.25rem;
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

    .topbar-save {
        font-size: 0.65rem;
        font-weight: 600;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        color: var(--gold);
        transition: opacity var(--transition);
        flex-shrink: 0;
    }

    .topbar-save:hover {
        opacity: 0.7;
    }

    /* ====== SUB NAV (Left / Both / Right) ====== */
    .sub-nav {
        display: flex;
        justify-content: space-between;
        padding: 0 4px;
    }

    .sub-nav button {
        font-size: 0.7rem;
        font-weight: 600;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: var(--white-dim);
        background: none;
        border: none;
        cursor: pointer;
        position: relative;
        padding-bottom: 6px;
        transition: color var(--transition);
    }

    .sub-nav button.active {
        color: var(--white);
    }

    .sub-nav button.active::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background: var(--gold);
    }

    .sub-nav button:hover {
        color: var(--white);
    }

    /* ====== CAMERA VIEWPORT ====== */
    .cam-wrapper {
        position: relative;
        width: 250px;
        height: 310px;
        margin: 0 auto;
        border-radius: var(--radius);
        overflow: hidden;
        background: #0d0d0a;
        border: 1px solid var(--border);
    }

    /* hidden real video feed */
    #camVideo {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0;
        pointer-events: none;
    }

    /* canvas = mirrored video + brow overlay */
    #camCanvas {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* dim overlay for left/right brow tab */
    .brow-dim {
        position: absolute;
        top: 0;
        height: 100%;
        width: 50%;
        background: rgba(0, 0, 0, 0.55);
        pointer-events: none;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .brow-dim-left {
        left: 0;
    }

    .brow-dim-right {
        right: 0;
    }

    .cam-wrapper.focus-left .brow-dim-right {
        opacity: 1;
    }

    .cam-wrapper.focus-right .brow-dim-left {
        opacity: 1;
    }

    /* Camera status badge */
    .cam-status {
        position: absolute;
        bottom: 12px;
        left: 50%;
        transform: translateX(-50%);
        background: rgba(10, 10, 8, 0.75);
        backdrop-filter: blur(8px);
        border: 1px solid var(--border);
        border-radius: 999px;
        padding: 5px 14px;
        font-size: 0.62rem;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: var(--white-dim);
        white-space: nowrap;
    }

    .cam-status.ready {
        color: var(--gold);
        border-color: var(--gold-dark);
    }

    /* live dot */
    .live-dot {
        display: inline-block;
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: var(--gold);
        margin-right: 6px;
        animation: pulse 1.4s ease-in-out infinite;
    }

    @keyframes pulse {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0.3;
        }
    }

    /* ====== TOOL TABS ====== */
    .tool-tabs {
        display: flex;
        gap: 8px;
    }

    .tool-tab {
        flex: 1;
        padding: 10px 0;
        text-align: center;
        font-size: 0.6rem;
        font-weight: 600;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        border-radius: 999px;
        border: 1px solid var(--border);
        color: var(--white);
        background: transparent;
        cursor: pointer;
        transition: all var(--transition);
    }

    .tool-tab:hover {
        border-color: var(--gold);
        background-color: var(--gold);
    }

    .tool-tab.active {
        border-color: var(--gold);
        color: var(--gold);
        background: var(--gold-muted);
    }

    /* ====== TOOL PANELS ====== */
    .tool-panel {
        display: none;
        flex-direction: column;
        gap: 0.75rem;
    }

    .tool-panel.active {
        display: flex;
    }

    /* Shape mini grid */
    .shape-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 8px;
    }

    .shape-cell {
        background: var(--dark-card);
        border: 1px solid var(--border);
        border-radius: var(--radius);
        padding: 10px 6px 8px;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 6px;
        cursor: pointer;
        transition: all var(--transition);
    }

    .shape-cell:hover {
        border-color: var(--gold-dark);
    }

    .shape-cell.active {
        border-color: var(--gold);
        background: var(--gold-muted);
    }

    .shape-cell svg {
        width: 44px;
        height: 20px;
    }

    .shape-cell span {
        font-size: 0.52rem;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: var(--white-dim);
    }

    .shape-cell.active span {
        color: var(--gold);
    }

    /* Colour swatches */
    .swatch-row {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .swatch {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        border: 2px solid transparent;
        cursor: pointer;
        transition: all var(--transition);
    }

    .swatch:hover {
        transform: scale(1.1);
    }

    .swatch.active {
        border-color: var(--white);
        box-shadow: 0 0 0 3px var(--gold);
    }

    /* Thickness segment */
    .seg {
        display: flex;
        gap: 0;
        border-radius: 999px;
        overflow: hidden;
        border: 1px solid var(--border);
    }

    .seg-btn {
        flex: 1;
        padding: 0.7rem;
        text-align: center;
        font-size: 0.62rem;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: var(--white-dim);
        background: transparent;
        border-right: 1px solid var(--border);
        cursor: pointer;
        transition: all var(--transition);
    }

    .seg-btn:last-child {
        border-right: none;
    }

    .seg-btn:hover {
        color: var(--white);
    }

    .seg-btn.active {
        background: var(--gold-muted);
        color: var(--gold);
    }

    /* Position pad */
    .pos-pad {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 8px;
    }

    .pos-btn {
        padding: 0.75rem;
        border-radius: var(--radius);
        border: 1px solid var(--border);
        color: var(--white-dim);
        background: var(--dark-card);
        font-size: 0.65rem;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        transition: all var(--transition);
        cursor: pointer;
    }

    .pos-btn:hover {
        border-color: var(--gold);
        color: var(--gold);
        background: var(--gold-muted);
    }

    .pos-btn:active {
        transform: scale(0.97);
    }

    /* Definition cards */
    .def-cards {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .def-card {
        background: var(--dark-card);
        border: 1px solid var(--border);
        border-radius: var(--radius);
        padding: 14px 16px;
        cursor: pointer;
        transition: all var(--transition);
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .def-card:hover {
        border-color: var(--gold-dark);
    }

    .def-card.active {
        border-color: var(--gold);
        background: var(--gold-muted);
    }

    .def-card-text h4 {
        font-family: var(--font-display);
        font-size: 1rem;
        font-weight: 400;
        color: var(--white);
    }

    .def-card.active .def-card-text h4 {
        color: var(--gold);
    }

    .def-card-text p {
        font-size: 0.72rem;
        color: var(--white-dim);
        margin-top: 2px;
    }

    .def-radio {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        border: 1.5px solid var(--border);
        flex-shrink: 0;
        transition: all var(--transition);
    }

    .def-card.active .def-radio {
        border-color: var(--gold);
        background: var(--gold);
    }

    /* Hint text */
    .hint-text {
        font-size: 0.72rem;
        color: var(--white-dim);
        text-align: center;
    }

    /* ====== ADVICE CARD ====== */
    .advice-card {
        background: var(--dark-card);
        border: 1px solid var(--gold);
        border-radius: var(--radius);
        padding: 16px;
    }

    .advice-header {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 10px;
    }

    .advice-icon {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        border: 1px solid var(--gold);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .advice-icon svg {
        width: 14px;
        height: 14px;
        stroke: var(--gold);
        fill: none;
        stroke-width: 1.5;
    }

    .advice-title {
        font-family: var(--font-display);
        font-style: italic;
        font-size: 0.85rem;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        color: var(--gold);
    }

    .advice-text {
        font-size: 0.82rem;
        color: var(--white-dim);
        line-height: 1.55;
        margin-bottom: 14px;
    }

    .advice-actions {
        display: flex;
        gap: 10px;
        align-items: center;
    }

    .btn-adjust {
        padding: 0.65rem 1.6rem;
        border-radius: 999px;
        background: var(--gold);
        color: var(--black);
        font-size: 0.65rem;
        font-weight: 700;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        border: none;
        cursor: pointer;
        font-family: var(--font-body);
        transition: background var(--transition);
    }

    .btn-adjust:hover {
        background: var(--gold-light);
    }

    .btn-continues {
        background: none;
        border: none;
        font-size: 0.62rem;
        font-weight: 600;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: var(--white-dim);
        cursor: pointer;
        font-family: var(--font-body);
        transition: color var(--transition);
    }

    .btn-continues:hover {
        color: var(--white);
    }

    /* Continuing state */
    .feedback-card {
        background: var(--dark-card);
        border: 1px solid var(--gold);
        border-radius: var(--radius);
        padding: 16px;
    }

    .feedback-text {
        font-size: 0.82rem;
        color: var(--white-dim);
        line-height: 1.55;
    }

    /* ====== BOTTOM ACTIONS ====== */
    .bottom-actions {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 10px;
        margin-top: 0.25rem;
    }

    .btn {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        padding: 0.85rem 1rem;
        border-radius: 999px;
        font-size: 0.7rem;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        font-weight: 600;
        font-family: var(--font-body);
        cursor: pointer;
        transition: all var(--transition);
        border: none;
    }

    .btn-primary {
        background: var(--gold);
        color: var(--black);
    }

    .btn-primary:hover {
        background: var(--gold-light);
        transform: translateY(-1px);
    }

    .btn-outline {
        background: transparent;
        border: 1px solid var(--border);
        color: var(--white);
    }

    .btn-outline:hover {
        border-color: var(--gold);
        color: var(--gold);
    }

    /* ====== MODAL ====== */
    .modal-overlay {
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.75);
        backdrop-filter: blur(4px);
        z-index: 200;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.3s ease;
    }

    .modal-overlay.open {
        opacity: 1;
        pointer-events: all;
    }

    .modal-box {
        background: var(--dark-card);
        border: 1px solid var(--gold);
        border-radius: 20px;
        padding: 32px 24px 24px;
        width: 88%;
        max-width: 340px;
        text-align: center;
        transform: translateY(20px);
        transition: transform 0.3s ease;
    }

    .modal-overlay.open .modal-box {
        transform: translateY(0);
    }

    .modal-title {
        font-family: var(--font-display);
        font-style: italic;
        font-size: 1.6rem;
        font-weight: 400;
        color: var(--white);
        margin-bottom: 10px;
    }

    .modal-text {
        font-size: 0.78rem;
        color: var(--white-dim);
        line-height: 1.6;
        margin-bottom: 24px;
    }

    .modal-btn-gold {
        display: block;
        width: 100%;
        padding: 0.9rem;
        border-radius: 999px;
        background: var(--gold);
        color: var(--black);
        font-size: 0.7rem;
        font-weight: 700;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        border: none;
        cursor: pointer;
        font-family: var(--font-body);
        transition: background var(--transition);
        margin-bottom: 10px;
    }

    .modal-btn-gold:hover {
        background: var(--gold-light);
    }

    .modal-btn-keep {
        display: block;
        width: 100%;
        padding: 0.9rem;
        border-radius: 999px;
        background: transparent;
        border: 1px solid var(--border);
        color: var(--white);
        font-size: 0.7rem;
        font-weight: 600;
        letter-spacing: 0.1em;
        font-family: var(--font-display);
        font-style: italic;
        cursor: pointer;
        transition: border-color var(--transition);
        margin-bottom: 14px;
    }

    .modal-btn-keep:hover {
        border-color: var(--gold);
    }

    .modal-btn-discard {
        display: block;
        width: 100%;
        background: none;
        border: none;
        color: var(--gold);
        font-size: 0.75rem;
        font-family: var(--font-display);
        font-style: italic;
        cursor: pointer;
        opacity: 0.8;
        transition: opacity var(--transition);
    }

    .modal-btn-discard:hover {
        opacity: 1;
    }

    /* state helpers */
    .hidden {
        display: none !important;
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

        .back-btn {
            width: 38px;
            height: 38px;
        }

        .shape-grid {
            grid-template-columns: repeat(4, 1fr);
            gap: 6px;
        }

        .shape-cell {
            padding: 8px 4px 6px;
        }

        .cam-wrapper {
            width: 160px;
            height: 210px;
        }
    }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <?php include 'includes/navbar.php'; ?>
    <div class="nav-gold-rule"></div>

    <main class="main">

        <!-- TOPBAR -->
        <div class="page-topbar fade-1">
            <a href="javascript:history.back()" class="back-btn" aria-label="Go back">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <line x1="19" y1="12" x2="5" y2="12" />
                    <polyline points="12 19 5 12 12 5" />
                </svg>
            </a>
            <div class="page-title-center">Brow Editor</div>
            <button class="topbar-save" onclick="openModal()">Save</button>
        </div>

        <!-- SUB NAV — Left / Both / Right -->
        <div class="sub-nav fade-2">
            <button data-side="left">Left Brow</button>
            <button data-side="both" class="active">Both</button>
            <button data-side="right">Right Brow</button>
        </div>

        <!-- LIVE CAMERA VIEWPORT -->
        <div class="cam-wrapper fade-3" id="camWrapper">
            <video id="camVideo" autoplay playsinline muted></video>
            <canvas id="camCanvas"></canvas>
            <div class="brow-dim brow-dim-left"></div>
            <div class="brow-dim brow-dim-right"></div>
            <div class="cam-status" id="camStatus">Starting camera…</div>
        </div>

        <!-- TOOL TABS -->
        <div class="tool-tabs fade-4">
            <button class="tool-tab active" data-tool="shape">Shape</button>
            <button class="tool-tab" data-tool="colour">Colour</button>
            <button class="tool-tab" data-tool="thickness">Thickness</button>
            <button class="tool-tab" data-tool="position">Position</button>
            <button class="tool-tab" data-tool="definition">Definition</button>
        </div>

        <!-- SHAPE PANEL -->
        <div class="tool-panel active fade-5" id="panel-shape">
            <div class="shape-grid" id="shapeGrid">
                <!-- populated by JS -->
            </div>
            <p class="hint-text">Pick a shape — it applies live to your face.</p>
        </div>

        <!-- COLOUR PANEL -->
        <div class="tool-panel" id="panel-colour">
            <div class="swatch-row" id="swatchRow"></div>
            <p class="hint-text" id="colourHint">Dark Brown</p>
            <p class="hint-text" style="margin-top:-4px; opacity:0.6;">A shade within your natural palette reads most
                seamlessly.</p>
        </div>

        <!-- THICKNESS PANEL -->
        <div class="tool-panel" id="panel-thickness">
            <div class="seg">
                <button class="seg-btn" data-thick="fine">Fine</button>
                <button class="seg-btn active" data-thick="medium">Medium</button>
                <button class="seg-btn" data-thick="full">Full</button>
            </div>
            <p class="hint-text">Your natural brow thickness is a useful point of reference.</p>
        </div>

        <!-- POSITION PANEL -->
        <div class="tool-panel" id="panel-position">
            <div class="advice-card" id="posAdvice">
                <div class="advice-header">
                    <div class="advice-icon">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" />
                            <circle cx="12" cy="12" r="4" />
                        </svg>
                    </div>
                    <div class="advice-title">Brow Spacing</div>
                </div>
                <p class="advice-text">The inner corners are very close together. A small gap between the brows opens
                    the face naturally.</p>
                <div class="advice-actions">
                    <button class="btn-adjust" id="posAdjustBtn">Adjust</button>
                    <button class="btn-continues" id="posContinueBtn">Continues as Drawn</button>
                </div>
            </div>
            <div class="pos-pad hidden" id="posPad">
                <button class="pos-btn" id="posUp">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5">
                        <polyline points="18 15 12 9 6 15" />
                    </svg>
                    Move Up
                </button>
                <button class="pos-btn" id="posDown">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5">
                        <polyline points="6 9 12 15 18 9" />
                    </svg>
                    Move Down
                </button>
                <button class="pos-btn" id="archUp">Arch +</button>
                <button class="pos-btn" id="archDown">Arch −</button>
            </div>
            <div class="feedback-card hidden" id="posFeedback">
                <p class="feedback-text">Continuing as drawn. Position locked for this session.</p>
            </div>
        </div>

        <!-- DEFINITION PANEL -->
        <div class="tool-panel" id="panel-definition">
            <div class="def-cards" id="defCards"></div>
            <p class="hint-text">The same shape, three expressions of it.</p>
        </div>

        <!-- BOTTOM ACTIONS -->
        <div class="bottom-actions fade-5">
            <button class="btn btn-outline" onclick="history.back()">Cancel</button>
            <button class="btn btn-primary" onclick="openModal()">Save Look</button>
        </div>

    </main>

    <!-- SAVE MODAL -->
    <div class="modal-overlay" id="saveModal">
        <div class="modal-box">
            <div class="modal-title">Save your look?</div>
            <p class="modal-text">Your work is held exactly as it is.<br>Return to it whenever you're ready.</p>
            <button class="modal-btn-gold" onclick="window.location.href='save-look.php'">Save to My Looks</button>
            <button class="modal-btn-keep" onclick="closeModal()">Keep editing</button>
            <button class="modal-btn-discard" onclick="window.location.href='edit-complete.php'">Done — go to
                summary</button>
        </div>
    </div>

    <!-- ───────────────────────────────────────────────────────────────
     JAVASCRIPT — MediaPipe + Live Brow Rendering
──────────────────────────────────────────────────────────────── -->
    <script type="module">
    /* ── MediaPipe landmark indices ── */
    const L_UPPER = [70, 63, 105, 66, 107];
    const L_LOWER = [46, 53, 52, 65, 55];
    const R_UPPER = [300, 293, 334, 296, 336];
    const R_LOWER = [276, 283, 282, 295, 285];

    /* ── Catalogue ── */
    const STYLES = [{
            id: 'considered',
            name: 'Classic',
            path: (w, h, s) => `M${s*0},${ h*.5} Q${w*.5},${-h*.4} ${w},${h*.2}`
        },
        {
            id: 'arch',
            name: 'Arch',
            path: (w, h, s) => `M${s*0},${h*.6} Q${w*.5},${-h*.8} ${w},${h*.3}`
        },
        {
            id: 'straight',
            name: 'Straight',
            path: (w, h, s) => `M0,${h*.1} L${w},${h*.1}`
        },
        {
            id: 'sharp',
            name: 'Sharp',
            path: (w, h, s) => `M0,${h*.7} L${w*.45},${-h*.5} L${w},${h*.3}`
        },
        {
            id: 'rounded',
            name: 'Rounded',
            path: (w, h, s) => `M0,${h*.4} Q${w*.5},${-h*.2} ${w},${h*.4}`
        },
        {
            id: 'bold',
            name: 'Bold',
            path: (w, h, s) => `M0,${h*.5} Q${w*.5},${-h*.6} ${w},${h*.2}`
        },
        {
            id: 'feathered',
            name: 'Feathered',
            path: (w, h, s) => `M0,${h*.4} Q${w*.5},${-h*.3} ${w},${h*.1}`
        },
        {
            id: 'defined',
            name: 'Defined',
            path: (w, h, s) => `M0,${h*.6} Q${w*.45},${-h*.5} ${w},${h*.3}`
        },
    ];

    const COLOURS = [{
            name: 'Blonde',
            hex: '#c9a86a'
        },
        {
            name: 'Soft Brown',
            hex: '#a8794e'
        },
        {
            name: 'Caramel',
            hex: '#8b5e3c'
        },
        {
            name: 'Ash Brown',
            hex: '#6e5a48'
        },
        {
            name: 'Medium Brown',
            hex: '#5c3a1e'
        },
        {
            name: 'Dark Brown',
            hex: '#3e2510'
        },
        {
            name: 'Auburn',
            hex: '#6e3b23'
        },
        {
            name: 'Black',
            hex: '#1a1a1a'
        },
    ];

    const DEFS = [{
            id: 'understated',
            name: 'Understated',
            opacity: 0.50,
            thick: 0.80,
            sub: 'Soft, barely-there.'
        },
        {
            id: 'considered',
            name: 'Considered',
            opacity: 0.80,
            thick: 1.0,
            sub: 'Polished and present.'
        },
        {
            id: 'deliberate',
            name: 'Deliberate',
            opacity: 0.95,
            thick: 1.20,
            sub: 'Precise. Structured.'
        },
    ];

    const THICKNESS = {
        fine: 6,
        medium: 10,
        full: 15
    };

    /* ── Live state ── */
    const look = {
        styleId: 'considered',
        colour: '#3e2510',
        colourName: 'Dark Brown',
        defId: 'considered',
        thickKey: 'medium',
        offsetY: 0,
        archExtra: 0,
        side: 'both',
    };

    /* ── DOM refs ── */
    const video = document.getElementById('camVideo');
    const canvas = document.getElementById('camCanvas');
    const camStatus = document.getElementById('camStatus');
    const camWrapper = document.getElementById('camWrapper');
    const ctx = canvas.getContext('2d');

    /* ── Build shape grid ── */
    (function buildShapeGrid() {
        const grid = document.getElementById('shapeGrid');
        grid.innerHTML = STYLES.map(s => `
    <div class="shape-cell ${s.id===look.styleId?'active':''}" data-style="${s.id}">
      <svg viewBox="0 0 44 20" fill="none">
        <path d="M2 14 Q22 3 42 10" stroke="#c9a84c" stroke-width="2.2" stroke-linecap="round"/>
      </svg>
      <span>${s.name}</span>
    </div>`).join('');
        grid.querySelectorAll('.shape-cell').forEach(c => c.addEventListener('click', () => {
            look.styleId = c.dataset.style;
            grid.querySelectorAll('.shape-cell').forEach(x => x.classList.remove('active'));
            c.classList.add('active');
        }));
    })();

    /* ── Build colour swatches ── */
    (function buildSwatches() {
        const row = document.getElementById('swatchRow');
        row.innerHTML = COLOURS.map(c =>
            `<div class="swatch ${c.hex===look.colour?'active':''}" style="background:${c.hex}" data-hex="${c.hex}" data-name="${c.name}" title="${c.name}"></div>`
        ).join('');
        row.querySelectorAll('.swatch').forEach(s => s.addEventListener('click', () => {
            look.colour = s.dataset.hex;
            look.colourName = s.dataset.name;
            row.querySelectorAll('.swatch').forEach(x => x.classList.remove('active'));
            s.classList.add('active');
            document.getElementById('colourHint').textContent = s.dataset.name;
        }));
    })();

    /* ── Build definition cards ── */
    (function buildDefs() {
        const c = document.getElementById('defCards');
        c.innerHTML = DEFS.map(d => `
    <div class="def-card ${d.id===look.defId?'active':''}" data-def="${d.id}">
      <div class="def-card-text"><h4>${d.name}</h4><p>${d.sub}</p></div>
      <div class="def-radio"></div>
    </div>`).join('');
        c.querySelectorAll('.def-card').forEach(card => card.addEventListener('click', () => {
            look.defId = card.dataset.def;
            c.querySelectorAll('.def-card').forEach(x => x.classList.remove('active'));
            card.classList.add('active');
        }));
    })();

    /* ── Thickness tabs ── */
    document.querySelectorAll('.seg-btn[data-thick]').forEach(b => b.addEventListener('click', () => {
        look.thickKey = b.dataset.thick;
        document.querySelectorAll('.seg-btn[data-thick]').forEach(x => x.classList.remove('active'));
        b.classList.add('active');
    }));

    /* ── Sub-nav (Left / Both / Right) ── */
    document.querySelectorAll('.sub-nav button').forEach(btn => btn.addEventListener('click', () => {
        document.querySelectorAll('.sub-nav button').forEach(x => x.classList.remove('active'));
        btn.classList.add('active');
        look.side = btn.dataset.side;
        camWrapper.classList.remove('focus-left', 'focus-right');
        if (look.side === 'left') camWrapper.classList.add('focus-left');
        if (look.side === 'right') camWrapper.classList.add('focus-right');
    }));

    /* ── Tool tabs ── */
    document.querySelectorAll('.tool-tab').forEach(t => t.addEventListener('click', () => {
        document.querySelectorAll('.tool-tab').forEach(x => x.classList.remove('active'));
        t.classList.add('active');
        const tool = t.dataset.tool;
        document.querySelectorAll('.tool-panel').forEach(p => p.classList.remove('active'));
        document.getElementById(`panel-${tool}`).classList.add('active');
    }));

    /* ── Position controls ── */
    document.getElementById('posAdjustBtn').addEventListener('click', () => {
        document.getElementById('posAdvice').classList.add('hidden');
        document.getElementById('posPad').classList.remove('hidden');
    });
    document.getElementById('posContinueBtn').addEventListener('click', () => {
        document.getElementById('posAdvice').classList.add('hidden');
        document.getElementById('posFeedback').classList.remove('hidden');
    });
    document.getElementById('posUp').addEventListener('click', () => {
        look.offsetY = Math.max(-30, look.offsetY - 3);
    });
    document.getElementById('posDown').addEventListener('click', () => {
        look.offsetY = Math.min(30, look.offsetY + 3);
    });
    document.getElementById('archUp').addEventListener('click', () => {
        look.archExtra = Math.min(20, look.archExtra + 2);
    });
    document.getElementById('archDown').addEventListener('click', () => {
        look.archExtra = Math.max(-10, look.archExtra - 2);
    });

    /* ── Modal ── */
    window.openModal = () => document.getElementById('saveModal').classList.add('open');
    window.closeModal = () => document.getElementById('saveModal').classList.remove('open');

    /* ══════════════════════════════════════════════════════════════
       CAMERA + MEDIAPIPE
    ══════════════════════════════════════════════════════════════ */
    let faceLandmarker = null;
    let stream = null;
    let rafId = null;

    async function startCamera() {
        try {
            stream = await navigator.mediaDevices.getUserMedia({
                video: {
                    facingMode: 'user',
                    width: {
                        ideal: 640
                    },
                    height: {
                        ideal: 480
                    }
                },
                audio: false
            });
            video.srcObject = stream;
            await video.play();
            camStatus.textContent = 'Loading AI model…';
            await loadMediaPipe();
            camStatus.innerHTML = '<span class="live-dot"></span>Live';
            camStatus.classList.add('ready');
            loop();
        } catch (err) {
            camStatus.textContent = 'Camera blocked — ' + err.message;
        }
    }

    async function loadMediaPipe() {
        const {
            FaceLandmarker,
            FilesetResolver
        } = await import(
            'https://cdn.jsdelivr.net/npm/@mediapipe/tasks-vision@0.10.18/+esm'
        );
        const fs = await FilesetResolver.forVisionTasks(
            'https://cdn.jsdelivr.net/npm/@mediapipe/tasks-vision@0.10.18/wasm'
        );
        faceLandmarker = await FaceLandmarker.createFromOptions(fs, {
            baseOptions: {
                modelAssetPath: 'https://storage.googleapis.com/mediapipe-models/face_landmarker/face_landmarker/float16/1/face_landmarker.task',
                delegate: 'GPU',
            },
            runningMode: 'VIDEO',
            numFaces: 1,
            outputFaceBlendshapes: false,
            outputFacialTransformationMatrixes: false,
        });
    }

    function loop() {
        rafId = requestAnimationFrame(loop);
        if (!stream || !faceLandmarker || video.readyState < 2) return;

        const vw = video.videoWidth,
            vh = video.videoHeight;
        if (!vw || !vh) return;

        /* always sync canvas resolution to video */
        canvas.width = vw;
        canvas.height = vh;

        /* 1. draw mirrored video frame */
        ctx.save();
        ctx.translate(vw, 0);
        ctx.scale(-1, 1);
        ctx.drawImage(video, 0, 0, vw, vh);
        ctx.restore();

        /* 2. detect face landmarks */
        let result;
        try {
            result = faceLandmarker.detectForVideo(video, performance.now());
        } catch (e) {
            return;
        }

        const faces = result?.faceLandmarks || [];
        if (!faces.length) return;

        /* 3. resolve look params */
        const def = DEFS.find(d => d.id === look.defId) || DEFS[1];
        const thick = THICKNESS[look.thickKey] * def.thick;
        const alpha = def.opacity; // 0–1 already

        faces.forEach(lm => drawBrows(lm, vw, vh, thick, alpha));
    }

    /* ── landmark → canvas pixel (x mirrored to match video) ── */
    function lmPx(lm, vw, vh, idx) {
        return {
            x: (1 - lm[idx].x) * vw,
            y: lm[idx].y * vh + look.offsetY,
        };
    }

    /* ── Render both eyebrows onto canvas ── */
    function drawBrows(lm, vw, vh, thick, alpha) {
        const hex = look.colour;
        const r = parseInt(hex.slice(1, 3), 16);
        const g = parseInt(hex.slice(3, 5), 16);
        const b = parseInt(hex.slice(5, 7), 16);

        const sides = look.side === 'both' ? ['left', 'right'] : [look.side];

        sides.forEach(side => {
            const UPPER = side === 'left' ? L_UPPER : R_UPPER;
            const LOWER = side === 'left' ? L_LOWER : R_LOWER;

            const upper = UPPER.map(i => lmPx(lm, vw, vh, i));
            const lower = LOWER.map(i => lmPx(lm, vw, vh, i));

            /* arch adjustment on peak point (index 2) */
            upper[2] = {
                x: upper[2].x,
                y: upper[2].y - look.archExtra
            };

            /* ── offscreen canvas for soft fill ── */
            const offW = Math.abs(upper[upper.length - 1].x - upper[0].x) + thick * 6;
            const offH = thick * 8;
            const startX = Math.min(upper[0].x, upper[upper.length - 1].x) - thick * 3;
            const startY = Math.min(...[...upper, ...lower].map(p => p.y)) - thick * 3;

            const off = document.createElement('canvas');
            off.width = vw;
            off.height = vh;
            const offCtx = off.getContext('2d');

            /* build brow path on offscreen */
            offCtx.beginPath();
            offCtx.moveTo(upper[0].x, upper[0].y);
            for (let i = 1; i < upper.length; i++) offCtx.lineTo(upper[i].x, upper[i].y);
            for (let i = lower.length - 1; i >= 0; i--) offCtx.lineTo(lower[i].x, lower[i].y);
            offCtx.closePath();

            /* gradient fill */
            const grd = offCtx.createLinearGradient(upper[0].x, 0, upper[upper.length - 1].x, 0);
            grd.addColorStop(0, `rgba(${r},${g},${b},0.1)`);
            grd.addColorStop(0.2, `rgba(${r},${g},${b},0.9)`);
            grd.addColorStop(0.8, `rgba(${r},${g},${b},0.9)`);
            grd.addColorStop(1, `rgba(${r},${g},${b},0.1)`);
            offCtx.fillStyle = grd;
            offCtx.fill();

            /* blur the offscreen */
            offCtx.filter = `blur(${Math.max(1, thick * 0.5)}px)`;
            const tmp = document.createElement('canvas');
            tmp.width = vw;
            tmp.height = vh;
            const tmpCtx = tmp.getContext('2d');
            tmpCtx.filter = `blur(${Math.max(1, thick * 0.5)}px)`;
            tmpCtx.drawImage(off, 0, 0);

            /* composite onto main canvas */
            ctx.save();
            ctx.globalAlpha = alpha;
            ctx.drawImage(tmp, 0, 0);
            ctx.restore();

            /* crisp upper-edge stroke on top */
            ctx.save();
            ctx.globalAlpha = alpha * 0.95;
            ctx.beginPath();
            ctx.moveTo(upper[0].x, upper[0].y);
            for (let i = 1; i < upper.length; i++) ctx.lineTo(upper[i].x, upper[i].y);
            ctx.strokeStyle = `rgb(${r},${g},${b})`;
            ctx.lineWidth = Math.max(1.5, thick * 0.4);
            ctx.lineCap = 'round';
            ctx.lineJoin = 'round';
            ctx.stroke();
            ctx.restore();
        });
    }

    /* ── Start on load ── */
    startCamera();

    /* ── Stop stream when navigating away ── */
    window.addEventListener('beforeunload', () => {
        if (stream) stream.getTracks().forEach(t => t.stop());
        if (rafId) cancelAnimationFrame(rafId);
    });
    </script>
</body>

</html>