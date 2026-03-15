<?php
define('BASE_PATH', dirname(dirname(__DIR__)));
define('BASE_URL', '../../');
$current_page = 'services';
$page_title   = 'Operations & Delivery – Astrl Mind Technologies';
$page_desc    = 'COO Division: Project management, agile delivery, quality assurance, service operations and customer support excellence.';
include BASE_PATH . '/includes/header.php';
?>

<section class="page-hero">
  <div class="container" style="position:relative;z-index:1;">
    <div class="breadcrumb"><a href="<?php echo BASE_URL; ?>index.php">Home</a><span>/</span><a href="<?php echo BASE_URL; ?>services.php">Services</a><span>/</span><span>Operations &amp; Delivery</span></div>
    <span class="badge badge-green">🔄 COO Division</span>
    <h1 class="mt-2">Operations &amp; <span class="gradient-text">Delivery</span></h1>
    <p class="lead mt-2">Seamless execution, zero-friction delivery, and customer success that transforms projects into long-term partnerships.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="reveal">
        <span class="badge badge-green">⚡ Our Approach</span>
        <h2 class="section-title mt-2">Delivery That <span class="gradient-text">Never Misses</span></h2>
        <p style="color:var(--text-muted);margin-top:16px;line-height:1.9;">Our COO division ensures that every engagement, from a rapid prototype to a full enterprise transformation, is managed with military-grade discipline, client-centric transparency and quality-first thinking.</p>
        <p style="color:var(--text-muted);margin-top:14px;line-height:1.9;">We operate a mature PMO, agile delivery teams, dedicated QA specialists and always-on service operations — creating an end-to-end delivery ecosystem that earns lasting client trust.</p>
        <div class="tag-list">
          <span class="tag">Agile / Scrum</span><span class="tag">PMO</span><span class="tag">ITIL</span>
          <span class="tag">QA Automation</span><span class="tag">Six Sigma</span><span class="tag">ITSM</span>
          <span class="tag">SLA Management</span><span class="tag">CSAT</span>
        </div>
      </div>
      <div class="reveal">
        <div class="card" style="background:linear-gradient(135deg,rgba(6,214,160,0.06),rgba(0,200,255,0.06));">
          <h4 style="font-size:1.2rem;margin-bottom:20px;color:var(--accent3);">Operations Metrics</h4>
          <?php $stats = array(array('98%','On-Time Delivery'),array('100+','Projects Managed'),array('99.5%','SLA Adherence'),array('4.9/5','Client CSAT Score')); foreach($stats as $s){ ?>
          <div style="display:flex;justify-content:space-between;align-items:center;padding:12px 0;border-bottom:1px solid var(--border);">
            <span style="color:var(--text-muted);font-size:0.9rem;"><?php echo $s[1]; ?></span>
            <span style="color:var(--accent3);font-weight:800;font-size:1.1rem;"><?php echo $s[0]; ?></span>
          </div>
          <?php } ?>
          <div class="mt-3"><a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-primary" style="width:100%;justify-content:center;">Discuss Your Project →</a></div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="divider"></div>

<section class="section">
  <div class="container">
    <div class="text-center mb-4 reveal">
      <span class="badge badge-green">🔄 Sub-Departments</span>
      <h2 class="section-title mt-2">Five Pillars of <span class="gradient-text">Operational Excellence</span></h2>
    </div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:24px;" class="stagger">
      <?php
      $subs = array(
        array('📋','Project Management Office (PMO)',
          'Centralised PMO governance that brings consistency, visibility and control to every project in our portfolio.',
          array('Agile &amp; hybrid PMO frameworks','Resource planning &amp; allocation','Project portfolio management','Risk registers &amp; mitigation','Executive reporting dashboards')),
        array('🚀','Client Delivery &amp; Implementation',
          'End-to-end delivery management — from kickoff to go-live — with dedicated implementation managers.',
          array('Solution implementation &amp; deployment','Onboarding &amp; user adoption support','Change management programs','Sprint planning &amp; retrospectives','Milestone-driven delivery models')),
        array('✅','Quality Assurance &amp; Process Excellence',
          'Rigorous quality frameworks that ensure every output meets and exceeds defined standards.',
          array('Manual &amp; automated testing','Performance &amp; load testing','UAT coordination','Process improvement (Lean, Six Sigma)','Quality gates &amp; definition of done')),
        array('⚙️','Service Operations',
          'Round-the-clock operational management ensuring reliability, uptime and continuous service improvement.',
          array('Incident &amp; problem management','Service desk operations','ITIL-aligned ITSM processes','Capacity &amp; availability management','Continuous service improvement')),
        array('🎧','Customer Support',
          'Multi-channel customer success ensuring every client interaction is resolved promptly and delightfully.',
          array('Tiered support model (L1/L2/L3)','Multi-channel helpdesk','Escalation management','Customer success programs','Feedback &amp; NPS management')),
      );
      foreach($subs as $s){ ?>
      <div class="card">
        <div style="font-size:2rem;margin-bottom:14px;"><?php echo $s[0]; ?></div>
        <h3 style="font-size:1.1rem;margin-bottom:8px;"><?php echo $s[1]; ?></h3>
        <p style="font-size:0.87rem;color:var(--text-muted);margin-bottom:16px;"><?php echo $s[2]; ?></p>
        <ul style="list-style:none;padding:0;">
          <?php foreach($s[3] as $item){ ?>
          <li style="display:flex;align-items:center;gap:8px;padding:5px 0;font-size:0.82rem;color:var(--text-muted);">
            <span style="color:var(--accent3);font-size:0.7rem;">✦</span><?php echo $item; ?>
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
      <h2>Deliver with <span class="gradient-text">Confidence</span></h2>
      <p>Our operations team ensures your projects succeed — on time, within budget and beyond expectations.</p>
      <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-primary">Engage Our Operations Team →</a>
    </div>
  </div>
</section>

<?php include BASE_PATH . '/includes/footer.php'; ?>
