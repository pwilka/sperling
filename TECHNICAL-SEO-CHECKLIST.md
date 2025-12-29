# Technical SEO Checklist - Sperling Insurance

**Last Updated:** December 29, 2025  
**Goal:** Ensure all technical SEO requirements are met for maximum local search visibility

---

## 🎯 Ground Rules

- **SEO > aesthetics** (but still clean, modern)
- **Simple navigation** - Low cognitive load
- **No bloated plugins** - No over-engineering
- **Fast load times** - Critical for SEO and UX
- **Mobile-first** - Most traffic is mobile

---

## ✅ On-Page SEO Checklist

### Title Tags
- [ ] **Unique title tags** for every page
- [ ] Format: `[Service] Insurance in [City, State] | Sperling Insurance`
- [ ] 50-60 characters (optimal length)
- [ ] Include location keywords naturally
- [ ] Include primary service keyword
- [ ] Brand name at end
- [ ] No keyword stuffing

**Examples:**
- Home: `Insurance in Sioux Falls, SD | Sperling Insurance - 20+ Years`
- Auto: `Auto Insurance in Sioux Falls, South Dakota | Sperling Insurance`
- Farm: `Farm Insurance Sioux Falls SD | Farm & Ranch Insurance South Dakota`

### Meta Descriptions
- [ ] **Optimized meta descriptions** for every page
- [ ] 150-160 characters (optimal length)
- [ ] Include location and service keywords
- [ ] Include call-to-action
- [ ] Unique for each page
- [ ] Compelling and click-worthy

**Examples:**
- Home: `Sperling Insurance offers auto, home, business & farm insurance in Sioux Falls, SD. Independent agency with 20+ years serving South Dakota. Get a free quote today!`
- Auto: `Get affordable auto insurance in Sioux Falls, South Dakota. Sperling Insurance shops multiple carriers to find the best rates. Call (605) 334-7350 for a free quote.`

### Heading Structure
- [ ] **One H1 per page** (primary keyword)
- [ ] **Proper H2/H3 usage** (logical hierarchy)
- [ ] H1 includes location + service
- [ ] H2s support main topic
- [ ] H3s for subsections
- [ ] No skipped heading levels (H1 → H2 → H3, not H1 → H3)

**Example Structure:**
```
H1: Auto Insurance in Sioux Falls, South Dakota
  H2: What is Auto Insurance?
    H3: Liability Coverage
    H3: Comprehensive Coverage
  H2: Why Auto Insurance Matters in Sioux Falls
  H2: Why Choose Sperling Insurance
  H2: Get Your Free Auto Insurance Quote
```

### Internal Linking Strategy
- [ ] **Strategic internal links** throughout content
- [ ] Link to related service pages
- [ ] Link to location pages
- [ ] Link to contact/quote pages
- [ ] Use descriptive anchor text (not "click here")
- [ ] 3-5 internal links per page (minimum)
- [ ] Links are contextually relevant

**Anchor Text Examples:**
- ✅ "Get a quote for home insurance in Sioux Falls"
- ✅ "Learn more about our farm insurance coverage"
- ✅ "Contact our Sioux Falls office"
- ❌ "Click here"
- ❌ "Read more"

### Image Optimization
- [ ] **Alt text on all images**
- [ ] Descriptive alt text (not just "image1.jpg")
- [ ] Include location keywords when relevant
- [ ] Include service keywords when relevant
- [ ] Keep alt text concise (125 characters or less)
- [ ] Don't keyword stuff alt text
- [ ] Use descriptive file names

**Alt Text Examples:**
- ✅ "Sperling Insurance office in Sioux Falls, South Dakota"
- ✅ "Auto insurance agent helping customer in Sioux Falls"
- ✅ "Farm insurance coverage for South Dakota farms"
- ❌ "image1"
- ❌ "photo"

---

## ⚙️ Technical SEO Checklist

### Mobile Responsiveness
- [ ] **Mobile responsive design** (Bootstrap 5 ✅)
- [ ] Test on multiple devices (phone, tablet)
- [ ] Touch-friendly buttons (minimum 44x44px)
- [ ] Readable text (no zooming required)
- [ ] Fast mobile load times
- [ ] Mobile-friendly navigation
- [ ] Forms work on mobile

### Page Speed
- [ ] **Fast load times** (under 3 seconds)
- [ ] Optimize images (compress, WebP format)
- [ ] Minify CSS/JS (WP Fastest Cache ✅)
- [ ] Enable caching (WP Fastest Cache ✅)
- [ ] Reduce HTTP requests
- [ ] Use CDN if needed
- [ ] Lazy load images
- [ ] Optimize fonts (subset, preload)

**Tools to Test:**
- Google PageSpeed Insights
- GTmetrix
- Pingdom

### SSL/HTTPS
- [ ] **SSL active** (HTTPS)
- [ ] All pages load over HTTPS
- [ ] No mixed content warnings
- [ ] SSL certificate valid
- [ ] Redirect HTTP to HTTPS (Really Simple SSL plugin)

### XML Sitemap
- [ ] **XML sitemap generated** (Rank Math ✅)
- [ ] Sitemap includes all important pages
- [ ] Sitemap submitted to Google Search Console
- [ ] Sitemap updated automatically
- [ ] Sitemap accessible at `/sitemap.xml`

**Rank Math Sitemap Settings:**
- Go to Rank Math → General Settings → Sitemap
- Ensure sitemap is enabled
- Check that all post types are included
- Submit to Search Console

