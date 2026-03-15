# Astrl Mind Technologies — Website

**PHP 5.x / MySQL 5.x / GoDaddy Shared Hosting**

A complete, production-ready corporate website for **Astrl Mind Technologies** — a future-forward technology and innovation company structured across 7 C-suite-led divisions.

---

## 🌐 Live Preview
Run locally with: `php -S localhost:8080`

---

## 📁 Project Structure

```
├── index.php              # Homepage
├── about.php              # About Us
├── leadership.php         # Leadership & Org Structure
├── services.php           # Services Overview
├── consulting.php         # Consulting Practices
├── careers.php            # Careers & Open Roles
├── contact.php            # Contact Form (PHP mail)
├── 404.php                # Custom 404 Page
├── .htaccess              # GoDaddy optimized
├── includes/
│   ├── header.php         # Global navbar + mobile menu
│   └── footer.php         # Global footer
├── assets/
│   ├── css/style.css      # Design system (~2600 lines)
│   ├── css/animations.css # Animation utilities
│   ├── js/main.js         # Particles, counters, typed text
│   └── images/favicon.svg
└── pages/services/
    ├── technology.php     # CTO Division
    ├── operations.php     # COO Division
    ├── product.php        # CPO Division
    ├── finance.php        # CFO Division
    ├── sales.php          # CMO Division
    ├── learning.php       # CLO Division
    └── content.php        # CCO Division
```

---

## 🏛️ Leadership & Department Structure

```
Founder / CEO
│
├── CTO — Technology & Platforms
│   ├── Software Engineering
│   ├── DevOps & Cloud Infrastructure
│   ├── Platform Architecture
│   ├── IT Infrastructure & Security
│   └── R&D / Emerging Technologies
│
├── COO — Operations & Delivery
│   ├── Project Management Office (PMO)
│   ├── Client Delivery & Implementation
│   ├── Quality Assurance & Process Excellence
│   ├── Service Operations
│   └── Customer Support
│
├── CPO — Product & Innovation
│   ├── Product Management
│   ├── Product Design (UI/UX)
│   ├── Product Engineering Coordination
│   ├── Product Strategy & Roadmap
│   └── Innovation Lab / New Product Development
│
├── CFO — Finance & Compliance
│   ├── Finance & Accounting
│   ├── Financial Planning & Analysis
│   ├── Legal & Compliance
│   ├── Procurement & Vendor Management
│   └── Risk & Audit
│
├── CMO — Sales, Marketing & Partnerships
│   ├── Enterprise Sales
│   ├── Business Development
│   ├── Digital Marketing
│   ├── Brand & Communications
│   └── Strategic Partnerships & Alliances
│
├── CLO — Learning & Talent Development
│   ├── Train-to-Hire Programs
│   ├── Corporate Skilling & Upskilling
│   ├── Curriculum Development
│   ├── Trainers & Faculty
│   └── Placement & Industry Partnerships
│
└── CCO — Content & Media Services
    ├── Content Strategy
    ├── Content Production (Writers & Editors)
    ├── Creative Design (Graphics & Visuals)
    ├── Video & Multimedia Production
    └── Content Marketing & Distribution
```

---

## ✨ Design Features

- **Dark futuristic theme** — Deep navy `#0a1628` + Cyan `#00c8ff` + Purple `#7c3aed`
- **Particle canvas** — Animated connected-dot network background
- **Typed text** — Hero rotating through 6 key offerings
- **Glassmorphism cards** — Hover glow effects
- **Animated counters** — Stats count up on scroll
- **Scroll reveal** — Staggered entrance animations
- **Fully responsive** — Mobile, tablet, desktop
- **Custom SVG favicon**

---

## ⚙️ Technical

- ✅ PHP 5.x compatible (`array()` syntax, no short closures)
- ✅ All files pass `php -l` syntax validation
- ✅ `.htaccess` — Gzip, browser caching, security headers
- ✅ Contact form with `mail()`, input sanitization, honeypot
- ✅ Sticky navbar with dropdowns + mobile hamburger

---

## 📤 GoDaddy Deployment

1. Upload all files to `public_html/`
2. Edit `contact.php` line ~22 → change `hello@astrlmind.com` to your email
3. In `.htaccess` → uncomment the HTTPS redirect block (after SSL install)
4. Visit your domain — site is live! ✅

---

## 🔧 Local Development

```bash
# Requires PHP CLI
php -S localhost:8080

# Then open: http://localhost:8080/index.php
```

---

*Built for Astrl Mind Technologies — Architecting the future.*
