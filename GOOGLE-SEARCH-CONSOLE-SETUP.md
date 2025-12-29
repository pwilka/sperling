# Google Search Console Setup Guide

**Last Updated:** December 29, 2025  
**Website:** https://sperlinginsurance.com/

---

## 📋 Overview

Google Search Console helps you:
- Monitor your site's presence in Google Search
- See which keywords bring traffic
- Identify and fix indexing issues
- Submit sitemaps
- Monitor search performance

---

## 🚀 Step-by-Step Setup

### Step 1: Create Google Search Console Account

1. **Go to Google Search Console:**
   - Visit: https://search.google.com/search-console/
   - Sign in with your Google account (same account as Analytics recommended)

2. **Add Property:**
   - Click "Add Property" button
   - Select "URL prefix" method (recommended)
   - Enter your website URL: **https://sperlinginsurance.com/**
   - Click "Continue"

---

### Step 2: Verify Website Ownership

You need to prove you own the website. Choose **one** of these methods:

#### Method 1: HTML File Upload (Easiest)

1. **Download Verification File:**
   - Google will provide a verification file (e.g., `google1234567890.html`)
   - Download this file

2. **Upload to Your Website:**
   - Via SiteGround File Manager:
     - Go to Site Tools → Files → File Manager
     - Navigate to `public_html/` (root directory)
     - Upload the verification file
   - Via FTP/SFTP:
     - Upload file to root directory (`public_html/`)

3. **Verify:**
   - Go back to Search Console
   - Click "Verify"
   - If successful, you'll see a success message

#### Method 2: HTML Tag (Alternative)

1. **Get Verification Meta Tag:**
   - Google will show you a meta tag like:
     ```html
     <meta name="google-site-verification" content="xxxxxxxxxxxxxxxxxxxxx" />
     ```

2. **Add to WordPress:**
   - We can add this to your `header.php` file
   - Or use Rank Math SEO plugin (has Search Console integration)

3. **Verify:**
   - Click "Verify" in Search Console

#### Method 3: Domain Name Provider (Advanced)

1. **Add DNS TXT Record:**
   - Google provides a TXT record
   - Add it to your domain's DNS settings
   - Wait for DNS propagation (can take 24-48 hours)

2. **Verify:**
   - Click "Verify" in Search Console

#### Method 4: Google Analytics (If Already Set Up)

1. **If you have Google Analytics:**
   - And you're an admin on the GA property
   - You can verify via Google Analytics
   - Click "Verify" using this method

---

### Step 3: Submit Sitemap

Once verified, submit your sitemap:

1. **Get Sitemap URL:**
   - Rank Math generates sitemaps automatically
   - Sitemap URL: **https://sperlinginsurance.com/sitemap.xml**
   - Or check: **https://sperlinginsurance.com/sitemap_index.xml**

2. **Submit in Search Console:**
   - Go to Search Console
   - Click "Sitemaps" in left menu
   - Enter sitemap URL: `sitemap.xml` or `sitemap_index.xml`
   - Click "Submit"

3. **Verify Submission:**
   - Status should show "Success"
   - Google will start crawling your sitemap

---

### Step 4: Link to Google Analytics

Connect Search Console to Analytics for better insights:

1. **In Google Analytics:**
   - Go to Admin → Property Settings
   - Scroll to "Search Console"
   - Click "Adjust Search Console"
   - Click "Add" next to your Search Console property
   - Save

2. **In Search Console:**
   - Go to Settings → Associations
   - Verify Analytics property is linked

---

## 📊 Key Features to Configure

### 1. URL Inspection

**What it does:** Check if specific pages are indexed

**How to use:**
- Go to "URL Inspection" in Search Console
- Enter any page URL
- Click "Test Live URL"
- See indexing status, mobile usability, etc.

### 2. Performance Report

**What it shows:**
- Which keywords bring traffic
- Click-through rates (CTR)
- Average position in search results
- Total clicks and impressions

**How to use:**
- Go to "Performance" in left menu
- Filter by date range, queries, pages, etc.
- Export data if needed

### 3. Coverage Report

**What it shows:**
- Which pages are indexed
- Which pages have errors
- Which pages are excluded

**How to use:**
- Go to "Coverage" in left menu
- Review "Valid" pages (indexed)
- Review "Error" pages (fix issues)
- Review "Excluded" pages (understand why)

### 4. Mobile Usability

**What it shows:**
- Mobile-friendly issues
- Pages with mobile problems

