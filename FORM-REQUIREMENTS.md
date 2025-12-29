# Form Requirements - Sperling Insurance

**Last Updated:** December 29, 2025  
**Goal:** Minimal friction, maximum conversions

---

## 🎯 Form Philosophy

- **Minimal fields only** - Reduce friction
- **Mobile-first** - Most traffic is mobile
- **No friction** - Easy to complete
- **Conversion-focused** - Get the lead

---

## 📋 Required Form Fields

### Quote Request Form

**Required Fields:**
1. **Name** (First + Last, or Full Name)
2. **Email** (for follow-up)
3. **Phone** (primary contact method)
4. **Insurance Type** (dropdown/select)
5. **Zip Code** (for local targeting)

**Optional Fields:**
- **Message/Additional Details** (textarea)

**Field Order (Mobile-First):**
1. First Name
2. Last Name
3. Phone Number
4. Email Address
5. Insurance Type (dropdown)
6. Zip Code
7. Additional Details (optional)

---

### Contact Form

**Required Fields:**
1. **Name** (First + Last)
2. **Email**
3. **Phone** (optional but recommended)
4. **Message**

**Optional Fields:**
- Subject
- Insurance Type

**Field Order:**
1. First Name
2. Last Name
3. Email
4. Phone (optional)
5. Message

---

## 📱 Mobile-First Design

### Form Layout
- **Single column** on mobile
- **Two columns** on desktop (First/Last Name, Phone/Email)
- **Full width** inputs on mobile
- **Large touch targets** (minimum 44x44px)
- **No horizontal scrolling**

### Input Styling
- **Large input fields** (easy to tap)
- **Clear labels** (above or inside field)
- **Placeholder text** (helpful hints)
- **Error messages** (clear and helpful)
- **Success feedback** (confirmation message)

### Button Design
- **Large submit button** (easy to tap)
- **Clear CTA text** ("Get My Free Quote", "Send Message")
- **Prominent placement** (visible without scrolling)
- **Loading state** (shows progress)

---

## 🎯 Conversion Optimization

### Reduce Friction
- ✅ Minimal required fields
- ✅ Clear field labels
- ✅ Helpful placeholder text
- ✅ Inline validation (real-time)
- ✅ No unnecessary steps
- ✅ No captcha (unless spam is an issue)

### Build Trust
- ✅ Privacy statement ("We'll never share your information")
- ✅ Security indicators (SSL badge if needed)
- ✅ Clear value proposition ("Get a free quote")
- ✅ Social proof (if available)

### Urgency/Scarcity (If Appropriate)
- "Get your free quote today"
- "Limited time offer" (if applicable)
- "Call now for immediate assistance"

---

## 📊 Tracking & Analytics

### GA4 Event Tracking ✅
- **Form view** - Track when form is viewed
- **Form start** - Track when user starts filling
- **Form submission** - Track successful submissions ✅
- **Form abandonment** - Track incomplete forms

**Event Names:**
- `form_view` - Form displayed
- `form_start` - First field interaction
- `form_submission` - Form submitted successfully
- `form_abandonment` - Form started but not submitted

### Conversion Tracking ✅
- **Mark as conversion** in GA4
- **Set up conversion goals**
- **Track conversion value** (if applicable)

### Form Analytics
- **Track form completion rate**
- **Identify drop-off points**
- **A/B test form variations** (if needed)

---

## ✅ Thank You Page Requirements

### Required Elements
- [ ] **Thank you message** (clear and friendly)
- [ ] **Next steps** (what happens next)
- [ ] **Contact information** (phone number)
- [ ] **Additional resources** (links to service pages)
- [ ] **GA4 conversion tracking** ✅
- [ ] **No back button needed** (clear path forward)

### Thank You Page Content

**Example Structure:**
```
H1: Thank You for Your Request!

Message: We've received your quote request and one of our experienced agents will contact you within 24 hours.

What Happens Next:
1. Our team will review your information
2. We'll shop multiple carriers for the best rates
3. An agent will call you within 24 hours

Need Immediate Assistance?
Call us now: (605) 334-7350

Explore Our Services:
- Auto Insurance
- Home Insurance
- Business Insurance
- Farm Insurance
```

