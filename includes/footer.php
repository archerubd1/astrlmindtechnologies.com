<?php
/* ============================================================
   ASTRL MIND TECHNOLOGIES — Footer Include
   ============================================================ */
?>
<!-- ====== FOOTER ====== -->
<footer class="footer">
  <div class="container">
    <div class="footer-grid">

      <!-- Brand -->
      <div class="footer-brand">
        <a href="<?php echo BASE_URL; ?>index.php" class="nav-logo" style="display:inline-flex;margin-bottom:4px;">
          <div class="nav-logo-icon">AM</div>
          <div class="nav-logo-text">
            <span class="nav-logo-name">Astrl Mind</span>
            <span class="nav-logo-tagline">Technologies</span>
          </div>
        </a>
        <p>Architecting the future through intelligent technology, human potential and purposeful innovation.</p>
        <div class="social-links" style="margin-top:22px;">
          <a href="#" class="social-link" title="LinkedIn">in</a>
          <a href="#" class="social-link" title="Twitter">𝕏</a>
          <a href="#" class="social-link" title="YouTube">▶</a>
          <a href="#" class="social-link" title="GitHub">⌥</a>
        </div>
      </div>

      <!-- Services -->
      <div class="footer-col">
        <h5>Services</h5>
        <ul class="footer-links">
          <li><a href="<?php echo BASE_URL; ?>pages/services/technology.php">Technology &amp; Platforms</a></li>
          <li><a href="<?php echo BASE_URL; ?>pages/services/operations.php">Operations &amp; Delivery</a></li>
          <li><a href="<?php echo BASE_URL; ?>pages/services/product.php">Product &amp; Innovation</a></li>
          <li><a href="<?php echo BASE_URL; ?>pages/services/finance.php">Finance &amp; Compliance</a></li>
          <li><a href="<?php echo BASE_URL; ?>pages/services/sales.php">Sales &amp; Marketing</a></li>
          <li><a href="<?php echo BASE_URL; ?>pages/services/learning.php">Learning &amp; Talent</a></li>
          <li><a href="<?php echo BASE_URL; ?>pages/services/content.php">Content &amp; Media</a></li>
        </ul>
      </div>

      <!-- Company -->
      <div class="footer-col">
        <h5>Company</h5>
        <ul class="footer-links">
          <li><a href="<?php echo BASE_URL; ?>about.php">About Us</a></li>
          <li><a href="<?php echo BASE_URL; ?>leadership.php">Leadership Team</a></li>
          <li><a href="<?php echo BASE_URL; ?>consulting.php">Consulting</a></li>
          <li><a href="<?php echo BASE_URL; ?>careers.php">Careers</a></li>
          <li><a href="<?php echo BASE_URL; ?>contact.php">Contact</a></li>
        </ul>
      </div>

      <!-- Expertise -->
      <div class="footer-col">
        <h5>Expertise</h5>
        <ul class="footer-links">
          <li><a href="#">AI &amp; Machine Learning</a></li>
          <li><a href="#">Cloud Architecture</a></li>
          <li><a href="#">DevOps &amp; CI/CD</a></li>
          <li><a href="#">UI/UX Design</a></li>
          <li><a href="#">Data Analytics</a></li>
          <li><a href="#">Cybersecurity</a></li>
          <li><a href="#">Train-to-Hire</a></li>
        </ul>
      </div>

      <!-- Connect -->
      <div class="footer-col">
        <h5>Connect</h5>
        <ul class="footer-links">
          <li><a href="mailto:hello@astrlmind.com">hello@astrlmind.com</a></li>
          <li><a href="mailto:careers@astrlmind.com">careers@astrlmind.com</a></li>
          <li><a href="tel:+910000000000">+91 00000 00000</a></li>
        </ul>
        <div style="margin-top:20px;">
          <span class="badge badge-accent">🟢 Open for Projects</span>
        </div>
        <div style="margin-top:12px;">
          <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-outline" style="padding:8px 18px;font-size:0.82rem;">Schedule a Call →</a>
        </div>
      </div>

    </div>

    <div class="footer-bottom">
      <div>
        &copy; <?php echo date('Y'); ?> <strong>Astrl Mind Technologies</strong>. All rights reserved.
      </div>
      <div style="display:flex;gap:20px;flex-wrap:wrap;">
        <a href="#" style="color:var(--text-muted);">Privacy Policy</a>
        <a href="#" style="color:var(--text-muted);">Terms of Service</a>
        <a href="#" style="color:var(--text-muted);">Cookie Policy</a>
      </div>
    </div>
  </div>
</footer>

<!-- Back to top -->
<button id="back-to-top" onclick="window.scrollTo({top:0,behavior:'smooth'})"
  style="position:fixed;bottom:28px;right:28px;width:46px;height:46px;border-radius:50%;background:linear-gradient(135deg,var(--accent),var(--accent2));border:none;cursor:pointer;display:none;align-items:center;justify-content:center;font-size:1.2rem;color:#fff;box-shadow:0 4px 20px rgba(0,200,255,0.4);z-index:9000;transition:all 0.3s;">↑</button>

<script src="<?php echo BASE_URL; ?>assets/js/main.js"></script>
<script>
  // Back to top visibility
  window.addEventListener('scroll', function() {
    var btn = document.getElementById('back-to-top');
    if (btn) btn.style.display = window.scrollY > 400 ? 'flex' : 'none';
  });
  // Hamburger / mobile menu wiring
  var hbg = document.getElementById('hamburger');
  var mob = document.getElementById('mobile-menu');
  if(hbg && mob){
    hbg.addEventListener('click', function(){
      hbg.classList.toggle('active');
      mob.classList.toggle('open');
      document.body.style.overflow = mob.classList.contains('open') ? 'hidden' : '';
    });
  }
</script>
</body>
</html>
