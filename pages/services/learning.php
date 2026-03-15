<?php
define('BASE_PATH', dirname(dirname(__DIR__)));
define('BASE_URL', '../../');
$current_page = 'services';
$page_title   = 'Learning & Talent Development – Astrl Mind Technologies';
$page_desc    = 'CLO Division: Train-to-hire, corporate upskilling, curriculum development, expert trainers and placement programs that build world-class professionals.';
include BASE_PATH . '/includes/header.php';
?>

<section class="page-hero">
  <div class="container" style="position:relative;z-index:1;">
    <div class="breadcrumb"><a href="<?php echo BASE_URL; ?>index.php">Home</a><span>/</span><a href="<?php echo BASE_URL; ?>services.php">Services</a><span>/</span><span>Learning &amp; Talent</span></div>
    <span class="badge badge-accent">🎓 CLO Division</span>
    <h1 class="mt-2">Learning &amp; <span class="gradient-text">Talent Development</span></h1>
    <p class="lead mt-2">Transforming raw potential into industry-ready excellence — through rigorous training, expert mentorship and powerful placement networks.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="reveal">
        <span class="badge badge-accent">📚 Our Approach</span>
        <h2 class="section-title mt-2">Building the <span class="gradient-text">Talent of Tomorrow</span></h2>
        <p style="color:var(--text-muted);margin-top:16px;line-height:1.9;">Our CLO division is Astrl Mind's human capital engine. We design and deliver learning programs that combine deep technical skills with industry awareness, professional readiness and placement support — creating professionals enterprises are eager to hire.</p>
        <p style="color:var(--text-muted);margin-top:14px;line-height:1.9;">From freshers needing their first tech breakthrough to seasoned professionals seeking to upskill — and from corporate L&amp;D teams to HR heads managing workforce transformation — our learning programs deliver measurable outcomes.</p>
        <div class="tag-list">
          <span class="tag">Full-Stack Development</span><span class="tag">Data Science</span><span class="tag">Cloud Computing</span>
          <span class="tag">DevOps</span><span class="tag">AI / ML</span><span class="tag">Cybersecurity</span>
          <span class="tag">Product Management</span><span class="tag">Soft Skills</span>
        </div>
      </div>
      <div class="reveal">
        <div class="card" style="background:linear-gradient(135deg,rgba(0,200,255,0.06),rgba(6,214,160,0.06));">
          <h4 style="font-size:1.2rem;margin-bottom:20px;color:var(--accent);">Learning Division Impact</h4>
          <?php $stats = array(array('500+','Professionals Trained'),array('92%','Placement Rate'),array('50+','Curriculum Modules'),array('30+','Industry Partners')); foreach($stats as $s){ ?>
          <div style="display:flex;justify-content:space-between;align-items:center;padding:12px 0;border-bottom:1px solid var(--border);">
            <span style="color:var(--text-muted);font-size:0.9rem;"><?php echo $s[1]; ?></span>
            <span style="color:var(--accent);font-weight:800;font-size:1.1rem;"><?php echo $s[0]; ?></span>
          </div>
          <?php } ?>
          <div class="mt-3"><a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-primary" style="width:100%;justify-content:center;">Explore Programs →</a></div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- PROGRAMS SECTION -->
