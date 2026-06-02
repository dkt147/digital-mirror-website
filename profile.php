<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile — Royals Arch Brow</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Montserrat:wght@300;400;500;600;700&display=swap');

    :root {
      --black: #0a0a0a;
      --dark: #111111;
      --dark-card: #1a1a14;
      --dark-input: #1c1c15;
      --gold: #c9a84c;
      --gold-light: #d4b96a;
      --gold-dark: #8a6f2e;
      --gold-muted: rgba(201, 168, 76, 0.15);
      --white: #f5f0e8;
      --white-dim: rgba(245, 240, 232, 0.6);
      --white-faint: rgba(245, 240, 232, 0.15);
      --red-error: #8b2020;
      --green-success: #1a4a2e;
      --border: rgba(201, 168, 76, 0.2);
      --border-hover: rgba(201, 168, 76, 0.5);
      --font-display: 'Cormorant Garamond', serif;
      --font-body: 'Montserrat', sans-serif;
      --radius: 12px;
      --radius-sm: 8px;
      --transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    *,
    *::before,
    *::after {
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
    }

    input,
    textarea {
      outline: none;
      border: none;
      font-family: var(--font-body);
    }

    /* ========== TYPOGRAPHY ========== */
    .display {
      font-family: var(--font-display);
    }

    .italic {
      font-style: italic;
    }

    h1,
    h2,
    h3 {
      font-family: var(--font-display);
      font-weight: 400;
    }

    /* ========== LAYOUT ========== */
    .page {
      display: none;
    }

    .page.active {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    .container {
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 2rem;
    }

    /* ========== NAVBAR ========== */
    .navbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 1.25rem 2rem;
      border-bottom: 1px solid var(--border);
      background: rgba(10, 10, 10, 0.95);
      backdrop-filter: blur(20px);
      position: sticky;
      top: 0;
      z-index: 100;
    }

    .navbar-logo {
      display: flex;
      align-items: center;
      gap: 0.75rem;
    }

    .logo-emblem {
      width: 40px;
      height: 40px;
    }

    .logo-image {
      display: block;
      width: 40px;
      height: 40px;
      object-fit: contain;
    }

    .logo-image.small {
      width: 48px;
      height: 48px;
    }

    .logo-image.large {
      width: 60px;
      height: 60px;
    }

    .logo-text {
      font-family: var(--font-display);
      font-size: 1rem;
      letter-spacing: 0.3em;
      color: var(--gold);
      text-transform: uppercase;
    }

    .navbar-nav {
      display: flex;
      align-items: center;
      gap: 2rem;
      list-style: none;
    }

    .navbar-nav a {
      font-size: 0.7rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: var(--white-dim);
      transition: color var(--transition);
    }

    .navbar-nav a:hover,
    .navbar-nav a.active {
      color: var(--gold);
    }

    .navbar-actions {
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .btn-nav {
      padding: 0.5rem 1.25rem;
      font-size: 0.7rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      border-radius: 50px;
      transition: all var(--transition);
    }

    .btn-nav-outline {
      background: transparent;
      border: 1px solid var(--border);
      color: var(--white-dim);
    }

    .btn-nav-outline:hover {
      border-color: var(--gold);
      color: var(--gold);
    }

    .btn-nav-gold {
      background: var(--gold);
      color: var(--black);
      font-weight: 600;
    }

    .btn-nav-gold:hover {
      background: var(--gold-light);
    }

    /* ========== BUTTONS ========== */
    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      padding: 0.875rem 1.75rem;
      border-radius: 50px;
      font-size: 0.7rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      font-weight: 500;
      transition: all var(--transition);
      width: 100%;
    }

    .btn-primary {
      background: var(--gold);
      color: var(--black);
    }

    .btn-primary:hover {
      background: var(--gold-light);
      transform: translateY(-1px);
      box-shadow: 0 8px 30px rgba(201, 168, 76, 0.3);
    }

    .btn-secondary {
      background: transparent;
      border: 1px solid var(--border);
      color: var(--white);
    }

    .btn-secondary:hover {
      border-color: var(--gold);
      color: var(--gold);
    }

    .btn-dark {
      background: #222;
      color: var(--white);
    }

    .btn-dark:hover {
      background: #333;
    }

    .btn-icon {
      width: 36px;
      height: 36px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      background: var(--gold);
      color: var(--black);
      flex-shrink: 0;
    }

    /* ========== INPUTS ========== */
    .form-group {
      display: flex;
      flex-direction: column;
      gap: 0.5rem;
    }

    .form-label {
      font-size: 0.65rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: var(--white-dim);
    }

    .form-input {
      background: var(--dark-input);
      border: 1px solid var(--border);
      border-radius: var(--radius-sm);
      padding: 0.875rem 1rem;
      color: var(--white);
      font-size: 0.875rem;
      font-family: var(--font-body);
      transition: all var(--transition);
      width: 100%;
    }

    .form-input::placeholder {
      color: var(--white-faint);
    }

    .form-input:focus {
      border-color: var(--gold);
      background: #1f1f17;
    }

    .form-input.error {
      border-color: #8b2020;
      background: rgba(139, 32, 32, 0.1);
    }

    .form-error {
      font-size: 0.65rem;
      color: #e05c5c;
      letter-spacing: 0.05em;
    }

    .input-wrapper {
      position: relative;
    }

    .input-icon {
      position: absolute;
      right: 1rem;
      top: 50%;
      transform: translateY(-50%);
      color: var(--white-dim);
      cursor: pointer;
      transition: color var(--transition);
    }

    .input-icon:hover {
      color: var(--gold);
    }

    /* ========== DIVIDER ========== */
    .divider {
      display: flex;
      align-items: center;
      gap: 1rem;
      color: var(--white-faint);
      font-size: 0.7rem;
      letter-spacing: 0.1em;
      text-transform: uppercase;
    }

    .divider::before,
    .divider::after {
      content: '';
      flex: 1;
      height: 1px;
      background: var(--border);
    }

    /* ========== SOCIAL BTNS ========== */
    .social-btn {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.75rem;
      padding: 0.875rem;
      border-radius: var(--radius-sm);
      background: var(--dark-input);
      border: 1px solid var(--border);
      color: var(--white);
      font-size: 0.8rem;
      font-family: var(--font-body);
      font-weight: 400;
      transition: all var(--transition);
      width: 100%;
      cursor: pointer;
    }

    .social-btn:hover {
      border-color: var(--border-hover);
      background: #222;
    }

    .social-btn img {
      width: 18px;
      height: 18px;
    }

    /* ========== CARDS ========== */
    .card {
      background: var(--dark-card);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      padding: 1.5rem;
      transition: all var(--transition);
    }

    .card:hover {
      border-color: var(--border-hover);
      transform: translateY(-2px);
    }

    .card.selected {
      border-color: var(--gold);
      background: rgba(201, 168, 76, 0.08);
    }

    /* ========== GOLD LINE ========== */
    .gold-line {
      width: 40px;
      height: 1px;
      background: var(--gold);
      margin: 0.5rem 0;
    }

    /* ========== SECTION LABEL ========== */
    .section-label {
      font-size: 0.65rem;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: var(--gold);
    }

    /* ========== SHIMMER ========== */
    @keyframes shimmer {
      0% {
        background-position: -200% 0;
      }

      100% {
        background-position: 200% 0;
      }
    }

    /* ========== FADE ANIMATIONS ========== */
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(16px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .fade-in {
      animation: fadeIn 0.6s ease forwards;
    }

    .fade-in-delay-1 {
      animation: fadeIn 0.6s ease 0.1s both;
    }

    .fade-in-delay-2 {
      animation: fadeIn 0.6s ease 0.2s both;
    }

    .fade-in-delay-3 {
      animation: fadeIn 0.6s ease 0.3s both;
    }

    .fade-in-delay-4 {
      animation: fadeIn 0.6s ease 0.4s both;
    }

    /* ========== TOAST ========== */
    .toast {
      position: fixed;
      bottom: 2rem;
      right: 2rem;
      background: var(--dark-card);
      border: 1px solid var(--border);
      border-radius: var(--radius-sm);
      padding: 1rem 1.5rem;
      font-size: 0.8rem;
      color: var(--white);
      z-index: 9999;
      transform: translateY(100px);
      opacity: 0;
      transition: all 0.4s ease;
    }

    .toast.show {
      transform: translateY(0);
      opacity: 1;
    }

    .toast.success {
      border-color: rgba(74, 180, 74, 0.4);
    }

    .toast.error {
      border-color: rgba(139, 32, 32, 0.4);
    }

    /* ========== BACK BTN ========== */
    .back-btn {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      color: var(--white-dim);
      font-size: 0.7rem;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      background: none;
      padding: 0;
      transition: color var(--transition);
    }

    .back-btn:hover {
      color: var(--gold);
    }

    /* ========== RESPONSIVE ========== */
    @media (max-width: 768px) {
      .navbar-nav {
        display: none;
      }

      .container {
        padding: 0 1rem;
      }
    }

    /* ========== SPLASH PAGE ========== */
    #splash {
      background: var(--black);
      align-items: center;
      justify-content: center;
      text-align: center;
      min-height: 100vh;
      position: relative;
      overflow: hidden;
    }

    #splash::before {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(ellipse at 50% 40%, rgba(201, 168, 76, 0.06) 0%, transparent 70%);
    }

    .splash-logo {
      animation: fadeIn 1s ease 0.3s both;
    }

    .splash-emblem {
      width: 120px;
      height: 120px;
      margin: 0 auto 1.5rem;
    }

    .splash-brand {
      font-family: var(--font-display);
      font-size: 0.9rem;
      letter-spacing: 0.5em;
      color: var(--gold);
      text-transform: uppercase;
      display: block;
      margin-bottom: 0.25rem;
    }

    .splash-title {
      font-family: var(--font-display);
      font-size: 4rem;
      font-weight: 300;
      letter-spacing: 0.15em;
      color: var(--white);
      display: block;
      line-height: 1;
    }

    .splash-sub {
      font-family: var(--font-body);
      font-size: 0.65rem;
      letter-spacing: 0.3em;
      color: var(--gold);
      text-transform: uppercase;
      display: block;
      margin-top: 0.5rem;
    }

    .splash-tagline {
      font-family: var(--font-display);
      font-style: italic;
      font-size: 1.3rem;
      color: var(--white-dim);
      margin-top: 3rem;
      animation: fadeIn 1s ease 1.2s both;
    }

    .splash-loading {
      position: absolute;
      bottom: 3rem;
      left: 50%;
      transform: translateX(-50%);
      animation: fadeIn 0.5s ease 1.8s both;
    }

    .loading-bar {
      width: 60px;
      height: 1px;
      background: var(--border);
      overflow: hidden;
      border-radius: 1px;
    }

    .loading-bar-fill {
      height: 100%;
      background: var(--gold);
      animation: loadBar 2.5s ease forwards;
    }

    @keyframes loadBar {
      0% {
        width: 0;
      }

      100% {
        width: 100%;
      }
    }

    /* ========== ONBOARDING / AUTH LAYOUT ========== */
    .auth-layout {
      display: flex;
      min-height: 100vh;
    }

    .auth-panel {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 3rem 2rem;
      max-width: 520px;
      margin: 0 auto;
      width: 100%;
    }

    .auth-visual {
      flex: 1;
      background: linear-gradient(135deg, #0f0e09 0%, #1a1810 50%, #0a0a06 100%);
      position: relative;
      overflow: hidden;
      display: none;
    }

    @media (min-width: 900px) {
      .auth-visual {
        display: block;
      }

      .auth-panel {
        max-width: none;
        width: 50%;
      }
    }

    .auth-visual-content {
      position: absolute;
      inset: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      text-align: center;
      padding: 3rem;
    }

    .auth-visual::before {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(ellipse at 50% 50%, rgba(201, 168, 76, 0.08) 0%, transparent 70%);
    }

    .auth-visual-quote {
      font-family: var(--font-display);
      font-style: italic;
      font-size: 1.8rem;
      color: var(--white-dim);
      line-height: 1.4;
      max-width: 380px;
    }

    .auth-visual-label {
      margin-top: 1.5rem;
      font-size: 0.6rem;
      letter-spacing: 0.3em;
      text-transform: uppercase;
      color: var(--gold);
    }

    /* ========== ONBOARDING WELCOME ========== */
    .welcome-header {
      text-align: center;
      margin-bottom: 2.5rem;
    }

    .welcome-title {
      font-family: var(--font-display);
      font-style: italic;
      font-size: 2rem;
      line-height: 1.2;
      margin: 0.5rem 0;
    }

    .welcome-sub {
      font-size: 0.7rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--gold);
    }

    .path-card {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 1.25rem 1.5rem;
      border-radius: var(--radius);
      border: 1px solid var(--border);
      background: var(--dark-card);
      cursor: pointer;
      transition: all var(--transition);
      width: 100%;
      text-align: left;
      margin-bottom: 1rem;
    }

    .path-card:hover,
    .path-card.active {
      border-color: var(--gold);
      background: var(--gold-muted);
    }

    .path-card.active .path-title {
      color: var(--gold);
    }

    .path-title {
      font-family: var(--font-display);
      font-size: 1.2rem;
      font-weight: 400;
      color: var(--white);
    }

    .path-sub {
      font-size: 0.7rem;
      color: var(--white-dim);
      margin-top: 0.15rem;
    }

    .guest-link {
      text-align: center;
      margin-top: 1.5rem;
      font-size: 0.75rem;
      color: var(--gold);
      cursor: pointer;
      transition: opacity var(--transition);
    }

    .guest-link:hover {
      opacity: 0.7;
    }

    /* ========== PRIVACY NOTICE ========== */
    .privacy-list {
      list-style: none;
      margin: 1.5rem 0;
      display: flex;
      flex-direction: column;
      gap: 0.75rem;
    }

    .privacy-list li {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      font-size: 0.85rem;
      color: var(--white-dim);
    }

    .privacy-bullet {
      width: 5px;
      height: 5px;
      border-radius: 50%;
      background: var(--gold);
      flex-shrink: 0;
    }

    .privacy-assurance {
      font-family: var(--font-display);
      font-style: italic;
      font-size: 1rem;
      color: var(--white-dim);
      line-height: 1.5;
      margin-bottom: 1rem;
    }

    /* ========== SKIN TONE SELECTOR ========== */
    .skin-tones-wrapper {
      margin: 1.5rem 0;
    }

    #skin-tone-options {
      display: flex;
      gap: 0.75rem;
      justify-content: center;
      flex-wrap: wrap;
    }

    .skin-tone-option {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 0.4rem;
      cursor: pointer;
      transition: all var(--transition);
    }

    .skin-tone-circle {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      border: 2px solid transparent;
      transition: all var(--transition);
    }

    .skin-tone-option.selected .skin-tone-circle {
      border-color: var(--gold);
      box-shadow: 0 0 0 3px rgba(201, 168, 76, 0.2);
    }

    .skin-tone-label {
      font-size: 0.55rem;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--white-dim);
    }

    .skin-tone-selected-label {
      text-align: center;
      font-size: 0.75rem;
      color: var(--gold);
      margin-top: 0.75rem;
      min-height: 1.2em;
    }

    /* ========== BROW GOALS ========== */
    .brow-goals-row {
      display: flex;
      gap: 0.75rem;
      margin: 1rem 0;
    }

    .brow-goal-btn {
      flex: 1;
      padding: 0.75rem;
      border-radius: 50px;
      border: 1px solid var(--border);
      background: var(--dark-card);
      color: var(--white);
      font-size: 0.7rem;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      transition: all var(--transition);
      cursor: pointer;
    }

    .brow-goal-btn.selected {
      background: var(--gold);
      border-color: var(--gold);
      color: var(--black);
      font-weight: 600;
    }

    /* ========== STYLE OPTIONS ========== */
    .style-options {
      display: flex;
      flex-direction: column;
      gap: 1rem;
      margin: 1.5rem 0;
    }

    .style-option {
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      padding: 1.25rem 1.5rem;
      border-radius: var(--radius);
      border: 1px solid var(--border);
      background: var(--dark-card);
      cursor: pointer;
      transition: all var(--transition);
    }

    .style-option:hover {
      border-color: var(--border-hover);
    }

    .style-option.selected {
      border-color: var(--gold);
      background: var(--gold-muted);
    }

    .style-option-title {
      font-family: var(--font-display);
      font-size: 1.2rem;
      font-weight: 400;
      margin-bottom: 0.25rem;
    }

    .style-option-desc {
      font-size: 0.75rem;
      color: var(--white-dim);
      line-height: 1.5;
    }

    .style-option-radio {
      width: 20px;
      height: 20px;
      border-radius: 50%;
      border: 2px solid var(--border);
      flex-shrink: 0;
      margin-top: 0.25rem;
      transition: all var(--transition);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .style-option.selected .style-option-radio {
      border-color: var(--gold);
      background: var(--gold);
    }

    .style-option.selected .style-option-radio::after {
      content: '';
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: var(--black);
    }

    /* ========== ONBOARDING COMPLETE ========== */
    .complete-center {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      gap: 1rem;
    }

    .complete-icon {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      background: var(--dark-card);
      border: 1px solid var(--border);
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1rem;
    }

    .profile-tags {
      display: flex;
      flex-direction: column;
      gap: 0.75rem;
      margin: 1.5rem 0;
      width: 100%;
    }

    .profile-tag-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0.75rem 1rem;
      border-radius: var(--radius-sm);
      background: var(--dark-input);
    }

    .profile-tag-key {
      font-size: 0.65rem;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--white-dim);
    }

    .profile-tag-val {
      font-size: 0.8rem;
      color: var(--gold);
    }

    /* ========== DASHBOARD ========== */
    #dashboard {
      background: var(--black);
    }

    .dash-header {
      padding: 2rem 2rem 1.5rem;
      border-bottom: 1px solid var(--border);
    }

    .dash-welcome-label {
      font-size: 0.65rem;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: var(--gold);
    }

    .dash-name {
      font-family: var(--font-display);
      font-size: 2.5rem;
      font-weight: 300;
    }

    .dash-last-look {
      margin: 1.5rem 0;
    }

    .last-look-card {
      background: var(--dark-card);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      padding: 1.25rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .last-look-label {
      font-size: 0.6rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: var(--white-dim);
      margin-bottom: 0.25rem;
    }

    .last-look-value {
      font-size: 0.9rem;
      color: var(--white);
    }

    .last-look-date {
      font-size: 0.65rem;
      color: var(--white-dim);
      margin-top: 0.15rem;
    }

    .re-apply-btn {
      padding: 0.4rem 0.875rem;
      background: var(--gold-muted);
      border: 1px solid var(--gold-dark);
      border-radius: 50px;
      font-size: 0.6rem;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--gold);
      cursor: pointer;
      transition: all var(--transition);
    }

    .re-apply-btn:hover {
      background: var(--gold);
      color: var(--black);
    }

    .quick-actions {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1rem;
      margin: 1.5rem 0;
    }

    .quick-action {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 0.5rem;
      padding: 1rem;
      background: var(--dark-card);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      cursor: pointer;
      transition: all var(--transition);
    }

    .quick-action:hover {
      border-color: var(--gold);
      background: var(--gold-muted);
    }

    .quick-action-icon {
      color: var(--gold);
    }

    .quick-action-label {
      font-size: 0.6rem;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--white-dim);
      text-align: center;
    }

    .next-appt {
      padding: 1.25rem;
      background: var(--dark-card);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .next-appt-label {
      font-size: 0.6rem;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: var(--white-dim);
      margin-bottom: 0.25rem;
    }

    .next-appt-date {
      font-size: 1rem;
      color: var(--white);
    }

    /* ========== ARCH SESSION LANDING ========== */
    .session-options {
      display: flex;
      flex-direction: column;
      gap: 1rem;
      margin: 1.5rem 0;
    }

    .session-card {
      display: flex;
      align-items: center;
      gap: 1.25rem;
      padding: 1.25rem 1.5rem;
      border-radius: var(--radius);
      border: 1px solid var(--border);
      background: var(--dark-card);
      cursor: pointer;
      transition: all var(--transition);
      text-align: left;
      width: 100%;
      position: relative;
    }

    .session-card:hover {
      border-color: var(--border-hover);
      transform: translateX(4px);
    }

    .session-card.featured {
      border-color: var(--gold-dark);
      background: linear-gradient(135deg, rgba(201, 168, 76, 0.1) 0%, var(--dark-card) 100%);
    }

    .session-icon {
      width: 44px;
      height: 44px;
      border-radius: var(--radius-sm);
      background: var(--dark-input);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      color: var(--gold);
      border: 1px solid var(--border);
    }

    .session-card.featured .session-icon {
      background: var(--gold-muted);
      border-color: var(--gold-dark);
    }

    .session-title {
      font-family: var(--font-display);
      font-size: 1.15rem;
      font-weight: 400;
      margin-bottom: 0.2rem;
    }

    .session-desc {
      font-size: 0.72rem;
      color: var(--white-dim);
    }

    .session-arrow {
      margin-left: auto;
      color: var(--white-faint);
      flex-shrink: 0;
    }

    .session-new-badge {
      position: absolute;
      top: 0.75rem;
      right: 3rem;
      background: var(--gold);
      color: var(--black);
      font-size: 0.55rem;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      padding: 0.2rem 0.5rem;
      border-radius: 50px;
      font-weight: 600;
    }

    /* ========== DASH NAV ========== */
    .dash-nav {
      position: sticky;
      bottom: 0;
      background: rgba(10, 10, 10, 0.97);
      border-top: 1px solid var(--border);
      backdrop-filter: blur(20px);
      display: flex;
      justify-content: space-around;
      padding: 0.75rem 1rem;
      margin-top: auto;
    }

    .dash-nav-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 0.3rem;
      cursor: pointer;
      padding: 0.5rem 1rem;
      border-radius: var(--radius-sm);
      transition: all var(--transition);
      color: var(--white-dim);
      background: none;
      border: none;
      font-family: var(--font-body);
    }

    .dash-nav-item:hover,
    .dash-nav-item.active {
      color: var(--gold);
    }

    .dash-nav-label {
      font-size: 0.55rem;
      letter-spacing: 0.08em;
      text-transform: uppercase;
    }

    .dash-nav-dot {
      width: 4px;
      height: 4px;
      border-radius: 50%;
      background: var(--gold);
    }

    /* ========== DASH CONTENT AREA ========== */
    .dash-content {
      flex: 1;
      overflow-y: auto;
      padding: 1.5rem 2rem;
    }

    /* ========== CHECK INBOX ========== */
    .inbox-icon {
      font-size: 3rem;
      text-align: center;
      margin: 1.5rem 0;
    }

    /* ========== PROFILE PAGE ========== */
    .profile-avatar {
      width: 72px;
      height: 72px;
      border-radius: 50%;
      background: var(--dark-card);
      border: 2px solid var(--gold);
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: var(--font-display);
      font-size: 1.5rem;
      color: var(--gold);
      margin-bottom: 1rem;
    }

    /* ========== WIDE LAYOUT FOR DESKTOP ========== */
    @media (min-width: 900px) {

      #dashboard,
      #arch-session {
        display: grid;
        grid-template-columns: 240px 1fr;
        grid-template-rows: auto 1fr auto;
      }

      #dashboard .navbar,
      #arch-session .navbar {
        grid-column: 1 / -1;
      }

      .dash-sidebar {
        border-right: 1px solid var(--border);
        padding: 2rem 1.5rem;
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
      }

      .dash-nav {
        display: none;
      }

      .dash-content {
        padding: 2rem 3rem;
      }
    }

    @media (max-width: 899px) {
      .dash-sidebar {
        display: none;
      }
    }

    /* ========== SIDEBAR ========== */
    .sidebar-link {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      padding: 0.75rem 1rem;
      border-radius: var(--radius-sm);
      font-size: 0.75rem;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: var(--white-dim);
      cursor: pointer;
      transition: all var(--transition);
      background: none;
      border: none;
      font-family: var(--font-body);
      width: 100%;
      text-align: left;
    }

    .sidebar-link:hover,
    .sidebar-link.active {
      background: var(--gold-muted);
      color: var(--gold);
    }

    .sidebar-label {
      font-size: 0.55rem;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: var(--white-faint);
      padding: 0.5rem 1rem;
      margin-top: 1rem;
    }
  </style>
