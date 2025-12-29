# SEO Structure Guide - Sperling Insurance

**Last Updated:** December 29, 2025  
**Purpose:** Define SEO-optimized page structure for all site pages

---

## 📋 Overview

This document defines the exact structure and content requirements for each page type to maximize SEO performance and user experience.

---

## 🏠 Home Page Structure

### Hero Section

**H1 Tag:**
- Format: Local + trust-focused
- Example: "Protecting Sioux Falls Families, Farms, and Businesses for Over 20 Years"
- Must include location (Sioux Falls) and trust signal (years in business)

**Subhead:**
- Three key points:
  1. Independent agency
  2. Multiple carriers
  3. Local service

**CTA Buttons:**
- **Primary:** "Get a Quote" (links to #quote or /quote/)
- **Secondary:** "Call Now" (tel: link)

---

### Services Overview Section

**Layout:** Card layout (grid)

**Services to Feature:**
1. **Auto Insurance**
   - Icon: Car/automobile icon
   - Short benefit-driven description
   - Link to: `/auto-insurance/`

2. **Home Insurance**
   - Icon: Home icon
   - Short benefit-driven description
   - Link to: `/home-insurance/`

3. **Life Insurance**
   - Icon: Life/heart icon
   - Short benefit-driven description
   - Link to: `/life-insurance/`

4. **Business Insurance**
   - Icon: Building/briefcase icon
   - Short benefit-driven description
   - Link to: `/business-insurance/`

**Each Card Must Include:**
- Icon (Font Awesome)
- Short benefit-driven description (1-2 sentences)
- Link to service page
- Hover effect for engagement

---

### Why Sperling Section

**Format:** Bullet-driven list

**Key Points:**
- ✅ Independent agent advantage
- ✅ Personalized coverage
- ✅ Local relationships
- ✅ Claims support assistance

**Design:** 
- Use icons for visual appeal
- Two-column layout on desktop
- Single column on mobile

---

### Location Highlight Section

**Locations:**
1. **Sioux Falls**
   - Address: 220 S. Bahnson Ave., Sioux Falls, SD 57103
   - Phone: (605) 334-7350
   - Link to: `/contact/sioux-falls-office/` or `/contact/#sioux-falls`

2. **Garretson**
   - Phone: (605) 594-2251
   - Link to: `/contact/garretson-office/` or `/contact/#garretson`

**Design:**
- Location cards with map pins
- Click-to-call buttons
- Links to location pages

---

### Trust Signals Section

**Elements to Include:**
- ✅ Testimonials (even short ones)
- ✅ Community involvement (if any)
- ✅ Years in business (20+ years)
- ✅ Number of carriers
- ✅ Local expertise

**Format:**
- Stats/numbers prominently displayed
- Testimonial quotes (if available)
- Community badges/awards (if any)

---

### Bottom CTA Section

**Requirements:**
- Strong, simple message
- Reinforces local help
- Clear call-to-action
- Multiple contact options (form, phone)

---

## 📄 Service Pages Structure

### Page Template Requirements

**URL Format:** `/auto-insurance/`, `/home-insurance/`, etc.

**Template:** `page-service.php` (existing) or custom service page templates

---

### Section 1: H1 + Intro

**H1 Tag Format:**
- `"[Service] Insurance in [City, State]"`
- Examples:
  - "Auto Insurance in Sioux Falls, South Dakota"
  - "Home Insurance in Sioux Falls, SD"
  - "Business Insurance in Sioux Falls, South Dakota"

**Intro Content (2-3 paragraphs):**
- ✅ Local relevance (mention Sioux Falls, South Dakota)
- ✅ Plain English (no jargon)
- ✅ Why it matters (benefits to user)
- ✅ Include location keywords naturally

**Example Structure:**
```
Paragraph 1: What the service is + local context
Paragraph 2: Why it's important for Sioux Falls residents
Paragraph 3: How Sperling can help (transition to next section)
```

---

### Section 2: What This Coverage Is

**Purpose:** Educational, not salesy

**Format:**
- Clear explanation of coverage
- Bullet points for key features
- Common misunderstandings addressed

**Content Requirements:**
- Define the insurance type clearly
- Explain what's covered
- Explain what's not covered (if relevant)
- Address common questions/misconceptions

**Example Topics:**
- What does [service] insurance cover?
- What's typically included?
- What's optional coverage?
- Common myths debunked

---

### Section 3: Why This Coverage Matters

**Purpose:** Real-world relevance

**Format:**
- Real-world risks explained
- Local examples (weather, accidents, etc.)
- South Dakota-specific concerns

**Content Requirements:**
- Local risks (hail, winter storms, etc.)
- Real scenarios
- Statistics (if available)
- Why it matters for Sioux Falls residents

**Example Topics:**
- Weather risks in South Dakota
- Common claims in the area
- Local statistics
- Seasonal considerations

---

### Section 4: Why Sperling

**Purpose:** Differentiate from competitors

**Key Points:**
- ✅ Independent advantage
- ✅ Carrier flexibility
- ✅ Local service
- ✅ Personalized approach

**Format:**
- Bullet points or short paragraphs
- Icons for visual appeal
- Specific benefits

**Content Ideas:**
- We shop multiple carriers
- Local agents who understand South Dakota
- Personalized service
- Claims assistance
- Years of experience

---

### Section 5: CTA Block

**Requirements:**
- Quote button (prominent)
- Phone number (click-to-call)
- Minimal friction (easy to contact)

**Design:**
- Large, clear CTA button
- Phone number with tel: link
- Form option (if applicable)
- Multiple contact methods

---

### Section 6: FAQs

**Requirements:**
- 3-6 FAQs per page
- SEO-friendly wording (include keywords naturally)
- Honest answers (not overly salesy)

**FAQ Format:**
- Question as H3 or accordion header
- Answer in plain English
- Include location keywords where natural
- Link to related pages if relevant

**Example FAQs:**
- "How much does [service] insurance cost in Sioux Falls?"
- "What's the best [service] insurance for South Dakota residents?"
- "Do I need [service] insurance in Sioux Falls?"
- "How do I get a quote for [service] insurance?"

**Implementation:**
- Use accordion (Bootstrap) for clean display
- Schema markup for FAQ (JSON-LD)
- Mobile-friendly

---

## 📍 Location Pages Structure

### Required Elements

**H1 Tag:**
- Format: `"[Service] Insurance in [City]"` or `"Sperling Insurance - [City] Office"`
- Example: "Sperling Insurance - Sioux Falls Office"

**City-Specific Intro Copy:**
- 2-3 paragraphs about serving that city
- Local context and relevance
- Neighborhood mentions if appropriate

**Full Address:**
- Complete street address
- City, State, ZIP
- Format: "220 S. Bahnson Ave., Sioux Falls, SD 57103"

**Phone Number:**
- Display prominently
- Click-to-call enabled
- Format: (605) 334-7350

**Embedded Google Map:**
- Google Maps embed
- Shows exact location
- Interactive map

**Office Hours (if applicable):**
- Days and times
- Format: "Monday - Friday: 8:00 AM - 5:00 PM"

---

### Localized Content

**Neighborhoods:**
- Mention nearby neighborhoods
- Local areas served
- Example: "Serving Sioux Falls, Brandon, Harrisburg, Tea, Dell Rapids..."

**Nearby Towns:**
- List surrounding communities
- Expand service area context
- Example: "Also serving Garretson, Baltic, and Eastern South Dakota"

**Schools / Landmarks:**
- Local points of reference
- Help with local SEO
- Example: "Near [School Name]" or "Close to [Landmark]"

**Local Risks:**
- City/region-specific risks
- Weather patterns
- Example: "Protecting Sioux Falls homes from hail, winter storms, and severe weather"

---

### Services Offered Section

**Format:** Bullet list

**Requirements:**
- List all services available at that location
- Internal links to service pages
- Format: "• [Service Name] - [Link]"

**Example:**
- • Auto Insurance - [Link to auto insurance page]
- • Home Insurance - [Link to home insurance page]
- • Business Insurance - [Link to business insurance page]
- • Farm Insurance - [Link to farm insurance page]

---

### CTA Section

**Primary CTA:**
- Format: "Get a Quote in [City]"
- Example: "Get a Quote in Sioux Falls"
- Links to quote form or contact page

**Secondary CTA:**
- Click-to-call button
- Phone number prominently displayed
- "Call [City] Office" button

---

## 🎯 SEO Best Practices

### H1 Tags
- ✅ One H1 per page
- ✅ Include location (Sioux Falls, South Dakota)
- ✅ Include service name (if service page)
- ✅ Natural, readable (not keyword-stuffed)

### Internal Linking
- ✅ Link to related service pages
- ✅ Link to location pages
- ✅ Link to contact/quote pages
- ✅ Use descriptive anchor text

### Content Requirements
- ✅ Minimum 300-500 words per page
- ✅ Location keywords naturally included
- ✅ Service keywords naturally included
- ✅ Plain English (no jargon)
- ✅ User-focused (not salesy)

### Schema Markup
- ✅ LocalBusiness schema for location pages
- ✅ FAQ schema for FAQ sections
- ✅ Service schema for service pages
- ✅ Organization schema for homepage

### Images
- ✅ Alt text with location keywords
- ✅ Descriptive file names
- ✅ Local images when possible
- ✅ Optimized file sizes

---

## 📝 Implementation Checklist

### Home Page
- [ ] H1 includes location + trust signal
- [ ] Subhead with 3 key points
- [ ] Services cards with links
- [ ] Why Sperling section
- [ ] Location highlights
- [ ] Trust signals
- [ ] Bottom CTA

### Service Pages
- [ ] H1: "[Service] Insurance in Sioux Falls, South Dakota"
- [ ] 2-3 paragraph intro with local relevance
- [ ] "What This Coverage Is" section
- [ ] "Why This Coverage Matters" section
- [ ] "Why Sperling" section
- [ ] CTA block
- [ ] 3-6 FAQs with schema

### Location Pages
- [ ] H1: City-specific
- [ ] City-specific intro copy
- [ ] Full address
- [ ] Phone number (click-to-call)
- [ ] Google Map embed
- [ ] Office hours
- [ ] Neighborhoods/towns mentioned
- [ ] Local risks mentioned
- [ ] Services offered (with links)
- [ ] City-specific CTA

---

## 🔗 Related Documentation

- **Site Structure:** See `SITE-STRUCTURE.md`
- **Rank Math SEO:** See `RANK-MATH-QUICK-FIX.md`
- **Farm Insurance Example:** See `page-farm-insurance.php`

---

*This structure guide ensures all pages are optimized for both SEO and user experience while maintaining consistency across the site.*

