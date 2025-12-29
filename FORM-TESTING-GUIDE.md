# Form Testing & Configuration Guide

**Last Updated:** December 29, 2025  
**Live Site:** https://sperlinginsurance.com/

---

## 📋 Current Form Setup

### Forminator Forms Installed
- **Quote Form (Homepage):** Form ID 13
- **Contact Form (Contact Page):** Form ID 18

### Form Locations
1. **Homepage Quote Form** (`/`)
   - Section: "Get Your Free Insurance Quote"
   - Form ID: 13
   - Fields: First Name, Last Name, Phone, Email, Insurance Type, Additional Details

2. **Contact Page Form** (`/contact/`)
   - Form ID: 18
   - Fields: (Check Forminator settings)

---

## ✅ Form Testing Checklist

### 1. Visual Testing
- [ ] Form displays correctly on desktop
- [ ] Form displays correctly on mobile
- [ ] All fields are visible and properly styled
- [ ] Form matches design (rounded corners, spacing, colors)
- [ ] Submit button is visible and styled correctly
- [ ] Form is centered and properly contained

### 2. Functionality Testing
- [ ] All required fields are marked with asterisk (*)
- [ ] Form validation works (try submitting empty form)
- [ ] Email validation works (try invalid email)
- [ ] Phone field accepts phone number format
- [ ] Dropdown (Insurance Type) works and shows all options
- [ ] Textarea (Additional Details) works and has character limit
- [ ] Form submits successfully
- [ ] Success message displays after submission
- [ ] Form clears/resets after successful submission

### 3. Email/Notification Testing
- [ ] Admin receives email notification when form is submitted
- [ ] User receives confirmation email (if configured)
- [ ] Email contains all form field data
- [ ] Email formatting is readable
- [ ] Email "From" address is correct
- [ ] Email "Reply-To" is set to user's email

### 4. Form Behavior Testing
- [ ] Form doesn't submit multiple times on double-click
- [ ] Loading state shows during submission
- [ ] Error messages display if submission fails
- [ ] Form works with JavaScript disabled (graceful degradation)
- [ ] Form works across different browsers (Chrome, Firefox, Safari, Edge)

### 5. Integration Testing
- [ ] Form submissions are saved in Forminator (if enabled)
- [ ] Form data appears in WordPress admin
- [ ] Google Analytics tracks form submissions (if configured)
- [ ] Form redirects to thank you page (if configured)
- [ ] Form integrates with CRM/email marketing (if configured)

---

## 🔧 Form Configuration Checklist

### In WordPress Admin → Forminator → Forms

#### Quote Form (ID: 13)
- [ ] **Notifications Tab:**
  - [ ] Admin email notification is enabled
  - [ ] Admin email address is correct
  - [ ] Email subject line is clear
  - [ ] Email includes all form fields
  - [ ] User confirmation email is configured (optional)

- [ ] **Settings Tab:**
  - [ ] Form name is "Quote Request" or similar
  - [ ] Form description is set
  - [ ] Enable form submissions storage
  - [ ] Set submission retention period

- [ ] **Behavior Tab:**
  - [ ] Success message is configured
  - [ ] Redirect URL is set (if using thank you page)
  - [ ] Form reset after submission is enabled
  - [ ] Enable AJAX submission (recommended)

- [ ] **Integrations Tab:**
  - [ ] Email marketing integration (if needed)
  - [ ] CRM integration (if needed)
  - [ ] Webhook integration (if needed)

#### Contact Form (ID: 18)
- [ ] Same configuration checklist as Quote Form
- [ ] Verify form fields match contact page needs

---

## 🐛 Common Form Issues & Solutions

### Issue: Form Not Submitting
**Possible Causes:**
- JavaScript errors in browser console
- Forminator plugin not active
- Form ID mismatch
- Server/hosting issues

**Solutions:**
1. Check browser console for errors (F12 → Console)
2. Verify Forminator plugin is active
3. Check form ID matches in template code
4. Test with fallback HTML form
5. Check WordPress error logs

### Issue: Emails Not Sending
**Possible Causes:**
- WP Mail SMTP not configured
- Email server issues
- Spam filters blocking emails
- Incorrect email settings

**Solutions:**
1. Install and configure WP Mail SMTP plugin
2. Test email sending from WordPress
3. Check spam/junk folders
4. Verify email addresses are correct
5. Use SMTP instead of PHP mail

### Issue: Form Styling Broken
**Possible Causes:**
- CSS conflicts
- Theme updates
- Plugin conflicts
- Cache issues

**Solutions:**
1. Clear all caches (browser, WordPress, hosting)
2. Check `style.css` for Forminator styles
3. Verify CSS is loading correctly
4. Check for plugin conflicts

