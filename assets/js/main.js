/* ============================================================
   ASTRL MIND TECHNOLOGIES — Main JavaScript
   ES5 compatible for broad browser support
   ============================================================ */

(function() {
  'use strict';

  /* ---- Navbar scroll effect ---- */
  var navbar = document.querySelector('.navbar');
  if (navbar) {
    window.addEventListener('scroll', function() {
      if (window.scrollY > 30) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });
  }

  /* ---- Mobile hamburger menu ---- */
  var hamburger = document.querySelector('.hamburger');
  var mobileMenu = document.querySelector('.mobile-menu');
  if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', function() {
      hamburger.classList.toggle('active');
      mobileMenu.classList.toggle('open');
      document.body.style.overflow = mobileMenu.classList.contains('open') ? 'hidden' : '';
    });
    // Close on link click
    var mobileLinks = mobileMenu.querySelectorAll('a');
    for (var i = 0; i < mobileLinks.length; i++) {
      mobileLinks[i].addEventListener('click', function() {
        hamburger.classList.remove('active');
        mobileMenu.classList.remove('open');
        document.body.style.overflow = '';
      });
    }
  }

  /* ---- Active nav link ---- */
  var currentPath = window.location.pathname.split('/').pop() || 'index.php';
  var navLinks = document.querySelectorAll('.nav-links a, .mobile-menu a');
  for (var j = 0; j < navLinks.length; j++) {
    var href = navLinks[j].getAttribute('href') || '';
    if (href === currentPath || href.indexOf(currentPath) !== -1) {
      navLinks[j].classList.add('active');
    }
  }

  /* ---- Scroll reveal ---- */
  function initReveal() {
    var revealEls = document.querySelectorAll('.reveal');
    var staggerEls = document.querySelectorAll('.stagger');

    function checkVisible() {
      var vh = window.innerHeight;
      for (var k = 0; k < revealEls.length; k++) {
        var rect = revealEls[k].getBoundingClientRect();
        if (rect.top < vh - 60) {
          revealEls[k].classList.add('visible');
        }
      }
      for (var l = 0; l < staggerEls.length; l++) {
        var sr = staggerEls[l].getBoundingClientRect();
        if (sr.top < vh - 40) {
          staggerEls[l].classList.add('visible');
        }
      }
    }

    window.addEventListener('scroll', checkVisible, { passive: true });
    checkVisible(); // run on load
  }
  initReveal();

  /* ---- Counter animation ---- */
  function animateCounter(el, target, duration) {
    var start = 0;
    var step = target / (duration / 16);
    var timer = setInterval(function() {
      start += step;
      if (start >= target) {
        start = target;
        clearInterval(timer);
      }
      var display = Math.floor(start);
      var suffix = el.getAttribute('data-suffix') || '';
      el.textContent = display.toLocaleString() + suffix;
    }, 16);
  }

  function initCounters() {
    var counters = document.querySelectorAll('.counter[data-target]');
    var observed = [];
    for (var m = 0; m < counters.length; m++) {
      observed.push(false);
    }

    function checkCounters() {
      var vh = window.innerHeight;
      for (var n = 0; n < counters.length; n++) {
        if (!observed[n]) {
          var rect = counters[n].getBoundingClientRect();
          if (rect.top < vh - 40) {
            observed[n] = true;
            animateCounter(counters[n], parseInt(counters[n].getAttribute('data-target')), 2000);
          }
        }
      }
    }

    window.addEventListener('scroll', checkCounters, { passive: true });
    checkCounters();
  }
  initCounters();

  /* ---- Progress bar animation ---- */
  function initProgressBars() {
    var bars = document.querySelectorAll('.progress-bar[data-width]');
    var observed = [];
    for (var p = 0; p < bars.length; p++) observed.push(false);

    function checkBars() {
      var vh = window.innerHeight;
      for (var q = 0; q < bars.length; q++) {
        if (!observed[q]) {
          var rect = bars[q].getBoundingClientRect();
          if (rect.top < vh - 20) {
            observed[q] = true;
            bars[q].style.width = bars[q].getAttribute('data-width') + '%';
          }
        }
      }
    }
    window.addEventListener('scroll', checkBars, { passive: true });
    checkBars();
  }
  initProgressBars();

  /* ---- Smooth scroll for anchor links ---- */
  var anchorLinks = document.querySelectorAll('a[href^="#"]');
  for (var r = 0; r < anchorLinks.length; r++) {
    anchorLinks[r].addEventListener('click', function(e) {
      var target = document.querySelector(this.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  }

  /* ---- Department tabs ---- */
  var deptTabs = document.querySelectorAll('.dept-tab');
  var deptPanels = document.querySelectorAll('.dept-panel');
  if (deptTabs.length) {
    for (var s = 0; s < deptTabs.length; s++) {
      deptTabs[s].addEventListener('click', function() {
        var target = this.getAttribute('data-tab');
        for (var t = 0; t < deptTabs.length; t++) deptTabs[t].classList.remove('active');
        for (var u = 0; u < deptPanels.length; u++) deptPanels[u].classList.remove('active');
        this.classList.add('active');
        var panel = document.getElementById('tab-' + target);
        if (panel) panel.classList.add('active');
      });
    }
  }

  /* ---- Ripple button effect ---- */
  var btns = document.querySelectorAll('.btn');
  for (var v = 0; v < btns.length; v++) {
    btns[v].addEventListener('click', function(e) {
      var rect = this.getBoundingClientRect();
      var ripple = document.createElement('span');
      ripple.className = 'ripple';
      var size = Math.max(rect.width, rect.height) * 2;
      ripple.style.cssText = 'width:' + size + 'px;height:' + size + 'px;left:' + (e.clientX - rect.left - size/2) + 'px;top:' + (e.clientY - rect.top - size/2) + 'px';
      this.appendChild(ripple);
      setTimeout(function() { ripple.remove(); }, 700);
    });
  }

  /* ---- Typed text effect ---- */
  function initTyped(el, words, speed) {
    if (!el || !words.length) return;
    var wordIndex = 0;
    var charIndex = 0;
    var deleting = false;
    var cursor = document.createElement('span');
    cursor.className = 'typed-cursor';
    el.parentNode.insertBefore(cursor, el.nextSibling);

    function type() {
      var current = words[wordIndex];
      if (deleting) {
        el.textContent = current.substring(0, charIndex--);
        if (charIndex < 0) { deleting = false; wordIndex = (wordIndex + 1) % words.length; setTimeout(type, 500); return; }
        setTimeout(type, speed / 2.5);
      } else {
        el.textContent = current.substring(0, charIndex++);
        if (charIndex > current.length) { deleting = true; setTimeout(type, 1800); return; }
        setTimeout(type, speed);
      }
    }
    type();
  }

  var typedEl = document.getElementById('typed-text');
  if (typedEl) {
    initTyped(typedEl, [
      'Technology Solutions',
      'Digital Transformation',
      'AI & Emerging Tech',
      'Product Innovation',
      'Learning & Upskilling',
      'Content & Media Services'
    ], 80);
  }

  /* ---- Particle canvas ---- */
  function initParticles() {
    var canvas = document.getElementById('particles-canvas');
    if (!canvas) return;
    var ctx = canvas.getContext('2d');
    var particles = [];
    var count = 55;

    function resize() {
      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;
    }
    resize();
    window.addEventListener('resize', resize);

    for (var i = 0; i < count; i++) {
      particles.push({
        x: Math.random() * canvas.width,
        y: Math.random() * canvas.height,
        vx: (Math.random() - 0.5) * 0.5,
        vy: (Math.random() - 0.5) * 0.5,
        r: Math.random() * 2 + 0.5,
        alpha: Math.random() * 0.5 + 0.1
      });
    }

    function draw() {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      for (var i = 0; i < particles.length; i++) {
        var p = particles[i];
        p.x += p.vx; p.y += p.vy;
        if (p.x < 0) p.x = canvas.width;
        if (p.x > canvas.width) p.x = 0;
        if (p.y < 0) p.y = canvas.height;
        if (p.y > canvas.height) p.y = 0;

        ctx.beginPath();
        ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
        ctx.fillStyle = 'rgba(0,200,255,' + p.alpha + ')';
        ctx.fill();

        // Connect nearby particles
        for (var j = i + 1; j < particles.length; j++) {
          var q = particles[j];
          var dx = p.x - q.x, dy = p.y - q.y;
          var dist = Math.sqrt(dx*dx + dy*dy);
          if (dist < 110) {
            ctx.beginPath();
            ctx.strokeStyle = 'rgba(0,200,255,' + (0.08 * (1 - dist/110)) + ')';
            ctx.lineWidth = 0.5;
            ctx.moveTo(p.x, p.y);
            ctx.lineTo(q.x, q.y);
            ctx.stroke();
          }
        }
      }
      requestAnimationFrame(draw);
    }
    draw();
  }
  initParticles();

  /* ---- Form validation ---- */
  var contactForm = document.getElementById('contact-form');
  if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
      var valid = true;
      var inputs = contactForm.querySelectorAll('[required]');
      for (var i = 0; i < inputs.length; i++) {
        if (!inputs[i].value.trim()) {
          inputs[i].style.borderColor = '#f87171';
          valid = false;
        } else {
          inputs[i].style.borderColor = '';
        }
      }
      if (!valid) { e.preventDefault(); }
    });
  }

})();
