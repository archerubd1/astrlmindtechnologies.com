<?php
/* ================================================================
   ASTRL MIND TECHNOLOGIES PVT LTD — Header Include  PHP 5.x
   ================================================================ */
if (!defined('BASE_URL')) define('BASE_URL', '');
if (!defined('ROOT'))     define('ROOT', dirname(__FILE__) . '/..');
$page_title = isset($page_title) ? $page_title : 'Astrl Mind Technologies Pvt Ltd';
$page_desc  = isset($page_desc)  ? $page_desc  : 'Astrl Mind Technologies Pvt Ltd — Engineering intelligent digital platforms. AI, Cloud, Enterprise Software and Digital Transformation solutions for the future.';
$page_kw    = isset($page_kw)    ? $page_kw    : 'Astrl Mind Technologies, AI solutions, cloud engineering, enterprise software, digital transformation';
$active     = isset($active)     ? $active     : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo htmlspecialchars($page_title); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
<meta name="keywords"    content="<?php echo htmlspecialchars($page_kw); ?>">
<meta name="author"      content="Astrl Mind Technologies Pvt Ltd">
<meta name="robots"      content="index, follow">
<meta property="og:type"        content="website">
<meta property="og:title"       content="<?php echo htmlspecialchars($page_title); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($page_desc); ?>">
<meta property="og:url"         content="https://astrlmind.com/">
<meta name="twitter:card"        content="summary_large_image">
<meta name="twitter:title"       content="<?php echo htmlspecialchars($page_title); ?>">
<meta name="twitter:description" content="<?php echo htmlspecialchars($page_desc); ?>">
<link rel="icon" type="image/svg+xml" href="<?php echo BASE_URL; ?>assets/images/favicon.svg">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
</head>
<body>

<canvas id="bg-canvas"></canvas>

<!-- ====== NAVBAR ====== -->
<nav class="navbar" id="main-nav">
  <a href="<?php echo BASE_URL; ?>index.php" class="nav-brand">
    <div class="nav-logo-mark">AM</div>
    <div class="nav-brand-name">
      <span class="name">Astrl Mind Technologies</span>
      <span class="pvt">Private Limited</span>
    </div>
  </a>

  <ul class="nav-links">
    <li><a href="<?php echo BASE_URL; ?>index.php"      class="<?php echo ($active=='home')       ?'active':''; ?>">Home</a></li>
    <li><a href="<?php echo BASE_URL; ?>about.php"      class="<?php echo ($active=='about')      ?'active':''; ?>">About</a></li>
    <li class="has-drop">
      <a href="<?php echo BASE_URL; ?>products.php"     class="<?php echo ($active=='products')   ?'active':''; ?>">Products</a>
      <div class="nav-drop">
        <a href="<?php echo BASE_URL; ?>pages/products/ai-studio.php"><span>&#129302;</span> Astrl AI Studio</a>
        <a href="<?php echo BASE_URL; ?>pages/products/workflow.php"><span>&#128260;</span> Astrl Workflow</a>
        <a href="<?php echo BASE_URL; ?>pages/products/analytics.php"><span>&#128202;</span> Astrl Analytics</a>
        <a href="<?php echo BASE_URL; ?>pages/products/cloudops.php"><span>&#9729;</span> Astrl CloudOps</a>
      </div>
    </li>
    <li class="has-drop">
      <a href="<?php echo BASE_URL; ?>services.php"     class="<?php echo ($active=='services')   ?'active':''; ?>">Services</a>
      <div class="nav-drop">
        <a href="<?php echo BASE_URL; ?>services.php#custom-dev"><span>&#128187;</span> Custom Software Dev</a>
        <a href="<?php echo BASE_URL; ?>services.php#cloud"><span>&#9729;</span> Cloud Engineering</a>
        <a href="<?php echo BASE_URL; ?>services.php#data"><span>&#128451;</span> Data Engineering</a>
        <a href="<?php echo BASE_URL; ?>services.php#ai"><span>&#129302;</span> AI Solutions</a>
      </div>
    </li>
    <li><a href="<?php echo BASE_URL; ?>consulting.php" class="<?php echo ($active=='consulting') ?'active':''; ?>">Consulting</a></li>
    <li class="has-drop">
      <a href="<?php echo BASE_URL; ?>industries.php"   class="<?php echo ($active=='industries') ?'active':''; ?>">Industries</a>
      <div class="nav-drop">
        <a href="<?php echo BASE_URL; ?>industries.php#banking"><span>&#127970;</span> Banking &amp; Finance</a>
        <a href="<?php echo BASE_URL; ?>industries.php#healthcare"><span>&#127973;</span> Healthcare</a>
        <a href="<?php echo BASE_URL; ?>industries.php#manufacturing"><span>&#127981;</span> Manufacturing</a>
        <a href="<?php echo BASE_URL; ?>industries.php#retail"><span>&#128717;</span> Retail &amp; E-Commerce</a>
        <a href="<?php echo BASE_URL; ?>industries.php#startups"><span>&#128640;</span> Tech Startups</a>
        <a href="<?php echo BASE_URL; ?>industries.php#government"><span>&#127963;</span> Government</a>
      </div>
    </li>
    <li><a href="<?php echo BASE_URL; ?>insights.php"   class="<?php echo ($active=='insights')   ?'active':''; ?>">Insights</a></li>
    <li><a href="<?php echo BASE_URL; ?>careers.php"    class="<?php echo ($active=='careers')    ?'active':''; ?>">Careers</a></li>
  </ul>

  <div class="nav-actions">
    <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-primary btn-sm">Talk to Experts</a>
  </div>

  <button class="hamburger" id="hamburger" aria-label="Toggle menu">
    <span></span><span></span><span></span>
  </button>
