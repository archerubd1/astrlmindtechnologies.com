<?php
define('BASE_PATH', __DIR__);
define('BASE_URL', '');
$current_page = 'about';
$page_title   = 'About Us – Astrl Mind Technologies';
$page_desc    = 'Discover the story, vision, mission and values that drive Astrl Mind Technologies — a future-forward technology and innovation company.';
include 'includes/header.php';
?>

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="container" style="position:relative;z-index:1;">
    <div class="breadcrumb"><a href="index.php">Home</a><span>/</span><span>About Us</span></div>
    <span class="badge badge-accent">🏢 Our Story</span>
    <h1 class="mt-2">About <span class="gradient-text">Astrl Mind Technologies</span></h1>
    <p class="lead mt-2">A future-forward technology company architected to transform businesses, empower talent and amplify human potential in the digital age.</p>
  </div>
</section>

<!-- STORY -->
<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="reveal">
        <span class="badge badge-purple">📖 Our Genesis</span>
        <h2 class="section-title mt-2">Born from a <span class="gradient-text">Bold Vision</span></h2>
        <p style="color:var(--text-muted);margin-top:16px;line-height:1.9;">
          Astrl Mind Technologies was founded on a singular belief: <strong style="color:#fff;">the future belongs to those who architect it.</strong> In an era of exponential technological change, organisations need a partner that doesn't just react — but proactively shapes what's next.
        </p>
        <p style="color:var(--text-muted);margin-top:16px;line-height:1.9;">
          We built Astrl Mind to be that partner. A company where deep engineering expertise meets strategic consulting, where human creativity meets machine intelligence, and where world-class product design meets relentless innovation.
        </p>
        <p style="color:var(--text-muted);margin-top:16px;line-height:1.9;">
          Our name — <strong style="color:var(--accent);">Astrl</strong> — reflects our aspiration to reach beyond the known horizon, and <strong style="color:var(--accent);">Mind</strong> reflects our commitment to intelligent, thoughtful execution.
        </p>
      </div>
      <div class="reveal">
        <div class="card" style="padding:40px;">
          <div class="timeline">
            <div class="timeline-item">
              <div class="timeline-year">Foundation</div>
              <div class="timeline-title">Astrl Mind Technologies Founded</div>
              <div class="timeline-desc">Established with a vision to be a holistic technology partner serving enterprise and startup ecosystems.</div>
            </div>
            <div class="timeline-item">
              <div class="timeline-year">Phase 1</div>
              <div class="timeline-title">Core Technology Division Launch</div>
              <div class="timeline-desc">Software Engineering, DevOps and Cloud Infrastructure teams assembled and first enterprise projects delivered.</div>
            </div>
            <div class="timeline-item">
              <div class="timeline-year">Phase 2</div>
              <div class="timeline-title">Product &amp; Learning Verticals</div>
              <div class="timeline-desc">CPO and CLO divisions activated — launching Train-to-Hire programs and Product Innovation Lab.</div>
            </div>
            <div class="timeline-item">
              <div class="timeline-year">Phase 3</div>
              <div class="timeline-title">Full-Spectrum Operations</div>
              <div class="timeline-desc">All 7 divisions operational. Content, Marketing and Finance verticals complete the 360° service ecosystem.</div>
            </div>
            <div class="timeline-item">
              <div class="timeline-year">Future</div>
              <div class="timeline-title">Global Expansion &amp; AI-Native Platform</div>
              <div class="timeline-desc">Scaling internationally with proprietary AI platforms, strategic partnerships and 10x talent programs.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- VISION / MISSION / VALUES -->
<section class="section" style="background:linear-gradient(135deg,rgba(0,200,255,0.03),rgba(124,58,237,0.04));">
  <div class="container">
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:28px;" class="stagger">

      <div class="card" style="border-top:2px solid var(--accent);">
        <div style="font-size:2.5rem;margin-bottom:18px;">🔭</div>
        <h3 style="font-size:1.4rem;margin-bottom:12px;">Our Vision</h3>
        <p style="color:var(--text-muted);line-height:1.8;">To be the world's most trusted technology and human potential company — where innovation is not just a practice but a culture, and where every stakeholder we serve achieves extraordinary outcomes.</p>
      </div>

      <div class="card" style="border-top:2px solid var(--accent2);">
        <div style="font-size:2.5rem;margin-bottom:18px;">🎯</div>
        <h3 style="font-size:1.4rem;margin-bottom:12px;">Our Mission</h3>
        <p style="color:var(--text-muted);line-height:1.8;">Build future-proof technology solutions, develop world-class talent, create compelling content and drive measurable, lasting growth for every enterprise, startup and individual we partner with.</p>
      </div>

      <div class="card" style="border-top:2px solid var(--accent3);">
        <div style="font-size:2.5rem;margin-bottom:18px;">💎</div>
        <h3 style="font-size:1.4rem;margin-bottom:12px;">Our Purpose</h3>
        <p style="color:var(--text-muted);line-height:1.8;">To democratise access to world-class technology and knowledge — empowering businesses of every size to compete, innovate and win in a rapidly evolving digital landscape.</p>
      </div>

    </div>
  </div>