</head>

<body>
  <div class="toast" id="toast"></div>
  <div class="page active" style="min-height:100vh;display:flex;flex-direction:column;">
    <nav class="navbar">
      <div class="navbar-logo">
        <img src="assets/logo.png" alt="Arch logo" class="logo-image" />
      </div>
      <ul class="navbar-nav">
        <li><a href="dashboard.php">Home</a></li>
        <li><a href="arch-session.php">Try-On</a></li>
        <li><a href="#" onclick="showToast('Shop coming soon','info');return false;">Shop</a></li>
        <li><a href="profile.php" class="active">Profile</a></li>
      </ul>
      <div class="navbar-actions">
        <button class="btn-nav btn-nav-outline" onclick="goBack('index.php')">Sign Out</button>
      </div>
    </nav>
    <div class="dash-content" style="max-width:600px;margin:0 auto;width:100%;padding:2rem;">
      <div
        style="display:flex;align-items:center;gap:1.5rem;margin-bottom:2rem;padding-bottom:1.5rem;border-bottom:1px solid var(--border);">
        <img src="assets/profile.png" alt="Profile Avatar" class="profile-avatar" />
        <div>
          <h1 id="profile-name" style="font-family:var(--font-display);font-size:1.8rem;font-weight:400;">Mary Johnson
          </h1>
          <p id="profile-email" style="font-size:0.75rem;color:var(--white-dim);">mary@gmail.com</p>
        </div>
      </div>
      <div class="section-label" style="margin-bottom:1rem;">Brow Profile</div>
      <div class="profile-tags" style="margin-bottom:2rem;">
        <div class="profile-tag-row"><span class="profile-tag-key">Skin Tone</span><span class="profile-tag-val"
            id="profile-skin-tone">Medium Warm</span></div>
        <div class="profile-tag-row"><span class="profile-tag-key">Brow Goal</span><span class="profile-tag-val"
            id="profile-brow-goal">Colour</span></div>
        <div class="profile-tag-row"><span class="profile-tag-key">Style Direction</span><span class="profile-tag-val"
            id="profile-style">Refined & Natural</span></div>
      </div>
      <div class="section-label" style="margin-bottom:1rem;">Upcoming Appointment</div>
      <div class="next-appt" style="margin-bottom:2rem;">
        <div>
          <div class="next-appt-label">Confirmed</div>
          <div class="next-appt-date">April 5, 2026 · 3:30 PM</div>
        </div><button class="re-apply-btn" onclick="showToast('Manage appointment →','info')">Manage</button>
      </div>
      <button class="btn btn-secondary" onclick="goBack('onboarding-profile.php')">Edit Brow Profile</button>
      <button class="btn btn-secondary" style="margin-top:0.75rem;"
        onclick="showToast('Privacy settings coming soon','info')">Privacy Settings</button>
      <button class="btn"
        style="margin-top:0.75rem;background:transparent;border:1px solid rgba(139,32,32,0.4);color:#e05c5c;"
        onclick="goBack('index.php')">Sign Out</button>
    </div>
  </div>
  <script>
    // ========== APP STATE ==========
    const state = {
      user: null,
      onboarding: {
        skinTone: null,
        browGoal: null,
        style: null
      }
    };

    function goBack(target) {
      window.location.href = target;
    }

    function showToast(msg, type = 'info') {
      const toast = document.getElementById('toast');
      if (!toast) return;
      toast.textContent = msg;
      toast.className = `toast ${type} show`;
      setTimeout(() => toast.classList.remove('show'), 3000);
    }

    function saveUser(name, email) {
      if (name) localStorage.setItem('archUserName', name);
      if (email) localStorage.setItem('archUserEmail', email);
    }

    function getSavedUser() {
      return {
        name: localStorage.getItem('archUserName') || 'Mary Johnson',
        email: localStorage.getItem('archUserEmail') || 'mary@gmail.com'
      };
    }

    function selectSkinTone(id) {
      state.onboarding.skinTone = id;
      localStorage.setItem('archSkinTone', id);
      document.querySelectorAll('.skin-tone-option').forEach(el => el.classList.toggle('selected', el.dataset.id ===
        id));
      const label = document.getElementById('skin-tone-label');
      if (label) {
        const tone = {
          fair: 'Fair',
          light: 'Light',
          medium: 'Medium',
          'medium-warm': 'Medium Warm',
          deep: 'Deep',
          rich: 'Rich'
        } [id] || 'Select your tone';
        label.textContent = tone;
      }
    }

    function selectBrowGoal(goal) {
      state.onboarding.browGoal = goal;
      localStorage.setItem('archBrowGoal', goal);
      document.querySelectorAll('.brow-goal-btn').forEach(btn => btn.classList.toggle('selected', btn.dataset.goal ===
        goal));
    }

    function selectStyle(style) {
      state.onboarding.style = style;
      localStorage.setItem('archStyle', style);
      document.querySelectorAll('.style-option').forEach(card => card.classList.toggle('selected', card.dataset
        .style === style));
    }

    function setupPasswordToggles() {
      document.querySelectorAll('.toggle-pass').forEach(btn => {
        btn.addEventListener('click', () => {
          const input = btn.closest('.input-wrapper') ? .querySelector('input');
          if (!input) return;
          const isPass = input.type === 'password';
          input.type = isPass ? 'text' : 'password';
          btn.innerHTML = isPass ?
            `<svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17.94 17.94A10.07 10.07 0 0112 20c-7 0-11-8-11-8a18.45 18.45 0 015.06-5.94"/><path d="M9.9 4.24A9.12 9.12 0 0112 4c7 0 11 8 11 8a18.5 18.5 0 01-2.16 3.19"/><line x1="1" y1="1" x2="23" y2="23"/></svg>` :
            `<svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>`;
        });
      });
    }

    function setupSkinTones() {
      const container = document.getElementById('skin-tone-options');
      if (!container) return;
      const tones = [{
          id: 'fair',
          label: 'Fair',
          color: '#f5deb3'
        },
        {
          id: 'light',
          label: 'Light',
          color: '#d4a574'
        },
        {
          id: 'medium',
          label: 'Medium',
          color: '#c07845'
        },
        {
          id: 'medium-warm',
          label: 'Medium Warm',
          color: '#a0622a'
        },
        {
          id: 'deep',
          label: 'Deep',
          color: '#6b3a1f'
        },
        {
          id: 'rich',
          label: 'Rich',
          color: '#3d1c0a'
        }
      ];
      container.innerHTML = tones.map(t => `
    <button type="button" class="skin-tone-option" data-id="${t.id}" onclick="selectSkinTone('${t.id}')">
      <div class="skin-tone-circle" style="background:${t.color}"></div>
      <span class="skin-tone-label">${t.label}</span>
    </button>
  `).join('');
      const saved = localStorage.getItem('archSkinTone');
      if (saved) selectSkinTone(saved);
      const savedGoal = localStorage.getItem('archBrowGoal');
      if (savedGoal) selectBrowGoal(savedGoal);
    }

    function setupStyleOptions() {
      const savedStyle = localStorage.getItem('archStyle');
      if (savedStyle) selectStyle(savedStyle);
    }

    function updateDashboard() {
      const user = getSavedUser();
      const dashName = document.getElementById('dash-name');
      const sidebarName = document.getElementById('sidebar-name');
      if (dashName) dashName.textContent = `${user.name.split(' ')[0]}.`;
      if (sidebarName) sidebarName.textContent = user.name.split(' ')[0];
    }

    function nextOnboardingStep() {
      const selectedTone = state.onboarding.skinTone || localStorage.getItem('archSkinTone');
      if (!selectedTone) {
        showToast('Please select your skin tone', 'error');
        return;
      }
      window.location.href = 'onboarding-style.php';
    }

    function completeOnboarding() {
      const selectedStyle = state.onboarding.style || localStorage.getItem('archStyle');
      if (!selectedStyle) {
        showToast('Please select a style direction', 'error');
        return;
      }
      window.location.href = 'onboarding-complete.php';
    }

    function enterArch() {
      window.location.href = 'dashboard.php';
    }

    function startSession(mode) {
      localStorage.setItem('archSessionMode', mode);
      window.location.href = `session-active.php?mode=${encodeURIComponent(mode)}`;
    }

    function handleSignup(e) {
      if (e) e.preventDefault();
      const name = document.getElementById('signup-name') ? .value.trim();
      const email = document.getElementById('signup-email') ? .value.trim();
      const pass = document.getElementById('signup-pass') ? .value;
      const confirm = document.getElementById('signup-confirm') ? .value;
      clearErrors('signup');
      let valid = true;
      if (!name) {
        showError('signup-name', 'Name is required');
        valid = false;
      }
      if (!email || !email.includes('@')) {
        showError('signup-email', 'Please enter a valid email address');
        valid = false;
      }
      if (!pass || pass.length < 6) {
        showError('signup-pass', 'Password must be at least 6 characters');
        valid = false;
      }
      if (pass !== confirm) {
        showError('signup-confirm', 'Passwords do not match');
        valid = false;
      }
      if (!valid) return;
      saveUser(name, email);
      window.location.href = 'privacy.php';
    }

    function handleLogin(e) {
      if (e) e.preventDefault();
      const email = document.getElementById('login-email') ? .value.trim();
      const pass = document.getElementById('login-pass') ? .value;
      clearErrors('login');
      let valid = true;
      if (!email) {
        showError('login-email', 'Email is required');
        valid = false;
      }
      if (!pass) {
        showError('login-pass', 'Password is required');
        valid = false;
      }
      if (!valid) return;
      saveUser('Mary Johnson', email);
      window.location.href = 'dashboard.php';
    }

    function handleForgotPassword(e) {
      if (e) e.preventDefault();
      const email = document.getElementById('forgot-email') ? .value.trim();
      if (!email) {
        showError('forgot-email', 'Email is required');
        return;
      }
      localStorage.setItem('archForgotEmail', email);
      window.location.href = 'check-inbox.php';
    }

    function acceptPrivacy() {
      window.location.href = 'onboarding-profile.php';
    }

    function showError(fieldId, msg) {
      const field = document.getElementById(fieldId);
      if (!field) return;
      field.classList.add('error');
      const errEl = field.closest('.form-group') ? .querySelector('.form-error') || field.parentElement ?
        .querySelector('.form-error');
      if (errEl) errEl.textContent = msg;
    }

    function clearErrors(prefix) {
      document.querySelectorAll(`#${prefix}-form .form-input`).forEach(f => f.classList.remove('error'));
      document.querySelectorAll(`#${prefix}-form .form-error`).forEach(f => f.textContent = '');
    }

    function updateCheckInbox() {
      const email = localStorage.getItem('archForgotEmail') || 'mary@gmail.com';
      const emailEl = document.getElementById('forgot-sent-email');
      if (emailEl) emailEl.textContent = email;
    }

    function updateCompleteSummary() {
      const skin = localStorage.getItem('archSkinTone') || '—';
      const goal = localStorage.getItem('archBrowGoal') || '—';
      const style = localStorage.getItem('archStyle') || '—';
      const skinEl = document.getElementById('complete-skin-tone');
      const goalEl = document.getElementById('complete-brow-goal');
      const styleEl = document.getElementById('complete-style');
      if (skinEl) skinEl.textContent = {
        fair: 'Fair',
        light: 'Light',
        medium: 'Medium',
        'medium-warm': 'Medium Warm',
        deep: 'Deep',
        rich: 'Rich'
      } [skin] || skin;
      if (goalEl) goalEl.textContent = {
        shape: 'Shape',
        colour: 'Colour',
        both: 'Both'
      } [goal] || goal;
      if (styleEl) styleEl.textContent = {
        refined: 'Refined & Natural',
        precise: 'Precise & Considered',
        discover: 'Show Me What Suits Me'
      } [style] || style;
    }

    function updateProfileSummary() {
      const user = getSavedUser();
      const nameEl = document.getElementById('profile-name');
      const emailEl = document.getElementById('profile-email');
      const sidebarEl = document.getElementById('sidebar-name');
      const dashEl = document.getElementById('dash-name');
      if (nameEl) nameEl.textContent = user.name;
      if (emailEl) emailEl.textContent = user.email;
      if (sidebarEl) sidebarEl.textContent = user.name.split(' ')[0];
      if (dashEl) dashEl.textContent = `${user.name.split(' ')[0]}.`;
      const skinEl = document.getElementById('profile-skin-tone');
      const goalEl = document.getElementById('profile-brow-goal');
      const styleEl = document.getElementById('profile-style');
      const skin = localStorage.getItem('archSkinTone') || 'Medium Warm';
      const goal = localStorage.getItem('archBrowGoal') || 'Colour';
      const style = localStorage.getItem('archStyle') || 'Refined & Natural';
      if (skinEl) skinEl.textContent = {
        fair: 'Fair',
        light: 'Light',
        medium: 'Medium',
        'medium-warm': 'Medium Warm',
        deep: 'Deep',
        rich: 'Rich'
      } [skin] || skin;
      if (goalEl) goalEl.textContent = {
        shape: 'Shape',
        colour: 'Colour',
        both: 'Both'
      } [goal] || goal;
      if (styleEl) styleEl.textContent = {
        refined: 'Refined & Natural',
        precise: 'Precise & Considered',
        discover: 'Show Me What Suits Me'
      } [style] || style;
    }

    function getQueryParam(name) {
      const params = new URLSearchParams(window.location.search);
      return params.get(name);
    }

    function setSessionModeFromQuery() {
      const mode = getQueryParam('mode') || localStorage.getItem('archSessionMode') || 'try';
      const map = {
        try: 'Try a Brow Style',
        trace: 'Draw Your Tracing Guide',
        recommend: 'Get a Recommendation',
        photo: 'Photograph Your Brows'
      };
      const title = document.getElementById('session-mode');
      if (title) title.textContent = map[mode] || 'Try a Brow Style';
    }
    window.addEventListener('DOMContentLoaded', () => {
      setupPasswordToggles();
      setupSkinTones();
      setupStyleOptions();
      updateCheckInbox();
      updateCompleteSummary();
      updateProfileSummary();
      updateDashboard();
      setSessionModeFromQuery();
    });
  </script>
</body>

</html>