<?php
define('BASE_URL', '../../');
$active     = 'products';
$page_title = 'Astrl CloudOps – Cloud Infrastructure Management Platform';
$page_desc  = 'Astrl CloudOps: unified cloud management, FinOps and security posture platform for multi-cloud environments. Reduce cloud costs by 35%.';
include '../../includes/header.php';
?>
<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="<?php echo BASE_URL; ?>index.php">Home</a><span class="sep">/</span><a href="<?php echo BASE_URL; ?>products.php">Products</a><span class="sep">/</span><span>Astrl CloudOps</span></div>
    <div class="badge badge-amber" style="margin-bottom:20px;">&#9729; Cloud Management</div>
    <h1 class="display-2">Astrl <span class="grad-text">CloudOps</span></h1>
    <p class="lead mt-3" style="max-width:600px;margin:0 auto;">Take complete control of your multi-cloud estate — reduce costs, eliminate sprawl and maintain continuous security compliance.</p>
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
        <div class="section-label">Platform Overview</div>
        <h2 class="display-2 section-heading">Multi-Cloud Under <span class="grad-text">Full Control</span></h2>
        <p style="color:var(--text-secondary);line-height:1.8;margin-bottom:24px;">Astrl CloudOps provides a single pane of glass for your entire cloud infrastructure — across AWS, Azure, GCP and private cloud. Eliminate shadow IT, optimise spending with AI-powered FinOps and maintain continuous security compliance.</p>
        <div class="grid-2" style="gap:16px;">
          <?php foreach(array(array('35%','Average Cost Savings'),array('3','Major Clouds Supported'),array('50+','Cloud Services Managed'),array('15 min','Time to Onboard')) as $m){ ?>
          <div style="padding:20px;background:rgba(245,158,11,0.06);border:1px solid rgba(245,158,11,0.2);border-radius:var(--radius-md);text-align:center;">
            <div style="font-size:2rem;font-weight:900;font-family:var(--font-head);background:var(--grad-amber);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;"><?php echo $m[0]; ?></div>
            <div style="font-size:0.8rem;color:var(--text-muted);"><?php echo $m[1]; ?></div>
          </div>
          <?php } ?>
        </div>
        <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-primary mt-4">See It Live &rarr;</a>
      </div>
      <div class="reveal">
        <div class="arch-box">
          <h3 style="font-size:1rem;color:var(--amber);margin-bottom:20px;">Platform Architecture</h3>
          <?php foreach(array(array('1','Unified Dashboard','Single pane for AWS, Azure, GCP and private cloud'),array('2','FinOps Engine','Cost allocation, anomaly detection, rightsizing AI'),array('3','Security &amp; Compliance','CSPM, misconfiguration detection, policy enforcement'),array('4','Infrastructure Automation','Terraform, Ansible, IaC management and drift detection'),array('5','Observability Layer','Metrics, logs, traces and AI-powered root cause analysis'),array('6','Governance Framework','RBAC, budget controls, approval workflows, carbon tracking')) as $l){ ?>
          <div class="arch-layer">
            <div class="arch-layer-num"><?php echo $l[0]; ?></div>
            <div class="arch-layer-info"><strong><?php echo $l[1]; ?></strong><span><?php echo $l[2]; ?></span></div>
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
      <h2 class="display-2 section-heading">Key <span class="grad-text">Features</span></h2>
    </div>
    <div class="grid-4 stagger">
      <?php foreach(array(
        array('&#128202;','Multi-Cloud Dashboard','Unified visibility across all cloud providers, regions, accounts and services in one real-time view.'),
        array('&#128176;','AI Cost Optimisation','ML-powered recommendations to right-size resources, identify waste and optimise reserved instances.'),
        array('&#128260;','Auto-scaling','Intelligent auto-scaling based on traffic patterns, time-of-day and ML-predicted demand spikes.'),
        array('&#128737;','Security Posture','Continuous cloud security posture management with 700+ compliance checks and automatic remediation.'),
        array('&#128295;','IaC Automation','Manage Terraform and Ansible infrastructure-as-code with drift detection, policy scanning and change approval.'),
        array('&#127807;','Carbon Tracking','Measure and reduce your cloud carbon footprint with real-time emissions data and optimisation recommendations.'),
        array('&#128268;','Integrations','Native integrations with Jira, PagerDuty, Slack, ServiceNow, Datadog and all major DevOps tools.'),
        array('&#128196;','FinOps Governance','Budget governance, cost allocation tags, showback/chargeback and executive cost reporting built in.'),
      ) as $f){ ?>
      <div class="card">
        <div class="card-icon" style="background:rgba(245,158,11,0.1);font-size:1.4rem;"><?php echo $f[0]; ?></div>
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
      <h2>Cut Cloud Costs by <span class="grad-text">35% in 90 Days</span></h2>
      <p>Connect your cloud accounts and get an instant cost optimisation report — no commitment required.</p>
      <div class="gap-row" style="justify-content:center;">
        <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-primary btn-lg">Request Demo &rarr;</a>
        <a href="<?php echo BASE_URL; ?>products.php" class="btn btn-secondary btn-lg">All Products</a>
      </div>
    </div>
  </div>
</section>
<?php include '../../includes/footer.php'; ?>
