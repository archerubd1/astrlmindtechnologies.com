<?php
define('BASE_PATH', dirname(dirname(__DIR__)));
define('BASE_URL', '../../');
$current_page = 'services';
$page_title   = 'Technology & Platforms – Astrl Mind Technologies';
$page_desc    = 'CTO Division: Software engineering, DevOps, cloud infrastructure, IT security and R&D — building the technology backbone of tomorrow.';
include BASE_PATH . '/includes/header.php';
?>

<section class="page-hero">
  <div class="container" style="position:relative;z-index:1;">
    <div class="breadcrumb"><a href="<?php echo BASE_URL; ?>index.php">Home</a><span>/</span><a href="<?php echo BASE_URL; ?>services.php">Services</a><span>/</span><span>Technology &amp; Platforms</span></div>
    <span class="badge badge-accent">⚙️ CTO Division</span>
    <h1 class="mt-2">Technology &amp; <span class="gradient-text">Platforms</span></h1>
    <p class="lead mt-2">Engineering the digital foundation — from cloud-native software and DevOps excellence to cutting-edge AI and emerging tech R&amp;D.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="reveal">
        <span class="badge badge-accent">🧩 Our Approach</span>
        <h2 class="section-title mt-2">Technology Built for <span class="gradient-text">Scale &amp; the Future</span></h2>
        <p style="color:var(--text-muted);margin-top:16px;line-height:1.9;">Our CTO division is the engineering heartbeat of Astrl Mind Technologies. We believe that great software is not just functional — it is elegant, scalable, secure and inherently adaptable to the forces of change.</p>
        <p style="color:var(--text-muted);margin-top:14px;line-height:1.9;">From greenfield cloud-native applications to complex legacy modernisation, from DevOps transformation to AI model deployment — we engineer solutions that power your business today and tomorrow.</p>
        <div class="tag-list">
          <span class="tag">Cloud Native</span><span class="tag">Microservices</span><span class="tag">AI/ML</span>
          <span class="tag">DevSecOps</span><span class="tag">API-First</span><span class="tag">Kubernetes</span>
          <span class="tag">Serverless</span><span class="tag">Zero-Trust</span>
        </div>
      </div>
      <div class="reveal">
        <div class="card" style="background:linear-gradient(135deg,rgba(0,200,255,0.06),rgba(124,58,237,0.06));">
          <h4 style="font-size:1.2rem;margin-bottom:20px;color:var(--accent);">Division Snapshot</h4>
          <?php $stats = array(array('50+','Projects Delivered'),array('99.9%','Uptime SLA'),array('10+','Cloud Platforms'),array('24/7','DevOps Support')); foreach($stats as $s){ ?>
          <div style="display:flex;justify-content:space-between;align-items:center;padding:12px 0;border-bottom:1px solid var(--border);">
            <span style="color:var(--text-muted);font-size:0.9rem;"><?php echo $s[1]; ?></span>
            <span style="color:var(--accent);font-weight:800;font-size:1.1rem;"><?php echo $s[0]; ?></span>
          </div>
          <?php } ?>
          <div class="mt-3"><a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-primary" style="width:100%;justify-content:center;">Start a Tech Project →</a></div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="divider"></div>

<section class="section">
  <div class="container">
    <div class="text-center mb-4 reveal">
      <span class="badge badge-purple">🏗️ Sub-Departments</span>
      <h2 class="section-title mt-2">Five Pillars of <span class="gradient-text">Technology Excellence</span></h2>
    </div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:24px;" class="stagger">
      <?php
      $subs = array(
        array('💻','Software Engineering',
          'Full-stack development using modern frameworks. We architect, build and maintain enterprise-grade applications.',
          array('React, Vue.js, Angular front-ends','Node.js, Python, Java, PHP backends','RESTful &amp; GraphQL APIs','Mobile apps (iOS, Android, Flutter)','Database design (SQL &amp; NoSQL)')),
        array('☁️','DevOps &amp; Cloud Infrastructure',
          'Automated pipelines, cloud migration and infrastructure management that accelerates release velocity.',
          array('CI/CD pipeline design &amp; implementation','AWS, Azure, GCP multi-cloud','Infrastructure as Code (Terraform)','Container orchestration (Kubernetes)','Monitoring &amp; observability stacks')),
        array('🏗️','Platform Architecture',
          'Designing scalable, resilient platforms that serve millions — from technical blueprints to integration strategy.',
          array('Microservices &amp; event-driven architecture','API gateway &amp; service mesh design','Domain-Driven Design (DDD)','Scalability &amp; performance engineering','Technical debt management')),
        array('🔒','IT Infrastructure &amp; Security',
          'Zero-trust security, compliance-grade hardening and round-the-clock threat detection and response.',
          array('Zero-trust network architecture','VAPT &amp; penetration testing','SOC 2 / ISO 27001 compliance','Endpoint security &amp; DLP','24/7 SIEM monitoring')),
        array('🔬','R&amp;D / Emerging Technologies',
          'Exploring and productionising AI, blockchain, IoT, edge computing and next-generation technology.',
          array('AI &amp; machine learning solutions','Generative AI integration','Blockchain &amp; Web3 exploration','IoT platform development','Quantum computing readiness')),
      );
      foreach($subs as $s){ ?>
      <div class="card">
        <div style="font-size:2rem;margin-bottom:14px;"><?php echo $s[0]; ?></div>
        <h3 style="font-size:1.1rem;margin-bottom:8px;"><?php echo $s[1]; ?></h3>
        <p style="font-size:0.87rem;color:var(--text-muted);margin-bottom:16px;"><?php echo $s[2]; ?></p>
        <ul style="list-style:none;padding:0;">
          <?php foreach($s[3] as $item){ ?>
          <li style="display:flex;align-items:center;gap:8px;padding:5px 0;font-size:0.82rem;color:var(--text-muted);">
            <span style="color:var(--accent);font-size:0.7rem;">✦</span><?php echo $item; ?>
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
      <h2>Ready to Build <span class="gradient-text">World-Class Technology</span>?</h2>
      <p>Let's architect your digital future together. Our CTO team is ready to assess, design and build.</p>
      <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
        <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-primary">Talk to Our CTO Team →</a>
        <a href="<?php echo BASE_URL; ?>consulting.php" class="btn btn-outline">Technology Consulting</a>
      </div>
    </div>
  </div>
</section>

<?php include BASE_PATH . '/includes/footer.php'; ?>
