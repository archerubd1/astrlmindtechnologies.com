<?php
define('BASE_URL', '');
$active     = 'consulting';
$page_title = 'Technology Consulting – Astrl Mind Technologies Pvt Ltd';
$page_desc  = 'Strategic technology consulting: Digital Transformation, Enterprise Architecture, Cloud Transformation, AI Adoption and Technology Modernisation by Astrl Mind.';
include 'includes/header.php';
?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="index.php">Home</a><span class="sep">/</span><span>Consulting</span></div>
    <div class="badge badge-violet" style="margin-bottom:20px;">&#128188; Strategic Consulting</div>
    <h1 class="display-2">Transform Strategy<br><span class="grad-text">Into Reality</span></h1>
    <p class="lead mt-3" style="max-width:620px;margin:0 auto;">Expert technology advisory from seasoned practitioners — not theorists. We translate complex digital challenges into executable transformation roadmaps backed by engineering expertise.</p>
  </div>
</section>

<!-- Intro -->
<section class="section section-dark">
  <div class="container">
    <div class="col-split">
      <div class="reveal">
        <div class="section-label">Our Approach</div>
        <h2 class="display-2 section-heading">Consulting That <span class="grad-text">Delivers</span></h2>
        <p style="color:var(--text-secondary);line-height:1.8;margin-bottom:24px;">Our consulting practice is different. Every Astrl Mind consultant is a practitioner who has built and operated enterprise technology at scale. We do not deliver reports and walk away — we build executable roadmaps and often stay to implement them.</p>
        <p style="color:var(--text-secondary);line-height:1.8;margin-bottom:32px;">Our consultants combine strategic thinking with deep engineering expertise to ensure every recommendation is technically sound, commercially viable and operationally achievable.</p>
        <div class="grid-2" style="gap:16px;">
          <?php foreach(array(array('300+','Consulting Engagements'),array('92%','Client Satisfaction'),array('18','Avg Consultant Experience'),array('40+','Certified Architects')) as $m){ ?>
          <div style="padding:20px;background:rgba(108,71,255,0.06);border:1px solid rgba(108,71,255,0.2);border-radius:var(--radius-md);text-align:center;">
            <div style="font-size:1.8rem;font-weight:900;font-family:var(--font-head);background:var(--grad-brand);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;"><?php echo $m[0]; ?></div>
            <div style="font-size:0.78rem;color:var(--text-muted);"><?php echo $m[1]; ?></div>
          </div>
          <?php } ?>
        </div>
      </div>
      <div class="reveal">
        <h3 style="font-size:1.1rem;margin-bottom:24px;">How We Engage</h3>
        <?php foreach(array(
          array('1','Discovery Workshop','2-day deep dive into your business context, technology landscape and strategic objectives to define the transformation challenge.'),
          array('2','Current State Assessment','Comprehensive assessment of your technology architecture, processes, capabilities and competitive positioning.'),
          array('3','Future State Design','Co-creation of your target architecture, operating model and technology roadmap aligned to business outcomes.'),
          array('4','Roadmap &amp; Business Case','Detailed transformation roadmap with prioritised initiatives, investment cases and benefit projections.'),
          array('5','Execution Support','Optional hands-on programme management, architecture governance and delivery assurance throughout implementation.'),
        ) as $s){ ?>
        <div class="process-step">
          <div class="step-num"><?php echo $s[0]; ?></div>
          <div class="step-content">
            <h4><?php echo $s[1]; ?></h4>
            <p><?php echo $s[2]; ?></p>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>

<!-- Consulting Practices -->
<section class="section">
  <div class="container">
    <div class="text-center reveal">
      <div class="section-label" style="justify-content:center;">Practice Areas</div>
      <h2 class="display-2 section-heading">Five Consulting <span class="grad-text">Practices</span></h2>
      <p class="section-sub center">Specialised expertise across the dimensions of enterprise digital transformation.</p>
    </div>
    <div class="grid-2 stagger" style="gap:28px;">
      <?php
      $practices = array(
        array(
          'icon' => '&#128302;',
          'title' => 'Digital Transformation Strategy',
          'color' => '#0090ff',
          'desc' => 'Define and execute your enterprise-wide digital transformation agenda. We assess your digital maturity, identify transformation opportunities and build a multi-year roadmap that delivers measurable business outcomes.',
          'deliverables' => array('Digital Maturity Assessment','Transformation Roadmap (12-36 months)','Business Case and ROI Framework','Operating Model Design','Change Management Strategy','Digital KPI Framework'),
        ),
        array(
          'icon' => '&#127959;',
          'title' => 'Enterprise Architecture Consulting',
          'color' => '#6c47ff',
          'desc' => 'Design the technology architecture that will power your organisation for the next decade. Our enterprise architects bring TOGAF, SAFe and cloud-native design patterns to create architectures that are scalable, interoperable and future-proof.',
          'deliverables' => array('Current &amp; Target Architecture','Architecture Principles &amp; Standards','Technology Selection Framework','Integration Architecture','Data Architecture Blueprint','Security Architecture Design'),
        ),
        array(
          'icon' => '&#9729;',
          'title' => 'Cloud Transformation Consulting',
          'color' => '#00d4a4',
          'desc' => 'Navigate the complexities of cloud adoption with confidence. From cloud strategy and platform selection to migration planning and operating model transformation — we ensure your cloud journey delivers the promised benefits.',
          'deliverables' => array('Cloud Strategy &amp; Vendor Selection','Application Portfolio Assessment','Cloud Business Case &amp; TCO Analysis','Migration Wave Planning','Cloud Operating Model','FinOps Governance Framework'),
        ),
        array(
          'icon' => '&#129302;',
          'title' => 'AI Adoption Consulting',
          'color' => '#f59e0b',
          'desc' => 'Move from AI curiosity to AI-driven competitive advantage. Our AI strategists help you identify high-value AI use cases, build the data and technology foundation and create an organisation-wide AI adoption strategy.',
          'deliverables' => array('AI Readiness Assessment','Use Case Prioritisation (5-10 use cases)','AI Data Strategy','AI Platform Selection','AI Ethics &amp; Governance Framework','AI Centre of Excellence Design'),
        ),
        array(
          'icon' => '&#128257;',
          'title' => 'Technology Modernisation',
          'color' => '#ff4d6d',
          'desc' => 'Systematically modernise your legacy technology portfolio — reducing technical debt, improving agility and enabling innovation. We create phased modernisation programmes that minimise risk and maximise business continuity.',
          'deliverables' => array('Legacy Portfolio Assessment','Technical Debt Quantification','Modernisation Roadmap','Application Rationalisation Plan','API Strategy &amp; Design','DevOps Transformation Plan'),
        ),
        array(
          'icon' => '&#128737;',
          'title' => 'Cybersecurity &amp; Risk Consulting',
          'color' => '#22c55e',
          'desc' => 'Build enterprise-grade security and risk management capabilities. Our security architects assess your current posture, design defence-in-depth architectures and help you achieve and maintain regulatory compliance.',
          'deliverables' => array('Security Posture Assessment','Zero-Trust Architecture Design','Compliance Gap Analysis','Security Operating Model','Incident Response Framework','Security Awareness Programme'),
        ),
      );
      foreach($practices as $p){ ?>
      <div class="consult-card" style="--c:<?php echo $p['color']; ?>;">
        <div class="consult-icon"><?php echo $p['icon']; ?></div>
        <h3><?php echo $p['title']; ?></h3>
        <p><?php echo $p['desc']; ?></p>
        <div style="font-size:0.78rem;font-weight:700;text-transform:uppercase;letter-spacing:0.08em;color:var(--blue-bright);margin-bottom:12px;">Key Deliverables</div>
        <ul class="consult-deliverables">
          <?php foreach($p['deliverables'] as $d){ ?><li><?php echo $d; ?></li><?php } ?>
        </ul>
      </div>
      <?php } ?>
    </div>
  </div>
</section>

<!-- Why Astrl Mind Consulting -->
<section class="section section-dark">
  <div class="container">
    <div class="col-split">
      <div class="reveal">
        <div class="section-label">Our Difference</div>
        <h2 class="display-2 section-heading">Practitioners, Not <span class="grad-text">Theorists</span></h2>
        <p style="color:var(--text-secondary);line-height:1.8;margin-bottom:28px;">Most consulting firms send junior analysts with slide decks. We send battle-tested technology leaders with real implementation experience. The difference is recommendations that actually work in practice.</p>
        <?php foreach(array(
          array('Engineering + Strategy','Our consultants think in systems, architectures and delivery — not just frameworks.'),
          array('Industry Domain Depth','Consulting teams are aligned to industries with sector-specific knowledge and regulatory expertise.'),
          array('Vendor Independence','We are technology-agnostic. We recommend the best solution for your context, not the one we are paid to sell.'),
          array('Outcome Accountability','We define measurable success criteria upfront and are accountable to delivering them.'),
          array('Seamless Implementation','Our consulting and engineering teams work together — ensuring smooth handoff from strategy to execution.'),
        ) as $d){ ?>
        <div style="display:flex;gap:14px;padding:14px 0;border-bottom:1px solid var(--border);">
          <span style="color:var(--teal);flex-shrink:0;font-size:1.1rem;margin-top:2px;">&#10003;</span>
          <div>
            <div style="font-size:0.93rem;font-weight:700;color:#fff;margin-bottom:3px;"><?php echo $d[0]; ?></div>
            <div style="font-size:0.83rem;color:var(--text-muted);"><?php echo $d[1]; ?></div>
          </div>
        </div>
        <?php } ?>
      </div>
      <div class="reveal">
        <!-- Engagement Models -->
        <h3 style="font-size:1.1rem;margin-bottom:24px;">Engagement Models</h3>
        <?php foreach(array(
          array('&#128203;','Fixed-Scope Engagement','Defined deliverables, timeline and investment for specific consulting projects — ideal for strategy, assessments and roadmaps.'),
          array('&#128197;','Retainer Advisory','Ongoing strategic advisory on a monthly or quarterly basis — ideal for CxO-level technology guidance and programme oversight.'),
          array('&#128101;','Embedded Consulting','Astrl Mind architects and strategists embedded within your organisation — ideal for large transformation programmes requiring sustained expertise.'),
        ) as $em){ ?>
        <div style="background:rgba(255,255,255,0.03);border:1px solid var(--border);border-radius:var(--radius-lg);padding:24px;margin-bottom:16px;">
          <div style="display:flex;gap:14px;align-items:flex-start;">
            <div style="font-size:1.6rem;flex-shrink:0;"><?php echo $em[0]; ?></div>
            <div>
              <h4 style="font-size:0.97rem;margin-bottom:6px;"><?php echo $em[1]; ?></h4>
              <p style="font-size:0.85rem;color:var(--text-muted);line-height:1.65;"><?php echo $em[2]; ?></p>
            </div>
          </div>
        </div>
        <?php } ?>
        <a href="contact.php" class="btn btn-primary" style="width:100%;justify-content:center;margin-top:8px;">Discuss Your Needs &rarr;</a>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="section">
  <div class="container reveal">
    <div class="cta-band">
      <div class="badge badge-violet" style="margin-bottom:20px;">&#128188; Free Consultation</div>
      <h2>Start Your <span class="grad-text">Transformation Conversation</span></h2>
      <p>Get a complimentary 60-minute strategy session with one of our senior consultants. No obligation — just expert perspective on your technology challenges.</p>
      <div class="gap-row" style="justify-content:center;">
        <a href="contact.php" class="btn btn-primary btn-lg">Book Free Session &rarr;</a>
        <a href="case-studies.php" class="btn btn-secondary btn-lg">View Case Studies</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
