<?php
/* ============================================================
   ASTRL MIND TECHNOLOGIES — Homepage (index.php)
   Compatible: PHP 5.x, MySQL 5.x, GoDaddy shared hosting
   ============================================================ */
define('BASE_PATH', __DIR__);
define('BASE_URL', '');
$current_page = 'home';
$page_title   = 'Astrl Mind Technologies – Future-Forward Technology & Innovation';
$page_desc    = 'Astrl Mind Technologies: Your strategic partner for software engineering, AI solutions, product innovation, digital transformation, corporate learning and content services.';
include 'includes/header.php';
?>

<!-- ========================================================
     HERO SECTION
     ======================================================== -->
<section class="hero">
  <div class="hero-bg"></div>
  <div class="hero-grid"></div>
  <div class="container" style="position:relative;z-index:1;">
    <div class="hero-content">
      <div class="hero-eyebrow animate-fadeInUp animate-delay-1">
        ✦ Next-Gen Technology Partner
      </div>
      <h1 class="animate-fadeInUp animate-delay-2">
        Building the<br>
        <span class="gradient-text">Future of <span id="typed-text">Technology</span></span>
      </h1>
      <p class="hero-desc animate-fadeInUp animate-delay-3">
        Astrl Mind Technologies is a full-spectrum technology and consulting powerhouse — engineering intelligent software, driving digital transformation, nurturing talent and shaping tomorrow's enterprises.
      </p>
      <div class="hero-actions animate-fadeInUp animate-delay-4">
        <a href="services.php" class="btn btn-primary">Explore Services →</a>
        <a href="about.php"    class="btn btn-outline">Our Story</a>
        <a href="contact.php"  class="btn btn-ghost">Let's Talk 💬</a>
      </div>
      <div class="hero-stats animate-fadeInUp animate-delay-4">
        <div class="hero-stat">
          <div class="hero-stat-number counter" data-target="50" data-suffix="+">0+</div>
          <div class="hero-stat-label">Solutions Delivered</div>
        </div>
        <div class="hero-stat">
          <div class="hero-stat-number counter" data-target="7" data-suffix="">0</div>
          <div class="hero-stat-label">Core Departments</div>
        </div>
        <div class="hero-stat">
          <div class="hero-stat-number counter" data-target="100" data-suffix="%">0%</div>
          <div class="hero-stat-label">Future-Aligned</div>
        </div>
        <div class="hero-stat">
          <div class="hero-stat-number counter" data-target="24" data-suffix="/7">0</div>
          <div class="hero-stat-label">Support &amp; Delivery</div>
        </div>
      </div>
    </div>
  </div>

  <!-- Decorative Orb -->
  <div class="hero-visual">
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>
    <div class="orb orb-3"></div>
  </div>
</section>

<!-- ========================================================
     STATS TICKER
     ======================================================== -->
<section class="stats-section section-sm">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-item reveal">
        <div class="stat-number counter" data-target="200" data-suffix="+">0</div>
        <div class="stat-label">Clients Worldwide</div>
      </div>
      <div class="stat-item reveal">
        <div class="stat-number counter" data-target="35" data-suffix="+">0</div>
        <div class="stat-label">Expert Team Members</div>
      </div>
      <div class="stat-item reveal">
        <div class="stat-number counter" data-target="98" data-suffix="%">0</div>
        <div class="stat-label">Client Satisfaction Rate</div>
      </div>
      <div class="stat-item reveal">
        <div class="stat-number counter" data-target="15" data-suffix="+">0</div>
        <div class="stat-label">Industry Verticals</div>
      </div>
      <div class="stat-item reveal">
        <div class="stat-number counter" data-target="500" data-suffix="+">0</div>
        <div class="stat-label">Professionals Trained</div>
      </div>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- ========================================================
     WHAT WE DO
     ======================================================== -->