### Tracking on Thank You Page
- [ ] **GA4 conversion event** fires ✅
- [ ] **Form submission event** tracked ✅
- [ ] **Thank you page view** tracked
- [ ] **Conversion goal** completed

---

## 🔧 Form Implementation

### Current Forms

**Quote Form (Homepage):**
- Forminator Form ID: 13 ✅
- Location: Homepage (#quote section)
- Fields: Name, Email, Phone, Insurance Type, Additional Details ✅
- Tracking: GA4 events implemented ✅

**Contact Form:**
- Forminator Form ID: 18 ✅
- Location: Contact page
- Fields: Name, Email, Phone, Message
- Tracking: GA4 events implemented ✅

### Form Validation

**Client-Side Validation:**
- Required fields marked with asterisk (*)
- Email format validation
- Phone format validation (optional formatting)
- Real-time error messages
- Clear error styling

**Server-Side Validation:**
- Forminator handles server-side validation ✅
- Spam protection (honeypot, reCAPTCHA if needed)
- Email validation
- Phone validation

---

## 📝 Form Field Specifications

### Name Field
- **Type:** Text input
- **Required:** Yes
- **Validation:** Non-empty, reasonable length
- **Placeholder:** "First Name" / "Last Name"
- **Mobile:** Full width, large touch target

### Email Field
- **Type:** Email input
- **Required:** Yes
- **Validation:** Valid email format
- **Placeholder:** "your.email@example.com"
- **Mobile:** Full width, email keyboard

### Phone Field
- **Type:** Tel input
- **Required:** Yes (for quote form)
- **Validation:** Phone number format
- **Placeholder:** "(605) 555-1234"
- **Mobile:** Full width, numeric keyboard
- **Formatting:** Auto-format as user types (optional)

### Insurance Type Field
- **Type:** Select/Dropdown
- **Required:** Yes (for quote form)
- **Options:**
  - Auto Insurance
  - Home Insurance
  - Business Insurance
  - Farm Insurance
  - Life Insurance
  - Health Insurance
  - Multiple Types
- **Placeholder:** "Select Insurance Type"
- **Mobile:** Native dropdown (easy to use)

### Zip Code Field
- **Type:** Text input (numeric)
- **Required:** Yes (for quote form)
- **Validation:** 5-digit zip code
- **Placeholder:** "57103"
- **Mobile:** Full width, numeric keyboard
- **Purpose:** Local targeting, carrier matching

### Message/Additional Details Field
- **Type:** Textarea
- **Required:** No (optional)
- **Placeholder:** "Tell us about your insurance needs..."
- **Character limit:** 180 characters (if needed)
- **Mobile:** Full width, resizable

---

## 🎨 Form Styling Requirements

### Current Styling ✅
- **Border radius:** 12px (rounded corners)
- **Border color:** #dee2e6 (subtle grey)
- **Field padding:** 13px 16px (comfortable height)
- **Focus state:** Teal border (#66c4cc)
- **Button:** Centered, gradient teal background
- **Two-column layout:** First/Last Name, Phone/Email

### Mobile Optimizations
- **Full width fields** on mobile
- **Large touch targets** (minimum 44px height)
- **Readable font size** (minimum 16px)
- **Adequate spacing** between fields
- **No horizontal scrolling**

---

## ✅ Form Checklist

### Before Launch
- [ ] All required fields present
- [ ] Optional fields clearly marked
- [ ] Mobile-responsive design
- [ ] Form validation working
- [ ] Error messages clear
- [ ] Success message/redirect working
- [ ] Thank you page created
- [ ] GA4 tracking implemented ✅
- [ ] Conversion goals set up
- [ ] Email notifications configured
- [ ] Spam protection enabled
- [ ] Form tested on mobile devices
- [ ] Form tested on desktop
- [ ] Form tested across browsers

### Ongoing Monitoring
- [ ] Track form completion rate
- [ ] Monitor form abandonment
- [ ] Review form submissions
- [ ] Check email delivery
- [ ] Test form regularly
- [ ] Update fields as needed

---

## 🔗 Related Documentation

- **Form Testing Guide:** See `FORM-TESTING-GUIDE.md`
- **Google Analytics Setup:** See `GOOGLE-ANALYTICS-SETUP.md`
- **Form Styling:** See `style.css` (search for `.forminator-`)

---

*Forms are optimized for conversion with minimal friction and maximum tracking capabilities.*

