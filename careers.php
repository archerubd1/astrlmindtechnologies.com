<?php
define('BASE_PATH', __DIR__);
define('BASE_URL', '');
$current_page = 'careers';
$page_title   = 'Careers – Astrl Mind Technologies';
$page_desc    = 'Join Astrl Mind Technologies — explore career opportunities across technology, product, operations, marketing, learning and content divisions.';
include 'includes/header.php';
?>

<section class="page-hero">
  <div class="container" style="position:relative;z-index:1;">
    <div class="breadcrumb"><a href="index.php">Home</a><span>/</span><span>Careers</span></div>
    <span class="badge badge-green">🌟 Join the Team</span>
    <h1 class="mt-2">Build Your Future at <span class="gradient-text">Astrl Mind</span></h1>
    <p class="lead mt-2">We're building the next generation of technology — and we're looking for exceptional people who want to build it with us.</p>
  </div>
</section>

<!-- WHY JOIN US -->
<section class="section">
  <div class="container">
    <div class="text-center mb-4 reveal">
      <span class="badge badge-purple">💎 Why Astrl Mind</span>
      <h2 class="section-title mt-2">A Place Where <span class="gradient-text">Talent Thrives</span></h2>
    </div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:24px;" class="stagger">
      <?php
      $perks = array(
        array('🚀','High-Impact Work','Every role at Astrl Mind is consequential. You\'ll work on projects that shape enterprises and careers.'),
        array('📚','Continuous Learning','Access to our own learning programs, conferences, certifications and a culture that celebrates curiosity.'),
        array('🤝','Collaborative Culture','Flat hierarchies, open doors and genuine teamwork — your ideas are heard from Day 1.'),
        array('💰','Competitive Compensation','Market-leading packages with performance bonuses, equity options and comprehensive benefits.'),
        array('🌍','Remote-Friendly','Flexible work arrangements that respect your life while delivering exceptional outcomes.'),
        array('🏆','Fast Career Growth','Clear growth paths, mentorship programs and the opportunity to lead within your first year.'),
        array('🌱','Innovation Freedom','20% exploration time — build side projects, run experiments and pitch new ideas to leadership.'),
        array('🎓','Free Learning Access','Free enrollment in all Astrl Mind training programs and professional certification support.'),
      );
      foreach($perks as $p){ ?>
      <div class="why-card">
        <div style="font-size:2rem;margin-bottom:12px;"><?php echo $p[0]; ?></div>
        <h4 style="font-size:0.97rem;margin-bottom:6px;"><?php echo $p[1]; ?></h4>
        <p style="font-size:0.83rem;color:var(--text-muted);"><?php echo $p[2]; ?></p>
      </div>
      <?php } ?>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- OPEN ROLES -->
<section class="section">
  <div class="container">
    <div class="text-center mb-4 reveal">
      <span class="badge badge-accent">📋 Open Positions</span>
      <h2 class="section-title mt-2">Current <span class="gradient-text">Opportunities</span></h2>
      <p class="section-subtitle">Across all our divisions — we're hiring exceptional talent at every level.</p>
    </div>

    <?php
    $depts = array(
      array('⚙️','Technology &amp; Platforms','#00c8ff', array(
        array('Senior Full-Stack Engineer','Remote / Hybrid','Full-Time','Mid-Senior'),
        array('DevOps Engineer – AWS/GCP','Remote','Full-Time','Mid-Level'),
        array('Cybersecurity Analyst','Hybrid','Full-Time','Mid-Level'),
        array('AI/ML Engineer','Remote','Full-Time','Senior'),
        array('Cloud Solutions Architect','Remote / Hybrid','Full-Time','Senior'),
      )),
      array('🚀','Product &amp; Innovation','#f59e0b', array(
        array('Senior Product Manager','Remote / Hybrid','Full-Time','Senior'),
        array('UI/UX Designer','Remote','Full-Time','Mid-Level'),
        array('Product Analyst','Remote','Full-Time','Junior-Mid'),
      )),
      array('🔄','Operations &amp; Delivery','#06d6a0', array(
        array('Project Manager (Agile)','Hybrid','Full-Time','Mid-Level'),
        array('QA Automation Engineer','Remote','Full-Time','Mid-Level'),
        array('Client Success Manager','Hybrid','Full-Time','Mid-Senior'),
      )),
      array('📈','Sales &amp; Marketing','#f59e0b', array(
        array('Enterprise Account Executive','Hybrid','Full-Time','Senior'),
        array('Digital Marketing Specialist','Remote','Full-Time','Mid-Level'),
        array('Business Development Manager','Hybrid','Full-Time','Senior'),
      )),
      array('🎓','Learning &amp; Talent','#00c8ff', array(
        array('Technical Trainer – Full Stack','Hybrid','Full-Time','Mid-Senior'),
        array('Curriculum Designer','Remote','Full-Time','Mid-Level'),
        array('Placement Coordinator','Hybrid','Full-Time','Junior-Mid'),
      )),
      array('🎬','Content &amp; Media','#ef4444', array(
        array('Senior Content Strategist','Remote','Full-Time','Senior'),
        array('Video Producer','Hybrid','Full-Time','Mid-Level'),
        array('Graphic Designer','Remote','Full-Time','Mid-Level'),
      )),
    );
    foreach($depts as $dept){ ?>
    <div class="reveal" style="margin-bottom:40px;">
      <div style="display:flex;align-items:center;gap:12px;margin-bottom:16px;">
        <span style="font-size:1.5rem;"><?php echo $dept[0]; ?></span>
        <h3 style="font-size:1.2rem;color:<?php echo $dept[2]; ?>;"><?php echo $dept[1]; ?></h3>
      </div>
      <div style="display:grid;gap:12px;">
        <?php foreach($dept[3] as $role){ ?>
        <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:12px;padding:18px 24px;background:var(--card-bg);border:1px solid var(--border);border-radius:12px;transition:all 0.3s;" onmouseover="this.style.borderColor='<?php echo $dept[2]; ?>';" onmouseout="this.style.borderColor='var(--border)';">
          <div>
            <div style="font-size:1rem;font-weight:700;color:#fff;margin-bottom:4px;"><?php echo $role[0]; ?></div>
            <div style="display:flex;gap:8px;flex-wrap:wrap;">
              <span class="badge" style="color:var(--text-muted);border-color:var(--border);font-size:0.7rem;">📍 <?php echo $role[1]; ?></span>
              <span class="badge" style="color:var(--text-muted);border-color:var(--border);font-size:0.7rem;">⏱️ <?php echo $role[2]; ?></span>
              <span class="badge" style="color:<?php echo $dept[2]; ?>;background:rgba(0,0,0,0.2);border-color:<?php echo $dept[2]; ?>;font-size:0.7rem;">🎯 <?php echo $role[3]; ?></span>
            </div>
          </div>
          <a href="contact.php?position=<?php echo urlencode($role[0]); ?>" class="btn btn-ghost" style="font-size:0.83rem;padding:8px 18px;">Apply Now →</a>
        </div>
        <?php } ?>
      </div>
    </div>
    <?php } ?>
  </div>
