<?php
define('BASE_URL', '');
$active     = 'services';
$page_title = 'Technology Services – Astrl Mind Technologies Pvt Ltd';
$page_desc  = 'Expert technology services: Custom Software Development, Cloud Engineering, Data Engineering and AI Solutions delivered by Astrl Mind Technologies.';
include 'includes/header.php';
?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="index.php">Home</a><span class="sep">/</span><span>Services</span></div>
    <div class="badge badge-blue" style="margin-bottom:20px;">&#9881; Technology Services</div>
    <h1 class="display-2">Engineering Services<br><span class="grad-text">That Deliver Results</span></h1>
    <p class="lead mt-3" style="max-width:600px;margin:0 auto;">From concept to production — our four core service practices deliver end-to-end technology solutions with engineering rigour and measurable outcomes.</p>
  </div>
</section>

<!-- Service Nav -->
<div style="position:relative;z-index:1;background:var(--navy);border-bottom:1px solid var(--border);padding:0 28px;">
  <div class="container" style="padding-top:0;padding-bottom:0;">
    <div style="display:flex;gap:4px;overflow-x:auto;padding:16px 0;">
      <?php foreach(array(array('custom-dev','Custom Software Dev'),array('cloud','Cloud Engineering'),array('data','Data Engineering'),array('ai','AI Solutions')) as $tab){ ?>
      <a href="#<?php echo $tab[0]; ?>" style="white-space:nowrap;padding:8px 20px;border-radius:var(--radius-full);font-size:0.85rem;font-weight:600;color:var(--text-muted);border:1px solid var(--border);text-decoration:none;transition:all 0.2s;"
         onmouseover="this.style.color='#fff';this.style.background='rgba(0,200,255,0.08)'"
         onmouseout="this.style.color='var(--text-muted)';this.style.background='transparent'"><?php echo $tab[1]; ?></a>
      <?php } ?>
    </div>
  </div>
</div>

<!-- ============================================================
     CUSTOM SOFTWARE DEVELOPMENT
     ============================================================ -->
