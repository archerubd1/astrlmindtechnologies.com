<?php
define('BASE_PATH', __DIR__);
define('BASE_URL', '');
$current_page = 'consulting';
$page_title   = 'Consulting – Astrl Mind Technologies';
$page_desc    = 'Strategic consulting services: digital transformation, AI strategy, technology architecture, talent strategy and go-to-market consulting.';
include 'includes/header.php';
?>

<section class="page-hero">
  <div class="container" style="position:relative;z-index:1;">
    <div class="breadcrumb"><a href="index.php">Home</a><span>/</span><span>Consulting</span></div>
    <span class="badge badge-gold">💼 Expert Consulting</span>
    <h1 class="mt-2">Strategic <span class="gradient-text">Consulting</span></h1>
    <p class="lead mt-2">Navigate complexity, accelerate transformation and unlock breakthrough growth with Astrl Mind's cross-domain consulting expertise.</p>
  </div>
</section>

<!-- WHY CONSULTING -->
<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="reveal">
        <span class="badge badge-gold">🎯 Our Philosophy</span>
        <h2 class="section-title mt-2">Consulting That <span class="gradient-text">Transforms</span></h2>
        <p style="color:var(--text-muted);margin-top:16px;line-height:1.9;">Unlike traditional consulting firms, Astrl Mind brings a unique advantage: we are both a consulting practice and a delivery engine. We don't just recommend — we implement, manage and iterate alongside you until the desired outcome is achieved.</p>
        <p style="color:var(--text-muted);margin-top:14px;line-height:1.9;">Our consultants are practitioners first — engineers, product managers, financial experts, marketing leaders and learning architects who bring hands-on expertise to every engagement.</p>

        <div style="margin-top:28px;display:grid;grid-template-columns:1fr 1fr;gap:16px;">
          <?php
          $why = array(
            array('🤝','Practitioner Consultants','Real experience, not just frameworks'),
            array('🔁','Consult-to-Implement','Strategy + execution, seamlessly'),
            array('📊','Data-Driven Insights','Evidence-based recommendations'),
            array('⚡','Agile Consulting','Fast cycles, continuous refinement'),
          );
          foreach($why as $w){ ?>
          <div style="padding:16px;background:rgba(13,34,71,0.5);border:1px solid var(--border);border-radius:10px;">
            <div style="font-size:1.5rem;margin-bottom:8px;"><?php echo $w[0]; ?></div>
            <div style="font-size:0.9rem;font-weight:700;color:#fff;margin-bottom:4px;"><?php echo $w[1]; ?></div>
            <div style="font-size:0.8rem;color:var(--text-muted);"><?php echo $w[2]; ?></div>
          </div>
          <?php } ?>
        </div>
      </div>
      <div class="reveal">
        <div class="card">
          <h4 style="margin-bottom:20px;font-size:1.1rem;color:var(--gold);">⚡ Our Consulting Process</h4>
          <?php
          $process = array(
            array('1','Discover','Deep-dive into your business, challenges, goals and current state.'),
            array('2','Diagnose','Root cause analysis, gap identification and opportunity mapping.'),
            array('3','Design','Co-create a tailored strategy, roadmap and implementation plan.'),
            array('4','Deliver','Execute with our internal teams or guide your team to implement.'),
            array('5','Drive','Continuous measurement, iteration and optimisation for sustained results.'),
          );
          foreach($process as $p){ ?>
          <div style="display:flex;gap:14px;align-items:flex-start;padding:14px 0;border-bottom:1px solid var(--border);">
            <div style="width:32px;height:32px;border-radius:8px;background:linear-gradient(135deg,var(--accent),var(--accent2));display:flex;align-items:center;justify-content:center;font-weight:800;font-size:0.9rem;color:#fff;flex-shrink:0;"><?php echo $p[0]; ?></div>
            <div>
              <div style="font-size:0.95rem;font-weight:700;color:#fff;margin-bottom:3px;"><?php echo $p[1]; ?></div>
              <div style="font-size:0.83rem;color:var(--text-muted);"><?php echo $p[2]; ?></div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- CONSULTING PRACTICES -->
<section class="section">
  <div class="container">
    <div class="text-center mb-4 reveal">
      <span class="badge badge-gold">🧩 Consulting Practices</span>
      <h2 class="section-title mt-2">Areas of <span class="gradient-text">Deep Expertise</span></h2>
    </div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:24px;" class="stagger">
      <?php
      $practices = array(
        array('🔄','Digital Transformation',
          'End-to-end strategy and execution for modernising technology, processes and culture.',
          array('Legacy system modernisation','Cloud migration strategy','Process automation roadmap','Change management &amp; adoption','Digital maturity assessment')),
        array('🤖','AI &amp; Data Strategy',
          'Helping enterprises become AI-native — from data infrastructure to production ML deployment.',
          array('AI readiness assessment','Data architecture design','ML use case identification','Generative AI integration','AI governance frameworks')),
        array('📐','Technology Architecture',
          'Designing scalable, future-proof technology foundations that support long-term growth.',
          array('Enterprise architecture review','Microservices migration','API strategy &amp; governance','Technology selection advisory','Technical debt reduction')),
        array('👥','Talent &amp; HR Strategy',
          'Building high-performance teams and talent pipelines aligned to your strategic direction.',
          array('Workforce planning &amp; skill mapping','Train-to-hire program design','L&amp;D strategy consulting','Talent acquisition advisory','Organisation design')),
        array('📣','Go-to-Market Strategy',
          'Crafting and executing compelling GTM plans for product launches and market expansion.',
          array('Market entry strategy','Competitive positioning','Pricing &amp; revenue model','Sales &amp; channel strategy','Launch execution support')),
        array('⚖️','Risk &amp; Governance',
          'Building resilient, compliant and accountable organisations that stand the test of scrutiny.',
          array('Enterprise risk framework','Compliance readiness assessment','Data privacy &amp; GDPR advisory','Board governance consulting','Business continuity planning')),
        array('📊','Financial Strategy',
          'Optimising financial performance, capital allocation and fiscal governance for sustainable growth.',
          array('Financial model design','Fundraising strategy advisory','Cost optimisation programs','M&amp;A financial due diligence','FP&amp;A transformation')),
        array('🎨','Brand &amp; Content Strategy',
          'Building powerful brand identities and content ecosystems that define market leadership.',
          array('Brand audit &amp; repositioning','Content strategy &amp; architecture','Thought leadership programs','Digital brand presence','Audience growth strategy')),
      );
      foreach($practices as $p){ ?>
      <div class="card">
        <div style="font-size:2rem;margin-bottom:14px;"><?php echo $p[0]; ?></div>
        <h3 style="font-size:1.05rem;margin-bottom:8px;"><?php echo $p[1]; ?></h3>
        <p style="font-size:0.87rem;color:var(--text-muted);margin-bottom:16px;"><?php echo $p[2]; ?></p>
        <ul style="list-style:none;padding:0;">
          <?php foreach($p[3] as $item){ ?>
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

<!-- ENGAGEMENT MODELS -->
<section class="section" style="background:linear-gradient(135deg,rgba(245,158,11,0.03),rgba(0,200,255,0.03));">
  <div class="container">
    <div class="text-center mb-4 reveal">
      <span class="badge badge-accent">📋 Engagement Models</span>
      <h2 class="section-title mt-2">How We <span class="gradient-text">Work Together</span></h2>
    </div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:24px;" class="stagger">
      <?php
      $models = array(
        array('⚡','Project-Based','Focused engagement with defined scope, timeline and outcomes. Ideal for specific initiatives.','Fixed scope','Clear deliverables','Time-bound'),
        array('🔄','Retainer Advisory','Ongoing strategic advisor relationship. Monthly retainer for continuous guidance and support.','Monthly engagement','Flexible scope','Strategic advisory'),
        array('🤝','Embedded Consulting','Our consultants work within your team — driving transformation from the inside.','Team integration','Hands-on execution','Knowledge transfer'),
        array('🎯','Workshop &amp; Sprint','Intensive structured workshops to solve specific problems in focused 1-5 day engagements.','Fast-paced','Collaborative','Immediate output'),
      );
      foreach($models as $m){ ?>
      <div class="card text-center">
        <div style="font-size:2.5rem;margin-bottom:14px;"><?php echo $m[0]; ?></div>
        <h3 style="font-size:1.1rem;margin-bottom:8px;"><?php echo $m[1]; ?></h3>
        <p style="font-size:0.87rem;color:var(--text-muted);margin-bottom:16px;"><?php echo $m[2]; ?></p>
        <div style="display:flex;gap:8px;flex-wrap:wrap;justify-content:center;">
          <span class="badge badge-accent" style="font-size:0.72rem;"><?php echo $m[3]; ?></span>
          <span class="badge badge-purple" style="font-size:0.72rem;"><?php echo $m[4]; ?></span>
          <span class="badge badge-green" style="font-size:0.72rem;"><?php echo $m[5]; ?></span>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>

<div class="divider"></div>

<section class="section">
  <div class="container reveal">
    <div class="cta-banner">
      <h2>Ready for a <span class="gradient-text">Free Discovery Call</span>?</h2>
      <p>Let's explore your challenges and opportunities together. No commitment — just a candid conversation about how we can help.</p>
      <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
        <a href="contact.php" class="btn btn-primary">Book a Discovery Call →</a>
        <a href="services.php" class="btn btn-outline">Browse All Services</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
