<?php
define('BASE_URL', '');
$active     = 'products';
$page_title = 'Products – Astrl Mind Technologies Pvt Ltd';
$page_desc  = 'Explore Astrl Mind product portfolio: AI Studio, Workflow, Analytics and CloudOps — intelligent platforms built for enterprise scale.';
include 'includes/header.php';
?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="index.php">Home</a><span class="sep">/</span><span>Products</span></div>
    <div class="badge badge-blue" style="margin-bottom:20px;">&#128230; Product Portfolio</div>
    <h1 class="display-2">Intelligent Platforms<br><span class="grad-text">Built to Scale</span></h1>
    <p class="lead mt-3" style="max-width:580px;margin:0 auto;">Four enterprise-grade platforms engineered to solve the most complex operational, data and intelligence challenges faced by modern organisations.</p>
  </div>
</section>

<!-- Product Grid -->
<section class="section section-dark">
  <div class="container">
    <div class="grid-2 stagger" style="gap:32px;">
      <?php
      $products = array(
        array(
          'icon' => '&#129302;',
          'name' => 'Astrl AI Studio',
          'tagline' => 'Enterprise AI Development &amp; Automation Platform',
          'problem' => 'Enterprises struggle to move from AI experiments to production — lacking unified tools for model training, deployment and monitoring.',
          'desc' => 'Astrl AI Studio is a full-lifecycle AI development platform that enables data scientists and ML engineers to build, train, deploy and monitor AI models at enterprise scale with no-code and low-code capabilities.',
          'features' => array('AutoML Pipeline with 50+ algorithms','Natural Language Processing Engine','Computer Vision AI Toolkit','Model Registry &amp; Versioning','Real-time Inference APIs','MLOps Automation &amp; Monitoring','Generative AI Studio','Responsible AI Dashboard'),
          'benefits' => array('10x faster model deployment','70% reduction in ML engineering effort','Built-in compliance and model governance','Works with AWS, Azure, GCP'),
          'link' => 'pages/products/ai-studio.php',
          'color' => '#0090ff',
          'bg' => 'rgba(0,144,255,0.06)',
        ),
        array(
          'icon' => '&#128260;',
          'name' => 'Astrl Workflow',
          'tagline' => 'Business Process &amp; Workflow Automation Platform',
          'problem' => 'Manual, fragmented business processes cost enterprises millions in inefficiency, errors and delay — and traditional BPM tools are too rigid.',
          'desc' => 'Astrl Workflow is an intelligent business process automation platform that allows organisations to design, automate and optimise any workflow — from simple approvals to complex multi-system orchestrations.',
          'features' => array('Visual Drag-and-Drop Workflow Builder','AI-Powered Smart Approvals','500+ Pre-built Integrations','Role-based Access &amp; Delegation','Real-time Process Analytics','SLA Management &amp; Alerts','Mobile-first Design','Full Audit Trail &amp; Compliance'),
          'benefits' => array('40% operational efficiency improvement','85% reduction in manual errors','Average 3-week implementation','Enterprise SSO and security'),
          'link' => 'pages/products/workflow.php',
          'color' => '#6c47ff',
          'bg' => 'rgba(108,71,255,0.06)',
        ),
        array(
          'icon' => '&#128202;',
          'name' => 'Astrl Analytics',
          'tagline' => 'Enterprise Analytics &amp; Business Intelligence Platform',
          'problem' => 'Executives and operations teams are drowning in data but starved of insight — legacy BI tools are slow, static and require SQL expertise.',
          'desc' => 'Astrl Analytics is a modern enterprise analytics platform that transforms raw data into actionable intelligence through real-time dashboards, predictive models and AI-driven data storytelling for every business user.',
          'features' => array('Real-time Streaming Dashboards','Predictive Analytics Engine','Natural Language Query Interface','Self-serve BI for Business Users','Data Storytelling &amp; Narratives','Multi-source Data Connectors (200+)','Embedded Analytics SDK','Role-based Data Security'),
          'benefits' => array('Self-serve analytics for non-technical users','60% faster time to insight','Connect 200+ data sources','GDPR and SOC 2 compliant'),
          'link' => 'pages/products/analytics.php',
          'color' => '#00d4a4',
          'bg' => 'rgba(0,212,164,0.06)',
        ),
        array(
          'icon' => '&#9729;',
          'name' => 'Astrl CloudOps',
          'tagline' => 'Cloud Infrastructure Management &amp; FinOps Platform',
          'problem' => 'Multi-cloud environments create sprawl, runaway costs and security blind spots — most enterprises overspend on cloud by 30-40%.',
          'desc' => 'Astrl CloudOps is a unified cloud management platform that provides complete visibility, cost governance, security posture management and intelligent automation across your entire multi-cloud estate.',
          'features' => array('Multi-cloud Unified Dashboard (AWS/Azure/GCP)','AI-Powered Cost Optimisation','Auto-scaling &amp; Resource Management','Security Posture &amp; Compliance','Infrastructure as Code Automation','Carbon Footprint Tracking','FinOps Governance Workflows','24/7 Anomaly Detection'),
          'benefits' => array('Average 35% cloud cost reduction','Complete multi-cloud visibility','Automated security compliance','Supports 50+ cloud services'),
          'link' => 'pages/products/cloudops.php',
          'color' => '#f59e0b',
          'bg' => 'rgba(245,158,11,0.06)',
        ),
      );
      foreach($products as $p){ ?>
      <div style="background:var(--navy-light);border:1px solid var(--border);border-radius:var(--radius-xl);overflow:hidden;transition:all var(--dur) var(--ease);" onmouseover="this.style.borderColor='var(--border-glow)';this.style.transform='translateY(-5px)'" onmouseout="this.style.borderColor='var(--border)';this.style.transform='translateY(0)'">
        <div style="padding:40px;background:<?php echo $p['bg']; ?>;border-bottom:1px solid var(--border);">
          <div style="display:flex;align-items:flex-start;gap:20px;margin-bottom:20px;">
            <div style="width:72px;height:72px;border-radius:18px;background:linear-gradient(135deg,<?php echo $p['color']; ?>,<?php echo $p['color']; ?>99);display:flex;align-items:center;justify-content:center;font-size:2rem;flex-shrink:0;"><?php echo $p['icon']; ?></div>
            <div>
              <h2 style="font-size:1.4rem;margin-bottom:4px;"><?php echo $p['name']; ?></h2>
              <p style="font-size:0.83rem;color:var(--text-muted);"><?php echo $p['tagline']; ?></p>
            </div>
          </div>
          <div style="background:rgba(255,77,109,0.06);border:1px solid rgba(255,77,109,0.15);border-radius:var(--radius-md);padding:14px;margin-bottom:16px;">
            <p style="font-size:0.82rem;color:var(--text-muted);"><strong style="color:var(--red);">Problem:</strong> <?php echo $p['problem']; ?></p>
          </div>
          <p style="font-size:0.9rem;color:var(--text-secondary);line-height:1.75;"><?php echo $p['desc']; ?></p>
        </div>
        <div style="padding:32px;">
          <div class="grid-2" style="gap:24px;">
            <div>
              <h4 style="font-size:0.75rem;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--blue-bright);margin-bottom:14px;">Key Features</h4>
              <ul class="feature-list">
                <?php foreach($p['features'] as $f){ ?><li><?php echo $f; ?></li><?php } ?>
              </ul>
            </div>
            <div>
              <h4 style="font-size:0.75rem;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--teal);margin-bottom:14px;">Business Benefits</h4>
              <ul style="list-style:none;padding:0;">
                <?php foreach($p['benefits'] as $b){ ?>
                <li style="display:flex;align-items:flex-start;gap:8px;padding:8px 0;border-bottom:1px solid var(--border);font-size:0.87rem;color:var(--text-secondary);">
                  <span style="color:var(--teal);flex-shrink:0;">&#10003;</span><?php echo $b; ?>
                </li>
                <?php } ?>
              </ul>
              <div style="margin-top:20px;">
                <a href="<?php echo $p['link']; ?>" class="btn btn-primary" style="width:100%;justify-content:center;">View Details &rarr;</a>
                <a href="contact.php?product=<?php echo urlencode($p['name']); ?>" class="btn btn-ghost btn-sm" style="width:100%;justify-content:center;margin-top:8px;">Request Demo</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>

<!-- Comparison Table -->
<section class="section">
  <div class="container">
    <div class="text-center reveal">
      <div class="section-label" style="justify-content:center;">Platform Comparison</div>
      <h2 class="display-2 section-heading">Which Platform is <span class="grad-text">Right for You?</span></h2>
    </div>
    <div class="reveal" style="overflow-x:auto;margin-top:40px;">
      <table style="width:100%;border-collapse:collapse;">
        <thead>
          <tr style="background:var(--navy-light);border-bottom:2px solid var(--border-glow);">
            <th style="padding:18px 24px;text-align:left;font-size:0.82rem;color:var(--text-muted);font-weight:600;">Feature</th>
            <?php foreach(array('AI Studio','Workflow','Analytics','CloudOps') as $col){ ?>
            <th style="padding:18px 20px;text-align:center;font-size:0.9rem;font-weight:700;color:var(--blue-bright);"><?php echo $col; ?></th>
            <?php } ?>
          </tr>
        </thead>
        <tbody>
          <?php
          $rows = array(
            array('AI / ML Capabilities','&#10003;','&#8212;','Limited','&#8212;'),
            array('Workflow Automation','Limited','&#10003;','&#8212;','&#10003;'),
            array('Analytics &amp; BI','Limited','&#8212;','&#10003;','Limited'),
            array('Cloud Management','&#8212;','&#8212;','&#8212;','&#10003;'),
            array('No-Code Interface','&#10003;','&#10003;','&#10003;','&#10003;'),
            array('API-First Architecture','&#10003;','&#10003;','&#10003;','&#10003;'),
            array('Enterprise SSO','&#10003;','&#10003;','&#10003;','&#10003;'),
            array('On-Premise Deployment','&#10003;','&#10003;','&#10003;','&#10003;'),
          );
          foreach($rows as $r){ ?>
          <tr style="border-bottom:1px solid var(--border);">
            <td style="padding:14px 24px;font-size:0.88rem;color:var(--text-secondary);"><?php echo $r[0]; ?></td>
            <?php for($i=1;$i<=4;$i++){ ?>
            <td style="padding:14px 20px;text-align:center;font-size:0.95rem;color:<?php echo ($r[$i]==='&#10003;'?'var(--teal)':($r[$i]==='&#8212;'?'var(--text-muted)':'var(--blue-bright)')); ?>;"><?php echo $r[$i]; ?></td>
            <?php } ?>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="section section-dark">
  <div class="container reveal">
    <div class="cta-band">
      <div class="badge badge-blue" style="margin-bottom:20px;">&#129302; See It Live</div>
      <h2>Experience Astrl Mind <span class="grad-text">Products in Action</span></h2>
      <p>Get a personalised product demo tailored to your industry and use case. See how our platforms can transform your operations.</p>
      <div class="gap-row" style="justify-content:center;">
        <a href="contact.php" class="btn btn-primary btn-lg">Request a Demo &rarr;</a>
        <a href="consulting.php" class="btn btn-secondary btn-lg">Talk to Consultants</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
