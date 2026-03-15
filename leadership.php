<?php
define('BASE_PATH', __DIR__);
define('BASE_URL', '');
$current_page = 'leadership';
$page_title   = 'Leadership & Department Structure – Astrl Mind Technologies';
$page_desc    = 'Meet the leadership team and explore the organizational structure of Astrl Mind Technologies — 7 powerful divisions led by visionary C-suite executives.';
include 'includes/header.php';
?>

<section class="page-hero">
  <div class="container" style="position:relative;z-index:1;">
    <div class="breadcrumb"><a href="index.php">Home</a><span>/</span><span>Leadership</span></div>
    <span class="badge badge-accent">👥 Our Leaders</span>
    <h1 class="mt-2">Leadership &amp; <span class="gradient-text">Department Structure</span></h1>
    <p class="lead mt-2">Seven specialized C-suite-led divisions working in synergy — each a center of excellence, together an unstoppable force.</p>
  </div>
</section>

<!-- ORG OVERVIEW -->
<section class="section">
  <div class="container">
    <div class="text-center mb-4 reveal">
      <span class="badge badge-purple">🏛️ Org Chart</span>
      <h2 class="section-title mt-2">The <span class="gradient-text">Power Structure</span></h2>
    </div>

    <!-- CEO -->
    <div style="text-align:center;margin-bottom:32px;" class="reveal">
      <div style="display:inline-block;padding:20px 40px;background:linear-gradient(135deg,var(--accent),var(--accent2));border-radius:16px;font-weight:800;font-size:1.1rem;color:#fff;box-shadow:0 8px 32px rgba(0,200,255,0.35);">
        🚀 Founder / CEO
      </div>
      <div style="width:2px;height:40px;background:linear-gradient(180deg,var(--accent),transparent);margin:0 auto;"></div>
    </div>

    <!-- C-Suite Row -->
    <div style="display:flex;justify-content:center;gap:12px;flex-wrap:wrap;margin-bottom:40px;" class="stagger">
      <?php
      $csuite = array(
        array('⚙️','CTO','#00c8ff','Technology & Platforms','technology'),
        array('🔄','COO','#06d6a0','Operations & Delivery','operations'),
        array('💡','CPO','#f59e0b','Product & Innovation','product'),
        array('📊','CFO','#a855f7','Finance & Compliance','finance'),
        array('📈','CMO','#f59e0b','Sales & Marketing','sales'),
        array('🎓','CLO','#00c8ff','Learning & Talent','learning'),
        array('🎬','CCO','#ef4444','Content & Media','content'),
      );
      foreach($csuite as $c){ ?>
      <a href="pages/services/<?php echo $c[4]; ?>.php" style="display:block;text-align:center;text-decoration:none;padding:18px 20px;background:var(--card-bg);border:1px solid var(--border);border-radius:14px;min-width:130px;max-width:155px;transition:all 0.3s;color:inherit;" onmouseover="this.style.borderColor='<?php echo $c[2]; ?>';this.style.transform='translateY(-6px)';" onmouseout="this.style.borderColor='var(--border)';this.style.transform='';">
        <div style="font-size:1.8rem;margin-bottom:8px;"><?php echo $c[0]; ?></div>
        <div style="font-size:1.1rem;font-weight:800;color:<?php echo $c[2]; ?>;"><?php echo $c[1]; ?></div>
        <div style="font-size:0.72rem;color:var(--text-muted);margin-top:4px;line-height:1.4;"><?php echo $c[3]; ?></div>
      </a>
      <?php } ?>
    </div>

    <!-- Department Details -->
    <div class="text-center mb-4 reveal">
      <h3 style="font-size:1.4rem;color:var(--text-muted);">Each C-suite leader oversees 5 specialized sub-departments →</h3>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- EACH DIVISION DETAILED -->
