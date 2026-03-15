<?php
define('BASE_PATH', dirname(dirname(__DIR__)));
define('BASE_URL', '../../');
$current_page = 'services';
$page_title   = 'Sales, Marketing & Partnerships – Astrl Mind Technologies';
$page_desc    = 'CMO Division: Enterprise sales, business development, digital marketing, brand strategy and strategic partnerships that accelerate growth.';
include BASE_PATH . '/includes/header.php';
?>

<section class="page-hero">
  <div class="container" style="position:relative;z-index:1;">
    <div class="breadcrumb"><a href="<?php echo BASE_URL; ?>index.php">Home</a><span>/</span><a href="<?php echo BASE_URL; ?>services.php">Services</a><span>/</span><span>Sales &amp; Marketing</span></div>
    <span class="badge badge-gold">📈 CMO Division</span>
    <h1 class="mt-2">Sales, Marketing &amp; <span class="gradient-text">Partnerships</span></h1>
    <p class="lead mt-2">The growth engine of Astrl Mind — driving revenue, brand equity and strategic alliances that multiply our market reach.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="reveal">
        <span class="badge badge-gold">🚀 Our Approach</span>
        <h2 class="section-title mt-2">Growth That is <span class="gradient-text">By Design</span></h2>
        <p style="color:var(--text-muted);margin-top:16px;line-height:1.9;">Our CMO division combines enterprise sales acumen with data-driven digital marketing and a powerful partnership network to ensure Astrl Mind — and our clients — win in every target market.</p>
        <p style="color:var(--text-muted);margin-top:14px;line-height:1.9;">We don't just generate leads — we build pipelines, accelerate conversions and forge lasting strategic relationships that create sustainable, compounding revenue growth.</p>
        <div class="tag-list">
          <span class="tag">Account-Based Marketing</span><span class="tag">Inbound Marketing</span><span class="tag">Enterprise Sales</span>
          <span class="tag">SEO / SEM</span><span class="tag">Brand Strategy</span><span class="tag">CRM</span>
          <span class="tag">Partner Ecosystem</span><span class="tag">Growth Hacking</span>
        </div>
      </div>
      <div class="reveal">
        <div class="card" style="background:linear-gradient(135deg,rgba(245,158,11,0.06),rgba(6,214,160,0.06));">
          <h4 style="font-size:1.2rem;margin-bottom:20px;color:var(--gold);">Growth Metrics</h4>
          <?php $stats = array(array('3x','Average Pipeline Growth'),array('65%','Lead-to-Deal Conversion'),array('40+','Strategic Partners'),array('200+','Enterprise Clients Reached')); foreach($stats as $s){ ?>
          <div style="display:flex;justify-content:space-between;align-items:center;padding:12px 0;border-bottom:1px solid var(--border);">
            <span style="color:var(--text-muted);font-size:0.9rem;"><?php echo $s[1]; ?></span>
            <span style="color:var(--gold);font-weight:800;font-size:1.1rem;"><?php echo $s[0]; ?></span>
          </div>
          <?php } ?>
          <div class="mt-3"><a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-primary" style="width:100%;justify-content:center;">Grow With Us →</a></div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="divider"></div>

<section class="section">
  <div class="container">
    <div class="text-center mb-4 reveal">
      <span class="badge badge-gold">📊 Sub-Departments</span>
      <h2 class="section-title mt-2">Five Pillars of <span class="gradient-text">Growth Excellence</span></h2>
    </div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:24px;" class="stagger">
      <?php
      $subs = array(
        array('💼','Enterprise Sales',
          'Consultative, relationship-driven enterprise sales that close complex deals and build lasting accounts.',
          array('Account-based selling (ABS)','Enterprise deal structuring','RFP response &amp; bid management','Sales engineering support','Key account management')),
        array('🌱','Business Development',
          'Identifying and capturing new growth opportunities — new markets, verticals and revenue streams.',
          array('Market expansion strategy','New vertical identification','Partnership pipeline development','Strategic opportunity qualification','Revenue diversification initiatives')),
        array('📱','Digital Marketing',
          'Performance-driven digital marketing across all channels — measurable, optimised and ROI-focused.',
          array('SEO &amp; content marketing','SEM &amp; paid social campaigns','Email &amp; marketing automation','Social media management','Analytics &amp; conversion optimisation')),
        array('🏆','Brand &amp; Communications',
          'Building a compelling, consistent brand identity that commands attention and earns trust.',
          array('Brand strategy &amp; identity design','Corporate communications','PR &amp; media relations','Thought leadership programs','Event marketing &amp; sponsorships')),
        array('🤝','Strategic Partnerships &amp; Alliances',
          'Building a powerful ecosystem of technology alliances, channel partners and co-selling relationships.',
          array('Technology alliance programs','Channel &amp; reseller partnerships','Co-marketing initiatives','Ecosystem development','Partnership performance management')),
      );
      foreach($subs as $s){ ?>
      <div class="card">
        <div style="font-size:2rem;margin-bottom:14px;"><?php echo $s[0]; ?></div>
        <h3 style="font-size:1.1rem;margin-bottom:8px;"><?php echo $s[1]; ?></h3>
        <p style="font-size:0.87rem;color:var(--text-muted);margin-bottom:16px;"><?php echo $s[2]; ?></p>
        <ul style="list-style:none;padding:0;">
          <?php foreach($s[3] as $item){ ?>
          <li style="display:flex;align-items:center;gap:8px;padding:5px 0;font-size:0.82rem;color:var(--text-muted);">
            <span style="color:var(--gold);font-size:0.7rem;">✦</span><?php echo $item; ?>
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
      <h2>Ready to <span class="gradient-text">Accelerate Your Growth</span>?</h2>
      <p>Let's build your pipeline, amplify your brand and unlock new market opportunities together.</p>
      <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-primary">Explore Growth Partnerships →</a>
    </div>
  </div>
</section>

<?php include BASE_PATH . '/includes/footer.php'; ?>
