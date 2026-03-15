<?php
define('BASE_URL', '');
$active     = '';
$page_title = '404 – Page Not Found | Astrl Mind Technologies Pvt Ltd';
$page_desc  = 'Page not found. Return to Astrl Mind Technologies homepage.';
include 'includes/header.php';
?>

<section class="hero" style="min-height:80vh;">
  <div class="hero-bg"></div>
  <div class="hero-grid-lines"></div>
  <div class="container" style="text-align:center;">
    <div class="hero-content" style="max-width:100%;text-align:center;">
      <div style="font-size:8rem;font-weight:900;font-family:var(--font-head);background:var(--grad-hero);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;line-height:1;margin-bottom:16px;">404</div>
      <div class="badge badge-blue" style="margin-bottom:20px;justify-content:center;">&#128683; Page Not Found</div>
      <h1 style="font-size:clamp(1.8rem,4vw,2.8rem);margin-bottom:16px;">Looks Like You&rsquo;ve <span class="grad-text">Wandered Off the Map</span></h1>
      <p class="lead" style="max-width:480px;margin:0 auto 40px;">The page you are looking for does not exist or may have been moved. Let us get you back on track.</p>
      <div class="gap-row" style="justify-content:center;">
        <a href="index.php" class="btn btn-primary btn-lg">&#127968; Back to Home</a>
        <a href="contact.php" class="btn btn-secondary btn-lg">Contact Us</a>
      </div>
      <div style="margin-top:48px;">
        <p style="font-size:0.85rem;color:var(--text-muted);margin-bottom:16px;">Or explore these popular pages:</p>
        <div style="display:flex;gap:10px;flex-wrap:wrap;justify-content:center;">
          <?php foreach(array(array('products.php','Products'),array('services.php','Services'),array('consulting.php','Consulting'),array('industries.php','Industries'),array('case-studies.php','Case Studies'),array('careers.php','Careers')) as $l){ ?>
          <a href="<?php echo $l[0]; ?>" class="btn btn-ghost btn-sm"><?php echo $l[1]; ?></a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