<?php
$divisions = array(
  array(
    'icon' => '⚙️',
    'role' => 'CTO',
    'full' => 'Chief Technology Officer',
    'title'=> 'Technology &amp; Platforms',
    'color'=> '#00c8ff',
    'bg'   => 'rgba(0,200,255,0.08)',
    'desc' => 'The CTO division is the engineering heartbeat of Astrl Mind. From architecting scalable cloud platforms to pioneering AI and emerging technologies, the CTO and team ensure our technology stack is always future-ready, secure and high-performing.',
    'subs' => array(
      array('💻','Software Engineering','Full-stack development, microservices, APIs and enterprise application engineering with agile methodologies.'),
      array('☁️','DevOps &amp; Cloud Infrastructure','CI/CD pipelines, container orchestration, cloud migrations and infrastructure-as-code practices.'),
      array('🏗️','Platform Architecture','Designing scalable, resilient platform blueprints, integration frameworks and technical roadmaps.'),
      array('🔒','IT Infrastructure &amp; Security','Network security, zero-trust architecture, compliance hardening and 24/7 threat monitoring.'),
      array('🔬','R&amp;D / Emerging Technologies','AI, ML, blockchain, IoT, edge computing and quantum research — exploring what is beyond the horizon.'),
    ),
    'link' => 'pages/services/technology.php',
  ),
  array(
    'icon' => '🔄',
    'role' => 'COO',
    'full' => 'Chief Operating Officer',
    'title'=> 'Operations &amp; Delivery',
    'color'=> '#06d6a0',
    'bg'   => 'rgba(6,214,160,0.08)',
    'desc' => 'The COO division is the operational backbone that ensures every project lands on time, on scope and above expectations. From PMO governance to client delight, this team orchestrates seamless execution at every level.',
    'subs' => array(
      array('📋','Project Management Office (PMO)','Agile PMO framework, project governance, risk management and portfolio oversight.'),
      array('🚀','Client Delivery &amp; Implementation','Hands-on project delivery, onboarding, change management and go-live support.'),
      array('✅','Quality Assurance &amp; Process Excellence','Testing frameworks, process optimization, quality gates and continuous improvement initiatives.'),
      array('⚙️','Service Operations','Day-to-day operational management, SLA adherence, incident response and service reliability.'),
      array('🎧','Customer Support','Multi-channel customer success, helpdesk, escalation management and experience optimization.'),
    ),
    'link' => 'pages/services/operations.php',
  ),
  array(
    'icon' => '💡',
    'role' => 'CPO',
    'full' => 'Chief Product Officer',
    'title'=> 'Product &amp; Innovation',
    'color'=> '#f59e0b',
    'bg'   => 'rgba(245,158,11,0.08)',
    'desc' => 'The CPO division transforms ideas into world-class products. Combining product strategy, stunning UI/UX design and engineering coordination, this team runs the innovation engine that keeps Astrl Mind ahead of the market.',
    'subs' => array(
      array('📦','Product Management','Product discovery, roadmap planning, backlog prioritization and stakeholder alignment.'),
      array('🎨','Product Design (UI/UX)','User research, interaction design, prototyping, design systems and accessibility-first experiences.'),
      array('🤝','Product Engineering Coordination','Bridge between product and engineering — ensuring technical feasibility and delivery alignment.'),
      array('🗺️','Product Strategy &amp; Roadmap','Long-term product vision, competitive analysis, market positioning and strategic pivots.'),
      array('🧪','Innovation Lab / New Product Development','Rapid prototyping, MVP incubation and next-generation product exploration.'),
    ),
    'link' => 'pages/services/product.php',
  ),
  array(
    'icon' => '📊',
    'role' => 'CFO',
    'full' => 'Chief Financial Officer',
    'title'=> 'Finance &amp; Compliance',
    'color'=> '#a855f7',
    'bg'   => 'rgba(168,85,247,0.08)',
    'desc' => 'The CFO division provides the financial intelligence and governance infrastructure that enables Astrl Mind to grow sustainably and responsibly. From financial modeling to regulatory compliance, this team ensures fiscal health and organizational resilience.',
    'subs' => array(
      array('💰','Finance &amp; Accounting','Financial reporting, accounts management, payroll, invoicing and tax compliance.'),
      array('📈','Financial Planning &amp; Analysis','Budgeting, forecasting, scenario modeling and strategic financial advisory.'),
      array('⚖️','Legal &amp; Compliance','Contract management, regulatory compliance, IP protection and legal risk advisory.'),
      array('🛒','Procurement &amp; Vendor Management','Vendor selection, contract negotiation, supplier performance and cost optimization.'),
      array('🛡️','Risk &amp; Audit','Enterprise risk framework, internal audit, SOX compliance and business continuity planning.'),
    ),
    'link' => 'pages/services/finance.php',
  ),
  array(
    'icon' => '📈',
    'role' => 'CMO',
    'full' => 'Chief Marketing Officer',
    'title'=> 'Sales, Marketing &amp; Partnerships',
    'color'=> '#f59e0b',
    'bg'   => 'rgba(245,158,11,0.08)',
    'desc' => 'The CMO division is the growth engine of Astrl Mind. With enterprise sales capabilities, data-driven digital marketing, compelling brand strategy and a robust partnership network, this team ensures we reach — and win — in every target market.',
    'subs' => array(
      array('💼','Enterprise Sales','Consultative selling, RFP management, enterprise account management and sales engineering.'),
      array('🌱','Business Development','Market expansion, new verticals, partnerships pipeline and strategic revenue opportunities.'),
      array('📱','Digital Marketing','SEO, SEM, performance marketing, social media, email campaigns and analytics-driven growth.'),
      array('🏆','Brand &amp; Communications','Brand identity, PR, thought leadership, content strategy and corporate communications.'),
      array('🤝','Strategic Partnerships &amp; Alliances','Technology alliances, channel partnerships, co-selling programs and ecosystem development.'),
    ),
    'link' => 'pages/services/sales.php',
  ),
  array(
    'icon' => '🎓',
    'role' => 'CLO',
    'full' => 'Chief Learning Officer',
    'title'=> 'Learning &amp; Talent Development',
    'color'=> '#00c8ff',
    'bg'   => 'rgba(0,200,255,0.08)',
    'desc' => 'The CLO division is Astrl Mind\'s human capital powerhouse. We design and deliver programs that transform raw potential into industry-ready professionals — through cutting-edge curriculum, expert faculty and strong industry placement pipelines.',
    'subs' => array(
      array('🎯','Train-to-Hire Programs','Cohort-based technical and professional skills programs designed around real employer needs.'),
      array('🏢','Corporate Skilling &amp; Upskilling','Custom L&amp;D programs for enterprises — upskilling existing teams in emerging technologies.'),
      array('📚','Curriculum Development','Designing industry-aligned, outcome-oriented curricula in collaboration with domain experts.'),
      array('👨‍🏫','Trainers &amp; Faculty','Experienced instructors, industry practitioners and guest experts delivering world-class learning.'),
      array('🤝','Placement &amp; Industry Partnerships','Job placement facilitation, campus drives, employer connect programs and alumni networks.'),
    ),
    'link' => 'pages/services/learning.php',
  ),
  array(
    'icon' => '🎬',
    'role' => 'CCO',
    'full' => 'Chief Content Officer',
    'title'=> 'Content &amp; Media Services',
    'color'=> '#ef4444',
    'bg'   => 'rgba(239,68,68,0.08)',
    'desc' => 'The CCO division is the voice, visual identity and storytelling engine of Astrl Mind and our clients. From long-form thought leadership to viral social content, this team ensures every brand message lands with impact and resonance.',
    'subs' => array(
      array('🗺️','Content Strategy','Content planning, editorial calendars, SEO strategy and audience-first content architecture.'),
      array('✍️','Content Production (Writers &amp; Editors)','Blog posts, whitepapers, case studies, website copy and technical documentation.'),
      array('🎨','Creative Design (Graphics &amp; Visuals)','Brand design, infographics, social media creatives, motion graphics and visual identity.'),
      array('🎥','Video &amp; Multimedia Production','Corporate videos, explainer animations, product demos, podcasts and live-stream content.'),
      array('📢','Content Marketing &amp; Distribution','Multichannel distribution, influencer partnerships, syndication and content performance analytics.'),
    ),
    'link' => 'pages/services/content.php',
  ),
);