<section class="section">
  <div class="container">
    <div class="text-center mb-4 reveal">
      <span class="badge badge-purple">⚡ What We Do</span>
      <h2 class="section-title mt-2">Seven Pillars of <span class="gradient-text">Excellence</span></h2>
      <p class="section-subtitle">From engineering cutting-edge platforms to nurturing human potential — our seven divisions work in synergy to deliver holistic business value.</p>
    </div>

    <div class="services-grid stagger">

      <!-- CTO -->
      <a href="pages/services/technology.php" class="service-card" style="--c1:#00c8ff;--c2:#7c3aed;">
        <div class="service-icon" style="background:rgba(0,200,255,0.12);color:#00c8ff;">⚙️</div>
        <h3>Technology &amp; Platforms</h3>
        <p>Full-stack software engineering, DevOps, cloud architecture, cybersecurity and emerging technology R&amp;D — building robust digital foundations.</p>
        <div class="arrow">Explore <span>→</span></div>
      </a>

      <!-- COO -->
      <a href="pages/services/operations.php" class="service-card" style="--c1:#06d6a0;--c2:#00c8ff;">
        <div class="service-icon" style="background:rgba(6,214,160,0.12);color:#06d6a0;">🔄</div>
        <h3>Operations &amp; Delivery</h3>
        <p>Project management, agile delivery, quality assurance, client implementation and 24/7 service operations that ensure zero-friction execution.</p>
        <div class="arrow">Explore <span>→</span></div>
      </a>

      <!-- CPO -->
      <a href="pages/services/product.php" class="service-card" style="--c1:#f59e0b;--c2:#ef4444;">
        <div class="service-icon" style="background:rgba(245,158,11,0.12);color:#f59e0b;">🚀</div>
        <h3>Product &amp; Innovation</h3>
        <p>End-to-end product management, UI/UX design, product engineering coordination and innovation lab that brings breakthrough ideas to market.</p>
        <div class="arrow">Explore <span>→</span></div>
      </a>

      <!-- CFO -->
      <a href="pages/services/finance.php" class="service-card" style="--c1:#7c3aed;--c2:#a855f7;">
        <div class="service-icon" style="background:rgba(124,58,237,0.12);color:#a855f7;">📊</div>
        <h3>Finance &amp; Compliance</h3>
        <p>Financial planning, risk audit, legal compliance, procurement and vendor management — ensuring governance, resilience and fiscal intelligence.</p>
        <div class="arrow">Explore <span>→</span></div>
      </a>

      <!-- CMO -->
      <a href="pages/services/sales.php" class="service-card" style="--c1:#f59e0b;--c2:#06d6a0;">
        <div class="service-icon" style="background:rgba(245,158,11,0.12);color:#f59e0b;">📈</div>
        <h3>Sales, Marketing &amp; Growth</h3>
        <p>Enterprise sales, business development, digital marketing, brand strategy and strategic partnerships that accelerate market penetration and revenue.</p>
        <div class="arrow">Explore <span>→</span></div>
      </a>

      <!-- CLO -->
      <a href="pages/services/learning.php" class="service-card" style="--c1:#00c8ff;--c2:#06d6a0;">
        <div class="service-icon" style="background:rgba(0,200,255,0.12);color:#00c8ff;">🎓</div>
        <h3>Learning &amp; Talent Development</h3>
        <p>Train-to-hire programs, corporate upskilling, curriculum development, placement services and industry partnerships — shaping the next generation.</p>
        <div class="arrow">Explore <span>→</span></div>
      </a>

      <!-- CCO -->
      <a href="pages/services/content.php" class="service-card" style="--c1:#ef4444;--c2:#f59e0b;">
        <div class="service-icon" style="background:rgba(239,68,68,0.12);color:#ef4444;">🎬</div>
        <h3>Content &amp; Media Services</h3>
        <p>Content strategy, production, creative design, video &amp; multimedia and distribution — amplifying brand voice across every digital channel.</p>
        <div class="arrow">Explore <span>→</span></div>
      </a>

    </div>
  </div>
</section>

<div class="divider"></div>

<!-- ========================================================
     WHY CHOOSE US
     ======================================================== -->
