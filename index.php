<?php
define('BASE_URL', '');
$active     = 'home';
$page_title = 'Astrl Mind Technologies Pvt Ltd – Intelligent Digital Platforms';
$page_desc  = 'Engineering intelligent digital platforms for the future. AI, Cloud, Enterprise Software and Digital Transformation by Astrl Mind Technologies Pvt Ltd.';
include 'includes/header.php';
?>

<!-- ============================================================
     HERO
     ============================================================ -->
<section class="hero">
  <div class="hero-bg"></div>
  <div class="hero-grid-lines"></div>
  <div class="container">
    <div class="hero-content">
      <div class="hero-eyebrow"><span class="dot"></span>Next-Generation Technology Company</div>
      <h1 class="display-1">
        Engineering <span class="grad-text">Intelligent<br>Digital Platforms</span><br>
        for the Future
      </h1>
      <p class="lead mt-2">
        <span id="typed">AI Solutions</span> &bull; Cloud &bull; Enterprise Software &bull; Digital Transformation
      </p>
      <div class="gap-row mt-4">
        <a href="services.php" class="btn btn-primary btn-lg">Explore Solutions &rarr;</a>
        <a href="contact.php"  class="btn btn-secondary btn-lg">Talk to Experts</a>
      </div>
      <div class="hero-tech-stack">
        <span class="label">Built on</span>
        <?php foreach(array('AI / ML','Cloud Native','Microservices','Kubernetes','Data Platforms') as $t){ ?>
        <span class="tech-chip"><?php echo $t; ?></span>
        <?php } ?>
      </div>
      <div class="hero-stats">
        <div><div class="hero-stat-num" data-count="200" data-suffix="+">0+</div><div class="hero-stat-label">Enterprise Clients</div></div>
        <div><div class="hero-stat-num" data-count="50"  data-suffix="+">0+</div><div class="hero-stat-label">Products Shipped</div></div>
        <div><div class="hero-stat-num" data-count="15"  data-suffix="+">0+</div><div class="hero-stat-label">Industries Served</div></div>
        <div><div class="hero-stat-num" data-count="98"  data-suffix="%">0%</div><div class="hero-stat-label">Client Retention</div></div>
      </div>
    </div>
  </div>
  <div class="hero-visual">
    <div class="ring ring-1"><div class="ring-dot" style="top:0;left:50%;margin-left:-5px;margin-top:-5px;"></div></div>
    <div class="ring ring-2"><div class="ring-dot" style="bottom:0;left:50%;margin-left:-5px;margin-bottom:-5px;background:var(--violet);box-shadow:0 0 8px var(--violet);"></div></div>
    <div class="ring ring-3"><div class="ring-dot" style="top:50%;right:0;margin-top:-5px;margin-right:-5px;background:var(--teal);box-shadow:0 0 8px var(--teal);"></div></div>
    <div class="ring-core">AM</div>
  </div>
</section>

<!-- MARQUEE -->
<div class="marquee-section">
  <div class="marquee-track">
    <?php
    $items = array('Artificial Intelligence','Cloud Computing','Enterprise Software','Data Platforms','DevOps','Digital Transformation','Machine Learning','API Integration','Cybersecurity','Product Engineering','Agile Delivery','Microservices');
    $items = array_merge($items, $items);
    foreach($items as $item){ ?>
    <div class="marquee-item"><span class="dot"></span><?php echo $item; ?></div>
    <?php } ?>
  </div>
</div>

<!-- ============================================================
     COMPANY INTRODUCTION
     ============================================================ -->