</section>

<div class="divider"></div>

<!-- LIFE AT ASTRL -->
<section class="section" style="background:linear-gradient(135deg,rgba(0,200,255,0.03),rgba(124,58,237,0.04));">
  <div class="container">
    <div class="text-center mb-4 reveal">
      <span class="badge badge-purple">🏡 Life at Astrl Mind</span>
      <h2 class="section-title mt-2">Our <span class="gradient-text">Culture</span></h2>
    </div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:24px;" class="stagger">
      <div class="card">
        <h4 style="font-size:1.1rem;margin-bottom:16px;">🌅 A Day in the Life</h4>
        <div style="display:flex;flex-direction:column;gap:12px;">
          <?php
          $day = array(
            array('09:00','Team Standup – goals, blockers, wins'),
            array('10:00','Deep work block – no meetings'),
            array('13:00','Cross-team collaboration &amp; reviews'),
            array('15:00','Learning hour – courses, reading, exploration'),
            array('16:00','Client delivery &amp; demos'),
            array('17:00','Wrap-up &amp; async updates'),
          );
          foreach($day as $d){ ?>
          <div style="display:flex;gap:14px;align-items:flex-start;">
            <span style="color:var(--accent);font-size:0.8rem;font-weight:700;min-width:50px;"><?php echo $d[0]; ?></span>
            <span style="font-size:0.87rem;color:var(--text-muted);"><?php echo $d[1]; ?></span>
          </div>
          <?php } ?>
        </div>
      </div>
      <div class="card">
        <h4 style="font-size:1.1rem;margin-bottom:16px;">🎯 What We Look For</h4>
        <p style="font-size:0.87rem;color:var(--text-muted);margin-bottom:16px;">Beyond technical skills, we hire for these core attributes:</p>
        <?php
        $traits = array('🧠 Intellectual curiosity','🤝 Collaborative spirit','⚡ Bias for action','🔍 Attention to detail','💬 Clear communication','📈 Growth mindset','🛡️ Ownership mentality','❤️ Empathy for users &amp; colleagues');
        foreach($traits as $t){ ?>
        <div style="display:flex;align-items:center;gap:10px;padding:7px 0;border-bottom:1px solid var(--border);font-size:0.87rem;color:var(--text-muted);"><?php echo $t; ?></div>
        <?php } ?>
      </div>
      <div class="card">
        <h4 style="font-size:1.1rem;margin-bottom:16px;">🌟 Our Hiring Process</h4>
        <?php
        $steps = array(
          array('📝','Application Review','We review every application within 3 business days.'),
          array('📞','Initial Screening','30-min conversation with our talent team.'),
          array('🧪','Technical Assessment','Role-specific challenge or portfolio review.'),
          array('👥','Team Interview','Meet the team you\'ll be working with.'),
          array('🤝','Final Discussion','Offer, alignment and onboarding planning.'),
        );
        foreach($steps as $i => $s){ ?>
        <div style="display:flex;gap:12px;align-items:flex-start;padding:10px 0;border-bottom:1px solid var(--border);">
          <span style="width:24px;height:24px;border-radius:50%;background:linear-gradient(135deg,var(--accent),var(--accent2));display:flex;align-items:center;justify-content:center;font-size:0.75rem;font-weight:800;color:#fff;flex-shrink:0;"><?php echo $i+1; ?></span>
          <div>
            <div style="font-size:0.88rem;font-weight:700;color:#fff;"><?php echo $s[1]; ?></div>
            <div style="font-size:0.8rem;color:var(--text-muted);"><?php echo $s[2]; ?></div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>

<div class="divider"></div>

<section class="section">
  <div class="container reveal">
    <div class="cta-banner">
      <h2>Don't See Your <span class="gradient-text">Role</span>?</h2>
      <p>We're always looking for exceptional talent. Send us your profile and we'll reach out when the right opportunity arises.</p>
      <a href="contact.php" class="btn btn-primary">Send Open Application →</a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
