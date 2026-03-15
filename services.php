<?php
define('BASE_PATH', __DIR__);
define('BASE_URL', '');
$current_page = 'services';
$page_title   = 'Services – Astrl Mind Technologies';
$page_desc    = 'Explore all services offered by Astrl Mind Technologies — technology, operations, product, finance, sales, learning and content services.';
include 'includes/header.php';
?>

<section class="page-hero">
  <div class="container" style="position:relative;z-index:1;">
    <div class="breadcrumb"><a href="index.php">Home</a><span>/</span><span>Services</span></div>
    <span class="badge badge-accent">⚡ What We Offer</span>
    <h1 class="mt-2">Our <span class="gradient-text">Services</span></h1>
    <p class="lead mt-2">Seven powerful divisions. One unified partner. Delivering technology, talent and transformation at every scale.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="services-grid stagger">
      <?php
      $services = array(
        array('⚙️','Technology &amp; Platforms','CTO Division','Software engineering, DevOps, cloud infrastructure, IT security and R&amp;D — the engineering backbone of the digital enterprise.','pages/services/technology.php','#00c8ff','#7c3aed','rgba(0,200,255,0.12)'),
        array('🔄','Operations &amp; Delivery','COO Division','Project management, agile delivery, QA, service operations and customer support that ensure zero-friction execution.','pages/services/operations.php','#06d6a0','#00c8ff','rgba(6,214,160,0.12)'),
        array('🚀','Product &amp; Innovation','CPO Division','End-to-end product management, UI/UX design, product engineering and an innovation lab that shapes tomorrow.','pages/services/product.php','#f59e0b','#ef4444','rgba(245,158,11,0.12)'),
        array('📊','Finance &amp; Compliance','CFO Division','Financial planning, risk management, legal compliance and procurement excellence for sustainable enterprise governance.','pages/services/finance.php','#a855f7','#7c3aed','rgba(168,85,247,0.12)'),
        array('📈','Sales, Marketing &amp; Growth','CMO Division','Enterprise sales, digital marketing, brand strategy and strategic partnerships that multiply revenue and market reach.','pages/services/sales.php','#f59e0b','#06d6a0','rgba(245,158,11,0.12)'),
        array('🎓','Learning &amp; Talent Development','CLO Division','Train-to-hire, corporate upskilling, curriculum development and placement programs that build the talent of tomorrow.','pages/services/learning.php','#00c8ff','#06d6a0','rgba(0,200,255,0.12)'),
        array('🎬','Content &amp; Media Services','CCO Division','Content strategy, production, creative design, video and multichannel distribution that commands attention.','pages/services/content.php','#ef4444','#f59e0b','rgba(239,68,68,0.12)'),
      );
      foreach($services as $s){ ?>
      <a href="<?php echo $s[4]; ?>" class="service-card" style="--c1:<?php echo $s[5]; ?>;--c2:<?php echo $s[6]; ?>;">
        <div style="display:flex;align-items:center;gap:12px;margin-bottom:18px;">
          <div class="service-icon" style="background:<?php echo $s[7]; ?>;color:<?php echo $s[5]; ?>;margin-bottom:0;"><?php echo $s[0]; ?></div>
          <span class="badge" style="color:<?php echo $s[5]; ?>;background:<?php echo $s[7]; ?>;border-color:<?php echo $s[5]; ?>;font-size:0.7rem;"><?php echo $s[2]; ?></span>
        </div>
        <h3><?php echo $s[1]; ?></h3>
        <p><?php echo $s[3]; ?></p>
        <div class="arrow">Explore Division <span>→</span></div>
      </a>
      <?php } ?>
    </div>
  </div>
</section>

<div class="divider"></div>

<section class="section">
  <div class="container reveal">
    <div class="cta-banner">
      <h2>Not Sure Where to <span class="gradient-text">Start</span>?</h2>
      <p>Our consulting team will assess your needs and recommend the right combination of services for your goals.</p>
      <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
        <a href="consulting.php" class="btn btn-primary">Free Consultation →</a>
        <a href="contact.php"   class="btn btn-outline">Contact Us</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
