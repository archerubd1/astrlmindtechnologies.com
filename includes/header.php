<?php
/* ============================================================
   ASTRL MIND TECHNOLOGIES — Header Include
   Compatible: PHP 5.x
   ============================================================ */
if (!defined('BASE_PATH')) { define('BASE_PATH', dirname(__DIR__)); }
if (!defined('BASE_URL'))  { define('BASE_URL', ''); }

$current_page = isset($current_page) ? $current_page : '';
$page_title   = isset($page_title)   ? $page_title   : 'Astrl Mind Technologies – Future-Forward Technology & Innovation';
$page_desc    = isset($page_desc)    ? $page_desc    : 'Astrl Mind Technologies delivers cutting-edge software, AI, product innovation, corporate learning, content services and digital transformation solutions.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo htmlspecialchars($page_title); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
<meta name="keywords" content="Astrl Mind Technologies, technology consulting, software development, AI solutions, digital transformation, corporate training, content services, product innovation">
<meta name="robots" content="index, follow">
<meta name="author" content="Astrl Mind Technologies">

<!-- Open Graph -->
<meta property="og:type"        content="website">
<meta property="og:title"       content="<?php echo htmlspecialchars($page_title); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($page_desc); ?>">
<meta property="og:url"         content="https://astrlmind.com/">
<meta property="og:image"       content="<?php echo BASE_URL; ?>assets/images/og-image.jpg">

<!-- Twitter Card -->
<meta name="twitter:card"        content="summary_large_image">
<meta name="twitter:title"       content="<?php echo htmlspecialchars($page_title); ?>">
<meta name="twitter:description" content="<?php echo htmlspecialchars($page_desc); ?>">

<!-- Favicon -->
<link rel="icon" type="image/svg+xml" href="<?php echo BASE_URL; ?>assets/images/favicon.svg">
<link rel="shortcut icon" href="<?php echo BASE_URL; ?>assets/images/favicon.svg">

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

<!-- CSS -->
<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/animations.css">

<style>
  body { font-family: 'Inter', 'Segoe UI', system-ui, sans-serif; }
</style>
</head>
<body>

<!-- Particle Background -->
<canvas id="particles-canvas"></canvas>

<!-- ====== NAVBAR ====== -->
<nav class="navbar" id="navbar">
  <div class="container" style="display:flex;align-items:center;justify-content:space-between;width:100%;max-width:100%;padding:0;">
    <a href="<?php echo BASE_URL; ?>index.php" class="nav-logo">
      <div class="nav-logo-icon">AM</div>
      <div class="nav-logo-text">
        <span class="nav-logo-name">Astrl Mind</span>
        <span class="nav-logo-tagline">Technologies</span>
      </div>
    </a>

    <ul class="nav-links">
      <li><a href="<?php echo BASE_URL; ?>index.php" class="<?php echo $current_page=='home'?'active':''; ?>">Home</a></li>
      <li><a href="<?php echo BASE_URL; ?>about.php" class="<?php echo $current_page=='about'?'active':''; ?>">About</a></li>

      <li class="nav-dropdown">
        <a href="<?php echo BASE_URL; ?>services.php" class="<?php echo $current_page=='services'?'active':''; ?>">Services</a>
        <div class="dropdown-menu">
          <a href="<?php echo BASE_URL; ?>pages/services/technology.php"><span class="dm-icon">⚙️</span>Technology &amp; Platforms</a>
          <a href="<?php echo BASE_URL; ?>pages/services/operations.php"><span class="dm-icon">🔄</span>Operations &amp; Delivery</a>
          <a href="<?php echo BASE_URL; ?>pages/services/product.php"><span class="dm-icon">🚀</span>Product &amp; Innovation</a>
          <a href="<?php echo BASE_URL; ?>pages/services/finance.php"><span class="dm-icon">📊</span>Finance &amp; Compliance</a>
          <a href="<?php echo BASE_URL; ?>pages/services/sales.php"><span class="dm-icon">📈</span>Sales &amp; Marketing</a>
          <a href="<?php echo BASE_URL; ?>pages/services/learning.php"><span class="dm-icon">🎓</span>Learning &amp; Talent</a>
          <a href="<?php echo BASE_URL; ?>pages/services/content.php"><span class="dm-icon">🎬</span>Content &amp; Media</a>
        </div>
      </li>

      <li><a href="<?php echo BASE_URL; ?>leadership.php" class="<?php echo $current_page=='leadership'?'active':''; ?>">Leadership</a></li>
      <li><a href="<?php echo BASE_URL; ?>consulting.php" class="<?php echo $current_page=='consulting'?'active':''; ?>">Consulting</a></li>
      <li><a href="<?php echo BASE_URL; ?>careers.php" class="<?php echo $current_page=='careers'?'active':''; ?>">Careers</a></li>
      <li><a href="<?php echo BASE_URL; ?>contact.php" class="<?php echo $current_page=='contact'?'active':''; ?>">Contact</a></li>
    </ul>

    <div class="nav-cta">
      <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-primary" style="padding:9px 22px;font-size:0.875rem;">Get Started</a>
    </div>

    <button class="hamburger" id="hamburger" aria-label="Toggle menu">
      <span></span><span></span><span></span>
    </button>
  </div>
</nav>

<!-- Mobile Menu -->
<div class="mobile-menu" id="mobile-menu">
  <a href="<?php echo BASE_URL; ?>index.php">🏠 Home</a>
  <a href="<?php echo BASE_URL; ?>about.php">🏢 About Us</a>
  <a href="<?php echo BASE_URL; ?>services.php">⚡ All Services</a>
  <a href="<?php echo BASE_URL; ?>pages/services/technology.php" style="padding-left:28px;font-size:0.9rem;">⚙️ Technology &amp; Platforms</a>
  <a href="<?php echo BASE_URL; ?>pages/services/operations.php" style="padding-left:28px;font-size:0.9rem;">🔄 Operations &amp; Delivery</a>
  <a href="<?php echo BASE_URL; ?>pages/services/product.php" style="padding-left:28px;font-size:0.9rem;">🚀 Product &amp; Innovation</a>
  <a href="<?php echo BASE_URL; ?>pages/services/finance.php" style="padding-left:28px;font-size:0.9rem;">📊 Finance &amp; Compliance</a>
  <a href="<?php echo BASE_URL; ?>pages/services/sales.php" style="padding-left:28px;font-size:0.9rem;">📈 Sales &amp; Marketing</a>
  <a href="<?php echo BASE_URL; ?>pages/services/learning.php" style="padding-left:28px;font-size:0.9rem;">🎓 Learning &amp; Talent</a>
  <a href="<?php echo BASE_URL; ?>pages/services/content.php" style="padding-left:28px;font-size:0.9rem;">🎬 Content &amp; Media</a>
  <a href="<?php echo BASE_URL; ?>leadership.php">👥 Leadership</a>
  <a href="<?php echo BASE_URL; ?>consulting.php">💼 Consulting</a>
  <a href="<?php echo BASE_URL; ?>careers.php">🌟 Careers</a>
  <a href="<?php echo BASE_URL; ?>contact.php">📩 Contact Us</a>
  <div style="padding:16px 0;">
    <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-primary" style="width:100%;justify-content:center;">Get Started →</a>
  </div>
</div>
