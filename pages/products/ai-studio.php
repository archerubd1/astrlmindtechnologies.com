<?php
define('BASE_URL', '../../');
$active     = 'products';
$page_title = 'Astrl AI Studio – Enterprise AI Development Platform';
$page_desc  = 'Astrl AI Studio: full-lifecycle AI development platform for AutoML, NLP, Computer Vision and MLOps. Build, deploy and monitor AI models at enterprise scale.';
include '../../includes/header.php';
?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="<?php echo BASE_URL; ?>index.php">Home</a><span class="sep">/</span><a href="<?php echo BASE_URL; ?>products.php">Products</a><span class="sep">/</span><span>Astrl AI Studio</span></div>
    <div class="badge badge-blue" style="margin-bottom:20px;">&#129302; Enterprise AI Platform</div>
    <h1 class="display-2">Astrl <span class="grad-text">AI Studio</span></h1>
    <p class="lead mt-3" style="max-width:600px;margin:0 auto;">From data to intelligence — the complete enterprise platform for building, deploying and governing AI at scale.</p>
    <div class="gap-row mt-4" style="justify-content:center;">
      <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-primary btn-lg">Request Demo &rarr;</a>
      <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-secondary btn-lg">Get Pricing</a>
    </div>
  </div>
</section>

<!-- Problem / Solution -->
<section class="section section-dark">
  <div class="container">
    <div class="col-split">
      <div class="reveal">
        <div style="background:rgba(255,77,109,0.06);border:1px solid rgba(255,77,109,0.2);border-radius:var(--radius-xl);padding:36px;margin-bottom:24px;">
          <h3 style="color:var(--red);font-size:1.1rem;margin-bottom:16px;">&#128683; The Problem</h3>
          <ul style="list-style:none;padding:0;">
            <?php foreach(array('87% of AI projects never reach production','Fragmented tools for data prep, training and deployment','No governance for models in production','Data science teams work in silos','ML experiments not reproducible') as $pr){ ?>
            <li style="padding:8px 0;border-bottom:1px solid var(--border);font-size:0.9rem;color:var(--text-secondary);display:flex;gap:10px;"><span style="color:var(--red);">&#8722;</span><?php echo $pr; ?></li>
            <?php } ?>
          </ul>
        </div>
        <div style="background:rgba(0,212,164,0.06);border:1px solid rgba(0,212,164,0.2);border-radius:var(--radius-xl);padding:36px;">
          <h3 style="color:var(--teal);font-size:1.1rem;margin-bottom:16px;">&#10003; The Astrl AI Studio Solution</h3>
          <ul style="list-style:none;padding:0;">
            <?php foreach(array('Unified platform for entire AI lifecycle','No-code AutoML for business users','One-click model deployment to any cloud','Built-in MLOps, monitoring and governance','Full experiment tracking and reproducibility') as $so){ ?>
            <li style="padding:8px 0;border-bottom:1px solid rgba(0,212,164,0.1);font-size:0.9rem;color:var(--text-secondary);display:flex;gap:10px;"><span style="color:var(--teal);">&#10003;</span><?php echo $so; ?></li>
            <?php } ?>
          </ul>
        </div>
      </div>
      <div class="reveal">
        <div class="section-label">Astrl AI Studio</div>
        <h2 class="display-2 section-heading">AI at <span class="grad-text">Enterprise Scale</span></h2>
        <p style="color:var(--text-secondary);line-height:1.8;margin-bottom:24px;">Astrl AI Studio is the end-to-end AI development platform trusted by enterprises to move from data to production-ready AI in weeks, not months. Whether you are a data scientist building deep learning models or a business analyst creating AI-powered reports — AI Studio has you covered.</p>
        <div class="grid-2" style="gap:16px;">
          <?php foreach(array(array('10x','Faster Deployment'),array('70%','Less Engineering Effort'),array('200+','Algorithms Available'),array('99.9%','Platform Uptime')) as $m){ ?>
          <div style="padding:20px;background:rgba(0,144,255,0.06);border:1px solid rgba(0,144,255,0.15);border-radius:var(--radius-md);text-align:center;">
            <div style="font-size:2rem;font-weight:900;font-family:var(--font-head);background:var(--grad-brand);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;"><?php echo $m[0]; ?></div>
            <div style="font-size:0.8rem;color:var(--text-muted);"><?php echo $m[1]; ?></div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Key Features -->
<section class="section">
  <div class="container">
    <div class="text-center reveal">
      <div class="section-label" style="justify-content:center;">Capabilities</div>
      <h2 class="display-2 section-heading">Key <span class="grad-text">Features</span></h2>
    </div>
    <div class="grid-3 stagger">
      <?php
      $features = array(
        array('&#129528;','AutoML Pipeline','50+ algorithms, automated feature engineering, hyperparameter tuning and model selection. Build production-ready models without writing a single line of code.'),
        array('&#128172;','NLP Engine','State-of-the-art natural language processing: sentiment analysis, entity extraction, document classification, text generation and multilingual support for 40+ languages.'),
        array('&#128247;','Vision AI Toolkit','Computer vision capabilities including image classification, object detection, OCR, facial analysis and video analytics — deployable at the edge or cloud.'),
        array('&#128196;','Model Registry','Centralised repository to version, compare, promote and audit all ML models with full lineage tracking and one-click rollback capability.'),
        array('&#128268;','Real-time APIs','Deploy any model as a production-grade REST or GraphQL API with sub-100ms latency, auto-scaling and built-in authentication.'),
        array('&#128295;','MLOps Automation','End-to-end MLOps with CI/CD for models, automated retraining triggers, drift detection, performance monitoring and alerting.'),
        array('&#129302;','Generative AI Studio','Build, fine-tune and deploy LLM-powered applications with RAG, prompt engineering tools, vector databases and safety guardrails.'),
        array('&#128737;','Responsible AI','Explainability dashboards, fairness analysis, bias detection and audit reports to ensure responsible and compliant AI deployment.'),
        array('&#9729;','Multi-Cloud Deployment','Deploy models to AWS SageMaker, Azure ML, GCP Vertex AI or on-premise Kubernetes — from a single unified interface.'),
      );
      foreach($features as $f){ ?>
      <div class="service-detail-card">
        <div class="service-detail-icon" style="background:rgba(0,144,255,0.1);"><?php echo $f[0]; ?></div>
        <h3><?php echo $f[1]; ?></h3>
        <p style="font-size:0.88rem;color:var(--text-secondary);line-height:1.7;"><?php echo $f[2]; ?></p>
      </div>
      <?php } ?>
    </div>
  </div>
</section>

<!-- Architecture -->
<section class="section section-dark">
  <div class="container">
    <div class="text-center reveal">
      <div class="section-label" style="justify-content:center;">Platform Architecture</div>
      <h2 class="display-2 section-heading">Built for <span class="grad-text">Enterprise Scale</span></h2>
    </div>
    <div class="col-split reveal">
      <div class="arch-box">
        <?php
        $layers = array(
          array('1','Presentation Layer','Web Studio, Jupyter Integration, REST APIs, SDKs'),
          array('2','Workflow Orchestration','Pipeline Builder, DAG Scheduling, Experiment Tracking'),
          array('3','Model Training Engine','AutoML, Distributed Training, GPU/TPU Support'),
          array('4','Data Processing Layer','Feature Store, Data Versioning, ETL Pipelines'),
          array('5','Infrastructure Layer','Kubernetes, Multi-Cloud, On-Premise, Edge'),
          array('6','Security &amp; Governance','RBAC, Audit Logs, Encryption, Compliance'),
        );
        foreach($layers as $l){ ?>
        <div class="arch-layer">
          <div class="arch-layer-num"><?php echo $l[0]; ?></div>
          <div class="arch-layer-info">
            <strong><?php echo $l[1]; ?></strong>
            <span><?php echo $l[2]; ?></span>
          </div>
        </div>
        <?php } ?>
      </div>
      <div>
        <h3 style="font-size:1.3rem;margin-bottom:20px;">Enterprise-Ready by Design</h3>
        <?php foreach(array(array('99.9% SLA','Guaranteed platform availability with active-active redundancy and automatic failover'),array('SOC 2 Type II','Full compliance with enterprise security and data governance standards'),array('GDPR Ready','Data residency controls, consent management and right to erasure built in'),array('24/7 Support','Dedicated customer success and technical support teams')) as $f){ ?>
        <div style="display:flex;gap:14px;padding:16px 0;border-bottom:1px solid var(--border);">
          <span style="color:var(--teal);flex-shrink:0;font-weight:700;min-width:90px;font-size:0.85rem;"><?php echo $f[0]; ?></span>
          <span style="font-size:0.88rem;color:var(--text-secondary);"><?php echo $f[1]; ?></span>
        </div>
        <?php } ?>
        <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-primary mt-4">Get Architecture Consultation &rarr;</a>
      </div>
    </div>
  </div>
</section>

<!-- Demo CTA -->
<section class="section">
  <div class="container reveal">
    <div class="cta-band">
      <div class="badge badge-blue" style="margin-bottom:20px;">&#129302; Live Demo</div>
      <h2>See Astrl AI Studio <span class="grad-text">in Action</span></h2>
      <p>Get a 45-minute personalised demo with our AI Solutions team — tailored to your industry, data and use case.</p>
      <div class="gap-row" style="justify-content:center;">
        <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-primary btn-lg">Request Demo &rarr;</a>
        <a href="<?php echo BASE_URL; ?>products.php" class="btn btn-secondary btn-lg">All Products</a>
      </div>
    </div>
  </div>
</section>

<?php include '../../includes/footer.php'; ?>
