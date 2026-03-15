<?php
define('BASE_PATH', __DIR__);
define('BASE_URL', '');
$current_page = 'contact';
$page_title   = 'Contact – Astrl Mind Technologies';
$page_desc    = 'Get in touch with Astrl Mind Technologies. Start a project, schedule a consultation or explore partnership opportunities.';

/* ============================================================
   PHP Contact Form Handler (PHP 5.x compatible)
   ============================================================ */
$form_success = false;
$form_error   = false;
$errors       = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_contact'])) {

  // Basic sanitization (PHP 5.x compatible)
  function sanitize($val) {
    return htmlspecialchars(stripslashes(trim($val)));
  }

  $name    = sanitize(isset($_POST['name'])    ? $_POST['name']    : '');
  $email   = sanitize(isset($_POST['email'])   ? $_POST['email']   : '');
  $phone   = sanitize(isset($_POST['phone'])   ? $_POST['phone']   : '');
  $company = sanitize(isset($_POST['company']) ? $_POST['company'] : '');
  $service = sanitize(isset($_POST['service']) ? $_POST['service'] : '');
  $subject = sanitize(isset($_POST['subject']) ? $_POST['subject'] : '');
  $message = sanitize(isset($_POST['message']) ? $_POST['message'] : '');

  // Validation
  if (empty($name))    $errors[] = 'Full name is required.';
  if (empty($email))   $errors[] = 'Email address is required.';
  if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL))
                       $errors[] = 'Please enter a valid email address.';
  if (empty($message)) $errors[] = 'Message is required.';

  // Honeypot check (anti-spam)
  if (!empty($_POST['website'])) {
    $errors[] = 'Spam detected.';
  }

  if (empty($errors)) {
    $to      = 'hello@astrlmind.com'; // Change to your email
    $subject_line = 'New Enquiry from AstrlMind.com: ' . ($subject ? $subject : 'General Enquiry');

    $body  = "Name:    $name\n";
    $body .= "Email:   $email\n";
    $body .= "Phone:   $phone\n";
    $body .= "Company: $company\n";
    $body .= "Service: $service\n";
    $body .= "Subject: $subject\n\n";
    $body .= "Message:\n$message\n";

    $headers  = 'From: noreply@astrlmind.com' . "\r\n";
    $headers .= 'Reply-To: ' . $email . "\r\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();

    if (@mail($to, $subject_line, $body, $headers)) {
      $form_success = true;
    } else {
      $form_error = true;
    }
  }
}

include 'includes/header.php';
?>

