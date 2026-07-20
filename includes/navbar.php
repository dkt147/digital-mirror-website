<?php
include 'config.php';
$curr = basename($_SERVER['PHP_SELF']);
function navActive($name, $curr) {
  return $name === $curr ? 'class="active"' : '';
}
?>
<style>
  .navbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1rem 2.5rem;
    border-bottom: 1px solid rgba(201, 168, 76, 0.18);
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
  .nav-emblem {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background: radial-gradient(circle at 35% 35%, #2a2010, #1a1408);
    border: 1.5px solid #8a6f2e;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.3rem;
    font-style: italic;
    font-weight: 500;
    color: #c9a84c;
    box-shadow: 0 0 16px rgba(201, 168, 76, 0.12);
    flex-shrink: 0;
    overflow: hidden;
  }
  .nav-emblem img {
    width: 26px;
    height: 26px;
    object-fit: contain;
  }
  .navbar-nav {
    display: flex;
    align-items: center;
    gap: 2.5rem;
    list-style: none;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    margin: 0;
    padding: 0;
  }
  .navbar-nav a {
    font-size: 0.65rem;
    letter-spacing: 0.18em;
    text-transform: uppercase;
    color: rgba(245, 240, 232, 0.55);
    transition: color 0.3s ease;
    font-weight: 400;
    text-decoration: none;
  }
  .navbar-nav a:hover,
  .navbar-nav a.active {
    color: #c9a84c;
  }
  .navbar-actions {
    display: flex;
    align-items: center;
    gap: 1rem;
  }
  .nav-avatar {
    width: 42px;
    height: 42px;
    border-radius: 50%;
    overflow: hidden;
    border: 1.5px solid #8a6f2e;
    flex-shrink: 0;
  }
  .nav-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }
  .nav-avatar-fallback {
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #2a2010, #3a2e14);
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.1rem;
    color: #c9a84c;
  }
  .nav-gold-rule {
    height: 1px;
    background: linear-gradient(to right, transparent 0%, #8a6f2e 30%, #8a6f2e 70%, transparent 100%);
    opacity: 0.5;
  }
  @media (max-width: 900px) {
    .navbar {
      padding: 0.875rem 1.25rem;
    }
    .navbar-nav {
      display: none;
    }
  }
</style>
<!-- Shared navbar include -->
<nav class="navbar fade-1">
  <div class="navbar-left">
    <!-- LOGO left par -->
    <div class="nav-emblem">
      <img src="assets/logo.png" alt="Arch"
        onerror="this.style.display='none'; this.parentElement.innerHTML='<span style=\'font-family:var(--font-display);font-style:italic;font-size:1.3rem;color:var(--gold);\'>G</span>'" />
    </div>
  </div>

  <ul class="navbar-nav">
    <li><a href="dashboard.php" <?php echo navActive('dashboard.php', $curr); ?>>Home</a></li>
    <li><a href="my-looks.php" <?php echo navActive('my-looks.php', $curr); ?>>Try-On</a></li>
    <li><a href="shop.php" <?php echo navActive('shop.php', $curr); ?>>Shop</a></li>
    <li><a href="profile.php" <?php echo navActive('profile.php', $curr); ?>>Profile</a></li>
  </ul>

  <div class="navbar-actions" style="display:flex;align-items:center;gap:1rem;">

    <!-- AVATAR right par -->
    <div class="nav-avatar">
      <img src="assets/profile.png" alt="Profile"
        onerror="this.outerHTML='<div class=\'nav-avatar-fallback\'>M</div>'" />
    </div>
  </div>
</nav>
<div class="nav-gold-rule"></div>