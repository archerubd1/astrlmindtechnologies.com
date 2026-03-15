<?php
define('BASE_URL', '');
$active     = '';
$page_title = 'Case Studies – Astrl Mind Technologies Pvt Ltd';
$page_desc  = 'Real transformation stories from Astrl Mind Technologies. Explore case studies showing 40%+ efficiency improvements across Banking, Healthcare, Manufacturing and more.';
include 'includes/header.php';
?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="index.php">Home</a><span class="sep">/</span><span>Case Studies</span></div>
    <div class="badge badge-teal" style="margin-bottom:20px;">&#128200; Client Success</div>
    <h1 class="display-2">Real Transformation.<br><span class="grad-text">Measurable Impact.</span></h1>
    <p class="lead mt-3" style="max-width:600px;margin:0 auto;">Stories of enterprises that partnered with Astrl Mind to solve their most complex technology challenges — with results that speak for themselves.</p>
  </div>
</section>

<section class="section section-dark">
  <div class="container">
    <!-- Filter bar -->
    <div style="display:flex;gap:8px;flex-wrap:wrap;margin-bottom:48px;" class="reveal">
      <?php foreach(array('All','Banking','Healthcare','Manufacturing','Retail','Government','Startups') as $filter){ ?>
      <span style="padding:8px 20px;background:<?php echo ($filter==='All'?'var(--grad-brand)':'rgba(255,255,255,0.04)'); ?>;border:1px solid <?php echo ($filter==='All'?'transparent':'var(--border)'); ?>;border-radius:var(--radius-full);font-size:0.83rem;font-weight:600;color:<?php echo ($filter==='All'?'#fff':'var(--text-muted)'); ?>;cursor:pointer;"><?php echo $filter; ?></span>
      <?php } ?>
    </div>

    <?php
    $cases = array(
      array(
        'industry' => 'Banking',
        'badge' => 'badge-blue',
        'company' => 'NationalBank India',
        'title' => 'Core Banking Digital Transformation',
        'challenge' => 'A leading national bank with 15 million customers faced critical challenges: a 25-year-old monolithic core banking system unable to support real-time transactions, a 3-day fraud detection cycle causing $50M in annual losses, and inability to launch new products in less than 6 months.',
        'solution' => array(
          'Decomposed monolithic core banking into 47 domain-driven microservices',
          'Built real-time AI fraud detection system processing 10,000 TPS',
          'Implemented cloud-native infrastructure on AWS with 99.99% SLA',
          'Launched API gateway enabling 200+ fintech partnerships',
          'Created unified customer 360 platform integrating all data sources',
        ),
        'impact' => array(array('40%','Cost Reduction'),array('2x','Transaction Speed'),array('99.99%','System Uptime'),array('6 weeks','New Product Launch')),
        'duration' => '18 Months',
        'team' => '45 Engineers',
      ),
      array(
        'industry' => 'Healthcare',
        'badge' => 'badge-teal',
        'company' => 'Apollo Health Network',
        'title' => 'Unified Patient Data Platform',
        'challenge' => 'A network of 28 hospitals had patient data fragmented across 12 legacy systems, causing dangerous information gaps in clinical decision-making, compliance risks with DPDP regulations, and 2+ hours wasted daily by clinicians searching for patient information.',
        'solution' => array(
          'Designed HL7 FHIR-compliant patient data unification platform',
          'Integrated 12 legacy systems with zero-downtime data migration',
          'Built real-time clinical decision support with NLP on unstructured notes',
          'Implemented role-based access with full audit trail for compliance',
          'Deployed diagnostic AI for radiology reducing report turnaround by 60%',
        ),
        'impact' => array(array('60%','Faster Diagnosis'),array('5M+','Records Unified'),array('30%','Cost Savings'),array('2hrs/day','Clinician Time Saved')),
        'duration' => '14 Months',
        'team' => '32 Engineers',
      ),
      array(
        'industry' => 'Manufacturing',
        'badge' => 'badge-amber',
        'company' => 'Bharat Steel Works',
        'title' => 'Smart Factory &amp; Predictive Maintenance Platform',
        'challenge' => 'A steel manufacturer with 8 plants was experiencing 22% annual downtime due to unexpected equipment failures, costing $8M annually in lost production. They lacked real-time visibility into machine health and could not predict failures more than hours in advance.',
        'solution' => array(
          'Deployed IIoT platform connecting 347 critical machines with sensor arrays',
          'Built ML-based predictive maintenance models with 92% accuracy',
          'Created real-time operations dashboard with anomaly detection',
          'Implemented computer vision quality inspection on 3 production lines',
          'Integrated with existing ERP for automated maintenance scheduling',
        ),
        'impact' => array(array('65%','Downtime Reduction'),array('$5.2M','Annual Savings'),array('92%','Prediction Accuracy'),array('18 months','ROI Achieved')),
        'duration' => '12 Months',
        'team' => '28 Engineers',
      ),
      array(
        'industry' => 'Retail',
        'badge' => 'badge-violet',
        'company' => 'FashionFirst India',
        'title' => 'AI Personalisation &amp; Omnichannel Commerce',
        'challenge' => 'A leading fashion retailer with 400 stores and 12M online customers was losing revenue to digital-native competitors due to generic, non-personalised experiences. Their inventory management was causing 18% overstock and 12% stockout rates simultaneously.',
        'solution' => array(
          'Built real-time personalisation engine serving 50M+ recommendations daily',
          'Implemented AI demand forecasting reducing forecast error by 45%',
          'Created unified inventory platform across online and 400 physical stores',
          'Deployed dynamic pricing AI with competitor and demand signals',
          'Built mobile commerce app with AR-powered virtual try-on',
        ),
        'impact' => array(array('35%','Revenue Growth'),array('25%','Inventory Reduction'),array('15%','Margin Improvement'),array('3x','App Engagement')),
        'duration' => '16 Months',
        'team' => '38 Engineers',
      ),
      array(
        'industry' => 'Government',
        'badge' => 'badge-blue',
        'company' => 'Smart City Mission',
        'title' => 'Integrated Smart City Platform',
        'challenge' => 'A Tier-1 Indian city needed to integrate 15 disparate civic services — from traffic management to waste collection to citizen grievance — into a unified smart city platform while maintaining 99.9% uptime for critical services serving 4 million citizens.',
        'solution' => array(
          'Designed and built integrated smart city data platform',
          'Connected 15 civic departments via event-driven microservices architecture',
          'Deployed AI for traffic signal optimisation reducing congestion by 28%',
          'Built citizen mobile app with 22 self-service functions',
          'Implemented real-time command centre with ML-powered alerts',
        ),
        'impact' => array(array('55%','Faster Resolution'),array('4M+','Citizens Served'),array('28%','Traffic Reduction'),array('99.9%','Platform Uptime')),
        'duration' => '24 Months',
        'team' => '55 Engineers',
      ),
      array(
        'industry' => 'Startups',
        'badge' => 'badge-green',
        'company' => 'FinEdge Technologies',
        'title' => 'Series A to Series B Scale Engineering',
        'challenge' => 'A fintech startup that had achieved product-market fit with 50,000 users needed to scale to 5M users in 18 months following Series A fundraise. Their monolithic PHP application was already struggling and their 3-person engineering team lacked the capacity and expertise to re-architect while continuing to ship features.',
        'solution' => array(
          'Embedded 8 senior engineers to work alongside founding team',
          'Re-architected monolith to event-driven microservices in parallel with feature development',
          'Implemented cloud-native infrastructure on AWS with auto-scaling',
          'Reduced infrastructure cost by 60% through rightsizing and reserved instances',
          'Achieved 5M user milestone 2 months ahead of schedule',
        ),
        'impact' => array(array('100x','Scale Achieved'),array('60%','Infra Cost Down'),array('99.99%','Uptime at Scale'),array('2 months','Ahead of Schedule')),
        'duration' => '18 Months',
        'team' => '8 Engineers',
      ),
    );
    foreach($cases as $c){ ?>
    <div class="case-full">
      <div class="case-full-header">
        <div>
          <span class="badge <?php echo $c['badge']; ?>" style="margin-bottom:12px;"><?php echo $c['industry']; ?></span>
          <h2 style="font-size:1.4rem;margin-bottom:8px;"><?php echo $c['title']; ?></h2>
          <p style="font-size:0.88rem;color:var(--text-muted);"><?php echo $c['company']; ?></p>
        </div>
        <div style="display:flex;gap:16px;flex-shrink:0;flex-wrap:wrap;">
          <div style="text-align:center;padding:16px 20px;background:rgba(0,144,255,0.08);border:1px solid rgba(0,144,255,0.15);border-radius:var(--radius-md);">
            <div style="font-size:0.9rem;font-weight:700;color:var(--blue-bright);"><?php echo $c['duration']; ?></div>
            <div style="font-size:0.72rem;color:var(--text-muted);">Duration</div>
          </div>
          <div style="text-align:center;padding:16px 20px;background:rgba(0,212,164,0.06);border:1px solid rgba(0,212,164,0.15);border-radius:var(--radius-md);">
            <div style="font-size:0.9rem;font-weight:700;color:var(--teal);"><?php echo $c['team']; ?></div>
            <div style="font-size:0.72rem;color:var(--text-muted);">Team Size</div>
          </div>
        </div>
      </div>
      <div class="case-full-body">
        <div class="case-section">
          <h4>The Challenge</h4>
          <p><?php echo $c['challenge']; ?></p>
        </div>
        <div class="case-section">
          <h4>Our Solution</h4>
          <ul>
            <?php foreach($c['solution'] as $s){ ?><li><?php echo $s; ?></li><?php } ?>
          </ul>
        </div>
        <div class="case-section">
          <h4>Business Impact</h4>
          <?php foreach($c['impact'] as $im){ ?>
          <div class="impact-metric">
            <div class="num"><?php echo $im[0]; ?></div>
            <div class="lbl"><?php echo $im[1]; ?></div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
</section>

<!-- CTA -->
<section class="section">
  <div class="container reveal">
    <div class="cta-band">
      <div class="badge badge-teal" style="margin-bottom:20px;">&#128200; Your Success Story</div>
      <h2>Ready to Write Your <span class="grad-text">Success Story?</span></h2>
      <p>Join 200+ enterprises that have transformed their operations with Astrl Mind Technologies.</p>
      <div class="gap-row" style="justify-content:center;">
        <a href="contact.php" class="btn btn-primary btn-lg">Start Your Transformation &rarr;</a>
        <a href="consulting.php" class="btn btn-secondary btn-lg">Consulting Services</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
