<?php
define('BASE_URL', '');
$active     = 'about';
$page_title = 'About Us – Astrl Mind Technologies Pvt Ltd';
$page_desc  = 'Learn about Astrl Mind Technologies: our story, vision, mission, core values and the leadership team driving intelligent digital transformation.';
include 'includes/header.php';
?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="index.php">Home</a><span class="sep">/</span><span>About Us</span></div>
    <div class="badge badge-blue" style="margin-bottom:20px;">&#127970; Our Story</div>
    <h1 class="display-2">Engineering Tomorrow,<br><span class="grad-text">Together</span></h1>
    <p class="lead mt-3" style="max-width:600px;margin:0 auto;">We are Astrl Mind Technologies Pvt Ltd — an engineering-first technology company on a mission to build the intelligent digital infrastructure of the future.</p>
  </div>
</section>

<!-- ============================================================
     COMPANY OVERVIEW
     ============================================================ -->
<section class="section section-dark">
  <div class="container">
    <div class="col-split">
      <div class="reveal">
        <div class="section-label">Company Overview</div>
        <h2 class="display-2 section-heading">Who We <span class="grad-text">Are</span></h2>
        <p style="color:var(--text-secondary);line-height:1.8;margin-bottom:20px;">Astrl Mind Technologies Pvt Ltd was founded with a single conviction: that the most powerful technology solutions are born at the intersection of deep engineering expertise and genuine business empathy.</p>
        <p style="color:var(--text-secondary);line-height:1.8;margin-bottom:20px;">Headquartered in Bengaluru with offices across Mumbai, Delhi and Hyderabad, we have grown from a focused AI research team into a full-spectrum digital transformation company serving enterprises across 15+ industries globally.</p>
        <p style="color:var(--text-secondary);line-height:1.8;">Today, Astrl Mind powers the digital operations of 200+ enterprises through our four flagship product platforms, bespoke engineering services and strategic consulting practice.</p>
        <div class="gap-row mt-4">
          <a href="contact.php"  class="btn btn-primary">Work With Us &rarr;</a>
          <a href="case-studies.php" class="btn btn-ghost">Case Studies</a>
        </div>
      </div>
      <div class="reveal">
        <div class="grid-2" style="gap:20px;">
          <?php
          $overview = array(
            array('&#128205;','Headquarters','Bengaluru, Karnataka, India'),
            array('&#127970;','Offices','4 Cities across India'),
            array('&#127758;','Global Clients','200+ Enterprises Worldwide'),
            array('&#128100;','Team','500+ Engineers &amp; Consultants'),
            array('&#127942;','Founded','2014 — 10+ Years of Excellence'),
            array('&#128451;','Industries','15+ Verticals Served'),
          );
          foreach($overview as $o){ ?>
          <div style="padding:22px;background:rgba(255,255,255,0.03);border:1px solid var(--border);border-radius:var(--radius-md);">
            <div style="font-size:1.6rem;margin-bottom:8px;"><?php echo $o[0]; ?></div>
            <div style="font-size:0.75rem;font-weight:700;color:var(--blue-bright);letter-spacing:0.08em;text-transform:uppercase;margin-bottom:4px;"><?php echo $o[1]; ?></div>
            <div style="font-size:0.88rem;color:var(--text-secondary);"><?php echo $o[2]; ?></div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     VISION & MISSION
     ============================================================ -->
<section class="section">
  <div class="container">
    <div class="text-center reveal">
      <div class="section-label" style="justify-content:center;">Our Purpose</div>
      <h2 class="display-2 section-heading">Vision &amp; <span class="grad-text">Mission</span></h2>
    </div>
    <div class="grid-2 stagger" style="gap:32px;">
      <div style="background:linear-gradient(135deg,rgba(0,144,255,0.08),rgba(108,71,255,0.06));border:1px solid var(--border-glow);border-radius:var(--radius-xl);padding:48px;">
        <div style="font-size:2.5rem;margin-bottom:20px;">&#128302;</div>
        <div class="badge badge-blue" style="margin-bottom:16px;">Our Vision</div>
        <h3 style="font-size:1.5rem;margin-bottom:16px;">To be the world's most trusted engineering partner for intelligent digital transformation.</h3>
        <p style="color:var(--text-secondary);line-height:1.8;">We envision a world where every enterprise — regardless of size, sector or geography — has access to world-class AI-powered digital infrastructure that drives sustainable growth, operational excellence and human flourishing.</p>
      </div>
      <div style="background:linear-gradient(135deg,rgba(0,212,164,0.08),rgba(0,144,255,0.06));border:1px solid rgba(0,212,164,0.2);border-radius:var(--radius-xl);padding:48px;">
        <div style="font-size:2.5rem;margin-bottom:20px;">&#127919;</div>
        <div class="badge badge-teal" style="margin-bottom:16px;">Our Mission</div>
        <h3 style="font-size:1.5rem;margin-bottom:16px;">To engineer intelligent digital platforms that solve real problems and create measurable value.</h3>
        <p style="color:var(--text-secondary);line-height:1.8;">Through relentless innovation, engineering excellence and a deep commitment to client success, we build and deploy AI-native products and services that help organisations transform, compete and lead in the digital economy.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     CORE VALUES
     ============================================================ -->
<section class="section section-dark">
  <div class="container">
    <div class="text-center reveal">
      <div class="section-label" style="justify-content:center;">What Drives Us</div>
      <h2 class="display-2 section-heading">Core <span class="grad-text">Values</span></h2>
      <p class="section-sub center">Four principles that guide every decision, every product and every client engagement at Astrl Mind.</p>
    </div>
    <div class="grid-4 stagger">
      <?php
      $values = array(
        array('&#128161;','Innovation','We constantly push boundaries — embracing emerging technologies and creative thinking to solve complex problems in ways that have never been tried before.','#0090ff','rgba(0,144,255,0.08)'),
        array('&#11088;','Excellence','We hold ourselves to the highest standards in engineering quality, delivery rigour and professional conduct — because our clients deserve nothing less.','#6c47ff','rgba(108,71,255,0.08)'),
        array('&#128736;','Integrity','We operate with radical transparency, keep our commitments and build relationships on honest communication — even when it is difficult.','#00d4a4','rgba(0,212,164,0.08)'),
        array('&#129304;','Customer Success','Our success is measured exclusively by the success of our clients. Every decision we make starts and ends with the question: does this create value for our customers?','#f59e0b','rgba(245,158,11,0.08)'),
      );
      foreach($values as $v){ ?>
      <div class="card" style="border-top:3px solid <?php echo $v[3]; ?>;background:<?php echo $v[4]; ?>;">
        <div class="card-icon" style="background:<?php echo $v[4]; ?>;font-size:2rem;"><?php echo $v[0]; ?></div>
        <h3 style="font-size:1.15rem;margin-bottom:12px;color:<?php echo $v[3]; ?>;"><?php echo $v[1]; ?></h3>
        <p style="font-size:0.87rem;color:var(--text-secondary);line-height:1.75;"><?php echo $v[2]; ?></p>
      </div>
      <?php } ?>
    </div>
  </div>
</section>

<!-- ============================================================
     LEADERSHIP TEAM
     ============================================================ -->
<section class="section">
  <div class="container">
    <div class="text-center reveal">
      <div class="section-label" style="justify-content:center;">Leadership</div>
      <h2 class="display-2 section-heading">Executive <span class="grad-text">Leadership Team</span></h2>
      <p class="section-sub center">Visionary leaders with deep expertise in technology, business and transformation.</p>
    </div>
    <div class="grid-4 stagger">
      <?php
      $leaders = array(
        array('&#128084;','Arjun Mehta','Chief Executive Officer','Visionary entrepreneur with 20+ years building technology companies. Former VP Engineering at a Fortune 500. Drives overall strategy, partnerships and company vision.'),
        array('&#9881;','Priya Sharma','Chief Technology Officer','Deep AI/ML expertise, ex-Google Brain researcher. Leads all technology strategy, product architecture, R&D and engineering excellence across Astrl Mind.'),
        array('&#128197;','Rohit Kapoor','Chief Operating Officer','Operations excellence leader with 18 years scaling enterprise tech delivery. Oversees delivery, quality, client operations and cross-functional alignment.'),
        array('&#128230;','Ananya Singh','Chief Product Officer','Product visionary with 15+ years in enterprise SaaS. Defines product strategy, roadmap and user experience across all four Astrl Mind platforms.'),
        array('&#128202;','Vikram Nair','Chief Financial Officer','Former CFO at a listed tech firm. Manages financial strategy, investor relations, legal compliance and corporate governance for sustainable growth.'),
        array('&#128248;','Divya Reddy','Chief Marketing Officer','Brand and growth strategist with 14 years in B2B technology marketing. Leads demand generation, brand positioning and go-to-market strategy.'),
        array('&#127891;','Sanjay Iyer','Chief Learning Officer','People and culture leader. Drives learning, talent development, leadership programs and building an engineering-first culture at Astrl Mind.'),
        array('&#127908;','Kavitha Pillai','Chief Content Officer','Strategic communicator and thought leadership expert. Leads content strategy, corporate communications and Astrl Mind\'s position as an industry voice.'),
      );
      foreach($leaders as $l){ ?>
      <div class="leader-card">
        <div class="leader-avatar"><?php echo $l[0]; ?></div>
        <div class="leader-name"><?php echo $l[1]; ?></div>
        <div class="leader-role"><?php echo $l[2]; ?></div>
        <p><?php echo $l[3]; ?></p>
      </div>
      <?php } ?>
    </div>
  </div>
</section>

<!-- ============================================================
     COMPANY TIMELINE
     ============================================================ -->
<section class="section section-dark">
  <div class="container">
    <div class="col-split">
      <div class="reveal">
        <div class="section-label">Our Journey</div>
        <h2 class="display-2 section-heading">A Decade of <span class="grad-text">Engineering Excellence</span></h2>
        <p style="color:var(--text-secondary);line-height:1.8;margin-bottom:32px;">From a 5-person AI research lab to a 500+ strong technology company — our journey is defined by relentless ambition and engineering discipline.</p>
        <div class="timeline">
          <?php
          $tl = array(
            array('2014','Founded','Astrl Mind started as an AI research lab in Bengaluru, focused on natural language processing and machine learning.'),
            array('2016','First Enterprise Product','Launched Astrl AI Studio — our first enterprise platform, adopted by 10 banking clients in year one.'),
            array('2018','Series A &amp; Expansion','Raised Series A funding. Expanded to Mumbai and launched Astrl Workflow automation platform.'),
            array('2020','Cloud &amp; Data Platforms','Launched Astrl Analytics and CloudOps. Opened Delhi and Hyderabad offices. Crossed 100 enterprise clients.'),
            array('2022','International Expansion','Extended operations to Singapore and UAE. Launched AI Solutions practice. Reached 200+ enterprise clients.'),
            array('2024','Next Chapter','Launched GenAI product suite, raised growth capital and set targets for global expansion across 10 markets.'),
          );
          foreach($tl as $t){ ?>
          <div class="tl-item">
            <div class="tl-year"><?php echo $t[0]; ?></div>
            <div class="tl-title"><?php echo $t[1]; ?></div>
            <div class="tl-desc"><?php echo $t[2]; ?></div>
          </div>
          <?php } ?>
        </div>
      </div>
      <div class="reveal">
        <!-- Culture section -->
        <div class="section-label">Culture &amp; Work</div>
        <h3 style="font-size:1.5rem;margin-bottom:20px;">Built on an <span class="grad-text">Engineering-First</span> Culture</h3>
        <p style="color:var(--text-secondary);line-height:1.8;margin-bottom:32px;">At Astrl Mind, our culture is our competitive advantage. We attract the brightest minds, invest in continuous learning and foster an environment where bold ideas thrive.</p>
        <div style="display:flex;flex-wrap:wrap;gap:12px;margin-bottom:32px;">
          <?php foreach(array('AI-First Mindset','Remote-Friendly','Learning &amp; Development','Open Source Contributions','Hackathons','Mentorship','Diversity &amp; Inclusion','Engineering Excellence','Impact-Driven') as $c){ ?>
          <div class="culture-pill"><?php echo $c; ?></div>
          <?php } ?>
        </div>
        <a href="careers.php" class="btn btn-primary">Join Our Team &rarr;</a>

        <div style="margin-top:48px;">
          <h4 style="font-size:1rem;margin-bottom:20px;color:var(--text-secondary);">Technology Capabilities</h4>
          <?php
          $skills = array(
            array('Artificial Intelligence &amp; ML',92),
            array('Cloud Engineering',88),
            array('Enterprise Software',95),
            array('Data Engineering &amp; Analytics',85),
            array('Product Design &amp; UX',78),
          );
          foreach($skills as $sk){ ?>
          <div class="skill-bar">
            <div class="skill-label"><span><?php echo $sk[0]; ?></span><span><?php echo $sk[1]; ?>%</span></div>
            <div class="skill-track"><div class="skill-fill" data-w="<?php echo $sk[1]; ?>"></div></div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="section">
  <div class="container reveal">
    <div class="cta-band">
      <div class="badge badge-teal" style="margin-bottom:20px;">&#128640; Partner With Us</div>
      <h2>Ready to Build <span class="grad-text">Something Great?</span></h2>
      <p>Whether you need a technology partner, a product builder or a strategic advisor — we are here to make it happen.</p>
      <div class="gap-row" style="justify-content:center;">
        <a href="contact.php" class="btn btn-primary btn-lg">Start a Conversation &rarr;</a>
        <a href="careers.php" class="btn btn-secondary btn-lg">Join Our Team</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