<section class="page-hero">
  <div class="container" style="position:relative;z-index:1;">
    <div class="breadcrumb"><a href="index.php">Home</a><span>/</span><span>Contact</span></div>
    <span class="badge badge-accent">📩 Get in Touch</span>
    <h1 class="mt-2">Let's <span class="gradient-text">Start a Conversation</span></h1>
    <p class="lead mt-2">Whether you're ready to start a project or just exploring — we're here and happy to connect.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="contact-grid">

      <!-- Contact Info -->
      <div class="reveal">
        <span class="badge badge-purple" style="margin-bottom:20px;display:inline-flex;">🏢 Our Presence</span>
        <h3 style="font-size:1.5rem;margin-bottom:20px;">We're Ready to <span class="gradient-text">Partner With You</span></h3>
        <p style="color:var(--text-muted);line-height:1.8;margin-bottom:32px;">Have a project in mind? Need a strategic consultation? Want to explore partnership opportunities? Drop us a line — our team responds within 24 hours.</p>

        <div class="contact-item">
          <div class="contact-item-icon">📧</div>
          <div class="contact-item-text">
            <strong>General Enquiries</strong>
            <span>hello@astrlmind.com</span>
          </div>
        </div>
        <div class="contact-item">
          <div class="contact-item-icon">💼</div>
          <div class="contact-item-text">
            <strong>Business &amp; Partnerships</strong>
            <span>partnerships@astrlmind.com</span>
          </div>
        </div>
        <div class="contact-item">
          <div class="contact-item-icon">🎓</div>
          <div class="contact-item-text">
            <strong>Learning Programs</strong>
            <span>learning@astrlmind.com</span>
          </div>
        </div>
        <div class="contact-item">
          <div class="contact-item-icon">👥</div>
          <div class="contact-item-text">
            <strong>Careers &amp; HR</strong>
            <span>careers@astrlmind.com</span>
          </div>
        </div>
        <div class="contact-item">
          <div class="contact-item-icon">📞</div>
          <div class="contact-item-text">
            <strong>Phone</strong>
            <span>+91 00000 00000</span>
          </div>
        </div>

        <div style="margin-top:32px;padding:24px;background:rgba(0,200,255,0.05);border:1px solid rgba(0,200,255,0.2);border-radius:14px;">
          <h5 style="font-size:0.85rem;color:var(--accent);letter-spacing:0.08em;text-transform:uppercase;margin-bottom:12px;">Response Times</h5>
          <?php
          $rt = array(
            array('General Enquiries','Within 24 hours'),
            array('Technical Consultations','Within 48 hours'),
            array('Partnership Proposals','Within 72 hours'),
            array('Learning Admissions','Same day'),
          );
          foreach($rt as $r){ ?>
          <div style="display:flex;justify-content:space-between;padding:8px 0;border-bottom:1px solid var(--border);font-size:0.85rem;">
            <span style="color:var(--text-muted);"><?php echo $r[0]; ?></span>
            <span style="color:var(--accent3);font-weight:600;"><?php echo $r[1]; ?></span>
          </div>
          <?php } ?>
        </div>

        <div style="margin-top:28px;">
          <h5 style="font-size:0.85rem;color:var(--text-muted);text-transform:uppercase;letter-spacing:0.08em;margin-bottom:12px;">Follow Us</h5>
          <div class="social-links">
            <a href="#" class="social-link" title="LinkedIn">in</a>
            <a href="#" class="social-link" title="Twitter">𝕏</a>
            <a href="#" class="social-link" title="YouTube">▶</a>
            <a href="#" class="social-link" title="GitHub">⌥</a>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="reveal">
        <div class="card" style="padding:40px;">
          <h3 style="font-size:1.4rem;margin-bottom:6px;">Send Us a Message</h3>
          <p style="color:var(--text-muted);font-size:0.88rem;margin-bottom:28px;">Fill in the details below and we'll get back to you promptly.</p>

          <?php if ($form_success) { ?>
          <div class="alert alert-success">
            <span>✅</span>
            <div>
              <strong>Message sent successfully!</strong><br>
              <span style="font-size:0.85rem;">Thank you for reaching out. We'll be in touch within 24 hours.</span>
            </div>
          </div>
          <?php } ?>

          <?php if ($form_error) { ?>
          <div class="alert alert-error">
            <span>❌</span>
            <span>There was an issue sending your message. Please try again or email us directly.</span>
          </div>
          <?php } ?>

          <?php if (!empty($errors)) { ?>
          <div class="alert alert-error">
            <span>⚠️</span>
            <div>
              <?php foreach($errors as $err){ echo '<div style="font-size:0.87rem;">' . $err . '</div>'; } ?>
            </div>
          </div>
          <?php } ?>

          <?php if (!$form_success) { ?>
          <form method="POST" action="" id="contact-form" novalidate>
            <!-- Honeypot -->
            <div style="display:none;">
              <input type="text" name="website" value="" tabindex="-1" autocomplete="off">
            </div>

            <div class="form-row">
              <div class="form-group">
                <label for="name">Full Name *</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="John Smith" required value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
              </div>
              <div class="form-group">
                <label for="email">Email Address *</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="john@company.com" required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" class="form-control" placeholder="+91 98765 43210" value="<?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ''; ?>">
              </div>
              <div class="form-group">
                <label for="company">Company / Organisation</label>
                <input type="text" id="company" name="company" class="form-control" placeholder="Your Company" value="<?php echo isset($_POST['company']) ? htmlspecialchars($_POST['company']) : ''; ?>">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label for="service">Service of Interest</label>
                <select id="service" name="service" class="form-control">
                  <option value="">Select a service...</option>
                  <option value="Technology & Platforms" <?php echo (isset($_POST['service']) && $_POST['service']=='Technology & Platforms')?'selected':''; ?>>Technology &amp; Platforms</option>
                  <option value="Operations & Delivery" <?php echo (isset($_POST['service']) && $_POST['service']=='Operations & Delivery')?'selected':''; ?>>Operations &amp; Delivery</option>
                  <option value="Product & Innovation" <?php echo (isset($_POST['service']) && $_POST['service']=='Product & Innovation')?'selected':''; ?>>Product &amp; Innovation</option>
                  <option value="Finance & Compliance" <?php echo (isset($_POST['service']) && $_POST['service']=='Finance & Compliance')?'selected':''; ?>>Finance &amp; Compliance</option>
                  <option value="Sales & Marketing" <?php echo (isset($_POST['service']) && $_POST['service']=='Sales & Marketing')?'selected':''; ?>>Sales &amp; Marketing</option>
                  <option value="Learning & Talent" <?php echo (isset($_POST['service']) && $_POST['service']=='Learning & Talent')?'selected':''; ?>>Learning &amp; Talent Development</option>
                  <option value="Content & Media" <?php echo (isset($_POST['service']) && $_POST['service']=='Content & Media')?'selected':''; ?>>Content &amp; Media Services</option>
                  <option value="Consulting" <?php echo (isset($_POST['service']) && $_POST['service']=='Consulting')?'selected':''; ?>>Strategic Consulting</option>
                  <option value="Partnership" <?php echo (isset($_POST['service']) && $_POST['service']=='Partnership')?'selected':''; ?>>Partnership / Alliance</option>
                  <option value="Career" <?php echo (isset($_POST['service']) && $_POST['service']=='Career')?'selected':''; ?>>Career Opportunity</option>
                  <option value="Other" <?php echo (isset($_POST['service']) && $_POST['service']=='Other')?'selected':''; ?>>Other</option>
                </select>
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" class="form-control" placeholder="Brief topic" value="<?php echo isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : ''; ?>">
              </div>
            </div>

            <div class="form-group">
              <label for="message">Your Message *</label>
              <textarea id="message" name="message" class="form-control" placeholder="Tell us about your project, requirements or question..." required><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
            </div>

            <button type="submit" name="submit_contact" class="btn btn-primary" style="width:100%;justify-content:center;padding:15px;font-size:1rem;">
              Send Message →
            </button>

            <p style="font-size:0.78rem;color:var(--text-muted);text-align:center;margin-top:14px;">
              By submitting, you agree to our Privacy Policy. We'll never share your data.
            </p>
          </form>
          <?php } ?>
        </div>
      </div>

    </div>
  </div>
