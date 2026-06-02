<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arch Landing</title>

  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Montserrat:wght@300;400;500&display=swap"
    rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    :root {
      --gold: #c9a84c;
    }

    body {
      background: #000;
      color: #fff;
      font-family: 'Montserrat', sans-serif;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 60px 20px;
    }

    /* MAIN CARD */
    .landing-container {
      width: 100%;
      max-width: 1100px;
      min-height: 750px;

      border: 1px solid rgba(201, 168, 76, .25);
      border-radius: 42px;

      padding: 90px 80px;
      position: relative;

      background: linear-gradient(180deg,
          rgba(255, 255, 255, 0.02),
          rgba(255, 255, 255, 0.00));
    }

    /* LOGO */
    .logo {
      width: 70px;
      display: block;
      margin: 0 auto 10px;
    }

    /* WELCOME */
    .welcome-text {
      text-align: center;
      color: var(--gold);
      font-size: 12px;
      letter-spacing: 3px;
      text-transform: uppercase;
      margin-bottom: 25px;
    }

    /* TAGLINE */
    .tagline {
      text-align: center;
      font-family: 'Cormorant Garamond', serif;
      font-style: italic;
      font-size: 72px;
      line-height: 1.05;
      margin-bottom: 70px;
    }

    /* BUTTON WRAPPER */
    .buttons-wrapper {
      max-width: 650px;
      margin: 0 auto;
    }

    /* BUTTON */
    .path-btn {
      display: flex;
      justify-content: space-between;
      align-items: center;

      padding: 26px 30px;
      border-radius: 26px;

      text-decoration: none;
      margin-bottom: 18px;

      border: 1px solid rgba(255, 255, 255, .08);
      background: #080808;

      transition: .3s ease;
    }

    .path-btn:hover {
      border: 1px solid var(--gold);
      background: rgba(201, 168, 76, .10);
      transform: translateY(-3px);
    }

    .path-btn:hover .btn-title,
    .path-btn:hover .btn-subtitle {
      color: var(--gold);
    }

    /* LEFT TEXT */
    .btn-left {
      text-align: left;
    }

    .btn-title {
      font-family: 'Cormorant Garamond', serif;
      font-size: 34px;
      font-weight: 400;
      color: #fff;
      margin-bottom: 4px;
    }

    .btn-subtitle {
      font-size: 14px;
      font-style: italic;
      color: rgba(255, 255, 255, .6);
    }

    /* ARROW */
    .arrow-circle {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      border: 1px solid var(--gold);

      display: flex;
      justify-content: center;
      align-items: center;

      color: var(--gold);
      flex-shrink: 0;
    }

    /* GUEST LINK */
    .guest-link {
      position: absolute;
      bottom: 35px;
      left: 50%;
      transform: translateX(-50%);

      color: var(--gold);
      text-decoration: none;
      font-size: 15px;
    }

    .guest-link:hover {
      opacity: .7;
    }

    /* RESPONSIVE */
    @media(max-width:768px) {

      .landing-container {
        padding: 50px 25px;
        border-radius: 30px;
      }

      .tagline {
        font-size: 44px;
      }

      .btn-title {
        font-size: 26px;
      }

      .arrow-circle {
        width: 50px;
        height: 50px;
      }
    }

    @media(max-width:480px) {

      .tagline {
        font-size: 38px;
      }

      .landing-container {
        padding: 40px 20px;
      }
    }
  </style>
</head>

<body>

  <div class="landing-container">

    <!-- LOGO -->
    <img src="assets/logo.png" class="logo" alt="logo">

    <!-- TEXT -->
    <div class="welcome-text">
      Welcome To Arch
    </div>

    <!-- TAGLINE -->
    <div class="tagline">
      Two paths.<br>
      One destination.
    </div>

    <!-- BUTTONS -->
    <div class="buttons-wrapper">
      <a href="signup.php" class="path-btn">
        <div class="btn-left">
          <div class="btn-title">I'm new here</div>
          <div class="btn-subtitle">Create your account</div>
        </div>
        <div class="arrow-circle">
          →
        </div>
      </a>

      <a href="login.php" class="path-btn">
        <div class="btn-left">
          <div class="btn-title">Welcome back</div>
          <div class="btn-subtitle">Sign in to continue</div>
        </div>
        <div class="arrow-circle">
          →
        </div>
      </a>
    </div>

    <!-- GUEST -->
    <a href="onboarding-profile.php" class="guest-link">
      Continue as guest
    </a>
  </div>

</body>

</html>