foreach($divisions as $idx => $div){ ?>
<section class="section <?php echo $idx % 2 == 1 ? 'section-alt' : ''; ?>" style="<?php echo $idx % 2 == 1 ? 'background:rgba(13,34,71,0.25);' : ''; ?>">
  <div class="container">
    <div class="two-col">
      <?php if($idx % 2 == 0){ ?>
      <div class="reveal">
        <div style="display:inline-flex;align-items:center;gap:12px;margin-bottom:20px;">
          <span style="font-size:2.5rem;"><?php echo $div['icon']; ?></span>
          <div>
            <span class="badge" style="color:<?php echo $div['color']; ?>;background:<?php echo $div['bg']; ?>;border-color:<?php echo $div['color']; ?>;"><?php echo $div['role']; ?></span>
          </div>
        </div>
        <h2 style="font-size:2rem;margin-bottom:6px;color:#fff;"><?php echo $div['title']; ?></h2>
        <div style="font-size:0.85rem;color:<?php echo $div['color']; ?>;font-weight:600;margin-bottom:18px;"><?php echo $div['full']; ?></div>
        <p style="color:var(--text-muted);line-height:1.9;margin-bottom:24px;"><?php echo $div['desc']; ?></p>
        <a href="<?php echo $div['link']; ?>" class="btn btn-outline" style="border-color:<?php echo $div['color']; ?>;color:<?php echo $div['color']; ?>;">Explore Division →</a>
      </div>
      <div class="reveal">
      <?php } else { ?>
      <div class="reveal">
      <?php } ?>
        <div class="card">
          <h4 style="font-size:0.78rem;letter-spacing:0.1em;text-transform:uppercase;color:<?php echo $div['color']; ?>;margin-bottom:20px;">Sub-Departments</h4>
          <?php foreach($div['subs'] as $sub){ ?>
          <div style="display:flex;gap:14px;align-items:flex-start;padding:16px 0;border-bottom:1px solid var(--border);">
            <span style="font-size:1.4rem;width:32px;flex-shrink:0;"><?php echo $sub[0]; ?></span>
            <div>
              <div style="font-size:0.95rem;font-weight:700;color:#fff;margin-bottom:4px;"><?php echo $sub[1]; ?></div>
              <div style="font-size:0.83rem;color:var(--text-muted);line-height:1.6;"><?php echo $sub[2]; ?></div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
      <?php if($idx % 2 == 1){ ?>
      </div>
      <div class="reveal">
        <div style="display:inline-flex;align-items:center;gap:12px;margin-bottom:20px;">
          <span style="font-size:2.5rem;"><?php echo $div['icon']; ?></span>
          <div>
            <span class="badge" style="color:<?php echo $div['color']; ?>;background:<?php echo $div['bg']; ?>;border-color:<?php echo $div['color']; ?>;"><?php echo $div['role']; ?></span>
          </div>
        </div>
        <h2 style="font-size:2rem;margin-bottom:6px;color:#fff;"><?php echo $div['title']; ?></h2>
        <div style="font-size:0.85rem;color:<?php echo $div['color']; ?>;font-weight:600;margin-bottom:18px;"><?php echo $div['full']; ?></div>
        <p style="color:var(--text-muted);line-height:1.9;margin-bottom:24px;"><?php echo $div['desc']; ?></p>
        <a href="<?php echo $div['link']; ?>" class="btn btn-outline" style="border-color:<?php echo $div['color']; ?>;color:<?php echo $div['color']; ?>;">Explore Division →</a>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
<div class="divider"></div>
<?php } ?>

<!-- CTA -->
<section class="section">
  <div class="container reveal">
    <div class="cta-banner">
      <h2>Join Our <span class="gradient-text">Leadership Journey</span></h2>
      <p>We're building the future — and we're looking for exceptional talent to lead it. Explore opportunities across all divisions.</p>
      <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
        <a href="careers.php"  class="btn btn-primary">View Career Opportunities →</a>
        <a href="contact.php"  class="btn btn-outline">Partner With Us</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
