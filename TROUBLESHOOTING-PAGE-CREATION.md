# Troubleshooting: Pages Not Created

**Let's get your pages created!**

---

## Step 1: Check if Script is Deployed

1. **Go to SiteGround File Manager:**
   - Site Tools → File Manager
   - Navigate to: `public_html/` (WordPress root)
   - Look for: `setup-complete-site.php`

2. **If the file is NOT there:**
   - The deployment might still be running
   - Check GitHub Actions: `https://github.com/pwilka/sperling/actions`
   - Wait for deployment to complete

3. **If the file IS there:**
   - Proceed to Step 2

---

## Step 2: Run the Script

1. **Make sure you're logged into WordPress admin:**
   - Visit: `https://sperlinginsurance.com/wp-admin`
   - Log in if needed

2. **Run the setup script:**
   - Visit: `https://sperlinginsurance.com/setup-complete-site.php`
   - **Important:** You MUST be logged into WordPress admin first!

3. **What you should see:**
   - A page titled "Sperling Insurance - Complete Site Setup"
   - Progress messages like "✓ Created: Auto Insurance"
   - Final "Setup Complete!" message

---

## Step 3: If Script Shows Error

**"You must be logged in as administrator"**
- Make sure you're logged into WordPress admin
- Try opening the script URL in a new tab while logged in
- Clear browser cache and cookies, then try again

**"Template not found" errors**
- Check that theme files are deployed
- Verify theme is active: WordPress Admin → Appearance → Themes
- Check files exist: `wp-content/themes/sperling/`

**White screen or 404 error**
- Script might not be in the right location
- Check it's in `public_html/` (WordPress root)
- Verify file permissions allow execution

---

## Step 4: Manual Check

**After running script, verify:**

1. **WordPress Admin → Pages:**
   - Should see 24+ new pages
   - All should be "Published"

2. **Appearance → Menus:**
   - Should see "Primary Menu" created
   - Should have pages added to it

3. **Visit your site:**
   - Navigation should show new pages
   - Pages should be accessible

---

## Step 5: If Still Not Working

**Alternative: Create pages manually via WordPress admin**

1. Go to **Pages → Add New**
2. Create pages one by one
3. Assign templates in Page Attributes
4. Add to menu manually

**OR let me know what error you see and I'll help fix it!**

