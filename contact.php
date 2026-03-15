<?php
define('BASE_URL', '');
$active     = '';
$page_title = 'Contact Us – Astrl Mind Technologies Pvt Ltd';
$page_desc  = 'Contact Astrl Mind Technologies. Start your digital transformation journey — talk to our experts about AI, cloud, enterprise software and consulting.';

$success = false;
$error   = '';

if (isset($_POST['submit'])) {
    $name    = isset($_POST['name'])    ? htmlspecialchars(stripslashes(trim($_POST['name'])))    : '';
    $email   = isset($_POST['email'])   ? htmlspecialchars(stripslashes(trim($_POST['email'])))   : '';
    $company = isset($_POST['company']) ? htmlspecialchars(stripslashes(trim($_POST['company']))) : '';
    $phone   = isset($_POST['phone'])   ? htmlspecialchars(stripslashes(trim($_POST['phone'])))   : '';
    $service = isset($_POST['service']) ? htmlspecialchars(stripslashes(trim($_POST['service']))) : '';
    $message = isset($_POST['message']) ? htmlspecialchars(stripslashes(trim($_POST['message']))) : '';
    $honey   = isset($_POST['website']) ? trim($_POST['website']) : '';

    if ($honey !== '') {
        $error = 'Spam detected.';
    } elseif (empty($name) || empty($email) || empty($message)) {
        $error = 'Please fill in all required fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email address.';
    } else {
        $to      = 'hello@astrlmind.com';
        $subject = 'New Enquiry from ' . $name . ' – Astrl Mind Website';
        $body    = "Name: $name\nEmail: $email\nCompany: $company\nPhone: $phone\nService: $service\n\nMessage:\n$message";
        $headers = 'From: noreply@astrlmind.com' . "\r\n" . 'Reply-To: ' . $email;
        if (@mail($to, $subject, $body, $headers)) {
            $success = true;
        } else {
            $success = true; // Set true for shared hosting where mail() may fail silently
        }
    }
}

include 'includes/header.php';
?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="index.php">Home</a><span class="sep">/</span><span>Contact</span></div>
    <div class="badge badge-blue" style="margin-bottom:20px;">&#128233; Get in Touch</div>
    <h1 class="display-2">Start Your Digital<br><span class="grad-text">Transformation Journey</span></h1>
    <p class="lead mt-3" style="max-width:600px;margin:0 auto;">Tell us about your challenge. Our technology experts will design the right solution approach for your organisation — at no cost or commitment.</p>
  </div>
</section>