<section class="section" style="background:linear-gradient(135deg,rgba(0,200,255,0.03),rgba(6,214,160,0.03));">
  <div class="container">
    <div class="text-center mb-4 reveal">
      <span class="badge badge-accent">🎯 Programs</span>
      <h2 class="section-title mt-2">Our Learning <span class="gradient-text">Programs</span></h2>
    </div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:24px;" class="stagger">
      <?php
      $programs = array(
        array('🚀','Full-Stack Development Bootcamp','12-week intensive program covering frontend, backend, databases and deployment.','12 Weeks','Beginner to Intermediate'),
        array('🤖','AI &amp; Data Science Program','Comprehensive course in ML, deep learning, NLP and real-world data projects.','16 Weeks','Intermediate to Advanced'),
        array('☁️','Cloud &amp; DevOps Mastery','AWS/Azure certification prep, CI/CD, Docker, Kubernetes and infrastructure as code.','10 Weeks','Intermediate'),
        array('🔒','Cybersecurity Professional','Ethical hacking, VAPT, security frameworks and industry certifications.','12 Weeks','All Levels'),
        array('📦','Product Management Fundamentals','Product thinking, agile methodology, user research and go-to-market strategy.','8 Weeks','All Levels'),
        array('🏢','Corporate Upskilling Programs','Custom L&amp;D solutions tailored to enterprise workforce transformation needs.','Custom Duration','Enterprise'),
      );
      foreach($programs as $p){ ?>
      <div class="card">
        <div style="font-size:2rem;margin-bottom:14px;"><?php echo $p[0]; ?></div>
        <h3 style="font-size:1.05rem;margin-bottom:8px;"><?php echo $p[1]; ?></h3>
        <p style="font-size:0.85rem;color:var(--text-muted);margin-bottom:16px;"><?php echo $p[2]; ?></p>
        <div style="display:flex;gap:8px;flex-wrap:wrap;">
          <span class="badge badge-accent" style="font-size:0.72rem;">⏱️ <?php echo $p[3]; ?></span>
          <span class="badge badge-purple" style="font-size:0.72rem;">👥 <?php echo $p[4]; ?></span>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>

<div class="divider"></div>

<section class="section">
  <div class="container">
    <div class="text-center mb-4 reveal">
      <span class="badge badge-accent">🏗️ Sub-Departments</span>
      <h2 class="section-title mt-2">Five Pillars of <span class="gradient-text">Learning Excellence</span></h2>
    </div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:24px;" class="stagger">
      <?php
      $subs = array(
        array('🎯','Train-to-Hire Programs',
          'Cohort-based programs designed around specific employer needs — bridging the talent gap directly.',
          array('Employer-aligned skill tracks','Pre-placement assessments','Live project experience','Mock interviews &amp; grooming','Direct employer connect')),
        array('🏢','Corporate Skilling &amp; Upskilling',
          'Custom workforce transformation programs designed in partnership with enterprise L&amp;D teams.',
          array('Needs analysis &amp; skill gap assessment','Custom curriculum design','Instructor-led &amp; blended learning','Executive leadership programs','Learning ROI measurement')),
        array('📚','Curriculum Development',
          'Building rigorous, industry-aligned learning paths that evolve with market demands.',
          array('Outcome-based curriculum design','Industry expert collaboration','Content quality assurance','Assessment design','Accreditation &amp; certification alignment')),
        array('👨‍🏫','Trainers &amp; Faculty',
          'A pool of exceptional instructors — industry practitioners, certified trainers and domain experts.',
          array('Practitioner-first instructor selection','Train-the-trainer programs','Faculty quality reviews','Guest lecture series','Mentorship pairing')),
        array('🤝','Placement &amp; Industry Partnerships',
          'A robust network that connects trained talent with the best opportunities — fast.',
          array('Job placement facilitation','Campus hiring drives','Alumni network &amp; referrals','Industry MoU programs','Career counselling &amp; coaching')),
      );
      foreach($subs as $s){ ?>
      <div class="card">
        <div style="font-size:2rem;margin-bottom:14px;"><?php echo $s[0]; ?></div>
        <h3 style="font-size:1.1rem;margin-bottom:8px;"><?php echo $s[1]; ?></h3>
        <p style="font-size:0.87rem;color:var(--text-muted);margin-bottom:16px;"><?php echo $s[2]; ?></p>
        <ul style="list-style:none;padding:0;">
          <?php foreach($s[3] as $item){ ?>
          <li style="display:flex;align-items:center;gap:8px;padding:5px 0;font-size:0.82rem;color:var(--text-muted);">
            <span style="color:var(--accent);font-size:0.7rem;">✦</span><?php echo $item; ?>
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
      <h2>Invest in <span class="gradient-text">Human Capital Excellence</span></h2>
      <p>Whether you're an individual seeking career transformation or an enterprise building a world-class team — Astrl Mind Learning has your program.</p>
      <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
        <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-primary">Enrol Now →</a>
        <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-outline">Corporate Programs</a>
      </div>
    </div>
  </div>
</section>

<?php include BASE_PATH . '/includes/footer.php'; ?>