</section>

<div class="divider"></div>

<!-- CORE VALUES -->
<section class="section">
  <div class="container">
    <div class="text-center mb-4 reveal">
      <span class="badge badge-gold">💎 Core Values</span>
      <h2 class="section-title mt-2">The Principles that <span class="gradient-text">Guide Us</span></h2>
    </div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:24px;" class="stagger">
      <?php
      $values = array(
        array('🧠','Innovation First','We relentlessly pursue new ideas, technologies and approaches. Status quo is not in our vocabulary.'),
        array('🤝','Integrity Always','Every interaction, every contract, every line of code is governed by unwavering ethical standards.'),
        array('🏆','Excellence in Delivery','We set the bar high and clear it every time — on time, on budget, beyond expectations.'),
        array('❤️','Human-Centric Thinking','Technology should serve people. Every solution we build is designed with the end user at heart.'),
        array('📚','Continuous Learning','Markets evolve, technologies advance. We invest relentlessly in staying ahead so our clients benefit.'),
        array('🔓','Radical Transparency','We communicate openly, share progress honestly and treat our clients as true partners.'),
        array('🌱','Sustainable Growth','We build for longevity — solutions, careers and partnerships that compound value over time.'),
        array('🌍','Inclusive Excellence','Diverse teams build better products. We champion inclusivity, equity and belonging at every level.'),
      );
      foreach($values as $v){ ?>
      <div class="why-card">
        <div style="font-size:2rem;margin-bottom:14px;"><?php echo $v[0]; ?></div>
        <h4 style="font-size:1rem;margin-bottom:8px;"><?php echo $v[1]; ?></h4>
        <p style="font-size:0.87rem;color:var(--text-muted);"><?php echo $v[2]; ?></p>
      </div>
      <?php } ?>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- LEADERSHIP TEASER -->
<section class="section">
  <div class="container">
    <div class="text-center mb-4 reveal">
      <span class="badge badge-accent">👥 Leadership</span>
      <h2 class="section-title mt-2">Led by <span class="gradient-text">Visionaries</span></h2>
      <p class="section-subtitle">Our C-suite and department heads bring decades of combined expertise across technology, product, business and human capital.</p>
    </div>
    <div class="team-grid stagger">
      <?php
      $leaders = array(
        array('CEO','Founder &amp; CEO','Visionary entrepreneur driving company strategy, culture and global growth.','#00c8ff,#7c3aed'),
        array('CTO','Chief Technology Officer','Architect of our technology stack, platform strategy and engineering culture.','#7c3aed,#06d6a0'),
        array('COO','Chief Operating Officer','Operations mastermind ensuring seamless delivery, quality and client success.','#06d6a0,#00c8ff'),
        array('CPO','Chief Product Officer','Product visionary leading design, innovation lab and product strategy.','#f59e0b,#ef4444'),
        array('CFO','Chief Financial Officer','Financial architect managing governance, compliance and fiscal strategy.','#a855f7,#7c3aed'),
        array('CMO','Chief Marketing Officer','Growth engine driving enterprise sales, brand and strategic partnerships.','#f59e0b,#06d6a0'),
        array('CLO','Chief Learning Officer','Talent champion building next-gen professionals through learning &amp; placement.','#00c8ff,#06d6a0'),
        array('CCO','Chief Content Officer','Content visionary amplifying brand voice across all media and channels.','#ef4444,#f59e0b'),
      );
      foreach($leaders as $l){ ?>
      <div class="team-card">
        <div class="team-avatar" style="background:linear-gradient(135deg,<?php echo $l[3]; ?>);"><?php echo $l[0]; ?></div>
        <div class="role"><?php echo $l[0]; ?></div>
        <h4><?php echo $l[1]; ?></h4>
        <p style="font-size:0.83rem;margin-top:8px;"><?php echo $l[2]; ?></p>
      </div>
      <?php } ?>
    </div>
    <div class="text-center mt-4 reveal">
      <a href="leadership.php" class="btn btn-primary">View Full Leadership Structure →</a>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- CTA -->
<section class="section">
  <div class="container reveal">
    <div class="cta-banner">
      <h2>Join the <span class="gradient-text">Astrl Mind</span> Journey</h2>
      <p>Whether you're looking to partner, join our team or learn more about what we do — we'd love to connect.</p>
      <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
        <a href="contact.php"  class="btn btn-primary">Get in Touch →</a>
        <a href="careers.php"  class="btn btn-outline">View Careers</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
