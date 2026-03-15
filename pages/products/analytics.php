<?php
define('BASE_URL', '../../');
$active     = 'products';
$page_title = 'Astrl Analytics – Enterprise Business Intelligence Platform';
$page_desc  = 'Astrl Analytics: real-time dashboards, predictive analytics and self-serve BI for enterprise teams. Transform data into actionable intelligence.';
include '../../includes/header.php';
?>
<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="<?php echo BASE_URL; ?>index.php">Home</a><span class="sep">/</span><a href="<?php echo BASE_URL; ?>products.php">Products</a><span class="sep">/</span><span>Astrl Analytics</span></div>
    <div class="badge badge-teal" style="margin-bottom:20px;">&#128202; Business Intelligence</div>
    <h1 class="display-2">Astrl <span class="grad-text">Analytics</span></h1>
    <p class="lead mt-3" style="max-width:600px;margin:0 auto;">Turn every data point into a competitive advantage with real-time dashboards, predictive intelligence and AI-driven data storytelling.</p>
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
        <h2 class="display-2 section-heading">From Raw Data to <span class="grad-text">Board-Ready Insights</span></h2>
        <p style="color:var(--text-secondary);line-height:1.8;margin-bottom:24px;">Astrl Analytics empowers every employee — from the CEO to frontline operations — with access to real-time, relevant intelligence. Connect 200+ data sources, build dashboards in minutes and let AI surface the insights that matter.</p>
        <div class="grid-2" style="gap:16px;">
          <?php foreach(array(array('60%','Faster Insight'),array('200+','Data Connectors'),array('5 min','Dashboard Build'),array('100%','Self-Serve')) as $m){ ?>
          <div style="padding:20px;background:rgba(0,212,164,0.06);border:1px solid rgba(0,212,164,0.2);border-radius:var(--radius-md);text-align:center;">
            <div style="font-size:2rem;font-weight:900;font-family:var(--font-head);background:var(--grad-teal);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;"><?php echo $m[0]; ?></div>
            <div style="font-size:0.8rem;color:var(--text-muted);"><?php echo $m[1]; ?></div>
          </div>
          <?php } ?>
        </div>
        <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-teal mt-4">See It Live &rarr;</a>
      </div>
      <div class="reveal">
        <div class="arch-box">
          <h3 style="font-size:1rem;color:var(--teal);margin-bottom:20px;">Platform Architecture</h3>
          <?php foreach(array(array('1','Presentation Layer','Dashboards, Reports, NL Query, Embedded Analytics'),array('2','Analytics Engine','Real-time Streaming, Batch Processing, OLAP'),array('3','AI Intelligence','Predictive Models, Anomaly Detection, Forecasting'),array('4','Data Modeling','Semantic Layer, Metrics Store, Data Catalog'),array('5','Ingestion Layer','200+ Connectors, CDC, API, File &amp; Stream'),array('6','Storage Layer','Data Warehouse, Data Lake, Real-time DB')) as $l){ ?>
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
        array('&#9889;','Real-time Dashboards','Sub-second refresh dashboards that update live as data arrives — no more stale reports.'),
        array('&#129504;','Predictive Analytics','Built-in ML models for forecasting, trend analysis and what-if scenario modelling.'),
        array('&#128172;','Natural Language Query','Ask questions in plain English and get instant visualisations — no SQL knowledge required.'),
        array('&#128204;','Data Storytelling','AI-generated narrative summaries that explain what changed, why it changed and what to do.'),
        array('&#128268;','200+ Connectors','Connect any data source — databases, SaaS apps, files, APIs and streaming data in minutes.'),
        array('&#128737;','Row-Level Security','Fine-grained data access controls ensuring every user sees exactly the data they are authorised for.'),
        array('&#128247;','Embedded Analytics','Embed dashboards and charts into any application with our SDK and white-labelled components.'),
        array('&#128241;','Mobile Analytics','Responsive dashboards with offline support and push notifications for on-the-go insight.'),
      ) as $f){ ?>
      <div class="card">
        <div class="card-icon" style="background:rgba(0,212,164,0.1);font-size:1.4rem;"><?php echo $f[0]; ?></div>
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
      <h2>Make <span class="grad-text">Data-Driven Decisions</span> Faster</h2>
      <p>Get a live demo of Astrl Analytics tailored to your data sources and business questions.</p>
      <div class="gap-row" style="justify-content:center;">
        <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-primary btn-lg">Request Demo &rarr;</a>
        <a href="<?php echo BASE_URL; ?>products.php" class="btn btn-secondary btn-lg">All Products</a>
      </div>
    </div>
  </div>
</section>
<?php include '../../includes/footer.php'; ?>
