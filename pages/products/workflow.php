<?php
define('BASE_URL', '../../');
$active     = 'products';
$page_title = 'Astrl Workflow – Business Process Automation Platform';
$page_desc  = 'Astrl Workflow: intelligent business process automation platform with visual workflow builder, smart approvals and 500+ integrations for enterprise teams.';
include '../../includes/header.php';
?>
<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="<?php echo BASE_URL; ?>index.php">Home</a><span class="sep">/</span><a href="<?php echo BASE_URL; ?>products.php">Products</a><span class="sep">/</span><span>Astrl Workflow</span></div>
    <div class="badge badge-violet" style="margin-bottom:20px;">&#128260; Process Automation</div>
    <h1 class="display-2">Astrl <span class="grad-text">Workflow</span></h1>
    <p class="lead mt-3" style="max-width:600px;margin:0 auto;">Automate, optimise and orchestrate every business process — from simple approvals to enterprise-wide orchestrations.</p>
    <div class="gap-row mt-4" style="justify-content:center;">
      <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-primary btn-lg">Request Demo &rarr;</a>
      <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-secondary btn-lg">Get Pricing</a>
    </div>
  </div>
</section>

<section class="section section-dark">
  <div class="container">
    <div class="col-split">
      <div class="reveal">
        <div class="section-label">Business Impact</div>
        <h2 class="display-2 section-heading">Transform How <span class="grad-text">Work Gets Done</span></h2>
        <p style="color:var(--text-secondary);line-height:1.8;margin-bottom:24px;">Astrl Workflow replaces manual, error-prone business processes with intelligent, automated workflows that adapt, learn and improve. Connect every system, every team and every process into one seamless operational backbone.</p>
        <div class="grid-2" style="gap:16px;">
          <?php foreach(array(array('40%','Efficiency Gain'),array('85%','Error Reduction'),array('3 Weeks','Avg Deployment'),array('500+','Integrations')) as $m){ ?>
          <div style="padding:20px;background:rgba(108,71,255,0.06);border:1px solid rgba(108,71,255,0.2);border-radius:var(--radius-md);text-align:center;">
            <div style="font-size:2rem;font-weight:900;font-family:var(--font-head);background:var(--grad-brand);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;"><?php echo $m[0]; ?></div>
            <div style="font-size:0.8rem;color:var(--text-muted);"><?php echo $m[1]; ?></div>
          </div>
          <?php } ?>
        </div>
        <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-primary mt-4">See It Live &rarr;</a>
      </div>
      <div class="reveal">
        <div class="arch-box">
          <h3 style="font-size:1rem;color:var(--blue-bright);margin-bottom:20px;">Platform Architecture</h3>
          <?php foreach(array(array('1','Visual Process Designer','Drag-and-drop builder, BPMN 2.0, conditional logic'),array('2','Orchestration Engine','Event-driven execution, parallel branching, error handling'),array('3','AI Decision Layer','Smart routing, anomaly detection, predictive escalation'),array('4','Integration Hub','REST/SOAP APIs, Webhooks, iPaaS connectors'),array('5','Analytics &amp; Monitoring','Process KPIs, SLA tracking, bottleneck identification'),array('6','Governance Layer','Audit trail, RBAC, compliance reporting')) as $l){ ?>
          <div class="arch-layer">
            <div class="arch-layer-num"><?php echo $l[0]; ?></div>
            <div class="arch-layer-info">
              <strong><?php echo $l[1]; ?></strong>
              <span><?php echo $l[2]; ?></span>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="text-center reveal">
      <div class="section-label" style="justify-content:center;">Capabilities</div>
      <h2 class="display-2 section-heading">Key <span class="grad-text">Features</span></h2>
    </div>
    <div class="grid-4 stagger">
      <?php foreach(array(
        array('&#127981;','Visual Builder','Intuitive drag-and-drop workflow designer with 200+ pre-built templates for rapid deployment.'),
        array('&#129504;','Smart Approvals','AI-driven approval routing that learns from patterns and predicts optimal approvers and timelines.'),
        array('&#128268;','500+ Integrations','Connect to Salesforce, SAP, ServiceNow, Jira, Slack, Microsoft 365 and hundreds more out of the box.'),
        array('&#128241;','Mobile-First','Full workflow participation from any mobile device — approve, comment, escalate and track on the go.'),
        array('&#9200;','SLA Management','Automated SLA tracking with proactive alerts, escalation rules and breach prevention workflows.'),
        array('&#128196;','Audit Trail','Immutable, timestamped audit log of every action, decision and data change for full regulatory compliance.'),
        array('&#128202;','Process Analytics','Real-time dashboards showing process efficiency, bottlenecks, cycle times and continuous improvement insights.'),
        array('&#128737;','Enterprise Security','SSO, LDAP, MFA, field-level encryption and SOC 2 compliance for enterprise security requirements.'),
      ) as $f){ ?>
      <div class="card">
        <div class="card-icon" style="background:rgba(108,71,255,0.1);font-size:1.4rem;"><?php echo $f[0]; ?></div>
        <h3 style="font-size:0.97rem;margin-bottom:8px;"><?php echo $f[1]; ?></h3>
        <p style="font-size:0.83rem;color:var(--text-secondary);line-height:1.7;"><?php echo $f[2]; ?></p>
      </div>
      <?php } ?>
    </div>
  </div>
</section>

<section class="section section-dark">
  <div class="container reveal">
    <div class="cta-band">
      <h2>Automate Your <span class="grad-text">Business Processes</span></h2>
      <p>See how Astrl Workflow can eliminate manual work and deliver measurable efficiency gains in your organisation.</p>
      <div class="gap-row" style="justify-content:center;">
        <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-primary btn-lg">Request Demo &rarr;</a>
        <a href="<?php echo BASE_URL; ?>products.php" class="btn btn-secondary btn-lg">All Products</a>
      </div>
    </div>
  </div>
</section>
<?php include '../../includes/footer.php'; ?>