<section class="section">
  <div class="container">
    <div class="text-center mb-4 reveal">
      <span class="badge badge-green">🌟 Our Edge</span>
      <h2 class="section-title mt-2">Why <span class="gradient-text">Astrl Mind</span>?</h2>
      <p class="section-subtitle">We combine deep technical expertise with strategic vision to create solutions that stand the test of time.</p>
    </div>
    <div class="why-grid stagger">
      <div class="why-card">
        <div class="why-icon">🧠</div>
        <h4>Intelligence-First Approach</h4>
        <p>Every solution is engineered with AI-readiness, data-centricity and cognitive automation at its core.</p>
      </div>
      <div class="why-card">
        <div class="why-icon">🔮</div>
        <h4>Future-Aligned Strategy</h4>
        <p>Our roadmaps are designed for tomorrow. We invest in emerging tech so your business is always ahead of the curve.</p>
      </div>
      <div class="why-card">
        <div class="why-icon">🏗️</div>
        <h4>Full-Spectrum Delivery</h4>
        <p>From ideation to deployment and beyond — we provide end-to-end ownership across every phase of your transformation.</p>
      </div>
      <div class="why-card">
        <div class="why-icon">🤝</div>
        <h4>Partnership Culture</h4>
        <p>We're not vendors — we're partners. Your success metrics are our KPIs, and your growth is our mission.</p>
      </div>
      <div class="why-card">
        <div class="why-icon">🎯</div>
        <h4>Outcome-Driven Focus</h4>
        <p>Every project is measured against real business outcomes — revenue growth, efficiency gains, talent retention.</p>
      </div>
      <div class="why-card">
        <div class="why-icon">⚡</div>
        <h4>Agile &amp; Scalable</h4>
        <p>Our modular architecture and agile methodology ensure rapid delivery, seamless scaling and continuous improvement.</p>
      </div>
      <div class="why-card">
        <div class="why-icon">🛡️</div>
        <h4>Security &amp; Compliance</h4>
        <p>Enterprise-grade security, legal compliance and risk management baked into every layer of our solutions.</p>
      </div>
      <div class="why-card">
        <div class="why-icon">🌍</div>
        <h4>Global Mindset, Local Insight</h4>
        <p>We blend global best practices with deep understanding of local market dynamics for maximum impact.</p>
      </div>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- ========================================================
     COMPANY SNAPSHOT / LEADERSHIP PREVIEW
     ======================================================== -->
