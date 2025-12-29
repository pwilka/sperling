# WP-CLI Commands for Page Creation

**Use these commands once you have WP-CLI access via LocalWP**

---

## Step 1: Open LocalWP Terminal

1. Open **LocalWP**
2. Right-click your **"sperling"** site
3. Click **"Open Site Shell"**
4. Terminal opens with WP-CLI ready!

---

## Step 2: Run the Page Creation Script

I've created a PHP script that will create all pages automatically. You can run it via WP-CLI:

```bash
wp eval-file create-all-pages.php
```

**OR** upload `create-all-pages.php` to your WordPress root and access via browser:
```
https://sperlinginsurance.local/create-all-pages.php
```

---

## Step 3: Manual WP-CLI Commands (Alternative)

If you prefer to create pages one by one, here are the commands:

### Create Auto Insurance Page
```bash
wp post create --post_type=page --post_title="Auto Insurance" --post_name="auto-insurance" --post_status=publish --meta_input='{"_wp_page_template":"page-auto-insurance.php"}'
```

### Create Home Insurance Page
```bash
wp post create --post_type=page --post_title="Home Insurance" --post_name="home-insurance" --post_status=publish --meta_input='{"_wp_page_template":"page-home-insurance.php"}'
```

### Create All Pages (Bulk)
```bash
# Personal Insurance
wp post create --post_type=page --post_title="Boat & RV Insurance" --post_name="boat-rv-insurance" --post_status=publish --meta_input='{"_wp_page_template":"page-boat-rv-insurance.php"}'
wp post create --post_type=page --post_title="Motorcycle & ATV Insurance" --post_name="motorcycle-atv-insurance" --post_status=publish --meta_input='{"_wp_page_template":"page-motorcycle-atv-insurance.php"}'
wp post create --post_type=page --post_title="Life Insurance" --post_name="life-insurance" --post_status=publish --meta_input='{"_wp_page_template":"page-life-insurance.php"}'
wp post create --post_type=page --post_title="Health Insurance" --post_name="health-insurance" --post_status=publish --meta_input='{"_wp_page_template":"page-health-insurance.php"}'
wp post create --post_type=page --post_title="Medicare Supplements" --post_name="medicare-supplements" --post_status=publish --meta_input='{"_wp_page_template":"page-medicare-supplements.php"}'
wp post create --post_type=page --post_title="Umbrella Insurance" --post_name="umbrella-insurance" --post_status=publish --meta_input='{"_wp_page_template":"page-umbrella-insurance.php"}'
wp post create --post_type=page --post_title="Renters Insurance" --post_name="renters-insurance" --post_status=publish --meta_input='{"_wp_page_template":"page-renters-insurance.php"}'
wp post create --post_type=page --post_title="Landlord Insurance" --post_name="landlord-insurance" --post_status=publish --meta_input='{"_wp_page_template":"page-landlord-insurance.php"}'
wp post create --post_type=page --post_title="Inland Marine Insurance" --post_name="inland-marine" --post_status=publish --meta_input='{"_wp_page_template":"page-inland-marine.php"}'

# Farm & Agricultural
wp post create --post_type=page --post_title="Rural Property Insurance" --post_name="rural-property-insurance" --post_status=publish --meta_input='{"_wp_page_template":"page-rural-property-insurance.php"}'
wp post create --post_type=page --post_title="Farm Inland Marine Insurance" --post_name="farm-inland-marine" --post_status=publish --meta_input='{"_wp_page_template":"page-farm-inland-marine.php"}'

# Business & Commercial
wp post create --post_type=page --post_title="Business Insurance" --post_name="business-insurance" --post_status=publish --meta_input='{"_wp_page_template":"page-business-insurance.php"}'
wp post create --post_type=page --post_title="BOP Insurance" --post_name="bop-insurance" --post_status=publish --meta_input='{"_wp_page_template":"page-bop-insurance.php"}'
wp post create --post_type=page --post_title="General Liability Insurance" --post_name="general-liability-insurance" --post_status=publish --meta_input='{"_wp_page_template":"page-general-liability-insurance.php"}'
wp post create --post_type=page --post_title="Contractors Insurance" --post_name="contractors-insurance" --post_status=publish --meta_input='{"_wp_page_template":"page-contractors-insurance.php"}'
wp post create --post_type=page --post_title="Workers Compensation Insurance" --post_name="workers-compensation" --post_status=publish --meta_input='{"_wp_page_template":"page-workers-compensation.php"}'
wp post create --post_type=page --post_title="Commercial Auto Insurance" --post_name="commercial-auto-insurance" --post_status=publish --meta_input='{"_wp_page_template":"page-commercial-auto-insurance.php"}'
wp post create --post_type=page --post_title="Business Life Insurance" --post_name="business-life-insurance" --post_status=publish --meta_input='{"_wp_page_template":"page-business-life-insurance.php"}'
wp post create --post_type=page --post_title="Business Health Insurance" --post_name="business-health-insurance" --post_status=publish --meta_input='{"_wp_page_template":"page-business-health-insurance.php"}'
wp post create --post_type=page --post_title="Builders Risk Insurance" --post_name="builders-risk-insurance" --post_status=publish --meta_input='{"_wp_page_template":"page-builders-risk-insurance.php"}'

# Supporting Pages
wp post create --post_type=page --post_title="About Us" --post_name="about-us" --post_status=publish --meta_input='{"_wp_page_template":"page-about.php"}'
wp post create --post_type=page --post_title="Privacy Policy" --post_name="privacy-policy" --post_status=publish --meta_input='{"_wp_page_template":"page-privacy-policy.php"}'
wp post create --post_type=page --post_title="Terms of Use" --post_name="terms-of-use" --post_status=publish --meta_input='{"_wp_page_template":"page-terms-of-use.php"}'
```

---

## Step 4: Verify Pages Were Created

```bash
wp post list --post_type=page --format=table
```

---

## Step 5: Set Up Navigation Menu (Optional)

```bash
# Create menu
wp menu create "Main Navigation"

# Add pages to menu (replace IDs with actual page IDs)
wp menu item add-post main-navigation <page-id> --title="Auto Insurance"
wp menu item add-post main-navigation <page-id> --title="Home Insurance"
# ... etc
```

---

## Quick Start (Easiest Method)

**Just use the PHP script I created:**

1. Upload `create-all-pages.php` to your WordPress root
2. Access via browser: `https://sperlinginsurance.local/create-all-pages.php`
3. All pages created automatically!
4. **Delete the file after running** (security)

---

*The PHP script method is easiest - it does everything automatically!*

