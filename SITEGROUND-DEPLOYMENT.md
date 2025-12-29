# 🚀 SiteGround Deployment Instructions

**Deploy the setup script to your live SiteGround site**

---

## ⚡ Quick Steps (5 Minutes)

### Step 1: Access SiteGround File Manager

1. **Log into SiteGround**
2. Go to **"Site Tools"**
3. Click **"File Manager"** in the left menu
4. Navigate to your WordPress root directory:
   - Usually: `public_html/` (for main domain)
   - Or: `public_html/your-site-folder/` (if in subfolder)

### Step 2: Upload the Script

1. **In File Manager**, navigate to your WordPress root
   - Look for files like: `wp-config.php`, `wp-content`, `wp-admin`
   - This is your WordPress root directory

2. **Upload `setup-complete-site.php`**:
   - Click **"Upload Files"** button (top toolbar)
   - Select `setup-complete-site.php` from your computer
   - Wait for upload to complete

### Step 3: Run the Script

1. **Make sure you're logged into WordPress admin** on your live site
2. **Visit in browser:**
   ```
   https://sperlinginsurance.com/setup-complete-site.php
   ```
   (Replace with your actual domain)

3. **You'll see a progress page** showing all pages being created
4. **Wait for completion** - it will show "Setup Complete!"

### Step 4: Delete the Script (IMPORTANT!)

**After the script runs successfully:**
1. Go back to **SiteGround File Manager**
2. Find `setup-complete-site.php`
3. **Right-click → Delete** (or select and click Delete button)
4. **Confirm deletion**

**This is important for security!**

---

## ✅ What Gets Created

- ✅ All 24+ service pages
- ✅ Navigation menus configured
- ✅ Templates assigned
- ✅ Proper URLs/slugs
- ✅ Everything live on your site!

---

## 🎯 After Running

1. **Check WordPress Admin** → Pages → See all new pages
2. **Check Appearance → Menus** → Menu is configured
3. **Visit your site** → All pages should be live!
4. **Test a few pages** to make sure they're working

---

## 🔒 Security Notes

- **Delete the script immediately** after running
- The script requires admin login, but still delete it
- Never leave setup scripts on a live site

---

## 🆘 Troubleshooting

**"You must be logged in as administrator"**
- Make sure you're logged into WordPress admin
- Try accessing the script while logged in

**"Template not found" errors**
- Make sure all template files are uploaded to your theme
- Check that your theme is active
- Verify files are in: `wp-content/themes/sperling/`

**Pages not showing**
- Check WordPress Admin → Pages
- Verify pages are published
- Clear SiteGround caching if enabled

---

## 📋 Alternative: Test on LocalWP First (Recommended)

**Before deploying to live site:**

1. **Test on LocalWP first:**
   - Upload script to LocalWP site
   - Run it and verify everything works
   - Then deploy to SiteGround

2. **Deploy theme files to SiteGround:**
   - Upload all your theme files to SiteGround
   - Make sure theme is active
   - Then run the setup script

---

## 🚀 Ready to Deploy?

1. Upload `setup-complete-site.php` to SiteGround File Manager
2. Visit the URL while logged into WordPress admin
3. Watch it create all pages
4. Delete the script immediately after

**That's it! Your pages will be live! 🎉**

