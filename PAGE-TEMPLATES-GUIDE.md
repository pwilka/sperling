# Page Templates Guide

This guide explains how to use the Service, Solution, and Contact page templates for your Sperling Insurance theme.

## Available Templates

1. **Service Page** (`page-service.php`) - For service category pages
2. **Solution Page** (`page-solution.php`) - For specific insurance solution pages
3. **Contact Page** (`page-contact.php`) - For the contact page with locations and map

---

## How to Use Page Templates

### Step 1: Create a New Page in WordPress

1. Go to **Pages → Add New** in WordPress admin
2. Enter your page title (e.g., "Personal Insurance", "Auto Insurance")
3. In the **Page Attributes** meta box (right sidebar), select the template:
   - **Service Page** for category pages
   - **Solution Page** for specific solution pages
4. Click **Publish**

### Step 2: Configure with Advanced Custom Fields (ACF)

If you have ACF installed (Phase 2 plugin), you can create flexible page content using custom fields.

#### For Service Pages:

**Recommended ACF Fields:**
- `hero_title` (Text) - Main hero title (defaults to page title)
- `hero_subtitle` (Text) - Subtitle below main title
- `hero_description` (Textarea) - Hero section description
- `service_icon` (Text) - Font Awesome icon class (e.g., `fa-home`, `fa-building`)
- `coverages` (Repeater) with sub-fields:
  - `title` (Text)
  - `description` (Textarea)
  - `icon` (Text) - Font Awesome icon
- `features_list` (Repeater) with sub-fields:
  - `title` (Text)
  - `description` (Text)
  - `icon` (Text) - Font Awesome icon
- `cta_text` (Text) - Call-to-action button text
- `cta_link` (Text/URL) - Link for CTA button

#### For Solution Pages:

**Recommended ACF Fields:**
- `hero_title` (Text)
- `hero_subtitle` (Text)
- `solution_icon` (Text) - Font Awesome icon class
- `intro_text` (Wysiwyg) - Introduction content
- `benefits` (Repeater) with sub-fields:
  - `title` (Text)
  - `description` (Textarea)
  - `icon` (Text)
- `coverage_details` (Repeater) with sub-fields:
  - `title` (Text)
  - `description` (Textarea)
  - `icon` (Text)
- `why_choose` (Wysiwyg) - "Why Choose" section content
- `faq_items` (Repeater) with sub-fields:
  - `question` (Text)
  - `answer` (Wysiwyg)

---

## Without ACF (Basic Usage)

The templates work **without ACF** too! Simply:

1. Create a page and select the template
2. Add your content in the WordPress editor
3. The template will use:
   - Page title for hero
   - Page content for main sections
   - Default icons and styling

---

## Example: Creating a "Personal Insurance" Service Page

1. **Pages → Add New**
2. Title: "Personal Insurance"
3. Select template: **Service Page**
4. (Optional with ACF) Add fields:
   - Hero Title: "Personal Insurance"
   - Service Icon: `fa-home`
   - Coverages:
     - Auto Insurance
     - Home Insurance
     - Boat & RV Insurance
     - Life & Health Insurance
5. Publish

---

## Example: Creating an "Auto Insurance" Solution Page

1. **Pages → Add New**
2. Title: "Auto Insurance"
3. Select template: **Solution Page**
4. (Optional with ACF) Add fields:
   - Hero Title: "Auto Insurance"
   - Solution Icon: `fa-car`
   - Benefits:
     - Comprehensive Coverage
     - Competitive Rates
     - Multiple Carriers
   - Coverage Details:
     - Liability Coverage
     - Collision Coverage
     - Comprehensive Coverage
5. Publish

---

## Font Awesome Icons

Use any Font Awesome icon class. Examples:
- `fa-home` - Home/Personal
- `fa-car` - Auto
- `fa-building` - Business
- `fa-tractor` - Farm
- `fa-shield-alt` - General Insurance
- `fa-heart` - Health
- `fa-users` - Life Insurance
- `fa-briefcase` - Commercial

See full list: https://fontawesome.com/icons

---

## Template Structure

### Service Page Sections:
1. Hero Section (with icon, title, description)
2. Coverage Options (repeater or page content)
3. Features/Benefits List
4. CTA Section

### Solution Page Sections:
1. Hero Section (with icon and CTA card)
2. Benefits Grid
3. Coverage Details
4. Why Choose Section
5. FAQ Accordion
6. CTA Section

---

## Contact Page Template

### How to Use:

1. **Pages → Add New**
2. Title: "Contact" or "Contact Us"
3. Select template: **Contact Page**
4. Publish

### Adding Google My Business Map:

**Option 1: Using ACF Field (Recommended)**
1. Create an ACF field group for Contact Page
2. Add field: `gmb_map_embed` (Textarea/Code Area)
3. In WordPress, go to your Contact page
4. Get embed code from Google Maps:
   - Visit [Google Maps](https://www.google.com/maps)
   - Search for "220 S. Bahnson Ave, Sioux Falls, SD"
   - Click "Share" → "Embed a map"
   - Copy the iframe code
5. Paste into the ACF field "GMB Map Embed"

**Option 2: Direct Code Edit**
1. Edit the Contact page
2. Switch to HTML/Code editor
3. Find the placeholder section in `page-contact.php`
4. Replace the placeholder with your Google Maps iframe code

### Contact Page Features:

- **Two Office Locations** - Sioux Falls and Garretson with full contact info
- **Google Maps Embed Section** - Ready for GMB map iframe
- **Office Hours** (Optional ACF field)
- **Contact Form** - Integrates with WPForms or shows fallback HTML form
- **Quick Contact CTA** - Phone numbers and quote button

### ACF Fields for Contact Page:

- `hero_title` (Text) - Page title (default: "Contact Sperling Insurance")
- `hero_subtitle` (Text) - Subtitle text
- `gmb_map_embed` (Textarea) - Google Maps embed iframe code
- `office_hours` (Textarea/Repeater) - Office hours information
- `show_contact_form` (True/False) - Toggle contact form visibility
- `contact_form_id` (Number) - WPForms form ID (default: 1)

---

## Tips

- **Service Pages** are best for category pages (Personal, Business, Farm)
- **Solution Pages** are best for specific products (Auto, Home, BOP)
- Use ACF for maximum flexibility
- Templates gracefully degrade if ACF fields aren't set
- All templates are mobile-responsive via Bootstrap 5

---

## Next Steps

1. Install ACF if you haven't (Phase 2 plugin)
2. Create ACF field groups for Service and Solution pages
3. Create your first service/solution page
4. Customize as needed!

