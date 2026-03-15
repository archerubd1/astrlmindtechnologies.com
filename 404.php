<?php
define('BASE_PATH', __DIR__);
define('BASE_URL', '');
$current_page = '404';
$page_title   = '404 – Page Not Found | Astrl Mind Technologies';
$page_desc    = 'The page you are looking for could not be found.';
include 'includes/header.php';
?>

<section class="hero" style="min-height:80vh;">
  <div class="hero-bg"></div>
  <div class="hero-grid"></div>
  <div class="container" style="position:relative;z-index:1;text-align:center;">
    <div style="font-size:8rem;font-weight:900;line-height:1;background:linear-gradient(135deg,var(--accent),var(--accent2));-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">404</div>
    <h1 style="font-size:2rem;margin-bottom:16px;">Page Not Found</h1>
    <p style="color:var(--text-muted);max-width:460px;margin:0 auto 36px;line-height:1.8;">The page you're looking for doesn't exist or has been moved. Let's get you back on track.</p>
    <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
      <a href="index.php"    class="btn btn-primary">← Back to Home</a>
      <a href="services.php" class="btn btn-outline">View Services</a>
      <a href="contact.php"  class="btn btn-ghost">Contact Us</a>
    </div>
    <div style="margin-top:60px;display:flex;gap:24px;justify-content:center;flex-wrap:wrap;">
      <?php
      $quick = array(
        array('⚙️','Technology','pages/services/technology.php'),
        array('🚀','Product','pages/services/product.php'),
        array('🎓','Learning','pages/services/learning.php'),
        array('💼','Consulting','consulting.php'),
        array('👥','Leadership','leadership.php'),
      );
      foreach($quick as $q){ ?>
      <a href="<?php echo $q[2]; ?>" style="padding:12px 20px;background:var(--card-bg);border:1px solid var(--border);border-radius:10px;color:var(--text-muted);font-size:0.87rem;transition:all 0.3s;" onmouseover="this.style.borderColor='var(--accent)';this.style.color='#fff';" onmouseout="this.style.borderColor='var(--border)';this.style.color='var(--text-muted)';"><?php echo $q[0]; ?> <?php echo $q[1]; ?></a>
      <?php } ?>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