<section class="section section-dark">
  <div class="container">
    <div class="col-split">
      <div class="reveal">
        <div class="section-label">Who We Are</div>
        <h2 class="display-2 section-heading">A Technology Company Built for <span class="grad-text">Tomorrow</span></h2>
        <p class="lead">Astrl Mind Technologies Pvt Ltd is an engineering-first technology company that designs and delivers intelligent digital platforms, enterprise software and AI-powered solutions for forward-thinking organisations.</p>
        <p style="color:var(--text-secondary);margin-top:16px;line-height:1.8;">Founded on the belief that technology should be the great enabler, we partner with enterprises and startups to architect solutions that scale, adapt and deliver sustained competitive advantage.</p>
        <div class="gap-row mt-4">
          <a href="about.php"     class="btn btn-primary">Our Story &rarr;</a>
          <a href="consulting.php" class="btn btn-ghost">Consulting Services</a>
        </div>
      </div>
      <div class="reveal">
        <div class="grid-2" style="gap:16px;">
          <?php
          $pillars = array(
            array('&#129504;','AI-First','Every solution is built with intelligence at the core — not bolted on.'),
            array('&#9729;','Cloud-Native','Architected for scale, resilience and global reach from day one.'),
            array('&#127959;','Enterprise-Grade','Security, compliance and reliability baked into every layer.'),
            array('&#9889;','Agile Delivery','Rapid cycles, continuous improvement, measurable outcomes.'),
          );
          foreach($pillars as $p){ ?>
          <div class="value-card">
            <div class="value-icon"><?php echo $p[0]; ?></div>
            <h4><?php echo $p[1]; ?></h4>
            <p><?php echo $p[2]; ?></p>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- STATS BAR -->
<div class="stats-bar">
  <div class="container">
    <div class="stats-bar-grid">
      <?php
      $stats = array(
        array('200','+','Enterprise Clients'),
        array('50', '+','Products Shipped'),
        array('15', '+','Industries Served'),
        array('10', '+','Years of Excellence'),
        array('98', '%','Client Retention'),
      );
      foreach($stats as $s){ ?>
      <div class="stat-item">
        <div class="stat-number"><span data-count="<?php echo $s[0]; ?>" data-suffix="<?php echo $s[1]; ?>" class="count-num">0<?php echo $s[1]; ?></span></div>
        <div class="stat-label"><?php echo $s[2]; ?></div>
      </div>
      <?php } ?>
    </div>
  </div>
</div>

<!-- ============================================================
     CORE SERVICES
     ============================================================ -->
<section class="section">
  <div class="container">
    <div class="text-center reveal">
      <div class="section-label" style="justify-content:center;">Core Services</div>
      <h2 class="display-2 section-heading">What We <span class="grad-text">Deliver</span></h2>
      <p class="section-sub center">From bespoke enterprise applications to AI automation — our three service pillars cover every dimension of your digital needs.</p>
    </div>
    <div class="grid-3 stagger">
      <a href="products.php" class="service-card" style="--c:linear-gradient(90deg,#0090ff,#6c47ff);">
        <div class="service-icon" style="background:rgba(0,144,255,0.12);color:#0090ff;">&#128230;</div>
        <h3>IT Products</h3>
        <p>Purpose-built software platforms — Astrl AI Studio, Workflow, Analytics and CloudOps — engineered to solve real enterprise problems at scale.</p>
        <div class="learn-more">View Products &rarr;</div>
      </a>
      <a href="consulting.php" class="service-card" style="--c:linear-gradient(90deg,#6c47ff,#00d4a4);">
        <div class="service-icon" style="background:rgba(108,71,255,0.12);color:#a78bfa;">&#128188;</div>
        <h3>Technology Consulting</h3>
        <p>Strategic advisory on digital transformation, enterprise architecture, cloud adoption and AI integration — turning complexity into competitive advantage.</p>
        <div class="learn-more">Explore Consulting &rarr;</div>
      </a>
      <a href="services.php" class="service-card" style="--c:linear-gradient(90deg,#00d4a4,#0090ff);">
        <div class="service-icon" style="background:rgba(0,212,164,0.12);color:#00d4a4;">&#9881;</div>
        <h3>Technology Services</h3>
        <p>End-to-end implementation services — custom software development, cloud engineering, data platforms and AI solutions delivered by expert teams.</p>
        <div class="learn-more">View Services &rarr;</div>
      </a>
    </div>
  </div>
</section>

<!-- ============================================================
     TECHNOLOGY EXPERTISE
     ============================================================ -->
<section class="section section-dark">
  <div class="container">
    <div class="text-center reveal">
      <div class="section-label" style="justify-content:center;">Technology Expertise</div>
      <h2 class="display-2 section-heading">Our <span class="grad-text">Technology Stack</span></h2>
      <p class="section-sub center">Deep expertise across the technologies that define modern enterprise architecture.</p>
    </div>
    <div class="grid-4 stagger">
      <?php
      $techs = array(
        array('&#129302;','Artificial Intelligence','Machine learning, deep learning, NLP, computer vision and generative AI for intelligent automation.','badge-blue',array('TensorFlow','PyTorch','OpenAI','LangChain')),
        array('&#9729;','Cloud Computing','Multi-cloud architecture, migration, DevOps and infrastructure automation across AWS, Azure and GCP.','badge-violet',array('AWS','Azure','GCP','Kubernetes')),
        array('&#128451;','Data Platforms','End-to-end data engineering, analytics pipelines, warehousing and real-time streaming at enterprise scale.','badge-teal',array('Spark','Databricks','Snowflake','dbt')),
        array('&#128187;','Enterprise Software','Scalable, secure, API-first enterprise applications — from ERP integrations to full custom platform builds.','badge-amber',array('Java','Python','Node.js','React')),
      );
      foreach($techs as $t){ ?>
      <div class="card">
        <div class="card-icon" style="background:rgba(0,144,255,0.1);font-size:1.5rem;"><?php echo $t[0]; ?></div>
        <h3 style="font-size:1.05rem;margin-bottom:10px;"><?php echo $t[1]; ?></h3>
        <p style="font-size:0.85rem;color:var(--text-secondary);margin-bottom:16px;"><?php echo $t[2]; ?></p>
        <div class="industry-tags">
          <?php foreach($t[3] as $tag){ ?><span class="industry-tag"><?php echo $tag; ?></span><?php } ?>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>

<!-- ============================================================
     INDUSTRY SOLUTIONS
     ============================================================ -->
<section class="section">
  <div class="container">
    <div class="col-split">
      <div class="reveal">
        <div class="section-label">Industries</div>
        <h2 class="display-2 section-heading">Domain Expertise Across <span class="grad-text">Every Sector</span></h2>
        <p style="color:var(--text-secondary);line-height:1.8;margin-bottom:28px;">We bring deep industry knowledge to every engagement — ensuring our solutions deliver real business outcomes specific to your sector.</p>
        <ul class="check-list">
          <?php foreach(array('Banking &amp; Financial Services','Healthcare &amp; Life Sciences','Manufacturing &amp; Industry 4.0','Retail &amp; E-Commerce','Technology Startups','Government &amp; Public Sector') as $ind){ ?>
          <li><?php echo $ind; ?></li>
          <?php } ?>
        </ul>
        <a href="industries.php" class="btn btn-primary mt-4">Explore Industries &rarr;</a>
      </div>
      <div class="grid-2 stagger" style="gap:16px;">
        <?php
        $inds = array(
          array('&#127970;','Banking','Core banking modernisation, fraud detection AI, regulatory compliance automation.'),
          array('&#127973;','Healthcare','Patient data platforms, diagnostic AI, clinical workflow automation.'),
          array('&#127981;','Manufacturing','IIoT platforms, predictive maintenance, supply chain intelligence.'),
          array('&#128717;','Retail','Personalisation engines, inventory AI, omnichannel commerce platforms.'),
        );
        foreach($inds as $i){ ?>
        <div class="industry-card">
          <div class="industry-icon"><?php echo $i[0]; ?></div>
          <h4><?php echo $i[1]; ?></h4>
          <p><?php echo $i[2]; ?></p>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     FEATURED PRODUCTS
     ============================================================ -->
<section class="section section-dark">
  <div class="container">
    <div class="text-center reveal">
      <div class="section-label" style="justify-content:center;">Our Products</div>
      <h2 class="display-2 section-heading">Intelligent Platforms <span class="grad-text">Built to Scale</span></h2>
      <p class="section-sub center">Four flagship products engineering the future of enterprise operations.</p>
    </div>
    <div class="grid-4 stagger">
      <?php
      $prods = array(
        array('&#129302;','Astrl AI Studio','AI platform for automation, model training and data intelligence.',array('AutoML Pipeline','NLP Engine','Vision AI','Model Registry'),'pages/products/ai-studio.php'),
        array('&#128260;','Astrl Workflow','Business process and workflow automation platform.',array('Visual Workflow Builder','Smart Approvals','Integrations Hub','Audit Trail'),'pages/products/workflow.php'),
        array('&#128202;','Astrl Analytics','Enterprise analytics and business intelligence platform.',array('Real-time Dashboards','Predictive Analytics','Data Storytelling','Self-serve BI'),'pages/products/analytics.php'),
        array('&#9729;','Astrl CloudOps','Cloud infrastructure management and FinOps platform.',array('Multi-cloud View','Cost Optimisation','Auto-scaling','Security Posture'),'pages/products/cloudops.php'),
      );
      foreach($prods as $p){ ?>
      <div class="product-card">
        <div class="product-logo"><?php echo $p[0]; ?></div>
        <h3><?php echo $p[1]; ?></h3>
        <p><?php echo $p[2]; ?></p>
        <ul class="feature-list">
          <?php foreach($p[3] as $f){ ?><li><?php echo $f; ?></li><?php } ?>
        </ul>
        <a href="<?php echo $p[4]; ?>" class="btn btn-ghost btn-sm" style="width:100%;justify-content:center;">Learn More &rarr;</a>
      </div>
      <?php } ?>
    </div>
  </div>
</section>

<!-- ============================================================
     WHY CHOOSE ASTRL MIND
     ============================================================ -->
<section class="section">
  <div class="container">
    <div class="col-split-rev">
      <div class="reveal">
        <div class="card" style="padding:40px;">
          <h3 style="font-size:1.2rem;color:var(--blue-bright);margin-bottom:24px;">Our Differentiators</h3>
          <?php
          $why = array(
            array('Engineering-First Culture','We are engineers who consult — not consultants who code. Every recommendation is battle-tested.'),
            array('AI-Driven Solutions','AI is not an add-on. It is embedded in our architecture, products and delivery methodology.'),
            array('Enterprise-Grade Architecture','Security, scalability and reliability are non-negotiable. We build for enterprise demands from day one.'),
            array('Full Product Lifecycle','From strategy to deployment and support — we own the entire journey with you.'),
            array('Outcome-Focused Delivery','Our KPIs are your business outcomes: efficiency gains, cost reduction, revenue growth.'),
            array('Proven Track Record','200+ enterprise clients, 98% retention. We deliver what we promise.'),
          );
          foreach($why as $w){ ?>
          <div style="display:flex;gap:14px;padding:14px 0;border-bottom:1px solid var(--border);">
            <span style="color:var(--teal);font-size:1.1rem;flex-shrink:0;margin-top:1px;">&#10003;</span>
            <div>
              <div style="font-size:0.93rem;font-weight:700;color:#fff;margin-bottom:3px;"><?php echo $w[0]; ?></div>
              <div style="font-size:0.83rem;color:var(--text-muted);"><?php echo $w[1]; ?></div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
      <div class="reveal">
        <div class="section-label">Why Choose Us</div>
        <h2 class="display-2 section-heading">The <span class="grad-text">Astrl Mind</span> Advantage</h2>
        <p style="color:var(--text-secondary);line-height:1.8;margin-bottom:28px;">In a market crowded with technology vendors, Astrl Mind stands apart as a true engineering partner. We do not sell technology — we engineer outcomes.</p>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:28px;">
          <?php
          $nums = array(array('200','+','Enterprise Clients'),array('98','%','Client Retention'),array('50','+','Products Shipped'),array('15','+','Industries'));
          foreach($nums as $n){ ?>
          <div style="padding:20px;background:var(--navy-light);border:1px solid var(--border);border-radius:var(--radius-md);text-align:center;">
            <div style="font-size:2rem;font-weight:900;font-family:var(--font-head);background:var(--grad-brand);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;"><?php echo $n[0].$n[1]; ?></div>
            <div style="font-size:0.78rem;color:var(--text-muted);margin-top:4px;"><?php echo $n[2]; ?></div>
          </div>
          <?php } ?>
        </div>
        <a href="about.php" class="btn btn-primary">Discover Our Story &rarr;</a>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     CLIENT / PARTNER LOGOS
     ============================================================ -->
<section class="section-sm section-dark">
  <div class="container">
    <div class="text-center reveal mb-4">
      <div class="section-label" style="justify-content:center;">Trusted By</div>
      <h3 style="font-size:1.3rem;color:var(--text-secondary);">Partners &amp; Clients Across Industries</h3>
    </div>
    <div class="logo-grid reveal">
      <?php foreach(array('FinTech Corp','MediSys','IndustrialX','RetailAI','CloudBank','StartupHub','GovTech','DataFlow','TechCorp','NexaPlus','BuildSmart','HealthNet') as $logo){ ?>
      <div class="logo-item"><?php echo $logo; ?></div>
      <?php } ?>
    </div>
  </div>
</section>

<!-- ============================================================
     CASE STUDIES TEASER
     ============================================================ -->
<section class="section">
  <div class="container">
    <div class="text-center reveal">
      <div class="section-label" style="justify-content:center;">Results That Speak</div>
      <h2 class="display-2 section-heading">Client <span class="grad-text">Success Stories</span></h2>
      <p class="section-sub center">Real transformation. Measurable impact. Lasting partnerships.</p>
    </div>
    <div class="grid-3 stagger">
      <?php
      $cases = array(
        array('Banking','National Bank Digital Transformation','Modernised core banking with cloud-native microservices and AI fraud detection.','40%','Cost Reduction','2x','Transaction Speed','99.99%','Uptime'),
        array('Healthcare','Hospital Data Platform','Built a unified patient data platform integrating 12 legacy systems with real-time analytics.','60%','Faster Diagnosis','30%','Operational Savings','5M+','Records Unified'),
        array('Manufacturing','Smart Factory Platform','IIoT platform with predictive maintenance AI reducing unplanned downtime by 65%.','65%','Less Downtime','$2M+','Annual Savings','100+','Machines Connected'),
      );
      foreach($cases as $c){ ?>
      <div class="case-card">
        <div class="case-card-header">
          <div class="case-industry-tag"><?php echo $c[0]; ?></div>
          <h3><?php echo $c[1]; ?></h3>
          <p><?php echo $c[2]; ?></p>
        </div>
        <div class="case-card-body">
          <div class="case-metrics">
            <div class="case-metric"><div class="case-metric-num"><?php echo $c[3]; ?></div><div class="case-metric-label"><?php echo $c[4]; ?></div></div>
            <div class="case-metric"><div class="case-metric-num"><?php echo $c[5]; ?></div><div class="case-metric-label"><?php echo $c[6]; ?></div></div>
            <div class="case-metric"><div class="case-metric-num"><?php echo $c[7]; ?></div><div class="case-metric-label"><?php echo $c[8]; ?></div></div>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
    <div class="text-center mt-4 reveal">
      <a href="case-studies.php" class="btn btn-outline">View All Case Studies &rarr;</a>
    </div>
  </div>
</section>

<!-- ============================================================
     FINAL CTA
     ============================================================ -->
<section class="section section-dark">
  <div class="container reveal">
    <div class="cta-band">
      <div class="badge badge-blue" style="margin-bottom:20px;">&#128640; Let&rsquo;s Build Together</div>
      <h2>Start Your <span class="grad-text">Digital Transformation</span> Journey</h2>
      <p>Ready to transform your enterprise with intelligent technology? Our expert team is waiting to architect your digital future.</p>
      <div class="gap-row" style="justify-content:center;">
        <a href="contact.php"  class="btn btn-primary btn-lg">Get Started Today &rarr;</a>
        <a href="services.php" class="btn btn-secondary btn-lg">Explore Solutions</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