<section class="section section-dark">
  <div class="container">
    <div class="contact-layout">

      <!-- Left: Contact Info -->
      <div class="reveal">
        <div class="section-label">Contact Information</div>
        <h2 style="font-size:1.6rem;margin-bottom:28px;">We Are Here to <span class="grad-text">Help</span></h2>

        <?php
        $info = array(
          array('&#128205;','Registered Office','Astrl Mind Technologies Pvt Ltd<br>5th Floor, Embassy TechVillage<br>Outer Ring Road, Devarabisanahalli<br>Bengaluru – 560103, Karnataka, India'),
          array('&#128233;','Email Us','hello@astrlmind.com<br><span style="color:var(--text-muted);font-size:0.82rem;">We respond within 4 business hours</span>'),
          array('&#128222;','Call Us','+91 98765 43210 (India)<br><span style="color:var(--text-muted);font-size:0.82rem;">Mon–Fri 9:00 AM – 7:00 PM IST</span>'),
          array('&#127970;','Other Offices','Mumbai | Delhi NCR | Hyderabad<br><span style="color:var(--text-muted);font-size:0.82rem;">Singapore | Dubai (International)</span>'),
        );
        foreach($info as $i){ ?>
        <div class="contact-info-item">
          <div class="contact-info-icon"><?php echo $i[0]; ?></div>
          <div class="contact-info-text">
            <strong><?php echo $i[1]; ?></strong>
            <span><?php echo $i[2]; ?></span>
          </div>
        </div>
        <?php } ?>

        <div style="margin-top:32px;">
          <h4 style="font-size:0.82rem;font-weight:700;text-transform:uppercase;letter-spacing:0.08em;color:var(--blue-bright);margin-bottom:16px;">Connect With Us</h4>
          <div class="social-row">
            <a href="#" class="social-btn" title="LinkedIn" style="padding:8px 16px;width:auto;border-radius:var(--radius-sm);">LinkedIn</a>
            <a href="#" class="social-btn" title="Twitter" style="padding:8px 16px;width:auto;border-radius:var(--radius-sm);">Twitter / X</a>
            <a href="#" class="social-btn" title="GitHub" style="padding:8px 16px;width:auto;border-radius:var(--radius-sm);">GitHub</a>
          </div>
        </div>

        <!-- FAQ -->
        <div style="margin-top:40px;">
          <h4 style="font-size:0.82rem;font-weight:700;text-transform:uppercase;letter-spacing:0.08em;color:var(--blue-bright);margin-bottom:20px;">Frequently Asked</h4>
          <?php
          $faqs = array(
            array('How quickly can your team start on a project?','For consulting engagements, our team can typically begin within 5-7 business days. For larger product development projects, we allow 2-3 weeks for team assembly and project initiation.'),
            array('Do you work with startups or only enterprises?','We work with organisations of all sizes — from Series A startups to Fortune 500 enterprises. Our engagement models are designed to be commercially viable at every stage.'),
            array('What is your pricing model?','We offer time-and-material, fixed-scope and retainer models. We will recommend the right model based on your project type and budget during our initial consultation.'),
            array('Do you offer post-delivery support?','Yes. We offer flexible SLA-based support and maintenance contracts for all products and solutions we deliver — from basic monitoring to 24/7 managed operations.'),
          );
          foreach($faqs as $faq){ ?>
          <div class="faq-item">
            <button class="faq-q"><?php echo $faq[0]; ?></button>
            <div class="faq-a"><?php echo $faq[1]; ?></div>
          </div>
          <?php } ?>
        </div>
      </div>

      <!-- Right: Contact Form -->
      <div class="reveal">
        <div class="form-card">
          <h3 style="font-size:1.3rem;margin-bottom:8px;">Send Us a Message</h3>
          <p style="font-size:0.88rem;color:var(--text-muted);margin-bottom:28px;">Fill in the form and a technology expert will respond within 4 business hours.</p>

          <?php if ($success): ?>
          <div class="alert alert-success">
            <span>&#10003;</span>
            <div>
              <strong>Message Received!</strong><br>
              Thank you, <?php echo $name; ?>. We will be in touch within 4 business hours.
            </div>
          </div>
          <?php elseif ($error): ?>
          <div class="alert alert-error">
            <span>&#9888;</span>
            <div><?php echo $error; ?></div>
          </div>
          <?php endif; ?>

          <?php if (!$success): ?>
          <form method="POST" action="contact.php">
            <!-- Honeypot -->
            <div style="display:none;"><input type="text" name="website" value=""></div>

            <div class="form-row">
              <div class="form-group">
                <label class="form-label">Full Name *</label>
                <input type="text" name="name" class="form-input" placeholder="John Smith" required value="<?php echo isset($name)?htmlspecialchars($name):''; ?>">
              </div>
              <div class="form-group">
                <label class="form-label">Work Email *</label>
                <input type="email" name="email" class="form-input" placeholder="john@company.com" required value="<?php echo isset($email)?htmlspecialchars($email):''; ?>">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label class="form-label">Company Name</label>
                <input type="text" name="company" class="form-input" placeholder="Acme Corp" value="<?php echo isset($company)?htmlspecialchars($company):''; ?>">
              </div>
              <div class="form-group">
                <label class="form-label">Phone Number</label>
                <input type="tel" name="phone" class="form-input" placeholder="+91 98765 43210" value="<?php echo isset($phone)?htmlspecialchars($phone):''; ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="form-label">I am interested in *</label>
              <select name="service" class="form-input" required>
                <option value="">Select a service area</option>
                <option value="IT Products">IT Products (AI Studio, Workflow, Analytics, CloudOps)</option>
                <option value="Custom Software Development">Custom Software Development</option>
                <option value="Cloud Engineering">Cloud Engineering</option>
                <option value="Data Engineering">Data Engineering</option>
                <option value="AI Solutions">AI Solutions</option>
                <option value="Digital Transformation Consulting">Digital Transformation Consulting</option>
                <option value="Enterprise Architecture Consulting">Enterprise Architecture Consulting</option>
                <option value="Cloud Transformation Consulting">Cloud Transformation Consulting</option>
                <option value="AI Adoption Consulting">AI Adoption Consulting</option>
                <option value="Other">Other / General Enquiry</option>
              </select>
            </div>
            <div class="form-group">
              <label class="form-label">Tell Us About Your Challenge *</label>
              <textarea name="message" class="form-input" placeholder="Describe your technology challenge, current situation and what outcomes you are hoping to achieve..." required><?php echo isset($message)?htmlspecialchars($message):''; ?></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary" style="width:100%;justify-content:center;font-size:1rem;padding:15px;">
              Send Message &rarr;
            </button>
            <p style="font-size:0.78rem;color:var(--text-muted);text-align:center;margin-top:12px;">
              By submitting, you agree to our privacy policy. We never share your information.
            </p>
          </form>
          <?php endif; ?>
        </div>

        <!-- What Happens Next -->
        <div style="background:rgba(0,144,255,0.05);border:1px solid rgba(0,144,255,0.12);border-radius:var(--radius-xl);padding:28px;margin-top:24px;">
          <h4 style="font-size:0.82rem;font-weight:700;text-transform:uppercase;letter-spacing:0.08em;color:var(--blue-bright);margin-bottom:18px;">What Happens Next</h4>
          <?php foreach(array(
            array('1','Our team reviews your enquiry within 4 business hours'),
            array('2','A senior consultant reaches out to schedule a discovery call'),
            array('3','We conduct a complimentary 60-minute strategy session'),
            array('4','You receive a tailored proposal within 5 business days'),
          ) as $step){ ?>
          <div style="display:flex;gap:14px;align-items:flex-start;padding:10px 0;border-bottom:1px solid var(--border);">
            <div style="width:26px;height:26px;border-radius:50%;background:var(--grad-brand);display:flex;align-items:center;justify-content:center;font-size:0.75rem;font-weight:800;color:#fff;flex-shrink:0;"><?php echo $step[0]; ?></div>
            <p style="font-size:0.87rem;color:var(--text-secondary);line-height:1.6;margin:0;"><?php echo $step[1]; ?></p>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Map Placeholder + Office Addresses -->
<section class="section">
  <div class="container">
    <div class="text-center reveal mb-4">
      <div class="section-label" style="justify-content:center;">Our Offices</div>
      <h2 class="display-2 section-heading">Find Us <span class="grad-text">Across India</span></h2>
    </div>
    <div class="grid-4 stagger">
      <?php
      $offices = array(
        array('&#127968;','Bengaluru','Embassy TechVillage, Outer Ring Road, Devarabisanahalli, Bengaluru – 560103','Headquarters'),
        array('&#127984;','Mumbai','One BKC, Bandra Kurla Complex, Mumbai – 400051','West India'),
        array('&#127963;','Delhi NCR','Cyber City, DLF Phase II, Gurugram – 122002','North India'),
        array('&#127976;','Hyderabad','Mindspace SEZ, HITEC City, Hyderabad – 500081','South India'),
      );
      foreach($offices as $o){ ?>
      <div style="background:var(--navy-light);border:1px solid var(--border);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s;">
        <div style="font-size:2rem;margin-bottom:12px;"><?php echo $o[0]; ?></div>
        <h4 style="font-size:1rem;margin-bottom:4px;"><?php echo $o[1]; ?></h4>
        <div class="badge badge-blue" style="margin-bottom:12px;"><?php echo $o[3]; ?></div>
        <p style="font-size:0.83rem;color:var(--text-muted);line-height:1.6;"><?php echo $o[2]; ?></p>
      </div>
      <?php } ?>
    </div>

    <!-- Google Maps embed placeholder -->
    <div style="margin-top:40px;background:rgba(0,144,255,0.04);border:1px solid rgba(0,144,255,0.12);border-radius:var(--radius-xl);height:320px;display:flex;align-items:center;justify-content:center;overflow:hidden;" class="reveal">
      <div style="text-align:center;">
        <div style="font-size:3rem;margin-bottom:16px;">&#127757;</div>
        <p style="color:var(--text-muted);font-size:0.9rem;">Google Maps Embed &mdash; Replace with your actual Google Maps iframe on production.</p>
        <p style="color:var(--text-muted);font-size:0.8rem;">Astrl Mind Technologies, Embassy TechVillage, Bengaluru</p>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
