<?php
define('BASE_PATH', dirname(dirname(__DIR__)));
define('BASE_URL', '../../');
$current_page = 'services';
$page_title   = 'Finance & Compliance – Astrl Mind Technologies';
$page_desc    = 'CFO Division: Financial planning, accounting, legal compliance, procurement and risk management for enterprise governance excellence.';
include BASE_PATH . '/includes/header.php';
?>

<section class="page-hero">
  <div class="container" style="position:relative;z-index:1;">
    <div class="breadcrumb"><a href="<?php echo BASE_URL; ?>index.php">Home</a><span>/</span><a href="<?php echo BASE_URL; ?>services.php">Services</a><span>/</span><span>Finance &amp; Compliance</span></div>
    <span class="badge badge-purple">📊 CFO Division</span>
    <h1 class="mt-2">Finance &amp; <span class="gradient-text">Compliance</span></h1>
    <p class="lead mt-2">Intelligent financial governance, rigorous compliance frameworks and strategic fiscal management that build enterprise resilience.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="reveal">
        <span class="badge badge-purple">📐 Our Approach</span>
        <h2 class="section-title mt-2">Financial Intelligence <span class="gradient-text">Meets Governance</span></h2>
        <p style="color:var(--text-muted);margin-top:16px;line-height:1.9;">Our CFO division provides the financial backbone that enables Astrl Mind to scale with confidence. From meticulous accounting to enterprise risk frameworks, we ensure every financial decision is data-driven, compliant and strategically sound.</p>
        <p style="color:var(--text-muted);margin-top:14px;line-height:1.9;">We offer our finance and compliance expertise as a consulting service to clients navigating complex financial transformation, regulatory landscape or M&amp;A activities.</p>
        <div class="tag-list">
          <span class="tag">IFRS / GAAP</span><span class="tag">GST / VAT Compliance</span><span class="tag">SOC 2</span>
          <span class="tag">ISO 27001</span><span class="tag">Risk Management</span><span class="tag">Financial Modelling</span>
          <span class="tag">ESG Reporting</span><span class="tag">GDPR</span>
        </div>
      </div>
      <div class="reveal">
        <div class="card" style="background:linear-gradient(135deg,rgba(124,58,237,0.06),rgba(168,85,247,0.06));">
          <h4 style="font-size:1.2rem;margin-bottom:20px;color:#a855f7;">Finance Division Highlights</h4>
          <?php $stats = array(array('100%','Audit-Clean Record'),array('Zero','Compliance Violations'),array('30%','Cost Optimization Avg'),array('48hr','Financial Report TAT')); foreach($stats as $s){ ?>
          <div style="display:flex;justify-content:space-between;align-items:center;padding:12px 0;border-bottom:1px solid var(--border);">
            <span style="color:var(--text-muted);font-size:0.9rem;"><?php echo $s[1]; ?></span>
            <span style="color:#a855f7;font-weight:800;font-size:1.1rem;"><?php echo $s[0]; ?></span>
          </div>
          <?php } ?>
          <div class="mt-3"><a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-primary" style="width:100%;justify-content:center;">Finance Consulting →</a></div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="divider"></div>

<section class="section">
  <div class="container">
    <div class="text-center mb-4 reveal">
      <span class="badge badge-purple">🏦 Sub-Departments</span>
      <h2 class="section-title mt-2">Five Pillars of <span class="gradient-text">Financial Governance</span></h2>
    </div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:24px;" class="stagger">
      <?php
      $subs = array(
        array('💰','Finance &amp; Accounting',
          'Accurate, timely and regulatory-compliant financial reporting and accounting operations.',
          array('Financial statements &amp; reporting','Accounts payable &amp; receivable','Payroll &amp; employee compensation','Tax planning &amp; filing','Statutory compliance')),
        array('📈','Financial Planning &amp; Analysis',
          'Strategic financial modeling and forecasting to drive intelligent business decisions.',
          array('Annual budgeting &amp; forecasting','Scenario &amp; sensitivity analysis','KPI dashboard management','Unit economics &amp; SaaS metrics','Board-level financial reporting')),
        array('⚖️','Legal &amp; Compliance',
          'Comprehensive legal support covering contracts, intellectual property and regulatory requirements.',
          array('Contract drafting &amp; review','Intellectual property protection','Regulatory compliance management','Employment law advisory','Data protection &amp; GDPR')),
        array('🛒','Procurement &amp; Vendor Management',
          'Strategic sourcing, vendor evaluation and contract management optimising cost and quality.',
          array('Vendor evaluation &amp; selection','RFP / tender management','Contract negotiation','Supplier performance management','Cost optimisation initiatives')),
        array('🛡️','Risk &amp; Audit',
          'Enterprise risk frameworks and internal audit ensuring governance, accountability and business continuity.',
          array('Enterprise risk assessment','Internal audit programs','SOX / regulatory audit support','Business continuity planning','Insurance &amp; liability management')),
      );
      foreach($subs as $s){ ?>
      <div class="card">
        <div style="font-size:2rem;margin-bottom:14px;"><?php echo $s[0]; ?></div>
        <h3 style="font-size:1.1rem;margin-bottom:8px;"><?php echo $s[1]; ?></h3>
        <p style="font-size:0.87rem;color:var(--text-muted);margin-bottom:16px;"><?php echo $s[2]; ?></p>
        <ul style="list-style:none;padding:0;">
          <?php foreach($s[3] as $item){ ?>
          <li style="display:flex;align-items:center;gap:8px;padding:5px 0;font-size:0.82rem;color:var(--text-muted);">
            <span style="color:#a855f7;font-size:0.7rem;">✦</span><?php echo $item; ?>
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
      <h2>Govern Your Finances with <span class="gradient-text">Confidence</span></h2>
      <p>Strategic financial intelligence and compliance mastery — enabling growth with resilience.</p>
      <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-primary">Speak to Our Finance Team →</a>
    </div>
  </div>
</section>

<?php include BASE_PATH . '/includes/footer.php'; ?>
