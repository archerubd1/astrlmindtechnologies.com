<?php
define('BASE_PATH', dirname(dirname(__DIR__)));
define('BASE_URL', '../../');
$current_page = 'services';
$page_title   = 'Content & Media Services – Astrl Mind Technologies';
$page_desc    = 'CCO Division: Content strategy, production, creative design, video/multimedia and distribution that amplifies brand voice across every channel.';
include BASE_PATH . '/includes/header.php';
?>

<section class="page-hero">
  <div class="container" style="position:relative;z-index:1;">
    <div class="breadcrumb"><a href="<?php echo BASE_URL; ?>index.php">Home</a><span>/</span><a href="<?php echo BASE_URL; ?>services.php">Services</a><span>/</span><span>Content &amp; Media</span></div>
    <span class="badge" style="color:#ef4444;background:rgba(239,68,68,0.1);border-color:#ef4444;">🎬 CCO Division</span>
    <h1 class="mt-2">Content &amp; <span class="gradient-text">Media Services</span></h1>
    <p class="lead mt-2">Storytelling that captivates, content that converts and media that moves — the creative powerhouse behind your brand.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="reveal">
        <span class="badge" style="color:#ef4444;background:rgba(239,68,68,0.1);border-color:#ef4444;">🎨 Our Approach</span>
        <h2 class="section-title mt-2">Content That <span class="gradient-text">Commands Attention</span></h2>
        <p style="color:var(--text-muted);margin-top:16px;line-height:1.9;">Our CCO division is the creative engine of Astrl Mind — producing compelling content, stunning visuals and powerful multimedia that amplifies brand presence, drives audience engagement and supports business growth.</p>
        <p style="color:var(--text-muted);margin-top:14px;line-height:1.9;">From long-form thought leadership to viral short-form videos, from brand identity design to SEO-optimised blog content — we create, produce and distribute content that makes our clients the authoritative voice in their space.</p>
        <div class="tag-list">
          <span class="tag">Content Strategy</span><span class="tag">SEO Content</span><span class="tag">Video Production</span>
          <span class="tag">Brand Design</span><span class="tag">Motion Graphics</span><span class="tag">Podcasts</span>
          <span class="tag">Social Media</span><span class="tag">Infographics</span>
        </div>
      </div>
      <div class="reveal">
        <div class="card" style="background:linear-gradient(135deg,rgba(239,68,68,0.06),rgba(245,158,11,0.06));">
          <h4 style="font-size:1.2rem;margin-bottom:20px;color:#ef4444;">Content Division Impact</h4>
          <?php $stats = array(array('1000+','Content Pieces Created'),array('5M+','Content Views Delivered'),array('85%','Engagement Rate Increase'),array('40+','Brand Identities Crafted')); foreach($stats as $s){ ?>
          <div style="display:flex;justify-content:space-between;align-items:center;padding:12px 0;border-bottom:1px solid var(--border);">
            <span style="color:var(--text-muted);font-size:0.9rem;"><?php echo $s[1]; ?></span>
            <span style="color:#ef4444;font-weight:800;font-size:1.1rem;"><?php echo $s[0]; ?></span>
          </div>
          <?php } ?>
          <div class="mt-3"><a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-primary" style="width:100%;justify-content:center;">Amplify Your Brand →</a></div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="divider"></div>

<section class="section">
  <div class="container">
    <div class="text-center mb-4 reveal">
      <span class="badge" style="color:#ef4444;background:rgba(239,68,68,0.1);border-color:#ef4444;">🏗️ Sub-Departments</span>
      <h2 class="section-title mt-2">Five Pillars of <span class="gradient-text">Creative Excellence</span></h2>
    </div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:24px;" class="stagger">
      <?php
      $subs = array(
        array('🗺️','Content Strategy',
          'Data-driven content planning and architecture that aligns brand objectives with audience needs.',
          array('Content audit &amp; gap analysis','Editorial calendar planning','SEO content strategy','Audience persona development','Content ROI measurement')),
        array('✍️','Content Production',
          'High-quality written content — from engaging blogs to authoritative whitepapers and case studies.',
          array('Blog posts &amp; articles','Whitepapers &amp; e-books','Case studies &amp; success stories','Website copywriting','Technical documentation')),
        array('🎨','Creative Design',
          'Visually stunning graphics and design that communicate your brand\'s essence with clarity and impact.',
          array('Brand identity &amp; logo design','Social media creatives','Marketing collateral','Infographics &amp; data visualisation','UI design assets')),
        array('🎥','Video &amp; Multimedia Production',
          'End-to-end video production and multimedia creation that brings stories to life.',
          array('Corporate &amp; brand videos','Product explainer animations','Testimonial &amp; case study videos','Podcast production','Live streaming &amp; webinars')),
        array('📢','Content Marketing &amp; Distribution',
          'Strategic content distribution ensuring your message reaches the right audience at the right time.',
          array('Multichannel distribution strategy','Social media amplification','Influencer &amp; creator partnerships','Content syndication','Performance analytics &amp; reporting')),
      );
      foreach($subs as $s){ ?>
      <div class="card">
        <div style="font-size:2rem;margin-bottom:14px;"><?php echo $s[0]; ?></div>
        <h3 style="font-size:1.1rem;margin-bottom:8px;"><?php echo $s[1]; ?></h3>
        <p style="font-size:0.87rem;color:var(--text-muted);margin-bottom:16px;"><?php echo $s[2]; ?></p>
        <ul style="list-style:none;padding:0;">
          <?php foreach($s[3] as $item){ ?>
          <li style="display:flex;align-items:center;gap:8px;padding:5px 0;font-size:0.82rem;color:var(--text-muted);">
            <span style="color:#ef4444;font-size:0.7rem;">✦</span><?php echo $item; ?>
          </li>
          <?php } ?>
        </ul>
      </div>
      <?php } ?>
    </div>
  </div>
</section>

<div class="divider"></div>

<section class="section">
  <div class="container reveal">
    <div class="cta-banner">
      <h2>Tell Your Story with <span class="gradient-text">Power &amp; Precision</span></h2>
      <p>Let our creative team build a content ecosystem that makes your brand impossible to ignore.</p>
      <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
        <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-primary">Start Your Content Journey →</a>
        <a href="<?php echo BASE_URL; ?>consulting.php" class="btn btn-outline">Content Strategy Consulting</a>
      </div>
    </div>
  </div>
</section>

<?php include BASE_PATH . '/includes/footer.php'; ?>
