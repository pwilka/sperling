# Google Analytics 4 (GA4) Setup Guide

**Last Updated:** December 29, 2025  
**Website:** https://sperlinginsurance.com/

---

## ✅ Implementation Status

**Code Status:** ✅ Implemented in theme  
**Configuration Status:** ⏳ Needs GA4 Measurement ID

The Google Analytics tracking code has been added to your theme. You just need to:
1. Create a GA4 property (if you don't have one)
2. Get your Measurement ID
3. Add it to your WordPress site

---

## 📋 Step-by-Step Setup

### Step 1: Create Google Analytics 4 Property

1. **Go to Google Analytics:**
   - Visit: https://analytics.google.com/
   - Sign in with your Google account

2. **Create a New Property:**
   - Click "Admin" (gear icon) in bottom left
   - Under "Property" column, click "Create Property"
   - Enter property name: **Sperling Insurance**
   - Select time zone: **Central Time (US & Canada)**
   - Select currency: **United States Dollar (USD)**
   - Click "Next"

3. **Configure Business Information:**
   - Industry: **Insurance**
   - Business size: Select appropriate size
   - How you intend to use Google Analytics: Select relevant options
   - Click "Create"

4. **Set Up Data Stream:**
   - Select "Web" as platform
   - Website URL: **https://sperlinginsurance.com/**
   - Stream name: **Sperling Insurance Website**
   - Click "Create stream"

5. **Get Your Measurement ID:**
   - After creating stream, you'll see your **Measurement ID**
   - Format: `G-XXXXXXXXXX` (starts with "G-")
   - **Copy this ID** - you'll need it in the next step

---

### Step 2: Add Measurement ID to WordPress

You have **3 options** to add your GA4 Measurement ID:

#### Option 1: Using wp-config.php (Recommended for Production)

1. **Access wp-config.php:**
   - Via FTP/SFTP: Download `wp-config.php` from your WordPress root
   - Via SiteGround File Manager: Navigate to root, edit `wp-config.php`

2. **Add this line** (before the line that says "/* That's all, stop editing! */"):
   ```php
   define('SPERLING_GA4_ID', 'G-XXXXXXXXXX');
   ```
   Replace `G-XXXXXXXXXX` with your actual Measurement ID

3. **Save and upload** the file back to your server

#### Option 2: Using ACF Options Page (If ACF is installed)

1. **Go to WordPress Admin:**
   - Navigate to **Theme Settings** (or wherever ACF Options is)

2. **Add GA4 Measurement ID field:**
   - If field doesn't exist, we can add it via ACF
   - Enter your Measurement ID: `G-XXXXXXXXXX`
   - Save

#### Option 3: Manual Code Edit (Not Recommended)

Edit `functions.php` directly and replace the empty string with your ID (not recommended as it will be overwritten on updates).

---

### Step 3: Verify Tracking is Working

1. **Wait 24-48 hours** for data to appear in GA4

2. **Use Real-Time Reports:**
   - Go to Google Analytics
   - Click "Reports" → "Real-time"
   - Visit your website
   - You should see your visit appear in real-time

3. **Test Event Tracking:**
   - Click a phone number on your site
   - Submit a form
   - Check Real-time → Events to see if events are firing

---

## 📊 What's Being Tracked

### Automatic Page Views
- ✅ All page views are automatically tracked
- ✅ Page titles and URLs
- ✅ User location and device info

### Custom Events (Already Implemented)

1. **Phone Clicks** (`phone_click`)
   - Tracks when users click phone numbers
   - Category: Contact
   - Label: Phone number clicked

2. **Email Clicks** (`email_click`)
   - Tracks when users click email addresses
   - Category: Contact
   - Label: Email address clicked

3. **Form Submissions** (`form_submission`)
   - Quote Form (ID: 13): "Homepage Quote Request"
   - Contact Form (ID: 18): "Contact Page Submission"
   - Category: Form type
   - Label: Form name

4. **CTA Button Clicks** (`cta_click`)
   - Tracks clicks on primary buttons
   - Category: CTA
   - Label: Button text

5. **Scroll Depth** (`scroll_depth`)
   - Tracks when users scroll 25%, 50%, 75%, 100%
   - Category: Engagement
   - Helps measure content engagement

---

## 🎯 Setting Up Conversion Goals

### In Google Analytics 4:

1. **Go to Admin → Events**

2. **Mark Key Events as Conversions:**
   - Click on `form_submission` event
   - Toggle "Mark as conversion"
   - Do the same for `phone_click` if desired

3. **Create Custom Conversions:**
   - Go to Admin → Conversions
   - Click "New conversion event"
   - Name: "Quote Request"
   - Event name: `form_submission`
   - Conditions: `event_label` equals "Homepage Quote Request"

---

## 📈 Key Metrics to Monitor

### Important Reports to Check:

1. **Acquisition → Overview**
   - See where traffic is coming from
   - Organic search, direct, referrals, etc.

2. **Engagement → Events**
   - See which events are firing
   - Form submissions, phone clicks, etc.

3. **Engagement → Conversions**
   - Track conversion rates
   - Quote requests, contact form submissions

4. **Demographics → Overview**
   - User age, gender, interests
   - Location data

5. **Tech → Overview**
   - Devices used (mobile vs desktop)
   - Browsers, operating systems

---

## 🔧 Advanced Configuration

### Enhanced E-commerce (If Needed)

If you add e-commerce later, we can implement enhanced e-commerce tracking.

### Custom Dimensions

We can add custom dimensions to track:
- User type (new vs returning)
- Content categories
- Service pages viewed
- etc.

### User ID Tracking

For logged-in users, we can implement User ID tracking (requires privacy compliance).

---

## 🐛 Troubleshooting

### Issue: No Data Appearing in GA4

**Possible Causes:**
- Measurement ID not set correctly
- Code not loading on pages
- Ad blockers blocking tracking
- Wrong property selected

**Solutions:**
1. Verify Measurement ID is correct
2. Check browser console for errors (F12)
3. Use Google Tag Assistant browser extension
4. Check Real-time reports (data appears immediately)

### Issue: Events Not Tracking

**Possible Causes:**
- JavaScript errors on page
- Event code not loading
- Form plugin conflicts

**Solutions:**
1. Check browser console for errors
2. Verify `main.js` is loading
3. Test events in Real-time reports
4. Check that gtag is defined: `console.log(typeof gtag)`

### Issue: Duplicate Tracking

**Possible Causes:**
- Multiple GA4 codes installed
- Plugin also adding tracking
- Theme and plugin both tracking

**Solutions:**
1. Check for other GA4 implementations
2. Disable GA plugins if using custom code
3. Remove duplicate tracking code

---

## 🔒 Privacy & Compliance

### GDPR Compliance

The tracking code includes:
- ✅ IP anonymization (`anonymize_ip: true`)
- ✅ Cookie flags for SameSite compliance

### Additional Steps for Full Compliance:

1. **Add Privacy Policy:**
   - Update Privacy Policy page
   - Mention Google Analytics usage
   - Explain data collection

2. **Cookie Consent (If Required):**
   - Consider adding cookie consent banner
   - Only load GA after consent (if required by law)

3. **Data Retention:**
   - In GA4: Admin → Data Settings → Data Retention
   - Set retention period (14 months recommended)

---

## 📝 Next Steps

1. ✅ **Get GA4 Measurement ID** (from Google Analytics)
2. ✅ **Add ID to WordPress** (wp-config.php or ACF)
3. ✅ **Verify tracking works** (Real-time reports)
4. ⏳ **Set up conversions** (mark key events)
5. ⏳ **Link to Search Console** (see Search Console guide)
6. ⏳ **Set up custom reports** (if needed)

---

## 🔗 Related Documentation

- **Google Search Console Setup:** See `GOOGLE-SEARCH-CONSOLE-SETUP.md`
- **Form Tracking:** See `FORM-TESTING-GUIDE.md`
- **Event Tracking Code:** See `assets/js/main.js`

---

*Once you have your GA4 Measurement ID, add it using one of the methods above and tracking will start immediately!*

