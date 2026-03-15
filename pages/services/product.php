<?php
define('BASE_PATH', dirname(dirname(__DIR__)));
define('BASE_URL', '../../');
$current_page = 'services';
$page_title   = 'Product & Innovation – Astrl Mind Technologies';
$page_desc    = 'CPO Division: Product management, UI/UX design, product engineering, strategy and the innovation lab that builds tomorrow\'s products today.';
include BASE_PATH . '/includes/header.php';
?>

<section class="page-hero">
  <div class="container" style="position:relative;z-index:1;">
    <div class="breadcrumb"><a href="<?php echo BASE_URL; ?>index.php">Home</a><span>/</span><a href="<?php echo BASE_URL; ?>services.php">Services</a><span>/</span><span>Product &amp; Innovation</span></div>
    <span class="badge badge-gold">🚀 CPO Division</span>
    <h1 class="mt-2">Product &amp; <span class="gradient-text">Innovation</span></h1>
    <p class="lead mt-2">From discovery to delight — building products that users love, markets reward and stakeholders celebrate.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="reveal">
        <span class="badge badge-gold">💡 Our Approach</span>
        <h2 class="section-title mt-2">Products That <span class="gradient-text">Change Markets</span></h2>
        <p style="color:var(--text-muted);margin-top:16px;line-height:1.9;">Our CPO division combines strategic product thinking with world-class design and rapid innovation to build products that don't just meet the market — they define it. We operate an innovation lab that constantly explores, prototypes and validates what's next.</p>
        <p style="color:var(--text-muted);margin-top:14px;line-height:1.9;">Whether you need end-to-end product management, a design overhaul, or a breakthrough new product incubated — our product team delivers with speed, precision and creativity.</p>
        <div class="tag-list">
          <span class="tag">Design Thinking</span><span class="tag">Lean Startup</span><span class="tag">User Research</span>
          <span class="tag">MVP Development</span><span class="tag">A/B Testing</span><span class="tag">Figma</span>
          <span class="tag">Product Analytics</span><span class="tag">Jobs-to-be-Done</span>
        </div>
      </div>
      <div class="reveal">
        <div class="card" style="background:linear-gradient(135deg,rgba(245,158,11,0.06),rgba(239,68,68,0.06));">
          <h4 style="font-size:1.2rem;margin-bottom:20px;color:var(--gold);">Product Division Metrics</h4>
          <?php $stats = array(array('30+','Products Launched'),array('4.8★','Average App Rating'),array('3x','Faster Time-to-Market'),array('95%','Design Approval Rate')); foreach($stats as $s){ ?>
          <div style="display:flex;justify-content:space-between;align-items:center;padding:12px 0;border-bottom:1px solid var(--border);">
            <span style="color:var(--text-muted);font-size:0.9rem;"><?php echo $s[1]; ?></span>
            <span style="color:var(--gold);font-weight:800;font-size:1.1rem;"><?php echo $s[0]; ?></span>
          </div>
          <?php } ?>
          <div class="mt-3"><a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-primary" style="width:100%;justify-content:center;">Build Your Product →</a></div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="divider"></div>

<section class="section">
  <div class="container">
    <div class="text-center mb-4 reveal">
      <span class="badge badge-gold">🏗️ Sub-Departments</span>
      <h2 class="section-title mt-2">Five Pillars of <span class="gradient-text">Product Excellence</span></h2>
    </div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:24px;" class="stagger">
      <?php
      $subs = array(
        array('📦','Product Management',
          'End-to-end product ownership — from vision alignment to roadmap to release management.',
          array('Product discovery &amp; validation','Roadmap planning &amp; prioritisation','Backlog grooming &amp; sprint management','Stakeholder management &amp; communication','Feature definition &amp; acceptance criteria')),
        array('🎨','Product Design (UI/UX)',
          'Creating intuitive, beautiful and accessible experiences that convert users into advocates.',
          array('User research &amp; persona development','Information architecture &amp; wireframing','High-fidelity prototyping (Figma)','Design system creation','Usability testing &amp; iteration')),
        array('🤝','Product Engineering Coordination',
          'The critical bridge ensuring product vision translates into technical reality — on time and on spec.',
          array('Technical feasibility assessment','Engineering sprint coordination','Cross-functional alignment','Dependency management','Release planning &amp; coordination')),
        array('🗺️','Product Strategy &amp; Roadmap',
          'Long-horizon product thinking — market positioning, competitive intelligence and strategic pivots.',
          array('Market &amp; competitive analysis','Product-market fit validation','Go-to-market strategy','Pricing &amp; monetisation models','OKR definition for product')),
        array('🧪','Innovation Lab / New Product Development',
          'Our skunkworks — rapidly prototyping and validating disruptive ideas before market launch.',
          array('Innovation sprints &amp; hackathons','MVP incubation &amp; validation','Disruptive technology exploration','Customer co-creation workshops','Spin-off product development')),
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
      <h2>Bring Your <span class="gradient-text">Product Vision to Life</span></h2>
      <p>From concept to market-leading product — our CPO team makes it happen with strategic precision and design excellence.</p>
      <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-primary">Start Your Product Journey →</a>
    </div>
  </div>
</section>

<?php include BASE_PATH . '/includes/footer.php'; ?>
