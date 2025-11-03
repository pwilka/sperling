# Sperling WordPress Theme (LocalWP + Bootstrap)

**Author:** Pat Wilka  
**Repository:** [https://github.com/pwilka/sperling](https://github.com/pwilka/sperling)

---

## 🧩 Project Overview
This theme powers the new **Sperling Insurance** website, built locally with **LocalWP** and deployed to GitHub for version control.  
We are building a **custom WordPress theme** that will use:
- **Bootstrap 5** for layout and responsive structure  
- **Custom static HTML/CSS/JS** from the existing Sperling site design  
- **PHP templates** for WordPress theme integration (home, header, footer, etc.)

---

## 📂 Current Structure

wp-content/
└── themes/
└── sperling/
├── index.php
├── style.css
├── functions.php ← (to be created)
├── header.php ← (to be created)
├── footer.php ← (to be created)
├── home.php ← (custom static homepage)
├── assets/
│ ├── css/
│ ├── js/
│ └── images/
├── inc/
│ └── enqueue-scripts.php (Bootstrap + custom JS)
└── README.md

markdown
Copy code

---

## ⚙️ Setup Tasks

### 1. Bootstrap Integration
- [ ] Add Bootstrap 5 (CDN or local) via `functions.php` enqueue.
- [ ] Create `/assets/css/` and `/assets/js/` folders.
- [ ] Include custom styles in `style.css` or link separately.

### 2. Theme Files
- [x] `style.css` — created with theme header.
- [x] `index.php` — placeholder.
- [ ] `functions.php` — enqueue scripts + setup theme support.
- [ ] `header.php` / `footer.php` — move static HTML into templates.
- [ ] `home.php` — integrate your current static homepage HTML.

### 3. Git & Deployment
- [x] Initialize repo + push to GitHub.
- [ ] Add `.gitignore` to exclude LocalWP and system files.
- [ ] Commit as new version once `functions.php` + Bootstrap added.

---

## 🔌 Plugin Installation Phases

### ✅ PHASE 1 — INITIAL SETUP (Completed)
**Installed before theme customization:**

- ✅ **Rank Math SEO** — Titles, meta, schema, sitemaps
- ✅ **WPForms Lite** — Contact/quote forms
- ✅ **UpdraftPlus** — Local backups
- ✅ **Wordfence Security** — Firewall and login protection
- ✅ **WP Fastest Cache** — Caching and minification
- ✅ **Enable Media Replace** — Image replacement utility

### ✅ PHASE 2 — THEME DEVELOPMENT (Completed)
**Installed during theme customization:**

- ✅ **Advanced Custom Fields (ACF)** — Structured data fields
- ✅ **Duplicate Page** — Faster page templating
- ✅ **Safe SVG** — Secure SVG uploads

### ⏳ PHASE 3 — OPTIMIZATION & SEO STRUCTURE (Pending)
**Install before launch testing:**

- [ ] **Rank Math SEO** configuration — Configure sitemap, local schema, breadcrumbs, connect to Google Search Console
- [ ] **Autoptimize** — Advanced CSS/JS/HTML minification (pairs with WP Fastest Cache)
- [ ] **Smush or ShortPixel** — Image compression optimization
- [ ] **Redirection** — URL redirect management for SEO
- [ ] **GA Google Analytics (by Jeff Starr)** — Simple GA4 tracker

**When:** Right before final optimization and pre-launch QA.

### ⏳ PHASE 4 — DEPLOYMENT & LIVE READINESS (Pending)
**Add just before or after migration:**

- [ ] **WP Mail SMTP** — Ensure forms send properly on live server
- [ ] **Really Simple SSL** — Auto-configure HTTPS once SSL is installed
- [ ] **UpdraftPlus backup** — Run final backup right before migration
- [ ] **Site Health Check** — Verify Settings → Tools → Site Health

**When:** Just before or immediately after going live.

---

## 🪄 Next Steps

1. **Add `functions.php`:**
   - Enqueue Bootstrap 5 (CSS + JS).
   - Enqueue your `style.css` and any JS from `/assets/js/`.
   - Register navigation menus and theme supports.

2. **Integrate Static HTML:**
   - Split your static homepage into `header.php`, `home.php`, and `footer.php`.
   - Replace static image/asset paths with WordPress functions:
     ```php
     <?php echo get_template_directory_uri(); ?>/assets/images/logo.png
     ```

3. **Preview in LocalWP:**
   - Activate the theme under **Appearance → Themes**.
   - Visit `sperling.local` to preview live homepage.

---

## ✅ Verification Checklist

| Step | Status | Notes |
|------|---------|-------|
| GitHub Repo Connected | ✅ | Uses pwilka account |
| Bootstrap Enqueued | ☐ | via `functions.php` |
| Static Homepage Integrated | ☐ | convert to `home.php` |
| Theme Active in LocalWP | ☐ | after HTML integration |
| Custom Styles Loaded | ☐ | ensure CSS applies |
| Initial Commit to GitHub | ✅ | 11/1/2025 |
| Plugin Phase 1 (Initial Setup) | ✅ | All core plugins installed |
| Plugin Phase 2 (Theme Development) | ✅ | ACF, Duplicate Page, Safe SVG installed |
| Plugin Phase 3 (Optimization) | ☐ | Install before pre-launch QA |
| Plugin Phase 4 (Deployment) | ☐ | Install before/after migration |

---

## 🧠 References

- [Bootstrap 5 Docs](https://getbootstrap.com/docs/5.3/getting-started/introduction/)
- [WordPress Theme Handbook](https://developer.wordpress.org/themes/)
- [Template Hierarchy](https://developer.wordpress.org/themes/basics/template-hierarchy/)

---

*Last updated: November 1, 2025 by Pat Wilka*
