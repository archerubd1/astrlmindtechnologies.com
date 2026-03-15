/* ================================================================
   ASTRL MIND TECHNOLOGIES — Main JS  (ES5 compatible)
   ================================================================ */
(function() {
  'use strict';

  /* ── Navbar scroll ───────────────────────────────────────────── */
  var nav = document.getElementById('main-nav');
  function onScroll() {
    if (!nav) return;
    if (window.pageYOffset > 40) { nav.classList.add('scrolled'); }
    else { nav.classList.remove('scrolled'); }
    var btt = document.getElementById('btt');
    if (btt) btt.style.display = window.pageYOffset > 400 ? 'flex' : 'none';
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  /* ── Mobile hamburger ────────────────────────────────────────── */
  var hbg = document.getElementById('hamburger');
  var mob = document.getElementById('mobile-nav');
  if (hbg && mob) {
    hbg.addEventListener('click', function() {
      hbg.classList.toggle('active');
      mob.classList.toggle('open');
      document.body.style.overflow = mob.classList.contains('open') ? 'hidden' : '';
    });
    var mobLinks = mob.querySelectorAll('a');
    for (var i = 0; i < mobLinks.length; i++) {
      mobLinks[i].addEventListener('click', function() {
        hbg.classList.remove('active');
        mob.classList.remove('open');
        document.body.style.overflow = '';
      });
    }
  }

  /* ── Active nav link ─────────────────────────────────────────── */
  var curPage = window.location.pathname.split('/').pop() || 'index.php';
  var navAs = document.querySelectorAll('.nav-links a');
  for (var j = 0; j < navAs.length; j++) {
    var href = navAs[j].getAttribute('href') || '';
    if (href && href.indexOf(curPage) !== -1 && curPage !== '') {
      navAs[j].classList.add('active');
    }
  }

  /* ── Scroll reveal ───────────────────────────────────────────── */
  function checkReveal() {
    var vh = window.innerHeight;
    var revs = document.querySelectorAll('.reveal:not(.visible)');
    for (var k = 0; k < revs.length; k++) {
      if (revs[k].getBoundingClientRect().top < vh - 70) revs[k].classList.add('visible');
    }
    var stags = document.querySelectorAll('.stagger:not(.visible)');
    for (var l = 0; l < stags.length; l++) {
      if (stags[l].getBoundingClientRect().top < vh - 50) stags[l].classList.add('visible');
    }
    var bars = document.querySelectorAll('.skill-fill[data-w]:not([data-done])');
    for (var m = 0; m < bars.length; m++) {
      if (bars[m].getBoundingClientRect().top < vh - 30) {
        bars[m].style.width = bars[m].getAttribute('data-w') + '%';
        bars[m].setAttribute('data-done', '1');
      }
    }
  }
  window.addEventListener('scroll', checkReveal, { passive: true });
  setTimeout(checkReveal, 200);

  /* ── Counter animation ───────────────────────────────────────── */
  function animCounter(el, target, dur, suffix) {
    var start = 0, step = target / (dur / 16);
    var t = setInterval(function() {
      start += step;
      if (start >= target) { start = target; clearInterval(t); }
      el.textContent = Math.floor(start).toLocaleString() + (suffix || '');
    }, 16);
  }
  function checkCounters() {
    var vh = window.innerHeight;
    var cnts = document.querySelectorAll('[data-count]:not([data-counted])');
    for (var n = 0; n < cnts.length; n++) {
      if (cnts[n].getBoundingClientRect().top < vh - 40) {
        cnts[n].setAttribute('data-counted', '1');
        animCounter(cnts[n], parseInt(cnts[n].getAttribute('data-count')), 2000, cnts[n].getAttribute('data-suffix') || '');
      }
    }
  }
  window.addEventListener('scroll', checkCounters, { passive: true });
  setTimeout(checkCounters, 300);

  /* ── Typed text ─────────────────────────────────────────────── */
  function initTyped(elId, words) {
    var el = document.getElementById(elId);
    if (!el) return;
    var cur = document.createElement('span');
    cur.className = 'typed-cursor';
    el.parentNode.insertBefore(cur, el.nextSibling);
    var wi = 0, ci = 0, del = false;
    function tick() {
      var word = words[wi];
      if (del) {
        el.textContent = word.substring(0, --ci);
        if (ci < 0) { del = false; wi = (wi + 1) % words.length; setTimeout(tick, 400); return; }
        setTimeout(tick, 60);
      } else {
        el.textContent = word.substring(0, ++ci);
        if (ci > word.length) { del = true; setTimeout(tick, 1800); return; }
        setTimeout(tick, 85);
      }
    }
    tick();
  }
  initTyped('typed', ['Intelligent Platforms', 'AI Solutions', 'Cloud Engineering', 'Enterprise Software', 'Digital Transformation']);

  /* ── Particle canvas ─────────────────────────────────────────── */
  var canvas = document.getElementById('bg-canvas');
  if (canvas && canvas.getContext) {
    var ctx = canvas.getContext('2d');
    var pts = [];
    function resize() { canvas.width = window.innerWidth; canvas.height = window.innerHeight; }
    resize();
    window.addEventListener('resize', resize);
    for (var p = 0; p < 50; p++) {
      pts.push({ x: Math.random() * canvas.width, y: Math.random() * canvas.height,
        vx: (Math.random() - 0.5) * 0.4, vy: (Math.random() - 0.5) * 0.4,
        r: Math.random() * 1.5 + 0.5 });
    }
    function draw() {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      for (var i = 0; i < pts.length; i++) {
        var pt = pts[i];
        pt.x += pt.vx; pt.y += pt.vy;
        if (pt.x < 0) pt.x = canvas.width; if (pt.x > canvas.width) pt.x = 0;
        if (pt.y < 0) pt.y = canvas.height; if (pt.y > canvas.height) pt.y = 0;
        ctx.beginPath(); ctx.arc(pt.x, pt.y, pt.r, 0, Math.PI * 2);
        ctx.fillStyle = 'rgba(0,144,255,0.5)'; ctx.fill();
        for (var j = i + 1; j < pts.length; j++) {
          var dx = pt.x - pts[j].x, dy = pt.y - pts[j].y;
          var d = Math.sqrt(dx * dx + dy * dy);
          if (d < 120) {
            ctx.beginPath();
            ctx.strokeStyle = 'rgba(0,144,255,' + (0.09 * (1 - d / 120)) + ')';
            ctx.lineWidth = 0.6;
            ctx.moveTo(pt.x, pt.y); ctx.lineTo(pts[j].x, pts[j].y); ctx.stroke();
          }
        }
      }
      requestAnimationFrame(draw);
    }
    draw();
  }

  /* ── FAQ accordion ───────────────────────────────────────────── */
  var faqs = document.querySelectorAll('.faq-item');
  for (var f = 0; f < faqs.length; f++) {
    (function(item) {
      var q = item.querySelector('.faq-q');
      var a = item.querySelector('.faq-a');
      if (q && a) {
        q.addEventListener('click', function() {
          var open = a.style.display === 'block';
          // close all
          for (var x = 0; x < faqs.length; x++) {
            var fa = faqs[x].querySelector('.faq-a');
            if (fa) fa.style.display = 'none';
            faqs[x].classList.remove('open');
          }
          if (!open) { a.style.display = 'block'; item.classList.add('open'); }
        });
      }
    })(faqs[f]);
  }

  /* ── Smooth scroll anchors ───────────────────────────────────── */
  var anchors = document.querySelectorAll('a[href^="#"]');
  for (var s = 0; s < anchors.length; s++) {
    anchors[s].addEventListener('click', function(e) {
      var target = document.querySelector(this.getAttribute('href'));
      if (target) { e.preventDefault(); target.scrollIntoView({ behavior: 'smooth' }); }
    });
  }

  /* ── BTT button ──────────────────────────────────────────────── */
  var bttBtn = document.getElementById('btt');
  if (bttBtn) {
    bttBtn.addEventListener('click', function() { window.scrollTo({ top: 0, behavior: 'smooth' }); });
  }

})();
