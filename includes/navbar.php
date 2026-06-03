<?php
$curr = basename($_SERVER['PHP_SELF']);
function navActive($name, $curr) {
  return $name === $curr ? 'class="active"' : '';
}
?>
<!-- Shared navbar include -->
<nav class="navbar fade-1">
  <div class="navbar-left">
    <div class="nav-avatar">
      <img src="assets/profile.png" alt="Profile"
        onerror="this.outerHTML='<div class=\'nav-avatar-fallback\'>M</div>'" />
    </div>
  </div>

  <ul class="navbar-nav">
    <li><a href="dashboard.php" <?php echo navActive('dashboard.php', $curr); ?>>Home</a></li>
    <li><a href="arch-session.php" <?php echo navActive('arch-session.php', $curr); ?>>Try-On</a></li>
    <li><a href="shop.php" <?php echo navActive('shop.php', $curr); ?>>Shop</a></li>
    <li><a href="profile.php" <?php echo navActive('profile.php', $curr); ?>>Profile</a></li>
  </ul>

  <div class="navbar-actions" style="display:flex;align-items:center;gap:1rem;">
    <?php if ($curr === 'profile.php') : ?>
      <button class="btn-nav btn-nav-outline" onclick="goBack('index.php')">Sign Out</button>
    <?php else : ?>
      <button class="btn-book" onclick="showToast('Booking coming soon')">Book Appointment</button>
    <?php endif; ?>

    <div class="nav-emblem">
      <img src="assets/logo.png" alt="Arch"
        onerror="this.style.display='none'; this.parentElement.innerHTML='<span style=\'font-family:var(--font-display);font-style:italic;font-size:1.3rem;color:var(--gold);\'>G</span>'" />
    </div>
  </div>
</nav>
<div class="nav-gold-rule"></div>