<section class="section">
  <div class="container">
    <div class="two-col">
      <div class="reveal">
        <span class="badge badge-accent">🏛️ Our Structure</span>
        <h2 class="section-title mt-2">Built to <span class="gradient-text">Lead Tomorrow</span></h2>
        <p style="color:var(--text-muted);margin-top:16px;line-height:1.8;">
          Astrl Mind Technologies is structured around seven specialized C-suite-led divisions — each powering a critical axis of the modern enterprise. This holistic architecture ensures seamless collaboration, end-to-end accountability and unmatched agility.
        </p>

        <div style="margin-top:28px;">
          <?php
          $divisions = array(
            array('🚀','Founder/CEO','Visionary leadership driving strategy'),
            array('⚙️','CTO – Technology','Engineering &amp; Platform excellence'),
            array('🔄','COO – Operations','Delivery &amp; Quality mastery'),
            array('💡','CPO – Product','Innovation &amp; Product design'),
            array('📊','CFO – Finance','Governance &amp; Compliance'),
            array('📈','CMO – Sales &amp; Marketing','Growth &amp; Brand leadership'),
            array('🎓','CLO – Learning','Talent &amp; Upskilling engine'),
            array('🎬','CCO – Content','Media &amp; Content powerhouse'),
          );
          foreach($divisions as $d){ ?>
          <div style="display:flex;align-items:center;gap:14px;padding:11px 0;border-bottom:1px solid var(--border);">
            <span style="font-size:1.3rem;width:30px;"><?php echo $d[0]; ?></span>
            <div>
              <strong style="font-size:0.92rem;color:#fff;"><?php echo $d[1]; ?></strong>
              <div style="font-size:0.8rem;color:var(--text-muted);"><?php echo $d[2]; ?></div>
            </div>
          </div>
          <?php } ?>
        </div>
        <div class="mt-4">
          <a href="leadership.php" class="btn btn-primary">Meet the Leadership →</a>
        </div>
      </div>

      <div class="reveal">
        <div class="card" style="background:linear-gradient(135deg,rgba(0,200,255,0.06),rgba(124,58,237,0.06));">
          <h3 style="font-size:1.5rem;margin-bottom:8px;">Our Vision</h3>
          <p style="color:var(--text-muted);font-size:0.92rem;margin-bottom:24px;line-height:1.8;">To be the definitive technology and talent partner that empowers enterprises, startups and individuals to reach their highest potential in the digital era.</p>

          <h3 style="font-size:1.5rem;margin-bottom:8px;">Our Mission</h3>
          <p style="color:var(--text-muted);font-size:0.92rem;margin-bottom:24px;line-height:1.8;">Build future-proof technology, develop unstoppable talent, create compelling content and drive measurable growth for every stakeholder we serve.</p>

          <h3 style="font-size:1.5rem;margin-bottom:16px;">Core Values</h3>
          <?php
          $values = array('Innovation First','Integrity Always','Excellence in Delivery','Human-Centric Thinking','Continuous Learning','Radical Transparency');
          foreach($values as $v){ ?>
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:10px;">
            <span style="color:var(--accent);font-size:1rem;">✦</span>
            <span style="font-size:0.9rem;color:var(--text-muted);"><?php echo $v; ?></span>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- ========================================================
     CONSULTING HIGHLIGHT
     ======================================================== -->
<section class="section">
  <div class="container">
    <div class="text-center mb-4 reveal">
      <span class="badge badge-gold">💼 Consulting</span>
      <h2 class="section-title mt-2">Strategic <span class="gradient-text">Consulting</span> for the Modern Enterprise</h2>
      <p class="section-subtitle">Navigate complexity, accelerate transformation and unlock new growth vectors with Astrl Mind's expert consulting practice.</p>
    </div>

    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:24px;" class="stagger">
      <?php
      $consult = array(
        array('🔍','Digital Transformation','Holistic strategy to modernize legacy systems and embrace cloud-native, AI-powered architecture.'),
        array('🤖','AI & Data Strategy','From ML model design to enterprise data lakes — we help you become truly data-driven.'),
        array('📐','Technology Architecture','Platform design, microservices, API strategy and scalability blueprints for the future.'),
        array('👥','Talent Strategy','Workforce planning, train-to-hire pipelines and organizational capability building.'),
        array('📣','Go-to-Market Strategy','Market entry, product launches, brand positioning and revenue growth consulting.'),
        array('⚖️','Risk & Governance','Compliance frameworks, audit readiness, vendor risk and regulatory consulting.'),
      );
      foreach($consult as $c){ ?>
      <div class="card">
        <div style="font-size:2rem;margin-bottom:14px;"><?php echo $c[0]; ?></div>
        <h4 style="font-size:1.05rem;margin-bottom:8px;"><?php echo $c[1]; ?></h4>
        <p style="font-size:0.88rem;color:var(--text-muted);"><?php echo $c[2]; ?></p>
      </div>
      <?php } ?>
    </div>

    <div class="text-center mt-4 reveal">
      <a href="consulting.php" class="btn btn-primary">Learn About Consulting →</a>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- ========================================================
     INDUSTRIES WE SERVE
     ======================================================== -->
<section class="section">
  <div class="container">
    <div class="text-center mb-4 reveal">
      <span class="badge badge-purple">🌐 Industries</span>
      <h2 class="section-title mt-2">Transforming <span class="gradient-text">Every Sector</span></h2>
    </div>
    <div style="display:flex;flex-wrap:wrap;gap:12px;justify-content:center;" class="stagger">
      <?php
      $industries = array(
        '🏦 Banking & Finance','🏥 Healthcare','🛒 E-Commerce','🎓 Education & EdTech',
        '🏭 Manufacturing','🚚 Logistics & Supply Chain','🏢 Real Estate','🎮 Gaming & Entertainment',
        '🌾 AgriTech','⚡ Energy & Utilities','🏛️ Government & Public Sector','✈️ Travel & Hospitality',
        '📡 Telecom','🧬 BioTech & Life Sciences','🛡️ Cybersecurity'
      );
      foreach($industries as $ind){ ?>
      <span style="padding:10px 18px;background:rgba(13,34,71,0.6);border:1px solid var(--border);border-radius:50px;font-size:0.87rem;color:var(--text-muted);transition:all 0.3s;cursor:default;" onmouseover="this.style.borderColor='var(--accent)';this.style.color='#fff';" onmouseout="this.style.borderColor='var(--border)';this.style.color='var(--text-muted)';"><?php echo $ind; ?></span>
      <?php } ?>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- ========================================================
     CTA BANNER
     ======================================================== -->
<section class="section">
  <div class="container reveal">
    <div class="cta-banner">
      <span class="badge badge-accent" style="margin-bottom:20px;">🚀 Let's Build Together</span>
      <h2>Ready to <span class="gradient-text">Transform</span> Your Business?</h2>
      <p>Whether you're a startup with a vision or an enterprise seeking transformation — Astrl Mind Technologies is your partner for the journey ahead.</p>
      <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
        <a href="contact.php"  class="btn btn-primary">Start a Conversation →</a>
        <a href="services.php" class="btn btn-outline">View All Services</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