**How to use:**
- Go to "Mobile Usability" in left menu
- Fix any reported issues
- Request re-crawling after fixes

---

## 🔧 Rank Math SEO Integration

Since you're using Rank Math SEO, you can connect it directly:

### Connect Rank Math to Search Console:

1. **In WordPress Admin:**
   - Go to **Rank Math SEO → General Settings → Search Console**
   - Click "Get Authorization Code"
   - You'll be redirected to Google to authorize
   - Copy the authorization code
   - Paste it back in Rank Math
   - Click "Authenticate"

2. **Benefits:**
   - Automatic sitemap submission
   - Search Console data in WordPress
   - Easier monitoring

---

## 📈 Important Reports to Monitor

### Weekly Checks:

1. **Performance Report:**
   - Top performing keywords
   - Pages getting most traffic
   - Click-through rates

2. **Coverage Report:**
   - New indexing errors
   - Pages that need attention

### Monthly Reviews:

1. **Performance Trends:**
   - Traffic growth
   - Keyword ranking changes
   - Seasonal patterns

2. **Mobile Usability:**
   - Mobile issues
   - Mobile-friendly status

---

## 🎯 Setting Up Email Alerts

Get notified of important issues:

1. **Go to Settings:**
   - Click gear icon (Settings) in Search Console
   - Click "Users and permissions"
   - Add email addresses for notifications

2. **Automatic Alerts:**
   - Google automatically sends emails for:
     - Security issues
     - Manual actions
     - Significant traffic drops
     - Mobile usability issues

---

## 🔍 Common Tasks

### Request Indexing for New Pages

1. **After publishing a new page:**
   - Go to URL Inspection
   - Enter the page URL
   - Click "Request Indexing"
   - Google will crawl it within a few days

### Fix Indexing Issues

1. **If a page isn't indexed:**
   - Check Coverage report for errors
   - Fix the issue (404, blocked by robots.txt, etc.)
   - Request re-indexing via URL Inspection

### Monitor Search Performance

1. **Track keyword rankings:**
   - Go to Performance report
   - Filter by specific queries
   - Track position changes over time

---

## 🐛 Troubleshooting

### Issue: Can't Verify Ownership

**Solutions:**
- Try a different verification method
- Ensure verification file is in root directory
- Check file permissions (should be readable)
- Wait 24-48 hours for DNS propagation (if using DNS method)

### Issue: Sitemap Not Submitting

**Solutions:**
- Verify sitemap URL is correct
- Check if sitemap is accessible: `https://sperlinginsurance.com/sitemap.xml`
- Ensure Rank Math sitemap is enabled
- Check for robots.txt blocking

### Issue: No Data in Performance Report

**Solutions:**
- Wait 1-2 weeks for data to accumulate
- Ensure site is indexed (check Coverage report)
- Check if site is getting organic traffic
- Verify Search Console is properly connected

### Issue: Pages Not Indexed

**Solutions:**
- Check Coverage report for errors
- Ensure pages aren't blocked by robots.txt
- Check for noindex tags
- Request indexing via URL Inspection
- Build internal links to important pages

---

## 📝 Next Steps After Setup

1. ✅ **Verify ownership** (choose easiest method)
2. ✅ **Submit sitemap** (sitemap.xml)
3. ✅ **Link to Google Analytics** (for better insights)
4. ✅ **Connect Rank Math** (optional but recommended)
5. ⏳ **Monitor Performance** (check weekly)
6. ⏳ **Fix indexing issues** (as they arise)
7. ⏳ **Request indexing** for new important pages

---

## 🔗 Related Documentation

- **Google Analytics Setup:** See `GOOGLE-ANALYTICS-SETUP.md`
- **Rank Math SEO:** See `RANK-MATH-QUICK-FIX.md`
- **Sitemap Configuration:** Check Rank Math → General Settings → Sitemap

---

## 💡 Pro Tips

1. **Check Search Console Weekly:**
   - Monitor for new errors
   - Track keyword performance
   - Identify content opportunities

2. **Use URL Inspection:**
   - Before launching new pages
   - After making SEO changes
   - To verify indexing status

3. **Monitor Mobile Usability:**
   - Fix mobile issues promptly
   - Test on real devices
   - Ensure responsive design

4. **Track Performance Trends:**
   - Compare month-over-month
   - Identify seasonal patterns
   - Adjust content strategy based on data

---

*Once verified, Search Console will start collecting data. It may take a few days to see initial data, but you'll have valuable insights into your search performance!*