### Issue: Form Not Displaying
**Possible Causes:**
- Forminator plugin not active
- Form ID incorrect
- Shortcode not rendering
- Template code issue

**Solutions:**
1. Verify Forminator is active
2. Check form ID in Forminator admin
3. Test shortcode directly: `[forminator_form id="13"]`
4. Check template code for errors

---

## 📧 Email Configuration

### Recommended: WP Mail SMTP Setup

1. **Install WP Mail SMTP Plugin**
   - Go to Plugins → Add New
   - Search "WP Mail SMTP"
   - Install and activate

2. **Configure SMTP Settings**
   - Go to WP Mail SMTP → Settings
   - Choose mailer (Gmail, SMTP, etc.)
   - Enter SMTP credentials
   - Test email sending

3. **Forminator Email Settings**
   - Go to Forminator → Forms → Edit Form
   - Navigate to Notifications tab
   - Configure admin email
   - Configure user confirmation (optional)

### Email Template Example

**Admin Notification:**
```
Subject: New Quote Request from Sperling Insurance Website

A new quote request has been submitted:

Name: {name-1} {name-2}
Phone: {phone-1}
Email: {email-1}
Insurance Type: {select-1}
Additional Details: {textarea-1}

Submitted: {date_submitted}
```

---

## 📊 Form Analytics & Tracking

### Google Analytics Event Tracking

Add this to track form submissions:

```javascript
// Track form submission
jQuery(document).on('forminator:form:submit:success', function(e, formId) {
    if (formId === '13') { // Quote form
        gtag('event', 'form_submission', {
            'event_category': 'Quote Form',
            'event_label': 'Homepage Quote Request'
        });
    }
    if (formId === '18') { // Contact form
        gtag('event', 'form_submission', {
            'event_category': 'Contact Form',
            'event_label': 'Contact Page Submission'
        });
    }
});
```

### Form Submission Tracking
- [ ] Set up Google Analytics event tracking
- [ ] Track form views
- [ ] Track form starts (first field interaction)
- [ ] Track form completions
- [ ] Track form abandonments

---

## 🧪 Manual Testing Steps

### Test Quote Form (Homepage)

1. **Navigate to:** https://sperlinginsurance.com/
2. **Scroll to:** "Get Your Free Insurance Quote" section
3. **Test Empty Submission:**
   - Click "Request Quote" without filling fields
   - Verify validation errors appear
4. **Test Invalid Email:**
   - Fill all fields
   - Enter invalid email (e.g., "test@")
   - Verify email validation error
5. **Test Valid Submission:**
   - Fill all required fields correctly
   - Select insurance type
   - Add details in textarea
   - Click "Request Quote"
   - Verify success message
   - Check email inbox for notification

### Test Contact Form

1. **Navigate to:** https://sperlinginsurance.com/contact/
2. **Follow same testing steps as Quote Form**

---

## 🔍 Form Debugging Tools

### Browser Developer Tools
- **F12** → Console (check for JavaScript errors)
- **F12** → Network (check form submission requests)
- **F12** → Elements (inspect form HTML)

### WordPress Debug
- Enable `WP_DEBUG` in `wp-config.php`
- Check `wp-content/debug.log` for errors
- Check Forminator → Submissions for saved data

### Forminator Debug Mode
- Go to Forminator → Settings → General
- Enable "Debug Mode" (if available)
- Check for form-specific errors

---

## 📝 Form Submission Data

### Where to Find Submissions

1. **WordPress Admin:**
   - Forminator → Submissions
   - View all form submissions
   - Export submissions if needed

2. **Email Notifications:**
   - Check admin email inbox
   - Check spam/junk folders
   - Verify email formatting

3. **Database:**
   - Forminator stores submissions in WordPress database
   - Table: `wp_frmt_form_entry` (or similar)

---

## ✅ Pre-Launch Form Checklist

Before going live, ensure:
- [ ] All forms tested and working
- [ ] Email notifications configured and tested
- [ ] Success messages are clear
- [ ] Error handling works properly
- [ ] Forms are mobile-responsive
- [ ] Form styling matches design
- [ ] Analytics tracking is set up
- [ ] Form submissions are being saved
- [ ] Backup form solution is ready (fallback HTML)

---

## 🚀 Next Steps

1. **Test both forms** using the checklist above
2. **Configure email notifications** in Forminator
3. **Set up WP Mail SMTP** for reliable email delivery
4. **Add Google Analytics tracking** for form submissions
5. **Create thank you pages** (if using redirects)
6. **Set up form automation** (auto-responders, CRM integration)

---

*If you encounter any issues during testing, document them and we can fix them together!*

