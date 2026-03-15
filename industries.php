<?php
define('BASE_URL', '');
$active     = 'industries';
$page_title = 'Industries – Astrl Mind Technologies Pvt Ltd';
$page_desc  = 'Industry-specific technology solutions for Banking, Healthcare, Manufacturing, Retail, Technology Startups and Government from Astrl Mind Technologies.';
include 'includes/header.php';
?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="index.php">Home</a><span class="sep">/</span><span>Industries</span></div>
    <div class="badge badge-blue" style="margin-bottom:20px;">&#127758; Industry Solutions</div>
    <h1 class="display-2">Deep Expertise Across<br><span class="grad-text">Every Industry</span></h1>
    <p class="lead mt-3" style="max-width:600px;margin:0 auto;">Industry-specific solutions built on real domain knowledge, regulatory expertise and an understanding of the unique challenges each sector faces in its digital journey.</p>
  </div>
</section>

<?php
$industries = array(
  array(
    'id' => 'banking',
    'icon' => '&#127970;',
    'name' => 'Banking &amp; Financial Services',
    'badge' => 'badge-blue',
    'headline' => 'Modernise Finance with <span class="grad-text">AI-Powered Intelligence</span>',
    'desc' => 'Financial services institutions face unprecedented pressure to modernise legacy infrastructure, meet evolving regulatory requirements and deliver digital-first experiences. We help banks, NBFCs, fintechs and insurance companies build the intelligent digital infrastructure to compete in the era of open banking and embedded finance.',
    'usecases' => array('Core Banking Modernisation','AI-Powered Fraud Detection','Regulatory Reporting Automation','Customer 360 Platform','Risk Analytics &amp; Stress Testing','Digital Onboarding &amp; KYC','Lending Intelligence Platform','Open Banking API Gateway'),
    'solutions' => array('Microservices-based core banking platform migration','Real-time fraud detection with 99.7% accuracy ML models','Automated Basel III/IV regulatory reporting','Unified customer data platform with 360-degree view'),
    'stats' => array(array('40%','Cost Reduction'),array('99.7%','Fraud Detection'),array('70%','Faster Onboarding'),array('60%','Reporting Automation')),
    'dark' => false,
  ),
  array(
    'id' => 'healthcare',
    'icon' => '&#127973;',
    'name' => 'Healthcare &amp; Life Sciences',
    'badge' => 'badge-teal',
    'headline' => 'Transform Patient Care with <span class="grad-text">Clinical Intelligence</span>',
    'desc' => 'Healthcare organisations are challenged to improve patient outcomes, reduce operational costs and navigate complex regulatory landscapes — all while digitising decades of legacy processes and data silos. We build HIPAA-compliant, interoperable health technology solutions that connect care and empower clinicians.',
    'usecases' => array('Unified Patient Data Platform','Diagnostic AI &amp; Clinical Decision Support','Population Health Management','Clinical Workflow Automation','Drug Discovery &amp; Research Analytics','Remote Patient Monitoring','Hospital Operations Intelligence','Medical Imaging AI'),
    'solutions' => array('HL7/FHIR-based patient data unification across 12+ systems','AI diagnostic support reducing misdiagnosis by 35%','Clinical workflow automation cutting documentation by 50%','Predictive analytics for patient readmission prevention'),
    'stats' => array(array('60%','Faster Diagnosis'),array('35%','Cost Reduction'),array('50%','Less Docs Work'),array('5M+','Records Unified')),
    'dark' => true,
  ),
  array(
    'id' => 'manufacturing',
    'icon' => '&#127981;',
    'name' => 'Manufacturing &amp; Industry 4.0',
    'badge' => 'badge-amber',
    'headline' => 'Power the <span class="grad-text">Smart Factory</span>',
    'desc' => 'Manufacturers are racing to implement Industry 4.0 — connecting machines, data and processes into intelligent operations that predict problems before they happen, optimise production in real time and enable mass customisation at scale. We build the IIoT and AI platform that drives operational excellence.',
    'usecases' => array('Industrial IoT Platform','Predictive Maintenance AI','Quality Inspection Vision AI','Supply Chain Intelligence','Digital Twin Implementation','Energy Optimisation','Production Planning AI','Worker Safety Analytics'),
    'solutions' => array('IIoT platform connecting 1000+ machines with real-time monitoring','Predictive maintenance ML reducing unplanned downtime by 65%','Computer vision quality inspection with 99.4% accuracy','Supply chain demand forecasting with 92% accuracy'),
    'stats' => array(array('65%','Less Downtime'),array('$2M+','Annual Savings'),array('99.4%','Inspection Accuracy'),array('40%','OEE Improvement')),
    'dark' => false,
  ),
  array(
    'id' => 'retail',
    'icon' => '&#128717;',
    'name' => 'Retail &amp; E-Commerce',
    'badge' => 'badge-violet',
    'headline' => 'Deliver <span class="grad-text">Personalised Commerce</span> at Scale',
    'desc' => 'Retail businesses must deliver hyper-personalised experiences across every touchpoint while optimising inventory, pricing and operations in real time. We build the AI-powered commerce intelligence that enables retailers to compete with digital natives.',
    'usecases' => array('AI Personalisation Engine','Inventory Intelligence Platform','Dynamic Pricing AI','Omnichannel Commerce Platform','Customer Lifetime Value Prediction','Visual Search &amp; Discovery','Returns Prediction &amp; Prevention','Demand Forecasting'),
    'solutions' => array('Real-time personalisation engine serving 10M+ recommendations daily','AI demand forecasting reducing overstock by 25% and stockouts by 35%','Dynamic pricing AI delivering 15% margin improvement','Omnichannel platform unifying 5 customer touchpoints'),
    'stats' => array(array('35%','Revenue Increase'),array('25%','Inventory Reduction'),array('15%','Margin Improvement'),array('3x','Customer Retention')),
    'dark' => true,
  ),
  array(
    'id' => 'startups',
    'icon' => '&#128640;',
    'name' => 'Technology Startups',
    'badge' => 'badge-green',
    'headline' => 'Build Products That <span class="grad-text">Win Markets</span>',
    'desc' => 'Technology startups need to move fast, build right and scale without breaking. We partner with Series A to Series C startups as their engineering partner — providing senior technology expertise, product development speed and architecture that scales without the overhead of building an internal team.',
    'usecases' => array('Product Engineering Partnership','MVP to Scale Architecture','Technical Due Diligence','CTO-as-a-Service','Platform Modernisation','AI Feature Development','Cloud Cost Optimisation','Engineering Team Augmentation'),
    'solutions' => array('Full-stack product engineering from MVP to Series B scale','Architecture reviews and technical due diligence for fundraising','AI feature development accelerating product roadmap by 40%','Cloud infrastructure setup with 60% lower burn rate'),
    'stats' => array(array('40%','Faster Time-to-Market'),array('60%','Lower Infra Cost'),array('3x','Engineering Velocity'),array('50+','Startups Served')),
    'dark' => false,
  ),
  array(
    'id' => 'government',
    'icon' => '&#127963;',
    'name' => 'Government &amp; Public Sector',
    'badge' => 'badge-blue',
    'headline' => 'Build <span class="grad-text">Citizen-Centric</span> Digital Government',
    'desc' => 'Government agencies are under increasing pressure to deliver efficient, transparent and citizen-centric digital services. We help public sector organisations modernise legacy systems, implement e-governance platforms and harness data for evidence-based policy making — with full compliance and security.',
    'usecases' => array('e-Governance Platform Development','Citizen Services Portal','Government Data Platform','AI-Powered Policy Analytics','Smart City Infrastructure','Regulatory Technology (RegTech)','Public Safety AI','Digital Identity Systems'),
    'solutions' => array('Citizen service portal serving 10M+ transactions monthly','Government data platform unifying 30+ departmental data sources','AI-powered service routing reducing resolution time by 55%','Secure, compliant cloud migration to NIC/MeitY infrastructure'),
    'stats' => array(array('55%','Faster Resolution'),array('10M+','Citizens Served'),array('30+','Depts Integrated'),array('99.9%','Uptime Delivered')),
    'dark' => true,
  ),
);
foreach($industries as $ind){ ?>

<section class="section <?php echo $ind['dark'] ? 'section-dark' : ''; ?>" id="<?php echo $ind['id']; ?>">
  <div class="container">
    <div class="col-split">
      <div class="reveal">
        <div style="display:flex;align-items:center;gap:12px;margin-bottom:20px;">
          <span class="badge <?php echo $ind['badge']; ?>"><?php echo $ind['icon']; ?> <?php echo htmlspecialchars(strip_tags($ind['name'])); ?></span>
        </div>
        <h2 class="display-2 section-heading"><?php echo $ind['headline']; ?></h2>
        <p style="color:var(--text-secondary);line-height:1.8;margin-bottom:24px;"><?php echo $ind['desc']; ?></p>
        <div class="grid-2" style="gap:12px;margin-bottom:24px;">
          <?php foreach($ind['stats'] as $s){ ?>
          <div style="padding:16px;background:rgba(0,144,255,0.06);border:1px solid rgba(0,144,255,0.12);border-radius:var(--radius-md);text-align:center;">
            <div style="font-size:1.6rem;font-weight:900;font-family:var(--font-head);background:var(--grad-brand);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;"><?php echo $s[0]; ?></div>
            <div style="font-size:0.75rem;color:var(--text-muted);"><?php echo $s[1]; ?></div>
          </div>
          <?php } ?>
        </div>
        <a href="contact.php" class="btn btn-primary">Discuss Your Challenge &rarr;</a>
      </div>
      <div class="reveal">
        <div style="background:var(--navy-light);border:1px solid var(--border);border-radius:var(--radius-xl);padding:32px;">
          <h4 style="font-size:0.78rem;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--blue-bright);margin-bottom:18px;">Use Cases &amp; Solutions</h4>
          <div class="use-case-tags" style="margin-bottom:28px;">
            <?php foreach($ind['usecases'] as $u){ ?><span class="use-case-tag"><?php echo $u; ?></span><?php } ?>
          </div>
          <h4 style="font-size:0.78rem;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--teal);margin-bottom:14px;">Example Deliverables</h4>
          <ul style="list-style:none;padding:0;">
            <?php foreach($ind['solutions'] as $s){ ?>
            <li style="padding:8px 0;border-bottom:1px solid var(--border);font-size:0.88rem;color:var(--text-secondary);display:flex;gap:10px;">
              <span style="color:var(--teal);flex-shrink:0;">&#9656;</span><?php echo $s; ?>
            </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="divider"></div>

<?php } ?>

<!-- CTA -->
<section class="section section-dark">
  <div class="container reveal">
    <div class="cta-band">
      <div class="badge badge-blue" style="margin-bottom:20px;">&#127758; Your Industry, Our Expertise</div>
      <h2>Tell Us About Your <span class="grad-text">Industry Challenge</span></h2>
      <p>Our industry experts will design a tailored solution approach for your specific context, regulatory environment and competitive landscape.</p>
      <div class="gap-row" style="justify-content:center;">
        <a href="contact.php" class="btn btn-primary btn-lg">Start a Conversation &rarr;</a>
        <a href="case-studies.php" class="btn btn-secondary btn-lg">Industry Case Studies</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
