<?php
define('BASE_URL', '');
$active     = 'careers';
$page_title = 'Careers – Astrl Mind Technologies Pvt Ltd';
$page_desc  = 'Join Astrl Mind Technologies. Explore career opportunities in AI, Cloud Engineering, Software Development, Product Management and more.';
include 'includes/header.php';
?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="index.php">Home</a><span class="sep">/</span><span>Careers</span></div>
    <div class="badge badge-green" style="margin-bottom:20px;">&#127775; Join Our Team</div>
    <h1 class="display-2">Build the Future.<br><span class="grad-text">With Us.</span></h1>
    <p class="lead mt-3" style="max-width:600px;margin:0 auto;">Join a team of 500+ engineers, designers and strategists on a mission to engineer the intelligent digital infrastructure of tomorrow. We hire for potential, passion and purpose — not just experience.</p>
    <div class="gap-row mt-4" style="justify-content:center;">
      <a href="#open-positions" class="btn btn-primary btn-lg">View Open Positions &rarr;</a>
      <a href="contact.php" class="btn btn-secondary btn-lg">Reach Out Directly</a>
    </div>
  </div>
</section>

<!-- Why Work With Us -->
<section class="section section-dark">
  <div class="container">
    <div class="text-center reveal">
      <div class="section-label" style="justify-content:center;">Why Astrl Mind</div>
      <h2 class="display-2 section-heading">Why Work <span class="grad-text">With Us?</span></h2>
      <p class="section-sub center">We have built an environment where the best engineers do their best work — and grow faster than anywhere else.</p>
    </div>
    <div class="grid-3 stagger">
      <?php foreach(array(
        array('&#128161;','Innovation Culture','Work on cutting-edge AI, cloud and enterprise technology that is actually deployed to millions of users — not prototype projects. Your code ships and makes a difference.','#0090ff','rgba(0,144,255,0.06)'),
        array('&#128640;','Cutting-Edge Technology','Access to the latest AI models, cloud platforms, data tools and engineering frameworks. We invest in our engineers having the best tools and most interesting technical challenges.','#6c47ff','rgba(108,71,255,0.06)'),
        array('&#127945;','Rapid Career Growth','Our engineers grow 2x faster than the industry average. With a flat hierarchy, clear progression frameworks and leadership opportunities at every level, your career moves at the pace you set.','#00d4a4','rgba(0,212,164,0.06)'),
        array('&#128100;','Brilliant Teammates','Work alongside ex-FAANG engineers, PhD researchers and startup founders. The quality of your colleagues is the most important factor in your growth — and ours are exceptional.','#f59e0b','rgba(245,158,11,0.06)'),
        array('&#127758;','Meaningful Impact','Every project we take on creates real business value for our clients — and real impact on the people and organisations they serve. Your work matters.','#a78bfa','rgba(108,71,255,0.06)'),
        array('&#127968;','Flexibility &amp; Benefits','Hybrid and remote-friendly work. Competitive compensation, ESOPs, health insurance, learning budget, home office setup and 30 days annual leave. We value your life outside work.','#22c55e','rgba(34,197,94,0.06)'),
      ) as $w){ ?>
      <div class="card" style="border-top:3px solid <?php echo $w[3]; ?>;background:<?php echo $w[4]; ?>;">
        <div style="font-size:2.2rem;margin-bottom:16px;"><?php echo $w[0]; ?></div>
        <h3 style="font-size:1.05rem;margin-bottom:10px;color:<?php echo $w[3]; ?>;"><?php echo $w[1]; ?></h3>
        <p style="font-size:0.87rem;color:var(--text-secondary);line-height:1.75;"><?php echo $w[2]; ?></p>
      </div>
      <?php } ?>
    </div>
  </div>
</section>