</nav>

<!-- MOBILE NAV -->
<nav class="mobile-nav" id="mobile-nav">
  <a href="<?php echo BASE_URL; ?>index.php">&#127968; &nbsp;Home</a>
  <a href="<?php echo BASE_URL; ?>about.php">&#127970; &nbsp;About Us</a>
  <a href="<?php echo BASE_URL; ?>products.php" style="font-weight:700;color:var(--blue-bright);">&#128230; &nbsp;Products</a>
  <a href="<?php echo BASE_URL; ?>pages/products/ai-studio.php" style="padding-left:32px;font-size:0.9rem;">&#129302; &nbsp;Astrl AI Studio</a>
  <a href="<?php echo BASE_URL; ?>pages/products/workflow.php"  style="padding-left:32px;font-size:0.9rem;">&#128260; &nbsp;Astrl Workflow</a>
  <a href="<?php echo BASE_URL; ?>pages/products/analytics.php" style="padding-left:32px;font-size:0.9rem;">&#128202; &nbsp;Astrl Analytics</a>
  <a href="<?php echo BASE_URL; ?>pages/products/cloudops.php"  style="padding-left:32px;font-size:0.9rem;">&#9729; &nbsp;Astrl CloudOps</a>
  <a href="<?php echo BASE_URL; ?>services.php"    style="font-weight:700;color:var(--blue-bright);">&#9889; &nbsp;Services</a>
  <a href="<?php echo BASE_URL; ?>consulting.php">&#128188; &nbsp;Consulting</a>
  <a href="<?php echo BASE_URL; ?>industries.php">&#127758; &nbsp;Industries</a>
  <a href="<?php echo BASE_URL; ?>insights.php">&#128240; &nbsp;Insights</a>
  <a href="<?php echo BASE_URL; ?>careers.php">&#127775; &nbsp;Careers</a>
  <a href="<?php echo BASE_URL; ?>contact.php">&#128233; &nbsp;Contact</a>
  <div class="mob-cta">
    <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-primary" style="width:100%;justify-content:center;">Talk to Our Experts &rarr;</a>
  </div>
</nav>