### Robots.txt
- [ ] **Robots.txt file exists**
- [ ] Allows search engines to crawl
- [ ] Blocks admin and private areas
- [ ] Points to sitemap
- [ ] No unnecessary blocking

**Example robots.txt:**
```
User-agent: *
Allow: /
Disallow: /wp-admin/
Disallow: /wp-includes/
Disallow: /wp-content/plugins/
Disallow: /wp-content/themes/
Disallow: /wp-content/uploads/*.pdf$

Sitemap: https://sperlinginsurance.com/sitemap.xml
```

### Canonical Tags
- [ ] **Canonical tags on all pages**
- [ ] Points to preferred URL version
- [ ] Prevents duplicate content issues
- [ ] Handled by Rank Math automatically ✅

**Rank Math Settings:**
- Go to Rank Math → General Settings → Canonical
- Ensure canonical URLs are enabled
- Set preferred domain (www or non-www)

### No Index Bloat
- [ ] **No unnecessary pages indexed**
- [ ] Tag pages set to noindex (if not needed)
- [ ] Author pages set to noindex (if not needed)
- [ ] Archive pages set to noindex (if not needed)
- [ ] Search results pages set to noindex
- [ ] Only important content pages indexed

**Rank Math Settings:**
- Go to Rank Math → General Settings → Robots Meta
- Set tag archives to noindex
- Set author archives to noindex
- Set date archives to noindex

---

## 📋 Page-Specific Technical Requirements

### Homepage
- [ ] Unique title tag with location
- [ ] Meta description with CTA
- [ ] One H1 (location + trust signal)
- [ ] Proper heading hierarchy
- [ ] Internal links to service pages
- [ ] Alt text on all images
- [ ] Schema markup (Organization, LocalBusiness)

### Service Pages
- [ ] Unique title: `[Service] Insurance in [City, State]`
- [ ] Meta description with location + CTA
- [ ] H1: `[Service] Insurance in [City, State]`
- [ ] Proper H2/H3 structure
- [ ] Internal links to related pages
- [ ] FAQ schema markup (if FAQs present)
- [ ] Service schema markup

### Location Pages
- [ ] Unique title: `Sperling Insurance - [City] Office`
- [ ] Meta description with address + phone
- [ ] H1: `Sperling Insurance - [City] Office`
- [ ] LocalBusiness schema markup ✅
- [ ] Google Maps embed
- [ ] NAP (Name, Address, Phone) consistent
- [ ] Internal links to service pages

### Contact/Quote Pages
- [ ] Unique title tags
- [ ] Meta descriptions with CTA
- [ ] Form tracking (GA4 events) ✅
- [ ] Thank you page with tracking
- [ ] Conversion tracking ready ✅

---

## 🔍 Ongoing Monitoring

### Weekly Checks
- [ ] Google Search Console for errors
- [ ] Page speed (if changes made)
- [ ] Broken links (if content updated)
- [ ] Mobile usability (if design changes)

### Monthly Reviews
- [ ] Search Console performance
- [ ] Google Analytics traffic trends
- [ ] Keyword rankings (if tracking)
- [ ] Technical SEO audit

### Quarterly Audits
- [ ] Full technical SEO audit
- [ ] Page speed optimization review
- [ ] Internal linking audit
- [ ] Schema markup validation
- [ ] Mobile usability test

---

## 🛠️ Tools & Resources

### SEO Tools
- **Rank Math SEO** - On-page SEO ✅
- **Google Search Console** - Search performance
- **Google Analytics** - Traffic analysis ✅
- **Google PageSpeed Insights** - Speed testing
- **GTmetrix** - Performance testing
- **Schema.org Validator** - Schema validation

### Testing Tools
- **Google Mobile-Friendly Test** - Mobile usability
- **W3C Validator** - HTML validation
- **Rich Results Test** - Schema testing
- **Lighthouse** - Performance audit

---

## ✅ Pre-Launch Technical SEO Checklist

Before going live, ensure:

- [ ] All title tags unique and optimized
- [ ] All meta descriptions written
- [ ] One H1 per page
- [ ] Proper heading hierarchy
- [ ] Internal linking strategy implemented
- [ ] All images have alt text
- [ ] Mobile responsive (tested)
- [ ] Fast load times (under 3 seconds)
- [ ] SSL active (HTTPS)
- [ ] XML sitemap generated and submitted
- [ ] Robots.txt configured
- [ ] Canonical tags working
- [ ] No index bloat
- [ ] Schema markup on key pages
- [ ] Forms tracking conversions
- [ ] Thank you pages set up

---

## 📝 Implementation Notes

### Rank Math Configuration
- Title tags: Auto-generate with templates
- Meta descriptions: Write unique for each page
- Schema: Enable LocalBusiness, Organization, FAQ
- Sitemap: Auto-generate and submit
- Robots: Configure in General Settings

### Performance Optimization
- Use WP Fastest Cache for caching ✅
- Optimize images before upload
- Minify CSS/JS (Autoptimize when installed)
- Enable lazy loading
- Use CDN if needed

### Mobile Optimization
- Bootstrap 5 responsive framework ✅
- Test on real devices
- Ensure touch targets are large enough
- Optimize forms for mobile
- Fast mobile load times

---

*This checklist ensures all technical SEO requirements are met for maximum local search visibility and lead generation.*