<!-- Benefits -->
<section class="section">
  <div class="container">
    <div class="col-split">
      <div class="reveal">
        <div class="section-label">Benefits &amp; Perks</div>
        <h2 class="display-2 section-heading">We Take Care of <span class="grad-text">Our People</span></h2>
        <p style="color:var(--text-secondary);line-height:1.8;margin-bottom:28px;">Beyond competitive salaries, we offer a comprehensive package designed to help you thrive at work and in life.</p>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;">
          <?php foreach(array(
            array('&#128176;','Competitive Salary','Top-of-market compensation benchmarked against FAANG and top Indian tech companies.'),
            array('&#128200;','ESOPs','Employee stock ownership plan to share in the company\'s growth and success.'),
            array('&#127973;','Health Insurance','Comprehensive family health insurance covering spouse, children and parents.'),
            array('&#127891;','Learning Budget','INR 1 Lakh annual learning budget for courses, certifications and conferences.'),
            array('&#127968;','Hybrid Work','Work from any of our 4 offices or remote. Flexible hours with output-focused culture.'),
            array('&#127963;','Team Offsites','Quarterly team events and annual company-wide offsite for collaboration and fun.'),
          ) as $b){ ?>
          <div style="padding:16px;background:rgba(255,255,255,0.03);border:1px solid var(--border);border-radius:var(--radius-md);">
            <div style="font-size:1.4rem;margin-bottom:8px;"><?php echo $b[0]; ?></div>
            <div style="font-size:0.88rem;font-weight:700;margin-bottom:4px;"><?php echo $b[1]; ?></div>
            <div style="font-size:0.8rem;color:var(--text-muted);"><?php echo $b[2]; ?></div>
          </div>
          <?php } ?>
        </div>
      </div>
      <div class="reveal">
        <!-- Life at Astrl Mind -->
        <div class="section-label">Our Culture</div>
        <h3 style="font-size:1.4rem;margin-bottom:20px;">Life at <span class="grad-text">Astrl Mind</span></h3>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:24px;">
          <?php foreach(array(array('500+','Team Members'),array('4','Office Locations'),array('35%','Women in Tech'),array('20+','Nationalities')) as $s){ ?>
          <div style="padding:20px;background:var(--navy-light);border:1px solid var(--border);border-radius:var(--radius-md);text-align:center;">
            <div style="font-size:1.8rem;font-weight:900;font-family:var(--font-head);background:var(--grad-brand);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;"><?php echo $s[0]; ?></div>
            <div style="font-size:0.78rem;color:var(--text-muted);"><?php echo $s[1]; ?></div>
          </div>
          <?php } ?>
        </div>
        <div style="display:flex;flex-wrap:wrap;gap:10px;">
          <?php foreach(array('AI Research Hours','Tech Talks','Hackathons','Mentorship','Open Source','Code Reviews','Architecture Reviews','DevDays') as $c){ ?>
          <div class="culture-pill"><?php echo $c; ?></div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Open Positions -->
<section class="section section-dark" id="open-positions">
  <div class="container">
    <div class="text-center reveal">
      <div class="section-label" style="justify-content:center;">Open Positions</div>
      <h2 class="display-2 section-heading">Find Your <span class="grad-text">Next Role</span></h2>
      <p class="section-sub center">We are always looking for exceptional engineers, product leaders and technology strategists. Here are our current openings.</p>
    </div>

    <?php
    $departments = array(
      array(
        'dept' => 'Engineering',
        'icon' => '&#128187;',
        'jobs' => array(
          array('Senior Software Engineer','Bengaluru / Remote','Full-time','5-8 yrs','Java, Spring Boot, Microservices, Kubernetes, PostgreSQL. Lead backend development of enterprise platform features.'),
          array('AI / ML Engineer','Bengaluru / Hyderabad','Full-time','3-6 yrs','Python, PyTorch, Scikit-learn, MLflow. Build and deploy ML models for enterprise AI applications.'),
          array('DevOps / Platform Engineer','Mumbai / Remote','Full-time','4-7 yrs','Kubernetes, Terraform, AWS/Azure, CI/CD. Build and operate cloud-native engineering platforms.'),
          array('Frontend Engineer (React)','Bengaluru / Delhi','Full-time','3-5 yrs','React, TypeScript, GraphQL, design systems. Build world-class enterprise product interfaces.'),
          array('Data Engineer','Bengaluru / Hyderabad','Full-time','3-6 yrs','Spark, Airflow, dbt, Snowflake, Kafka. Design and build enterprise data platforms.'),
        ),
      ),
      array(
        'dept' => 'Product',
        'icon' => '&#128230;',
        'jobs' => array(
          array('Senior Product Manager','Bengaluru','Full-time','5-8 yrs','Enterprise SaaS product management. Own roadmap for one of our four platform products.'),
          array('Product Designer (UX/UI)','Bengaluru / Remote','Full-time','3-6 yrs','Figma, design systems, enterprise UX. Create intuitive experiences for complex enterprise products.'),
        ),
      ),
      array(
        'dept' => 'Consulting',
        'icon' => '&#128188;',
        'jobs' => array(
          array('Technology Consultant','Bengaluru / Mumbai','Full-time','4-8 yrs','Digital transformation, enterprise architecture or cloud strategy. Work with C-suite clients on technology strategy.'),
          array('Cloud Architect','All Locations','Full-time','6-10 yrs','AWS/Azure/GCP architecture, cloud migration. Lead cloud transformation engagements for enterprise clients.'),
        ),
      ),
    );
    foreach($departments as $d){ ?>
    <div style="margin-bottom:48px;" class="reveal">
      <h3 style="display:flex;align-items:center;gap:12px;font-size:1.15rem;margin-bottom:24px;padding-bottom:16px;border-bottom:1px solid var(--border);">
        <span style="font-size:1.4rem;"><?php echo $d['icon']; ?></span>
        <?php echo $d['dept']; ?>
        <span style="font-size:0.78rem;color:var(--text-muted);font-weight:400;">(<?php echo count($d['jobs']); ?> openings)</span>
      </h3>
      <?php foreach($d['jobs'] as $j){ ?>
      <div class="job-card">
        <div class="job-info">
          <h4><?php echo $j[0]; ?></h4>
          <div class="job-meta">
            <span class="job-meta-item">&#128205; <?php echo $j[1]; ?></span>
            <span class="job-meta-item">&#128197; <?php echo $j[2]; ?></span>
            <span class="job-meta-item">&#9728; <?php echo $j[3]; ?></span>
          </div>
          <p style="font-size:0.85rem;color:var(--text-muted);margin-top:8px;line-height:1.6;"><?php echo $j[4]; ?></p>
        </div>
        <a href="contact.php?role=<?php echo urlencode($j[0]); ?>" class="job-badge">Apply Now &rarr;</a>
      </div>
      <?php } ?>
    </div>
    <?php } ?>
  </div>
</section>

<!-- Hiring Process -->
<section class="section">
  <div class="container">
    <div class="text-center reveal">
      <div class="section-label" style="justify-content:center;">How We Hire</div>
      <h2 class="display-2 section-heading">Our <span class="grad-text">Hiring Process</span></h2>
      <p class="section-sub center">A transparent, respectful and efficient process designed to find the best mutual fit — typically completed in under 3 weeks.</p>
    </div>
    <div class="grid-4 stagger">
      <?php foreach(array(
        array('1','Application Review','We review every application personally. If your profile matches, we respond within 5 business days.'),
        array('2','Introductory Call','30-minute call with our talent team to discuss your background, interests and the role in detail.'),
        array('3','Technical Interview','Role-specific technical assessment: coding challenge, architecture discussion or consulting case.'),
        array('4','Final Interview','Meeting with the team lead and cross-functional members. Culture, values and mutual expectations.'),
      ) as $s){ ?>
      <div class="card" style="text-align:center;">
        <div style="width:56px;height:56px;border-radius:50%;background:var(--grad-brand);display:flex;align-items:center;justify-content:center;font-size:1.3rem;font-weight:900;color:#fff;font-family:var(--font-head);margin:0 auto 16px;"><?php echo $s[0]; ?></div>
        <h3 style="font-size:1rem;margin-bottom:10px;"><?php echo $s[1]; ?></h3>
        <p style="font-size:0.85rem;color:var(--text-secondary);line-height:1.7;"><?php echo $s[2]; ?></p>
      </div>
      <?php } ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="section section-dark">
  <div class="container reveal">
    <div class="cta-band">
      <div class="badge badge-green" style="margin-bottom:20px;">&#127775; Join the Mission</div>
      <h2>Don&rsquo;t See the <span class="grad-text">Right Role?</span></h2>
      <p>We are always looking for exceptional people. Send us your profile and tell us how you would like to contribute to Astrl Mind&rsquo;s mission.</p>
      <div class="gap-row" style="justify-content:center;">
        <a href="contact.php" class="btn btn-primary btn-lg">Send Your Profile &rarr;</a>
        <a href="about.php" class="btn btn-secondary btn-lg">Learn About Us</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