</section>

<div class="divider"></div>

<!-- FAQ -->
<section class="section">
  <div class="container">
    <div class="text-center mb-4 reveal">
      <span class="badge badge-green">❓ FAQ</span>
      <h2 class="section-title mt-2">Frequently Asked <span class="gradient-text">Questions</span></h2>
    </div>
    <div style="max-width:760px;margin:0 auto;" class="stagger">
      <?php
      $faqs = array(
        array('How quickly can your team start on a project?','We typically onboard new projects within 1-2 weeks of agreement signing, depending on scope and resource availability. For urgent projects, we can mobilise within 48-72 hours.'),
        array('Do you work with startups or only enterprises?','We serve both — from early-stage startups needing their first product built, to enterprises undergoing large-scale digital transformation. Our model scales to your needs.'),
        array('Can you work with our existing technology stack?','Absolutely. Our engineers are polyglot practitioners comfortable with a wide range of technologies, frameworks and platforms. We adapt to your environment.'),
        array('What is the minimum engagement size?','Our project engagements start from a defined discovery phase. We also offer retainer-based advisory from a monthly minimum. Contact us for a tailored proposal.'),
        array('Do you offer training for individuals or only corporates?','Both! Our CLO division runs open cohort programs for individual learners and custom corporate programs for enterprises. Visit our Learning page for details.'),
        array('How do you ensure project quality?','Our COO division operates a rigorous QA framework with dedicated QA engineers, defined quality gates, automated testing and regular client reviews at every sprint.'),
      );
      foreach($faqs as $i => $faq){ ?>
      <div style="padding:20px;background:var(--card-bg);border:1px solid var(--border);border-radius:12px;margin-bottom:12px;cursor:pointer;" onclick="var a=this.querySelector('.faq-ans');a.style.display=a.style.display=='none'?'block':'none';">
        <div style="display:flex;justify-content:space-between;align-items:center;">
          <h4 style="font-size:1rem;color:#fff;"><?php echo $faq[0]; ?></h4>
          <span style="color:var(--accent);font-size:1.2rem;flex-shrink:0;margin-left:16px;">+</span>
        </div>
        <div class="faq-ans" style="display:none;margin-top:12px;">
          <p style="font-size:0.88rem;color:var(--text-muted);line-height:1.8;"><?php echo $faq[1]; ?></p>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