<section class="section" id="custom-dev">
  <div class="container">
    <div class="col-split">
      <div class="reveal">
        <div class="section-label">Service 01</div>
        <h2 class="display-2 section-heading">Custom Software <span class="grad-text">Development</span></h2>
        <p style="color:var(--text-secondary);line-height:1.8;margin-bottom:24px;">We build bespoke enterprise software that solves your unique business challenges — designed for scale, security and long-term maintainability. Our engineering teams work in agile sprints delivering production-ready software with full test coverage.</p>
        <ul class="check-list">
          <?php foreach(array('Full-stack web and mobile application development','Microservices and API-first architecture','Enterprise system integration (ERP, CRM, legacy)','SaaS product engineering','Progressive Web Apps and native mobile','DevSecOps and CI/CD pipeline setup') as $c){ ?>
          <li><?php echo $c; ?></li>
          <?php } ?>
        </ul>
        <a href="contact.php" class="btn btn-primary mt-4">Start a Project &rarr;</a>
      </div>
      <div class="reveal">
        <div class="service-detail-card">
          <div class="service-detail-icon" style="background:rgba(0,144,255,0.1);">&#128187;</div>
          <h3>Our Development Stack</h3>
          <p>Battle-tested technologies chosen for reliability, performance and long-term community support.</p>
          <div style="display:flex;flex-wrap:wrap;gap:8px;">
            <?php foreach(array('Java/Spring','Python/Django','Node.js','React','Angular','Vue.js','React Native','Flutter','PostgreSQL','MongoDB','Redis','Kafka','Docker','Kubernetes','AWS','Azure') as $tech){ ?>
            <span class="industry-tag"><?php echo $tech; ?></span>
            <?php } ?>
          </div>
          <div style="margin-top:28px;">
            <h4 style="font-size:0.82rem;font-weight:700;text-transform:uppercase;letter-spacing:0.08em;color:var(--blue-bright);margin-bottom:16px;">Development Process</h4>
            <?php foreach(array(array('Discovery','Requirements, architecture and roadmap definition'),array('Design','UX design, system architecture, API specification'),array('Build','2-week sprints, code review, automated testing'),array('Deploy','CI/CD, cloud deployment, performance testing'),array('Support','Monitoring, SLAs, continuous improvement')) as $s){ ?>
            <div class="process-step">
              <div class="step-num"><?php echo substr($s[0],0,2); ?></div>
              <div class="step-content"><h4><?php echo $s[0]; ?></h4><p><?php echo $s[1]; ?></p></div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- ============================================================
     CLOUD ENGINEERING
     ============================================================ -->
<section class="section section-dark" id="cloud">
  <div class="container">
    <div class="col-split-rev">
      <div class="reveal">
        <div class="service-detail-card">
          <div class="service-detail-icon" style="background:rgba(108,71,255,0.1);">&#9729;</div>
          <h3>Cloud Engineering Services</h3>
          <ul class="service-sub-list">
            <?php foreach(array(
              array('Cloud Strategy &amp; Assessment','Multi-cloud readiness assessment, total cost of ownership analysis and cloud adoption roadmap development.'),
              array('Cloud Migration','Lift-and-shift, re-platform and re-architect migrations with zero-downtime strategies for AWS, Azure and GCP.'),
              array('Cloud-Native Architecture','Microservices, serverless, containerised architectures designed for cloud-native scalability and resilience.'),
              array('DevOps &amp; CI/CD','Full DevOps transformation: automated pipelines, IaC with Terraform, GitOps and platform engineering.'),
              array('Cloud Security','Zero-trust architecture, IAM design, secrets management, network security and continuous compliance.'),
              array('FinOps','Cloud cost governance, rightsizing, reserved instance strategy and showback/chargeback frameworks.'),
            ) as $s){ ?>
            <li>
              <div>
                <strong><?php echo $s[0]; ?></strong>
                <?php echo $s[1]; ?>
              </div>
            </li>
            <?php } ?>
          </ul>
        </div>
      </div>
      <div class="reveal">
        <div class="section-label">Service 02</div>
        <h2 class="display-2 section-heading">Cloud <span class="grad-text">Engineering</span></h2>
        <p style="color:var(--text-secondary);line-height:1.8;margin-bottom:24px;">Migrate, modernise and operate your cloud infrastructure with confidence. Our cloud engineers hold 200+ AWS, Azure and GCP certifications and have delivered 150+ cloud transformation projects.</p>
        <div class="grid-2" style="gap:16px;margin-bottom:28px;">
          <?php foreach(array(array('150+','Cloud Projects'),array('200+','Certifications'),array('99.9%','Uptime Delivered'),array('40%','Avg Cost Reduction')) as $m){ ?>
          <div style="padding:18px;background:rgba(108,71,255,0.06);border:1px solid rgba(108,71,255,0.2);border-radius:var(--radius-md);text-align:center;">
            <div style="font-size:1.8rem;font-weight:900;font-family:var(--font-head);background:var(--grad-brand);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;"><?php echo $m[0]; ?></div>
            <div style="font-size:0.78rem;color:var(--text-muted);"><?php echo $m[1]; ?></div>
          </div>
          <?php } ?>
        </div>
        <a href="contact.php" class="btn btn-primary">Cloud Consultation &rarr;</a>
      </div>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- ============================================================
     DATA ENGINEERING
     ============================================================ -->
<section class="section" id="data">
  <div class="container">
    <div class="col-split">
      <div class="reveal">
        <div class="section-label">Service 03</div>
        <h2 class="display-2 section-heading">Data <span class="grad-text">Engineering</span></h2>
        <p style="color:var(--text-secondary);line-height:1.8;margin-bottom:24px;">Build the data foundation your AI and analytics initiatives need. Our data engineers design and deliver robust data platforms, real-time pipelines and self-serve analytics that turn raw data into enterprise intelligence.</p>
        <ul class="check-list">
          <?php foreach(array('Modern data warehouse and data lake architecture','Real-time streaming data pipelines (Kafka, Spark)','ETL/ELT pipeline development and orchestration','Data quality, lineage and governance frameworks','Analytics engineering with dbt and Snowflake','Self-serve analytics platform implementation') as $c){ ?>
          <li><?php echo $c; ?></li>
          <?php } ?>
        </ul>
        <a href="contact.php" class="btn btn-primary mt-4">Data Platform Consultation &rarr;</a>
      </div>
      <div class="reveal">
        <div class="service-detail-card">
          <div class="service-detail-icon" style="background:rgba(0,212,164,0.1);">&#128451;</div>
          <h3>Data Platform Technologies</h3>
          <p>Best-in-class tools for every layer of the modern data stack.</p>
          <?php
          $stack = array(
            array('Warehousing','Snowflake, BigQuery, Redshift, Azure Synapse'),
            array('Processing','Apache Spark, Databricks, Flink, Beam'),
            array('Orchestration','Airflow, Dagster, Prefect, dbt'),
            array('Streaming','Kafka, Kinesis, Pub/Sub, Event Hubs'),
            array('Visualisation','Tableau, Power BI, Looker, Astrl Analytics'),
          );
          foreach($stack as $s){ ?>
          <div style="display:flex;gap:14px;padding:12px 0;border-bottom:1px solid var(--border);">
            <span style="font-size:0.78rem;font-weight:700;color:var(--teal);min-width:100px;"><?php echo $s[0]; ?></span>
            <span style="font-size:0.85rem;color:var(--text-secondary);"><?php echo $s[1]; ?></span>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- ============================================================
     AI SOLUTIONS
     ============================================================ -->
<section class="section section-dark" id="ai">
  <div class="container">
    <div class="col-split-rev">
      <div class="reveal">
        <div class="service-detail-card">
          <div class="service-detail-icon" style="background:rgba(0,144,255,0.1);">&#129302;</div>
          <h3>AI Solutions Services</h3>
          <ul class="service-sub-list">
            <?php foreach(array(
              array('ML Model Development','Custom machine learning models for classification, regression, recommendation, forecasting and anomaly detection.'),
              array('Generative AI Implementation','LLM fine-tuning, RAG architectures, AI agents and GenAI application development for enterprise use cases.'),
              array('NLP &amp; Document Intelligence','Text classification, entity extraction, document processing, contract analysis and intelligent search systems.'),
              array('Computer Vision','Image/video classification, object detection, OCR, quality inspection and visual inspection automation.'),
              array('AI Process Automation','Intelligent automation of knowledge-work processes using AI agents, document AI and decision automation.'),
              array('AI Governance &amp; Ethics','Responsible AI frameworks, model explainability, fairness audits and AI policy design for regulated industries.'),
            ) as $s){ ?>
            <li>
              <div>
                <strong><?php echo $s[0]; ?></strong>
                <?php echo $s[1]; ?>
              </div>
            </li>
            <?php } ?>
          </ul>
        </div>
      </div>
      <div class="reveal">
        <div class="section-label">Service 04</div>
        <h2 class="display-2 section-heading">AI <span class="grad-text">Solutions</span></h2>
        <p style="color:var(--text-secondary);line-height:1.8;margin-bottom:24px;">Move beyond AI experiments to production-grade AI that creates real business value. Our AI team includes ex-Google, ex-Amazon and ex-Microsoft researchers who have built AI systems processing billions of data points daily.</p>
        <div class="grid-2" style="gap:16px;margin-bottom:28px;">
          <?php foreach(array(array('100+','AI Models Deployed'),array('5B+','Data Points Processed'),array('15','AI Specialists'),array('10+','AI Patents')) as $m){ ?>
          <div style="padding:18px;background:rgba(0,144,255,0.06);border:1px solid rgba(0,144,255,0.15);border-radius:var(--radius-md);text-align:center;">
            <div style="font-size:1.8rem;font-weight:900;font-family:var(--font-head);background:var(--grad-brand);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;"><?php echo $m[0]; ?></div>
            <div style="font-size:0.78rem;color:var(--text-muted);"><?php echo $m[1]; ?></div>
          </div>
          <?php } ?>
        </div>
        <a href="contact.php" class="btn btn-primary">AI Strategy Session &rarr;</a>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="section">
  <div class="container reveal">
    <div class="cta-band">
      <div class="badge badge-teal" style="margin-bottom:20px;">&#9881; Let&rsquo;s Engineer Together</div>
      <h2>Ready to Start Your <span class="grad-text">Engineering Journey?</span></h2>
      <p>Tell us your challenge. Our solution architects will design the right approach for your technology goals.</p>
      <div class="gap-row" style="justify-content:center;">
        <a href="contact.php" class="btn btn-primary btn-lg">Talk to Our Engineers &rarr;</a>
        <a href="consulting.php" class="btn btn-secondary btn-lg">Consulting Services</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
